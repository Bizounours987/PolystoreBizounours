<?php
namespace controller;
use teachframe\IO;
use teachframe\PDOWrapper;
use view\AuthView;
use \PDO;

class AuthController {
  public function getForm(string $message = '') {
    AuthView::renderForm($message);
  }
  
  public function submitForm() {
    $codes = IO::getInputs(['email:*e', 'password:*s']);
    $cnx = PDOWrapper::getInstance();
    $stmt = $cnx->prepare("SELECT * FROM Auth WHERE email = :email AND password = :password");
    $stmt->bindParam(':email', $codes->email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $codes->password, PDO::PARAM_STR);
    $stmt->execute();
    $auth = $stmt->fetch(PDO::FETCH_OBJ);
    if ($auth != false) { //codes d'accès valides
      session_start();
      $_SESSION['auth_id'] = $auth->id;
      if (isset($_SESSION['redirect'])) {
        header('Location: ' . $_SESSION['redirect']);
        unset($_SESSION['redirect']);
      } else {
        header('Location: /');
      }
    } else { //erreur d'email ou mot de passe
      $this->getForm('Erreur d\'email ou de mot de passe.');
    }
  }
  
  public function disconnect() {
    if ($this->isAuthenticated()) {
      session_destroy();
      $this->getForm('Vous êtes déconnecté');
    } else {
      $this->getForm('Vous n\'étiez pas connecté');
    }
  }
  
  public function isAuthenticated(): bool {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    return isset($_SESSION['auth_id']);
  }
  
  public function requireAuthentication() {
    if (!$this->isAuthenticated()) {
      $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
      header('Location: /auth');
      die();
    }
  }
}
