<?php /* Smarty version Smarty-3.1.8, created on 2013-08-06 01:02:52
         compiled from "C:\xampp\htdocs\prestashop\themes\leo_tshirt\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1285200837c7b4ec4-94630973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60fcb24cb961fdf9c7d4cd93390825fe6578ebaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leo_tshirt\\layout.tpl',
      1 => 1352085904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1285200837c7b4ec4-94630973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_header' => 0,
    'HOOK_HEADER' => 0,
    'template' => 0,
    'display_footer' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5200837c7d78b9_03837793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5200837c7d78b9_03837793')) {function content_5200837c7d78b9_03837793($_smarty_tpl) {?>

<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['template']->value;?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ('./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>

<?php }?><?php }} ?>