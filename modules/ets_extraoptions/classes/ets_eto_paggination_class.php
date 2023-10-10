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
class Ets_eto_paggination_class {
	public $total = 0;
	public $page = 1;
	public $limit = 20;
	public $num_links = 10;
	public $url = '';
	public $text = 'Showing {start} to {end} of {total} ({pages} Pages)';
	public $text_first = '<span>|&lt;</span>';
	public $text_last = '<span>&gt;|</span>';
	public $text_next = '<span>&gt;</span>';
	public $text_prev = '<span>&lt;</span>';
	public $style_links = 'links';
	public $style_results = 'results';
    public $alias;
    public $friendly;
    public function __construct()
    {
        $this->alias = false;
        $this->friendly = false;        
    }
	public function render() {
	    
		$total = $this->total;
		if($total<=1)
            return false;
		if ($this->page < 1) {
			$page = 1;
		} else {
			$page = $this->page;
		}
		
		if (!(int)$this->limit) {
			$limit = 10;
		} else {
			$limit = $this->limit;
		}
		
		$num_links = $this->num_links;
		$num_pages = ceil($total / $limit);
		
		$output = '';
		
		if ($page > 1) {
			$output .= Module::getInstanceByName('ets_extraoptions')->displayText($this->text_first,'a','frist',null,$this->replacePage(1)).Module::getInstanceByName('ets_extraoptions')->displayText($this->text_prev,'a','prev',null,$this->replacePage($page-1));
    	}

		if ($num_pages > 1) {
			if ($num_pages <= $num_links) {
				$start = 1;
				$end = $num_pages;
			} else {
				$start = $page - floor($num_links / 2);
				$end = $page + floor($num_links / 2);
			
				if ($start < 1) {
					$end += abs($start) + 1;
					$start = 1;
				}
						
				if ($end > $num_pages) {
					$start -= ($end - $num_pages);
					$end = $num_pages;
				}
			}

			if ($start > 1) {
				$output .= ' .... ';
			}

			for ($i = $start; $i <= $end; $i++) {
				if ($page == $i) {
					$output .= Module::getInstanceByName('ets_extraoptions')->displayText($i,'b');
				} else {
					$output .= Module::getInstanceByName('ets_extraoptions')->displayText($i,'a',null,null,$this->replacePage($i));
				}	
			}
							
			if ($end < $num_pages) {
				$output .= ' .... ';
			}
		}
		
   		if ($page < $num_pages) {
			$output .= Module::getInstanceByName('ets_extraoptions')->displayText($this->text_next,'a','next',null,$this->replacePage($page+1)).Module::getInstanceByName('ets_extraoptions')->displayText($this->text_last,'a','last',null,$this->replacePage($num_pages));
		}
		
		$find = array(
			'{start}',
			'{end}',
			'{total}',
			'{pages}'
		);
		
		$replace = array(
			($total) ? (($page - 1) * $limit) + 1 : 0,
			((($page - 1) * $limit) > ($total - $limit)) ? $total : ((($page - 1) * $limit) + $limit),
			$total, 
			$num_pages
		);
		if($num_pages==1)
            $this->text = 'Showing {start} to {end} of {total} ({pages} Page)';
		return ($output ? Module::getInstanceByName('ets_extraoptions')->displayText($output,'div','links') : '') .Module::getInstanceByName('ets_extraoptions')->displayText(str_replace($find, $replace, $this->text),'div','results');
	}
    public function replacePage($page)
    {
        return str_replace('_page_', $page, $this->url);
    }
}
?>