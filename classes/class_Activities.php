<?php
class Activities extends dbBasic{
	function __construct(){
		$this->pkey = "activities_id";
		$this->tbl = DB_PREFIX."activities";
	}
	function getTitle($activities_id){
		$one = $this->getOne($activities_id,'title');
		return $one['title'];
	}
	function getPrice($activities_id){
		global $clsISO;
		$one = $this->getOne($activities_id,'price');
		return $clsISO->formatPrice($one['price']);
	}
	function getPriceOrgin($activities_id){
		global $clsISO;
		$one = $this->getOne($activities_id,'price');
		return $clsISO->processSmartNumber($one['price']);
	}
	function getMetaDescription($pvalTable){
		global $_LANG_ID;
		$one=$this->getOne($pvalTable,'intro');
		return html_entity_decode($one['intro']);
	}
	function getIntro($activities_id){
		$one = $this->getOne($activities_id,'intro');
		return $one['intro'];
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
	function getUrlImage($pvalTable){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		$url_image = $oneTable['image'];
		return $clsISO->tripslashUrl($url_image);
	}
	function getNumAvailableBooking($activities_id){
		$BOOK_ADDON = vnSessionGetVar('BOOK_ADDON');
		if(empty($BOOK_ADDON)) return 0;
		$num = 0;
		foreach($BOOK_ADDON as $k => $v){
			if(intval($activities_id) > 0 && $k==$activities_id){
				$num = $v;
				break;
			}
		}
		return $num;
	}
	function doDelete($pvalTable){
		$clsISO = new ISO();
		#
		$image = $this->getOneField("image",$pvalTable);
		if(trim($image) != ''){
			if($clsISO->checkContainer($image, DOMAIN_NAME)){
				$image = $_SERVER['DOCUMENT_ROOT'].$clsISO->parseImageURL($image,false);
				$clsISO->deleteFile($image);
				$image = $_SERVER['DOCUMENT_ROOT'].$clsISO->parseImageURL($image,false);
				$clsISO->deleteFile($image);
			}
		}
		#
		$this->deleteOne($pvalTable);
		return 1;
	}
}
?>