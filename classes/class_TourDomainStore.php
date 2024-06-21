<?php
class TourDomainStore extends dbBasic{
	function __construct(){
		$this->pkey = "tour_domain_store_id";
		$this->tbl = DB_PREFIX."tour_domain_store";
	}
	function getMaxId(){
		$res = $this->getAll("1=1 order by tour_domain_store_id desc");
		return intval($res[0]['tour_domain_store_id'])+1;
	}
	function getListCatID($tour_id,$domain_id) {
		$res = $this->getAll("tour_id = '$tour_id' and domain_id = '$domain_id' and val='1'");
		return !empty($res)?$res[0]['list_cat_id']:0;
	}
}
?>