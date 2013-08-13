<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 02:13:51
         compiled from "C:\xampp\htdocs\prestashop\modules\feeder\feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1279051fb4e1f465240-81079617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7496453337735ac0a3e473eb951a501b145d22d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\feeder\\feederHeader.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1279051fb4e1f465240-81079617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fb4e1f470719_29105930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fb4e1f470719_29105930')) {function content_51fb4e1f470719_29105930($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>