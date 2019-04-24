<?php
require_once 'model/authLogic.php';

class AuthController
{
  public function __construct()
  {
    $this->authLogic = new AuthLogic();
    $this->auth = false;
  }

  public function __destruct()
  { }

  public function handleRequest()
  {
    try {
      $op = isset($_REQUEST['auth']) ? $_REQUEST['auth'] : NULL;
      switch ($op) {
        case 'login':
          $this->login();
          break;
        case 'loggedIn':
          $this->isAuthenticated();
          break;
        default:
          $this->collectForm();
          break;
      }
    } catch (ValidationException $e) {
      $errors = $e->getErrors();
    }
  }

  public function authRequest()
  {
    return $this->auth;
  }

  public function isAuthenticated()
  {
    $this->auth = true;
    return $this->auth;
    include 'view/producten/products.php';
  }

  public function collectForm()
  {
    include 'view/login/login.php';
  }

  public function login()
  {
    $formData = $_REQUEST;
    var_dump($formData);
    $login = $this->authLogic->login($formData);
    var_dump($login);
    return $login;
    include 'view/login/loggingIn.php';
  }
}
