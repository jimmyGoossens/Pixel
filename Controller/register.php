<?php


if(isset($_POST['valider'])){

	global $bdd;
	// require('model/class_PDO.php');
	$register = new pdoModel($bdd);

	$existence=$register->select();
	if($_POST['password']==$_POST['mdp2'] AND empty($existence)){

		$register->insert($bdd);

		session_start();
		$_SESSION['id']= $register->select();
		// header('location:home.php');

	}
	else{

		echo "incorrect password or existing profile";
	}

	$register->insert($bdd);

	//start sesssion
	$__SESSION['id']= $register->select();
	echo $register->select();

	//header('location:home.php');

}

?>
