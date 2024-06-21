<?php
class Download extends dbBasic{
	function __construct(){
		global $_LANG_ID;
		$this->pkey = "download_id";
		$this->tbl = DB_PREFIX."download";
	}
	function getTitle($download_id,$one=null){
		global $_LANG_ID;
		if(!isset($one['title'])){
			$one=$this->getOne($download_id,'title');	
		}		
		return $one['title'];
	}
	function getMetaDescription($pvalTable){
		global $_LANG_ID;
		$one=$this->getOne($pvalTable,'intro');
		return html_entity_decode($one['intro']);
	}
	function getIntro($download_id,$one=null){
		global $_LANG_ID;
		if(!isset($one['intro'])){
			$one=$this->getOne($download_id,'intro');
		}
		return html_entity_decode($one['intro']);
	}
	function getFileSize($download_id,$type='KB',$one=null){
		global $_LANG_ID;
		if(!isset($one['attachment_file'])){
			$one=$this->getOne($download_id,'attachment_file');
		}
		if($type=='MB'){
			$filesize = number_format(filesize(ABSPATH.$one['attachment_file'])/1024/1024);
		}else{
			$filesize = number_format(filesize(ABSPATH.$one['attachment_file'])/1024);
		}
		return $filesize.' '.$type;
		
	}
	function getFileExtension($download_id,$one=null){
		global $_LANG_ID;
		if(!isset($one['attachment_file'])){
			$one=$this->getOne($download_id,'attachment_file');
		}
		$arr= explode(".", $one['attachment_file']);
		return end($arr);
	}
	function doDelete($pvalTable){
		$clsISO = new ISO();
		#
		$this->deleteOne($pvalTable);
		return 1;
	}
}
?>