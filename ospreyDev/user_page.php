<?php
	include 'init.php';
	require_once('lib/smarty/libs/Smarty.class.php');
	$user_id = $_GET['user_id'];
	$profile_info = profile_data($user_id);
	$prof_pic = get_default_pic($user_id);
	$smarty = new Smarty();
    $smarty->template_dir = 'templates';
    $smarty->compile_dir = 'cache';	
	$smarty->assign('default_pic', $prof_pic);
	$smarty->assign('profile_name', $profile_info['first_name']);
    $smarty->display('default.tpl');

	
	
	if(!logged_in()){
	  header('Location: index.php');
	  exit();
	}else{
	   if(isset($_POST['friend'])){
	    $user = $_SESSION['id'];
	    $prof_id = $_GET['user_id'];
	    #echo $user.'<br>';
	    #echo $prof_id;
	    #echo $_POST['friend'];
	    friend_request($prof_id);
	    header('Location: index.php');
	  }
	}
	
	
?>