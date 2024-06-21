<?php
class Info extends dbBasic{
	function __construct(){
		$this->pkey = "info_id";
		$this->tbl = DB_PREFIX."info";
	}
	function countByCountry($country_id){
		$sql="is_trash=0 and country_id='$country_id'";
		return $this->countItem($sql);
	}
	function countByCity($city_id){
		$sql="is_trash=0 and city_id='$city_id'";
		return $this->countItem($sql);
	}
	function getTitle($pval){
		$one = $this->getOne($pval,'title');
		return $one['title'];
	}
	function getSlug($pval){
		$one = $this->getOne($pval,'slug');
		return $one['slug'];
	}
	function getBySlug($slug){
		$res = $this->getAll("is_trash=0 and (slug_vn='".$slug."' or slug_en='".$slug."')");
		return $res[0]['info_id'];
	}
	function getByAttraction($slug){
		$res = $this->getAll("is_trash=0 and (slug_vn='".$slug."' or slug_en='".$slug."')");
		return $res[0]['pval'];
	}
	function getIntro($pval){
		$res = $this->getOne($pval,'intro');
		return $res['intro']; 
	}
	function getContent($pval){
		$res = $this->getOne($pval,'content');
		return html_entity_decode($res['content']); 
	}
	function getStripContent($pval){
		$res = $this->getOne($pval,'content');
		return strip_tags(html_entity_decode($res['content'])); 
	}
	function getImage($pval,$w,$h){ 
		$one = $this->getOne($pval,'image');
		return $one['image'];
	}
	function getLink($pval){
		$clsCountry=new Country();
		$oneItem=$this->getOne($pval,'country_id');
		return '/destinations/'.$clsCountry->getSlug($oneItem['country_id']).'-travel-tips/'.$this->getSlug($pval).'.html';
	}
}
?>

