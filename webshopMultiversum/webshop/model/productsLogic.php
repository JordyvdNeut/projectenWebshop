<?php
    require_once 'model/DataHandler.php';
  

    class ProductsLogic {
  
    public function __construct() {
      $this->DataHandler = new DataHandler("localhost","mysql","webshop(projecten)","root","");
      }
      public function __destruct() {}
      public function createProduct($formData) {
        $name = $formData["name"];
        $phone = $formData["phone"];
        $email = $formData["email"];
        $location = $formData["location"];
        
        try {
          $sql = "INSERT INTO users (id, name, phone, email, location) 
          VALUES ('', '$name', '$phone', '$email', '$location')";
          $result = $this->DataHandler->createData($sql);
          return $result = 1 ? "Account succesvol aangemaakt" : "Er is wat fout gegaan het aanmaken van het account is niet gelukt";
        } catch (exception $e) {
          throw $e;
        }
      }
      public function readProducts() {
        echo 'yeet';
      //   try {
      //     $sql = "SELECT * FROM products";
      //     $result = $this->DataHandler->readData($sql);
      //     return $result;
      // } catch (exception $e) {
      //     throw $e;
      // }
    }

    public function getShoppingCart() {
      try {
        
      } catch (exception $e) {
      throw $e;
    }
    }
  }
?>