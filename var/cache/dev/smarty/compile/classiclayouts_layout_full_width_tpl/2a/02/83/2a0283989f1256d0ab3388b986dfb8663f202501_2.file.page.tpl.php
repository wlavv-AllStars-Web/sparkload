<?php
/* Smarty version 4.3.1, created on 2023-10-06 17:14:24
  from 'C:\xampp\htdocs\sparkload\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652032605a8724_49174773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a0283989f1256d0ab3388b986dfb8663f202501' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sparkload\\themes\\classic\\templates\\page.tpl',
      1 => 1696415793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652032605a8724_49174773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1984753739652032605a4a81_38892134', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_90795905652032605a6605_06847510 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_171384050652032605a6309_65355882 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90795905652032605a6605_06847510', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1371546034652032605a7785_02518616 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_27645377652032605a7a77_91141040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_483535686652032605a7583_07976346 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1371546034652032605a7785_02518616', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27645377652032605a7a77_91141040', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1400619849652032605a80c2_67659847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_556683989652032605a7f14_55081850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1400619849652032605a80c2_67659847', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1984753739652032605a4a81_38892134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1984753739652032605a4a81_38892134',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_171384050652032605a6309_65355882',
  ),
  'page_title' => 
  array (
    0 => 'Block_90795905652032605a6605_06847510',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_483535686652032605a7583_07976346',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1371546034652032605a7785_02518616',
  ),
  'page_content' => 
  array (
    0 => 'Block_27645377652032605a7a77_91141040',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_556683989652032605a7f14_55081850',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1400619849652032605a80c2_67659847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="main" style="background-color:#fff;">
<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
<h2 class="stpr" align="center" >Start working with professionals</h2>
<div style="display:flex;gap: 13px;padding-bottom: 34px;">
 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front toni">
      <p class="crd">LOGIN</p>
    </div>
    <div class="flip-card-back toni">
      <p class="crd-o">Register in less than 3 minutes</p>
    </div>
  </div>
</div> 
 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front toni">
      <p class="crd">BUY CREDITS</p>
    </div>
    <div class="flip-card-back toni">
      <p class="crd-o">Paypal Accepted, Credit card, secure methods</p>
    </div>
  </div>
</div> 
 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front toni">
      <p class="crd">UPLOAD YOUR FILE</p>
    </div>
    <div class="flip-card-back toni">
      <p class="crd-o">Attach your ORI file and select option</p>
    </div>
  </div>
</div> 
 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front toni">
      <p class="crd">DOWNLOAD YOUR FILE</p>
    </div>
    <div class="flip-card-back toni">
      <p class="crd-o">Will receive an email as soon as it`s ready to download</p>
    </div>
  </div>
</div>
</div>
<div style="width:100%;padding-bottom:4%;padding-top:2%;" align="center">
  <div class="spaa-btn-red">REGISTER NOW</div>
</div>
<div style="display:flex;">
<div style="width:50%;">
<iframe width="560" height="315" src="https://www.youtube.com/embed/iqwEAlAtPms?si=bUSdhXaAuConL0xC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<div style="width:50%;margin-left:33px;">
<h1 class="t" align="left" style="padding-top: 50px; margin-bottom: -21px;">ABOUT US</h1>
<h2 class="stpr" style="letter-spacing: 1px; line-height: 24px;color:#34343C;text-transform: initial;" align="left">Eculimit is founded by high experienced and qualified engineers in chiptuning sector that after many years tuning vehicles perceived a market hole to help other companies as far as file services is concerned. Since Eculimit was created, many tuners have trusted us to tune their customers vehicles.</h2>
</div>
</div>
<div style="width:100%;padding-top:2%;" align="center">
  <div class="spaa-btn-red">FAQ</div>
</div>
</div>
</div>

<?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171384050652032605a6309_65355882', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_483535686652032605a7583_07976346', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_556683989652032605a7f14_55081850', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
