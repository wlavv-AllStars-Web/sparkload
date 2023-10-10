<?php
/* Smarty version 4.3.1, created on 2023-10-06 17:14:24
  from 'C:\xampp\htdocs\sparkload\modules\smartsupp\views\templates\front\chat_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652032604fbb83_90098478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91a9ddd4fb1a22d68fde6f34717ea62278b2aa58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sparkload\\modules\\smartsupp\\views\\templates\\front\\chat_widget.tpl',
      1 => 1696603388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652032604fbb83_90098478 (Smarty_Internal_Template $_smarty_tpl) {
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
