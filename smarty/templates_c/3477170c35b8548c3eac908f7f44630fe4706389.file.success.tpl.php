<?php /* Smarty version Smarty-3.0.7, created on 2011-05-25 13:48:52
         compiled from "../smarty/templates/success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13522760304ddd4f1407d690-98046824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3477170c35b8548c3eac908f7f44630fe4706389' => 
    array (
      0 => '../smarty/templates/success.tpl',
      1 => 1306348907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13522760304ddd4f1407d690-98046824',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',"Error"); echo $_template->getRenderedTemplate();?><?php unset($_template);?>



<div id="indexbodyblank">
    <div id="indexbodyyellowblank">
        <div id="indexbodyyellow">
            <div id="innercontentblank" style="margin:28px 0 0 110px !important;">
                <div id="innerhedding">Success!</div>
                <div id="innercontent">
                    <p><?php echo $_smarty_tpl->getVariable('message')->value;?>
</p>
                    <br/>
                    <p>Go <a href="index.php">Back</a>.</p>
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>