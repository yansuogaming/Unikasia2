<?php
class HotelRoom extends dbBasic {
    function __construct() {
        $this->pkey = "hotel_room_id";
        $this->tbl = DB_PREFIX . "hotel_room";
    }
    function checkExist($hotel_id, $slug) {
        $res = $this->getAll("hotel_id='$hotel_id' and slug='$slug' limit 0,1");
        return (!empty($res)) ? 1 : 0;
    }
    function checkRoomFacility($property_id, $room_facility) {
        if ($property_id == '' || $room_facility == '') {
            return 0;
        }
        $room_facility = ltrim($room_facility, '|');
        if ($room_facility == '') {
            return 0;
        }
        $tmp = explode('|', $room_facility);
        if (!empty($tmp)) {
            if (!in_array($property_id, $tmp))
                return 0;
            return 1;
        }else {
            return 0;
        }
    }
    function getTitle($pvalTable,$one=null) {
		if(!isset($one['title'])){
			$one = $this->getOne($pvalTable,'title');	
		}        
        return $one['title'];
    }
    function getRateNote($pvalTable) {
        $one = $this->getOne($pvalTable,'rate_note');
        return $one['rate_note'];
    }
    function getRateInclude($pvalTable) {
        global $_LANG_ID;
        $one = $this->getOne($pvalTable,'rate_include');
        return $one['rate_include'];
    }
    function getIntro($pvalTable) {
        $one = $this->getOne($pvalTable,'intro');
        return $one['intro'];
    }
	function getSlug($hotel_room_id) {
        $one = $this->getOne($hotel_room_id,'slug');
        return $one['slug'];
    }
	function getBySlug($slug,$hotel_id) {
        $all = $this->getAll("is_trash=0 and slug='$slug' and hotel_id='$hotel_id' limit 0,1", $this->pkey);
        return $all[0][$this->pkey];
    }
	function getLinkBook($hotel_id,$hotel_room_id,$departure_in=0,$departure_out=0) {
        global $_LANG_ID,$clsISO, $extLang;
		$departure_in=$clsISO->formatTimeDateEn($departure_in);
		$departure_out=$clsISO->formatTimeDateEn($departure_out);
        if ($_LANG_ID == 'vn')
            return '/khach-san-h'.$hotel_id.'/'.$this->getSlug($hotel_room_id).'/bookingroom.html';
        return $extLang . '/hotels-h/'.$hotel_id.'/'.$this->getSlug($hotel_room_id).'/bookingroom.html';
    }
	
