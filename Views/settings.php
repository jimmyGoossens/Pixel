<?php
// PHP code goes here
?>
<!-- HEADER -->
<div class="mainSettings">
  <form action="" method="post">
    <section class="personalInfo">
      <label for="name">Name : </label>
      <input type="text" id="name"/><br/>
      <label for="email">Email : </label>
      <input type="text" id="email"/><br/>
      <label for="newPass">New password : </label>
      <input type="text" id="newPass"/><br/>
      <label for="newPassCheck">New password (check) : </label>
      <input type="text" id="newPassCheck"/><br/>
      <label for="newProfilePic">New profile's picture : </label>
      <input type="file" id="newProfilePic"/><br/>
      <img src="" alt="currentProfilePic"/>
    </section>
    <section class="buttonsSettingsPage">
      <input type="button" name="cancel" value="Cancel"/>
      <input type="submit" name="submit" value="Save"/>
    </section>
  </form>
</div>
