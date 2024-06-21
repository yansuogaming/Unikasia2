<?php
/**
*  Created by   :
*  @author		: Technical Group (technical@aboutpro.com)
   @modifier    : Luong Tien Dung (tag@vietiso.com)	
*  @date		: 2009/1/18
*  @version		: 2.1.1
*/ 
class HotelPriceRow extends dbBasic{
	function __construct(){
		$this->pkey = "hotel_price_row_id";
		$this->tbl = DB_PREFIX."hotel_price_row";
	}
	function getMaxId(){
		$res = $this->getAll("1=1 order by hotel_price_row_id desc");
		return intval($res[0]['hotel_price_row_id'])+1;
	}
	
	function getMaxOrderNo(){
		$res = $this->getAll("1=1 order by order_no desc");
		return intval($res[0]['order_no'])+1; 
	}
	function getTitle($tour_price_row_id){
		$one = $this->getOne($tour_price_row_id,'title');
		return $one['title'];
	}
	
}
?>