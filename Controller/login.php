<<<<<<< HEAD

<?php

if(isset($_POST['valider'])) {
=======
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

if(isset($_POST['valider'])){
>>>>>>> origin

	$bdd= new PDO('mysql:host=localhost;dbname=Pixel;charset=utf8','user','user');
	require('class_PDO.php');
	$login = new pdoModel($bdd);
<<<<<<< HEAD

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
<form  action="login.php" method="post" >
=======
	echo "yop";
	/*$validation = $login->select();
echo $validation;
	if(!empty($validation)){

		header('location:home.php');
		session_start();
	    
	 

	}else{

		echo "invalide user name or password"
	}

}
*/
?>
	<form  action="login.php" method="post" >
>>>>>>> origin

    <label for="pseudo"> Votre pseudo :</label></br>
    <input type="text" name="name" id="pseudo" placeholder="Ex:elises20"></br>

    <label for="motdepasse1"> inserez  un mot de passe :</label></br>
    <input type="text" name="password" id="mdp1" placeholder="motdepasse"></br>

<<<<<<< HEAD
=======
    <label for="motdepasse2"> confirmez le mot de passe :</label></br>
    <input type="text" name="motdepasse2" id="mdp2" placeholder="motdepasse"></br>

>>>>>>> origin
    <label for="email"> inserez  une adresse e-mail :</label></br>
    <input type="text" name="mail" id="email" placeholder="email"></br>


    <input type="submit" name="valider">

</form>

<<<<<<< HEAD

=======
</body>
</html>
>>>>>>> origin
