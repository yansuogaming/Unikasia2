<?php
/**
*  Created by   :
*  @author		: Technical Group (technical@aboutpro.com)
   @modifier    : Luong Tien Dung (tag@vietiso.com)	
*  @date		: 2009/1/18
*  @version		: 2.1.1
*/ 
class CruiseMapImage extends dbBasic{
	function __construct(){
		$this->pkey = "cruise_map_image_id";
		$this->tbl = DB_PREFIX."cruise_map_image";
	}
	function getMaxOrderNoByTable($table_id){
		$res=$this->getAll("is_trash=0 and table_id='$table_id' order by order_no desc limit 0,1");
		return intval($res[0]['order_no'])+1;
	}
	function getMinOrderNo($table_id){
		$listTable=$this->getAll("is_trash=0 and table_id='$table_id'", $this->pkey.",order_no");
		for ($i = 0; $i <= count($listTable); $i++) {
			$order_no=$listTable[$i]['order_no'] + 1;
			$this->updateOne($listTable[$i][$this->pkey],"order_no='".$order_no."'");
		}
		$res=$this->getAll("is_trash=0 and table_id='$table_id' order by order_no ASC limit 0,1");
		$min_order_no=intval($res[0]['order_no']);
		return $min_order_no > 1?($min_order_no - 1):1;
	}
	function countImage($table_id){
		$number = 0;
		$all = $this->getAll("is_trash=0 and table_id='$table_id'");
		$number = $all[0][$this->pkey]!=''?count($all):0;
		return $number;
	}
	function getTitle($table_id){
		$one=$this->getOne($table_id,'title,image');
		if($one['title']!=''){
			return $one['title'];
		}else{
			$image= basename($one['image']); 
			$path_parts = pathinfo($image);
			return $path_parts['filename'];
		}
	}
	function getSlug($table_id){
		global $core;
		$one=$this->getOne($table_id,'title');
		return ($one['title']!='')?$core->replaceSpace($one['title']):'photo-gallery';
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
	function getUrlImage($pvalTable){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		$url_image = $oneTable['image'];
		return $clsISO->tripslashUrl($url_image);
	}
	function getImageUrl($pvalTable){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		$url_image = $oneTable['image'];
		return $clsISO->tripslashUrl($url_image);
	}
	function deleteFile($path){
		$conn = ftp_connect(ftp_host_info) or die("Could not connect");
		ftp_login($conn,ftp_usr_info,ftp_pwd_info);
		echo ftp_delete($conn,str_replace(ftp_abs_path_info,'',$path));
		ftp_close($conn);
	}
	function doDelete($pvalTable){
		#
		$this->deleteOne($pvalTable);
		return 1;
	}
}?>