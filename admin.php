<?php
	if(isset($_POST['valider'])) {

		require("class_PDO.php");
		$del=new pdoModel($bdd);

		$del->delete();


	}

?>