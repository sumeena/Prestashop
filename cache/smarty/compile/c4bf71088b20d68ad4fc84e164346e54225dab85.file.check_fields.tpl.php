<?php /* Smarty version Smarty-3.1.8, created on 2013-08-05 00:44:50
         compiled from "C:\xampp\htdocs\prestashop\admin123/themes/default\template\controllers\products\multishop\check_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1888551ff2dc2abbe60-14595183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4bf71088b20d68ad4fc84e164346e54225dab85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin123/themes/default\\template\\controllers\\products\\multishop\\check_fields.tpl',
      1 => 1356947354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1888551ff2dc2abbe60-14595183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_multishop_checkboxes' => 0,
    'product_tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ff2dc2ace097_13429092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ff2dc2ace097_13429092')) {function content_51ff2dc2ace097_13429092($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value)&&$_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value){?>
	<label style="float: none">
		<input type="checkbox" style="vertical-align: text-bottom" onclick="$('#product-tab-content-<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
 input[name^=\'multishop_check[\']').attr('checked', this.checked); ProductMultishop.checkAll<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>
()" />
		<?php echo smartyTranslate(array('s'=>'Check/uncheck all (you are editing this page for several shops, some fields like "name" or "price" are disabled, you have to check these fields in order to edit them for these shops)'),$_smarty_tpl);?>

	</label>
<?php }?><?php }} ?>