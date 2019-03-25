<?php
    require_once 'model/DataHandler.php';
  

    class ProductsLogic {
  
    public function __construct() {
      $this->DataHandler = new DataHandler("localhost","mysql","webshop(projecten)","root","");
      }
      public function createProduct() {}
      public function readProducts() {
        try {
          $sql = "SELECT * FROM producten";
          $result = $this->DataHandler->readData($sql);
          return $result;
      } catch (exception $e) {
          throw $e;
      }
    }

    public function getShoppingCart() {}
    public function __destruct() {}
  }
?>