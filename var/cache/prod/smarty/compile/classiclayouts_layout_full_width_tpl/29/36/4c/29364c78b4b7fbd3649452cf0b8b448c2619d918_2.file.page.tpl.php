<?php
/* Smarty version 4.3.1, created on 2023-10-13 09:50:10
  from '/opt/lampp/htdocs/sparkload/themes/classic/templates/cms/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652904c2125572_87328901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29364c78b4b7fbd3649452cf0b8b448c2619d918' => 
    array (
      0 => '/opt/lampp/htdocs/sparkload/themes/classic/templates/cms/page.tpl',
      1 => 1697108233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652904c2125572_87328901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1565118579652904c2122478_89989796', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1841246153652904c2122c41_63793492', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_1565118579652904c2122478_89989796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_1565118579652904c2122478_89989796',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'cms_content'} */
class Block_1244079375652904c2123023_52265958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo $_smarty_tpl->tpl_vars['cms']->value['content'];?>

    <?php
}
}
/* {/block 'cms_content'} */
/* {block 'hook_cms_dispute_information'} */
class Block_1262777807652904c2123588_43788441 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSDisputeInformation'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_dispute_information'} */
/* {block 'hook_cms_print_button'} */
class Block_1846782410652904c2123f50_66537575 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSPrintButton'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_print_button'} */
/* {block 'page_content_container'} */
class Block_1841246153652904c2122c41_63793492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1841246153652904c2122c41_63793492',
  ),
  'cms_content' => 
  array (
    0 => 'Block_1244079375652904c2123023_52265958',
  ),
  'hook_cms_dispute_information' => 
  array (
    0 => 'Block_1262777807652904c2123588_43788441',
  ),
  'hook_cms_print_button' => 
  array (
    0 => 'Block_1846782410652904c2123f50_66537575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-cms page-cms-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cms']->value['id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1244079375652904c2123023_52265958', 'cms_content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1262777807652904c2123588_43788441', 'hook_cms_dispute_information', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1846782410652904c2123f50_66537575', 'hook_cms_print_button', $this->tplIndex);
?>


  </section>
<?php if ($_smarty_tpl->tpl_vars['cms']->value['id'] == 4) {?>
  </div>
  </div>
  </div>
<div style="background-color: #000; padding-top: 33px; width: 100%;" align="center">
<h1 class="heading-title" style="width:100%" align="center" >About</h1>
<div style="width:55%;background-color:#fff;height:1px;margin-top:18px;"></div>
<div align="center" style="display:flex;width:59%;padding: 33px;">
<div class="col-md-4" style="float: none;">
<img decoding="async" width="100" height="100" src="/img/cms/icos/fast-eculimit.png" alt="">
<h2 style="padding-top: 31px;font-size: 17px;font-weight: 400;color:#fff;">Fast Service</h2>
</div>
<div class="col-md-4" style="float: none;">
<img decoding="async" width="100" height="100" src="/img/cms/icos/wordlwide-eculimit.png" alt="">
<h2 style="padding-top: 31px;font-size: 17px;font-weight: 400;color:#fff;">Worlwide Satisfied customer</h2>
</div>
<div class="col-md-4" style="float: none;">
<img decoding="async" width="100" height="100" src="/img/cms/icos/eculimit-qualified.png" alt="">
<h2 style="padding-top: 31px;font-size: 17px;font-weight: 400;color:#fff;">High qualified & trained engineers</h2>
</div>
</div>
</div>

<div style="margin-top:57px;background-color: #ED1921; padding-top: 33px; width: 100%;" align="center">
<h1 class="heading-title" style="width:100%" align="center" >What we offer?</h1>
<div style="width:55%;background-color:#fff;height:1px;margin-top:18px;"></div>
<div align="center" style="display:flex;width:59%;padding: 33px;">
<div class="col-md-4" style="float: none;">
<img decoding="async" width="100" height="100" src="/img/cms/icos/eculimit-files.png" alt="">
<h2 style="padding-top: 31px;font-size: 17px;font-weight: 400;color:#fff;">High Quality Tuning Files</h2>
</div>
<div class="col-md-4" style="float: none;">
<img decoding="async" width="100" height="100" src="/img/cms/icos/eculimit-atencion.png" alt="">
<h2 style="padding-top: 31px;font-size: 17px;font-weight: 400;color:#fff;">Individual Request</h2>
</div>
<div class="col-md-4" style="float: none;">
<img decoding="async" width="100" height="100" src="/img/cms/icos/eculimit-support.png" alt="">
<h2 style="padding-top: 31px;font-size: 17px;font-weight: 400;color:#fff;">Support Center</h2>
</div>
</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cms']->value['id'] == 7) {?>
  </div>
  </div>
  </div>
<div style="background-color: #EEEEEE; padding-top: 7px; width: 100%;" align="center">
<div align="left" style="display: flex; width: 63%; padding: 33px; gap: 46px;">
<div class="col-md-4" style="float: none;background-color:#fff;padding:27px 0px 0px 27px;">
<img decoding="async" style="width: 71px;height: auto;" src="/img/cms/icos/mano-01-150x150.png" alt="">
<h1 style="padding-top: 31px;color:#34343C;font-size: 26px;">
Easy to integrate
</h1>
<p style="padding-top: 17px;padding-bottom: 17px;padding-right: 24px;">
Our iFrame is easily insertable in your website.
</p>
</div>
<div class="col-md-4" style="float: none;background-color:#fff;padding:27px 0px 0px 27px;">
<img decoding="async" style="width: 71px;height: auto;" src="/img/cms/icos/filter-01-150x150.png" alt="">
<h1 style="padding-top: 31px;color:#34343C;font-size: 26px;">
Easy to use
</h1>
<p style="padding-top: 17px;padding-bottom: 17px;padding-right: 24px;">
Filter by brand, model, generation and engine.
</p>
</div>
<div class="col-md-4" style="float: none;background-color:#fff;padding:27px 0px 0px 27px;">
<img decoding="async" style="width: 71px;height: auto;" src="/img/cms/icos/update-01-150x150.png" alt="">
<h1 style="padding-top: 31px;color:#34343C;font-size: 26px;">
Automatic updates
</h1>
<p style="padding-top: 17px;padding-bottom: 17px;padding-right: 24px;">
Continuous updates will make your site up to date.
</p>
</div>
</div>
<div align="left" style="display: flex; width: 63%; padding: 33px; gap: 46px;">
<div class="col-md-6" style="float: none;background-color:#fff;padding:27px 0px 0px 27px;">
<img decoding="async" style="width: 71px;height: auto;" src="/img/cms/icos/mano-01-150x150.png" alt="">
<h1 style="padding-top: 31px;color:#34343C;font-size: 26px;">
Power and torque specifications
</h1>
<p style="padding-top: 17px;padding-bottom: 17px;padding-right: 24px;">
For each vehicle in different chiptuning stages.
</p>
</div>
<div class="col-md-6" style="float: none;background-color:#fff;padding:27px 0px 0px 27px;">
<img decoding="async" style="width: 71px;height: auto;" src="/img/cms/icos/filter-01-150x150.png" alt="">
<h1 style="padding-top: 31px;color:#34343C;font-size: 26px;">
User friendly
</h1>
<p style="padding-top: 17px;padding-bottom: 17px;padding-right: 24px;">
User friendly” Works with different program languages.
</p>
</div>
</div>
</div>
<div align="center" style="padding-bottom: 33px; ">
<h1  style="padding-top: 33px; font-size: 31px; font-weight: lighter;">Purchase now!</h1>
<div style="display: flex;justify-content: center;padding-top: 18px;gap: 33px;">
<div class="spaa-btn-red" style="width: 111px; text-align: center;">Login</div>
<div class="spaa-btn-red" style="width: 111px; text-align: center;">Register</div>
</div>
</div>
<!-- CONSULTAR POTENCIAS -->
<div class="wall-ecu">
<div style="padding-left:20%;padding-right:20%;">
<div style="display:flex;padding-top: 32px;">
<img src="/img/eculim.webp" alt="logo" style="width: 134px; height: 36px;">
<h1 class="ttt">Individual File Service</h1>
</div>
<p class="ppp">Consult our remapping database</p>
  <div class="form-fields" style="padding-bottom: 33px;">
				<div class="select-div">
					<select class="marks form-control sel" aria-invalid="false" id="marks">
						<option value="">Choose a brand</option>
					<option value="9">Alfa Romeo</option><option value="10">Alpina</option><option value="8302">Alpine</option><option value="10227">Ariel Motors</option><option value="5790">Aston Martin</option><option value="11">Audi</option><option value="5">BMW</option><option value="12">Bentley</option><option value="10492">Borgward</option><option value="13">Bugatti</option><option value="8124">Buick</option><option value="14">Cadillac</option><option value="15">Chevrolet</option><option value="16">Chrysler</option><option value="17">Citroën</option><option value="9916">Cupra</option><option value="7098">DS</option><option value="18">Dacia</option><option value="19">Daewoo</option><option value="20">Dodge</option><option value="21">Ferrari</option><option value="22">Fiat</option><option value="23">Ford</option><option value="6359">GWM</option><option value="10621">Geely</option><option value="9103">Holden</option><option value="24">Honda</option><option value="25">Hyundai</option><option value="26">Infiniti</option><option value="3750">Isuzu</option><option value="3938">Iveco</option><option value="10675">JAC</option><option value="27">Jaguar</option><option value="28">Jeep</option><option value="30">KTM</option><option value="29">Kia</option><option value="31">Lamborghini</option><option value="32">Lancia</option><option value="33">Landrover</option><option value="6806">Lexus</option><option value="10597">Lincoln</option><option value="34">Lotus</option><option value="9690">MAN</option><option value="38">MG</option><option value="7374">Mahindra</option><option value="35">Maserati</option><option value="36">Mazda</option><option value="3913">McLaren</option><option value="37">Mercedes</option><option value="39">Mini</option><option value="40">Mitsubishi</option><option value="41">Nissan</option><option value="42">Opel</option><option value="5763">PGO</option><option value="4118">Pagani</option><option value="43">Peugeot</option><option value="6682">Piaggio</option><option value="44">Porsche</option><option value="45">Renault</option><option value="46">Rolls Royce</option><option value="47">Saab</option><option value="9504">Samsung</option><option value="5951">Scion</option><option value="48">Seat</option><option value="49">Skoda</option><option value="50">Smart</option><option value="3722">SsangYong</option><option value="51">Subaru</option><option value="52">Suzuki</option><option value="3723">Tata</option><option value="53">Toyota</option><option value="54">Volkswagen</option><option value="55">Volvo</option><option value="5319">Westfield</option><option value="56">Wiesmann</option></select>
				</div>
				<div class="select-div">
					<select class="models form-control sel" aria-invalid="false" id="models">
						<option value="">Choose a model</option>
					</select>
				</div>
				<div class="select-div">
					<select class="generations form-control sel" aria-invalid="false" id="generations">
						<option value="">Choose a generation</option>
					</select>
				</div>
				<div class="select-div">
					<select class="motors form-control sel" aria-invalid="false" id="motors">
						<option value="">Choose a motor</option>
					</select>
				</div>
        </div>
</div>
</div>
<style>
#footer {
  padding-top: 0rem!important;
}
</style>
<?php }
}
}
/* {/block 'page_content_container'} */
}
