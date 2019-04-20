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
      $sql = "SELECT * FROM contactinfo";
      $result = $this->DataHandler->readsData($sql);
      return $result;
    } catch (exception $e) {
      throw $e;
    }
  }

  public function __destruct()
  { }
}
