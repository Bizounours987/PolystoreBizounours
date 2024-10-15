<?php
namespace controller;

use model\StoreCollection;

class StoreController {

    // Fonction pour afficher la page des boutiques
    public function displayStores() {
        // Création d'une collection de boutiques
        $storeCollection = new StoreCollection();

        // Supposons que la méthode getStores() renvoie une liste des boutiques disponibles
        $stores = $storeCollection->getStores();

        // Afficher la vue (index.html par exemple)
        include __DIR__ . '/../view/index.php';
    }
}

