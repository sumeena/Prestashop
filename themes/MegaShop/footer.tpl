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

{if !$content_only}
</div>
</div>
<!-- Footer -->
<div id="footer">
    <div class="row clearfix">
        {$HOOK_FOOTER}
        <div class="footer-socialicon">
        <h2 class="mT30 followTItle">Follow Cinthe</h2>	
        <div class="footer_socialIcn">
            <div class="foot_icns">
                <div class="foot_icn"><a href="#"><img src="{$img_dir}custom/foot_twt_icn.png" /></a></div>
                <div class="foot_txt">Twitter</div>
            </div>

            <div class="foot_icns">
                <div class="foot_icn"><a href="#"><img src="{$img_dir}custom/foot_fb_icn.jpg" /></a></div>
                <div class="foot_txt">Facebook</div>
            </div>

            <div class="foot_icns">
                <div class="foot_icn"><a href="#"><img src="{$img_dir}custom/foot_rss_icn.jpg" /></a></div>
                <div class="foot_txt">RSS Feed</div>
            </div>
        </div>
        </div>
        {if $PS_ALLOW_MOBILE_DEVICE}
            <p class="center clearBoth"><a href="{$link->getPageLink('index', true)}?mobile_theme_ok">{l s='Browse the mobile site'}</a></p>
            {/if}
    </div>
</div>

</div>
</div>	
{/if}
</body>
</html>
