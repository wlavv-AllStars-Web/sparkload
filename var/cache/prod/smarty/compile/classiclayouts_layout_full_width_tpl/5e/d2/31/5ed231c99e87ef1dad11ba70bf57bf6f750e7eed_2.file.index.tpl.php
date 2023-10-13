<?php
/* Smarty version 4.3.1, created on 2023-10-13 10:01:35
  from '/opt/lampp/htdocs/sparkload/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6529076f9f9524_43398010',
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
function content_6529076f9f9524_43398010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18091295586529076f9f8659_01779487', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_19143052746529076f9f88c9_62820559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_14898855156529076f9f8df0_25225531 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_16911809866529076f9f8c63_54584819 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14898855156529076f9f8df0_25225531', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18091295586529076f9f8659_01779487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_18091295586529076f9f8659_01779487',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19143052746529076f9f88c9_62820559',
  ),
  'page_content' => 
  array (
    0 => 'Block_16911809866529076f9f8c63_54584819',
  ),
  'hook_home' => 
  array (
    0 => 'Block_14898855156529076f9f8df0_25225531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19143052746529076f9f88c9_62820559', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16911809866529076f9f8c63_54584819', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
