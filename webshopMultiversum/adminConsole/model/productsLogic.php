<?php
    require_once 'model/DataHandler.php';
  

    class ProductsLogic {
  
    public function __construct() {
      $this->DataHandler = new DataHandler("localhost","mysql","webshop(projecten)","root","");
    }

    public function __destruct() {}
  }
?>