<?php

namespace view;

use \model\Product;
use \model\Store;
use \controller\ProductController;
use teachframe\ORM;


class ProductView {

    public static function getAll($products) {

        echo 'Liste des produits : ';
        echo "<ul>";
        foreach ($products as $product) {
            echo '<li><a href = "/product/'.$product->getId() . '">' . $product->getLabel() . '</a></li>';
        }
            echo "</ul>";
    }


    public static function getOne($product) {
    
        echo "View Product getOne\n";

//            $store = ORM::getOne(Store::class, $product->getStore()); // Récupérer le magasin
//            $archName = $store->getName(); // Obtenir le nom du magasin
//            $arch = $store->getStore();
//            $archName = $arch->getName();
            
        echo '<dl>';
        echo '<dt>Reference :</dt><dd>' . $product->getReference() . '</dd>';
        echo '<dt>Label :</dt><dd>' . $product->getLabel() . '</dd>';
        echo '<dt>Prix à unité :</dt><dd>' . $product->getUnitPrice() . '</dd>';
//        echo '<dt>Magasin :</dt><dd><a href="/archipelago/' . $store->getId() . '">' . $archName .'</dd>';
        echo '</dl>';      
    }

}







