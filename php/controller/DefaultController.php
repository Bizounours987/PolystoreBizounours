<?php 

namespace controller;

class DefaultController {
    public function index(){
        echo file_get_contents('view/index.html');
    }               
}
?>
