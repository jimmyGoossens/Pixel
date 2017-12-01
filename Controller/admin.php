<?php
	if(isset($_POST['supprimer'])) {

		require("model/class_PDO.php");
		$del=new pdoModel($bdd);
		$_POST['imageTitle'];
		$del->delete();
		header("location:index.php?action=getHomePage");
	}
?>
