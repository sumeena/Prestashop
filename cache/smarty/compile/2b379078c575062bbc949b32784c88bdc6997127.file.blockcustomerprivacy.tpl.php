<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 09:41:11
         compiled from "C:\xampp\htdocs\prestashop\modules\blockcustomerprivacy\blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2265751fbb6f7774d19-71490134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b379078c575062bbc949b32784c88bdc6997127' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockcustomerprivacy\\blockcustomerprivacy.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2265751fbb6f7774d19-71490134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fbb6f77d4795_73019881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fbb6f77d4795_73019881')) {function content_51fbb6f77d4795_73019881($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>