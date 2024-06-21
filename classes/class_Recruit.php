<?php
class Recruit extends dbBasic{
	function __construct(){
		$this->pkey = "recruit_id";
		$this->tbl = DB_PREFIX."recruit";
	}
	function getSlash($level){
		return str_repeat("------", $level+1);
	}
	function getTitle($pvalTable){
		$one=$this->getOne($pvalTable);
		return $one['title'];
	}
	function getSlug($pvalTable){
		$one = $this->getOne($pvalTable);
		return $one['slug'];
	}
	function getBySlug($slug){
		$all=$this->getAll("is_trash=0 and (slug_en='$slug' or slug_vn='$slug') order by ".$this->pkey." limit 0,1");
		return $all[0][$this->pkey];
	}
	function getByPermalink($permalink){
		$all=$this->getAll("is_trash=0 and (permalink_en='$permalink' or permalink_vn='$permalink') order by ".$this->pkey." limit 0,1");
		return $all[0][$this->pkey];
	}
	function getLink($pvalTable){
		global $extLang, $_LANG_ID;
		return $extLang.'/recruit/'.$this->getSlug($pvalTable).'.html';
	}
	function getImage($pvalTable,$w,$h){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		if($oneTable['image']!=''){
			$image = $oneTable['image'];
			return '/files/thumb/'.$w.'/'.$h.'/'.$clsISO->parseImageURL($image);
		}
		return URL_IMAGES.'/noimage.png';
	}
	function getIntro($pvalTable){
		$one = $this->getOne($pvalTable);
		return html_entity_decode($one['intro']);
	}
	function getContent($pvalTable){
		$one = $this->getOne($pvalTable);
		return html_entity_decode($one['content']);
	}
	function getStripIntro($pvalTable){
		$one = $this->getOne($pvalTable);
		if(!empty($one['intro']))
			return strip_tags(html_entity_decode($one['intro']));
		return strip_tags(html_entity_decode($one['content']));
	}
	function doDelete($pvalTable){
		// Delete
		$this->deleteOne($pvalTable);
		return 1;
	}
}
?>