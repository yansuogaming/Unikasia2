<?php
class Science extends dbBasic{
	function __construct(){
		global $_LANG_ID;
		$this->pkey = "science_id";
		$this->tbl = DB_PREFIX."science";
	}
	function checkOnline($science_id) {
        $res = $this->getAll("science_id = '$science_id' and is_trash=0 and is_online=1 LIMIT 0,1");
        return !empty($res) ? 1 : 0;
    }
	function getTitle($pvalTable){
		$one=$this->getOne($pvalTable,'title');
		return $one['title'];
	}
	function getSlug($pvalTable){
		$one=$this->getOne($pvalTable,'slug');
		return $one['slug'];
	}
	function getRegDate($pvalTable) {
		$one=$this->getOne($pvalTable,'reg_date');
		return date('d M, Y',$one['reg_date']);
	}
	function getMetaDescription($pvalTable){
		global $_LANG_ID;
		$one=$this->getOne($pvalTable,'intro');
		return html_entity_decode($one['intro']);
	}
	function getIntro($pvalTable){
		$one=$this->getOne($pvalTable,'intro');
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
	function getLink($pvalTable, $allow_full_url=1){
		global $_LANG_ID, $extLang;
		if($_LANG_ID=='vn')
			return $extLang.'/kien-thuc/'.$this->getSlug($pvalTable).'-s'.$pvalTable.'.html';
		return $extLang.'/science/'.$this->getSlug($pvalTable).'-s'.$pvalTable.'.html';
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
    function getLogoScience($pvalTable){
        global $clsISO;
        $oneTable = $this->getOne($pvalTable, "logo_science");
        $logo_science = $oneTable['logo_science'];
        return $clsISO->tripslashUrl($logo_science);
    }
	function getUrlImage($pvalTable){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		$url_image = $oneTable['image'];
		return $clsISO->tripslashUrl($url_image);
	}
	function getListScience($science_cat_id){
		$lst = $this->getAll("is_trash=0 and science_cat_id='$science_cat_id' order by order_no desc");
		return $lst;
	}
	function doDelete($science_id){
		// Delete Science
		$this->deleteOne($science_id);
		return 1;
	}
}
?>