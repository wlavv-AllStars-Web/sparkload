{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{extends file='page.tpl'}

{block name='page_title'}
  {$cms.meta_title}
{/block}

{block name='page_content_container'}
  <section id="content" class="page-content page-cms page-cms-{$cms.id}">

    {block name='cms_content'}
      {$cms.content nofilter}
    {/block}

    {block name='hook_cms_dispute_information'}
      {hook h='displayCMSDisputeInformation'}
    {/block}

    {block name='hook_cms_print_button'}
      {hook h='displayCMSPrintButton'}
    {/block}

  </section>
{if $cms.id == 4}
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
{/if}

{if $cms.id == 7}
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
<a href="/login">
<div class="spaa-btn-red" style="width: 111px; text-align: center;">Login</div>
</a>
<a href="/registration">
<div class="spaa-btn-red" style="width: 111px; text-align: center;">Register</div>
</a>
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
{/if}
{if $cms.id == 8}
  <style>
  .accordion {
  background-color: #fff;
  color: #000;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
  box-shadow: 2px 2px 5px 1px rgba(197, 197, 197, 0.6) !important;
  margin-top: 23px;
  font-weight: bold;
  font-size:15px;
}
/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 17px 18px;
  background-color: white;
  display: none;
  overflow: hidden;
}

  </style>
<div style="display:flex;">
<div class="col-md-6 col-xs-12 col-lg-6">
<button class="accordion active">What is chiptuning?<i class="fas fa-minus" style="color:#ED1921;float:right;font-size: 21px;"></i> </button>
<div class="panel" style="display:block;">
  <p>Is the procedure for making a software modification in a vehicle with aims of getting a better fuel economy, increase in performance or lower emissions. Moreover this process can be used to solve OEM software issues</p>
</div>
<button class="accordion">Are your files dyno tested? <i class="fas fa-plus" style="color:#ED1921;float:right;font-size: 21px;"></i> </i></button>
<div class="panel">
  <p>
  Is the procedure for making a software modification in a vehicle with aims of getting a better fuel economy, increase in performance or lower emissions. Moreover this process can be used to solve OEM software issues
  </p>
</div>
<button class="accordion"> Do you make tuning files for every car? <i class="fas fa-plus" style="color:#ED1921;float:right;font-size: 21px;"></i> </i></button>
<div class="panel">
  <p>
We can make chiptuning files for every car listed in our Car Configurator. If you have a car that is not listed just contact us and we will check if is possible to make it.  </p>
</div>
<button class="accordion"> How many tuning options do you offer? <i class="fas fa-plus" style="color:#ED1921;float:right;font-size: 21px;"></i> </i></button>
<div class="panel">
  <p>
You can check all our tuning options are available <a href="/content/6-chiptuning-file-eculimit" style="color:#ed1921!important;">here</a>.
</p>
</div>
<button class="accordion"> What is your turnaround time for receiving a tuning file? <i class="fas fa-plus" style="color:#ED1921;float:right;font-size: 21px;"></i> </i></button>
<div class="panel">
  <p>
Our average turnaround time is 25 to 60min in dependence of workload.
</p>
</div>
<button class="accordion"> Do you provide support?<i class="fas fa-plus" style="color:#ED1921;float:right;font-size: 21px;"></i> </i></button>
<div class="panel">
  <p>
Yes, after a chiptuning file order you will have the option to open a ticket for comments and asks. Then it will be assigned to the engineer who made your file and will be replied as soon as possible.</p>
</div>
<button class="accordion"> What tools should I have to perform chiptuning with you? <i class="fas fa-plus" style="color:#ED1921;float:right;font-size: 21px;"></i> </i></button>
<div class="panel">
  <p>
You will need a chiptuning tool to perform read/write electronic control units. You can take a look to our slave tools <a href="/content/9-chiptuning-tools"  style="color:#ed1921!important;">here</a>. Moreover a diagnostic tool will be required for checking after any modification. We can offer you a chiptuning tool to start working with us. They are available <a href="https://eculimit.com/starter-kits/"  style="color:#ed1921!important;">here</a>.
</p>
</div>
<button class="accordion"> What type of chiptuning tools readings do you support?<i class="fas fa-plus" style="color:#ED1921;float:right;font-size: 21px;"></i> </i></button>
<div class="panel">
  <p>
