{if (!empty($loflistNewProducts[0]))}
{if $firstAjax}
    {if $showTips == 'lof-tipbox'}
    <script type="text/javascript">
    /* <![CDATA[ */
    	jQuery(document).ready(function($) {ldelim}
			jQuery("body").delegate("#lof-tabnews-module-{$moduleId}", 'mouseenter', function(){ldelim} 
				$(".lof-box-tools-new .product_label").hover(function() {ldelim}
					$(".lof-box-tools-new .product_label").removeClass("open");
					$(this).removeClass("opacize").addClass("open");
				{rdelim}, function () {ldelim}
					$(this).removeClass("open");			
				{rdelim});	
				$(".lof-box-tools-new .product_label .close").click(function() {ldelim}
					$(this).parents(".product_label").removeClass("open");
					$(".lof-box-tools-new .product_label").removeClass("opacize");
				{rdelim});
    		{rdelim});
    	{rdelim});
    /* ]]> */
    </script>
    {/if}
    {if $totalPages > 1}
    <script type="text/javascript">            
    	jQuery(document).ready(function() {ldelim}	
    		jQuery("#lof-content-main-new-{$moduleId}").lofeasySliderTabs({ldelim}
                prevId: 'lof-prev-new-{$moduleId}',         			 
                nextId: 'lof-next-new-{$moduleId}',
                catId: 'new',
                totalPage: {$totalPages},
                moduleTheme: '{$theme}',
    			auto: {$autoPlay},
    			widthPage: {if $moduleWidth == 'auto'}'auto'{else}{$moduleWidth}{/if},
    			speed: {$speed},
    			continuous: true,
                controlsShow:false 
    		{rdelim});
    	{rdelim});	
    </script>
    {/if}
	{if ($totalPages > 1 AND ($showButton == 1))}
	<div class="lof-buttons">
		<div id="lof-prev-new-{$moduleId}" class="lof-prev"><a href="javascript:void(0);" rel="new-0" id="page_{$totalPages}"></a></div>
		<div id="lof-next-new-{$moduleId}" class="lof-next"><a href="javascript:void(0);" rel="new-0" id="page_0"></a></div>
		<a href="#" style="display:none;" id="lofpage-new-0" rel="0"></a>
		<a href="#" style="display:none;" id="totalPages-new-0" rel="{$totalPages}"></a>
	</div>
	{/if}
	<div class="lof-container" id="lof-content-main-new-{$moduleId}">
{/if}
	
		{if $firstAjax}
		<ul class="lof-content-main">
			<li id="lofpage-new-0-0" class="lof-main-item lof_load">
		{/if}
				{foreach from=$loflistNewProducts[0] key=i item=item}                                                   
					<div class="lof-content-main-item"  style="width:{$itemWidth}%">
						<div class="bd-lof-content ajax_block_product clearfix" style="float:left;width:{$thumbmainWidth}px">
							{if $showImage == 1}
								<div class="lof-box-tools-new lof-box-tools">
									<div class="product_label lof-tool-item lof-tool-item-{$moduleId}" style="height:{$thumbmainHeight}px;width:{$thumbmainWidth}px;">
										{if $item.lof_online_only_icon != '' AND $onlineIcon == 1}
										<div class="{$item.lof_online_only_icon}">&nbsp;</div>
										{/if}
										{if $item.lof_sale_icon != '' AND $saleIcon == 1}
										<div class="{$item.lof_sale_icon}">&nbsp;</div>
										{/if}
										{if $item.lof_new_icon != '' AND $newIcon == 1}
										<div class="{$item.lof_new_icon}">&nbsp;</div>
										{/if}
										{if $item.lof_features != '' AND $featureIcon == 1}
										<div class="{$item.lof_features}">&nbsp;</div>
										{/if}
										<a href="{$item.link}" target="{$target}" class="product_img_link product_image"><img src="{$item.mainImge}" alt="" /></a>
										{if ($showTips == "lof-tipbox")}
										<div class="lof-content-tools-text">
											<h4>{$item.name}</h4>
											<div class="box-price">
												<span class="lof-price">{if !$priceDisplay}{convertPrice price=$item.price}{else}{convertPrice price=$item.price_tax_exc}{/if}</span>
												{if $item.specific_prices AND ($priceSpecial == 1)}&nbsp;&nbsp;<span class="lof-price-discount">{displayWtPrice p=$item.price_without_reduction}</span>{/if}
											</div>
											<div class="box-detail"><a href="<?php echo $item['link'];?>">{l s='Detail' mod='loftabs'}</a></div>
											<span class="close"></span>
										</div>
										{/if}
									</div>
								</div>
								{if (($showTips == "lof-tooltip") AND ($checkversion >= 1.4))}
								<div class="tooltip">
									<div style="position: relative;background: #FFFFFF;width:430px;height: 200px;">
										<div style="position: relative;width:430px;height: 200px;overflow: hidden;">
										<span class="lof-tooltip-image"><a href="{$item.link}" target="{$target}"><img src="{$item.thumbImge}" alt="" style="height:100%;"/></a></span>
										</div>
										<div class="lof-tools-opacity" style="width:100%;">
											<h4><a href="{$item.link}" target="{$target}">{$item.name}</a></h4>
											
										</div>
									</div>
								</div>
								{/if}
							{/if}
							
						   <div class="lof-item-content" style="width:{$thumbmainWidth}px;">
								{if ($showTitle == 1)}<h4><a href="{$item.link}" target="{$target}">{$item.name|truncate:20:'...'|escape:'htmlall':'UTF-8'}</a></h4>{/if}
								{if ($showPuplic == 1)}
								<span style="color: #333333;font-size:11px;font-style: italic;">
									{$item.dateAdd}
								</span>
								{/if}
								{if ($showDesc == 1)}<div class="lof-main-description"><p>{$item.description}</p></div>{/if}
								{if ($showPrice == 1)}
								<div class="lof-tools-opacity">
									<span class="lof-price-contain">
										<span class="lof-price">{if !$priceDisplay}{convertPrice price=$item.price}{else}{convertPrice price=$item.price_tax_exc}{/if}</span>
										{if $item.specific_prices AND ($priceSpecial == 1)}&nbsp;&nbsp;<span class="lof-price-discount">{displayWtPrice p=$item.price_without_reduction}</span>{/if}
									</span>
									<a class="lof-detail" href="{$item.link}"><span>{l s='detail' mod='loftabs'}</span></a>
							   </div>
								{/if}
								{if (($item.quantity > 0 OR $item.allow_oosp))}
								<a class="lof-add-cart ajax_add_to_cart_button" rel="ajax_id_product_{$item.id_product}" href="{$site_url}cart.php?add&amp;id_product={$item.id_product}&amp;token={$token}"><span>{l s='Add to cart' mod='loftabs'}</span></a>
								{else}
									<span class="lof-add-cart">{l s='Add to cart' mod='loftabs'}</span>
								{/if}
							  
							  <div class="lofbottom">&nbsp;</div>
						   </div>
						  
						</div>
					</div>
					{if ( ($i+1) % $limitnumcols== 0 AND $i < count($loflistNewProducts[0])-1 )}
						<div class="clr clearfix"></div>
					{/if}
				{/foreach}
		{if $firstAjax}
			</li>
			{if $totalPages >= 2}
				{section name=foo start=1 loop=$totalPages step=1}
					<li id="lofpage-new-0-{$smarty.section.foo.index}" class="lof-main-item" style="width:{$moduleWidth-10}px;">
						&nbsp;
						<div class="clr clearfix"></div>
					</li>
				{/section}
			{/if}
		</ul>
		<div class="clr clearfix"></div>
		{/if}
	
{if $firstAjax}
	</div>
{/if}
{/if}