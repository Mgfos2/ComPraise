<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 20:47:17
         compiled from "templates\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:682350e4c584823ef2-27533499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f85f71a96081782a6b89876d08be88e9ef5efea0' => 
    array (
      0 => 'templates\\default.tpl',
      1 => 1358538381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '682350e4c584823ef2-27533499',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e4c584a1ef08_35434318',
  'variables' => 
  array (
    'profile_name' => 0,
    'default_pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e4c584a1ef08_35434318')) {function content_50e4c584a1ef08_35434318($_smarty_tpl) {?><br>

<b><?php echo $_smarty_tpl->tpl_vars['profile_name']->value;?>
</b>
<br>
<form method="post" action="">
  <br><img src="uploads/thumb/<?php echo $_smarty_tpl->tpl_vars['default_pic']->value['album_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['default_pic']->value['image_id'];?>
.<?php echo $_smarty_tpl->tpl_vars['default_pic']->value['image_ext'];?>
"/>
  <input type="submit" value="Add Friend"/>
  <input type="hidden" name="friend" value="01"/>
</form>  
<?php }} ?>