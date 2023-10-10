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

class Ets_eto_attribute_class extends ObjectModel
{
    protected static $instance;
    public $used;
    public $id_product;
    public $id_shop;
    public $type_price;
    public $percent;
    public $price;
    public $required;
    public $checked;
    public $use_tax;
    public $use_discount;
    public $active;
    public $position;
    public $name;
    public $image;
    public $description;
    public $display_by_option_group;
    public $id_ets_eto_attr_group;
    public $related_categories =array();
    public static $definition = array(
        'table' => 'ets_eto_attr',
        'primary' => 'id_ets_eto_attr',
        'multilang' => true,
        'fields' => array(
            'used' => array('type' => self::TYPE_INT),
            'id_product' => array('type' => self::TYPE_INT),
            'id_shop' => array('type' => self::TYPE_INT),
            'type_price' => array('type'=>self::TYPE_STRING),
            'price' => array('type' => self::TYPE_FLOAT),
            'percent' => array('type' => self::TYPE_FLOAT),
            'required' => array('type' => self::TYPE_INT),
            'checked' => array('type'=>self::TYPE_DATE),
            'use_tax' => array('type' => self::TYPE_INT),
            'use_discount' => array('type' => self::TYPE_INT),
            'active' => array('type' => self::TYPE_INT),
            'position' => array('type' => self::TYPE_INT),
            'image' => array('type'=>self::TYPE_STRING),
            'display_by_option_group' => array('type' => self::TYPE_INT),
            'id_ets_eto_attr_group' => array('type' => self::TYPE_INT),
            'name' => array('type' => self::TYPE_STRING,'lang'=>true),
            'description' => array('type' => self::TYPE_STRING,'lang'=>true),
        ),
    );
    public	function __construct($id_item = null, $id_lang = null, $id_shop = null)
	{
		parent::__construct($id_item, $id_lang, $id_shop);
        if($this->id)
        {
            $this->related_categories = $this->getRelatedCategories();
        }
    }
    public function add($auto_date=true,$null_values=false)
    {
        $max_posistion = Db::getInstance()->getValue('SELECT max(position) FROM  `'._DB_PREFIX_.'ets_eto_attr` WHERE id_product="'.(int)$this->id_product.'" AND id_shop="'.(int)Context::getContext()->shop->id.'" AND id_ets_eto_attr_group='.(int)$this->id_ets_eto_attr_group);
        $this->position = $max_posistion+1;
        return parent::add($auto_date,$null_values);
    }
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Ets_eto_attribute_class();
        }
        return self::$instance;
    }
    public function getListFieldProductAttributes($id_product,$sort_post,$sort_type)
    {
        $fields_list= array(
            'id_ets_eto_attr' => array(
                'title' => $this->l('ID'),
                'width' => 40,
                'type' => 'text',
                'sort' => $id_product ? false: true,
                'filter' => $id_product ? false: true,
            ),
            'product_image' => array(
                'title' => $this->l('Image'),
                'width' => 40,
                'type' => 'text',
                'sort' => false,
                'filter' => false,
                'strip_tag' => false,
            ),
            'product_name' => array(
                'title' => $this->l('Product name'),
                'width' => 40,
                'type' => 'text',
                'sort' => $id_product ? false: true,
                'filter' => $id_product ? false: true,
                'strip_tag' => false,
            ),
            'name' => array(
                'title' => $this->l('Option name'),
                'width' => 40,
                'type' => 'text',
                'sort' => $id_product ? false: true,
                'filter' => $id_product ? false: true,
            ),
            'description' => array(
                'title' => $this->l('Description'),
                'width' => 40,
                'type' => 'text',
                'sort' => $id_product ? false: true,
                'filter' => $id_product ? false: true,
                'strip_tag' => true,
            ),
            'used' => array(
                'title' => $this->l('Use global option'),
                'type' => 'active',
                'sort' => $id_product ? false: true,
                'filter' => $id_product ? false: true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
            'option_price' => array(
                'title' => $this->l('Price'),
                'type' => 'int',
                'sort' => $id_product ? false: true,
                'filter' => $id_product ? false: true,

            ),
            'use_tax' => array(
                'title' => $this->l('Apply tax'),
                'type' => 'active',
                'sort' => $id_product ? false: true,
                'filter' => $id_product ? false: true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
            'use_discount' => array(
                'title' => $this->l('Apply specific price'),
                'type' => 'active',
                'sort' => $id_product ? false: true,
                'filter' => $id_product ? false: true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
            'required' => array(
                'title' => $this->l('Required'),
                'type' => 'active',
                'sort' => $id_product ? false: true,
                'filter' => $id_product ? false: true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
            'checked' => array(
                'title' => $this->l('Checked by default'),
                'type' => 'active',
                'sort' => $id_product ? false: true,
                'filter' => $id_product ? false: true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
            'active' => array(
                'title' => $this->l('Active'),
                'type' => 'active',
                'sort' => $id_product ? false: true,
                'filter' => $id_product ? false: true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
        );
        if($id_product){
            unset($fields_list['product_image']);
            unset($fields_list['product_name']);
            $fields_list['position'] = array(
                'title' => $this->l('Position'),
                'type' => 'int',
                'sort' => true,
                'update_position' => $sort_post=='position' && $sort_type=='asc' ? true :false,
            );
        }
        return $fields_list;
    }
    public static function getFormattedName($name)
    {
        $theme_name = Context::getContext()->shop->theme_name;
        $name_without_theme_name = str_replace(array('_'.$theme_name, $theme_name.'_'), '', $name);

        //check if the theme name is already in $name if yes only return $name
        if (strstr($name, $theme_name) && ImageType::getByNameNType($name)) {
            return $name;
        } elseif (ImageType::getByNameNType($name_without_theme_name.'_'.$theme_name)) {
            return $name_without_theme_name.'_'.$theme_name;
        } elseif (ImageType::getByNameNType($theme_name.'_'.$name_without_theme_name)) {
            return $theme_name.'_'.$name_without_theme_name;
        } else {
            return $name_without_theme_name.'_default';
        }
    }
    public function renderProductAttributes($id_product=0)
    {
        $groups = Ets_eto_attribute_group_class::getListGroupHasAttribute($id_product ? :false);
        if($groups)
        {
            foreach($groups as &$group)
            {
                $group['list_attributes'] = Module::getInstanceByName('ets_extraoptions')->renderListProductAttributes($id_product,$group['id_ets_eto_attr_group']);
            }
        }
        Context::getContext()->smarty->assign(
            array(
                'groups' => $groups,
                'form_new' => !$id_product && !Tools::isSubmit('saveAttribute') ? $this->renderFormAttribute():false,
                'id_product' => $id_product,
            )
        );
        return Context::getContext()->smarty->fetch(_PS_MODULE_DIR_.'ets_extraoptions/views/templates/hook/list_product_attributes.tpl');
    }
    public function getListFieldAttributes($sort_post,$sort_type)
    {
        return array(
            'id_ets_eto_attr' => array(
                'title' => $this->l('ID'),
                'width' => 40,
                'type' => 'text',
                'sort' => true,
                'filter' => true,
            ),
            'name' => array(
                'title' => $this->l('Option name'),
                'width' => 40,
                'type' => 'text',
                'sort' => true,
                'filter' => true,
            ),
            'description' => array(
                'title' => $this->l('Description'),
                'width' => 40,
                'type' => 'text',
                'sort' => true,
                'filter' => true,
                'strip_tag' => true,
            ),
            'categories_apply' => array(
                'title' => $this->l('Categories apply'),
                'width' => 40,
                'type' => 'text',
                'sort' => false,
                'filter' => false,
                'strip_tag' => false,
            ),
            'used' => array(
                'title' => $this->l('Use option'),
                'type' => 'active',
                'sort' => true,
                'filter' => true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
            'option_price' => array(
                'title' => $this->l('Price'),
                'type' => 'int',
                'sort' => true,
                'filter' => true,

            ),
            'use_tax' => array(
                'title' => $this->l('Apply tax'),
                'type' => 'active',
                'sort' => true,
                'filter' => true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
            'use_discount' => array(
                'title' => $this->l('Apply specific price'),
                'type' => 'active',
                'sort' => true,
                'filter' => true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
            'required' => array(
                'title' => $this->l('Required'),
                'type' => 'active',
                'sort' => true,
                'filter' => true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
            'checked' => array(
                'title' => $this->l('Checked by default'),
                'type' => 'active',
                'sort' => true,
                'filter' => true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
            'active' => array(
                'title' => $this->l('Active'),
                'type' => 'active',
                'sort' => true,
                'filter' => true,
                'strip_tag'=> false,
                'filter_list' => array(
                    'list' => array(
                        array(
                            'id_option'=>1,
                            'value' => $this->l('Yes'),
                        ),
                        array(
                            'id_option'=>0,
                            'value' => $this->l('No'),
                        ),
                    ),
                    'id_option' => 'id_option',
                    'value' => 'value',
                ),
            ),
            'position' => array(
                'title' => $this->l('Position'),
                'type' => 'int',
                'sort' => true,
                'update_position' => $sort_post=='position' && $sort_type=='asc' ? true :false,
            ),
        );
    }
    public static function getCategoriesByID($id_attr)
    {
        $sql ='SELECT c.id_category,cl.name FROM `'._DB_PREFIX_.'ets_eto_attr_category` ac 
        INNER JOIN `'._DB_PREFIX_.'category` c ON (ac.id_category=c.id_category)
        LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (cl.id_category = c.id_category AND cl.id_lang="'.(int)Context::getContext()->language->id.'" AND cl.id_shop="'.(int)Context::getContext()->shop->id.'")
        WHERE ac.id_ets_eto_attr='.(int)$id_attr.' GROUP BY c.id_category';
        return Db::getInstance()->executeS($sql);
    }
    public static function getAttributes($filter='',$start=0,$limit=12,$order_by='a.id_ets_eto_attr asc',$total=false)
    {
        if($total)
            $sql = 'SELECT COUNT(DISTINCT a.id_ets_eto_attr)';
        else
            $sql ='SELECT a.*,al.name,al.description,pl.name as product_name,if(a.type_price="percent",a.percent,a.price) as option_price';
        $sql .= ' FROM `'._DB_PREFIX_.'ets_eto_attr` a
        LEFT JOIN `'._DB_PREFIX_.'ets_eto_attr_lang` al ON (a.id_ets_eto_attr = al.id_ets_eto_attr AND al.id_lang = "'.(int)Context::getContext()->language->id.'")
        LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (a.id_product = pl.id_product AND pl.id_lang="'.(int)Context::getContext()->language->id.'")
        WHERE a.id_shop="'.(int)Context::getContext()->shop->id.'" '.($filter ?(string)$filter:'');
        if(!$total)
        {
            $sql .=' GROUP BY a.id_ets_eto_attr ';
            $sql .= ($order_by ? ' ORDER By '.pSQL($order_by) :'');
            if($limit!==false)
                $sql .= ' LIMIT '.(int)$start.','.(int)$limit;
        }
        if($total)
            return Db::getInstance()->getValue($sql);
        else
        {
            return Db::getInstance()->executeS($sql);
        }
    }
    public static function getAttributesByProduct($id_product,$used = false,$filter='')
    {
        $product = new Product($id_product,false,Context::getContext()->language->id);
        $sql = 'SELECT a.*,al.name,al.description,IFNULL(cap.position,a.position) AS sort_order, IF(cap.used IS NULL,-1,cap.used) AS product_used,IF(cap.price IS NULL,-1,cap.price) AS product_price,IF(cap.type_price is null,-1,cap.type_price) as product_type_price ,IF(cap.required IS NULL,-1,cap.required) AS product_required,IF(cap.checked IS NULL,-1,cap.checked) AS product_checked,IF(cap.use_tax IS NULL,-1,cap.use_tax) AS product_use_tax,IF(cap.use_discount IS NULL,-1,cap.use_discount) AS product_use_discount 
        FROM `'._DB_PREFIX_.'ets_eto_attr` a
        LEFT JOIN `'._DB_PREFIX_.'ets_eto_attr_lang` al ON (a.id_ets_eto_attr = al.id_ets_eto_attr AND al.id_lang="'.(int)Context::getContext()->language->id.'")
        LEFT JOIN `'._DB_PREFIX_.'ets_eto_attr_product` cap ON (cap.id_ets_eto_attr = a.id_ets_eto_attr AND cap.id_product="'.(int)$id_product.'")
        LEFT JOIN `'._DB_PREFIX_.'ets_eto_attr_category` cac ON (cac.id_ets_eto_attr = a.id_ets_eto_attr)
        WHERE a.active=1 AND a.id_shop ="'.(int)Context::getContext()->shop->id.'" AND (cac.id_ets_eto_attr is null OR cac.id_category="'.(int)$product->id_category_default.'") '.($used ? ' AND (cap.used=1 OR ((cap.used=-1 OR cap.used IS NULL) AND a.used=1)) ':'').($filter ? (string)$filter :'').' ORDER BY sort_order ASC';
        return Db::getInstance()->executeS($sql);
    }
    public function renderFormAttribute($id_product=0)
    {
        $module = Module::getInstanceByName('ets_extraoptions');
        $fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->id ? ($this->id_product ? $this->l('Edit specific option'): $this->l('Edit option')): ($id_product ? $this->l('Add specific option') : $this->l('Add option')),
                    'icon' =>'icon-attribute',				
				),
				'input' => array(
                    array(
                        'type'=>'hidden',
                        'name' => 'id_attribute',
                    ),
                    array(
                        'type'=>'hidden',
                        'name' => 'id_product',
                    ),					
					array(
						'type' => 'text',
						'label' => $this->l('Name'),
						'name' => 'name', 
                        'lang' => true,	
                        'required' => true,	                     
					),
                    array(
						'type' => 'textarea',
						'label' => $this->l('Description'),
						'name' => 'description', 
                        'lang' => true,			                     
					),  
                    array(
                        'type' => 'switch',
                        'label' => $id_product || $this->id_product ? $this->l('Use option'):  $this->l('Use option (Globally)'),
                        'desc' => $this->l('This option will be applied to all existing products in your store.'),
                        'name'=> 'used',
                        'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('On')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('Off')
							)
						),
                    ),
                    'type_price' => array(
                        'label' => $this->l('How to calculate option price:'),
                        'type' => 'select',
                        'name' => 'type_price',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => 'fixed',
                                    'name' => $this->l('Fixed amount'),
                                ),
                                array(
                                    'id' => 'percent',
                                    'name' => $this->l('Percentage of product price'),
                                )
                            ) ,
                            'name' => 'name',
                            'id' => 'id'
                        ),
                    ),
                    array(
						'type' => 'text',
						'label' => $this->l('Price'),
                        'desc' => $this->l('The price will be added to the product price if customers select this option.'),
						'name' => 'price', 
                        'suffix' => Context::getContext()->currency->sign,
                        'col'=>3,
                        'form_group_class'=>'type_price fixed',
					),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Percentage'),
                        'name' => 'percent',
                        'suffix' => '%',
                        'col'=>3,
                        'form_group_class'=>'type_price percent',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Apply tax'),
                        'desc' => $this->l('Apply the tax rule defined on "Pricing" tab of the product editing page'),
                        'name'=> 'use_tax',
                        'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('On')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('Off')
							)
						),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Apply specific price'),
                        'desc' => $this->l('Apply the specific price defined on "Pricing" tab of the product editing page'),
                        'name'=> 'use_discount',
                        'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('On')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('Off')
							)
						),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $id_product || $this->id_product ? $this->l('Required'): $this->l('Required (Global)'),
                        'desc' => $this->l('Customers have to select this option when purchasing a product'),
                        'name'=> 'required',
                        'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('On')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('Off')
							)
						),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Checked by default'),
                        'name'=> 'checked',
                        'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('On')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('Off')
							)
						),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display by option group'),
                        'name'=> 'display_by_option_group',
                        'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('On')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('Off')
							)
						),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Option group'),
                        'name' => 'id_ets_eto_attr_group',
                        'form_group_class' => 'id_ets_eto_attr_group',
                        'options' => array(
                            'query' => Ets_eto_attribute_group_class::getListAttributeGroups(),
                            'id' => 'id_ets_eto_attr_group',
                            'name' => 'name'
                        ),
                        'required' => true,
                    ),
                    'related_categories' => array(
    					'type'  => 'categories',
    					'label' => $this->l('Categories'),
    					'name'  => 'related_categories',
    					'tree'  => array(
    						'id'      => 'categories-tree',
    						'selected_categories' => $this->related_categories,
                            'use_search' => false,
                            'use_checkbox' => true,
    					),
                        'showRequired' => true,
    				),
                    'image' => array(
                        'type' =>'file',
                        'label' => $this->l('Image'),
                        'name' => 'image',
                        'form_group_class' => 'id_ets_eto_img_file',
                        'display_img' => $this->image ? _PS_ETS_ETO_IMG_.$this->image:'',
                        'img_del_link' => $this->id ? Context::getContext()->link->getAdminLink('AdminModules').'&configure=ets_extraoptions&delimageca_attribute=1&id_ets_eto_attr='.$this->id:'',
                        'desc' => sprintf($this->l('Accepted formats: jpg, png, jpeg, gif. Limit: %sMB'),Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE'))
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Active'),
                        'name'=> 'active',
                        'values' => array(
							array(
								'id' => 'active_on',
								'value' => 1,
								'label' => $this->l('On')
							),
							array(
								'id' => 'active_off',
								'value' => 0,
								'label' => $this->l('Off')
							)
						),
                    ),
                ),
                'submit' => array(
					'title' => $this->l('Save'),
				),
                'buttons' => array(
                    array(
                        'icon' => 'process-icon-cancel',
                        'title' => $this->l('Cancel'),
                        'class' => 'tbn-cancel'
                    )
                ),
            ),
		);
        if($id_product)
        {
            unset($fields_form['form']['input']['related_categories']);
        }
        $helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table = 'ets_eto_attribute';
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$helper->module = $module;
		$helper->identifier = 'id_ets_eto_att';
		$helper->submit_action = 'saveAttribute';
		$helper->currentIndex = Context::getContext()->link->getAdminLink('AdminModules',false).'&configure=ets_extraoptions&tab_active=global';
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->tpl_vars = array(
			'base_url' => Context::getContext()->shop->getBaseURL(),
			'language' => array(
				'id_lang' => $language->id,
				'iso_code' => $language->iso_code
			),
            'PS_ALLOW_ACCENTED_CHARS_URL', (int)Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL'),
			'fields_value' => $module->getAttributeFieldsValues($this,$id_product),
			'languages' => Context::getContext()->controller->getLanguages(),
			'id_language' => Context::getContext()->language->id,
            'link'=> Context::getContext()->link,
            'image_baseurl' => _PS_ETS_ETO_IMG_,
		);            
        return $helper->generateForm(array($fields_form));
    }
    public function _updateAttributesOrdering($attributes,$page)
    {
        if($attributes)
        {
            $id_group =0;
            foreach($attributes as $key=> $id_attribute)
            {
                $position = ($page-1)*20 +$key+1;
                Db::getInstance()->execute('UPDATE  `'._DB_PREFIX_.'ets_eto_attr` SET position ="'.(int)$position.'" WHERE id_ets_eto_attr='.(int)$id_attribute);
                if(!$id_group)
                    $id_group = (int)Db::getInstance()->getValue('SELECT id_ets_eto_attr_group FROM  `'._DB_PREFIX_.'ets_eto_attr` WHERE id_ets_eto_attr='.(int)$id_attribute);
            }
            die(
                json_encode(
                    array(
                        'success' => $this->l('Successfully updated'),
                        'page'=>$page,
                        'id_group' => $id_group ? $id_group :'0',
                    )
                )
            );
        }
    }
    public static function updateCustomAttribute($data)
    {
        if(Db::getInstance()->getRow('SELECT * FROM  `'._DB_PREFIX_.'ets_eto_attr_product` WHERE id_product= "'.(int)$data['id_product'].'" AND id_ets_eto_attr="'.(int)$data['id_ets_eto_attr'].'"'))
        {
            return Db::getInstance()->update('ets_eto_attr_product',$data,' id_product="'.(int)$data['id_product'].'" AND id_ets_eto_attr='.(int)$data['id_ets_eto_attr']);
        }
        else
           return Db::getInstance()->insert('ets_eto_attr_product',$data);
    }
    public static function processDeleteCustomAttribute($id_product,$id_attribute=0)
    {
        return Db::getInstance()->execute('DELETE FROM  `'._DB_PREFIX_.'ets_eto_cart` WHERE id_cart="'.(int)Context::getContext()->cart->id.'" AND id_product="'.(int)$id_product.'"'.($id_attribute ? ' AND id_ets_eto_attr ="'.(int)$id_attribute.'"':''));
    }
    
    public static function getPriceProductAttributeCustom($id_product,$id_attribute,$withTax= true,$withDiscount = true,$onlyNoDiscount=false,$id_product_attribute=0)
    {
        $price = 0;
        $customattribute = false;
        $attributeObj = new Ets_eto_attribute_class($id_attribute);
        if(Validate::isLoadedObject($attributeObj))
        {
            $customattribute = true;
            $attribute_product = Db::getInstance()->getRow('
            SELECT cap.* FROM  `'._DB_PREFIX_.'ets_eto_attr_product` cap
            INNER JOIN  `'._DB_PREFIX_.'ets_eto_attr` ca ON (ca.id_ets_eto_attr = cap.id_ets_eto_attr)
            WHERE ca.id_shop="'.(int)Context::getContext()->shop->id.'" AND cap.id_product="'.(int)$id_product.'" AND cap.id_ets_eto_attr='.(int)$id_attribute
            );
            if(!$attribute_product || $attribute_product['price']==-1)
            {

                $type_price = $attributeObj->type_price;
                if($type_price!='percent')
                {
                    $price = $attributeObj->price;
                }
                else
                {
                    if($attributeObj->percent)
                    {
                        $product = new Product($id_product,true);
                        $productPrice = $product->getPrice(false,$id_product_attribute);
                        $price = ($productPrice * $attributeObj->percent)/100;
                    }
                    else
                        $price=0;
                }
            }
            else
            {

                $type_price = $attribute_product['type_price'];
                if($type_price!='percent')
                {
                    $price = $attribute_product['price'];
                }
                else
                {
                    if($attribute_product['price'])
                    {
                        $product = new Product($id_product,true);
                        $productPrice = $product->getPrice(false,$id_product_attribute);
                        $price = ($productPrice * $attribute_product['price'])/100;
                    }
                    else
                        $price=0;
                }
            }
            if(!$attribute_product || $attribute_product['use_discount']==-1)
            {
                $apply_discount = $attributeObj->use_discount;
            }
            else
            {
                $apply_discount = $attribute_product['use_discount'];
            }
            
            if(!$attribute_product || $attribute_product['use_tax']==-1)
            {
                $apply_tax = $attributeObj->use_tax;
            }
            else
            {
                $apply_tax = $attribute_product['use_tax'];
            }
            if(($apply_discount && $withDiscount) || ($apply_tax && $withTax))
            {
                if(!isset($product))
                    $product = new Product($id_product,true);
                if($apply_discount && $withDiscount && isset($product->specificPrice) &&  $product->specificPrice && $product->specificPrice['reduction_type']=='percentage' && ($reduction = $product->specificPrice['reduction']))
                {
                    if($onlyNoDiscount)
                        return 0;
                    $price -= $price*$reduction;
                }
                if($apply_tax && $withTax && $product->id_tax_rules_group)
                    $price  = Module::getInstanceByName('ets_extraoptions')->addTaxToPrice($product->id_tax_rules_group,$price);
            }
        }
        if($customattribute)
            return $type_price=='fixed' ? Tools::convertPrice($price) : $price;
        else
            return 0;
    }
    public function getProducts(&$cart,$refresh = false, $id_product = false, $id_country = null, $fullInfos = true,$keepOrderPrices=false,$ajaxAddCart=false)
    {
        if (!$cart->id) {
            return [];
        }
        // Build query
        $sql = new DbQuery();

        // Build SELECT
        $sql->select('cp.`id_product_attribute`, cp.`id_product`,IFNULL(ca.quantity,cp.`quantity`) AS cart_quantity,IFNULL(ca.id_combination,0) as id_combination, cp.id_shop, cp.`id_customization`, pl.`name`, p.`is_virtual`,
                        pl.`description_short`, pl.`available_now`, pl.`available_later`, product_shop.`id_category_default`, p.`id_supplier`,
                        p.`id_manufacturer`, m.`name` AS manufacturer_name, product_shop.`on_sale`, product_shop.`ecotax`, product_shop.`additional_shipping_cost`,
                        product_shop.`available_for_order`, product_shop.`show_price`, product_shop.`price`, product_shop.`active`, product_shop.`unity`, product_shop.`unit_price_ratio`,
                        stock.`quantity` AS quantity_available, p.`width`, p.`height`, p.`depth`, stock.`out_of_stock`, p.`weight`,
                        p.`available_date`, p.`date_add`, p.`date_upd`, IFNULL(stock.quantity, 0) as quantity, pl.`link_rewrite`, cl.`link_rewrite` AS category,
                        CONCAT(LPAD(cp.`id_product`, 10, 0), LPAD(IFNULL(cp.`id_product_attribute`, 0), 10, 0), IFNULL(cp.`id_address_delivery`, 0), IFNULL(cp.`id_customization`, 0)) AS unique_id, cp.id_address_delivery,
                        product_shop.advanced_stock_management, ps.product_supplier_reference supplier_reference');

        // Build FROM
        $sql->from('cart_product', 'cp');

        // Build JOIN
        $sql->leftJoin('ets_eto_cart','ca','ca.id_cart=cp.id_cart AND ca.id_product=cp.id_product AND ca.id_product_attribute = cp.id_product_attribute AND ca.customization_id = cp.id_customization');
        $sql->leftJoin('product', 'p', 'p.`id_product` = cp.`id_product`');
        $sql->innerJoin('product_shop', 'product_shop', '(product_shop.`id_shop` = cp.`id_shop` AND product_shop.`id_product` = p.`id_product`)');
        $sql->leftJoin(
            'product_lang',
            'pl',
            'p.`id_product` = pl.`id_product`
            AND pl.`id_lang` = ' . (int) $cart->id_lang . Shop::addSqlRestrictionOnLang('pl', 'cp.id_shop')
        );

        $sql->leftJoin(
            'category_lang',
            'cl',
            'product_shop.`id_category_default` = cl.`id_category`
            AND cl.`id_lang` = ' . (int) $cart->id_lang . Shop::addSqlRestrictionOnLang('cl', 'cp.id_shop')
        );

        $sql->leftJoin('product_supplier', 'ps', 'ps.`id_product` = cp.`id_product` AND ps.`id_product_attribute` = cp.`id_product_attribute` AND ps.`id_supplier` = p.`id_supplier`');
        $sql->leftJoin('manufacturer', 'm', 'm.`id_manufacturer` = p.`id_manufacturer`');

        // @todo test if everything is ok, then refactorise call of this method
        $sql->join(Product::sqlStock('cp', 'cp'));

        // Build WHERE clauses
        $sql->where('cp.`id_cart` = ' . (int) $cart->id);
        if ($id_product) {
            $sql->where('cp.`id_product` = ' . (int) $id_product);
        }
        $sql->where('p.`id_product` IS NOT NULL');

        // Build ORDER BY
        $sql->orderBy('cp.`date_add`, cp.`id_product`, cp.`id_product_attribute` ASC');

        if (Customization::isFeatureActive()) {
            $sql->select('cu.`id_customization`, cu.`quantity` AS customization_quantity');
            $sql->leftJoin(
                'customization',
                'cu',
                'p.`id_product` = cu.`id_product` AND cp.`id_product_attribute` = cu.`id_product_attribute` AND cp.`id_customization` = cu.`id_customization` AND cu.`id_cart` = ' . (int) $cart->id
            );
            $sql->groupBy('cp.`id_product_attribute`, cp.`id_product`, cp.`id_shop`, cp.`id_customization`,ca.id_combination');
        } else {
            $sql->select('NULL AS customization_quantity, NULL AS id_customization');
        }

        if (Combination::isFeatureActive()) {
            $sql->select('
                product_attribute_shop.`price` AS price_attribute, product_attribute_shop.`ecotax` AS ecotax_attr,
                IF (IFNULL(pa.`reference`, \'\') = \'\', p.`reference`, pa.`reference`) AS reference,
                (p.`weight`+ pa.`weight`) weight_attribute,
                IF (IFNULL(pa.`ean13`, \'\') = \'\', p.`ean13`, pa.`ean13`) AS ean13,
                IF (IFNULL(pa.`isbn`, \'\') = \'\', p.`isbn`, pa.`isbn`) AS isbn,
                IF (IFNULL(pa.`upc`, \'\') = \'\', p.`upc`, pa.`upc`) AS upc,
                IFNULL(product_attribute_shop.`minimal_quantity`, product_shop.`minimal_quantity`) as minimal_quantity,
                IF(product_attribute_shop.wholesale_price > 0,  product_attribute_shop.wholesale_price, product_shop.`wholesale_price`) wholesale_price
            ');

            $sql->leftJoin('product_attribute', 'pa', 'pa.`id_product_attribute` = cp.`id_product_attribute`');
            $sql->leftJoin('product_attribute_shop', 'product_attribute_shop', '(product_attribute_shop.`id_shop` = cp.`id_shop` AND product_attribute_shop.`id_product_attribute` = pa.`id_product_attribute`)');
        } else {
            $sql->select(
                'p.`reference` AS reference, p.`ean13`, p.`isbn`,
                p.`upc` AS upc, product_shop.`minimal_quantity` AS minimal_quantity, product_shop.`wholesale_price` wholesale_price'
            );
        }

        $sql->select('image_shop.`id_image` id_image, il.`legend`');
        $sql->leftJoin('image_shop', 'image_shop', 'image_shop.`id_product` = p.`id_product` AND image_shop.cover=1 AND image_shop.id_shop=' . (int) $cart->id_shop);
        $sql->leftJoin('image_lang', 'il', 'il.`id_image` = image_shop.`id_image` AND il.`id_lang` = ' . (int) $cart->id_lang);
        if($ajaxAddCart)
            $sql->orderBy('ca.date_add DESC');
        $result = Db::getInstance()->executeS($sql);

        // Reset the cache before the following return, or else an empty cart will add dozens of queries
        $products_ids = [];
        $pa_ids = [];
        if ($result) {
            foreach ($result as $key => $row) {
                $products_ids[] = $row['id_product'];
                $pa_ids[] = $row['id_product_attribute'];
                $specific_price = SpecificPrice::getSpecificPrice($row['id_product'], $cart->id_shop, $cart->id_currency, $id_country, $cart->id_shop_group, $row['cart_quantity'], $row['id_product_attribute'], $cart->id_customer, $cart->id);
                if ($specific_price) {
                    $reduction_type_row = ['reduction_type' => $specific_price['reduction_type']];
                } else {
                    $reduction_type_row = ['reduction_type' => 0];
                }

                $result[$key] = array_merge($row, $reduction_type_row);
            }
        }
        // Thus you can avoid one query per product, because there will be only one query for all the products of the cart
        Product::cacheProductsFeatures($products_ids);
        Cart::cacheSomeAttributesLists($pa_ids, $cart->id_lang);

        if (empty($result)) {
            $cart->_products = [];

            return [];
        }

        if ($fullInfos) {
            $cart_shop_context = Context::getContext()->cloneContext();

            $givenAwayProductsIds = [];
            $cart->_products = [];
            if($result)
            {
                $attribute_detail_title = Configuration::get('ETS_ETO_DETAIL_ATTRIBUTE_TITLE',Context::getContext()->language->id) ?: $this->l('Extra options');
                foreach ($result as &$row) {
                    if (!array_key_exists('is_gift', $row)) {
                        $row['is_gift'] = false;
                    }
    
                    $additionalRow = Product::getProductProperties((int) $cart->id_lang, $row);
                    $row['reduction'] = $additionalRow['reduction'];
                    $row['reduction_without_tax'] = $additionalRow['reduction_without_tax'];
                    $row['price_without_reduction'] = $additionalRow['price_without_reduction'];
                    $row['specific_prices'] = $additionalRow['specific_prices'];
                    unset($additionalRow);
    
                    $givenAwayQuantity = 0;
                    $giftIndex = $row['id_product'] . '-' . $row['id_product_attribute'];
                    if ($row['is_gift'] && array_key_exists($giftIndex, $givenAwayProductsIds)) {
                        $givenAwayQuantity = $givenAwayProductsIds[$giftIndex];
                    }
    
                    if (!$row['is_gift'] || (int) $row['cart_quantity'] === $givenAwayQuantity) {
                        $row = $cart->applyProductCalculations($row, $cart_shop_context,null,$keepOrderPrices);
                    } else {
                        // Separate products given away from those manually added to cart
                        $cart->_products[] = $cart->applyProductCalculations($row, $cart_shop_context, $givenAwayQuantity,$keepOrderPrices);
                        unset($row['is_gift']);
                        $row = $cart->applyProductCalculations(
                            $row,
                            $cart_shop_context,
                            $row['cart_quantity'] - $givenAwayQuantity,
                            $keepOrderPrices
                        );
                    }
                    if($row['id_combination'])
                    {
                        $customPrice = Ets_eto_combination_class::getPriceProductCustom($row['id_product'],$row['id_combination'],false);
                        $customPriceTaxIncl = Ets_eto_combination_class::getPriceProductCustom($row['id_product'],$row['id_combination'],true);
                        $customPrice_without_reduction = Ets_eto_combination_class::getPriceProductCustom($row['id_product'],$row['id_combination'],false,false);
                        $customPriceTaxIncl_without_reduction = Ets_eto_combination_class::getPriceProductCustom($row['id_product'],$row['id_combination'],true,false);
                        if($customPrice!==false)
                        {
                            $groups = Ets_eto_combination_class::getAttributeGroups($row['id_combination']);
                            $row['total'] += $customPrice*$row['cart_quantity'];
                            $row['total_wt'] += $customPriceTaxIncl  * $row['cart_quantity'];
                            $row['price'] += $customPrice;
                            $row['price_wt'] += $customPriceTaxIncl;
                            $row['price_without_reduction_without_tax'] += $customPrice_without_reduction;
                            $row['price_with_reduction'] += $customPriceTaxIncl;
                            $row['price_with_reduction_without_tax'] +=$customPrice;
                            $row['price_without_reduction'] += $customPriceTaxIncl_without_reduction;
                            if($groups)
                            {
                                foreach($groups as $group)
                                {
                                    $group_name = $group['id_ets_eto_attr_group'] ? $group['group_name'] :(count($groups)==1 ? $attribute_detail_title: $this->l('Other options'));
                                    if(isset($row['attributes']) && $row['attributes'])
                                        $row['attributes'] .='- '.$group_name.': '.$group['attributes'];
                                    else
                                        $row['attributes'] = $group_name.': '. $group['attributes'];
                                }
                            }

                        }
                        $row['id_customization'] = (int)$row['id_customization'].'-'.$row['id_combination'];
                    }
                    $cart->_products[] = $row;
                    
                }
            }
        } else {
            $cart->_products = $result;
        }
        unset($refresh);
        return $cart->_products;
    }
    public function addCategories($related_categories)
    {
        Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'ets_eto_attr_category` WHERE id_ets_eto_attr='.(int)$this->id);
        if($related_categories)
        {
            foreach($related_categories as $id_category)
            {
                Db::getInstance()->execute('insert ignore `'._DB_PREFIX_.'ets_eto_attr_category`(id_ets_eto_attr,id_category) values("'.(int)$this->id.'","'.(int)$id_category.'")');
            }
        }
        return true;
    }
    public function getRelatedCategories()
    {
        $categories = Db::getInstance()->executeS('SELECT id_category FROM `'._DB_PREFIX_.'ets_eto_attr_category` WHERE id_ets_eto_attr='.(int)$this->id);
        $relatedCategories = array();
        if($categories)
        {
            foreach($categories as $category)
            {
                $relatedCategories[] = $category['id_category'];
            }
        }
        return $relatedCategories;
    }
    public function l($string)
    {
        return Translate::getModuleTranslation('ets_extraoptions', $string, pathinfo(__FILE__, PATHINFO_FILENAME));
    }
}