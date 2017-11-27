



<?php

if(isset($_POST['valider'])){


	$bdd= new PDO('mysql:host=localhost;dbname=Pixel;charset=utf8','user','user');
	require('class_PDO.php');
	$login = new pdoModel($bdd);


	$validation = $login->select();
	echo $validation;


	if(!empty($validation)){
		echo "bordel";
		session_start();
		$_SESSION['id']= $validation;
	 	header('location:home.php');

	}else{

		echo "invalide user name or password";
	}

}

?>
