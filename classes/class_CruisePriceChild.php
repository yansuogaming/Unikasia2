<?php

class CruisePriceChild extends dbBasic{
	function __construct(){
		$this->pkey = "cruise_price_child_id";
		$this->tbl = DB_PREFIX."cruise_price_child";
	}
	function getTitle($pvalTable,$one=null) {
		if(!isset($one['title'])){
			$one = $this->getOne($pvalTable,'title');	
		}        
        return $one['title'];
    }
	function getMin($pvalTable,$one=null) {
		if(!isset($one['min'])){
			$one=$this->getOne($pvalTable,'min');
		}
		return $one['min'];
	}
	function getMax($pvalTable,$one=null) {
		if(!isset($one['max'])){
			$one=$this->getOne($pvalTable,'max');
		}
		return $one['max'];
	}
}