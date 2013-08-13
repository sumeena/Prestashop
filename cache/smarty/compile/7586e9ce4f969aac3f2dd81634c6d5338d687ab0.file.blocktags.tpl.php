<?php /* Smarty version Smarty-3.1.8, created on 2013-08-06 01:02:51
         compiled from "C:\xampp\htdocs\prestashop\modules\blocktags\blocktags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300295200837bd19e84-66233465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7586e9ce4f969aac3f2dd81634c6d5338d687ab0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blocktags\\blocktags.tpl',
      1 => 1356947356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300295200837bd19e84-66233465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5200837bd7c8e2_45924680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5200837bd7c8e2_45924680')) {function content_5200837bd7c8e2_45924680($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Block tags module -->
<div id="tags_block_left" class="block tags_block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Tags','mod'=>'blocktags'),$_smarty_tpl);?>
</h4>
	<p class="block_content">
<?php if ($_smarty_tpl->tpl_vars['tags']->value){?>
	<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
 $_smarty_tpl->tpl_vars['tag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->index++;
 $_smarty_tpl->tpl_vars['tag']->first = $_smarty_tpl->tpl_vars['tag']->index === 0;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['tag']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
		<a href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['tag']->value['name']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,"tag=".$_tmp1);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blocktags'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tag']->value['name'], 'html', 'UTF-8');?>
" class="<?php echo $_smarty_tpl->tpl_vars['tag']->value['class'];?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }else{ ?>item<?php }?>"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tag']->value['name'], 'html', 'UTF-8');?>
</a>
	<?php } ?>
<?php }else{ ?>
	<?php echo smartyTranslate(array('s'=>'No tags specified yet','mod'=>'blocktags'),$_smarty_tpl);?>

<?php }?>
	</p>
</div>
<!-- /Block tags module -->
<?php }} ?>