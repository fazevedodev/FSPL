<?php /* Smarty version Smarty-3.1.16, created on 2014-01-16 18:57:46
         compiled from ".\templates\step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1881052d805625487d8-37272836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e73454ab050a4919e7356e4ea6c2e209ab36c5f' => 
    array (
      0 => '.\\templates\\step2.tpl',
      1 => 1389895035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1881052d805625487d8-37272836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d805625e8a56_79510052',
  'variables' => 
  array (
    'db_name' => 0,
    'db_address' => 0,
    'db_user' => 0,
    'db_password' => 0,
    'teams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d805625e8a56_79510052')) {function content_52d805625e8a56_79510052($_smarty_tpl) {?>Step 2<br/>

DB Name: <?php echo $_smarty_tpl->tpl_vars['db_name']->value;?>
<br>
DB Address: <?php echo $_smarty_tpl->tpl_vars['db_address']->value;?>
<br>
DB User: <?php echo $_smarty_tpl->tpl_vars['db_user']->value;?>
<br>
DB Password: <?php echo $_smarty_tpl->tpl_vars['db_password']->value;?>
<br>

Teams: <?php echo $_smarty_tpl->tpl_vars['teams']->value;?>
<br>

<form method="POST" action="install.php">
    Name <input type="text" name="name"/><br>
    Tag <input type="text" name="tag"/><br>
    Logo <input type="text" name="logo"/><br>
    <input type="hidden" name="db_address" value="<?php echo $_smarty_tpl->tpl_vars['db_address']->value;?>
"/>
    <input type="hidden" name="db_name" value="<?php echo $_smarty_tpl->tpl_vars['db_name']->value;?>
"/>
    <input type="hidden" name="db_user" value="<?php echo $_smarty_tpl->tpl_vars['db_user']->value;?>
"/>
    <input type="hidden" name="db_password" value="<?php echo $_smarty_tpl->tpl_vars['db_password']->value;?>
"/>
    <input type="hidden" name="step" value="2"/>
    <input type="hidden" name="teams" value="<?php echo $_smarty_tpl->tpl_vars['teams']->value;?>
"/>
    <input type="submit" value="Add Team"/>
</form>

<br>

<form method="POST" action="install.php">
    <input type="hidden" name="db_address" value="<?php echo $_smarty_tpl->tpl_vars['db_address']->value;?>
"/>
    <input type="hidden" name="db_name" value="<?php echo $_smarty_tpl->tpl_vars['db_name']->value;?>
"/>
    <input type="hidden" name="db_user" value="<?php echo $_smarty_tpl->tpl_vars['db_user']->value;?>
"/>
    <input type="hidden" name="db_password" value="<?php echo $_smarty_tpl->tpl_vars['db_password']->value;?>
"/>
    <input type="hidden" name="step" value="2"/>
    <input type="hidden" name="teams" value="<?php echo $_smarty_tpl->tpl_vars['teams']->value;?>
"/>
    <input type="hidden" name="step" value="3"/>
    <input type="submit" value="Next"/>
</form>
<?php }} ?>
