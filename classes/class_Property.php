<?php
class Property extends dbBasic{
	function __construct(){
		$this->pkey = "property_id";
		$this->tbl = DB_PREFIX."property";
	}
	function getMaxOrder($type){
		$res = $this->getAll("1=1 and type='$type' order by order_no desc");
		return intval($res[0]['order_no'])+1;
	}
	function getTitle($pval,$one=null){
		global $_LANG_ID;
		if(!isset($one['title'])){
			return $this->getOneField('title',$pval);
		}else{
			return $one['title'];
		}
		
	}
	function getProperty_code($pval){
		global $_LANG_ID;
		return $this->getOneField('property_code',$pval);
	}
	function getOrder($pval){
		return $this->getOneField('order_no',$pval);
	}
	function getContent($pval){
		global $_LANG_ID;
		return $this->getOneField('content',$pval);
	}
	function getIntro($pval){
		global $_LANG_ID;
		return $this->getOneField('intro',$pval);
	}
	function getBySlug($slug,$type){
		$res = $this->getAll("is_trash=0 and type='$type' and slug='".$slug."'");
		return $res[0]['property_id'];
	}
	function getListType(){
		global $_LANG_ID,$core;
		$listType = array();
        $listType['HotelFacilities'] = $core->get_Lang('HotelFacilities');
        $listType['TypeHotel'] = $core->get_Lang('Hotel Type');
//		$listType['TypeRoom'] = $core->get_Lang('Room Type');
//		$listType['TypeBed'] = $core->get_Lang('Bed Type');
		$listType['RoomFacilities'] = $core->get_Lang('RoomFacilities');
		return $listType;
	}
	function getTextByType($selected='') {
		$lstType = $this->getListType();
		return $lstType[$selected];
	}
	function getSelectByType($selected=''){
		global $core, $core;
		#
		$lstType = $this->getListType();
		$html = '<option value="">Please select</option>';
		foreach($lstType as $key=>$val){
			$selected_index=($selected==$key)?'selected="selected"':'';
			$html .= '<option value="'.$key.'" '.($key=='_S'?'disabled="disabled"':'').' '.$selected_index.'>'.$val.'</option>';
		}
		return $html;
	}
	function getImage($property_id){
		global $_LANG_ID,$clsISO;
		$one = $this->getOne($property_id,'image');
		if($one['image']!='')
			return $clsISO->tripslashUrl($one['image']);
	}

