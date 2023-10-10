<?php
/* Smarty version 4.3.1, created on 2023-10-06 17:14:24
  from 'C:\xampp\htdocs\sparkload\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652032608a9315_32653585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51982e5ea00d2603bf953e9b20e4f98e0c3f52fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sparkload\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1695984088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652032608a9315_32653585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\sparkload\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\51\\98\\2e\\51982e5ea00d2603bf953e9b20e4f98e0c3f52fe_2.file.helpers.tpl.php',
    'uid' => '51982e5ea00d2603bf953e9b20e4f98e0c3f52fe',
    'call_name' => 'smarty_template_function_renderLogo_2021012385652032608a52c1_37504056',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_2021012385652032608a52c1_37504056 */
if (!function_exists('smarty_template_function_renderLogo_2021012385652032608a52c1_37504056')) {
function smarty_template_function_renderLogo_2021012385652032608a52c1_37504056(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_2021012385652032608a52c1_37504056 */
}
