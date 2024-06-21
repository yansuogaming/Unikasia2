<?php
class Testimonial extends dbBasic{
	function __construct(){
		$this->pkey = "testimonial_id";
		$this->tbl = DB_PREFIX."testimonial";
	}
	function checkOnlineBySlug($testimonial_id,$slug){
		$item=$this->getAll("is_trash=0 and is_online=1 and testimonial_id='$testimonial_id' and slug='$slug'");
		if(empty($item))
			return 0;
		return 1;
	}
	function getTitle($pvalTable,$one=null){
		if(!isset($one['title'])){
			$one=$this->getOne($pvalTable,'title');	
		}		
		return $one['title'];
	}
	function getSlug($pvalTable){
		$one=$this->getOne($pvalTable,'slug');
		return $one['slug'];
	}
	function getMetaDescription($pvalTable){
		global $_LANG_ID;
		$one=$this->getOne($pvalTable,'intro');
		return html_entity_decode($one['intro']);
	}
	function getIntro($pvalTable,$one=null){
		if(!isset($one['intro'])){
			$one=$this->getOne($pvalTable,'intro');
		}		
		return html_entity_decode($one['intro']);
	}
	function getContent($pvalTable){
		$one=$this->getOne($pvalTable,'content');
		return html_entity_decode($one['content']);
	}
	function getStripIntro($pvalTable){
		$one=$this->getOne($pvalTable,'intro,content');
		if(!empty($one['intro']))
			return strip_tags(html_entity_decode($one['intro']));
		return strip_tags(html_entity_decode($one['content']));
	}
	function getRegDate($pvalTable) {
		$one=$this->getOne($pvalTable,'reg_date');
		return date('m/d/Y',$one['reg_date']);
	}
	function getLink($pvalTable,$oneTable=null){
		global $extLang, $_LANG_ID;
		if(!isset($oneTable['slug'])){
			$oneTable = $this->getOne($pvalTable,'slug');
		}
		return $extLang.'/te'.$pvalTable.'-'.$oneTable['slug'].'.html';
	}
	function getName($pvalTable,$one=null){
		if(!isset($one['name'])){
			$one=$this->getOne($pvalTable,'name');	
		}		
		return $one['name'];
	}
	function getCountry($pvalTable,$one=null){
		global $_LANG_ID;
		$clsCountry = new _Country();
		if(!isset($one['country_id'])){
			$one=$this->getOne($pvalTable,'country_id');	
		}		
		return $clsCountry->getTitle($one['country_id']);
	}
	function getRatesStar($pvalTable,$oneTable=null) {
		if(!isset($oneTable['rates'])){
			$oneTable = $this->getOne($pvalTable,'rates');
		}
		$rates=$oneTable['rates'];
		return '<span style="width: '.($rates*20).'%;"></span>';
    }
	function getImage($pvalTable, $w, $h,$oneTable=null) {
        global $clsISO;
        #
	    if(!isset($oneTable['image'])){
			$oneTable = $this->getOne($pvalTable,'image');
		}
        if ($oneTable['image'] != '') {
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
	function doDelete($pvalTable){
		// Delete
		$this->deleteOne($pvalTable);
		return 1;
	}
}
?>