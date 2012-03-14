<?php /* Smarty version Smarty-3.0.7, created on 2011-05-26 11:29:32
         compiled from "../smarty/templates/redeem_enter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2253993284dde9c0c301f95-42959392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32cd98b8cecc0a2ee6b93fbc24a1d8e1bf47eb98' => 
    array (
      0 => '../smarty/templates/redeem_enter.tpl',
      1 => 1306434570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2253993284dde9c0c301f95-42959392',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',"Redeem"); echo $_template->getRenderedTemplate();?><?php unset($_template);?>



<div id="indexbodyblank">
    

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
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>