<?php
session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;
require 'init1.php';




?>

<!DOCTYPE html>
<html>
	<head>
		<title>AJAX Chat</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
	
		<div class="chat">
			<div class="messages"></div>
			<textarea class="entry" placeholder="Enter your message here"></textarea>
		</div>
		<script type='text/javascript' src="js/jquery1.js"></script>
		<script type='text/javascript' src="js/chat.js"></script>
	</body>
	
</html>
<?php

?>