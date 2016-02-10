<?php /* Smarty version Smarty-3.1.19, created on 2016-02-10 12:25:24
         compiled from "D:\OpenServer\domains\Creative.mu\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2336656bb02043b20b7-54503610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '697c68fc5ec6673d30397c059db9b954b4a69411' => 
    array (
      0 => 'D:\\OpenServer\\domains\\Creative.mu\\admin\\themes\\default\\template\\content.tpl',
      1 => 1455093835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2336656bb02043b20b7-54503610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56bb0204459e48_92630144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bb0204459e48_92630144')) {function content_56bb0204459e48_92630144($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
