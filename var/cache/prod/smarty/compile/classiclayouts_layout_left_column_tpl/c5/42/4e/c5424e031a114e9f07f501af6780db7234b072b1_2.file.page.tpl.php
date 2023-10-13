<?php
/* Smarty version 4.3.1, created on 2023-10-13 10:14:30
  from '/opt/lampp/htdocs/sparkload/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65290a764b8ef0_57447625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5424e031a114e9f07f501af6780db7234b072b1' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/themes/classic/templates/page.tpl',
      1 => 1696927946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65290a764b8ef0_57447625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9550146865290a764b70e8_91046180', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_164721670665290a764b78d5_65769896 extends Smarty_Internal_Block
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
class Block_203810658765290a764b76b7_97067106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164721670665290a764b78d5_65769896', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_211420065290a764b8359_47739221 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_24366502465290a764b85a3_14864455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_43674029165290a764b81c1_20660409 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211420065290a764b8359_47739221', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24366502465290a764b85a3_14864455', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_19535332565290a764b8a73_25351598 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_65959977565290a764b8902_51010367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19535332565290a764b8a73_25351598', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9550146865290a764b70e8_91046180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9550146865290a764b70e8_91046180',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_203810658765290a764b76b7_97067106',
  ),
  'page_title' => 
  array (
    0 => 'Block_164721670665290a764b78d5_65769896',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_43674029165290a764b81c1_20660409',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_211420065290a764b8359_47739221',
  ),
  'page_content' => 
  array (
    0 => 'Block_24366502465290a764b85a3_14864455',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_65959977565290a764b8902_51010367',
  ),
  'page_footer' => 
  array (
    0 => 'Block_19535332565290a764b8a73_25351598',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203810658765290a764b76b7_97067106', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43674029165290a764b81c1_20660409', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65959977565290a764b8902_51010367', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
