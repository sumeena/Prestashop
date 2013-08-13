<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 05:46:46
         compiled from "C:\xampp\htdocs\prestashop\admin123/themes/default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3112651fb8006b2cd01-26339326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8861ea135c66453e419470bba0ade977f4ccf783' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin123/themes/default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3112651fb8006b2cd01-26339326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fb8006b35d72_37829159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fb8006b35d72_37829159')) {function content_51fb8006b35d72_37829159($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>