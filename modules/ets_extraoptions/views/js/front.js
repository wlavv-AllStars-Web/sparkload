/**
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
 */
$(document).ready(function(){
    $('[data-toggle="pstooltip"]').tooltip();
    $(document).on('click','.add-to-cart,.add',function(){
        if($('.ajax-error').length)
        {
            $('.ajax-error').replaceWith('<span id="product-availability"> </span>');
            $('.list-attribute-custom > .checkbox').removeClass('error');
        }
        if($('.list-attribute-custom > .checkbox.required').length)
        {
            $('.list-attribute-custom > .checkbox.required input[type="checkbox"]').each(function(){
                if(!$(this).is(':checked'))
                {
                    $(this).parents('.checkbox.required').addClass('error');
                } 
            });
        }
    });
    if($('.product-prices .block-product-attribute-custom').length)
    {
        $('#add-to-cart-or-refresh #product_customization_id').after($('.product-prices .block-product-attribute-custom').clone(false));
        $('.product-prices .block-product-attribute-custom').remove();
    } 
    ets_eto_getPriceCustomAttribute();
    $(document).on('click','#add-to-cart-or-refresh .list-attribute-custom input[type="checkbox"],#add-to-cart-or-refresh .list-attribute-custom input[type="radio"],#add-to-cart-or-refresh .list-attribute-custom select',function(){
        $(this).parents('.checkbox.required').removeClass('error');
        if($(this).parents('.quickview').length==0)
            ets_eto_getPriceCustomAttribute();
        else
            ets_eto_getPriceCustomAttributeQuickView();
    });
    $(document).on('change','#add-to-cart-or-refresh .list-attribute-custom select',function(){
        if($(this).parents('.quickview').length==0)
            ets_eto_getPriceCustomAttribute();
        else
            ets_eto_getPriceCustomAttributeQuickView();
    });
    $(document ).ajaxComplete(function( event, xhr, settings ) {
        if(xhr.responseText && xhr.responseText.indexOf("product_prices")==2)
        {
            ets_eto_getPriceCustomAttribute();
        }
        if(xhr.responseText && xhr.responseText.indexOf("quickview_html")==2)
        {
            setTimeout(function(){
                if($('.quickview .product-prices .block-product-attribute-custom').length)
                {
                    $('.quickview #add-to-cart-or-refresh #product_customization_id').after($('.product-prices .block-product-attribute-custom').clone(false));
                    $('.quickview .product-prices .block-product-attribute-custom').remove();
                    ets_eto_getPriceCustomAttributeQuickView();
                }
            },100);
        }
    });
    $(document).on('mouseenter','.list-attribute-custom .desc',function(e){
        $(this).addClass('hover');
        var pos_left = $(this).offset().left;

        var screen_w = $(window).width();
        if ( pos_left < 100 ){
            var change_left = 100 - pos_left;
            $(this).find('.content').css('margin-left',change_left+'px');
        }
        if ( pos_left > 100 && (pos_left + 100) > screen_w){
            var change_right = (pos_left + 100) - screen_w + 20;
            $(this).find('.content').css('margin-left','-'+change_right+'px');
        }
    });
    $(document).on('mouseleave touchend','.list-attribute-custom .desc',function(e){
        $('.list-attribute-custom .desc').removeClass('hover').find('.content').css('margin-left','').css('margin-right','');
    });
    $(document).mouseup(function (e)
    {
        var desc_block = $('.list-attribute-custom .desc');
        if (!desc_block.is(e.target)&& desc_block.has(e.target).length === 0)
        {
            $('.list-attribute-custom .desc').removeClass('hover').find('.content').css('margin-left','').css('margin-right','');
        }
    });
});
function ets_eto_getPriceCustomAttribute()
{
    var productPrice = 0;
    var productPrice_text = $('.ets-ws-product-price-and-shipping').length ? $('.ets-ws-product-price-and-shipping span').html() : $('.current-price > span').html();

    var customPrice = false;
    if($('#add-to-cart-or-refresh .list-attribute-custom input:checked').length)
    {
        $('#add-to-cart-or-refresh .list-attribute-custom input:checked').each(function(){
            if(parseFloat($(this).data('price'))!=0)
            {
                productPrice += parseFloat($(this).data('price'));
                customPrice = true;
            }
        });
    }
    if($('#add-to-cart-or-refresh .list-attribute-custom select').length)
    {
        $('#add-to-cart-or-refresh .list-attribute-custom select').each(function(){
            var id_attribute = $(this).val();
            var price = parseFloat($(this).find('option[value="'+id_attribute+'"]').data('price'));
            if(price!=0)
            {
                productPrice += price;

                customPrice = true;
            }
        });
    }
    if(customPrice)
    {
        $('.attribute-custom-price').show();

        $('.attribute-custom-price .price').html(productPrice_text.replace(/\d+(?:(\.|\,)\d+)?/, productPrice.toFixed(2)));
    }
    else
        $('.attribute-custom-price').hide();
}
function ets_eto_getPriceCustomAttributeQuickView()
{
    var customPrice = false;
    var productPrice = 0;
    var productPrice_text = $('.quickview .ets-ws-product-price-and-shipping').length ? $('.quickview .ets-ws-product-price-and-shipping span[itemprop="price"]').html() : $('.quickview .current-price > span[itemprop="price"]').html();
    if($('.quickview #add-to-cart-or-refresh .list-attribute-custom input:checked').length)
    {
        $('.quickview #add-to-cart-or-refresh .list-attribute-custom input:checked').each(function(){
            if(parseFloat($(this).data('price'))!=0)
            {
                productPrice += parseFloat($(this).data('price'));
                customPrice = true;
            }
        });
    }
    if($('.quickview #add-to-cart-or-refresh .list-attribute-custom select').length)
    {
        $('.quickview #add-to-cart-or-refresh .list-attribute-custom select').each(function(){
            var id_attribute = $(this).val();
            var price = parseFloat($(this).find('option[value="'+id_attribute+'"]').data('price'));
            if(price!=0)
            {
                productPrice += parseFloat($(this).data('price'));
                customPrice = true;
            }
        });
    }
    if(customPrice)
    {
        $('.quickview .attribute-custom-price').show();

        $('.quickview .attribute-custom-price .price').html(productPrice_text.replace(/\d+(?:(\.|\,)\d+)?/, productPrice.toFixed(2)));
    }
    else
        $('.quickview .attribute-custom-price').hide();
}