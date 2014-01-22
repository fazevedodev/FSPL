<?php /* Smarty version Smarty-3.1.16, created on 2014-01-16 17:12:33
         compiled from ".\templates\step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3209452d7fbe923ccf3-35510825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8759b6685940b32c1aea0bae74c513a34e00e3b9' => 
    array (
      0 => '.\\templates\\step1.tpl',
      1 => 1389888741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3209452d7fbe923ccf3-35510825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d7fbe927b4f3_69504825',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d7fbe927b4f3_69504825')) {function content_52d7fbe927b4f3_69504825($_smarty_tpl) {?>Step 1
<form method="POST" action="install.php">
    Address <input type="text" name="db_address"/><br>
    Name <input type="text" name="db_name"/><br>
    User <input type="text" name="db_user"/><br/>
    Password <input type="text" name="db_password"/><br/>
    <input type="hidden" name="step" value="2"/>
    <input type="submit" value="Next">
</form><?php }} ?>
