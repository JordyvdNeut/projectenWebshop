<?php
    require_once 'model/productsLogic.php';
  
    class ProductsController {
    public function __construct() {
        $this->ContactsLogic = new ProductsLogic();
    }
    
    public function __destruct() {}
      public function handleRequest()
    {
      try {
        $op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
        switch ($op) {
          case 'create':
          $this->collectCreateUserForm();
          break;
          case 'createProduct' :
          $this->collectCreateUser();
          break;
          case 'winkelwagen':
          $this->collectShoppingCart();
          break;
          case 'products':
          $this->collectReadProducts();
          break;
          default:
          $this->getHomePage();
          break;
        }			
      } catch (ValidationException $e) {
          $errors = $e->getErrors();
  
      }
    }
    public function getHomePage() {
      include 'view/home/home.php';
    }
    public function collectCreateProductForm() {
      include 'view/createProducts.php';
    }
    public function collectCreateProduct() {
      $formData = $_REQUEST;
      $createProduct = $this->ProductsLogic->createProduct($formData);
      include 'view/succes.php'; // bestaat nog niet
    }
    public function collectShoppingCart() {
      $shoppingCart = $this->ProductsLogic->getShoppingCart();

    }
    public function collectReadProducts() {
      // $products = $this->ProductsLogic->readProducts();
      include 'view/products/products.php';
    }
  }
?>