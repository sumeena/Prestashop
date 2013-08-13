<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 02:13:51
         compiled from "C:\xampp\htdocs\prestashop\modules\favoriteproducts\views\templates\hook\favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1192151fb4e1f3f5452-31065103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44caeb6eb53736f2729bfbccc709bcd4296b957e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\favoriteproducts\\views\\templates\\hook\\favoriteproducts-header.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1192151fb4e1f3f5452-31065103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fb4e1f448611_84238500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fb4e1f448611_84238500')) {function content_51fb4e1f448611_84238500($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false);?>
';
	var favorite_products_url_remove = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false);?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>