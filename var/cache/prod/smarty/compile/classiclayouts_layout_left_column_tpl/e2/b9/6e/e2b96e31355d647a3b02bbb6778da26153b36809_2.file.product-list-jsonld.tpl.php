<?php
/* Smarty version 4.3.1, created on 2023-10-11 14:34:16
  from '/opt/lampp/htdocs/sparkload/themes/classic/templates/_partials/microdata/product-list-jsonld.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6526a4586d6b84_19379656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2b96e31355d647a3b02bbb6778da26153b36809' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/themes/classic/templates/_partials/microdata/product-list-jsonld.tpl',
      1 => 1696927946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6526a4586d6b84_19379656 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ItemList",
    "itemListElement": [
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'item', false, NULL, 'productsForJsonLd', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['total'];
?>
      {
        "@type": "ListItem",
        "position": <?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
,
        "name": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
",
        "url": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
      }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_productsForJsonLd']->value['last'] : null)) {?>,<?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    ]
  }
<?php echo '</script'; ?>
>
<?php }
}
