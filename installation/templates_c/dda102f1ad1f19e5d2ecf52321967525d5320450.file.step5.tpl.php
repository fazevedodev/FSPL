<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 20:02:46
         compiled from ".\templates\step5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3049752d82500520102-08685110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dda102f1ad1f19e5d2ecf52321967525d5320450' => 
    array (
      0 => '.\\templates\\step5.tpl',
      1 => 1390244563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3049752d82500520102-08685110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d82500552d87_89399227',
  'variables' => 
  array (
    'db_address' => 0,
    'db_name' => 0,
    'db_user' => 0,
    'db_password' => 0,
    'unserialized_teams' => 0,
    'team' => 0,
    'maps' => 0,
    'map' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d82500552d87_89399227')) {function content_52d82500552d87_89399227($_smarty_tpl) {?>Step 5

Database<br>
Address: <?php echo $_smarty_tpl->tpl_vars['db_address']->value;?>
<br>
Name: <?php echo $_smarty_tpl->tpl_vars['db_name']->value;?>
<br>
User: <?php echo $_smarty_tpl->tpl_vars['db_user']->value;?>
<br>
Password: <?php echo $_smarty_tpl->tpl_vars['db_password']->value;?>

<hr>

Teams<br>
<?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unserialized_teams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->_loop = true;
?>
    Name: <?php echo $_smarty_tpl->tpl_vars['team']->value->get_name();?>
<br>
    Tag: <?php echo $_smarty_tpl->tpl_vars['team']->value->get_tag();?>
<br>
    Logo: <?php echo $_smarty_tpl->tpl_vars['team']->value->get_logo();?>
<hr>
<?php } ?>

<br>

<?php  $_smarty_tpl->tpl_vars['map'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['map']->_loop = false;
 $_from = unserialize($_smarty_tpl->tpl_vars['maps']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['map']->key => $_smarty_tpl->tpl_vars['map']->value) {
$_smarty_tpl->tpl_vars['map']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['map']->value;?>

<?php } ?><?php }} ?>
