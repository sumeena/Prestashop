<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 09:46:00
         compiled from "C:\xampp\htdocs\prestashop\modules\bankwire\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288651fbb81810ea70-95225199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5679a585ae09a6191abd9840b12c9f76461b088d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\bankwire\\views\\templates\\hook\\payment.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288651fbb81810ea70-95225199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'this_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fbb8181406d4_33894538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fbb8181406d4_33894538')) {function content_51fbb8181406d4_33894538($_smarty_tpl) {?>

<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment');?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
bankwire.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
" width="86" height="49"/>
		<?php echo smartyTranslate(array('s'=>'Pay by bank wire (order process will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>

	</a>
</p><?php }} ?>