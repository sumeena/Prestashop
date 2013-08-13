<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 09:46:00
         compiled from "C:\xampp\htdocs\prestashop\modules\cheque\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2332951fbb818074f77-65519461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d577167b77a07cb2911d4248b09597bc9b71779' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\cheque\\views\\templates\\hook\\payment.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2332951fbb818074f77-65519461',
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
  'unifunc' => 'content_51fbb8180f9c08_88652157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fbb8180f9c08_88652157')) {function content_51fbb8180f9c08_88652157($_smarty_tpl) {?>

<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
cheque.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
" width="86" height="49" />
		<?php echo smartyTranslate(array('s'=>'Pay by cheque (order process will be longer)','mod'=>'cheque'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>