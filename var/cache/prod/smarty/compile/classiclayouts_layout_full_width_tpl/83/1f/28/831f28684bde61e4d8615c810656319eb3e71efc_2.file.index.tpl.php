<?php
/* Smarty version 3.1.39, created on 2022-02-06 20:01:45
  from '/volume1/web/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62001b193b0fe6_95990285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '831f28684bde61e4d8615c810656319eb3e71efc' => 
    array (
      0 => '/volume1/web/themes/classic/templates/index.tpl',
      1 => 1644149043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62001b193b0fe6_95990285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103921559862001b193ad3d2_36652709', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_111036779062001b193adae5_64386831 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_114211869562001b193aeb28_48272203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_54053561962001b193ae4b8_70028852 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114211869562001b193aeb28_48272203', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_103921559862001b193ad3d2_36652709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_103921559862001b193ad3d2_36652709',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_111036779062001b193adae5_64386831',
  ),
  'page_content' => 
  array (
    0 => 'Block_54053561962001b193ae4b8_70028852',
  ),
  'hook_home' => 
  array (
    0 => 'Block_114211869562001b193aeb28_48272203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111036779062001b193adae5_64386831', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54053561962001b193ae4b8_70028852', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
