<?php
/* Smarty version 4.3.1, created on 2023-10-17 15:25:52
  from '/opt/lampp/htdocs/sparkload/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652e9970bdbd87_57794184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ed231c99e87ef1dad11ba70bf57bf6f750e7eed' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/themes/classic/templates/index.tpl',
      1 => 1696927946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e9970bdbd87_57794184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1028236251652e9970bdaf27_70037152', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1031227652652e9970bdb185_16500716 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1336054180652e9970bdb684_36279026 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1291563527652e9970bdb505_40411014 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1336054180652e9970bdb684_36279026', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1028236251652e9970bdaf27_70037152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1028236251652e9970bdaf27_70037152',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1031227652652e9970bdb185_16500716',
  ),
  'page_content' => 
  array (
    0 => 'Block_1291563527652e9970bdb505_40411014',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1336054180652e9970bdb684_36279026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1031227652652e9970bdb185_16500716', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1291563527652e9970bdb505_40411014', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
