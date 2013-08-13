<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 03:21:11
         compiled from "C:\xampp\htdocs\prestashop\modules\blocksharefb\blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1650151fb5de757b786-63649008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f6b4d179ee6946f6ffec65aca469f98f148051c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blocksharefb\\blocksharefb.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1650151fb5de757b786-63649008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fb5de75b4876_60040587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fb5de75b4876_60040587')) {function content_51fb5de75b4876_60040587($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><?php echo smartyTranslate(array('s'=>'Share on Facebook','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>