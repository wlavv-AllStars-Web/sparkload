<?php
/* Smarty version 4.3.1, created on 2023-10-06 17:14:25
  from 'C:\xampp\htdocs\sparkload\themes\classic\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65203261221cc8_80308791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49ba9ef99af162e73e6e761e680ba0696e3fb8f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sparkload\\themes\\classic\\templates\\_partials\\footer.tpl',
      1 => 1696608860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65203261221cc8_80308791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3150130616520326121f216_84692010', 'hook_footer_before');
?>

  </div>
</div>

<div class="footer-container">
<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?> 
<div style="background-color:#f7f8fa;">
<div class="container"  style="padding-bottom:44px;">
<div class="t" align="center" style="color:#000;padding-top: 29px;padding-bottom: 29px;">News</div>
<div style="display:flex;gap:18px;">
<div class="col-lg-4 col-md-4 col-sm-12" style="padding-left: 0px; padding-right: 0px;height: 433px;background-color: #fff;">
<img style="border-top: 3px solid #ed1921;" src="/img/news/d882034822d2600e0883a7f8706dc32b_YARIS-GR-news-1920-c-90-1024x576.jpg" width="100%">
<h2 class="news-dt">March 28, 2022</h2>
<p class="news-des">TOYOTA YARIS GR – Tuning files availables</p>
</div>
<div class="col-lg-4 col-md-4 col-sm-12" style="padding-left: 0px; padding-right: 0px;height: 433px;background-color: #fff;">
<img style="border-top: 3px solid #ed1921;" src="/img/news/CARTEL-GOLF-AZUL-1024x576.jpg" width="100%">
<h2 class="news-dt">November 11, 2021</h2>
<p class="news-des">DSG Farts – Now possible!</p>
</div>
<div class="col-lg-4 col-md-4 col-sm-12" style="padding-left: 0px; padding-right: 0px;height: 433px;background-color: #fff;">
<img style="border-top: 3px solid #ed1921;" src="/img/news/Ford-MG1CS016-pops-1024x576.jpg" width="100%">
<h2 class="news-dt">September 2, 2021</h2>
<p class="news-des">FORD MG1CS016 – Pop&bangs development finished!</p>
</div>
</div>
<div style="width:100%;padding-bottom:1%;padding-top:3%;" align="center">
  <div class="spaa-btn-red">VIEW MORE</div>
</div>
</div>
</div>
<?php }?>
</div>


<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['cooki'] != 33) {?>
  <div class="bg-cooki" id="cookiss">
  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_SESSION']->value['cooki'], ENT_QUOTES, 'UTF-8');?>

    <a role="button" data-cli_action="accept" id="cookie_action_close_header" class="fecha">Accept</a>
    <p align="left" class="cooki"><b>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This web portal only uses its own cookies for technical purposes, it does not collect or transfer personal data of users without their knowledge.','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

    </b></p>
    <p align="left" class="cooki">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'However, it contains links to third-party websites with privacy policies other than that of the AEPD that you can decide whether or not to accept when you access them.','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

    </p>
  </div>
<?php }?>


<div class="footer-container" style="background-color: #000;padding-bottom:78px;">
  <div class="container">
    <div class="row" style="display:flex;">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54588743665203261220c12_67811790', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32308672265203261221194_14884077', 'hook_footer_after');
?>

    </div>
    <div class="row">
      <div class="col-md-12" style="margin-top:33px;">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2006045030652032612216e7_60708843', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>

  <?php echo '<script'; ?>
>
    document.getElementById('cookie_action_close_header').addEventListener('click', function () {
      // Ocultar a div com o ID 'cookiss'
      document.getElementById('cookiss').style.display = 'none';

      // Enviar a variável 'cooki' para o servidor PHP usando uma solicitação Ajax
      $.ajax({
        type: 'POST',
        url: 'registrar_sessao.php',
        data: { cooki: 33 },
        success: function (response) {
          console.log('Variável cooki registrada como sessão PHP com sucesso.');
        },
        error: function () {
          console.error('Erro ao registrar a variável cooki como sessão PHP.');
        }
      });
    });
  <?php echo '</script'; ?>
><?php }
/* {block 'hook_footer_before'} */
class Block_3150130616520326121f216_84692010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_3150130616520326121f216_84692010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_54588743665203261220c12_67811790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_54588743665203261220c12_67811790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_32308672265203261221194_14884077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_32308672265203261221194_14884077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_2006045030652032612216e7_60708843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_2006045030652032612216e7_60708843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a href="#" target="_blank" rel="noopener noreferrer nofollow" style="color:#cfcfcf ;">
              © 2022 Eculimit</a>
          <?php
}
}
/* {/block 'copyright_link'} */
}
