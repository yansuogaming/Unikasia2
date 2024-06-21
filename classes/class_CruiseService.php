<?php
class CruiseService extends dbBasic{
	function __construct(){
		$this->pkey = "cruise_service_id";
		$this->tbl = DB_PREFIX."cruise_service";
	}
	function getTitle($pvalTable){
		$one=$this->getOne($pvalTable,'title');
		return $one['title'];
	}
	function getSlug($pvalTable){
		$one=$this->getOne($pvalTable,'slug');
		return $one['slug'];
	}
	function getPrice($pvalTable){
		global $clsISO;
		$one = $this->getOne($pvalTable,'price');
		return $clsISO->formatPrice($one['price']);
	}
	function getPriceNumber($pvalTable){
		global $clsISO;
		$one = $this->getOne($pvalTable,'price');
		return $one['price'];
	}
	function getPriceValue($pvalTable){
		global $clsISO;
		$one = $this->getOne($pvalTable,'price');
		return $one['price'];
	}
	function getIntro($pvalTable){
		$one=$this->getOne($pvalTable,'intro');
		return html_entity_decode($one['intro']);
	}
	function getImage($pvalTable, $w, $h){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		if($oneTable['image']!=''){
			$image = $oneTable['image'];
			return $clsISO->tripslashImage($image,$w,$h);
			$noimage = URL_IMAGES.'/noimage.png';
			return '/files/thumb/'.$w.'/'.$h.'/'.$clsISO->parseImageURL($noimage);
		}
		$noimage = URL_IMAGES.'/noimage.png';
		return '/files/thumb/'.$w.'/'.$h.'/'.$clsISO->parseImageURL($noimage);
	}
	function getUrlImage($pvalTable){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		$url_image = $oneTable['image'];
		return $clsISO->tripslashUrl($url_image);
	}
	function doDelete($pvalTable){
		$this->deleteOne($pvalTable);
	}
}
?>