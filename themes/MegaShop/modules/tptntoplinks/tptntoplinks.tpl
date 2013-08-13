<div id="tptn_top_links">
    <ul class="cartItem">
        <li class="lastmenu"> <a href="#"> Sell </a> </li>  
        <li>
            {if $logged}
                {l s='Welcome' mod='tptntoplinks'},
                <span class="account">{$cookie->customer_firstname}</span>
                <a href="{$link->getPageLink('index', true, NULL, "mylogout")}" title="{l s='Log out' mod='tptntoplinks'}" class="logout" rel="nofollow">{l s='Log out' mod='tptntoplinks'}</a>
            </li>		
        {else}

            <li>
                <a href="{$link->getPageLink('my-account', true)}" title="{l s='Register' mod='tptntoplinks'}" class="login" rel="nofollow">{l s='Register' mod='tptntoplinks'}</a> 
            </li>
            <li>
                <a href="{$link->getPageLink('my-account', true)}" title="{l s='Sign in' mod='tptntoplinks'}" class="login" rel="nofollow">{l s='Sign in' mod='tptntoplinks'}</a>
            </li>
        {/if}
       <li>
            <div id="shopping_cart">		
                {if !$PS_CATALOG_MODE}
                    <a href="{$link->getPageLink($order_process, true)}" title="{l s='Your Shopping Cart' mod='tptntoplinks'}" rel="nofollow">{l s='Cart:' mod='tptntoplinks'}
                        <span class="ajax_cart_quantity{if $cart_qties == 0} hidden{/if}">({$cart_qties})</span>
                        <span class="ajax_cart_no_product{if $cart_qties > 0} hidden{/if}">(0)</span>
                    </a>
                {/if}
            </div>
        </li>
        
        <li class="lastItem">
            <a href="{$link->getPageLink($order_process, true)}" title="{l s='Checkout' mod='tptntoplinks'}" rel="nofollow">{l s='Checkout' mod='tptntoplinks'}

            </a>
        </li>
    </ul>	
</div>
