<?php
/* Smarty version 4.3.1, created on 2023-10-13 10:14:31
  from '/opt/lampp/htdocs/sparkload/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65290a776ea2c8_44582809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed48f36a01660dcc1d71b13baaad037d220b3207' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/themes/classic/templates/_partials/footer.tpl',
      1 => 1696927946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65290a776ea2c8_44582809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18047911865290a776e7c31_72020694', 'hook_footer_before');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197447801965290a776e8f68_97261168', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151797813465290a776e95c7_04369448', 'hook_footer_after');
?>

    </div>
    <div class="row">
      <div class="col-md-12" style="margin-top:33px;">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10590143165290a776e9be0_02180086', 'copyright_link');
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
class Block_18047911865290a776e7c31_72020694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_18047911865290a776e7c31_72020694',
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
class Block_197447801965290a776e8f68_97261168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_197447801965290a776e8f68_97261168',
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
class Block_151797813465290a776e95c7_04369448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_151797813465290a776e95c7_04369448',
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
class Block_10590143165290a776e9be0_02180086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_10590143165290a776e9be0_02180086',
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
