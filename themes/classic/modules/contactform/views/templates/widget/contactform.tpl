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

     {if $notifications}
      <div class="col-xs-12 alert {if $notifications.nw_error}alert-danger{else}alert-success{/if}">
        <ul>
          {foreach $notifications.messages as $notif}
            <li>{$notif}</li>
          {/foreach}
        </ul>
      </div>
    {/if}

    {if !$notifications || $notifications.nw_error}

<style>
.ssc:focus {
    outline: none !important;
    border-bottom:2px solid red !important;
}
.ssc:focus::placeholder {
  color: red;
}
.ss:focus {
    outline: none !important;
    border-bottom:2px solid red !important;
}
input:focus::placeholder {
  color: red;
}
</style>

<section class="contact-form">
  <form action="{$urls.pages.contact}" method="post" {if $contact.allow_file_upload}enctype="multipart/form-data"{/if}>

    <div class="col-md-4 col-xl-4">
    <h1 style="color:#000;">Contact Info</h1>
      <div style="display:flex;">
      <i aria-hidden="true" class="fas fa-envelope" style="padding-top:12px;padding-bottom:12px;"><span style="padding-left: 9px;font-family: 'Roboto', Sans-serif;font-weight: 300;">info@eculimit.com</span></i>
      </div>
    <h1 style="color:#000;padding-top:12px;">Opening Hours</h1>
      <div>
      <p style="font-family: 'Roboto', Sans-serif;font-weight: 300;padding-top:7px;">Monday – Friday: 09:00 – 19:00h</p>
      <p style="font-family: 'Roboto', Sans-serif;font-weight: 300;padding-top:7px;">Saturday: 09:00 – 14:00</p>
      <p style="font-family: 'Roboto', Sans-serif;font-weight: 300;padding-top:7px;">Sunday: <span style="color: #ed1921;">Closed!</span></p>
      </div>
      <div style="display:flex;padding: 6px;">
      <img decoding="async" src="img/cms/icos/clock-1-150x150.png" style="width: 40px;height:auto;">															
      <div style="margin-top: 11px;padding-left: 11px;font-weight: bold;color: #000;font-size: 17px;">Current time in Eculimit{$current_time}</div>
     </div>
      <div style="padding-top: 12px;font-size: 33px;font-weight: bold;color: #ED1921;" align="center" id="relogio">10:49 am</div>
      <div align="center"> 
      <div class="" id="open">Currently Open</div>
      </div>
    </div> 
      <section class="form-fields">
        <div style="width: 100%;color: #000;">
          <div class="col-md-12 col-lg-12">
            <h1 style="width:100%">{l s='Any question?' d='Shop.Theme.Global'}</h1>
            <p style="font-size: 13px;margin-top: 26px;margin-bottom: 44px;">Do not hesitate to send us a message. We will reply as soon as possible.</p>
            <input size="40" class="ss" aria-required="true" aria-invalid="true" placeholder="Name:" value="" type="text" name="name">
            <input size="40" class="ss" aria-required="true" aria-invalid="true" placeholder="Company:" value="" type="text" name="company">
            <input size="40" class="ss" aria-required="true" aria-invalid="true" placeholder="Phone:" value="" type="text" name="phone">
            <input size="40" class="ss" aria-required="true" aria-invalid="true" placeholder="Email:" value="" type="text" name="from">
            <textarea cols="40" rows="10" class="ssc" aria-invalid="false" placeholder="Message:" name="message"></textarea>
          </div>
        </div>
        <div class="form-group row" style="display:none;">
          <label class="col-md-3 form-control-label" for="id_contact">{l s='Subject' d='Shop.Forms.Labels'}</label>
          <div class="col-md-6">
            <select name="id_contact" id="id_contact" class="form-control form-control-select">
              {foreach from=$contact.contacts item=contact_elt}
                <option value="{$contact_elt.id_contact}">{$contact_elt.name}</option>
              {/foreach}
            </select>
          </div>
        </div>
        <div class="form-group row">   
          <div class="col-md-6">
            <input
              id="email"
              class="form-control"
              name="fbrom"
              type="hidden"
              value="{$contact.email}"
              placeholder="{l s='your@email.com' d='Shop.Forms.Help'}"
            >
          </div>
        </div>
      <footer class="form-footer text-sm-right">
        <style>
          input[name=url] {
            display: none !important;
          }
        </style>
          <script type="text/javascript">
