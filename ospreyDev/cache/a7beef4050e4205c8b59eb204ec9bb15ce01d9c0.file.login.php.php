<?php /* Smarty version Smarty-3.1.12, created on 2012-11-28 04:53:37
         compiled from "login.php" */ ?>
<?php /*%%SmartyHeaderCode:376950b3f91cde2136-03671197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7beef4050e4205c8b59eb204ec9bb15ce01d9c0' => 
    array (
      0 => 'login.php',
      1 => 1354074761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '376950b3f91cde2136-03671197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b3f91cded621_79251772',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b3f91cded621_79251772')) {function content_50b3f91cded621_79251772($_smarty_tpl) {?><form action="loginfunc.php" method="post">
  <p>
      Email:<br> <input type-"email" name="login_email" /><br>
	  Password:<br> <input type="password" name="login_password" /><br>
	  <input type="submit" value="Login"/>
	 <a href="register.php"><button type="button">Register</button></a>
  </p>
</form>
<?php }} ?>