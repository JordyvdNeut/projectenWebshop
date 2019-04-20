<?php
require_once 'model/DataHandler.php';


class ContactLogic
{

  public function __construct()
  {
    $this->DataHandler = new DataHandler("localhost", "mysql", "webshop(projecten)", "root", "");
  }

  public function readContactInfo()
  {
    try {
      $sql = "SELECT * FROM contactinfo WHERE id = 1";
      $result = $this->DataHandler->readsData($sql);
      return $result;
    } catch (exception $e) {
      throw $e;
    }
  }

  public function updateContactInfo($formData)
  {
    $companyname = $formData["companyname"];
    $fname = $formData["fname"];
    $lname = $formData["lname"];
    $email = $formData["email"];
    $street = $formData["street"];
    $city = $formData["city"];
    $state = $formData["state"];
    $postcode = $formData["postcode"];

    try {
      $sql = "UPDATE contactinfo SET 
      companyname = '$companyname', fname = '$fname', lname = '$lname', email = '$email', street = '$street', 
      city = '$city', state = '$state', postcode = '$postcode'
      WHERE id = 1";
      $result = $this->DataHandler->updateData($sql);
      return $result ? "De contact gegevens zijn succesvol bewerkt!" : "Het bewerken van de contact gegevens is niet gelukt";
    } catch (exception $e) {
      throw $e;
    }
  }

  public function __destruct()
  { }
}
