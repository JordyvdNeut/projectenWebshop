<?php
$authController = new AuthController();
var_dump($login);
if ($login) {
  $authController->isAuthenticated();
} else {
  echo "Loggin Failed";
}
?>
<?= $login ?>
<h1>Test</h1>