We can work with any Master tool as well as with our linked Slave tools.
</p>
</div>
<button class="accordion"> What is the difference between Master and Slave tools? <i class="fas fa-plus" style="color:#ED1921;float:right;font-size: 21px;"></i> </i></button>
<div class="panel">
  <p>
A Master tool can read/write files without any type of encryption giving you the option of modify the file we will provide. This type of tools is only recommended for skilled tuners. They are also more expensive than Slave tools. Slave tools can read/write engine control units but these files will be encrypted and only could be unencrypted by the master tool linked to that slave tool. So you will not be able to modify the files before write.
</p>
</div>
<button class="accordion">Are the tuning files checksum corrected?<i class="fas fa-plus" style="color:#ED1921;float:right;font-size: 21px;"></i> </i></button>
<div class="panel">
  <p>
Our files will not be checksum corrected unless the customer asks for it. This option will be mandatory if the tool used to write the file can’t correct checksums.
</p>
</div>
<button class="accordion">What are the chiptuning files prices?<i class="fas fa-plus" style="color:#ED1921;float:right;font-size: 21px;"></i> </i></button>
<div class="panel">
  <p>
Chiptuning files will be purchased in credits. The cost of each credit depends of the amount of credits bought. You can check the credit costs here.
</p>
</div>
<button class="accordion">How can I purchase tuning files? <i class="fas fa-plus" style="color:#ED1921;float:right;font-size: 21px;"></i> </i></button>
<div class="panel">
  <p>
You can take a look to our <a href="https://www.youtube.com/watch?v=iqwEAlAtPms&ab_channel=ECULIMIT" style="color:#ed1921!important;" target="_blank">explainer video</a> to see how it easy is!
</p>
</div>


</div>
<div class="col-md-6 col-xs-12 col-lg-6">
<div>
<h1 style="margin-top: 34px;font-weight: initial;padding-left: 22px;">What are the chiptuning files prices?</h1>
<p style="padding-left: 22px;font-size: large;line-height: 21px;margin-top: 20px;">
Chiptuning files will be purchased in credits. The cost of each credit depends of the amount of credits bought. 
You can check the credit costs <a href="/content/10-prices-eculimit"  style="font-weight: bold;color:#ed1921!important;">here</a>.
</p>

<a href="/content/10-prices-eculimit">
<div class="spaa-btn-red" style="text-align: center;margin-left: 21px;margin-top: 29px;">PRICES</div>
</div>
</a>

<div>
<h1 style="margin-top: 34px;font-weight: initial;padding-left: 22px;">How can I purchase tuning files?</h1>
<p style="padding-left: 22px;font-size: large;line-height: 21px;margin-top: 20px;">
You can take a look to our explainer vide to see how it easy is!
</p>
<a href="https://www.youtube.com/watch?v=iqwEAlAtPms&ab_channel=ECULIMIT"  target="_blank">
<div class="spaa-btn-red" style="text-align: center;margin-left: 21px;margin-top: 29px;">PLAY VIDEO</div>
</a>
</div>

<div>
<h1 style="margin-top: 34px;font-weight: initial;padding-left: 22px;">
Dou you still have any doubt?
</h1>
<p style="padding-left: 22px;font-size: large;line-height: 21px;margin-top: 20px;">
Write us a message.
</p>
<a href="/contact-us">
<div class="spaa-btn-red" style="text-align: center;margin-left: 21px;margin-top: 29px;">CONTACT</div>
</a>
</div>
</div>
{/if}
{if $cms.id == 10}
<div style="width:100%;display: flex; justify-content: center; align-items: center;" align="center">
<p id="master-title" class="tgsw-b" style="margin-top: 7px; margin-right: 8px;">Master</p>
<div style="width:74px;">
  <label class="switch">
  <input type="checkbox" onclick="tog();">
  <span class="slider round"></span>
