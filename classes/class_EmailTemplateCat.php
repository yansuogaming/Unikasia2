<?php
class EmailTemplateCat extends dbBasic{
	function __construct(){
		$this->pkey = "email_template_cat_id";
		$this->tbl = DB_PREFIX."email_template_cat";
	}
	function getMaxOrderNo(){
		$all=$this->getAll("1=1 order by order_no desc");
		return intval($all[0]['order_no'])+1;
	}
	function getTitle($pval){
		global $_LANG_ID;
		$one=$this->getOne($pval,'title');
		return $one['title'];
	}
	function getContent($pval){
		global $_LANG_ID;
		$one=$this->getOne($pval);
		return $one['content_'.$_LANG_ID];
	}
	function makeSelectboxOption($email_template_cat_id=''){
		global $core;
		$res = $this->getALl("is_trash=0 order by order_no desc");
		$Html='<option value="">-- Chọn danh mục --</option>';
		if(!empty($res)){
			foreach($res as $item){
				$selected = ($email_template_cat_id==$item[$this->pkey])?'selected="selected"':'';
				$Html.='<option title="'.$this->getTitle($item[$this->pkey]).'" value="'.$item[$this->pkey].'" '.$selected.'>'.$this->getTitle($item[$this->pkey]).'</option>';
			}
		}
		return $Html;
	}
}
?>