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
<div style="position: fixed;width: 100%;z-index: 9999;">
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-5 col-xs-12">
            {hook h='displayNav1'}
          </div>
          <div class="col-md-7 right-nav">
              {hook h='displayNav2'}
          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          {if $shop.logo_details}
            {if $page.page_name == 'index'}
              <h1>
                {renderLogo}
              </h1>
            {else}
              {renderLogo}
            {/if}
          {/if}
        </div>
        <div class="header-top-right col-md-10 col-sm-12 position-static">
          {hook h='displayTop'}
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  {hook h='displayNavFullWidth'}
{/block}
  </div>
    <div class="bnr-red">
		<span style="font-weight: bold;">{l s='Register now' d='Shop.Theme.Global'}</span>
		{l s='and get' d='Shop.Theme.Global'}
		<span style="font-weight: bold;">{l s='0.1 free credits' d='Shop.Theme.Global'}</span>
	</div>

{if $page.page_name == 'index'}
<!-- VIDEO INICIAL -->
<div height="907px" style="overflow: hidden;height: 907px;">
<video width="100%" height="auto" style="margin-top: -33px;pointer-events: none;" muted="" autoplay="autoplay" controls="controls" loop="loop" controlslist="nodownload"><source src="/video.mp4" type="video/mp4">Register Now</video>
<div style="margin-top: -34%;">
<h1 class="heading-title" align="center">Register Now</h1>
<h3 class="heading-title-sub"  align="center">and start chiptuning</h3>
<div style="display: flex;justify-content: center;width: 100%;padding: 12px;gap: 54px;" align="center">
<div class="spa-btn-red">LOG IN</div>
<div class="spa-btn-trans">REGISTER</div>
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
{/if}