<?php
require_once 'model/DataHandler.php';

class ProductsLogic
{

  public function __construct()
  {
    $this->DataHandler = new DataHandler("localhost", "mysql", "webshop(projecten)", "root", "");
  }

  public function readProducts()
  {
    try {
      $sql = "SELECT * FROM producten";
      $result = $this->DataHandler->readsData($sql);
      return $result;
    } catch (exception $e) {
      throw $e;
    }
  }

  public function createProduct($formData)
  {
    $Naam = $formData["product_name"];
    $Prijs = $formData["product_price"];
    $Merk = $formData["product_brand"];
    $Img = $formData["product_img"];
    $Kleur = $formData["product_color"];
    $Resolutie = $formData["product_resolution"];
    $RefreshRate = $formData["product_refresh_rate"];
    $Gezichtsveld = $formData["product_fov"];
    $Functies = $formData["product_functions"];
    $Aansluitingen = $formData["product_connections"];
    $Accessoires = $formData["product_accessories"];
    $Bijzonderheden = $formData["product_particularities"];

    try {
      $sql = "INSERT INTO producten (ProductsID, Naam, Prijs, Merk, Img, Kleur, Resolutie, RefreshRate, Gezichtsveld, Functies, Aansluitingen, Accessoires, Bijzonderheden)
        VALUES ('' ,'$Naam', '$Prijs', '$Merk', '$Img', '$Kleur', '$Resolutie', '$RefreshRate', '$Gezichtsveld', '$Functies', '$Aansluitingen', '$Accessoires', '$Bijzonderheden')";
      $result = $this->DataHandler->createData($sql);
      return $result = 1 ? "Het product is succesvol aangemaakt" : "Er is wat fout gegaan bij het aanmaken van het product";
    } catch (exception $e) {
      throw $e;
    }
  }

  public function readProduct($id) {
    try {
      $sql = "SELECT * FROM producten WHERE ProductsID = " . $id;
      $result = $this->DataHandler->readsData($sql);
      return $result;
    } catch (exception $e) {
      throw $e;
    }
  }

  public function dumpProduct($id)
  {
    try {
      $sql = "DELETE FROM producten WHERE ProductsID = " . $id;
      $result = $this->DataHandler->deleteData($sql);
      return $result ? "Product is succesvol verwijderd" : "Het verwijderen van dit product is helaas niet gelukt";
    } catch (exception $e) {
      throw $e;
    }
  }

  public function __destruct()
  { }
}
