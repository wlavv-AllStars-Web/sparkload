<?php
/* Smarty version 4.3.1, created on 2023-10-11 14:34:16
  from '/opt/lampp/htdocs/sparkload/themes/classic/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6526a45876eeb1_04106733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c91bb931146faf130ecb07abd3e2ddbe3f9d1d56' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/themes/classic/templates/catalog/_partials/category-footer.tpl',
      1 => 1696927946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526a45876eeb1_04106733 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
