<?php
namespace controller;

use model\StoreCollection;

class StoreController {

    // Fonction pour afficher la liste des boutiques
    public function displayStores() {
        // Instancier la collection de boutiques
        $storeCollection = new StoreCollection();

        // Récupérer les boutiques depuis la méthode getStores() du modèle
        $stores = $storeCollection->getStores();

        // Inclure la vue avec les boutiques (par exemple index.php)
        include __DIR__ . '/../view/index.php';
    }
}
