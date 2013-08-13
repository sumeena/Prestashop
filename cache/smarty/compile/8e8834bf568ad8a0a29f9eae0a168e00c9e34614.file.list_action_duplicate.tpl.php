<?php /* Smarty version Smarty-3.1.8, created on 2013-08-05 00:44:42
         compiled from "C:\xampp\htdocs\prestashop\admin123/themes/default\template\helpers\list\list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2053351ff2dba4e1cb1-66363759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e8834bf568ad8a0a29f9eae0a168e00c9e34614' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin123/themes/default\\template\\helpers\\list\\list_action_duplicate.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2053351ff2dba4e1cb1-66363759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ff2dba4efa80_75957618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ff2dba4efa80_75957618')) {function content_51ff2dba4efa80_75957618($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>