	function getCancellationPolicy($pvalTable) {
        $one = $this->getOne($pvalTable);
        return $one['cancellation_policy'];
    }
	function getTripPricePlace($pvalTable) {
        global $core, $clsISO,$clsConfiguration;
		$clsProperty=new Property(); $assign_list['clsProperty']=$clsProperty;
		#
        $one = $this->getOne($pvalTable,'price,is_booking,is_sendrequest,is_getprice');
		$price = $one['price'];
		$is_booking = $one['is_booking'];
		$is_sendrequest = $one['is_sendrequest'];
		$is_getprice = $one['is_getprice'];
        if(intval($price) > 0) {
			return $clsISO->formatPrice($price,3).'<p>'.$clsProperty->getOneField('property_code',$clsConfiguration->getValue('Currency')).' / '.$core->get_Lang('nights').'</p>';
        }
    }
	function getTripPrice($pvalTable) {
        global $core, $clsISO,$clsConfiguration;
		$clsProperty=new Property(); $assign_list['clsProperty']=$clsProperty;
		#
        $one = $this->getOne($pvalTable,'price,is_booking,is_sendrequest,is_getprice');
		$price = $one['price'];
		$is_booking = $one['is_booking'];
		$is_sendrequest = $one['is_sendrequest'];
		$is_getprice = $one['is_getprice'];
        if(intval($price) > 0 && $is_booking==1) {
			return $clsISO->formatPrice($price,3).'<p>'.$clsProperty->getOneField('property_code',$clsConfiguration->getValue('Currency')).' / '.$core->get_Lang('nights').'</p>';
        }
		elseif(intval($price) >= 0 && $is_sendrequest==1)
		{
			return '<a class="contactLink" href="'.$clsISO->getLink('feedback').'">'.$core->get_Lang('Gửi yêu cầu').'</a>';
		}
		elseif(intval($price) >= 0 && $is_getprice==1){ 
			return '<a class="contactLink" href="'.$clsISO->getLink('feedback').'">'.$core->get_Lang('Click để lấy giá').'</a>';
		}
		else{
			return '<a class="contactLink" href="'.$clsISO->getLink('feedback').'">'.$core->get_Lang('Liên hệ để lấy giá tốt').'</a>';
		}
    }
	function getTripPriceLinkBooking($pvalTable) {
        global $core, $clsISO,$clsConfiguration;
		$clsProperty=new Property(); $assign_list['clsProperty']=$clsProperty;
		#
        $one = $this->getOne($pvalTable,'price,is_booking,is_sendrequest,is_getprice');
		$price = $one['price'];
		$is_booking = $one['is_booking'];
		$is_sendrequest = $one['is_sendrequest'];
		$is_getprice = $one['is_getprice'];
        if(intval($price) > 0 && $is_booking==1) {
			return $clsISO->formatPrice($price,3).'<p>'.$clsProperty->getOneField('property_code',$clsConfiguration->getValue('Currency')).' / '.$core->get_Lang('nights').'</p>';
        }
		elseif(intval($price) >= 0 && $is_sendrequest==1)
		{
			return '<a class="contactLink" href="'.$clsISO->getLink('feedback').'">'.$core->get_Lang('Gửi yêu cầu').'</a>';
		}
		elseif(intval($price) >= 0 && $is_getprice==1){ 
			return '<a class="contactLink" href="'.$clsISO->getLink('feedback').'">'.$core->get_Lang('Click để lấy giá').'</a>';
		}
		else{
			return '<a class="contactLink" href="'.$clsISO->getLink('feedback').'">'.$core->get_Lang('Liên hệ để lấy giá tốt').'</a>';
		}
    }
    function getPrice($pvalTable) {
        global $core, $clsISO;
		#
        $one = $this->getOne($pvalTable,'price');
		$price = $one['price'];
        if(intval($price) > 0) {
			return $clsISO->formatPrice($price,0).' '.$clsISO->getShortRate();
        } 
		return '<a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a>';
    }
	 function getPrice2($pvalTable) {
        global $core, $clsISO;
		#
        $one = $this->getOne($pvalTable,'price');
		$price = $one['price'];
        if(intval($price) > 0) {
			return $clsISO->formatPrice($price,3);
		}
    }
	function countWeekendDays($checkin,$checkout){
		global $core, $clsISO,$now_day;
		$count = 0;
		while ($checkin <= $checkout) {
			if (date('N',$checkin) >= 6) {
				$count++;
			}
			$checkin = strtotime("+1 day",$checkin);
		}

		return $count;
		
	}
	function getPriceCheckRate($hotel_id,$pvalTable,$check_in,$check_out,$number_adult_check=1,$number_child_check=0,$type="show_promotion") {
        global $core, $clsISO,$now_day;
		#
        $one = $this->getOne($pvalTable);
		$price = $one['price'];
		
		
		
		
		$number_adult=$one['number_adult'];
		$max_room=ceil($number_adult_check/$number_adult)+1;
		
		
		$str_check_in=strtotime($check_in);
		$str_check_out=strtotime($check_out);
		
		$countWeekend = $this->countWeekendDays($str_check_in,$str_check_out);

		$string_number_night=$str_check_out-$str_check_in;

		$number_night=$string_number_night/86400;
		if($number_night >0){
			$number_night=$number_night;
		}else{
			$number_night=1;
		}
		$countWeekend = ($countWeekend > $number_night)?$number_night:$countWeekend;
		$data_check_in=str_replace('-','/',$check_in); 
		$data_check_out=str_replace('-','/',$check_out); 
		
		
		$discount=$clsISO->getPromotion($hotel_id,'Hotel',$now_day,$str_check_in,'info_promotion');
		$promotion=$discount['discount_value'];
		$promotion = str_replace('.','',$promotion);
		
		if($countWeekend > 0 && $one['price_weekend'] > 0){
			$price_weekend = $one['price_weekend'] * $countWeekend;
			$price=$price*($number_night - $countWeekend);
			$price += $price_weekend;
		}else{
			$price=$price*$number_night;
		}
		
		if(!empty($price)){
			
			if($promotion>0 && $type != "show_promotion"){
				if($discount['discount_type'] == 2){
					$price_promotion=$promotion*$price/100;	
				}else{
					$price_promotion=$promotion;
				}
				
				$price_new=$price-$price_promotion;
				
				$html='<div class="priceCheckrate">
					<div class="col_price">
						<p class="price_trip_old">'.$clsISO->formatPrice($price,0).$clsISO->getShortRateText().'</p>
						<p class="price_trip">'.$clsISO->formatPrice($price_new,0).$clsISO->getShortRate().'</p>
						<p class="size12">*Giá cho '.$number_night.' đêm</p>
					</div>
					<div class="col_btn">
						<select data-hotel_id="'.$hotel_id.'" id="hotel_room_'.$pvalTable.'" data-hotel_room_id="'.$pvalTable.'" data-check_in="'.$check_in.'" data-check_out="'.$check_out.'" data-number_adult="'.$number_adult_check.'" data-number_child="'.$number_child_check.'" name="number_room" data-totalprice="'.$price.'" class="number_room">';
							for($i=0; $i<=$max_room;$i++){
								$html.='<option value="'.$i.'">'.$i.'</option>';
							}
						$html.='</select>
					</div>
				</div>';
			}else{
				$html='<div class="priceCheckrate">
					<div class="col_price">
						<p class="price_trip">'.$clsISO->formatPrice($price,0).$clsISO->getShortRate().'</p>
						<p class="size12">*Giá cho '.$number_night.' đêm</p>
					</div>
					<div class="col_btn">
						<select data-hotel_id="'.$hotel_id.'" id="hotel_room_'.$pvalTable.'"  data-hotel_room_id="'.$pvalTable.'" data-check_in="'.$check_in.'" data-check_out="'.$check_out.'" data-number_adult="'.$number_adult_check.'" data-number_child="'.$number_child_check.'" name="number_room" data-totalprice="'.$price.'" class="number_room">';
							for($i=0; $i<=$max_room;$i++){
								$html.='<option value="'.$i.'">'.$i.'</option>';
							}
						$html.='</select>
					</div>
				</div>';
			}
			
			
			return $html;
		}
		/*return '<div class="priceCheckrate"><a class="contactLink btn_main" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';*/
		return '<div class="priceCheckrate"><button class="contactLink btn_main">'.$core->get_Lang('contactus').'</button></div>';
    }
	function getPriceDate($pvalTable) {
        global $core, $clsISO;
		#
        $one = $this->getOne($pvalTable,'price');
		$price = $one['price'];
        if(intval($price) > 0) {
			return $clsISO->formatPrice($price,3);
        } 
    }
	function getPriceExtra($pvalTable) {
        global $core, $clsISO;
		#
        $one = $this->getOne($pvalTable,'price_extra');
		$price = $one['price_extra'];
        if(intval($price) > 0) {
			return $clsISO->formatPrice($price,3);
        } 
    }
	function getPriceExtraMath($pvalTable) {
        global $core, $clsISO;
		#
        $one = $this->getOne($pvalTable,'price_extra');
		$price = $one['price_extra'];
        if(intval($price) > 0) {
			return intval($price);
        } 
    }
    function getNumberRoom($pvalTable) {
        $one = $this->getOne($pvalTable,'number_val');
        return $one['number_val'];
    }
    function getRateRoom($pvalTable) {
		global $clsISO;
        $one = $this->getOne($pvalTable,'rate_room');
        return $clsISO->formatPrice($one['rate_room']).' '.$clsISO->getRate();
    }
	function getListType(){
		global $core;
		$lstType = array();
		$lstType['PROMOTION'] = $core->get_Lang('Room Promotion');
		$lstType['BREAKFAST'] = $core->get_Lang('Room including breakfast');
		return $lstType;
	}
	function makeSelectboxOption($selected='', $is_multiple=false){
		global $core, $clsConfiguration, $clsISO;
		$sql = "is_trash=0 and parent_id=0 and is_online=1";

		$lstHotelRoom = $this->getAll($sql." order by order_no ASC");
		$html = '<option value="0">-- '.$core->get_Lang('select hotel room').' --</option>';
		if(is_array($lstHotelRoom) && count($lstHotelRoom) > 0){
			foreach($lstHotelRoom as $k=>$v){
				if(!$is_multiple){
					$html .= '<option value="'.$v[$this->pkey].'" '.($selected==$v[$this->pkey]?'selected="selected"':'').'>'.$this->getTitle($v[$this->pkey]).'</option>';
					if($clsConfiguration->getValue('SiteHasSubCat_Tours')){
						$lstChild = $this->getChild($v[$this->pkey]);
						if(is_array($lstChild)){
							foreach($lstChild as $n=>$m){
								$html .= '<option value="'.$m[$this->pkey].'" '.($selected==$m[$this->pkey]?'selected="selected"':'').'>|_'.$this->getTitle($m[$this->pkey]).'</option>';
							}
							unset($lstChild);
						}
					}
				}else{
					$_array = $this->getArray($selected);
					$html .= '<option value="'.$v[$this->pkey].'" '.($clsISO->checkItemInArray($v[$this->pkey],$_array)?'selected="selected"':'').'>-- '.$this->getTitle($v[$this->pkey]).'</option>';
					if($clsConfiguration->getValue('SiteHasSubCat_Tours')){
						$lstChild = $this->getChild($v[$this->pkey]);
						if(is_array($lstChild)){
							foreach($lstChild as $n=>$m){
								$html .= '<option value="'.$m[$this->pkey].'" '.($clsISO->checkItemInArray($m[$this->pkey],$_array)?'selected="selected"':'').'>|_'.$this->getTitle($m[$this->pkey]).'</option>';
							}
							unset($lstChild);
						}
					}
				}
			}
			unset($lstHotelRoom);
		}
		return $html;
	}
	
