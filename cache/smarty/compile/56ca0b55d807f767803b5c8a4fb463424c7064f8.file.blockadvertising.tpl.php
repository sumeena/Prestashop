<?php /* Smarty version Smarty-3.1.8, created on 2013-08-06 01:02:52
         compiled from "C:\xampp\htdocs\prestashop\themes\leo_tshirt\modules\blockadvertising\blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93405200837c1e5826-02168377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ca0b55d807f767803b5c8a4fb463424c7064f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leo_tshirt\\modules\\blockadvertising\\blockadvertising.tpl',
      1 => 1352085906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93405200837c1e5826-02168377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5200837c1f3345_13799333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5200837c1f3345_13799333')) {function content_5200837c1f3345_13799333($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<div>
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="260"  height="230" /></a>
	</div>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>