<?php /* Smarty version Smarty-3.1.12, created on 2012-11-27 20:19:21
         compiled from "init.php" */ ?>
<?php /*%%SmartyHeaderCode:2723150b3fa340ff4a8-81781154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '429d8c242eaf272df45b7913096a208c6670c2dc' => 
    array (
      0 => 'init.php',
      1 => 1354034138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2723150b3fa340ff4a8-81781154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b3fa34103953_66113983',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b3fa34103953_66113983')) {function content_50b3fa34103953_66113983($_smarty_tpl) {?><<?php ?>?php
ob_start();

session_start();

$con = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('micah_test');

include 'user_func.php';

?<?php ?>><?php }} ?>