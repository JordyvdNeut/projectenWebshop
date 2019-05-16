<?php
require_once 'model/productsLogic.php';
require_once 'model/contactLogic.php';

class ProductsController
{
  public function __construct()
  {
    $this->ProductsLogic = new ProductsLogic();
    $this->ContactLogic = new ContactLogic();
  }

  public function __destruct()
  { }
  public function handleRequest()
  {
    try {
      $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
      switch ($op) {
        case 'details':
          $this->collectDetails($_REQUEST['id']);
          break;
        case 'winkelwagen':
          $this->collectShoppingCart();
          break;
        case 'removeProduct':
          $this->collectDeleteProduct($_REQUEST['id']);
          break;
        case 'home':
          $this->getHomePage();
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
  public function getHomePage()
  {
    include 'view/home/home.php';
  }
  public function getContactPage()
  {
    $contactInfo = $this->ContactLogic->readContactInfo();
    include 'view/contact/contact.php';
  }
  public function collectReadProducts()
  {
    $products = $this->ProductsLogic->readProducts();
    $brands = $this->ProductsLogic->collectBrands();
    include 'view/products/products.php';
  }
  public function collectDetails($id)
  {
    $details = $this->ProductsLogic->collectDetails($id);
    include 'view/productDetails/productDetails.php';
  }
  public function collectShoppingCart()
  {
    // $shoppingCart = $this->ProductsLogic->collectShoppingCart($id);
    include 'view/shoppingCart/shoppingCart.php';
  }
  public function collectDeleteProduct($id)
  {
    $Delete = $this->ProductsLogic->collectDeleteProduct($id);
    include 'view/shoppingCart/shoppingCart.php';
  }
}
