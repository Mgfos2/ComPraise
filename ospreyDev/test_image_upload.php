<?php
$con = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('micah_test');
if(isset($_FILES['image'], $_POST['album_id'])){

  $image_name = $_FILES['image']['name'];
  $image_size = $_FILES['image']['size'];
  $image_temp = $_FILES['image']['tmp_name'];
  
  $allowed_ext = array('jpg', 'jpeg','png', 'gif');
  $delim = explode('.', $image_name);
  $image_ext = strtolower(end($delim));
  

  
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
	
	if(album_check($album_id) === false){
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



if (empty($albums)){
echo '<p> You don\'t have any albums, <a href="create_album.php"> Create an Album</a></p>';
}else{
  
  ?> 


 <form action="" method="post" enctype="multipart/form-data">
    <p>Choose a file:<br><input type="file" name="image"/></p>
    <p>
    Choose an album:<br>
	<select name="album_id">
	  <?php
	    foreach($albums as $album){
		  echo '<option value="' .$album['id']. '">'.$album['name'].'</option>';
		}
	  ?>
	</select>
	</p>
    <p><input type="submit" value="Upload"/></p>
  </form>

<?php
function create_thumb($directory, $image, $destination) {
  $image_file = $image;
  $image = $directory.$image;
  if (file_exists($image)) {
    $source_size = getimagesize($image);
    if ($source_size !== false) {
      $thumb_width = 100;
      $thumb_height = 100;
      switch($source_size["mime"]) {
        case 'image/jpeg':
             $source = imagecreatefromjpeg($image);
        break;
        case 'image/png':
             $source = imagecreatefrompng($image);
        break;
        case 'image/gif':
             $source = imagecreatefromgif($image);
        break;
      }
      $source_aspect = round(($source_size[0] / $source_size[1]), 1);
      $thumb_aspect = round(($thumb_width / $thumb_height), 1);
      if ($source_aspect < $thumb_aspect) {
        $new_size = array($thumb_width, ($thumb_width / $source_size[0]) * $source_size[1]);
        $source_pos = array(0, ($new_size[1] - $thumb_height) / 2);
      } else if ($source_aspect > $thumb_aspect) {
        $new_size = array(($thumb_width / $source_size[1]) * $source_size[0], $thumb_height);
        $source_pos = array(($new_size[0] - $thumb_width) / 2, 0);
      } else {
        $new_size = array($thumb_width, $thumb_height);
        $source_pos = array(0, 0);
      }
      if ($new_size[0] < 1) $new_size[0] = 1;
      if ($new_size[1] < 1) $new_size[1] = 1;
      $thumb = imagecreatetruecolor($thumb_width, $thumb_height);
      imagecopyresampled($thumb, $source, 0, 0, $source_pos[0], $source_pos[1], $new_size[0], $new_size[1], $source_size[0], $source_size[1]);
      switch($source_size["mime"]) {
        case 'image/jpeg':
             imagejpeg($thumb, $destination.$image_file);
        break;
        case 'image/png':
              imagepng($thumb, $destination.$image_file);
        break;
        case 'image/gif':
             imagegif($thumb, $destination.$image_file);
        break;
		
      }
    }
  }
}
function album_check($album_id){
  $query = mysql_query("SELECT COUNT('album_id') FROM album WHERE album_id=$album_id AND user_id =".$_SESSION['id']);
  return (mysql_result($query, 0) == 1) ? true : false;

}

function get_album(){
 $albums = array();
 
 $albums_query = mysql_query("SELECT album.album_id, album.timestamp, album.name, LEFT(album.description, 50) as description, COUNT(image.image_id) as image_count
 FROM album
 LEFT JOIN image
 ON album.album_id = image.album_id
 WHERE album.user_id = ".$_SESSION['id']."
 GROUP BY album.album_id
 ");
 while($albums_row = mysql_fetch_assoc($albums_query)){
   $albums[] = array(
     'id'=> $albums_row['album_id'],
	 'timestamp'=> $albums_row['timestamp'],
	 'name' => $albums_row['name'],
	 'desc' => $albums_row['description'],
	 'count'=> $albums_row['image_count']
   );
 }
 
 return $albums;

}
function upload_image($image_temp, $image_ext, $album_id){
  
 mysql_query("INSERT INTO image VALUES('', '".$_SESSION['id']."', '$album_id', UNIX_TIMESTAMP(), '$image_ext')");

 $image_id = mysql_insert_id();
 $image_file = $image_id.'.'.$image_ext;
 move_uploaded_file($image_temp, 'uploads/'.$album_id.'/'.$image_file);
 
 #create_thumb('upload/'.$album_id.'/', $image_file, 'uploads/thumb/'.$album_id.'/');

 
}

?>