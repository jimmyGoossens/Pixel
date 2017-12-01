
<?php


if(isset($_POST['valider'])){


	global $bdd;
	// require('model/class_PDO.php');
	$login = new pdoModel;

	$validation = $login->select();
	echo $validation;


	if(!empty($validation)){
		echo "bordel";
		session_start();
		$_SESSION['ID']= $validation;
	 	header('location:index.php?action=getHomePage');

	}else{

		echo "invalide user name or password";
	}

}

?>
