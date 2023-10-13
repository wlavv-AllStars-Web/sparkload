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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script>
window.addEventListener('DOMContentLoaded', function () {
  
  if (window.location.pathname === '/content/4-about-us') {
    // Se o URL corresponder, obtenha o elemento com o ID "about"
    var aboutElement = document.getElementById('about');
    }
  if (window.location.pathname === '/contact-us') {
    // Se o URL corresponder, obtenha o elemento com o ID "contacte"
    var aboutElement = document.getElementById('contacte');
}
    // Verifique se o elemento existe
    if (aboutElement) {
      // Troque a classe do elemento
      aboutElement.classList.remove('mst');
      aboutElement.classList.add('msth');
    }
  
});
 </script>
<div id="_desktop_contact_link" style="float:right;  color: #fff !important;">
  <div id="contact-link">
    {if $contact_infos.phone}
      {* [1][/1] is for a HTML tag. *}
      {l
        s='Call us: [1]%phone%[/1]'
        sprintf=[
          '[1]' => "<a href='tel:{$contact_infos['phone']|replace:' ':''}'>",
          '[/1]' => '</a>',
          '%phone%' => $contact_infos.phone
        ]
        d='Shop.Theme.Global'
      }
    {else}
      <a href="{$urls.pages.contact}" class="mst">{l s='NEWS' d='Shop.Theme.Global'}</a>
      <a href="{$urls.pages.contact}" class="mst">{l s='FAQ' d='Shop.Theme.Global'}</a>
      <a href="/content/4-about-us" class="mst" id="about" style="width: 78px;">{l s='ABOUT US' d='Shop.Theme.Global'}</a>
      <a href="{$urls.pages.contact}"  class="mst"  id="contacte" >{l s='CONTACT' d='Shop.Theme.Global'}</a>
      <a href="{$urls.pages.contact}" class="btnr"><i class="fas fa-key"></i>{l s='REGISTER' d='Shop.Theme.Global'}</a>
      <a href="{$urls.pages.contact}" class="btnr" style="width: 99px;margin-left: -33px;"><i class="fas fa-user-alt"></i>{l s='LOG IN' d='Shop.Theme.Global'}</a>
  
    {/if}
  </div>
</div>
