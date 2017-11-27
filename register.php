<?php


if(isset($_POST['valider'])){
	
	$bdd= new PDO('mysql:host=localhost;dbname=Pixel;charset=utf8','user','user');
	require('model/class_PDO.php');
	$register = new pdoModel($bdd);
	$existence=$register->select();
	if($_POST['password']==$_POST['mdp2'] AND empty($existence)){

		$register->insert($bdd);

		session_start();
		$_SESSION['id']= $register->select();
		header('location:home.php');
		
	}
	else{

		echo "incorrect password or existing profile";
	}
}

?>

