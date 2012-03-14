{* INDEX.tpl
    The wesite design for the main site
    
    Variables:
    none

*}

{* load the header *}
{include file="header.tpl" title="Home"}

{* black part of the body *}
<div id="indexbodyblank">

{* OLD BLACK BOX.
<div id="indexbodytopblank">
<div id="indexbodytop">
<div id="indexbodyblackheading">
<div id="indexbodytopheading001">FUSCE SAGITTIS PORTA URNA</div>
<div id="indexbodytopheading002">Tempus non Bibendum Lipsum</div>
<div id="indexbodytopsmalltxt">Vestibulum vel dolor in arcu placerat ornare. Phasellus a tellus ut nulla hendrerit tempor. Phasellus condimentum, dui ut ullamcorper dictum, tortor velit cursus diam, at vulputate ipsum <span class="yellowfont">turpis quis sapien.</span> Phasellus porttitor egestas sem. Cum sociis <span class="yellowfont">natoque</span> penatibus et magnis dis parturient montes, nascetur ridiculus mus</div>
<div id="bodynavigation">
<ul>
<li class="firstnav"><a href="#" class="bodymenu">Blackjack</a></li>
<li class="menus"><a href="#" class="bodymenu">Roulette</a></li>
<li class="menus"><a href="#" class="bodymenu">Slots</a></li>
<li class="menus"><a href="#" class="bodymenu">Craps</a></li>
<li class="menus"><a href="#" class="bodymenu">Video Poker</a></li>
<li class="menus"><a href="#" class="bodymenu">Baccarat</a></li>
</ul>
</div>
</div>
</div>
</div>
*}
    <div id="redeembodytopblank">
        
        <form action="redeem.php" method="get">
        
        <div id="redeembodytop">
            <div id="redeembodyblackheading" style="text-align:center !important" >
                <div id="redeembodytopheading001" style="padding: 5px 0 15px 0 !important;">Redeem your code</div>
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



<div id="indexbodyyellowblank">
<div id="indexbodyyellow">

{*
<div id="downloadbox">
<div id="downloadheading">Downloads
</div>
<div id="downloads">
<ul>
<li><a href="#">Sed eleifend dapibus ligula</a></li>
<li><a href="#">Sed condimentum ipsum ut nisilo</a></li>
<li><a href="#">Duis imperdiet luctus lorem</a></li>
<li><a href="#">Nulla accumsan blandit</a></li>
<li><a href="#">Donec elementum</a></li>
<li><a href="#">Fusce vulputate orci ut enim</a></li>
<li><a href="#">Etiam semper felis eget metus</a></li>
<li><a href="#">Proin id felis</a></li>
<li><a href="#">Ut tincidunt tellus sed estor</a></li>
<li><a href="#">Maecenas aliquam facilisis tortor</a></li>
<li><a href="#">Fusce at libero sit amet</a></li>
</ul>
</div>
<div id="downloadmoreblank"><a href="#" class="signupnowbutton">more</a>
</div>
</div>
*}

{include file="useful_links.tpl"}
    
    {*
    <div id="winprizes">
    <div id="winprize1">
    <div id="winprizetext">
    <div class="winprizeheading">POKER</div>
    <div class="winprize"><span class="win">WIN</span> $2500</div>
    </div>
    <div id="playblank"><a href="#" class="submitbt">PLAY</a></div>
    </div>
    <div id="winprize2">
    <div id="winprizetext2">
    <div class="winprizeheading">ROULETTE</div>
    <div class="winprize"><span class="win">WIN</span> $1900</div>
    </div>
    <div id="playblank2"><a href="#" class="submitbt">PLAY</a></div>
    </div>
    <div id="winprize3">
    <div id="winprizetext3">
    <div class="winprizeheading">CRAPS</div>
    <div class="winprize"><span class="win">WIN</span> $1000</div>
    </div>
    <div id="playblank3"><a href="#" class="submitbt">PLAY</a></div>
    </div>
    </div>

    <div id="latestnewsbox">
    <div id="latestnewsheading">Latest News</div>
    <div id="latestnews">
    <ul>
    <li><span>Donec a diam vel tortor elementum laoreet hellentroupe</span>
    <a href="#">Cum sociis natoque penatibus et magnis dis parturient montes,<br />
    Nunc cursus commodo magna.</a></li>
    <li><span>Sedium fiesta nullam facilitis</span>
    <a href="#">Penatibus et magnis dis parturient<br />
    Nunc cursus commodo magna. Cum sociis natoque penatibus et.</a></li>
    <li><span>Tortor elementum laopardos senetore corbista lullam sed amet</span>
    <a href="#">Natoque penatibus et magnis dis parturient montes,<br />
    Cursus commodo magna. Cum sociis natoque penatibus et harris nullam.</a></li>
    <li><span>Elementum laoreet</span>
    <a href="#">Natoque penatibus et magnis dis parturient morientes hellentroupe sed ametores.<br />
    Sum sociis natoque penatibus facilittis.</a></li>
    </ul>
    </div>
    </div>
     *}
     
    <div id="latestnewsbox" style="padding: 20px 20px 20px 20px !important;">
      {include file="twitter.tpl"}
    </div>
    
</div>
</div>
</div>

{*load the footer *}
{include file="footer.tpl"}