<?php

/**
 * Partie qui va gérer la reception des image après upload
 */

if(!empty($_FILES)){
$img = $_FILES['img'];
$extensions= strtolower(substr($img['name'], -3));
$extensions_valides = array( 'jpg' , 'gif' , 'png' );
if (in_array($extensions,$extensions_valides)) {
  move_uploaded_file($img['tmp_name'], "images/". $img['name']);
  echo "transfert reussi !";
}else {
  $erreur = "Erreur, fichier non autorisé !";
  echo "$erreur";
}
}


 ?>
