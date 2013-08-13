 
<!-- Block Categories Dropdown -->

<div class="searchSection">
    <form id="searchbox" action="{$link->getPageLink('search')}" method="get">
        <input type="hidden" name="controller" value="search" />
                <input type="hidden" value="position" name="orderby"/>
                <input type="hidden" value="desc" name="orderway"/>
        <div class="allcategory_dropdown">

            <select name="category">
                <option value=""> All Categories</option>
                {if $manufacturers}
                    {*{$manufacturers|print_r}*}
                    {foreach from=$manufacturers item=manufacturer}
                        {foreach from =$manufacturer item=manulist}
                            {foreach from =$manulist item=categprymenu}

                                {if $categprymenu.name!='Root' && $categprymenu.name!='Home'}
                                    <option value="{$categprymenu.id_category}"> {$categprymenu.name}</option>
                                    
                                {/if}
                            {/foreach}
                        {/foreach}
                    {/foreach}
                {/if}
              
            </select>
                
        </div> 
                <div class="searchInput"> <input type="text" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|escape:'htmlall':'UTF-8'}{/if}" name="search_query"> </div>
                <div class="searchBtn">
            	<input type="submit" value="SEARCH" name="submit_search">
            </div>
        {*<div id="search_block_top">
            <p>
                
                <input type="text" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|escape:'htmlall':'UTF-8'}{/if}" />
                <input type="submit" class="button" value="" name="submit_search">
            </p>

        </div>*}
    </form>
</div>

<!-- /Block mymodule -->