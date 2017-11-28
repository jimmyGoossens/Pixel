<?php

	$bdd= new PDO('mysql:host=localhost;dbname=Pixel;charset=utf8','user','user');
	require('class_PDO.php');
	$home=new pdoModel($bdd);

  $reponse = $home->selectImage();

    while ($donnees = $reponse->fetch()){
?>
          <li><img  src= <?php echo $donnees['image'];?> alt=<?php echo $donnees['description'] ?>/></li>
<?php
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="..Assets/style.css">
	<title>Document</title>
	</head>
	<body>


	<div class="grid">
	<div class="grid-sizer"></div>
	<div class="grid-item">
	  <figure class="house-photo">
	    <img src="https://i.pinimg.com/originals/31/9d/b9/319db9e8966bb4ba4b424cf012d0385e.jpg" />
	  </figure>
	  <h1>title</h1>
	</div>

	<div class="grid-item">
	  <figure class="house-photo">
	    <img src="https://i.pinimg.com/736x/de/b2/13/deb2135ca0ac73c927861e818f79c57f--beautiful-places.jpg" />
	  </figure>
	  <h1>title</h1>
	</div>

	<div class="grid-item">
	  <figure  class="house-photo">
	     <img src="https://i.pinimg.com/736x/61/c6/15/61c61578d1b5563f2eb6969719900a79--pink-bike-old-bikes.jpg" />
	  </figure>
	  <h1>title</h1>
	</div>


	<div class="grid-item">
	  <figure class="house-photo">
	    <img src="https://i.pinimg.com/736x/f7/a9/4a/f7a94a58ca4d7dfb39814132cef7f95b--hens-and-chicks-baby-chicks.jpg" />
	  </figure>
	  <h1>title</h1>
	</div>

	<div class="grid-item">
	  <figure class="house-photo">
	    <img src="https://i.pinimg.com/736x/13/ed/73/13ed73892491663e850c2763078f6a1c--spring-clothes-summer-clothing.jpg" />
	  </figure>
	  <h1>title</h1>
	</div>

	<div class="grid-item">
	  <figure class="house-photo">
	     <img src="https://i.pinimg.com/736x/b1/b1/56/b1b1566657436124e92fcec61a50749b--kid-crafts-easy-flower-crafts-for-toddlers.jpg" />
	  </figure>
	  <h1>title</h1>
	</div>

	<div class="grid-item">
	  <figure class="house-photo">
	     <img src="https://i.pinimg.com/736x/38/b2/e6/38b2e6818bd640e01aa928bd309afb89---casual-spring-outfits-outfits-spring-school.jpg" />
	  </figure>
	  <h1>title</h1>
	</div>

	<div class="grid-item">
	  <figure class="house-photo">
	    <img src="https://i.pinimg.com/originals/b0/e0/61/b0e061548d8b6d35585564d64b1534f3.jpg" />
	  </figure>
	  <h1>title</h1>
	</div>

	<div class="grid-item">
	  <figure class="house-photo">
	    <img src="https://i.pinimg.com/originals/da/e4/4c/dae44cc74986e001702d5aa8307c312b.png" />
	  </figure>
	  <h1>title</h1>
	</div>

	<div class="grid-item">
	  <figure class="house-photo">
	    <img src="https://i.pinimg.com/originals/0d/08/22/0d0822547d50aa49f90560d75a5515d9.jpg" />
	  </figure>
	  <h1>title</h1>
	</div>

	<div class="grid-item">
	  <figure class="house-photo">
	    <img src="https://i.pinimg.com/736x/02/db/4f/02db4fc6f67e57fb82289ece93cb0bf1--rose-flowers-pretty-flowers.jpg" />
	  </figure>
	  <h1>title</h1>
	</div>

	<div class="grid-item">
	  <figure class="house-photo">
	    <img src="https://i.pinimg.com/originals/88/db/1c/88db1c24ae6d63d00a79de9117218820.jpg" />
	  </figure>
	  <h1>title</h1>
	</div>
	</div>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://masonry.desandro.com/masonry.pkgd.js"></script>
	<script src="https://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>

	  <script type="text/javascript" src="home.js">

	</script>
	</body>
	</html>
