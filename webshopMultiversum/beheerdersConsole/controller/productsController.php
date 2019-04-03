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
          case 'create':
          $this->collectCreateUserForm();
          break;
          case 'createProduct' :
          $this->collectCreateUser();
          break;
          case 'details':
          $this->collectDetails($_REQUEST['id']);
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
    public function collectReadProducts() {
      $products = $this->ProductsLogic->readProducts();
      $brands = $this->ProductsLogic->collectBrands();
      include 'view/products/products.php';
    }
    public function collectDetails($id) {
      $details = $this->ProductsLogic->collectDetails($id);
      include 'view/productDetails/productDetails.php';
    }
    public function collectShoppingCart() {
      // $shoppingCart = $this->ProductsLogic->collectShoppingCart();
      include 'view/shoppingCart/shoppingCart.php';
    }
    public function collectCreateProductForm() {
      include 'view/createProducts.php';
    }
    public function collectCreateProduct() {
      $formData = $_REQUEST;
      $createProduct = $this->ProductsLogic->createProduct($formData);
      include 'view/succes.php'; // bestaat nog niet
    }
    
  }
?>