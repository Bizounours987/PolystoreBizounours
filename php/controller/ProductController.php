<?php
namespace controller;

use model\Product;
use \view\ProductView;
use teachframe\ORM;


class ProductController {

    function getAll() {

        $products = ORM::getAll(Product::class); //'model\Product'

        if (empty($products)) {
            echo 'Aucune products trouvé.';
        } else {
            ProductView::getAll($products); // Passer les produits à la vue
        }
    }


    function getOne(int $id) {
        
        echo "Controller Product getOne\n";

        $product = ORM::getOne(Product::class, $id); //'model\Product'

        if (empty($product)) {
            echo "Pas d'information sur ce produit.";
        } else {
            echo "GOOD";
            ProductView::getOne($product); // Passer le produit à la vue
        }
    }


}
