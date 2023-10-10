<?php
/* Smarty version 4.3.1, created on 2023-10-06 17:14:25
  from 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652032613ce499_49595532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl',
      1 => 1696436384,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652032613ce499_49595532 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\sparkload/themes/classic/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->
<div class="ns col-md-3" id="blockEmailSubscription_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
">
  <div class="row">
    <p class="h3 hidden-sm-down">Newsletter Subscribe</p>
    <p class="hidden-sm-down" style="color:#cfcfcf;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe to our mailing list to get the updates to your email inbox.','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
      <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
#blockEmailSubscription_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
      <input name="email" type="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="ni" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" aria-labelledby="block-newsletter-label" required >
    <label  style="text-align: left;padding-top: 14px;">
          <input name="AGREE_TO_TERMS" type="checkbox" value="1" required=""><a href="https://eculimit.com/privacy-policy" target="_blank" style="padding-left: 4px;text-align: left; color:#ed1921!important;">I have read and agree to the terms &amp; conditions</a>
      </label>
      <input type="hidden" name="blockHookName" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" />
      <input type="hidden" name="action" value="0">
    <input class="spa-btn-trans" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" name="submitNewsletter" type="submit" style="width: 85px;padding: 4px;">
<!--
          <div class="col-xs-12">
              <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
                <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewsletterRegistration'),$_smarty_tpl ) );?>

              <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

              <?php }?>
          </div>
          -->
      </form>
    </div>
  </div>
</div>
<!-- end C:\xampp\htdocs\sparkload/themes/classic/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
