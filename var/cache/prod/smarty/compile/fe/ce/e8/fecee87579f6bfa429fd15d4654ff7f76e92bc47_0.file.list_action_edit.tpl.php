<?php
/* Smarty version 4.3.1, created on 2023-10-12 10:02:03
  from '/opt/lampp/htdocs/sparkload/adminsparkload/themes/default/template/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6527b60bcedff6_77373259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fecee87579f6bfa429fd15d4654ff7f76e92bc47' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/adminsparkload/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1696927945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6527b60bcedff6_77373259 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
