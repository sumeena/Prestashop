<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 02:17:04
         compiled from "C:\xampp\htdocs\prestashop\themes\default\mobile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18551fb4ee0c06bd7-21812852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33ccc68ff5698e445cb89ecbc1f97a0ac6879209' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\mobile\\index.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18551fb4ee0c06bd7-21812852',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fb4ee0c41589_18197117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fb4ee0c41589_18197117')) {function content_51fb4ee0c41589_18197117($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>