<?php
class CruiseVideo extends dbBasic{
	function __construct(){
		$this->pkey = "cruise_video_id";
		$this->tbl = DB_PREFIX."cruise_video";
	}
	function getMaxId(){
		$res = $this->getAll("1=1 order by cruise_video_id desc");
		return intval($res[0]['cruise_video_id'])+1;
	}
	function getMaxOrder(){
		$res = $this->getAll("1=1 order by order_no desc");
		return intval($res[0]['order_no'])+1;
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
	function getLink($table_id){
		$one=$this->getOne($table_id);
		if($one['url']!=''){
			return $one['url'];
		}else{
			$image= basename($one['image']); 
			$path_parts = pathinfo($image);
			return $path_parts['filename'];
		}
	}
	function getLinkVideo($pvalTable){
		$one=$this->getOne($pvalTable);
		return str_replace("https://www.youtube.com/watch?v=","https://youtu.be/", $one['url']);
	}
	function getLinkVideoIframe($pvalTable){
		$one=$this->getOne($pvalTable);
		return str_replace("https://www.youtube.com/watch?v=","https://www.youtube.com/embed/", $one['url']);
	}
	function getSlug($table_id){
		global $core;
		$one=$this->getOne($table_id);
		return ($one['title']!='')?$core->replaceSpace($one['title']):'photo-gallery';
	}	
	function getIDVideoYoutube($pvalTable,$one=null){
		if(!isset($one['url'])){
			$one=$this->getOne($pvalTable,"url");	
		}		
		$url_video = $one['url'];
		$id_video = str_replace("https://www.youtube.com/watch?v=","", $url_video);
		$id_video = str_replace("https://www.youtube.com/embed/","", $url_video);
		return $id_video;
	}
	function getImage($pvalTable, $w, $h){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		if($oneTable['image']!=''){
			$image = $oneTable['image'];
			return $clsISO->tripslashImage($image,$w,$h);
			$noimage = URL_IMAGES.'/noimage.png';
			return '/files/thumb/'.$w.'/'.$h.'/'.$clsISO->parseImageURL($noimage);
		}
		return 'https://img.youtube.com/vi/'.$this->getIDVideoYoutube($pvalTable).'/maxresdefault.jpg';
		$noimage = URL_IMAGES.'/noimage.png';
		return '/files/thumb/'.$w.'/'.$h.'/'.$clsISO->parseImageURL($noimage);
	}
	function getUrlImage($pvalTable){
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