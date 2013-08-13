<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 02:17:20
         compiled from "C:\xampp\htdocs\prestashop\themes\default\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1564651fb4ef01fbfa5-93515933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8bfdff7d5c70b79fb299597de800bc1062991e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\category-count.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1564651fb4ef01fbfa5-93515933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fb4ef02193b4_13431186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fb4ef02193b4_13431186')) {function content_51fb4ef02193b4_13431186($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>