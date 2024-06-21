<?php
class TourItinerary extends dbBasic{
	function __construct(){
		$this->pkey = "tour_itinerary_id";
		$this->tbl = DB_PREFIX."tour_itinerary";
	}
	function checkContain($haystack,$needle){
		$pos = strpos($haystack,$needle);
		if($pos === false) {
			return 0;
		}else {
			return 1;
		}
	}
	function getMaxDay($tour_id){
		$clsTour = new Tour();
		$res=$this->countItem("is_trash=0 and tour_id='$tour_id' and title_contingency='' order by day desc");
		$number_day=$clsTour->getOneField('number_day',$tour_id);
		if($res<$number_day){
			return $res+1; 
		}else{
			return $number_day; 
		}
		
	}
	function countTotalItinerary($tour_id){
		$res = $this->getAll("is_trash=0 and tour_id='$tour_id'");
		return !empty($res)?count($res):0;
	}
	function checkExist($day, $tour_id){
		$res = $this->getAll("day='$day' and tour_id='$tour_id' limit 0,1");
		return (!empty($res))?1:0;
	}
	function makeThumb($tour_itinerary_id){
		$clsISO = new ISO();
		$clsConfigImages = new ConfigImages();
		$_TOUR_ITINERARY = $clsConfigImages->getDimension("_TOUR_ITINERARY"); 
		$image_thumb =  $clsISO->cropImage($this->getOneField('image',$tour_itinerary_id),$_TOUR_ITINERARY['width'],$_TOUR_ITINERARY['height']);
		$this->updateOne($tour_itinerary_id,"image_thumb='".addslashes($image_thumb)."'");
		return 1;
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
	function getImageUrl($pvalTable,$oneTable=null){
		global $clsISO;
		if(!isset($oneTable['image'])){
			$oneTable = $this->getOne($pvalTable, "image");	
		}		
		$url_image = $oneTable['image'];
		return $clsISO->tripslashUrl($url_image);
	}

	function checkMealExist($meal, $tour_itinerary_id){
		$meals = $this->getOneField('meals',$tour_itinerary_id);
		if($meals=='' || $meal==''){ return 0;}
		$tmp = explode(',',$meals);
		if(!in_array($meal,$tmp))
			return 0;
		return 1;
	}
	function getTitleMeal($pvalTable,$one=null){
		$meals = $this->getMeal($pvalTable,0,$one);
		if($meals){
			return $this->getTitle($pvalTable,$one).' ('.$meals.')';
		}else{
			return $this->getTitle($pvalTable,$one);
		}
		
	}
	function getTitleItinerary($pvalTable){
		global $core;
		$clsTour = new Tour();
		$oneTable = $this->getOne($pvalTable,'tour_id,day,day2');
		$tour_id =$oneTable['tour_id'];
		
		$oneTour = $clsTour->getOne($tour_id,'number_day,duration_type');
		$duration_type = $oneTour['duration_type'];
		$number_day = intval($oneTour['number_day']);
		if($duration_type==1){ 
			return $this->getTitleMeal($pvalTable);
		}elseif($number_day=='1'){
			return $core->get_Lang('Full day').': '.$this->getTitleMeal($pvalTable);
		}elseif($number_day > '1'){
			if($oneTable['day2']>0){
				return $core->get_Lang('Day').' '.$oneTable['day'].'-'.$oneTable['day2'].': '.$this->getTitleMeal($pvalTable);
			}elseif($oneTable['day'] >0){
				return $core->get_Lang('Day').' '.$oneTable['day'].': '.$this->getTitleMeal($pvalTable);
			}else{
				return $this->getTitleMeal($pvalTable);
			}
		}
	}
	function getTitleItineraryNew($pvalTable,$oneTable=null){
		global $core;
		$clsTour = new Tour();
		if(!isset($oneTable['tour_id']) || !isset($oneTable['day']) || !isset($oneTable['day2']) || !isset($oneTable['title']) || !isset($oneTable['meals'])){
			$oneTable = $this->getOne($pvalTable,'tour_id,day,day2,title,meals');
		}		
		$tour_id =$oneTable['tour_id'];

		$oneTour = $clsTour->getOne($tour_id,'number_day,duration_type,dra_hours,dra_min');
		$duration_type = $oneTour['duration_type'];
		$number_day = intval($oneTour['number_day']);
		$dra_hours = intval($oneTour['dra_hours']);
		$dra_min = intval($oneTour['dra_min']);
		if($duration_type==1){
		    if($dra_hours >0 && $dra_min>0){
                return $this->getTitleMeal($pvalTable,$oneTable).' ( ' . $dra_hours . ' Hours ' . $dra_min . ' Min )';
            }elseif ($dra_hours >0 && $dra_min<0){
                return $this->getTitleMeal($pvalTable,$oneTable).' ( ' . $dra_hours . ' Hours )';
            }elseif ($dra_hours <0 && $dra_min>0){
                return $this->getTitleMeal($pvalTable,$oneTable).' ( ' . $dra_min . ' Min )';
            }else{
                return $this->getTitleMeal($pvalTable,$oneTable);
            }

		}elseif($number_day=='1'){
			return $core->get_Lang('Full day').': '.$this->getTitleMeal($pvalTable,$oneTable);
		}elseif($number_day > '1'){
			if($oneTable['day2']>0){
				return $core->get_Lang('Day').' '.$oneTable['day'].'-'.$oneTable['day2'].': '.$this->getTitleMeal($pvalTable,$oneTable);
			}elseif($oneTable['day'] >0){
				return $core->get_Lang('Day').' '.$oneTable['day'].': '.$this->getTitleMeal($pvalTable,$oneTable);
			}else{
				return $this->getTitleMeal($pvalTable,$oneTable);
			}
		}
	}
	function checkTransportExist($transport, $tour_itinerary_id){
		$transports = $this->getOneField('transport',$tour_itinerary_id);
		if($transports=='' || $transport==''){ return 0;}
		$tmp = explode(',',$transports);
		if(!in_array($transport,$tmp))
			return 0;
		return 1;
	}
	function getMealOld($pvalTable,$is_title=0){
		$clsTour = new Tour();
		$one=$this->getOne($pvalTable,'meals');
		$meals = $one['meals'];
		$html = '';
		if($meals==''){ return 'N/A';}
		$tmp = explode(',',$meals);
		if(is_array($tmp) && count($tmp)>0){
			$html.= '(';
			for($i=0; $i<count($tmp);$i++){
				if($is_title) {
					$html .=($i==0?'':'/').$clsTour->getNameTypeMeal($tmp[$i]);
				} else {
					$html .=($i==0?'':'/').$tmp[$i];
				}
			}
			$html.= ')';
		}
		return $html;
	}
    function getMeal($pvalTable,$is_title=0,$one=null){
        global $_LANG_ID, $extLang, $clsConfiguration;
        $clsTour = new Tour();
		$clsTourProperty = new TourProperty();
		if(!isset($one['meals'])){
			$one=$this->getOne($pvalTable,'meals');	
		}        
        $meals = $one['meals'];
        $html = '';
        if(empty($meals)){
            if($_LANG_ID == LANG_DEFAULT){
                //return 'N/A';
                return '';

            }
            if($_LANG_ID == 'vn') {
                //return 'Không rõ';
                return '';
            }
        }
		if($clsConfiguration->getValue('SiteTourAPI')){
			$meals = json_decode($meals,true);
			if(!empty($meals)){
				foreach($meals as $k=>$oneMeal){
					$html .=($k==0?'':', ').$oneMeal['title'];
				}
			}
		}else{
			/*$tmp = explode(',',$meals);
			if(is_array($tmp) && count($tmp)>0){
				for($i=0; $i<count($tmp);$i++){
					$html .=($i==0?'':', ').$clsTourProperty->getTitle($tmp[$i]);
				}
			}*/
			$itemTitle = $clsTourProperty->getAll(' is_trash=0 and is_online=1 and tour_property_id in ('.$meals.')','title');
			$arrTitle = [];
			if(!empty($itemTitle)){
				foreach($itemTitle as $key=>$value) {
					$arrTitle[] = $value['title'];
				}
				$html = implode(', ',$arrTitle);
			}
		}
        
        return $html;
    }
	function countMeal($pvalTable) {
		$one=$this->getOne($pvalTable,'meals');
		$meals = $one['meals'];
		$tmp = !empty($meals)?explode(',',$meals):'';
		return !empty($tmp)?count($tmp):0;
	}
	function getItineraryHotel($tour_id, $tour_itinerary_id, $is_count=0){
		global $core,$clsISO,$package_id;
		#
		$clsHotel = new Hotel();
		$clsTourHotel = new TourHotel();
		#
		if($clsISO->getCheckActiveModulePackage($package_id,'hotel','default','default')){
			$lstItem = $clsTourHotel->getAll("tour_id='$tour_id' and tour_itinerary_id='$tour_itinerary_id' order by order_no ASC","hotel_id");
			if($is_count){return !empty($lstItem)?count($lstItem):0;}
			if(is_array($lstItem) && count($lstItem)>0){
				$html = '';
				for($i=0; $i<count($lstItem);$i++){
					$html.='<a class="fwBold" href="'.$clsHotel->getLink($lstItem[$i][$clsHotel->pkey]).'" title="'.$clsHotel->getTitle($lstItem[$i][$clsHotel->pkey]).'">'.$clsHotel->getTitle($lstItem[$i]['hotel_id']).'</a>';
					$html .= ($i==count($lstItem)-1)?'':',';
				}
				return $html;
			}else{
				return $core->get_Lang('nohotel');
			}
		}
	}
	function getTitle($pvalTable,$one=null){
		if(!isset($one['title'])){
			$one=$this->getOne($pvalTable,'title');
		}
		return $one['title'];
	}
	function getContent($pvalTable){
		$one=$this->getOne($pvalTable,'content');
		return html_entity_decode($one['content']);
	}
	function getRegDate($pvalTable){
		$one=$this->getOne($pvalTable,'reg_date');
		return date('H:i d/m/Y',$one['reg_date']);
	}
	function getDay($pvalTable, $is_number = false){
		global $core, $_LANG_ID;
		$one=$this->getOne($pvalTable,'day');
		$day = $one['day'];
		if($is_number) { 
			if(is_numeric($day)){
				return $one['day'];
			}
		} else {
			$prefix= $core->get_Lang('Day');
			if(is_numeric($day)){
				return $prefix.' '.$one['day'];
			}else{
				return $prefix.' '.$one['day'];	
			}
		}
	}
	function getTripDay($pvalTable, $is_number = false){
		global $core, $_LANG_ID;
		$one=$this->getOne($pvalTable,'day,day2');
		$day = $one['day'];
		$day2 = $one['day2'];
		if($day2>$day){
		if($is_number) { 
			if(is_numeric($day)){
				return $one['day'].'->'.$one['day2'];
			}
		} else {
			if(is_numeric($day)){
				return $one['day'].'->'.$one['day2'];
			}
		}
		}else{
			if($is_number) { 
			if(is_numeric($day)){
				return $one['day'];
			}
			} else {
				if(is_numeric($day)){
					return $one['day'];
				}
			}
		}
	}
	function getDateTitle($pvalTable){
		$one=$this->getOne($pvalTable,'date_title');
		return $one['date_title'];
	}
	function getNumberDay($pvalTable, $is_number = false){
		global $core, $_LANG_ID;
		$one=$this->getOne($pvalTable,'day');
		$day = $one['day'];
		if($is_number) { 
			if(is_numeric($day)){
				return $one['day'];
			}
		} else {
			return $one['day'];
		}
	}
	function getHotelRecommend($pval){
		global $_LANG_ID;
		#
		$one=$this->getOne($pval);
		return html_entity_decode($one['hotel_recommend']);
	}
	function doDelete($tour_itinerary_id){
		$clsISO = new ISO();
		
		// Delete Tour Hotels
		$clsTourHotel = new TourHotel();
		$clsTourHotel->deleteByCond("tour_itinerary_id='$tour_itinerary_id'");
		
		$this->deleteOne($tour_itinerary_id);
		return 1;
	}
    function getTitleContingency($pvalTable){
        $one=$this->getOne($pvalTable,'title_contingency');
        return $one['title_contingency'];
    }
    function getTitleContingencyMeal($pvalTable){
        $one=$this->getOne($pvalTable,'title_contingency');
        return $one['title_contingency'].': '.$this->getTitleMeal($pvalTable);
    }

    function getGoodMeal($tour_id) {
        $content = '';
        $rec = $this->getAll(" tour_id = $tour_id");
        $clsTourProperty = new TourProperty();
        $values_to_count = [98, 99, 100];
        $count_values = array_fill_keys($values_to_count, 0);

        foreach ($rec as $k=>$v) {
            $meals = explode(",", $v['meals']);
            foreach ($meals as $meal) {
                if (array_key_exists($meal, $count_values)) {
                    $count_values[$meal]++;
                }
            }
        }
        $arr = [];
        foreach ($count_values as $meal => $count) {
            $arr[] = $count . " " . $clsTourProperty->getTitle($meal);
        }
        $content = implode(", ", $arr);
        return $content;
    }
}
?>