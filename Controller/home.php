<?php

	$bdd= new PDO('mysql:host=localhost;dbname=Pixel;charset=utf8','user','user');
	require('class_PDO.php');
	$home=new pdoModel($bdd);

  $reponse = $home->selectImage();

    while ($donnees = $reponse->fetch()){
?>
          <li><img  src= <?php echo $donnees['image'];?> alt=<?php echo $donnees['description'] ?>/></li>
<?php
    }
?>