    function getNumberPeople($pvalTable) {
        $one = $this->getOne($pvalTable,'number_adult,number_children');
		$numAdult=$one['number_adult'];
		$numChild=$one['number_children'];
		
		if($numChild>0)
        	return $numAdult + $numChild;
		return $numAdult;
    }
	function getNumberAdult($pvalTable,$one=null) {
		if(!isset($one['number_adult'])){
        	$one = $this->getOne($pvalTable,'number_adult');
		}
		if($one['number_adult'] >0)
        	return $one['number_adult'];
		return '';
    }
	function getNumberChild($pvalTable) {
        $one = $this->getOne($pvalTable,'number_children');
		if($one['number_children'] > 0)
        	return $one['number_children'];
		return '';
    }
	function getRoomSize($pvalTable,$one=null) {
		if(!isset($one['footage'])){
        	$one = $this->getOne($pvalTable,'footage');
		}
        return $one['footage'];
    }
	function getRoomBed($pvalTable,$one=null) {
		global $_LANG_ID;
		$clsProperty=new Property();
		if(!isset($one['bed_option'])){
			$one = $this->getOne($pvalTable,'bed_option');	
		}        
        $bed_option=$one?json_decode($one['bed_option'],true):'';
		
		$bed_option=$bed_option?$clsProperty->getTitle($bed_option[0]['id']).' x '.$bed_option[0]['number']:'';
		return $bed_option;
    }
	
