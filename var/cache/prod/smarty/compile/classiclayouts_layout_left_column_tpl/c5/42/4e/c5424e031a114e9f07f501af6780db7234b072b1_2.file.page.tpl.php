<?php
/* Smarty version 4.3.1, created on 2023-10-17 15:25:47
  from '/opt/lampp/htdocs/sparkload/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652e996bc9ccc3_44923258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5424e031a114e9f07f501af6780db7234b072b1' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/themes/classic/templates/page.tpl',
      1 => 1697540231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e996bc9ccc3_44923258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_299016867652e996bc9ae67_70447756', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2136095648652e996bc9b672_04620710 extends Smarty_Internal_Block
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
class Block_551472696652e996bc9b458_10457885 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2136095648652e996bc9b672_04620710', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1179786931652e996bc9c0c6_34890330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1964095474652e996bc9c314_06686593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1509329036652e996bc9bf26_38056131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1179786931652e996bc9c0c6_34890330', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1964095474652e996bc9c314_06686593', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_797243863652e996bc9c7f8_92526516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_542091258652e996bc9c698_66749913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_797243863652e996bc9c7f8_92526516', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_299016867652e996bc9ae67_70447756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_299016867652e996bc9ae67_70447756',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_551472696652e996bc9b458_10457885',
  ),
  'page_title' => 
  array (
    0 => 'Block_2136095648652e996bc9b672_04620710',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1509329036652e996bc9bf26_38056131',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1179786931652e996bc9c0c6_34890330',
  ),
  'page_content' => 
  array (
    0 => 'Block_1964095474652e996bc9c314_06686593',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_542091258652e996bc9c698_66749913',
  ),
  'page_footer' => 
  array (
    0 => 'Block_797243863652e996bc9c7f8_92526516',
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
<a href="/registration">
  <div class="spaa-btn-red">REGISTER NOW</div>
</a>
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
<a href="/content/8-faq-eculimit">
  <div class="spaa-btn-red">FAQ</div>
</a>
</div>
</div>
</div>

<?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_551472696652e996bc9b458_10457885', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1509329036652e996bc9bf26_38056131', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_542091258652e996bc9c698_66749913', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}