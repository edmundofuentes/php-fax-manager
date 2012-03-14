{* REDEEM.tpl
    Shows the games you've paid for.
*}

{* load header *}
{include file="header.tpl" title="Redeem"}



<div id="indexbodyblank">
    
    {* black body box *}
    {* replace indexmiddlecontent and midddleimage *}

    <div id="redeembodytopblank">
        
        <form action="redeem.php" method="get">
        
        <div id="redeembodytop">
            <div id="redeembodyblackheading" style="text-align:center !important" >
                <div id="redeembodytopheading001" style="padding: 5px 0 15px 0 !important;">Enter your code</div>
                <div id="redeembodytopheading002">
                
                    <div id="redeembox"><input type="text" name="code" id="redeemtxtbox"/></div>
                    <div id="redeembox2"><input type="submit" value="Redeem!" id="redeemsubmit"/></div>
                
                
                
                </div>
                <div id="redeembodytopsmalltxt" style="font-size: 11px !important;line-height:14px;">
                    By entering the code you agree to the Terms Of Use.  We remind you not to share your codes.<br/>
                    Don't have a code? <a href="buy.php">Buy one now</a>.
                </div>
            </div>
        </div>
        </form>
    </div>
</div>


{* load footer *}
{include file="footer.tpl"}