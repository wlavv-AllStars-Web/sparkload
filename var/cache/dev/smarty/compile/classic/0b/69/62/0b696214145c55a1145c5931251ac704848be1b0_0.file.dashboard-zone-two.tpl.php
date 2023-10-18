<?php
/* Smarty version 4.3.1, created on 2023-10-18 15:00:30
  from '/opt/lampp/htdocs/sparkload/modules/ps_mbo/views/templates/hook/dashboard-zone-two.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652fe4fec68927_43911533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b696214145c55a1145c5931251ac704848be1b0' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/modules/ps_mbo/views/templates/hook/dashboard-zone-two.tpl',
      1 => 1694690864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652fe4fec68927_43911533 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-more-module-container'));
      });
    }
  } else {
    const renderMoreModule = window.mboCdc.renderDashboardMoreModule

    const context = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderMoreModule(context, '#cdc-more-module-container')
  }
<?php echo '</script'; ?>
>

<div class="row-margin-bottom cdc-container" id="cdc-more-module-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></div>
<?php }
}
