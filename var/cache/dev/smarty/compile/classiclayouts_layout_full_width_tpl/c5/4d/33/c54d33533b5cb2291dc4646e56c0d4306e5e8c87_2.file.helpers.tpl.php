<?php
/* Smarty version 4.3.1, created on 2023-10-10 12:23:29
  from '/opt/lampp/htdocs/sparkload/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65253431d18e16_61373872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c54d33533b5cb2291dc4646e56c0d4306e5e8c87' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/themes/classic/templates/_partials/helpers.tpl',
      1 => 1696927946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65253431d18e16_61373872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/opt/lampp/htdocs/sparkload/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/c5/4d/33/c54d33533b5cb2291dc4646e56c0d4306e5e8c87_2.file.helpers.tpl.php',
    'uid' => 'c54d33533b5cb2291dc4646e56c0d4306e5e8c87',
    'call_name' => 'smarty_template_function_renderLogo_78618589365253431d165b3_53007656',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_78618589365253431d165b3_53007656 */
if (!function_exists('smarty_template_function_renderLogo_78618589365253431d165b3_53007656')) {
function smarty_template_function_renderLogo_78618589365253431d165b3_53007656(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_78618589365253431d165b3_53007656 */
}
