<?php
class TemplateTag extends dbBasic{
	function __construct(){
		$this->pkey = "template_tag_id";
		$this->tbl = DB_PREFIX."template_tag";
	}
	function getMaxOrderNo(){
		$all=$this->getAll("1=1 order by order_no desc");
		return intval($all[0]['order_no'])+1;
	}
	function getTitle($pval){
		global $_LANG_ID;
		$one=$this->getOne($pval);
		return $one['title'];
	}
	function getReplaceTag($pval){
		global $_LANG_ID;
		$one=$this->getOne($pval);
		return $one['replace_tag'];
	}
}
?>