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
    var link_module_custom_attribute = '{$link->getAdminLink('AdminModules') nofilter}&configure=ets_extraoptions';
    var confirmDeleteImage = '{l s='Do you want to delete image?' mod='ets_extraoptions' js=1}';
</script>
    <h3>{l s='Global options' mod='ets_extraoptions'}</h3>
    {if $global_groups}
        {foreach from=$global_groups item='group'}
            <div class="attribute-group-item-{$group.id_ets_eto_attr_group|intval}">
                <h2>{if $group.id_ets_eto_attr_group}{$group.name|escape:'html':'UTF-8'}{else}{l s='Other options' mod='ets_extraoptions'}{/if}</h2>
                {if $group.attributes}
                    <table class="table configuration-product-attribute">
                        <thead>
                            <tr>
                                <th class="name">{l s='Name' mod='ets_extraoptions'}</th>
                                <th class="use_attribute">{l s='Use option' mod='ets_extraoptions'}</th>
                                <th class="price">{l s='Price' mod='ets_extraoptions'}</th>
                                <th class="use_tax">{l s='Apply tax' mod='ets_extraoptions'}</th>
                                <th class="use_discount">{l s='Apply specific' mod='ets_extraoptions'}</th>
                                <th class="required">{l s='Required' mod='ets_extraoptions'}</th>
                                <th class="checked_by_default">{l s='Checked by default' mod='ets_extraoptions'}</th>
                            </tr>
                        </thead>
                        <tbody class="list-ca_attribute_product">
                            {foreach from=$group.attributes item='attribute'}
                                <tr id="ca_attribute-{$attribute.id_ets_eto_attr|intval}">
                                    <td class="name">{$attribute.name|escape:'html':'UTF-8'}</td>
                                    <td class="use_attribute">
                                        <select name="use_attribute[{$attribute.id_ets_eto_attr|intval}]">
                                            <option value="-1"{if $attribute.product_used==-1} selected="selected"{/if}>{l s='Default' mod='ets_extraoptions'} ({if $attribute.used}{l s='Yes' mod='ets_extraoptions'}{else}{l s='No' mod='ets_extraoptions'}{/if})</option>
                                            <option value="1"{if $attribute.product_used==1} selected="selected"{/if}>{l s='Yes' mod='ets_extraoptions'}</option>
                                            <option value="0"{if $attribute.product_used==0} selected="selected"{/if}>{l s='No' mod='ets_extraoptions'}</option>
                                        </select>
                                    </td>
                                    <td class="price">
                                        {if $attribute.type_price!='percent'}
                                            {assign var='option_price' value= $attribute.price}
                                        {else}
                                            {assign var='option_price' value =$attribute.percent}
                                        {/if}
                                        <select name="price_attribute[{$attribute.id_ets_eto_attr|intval}]">
                                            <option value="default"{if $attribute.product_price==-1} selected="selected"{/if}>
                                                {l s='Default' mod='ets_extraoptions'} {if $option_price!=0}{$option_price|escape:'html':'UTF-8'}{if $attribute.type_price=='percent'}%{/if}{else}{/if}
                                            </option>
                                            <option value="custom" {if $attribute.product_price!=-1} selected="selected"{/if}>
                                                {l s='Custom' mod='ets_extraoptions'}
                                            </option>
                                        </select>
                                        <div class="custom-price" {if $attribute.product_price==-1} style="display:none"{/if}>
                                            <div class="input-group">
                                                {if $attribute.product_price==-1}
                                                    {assign var='type_price' value= $attribute.type_price}
                                                {else}
                                                    {assign var='type_price' value= $attribute.product_type_price}
                                                {/if}
                                                <select class="type_price_attribute_custom" name="type_price_attribute_custom[{$attribute.id_ets_eto_attr|intval}]">
                                                    <option value="fixed"{if $type_price=='fixed'} selected{/if}>{l s='Fixed amount' mod='ets_extraoptions'}</option>
                                                    <option value="percent"{if $type_price=='percent'} selected{/if}>{l s='Percentage' mod='ets_extraoptions'}</option>
                                                </select>
                                                <input name="price_attribute_custom[{$attribute.id_ets_eto_attr|intval}]" value="{if $attribute.product_price!=-1}{$attribute.product_price|escape:'html':'UTF-8'}{else}{/if}" type="text" />
                                                <span class="input-group-addon fixed"{if $type_price=='percent'} style="display: none"{/if}> {$sign|escape:'html':'UTF-8'} </span>
                                                <span class="input-group-addon percent" {if $type_price!='percent'} style="display: none"{/if}>%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="use_tax">
                                         <select name="use_tax_attribute[{$attribute.id_ets_eto_attr|intval}]">
                                            <option value="-1"{if $attribute.product_use_tax==-1} selected="selected"{/if}>{l s='Default' mod='ets_extraoptions'} ({if $attribute.use_tax}{l s='Yes' mod='ets_extraoptions'}{else}{l s='No' mod='ets_extraoptions'}{/if})</option>
                                            <option value="1"{if $attribute.product_use_tax==1} selected="selected"{/if}>{l s='Yes' mod='ets_extraoptions'}</option>
                                            <option value="0"{if $attribute.product_use_tax==0} selected="selected"{/if}>{l s='No' mod='ets_extraoptions'}</option>
                                        </select>   
                                    </td>
                                    <td class="use_discount">
                                        <select name="use_discount_attribute[{$attribute.id_ets_eto_attr|intval}]">
                                            <option value="-1"{if $attribute.product_use_discount==-1} selected="selected"{/if}>{l s='Default' mod='ets_extraoptions'} ({if $attribute.use_discount}{l s='Yes' mod='ets_extraoptions'}{else}{l s='No' mod='ets_extraoptions'}{/if})</option>
                                            <option value="1"{if $attribute.product_use_discount==1} selected="selected"{/if}>{l s='Yes' mod='ets_extraoptions'}</option>
                                            <option value="0"{if $attribute.product_use_discount==0} selected="selected"{/if}>{l s='No' mod='ets_extraoptions'}</option>
                                        </select>
                                    </td>
                                    <td class="required">
                                        <select name="required_attribute[{$attribute.id_ets_eto_attr|intval}]">
                                            <option value="-1"{if $attribute.product_required==-1} selected="selected"{/if}>{l s='Default' mod='ets_extraoptions'} ({if $attribute.required}{l s='Yes' mod='ets_extraoptions'}{else}{l s='No' mod='ets_extraoptions'}{/if})</option>
                                            <option value="1"{if $attribute.product_required==1} selected="selected"{/if}>{l s='Yes' mod='ets_extraoptions'}</option>
                                            <option value="0"{if $attribute.product_required==0} selected="selected"{/if}>{l s='No' mod='ets_extraoptions'}</option>
                                        </select>
                                    </td>
                                    <td class="checked_by_default">
                                        <select name="checked_default_attribute[{$attribute.id_ets_eto_attr|intval}]">
                                            <option value="-1"{if $attribute.product_checked==-1} selected="selected"{/if}>{l s='Default' mod='ets_extraoptions'} ({if $attribute.checked}{l s='Yes' mod='ets_extraoptions'}{else}{l s='No' mod='ets_extraoptions'}{/if})</option>
                                            <option value="1"{if $attribute.product_checked==1} selected="selected"{/if}>{l s='Yes' mod='ets_extraoptions'}</option>
                                            <option value="0"{if $attribute.product_checked==0} selected="selected"{/if}>{l s='No' mod='ets_extraoptions'}</option>
                                        </select>
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                {else}
                    <div class="alert alert-warning">{l s='No option available' mod='ets_extraoptions'}</div>
                {/if}
            </div>
        {/foreach}
        <div class="form-group row">
            <div class="col-md-12 px-15">
                <button class="btn btn-primary js-ets-ca-save-setting-prd" type="button">{l s='Save extra option settings' mod='ets_extraoptions'}</button>
            </div>
        </div>
    {else}
        <div class="alert alert-warning">{l s='No items found' mod='ets_extraoptions'}</div>
    {/if}
<h3>{l s='Specific options' mod='ets_extraoptions'}</h3>
{$list_specific_attributes nofilter}
<div class="form-group row">
    <div class="col-md-12 px-15">
        <button class="btn btn-primary js-ets-ca-new-specific-attribute" type="button" data-id-product="{$id_product|intval}" data-link-new="{$link_add_new nofilter}">{l s='Add specific option' mod='ets_extraoptions'}</button>
    </div>
</div>
<div class="ets_eto_popup">
    <div class="popup_content_table">
        <div class="popup_content_tablecell">
            <div class="popup_content_wrap" style="position: relative">
                <span class="close_popup" title="Close">+</span>
                <div id="block-form-add-new-attributes" class="defaultForm form-horizontal">
                </div>
            </div>
        </div>
    </div>
</div>
