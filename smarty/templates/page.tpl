{* ABOUT.tpl
    Using the template for static pages, display the about information

    Variables
    none
*}

{* load header *}
{include file="header.tpl" title=$content_title}


<div id="indexbodyblank">
  <div id="indexbodyyellowblank">
    <div id="indexbodyyellow">

      {* load useful links sidebar *}
      {include file="useful_links.tpl"}
      
      <div id="innercontentblank">
        <div id="innerhedding">{$content_title}</div>
        <div id="innercontent" style="line-height:16px">
          
            {* CONTENT *}
            
            {$content}
            
            {* /content *}
        
        </div>
      </div>
    </div>
  </div>
</div>

{* load footer *}
{include file="footer.tpl"}