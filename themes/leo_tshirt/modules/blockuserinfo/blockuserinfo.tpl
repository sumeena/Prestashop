{*
* 2007-2011 PrestaShop 
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2011 PrestaShop SA
*  @version  Release: $Revision: 6594 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- Block user information module HEADER -->
<div id="header_user">

	<p id="header_user_info">		
		{if $logged}
			<a href="{$link->getPageLink('my-account', true)}" class="account"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
			<a href="{$link->getPageLink('index', true, NULL, "mylogout")}" title="{l s='Log me out' mod='blockuserinfo'}" class="logout">({l s='Log out' mod='blockuserinfo'})</a>
		{else}
			<a href="{$link->getPageLink('my-account', true)}">{l s='Log in' mod='blockuserinfo'}</a>
		{/if}
			<a href="{$link->getPageLink('my-account', true)}">{l s='Register' mod='blockuserinfo'}</a>
			<a href="{$link->getPageLink('mywishlist', true)}">{l s='My Wishlist' mod='blockuserinfo'}</a>
			<a class="Shoppingcart" href="{$link->getPageLink('order.php?step=1', true)}">{l s='Shopping cart' mod='blockuserinfo'}</a>
	
	</p>
	<ul id="header_nav" style="display:none;">
		{if !$PS_CATALOG_MODE}
		<li id="shopping_cart">
			<a href="{$link->getPageLink($order_process.php, true)}" title="{l s='Your Shopping Cart' mod='blockuserinfo'}">{l s='Cart:' mod='blockuserinfo'}</a>
			<span class="ajax_cart_quantity{if $cart_qties == 0} hidden{/if}">{$cart_qties}</span>
			<span class="ajax_cart_product_txt{if $cart_qties != 1} hidden{/if}">{l s='product' mod='blockuserinfo'}</span>
			<span class="ajax_cart_product_txt_s{if $cart_qties < 2} hidden{/if}">{l s='products' mod='blockuserinfo'}</span>
			{if $cart_qties >= 0}
				<span class="ajax_cart_total{if $cart_qties == 0} hidden{/if}">
					{if $priceDisplay == 1}
						{assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
						{convertPrice price=$cart->getOrderTotal(false, $blockuser_cart_flag)}
					{else}
						{assign var='blockuser_cart_flag' value='Cart::BOTH_WITHOUT_SHIPPING'|constant}
						{convertPrice price=$cart->getOrderTotal(true, $blockuser_cart_flag)}
					{/if}
				</span>
			{/if}
			<span class="ajax_cart_no_product{if $cart_qties > 0} hidden{/if}">{l s='(empty)' mod='blockuserinfo'}</span>
		</li>
		{/if}		
	</ul>
</div>

<!-- /Block user information module HEADER -->
