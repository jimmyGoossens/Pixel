<?php

$get="";

if (isset($_GET['page'])) {
  $get = addslashes($_GET["page"]);
}

$page = $get != "" ? $get : "home";
 ?>
