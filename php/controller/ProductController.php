<?php
namespace controller;

use model\Product;
use \view\ProductView;
use teachframe\ORM;


class ProductController {

    function getAll() {

        $products = ORM::getAll(Product::class); //'model\Product'
        ProductView::getAll($products); // Passer les produits à la vue
    
    }


    function getOne(int $id) {
        
        echo "Controller Product getOne\n";

        $product = ORM::getOne(Product::class, $id); //'model\Product'
        ProductView::getOne($product); // Passer le produit à la vue
    
    }


}
