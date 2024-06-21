<?php
class Gallery extends dbBasic{
	function Gallery(){
		global $_LANG_ID;
		$this->pkey = "gallery_id";
		$this->tbl = DB_PREFIX."gallery";
	}
	function getTitle($pvalTable){
		$one=$this->getOne($pvalTable,'title');
		return $one['title'];
	}
	function getSlug($pvalTable){
		$one=$this->getOne($pvalTable,'slug');
		return $one['slug'];
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
		$one=$this->getOne($pvalTable,'intro','content');
		if(!empty($one['intro']))
			return strip_tags(html_entity_decode($one['intro']));
		return strip_tags(html_entity_decode($one['content']));
	}
	function getLink($pvalTable, $allow_full_url=1){
		global $_LANG_ID, $extLang;
		return $extLang.'/gallery/'.$this->getSlug($pvalTable).'.html';
	}
	function getListGallery($gallerycat_id){
		$lst = $this->getAll("is_trash=0 and gallerycat_id='$gallerycat_id' order by order_no desc");
		return $lst;
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
		return URL_IMAGES.'/noimage.png';
	}
	function getImageRand1($pvalTable,$i){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		if($oneTable['image']!=''){
			$image = $oneTable['image'];
			if($i==4){
				return '/files/thumb/482/400/'.$clsISO->parseImageURL($image);
			}else{
				return '/files/thumb/231/185/'.$clsISO->parseImageURL($image);
			}
		}
		return URL_IMAGES.'/noimage.png';
	}
	function getImageRand2($pvalTable,$i){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		if($oneTable['image']!=''){
			$image = $oneTable['image'];
			return '/files/thumb/263/185/'.$clsISO->parseImageURL($image);
			if($i==4||$i==8||$i==12||$i==16){
				
			}else{
				return '/files/thumb/357/185/'.$clsISO->parseImageURL($image);
			}
		}
		return URL_IMAGES.'/noimage.png';
	}
	function getLinkVideo($pvalTable){
		$one=$this->getOne($pvalTable);
		return str_replace("https://www.youtube.com/watch?v=","https://youtu.be/", $one['youtube_link']);
	}
	function getLinkVideoIframe($pvalTable){
		$one=$this->getOne($pvalTable);
		return str_replace("https://www.youtube.com/watch?v=","https://www.youtube.com/embed/", $one['youtube_link']);
	}
	function getIDVideo($video_id){
		$one=$this->getOne($video_id,"youtube_link");
		$url_video = $one['link'];
		$id_video = str_replace("https://vimeo.com/","", $url_video);
		return $id_video;
	}
	function doDelete($pvalTable){
		// Delete News
		$this->deleteOne($pvalTable);
		return 1;
	}
}

?>