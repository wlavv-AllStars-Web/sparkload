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

if (!defined('_PS_VERSION_'))
    exit;
/**
 * @param \Ets_extraoptions $module
 * @return bool
 */
function upgrade_module_1_1_2($module)
{
    if(!$module->checkCreatedColumn('ets_eto_attr','image'))
    {
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'ets_eto_attr` ADD `image` VARCHAR(150) NULL');
    }
    if(!$module->checkCreatedColumn('ets_eto_attr','type_price'))
    {
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'ets_eto_attr` ADD `type_price` VARCHAR(12) NULL');
    }
    if(!$module->checkCreatedColumn('ets_eto_attr','percent'))
    {
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'ets_eto_attr` ADD `percent` FLOAT(4,2) NULL');
    }
    if(!$module->checkCreatedColumn('ets_eto_attr_product','type_price'))
    {
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'ets_eto_attr_product` ADD `type_price` VARCHAR(12) NULL');
    }
    if(!$module->checkCreatedColumn('ets_eto_attr_group','type_option'))
    {
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'ets_eto_attr_group` ADD `type_option` VARCHAR(15) NULL');
    }
    Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'ets_eto_attr_product` CHANGE `price` `price` DECIMAL(10,2) NOT NULL');
    return true;
}