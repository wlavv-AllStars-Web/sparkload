<?php
/* Smarty version 4.3.1, created on 2023-10-13 10:14:31
  from '/opt/lampp/htdocs/sparkload/modules/smartsupp/views/templates/front/chat_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65290a7768cb77_18343526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b691eb7a8d248ab19d96a78d793fcf9a406c123f' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/modules/smartsupp/views/templates/front/chat_widget.tpl',
      1 => 1696927946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65290a7768cb77_18343526 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

/**
 * NOTICE OF LICENSE
 *
 * Smartsupp live chat - official plugin. Smartsupp is free live chat with visitor recording. 
 * The plugin enables you to create a free account or sign in with existing one. Pre-integrated 
 * customer info with WooCommerce (you will see names and emails of signed in webshop visitors).
 * Optional API for advanced chat box modifications.
 *
 * You must not modify, adapt or create derivative works of this source code
 *
 *  @author    Smartsupp
 *  @copyright 2021 Smartsupp.com
 *  @license   GPL-2.0+
**/ 
<?php echo '?>'; ?>



<?php echo $_smarty_tpl->tpl_vars['smartsupp_js']->value;?>



<?php echo '<script'; ?>
>
	smartsupp('chat:close');
<?php echo '</script'; ?>
>
<?php }
}
