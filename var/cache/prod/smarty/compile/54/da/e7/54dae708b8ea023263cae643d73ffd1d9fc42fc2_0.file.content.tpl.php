<?php
/* Smarty version 4.3.1, created on 2023-10-17 14:26:55
  from '/opt/lampp/htdocs/sparkload/adminsparkload/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652e8b9f5143e1_40557838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54dae708b8ea023263cae643d73ffd1d9fc42fc2' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/adminsparkload/themes/new-theme/template/content.tpl',
      1 => 1696927945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e8b9f5143e1_40557838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
