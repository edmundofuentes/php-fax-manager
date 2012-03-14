<?php /* Smarty version Smarty-3.0.7, created on 2011-05-22 16:26:48
         compiled from "../smarty/templates/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4851005364dd97f9821ea62-85130874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5187a84bd97bc58428c22ef989863a930c35255' => 
    array (
      0 => '../smarty/templates/error.tpl',
      1 => 1306099606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4851005364dd97f9821ea62-85130874',
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
                <div id="innerhedding">Error!</div>
                <div id="innercontent">
                    <p><?php echo $_smarty_tpl->getVariable('error_message')->value;?>
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