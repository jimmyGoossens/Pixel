<?php

	$bdd= new PDO('mysql:host=localhost;dbname=Pixel;charset=utf8','user','user');
	require('class_PDO.php');
	$home=new pdoModel($bdd);
  

?>

     <?php
echo "yop";


     /*
            while ($donnees = $reponse->fetch()){
          ?>
          <li><?php echo $donnees['image'] ;?> </li>
          <?php
            }*/
          ?>

