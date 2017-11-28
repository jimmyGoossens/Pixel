
<?php


if(isset($_POST['valider'])){


	global $bdd;
	require('model/class_PDO.php');
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
