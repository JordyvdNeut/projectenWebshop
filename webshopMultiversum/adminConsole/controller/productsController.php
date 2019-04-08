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
          $this->collectCreateForm();
          break;
          case 'createProduct':
          $this->createProduct();
          break;
          case 'bewerken':
          $this->collectUpdateFrom($_REQUEST['id']);
          break;
          case 'bewerkt':
          $this->updateProduct($_REQUEST['id']);
          break;
          case 'verwijderen':
          $this->aksDumpProduct($_REQUEST['id']);
          break;
          case 'verwijderd':
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
    public function collectCreateForm() {
      include 'view/producten/createProducts.php';
    }
    public function createProduct() {
      $formData = $_REQUEST;
      $createProduct = $this->ProductsLogic->createProduct($formData);
      include 'view/created.php';
    }
    public function collectUpdateFrom($id) {
      $update = $this->ProductsLogic->readProduct($id);
      include 'view/producten/updateProduct.php';
    }
    public function updateProduct($id) {
      // $updated = $this->ProductsLogic->updateProduct($id);
      include 'view/updated.php';
    }
    public function aksDumpProduct($id) {
      $remove = $this->ProductsLogic->readProduct($id);
      include 'view/producten/removeProduct.php';
    }
    public function dumpProduct($id) {
      $removed = $this->ProductsLogic->dumpProduct($id);
      include 'view/removed.php';
    }
    
  }
?>