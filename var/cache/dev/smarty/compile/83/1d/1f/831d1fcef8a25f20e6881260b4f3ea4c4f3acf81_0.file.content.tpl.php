<?php
/* Smarty version 4.3.1, created on 2023-10-10 12:22:04
  from '/opt/lampp/htdocs/sparkload/adminsparkload/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652533dcccbfd5_64646224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '831d1fcef8a25f20e6881260b4f3ea4c4f3acf81' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/adminsparkload/themes/default/template/content.tpl',
      1 => 1696927945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652533dcccbfd5_64646224 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
