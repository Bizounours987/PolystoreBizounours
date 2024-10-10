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
}

