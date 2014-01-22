<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 15:34:17
         compiled from ".\templates\step3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113652d81600903512-00463757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46918471655edff9fd36c6cf72c39530859338cb' => 
    array (
      0 => '.\\templates\\step3.tpl',
      1 => 1390228429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113652d81600903512-00463757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d8160093a018_82953912',
  'variables' => 
  array (
    'available_maps' => 0,
    'map' => 0,
    'db_address' => 0,
    'db_name' => 0,
    'db_user' => 0,
    'db_password' => 0,
    'teams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d8160093a018_82953912')) {function content_52d8160093a018_82953912($_smarty_tpl) {?>Step 3<br>
<form method="POST" action="install.php">
    <?php  $_smarty_tpl->tpl_vars['map'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['map']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_maps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['map']->key => $_smarty_tpl->tpl_vars['map']->value) {
$_smarty_tpl->tpl_vars['map']->_loop = true;
?>
        <input type="checkbox" name="available_maps[]" value="<?php echo $_smarty_tpl->tpl_vars['map']->value->get_id();?>
"/> <?php echo $_smarty_tpl->tpl_vars['map']->value->get_name();?>
<br/>
    <?php } ?>
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
    <input type="hidden" name="step" value="4"/>
    <input type="submit" value="Next"/>
</form>
<?php }} ?>
