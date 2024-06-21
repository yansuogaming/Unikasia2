<?php
class TourProperty extends dbBasic{
	function __construct(){
		$this->pkey = "tour_property_id";
		$this->tbl = DB_PREFIX."tour_property";
	}
	function getTitle($tour_property_id){
		$one = $this->getOne($tour_property_id,'title');
		return $one['title'];
	}
	function getSymbol($tour_property_id){
		$one = $this->getOne($tour_property_id,'symbol');
		return $one['symbol'];
	}
	function getIntro($tour_property_id){
		$one = $this->getOne($tour_property_id,'intro');
		return $one['intro'];
	}
	function getListType() {
		global $core;
        $listType = array();
		$listType['VISITORTYPE'] = $core->get_Lang('Adults - Children - Infants type');
		$listType['NATIONALITY'] = $core->get_Lang('nationality');
		$listType['MEAL'] = $core->get_Lang('Meals');
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
	function doDelete($property_country_id){
		$clsISO = new ISO();
		#
		$this->deleteOne($property_country_id);
		return 1;
	}
    function makeSelectboxOption($selected='', $is_multiple=false, $type='TOURGUIDE')
    {
        global $core, $clsISO;
        $sql = "is_trash=0 and is_online=1 and type='".$type."'";
        $lstTourGuide = $this->getAll($sql,"DISTINCT({$this->pkey}),title");
        if($is_multiple){
            $html = '<option value="0" '.(($is_multiple)?"disabled":"").'>-- '.$core->get_Lang('select').' --</option>';
        }else{
            $html = '<option value="0" '.(($selected == '')?'selected':"").'>-- '.$core->get_Lang('select').' --</option>';
        }

        if(!empty($lstTourGuide)){
            if(!$is_multiple){
                foreach($lstTourGuide as $k=>$v){
                    if($v['title'] != ''){
                        $html .= '<option value="'.$v[$this->pkey].'" '.($selected==$v[$this->pkey]?'selected="selected"':'').'>'.$v['title'].'</option>';
                    }
                }
            } else {
                $_array = $this->getArray($selected);
                foreach($lstTourGuide as $k=>$v){
                    if($v['title'] != ''){
                        $html .= '<option value="'.$v[$this->pkey].'" '.($clsISO->checkItemInArray($v[$this->pkey],$_array)?'selected="selected"':'').'>'.$v['title'].'</option>';
                    }
                }
            }
            unset($lstTourGuide);
        }
        return $html;
    }

    function getListTourProperty($string_id){
        $list_id = implode(',',$this->getArray($string_id));
        $listProperty = $this->getAll('is_trash=0 and is_online=1 and tour_property_id IN ('.$list_id.')',$this->pkey.',title');
        $titles = array_column($listProperty, 'title');
        return implode(', ', $titles);
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
}
?>