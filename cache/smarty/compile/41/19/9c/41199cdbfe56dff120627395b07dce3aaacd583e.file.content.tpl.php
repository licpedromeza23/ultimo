<?php /* Smarty version Smarty-3.1.19, created on 2016-08-11 21:29:51
         compiled from "C:\xampp\htdocs\ultimo\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2449257acd22f6cf550-13178313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41199cdbfe56dff120627395b07dce3aaacd583e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ultimo\\admin\\themes\\default\\template\\content.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2449257acd22f6cf550-13178313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57acd22f7021e0_15803865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57acd22f7021e0_15803865')) {function content_57acd22f7021e0_15803865($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
