<?php

function upload_image($image_temp, $image_ext, $album_id){
  
 mysql_query("INSERT INTO image VALUES('', '".$_SESSION['id']."', '$album_id', UNIX_TIMESTAMP(), '$image_ext',0)");

 $image_id = mysql_insert_id();
 $image_file = $image_id.'.'.$image_ext;
 move_uploaded_file($image_temp, 'uploads/'.$album_id.'/'.$image_file);
 
 create_thumb('uploads/'.$album_id.'/', $image_file, 'uploads/thumb/'.$album_id.'/');

 
}

function get_images($album_id){
$images = array();

$image_query = mysql_query("SELECT image_id, album_id, date_uploaded, image_ext FROM image WHERE album_id=$album_id AND user_id =".$_SESSION['id']);
while ($images_row = mysql_fetch_assoc($image_query)){
  $images[] = array(
			'id' => $images_row['image_id'],
			'album' => $images_row['album_id'],
			'timestamp' => $images_row['date_uploaded'],
			'ext' => $images_row['image_ext']
  );
}
return $images;

}

function image_check($image_id){
$query = mysql_query("SELECT COUNT(image_id) FROM images WHERE image_id=".$image_id." AND user_id =". $_SESSION['id']);
return (mysql_result($query) === 0) ? false : true;
}


function delete_image($image_id){


}

function get_default_pic($user_id){
$default_pic = array(); 
$result = mysql_query("SELECT album_id, image_id, image_ext FROM image WHERE user_id = $user_id AND default_pic = 1");
$default_pic = mysql_fetch_array($result);
return $default_pic;

}

function set_default_pic($image_id){
mysql_query("UPDATE image SET default_pic= 0 WHERE default_pic = 1");
mysql_query("UPDATE image SET default_pic = 1 WHERE image_id=$image_id");

}

?>