function updateClock() {
    const currentDate = new Date();
    const options = { timeZone: 'Europe/Madrid', hour12: true, hour: 'numeric', minute: '2-digit' };
    const formattedTime = currentDate.toLocaleString('es-ES', options).replace(/\./g, '').toLowerCase();
    document.getElementById('relogio').textContent = formattedTime;
}

// Update the clock every second
setInterval(updateClock, 1000);
// Initial update
updateClock();

  {literal}
    function checkStoreStatus() {
        const today = new Date().toLocaleString('en-US', { timeZone: 'Europe/Madrid', weekday: 'long' });
        const currentDate = new Date();
        const currentTime = `${currentDate.getHours()}:${currentDate.getMinutes()}`;
        const openElement = document.getElementById('open');
        if (today === 'Saturday') {
            if (compareTime(currentTime, '09:00', '14:00')) {
                openElement.classList.remove('btn-h-r');
                openElement.classList.add('btn-h-g');
            } else {
                openElement.classList.remove('btn-h-g');
                openElement.classList.add('btn-h-r');
            }
        } else if (today === 'Sunday') {
            openElement.classList.remove('btn-h-g');
            openElement.classList.add('btn-h-r');
        } else {
            if (compareTime(currentTime, '09:00', '19:00')) {
                openElement.classList.remove('btn-h-r');
                openElement.classList.add('btn-h-g');
            } else {
                openElement.classList.remove('btn-h-g');
                openElement.classList.add('btn-h-r');
            }
        }
    }

    function compareTime(current, start, end) {
        const currentTime = new Date('2000-01-01 ' + current);
        const startTime = new Date('2000-01-01 ' + start);
        const endTime = new Date('2000-01-01 ' + end);
        return currentTime >= startTime && currentTime <= endTime;
    }

    // Verificar o estado da loja a cada minuto
    setInterval(checkStoreStatus, 60000);
    // Verificação inicial
    checkStoreStatus();
  {/literal}
</script>


        <input type="text" name="url" value=""/>
        <input type="hidden" name="token" value="{$token}" />
        <input class="spaa-btn-red" style="float:left;border: 0px;margin-top: 22px; margin-left: 15px;text-transform:uppercase;" type="submit" name="submitMessage" value="{l s='Send Message' d='Shop.Theme.Actions'}">
      </footer>
        {if 2 == 23}
          <div class="form-group row">
            <label class="col-md-3 form-control-label" for="id-order">{l s='Order reference' d='Shop.Forms.Labels'}</label>
            <div class="col-md-6">
              <select id="id-order" name="id_order" class="form-control form-control-select">
                <option value="">{l s='Select reference' d='Shop.Forms.Help'}</option>
                {foreach from=$contact.orders item=order}
                  <option value="{$order.id_order}">{$order.reference}</option>
                {/foreach}
              </select>
            </div>
            <span class="col-md-3 form-control-comment">
              {l s='optional' d='Shop.Forms.Help'}
            </span>
          </div>
        {/if}

        {if 2 == 23}
          <div class="form-group row">
            <label class="col-md-3 form-control-label" for="file-upload">{l s='Attachment' d='Shop.Forms.Labels'}</label>
            <div class="col-md-6">
              <input id="file-upload" type="hidden" name="fileUpload" class="filestyle" data-buttonText="{l s='Choose file' d='Shop.Theme.Actions'}">
            </div>
            <span class="col-md-3 form-control-comment">
              {l s='optional' d='Shop.Forms.Help'}
            </span>
          </div>


        <div class="form-group row" style="display:none;">
          <label class="col-md-3 form-control-label" for="contactform-message">{l s='Message' d='Shop.Forms.Labels'}</label>
          <div class="col-md-9">
            <textarea
              id="contactform-message"
              class="form-control"
              name="messagebk"
              placeholder="{l s='How can we help?' d='Shop.Forms.Help'}"
              rows="3"
            >{if $contact.message}{$contact.message}{/if}</textarea>
          </div>
        </div>
        {/if}
        {if isset($id_module)}
          <div class="form-group row">
            <div class="offset-md-3">
              {hook h='displayGDPRConsent' id_module=$id_module}
            </div>
          </div>
        {/if}

      </section>


    {/if}

  </form>

</section>
