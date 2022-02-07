<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:03:23
  from '/volume1/web/admin470ckh7yy/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62001b7b1edb53_06536106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6504cdb9ee3e23e0a902fbdef1177bc5c9267d61' => 
    array (
      0 => '/volume1/web/admin470ckh7yy/themes/default/template/content.tpl',
      1 => 1644148683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62001b7b1edb53_06536106 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
