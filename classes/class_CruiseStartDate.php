<?php
/**
*  Created by   :
*  @author		: Technical Group (technical@aboutpro.com)
   @modifier    : Luong Tien Dung (tag@vietiso.com)	
*  @date		: 2009/1/18
*  @version		: 2.1.1
*/ 
class CruiseStartDate extends dbBasic{
	function __construct(){
		$this->pkey = "cruise_start_date_id";
		$this->tbl = DB_PREFIX."cruise_start_date";
	}
	function getMaxId(){
		$res = $this->getAll("1=1 order by cruise_start_date_id desc");
		return intval($res[0]['cruise_start_date_id'])+1; 
	}
	function getMaxOrderNo(){
		$res = $this->getAll("1=1 order by order_no desc");
		return intval($res[0]['order_no'])+1; 
	}
	function getTitle($tour_price_col_id){
		$one = $this->getOne($tour_price_col_id,'title');
		return $one['title'];
	}
	function getTripCode($cruise_start_date_id){
		$start_date = $this->getOneField('start_date',$cruise_start_date_id);
		$date =  date('d',$start_date).date('m',$start_date).date('y',$start_date);
		$clsCruise = new Cruise();
		return 'CR-'.$date; 
	}
	function getEndDate($cruise_start_date_id){
		$clsCruise = new Cruise();
		$start_date = $this->getOneField('start_date',$cruise_start_date_id);
		$cruise_id = $this->getOneField('cruise_id',$cruise_start_date_id);
		if($this->getOneField('end_date',$cruise_start_date_id)==0)
			return $start_date+24*60*60;
		else
			return $this->getOneField('end_date',$cruise_start_date_id);  
	}
	function getEndDateDefault($cruise_start_date_id){
		$clsCruise = new Cruise();
		$start_date = $this->getOneField('start_date',$cruise_start_date_id);
		$cruise_id = $this->getOneField('cruise_id',$cruise_start_date_id);
		return $start_date+24*60*60; 
	}
}
?>