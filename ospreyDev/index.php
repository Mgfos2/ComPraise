<?php
require_once('lib/smarty/libs/Smarty.class.php');
include 'init.php';
$logged_in;
$user_info = array();
if(logged_in()){
  $logged_in = 1;
  $user_info = user_data();
  $user_id = $user_info{'id'};
  $prof_pic = get_default_pic($user_id);
}else{
  $logged_in = 0;
}


	$smarty = new Smarty();
    $smarty->template_dir = 'templates';
    $smarty->compile_dir = 'cache';
	$smarty->assign('logged_in', $logged_in);
	$smarty->assign('user_info', $user_info);
	if($logged_in == 1){$smarty->assign('default_pic', $prof_pic);}
    $smarty->display('master.tpl');
	
	

?>
