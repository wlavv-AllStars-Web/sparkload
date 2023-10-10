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

<div class="ns col-md-3" id="blockEmailSubscription_{$hookName}">
  <div class="row">
    <p class="h3 hidden-sm-down">Newsletter Subscribe</p>
    <p class="hidden-sm-down" style="color:#cfcfcf;">{l s='Subscribe to our mailing list to get the updates to your email inbox.' d='Shop.Theme.Actions'}</p>
      <form action="{$urls.current_url}#blockEmailSubscription_{$hookName}" method="post">
      <input name="email" type="email" value="{$value}" class="ni" placeholder="{l s='Your email address' d='Shop.Forms.Labels'}" aria-labelledby="block-newsletter-label" required >
    <label  style="text-align: left;padding-top: 14px;">
          <input name="AGREE_TO_TERMS" type="checkbox" value="1" required=""><a href="https://eculimit.com/privacy-policy" target="_blank" style="padding-left: 4px;text-align: left; color:#ed1921!important;">I have read and agree to the terms &amp; conditions</a>
      </label>
      <input type="hidden" name="blockHookName" value="{$hookName}" />
      <input type="hidden" name="action" value="0">
    <input class="spa-btn-trans" value="{l s='Sign up' d='Shop.Theme.Actions'}" name="submitNewsletter" type="submit" style="width: 85px;padding: 4px;">
<!--
          <div class="col-xs-12">
              {if $conditions}
                <p>{$conditions}</p>
              {/if}
              {if $msg}
                <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
                  {$msg}
                </p>
              {/if}
              {hook h='displayNewsletterRegistration'}
              {if isset($id_module)}
                {hook h='displayGDPRConsent' id_module=$id_module}
              {/if}
          </div>
          -->
      </form>
    </div>
  </div>
</div>
