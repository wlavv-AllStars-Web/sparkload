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
class Cart extends CartCore
{
    /*
    * module: ets_extraoptions
    * date: 2023-09-25 14:12:25
    * version: 1.1.4
    */
    public $_products;
    /*
    * module: ets_extraoptions
    * date: 2023-09-25 14:12:25
    * version: 1.1.4
    */
    public $shouldSplitGiftProductsQuantity ;
    /*
    * module: ets_extraoptions
    * date: 2023-09-25 14:12:25
    * version: 1.1.4
    */
    public function getProducts($refresh = false, $id_product = false, $id_country = null, $fullInfos = true,bool $keepOrderPrices = false,$default = false)
    {
        if($keepOrderPrices || $default || !Module::isEnabled('ets_extraoptions'))
            return parent::getProducts($refresh,$id_product,$id_country,$fullInfos,$keepOrderPrices);
        else
        {
            $this->_products = Module::getInstanceByName('ets_extraoptions')->getProducts($this,$refresh,$id_product,$id_country,$fullInfos,$keepOrderPrices);
            return $this->_products;
        }
    }
    /*
    * module: ets_extraoptions
    * date: 2023-09-25 14:12:25
    * version: 1.1.4
    */
    public function applyProductCalculations($row, $shopContext, $productQuantity = null, bool $keepOrderPrices = false)
    {
        return parent::applyProductCalculations($row,$shopContext,$productQuantity,$keepOrderPrices);
    }
}