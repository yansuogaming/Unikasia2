<?php
/**
*  Created by   :
*  @author		: Technical Group (technical@aboutpro.com)
   @modifier    : Luong Tien Dung (tag@vietiso.com)	
*  @date		: 2009/1/18
*  @version		: 2.1.1
*/ 
class TourPriceCustomerType extends dbBasic{
	function __construct(){
		$this->pkey = "tour_price_customer_type_id";
		$this->tbl = DB_PREFIX."tour_price_customer_type";
	}
	function getMaxId(){
		$res = $this->getAll("1=1 order by tour_price_customer_type_id desc");
		return intval($res[0]['tour_price_customer_type_id'])+1; 
	}
	function getMaxOrderNo(){
		$res = $this->getAll("1=1 order by order_no desc");
		return intval($res[0]['order_no'])+1; 
	}
	function getTitle($tour_price_customer_type_id){
		$one = $this->getOne($tour_price_customer_type_id,'title');
		return $one['title'];
	}
	
}
?>