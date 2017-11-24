<div class="mainPinIt">
  <div class="pinItBox">
    <section class="pinItBoxHeader">
      <div class="pseudoButtonSend">
        <i class="fa fa-share-alt" aria-hidden="true"></i>
        Send
      </div>

      <!--Si c'est un admin, afficher ce bouton-->
      <?php
      if(isset($_SESSION['admin']))
      {
      ?>
      <div class="adminDeleteButton">
        <input type="button" name="adminDeleteButton" value="Delete"/>
      </div>
      <?php
      }
      ?>

    </section>
    <section class="imageToPin">

    <div class="date">
      22/11/2017 <!-- date pour l'exemple, à delete !-->
      <?php // variable date image ?>
    </div>
    <h2>
      Tutu rose <!-- titre pour l'exemple, à delete !-->
      <?php // variable titre image ?>
    </h2>
    <img src="<?php //variable url image ?>" alt="Image to pin"/>
    <p>
      Ceci is a wonderful tutu rose création Lolipop <!-- texte pour l'exemple, à delete !-->
      <?php // variable texte image ?>
    </p>
    </section>
  </div>
</div>
