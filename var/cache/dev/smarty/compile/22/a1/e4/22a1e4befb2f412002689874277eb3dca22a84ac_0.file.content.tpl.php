<?php
/* Smarty version 4.3.1, created on 2023-10-06 15:44:18
  from 'C:\xampp\htdocs\sparkload\adminsparkload\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65201d429f9db7_14603760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a1e4befb2f412002689874277eb3dca22a84ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sparkload\\adminsparkload\\themes\\new-theme\\template\\content.tpl',
      1 => 1695984084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65201d429f9db7_14603760 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
