<?php
/* Smarty version 4.3.1, created on 2023-10-06 15:44:19
  from 'C:\xampp\htdocs\sparkload\adminsparkload\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65201d43bc9c27_14301217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4720a0f09eafe84bd80df3267760c03fed0aff3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sparkload\\adminsparkload\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1695984084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65201d43bc9c27_14301217 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
