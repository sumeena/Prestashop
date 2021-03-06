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
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Block Newsletter module-->

<div id="newsletter_block_footer" class="block">
    <span class="title_block">{l s='Signup for Cinthe Newsletter' mod='blocknewsletter'}</span>
    <a class="toggler"></a>
    <ul>
        <li>{l s='Subscribe to our newsletter and receive the latest offers, discounts and updates' mod='blocknewsletter'}</li>
            {if isset($msg) && $msg}
            <p class="{if $nw_error}warning_inline{else}success_inline{/if}">{$msg}</p>
        {/if}
        <li>
            <form action="{$link->getPageLink('index')}" method="post">
                {* @todo use jquery (focusin, focusout) instead of onblur and onfocus *}
                <input type="text" name="email" size="18" 
                       value="{if isset($value) && $value}{$value}{else}{l s='your e-mail' mod='blocknewsletter'}{/if}" 
                       onfocus="javascript:if (this.value == '{l s='your e-mail' mod='blocknewsletter' js=1}')
                                   this.value = '';" 
                       onblur="javascript:if (this.value == '')
                                   this.value = '{l s='your e-mail' mod='blocknewsletter' js=1}';" 
                       class="inputNew" />
                <!--<select name="action">
                        <option value="0"{if isset($action) && $action == 0} selected="selected"{/if}>{l s='Subscribe' mod='blocknewsletter'}</option>
                        <option value="1"{if isset($action) && $action == 1} selected="selected"{/if}>{l s='Unsubscribe' mod='blocknewsletter'}</option>
                </select>-->
                <input type="submit" value="ok" class="button_mini" name="submitNewsletter" />
                <input type="hidden" name="action" value="0" />
            </form>
        </li>	
    </ul>
</div>
<div class="dividerLine">&nbsp;</div>
<!-- /Block Newsletter module-->
