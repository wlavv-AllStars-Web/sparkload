<?php
/* Smarty version 4.3.1, created on 2023-10-06 17:00:53
  from 'C:\xampp\htdocs\sparkload\themes\classic\templates\errors\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65202f3572f538_10267231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b9ff75029936d68489309669d3117a5f85dd73c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sparkload\\themes\\classic\\templates\\errors\\404.tpl',
      1 => 1695984088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_65202f3572f538_10267231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156642210365202f3572a096_54749373', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90123413165202f3572a808_51847885', 'page_title');
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available yet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10057881065202f3572d0c2_73860070', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "breadcrumb"} */
class Block_156642210365202f3572a096_54749373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_156642210365202f3572a096_54749373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "breadcrumb"} */
/* {block 'page_title'} */
class Block_90123413165202f3572a808_51847885 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_90123413165202f3572a808_51847885',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_10057881065202f3572d0c2_73860070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_10057881065202f3572d0c2_73860070',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
}
}
/* {/block 'page_content_container'} */
}
