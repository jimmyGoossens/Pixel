<?php
// require '';
require 'Controller/controller.php';
require 'Model/class_PDO.php';
$Usercontroller = new Controller();
$action = "";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pixel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="Assets/css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>

  </head>
  <body>

<?php

require "Controller/controller.php";

$controller = new Controller;

switch ($action) {
    case 'getWelcomePage':
      $controller->getWelcomePage();
      break;
    case 'getRegisterPage':
        $controller->getRegisterPage();
        break;
    case 'getLoginFormPage':
        $controller->getLoginFormPage();
      break;
    case 'getHomePage':
       $controller->getHomePage();
      break;
    case 'getaddAnImagePage':
      $controller->getaddAnImagePage();
      break;
    default $controller->get404Page();
}
 ?>
</body>
</html>
