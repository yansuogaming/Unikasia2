<?php  
class _Country extends dbBasic{
	function __construct(){
		$this->pkey = "country_id";
		$this->tbl = "_country";
	}
	function getTitle($country_id){
		$one = $this->getOne($country_id,'title'); 
		return (!empty($one['title']))?$one['title']:"";
	}
	function getMaxId() {
        $res = $this->getAll("1=1 order by country_id desc");
        return intval($res[0]['country_id']) + 1;
    }
	function getCity($country_id){
		$clsCity = new _City();
		$res = $clsCity->getAll("is_trash=0 and country_id='$country_id' order by slug asc");
		return $res;
	}
	function getSelectByCountry($selected=''){
		global $core;
		$all=$this->getAll("is_trash=0 and country_id<>'9' order by order_no asc", $this->pkey);
		$html='<option value="0">-- '.$core->get_Lang('Select country').' --</option>';
		if(!empty($all)){
			foreach($all as $item){
				$selected_index=($selected==$item[$this->pkey])?'selected="selected"':'';
				$html.='<option value="'.$item[$this->pkey].'" '.$selected_index.'>'.$this->getTitle($item[$this->pkey]).'</option>';
			}
		}
		return $html;
	}
	function doDelete($country_id) {
        $this->deleteOne($country_id);
        return 1;
    }
}