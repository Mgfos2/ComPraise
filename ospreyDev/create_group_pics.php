<?php
include 'init.php';


?>
<?php
if (isset($_POST['album_name'], $_POST['album_description'])){
  $album_name = $_POST['album_name'];
  $album_desc = $_POST['album_description'];
  $errors = array();
  
  if(empty($album_name) || empty($album_desc)){
    $errors[] = 'Album name and description required';
  }else {
    if(strlen($album_name) > 55 || strlen($album_desc) > 255){
	  $errors[] = 'One of more fields contains too many characters';
	}
  
  }

}

if(!empty($errors)){
  foreach($errors as $error){
    echo $error, '<br>';
  }
}else {
  create_album($album_name, $album_desc);
  header('Location: albums.php');
  exit();
}

?>