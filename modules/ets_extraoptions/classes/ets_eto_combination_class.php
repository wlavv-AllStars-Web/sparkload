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

class Ets_eto_combination_class extends ObjectModel
{
    public $date_add;
    public static $definition = array(
        'table' => 'ets_eto_combination',
        'primary' => 'id_combination',
        'multilang' => false,
        'fields' => array(
            'date_add' => array('type' => self::TYPE_DATE),
        ),
    );
    public	function __construct($id_item = null, $id_lang = null, $id_shop = null)
	{
		parent::__construct($id_item, $id_lang, $id_shop);
    }
    public static function processChangeCustomAttribute($id_product,$id_product_attribute,$quantity,$id_combination,$customization_id=0,$op='up')
    {
        if(!Db::getInstance()->getRow('SELECT * FROM  `'._DB_PREFIX_.'ets_eto_cart` WHERE id_cart="'.(int)Context::getContext()->cart->id.'" AND id_product="'.(int)$id_product.'" AND id_product_attribute="'.(int)$id_product_attribute.'" AND id_combination='.(int)$id_combination.' AND customization_id='.(int)$customization_id))
        {
            return Db::getInstance()->insert('ets_eto_cart',array(
                    'id_cart' => (int)Context::getContext()->cart->id,
                    'id_product' => (int)$id_product,
                    'id_product_attribute' => (int)$id_product_attribute,
                    'quantity' => (int)$quantity,
                    'id_combination'=> (int)$id_combination,
                    'customization_id' => (int)$customization_id,
                    'date_add' => date('Y-m-d H:i:s')
                )
            );
        }
        else
        {
            return Db::getInstance()->execute('UPDATE  `'._DB_PREFIX_.'ets_eto_cart` SET quantity=quantity '.($op =='down' ? '-':'+').' '.(int)$quantity.', date_add ="'.pSQL(date('Y-m-d H:i:s')).'" WHERE id_cart="'.(int)Context::getContext()->cart->id.'" AND id_product="'.(int)$id_product.'" AND id_product_attribute="'.(int)$id_product_attribute.'" AND id_combination='.(int)$id_combination.' AND customization_id='.(int)$customization_id);
        }	
    }
    public static function getIdCombinationByAttributes($attributes)
    {
        if($attributes)
        {
            $sql =' SELECT id_combination
            FROM `'._DB_PREFIX_.'ets_eto_attr_combination`
            GROUP BY id_combination
            HAVING GROUP_CONCAT(id_ets_eto_attr ORDER BY id_ets_eto_attr ASC) = "'.implode(',',array_map('intval',$attributes)).'"';
            if($id_combination = Db::getInstance()->getValue($sql))
            {
                return $id_combination;
            }
            else
            {
                $combinationObj = new Ets_eto_combination_class();
                if($combinationObj->add())
                {
                    foreach($attributes as $id_attribute)
                    {
                        Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'ets_eto_attr_combination`(id_combination,id_ets_eto_attr) VALUES("'.(int)$combinationObj->id.'","'.(int)$id_attribute.'")');
                    }
                    return $combinationObj->id;
                }
            }
        }
        else
            return false;
    }
    protected static $_prices = array();
    public static function getPriceProductCustom($id_product,$id_combination,$withTax = true,$withDiscount= true,$onlyNoDiscount=false,$id_product_attribute=0)
    {
        $key = $id_product.'-'.$id_combination.'-'.(int)$withTax.'-'.(int)$withDiscount.'-'.(int)$onlyNoDiscount.'-'.$id_product_attribute;
        if (isset(self::$_prices[$key]) && self::$_prices[$key] !== null) {
            return self::$_prices[$key];
        }
        $price =0;
        $attributes = Db::getInstance()->executeS('SELECT id_ets_eto_attr FROM  `'._DB_PREFIX_.'ets_eto_attr_combination` WHERE id_combination='.(int)$id_combination);
        if($attributes)
        {
            foreach($attributes as $attribute)
            {
                $price += Ets_eto_attribute_class::getPriceProductAttributeCustom($id_product,$attribute['id_ets_eto_attr'],$withTax,$withDiscount,$onlyNoDiscount,$id_product_attribute);
            
            }
            self::$_prices[$key] = $price;
            return $price;
        }
        self::$_prices[$key] = false;
        return false;
    }
    public static function getAttributeName($id_combination)
    {
        $sql = 'SELECT GROUP_CONCAT(" ",al.name) FROM 
         `'._DB_PREFIX_.'ets_eto_attr` a 
        INNER JOIN  `'._DB_PREFIX_.'ets_eto_attr_combination` ac ON (ac.id_ets_eto_attr= a.id_ets_eto_attr AND ac.id_combination="'.(int)$id_combination.'")
        LEFT JOIN  `'._DB_PREFIX_.'ets_eto_attr_lang` al ON (a.id_ets_eto_attr=al.id_ets_eto_attr AND al.id_lang="'.(int)Context::getContext()->language->id.'")
        ';
        return Db::getInstance()->getValue($sql);
    }
    protected static $_groups = array();
    public static function getAttributeGroups($id_combination)
    {
        if(isset(self::$_groups[$id_combination]))
            return self::$_groups[$id_combination];

        $sql ='SELECT a.id_ets_eto_attr_group,g.position, gl.name as group_name, GROUP_CONCAT(" ",al.name) as attributes FROM `'._DB_PREFIX_.'ets_eto_attr` a 
        INNER JOIN  `'._DB_PREFIX_.'ets_eto_attr_combination` ac ON (ac.id_ets_eto_attr= a.id_ets_eto_attr AND ac.id_combination="'.(int)$id_combination.'")
        LEFT JOIN `'._DB_PREFIX_.'ets_eto_attr_group` g ON (a.id_ets_eto_attr_group = g.id_ets_eto_attr_group)
        LEFT JOIN `'._DB_PREFIX_.'ets_eto_attr_group_lang` gl ON (gl.id_ets_eto_attr_group = g.id_ets_eto_attr_group AND gl.id_lang="'.(int)Context::getContext()->language->id.'")
        LEFT JOIN  `'._DB_PREFIX_.'ets_eto_attr_lang` al ON (a.id_ets_eto_attr=al.id_ets_eto_attr AND al.id_lang="'.(int)Context::getContext()->language->id.'")
        GROUP BY a.id_ets_eto_attr_group';
        $groups = Db::getInstance()->executeS($sql);
        if($groups && count($groups)>=2)
        {
            for($i=0;$i <count($groups) ;$i++)
            {
                for($j = $i+1;$j<count($groups);$j++)
                {
                    if(!$groups[$i]['id_ets_eto_attr_group'] ||  $groups[$i]['position'] > $groups[$j]['position'])
                    {
                        $temp = $groups[$i];
                        $groups[$i] = $groups[$j];
                        $groups[$j] = $temp;
                    }
                }
            }
        }
        self::$_groups[$id_combination] = $groups;
        return self::$_groups[$id_combination];
    }
}