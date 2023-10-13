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
{/if}
{/block}