</label>
</div>
<p id="slave-title" class="tgsw" style="margin-top: 7px; margin-left: 8px;">Slave</p>
</div>
<div id="master-div" style="width:100%;display:flex;gap: 99px;justify-content: center;
align-items: center;padding: 44px;border: 1px #cecece solid;" align="center">
<div class="price-card">
<p style="font-weight:bold;">1 credit</p>
<p style="font-weight: bold;color: #000000;font-size: 19px;background-color: rgb(245, 245, 245);padding-top: 11px;">80 €</p>
</div>
<div class="price-card">
<p style="font-weight:bold;">2 credits</p>
<p style="font-weight: bold;color: #000000;font-size: 19px;background-color: rgb(245, 245, 245);padding-top: 11px;">160 €</p>
</div>
<div class="price-card">
<p style="font-weight:bold;">5 credits</p>
<p style="font-weight: bold;color: #000000;font-size: 19px;background-color: rgb(245, 245, 245);padding-top: 11px;">375 €</p>
</div>
<div class="price-card">
<p style="font-weight:bold;">10 credits</p>
<p style="font-weight: bold;color: #000000;font-size: 19px;background-color: rgb(245, 245, 245);padding-top: 11px;">750 €</p>
</div>
<div class="price-card">
<p style="font-weight:bold;">25 credits</p>
<p style="font-weight: bold;color: #000000;font-size: 19px;background-color: rgb(245, 245, 245);padding-top: 11px;">1750 €</p>
</div>
</div>
<div id="slave-div" style="width:100%;display:flex;gap: 99px;justify-content: center;
align-items: center;padding: 44px;border: 1px #cecece solid;display:none" align="center">
<div class="price-card">
<p style="font-weight:bold;">1 credit</p>
<p style="font-weight: bold;color: #000000;font-size: 19px;background-color: rgb(245, 245, 245);padding-top: 11px;">75 €</p>
</div>
<div class="price-card">
<p style="font-weight:bold;">2 credits</p>
<p style="font-weight: bold;color: #000000;font-size: 19px;background-color: rgb(245, 245, 245);padding-top: 11px;">150 €</p>
</div>
<div class="price-card">
<p style="font-weight:bold;">5 credits</p>
<p style="font-weight: bold;color: #000000;font-size: 19px;background-color: rgb(245, 245, 245);padding-top: 11px;">350 €</p>
</div>
<div class="price-card">
<p style="font-weight:bold;">10 credits</p>
<p style="font-weight: bold;color: #000000;font-size: 19px;background-color: rgb(245, 245, 245);padding-top: 11px;">700 €</p>
</div>
<div class="price-card">
<p style="font-weight:bold;">50 credits</p>
<p style="font-weight: bold;color: #000000;font-size: 19px;background-color: rgb(245, 245, 245);padding-top: 11px;">3250 €</p>
</div>
</div>
<div align="center" style="width:100%">
<div class="spaa-btn-red" style="text-align: center;margin-top: 29px;">ORDER NOW</div>
<h1 style="font-size: 26px;margin-top: 33px;">Service list</h1>
<div style="border-style: solid; border-width: 0px 0px 1px 0px; border-color: #F7F8FA;width:100%;margin-bottom:43px;"></div>

<div style="display:flex; gap: 11px;overflow: hidden;">
<div class="col-xd-12 col-md-4 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
<p class="cdd">Car Tuning (Stage 1)  (1 credits)</p>
<ul class="ula">
 	<li>Vmax(free)</li>
 	<li>ADBlue off&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Launch control&nbsp;&nbsp; (+0.5credits)</li>
 	<li>Hard cut limiter diesel&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Maf off&nbsp;&nbsp; (+0.2 credits)</li>
 	<li>Performance Gauge BMW MINI&nbsp;&nbsp; (free)</li>
 	<li>Pop and Bangs switchable with AC button(+1 credits)</li>
 	<li>Power on Sport button&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Start/stop system off&nbsp;&nbsp; (+0.2 credits)</li>
 	<li>Warranty patch&nbsp;&nbsp; (+0.2 credits)</li>
 	<li>DTC OFF(+0.2 credits)</li>
 	<li>DPF/OPF off(+0.5 credits)</li>
 	<li>Decat(+0.2 credits)</li>
 	<li>Antilag(+1 credits)</li>
 	<li>Cylinder on demand off&nbsp;&nbsp; (+0.2 credits)</li>
 	<li>Hot start/cold Start&nbsp;&nbsp; (+0.2 credits)</li>
 	<li>O2/NOx off&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Pop and Bangs&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>EDC15P multimap(+1 credits)</li>
 	<li>Rev limiter(+0.2 credits)</li>
 	<li>Swirl Flaps off&nbsp;&nbsp; (+0.2 credits)</li>
 	<li>DPF / OPF + EGR off&nbsp;&nbsp; (+0.5 credits)</li>
 	<li style="color: #ED1921;">E85 Conversion (+1,5 credits)</li>
