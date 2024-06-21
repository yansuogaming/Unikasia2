<?php
class ImageSize extends dbBasic{
	function __construct(){
		$this->pkey = "image_size_id";
		$this->tbl = DB_PREFIX."image_size";
	}
	function getMaxId(){
		$res = $this->getAll("1=1 order by image_size_id desc");
		return intval($res[0]['email_id'])+1;
	}
	function makeSelectTypeImageSize($selected=''){
		$_month = array(
			'_TOUR'	=>	'Tour',
			'_DESTINATION'	=>	'Destination',
			'_CITY'	=>	'City',
			'_COUNTRY'	=>	'Country'
		);
		$html = '';
		foreach($_month as $k=>$v){
			$html .= '<option value="'.$k.'" '.($selected==$k ? 'selected="selected"':'').'>'.$v.'</option>';	
		}
		return $html;	
	}
	function makeSelectboxOption($selected=''){
		$res = $this->getAll("type='_TOUR' order by width asc");
		$html='<option value=""><<  Lựa chọn  >></option>';
		if(!empty($res)){
			foreach($res as $item){
				$sl = ($selected==$item[$this->pkey])?'selected="selected"':'';
				$html.='<option value="'.$item[$this->pkey].'" '.$sl.'>'.$this->getOneField('width',$item[$this->pkey]).'</option>';
			}
		}
		return $html;
	}
	function getDimension($type){
		$one = $this->getAll("type='$type' limit 0,1");
		$arr['width'] = $one[0]['width'];
		$arr['height'] = $one[0]['height'];
		return $arr;
	}
}
?>