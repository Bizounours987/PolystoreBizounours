<?php

namespace view;

class CategoryView {
   
    public function renderAll(array $items){
        echo "<ul>";
        foreach($items as $item) {
            echo '<li><a href ="/category/'.$item->getId().'">'.$item->getLabel().'</a></li>';    
        }
        echo "</ul>";
    }
    // ça fonctionne
    public function renderOne($item,$products){
        if ($item) {
            echo "<h2>Détails de la catégorie</h2>";
            echo "<p>ID : " . $item->getId() . "</p>";
            echo "<p>Label: " . $item->getLabel() . "</p>";

            // Affichage des produits de la catégorie
            echo "<h3>Produits dans cette catégorie</h3>";
            if (!empty($products)) {
                echo "<ul>";
                foreach ($products as $product) {
                    echo '<li><a href="/product/' . $product->getId() . '">' . $product->getLabel() . '</a></li>';
                }
                echo "</ul>";
            } else {
                echo "<p>Aucun produit trouvé pour cette catégorie.</p>";
            }
        } else {
            echo "<p>Catégorie non trouvée</p>";
        }
       
    
    }
    

}
