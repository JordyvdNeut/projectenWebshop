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
          case 'createForm':
          $this->collectCreateProductForm();
          break;
          case 'createProduct':
          $this->createProduct();
          break;
          case 'bewerken':
          $this->updateProduct($_REQUEST['id']);
          break;
          case 'verwijderen':
          $this->dumpProduct($_REQUEST['id']);
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
      $products = $this->ProductsLogic->readProducts();
      include 'view/producten/products.php';
    }
    public function collectCreateProductForm() {
      include 'view/producten/createProducts.php';
    }
    public function createProduct() {
      $formData = $_REQUEST;
      $createProduct = $this->ProductsLogic->createProduct($formData);
      include 'view/created.php';
    }
    public function dumpProduct($id) {
      $remove = $this->ProductsLogic->dumpProduct($id);
      include 'view/producten/removeProduct.php';
    }
    
  }
?>