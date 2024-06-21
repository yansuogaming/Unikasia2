<?php
class YearJourney extends dbBasic{
	function __construct(){
		$this->pkey = "year_journey_id";
		$this->tbl = DB_PREFIX."year_journey";
	}
	function getTitle($pvalTable, $_args= array()){
		global $_LANG_ID;
		if(is_array($_args) && $_args['title'] != ''){
			return $_args['title'];
		}else{
			$one=$this->getOne($pvalTable,"title");
			return $one['title'];
		}
	}
	function getIntro($pvalTable, $_args= array()){
		global $_LANG_ID;
		if(is_array($_args) && $_args['intro'] != ''){
			return $_args['intro'];
		}else{
			$one=$this->getOne($pvalTable,"intro");
			return html_entity_decode($one['intro']);
		}
	}
	function getLink($pvalTable, $_args= array()){
		global $_LANG_ID;
		if(is_array($_args) && $_args['link'] != ''){
			return $_args['link'];
		}else{
			$one=$this->getOne($pvalTable,"link");
			return $one['link'];
		}
	}
	function getImage($pvalTable, $w, $h,$oneTable=null){
		global $clsISO,$deviceType;
		if(!isset($oneTable['image'])){
			$oneTable = $this->getOne($pvalTable,'image');	
		}		
		if($oneTable['image']!=''){
			$image = $oneTable['image'];
			return '/files/thumb/'.$w.'/'.$h.'/'.$clsISO->parseImageURL($image);
		}
		$noimage = URL_IMAGES.'/noimage.png';
		return '/files/thumb/'.$w.'/'.$h.'/'.$clsISO->parseImageURL($noimage);
	}
	function getImage2($pvalTable){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		return $oneTable['image'];
	}
	function getIcon($pvalTable,$oneTable=null){
		global $clsISO;
		if(!isset($oneTable['icon'])){
			$oneTable = $this->getOne($pvalTable, "icon");	
		}		
		return $oneTable['icon'];
	}
	function getYear($pvalTable){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "year");
		return $oneTable['year'];
	}
	function getImageUrl($pvalTable){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		return $oneTable['image'];
	}
	function doDelete($pvalTable_id) {
        $this->deleteOne($pvalTable_id);
        return 1;
    }
}
?>