<?php
/* Smarty version 4.3.1, created on 2023-10-06 15:44:19
  from 'C:\xampp\htdocs\sparkload\adminsparkload\themes\new-theme\template\components\layout\information_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65201d43b8ebb3_35672885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c64739fd8868e76c55891e214b0b0b54110fa99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sparkload\\adminsparkload\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1695984084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65201d43b8ebb3_35672885 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['informations']->value)) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
