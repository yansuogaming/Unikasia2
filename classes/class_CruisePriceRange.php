<?php


class CruisePriceRange extends dbBasic{
	function __construct(){
		$this->pkey = "cruise_price_range_id";
		$this->tbl = DB_PREFIX."cruise_price_range";
	}
	function getTitle($cruise_price_range_id){
		$one = $this->getOne($cruise_price_range_id,'title');
		return $one['title'];
	}
	function getMin($cruise_price_range_id){
		$one = $this->getOne($cruise_price_range_id,'min_rate');
		return number_format($one['min_rate']);
	}
	function getMax($cruise_price_range_id){
		$one = $this->getOne($cruise_price_range_id,'max_rate');
		return number_format($one['max_rate']);
	}
	function getSelectPriceRange($selected=''){
		global $core;
		$all=$this->getAll("is_trash=0 order by order_no asc", $this->pkey);
		$html = '';
		if(!empty($all)){
			foreach($all as $item){
				$selected_index=($selected==$item[$this->pkey])?'selected="selected"':'';
				$html.='<option value="'.$item[$this->pkey].'" '.$selected_index.'>'.$this->getTitle($item[$this->pkey]).'</option>';
			}
		}
		return $html;
	}
}