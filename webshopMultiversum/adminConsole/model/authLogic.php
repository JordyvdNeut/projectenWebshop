<?php
    require_once 'model/DataHandler.php';
  

    class AuthLogic {
  
    public function __construct() {
      $this->DataHandler = new DataHandler("localhost","mysql","webshop(projecten)","root","");
    }
    
    public function login($formData) {
      try {
        $sql = "SELECT * FROM users WHERE userName='" . $formData['name'] . "' AND password='" . $formData['password'] . "'";
        $result = $this->DataHandler->readsData($sql);
        var_dump($result);
        echo $result->num_rows;
        if($result->num_rows == 1) {
          return true;
          "You are logged in";
        } else {
          return false;
          "Loggin Failed";
        }
        return $result;
      } catch (exception $e) {
          throw $e;
      }
    }

    public function __destruct() {}
  }
?>