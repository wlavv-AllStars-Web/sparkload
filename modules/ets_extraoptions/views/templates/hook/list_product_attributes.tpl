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
<div class="list-table-product-attributes">
    <div class="panel-wrapper">
        {if $groups}
            {foreach from=$groups item='group'}
                <div class="attribute-group-item-{$group.id_ets_eto_attr_group|intval}">
                    {if $group.id_ets_eto_attr_group || Count($groups)>1}<h2>{if $group.id_ets_eto_attr_group}{$group.name|escape:'html':'UTF-8'}{else}{l s='Other options' mod='ets_extraoptions'}{/if}</h2>{/if}
                    {$group.list_attributes nofilter}
                </div>
            {/foreach}
        {else}
            <div class="alert alert-warning">{l s='No items found' mod='ets_extraoptions'}</div>
        {/if}
    </div>
</div>
{if isset($form_new) && $form_new}
    <div class="ets_eto_popup">
        <div class="popup_content_table">
            <div class="popup_content_tablecell">
                <div class="popup_content_wrap" style="position: relative">
                    <span class="close_popup" title="{l s='Close' mod='ets_extraoptions'}">+</span>
                    <div id="block-form-add-new-attributes" class="defaultForm form-horizontal">
                        {$form_new nofilter}
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}