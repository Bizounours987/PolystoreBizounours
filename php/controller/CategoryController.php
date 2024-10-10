<?php

namespace controller;

use teachframe\ORM;
use model\Category;
use view\CategoryView;

class CategoryController {

    private CategoryView $categoryView;

    public function __construct() {
        $this->categoryView = new CategoryView();
    }

    public function getAll() {
        $categories = ORM::getAll(Category::class);
        $this->categoryView->renderAll($categories);
    }

    public function getOne($id) {
        $category = ORM::getOne(Category::class, $id);
        $this->categoryView->renderOne($category);
    }


}

