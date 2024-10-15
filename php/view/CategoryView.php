<?php

namespace view;

class CategoryView {
   
    public function renderAll(array $items){
        echo "<ul>";
        foreach($items as $item) {
            echo "<li>".$item->getLabel()."</li>";    
        }
        echo "</ul>";
    }
    public function renderOne($item){
        if ($item){
            echo "<h2>Détails</h2>";
            echo "<p>ID : ".$item->getId(). "</p>";
            echo "<p>Label: ".$item->getLabel(). "</p>";

        } else{
            echo "Catégorie non trouvé";
        }
    }
    

}

