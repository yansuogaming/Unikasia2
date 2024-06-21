<?php


class TagModule extends dbBasic{
	function __construct(){
		$this->pkey = "tag_module_id";
		$this->tbl = DB_PREFIX."tag_module";
	}
	function checkExist($tag_id,$for_id,$type){
		$res = $this->getAll("tag_id='$tag_id' and for_id='$for_id' and type = '$type' limit 0,1");
		return (!empty($res)) ? 1 : 0;
	}
	function getId($tag_id,$for_id,$type){
		$res = $this->getAll("tag_id='$tag_id' and for_id='$for_id' and type = '$type' limit 0,1");
		return $res[0][$this->pkey];
	}
	function getTag($for_id,$type){
		$res = $this->getAll("for_id='$for_id' and type = '$type' order by tag_module_id ASC");
		return $res;
	}
}