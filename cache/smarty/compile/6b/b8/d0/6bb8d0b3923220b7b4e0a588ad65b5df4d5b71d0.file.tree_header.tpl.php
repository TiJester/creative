<?php /* Smarty version Smarty-3.1.19, created on 2016-02-10 12:25:49
         compiled from "D:\OpenServer\domains\Creative.mu\admin\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629356bb021d80fc08-06364030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb8d0b3923220b7b4e0a588ad65b5df4d5b71d0' => 
    array (
      0 => 'D:\\OpenServer\\domains\\Creative.mu\\admin\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1455093857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1629356bb021d80fc08-06364030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56bb021d83d875_47966945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bb021d83d875_47966945')) {function content_56bb021d83d875_47966945($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
