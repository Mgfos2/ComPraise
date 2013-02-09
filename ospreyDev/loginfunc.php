<?php
include 'init.php';

  if (isset($_POST['login_email'], $_POST['login_password'] )){
    $login_email = $_POST['login_email'];
    $login_password = $_POST['login_password'];
		
   $login = login_check($login_email, $login_password);
   if ($login === false){
     echo "<br>Incorrect login";
	 
   }else{
   
     $_SESSION['id'] = $login;
	 header('Location:index.php');
	
   }
   
  }  
  
  ?>