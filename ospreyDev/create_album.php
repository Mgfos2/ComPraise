<?php
include 'init.php';
if(!logged_in()){
  header('Location:index.php');
}

?>

<h3>Create Album </h3>

<form action="create_group_pics.php" method="post">
  <p> Name: <br> <input type="text" name="album_name" maxlength="55" /></p>
  <p> Description: <br> <textarea name="album_description" rows="6" cols="35" maxlength ="255"></textarea></p>
  <p> <input type="submit" value="Create Album"/>
</form>

