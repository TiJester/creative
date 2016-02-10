<?php /* Smarty version Smarty-3.1.19, created on 2016-02-10 12:25:30
         compiled from "D:\OpenServer\domains\Creative.mu\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1850156bb020a2fec15-16018159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd601d2900dc8d332a470814a2a6015876ced6dab' => 
    array (
      0 => 'D:\\OpenServer\\domains\\Creative.mu\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1455093844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1850156bb020a2fec15-16018159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56bb020a315a49_38265480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bb020a315a49_38265480')) {function content_56bb020a315a49_38265480($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
