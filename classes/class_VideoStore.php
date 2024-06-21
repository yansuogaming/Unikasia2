<?php
class VideoStore extends dbBasic{
	function __construct(){
		$this->pkey = "video_store_id";
		$this->tbl = DB_PREFIX."video_store";
	}
	function getMaxId(){
		$res = $this->getAll("1=1 order by video_store_id desc");
		return intval($res[0]['video_store_id'])+1;
	}
	function getMaxOrder($type){
		$res = $this->getAll("1=1 and _type='$type' order by order_no desc");
		return intval($res[0]['order_no'])+1;
	}
	function getListType(){
		global $core;
		$lstType = array();
		$lstType['TOPVIDEO'] = $core->get_Lang('Top Videos');
		return $lstType;
	}
	function getTitle($type){
		$lstType = $this->getListType();
		return $lstType[$type];
	}
	function checkExist($video_id, $type){
		$res = $this->getAll("video_id='$video_id' and _type='$type' limit 0,1");
		return (!empty($res))?1:0;
	}
}
?>