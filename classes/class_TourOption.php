<?php
class TourOption extends dbBasic{
	function __construct(){
		$this->pkey = "tour_option_id";
		$this->tbl = DB_PREFIX."tour_option";
	}
	function getMaxOrder($type) {
        $res = $this->getAll("1=1 and type='$type' order by order_no desc");
        return intval($res[0]['order_no']) + 1;
    }
	function getTitle($tour_option_id){
		$one = $this->getOne($tour_option_id,'title');
		return $one['title'];
	}
	function getIntro($tour_option_id){
		$one = $this->getOne($tour_option_id,'intro');
		return $one['intro'];
	}
	function getMin($pvalTable){
		$one=$this->getOne($pvalTable,'number_from');
		return $one['number_from'];
	}
	function getMax($pvalTable){
		$one=$this->getOne($pvalTable,'number_to');
		return $one['number_to'];
	}
	function getListType() {
		global $core;
        $listType = array();

		$listType['VISITORTYPE'] = $core->get_Lang('Visitor Type');
        return $listType;
    }
	function getNameType($selected = '') {
        $lstType = $this->getListType();
        return $lstType[$selected];
    }
    function getSelectType($selected = '') {
        global $core;
        #
        $listType = $this->getListType();
        $html = '<option value="0"> -- ' . $core->get_Lang('select') . ' -- </option>';
        foreach ($listType as $key => $val) {
            $html .= '<option value="'.$key.'" ' .($key==$selected?'selected="selected"':'').'> -- '.$val.' -- </option>';
        }
        return $html;
    }
	function makeSelectboxOption($selected='',$type, $tour_property_id=''){
		global $core, $clsConfiguration, $clsISO;
		$sql = "is_trash=0 and type='$type' and tour_property_id='$tour_property_id'";
		#
		if($type=='TOUROPTION'){
			$lstProperty = $this->getAll($sql." order by order_no ASC");
		}else{
			$lstProperty = $this->getAll($sql." order by number_to ASC");
		}
		
		$html = '<option value="0">-- '.$core->get_Lang('Select').' --</option>';
		if(is_array($lstProperty) && count($lstProperty) > 0){
			foreach($lstProperty as $k=>$v){
				$_array = $this->getArray($selected);
				$html .= '<option value="'.$v[$this->pkey].'" '.($clsISO->checkItemInArray($v[$this->pkey],$_array)?'selected="selected"':'').'>-- '.$this->getTitle($v[$this->pkey]).'</option>';
			}
			unset($lstCat);
		}
		return $html;
	}
	function makeSelectboxOption2($selected='',$type, $tour_property_id=''){
		global $core, $clsConfiguration, $clsISO;
		$sql = "is_trash=0 and type='$type' and tour_property_id='$tour_property_id'";
		#
		if($type=='TOUROPTION'){
			$lstProperty = $this->getAll($sql." order by order_no ASC");
		}else{
			$lstProperty = $this->getAll($sql." order by number_to ASC");
		}
		$html = '';
		if(is_array($lstProperty) && count($lstProperty) > 0){
			foreach($lstProperty as $k=>$v){
				$_array = $this->getArray($selected);
				$html .= '<option value="'.$v[$this->pkey].'" '.($clsISO->checkItemInArray($v[$this->pkey],$_array)?'selected="selected"':'').'>-- '.$this->getTitle($v[$this->pkey]).'</option>';
			}
			unset($lstCat);
		}
		return $html;
	}
	function getSelectTourClass($tour_id,$departure) {
        global $core;

		$clsTour = new Tour();
		$clsTourPriceGroup = new TourPriceGroup();
		$lstTourOption = $clsTour->getOneField('tour_option',$tour_id);
		$lstOption = array();
		if($lstTourOption != '' && $lstTourOption != '0'){
			$lstTourOption = str_replace('||','|',$lstTourOption);
			$lstTourOption = ltrim($lstTourOption,'|');
			$lstTourOption = rtrim($lstTourOption,'|'); 
			$TMP = explode('|',$lstTourOption);
			for($i=0; $i<count($TMP); $i++){
				if(!in_array($TMP[$i],$lstOption)){
					$lstOption[] = $TMP[$i];
				}
			}
		}
		$listTourPriceGroup=$clsTourPriceGroup->getAll("tour_id='$tour_id' and price > 0 and departure_date = '".$departure."' and tour_visitor_type_id='16' order by price asc limit 0,1");
		$tour_class_id_selected=$listTourPriceGroup[0]['tour_class_id'];
		$html='<option value="0">'.$core->get_Lang('Select').'</option>';

		for ($i=0; $i < (count($lstOption)); $i++) {
			$select=($tour_class_id_selected==$lstOption[$i])?'selected="selected"':'';
			$html.='<option value="'.$lstOption[$i].'"'.$select.'>'.$this->getTitle($lstOption[$i]).'</option>';
		}
		return $html;
    }
	function getArray($string){
		if($string=='' || $string=='|'){ return array();}
		$string = str_replace('||','|',$string);
		$string = str_replace(',','|',$string);
		$string = str_replace(':','|',$string);
		$string = str_replace(';','|',$string);
		$string = ltrim($string, '|');
		$string = rtrim($string, '|');
		return explode('|',$string);
	}
	function getSelectBySizeGroup($group_type_id,$type, $selected = ''){
		global $core,$child_type_id,$infant_type_id,$age_type_id,$height_type_id;	
		$html = "";
		$cond = " type='SIZEGROUP' ";
		if($type == 'VISITORAGETYPE'){
			$cond .= " AND tour_property_height='0' AND tour_property_id='".$age_type_id."' AND tour_property_age='".$group_type_id."'";
			if($group_type_id == $child_type_id){
				$name_slt = "visitorAge_child[]";
			}
			if($group_type_id == $infant_type_id){
				$name_slt = "visitorAge_infant[]";
			}
			
		}else{
			$cond .= " AND tour_property_age='0' AND tour_property_id='".$height_type_id."' AND tour_property_height='".$group_type_id."'";
			if($group_type_id == $child_type_id){
				$name_slt = "visitorHeight_child[]";
			}
			if($group_type_id == $infant_type_id){
				$name_slt = "visitorHeight_infant[]";
			}
		}
		$order_by = "  ORDER BY number_to ASC ";
		$lstSizeGroup = $this->getAll($cond.$order_by,$this->pkey.',title');
		if($lstSizeGroup){
			$html = '<select name="'.$name_slt.'" class="slt_item_age_child">';
			$html .= '<option value="">'.$core->get_Lang("Select").'</option>';
			foreach($lstSizeGroup as $key => $value){
				$check = "";
				if($selected != ''){
					$arr_select = explode(',',$selected);
					$check = (in_array($value['tour_option_id'],$arr_select))?"selected":"";
				}
				$html .= '<option value="'.$value['tour_option_id'].'" '.$check.'>'.$i.' '. $value['title'].'</option>';
			}
			$html .= '</select>';
		}
		
		return $html;
	}
	function getTextSelectBySizeGroup($group_type_id,$type = 'VISITORAGETYPE'){
		global $core,$child_type_id,$infant_type_id,$age_type_id,$height_type_id;	
		
		$cond = " type='SIZEGROUP' ";
		if($type == 'VISITORAGETYPE'){
			$cond .= " AND tour_property_height='0' AND tour_property_id='".$age_type_id."' AND tour_property_age='".$group_type_id."'";			
		}else{
			$cond .= " AND tour_property_age='0' AND tour_property_id='".$height_type_id."' AND tour_property_height='".$group_type_id."'";
		}
		$lstSizeGroup = $this->getAll($cond," MIN(number_from) as min, MAX(number_to) as max");
		
		$min = $lstSizeGroup[0]['min'];
		$max = $lstSizeGroup[0]['max'];
		$text = "";
		if($type == 'VISITORAGETYPE'){
			if($min > 0 && $max > 0){
				$text = $core->get_Lang('From')." ".$min." ".$core->get_Lang('years old')." ".$core->get_Lang('to')." ".$max." ".$core->get_Lang('years old');
			}elseif($min == 0 && $max > 0){
				$text = $core->get_Lang('Under')." ".$max." ".$core->get_Lang('years old');
			}elseif($min > 0 && $max == 0){
				$text = $core->get_Lang('Over')." ".$min." ".$core->get_Lang('years old');
			}
			
		}else{
			if($min > 0 && $max > 0){
				$text = $core->get_Lang('From')." ".$min." cm "." ".$core->get_Lang('to')." ".$max." cm";
			}elseif($min == 0 && $max > 0){
				$text = $core->get_Lang('Under')." ".($max+1)." cm";
			}elseif($min > 0 && $max == 0){
				$text = $core->get_Lang('Over')." ".$min." cm";
			}
			
		}
		return $text;
	}
    function getSelectAgeChild($selected = '',$index=0,$tour_option_id=0){
        global $core,$child_type_id,$age_type_id;
        $sql_where = "";
        if($tour_option_id > 0){
            $lstAgeChild = $this->getOne($tour_option_id,'number_from,number_to');
            $min_age = $lstAgeChild['number_from'];
            $max_age = $lstAgeChild['number_to'];
            $name_select = "children_".$tour_option_id."[]";
        }else{
            $lstAgeChild = $this->getAll("type = 'SIZEGROUP' and tour_property_id='".$age_type_id."' and tour_property_age = '".$child_type_id."'"," MIN(number_from) as min_age, MAX(number_to) as max_age");
            $min_age = $lstAgeChild[0]['min_age'];
            $max_age = $lstAgeChild[0]['max_age'];
            $name_select = "children[]";
        }


        $html = '<select name="'.$name_select.'" class="slt_item_age_child">';
        $html .= '<option value="">'.$core->get_Lang("Age").'*</option>';
        for($i=$min_age; $i <= $max_age; $i++ ){
            $check = "";
            if($selected != ''){
                $arr_select = explode(',',$selected);
                $check = (in_array($i,$arr_select) && $i == $arr_select[$index])?"selected":"";
            }
            $html .= '<option value="'.$i.'" '.$check.'>'.$i.' '. $core->get_Lang('years old').'</option>';
        }
        $html .= '</select>';
        return $html;
    }

    function getMinMaxGroupSizeAdult($tour_id) {
        global $dbconn;

        $clsTour = new Tour();
        $oneItem = $clsTour->getOne($tour_id);

        $sql = "SELECT number_from, number_to FROM `default_tour_option` where tour_option_id IN (". $oneItem["adult_group_size"] .")";

        $rec = $dbconn->GetAll($sql);
        $values = [];
        foreach ($rec as $item) {
            $values[] = (int)$item['number_from'];
            $values[] = (int)$item['number_to'];
        }
        $minValue = min($values);
        $maxValue = max($values);
        return "Min $minValue, Max $maxValue";
    }
}
?>