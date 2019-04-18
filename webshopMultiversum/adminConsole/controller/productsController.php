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
          $this->updateProduct();
          break;
          case 'verwijderen':
          $this->aksDumpProduct($_REQUEST['id']);
          break;
          case 'verwijderd':
          $this->dumpProduct($_REQUEST['id']);
          break;
          case 'contact':
            $this->getContactPage();
            break;
          default:
          $this->collectReadProducts();
          break;
        }			
      } catch (ValidationException $e) {
          $errors = $e->getErrors();
  
      }
    }

    // Read
    public function collectReadProducts() {
      $products = $this->ProductsLogic->readProducts();
      include 'view/producten/products.php';
    }
    public function getContactPage()
    {
      $contactInfo = $this->ContactLogic->readContactInfo();
      $contactLocation = $this->ContactLogic->readContactLocation();
      include 'view/contact/contact.php';
    }

    // Create
    public function collectCreateForm() {
      include 'view/producten/createProducts.php';
    }
    public function createProduct() {
      $formData = $_REQUEST;
      $createProduct = $this->ProductsLogic->createProduct($formData);
      include 'view/created.php';
    }

    // Update
    public function collectUpdateFrom($id) {
      $product = $this->ProductsLogic->readProduct($id);
      include 'view/producten/updateProduct.php';
    }
    public function updateProduct() {
      $formData = $_REQUEST;
      $updateProduct = $this->ProductsLogic->updateProduct($formData);
      include 'view/updated.php';
    }

    // Delete
    public function aksDumpProduct($id) {
      $remove = $this->ProductsLogic->readProduct($id);
      include 'view/producten/removeProduct.php';
    }
    public function dumpProduct($id) {
      $removed = $this->ProductsLogic->dumpProduct($id);
      include 'view/removed.php';
    }
    
  }
