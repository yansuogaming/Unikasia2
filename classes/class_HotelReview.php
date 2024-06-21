<?php

/**
 *  Created by   :
 *  @author		: Technical Group (technical@aboutpro.com)
 *  @date		: 2009/1/18
 *  @version		: 2.1.1
 */
class HotelReview extends dbBasic {
    function __construct() {
        $this->pkey = "hotel_review_id";
        $this->tbl = DB_PREFIX . "hotel_review";
    }
    function checkExist($hotel_id, $slug) {
        $res = $this->getAll("hotel_id='$hotel_id' and slug='$slug' limit 0,1");
        return (!empty($res)) ? 1 : 0;
    }
    function checkRoomFacility($property_id, $room_facility) {
        if ($property_id == '' || $room_facility == '') {
            return 0;
        }
        $room_facility = ltrim($room_facility, '|');
        if ($room_facility == '') {
            return 0;
        }
        $tmp = explode('|', $room_facility);
        if (!empty($tmp)) {
            if (!in_array($property_id, $tmp))
                return 0;
            return 1;
        }else {
            return 0;
        }
    }
    function getTitle($pvalTable) {
        $one = $this->getOne($pvalTable,'title');
        return $one['title'];
    }
		function getName($pvalTable) {
        $one = $this->getOne($pvalTable,'name');
        return $one['name'];
    }
    function getRateNote($pvalTable) {
        $one = $this->getOne($pvalTable,'rate_note');
        return $one['rate_note'];
    }
    function getRateInclude($pvalTable) {
        global $_LANG_ID;
        $one = $this->getOne($pvalTable,'rate_include');
        return $one['rate_include'];
    }
    function getIntro($pvalTable) {
        $one = $this->getOne($pvalTable,'intro');
        return $one['intro'];
    }
		function getCountReview($hotel_id) {
       	return $this->countItem("hotel_id='$hotel_id'");
    }
		function getPointAvg($hotel_id) {
			global $dbconn;
			$SQL = "SELECT SUM(point) FROM ".DB_PREFIX."hotel_review WHERE hotel_id='$hotel_id'";
			$totalPoint = $dbconn->getOne($SQL);
      $countReview = $this->countItem("hotel_id='$hotel_id'");
			return $totalPoint/$countReview;
    }
		function getTextRate($hotel_id){
			global $core;
			$pointAvg = $this->getPointAvg($hotel_id);	
			if($pointAvg>=9)
				return 	$core->get_Lang("Excellent");
			if($pointAvg>=8 && $pointAvg<9)
				return 	$core->get_Lang("Very good");
			if($pointAvg>=7 && $pointAvg<8)
				return 	$core->get_Lang("Good");
			if($pointAvg>=5 && $pointAvg<7)
				return 	$core->get_Lang("Average");
			if($pointAvg>=3 && $pointAvg<5)
				return 	$core->get_Lang("Poor");
				if($pointAvg<3)
				return 	$core->get_Lang("Terrible");
		}
		function getTextRateByPoint($hotel_review_id){
			global $core;
			if($hotel_review_id>=9)
				return 	$core->get_Lang("Excellent");
			if($hotel_review_id>=8 && $hotel_review_id<9)
				return 	$core->get_Lang("Very good");
			if($hotel_review_id>=7 && $hotel_review_id<8)
				return 	$core->get_Lang("Good");
			if($hotel_review_id>=5 && $hotel_review_id<7)
				return 	$core->get_Lang("Average");
			if($hotel_review_id>=3 && $hotel_review_id<5)
				return 	$core->get_Lang("Poor");
				if($hotel_review_id<3)
				return 	$core->get_Lang("Terrible");
		}
	
	function getListType(){
		global $core;
		$lstType = array();
		$lstType['PROMOTION'] = $core->get_Lang('Room Promotion');
		$lstType['BREAKFAST'] = $core->get_Lang('Room including breakfast');
		return $lstType;
	}
	
	function getImage($pvalTable,$w,$h){
		global $clsISO;
		#
		$oneTable = $this->getOne($pvalTable, "image");
		if($oneTable['image']!=''){
			$image = $oneTable['image'];
			return '/files/thumb/'.$w.'/'.$h.'/'.$image;
		}
		//return URL_IMAGES.'/none_image.png';
		return 0;
	}
   
}
?>