<?php
/* Smarty version 4.3.1, created on 2023-10-18 15:00:30
  from '/opt/lampp/htdocs/sparkload/modules/ps_mbo/views/templates/hook/dashboard-zone-one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652fe4feb1a990_35190197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf2a5b719c4497fc14c626ab2a3aa6342d6992a2' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/modules/ps_mbo/views/templates/hook/dashboard-zone-one.tpl',
      1 => 1694690864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652fe4feb1a990_35190197 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-tips-and-update-container'));
      });
    }
  } else {
    const renderTipsAndUpdate = window.mboCdc.renderDashboardTipsAndUpdate

    const dashboardTipsAndUpdateContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderTipsAndUpdate(dashboardTipsAndUpdateContext, '#cdc-tips-and-update-container')
  }
<?php echo '</script'; ?>
>

<section id="cdc-tips-and-update-container" class="cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
