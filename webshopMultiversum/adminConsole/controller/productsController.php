<?php
    require_once 'model/productsLogic.php';
  
    class ProductsController {
    public function __construct() {
        $this->ProductsLogic = new ProductsLogic();
    }
    
    public function __destruct() {}
      public function handleRequest()
    {
      try {
        $op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
        switch ($op) {
          case 'details':
          $this->collectDetails($_REQUEST['id']);
          break;
          default:
          $this->collectReadProducts();
          break;
        }			
      } catch (ValidationException $e) {
          $errors = $e->getErrors();
  
      }
    }
    public function collectReadProducts() {
      // $products = $this->ProductsLogic->readProducts();
      // $brands = $this->ProductsLogic->collectBrands();
      include 'view/products/products.php';
    }
    public function collectDetails($id) {
      // $details = $this->ProductsLogic->collectDetails($id);
      include 'view/producten/products.php';
    }
    
  }
?>