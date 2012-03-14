<?php /* Smarty version Smarty-3.0.7, created on 2011-05-26 10:44:18
         compiled from "../smarty/templates/redeem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2254998864dde9172a9ac98-43746631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78466fd428f784159721a344fd5b65ca8c51de41' => 
    array (
      0 => '../smarty/templates/redeem.tpl',
      1 => 1306431856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2254998864dde9172a9ac98-43746631',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/sportsdegree/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) include '/var/www/sportsdegree/smarty/libs/plugins/modifier.capitalize.php';
?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',"Redeem"); echo $_template->getRenderedTemplate();?><?php unset($_template);?>



<div id="indexbodyblank">
    

    <div id="redeembodytopblank"> 
        <div id="redeembodytop">  
            <div id="redeembodyblackheading">
            <div id="redeembodytopheading001"><?php echo $_smarty_tpl->getVariable('item')->value['description'];?>
</div>
            <div id="redeembodytopheading002">code: <?php echo $_smarty_tpl->getVariable('cypher')->value;?>
</div>
            <div id="redeembodytopsmalltxt">
                <span style="font-weight:bold">Sport:</span> <?php echo $_smarty_tpl->getVariable('item')->value['sport'];?>
 <br />
                <span style="font-weight:bold">League:</span> <?php echo $_smarty_tpl->getVariable('item')->value['league'];?>
 <br />
                <span style="font-weight:bold">Starts:</span> <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('item')->value['start_date'],"%A, %B %e, %Y");?>
. <br />
                <span style="font-weight:bold">Ends:</span> <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('item')->value['end_date'],"%A, %B %e, %Y");?>
. <br />
            </div>
        </div>
    </div>
    <div id="indexbodyyellowblank">
        <div id="indexbodyyellow">
            <div id="innercontentblank">
                
                <div id="innercontent" style="text-align:left;width:900px;font-style:italic;padding:0 0 30px 0;">* Remeber to check daily for new picks.
                <?php if ($_smarty_tpl->getVariable('item')->value['sport']=='Baseball'){?>Baseball is updated at 12pm.<?php }?>
                <?php if ($_smarty_tpl->getVariable('item')->value['sport']=='Football'){?>Football is updated at 10am.<?php }?>
                <?php if ($_smarty_tpl->getVariable('item')->value['sport']=='Basketball'){?>Basketball is updated at 1pm.<?php }?>
                </div>
                <div id="innerhedding" style="font-size: 40px !important; padding-bottom:20px !important;">Today's Games</div>
                
                <?php  $_smarty_tpl->tpl_vars['game'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('todaygames')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['game']->key => $_smarty_tpl->tpl_vars['game']->value){
?>
                    <div id="innerhedding-game"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['game']->value['teamA']);?>
 vs. <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['game']->value['teamB']);?>
 <span style="font-weight:normal !important"> - <?php echo $_smarty_tpl->tpl_vars['game']->value['place'];?>
</span></div>
                    <div id="innercontent-pick">
                        <p><b>Our pick:</b> <?php echo $_smarty_tpl->tpl_vars['game']->value['pick'];?>

                    </div>
                <?php }} else { ?>
                    <div id="innercontent">
                            <p>We're sorry, we couldn't find any games for today.</p>
                    </div>
                <?php } ?>
                
                <div id="redeemhlines">&nbsp;</div>
                
                <div id="innerhedding" style="font-size: 40px !important">All Your Games</div>
                
                <?php  $_smarty_tpl->tpl_vars['games'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['eventdate'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gamesByDate')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['games']->key => $_smarty_tpl->tpl_vars['games']->value){
 $_smarty_tpl->tpl_vars['eventdate']->value = $_smarty_tpl->tpl_vars['games']->key;
?>
                    
                    <div id="innerhedding-day"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['eventdate']->value,"%A, %B %e, %Y");?>
</div>
                    
                    <?php  $_smarty_tpl->tpl_vars['game'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['games']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['game']->key => $_smarty_tpl->tpl_vars['game']->value){
?>
                    <div id="innerhedding-game"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['game']->value['teamA']);?>
 vs. <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['game']->value['teamB']);?>
 <span style="font-weight:normal !important"> - <?php echo $_smarty_tpl->tpl_vars['game']->value['place'];?>
</span></div>
                    <div id="innercontent-pick">
                        <p><b>Our pick:</b> <?php echo $_smarty_tpl->tpl_vars['game']->value['pick'];?>

                    </div>
                    <?php }} ?>
                    
                <?php }} else { ?>
                    <div id="innercontent">
                        <p>We're sorry, we couldn't find any games for those dates</p>
                        <br /><br /><br /><br /><br /><br />
                    </div>
                
                <?php } ?>
                
                    <div id="innercontent" style="text-align:center;width:1004px;"><br/><br/>For any inconvinience or inquire don't hesitate to mail our <a href="mailto:staff@sports-degree.com">Staff</a>.<br/><br/></div>
                
            </div>
        </div>
    </div>
    
</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>