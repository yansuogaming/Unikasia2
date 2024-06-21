<?php
/**
*  Created by   :
*  @author		: Technical Group (technical@aboutpro.com)
   @modifier    : Luong Tien Dung (tag@vietiso.com)	
*  @date		: 2009/1/18
*  @version		: 2.1.1
*/ 
class TourSeasonPrice extends dbBasic{
	function __construct(){
		global $_LANG_ID;
		$this->pkey = "tour_season_price_id";
		$this->tbl = DB_PREFIX."tour_season_price";
	}
	function getMaxId(){
		$res = $this->getAll("1=1 order by tour_season_price_id desc");
		return intval($res[0]['tour_price_cruise_col_id'])+1; 
	}
	function getMaxOrderNo(){
		$res = $this->getAll("1=1 order by order_no desc");
		return intval($res[0]['order_no'])+1; 
	}
	function getTitle($tour_season_price_id){
		$one = $this->getOne($tour_season_price_id,'title');
		return $one['title'];
	}
}
?>