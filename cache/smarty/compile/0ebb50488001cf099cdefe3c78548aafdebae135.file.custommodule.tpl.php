<?php /* Smarty version Smarty-3.1.8, created on 2013-08-02 09:24:47
         compiled from "C:\xampp\htdocs\prestashop\modules\custommodule\custommodule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2956251fb714900e097-26359247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ebb50488001cf099cdefe3c78548aafdebae135' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\custommodule\\custommodule.tpl',
      1 => 1375449882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2956251fb714900e097-26359247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fb7149039dc2_17257322',
  'variables' => 
  array (
    'manufacturers' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
    'mediumSize' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fb7149039dc2_17257322')) {function content_51fb7149039dc2_17257322($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<!-- Block mymodule -->

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#liquid').liquidcarousel({
                height: 150, //the height of the list
                duration: 100, //the duration of the animation
                hidearrows: true	//hide arrows if all of the list items are visible
            });
        });
    </script>
    <style>
        .blockmanufacturer li a
        {
            background: none!important;
        }
    </style>


<div id="manufacturers_block_left" class="block blockmanufacturer">
    <p class="title_block">Brands</p>
    <div id="liquid">
        <span class="previous"></span>
        <div class="wrapper">
            <?php if ($_smarty_tpl->tpl_vars['manufacturers']->value){?>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value){
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['first'] = $_smarty_tpl->tpl_vars['manufacturer']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value){?>
                            <li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['last']){?>last_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['first']){?>first_item<?php }else{ ?>item<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockmanufacturer'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['manufacturer']->value['image'], 'htmlall', 'UTF-8');?>
<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'];?>
-medium_default.jpg" alt="" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
"></a></li>
                                <?php }?>
                            <?php } ?>
                </ul>
            <?php }?>
        </div>
        <span class="next"></span>
    </div>
</div>
<!-- /Block mymodule --><?php }} ?>