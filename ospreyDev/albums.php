<?php
include 'init.php';

if (!logged_in()){
  header('Location: index.php');
  exit();
}
?>

<h3>Albums</h3>

<?php

$albums = get_album();

if(empty($albums)){
  echo '<p>You currently don\'t have any albums</p>';
 
}else{
  foreach ($albums as $album){
    echo '<p><a href="view_albums.php?album_id='.$album['id'].'">'.$album['name'].'</a> ('.$album['count'].'images'.')<br>
	'.$album['desc']. '...<br>
	<a href="edit_album.php?album_id='.$album['id'].'">Edit</a>/<a href="delete_album.php?album_id='.$album['id'].'">Delete</a>
	<br><a href="upload_image.php?album_id='.$album['id'].'">Add Image</a>
	</p>';
  }  
}
echo '<p><a href="create_album.php">Create Album</a></p>';
echo '<p><a href="upload_image.php">Upload Image</a></p>';
?>