<?php
$action=$_GET["action"];
//echo $action;
include "Views/head.php";
switch ($action) {
  case 'home':
    include "Views/home.php";
    break;
    case 'addAnImage':
      include "Views/addAnImage";
      break;
  default:
    include "Views/home.php";
    break;
}
 ?>
