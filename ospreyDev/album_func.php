<?php
function album_data($album_id){
  
  $userinfo_query = mysql_query("SELECT * FROM album WHERE album_id = $album_id");
  return(mysql_fetch_array($userinfo_query));


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

function create_album($album_name, $album_description){
  $album_name = mysql_real_escape_string(htmlentities($album_name));
  $album_description = mysql_real_escape_string(htmlentities($album_description));
  
  mysql_query("INSERT INTO album VALUES('', '".$_SESSION['id']."', UNIX_TIMESTAMP(), '$album_description', '$album_name')");
  mkdir('uploads/'.mysql_insert_id(), 0744);
  mkdir('uploads/thumb/'.mysql_insert_id(), 0744);


}


function edit_album($album_id, $album_name, $album_desc){
  $update_album_query = mysql_query("UPDATE album SET name = '$album_name', description = '$album_desc' WHERE album_id = '$album_id'");
  header('Location:albums.php');

}



?>