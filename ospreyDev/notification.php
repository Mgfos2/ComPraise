<?php
include 'init.php';
$method = $_POST['method']; 
$user = $_SESSION['id'];
if($method == 'fetch'){
  $notification = retrieveNotification($user);
  //print_r($notification);
  if(!empty($notification)){
    foreach($notification as $notif){
		print_r($notif);
	}
  }else{
    echo 'You currently do not have any notification';
  }
}

?>