<?php
class Partner extends dbBasic{
	function __construct(){
		global $_LANG_ID;
		$this->pkey = "partner_id";
		$this->tbl = DB_PREFIX."partner";
	}
	function getTitle($partner_id){
		$one = $this->getOne($partner_id,'title');
		return $one['title'];
	}
	function getImage($pvalTable, $w, $h){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		if($oneTable['image']!=''){
			$image = $oneTable['image'];
			return $clsISO->tripslashImage($image,$w,$h);
		}
		$noimage = URL_IMAGES.'/noimage.png';
		return '/files/thumb/'.$w.'/'.$h.'/'.$clsISO->parseImageURL($noimage);
	}
	function getImage1($partner_id){
		$one = $this->getOne($partner_id,"image");
		return $one['image'];
	}
	function getUrlImage($pvalTable,$oneTable=null){
		global $clsISO;
        if(empty($oneTable['image'])){
            $oneTable = $this->getOne($pvalTable, "image");
        }
		
		$url_image = $oneTable['image'];
		return $clsISO->tripslashUrl($url_image);
		//return $clsISO->tripslashUrlWebp($url_image);
	}
	function getLink($partner_id){
		$one = $this->getOne($partner_id,"url");
		return $one['url'];
	}
	function getIntro($partner_id){
		$one = $this->getOne($partner_id,'intro');
		return html_entity_decode($one['intro']);
	}
	function doDelete($pvalTable){
		$this->deleteOne($pvalTable);
		return 1;
	}
}

?>