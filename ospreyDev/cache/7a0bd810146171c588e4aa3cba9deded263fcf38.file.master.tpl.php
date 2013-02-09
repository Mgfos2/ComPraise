<?php /* Smarty version Smarty-3.1.12, created on 2013-01-27 18:45:14
         compiled from "templates\master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25916509269ac4b9447-23592064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a0bd810146171c588e4aa3cba9deded263fcf38' => 
    array (
      0 => 'templates\\master.tpl',
      1 => 1359308705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25916509269ac4b9447-23592064',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509269ac5082c7_23101255',
  'variables' => 
  array (
    'logged_in' => 0,
    'user_info' => 0,
    'default_pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509269ac5082c7_23101255')) {function content_509269ac5082c7_23101255($_smarty_tpl) {?><link href="css/ospreDev.css" rel="stylesheet" type="text/css"/>
<script language="javascript" type="text/javascript" src="js/jquery1.js"></script>
<script language="javascript" type="text/javascript" src="js/cycle_plugin.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery-css-transform.js"></script>
<script language="javascript" type="text/javascript" src="js/rotate3Di.js"></script>
<script language="javascript" type="text/javascript" src="js/imgeffects2.js"></script>
<script language="javascript" type="text/javascript" src="js/search.js"></script>
<script language="javascript" type="text/javascript" src="js/user_notif.js"></script>
<div id="search">
		<form action="search_results.php" method="post">
		<span id="go_btn"><input type="submit" value="Go"></span>
		<input type="text" class="search" name="search_people" id="search_members"/>
		</form>
</div>

<div class ="notfication"></div>
<br><br><div id="menu">	   		
	<ul>
		<li class="current_page_item"><a href="index.php">Home</a></li>
		<li><a href="#">Join</a></li>
		<li><a href="#">Partners</a></li>
		<li><a href="#">Events</a></li>
		<li><a href="#">Media</a></li>
		<li><a href="#">Resources</a></li>
		<li><a href="#">Members Area</a></li>
	</ul>
</div>
<?php if ($_smarty_tpl->tpl_vars['logged_in']->value!=1){?>
  <center><ul class="sample_pics">
    <li><img src="img/ina.jpg" alt="jelly" width="580" height="255"/></li>
    <li><img src="img/kavita.png" alt="koala" width="580"height="255"/></li>
    <li><img src="img/Mergen.jpg" alt="tulips" width="580"height="255"/></li>
    <li><img src="img/Micah.jpg" alt="Micah" width="580"height="255"/></li>
  </ul></center>
 <?php echo $_smarty_tpl->getSubTemplate ('login.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['user_info']->value['admin']==1){?>
  <h2>Administrator Page</h2>
  <b>Hello, <?php echo $_smarty_tpl->tpl_vars['user_info']->value['first_name'];?>
</b>
  <textarea rows="5" cols="70" placeholder="Administrator notifications"></textarea> 
  <br><b><a href="logout.php"</a>Log Out</b>  
<?php }else{ ?>
  <br>
  <b>Hello,<?php echo $_smarty_tpl->tpl_vars['user_info']->value['first_name'];?>
</b>
  <br><b><a href="logout.php"</a>Log Out</b>
  <br><img src="uploads/thumb/<?php echo $_smarty_tpl->tpl_vars['default_pic']->value['album_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['default_pic']->value['image_id'];?>
.<?php echo $_smarty_tpl->tpl_vars['default_pic']->value['image_ext'];?>
"/>
  <div id="edit_profile">
    <br><b><a href="edit_profile.php"</a>Edit Profile</b>
	<br><b><a href="image_page.php"</a>Images</b>
  </div>
  <div id="user_notifications"></div>
<?php }?>


<?php }} ?>