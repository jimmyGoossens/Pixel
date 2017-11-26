<?php


if(isset($_POST['valider'])){
	
	$bdd= new PDO('mysql:host=localhost;dbname=Pixel;charset=utf8','user','user');
	require('class_PDO.php');
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

	<form  action="register.php" method="post" >

    <label for="pseudo"> Votre pseudo :</label></br>
    <input type="text" name="name" id="pseudo" placeholder="Ex:elises20"></br>

    <label for="motdepasse1"> inserez  un mot de passe :</label></br>
    <input type="text" name="password" id="mdp1" placeholder="motdepasse"></br>

    <label for="motdepasse2"> confirmez le mot de passe :</label></br>
    <input type="text" name="mdp2" id="mdp2" placeholder="motdepasse"></br>

    <label for="email"> inserez  une adresse e-mail :</label></br>
    <input type="text" name="mail" id="email" placeholder="email"></br>


    <input type="submit" name="valider">

</form>