<?php
class ImageThumb extends dbBasic{
	function __construct(){
		$this->pkey = "image_thumb_id";
		$this->tbl = DB_PREFIX."image_thumb";
	}
	function getTitle($image_thumb_id){
		global $_LANG_ID;
		return $this->getOneField('title',$image_thumb_id);
	}
	function getImage($image_thumb_id){
		global $_LANG_ID;
		$one = $this->getOne($image_thumb_id,'image');
		if($one['image']!='')
			return $one['image'];
	}
	function getMaxId(){
		$res = $this->getAll("1=1 order by image_thumb_id desc");
		return intval($res[0]['email_id'])+1;
	}
	function makeSelectTour($selected=''){
		$clsTour = new Tour();
		$res = $clsTour->getAll("is_trash=0 order by order_no asc");
		$html='<option value=""><<  Lựa chọn  >></option>';
		if(!empty($res)){
			foreach($res as $item){
				$sl = ($selected==$item[$clsTour->pkey])?'selected="selected"':'';
				$html.='<option value="'.$item[$clsTour->pkey].'" '.$sl.'>'.$clsTour->getTitle($item[$clsTour->pkey]).'</option>';
			}
		}
		return $html;	
	}
}
?>