<?php
/**
*  Created by   :
*  @author		: Technical Group (technical@aboutpro.com)
   @modifier    : Luong Tien Dung (tag@vietiso.com)	
*  @date		: 2009/1/18
*  @version		: 2.1.1
*/ 
class CruisePriceCol extends dbBasic{
	function __construct(){
		$this->pkey = "cruise_price_col_id";
		$this->tbl = DB_PREFIX."cruise_price_col";
	}
	function getMaxId(){
		$res = $this->getAll("1=1 order by cruise_price_col_id desc");
		return intval($res[0]['cruise_price_col_id'])+1; 
	}
	function getMaxOrderNo(){
		$res = $this->getAll("1=1 order by order_no desc");
		return intval($res[0]['order_no'])+1; 
	}
	function getTitle($cruise_price_col_id){
		global $_LANG_ID;
		$one = $this->getOne($cruise_price_col_id,'title');
		return $one['title'];
	}
}
?>