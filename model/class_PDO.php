<?php

class pdoModel{

	private $connexion;

	public function __construct($bd){
	$this->connexion=$bd;
	}

	function insert(){

		$this->name = $_POST['yourname'];
		$this->password = $_POST['password'];
		$this->mail=$_POST['email'];

		$req = $this->connexion->prepare('INSERT INTO user (name,mail,password) VALUES (:name,:mail,:password)');
		$req->execute(array(
				'name'=>$this->name,
				'mail'=>$this->mail,
				'password'=>$this->password

			));
	}

	function select(){

		$this->name = $_POST['yourname'];
		$this->password = $_POST['password'];

		$req = $this->connexion->prepare('SELECT ID FROM user WHERE name =:name AND password =:password');
		$req->execute(array(
				'password'=>$this->password,
				'name'=>$this->name
			));
		$donnees=$req->fetch();

		return $donnees['ID'];
	}

	function selectImage() {

		//$this->img = $_POST['img'];
		$req = $this->connexion->query('SELECT * FROM image');
		return $req;
		echo "nice";
	}


	function delete() {

		$requete = $bdd->prepare('DELETE FROM image WHERE name=:img ');
		$req->execute(array(
				'img'=>$this->img
		));


	}
	 function upload() {

		if(!empty($_FILES)){
			$img = $_FILES['img'];
			$extensions= strtolower(substr($img['name'], -3));
			$extensions_valides = array( 'jpg' , 'gif' , 'png' );
			if (in_array($extensions,$extensions_valides)) {
			  $this->$newId= md5(uniqid(rand(), true));
			  $this->$chemin = move_uploaded_file($img['tmp_name'], "images/". $img['name'].$newId);

			  $this->title=$_POST['imageTitle'];
			$this->description=$_POST['imageText'];
			$req = $this->connexion->prepare('INSERT INTO images(chemin,imageTitle,imageText) VALUES (:chemin,:imageTitle,:imageText)');
			$req->execute(array(

				'chemin'=>$this->chemin,
				'imageTitle'=>$this->title,
				'imageText'=>$this->description

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
