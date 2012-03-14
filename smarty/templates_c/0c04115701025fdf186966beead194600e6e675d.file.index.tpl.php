<?php /* Smarty version Smarty-3.0.7, created on 2011-05-26 13:30:01
         compiled from "../smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3731927334dde9c29470112-28669120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c04115701025fdf186966beead194600e6e675d' => 
    array (
      0 => '../smarty/templates/index.tpl',
      1 => 1306434597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3731927334dde9c29470112-28669120',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',"Home"); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div id="indexbodyblank">
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

<?php $_template = new Smarty_Internal_Template("useful_links.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    
     
    <div id="latestnewsbox" style="padding: 20px 20px 20px 20px !important;">
      <?php $_template = new Smarty_Internal_Template("twitter.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
    
</div>
</div>
</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>