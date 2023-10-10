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
<div class="container">
  <div class="row">
    {block name='hook_footer_before'}
      {hook h='displayFooterBefore'}
    {/block}
  </div>
</div>

<div class="footer-container">
{if $page.page_name == 'index'} 
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
{/if}
</div>


{if $_SESSION['cooki'] != 33}
  <div class="bg-cooki" id="cookiss">
  {$_SESSION['cooki']}
    <a role="button" data-cli_action="accept" id="cookie_action_close_header" class="fecha">Accept</a>
    <p align="left" class="cooki"><b>
      {l s='This web portal only uses its own cookies for technical purposes, it does not collect or transfer personal data of users without their knowledge.' d='Shop.Theme.Actions'}
    </b></p>
    <p align="left" class="cooki">
      {l s='However, it contains links to third-party websites with privacy policies other than that of the AEPD that you can decide whether or not to accept when you access them.' d='Shop.Theme.Actions'}
    </p>
  </div>
{/if}


<div class="footer-container" style="background-color: #000;padding-bottom:78px;">
  <div class="container">
    <div class="row" style="display:flex;">
      {block name='hook_footer'}
        {hook h='displayFooter'}
      {/block}
    </div>
    <div class="row">
      {block name='hook_footer_after'}
        {hook h='displayFooterAfter'}
      {/block}
    </div>
    <div class="row">
      <div class="col-md-12" style="margin-top:33px;">
        <p class="text-sm-center">
          {block name='copyright_link'}
            <a href="#" target="_blank" rel="noopener noreferrer nofollow" style="color:#cfcfcf ;">
              © 2022 Eculimit</a>
          {/block}
        </p>
      </div>
    </div>
  </div>
</div>

  <script>
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
  </script>