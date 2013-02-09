<?php
include 'init.php';

if(!logged_in()){
  header('Location: index.php');
  exit();
}

$album_id = $_GET['album_id'];
$album_data = album_data($album_id);
echo '<h3>'.$album_data['name'].'</h3>';
echo '<b>'.$album_data['description'].'</b><br>';



$images = get_images($album_id);



if(empty($images)){
  echo 'There are no images in this album';
}else{
  foreach($images as $image){
    echo '<a href="uploads/'.$image['album'].'/'.$image['id'].'.'.$image['ext'].'"><img src="uploads/thumb/'. $image['album']. '/'. $image['id']. '.'. $image['ext']. '" alt=""/></a> [<a href="delete_image.php?image_id='.$image['id'].'">x</a>]
	<input type="checkbox" name="default_pic" value='.$image['id'].'><br>';
  }


}




?>