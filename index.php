<?php

 include 'Views/header.php';
 include 'Views/head.php';


require 'model/class_PDO.php';
require 'Controller/controller.php';


$controller = new Controller();
if(!isset ($_GET['action'])){
    $action="default";
}else {
    $action = $_GET['action'];
}


switch ($action) {
    case 'getRegisterPage':
        $controller->getRegisterPage();
        break;
    case 'getLoginPage':
        $controller->getLoginPage();
      break;
    case 'getHomePage':
        $controller->getHomePage();
      break;
    case 'getaddAnImagePage':
        $controller->getaddAnImagePage();
      break;
    case 'get404Page':
        $controller->get404Page();
     break;
    case 'default' :
        $controller->getWelcomePage();
        break;
    case 'getRegisterUser':
        $controller->getRegisterUser();
        break;
    case 'getLoginUser':
         $controller->getLoginUser();
            break;
    case 'getaddAnImageUser':
        $controller->getaddAnImageUser();
        break;
}
 ?>
