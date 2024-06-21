<?php
class AddOnService extends dbBasic{
	function __construct(){
		$this->pkey = "addonservice_id";
		$this->tbl = DB_PREFIX."addonservice";
	}
	function getTitle($addonservice_id){
		$one = $this->getOne($addonservice_id,'title');
		return $one['title'];
	}
    function getStrPrice($addonservice_id){
        global $clsISO;
        $one = $this->getOne($addonservice_id,'price');
        $extra_one= $this->getOne($addonservice_id,'extra');
        $extra_id= $extra_one['extra'];
        if ($extra_id != '0') {
            return $one['price'];
        }else{
            return 0;
        }
    }
	function getPrice($addonservice_id){
		global $clsISO;
		$one = $this->getOne($addonservice_id,'price');
            return $clsISO->formatPrice($one['price']);
       
	}
	function getPriceOrgin($addonservice_id){
		global $clsISO;
		$one = $this->getOne($addonservice_id,'price');
		return $clsISO->processSmartNumber($one['price']);
	}
	function getMetaDescription($pvalTable){
		global $_LANG_ID;
		$one=$this->getOne($pvalTable,'intro');
		return html_entity_decode($one['intro']);
	}
	function getIntro($addonservice_id){
		$one = $this->getOne($addonservice_id,'intro');
		return html_entity_decode($one['intro']);
	}
	function getExtra($addonservice_id){
		$one = $this->getOne($addonservice_id,'extra');
		return html_entity_decode($one['extra']);
	}
    function getNameExtra($addonservice_id){
        global $core;
        $one = $this->getOne($addonservice_id,'extra');
        $oneID =$one['extra'];
        if($oneID == '2'){
            return $core->get_Lang('Factor Number Guests');
        }elseif ($oneID == '1'){
            return $core->get_Lang('Factor 1');
        }else{
            return $core->get_Lang('Includedz');
        }

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
	function getNumAvailableBooking($addonservice_id){
		$BOOK_ADDON = vnSessionGetVar('BOOK_ADDON');
		if(empty($BOOK_ADDON)) return 0;
		$num = 0;
		foreach($BOOK_ADDON as $k => $v){
			if(intval($addonservice_id) > 0 && $k==$addonservice_id){
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