	function getSelectByProperty($type,$selected=''){
		global $core, $core;
		#
        if($type=='Unit'){
            $html='<option value="">'.$core->get_Lang('Unit').'</option>';
        }else{
            $html='<option value="">'.$core->get_Lang('Select').'</option>';
        }
		$all=$this->getAll("is_trash=0 and type='$type' order by order_no desc");
		
		if(!empty($all)){
			$i=0;
			foreach($all as $item){
				$selected_index=($selected==$item[$this->pkey])?'selected="selected"':'';
				$html.='<option value="'.$item[$this->pkey].'" '.$selected_index.'>'.$this->getTitle($item[$this->pkey]).'</option>';
				++$i;
			}
		}
		return $html;
	}
	function getSelectStarByProperty($selected=''){
		global $core, $core;
		#
		$all=$this->getAll("is_trash=0 and type='star_number' order by order_no desc");
		$html='<option value="">Lựa chọn</option>';
		if(!empty($all)){
			$i=0;
			foreach($all as $item){
				$selected_index=($selected==$item[$this->pkey])?'selected="selected"':'';
				$html.='<option value="'.$item[$this->pkey].'" '.$selected_index.'>
							'.$this->getOneField('title_vn',$item[$this->pkey]).'
						</option>';
				++$i;
			}
		}
		return $html;
	}
	function makeOption($cat_id=0, $type='', $selectedid="", $level=0, &$arrHtml){
		global $dbconn;
		$cond = "is_trash=0 and parent_id='".$cat_id."'";
		if($type != ''){
			$cond .= " and type='$type'"; 
		}
		$arrListCat = $this->getAll($cond);
		if (is_array($arrListCat)){
			foreach ($arrListCat as $k => $v){
				$selected = ($v[$this->pkey]==$selectedid)? "selected" : "";
				$value = $v[$this->pkey];
				$option = str_repeat("|---- ", $level). $this->getTitle($v[$this->pkey]);
				$arrHtml[$value] = $option;
				//$this->makeOption($v[$this->pkey], $type, $selectedid, $level+1, &$arrHtml);
			}
			return "";
		}else{
			return "";
		}
	}
	function getListOption($selected=''){
		global $core;
		#
		$arrOptionsCategory = array();
		$this->makeOption(0, "", "", 0, $arrOptionsCategory);
		$html = '<option value=""> << '.$core->get_Lang('Select').' >> </option>';
		foreach ($arrOptionsCategory as $k => $v){
			$selected_index = ($k==$selected)?'selected="selected"':'';
			$oneItem = $this->getOne($k);
			$html .= '<option value="'.$k.'" '.$selected_index.'>'.$v.'</option>';
		}
		return $html;
	}
	function countItemByType($parent_id,$type){
		$res = $this->getAll("parent_id='$parent_id' and type='$type'");
		return !empty($res) ? count($res) : 0;
	}
	function countItem_($cond){
		$res = $this->getAll($cond);
		return !empty($res)?count($res) : 0;
	}
	function checkPropertyAround($pvalTable,$property_id){
		$clsHotelRoom = new HotelRoom();
		$oneItem = $clsHotelRoom->getOne($pvalTable);
		$str = $oneItem['list_RoomFacilities'];
		$str_array = explode('|',$str);
		for($i=0;$i<count($str_array);$i++){
			if($str_array[$i]==$property_id){
				return 1;
			}
		}
		return 0;
	}
	function checkContain($haystack,$needle){
		$pos = strpos($haystack,$needle);

		if($pos === false) {
			return 0;
		}else {
			return 1;
		}
	}
	function doDelete($pvalTable){
		$clsISO = new ISO();
		#
		$image = $this->getOneField("image",$pvalTable);
		if(trim($image) != ''){
			if($clsISO->checkContainer($image, DOMAIN_NAME)){
				$image = $_SERVER['DOCUMENT_ROOT'].$clsISO->parseImageURL($image,false);
				$clsISO->deleteFile($image);
				$image = $_SERVER['DOCUMENT_ROOT'].$clsISO->parseImageURL($image,false);
				$clsISO->deleteFile($image);
			}
		}
		#
		$this->deleteOne($pvalTable);
		return 1;
	}

    function getTitleByCatId($cat_id, $hotel_id, $type=""){
        global $dbconn;

        $lstTitle = $this->getAll("cat_id='$cat_id' and type='HotelFacilities'");
        $content = '';
        $clsHotel = new Hotel();
        $oneHotel = $clsHotel->getOne($hotel_id, "list_HotelAccommodation");
        $lst_comma_accommodation = $this->getArray($oneHotel['list_HotelAccommodation']);
        $sql = "SELECT * FROM `default_property` WHERE cat_id=$cat_id and type='HotelFacilities' and property_id IN (".implode(",",$lst_comma_accommodation).")";
        $list_accommodation  = $dbconn->getAll($sql);

        if ($type == "FE") {
            foreach ($list_accommodation as $item) {
                $content .= ' <div class="item"><img src="'.$item['image'].'" alt="" onerror="this.src=\'https://unikasia.vietiso.com/isocms/templates/default/skin/images/hotel/detail/circle-check-regular.svg\'"> '.$item['title'].'</div>';
            }
            return $content;
        }

        foreach ($lstTitle as $item) {
            $check = $clsHotel->checkProperty('HotelAccommodation', $hotel_id,$item["property_id"]) ? "checked" : '';
            $content .= '<div class="facilities_item" style="padding-right: 20px"><input type="checkbox" name="list_HotelAccommodation[]" '.$check.' value="'.$item["property_id"].'"> <span class="text">'.$item["title"].'</span></div>';
        }

        return $content;
    }

    function getArray($string)
    {
        if ($string == '' || $string == '|') {
            return array();
        }
        $string = str_replace('||', '|', $string);
        $string = str_replace(',', '|', $string);
        $string = str_replace(':', '|', $string);
        $string = str_replace(';', '|', $string);
        $string = ltrim($string, '|');
        $string = rtrim($string, '|');
        return explode('|', $string);
    }
}
?>