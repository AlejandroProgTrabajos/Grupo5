<?php
/* Smarty version 3.1.39, created on 2022-02-06 22:50:47
  from '/volume1/web/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620042b76747b3_10846623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf9fe42c9801602ba7527801377c0208784ef73' => 
    array (
      0 => '/volume1/web/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1644149042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620042b76747b3_10846623 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
