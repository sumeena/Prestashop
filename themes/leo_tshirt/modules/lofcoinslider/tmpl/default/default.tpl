<div id="lofcoinslide{$prfSlide}{$blockid}" class="lof-coinslider-default" style="height:{$moduleHeight}; width:{$moduleWidth}">
 <div class="lof-coinslide-wrapper {$css3Class}">
     {if ($params->get('preload',1)==1)}
     <div class="preload"><div></div></div>
     {/if}
    <!-- MAIN CONTENT -->

    <div id="lofcs-full3d-{$prfSlide}{$blockid}" class="nivoSlider" style="height:{$params->get('main_height',300)}px;width:{$params->get('main_width',556)}px;position:relative">                                       			            
			{foreach from=$products item=row}                    	              
                 <a href="{$row.link}" style="height:{$params->get('main_height',300)}px;width:{$params->get('main_width',556)}px;display:block">       	  
          		    <img src="{$row.mainImge}" title="{$row.titleImg}"/>  		        	
            	 </a>           
            {/foreach}
	</div> 
			{foreach from=$products item=row}
				 {if $row.name}                                       
                    <div id="lof-container-{$row.groupandnum}" style="display: none;">
                        <p class="lof-title">
                            <a href="{$row.link}" rel="{$row.link}" title="{$row.name}">{$row.name}</a>
                             {if $params->get('show_price',1) && isset($row.price) && $row.price}
                                <b style="color:{$params->get('price_color','#ffffff')}">({$row.price})</b>
                            {/if}
                        </p>
                        <p class="lof-info">
            	    	    {$row.description}  
            	        </p>
						<div class="lof_detail"><a href="{$row.link}" title="{$row.name}">{l s='View Product' mod='lofcoinslider'}</a></div>
                    </div>        
                 {/if}
			 {/foreach}
     <!-- END MAIN CONTENT -->
    {if ($params->get('shadow',1)==1)}
        <div class="lof-table" style="width:{$params->get('main_width',556)+88}px;margin-bottom: -6px;"><div class="lof-row"><div class="lof-cell lof-bottom-left">&nbsp;</div><div class="lof-cell lof-bottom-middle" style="width:{$params->get('main_width',556)-144}px">&nbsp;</div><div class="lof-cell lof-bottom-right">&nbsp;</div></div></div>        
    {/if}     
</div>
</div>          