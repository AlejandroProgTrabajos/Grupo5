<?php
/* Smarty version 3.1.39, created on 2022-02-06 22:54:51
  from '/volume1/web/admin470ckh7yy/themes/new-theme/template/controllers/orders/page_header_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620043ab7f64c8_28086406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce2e6c17c9749bacc55cd6899cef284c51dd7774' => 
    array (
      0 => '/volume1/web/admin470ckh7yy/themes/new-theme/template/controllers/orders/page_header_toolbar.tpl',
      1 => 1644148682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620043ab7f64c8_28086406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1622057990620043ab7ef2c3_37370750', 'pageTitle');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page_header_toolbar.tpl');
}
/* {block 'pageTitle'} */
class Block_1622057990620043ab7ef2c3_37370750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_1622057990620043ab7ef2c3_37370750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (!(isset($_smarty_tpl->tpl_vars['use_regular_h1_structure']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('use_regular_h1_structure', true);?>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['use_regular_h1_structure']->value) {?>
    <h1 class="title">
      <?php if (is_array($_smarty_tpl->tpl_vars['title']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( end($_smarty_tpl->tpl_vars['title']->value) ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));
}?>
    </h1>
  <?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

  <?php }
}
}
/* {/block 'pageTitle'} */
}