	function getRoomDirection($pvalTable) {
        $one = $this->getOne($pvalTable,'direction_room');
        return $one['direction_room'];
    }
	function getRoomCancellationPolicy($pvalTable) {
        $one = $this->getOne($pvalTable,'cancellation_policy');
        return $one['cancellation_policy'];
    }
	function getImage($pvalTable, $w, $h,$oneTable=null){
		global $clsISO;
		if(!isset($oneTable['image'])){
			$oneTable = $this->getOne($pvalTable, "image");	
		}		
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
    function getSelectByRoom($hotel_id, $selected = '') {
        global $core, $_lang;
        $clsLang = new _Lang();
        $all = $this->getAll("is_trash=0 and hotel_id='$hotel_id' order by order_no asc");
        $html = '<option value="">-- '.$core->get_Lang('select').' --</option>';
        if (!empty($all)) {
            $i = 0;
            foreach ($all as $item) {
                $selected_index = ($selected == $item[$this->pkey]) ? 'selected="selected"' : '';
                $html.='<option value="'.$item[$this->pkey].'" '.$selected_index.'> -- '.$this->getTitle($item[$this->pkey]).'</option>';
                ++$i;
            }
        }
        return $html;
    }
	function getNumberRoomHotel($hotel_id) {
		global $core, $dbconn;
		$SQL = "SELECT SUM(number_val) FROM ".DB_PREFIX."hotel_room WHERE hotel_id='$hotel_id'";
		return $dbconn->GetOne($SQL);
	}
	function checkProperty($type, $pvalTable, $property_id) {
        $oneItem = $this->getOne($pvalTable);
        $str = $oneItem['list_' . $type];
        $str_array = explode('|', $str);
        for ($i = 0; $i < count($str_array); $i++) {
            if ($str_array[$i] == $property_id) {
                return 1;
            }
        }
        return 0;
    }
    function getSelectBedType($hotel_id, $selected = '') {
        global $core, $_lang;
        $clsHotelPriceCol = new HotelPriceCol();
        $clsHotelPriceVal = new HotelPriceVal();
        $all = $clsHotelPriceCol->getAll("is_trash=0 and hotel_id='$hotel_id' order by order_no asc");
        $html = '<option value="">-- '.$core->get_Lang('select').' --</option>';
        if (!empty($all)) {
            $i = 0;
            foreach ($all as $item) {
                $selected_index = ($selected == $item[$clsHotelPriceCol->pkey]) ? 'selected="selected"' : '';
                $html.='<option value="' . $item[$clsHotelPriceCol->pkey] . '" ' . $selected_index . '>
							 -- ' . $clsHotelPriceCol->getTitle($item[$clsHotelPriceCol->pkey]) . ' ( ' . $clsHotelPriceVal->getPrice($hotel_id, $item[$clsHotelPriceCol->pkey]) . ')
						</option>';
                ++$i;
            }
        }
        return $html;
    }
    function getListRoomFacility($pvalTable) {
        $one = $this->getOne($pvalTable,'list_RoomFacilities');
        $list_RoomFacilities = $one['list_RoomFacilities'];
        if ($list_RoomFacilities != '') {
            $list_RoomFacilities = ltrim($list_RoomFacilities, '|');
            $_array = explode('|', $list_RoomFacilities);
            return $_array;
        }
        return '';
    }
	function getListRoomServices($pvalTable) {
        $one = $this->getOne($pvalTable,'list_RoomServices');
        $list_RoomServices = $one['list_RoomServices'];
        if ($list_RoomServices != '') {
			$list_RoomServices = str_replace('||','|',$list_RoomServices);
			$list_RoomServices = ltrim($list_RoomServices,'|');
			$list_RoomServices = rtrim($list_RoomServices,'|'); 
            $_array = explode('|', $list_RoomServices);
            return $_array;
        }
        return '';
    }
	function getRoomFa($pvalTable) {
		global $clsISO;
		
		$clsProperty = new Property();
		#
		$list_RoomFacilities = $clsProperty->getAll("is_trash=0 and type='RoomFacilities' order by order_no ASC",$clsProperty->pkey.',title');
		#
		if(is_array($list_RoomFacilities) && !empty($list_RoomFacilities)){
			$html.= '<ul>';
			for($i=0; $i<count($list_RoomFacilities); $i++){
				$html.= '<li class="'.($clsISO->checkContainer($list_RoomFacilities, $list_RoomFacilities[$i][$clsProperty->pkey]) ? ' available' : 'inavailable').'">';
				$html.= ''.$clsProperty->getTitle($list_RoomFacilities[$i][$clsProperty->pkey], $list_RoomFacilities[$i]);
				$html.= '</li>';
			}
			$html.= '</ul>';
		}
		return $html;
	}
	//funciton get title room_tyle thtech
	function getTitleRoomType($room_stype_id){
		global $core;
		$clsProperty = new Property();
		$one = $clsProperty->getOne($room_stype_id,'title');
		
        return $one['title'];
	}
	function getContent($pvalTable='', $truncate = true, $limit = 220) {
        $one = $this->getOne($pvalTable,'content');
        $string = $one['content'];
        if ($truncate == true) {
            if (strlen($string) < $limit) {
                return $one['content'];
            } else {
                $html = '<div class="clicSeemore"><div class="c_seemore More">';
                $html .= $this->truncate($string, $limit);
                $html .= '<a class="semoreClick"> More </a>';
                $html .= '</div>';
                $html .= '<div class="c_seemore Less">';
                $html .= $string;
                $html .= '<a class="LessClick"> Less </a>';
                $html .= '</div></div>';
                return $html;
            }
        } else {
            return $string;   
        }
    }
}
?>