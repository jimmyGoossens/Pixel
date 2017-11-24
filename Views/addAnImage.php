<?php
// PHP code goes here
?>

<div class="main">
  <h1>Add an image</h1>
  <div class="mainContent">
    <form class="addAnImage" action="" method="post" enctype="multipart/form-data">
      <div class="imageTitle">
        <label for="imageTitle">Title : </label>
        <input type="text" name="imageTitle" id="imageTitle"/>
      </div>
      <div class="imageText">
        <label for="imageText">Text : </label>
        <textarea name="imageText" rows="10" cols="50" id="imageText"></textarea>
      </div>
      <div class="imageFile">
        <label for="imageFile">Upload a file (max. 1Mo)</label> <br/>
        <input type="file" name="imageFile" value="Upload" id="imageFile"/>
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" /> <br/>
      </div>
      <div class="buttons">
        <input type="button" name="cancel" value="Cancel"/>
        <input type="submit" name="submit" value="Save" id="save"/>
      </div>
    </form>
  </div>
</div>
