{*
* 2007-2012 PrestaShop
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
*  @copyright  2007-2012 PrestaShop SA
*  @version  Release: $Revision: 6594 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Block currencies module -->
<script type="text/javascript">
$(document).ready(function () {
	$("#setCurrency").mouseover(function(){
		$(".currencies_ul").addClass("currencies_ul_hover");
	});
	$("#setCurrency").mouseout(function(){
		$(".currencies_ul").removeClass("currencies_ul_hover");
	});
});
</script>

<div id="currencies_block_top">
	<form id="setCurrency" action="{$request_uri}" method="post">
            <p>Currency:&nbsp;&nbsp;
			<input type="hidden" name="id_currency" id="id_currency" value=""/>
			<input type="hidden" name="SubmitCurrency" value="" />
			{*{foreach from=$currencies key=k item=f_currency}
				{if $cookie->id_currency == $f_currency.id_currency}
					{$f_currency.sign}&nbsp;({$f_currency.iso_code})
				{/if}
			{/foreach}*}
		</p>
                <div class="styled-select">
                    	<select class="curency">
                        	
                          
                       
		{*<ul id="first-currencies" class="currencies_ul">*}
			{foreach from=$currencies key=k item=f_currency}
				<option {if $cookie->id_currency == $f_currency.id_currency}class="selected"{/if}>
					<a href="javascript:setCurrency({$f_currency.id_currency});" title="{$f_currency.name}">{$f_currency.sign}&nbsp;({$f_currency.iso_code})</a>
				</option>
			{/foreach}
		
                 </select>
                    </div>
	</form>
</div>
<!-- /Block currencies module -->
