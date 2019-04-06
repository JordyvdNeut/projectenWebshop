<?php
    require_once 'model/DataHandler.php';
  

    class AuthLogic {
  
    public function __construct() {
      $this->DataHandler = new DataHandler("localhost","mysql","webshop(projecten)","root","");
    }
    
    public function login($formData) {
      try {
        $sql = "SELECT userName, password FROM users WHERE $formData";
        $result = $this->DataHandler->readsData($sql);
        return $result;
      } catch (exception $e) {
          throw $e;
      }
    }

    public function __destruct() {}
  }
?>