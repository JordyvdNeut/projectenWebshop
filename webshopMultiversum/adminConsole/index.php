<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Multiversum</title>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
  <link rel="shotcut icon" type="image/png" href="view\images\logo.png" />
</head>

  <body>
    <?php
      require_once 'controller/authController.php';
      require_once 'controller/productsController.php';
      
      $this->authController = new AuthController();
      $this->productsController = new ProductsController();

      if($this->authController->auth != true){
        // login page
        $this->authController->handleRequest();
      }

      if($this->authController->auth == true) {
        // Header
        include 'view/navigation/navBar/navBar.php';

        // Content
        $this->productsController->handleRequest();

        // Footer
        include 'view/navigation/footer/footer.php';
      }
    ?>
  </body>
</html> 