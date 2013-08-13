<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 03:36:16
         compiled from "C:\xampp\htdocs\prestashop\admin123/themes/default\template\controllers\modules\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162151fb6170123d70-55728375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91eba2470312e4416c2608b915d36dbc26121db2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin123/themes/default\\template\\controllers\\modules\\content.tpl',
      1 => 1356947354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162151fb6170123d70-55728375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fb61701809e6_54000559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fb61701809e6_54000559')) {function content_51fb61701809e6_54000559($_smarty_tpl) {?>


<?php if (isset($_smarty_tpl->tpl_vars['module_content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['module_content']->value;?>

<?php }else{ ?>
	<?php if (!isset($_GET['configure'])){?>
		<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php if (isset($_GET['select'])&&$_GET['select']=='favorites'){?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/favorites.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }else{ ?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	<?php }?>
<?php }?>
<?php }} ?>