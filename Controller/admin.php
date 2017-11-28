<?php
	if(isset($_POST['supprimer'])) {

		require("model/class_PDO.php");
		$del=new pdoModel($bdd);
		$_POST['imgName'];
		$del->delete();
		header("location:index.php?action=UserController@getSignup");
	}
?>
