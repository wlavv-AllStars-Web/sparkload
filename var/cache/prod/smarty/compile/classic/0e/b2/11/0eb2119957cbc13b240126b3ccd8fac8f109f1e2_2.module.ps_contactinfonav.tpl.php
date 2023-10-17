<?php
/* Smarty version 4.3.1, created on 2023-10-17 15:25:54
  from 'module:ps_contactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652e9972415837_16559102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfonav.tpl',
      1 => 1697191085,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e9972415837_16559102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/sparkload/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <?php echo '<script'; ?>
>
window.addEventListener('DOMContentLoaded', function () {
  
  if (window.location.pathname === '/content/4-about-us') {
    // Se o URL corresponder, obtenha o elemento com o ID "about"
    var aboutElement = document.getElementById('about');
    }
  if (window.location.pathname === '/contact-us') {
    var aboutElement = document.getElementById('contacte');
}
  if (window.location.pathname === '/content/8-faq-eculimit') {
    var aboutElement = document.getElementById('faqq');
}
    // Verifique se o elemento existe
    if (aboutElement) {
      // Troque a classe do elemento
      aboutElement.classList.remove('mst');
      aboutElement.classList.add('msth');
    }
  
});
 <?php echo '</script'; ?>
>
<div id="_desktop_contact_link" style="float:right;  color: #fff !important;">
  <div id="contact-link">
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
            <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['contact_infos']->value['phone'],' ',''), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>"<a href='tel:".$_prefixVariable1."'>",'[/1]'=>'</a>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    <?php } else { ?>
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" class="mst"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'NEWS','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
      <a href="/content/8-faq-eculimit" class="mst" id="faqq"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'FAQ','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
      <a href="/content/4-about-us" class="mst" id="about" style="width: 78px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ABOUT US','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"  class="mst"  id="contacte" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CONTACT','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" class="btnr"><i class="fas fa-key"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'REGISTER','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" class="btnr" style="width: 99px;margin-left: -33px;"><i class="fas fa-user-alt"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LOG IN','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    <?php }?>
  </div>
</div>
<?php }
}
