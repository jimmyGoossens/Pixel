<?php

class pdoModel{

	private $connexion;

	public function __construct(){
	$this->connexion = new PDO('mysql:host=localhost;dbname=imagePixel;charset=utf8','root','user');
	$this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	function insert(){

		$name = $_POST['yourname'];
		$password = $_POST['password'];
		$mail=$_POST['email'];

		$req = $this->connexion->prepare('INSERT INTO membre (name,email,password) VALUES (:name,:email,:password)');
		$req->execute(array(
				'name'=>$name,
				'email'=>$mail,
				'password'=>$password

			));
	}

	function select(){

		$email = $_POST['email'];
		$password = $_POST['password'];

		$req = $this->connexion->prepare('SELECT id FROM membre WHERE email =:email AND password =:password');
		$req->execute(array(
				'password'=>$password,
				'email'=>$email
			));
		$donnees=$req->fetch();

		return $donnees['id'];

	}

	function selectImage() {

		//$this->img = $_POST['img'];
		$req = $this->connexion->query('SELECT * FROM images');
		return $req;
		echo "nice";
	}


	function delete() {

		$requete = $bdd->prepare('DELETE FROM images WHERE name=:img ');
		$req->execute(array(
				'img'=>$this->img
		));


	}
	 function upload() {

		if(!empty($_FILES)){
			$img = $_FILES['imageFile'];
			$extensions= strtolower(substr($img['name'], -3));
			$extensions_valides = array( 'jpg' , 'gif' , 'png' );
			if (in_array($extensions,$extensions_valides)) {
			  $newId= md5(uniqid(rand(), true));
			  move_uploaded_file($img['tmp_name'], "images/".$newId. $img['name']);
				$chemin = "images/".$newId. $img['name'];
				var_dump($_POST);

			$title=$_POST['imageTitle'];
			$description=$_POST['imageText'];
			$req = $this->connexion->prepare('INSERT INTO images(chemin,imageTitles,imageText) VALUES (:chemin,:imageTitles,:imageText)');
			$req->execute(array(

				'chemin'=>$chemin,
				'imageTitles'=>$title,
				'imageText'=>$description

				));
			  echo "transfert reussi !";

			}else {
			  $erreur = "Erreur, fichier non autorisé !";
			  echo "$erreur";
			}
		}
	}
} // end class pdo
/*


	}function update(){

		$requete = $this->connexion->prepare('UPDATE user SET variable_à_changer WHERE id=id');
		$req->execute(array(
			'ID'=>$__session['id'];
			$variable a changer

			));
	*/



?>
