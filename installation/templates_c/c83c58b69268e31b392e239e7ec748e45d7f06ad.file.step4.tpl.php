<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 19:55:13
         compiled from ".\templates\step4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1873152d82115d093f5-96658640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83c58b69268e31b392e239e7ec748e45d7f06ad' => 
    array (
      0 => '.\\templates\\step4.tpl',
      1 => 1390244111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1873152d82115d093f5-96658640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d82115da5834_58089363',
  'variables' => 
  array (
    'db_address' => 0,
    'db_name' => 0,
    'db_user' => 0,
    'db_password' => 0,
    'unserialized_teams' => 0,
    'team' => 0,
    'maps' => 0,
    'map_id' => 0,
    'serialized_maps' => 0,
    'teams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d82115da5834_58089363')) {function content_52d82115da5834_58089363($_smarty_tpl) {?>Step 4<br>

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

Maps<br>
<?php  $_smarty_tpl->tpl_vars['map_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['map_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['map_id']->key => $_smarty_tpl->tpl_vars['map_id']->value) {
$_smarty_tpl->tpl_vars['map_id']->_loop = true;
?>
    <?php echo $_smarty_tpl->tpl_vars['map_id']->value;?>
<br>
<?php } ?>


<form method="POST" action="install.php">
    <input type="hidden" name="maps" value="<?php echo $_smarty_tpl->tpl_vars['serialized_maps']->value;?>
"/>
    <input type="hidden" name="db_address" value="<?php echo $_smarty_tpl->tpl_vars['db_address']->value;?>
"/>
    <input type="hidden" name="db_name" value="<?php echo $_smarty_tpl->tpl_vars['db_name']->value;?>
"/>
    <input type="hidden" name="db_user" value="<?php echo $_smarty_tpl->tpl_vars['db_user']->value;?>
"/>
    <input type="hidden" name="db_password" value="<?php echo $_smarty_tpl->tpl_vars['db_password']->value;?>
"/>
    <input type="hidden" name="step" value="3"/>
    <input type="hidden" name="teams" value="<?php echo $_smarty_tpl->tpl_vars['teams']->value;?>
"/>
    <input type="hidden" name="step" value="5"/>
    <input type="submit" value="Install"/>
</form>
<?php }} ?>
