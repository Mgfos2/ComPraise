<?php
include 'init.php';

$album_name = $_POST['album_name'];
$album_desc = $_POST['album_description'];
$album_id = $_GET['album_id'];




edit_album($album_id, $album_name, $album_desc);


?>