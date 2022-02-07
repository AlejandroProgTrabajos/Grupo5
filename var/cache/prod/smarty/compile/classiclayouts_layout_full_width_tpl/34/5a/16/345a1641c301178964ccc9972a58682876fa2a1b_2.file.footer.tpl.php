<?php
/* Smarty version 3.1.39, created on 2022-02-06 22:51:02
  from '/volume1/web/themes/classic/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620042c6445bf9_51608266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '345a1641c301178964ccc9972a58682876fa2a1b' => 
    array (
      0 => '/volume1/web/themes/classic/templates/checkout/_partials/footer.tpl',
      1 => 1644149043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620042c6445bf9_51608266 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade js-checkout-modal" id="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="js-modal-content"></div>
    </div>
  </div>
</div>

<div class="text-sm-center">
  <?php if ($_smarty_tpl->tpl_vars['tos_cms']->value != false) {?>
    <span class="d-block js-terms"><?php echo $_smarty_tpl->tpl_vars['tos_cms']->value;?>
</span>
  <?php }?>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php }
}
