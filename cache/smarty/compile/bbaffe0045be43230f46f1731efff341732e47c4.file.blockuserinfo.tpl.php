<?php /* Smarty version Smarty-3.1.8, created on 2013-08-06 01:02:51
         compiled from "C:\xampp\htdocs\prestashop\themes\leo_tshirt\modules\blockuserinfo\blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226475200837b92c404-23265377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbaffe0045be43230f46f1731efff341732e47c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\leo_tshirt\\modules\\blockuserinfo\\blockuserinfo.tpl',
      1 => 1352085906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226475200837b92c404-23265377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
    'cookie' => 0,
    'PS_CATALOG_MODE' => 0,
    'order_process' => 0,
    'cart_qties' => 0,
    'priceDisplay' => 0,
    'blockuser_cart_flag' => 0,
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5200837b9c87a8_50255599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5200837b9c87a8_50255599')) {function content_5200837b9c87a8_50255599($_smarty_tpl) {?>
<!-- Block user information module HEADER -->
<div id="header_user">

	<p id="header_user_info">		
		<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" class="account"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout");?>
" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="logout">(<?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
)</a>
		<?php }else{ ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
"><?php echo smartyTranslate(array('s'=>'Log in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		<?php }?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
"><?php echo smartyTranslate(array('s'=>'Register','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('mywishlist',true);?>
"><?php echo smartyTranslate(array('s'=>'My Wishlist','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
			<a class="Shoppingcart" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order.php?step=1',true);?>
"><?php echo smartyTranslate(array('s'=>'Shopping cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
	
	</p>
	<ul id="header_nav" style="display:none;">
		<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
		<li id="shopping_cart">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value['php'],true);?>
" title="<?php echo smartyTranslate(array('s'=>'Your Shopping Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Cart:','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
			<span class="ajax_cart_quantity<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0){?> hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span>
			<span class="ajax_cart_product_txt<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value!=1){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'product','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			<span class="ajax_cart_product_txt_s<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value<2){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'products','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>=0){?>
				<span class="ajax_cart_total<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0){?> hidden<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?>
						<?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,$_smarty_tpl->tpl_vars['blockuser_cart_flag']->value)),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php $_smarty_tpl->tpl_vars['blockuser_cart_flag'] = new Smarty_variable(constant('Cart::BOTH_WITHOUT_SHIPPING'), null, 0);?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,$_smarty_tpl->tpl_vars['blockuser_cart_flag']->value)),$_smarty_tpl);?>

					<?php }?>
				</span>
			<?php }?>
			<span class="ajax_cart_no_product<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>0){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'(empty)','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
		</li>
		<?php }?>		
	</ul>
</div>

<!-- /Block user information module HEADER -->
<?php }} ?>