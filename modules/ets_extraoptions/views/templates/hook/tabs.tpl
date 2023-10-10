{*
 * Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
*}
<script type="text/javascript">
    var confirmDeleteImage = '{l s='Do you want to delete image?' mod='ets_extraoptions' js=1}';
</script>
<ul class="custom-attributes-tabs">
    <li>
        <a class="tab global{if $tab_active=='group'} active{/if}" href="{$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&configure=ets_extraoptions&tab_active=group">
            {l s='Option groups' mod='ets_extraoptions'}
        </a>
    </li>
    <li>
        <a class="tab global{if $tab_active=='global'} active{/if}" href="{$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&configure=ets_extraoptions&tab_active=global">
            {l s='Global options' mod='ets_extraoptions'}{if $total_global_attributes} <span class="etsbaged">{$total_global_attributes|intval}</span>{/if}
        </a>
    </li>
    <li>
        <a class="tab specific{if $tab_active=='specific'} active{/if}" href="{$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&configure=ets_extraoptions&tab_active=specific">
            {l s='Specific options' mod='ets_extraoptions'}{if $total_specific_attributes} <span class="etsbaged">{$total_specific_attributes|intval}</span>{/if}
        </a>
    </li>
</ul>