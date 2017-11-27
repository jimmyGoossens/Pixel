<?php

class pdoModel{

	private $connexion;

	public function __construct($bd)
  {
	$this->connexion=$bd;
	}

	function insert()
  {
			$this->name = $_POST['name'];
			$this->password = $_POST['password'];
			$this->mail=$_POST['mail'];
			$req = $this->connexion->prepare('INSERT INTO user(name,mail,password) VALUES (:name,:mail,:password)');
			$req->execute(array(
					'name'=>$this->name,
					'mail'=>$this->mail,
					'password'=>$this->password
				));
	}
// il faut ajouter la partie ajout vers la DB
 	function upload()
	  {
			if(!empty($_FILES)){
			$img = $_FILES['img'];
			$extensions= strtolower(substr($img['name'], -3));
			$extensions_valides = array( 'jpg' , 'gif' , 'png' );
			if (in_array($extensions,$extensions_valides)) {
			  $newId= md5(uniqid(rand(), true));
			  move_uploaded_file($img['tmp_name'], "images/". $img['name'].$newId);
			  echo "transfert reussi !";
			}else {
			  $erreur = "Erreur, fichier non autorisé !";
			  echo "$erreur";
			}
			}
	  }

	function select()
  {

		$this->name = $_POST['name'];
		$this->password = $_POST['password'];
		$req = $this->connexion->prepare('SELECT ID FROM user WHERE name =:name AND password =:password');
		$req->execute(array(
				'password'=>$this->password,
				'name'=>$this->name
			));
		$donnees=$req->fetch();
		return $donnees['ID'];
	}
}



 ?>
