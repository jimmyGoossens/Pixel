<?php
	if(isset($_POST['supprimer'])) {

		require("class_PDO.php");
		$del=new pdoModel($bdd);
		$_POST['imgName'];
		$del->delete();
	}
?>