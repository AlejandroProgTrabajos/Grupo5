<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:01:45
  from '/volume1/web/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62001b193f1217_40043905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609657659da14647c832067f7f7bab6020914a21' => 
    array (
      0 => '/volume1/web/themes/classic/templates/_partials/helpers.tpl',
      1 => 1644149042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62001b193f1217_40043905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/volume1/web/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/60/96/57/609657659da14647c832067f7f7bab6020914a21_2.file.helpers.tpl.php',
    'uid' => '609657659da14647c832067f7f7bab6020914a21',
    'call_name' => 'smarty_template_function_renderLogo_184945045262001b193e5844_53717941',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_184945045262001b193e5844_53717941 */
if (!function_exists('smarty_template_function_renderLogo_184945045262001b193e5844_53717941')) {
function smarty_template_function_renderLogo_184945045262001b193e5844_53717941(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_184945045262001b193e5844_53717941 */
}
