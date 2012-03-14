<?php /* Smarty version Smarty-3.0.7, created on 2011-05-26 12:15:06
         compiled from "../smarty/templates/twitter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21007922504dde8a9a820fc7-62395999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c15ae080ebdd7e94f4bc83f388c441d4bcc3570' => 
    array (
      0 => '../smarty/templates/twitter.tpl',
      1 => 1306430103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21007922504dde8a9a820fc7-62395999',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 7,
  interval: 6000,
  width: 650,
  height: 200,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#8db202'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('sportsdegree').start();
</script>