</ul>						
</div>
<div class="col-xd-12 col-md-4 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
<p class="cdd">Car Tuning (Stage 2) (1.5 credits)</p>
<ul class="ula">
 	<li>Vmax(free)</li>
 	<li>EGR OFF(free)</li>
 	<li>ADBlue off&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Launch control&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Hard cut limiter diesel(+0.5 credits)</li>
 	<li>Maf off(+0.2 credits)</li>
 	<li>Performance Gauge BMW MINI&nbsp;&nbsp; (free)</li>
 	<li>Pop and Bangs switchable with AC button(+1 credits)</li>
 	<li>Power on Sport button&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Start/stop system off&nbsp;&nbsp; (free)</li>
 	<li>Warranty patch&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>DTC OFF(free)</li>
 	<li>DPF/OPF off(free)</li>
 	<li>Decat(free)</li>
 	<li>Antilag(+1 credits)</li>
 	<li>Cylinder on demand off&nbsp;&nbsp; (+0.2 credits)</li>
 	<li>Hot start/cold Start&nbsp;&nbsp; (+0.2 credits)</li>
 	<li>O2/NOx off&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Pop and Bangs&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>EDC15P multimap&nbsp;&nbsp; (+1 credits)</li>
 	<li>Rev limiter&nbsp;&nbsp; (free)</li>
 	<li>Swirl Flaps off&nbsp;&nbsp; (free)</li>
 	<li>DPF / OPF + EGR off&nbsp;&nbsp; (free)</li>
 	<li style="color: #ED1921;">E85 Conversion (+1,5 credits)</li>
</ul>						
</div>
<div class="col-xd-12 col-md-4 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
<p class="cdd">Car Tuning (Stage 3) (3 credits)</p>
<ul class="ula">
 	<li>Vmax(free)</li>
 	<li>EGR OFF(free)</li>
 	<li>ADBlue off(+0.5 credits)</li>
 	<li>Launch control&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Hard cut limiter diesel&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Maf off&nbsp;&nbsp; (+0.2 credits)</li>
 	<li>Performance Gauge BMW MINI&nbsp;&nbsp; (free)</li>
 	<li>Pop and Bangs switchable with AC button&nbsp;&nbsp; (+1 credits)</li>
 	<li>Power on Sport button&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Start/stop system off&nbsp;&nbsp; (free)</li>
 	<li>Warranty patch&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>MAP sensor scaling&nbsp;&nbsp; (free)</li>
 	<li>DPF / OPF + EGR off&nbsp;&nbsp; (free)</li>
 	<li>DPF/OPF off&nbsp;&nbsp; (free)</li>
 	<li>Decat&nbsp;&nbsp; (free)</li>
 	<li>Antilag&nbsp;&nbsp; (+1 credits)</li>
 	<li>Cylinder on demand off&nbsp;&nbsp; (+0.2 credits)</li>
 	<li>Hot start/cold Start&nbsp;&nbsp; (+0.2 credits)</li>
 	<li>O2/NOx off&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Pop and Bangs&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>EDC15P multimap(+1 credits)</li>
 	<li>Rev limiter&nbsp;&nbsp; (free)</li>
 	<li>Swirl Flaps off&nbsp;&nbsp; (free)</li>
 	<li>Injector scaling&nbsp;&nbsp; (free)</li>
 	<li>MAF sensor scaling&nbsp;&nbsp; (free)</li>
 	<li>DTC OFF&nbsp;&nbsp; (free)</li>
 	<li style="color: #ED1921;">E85 Conversion (+1,5 credits)</li>
</ul>						
</div>
</div>

