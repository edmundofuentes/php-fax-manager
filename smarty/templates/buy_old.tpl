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
                {if $baseball}
                <a id="baseball"/>
                <div id="innerhedding" style="font-size: 40px !important; padding-bottom:20px !important;width:1004px;">Baseball <span style="font-size: 32px !important; font-weight:normal !important;"> - MLB</span></div>
                    
                    <div class="innerhedding-paypal">1 Day<span style="font-weight:normal;font-size:16px;"> ... $24.99USD</span>
                        <div class="paypalbutton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="VJDKLNQB3UHJG">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                     
                    <div class="innerhedding-paypal">1 Week<span style="font-weight:normal;font-size:16px;"> ... $79.99USD</span>
                        <div class="paypalbutton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="WN9938Y92JHR4">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                    
                    <div class="innerhedding-paypal">1 Month<span style="font-weight:normal;font-size:16px;"> ... $269.99USD</span>
                        <div class="paypalbutton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="7DTQHX9Z6KQNC">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                    
                    <div class="innerhedding-paypal">Rest of Season<span style="font-weight:normal;font-size:16px;"> ... $469.99USD</span>
                        <div class="paypalbutton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="NFV58RRGHEX7L">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                
                <div id="redeemhlines" style="padding:10px 0 10px 0;">&nbsp;</div>
                {/if}
                
                <!-- NFL FOOTBALL -->
                {if $football}
                <a id="football"/>
                <div id="innerhedding" style="font-size: 40px !important; padding-bottom:20px !important;width:1004px;">Football <span style="font-size: 32px !important; font-weight:normal !important;"> - NFL&NCAA</span></div>
                    
                    
                    <div class="innerhedding-paypal">1 Day<span style="font-weight:normal;font-size:16px;"> ... $29.99USD</span>
                        <div class="paypalbutton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="BZ7BEB9BJ2RHL">
                            <input type="image" src="https://www.paypalobjects.com/en_US/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                     
                    <div class="innerhedding-paypal">1 Week<span style="font-weight:normal;font-size:16px;"> ... $89.99USD</span>
                        <div class="paypalbutton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="PRV5XMHJ8UBG6">
                            <input type="image" src="https://www.paypalobjects.com/en_US/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                    
                    {*
                    <div class="innerhedding-paypal">1 Month<span style="font-weight:normal;font-size:16px;"> ... $249.99USD</span>
                        <div class="paypalbutton">
                            
                        </div>
                    </div>
                    *}
                    
                    
                    <div class="innerhedding-paypal">PROMO: Full Season<span style="font-weight:normal;font-size:16px;"> ... $769.99USD</span>
                        <div class="paypalbutton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="SU4JBGALA23UG">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                
                <div id="redeemhlines" style="padding:10px 0 10px 0;">&nbsp;</div>
                {/if}                
                
                
                <!-- NBA BASKETBALL -->
                {if $basketball}
                <a id="basketball"/>
                <div id="innerhedding" style="font-size: 40px !important; padding-bottom:20px !important;width:1004px;">Basketball <span style="font-size: 32px !important; font-weight:normal !important;"> - NBA</span></div>
                    
                    <div class="innerhedding-paypal">1 Day<span style="font-weight:normal;font-size:16px;"> ... $24.99USD</span>
                        <div class="paypalbutton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="LKM7QJ33NLS52">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                    
                    {*
                    <div class="innerhedding-paypal">1 Week<span style="font-weight:normal;font-size:16px;"> ... $89.99USD</span>
                        <div class="paypalbutton">
                            
                        </div>
                    </div>
                    
                    
                    <div class="innerhedding-paypal">1 Month<span style="font-weight:normal;font-size:16px;"> ... $159.99USD</span>
                        <div class="paypalbutton">
                            
                        </div>
                    </div>
                    
                    <div class="innerhedding-paypal">Full Season<span style="font-weight:normal;font-size:16px;"> ... $699.99USD</span>
                        <div class="paypalbutton">
                            
                        </div>
                    </div>
                    *}
                    
                    <div class="innerhedding-paypal">Finals<span style="font-weight:normal;font-size:16px;"> ... $69.99USD</span>
                        <div class="paypalbutton">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="FMYHZCBNFCHJC">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                    
                {/if} 
                 
                <div id="innercontent" style="width:1004px;"><br/><br/><br/><br/></div>
                
            </div>
        </div>
    </div>
    
</div>


{* load footer *}
{include file="footer.tpl"}
