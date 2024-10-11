<?php

namespace view;

use \model\Product;
use \model\Store;
use \controller\ProductController;
use teachframe\ORM;


class ProductView {

    public static function getAll($products) {

        if (empty($products)) {
            http_response_code(404);
            echo 'Aucune products trouvé.';
        } else {
            echo 'Liste des produits : ';
            echo "<ul>";
            foreach (ORM::getAll(Product::class, 'id, label') as $product) {
                echo '<li><a href = "/product/'.$product->getId() . '">' . $product->getLabel() . '</a></li>';
            }
            echo "</ul>";
        }
    }


    public static function getOne($product) {
    
        echo "View Product getOne\n";

        if (empty($product)) {
            http_response_code(404);
            echo "Pas d'information sur ce produit.";
        } else {

            $arch = $store->getStore();
            $archName = $arch->getName();
            
            echo '<dl>';
            echo '<dt>Reference :</dt><dd>' . $product->getReference() . '</dd>';
            echo '<dt>Label :</dt><dd>' . $product->getLabel() . '</dd>';
            echo '<dt>Prix à unité :</dt><dd>' . $product->getUnitPrice() . '</dd>';
            echo '<dt>Magasin :</dt><dd><a href="/archipelago/' . $product->getStore() . '">' . $arch->getName() .'</dd>';
            echo '</dl>';      
        }
    }

}







