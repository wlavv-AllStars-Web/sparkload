<?php
/* Smarty version 4.3.1, created on 2023-09-21 17:35:11
  from 'C:\xampp\htdocs\sparkload\adminsparkload\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_650c70bf4a3d04_48172629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a1e4befb2f412002689874277eb3dca22a84ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sparkload\\adminsparkload\\themes\\new-theme\\template\\content.tpl',
      1 => 1692974995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650c70bf4a3d04_48172629 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
