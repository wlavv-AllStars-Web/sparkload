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
function upgrade_module_1_1_1($module)
{
    if(!$module->checkCreatedColumn('ets_eto_cart','customization_id'))
    {
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'ets_eto_cart` ADD `customization_id` INT(11) NULL');
        Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'ets_eto_cart` DROP PRIMARY KEY, ADD PRIMARY KEY (`id_combination`, `id_cart`, `id_product`, `id_product_attribute`, `customization_id`) USING BTREE');
    }
    $module->replaceFileOverride();
    $module->uninstallOverrides();
    $module->installOverrides();
    return true;
}