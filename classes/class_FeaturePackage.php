<?php
class FeaturePackage extends dbBasic{
	function FeaturePackage(){
		global $_LANG_ID;
		$this->pkey = "feature_package_id";
		$this->tbl = DB_PREFIX."featurepackage";
	}
	function getTitle($pvalTable){
		$one=$this->getOne($pvalTable,'title');
		return $one['title'];
	}
	function getSlug($pvalTable){
		$one=$this->getOne($pvalTable,'slug');
		return $one['slug'];
	}
	function getAction($pvalTable){
		$one=$this->getOne($pvalTable,'act_page');
		return $one['act_page'];
	}
	function getTypePage($pvalTable){
		$one=$this->getOne($pvalTable,'type_page');
		return $one['type_page'];
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
	function getIcon($pvalTable){
		global $clsISO;
		$icon = $this->getOneField('icon',$pvalTable);
		if($icon!='' || $icon !='0'){
			return $clsISO->parseImageURL($icon);
		}
		return  URL_IMAGES.'/noimage.png';
	}
	function getLink($pvalTable, $allow_full_url=1){
		global $_LANG_ID, $extLang;
		return $extLang.'/faqs/'.$this->getSlug($pvalTable).'.html';
	}
	function getListFAQs($feature_package_cat_id){
		$lst = $this->getAll("is_trash=0 and is_online=1 and feature_package_cat_id='$feature_package_cat_id' order by order_no desc");
		return $lst;
	}
	function getChecked($pvalTable,$package_id){
		global $_LANG_ID, $clsISO;
		
		$clsPackage = new Package();
		$list_feature_package_id = $clsPackage->getOneField('list_feature_package_id',$package_id);
		$checked=$clsISO->checkInArray($list_feature_package_id,$pvalTable);
		if($checked==1){
			return '<i class="icon_check"></i>';
		}else{
			return '<i class="icon_minus"></i>';
		}
	}
	function doDelete($pvalTable){
		// Delete News
		$this->deleteOne($pvalTable);
		return 1;
	}
}

?>