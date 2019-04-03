<?php
    require_once 'model/DataHandler.php';
  

    class ProductsLogic {
  
    public function __construct() {
      $this->DataHandler = new DataHandler("localhost","mysql","webshop(projecten)","root","");
      }

      public function readProducts() {
        try {
          $sql = "SELECT * FROM producten";
          $result = $this->DataHandler->readsData($sql);
          return $result;
      } catch (exception $e) {
          throw $e;
      }
    }
    
    public function collectDetails($id) {
      try {
        $sql = "SELECT * FROM producten WHERE productsId = " . $id;
        $result = $this->DataHandler->readsData($sql);
        return $result;
    } catch (exception $e) {
        throw $e;
    }
  }
    
  public function collectBrands() {
    try {
      $sql = "SELECT DISTINCT Merk FROM producten";
      $result = $this->DataHandler->readsData($sql);
      return $result;
  } catch (exception $e) {
      throw $e;
  }
}

    public function collectShoppingCart() {}
      
    public function __destruct() {}
  }
?>