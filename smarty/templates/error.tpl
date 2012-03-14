{* ERROR.tpl
    Display the errors found
    
    Variables
    error_message: the error to be displayed
*}

{* load header *}
{include file="header.tpl" title="Error"}



<div id="indexbodyblank">

    {* yellow body box *}
    <div id="indexbodyyellowblank">
        <div id="indexbodyyellow">
            <div id="innercontentblank" style="margin:28px 0 0 110px !important;">
                <div id="innerhedding">Error!</div>
                <div id="innercontent">
                    <p>{$error_message}</p>
                    <br/>
                    <p>Go <a href="index.php">Back</a>.</p>
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                </div>
            </div>
        </div>
    </div>
    
</div>


{* load footer *}
{include file="footer.tpl"}