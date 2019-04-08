<?php
$authController = new AuthController();

if ($login) {
  $authController->isAuthenticated();
} else {
  echo "Loggin Failed";
}
?>