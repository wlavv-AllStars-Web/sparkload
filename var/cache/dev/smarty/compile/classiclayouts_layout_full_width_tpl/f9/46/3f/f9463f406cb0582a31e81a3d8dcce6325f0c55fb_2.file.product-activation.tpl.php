<?php
/* Smarty version 4.3.1, created on 2023-10-06 17:14:24
  from 'C:\xampp\htdocs\sparkload\themes\classic\templates\catalog\_partials\product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65203260d2b8c4_30187980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9463f406cb0582a31e81a3d8dcce6325f0c55fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sparkload\\themes\\classic\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1695984088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65203260d2b8c4_30187980 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
<?php }
}
}
