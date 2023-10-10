<?php
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
 
class OrderInvoice extends OrderInvoiceCore
{
    /*
    * module: ets_extraoptions
    * date: 2023-09-25 14:12:25
    * version: 1.1.4
    */
    public function getProducts($products = false, $selected_products = false, $selected_qty = false)
    {
        $order_details = parent::getProducts($products,$selected_products,$selected_qty);
        if($order_details)
        {
            foreach($order_details as &$order_detail)
            {
                if($custom_price = Db::getInstance()->getValue('SELECT price_without_reduction FROM  `'._DB_PREFIX_.'ets_eto_order` WHERE id_order="'.(int)$order_detail['id_order'].'" AND id_product="'.(int)$order_detail['product_id'].'" AND id_product_attribute="'.(int)$order_detail['product_attribute_id'].'"'))
                {
                    if($order_detail['reduction_amount_tax_excl']<=0 && $order_detail['reduction_percent'] <100)
                    {
                        $unit_price_tax_excl_including_ecotax = $order_detail['unit_price_tax_excl_including_ecotax'] - $custom_price;
                        $unit_price_tax_excl_before_specific_price = (100 * $unit_price_tax_excl_including_ecotax) / (100 - $order_detail['reduction_percent']);
                        $order_detail['reduction_amount_tax_excl'] = $unit_price_tax_excl_before_specific_price - $unit_price_tax_excl_including_ecotax;
                    }
                }
            }
        }
        return $order_details;
    }
}