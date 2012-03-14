{* REDEEM.tpl
    Shows the games you've paid for.
    
    Variables
    baseball: enable or disable section
    football: enable or disable section
    basketball: enable or disable section
*}

{* load header *}
{include file="header.tpl" title="Buy"}



<div id="indexbodyblank">

    {* yellow body box *}
    <div id="indexbodyyellowblank">
        <div id="indexbodyyellow">
            <div id="innercontentblank" style="width:1004px">
                
                <!-- MLB BASEBALL -->
                {if $baseball.enable}
                <a id="baseball"/>
                <div id="innerhedding" style="font-size: 40px !important; padding-bottom:20px !important;width:1004px;">Baseball <span style="font-size: 32px !important; font-weight:normal !important;"> - MLB</span></div>
                    
                    {foreach from=$baseball.items item=item}
                        <div class="innerhedding-paypal">{$item.concept}<span style="font-weight:normal;font-size:16px;"> ... ${$item.price}USD</span>
                            <div class="paypalbutton">
                                {$item.code}
                            </div>
                        </div>
                    {/foreach}
                
                <div id="redeemhlines" style="padding:10px 0 10px 0;">&nbsp;</div>
                {/if}
                
                <!-- NFL FOOTBALL -->
                {if $football.enable}
                <a id="football"/>
                <div id="innerhedding" style="font-size: 40px !important; padding-bottom:20px !important;width:1004px;">Football <span style="font-size: 32px !important; font-weight:normal !important;"> - NFL&NCAA</span></div>
                    
                    {foreach from=$football.items item=item}
                        <div class="innerhedding-paypal">{$item.concept}<span style="font-weight:normal;font-size:16px;"> ... ${$item.price}USD</span>
                            <div class="paypalbutton">
                                {$item.code}
                            </div>
                        </div>
                    {/foreach}
                
                <div id="redeemhlines" style="padding:10px 0 10px 0;">&nbsp;</div>
                {/if}                
                
                
                <!-- NBA BASKETBALL -->
                {if $basketball.enable}
                <a id="basketball"/>
                <div id="innerhedding" style="font-size: 40px !important; padding-bottom:20px !important;width:1004px;">Basketball <span style="font-size: 32px !important; font-weight:normal !important;"> - NBA&NCAA</span></div>
                    
                    {foreach from=$basketball.items item=item}
                        <div class="innerhedding-paypal">{$item.concept}<span style="font-weight:normal;font-size:16px;"> ... ${$item.price}USD</span>
                            <div class="paypalbutton">
                                {$item.code}
                            </div>
                        </div>
                    {/foreach}
                    
                {/if} 
                 
                <div id="innercontent" style="width:1004px;"><br/><br/><br/><br/></div>
                
            </div>
        </div>
    </div>
    
</div>


{* load footer *}
{include file="footer.tpl"}
