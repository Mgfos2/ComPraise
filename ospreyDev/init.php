<?php
ob_start();

session_start();

$con = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('micah_test');

include 'user_func.php';
include 'album_func.php';
include 'image_func.php';
include 'thumb_func.php';
include 'search_func.php';
?>