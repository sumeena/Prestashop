
<!-- Block mymodule -->
{literal}
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
{/literal}

<div id="manufacturers_block_left" class="block blockmanufacturer">
    <p class="title_block">Brands</p>
    <div id="liquid">
        <span class="previous"></span>
        <div class="wrapper">
            {if $manufacturers}
                <ul>
                    {foreach from=$manufacturers item=manufacturer name=manufacturer_list}
                        {if $smarty.foreach.manufacturer_list.iteration <= $text_list_nb}
                            <li class="{if $smarty.foreach.manufacturer_list.last}last_item{elseif $smarty.foreach.manufacturer_list.first}first_item{else}item{/if}"><a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)}" title="{l s='More about' mod='blockmanufacturer'} {$manufacturer.name}"><img src="{$img_manu_dir}{$manufacturer.image|escape:'htmlall':'UTF-8'}{$manufacturer.id_manufacturer}-medium_default.jpg" alt="" height="{$mediumSize.height}" width="{$mediumSize.width}"></a></li>
                                {/if}
                            {/foreach}
                </ul>
            {/if}
        </div>
        <span class="next"></span>
    </div>
</div>
<!-- /Block mymodule -->