<?php
namespace controller;

use model\Store;
use teachframe\ORM;

class StoreController {

    // Fonction pour afficher la liste des boutiques
    public function getAll()  {
        $stores = ORM::getAll(Store::class);

        // Inclure la vue avec les boutiques (par exemple index.php)
        include 'view/StoreView.php';
    }
}
