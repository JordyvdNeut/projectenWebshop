<?php
    require_once 'model/authLogic.php';
  
    class AuthController {
    public function __construct() {
        $this->authLogic = new AuthLogic();
        $this->auth = false;
    }
    
    public function __destruct() {}

    public function handleRequest() {
      try {
        $op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
        switch ($op) {
          case 'login':
          $this->login();
          break;
          case 'loggedIn':
          $this->loggedIn();
          break;
          default:
          $this->collectForm();
          break;
        }			
      } catch (ValidationException $e) {
        $errors = $e->getErrors();
      }
    }

    public function authRequest() {
      return $this->auth;
    }

    public function isAuthenticated() {
      return $this->auth = true;
    }

    public function collectForm() {
      include 'view/login/login.php';
    }

    public function login(){		
      $formData = $_REQUEST;
      $login = $this->authLogic->login($formData);
      var_dump($login);
      include 'view/login/loggingIn.php';
    }

    public function loggedIn(){
      $this->auth = true;
    }
    
  }
?>