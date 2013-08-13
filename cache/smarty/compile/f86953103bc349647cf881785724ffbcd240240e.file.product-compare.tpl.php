<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 02:30:41
         compiled from "C:\xampp\htdocs\prestashop\themes\default\product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2506551fb5211e873b0-58790422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f86953103bc349647cf881785724ffbcd240240e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\default\\product-compare.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2506551fb5211e873b0-58790422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fb5211e9eee5_79859653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fb5211e9eee5_79859653')) {function content_51fb5211e9eee5_79859653($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
//]]>
</script>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison');?>
" onsubmit="true">
		<p>
		<input type="submit" id="bt_compare" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

<?php }} ?>