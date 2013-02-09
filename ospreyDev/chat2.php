<?php
session_start();
echo $_SESSION['user'];
require 'init1.php';

if(isset($_POST['method']) === true && empty($_POST['method']) === false){
	$chat 		= new chat();
	$method 	= trim($_POST['method']);
	
	if ($method === 'fetch'){
	
		$messages = $chat->fetchMessages();
		if(empty($messages) === true){
			echo 'There are currently no messages in the chat';
		}else{
			foreach($messages as $message){
			?>
				<div class = "message">
					<a href="#"><?php echo $message['first_name']; ?></a>:
					<p><?php echo $message['message']?></p>
			<?php
			}
		}
	} else if ($method === 'throw' && isset($_POST['message']) === true){
		$message = trim($_POST['message']);
		if(empty($message) === false){
			$chat->throwMessage($_SESSION['user'], $message);
		}
	
	}

}
?>