<?php
include 'init.php';

if(!logged_in()){
  header('Location:index.php');
  exit();
}
if(!isset($_GET['album_id']) || album_check($_GET['album_id']) === false){
  header('Location: albums.php');
  exit();
}
$album_id = $_GET['album_id'];


$edit_album = album_data($album_id);

?>

<h3>Edit Album</h3>

<form action="edit_one_album.php?album_id=<?php echo $album_id; ?>" method="post">
  <p> Name: <br> <input type="text" name="album_name" maxlength="55" value="<?php echo $edit_album['name']; ?>" /></p>
  <p> Description: <br> <textarea name="album_description" rows="6" cols="35" maxlength ="255"><?php echo $edit_album['description']; ?></textarea></p>
  <p> <input type="submit" name="submit value" value="Edit Album"/>
</form>

