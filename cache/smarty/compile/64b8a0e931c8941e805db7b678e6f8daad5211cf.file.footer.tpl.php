<?php /* Smarty version Smarty-3.1.8, created on 2013-08-06 01:02:52
         compiled from "C:\xampp\htdocs\prestashop\themes\leo_tshirt\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191985200837c8bc7a1-20607039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64b8a0e931c8941e805db7b678e6f8daad5211cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leo_tshirt\\footer.tpl',
      1 => 1352085902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191985200837c8bc7a1-20607039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'LEO_PANELTOOL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5200837c8ce7d8_22996176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5200837c8ce7d8_22996176')) {function content_5200837c8ce7d8_22996176($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>
				</div>
<!-- Right -->	
				<div id="leo-rightcol">
					<div id="right_column" class="column grid_2 omega">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

					</div>
				</div>
			</div>	
		</div>
		</div>

<!-- Footer -->
			<div id="leo-footer" class="grid_9 alpha omega clearfix">
				<div class="leo-wrapper-footer">
					<div class="leo-wrapper">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

					</div>
				</div>
			</div>
		</div>
		<?php }?>
		 <?php if ($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value){?>
			<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	</body>
</html>
<?php }} ?>