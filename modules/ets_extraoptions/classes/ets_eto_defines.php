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

class Ets_eto_defines
{
    public static $instance;
    public static function getInstance()
    {
        if (!(isset(self::$instance)) || !self::$instance) {
            self::$instance = new Ets_eto_defines();
        }
        return self::$instance;
    }
    public function _installDb()
    {
        $sqls = array();
        $sqls[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ets_eto_attr` ( 
        `id_ets_eto_attr` INT(11) NOT NULL AUTO_INCREMENT , 
        `used` INT(1) NOT NULL , 
        `id_product` INT(11) NOT NULL ,
        `id_shop` INT(11) NOT NULL,
        `type_price` VARCHAR(12) NOT NULL ,
        `price` DECIMAL(10,2) NOT NULL , 
        `percent` DECIMAL(4,2) NOT NULL ,
        `required` INT(1) NOT NULL , 
        `checked` INT(1) NOT NULL , 
        `use_tax` INT(1) NOT NULL,
        `use_discount` INT(1) NOT NULL,
        `position` INT(11) NOT NULL,
        `image` VARCHAR(150) NOT NULL,
        `active` INT(1) NOT NULL , 
        `display_by_option_group` INT(1) NOT NULL, 
        `id_ets_eto_attr_group` INT(11) NOT NULL, 
        PRIMARY KEY (`id_ets_eto_attr`), INDEX (`used`), INDEX (`id_product`),INDEX (`id_shop`),INDEX (`position`), INDEX (`required`), INDEX (`checked`), INDEX (`active`), INDEX (`display_by_option_group`), INDEX (`id_ets_eto_attr_group`)) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
        $sqls[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ets_eto_attr_lang` ( 
        `id_ets_eto_attr` INT(11) NOT NULL , 
        `id_lang` INT(11) NOT NULL , 
        `name` VARCHAR(1000) NOT NULL , 
        `description` TEXT NOT NULL , PRIMARY KEY (`id_ets_eto_attr`, `id_lang`)) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
        $sqls[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ets_eto_attr_product` ( 
        `id_ets_eto_attr` INT(11) NOT NULL , 
        `id_product` INT(11) NOT NULL , 
        `used` INT(11) NOT NULL , 
        `type_price` VARCHAR(12) NOT NULL ,
        `price` DECIMAL(10,2) NOT NULL , 
        `required` INT(11) NOT NULL , 
        `checked` INT(11) NOT NULL , 
        `use_tax` INT(1) NOT NULL,
        `use_discount` INT(1) NOT NULL,
        `position` INT(11) NOT NULL ,
        `description` TEXT NOT NULL , PRIMARY KEY (`id_ets_eto_attr`, `id_product`),INDEX (`used`),INDEX (`position`), INDEX (`required`), INDEX (`checked`)) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
        $sqls[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ets_eto_order` ( 
        `id_combination` INT(11) NOT NULL , 
        `id_order` INT(11) NOT NULL , 
        `id_product` INT(11) NOT NULL , 
        `id_product_attribute` INT(11) NOT NULL , 
        `quantity` INT(11) NOT NULL , 
        `price` DECIMAL(10,2) NOT NULL , 
        `price_incl` DECIMAL(10,2) NOT NULL ,
        `price_without_reduction` DECIMAL(10,2) NOT NULL ,
        `name` VARCHAR(1000) NOT NULL , 
        PRIMARY KEY (`id_combination`, `id_order`, `id_product`,`id_product_attribute`),INDEX(`quantity`)) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
        $sqls[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ets_eto_cart` ( 
        `id_combination` INT(11) NOT NULL , 
        `id_cart` INT(11) NOT NULL , 
        `id_product` INT(11) NOT NULL , 
        `id_product_attribute` INT(11) NOT NULL , 
        `customization_id` INT(11) NOT NULL , 
        `quantity` INT(11) NOT NULL , 
        `date_add` datetime NULL , 
        PRIMARY KEY (`id_combination`, `id_cart`, `id_product`,`id_product_attribute`,`customization_id`)) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
        $sqls[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ets_eto_attr_combination` ( 
        `id_combination` INT(11) NOT NULL , 
        `id_ets_eto_attr` INT(11) NOT NULL , 
        PRIMARY KEY (`id_combination`,`id_ets_eto_attr`)) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
        $sqls[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ets_eto_combination` ( 
        `id_combination` INT(11) NOT NULL AUTO_INCREMENT , 
        `date_add` datetime NOT NULL , 
        PRIMARY KEY (`id_combination`)) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
        $sqls[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ets_eto_attr_group` ( 
        `id_ets_eto_attr_group` INT(11) NOT NULL AUTO_INCREMENT ,
        `id_shop` INT(11), 
        `required` INT(2), 
        `type_option` VARCHAR(15),
        `position` INT(11), 
        PRIMARY KEY (`id_ets_eto_attr_group`)) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
        $sqls[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ets_eto_attr_group_lang` ( 
        `id_ets_eto_attr_group` INT(11) NOT NULL ,
        `id_lang` INT(11) NOT NULL, 
        `name` VARCHAR(300), 
        PRIMARY KEY (`id_ets_eto_attr_group`,`id_lang`)) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
        $sqls[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ets_eto_attr_category` ( 
        `id_ets_eto_attr` INT(11) NOT NULL,
        `id_category` INT(11) NOT NULL, 
        PRIMARY KEY (`id_ets_eto_attr`,`id_category`)) ENGINE = '._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci';
        foreach($sqls as $sql)
        {
            Db::getInstance()->execute($sql);
        }
        return true;
    }
    public function _uninstallDb()
    {
        return Db::getInstance()->execute('DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'ets_eto_attr')
            && Db::getInstance()->execute('DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'ets_eto_attr_lang')
            && Db::getInstance()->execute('DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'ets_eto_attr_product')
            && Db::getInstance()->execute('DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'ets_eto_order')
            && Db::getInstance()->execute('DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'ets_eto_cart')
            && Db::getInstance()->execute('DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'ets_eto_attr_combination')
            && Db::getInstance()->execute('DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'ets_eto_combination')
            && Db::getInstance()->execute('DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'ets_eto_attr_group')
            && Db::getInstance()->execute('DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'ets_eto_attr_group_lang');
    }
}