<div style="display:flex; gap: 11px;overflow: hidden;margin-top:33px;">
<div class="col-xd-12 col-md-4 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
<p class="cdd">DSG/Automatic Tuning (Stage 1)(1 credits)</p>
<ul class="ula">
<li>Launch control&nbsp;&nbsp; (free)&nbsp;&nbsp;&nbsp;</li>
<li>Internal Torque&nbsp;&nbsp; (free)&nbsp;&nbsp;&nbsp;</li>
<li>Modified take off&nbsp;&nbsp; (+0.5 credits)&nbsp;&nbsp;&nbsp;</li>
<li>No upshift/downshift in Manual&nbsp;&nbsp; (+0.2 credits)&nbsp;&nbsp;&nbsp;</li>
<li>Activate launch&nbsp;&nbsp; (+0.5 credits)&nbsp;&nbsp;&nbsp;</li>
<li>Custom max RPM D+S+M&nbsp;&nbsp; (+0.5 credits)&nbsp;&nbsp;&nbsp;</li>
<li>D+S+M upshift/downshift shifting speed reduced&nbsp;&nbsp; (free)&nbsp;&nbsp;&nbsp;</li>
<li>Kickdown deactivation&nbsp;&nbsp; (+0.2 credits)&nbsp;&nbsp;&nbsp;</li>
</ul>										
</div>
<div class="col-xd-12 col-md-4 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
<p class="cdd">DSG/Automatic Tuning (Stage 2)   (1.5 credits)</p>
<ul class="ula">
 	<li>Activate launch&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Launch control RPM&nbsp;&nbsp; (free)</li>
 	<li>Modified take off&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>No upshift/downshift in Manual(free)</li>
 	<li>Increase the maximum clutch pressure&nbsp;(+1 credits)</li>
 	<li>Internal Torque&nbsp;&nbsp; (free)</li>
 	<li>Custom max RPM D+S+M&nbsp;&nbsp; (free)</li>
 	<li>D+S+M upshift/downshift shifting speed reduced&nbsp;&nbsp; (free)</li>
 	<li>Kickdown deactivation&nbsp;&nbsp; (free)</li>
</ul>												
</div>
<div class="col-xd-12 col-md-4 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
<p class="cdd">Only options (Car) DPF, EGR etc.(0 credits)</p>
<ul class="ula">
 	<li>Vmax&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>EGR OFF&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>ADBlue off&nbsp;&nbsp; (+1 credits)</li>
 	<li>Launch control&nbsp;&nbsp; (+1 credits)</li>
 	<li>Hard cut limiter diesel&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Maf off&nbsp;&nbsp; (+1 credits)</li>
 	<li>Performance Gauge BMW MINI&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Pop and Bangs switchable with AC button&nbsp;&nbsp; (+1.2 credits)</li>
 	<li>Rev limiter&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Swirl Flaps off&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>MAP sensor scaling&nbsp;&nbsp; (+1 credits)</li>
 	<li>DPF / OPF + EGR off&nbsp;&nbsp; (+1.2 credits)</li>
 	<li>DPF/OPF off&nbsp;&nbsp; (+1 credits)</li>
 	<li>Decat&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Antilag&nbsp;&nbsp; (+1 credits)</li>
 	<li>Cylinder on demand off&nbsp;&nbsp; (+1 credits)</li>
 	<li>Hot start/cold Start&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>O2/NOx off&nbsp;&nbsp; (+1 credits)</li>
 	<li>Pop and Bangs&nbsp;&nbsp; (+1 credits)</li>
 	<li>EDC15P multimap&nbsp;&nbsp; (+1.2 credits)</li>
 	<li>Start/stop system off&nbsp;&nbsp; (+0.5 credits)</li>
 	<li>Warranty patch&nbsp;&nbsp; (+1 credits)</li>
 	<li>MAF sensor scaling&nbsp;&nbsp; (+1 credits)</li>
 	<li>DTC OFF&nbsp;&nbsp; (+0.5 credits)</li>
 	<li style="color: #ED1921;">E85 Conversion (+2 credits)</li>
</ul>												
</div>
</div>
<p class="cdd" style="margin-top:11px;margin-bottom:53px;">Back to Stock   (0.5 credits)</p>
</div>
</div>
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
  <script>
    function tog() {
      var masterDiv = document.getElementById('master-div');
      var slaveDiv = document.getElementById('slave-div');
      var masterTitle = document.getElementById('master-title');
      var slaveTitle = document.getElementById('slave-title');

      if (masterDiv.style.display === 'none') {
        masterDiv.style.display = 'flex';
        slaveDiv.style.display = 'none';
        masterTitle.classList.remove('tgsw');
        masterTitle.classList.add('tgsw-b');
        slaveTitle.classList.remove('tgsw-b');
        slaveTitle.classList.add('tgsw');
      } else {
        slaveDiv.style.display = 'flex';
        masterDiv.style.display = 'none';
        masterTitle.classList.remove('tgsw-b');
        masterTitle.classList.add('tgsw');
        slaveTitle.classList.remove('tgsw');
        slaveTitle.classList.add('tgsw-b');
      }
    }
  </script>
{/if}
{/block}
