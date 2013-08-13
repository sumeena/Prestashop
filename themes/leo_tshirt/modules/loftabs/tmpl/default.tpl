<div class="lof-module-tabsnews {$theme} lof-tabs-{$lofiso_code} clearfix" style="width:{$moduleWidth}{if $moduleWidth != 'auto'}px{/if};height:{$moduleHeight}{if $moduleHeight != 'auto'}px{/if}">
    <div id="lof-tabnews-module-{$moduleId}" style="width:100%;">
		<script type="text/javascript">  
		{if ($showTips == "lof-tooltip") AND ($checkversion >= 1.4)}
			jQuery(document).ready(function() {ldelim}
				jQuery("body").delegate("#lof-tabnews-module-{$moduleId}", 'mouseenter', function(){ldelim} 
					
					jQuery(".lof-tool-item-{$moduleId}").tooltip({ldelim} 
						effect: 'slide',
						offset: [0, 2],
						onBeforeShow:	function(event, position) {ldelim}
										this.getTip().appendTo(document.body);
										return true;{rdelim}{rdelim}
					);
					
				{rdelim});
			{rdelim});
		{/if}
			var lofatabs = new Array();
			var key = 0;
		</script>
        <div class="lof-tabnews-panel" style="width:{$moduleWidth-30}px">
         	<ul class="tabs-panel tabs-panel-{$moduleId}">
                {if ($featuredTab == 1)}
                <li class="lof-tab">
                    <div class="bg-tabs-left-bd">
                        <a href="#lof-tabs-{$moduleId}-featured" rel="{if $lofloaded != 'featuredTab'}featured-0{else}lof{/if}" id="featuredTab-content">
							<script type="text/javascript">
								lofatabs[key] = 'featuredTab-content';
								key++;
							</script>
                            <span class="bg-tabs-left">
                                <span class="bg-tabs-middle">{l s='Featured' mod='loftabs'}</span>
                            </span>
                        </a>
                    </div>
                </li>    
                {/if}
				{if ($newTab == 1)}
                <li class="lof-tab">
                    <div class="bg-tabs-left-bd">
                        <a href="#lof-tabs-{$moduleId}-new" rel="{if $lofloaded != 'newTab'}new-0{else}lof{/if}" id="newTab-content">
							<script type="text/javascript">
								lofatabs[key] = 'newTab-content';
								key++;
							</script>
                            <span class="bg-tabs-left">
                                <span class="bg-tabs-middle">{l s='New Products' mod='loftabs'}</span>
                            </span>
                        </a>
                    </div>
                </li>
                {/if}
                {if ($bestsellerTab == 1)}
                <li class="lof-tab leo-bestseller">
                    <div class="bg-tabs-left-bd">
                        <a href="#lof-tabs-{$moduleId}-bestseller" rel="{if $lofloaded != 'bestsellerTab'}bestseller-0{else}lof{/if}" id="bestsellerTab-content">
							<script type="text/javascript">
								lofatabs[key] = 'bestsellerTab-content';
								key++;
							</script>
                            <span class="bg-tabs-left">
                                <span class="bg-tabs-middle">{l s='Best Seller' mod='loftabs'}</span>
                            </span>
                        </a>
                    </div>
                </li>    
                {/if}
                {if ($specialTab == 1)}
                <li class="lof-tab">
                    <div class="bg-tabs-left-bd">
                        <a href="#lof-tabs-{$moduleId}-special" rel="{if $lofloaded != 'specialTab'}special-0{else}lof{/if}" id="specialTab-content">
							<script type="text/javascript">
								lofatabs[key] = 'specialTab-content';
								key++;
							</script>
                            <span class="bg-tabs-left">
                                <span class="bg-tabs-middle">{l s='Specials' mod='loftabs'}</span>
                            </span>
                        </a>
                    </div>
                </li>    
                {/if}                
                {if ($enablemanu == 1) AND ($manus != '')}
                {foreach from=$manus item=manu}
					{assign var='manustr' value="manu-"|cat:$manu.id_manufacturer}
					<li class="lof-tab">
						<div class="bg-tabs-left-bd">
							<a href="#lof-tabs-{$moduleId}-{$manu.id_manufacturer}-manu" rel="{if $lofloaded != $manustr}manu-{$manu.id_manufacturer}{else}lof{/if}" id="manuTab-content-{$manu.id_manufacturer}">
								<script type="text/javascript">
									lofatabs[key] = 'manuTab-content-{$manu.id_manufacturer}';
									key++;
								</script>
								<span class="bg-tabs-left">
									<span class="bg-tabs-middle">{$manu.name}</span>
								</span>
							</a>
						</div>
					</li>    
                {/foreach}
                {/if}
                {if ($enableCate == 1)}
                {foreach from=$cates item=cate}
					{assign var='catestr' value='cate-'|cat:$cate.id_category}
                    <li class="lof-tab" dir="lof-tabs-{$moduleId}-{$cate.id_category}">
                        <div class="bg-tabs-left-bd">
                            <a href="#lof-tabs-{$moduleId}-{$cate.id_category}-cate" rel="{if $lofloaded != $catestr}cate-{$cate.id_category}{else}lof{/if}" id="cateTab-content-{$cate.id_category}">
								<script type="text/javascript">
									lofatabs[key] = 'cateTab-content-{$cate.id_category}';
									key++;
								</script>
                                <span class="bg-tabs-left">
                                    <span class="bg-tabs-middle">{$cate.name}</span>
                                </span>
                            </a>
                        </div>
                    </li>
                 {/foreach}
                 {/if}
        	</ul>
        </div>
        <div class="lof-tabnews-content">
            {if $featuredTab == 1}
				<div id="lof-tabs-{$moduleId}-featured" class="lof-content-tab lof-content-tab-{$moduleId} featuredTab-content">
					{include file="$featuredUrlLayouts"}
				</div>
            {/if}
			{if $newTab == 1}
				<div id="lof-tabs-{$moduleId}-new" class="lof-content-tab lof-content-tab-{$moduleId} newTab-content">
					{include file="$newProductsUrlLayouts"}
				</div>
            {/if}
			{if $bestsellerTab == 1}
				<div id="lof-tabs-{$moduleId}-bestseller" class="lof-content-tab lof-content-tab-{$moduleId} bestsellerTab-content">
					{include file="$bestSellerUrlLayouts"}
				</div>
            {/if}
            {if $specialTab == 1}
				<div id="lof-tabs-{$moduleId}-special" class="lof-content-tab lof-content-tab-{$moduleId} specialTab-content">
					{include file="$specialUrlLayouts"}
				</div>
            {/if}
            
            {if $enablemanu == 1}
				{foreach from=$manus item=manu}
					<div id="lof-tabs-{$moduleId}-{$manu.id_manufacturer}-manu" class="lof-content-tab lof-content-tab-{$moduleId} manuTab-content-{$manu.id_manufacturer}">
						{include file="$manuUrlLayouts"}
					</div>
				{/foreach}
				<div class="clr clearfix"></div>
            {/if}
            {if $enableCate}
				{foreach from=$cates item=cate}
					<div id="lof-tabs-{$moduleId}-{$cate.id_category}-cate" class="lof-content-tab lof-content-tab-{$moduleId} cateTab-content-{$cate.id_category}">
						{include file="$cateUrlLayouts"}
					</div>
				{/foreach}
			{/if}
            <div class="clr clearfix"></div>
        </div>
        <div class="clr clearfix"></div>
    </div>
</div>