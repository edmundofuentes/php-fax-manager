{* REDEEM.tpl
    Shows the games you've paid for.
    
    Variables
    cypher: the code that was inputed
    gamesByDate: an array of arrays.
        date (array):
            game (array):
                detail 1
                detail 2
                ..
            ..
        ..
    todaygames: an array of games for today
        game (array):
            detail 1
            detail 2
             ..
        ..
    item: an array of the details of the purchased item.
*}

{* load header *}
{include file="header.tpl" title="Redeem"}



<div id="indexbodyblank">
    
    {* black body box *}
    {* replace indexmiddlecontent and midddleimage *}

    <div id="redeembodytopblank"> {* modified in css *}
        <div id="redeembodytop">  {* modified in css*}
            <div id="redeembodyblackheading">
            <div id="redeembodytopheading001">{$item.description}</div>
            <div id="redeembodytopheading002">code: {$cypher}</div>
            <div id="redeembodytopsmalltxt">
                <span style="font-weight:bold">Sport:</span> {$item.sport} <br />
                <span style="font-weight:bold">League:</span> {$item.league} <br />
                <span style="font-weight:bold">Starts:</span> {$item.start_date|date_format:"%A, %B %e, %Y"}. <br />
                <span style="font-weight:bold">Ends:</span> {$item.end_date|date_format:"%A, %B %e, %Y"}. <br />
            </div>
        </div>
    </div>

    {* yellow body box *}
    <div id="indexbodyyellowblank">
        <div id="indexbodyyellow">
            <div id="innercontentblank">
                
                <div id="innercontent" style="text-align:left;width:900px;font-style:italic;padding:0 0 30px 0;">* Remeber to check daily for new picks.
                {if $item.sport == 'Baseball'}Baseball is updated at 12pm.{/if}
                {if $item.sport == 'Football'}Football is updated at 10am.{/if}
                {if $item.sport == 'Basketball'}Basketball is updated at 1pm.{/if}
                </div>
                <div id="innerhedding" style="font-size: 40px !important; padding-bottom:20px !important;">Today's Games</div>
                
                {foreach $todaygames as $game}
                    <div id="innerhedding-game">{$game.teamA|capitalize} vs. {$game.teamB|capitalize} <span style="font-weight:normal !important"> - {$game.place}</span></div>
                    <div id="innercontent-pick">
                        <p><b>Our pick:</b> {$game.pick}
                    </div>
                {foreachelse}
                    <div id="innercontent">
                            <p>We're sorry, we couldn't find any games for today.</p>
                    </div>
                {/foreach}
                
                <div id="redeemhlines">&nbsp;</div>
                
                <div id="innerhedding" style="font-size: 40px !important">All Your Games</div>
                
                {foreach $gamesByDate as $eventdate => $games}
                    
                    <div id="innerhedding-day">{$eventdate|date_format:"%A, %B %e, %Y"}</div>
                    
                    {foreach $games as $game}
                    <div id="innerhedding-game">{$game.teamA|capitalize} vs. {$game.teamB|capitalize} <span style="font-weight:normal !important"> - {$game.place}</span></div>
                    <div id="innercontent-pick">
                        <p><b>Our pick:</b> {$game.pick}
                    </div>
                    {/foreach}
                    
                {foreachelse}
                    <div id="innercontent">
                        <p>We're sorry, we couldn't find any games for those dates</p>
                        <br /><br /><br /><br /><br /><br />
                    </div>
                
                {/foreach}
                
                    <div id="innercontent" style="text-align:center;width:1004px;"><br/><br/>For any inconvinience or inquire don't hesitate to mail our <a href="mailto:staff@sports-degree.com">Staff</a>.<br/><br/></div>
                
            </div>
        </div>
    </div>
    
</div>


{* load footer *}
{include file="footer.tpl"}