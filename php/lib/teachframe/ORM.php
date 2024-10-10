<?php

namespace teachframe;
use \PDO;
use \ReflectionClass;
use \ReflectionProperty;

/**
* Class ORM
*
* Cette classe fournit des méthodes statiques pour interagir avec la base de données
* en utilisant le mapping relationnel objet.
* Contraintes :
*  - la classe du modèle doit avoir le même nom que la table ;
*  - la clé primaire de la table doit être 'id' ;
*  - le nom des attributs de la classe doit être identique à celui des champs ;
*  - les clés étrangères doivent être nommées 'idNomTable' et les attributs associés
    déclarés `NomClasse $nomClasse;` ;
*  - les collections doivent être déclarées `NomClasseCollection $nomClasseAupluriel;`.
*/
class ORM {
  /**
  * Récupère les enregistrements d'une table.
  *
  * @param string $modelClass classe modèle (avec namespace).
  * @param string $selectFields champs à récupérer (par défaut '*').
  * @param string|null $filter clause WHERE optionnelle pour filtrer les résultats.
  * @return tableau d'objets récupérés.
  */
  public static function getAll (string $modelClass, string $selectFields = '*', string $filter = null): array {
    $filter = ($filter != null ? ' WHERE ' . $filter : '');
    $stmt = PDOWrapper::getInstance()->query('SELECT ' . $selectFields . ' FROM ' . ORM::getBaseName($modelClass) . addslashes($filter));
    $collection = [];
    while ($item = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $collection[] = ORM::buildObj($modelClass, $item); //cut recursivity
    }
    return $collection;
  }

  /**
  * Récupère un enregistrement d'une table à partir de son identifiant.
  *
  * @param string $modelClass classe modèle (avec namespace).
  * @param mixed $id identifiant de l'enregistrement à récupérer.
  * @param bool $followLinks pour charger (par défaut) ou pas les données des objets liés.
  * @return objet récupéré ou null si non trouvé.
  */
  public static function getOne (string $modelClass, mixed $id, bool $followLinks = true): mixed {
    $filter = ' WHERE id = ' . (!is_int($id) ? '\'' . addslashes($id) . '\'' : $id);
    $stmt = PDOWrapper::getInstance()->query('SELECT * FROM ' . ORM::getBaseName($modelClass) . $filter);
    $obj = null;
    if ($item = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $obj = ORM::buildObj($modelClass, $item, $followLinks);
    }
    return $obj;
  }

  /**
  * Ajoute ou modifie un enregistrement.
  *
  * @param mixed $obj objet à insérer ou mettre à jour.
  * @return TRUE si un objet a été supprimé, FALSE si non trouvé.
  */
  public static function persist (mixed $obj) {
    $table = ORM::getBaseName(get_class($obj));
    $obj = ORM::getOne($objClass->getName(), $obj->getId(), false);
    if (null == $obj) {
        //TODO: INSERT INTO
    } else {
        //TODO: UPDATE
    }
  }

  /**
  * Supprime un enregistrement.
  *
  * @param mixed $obj objet à supprimer.
  * @return TRUE si un objet a été supprimé, FALSE si non trouvé.
  */
  public static function delete (mixed $obj) : bool {
    $table = ORM::getBaseName(get_class($obj));
    $filter = 'id = ' . (!is_int($obj->getId()) ? '\'' . $obj->getId() . '\'' : $obj->getId());
    return PDOWrapper::getInstance()->exec('DELETE FROM ' . $table . ' WHERE ' . $filter) == 1;
  }

  /**
  * Supprime plusieurs enregistrement d'une table.
  *
  * @param string $modelClass classe modèle (avec namespace).
  * @param string $filter clause WHERE pour sélectionner les enregistrements à supprimer.
  * @return le nombre d'enregistrements supprimés.
  */
  public static function deleteMany (string $modelClass, string $filter): int{
    return PDOWrapper::getInstance()->exec('DELETE FROM ' . ORM::getBaseName($modelClass) . ' WHERE ' . $filter);
  }

  private static function buildObj (string $modelClass, array $item, bool $followLinks = false) {
    $reflect = new ReflectionClass($modelClass);
    $properties = $reflect->getProperties();
    $obj = $reflect->newInstanceWithoutConstructor();
    foreach ($properties as $property) {
      $propertyName = $property->getName();
      if (array_key_exists($propertyName, $item)) {
        $property->setValue($obj, $item[$propertyName]);
      } else if ($followLinks) {
        if (!ORM::setSubObj($modelClass, $item, $obj, $property)) ORM::setSubCollection($modelClass, $item, $obj, $property);
      }
    }
    return $obj;
  }

  private static function setSubObj(string $modelClass, array $item, mixed $obj, ReflectionProperty $property): bool {
    $result = false;
    $externClassName = ucfirst($property->getName());
    $externClassField = 'id' . $externClassName;
    if (array_key_exists($externClassField, $item)) {
      $externObj = ORM::getOne(ORM::getDirName($modelClass) . '\\' . $externClassName, $item[$externClassField], false); //cut recursivity
      assert($externObj != null, 'DBMS integrity constraint error');
      $property->setValue($obj, $externObj);
      $result = true;
    }
    return $result;
  }

  private static function setSubCollection (string $modelClass, array $item, mixed $obj, ReflectionProperty $property): bool {
    $result = false;
    $typeName = (string) $property->getType();
    if (str_ends_with($typeName, 'Collection')) {
      $externClassField = 'id' . ORM::getBaseName($modelClass);
      $externClass = substr($typeName, 0, -10);
      $items = ORM::getAll($externClass, '*', $externClassField . ' = ' . $obj->getId());
      $property->setValue($obj, new $typeName($items));
      $result = true;
    }
    return $result;
  }

  private static function getBaseName(string $modelClass): string { // 'model\SomeClass' -> 'SomeClass'
    $classPath = explode('\\', $modelClass);
    return $classPath[count($classPath) - 1];
  }

  private static function getDirName(string $modelClass): string { // 'org\app\model\SomeClass' -> 'org\app\model'
    return join('\\', array_slice(explode('\\', $modelClass), 0, -1));
  }
}
