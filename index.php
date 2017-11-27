<?php
// require '';
require 'Controller/controller.php';
require 'Model/pdoModel.php';
$Usercontroller = new UserController();
$action = "";

?>

<!DOCTYPE html>
<!-- mettre dans un fichier header et l'include -->
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
extract($_POST);
extract($_GET);

switch ($action) {
    case 'UserController@login':
        $Usercontroller->login($pseudo, $password);
        break;
    case 'UserController@register':
        $Usercontroller->register($pseudo, $password, $email);
        break;
    case 'UserController@getHome':
        $Usercontroller->getHomePage();
        break;
    case 'UserController@getaddAnImagePage':
        $Usercontroller->getaddAnImagePage();
        break;
}
 ?>
</body>
</html>
