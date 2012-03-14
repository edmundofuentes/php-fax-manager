<?php /* Smarty version Smarty-3.0.7, created on 2011-05-25 13:55:33
         compiled from "../smarty/templates/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11160072774ddd50a523f8b4-87430359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26f0757f5183c5af464d9c2775732ea33f7e91cf' => 
    array (
      0 => '../smarty/templates/page.tpl',
      1 => 1306349694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11160072774ddd50a523f8b4-87430359',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',$_smarty_tpl->getVariable('content_title')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>


<div id="indexbodyblank">
  <div id="indexbodyyellowblank">
    <div id="indexbodyyellow">
      <?php $_template = new Smarty_Internal_Template("useful_links.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      
      <div id="innercontentblank">
        <div id="innerhedding"><?php echo $_smarty_tpl->getVariable('content_title')->value;?>
</div>
        <div id="innercontent" style="line-height:16px">
          
            
            <?php echo $_smarty_tpl->getVariable('content')->value;?>

            
        
        </div>
      </div>
    </div>
  </div>
</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>