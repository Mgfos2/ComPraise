<?php

if(isset($_FILES['image'], $_POST['ablum_id'])){
  $image_name = $_FILES['image']['name'];
  $image_size = $_FILES['image']['size'];
  $image_temp = $_FILES['image']['tmp_name'];
  
  $allowed_ext = array('jpg', 'jpeg','png', 'gif');
  $image_ext = strtolower(end(explode('.', $image_name)));
  
  $album_id = $_POST['album_id'];
  
  $errors = array();
  
  if(empty($image_name) || empty($album_id)){
    $errors[] = 'something is missing';
  
  }else {
 
    if(in_array($image_ext, $allowed_ext)=== false){
	  $errors[] = 'file type not allowed';
	}
    if($image_size > 2097152){
	  $errors[] = 'maxiumum file size is 2mb';
	}
	
	if($album_check($album_id) === false){
	  $errors[] = 'Couldn\'t upload to that album';
	}
	
	if(album_check($album_id) === false){
	  $errors[] = 'Couldn\'t upload to that album';
	}
  
  }
  if (!empty($errors)){
    foreach ($errors as $error){
	  echo $error. '<br>';
	}
  }else{
    upload_image($image_temp, $image_ext, $album_id);
	header('Location: view_albums.php?album_id='.$album_id);
	exit();
  }

}

?>