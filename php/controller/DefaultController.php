<?php 

namespace controller;

class DefaultController {
    public function index(){
		echo password_hash('azerty', PASSWORD_ARGON2ID);
//        phpinfo();
        echo file_get_contents('view/accueil.html');
    }               
}
?>
