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
{extends file="helpers/form/form.tpl"}
{block name="input"}
{if $input.type == 'textarea'}
	{if isset($input.lang) AND $input.lang}
		{foreach $languages as $language}
			{if $languages|count > 1}
			<div class="form-group translatable-field lang-{$language.id_lang|escape:'html':'UTF-8'}"{if $language.id_lang != $defaultFormLanguage} style="display:none;"{/if}>
				<div class="col-lg-9">
			{/if}
					{if isset($input.maxchar) && $input.maxchar}
					<div class="input-group">
						<span id="{if isset($input.id)}{$input.id|escape:'html':'UTF-8'}_{$language.id_lang|escape:'html':'UTF-8'}{else}{$input.name|escape:'html':'UTF-8'}_{$language.id_lang|escape:'html':'UTF-8'}{/if}_counter" class="input-group-addon">
							<span class="text-count-down">{$input.maxchar|intval}</span>
						</span>
					{/if}
					<textarea{if isset($input.readonly) && $input.readonly} readonly="readonly"{/if} name="{$input.name|escape:'html':'UTF-8'}_{$language.id_lang|escape:'html':'UTF-8'}" id="{if isset($input.id)}{$input.id|escape:'html':'UTF-8'}{else}{$input.name|escape:'html':'UTF-8'}{/if}_{$language.id_lang|intval}" class="{if isset($input.autoload_rte) && $input.autoload_rte}rte autoload_rte{else}textarea-autosize{/if}{if isset($input.class)} {$input.class|escape:'html':'UTF-8'}{/if}"{if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}{if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}>{$fields_value[$input.name][$language.id_lang]|escape:'html':'UTF-8'}</textarea>
					{if isset($input.maxchar) && $input.maxchar}
					</div>
					{/if}
			{if $languages|count > 1}
				</div>
				<div class="col-lg-2">
					<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						{$language.iso_code|escape:'html':'UTF-8'}
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						{foreach from=$languages item=language}
						<li>
							<a href="javascript:hideOtherLanguage({$language.id_lang|intval});" tabindex="-1">{$language.name|escape:'html':'UTF-8'}</a>
						</li>
						{/foreach}
					</ul>
				</div>
			</div>
			{/if}
		{/foreach}
		{if isset($input.maxchar) && $input.maxchar}
			<script type="text/javascript">
			$(document).ready(function(){
			{foreach from=$languages item=language}
				countDown($("#{if isset($input.id)}{$input.id|escape:'html':'UTF-8'}_{$language.id_lang|intval}{else}{$input.name|escape:'html':'UTF-8'}_{$language.id_lang|intval}{/if}"), $("#{if isset($input.id)}{$input.id|escape:'html':'UTF-8'}_{$language.id_lang|intval}{else}{$input.name|escape:'html':'UTF-8'}_{$language.id_lang|intval}{/if}_counter"));
			{/foreach}
			});
			</script>
		{/if}
	{else}
		{if isset($input.maxchar) && $input.maxchar}
			<span id="{if isset($input.id)}{$input.id|escape:'html':'UTF-8'}_{$language.id_lang|intval}{else}{$input.name|escape:'html':'UTF-8'}_{$language.id_lang|intval}{/if}_counter" class="input-group-addon">
				<span class="text-count-down">{$input.maxchar|intval}</span>
			</span>
		{/if}
		<textarea{if isset($input.readonly) && $input.readonly} readonly="readonly"{/if} name="{$input.name|escape:'html':'UTF-8'}" id="{if isset($input.id)}{$input.id|escape:'html':'UTF-8'}{else}{$input.name|escape:'html':'UTF-8'}{/if}" {if isset($input.cols)}cols="{$input.cols|escape:'html':'UTF-8'}"{/if} {if isset($input.rows)}rows="{$input.rows|escape:'html':'UTF-8'}"{/if} class="{if isset($input.autoload_rte) && $input.autoload_rte}rte autoload_rte{else}textarea-autosize{/if}{if isset($input.class)} {$input.class|escape:'html':'UTF-8'}{/if}"{if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}{if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}>{$fields_value[$input.name]|escape:'html':'UTF-8'}</textarea>
		{if isset($input.maxchar) && $input.maxchar}
			<script type="text/javascript">
    			$(document).ready(function(){
    				countDown($("#{if isset($input.id)}{$input.id|escape:'html':'UTF-8'}{else}{$input.name|escape:'html':'UTF-8'}{/if}"), $("#{if isset($input.id)}{$input.id|escape:'html':'UTF-8'}{else}{$input.name|escape:'html':'UTF-8'}{/if}_counter"));
    			});
			</script>
		{/if}
	{/if}
{elseif $input.type=='select' && $input.name=='id_ets_eto_attr_group' && !$input.options.query}
    <div class="alert alert-info">{l s='No option groups available.' mod='ets_extraoptions'} <a href="{$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&configure=ets_extraoptions&tab_active=group">{l s='Configure now' mod='ets_extraoptions'}</a></div>
{else}
    {$smarty.block.parent}
{/if}
{/block}
{block name="input_row"}
	{if $input.name}
		{$smarty.block.parent}
		{if $input.type == 'file' &&  isset($input.display_img) && $input.display_img}
			<div class="form-group">
			<label class="control-label col-lg-4 uploaded_image_label" style="font-style: italic;">{l s='Uploaded image: ' mod='ets_extraoptions'}</label>
				<div class="col-lg-8 uploaded_img_wrapper">
					<img style="display: inline-block; max-width: 200px;" src="{$input.display_img|escape:'html':'UTF-8'}" />
					{if (!isset($input.hide_delete) || isset($input.hide_delete) && !$input.hide_delete) && isset($input.img_del_link) && $input.img_del_link && !(isset($input.required) && $input.required)}
						<a class="delete_url" style="display: inline-block; text-decoration: none!important;" href="{$input.img_del_link|escape:'html':'UTF-8'}"><span style="color: #666"><i style="font-size: 20px;" class="process-icon-delete fa fa-trash icon icon-trash"></i></span></a>
					{/if}
				</div>
			</div>
		{/if}
	{/if}
{/block}