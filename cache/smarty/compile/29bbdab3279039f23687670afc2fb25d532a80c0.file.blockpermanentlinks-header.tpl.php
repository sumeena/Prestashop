<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 02:13:51
         compiled from "C:\xampp\htdocs\prestashop\modules\blockpermanentlinks\blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:890951fb4e1f527fe8-16940709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29bbdab3279039f23687670afc2fb25d532a80c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '890951fb4e1f527fe8-16940709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fb4e1f54d725_92197831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fb4e1f54d725_92197831')) {function content_51fb4e1f54d725_92197831($_smarty_tpl) {?>

<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" title="<?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li id="header_link_sitemap"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap');?>
" title="<?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('<?php echo $_smarty_tpl->tpl_vars['come_from']->value;?>
', '<?php echo addslashes(addslashes($_smarty_tpl->tpl_vars['meta_title']->value));?>
', '<?php echo smartyTranslate(array('s'=>'bookmark','mod'=>'blockpermanentlinks','js'=>1),$_smarty_tpl);?>
');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>