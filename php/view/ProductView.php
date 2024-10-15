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
        //echo '<pre>'; var_dump($product);

        $cats = $product->getCategories();

        echo 'Liste des produits : ';
        echo '<dl>';
        echo '<dt>Reference :</dt><dd>' . $product->getReference() . '</dd>';
        echo '<dt>Label :</dt><dd>' . $product->getLabel() . '</dd>';
        echo '<dt>Prix à unité :</dt><dd>' . $product->getUnitPrice() . '</dd>';
        echo '<dt>Magasin :</dt><dd><a href="/store/' . $product->getStore()->getId() . '">' . $product->getStore()->getName() .'</a></dd>';
        
        if (count($cats) != 0) {
            echo "<dt>Liste des catégories du produit :</dt><dd><ul>";
               foreach ($cats as $cat) {
                    echo '<li><a href="/category/' . $cat->getId() . '">' . $cat->getLabel() . '</li>';
               }
            echo '</ul></dd>';
        }
        echo '</dl>';
    }

}







