<?php
class Tour extends dbBasic{
	function __construct(){
		$this->pkey = "tour_id";
		$this->tbl = DB_PREFIX."tour";
	}
	function checkExitsId($tour_id) {
		$res = $this->getAll("tour_id = '$tour_id' LIMIT 0,1");
		return !empty($res)?1:0;
	}
	function checkExitsYieldID($yield_id){
		global $dbconn, $_LANG_ID;
		$cond = "yield_id='$yield_id'";
		if(MULTIPLE_LANG){
			if($this->checkColumnInTable('lang_id')){
				$clsConfiguration = new Configuration();
				$SiteDefaultLanguage = $clsConfiguration->getValue('SiteDefaultLanguage',LANG_DEFAULT);
				if(!empty($_LANG_ID) && $_LANG_ID!=$SiteDefaultLanguage){
					$cond .= " and lang_id='$_LANG_ID' ";
				}else{
					$cond .= " and lang_id='' ";
				}
			}
		}
		return $this->countItem($cond);
	}
	function getDueDate($tour_id,$start_date){
		$number_day = $this->getOneField('number_day',$tour_id);
		return $start_date+ 24*60*60*($number_day-1);
	}
	function checkBookingConditional($tour_id,$tour_start_date_id){
		$check = 0;
		$day = $this->getOneField('booking_front_date',$tour_id);
		$clsTourStartDate = new TourStartDate();
		$start_date = $clsTourStartDate->getOneField('start_date',$tour_start_date_id);
		if($start_date>time()+($day-1)*24*60*60) return 1;
		return $check;
	}
	function checkStatusDateClass($tour_id,$tour_start_date_id,$tour_class_id){
		$check = 0;
		$clsTourStartDatePrice = new TourStartDatePrice();
		$res = $clsTourStartDatePrice->getAll("tour_id='$tour_id' and tour_start_date_id='$tour_start_date_id' and tour_class_id='$tour_class_id'");
		if($res[0][$clsTourStartDatePrice->pkey]!=''){
			$check = $res[0]['is_hide'];
		}
		else{
			
		}
		return $check;
	}
	function getListCat_V2($tour_id){
		$clsTourDomainStore = new TourDomainStore();
		$list_cat_id = $clsTourDomainStore->getListCatID($tour_id,_DOMAIN_ID);
		if(!empty($list_cat_id)) {
			$tmp = explode('|',$list_cat_id);
			$lst = array();
			for($i=0;$i<count($tmp);$i++){
				if($tmp[$i]!='' && $tmp[$i]!='0')
					$lst[] = $tmp[$i];
			}
			if($lst[0]!='') return ($lst);
		}
		return '';
	}
	
	function getStarNew($pvalTable){
		$one=$this->getOne($pvalTable,'star_id');
		$star_number = $one['star_id'];
		if($star_number==1){
			return '<span style="width: 100%;"></span>';
		}elseif($star_number==2){
			return '<span style="width: 40%;"></span>';
		}elseif($star_number==3){
			return '<span style="width: 60%;"></span>';
		}elseif($star_number==4){
			return '<span style="width: 80%;"></span>';
		}elseif($star_number==5){
			return '<span style="width: 100%;"></span>';
		}else{
			return '<span style="width: 20%;"></span>';
		}
		
	}
	function getRattingStar($pvalTable){
		$clsReviewsTour = new ReviewsTour();
		$rateScore=$clsReviewsTour->getRateScore($pvalTable)*10;
		return '<span style="width: '.$rateScore.'%;"></span>';
		
	}
	function updateMinPriceTour($pvalTable) {
		global $dbconn,$adult_type_id;
		$clsTourPriceGroup = new TourPriceGroup();
		$list_tour_class_id=$this->getOneField('tour_option',$pvalTable)?$this->getOneField('tour_option',$pvalTable):0;
		$list_adult_group_size_id=$this->getOneField('adult_group_size',$pvalTable)?$this->getOneField('adult_group_size',$pvalTable):0;
		
		$sql = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and tour_visitor_type_id =$adult_type_id and tour_class_id IN ($list_tour_class_id) and tour_number_group_id IN ($list_adult_group_size_id)";
		$min_price= $dbconn->GetOne($sql);
		$this->updateOne($pvalTable,"min_price='".$min_price."'");
		
		$sql1="tour_id='$pvalTable' and (tour_class_id NOT IN ($list_tour_class_id))";
		$clsTourPriceGroup->deleteByCond($sql1);
		$sql2="tour_id='$pvalTable' and tour_visitor_type_id='$adult_type_id' and tour_number_group_id NOT IN ($list_adult_group_size_id)";
		$clsTourPriceGroup->deleteByCond($sql2);
		return 1;
    }
	function getPriceDay($tour_id,$tour_class_id,$tour_start_date_id){
		global $clsISO;
		$season = 'low';
		$clsTourStartDatePrice = new TourStartDatePrice();
		$tmp = $clsTourStartDatePrice->getAll("tour_id='$tour_id' and tour_start_date_id='$tour_start_date_id' and tour_class_id='$tour_class_id' limit 0,1");
		$price = $tmp[0]['price'];
		if($price==0||$price==''){
			$price2 = $this->getPriceSeason($season,$tour_id,$tour_class_id);
			return $clsISO->formatNumberToEasyRead($price2);
		}
		$price += $price*(($this->getMarkUp($tour_id,$clsISO->getCustomerType()))/100);
		return $clsISO->formatNumberToEasyRead($price);
	}
	function getPriceSeason($season,$tour_id,$tour_class_id){
		global $clsISO;
		$price = 0;
		$clsTourSeasonPrice = new TourSeasonPrice();
		$lst = $clsTourSeasonPrice->getAll("tour_id='$tour_id' and season='$season' and tour_class_id='$tour_class_id' and _type='client' limit 0,1");
		if($lst[0][$clsTourSeasonPrice->pkey]!=''){
			$price = $lst[0]['price'];
		}
		if($price==0) $price = $this->getOneField('trip_price',$tour_id);
		$price += $price*(($this->getMarkUp($tour_id,$clsISO->getCustomerType()))/100);
		return $price;
	}
	function getMarkUp($tour_id,$_type){
		global $_LANG_ID,$gid;
		$clsCommon = new Common();
		$common_id = 1;
		if($_type!='client'){
			$percent = $this->getOneField('config_markup_tour_agent',$tour_id);
			if($percent==0){
				$percent = $clsCommon->getOneField('config_markup_tour_agent',$common_id);
			}
		}
		else{
			$percent = $this->getOneField('config_markup_tour',$tour_id); 
			if($percent==0){
				$percent = $clsCommon->getOneField('config_markup_tour',$common_id);
			}
		}
		return $percent;
	}
	
	function counTotalTourItinerary($pval){
		$clsTourItinerary = new TourItinerary();
		$res = $clsTourItinerary->getAll("is_trash=0 and tour_id = '$pval'");
		return !empty($res)?count($res):0;
	}
	function getTourTypeRoot($tour_id) {
		$clsISO = new ISO();
		$one = $this->getOne($tour_id);
		$list_cat_id = $one['list_cat_id'];
		$list_cat_id = rtrim($list_cat_id,'|');
		$list_cat_id = ltrim($list_cat_id,'|');
		$list_cat_id = explode('|',$list_cat_id);
		if($clsISO->checkInArray($list_cat_id,'19') == '0') {
			return 0;
		}
		if($clsISO->checkInArray($list_cat_id,'21') == '0') {
			return 1;
		}
	}
	function makeThumb($tour_id){
		$clsISO = new ISO();
		$clsConfigImages = new ConfigImages();
		$_TOUR_HOME = $clsConfigImages->getDimension("_TOUR_HOME"); 
		$image_thumb =  $clsISO->cropImage($this->getOneField('image',$tour_id),$_TOUR_HOME['width'],$_TOUR_HOME['height']);
		$this->updateOne($tour_id,"image_thumb='".addslashes($image_thumb)."'");
		#		
		$_TOUR_RELATED = $clsConfigImages->getDimension("_TOUR_RELATED"); 
		$image_thumb =  $clsISO->cropImage($this->getOneField('image',$tour_id),$_TOUR_RELATED['width'],$_TOUR_RELATED['height']);
		$this->updateOne($tour_id,"image_related='".addslashes($image_thumb)."'");
		#
		return 1;
	}
	function checkTourType($tour_id, $tour_type_id){
		$one = $this->getOne($tour_id);
		$list_tour_type_id = $one['tour_type_id'];
		if($list_tour_type_id=='' || $tour_type_id==''){ return 0;}
		if(str_replace('|'.$tour_type_id.'|','',$list_tour_type_id)==$list_tour_type_id)
			return 0;
		return 1;
	}
	function checkTourItinerary($tour_id){
		$clsTourItinerary = new TourItinerary();
		$one = $this->getOne($tour_id);
		if($one['duration_type']==0 && $one['number_day']==1){
			$listItinerary=$clsTourItinerary->getAll("tour_id='$tour_id'");
			$number_day = $listItinerary?count($listItinerary):0;
			if($number_day > 0)
				return 1;
			return 0;
		}
	}
	function getTitle($tour_id){
		$one = $this->getOne($tour_id,'title');
		return $one['title'];
	}
    function getDeposit($tour_id){
        $one = $this->getOne($tour_id,'deposit');
        return $one['deposit'];
    }
	function getTitlePhoto($tour_id){
		$one = $this->getOne($tour_id,'title_photo');
		return $one['title_photo'];
	}
	function getCatId($tour_id){
		$one = $this->getOne($tour_id,'cat_id');
		return $one['cat_id'];
	}
	function CheckContainer($haystack,$needle){
		$tmp=explode('|',$haystack);
		if(is_array($tmp) && count($tmp)>0){
			if(in_array($needle,$tmp))
				return 1;
			return 0;
		}else{
			return 0;
		}
	}
	function getLocation($tour_id){
		$one = $this->getOne($tour_id,'location');
		return $one['location'];
	}
	function getShortTitle($tour_id){
		$one = $this->getOne($tour_id,'title_short');
		return $one['title_short'];
	}
	function getSlug($tour_id){
		global $_LANG_ID,$core;
		$one=$this->getOne($tour_id,'slug,title');
		return $one['slug']==''?$core->replaceSpace($one['title']):$one['slug'];
	}
	function getBySlug($slug){
		$all=$this->getAll("is_trash=0 and slug = '$slug' limit 0,1");
		return $all[0]['tour_id'];
	}
	function getUspPoints($pvalTable){
		$one=$this->getOne($pvalTable,'usp_points');
		return html_entity_decode($one['usp_points']);
	}
	function getMetaDescription($pvalTable){
		global $_LANG_ID;
		$one=$this->getOne($pvalTable,'overview');
		return html_entity_decode($one['overview']);
	}
    function getKeyInfo($pvalTable){
        $one=$this->getOne($pvalTable,'key_information');
        return html_entity_decode($one['key_information']);
    }
	function getIntro($pvalTable){
		$one=$this->getOne($pvalTable,'intro');
		return html_entity_decode($one['intro']);
	}
	function getContent($pvalTable){
		$one=$this->getOne($pvalTable,'content');
		return html_entity_decode($one['content']);
	}
	function getTripOverview($pvalTable){
		$one=$this->getOne($pvalTable,'overview');
		return html_entity_decode($one['overview']);
	}
	function getTripStay($pvalTable){
		$one=$this->getOne($pvalTable,'stay');
		return html_entity_decode($one['stay']);
	}
	function getTripMeal($pvalTable){
		$one=$this->getOne($pvalTable,'meal');
		return html_entity_decode($one['meal']);
	}
	function getTripactivity($pvalTable){
		$one=$this->getOne($pvalTable,'activity');
		return html_entity_decode($one['activity']);
	}
	function getThingToCarry($pvalTable){
		$one=$this->getOne($pvalTable,'thing_to_carry');
		return html_entity_decode($one['thing_to_carry']);
	}
	function getAdvisory($pvalTable){
		$one=$this->getOne($pvalTable,'advisory');
		return html_entity_decode($one['advisory']);
	}
	function getCancellationPolicy($pvalTable){
		$one=$this->getOne($pvalTable,'cancellation_policy');
		return html_entity_decode($one['cancellation_policy']);
	}
	function getRefundPolicy($pvalTable){
		$one=$this->getOne($pvalTable,'refund_policy');
		return html_entity_decode($one['refund_policy']);
	}
	function getConfirmationPolicy($pvalTable){
		$one=$this->getOne($pvalTable,'confirmation_policy');
		return html_entity_decode($one['confirmation_policy']);
	}
	function getStripIntro($pvalTable){
		$one=$this->getOne($pvalTable,'intro,content');
		if(!empty($one['intro']))
			return strip_tags(html_entity_decode($one['intro']));
		return strip_tags(html_entity_decode($one['content']));
	}
	function getNote($tour_id){
		$one = $this->getOne($tour_id,'note_price_table');
		return html_entity_decode($one['note_price_table']);
	}
	function getLink($tour_id){
		global $_LANG_ID, $extLang;
		return $extLang.'/tour/'.$this->getSlug($tour_id).'-ct'.$tour_id.'.html';
	}
	function getLinkLoad($tour_id){
		global $_LANG_ID, $extLang;
		return 'tour/'.$this->getSlug($tour_id).'-ct'.$tour_id.'.html';
	}
	function getLinkPromotion($tour_id){
		global $_LANG_ID, $extLang;
		return $extLang.'/tour/'.$this->getSlug($tour_id).'-pr'.$tour_id.'.html';
	}
	function getLinkOld($tour_id){
		global $_LANG_ID, $extLang;
		return $extLang.'/tour/'.$this->getSlug($tour_id).'-'.$tour_id.'.html';
	}
	function getLinkBookExtra($tour_id){
		global $_LANG_ID, $extLang;
		return $extLang.'/tour/'.$this->getSlug($tour_id).'/bookingextra.html';
	}
	function getLinkBook($tour_id){
		global $_LANG_ID, $extLang;
		return $extLang.'/tour/'.$this->getSlug($tour_id).'/booking.html';
	}
	function getLinkCart($tour_id){
		global $clsISO;
		return $clsISO->getLink('cart');
	}
	function getLinkBookDeparture($tour_id,$departure_date){
		global $_LANG_ID;
		if($_LANG_ID!='en'){
			$extLang='/'.$_LANG_ID;
		}else{
			$extLang='';
		}
		return $extLang.'/tour/'.$this->getSlug($tour_id).'_'.$departure_date.'/booking.html';
	}
	function getLinkBookPromotion($tour_id,$start_date){
		global $_LANG_ID, $extLang;
		vnSessionSetVar('start_date',$start_date);
		return $extLang.'/tours/'.$this->getSlug($tour_id).'/bookingpromotion.html';
	}
	function getFileProgram($tour_id){
		$one = $this->getOne($tour_id,'file_programme');
		return $one['file_programme'];
	}
	function getLinkConfirm($tour_id){
		return '/book-confirmation/'.$this->getSlug($tour_id).'.html';
	}
	function getLinkCustomize($tour_id){
		global $extLang;
		return $extLang.'/tour/enquiry/'.$this->getSlug($tour_id).'.html';
	}
	function getLinkDetailStartDate($tour_id,$start_date){
		global $_LANG_ID, $extLang;
		return $extLang.'/tour/'.$this->getSlug($tour_id).'_t'.$tour_id.'d'.$start_date.'.html';
	}
	function getTripDepart($pvalTable){
		$one=$this->getOne($pvalTable,'depart_from');
		return $one['depart_from'];
	}
	function getTripReturn($pvalTable){
		$one=$this->getOne($pvalTable,'return_from');
		return $one['return_from'];
	}
    function getStar($tour_id) {
        $one = $this->getOne($tour_id,'star_id');
        return $one['star_id'];
    }
	function getHighlight($tour_id){
		global $_LANG_ID;
		$one = $this->getOne($tour_id,'highlight');
		if($one['highlight']!='')
			return html_entity_decode($one['highlight']);
		return '';
	}
	function getInclusion($tour_id){
		global $_LANG_ID;
		$one = $this->getOne($tour_id,'inclusion');
		if($one['inclusion']!='')
			return html_entity_decode($one['inclusion']);
		return '';
	}
	function getExclusion($tour_id){
		global $_LANG_ID;
		$one = $this->getOne($tour_id,'exclusion');
		if($one['exclusion']!='')
			return html_entity_decode($one['exclusion']);
		return '';
	}
	function getAddInformation($tour_id){
		global $_LANG_ID;
		$one = $this->getOne($tour_id,'information');
		if($one['information']!='')
			return html_entity_decode($one['information']);
		return '';
	}
	function getTripGroupSize($tour_id){
		$one = $this->getOne($tour_id,'trip_groupsize');
		return $one['trip_groupsize'];
	}
	function getTripOldPrice($tour_id){
		$one = $this->getOne($tour_id,'trip_old_price');
		$clsISO = new ISO();
		if(!empty($one['trip_old_price']))
			return $clsISO->formatPrice($one['trip_old_price']).' '.$clsISO->getRate();
	}
	function getMinStartDateID($tour_id,$start_date){
		$clsTourStartDate = new TourStartDate();
		$lst = $clsTourStartDate->getAll("tour_id='$tour_id' and start_date='".$start_date."' and is_trash=0 order by start_date asc limit 0,1");
		return $lst[0]['tour_start_date_id'];
	}
	function getDepartureCityFrom($tour_id) {
		$clsCity = new City();
		$clsCountry = new Country();
		$clsTourDestination = new TourDestination();
		$all = $clsTourDestination->getAll("is_trash=0 and tour_id = '$tour_id' order by order_no asc limit 0,1");
		return '<a class="color_333" href="'.$clsCity->getLink($all[0]['city_id']).'" title="'.$clsCity->getTitle($all[0]['city_id']).'">'.$clsCity->getTitle($all[0]['city_id']).'</a>';
	}
	function getDepartureCity($tour_id) {
		$clsCity = new City();
		$one = $this->getOne($tour_id,'departure_point_id');
		return $clsCity->getTitle($one['departure_point_id']);
	}
	function getListDeparturePoint($tour_id) {
		$clsCity = new City();
		$one = $this->getOne($tour_id,'list_departure_point_id');
		$list_deopart = trim($one['list_departure_point_id'],'|');
        $list_deopart = explode('|',$list_deopart);
        $depart_point = '';
        foreach ($list_deopart as $key=>$item) {
            $name_city = $clsCity->getTitle($item);
            if($key == 0){
                $depart_point .=$name_city;
            }else{
                $depart_point .=', '.$name_city;
            }
        }
		return $depart_point;
	}
	function getListDeparturePointLink($tour_id) {
		$clsCity = new City();
		$one = $this->getOne($tour_id,'list_departure_point_id');
		$list_deopart = trim($one['list_departure_point_id'],'|');
        $list_deopart = explode('|',$list_deopart);
        $depart_point = '';
        foreach ($list_deopart as $key=>$item) {
            $name_city = $clsCity->getTitle($item);
            if($key == 0){
                $depart_point .='<a class="linkcity" target="_parent" href="'.$clsCity->getLink($item).'" title="'.$name_city.'">'.$name_city.'</a>';
            }else{
                $depart_point .=', <a class="linkcity" target="_parent" href="'.$clsCity->getLink($item).'" title="'.$name_city.'">'.$name_city.'</a>';
            }

        }
		return $depart_point;
	}
    function getListActivities($tour_id) {
        $one = $this->getOne($tour_id,'list_activities_id');
        $list_activities_id = trim($one['list_activities_id'],'|');
        $list_activities_id = str_replace('|',',',$list_activities_id);
        return $list_activities_id;
    }
    function getListService($tour_id) {
        $one = $this->getOne($tour_id,'list_service_id');
        $list_service_id = trim($one['list_service_id'],'|');
        $list_service_id = str_replace('|',',',$list_service_id);
        return $list_service_id;
    }
	function getLinkDepartureCity($tour_id) {
		$clsCity = new City();
		$one = $this->getOne($tour_id,'departure_point_id');
		return $clsCity->getLink($one['departure_point_id'],'tour');
	}
	function getIntroTripPrice($tour_id) {
		global $_LANG_ID;
		$one = $this->getOne($tour_id,'intro_trip_price');
		if($one['intro_trip_price']!='')
			return html_entity_decode($one['intro_trip_price']);
		return '';
	}
	function getTourStartDateID($tour_id,$now_day){
		global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id;
		$clsProperty=new Property();
		$clsTourPriceGroup = new TourPriceGroup();
		$clsTourStartDate = new TourStartDate();
		
		$listTourDeparture = $clsTourStartDate->getAll("is_trash=0 and is_online=1 and tour_id ='$tour_id' and start_date > '$now_day' order by start_date ASC", $clsTourStartDate->pkey.",tour_id,start_date");
		
		$tour_start_date_id = $listTourDeparture[0][$clsTourStartDate->pkey];
		return $tour_start_date_id;
		
	}
	function getTripDepartureDate($tour_id,$now_day){
		global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id;
		$clsProperty=new Property();
		$clsTourPriceGroup = new TourPriceGroup();
		$clsTourStartDate = new TourStartDate();
		
		$listTourDeparture = $clsTourStartDate->getAll("is_trash=0 and is_online=1 and tour_id ='$tour_id' and start_date > '$now_day' order by start_date ASC", $clsTourStartDate->pkey.",tour_id,start_date");
		
		$start_date = $listTourDeparture[0]['start_date'];
		return $start_date;
	}
	function getTripPrice($pvalTable,$departure,$is_agent=0,$type=''){
		global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id;
		#-- FCK CODE
		$clsProperty=new Property();
		$clsTourPriceGroup = new TourPriceGroup();
		$clsTourStore = new TourStore();
		if(_IS_PROMOTION==1){
			$Sql_Promotion = "SELECT promot FROM ".DB_PREFIX."promotion WHERE clsTable='Tour' and target_id='$pvalTable' and is_online=1 and ".$departure." between  start_date and end_date order by start_date ASC limit 0,1";
			$promotion= $dbconn->GetOne($Sql_Promotion);
			if(_IS_DEPARTURE==1){
				if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
					$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
				}else{
					$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
				}
			}else{
				$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
			}
			
			$priceAdultAds = $dbconn->GetOne($SQL);
			$pricePromotion=$priceAdultAds - ($promotion*$priceAdultAds/100);
			#
			if($type=='value'){
				return $clsISO->formatPrice($priceAdultAds);
			}else{
				if($priceAdultAds > 0){
					if($type=='detail'){
						if($_LANG_ID=='vn'){
							if($promotion >0){
								return '<span class="block color_main size18"><span class="size15 color_666 line_through">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span> '.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>';
							}else{
								return '<span class="block color_main size18">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
							}
						}else{
							if($promotion >0){
								return '<span class="block color_main size18"><span class="size15 color_666 line_through">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>';
								
							}else{
								return '<span class="block color_main size18">'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
							}
						}
					}else{
						if($_LANG_ID=='vn'){
							if($promotion >0){
								return '<div class="price">
									  <div class="discounted_price">
											<span class="color_main"><span class="size15 color_666 line_through">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>'.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>
									  </div>
									</div>';
								
							}else{
								return '<div class="price">
									  <div class="discounted_price">
											<span class="color_main">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>
									  </div>
									</div>';
							}
						}else{
							if($promotion >0){
								return '<div class="price">
									<div class="discounted_price">
										<span class="color_main"><span class="size15 color_666 line_through">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>
									</div>
								</div>';
								
							}else{
								return '<div class="price">
									  <div class="discounted_price">
											<span class="color_main">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>
									  </div>
									</div>';
							}
						}
					}
				}else {
					if($type=='detail'){
						return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
					}else{
						
					}				
				}
				
			}
		}else{
			if(_IS_DEPARTURE==1){
				if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
					$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
				}else{
					$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
				}
			}else{
				$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
			}
			
			$priceAdultAds = $dbconn->GetOne($SQL);
			#
			if($type=='value'){
				return $clsISO->formatPrice($priceAdultAds);
			}else{
				if($priceAdultAds > 0){
					if($type=='detail'){
						if($_LANG_ID=='vn'){
							return '<span class="block size18"><span class="size12 color_666">'.$clsISO->getRate().'</span> '.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
						}else{
							return '<span class="block size18"><span class="size12 color_666">'.$clsISO->getRate().'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
						}
						
					}else{
						if($_LANG_ID=='vn'){
							return '<div class="price">
								  <div class="discounted_price">
										<span>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>
								  </div>
								</div>';
						}else{
							return '<div class="price">
								  <div class="discounted_price">
										<span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>
								  </div>
								</div>';
						}
					}
				}else {
					if($type=='detail'){
						return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
					}else{
						
					}				
				}
				
			}
		}
	}
	function getTripPriceOneDeparture($tour_id,$start_date,$is_agent=''){
		global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id;
		$clsProperty=new Property();
		$clsTourPriceGroup = new TourPriceGroup();
		$clsTourStartDate = new TourStartDate();
		
		
		$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price > 0 and departure_date ='$start_date'  and departure_date <> '' and tour_visitor_type_id='$adult_type_id'";
		//return $SQL;
		
		$priceAdultAds = $dbconn->GetOne($SQL);
		if($priceAdultAds >0){
			if($is_agent=='AGENT'){
				if($priceAdultAds >0){
					return $clsISO->formatPrice($priceAdultAds - (DISCOUNT_AGENT*$priceAdultAds/100)).$clsISO->getShortRate();
				}else{
					return '';
					$SQL = "SELECT MIN(price_single_supply) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price_single_supply > 0 and departure_date ='$start_date' and tour_visitor_type_id='0'";
					$priceAdultAds = $dbconn->GetOne($SQL);
					return $priceAdultAds?$clsISO->formatPrice($priceAdultAds - (DISCOUNT_AGENT*$priceAdultAds/100)).$clsISO->getShortRate():'';
				}
			}elseif($is_agent=='CTV'){
				if($priceAdultAds >0){
					return $clsISO->formatPrice($priceAdultAds - (DISCOUNT_CTV*$priceAdultAds/100)).$clsISO->getShortRate();
				}else{
					return '';
					$SQL = "SELECT MIN(price_single_supply) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price_single_supply > 0 and departure_date ='$start_date' and tour_visitor_type_id='0'";
					$priceAdultAds = $dbconn->GetOne($SQL);
					return $priceAdultAds?$clsISO->formatPrice($priceAdultAds - (DISCOUNT_CTV*$priceAdultAds/100)).$clsISO->getShortRate():'';
				}
			}else{
				if($priceAdultAds >0){
					return $clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate();
				}else{
					return '';
					$SQL = "SELECT MIN(price_single_supply) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price_single_supply > 0 and departure_date ='$start_date' and tour_visitor_type_id='0'";
					$priceAdultAds = $dbconn->GetOne($SQL);
					return $clsISO->formatPrice($priceAdultAds)?$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate():'';
				}
			}
		}else{
			return '';
		}
		
	}
	function getTripPriceOneDepartureValue($tour_id,$start_date,$is_agent=''){
		global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id;
		$clsProperty=new Property();
		$clsTourPriceGroup = new TourPriceGroup();
		$clsTourStartDate = new TourStartDate();
		
		
		$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price > 0 and departure_date ='$start_date'  and departure_date <> '' and tour_visitor_type_id='$adult_type_id'";
		//return $SQL;
		
		$priceAdultAds = $dbconn->GetOne($SQL);
		if($priceAdultAds >0){
			return $priceAdultAds;
		}else{
			return '';
			$SQL = "SELECT MIN(price_single_supply) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price_single_supply > 0 and departure_date ='$start_date' and tour_visitor_type_id='0'";
			$priceAdultAds = $dbconn->GetOne($SQL);
			return $priceAdultAds;
		}
		
	}
	function getTripPriceNoDeparture($tour_id,$is_agent=''){
		global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id, $clsISO;

		$clsProperty=new Property();
		$clsTourPriceGroup = new TourPriceGroup();
		$clsTourStore = new TourStore();
		
		$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price > 0 and departure_date ='0' and tour_visitor_type_id='$adult_type_id'";

		$priceAdultAds = $dbconn->GetOne($SQL);
		
		if($is_agent=='AGENT'){
			if($priceAdultAds >0){
				return $clsISO->formatPrice($priceAdultAds - (DISCOUNT_AGENT*$priceAdultAds/100)).$clsISO->getShortRate();
			}else{
				return '';
				$SQL = "SELECT MIN(price_single_supply) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price_single_supply > 0 and departure_date ='0' and tour_visitor_type_id='0'";
				$priceAdultAds = $dbconn->GetOne($SQL);
				return $priceAdultAds?$clsISO->formatPrice($priceAdultAds - (DISCOUNT_AGENT*$priceAdultAds/100)).$clsISO->getShortRate():'';
			}
		}elseif($is_agent=='CTV'){
			if($priceAdultAds >0){
				return $clsISO->formatPrice($priceAdultAds - (DISCOUNT_CTV*$priceAdultAds/100)).$clsISO->getShortRate();
			}else{
				return '';
				$SQL = "SELECT MIN(price_single_supply) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price_single_supply > 0 and departure_date ='0' and tour_visitor_type_id='0'";
				$priceAdultAds = $dbconn->GetOne($SQL);
				return $priceAdultAds?$clsISO->formatPrice($priceAdultAds - (DISCOUNT_CTV*$priceAdultAds/100)).$clsISO->getShortRate():'';
			}
		}else{
			if($priceAdultAds >0){
				return $clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate();
			}else{
				return '';
				$SQL = "SELECT MIN(price_single_supply) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price_single_supply > 0 and departure_date ='0' and tour_visitor_type_id='0'";
				$priceAdultAds = $dbconn->GetOne($SQL);
				return $clsISO->formatPrice($priceAdultAds)?$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate():'';
			}
		}
	}
	function getTripPriceNoDepartureValue($tour_id,$is_agent=''){
		global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id, $clsISO;

		$clsProperty=new Property();
		$clsTourPriceGroup = new TourPriceGroup();
		$clsTourStore = new TourStore();
		
		$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price > 0 and departure_date ='0' and tour_visitor_type_id='$adult_type_id'";

		$priceAdultAds = $dbconn->GetOne($SQL);
		if($priceAdultAds >0){
			return $priceAdultAds;
		}else{
			return '';
			$SQL = "SELECT MIN(price_single_supply) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$tour_id' and price_single_supply > 0 and departure_date ='0' and tour_visitor_type_id='0'";
			$priceAdultAds = $dbconn->GetOne($SQL);
			return $priceAdultAds;
		}
	}
	function getTripPriceAds($pvalTable,$is_agent=''){
		global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id;
		
		$one = $this->getOne($pvalTable,'price_ads');
		$priceAdultAds=$one['price_ads'];
		
		if($priceAdultAds >0){
			if($is_agent=='AGENT'){
				$priceAdultAds = $priceAdultAds - (DISCOUNT_AGENT*$priceAdultAds/100);
			}elseif($is_agent=='CTV'){
				$priceAdultAds = $priceAdultAds - (DISCOUNT_CTV*$priceAdultAds/100);
			}else{
				$priceAdultAds = $priceAdultAds;
			}
			return $clsISO->formatPrice($priceAdultAds).''.$clsISO->getRate();
		}else{
			return '';
		}	
	}
	function getTripPrice2019($pvalTable,$departure,$is_agent=0,$type=''){
		global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id;
		
		$clsProperty=new Property();
		$clsTourPriceGroup = new TourPriceGroup();
		$clsTourStore = new TourStore();
		if(_IS_PROMOTION==1){
			$Sql_Promotion = "SELECT promot FROM ".DB_PREFIX."promotion WHERE clsTable='Tour' and target_id='$pvalTable' and is_online=1 and ".$departure." between  start_date and end_date order by start_date ASC limit 0,1";
			$promotion= $dbconn->GetOne($Sql_Promotion);
			if(_IS_DEPARTURE==1){
				if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
					$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
				}else{
					$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
				}
			}else{
				$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
			}
			
			$priceAdultAds = $dbconn->GetOne($SQL);
			$pricePromotion=$priceAdultAds - ($promotion*$priceAdultAds/100);
			#
			if($type=='value'){
				return $clsISO->formatPrice($priceAdultAds);
			}else{
				if($priceAdultAds > 0){
					if($type=='detail'){
						if($_LANG_ID=='vn'){
							if($promotion >0){
								return '<span class="block text_right size20"> '.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>';
							}else{
								return '<span class="block text_right size20">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
							}
						}else{
							if($promotion >0){
								return '<span class="block text_right size20">'.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>';
								
							}else{
								return '<span class="block text_right size20">'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
							}
						}
					}else{
						if($_LANG_ID=='vn'){
							if($promotion >0){
								return '<span class="block text_right size20">'.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>';
								
							}else{
								return '<span class="block text_right size20">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
							}
						}else{
							if($promotion >0){
								return '<span class="block text_right size20">'.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>';
							}else{
								return '<span class="block text_right size20">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>';
							}
						}
					}
				}else {
					if($type=='detail'){
						return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
					}else{
						
					}				
				}
				
			}
		}else{
			if(_IS_DEPARTURE==1){
				if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
					$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
				}else{
					$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
				}
			}else{
				$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
			}
			
			$priceAdultAds = $dbconn->GetOne($SQL);
			#
			if($type=='value'){
				return $clsISO->formatPrice($priceAdultAds);
			}else{
				if($priceAdultAds > 0){
					if($type=='detail'){
						if($_LANG_ID=='vn'){
							return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span> '.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
						}else{
							return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
						}
						
					}else{
						if($_LANG_ID=='vn'){
							return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
						}else{
							return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
						}
					}
				}else {
					if($type=='detail'){
						return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
					}else{
						
					}				
				}
			}
		}
	}
	function getTripMinPrice($pvalTable,$start_date='', $is_offer=0){
		global $core,$extLang,$_lang,$clsConfiguration,$adult_type_id;
		$clsProperty=new Property();
		
		return $trip_price;
	}
	function getLTripPriceDetail($pvalTable,$type=''){
		global $core,$extLang,$_lang,$clsConfiguration;
		$clsProperty=new Property();
		#
		$clsISO = new ISO();
		$one = $this->getOne($pvalTable);
		$tour_start_date_id = $this->getMinStartDateID($pvalTable);
		if($tour_start_date_id!=''){
			$clsTourStartDate = new TourStartDate();

			return $clsISO->formatPrice($clsTourStartDate->getOneField("price",$tour_start_date_id)).' '.$clsISO->getRate();
		}
		$trip_price = $one['trip_price'];
		if($trip_price=='' || $trip_price==0){ 
			return '<a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('Contact').'</a>';
		}elseif($type=='header'){
		return '<span class="original_price"><span>'.$clsISO->getRate().' '.$clsISO->formatPrice($trip_price).'<p class="per_person">'.$core->get_Lang('per adult').'</p>
              </span></span>';	
		}
		return '<span class="amount">'.$clsISO->getRate().' '.$clsISO->formatPrice($trip_price).'</span><span class="amount"><span class="per_person_new"> '.$core->get_Lang('per adult').'</span></span>';
	}
	function getTripPriceOrgin($tour_id){
		global $clsISO;
		$one = $this->getOne($tour_id,'trip_price');
		$trip_price = $one['trip_price'];
		if($trip_price==0)
			return 0;
		return $clsISO->processSmartNumber($trip_price);
	}
	function getTripPriceOld($pvalTable){
		$clsISO = new ISO();
		$one = $this->getOne($pvalTable,'trip_old_price');
		if(!empty($one['trip_old_price'])) {
			return $clsISO->formatPrice($one['trip_old_price']).' '.$clsISO->getRate();
		}
	}
	function getLTripPriceOld($pvalTable){
		global $core,$extLang,$_lang,$clsConfiguration;
		$clsProperty=new Property();
		
		$clsISO = new ISO();
		$one = $this->getOne($pvalTable,'trip_price');
		if(!empty($one['trip_price'])) {
			return $clsISO->formatPrice($one['trip_price']);
		}
	}
    function getTripPriceNewPro($pvalTable,$departure,$is_agent=0,$type=''){
        global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id,$hasAPI;
		if($hasAPI){
			$price = 0;
			$clsVietISOSDK = new VietISOSDK();
			$tour_id = $pvalTable;
			$currency_id = $clsISO->getDefaultCurrency();
			$currency = $clsISO->getRateSign($currency_id);
			$info_price = $clsVietISOSDK->getInfoPrice($tour_id);
			$tour_option_id = $this->getOneField('tour_option_id',$tour_id);
			$is_sic = $tour_option_id==1?1:0;
			//$clsISO->pre($info_price);die;
			$yieldOp = $info_price['yieldOp'];
			$yieldPax = $info_price['yieldPax'];
			$yield_op_id = 0;
			if(!empty($yieldOp)){
				foreach($yieldOp as $k_op=>$one_op){
					if($one_op['start_date']<=time()&&time()<=$one_op['due_date']){
						$yield_op_id = $one_op['yield_op_id'];
						break;
					}elseif(empty($yield_op_id) && $one_op['start_date']<=time()){
						$yield_op_id = $one_op['yield_op_id'];
					}
				}
			}
			if(!empty($yield_op_id)){
				if($is_sic){
					$yieldNett = $info_price['yieldNett'];
				}else{
					$yieldEstimate = $info_price['yieldEstimate'];
					if(!empty($yieldPax)){
						foreach($yieldPax as $k_pax=>$onePax){
							$oneEstimate = $clsVietISOSDK->getOneEstimate(array("yield_op_id"=>$yield_op_id,"yield_pax_id"=>$onePax['yield_pax_id'],"currency_id"=>$currency_id,"yieldEstimate"=>$yieldEstimate));
							$op_price_markup = $clsISO->convertRateUpgrade($oneEstimate['currency_id'],$currency_id,$oneEstimate['op_price_markup']);
							if(empty($price)){
								$price = $op_price_markup;
							}elseif($price>$op_price_markup){
								$price = $op_price_markup;
							}
						}
					}
				}
			}
			if($type == 'value'){
				return $clsISO->roundPrice($price,$currency_id,1);
			}else{
				return $clsISO->formatPriceRead($price,$currency_id);
			}
		}else{
			 $clsProperty=new Property();
			$clsTourPriceGroup = new TourPriceGroup();
			$clsPromotion = new Promotion();
			$clsPromotionItem = new PromotionItem();
			$clsTourStore = new TourStore();
			if(_IS_PROMOTION==1){
	//            $Sql_Promotion = "SELECT promot FROM ".DB_PREFIX."promotion WHERE clsTable='Tour' and target_id='$pvalTable' and is_online=1 and ".$departure." between  start_date and end_date order by start_date ASC limit 0,1";
				$Sql_Promotion = $sql ="SELECT p.promot FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE pi.is_online = 1 and p.is_online = 1 and p.type = 'Tour' and pi.taget_id =$pvalTable and ".$departure." between  p.start_date and p.end_date order by start_date ASC limit 0,1";;
				$promotion= $dbconn->GetOne($Sql_Promotion);
				if(_IS_DEPARTURE==1){
					if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
						$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
					}else{
						$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
					}
				}else{
					$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
				}
				//return $SQL;
				$priceAdultAds = $dbconn->GetOne($SQL);
				$pricePromotion=$priceAdultAds - ($promotion*$priceAdultAds/100);
				if($type=='value'){
					return $clsISO->formatPrice($priceAdultAds);
				}elseif ($type=='nomem'){
					if($priceAdultAds > 0) {
						if($_LANG_ID=='vn'){
							return '<div class="price">
									  <div class="discounted_price">
											<span>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>
									  </div>
									</div>';
						}else{
							return '<div class="price">
									  <div class="discounted_price">
											<span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>
									  </div>
									</div>';
						}
					}
				}elseif ($type=='detailnomem'){
					if($priceAdultAds > 0) {
						if($_LANG_ID=='vn'){
							return '<span class="block size18"><span class="size12 color_666">'.$clsISO->getRate().'</span> '.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
						}else{
							return '<span class="block size18"><span class="size12 color_666">'.$clsISO->getRate().'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
						}
					}
				}else{
					if($priceAdultAds > 0){
						if($type=='detail'){
							if($_LANG_ID=='vn'){
								if($promotion >0){
									return '<span class="block color_main size18"><span class="size15 color_666 line_through">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span> '.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>';
								}else{
									return '<span class="block color_main size18">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
								}
							}else{
								if($promotion >0){
									return '<span class="block color_main size18"><span class="size15 color_666 line_through">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>';

								}else{
									return '<span class="block color_main size18">'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
								}
							}
						}else{
							if($_LANG_ID=='vn'){
								if($promotion >0){
									return '<div class="price">
										  <div class="discounted_price">
												<span class="color_main"><span class="size15 color_666 line_through">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>'.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>
										  </div>
										</div>';

								}else{
									return '<div class="price">
										  <div class="discounted_price">
												<span class="color_main">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>
										  </div>
										</div>';
								}
							}else{
								if($promotion >0){
									return '<div class="price">
										<div class="discounted_price">
											<span class="color_main"><span class="size15 color_666 line_through">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>
										</div>
									</div>';

								}else{
									return '<div class="price">
										  <div class="discounted_price">
												<span class="color_main">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>
										  </div>
										</div>';
								}
							}
						}
					}else {
						if($type=='detail'){
							return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
						}else{

						}
					}
	//                return $pricePromotion;
				}

			}else{
				if(_IS_DEPARTURE==1){
					if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
						$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
					}else{
						$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
					}
				}else{
					$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
				}

				$priceAdultAds = $dbconn->GetOne($SQL);
				#
				if($type=='value'){
					return $clsISO->formatPrice($priceAdultAds);
				}else{
					if($priceAdultAds > 0){
						if($type=='detail'){
							if($_LANG_ID=='vn'){
								return '<span class="block size18"><span class="size12 color_666">'.$clsISO->getRate().'</span> '.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
							}else{
								return '<span class="block size18"><span class="size12 color_666">'.$clsISO->getRate().'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
							}

						}else{
							if($_LANG_ID=='vn'){
								return '<div class="price">
									  <div class="discounted_price">
											<span>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>
									  </div>
									</div>';
							}else{
								return '<div class="price">
									  <div class="discounted_price">
											<span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>
									  </div>
									</div>';
							}
						}
					}else {
						if($type=='detail'){
							return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
						}else{

						}
					}

				}
			}
		}
       
    }
    function getTripPriceNewPro2019($pvalTable,$departure,$is_agent=0,$type=''){
    global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id;

    $clsProperty=new Property();
    $clsTourPriceGroup = new TourPriceGroup();
    $clsPromotion = new Promotion();
    $clsPromotionItem = new PromotionItem();
    $clsTourStore = new TourStore();
    if(_IS_PROMOTION==1){
//            $Sql_Promotion = "SELECT promot FROM ".DB_PREFIX."promotion WHERE clsTable='Tour' and target_id='$pvalTable' and is_online=1 and ".$departure." between  start_date and end_date order by start_date ASC limit 0,1";
        $Sql_Promotion = $sql ="SELECT p.promot FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE pi.is_online = 1 and p.is_online = 1 and p.type = 'Tour' and pi.taget_id =$pvalTable and ".$departure." between  p.start_date and p.end_date order by start_date ASC limit 0,1";
        $promotion= $dbconn->GetOne($Sql_Promotion);

        if(_IS_DEPARTURE==1){
            if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
                $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
            }else{
                $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
            }
        }else{
            $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
        }
        $priceAdultAds = $dbconn->GetOne($SQL);
        $pricePromotion=$priceAdultAds - ($promotion*$priceAdultAds/100);
        if($type=='value'){
            return $clsISO->formatPrice($priceAdultAds);
        }elseif ($type=='nomem'){
            if($priceAdultAds > 0) {
                if ($_LANG_ID == 'vn') {
                    return '<span class="block text_right size20"><span class="block size13">' . $core->get_Lang('From') . '</span> ' . $clsISO->formatPrice($priceAdultAds) . $clsISO->getShortRate() . '</span>';
                } else {
                    return '<span class="block text_right size20"><span class="block size13">' . $core->get_Lang('From') . '</span> ' . $clsISO->getShortRate() . '' . $clsISO->formatPrice($priceAdultAds) . '</span>';
                }
            }

        }elseif ($type=='detailnomem'){

            if($priceAdultAds > 0) {
                if($_LANG_ID=='vn'){
                    return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span> '.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                }else{
                    return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
                }
            }
        }elseif($type=='box_home'){
            if($priceAdultAds > 0){
                if($type=='detail'){
                    if($_LANG_ID=='vn'){
                        if($promotion >0){
                            return '<span class="block text_right size20"><span class="block size13" style="font-size: 16px !important;">'.$core->get_Lang('From').'</span> '.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>';
                        }else{
                            return '<span class="block text_right size20"><span class="block size13" style="font-size: 16px !important;">'.$core->get_Lang('From').'</span>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                        }
                    }else{
                        if($promotion >0){
                            return '<span class="block text_right size20"><span class="block size13" style="font-size: 16px !important;">'.$core->get_Lang('From').'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>';

                        }else{
                            return '<span class="block text_right size20"><span class="block size13" style="font-size: 16px !important;">'.$core->get_Lang('From').'</span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
                        }
                    }
                }else{
                    if($_LANG_ID=='vn'){
                        if($promotion >0){
                            return '<span class="block size20"><del style="font-size: 14px;font-weight: normal;color: #ffffff;">'.$clsISO->formatPrice($priceAdultAds).''.$clsISO->getShortRate().'</del>'.' '.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>';

                        }else{
                            return '<span class="block  size20"><span class="block size13" style="font-size: 16px !important;">'.$core->get_Lang('From').'</span>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                        }
                    }else{
                        if($promotion >0){
                            return '<span class="block text_right size20"><del style="font-size: 14px;font-weight: normal;color: #ffffff;">'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</del></br>'.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>';
                        }else{
                            return '<span class="block text_right size20"><span class="block size13" style="font-size: 16px !important;">'.$core->get_Lang('From').'</span>'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>';
                        }
                    }
                }
            }else {
                if($type=='detail'){
                    return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
                }else{

                }
            }
//                return $pricePromotion;
        }else{
            if($priceAdultAds > 0){
                if($type=='detail'){
                    if($_LANG_ID=='vn'){
                        if($promotion >0){
                            return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span> '.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>';
                        }else{
                            return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                        }
                    }else{
                        if($promotion >0){
                            return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>';

                        }else{
                            return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
                        }
                    }
                }else{
                    if($_LANG_ID=='vn'){
                        if($promotion >0){
                            return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span><del style="font-size: 14px;font-weight: normal;color: #888888;">'.$clsISO->formatPrice($priceAdultAds).''.$clsISO->getShortRate().'</del>'.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>';

                        }else{
                            return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                        }
                    }else{
                        if($promotion >0){
                            return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span><del style="font-size: 14px;font-weight: normal;color: #888888;">'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</del>'.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>';
                        }else{
                            return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span>'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>';
                        }
                    }
                }
            }else {
                if($type=='detail'){
                    return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
                }else{

                }
            }
//                return $pricePromotion;
        }

    }else{
        if(_IS_DEPARTURE==1){
            if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
                $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
            }else{
                $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
            }
        }else{
            $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
        }

        $priceAdultAds = $dbconn->GetOne($SQL);
        #
        if($type=='value'){
            return $clsISO->formatPrice($priceAdultAds);
        }else{
            if($priceAdultAds > 0){
                if($type=='detail'){
                    if($_LANG_ID=='vn'){
                        return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span> '.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                    }else{
                        return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
                    }

                }else{
                    if($_LANG_ID=='vn'){
                        return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                    }else{
                        return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
                    }
                }
            }else {
                if($type=='detail'){
                    return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
                }else{

                }
            }
        }
    }
}
    function getTripPriceNewPro2020($pvalTable,$departure,$is_agent=0,$type=''){
        global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id,$deviceType;

        $clsProperty=new Property();
        $clsTourPriceGroup = new TourPriceGroup();
        $clsPromotion = new Promotion();
        $clsPromotionItem = new PromotionItem();
        $clsTourStore = new TourStore();
        if(_IS_PROMOTION==1){
//            $Sql_Promotion = "SELECT promot FROM ".DB_PREFIX."promotion WHERE clsTable='Tour' and target_id='$pvalTable' and is_online=1 and ".$departure." between  start_date and end_date order by start_date ASC limit 0,1";
            $Sql_Promotion = $sql ="SELECT p.promot FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE pi.is_online = 1 and p.is_online = 1 and p.type = 'Tour' and pi.taget_id =$pvalTable and ".$departure." between  p.start_date and p.end_date order by start_date ASC limit 0,1";
            $promotion= $dbconn->GetOne($Sql_Promotion);

            if(_IS_DEPARTURE==1){
                if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
                    $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
                }else{
                    $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
                }
            }else{
                $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
            }
            $priceAdultAds = $dbconn->GetOne($SQL);
            //var_dump($priceAdultAds);die();
            $pricePromotion=$priceAdultAds - ($promotion*$priceAdultAds/100);
            if($type=='value'){
                return $clsISO->formatPrice($priceAdultAds);
            }elseif ($type=='nomem'){
                if($priceAdultAds > 0) {
                    if ($_LANG_ID == 'vn') {
						
                        return '<span class="size24 color_fb1111 text_bold"> ' . $clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate() . '</span>';
                    } else {
                        return '<span class="size24 color_fb1111 text_bold"> ' . $clsISO->getShortRate() . '' . $clsISO->formatPrice($priceAdultAds) . '</span>';
                    }
                }

            }elseif ($type=='detailnomem'){

                if($priceAdultAds > 0) {
                    if($_LANG_ID=='vn'){
                        return '<span class="size24 color_fb1111 text_bold"> '.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                    }else{
                        return '<span class="size24 color_fb1111 text_bold"> '.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
                    }
                }
            }elseif($type=='box_home'){
                if($priceAdultAds > 0){
                    if($type=='detail'){
                        if($_LANG_ID=='vn'){
                            if($promotion >0){
                                return '<span class="block text_right size20"><span class="block size13" style="font-size: 16px !important;">'.$core->get_Lang('From').'</span> '.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>';
                            }else{
                                return '<span class="block text_right size20"><span class="block size13" style="font-size: 16px !important;">'.$core->get_Lang('From').'</span>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                            }
                        }else{
                            if($promotion >0){
                                return '<span class="block text_right size20"><span class="block size13" style="font-size: 16px !important;">'.$core->get_Lang('From').'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>';

                            }else{
                                return '<span class="block text_right size20"><span class="block size13" style="font-size: 16px !important;">'.$core->get_Lang('From').'</span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
                            }
                        }
                    }else{
                        if($_LANG_ID=='vn'){
                            if($promotion >0){
								return '<del>'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</del><span class="size24 color_fb1111 text_bold">'.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>';
								if($deviceType=='phone'){
									
								}else{
									 return '<span class="size24 color_fb1111 text_bold">'.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span><del>'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</del>';

								}
                               
                            }else{
                                return '<span class="size24 color_fb1111 text_bold">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                            }
                        }else{
                            if($promotion >0){
                                return '<span class="size24 color_fb1111 text_bold"><span class="size18">'.$clsISO->getShortRate().'</span>'.$clsISO->formatPrice($pricePromotion).'</span><del>'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</del>'.' ';
                            }else{
                                return '<span class="size24 color_fb1111 text_bold"></span>'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>';
                            }
                        }
                    }
                }else {
                    if($type=='detail'){
                        return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
                    }else{

                    }
                }
//                return $pricePromotion;
            }else{
                if($priceAdultAds > 0){
                    if($type=='detail'){
                        if($_LANG_ID=='vn'){
                            if($promotion >0){

                                return '<del>'.$clsISO->formatPrice($priceAdultAds).' '.$clsISO->getShortRate().'</del>'.' <span class="size24 color_fb1111 text_bold">'.$clsISO->formatPrice($pricePromotion).' <span class="size24">'.$clsISO->getShortRate().'</span></span> ';
                            }else{
                                return '<span class="size24 color_fb1111 text_bold">'.$clsISO->formatPrice($priceAdultAds).' '.$clsISO->getShortRate().'</span>';
                            }
                        }else{
                            if($promotion >0){
                                return '<del>'.$clsISO->getShortRate().'</del>'.$clsISO->formatPrice($priceAdultAds).' <span class="size24 color_fb1111 text_bold"><span class="size24">'.$clsISO->getShortRate().'</span> '.$clsISO->formatPrice($pricePromotion).'</span> ';
                            }else{
                                return '<span class="size24 color_fb1111 text_bold">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>';
                            }
                        }
                    }else{
                        if($_LANG_ID=='vn'){
                            if($promotion >0){
								return '<p class="price_old mb0 color_1c1c1c">Chỉ từ <del>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</del></p>
								<p class="mb0"><span class="size22 color_fb1111 text_bold">'.$clsISO->formatPrice($pricePromotion).'<span class="size18">'.$clsISO->getShortRate().'</span></span></p>
								<p class="text mb0 color_666">/Du khách</p>';
								
								if($deviceType=='phone'){
									
								}else{
									return '<span class="size24 color_fb1111 text_bold">'.$clsISO->formatPrice($pricePromotion).'<span class="size18">'.$clsISO->getShortRate().'</span></span><del>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</del>';
								}
                                
                            }else{
								return '<p class="price_old mb0 color_1c1c1c">Chỉ từ</p>
									<p class="mb0"><span class="size22 color_fb1111 text_bold">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span></p>
									<p class="text mb0 color_666">/Du khách</p>';
									
								if($deviceType=='phone'){
									
								}else{
									 return '<span class="size24 color_fb1111 text_bold">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';		
								}
                               
                            }
                        }else{
                            if($promotion >0){
                                //return '<span class="size24 color_fb1111 text_bold"><del style="font-size: 14px;font-weight: normal;color: #888888;">'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</del>'.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>';
                                return '<span class="size24 color_fb1111 text_bold"><span class="size18">'.$clsISO->getShortRate().'</span> '.$clsISO->formatPrice($pricePromotion).'</span> <del>'.$clsISO->getShortRate().'</del>'.' '.$clsISO->formatPrice($priceAdultAds).' ';
                            }else{
                                return '<span class="size24 color_fb1111 text_bold">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>';
                            }
                        }
                    }
                }else {
                    if($type=='detail'){

                    }else{

                    }
                }
//                return $pricePromotion;
            }

        }else{
            if(_IS_DEPARTURE==1){
                if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
                    $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
                }else{
                    $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
                }
            }else{
                $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
            }

            $priceAdultAds = $dbconn->GetOne($SQL);
            #
            if($type=='value'){
                return $clsISO->formatPrice($priceAdultAds);
            }else{
                if($priceAdultAds > 0){
                    if($type=='detail'){
                        if($_LANG_ID=='vn'){
                           return '<p class="mb0"><span class="size22 color_fb1111 text_bold">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span></p>';
                        }else{
                            return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
                        }

                    }else{
                        if($_LANG_ID=='vn'){
							return '<p class="price_old mb0 color_1c1c1c">Chỉ từ</p>
									<p class="mb0"><span class="size22 color_fb1111 text_bold">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span></p>
									<p class="text mb0 color_666">/Du khách</p>';
                        }else{
                            //return '<span class="block text_right size20"><span class="block size13">'.$core->get_Lang('From').'</span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
                            return '<span class="size24 color_fb1111 text_bold"><span class="size18">'.$clsISO->getShortRate().'</span> '.$clsISO->formatPrice($priceAdultAds).'</span> ';
                        }
                    }
                }else {
                    if($type=='detail'){
                        return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
                    }else{

                    }
                }
            }
        }
    }
	function getTourPromotion($tour_id){
		global $clsISO;
		$cond = "is_trash=0 and is_online=1 and $tour_id IN (SELECT tour_id FROM ".DB_PREFIX."tour_store WHERE is_trash=0 and _type='PROMOTION')";
		$lstAll = $this->getAll($cond);
		return $lstAll[0]['tour_id'];
	}
	
	
	function getTripCode($pvalTable){
		$one=$this->getOne($pvalTable,'trip_code');
		return strtoupper($one['trip_code']);
	}
	function getTablePriceTitle($pvalTable){
		global $core;
		$one = $this->getOne($pvalTable,'table_price_title');
		return !empty($one['table_price_title'])?$one['table_price_title']:$core->get_Lang('Price Options');
	}
	function getTripDuration2020($tour_id,$type=' '){
		// type=' ' <=> 3 days 2 nights || type='/ '<=> 3 days/ 2 nights || type=', '<=> 3 days, 2 nights 
		global $_LANG_ID,$core,$_lang;
		$one=$this->getOne($tour_id,'duration_type,duration_custom,number_day,number_night');
		$duration_type = $one['duration_type'];
		if($duration_type==1){ 
			return $one['duration_custom'];
		}
		$number_day = intval($one['number_day']);
		$number_night = intval($one['number_night']);
		if($number_day==1 && $number_night==0){
			{ return $core->get_Lang('Full day'); }
		}
		#
		if($number_night==0){
			$number_night = $number_day - 1;
		}
		
		#
		$str = '';
		$str .= $number_day. ' '.($number_day > 1 ? $core->get_Lang('days'):$core->get_Lang('day'));
		$str .= $type;
		$str .= $number_night. ' '.($number_night > 1 ? $core->get_Lang('nights'):$core->get_Lang('night'));
		return $str;
	}
	
	
	
	function getTripDuration($tour_id){
		global $_LANG_ID,$core,$_lang;
		$one=$this->getOne($tour_id,'duration_type,duration_custom,number_day,number_night');
		$duration_type = $one['duration_type'];
		if($duration_type==1){ 
			return $one['duration_custom'];
		}
		$number_day = intval($one['number_day']);
		$number_night = intval($one['number_night']);
		if($number_day==1 && $number_night==0){
			{ return $core->get_Lang('Full day'); }
		}
		#
		if($number_night==0 && $number_day >0){
			$number_night = $number_day - 1;
		}
		
		#
		$str = '';
		$str .= $number_day. ' '.($number_day > 1 ? $core->get_Lang('days'):$core->get_Lang('day'));
		
		$str .= ' / '.$number_night. ' '.($number_night > 1 ? $core->get_Lang('nights'):$core->get_Lang('night'));
		return $str;
	}
	function getTripDuration2019($tour_id,$type=''){
		global $_LANG_ID,$core,$_lang;
		$one=$this->getOne($tour_id,'duration_type,duration_custom,number_day,number_night');
		$duration_type = $one['duration_type'];
		if($duration_type==1){ 
			return $one['duration_custom'];
		}
		$number_day = intval($one['number_day']);
		$number_night = intval($one['number_night']);
		if($number_day==1 && $number_night==0){
			{ return $core->get_Lang('Full day'); }
		}
		#
		if($number_night==0){
			$number_night = $number_day - 1;
		}
		
		#
		$str = '';
		$str .= $number_day. ' '.($number_day > 1 ? $core->get_Lang('days'):$core->get_Lang('day'));
		if($type!=''){
			$str .= ' '.$type.' ';
		}else{
			$str .= ' ';
		}
		
		$str .= $number_night. ' '.($number_night > 1 ? $core->get_Lang('nights'):$core->get_Lang('night'));
		return $str;
	}
	function getLTripDuration($tour_id,$type=''){
		global $_LANG_ID,$core,$_lang;
		$one=$this->getOne($tour_id,'duration_type,duration_custom,number_day,number_night,dra_hours,dra_min');
		$duration_type = $one['duration_type'];
        $number_day = intval($one['number_day']);
        $number_night = intval($one['number_night']);
        $dra_hours = intval($one['dra_hours']);
        $dra_min = intval($one['dra_min']);
		if($duration_type==1){ 
			if($type=='booking'){
                if($dra_hours>0 && $dra_min<=0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').'</span>';
                }elseif ($dra_hours<=0 && $dra_min>0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="spanncontentt">'.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }elseif ($dra_hours>0 && $dra_min>0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').' '.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }else{
                    return ' <span class="spanncontentt">'.$one['duration_custom'].'</span>';
                }
			}else{
                if($dra_hours>0 && $dra_min<=0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').'</span>';
                }elseif ($dra_hours<=0 && $dra_min>0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="spanncontentt">'.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }elseif ($dra_hours>0 && $dra_min>0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').' '.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }else{
                    return ' <span class="text">'.$one['duration_custom'].'</span>';
                }
            }
		}

		if($number_day==1 && $number_night==0){
			{
			if($type=='booking'){
				return ' <span class="spanncontentt">'.$core->get_Lang('Full Day').'</span>';
			}
			return ' <span class="text">'.$core->get_Lang('Full Day').'</span>'; }
		}
		#
		if($number_day>1 && $number_night==0){
			$number_night = $number_day - 1;
		}
		if($number_day<=0 && $number_night<=0){
            if($type=='booking'){
                if($dra_hours>0 && $dra_min<=0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').'</span>';
                }elseif ($dra_hours<=0 && $dra_min>0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="spanncontentt">'.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }elseif ($dra_hours>0 && $dra_min>0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').' '.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }else{
                    return '';
                }
            }else{
                if($dra_hours>0 && $dra_min<=0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="text">'.$dra_hours.' '.$core->get_Lang('Hours').'</span>';
                }elseif ($dra_hours<=0 && $dra_min>0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="text">'.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }elseif ($dra_hours>0 && $dra_min>0){
                    return '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="text">'.$dra_hours.' '.$core->get_Lang('Hours').' '.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }else{
                    return '';
                }
            }
        }
		#
		if($type=='booking'){
            if($dra_hours>0 && $dra_min<=0){
                $str = '<span class="spanncontentt">';
                $str .= $dra_hours. ' '.($dra_hours > 1 ? $core->get_Lang('Hours'):$core->get_Lang('Hour'));
                $str .='</span>';
            }elseif ($dra_hours<=0 && $dra_min>0){
                $str = '<span class="spanncontentt">';
                $str .= $dra_min. ' '.($dra_min > 1 ? $core->get_Lang('Mins'):$core->get_Lang('Min'));
                $str .='</span>';
            }elseif ($dra_hours>0 && $dra_min>0){
                $str = '<span class="spanncontentt">';
                $str .= $dra_hours. ' '.($dra_hours > 1 ? $core->get_Lang('Hours'):$core->get_Lang('Hour'));
                $str .=' <span class="spanncontentt">';
                $str .= $dra_min. ' '.($dra_min > 1 ? $core->get_Lang('Mins'):$core->get_Lang('Min'));
                $str .='</span>';
            }else{
                $str = '<span class="spanncontentt">';
                $str .= $number_day. ' '.($number_day > 1 ? $core->get_Lang('Days'):$core->get_Lang('Day'));
                $str .=' <span class="spanncontentt">';
                $str .= $number_night. ' '.($number_night > 1 ? $core->get_Lang('Nights'):$core->get_Lang('Night'));
                $str .='</span>';
            }
		}else{
            if($dra_hours>0 && $dra_min<=0){
                $str = '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="text">';
                $str .= $dra_hours. ' '.($dra_hours > 1 ? $core->get_Lang('Hours'):$core->get_Lang('Hour'));
                $str .='</span>';
            }elseif ($dra_hours<=0 && $dra_min>0){
                $str = '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="text">';
                $str .= $dra_min. ' '.($dra_min > 1 ? $core->get_Lang('Mins'):$core->get_Lang('Min'));
                $str .='</span>';
            }elseif ($dra_hours>0 && $dra_min>0){
                $str = '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="text">';
                $str .= $dra_hours. ' '.($dra_hours > 1 ? $core->get_Lang('Hours'):$core->get_Lang('Hour'));
                $str .=' <span class="text">';
                $str .= $dra_min. ' '.($dra_min > 1 ? $core->get_Lang('Mins'):$core->get_Lang('Min'));
                $str .='</span>';
            }else{
                $str = '<span class="text">';
                $str .= $number_day. ' '.($number_day > 1 ? $core->get_Lang('Days'):$core->get_Lang('Day'));
                $str .=' <span class="text">';
                $str .= $number_night. ' '.($number_night > 1 ? $core->get_Lang('Nights'):$core->get_Lang('Night'));
                $str .='</span>';
            }
		}
		return $str;
	}
    function getLTripDuration1($tour_id,$type=''){
        global $_LANG_ID,$core,$_lang;
        $one=$this->getOne($tour_id,'duration_type,duration_custom,number_day,number_night,dra_hours,dra_min');
        $duration_type = $one['duration_type'];
        $number_day = intval($one['number_day']);
        $number_night = intval($one['number_night']);
        $dra_hours = intval($one['dra_hours']);
        $dra_min = intval($one['dra_min']);
        if($duration_type==1){
            if($type=='booking'){
                if($dra_hours>0 && $dra_min<=0){
                    return '<span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').'</span>';
                }elseif ($dra_hours<=0 && $dra_min>0){
                    return '<span class="spanncontentt">'.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }elseif ($dra_hours>0 && $dra_min>0){
                    return '<span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').' '.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }else{
                    return '<span class="spanncontentt">'.$one['duration_custom'].'</span>';
                }
            }else{
                if($dra_hours>0 && $dra_min<=0){
                    return '<span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').'</span>';
                }elseif ($dra_hours<=0 && $dra_min>0){
                    return '<span class="spanncontentt">'.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }elseif ($dra_hours>0 && $dra_min>0){
                    return '<span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').' '.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }else{
                    return '<span class="text">'.$one['duration_custom'].'</span>';
                }
            }
        }

        if($number_day==1 && $number_night==0){
            {
                if($type=='booking'){
                    return '<span class="spanncontentt">'.$core->get_Lang('Full Day').'</span>';
                }
                return '<span class="text">'.$core->get_Lang('Full Day').'</span>'; }
        }
        #
        if($number_day>1 && $number_night==0){
            $number_night = $number_day - 1;
        }
        if($number_day<=0 && $number_night<=0){
            if($type=='booking'){
                if($dra_hours>0 && $dra_min<=0){
                    return '<span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').'</span>';
                }elseif ($dra_hours<=0 && $dra_min>0){
                    return '<span class="spanncontentt">'.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }elseif ($dra_hours>0 && $dra_min>0){
                    return '<<span class="spanncontentt">'.$dra_hours.' '.$core->get_Lang('Hours').' '.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }else{
                    return '';
                }
            }else{
                if($dra_hours>0 && $dra_min<=0){
                    return '<span class="text">'.$dra_hours.' '.$core->get_Lang('Hours').'</span>';
                }elseif ($dra_hours<=0 && $dra_min>0){
                    return '<span class="text">'.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }elseif ($dra_hours>0 && $dra_min>0){
                    return '<span class="text">'.$dra_hours.' '.$core->get_Lang('Hours').' '.$dra_min.' '.$core->get_Lang('Min').'</span>';
                }else{
                    return '';
                }
            }
        }
        #
        if($type=='booking'){
            if($dra_hours>0 && $dra_min<=0){
                $str = '<span class="spanncontentt">';
                $str .= $dra_hours. ' '.($dra_hours > 1 ? $core->get_Lang('Hours'):$core->get_Lang('Hour'));
                $str .='</span>';
            }elseif ($dra_hours<=0 && $dra_min>0){
                $str = '<span class="spanncontentt">';
                $str .= $dra_min. ' '.($dra_min > 1 ? $core->get_Lang('Mins'):$core->get_Lang('Min'));
                $str .='</span>';
            }elseif ($dra_hours>0 && $dra_min>0){
                $str = '<span class="spanncontentt">';
                $str .= $dra_hours. ' '.($dra_hours > 1 ? $core->get_Lang('Hours'):$core->get_Lang('Hour'));
                $str .='</span> <span class="spanncontentt">';
                $str .= $dra_min. ' '.($dra_min > 1 ? $core->get_Lang('Mins'):$core->get_Lang('Min'));
                $str .='</span>';
            }else{
                $str = '<span class="spanncontentt">';
                $str .= $number_day. ' '.($number_day > 1 ? $core->get_Lang('Days'):$core->get_Lang('Day'));
                $str .='</span> <span class="spanncontentt">';
                $str .= $number_night. ' '.($number_night > 1 ? $core->get_Lang('Nights'):$core->get_Lang('Night'));
                $str .='</span>';
            }
        }else{
            if($dra_hours>0 && $dra_min<=0){
                $str = '<span class="text">';
                $str .= $dra_hours. ' '.($dra_hours > 1 ? $core->get_Lang('Hours'):$core->get_Lang('Hour'));
                $str .='</span>';
            }elseif ($dra_hours<=0 && $dra_min>0){
                $str = '<span class="text">';
                $str .= $dra_min. ' '.($dra_min > 1 ? $core->get_Lang('Mins'):$core->get_Lang('Min'));
                $str .='</span>';
            }elseif ($dra_hours>0 && $dra_min>0){
                $str = '<span class="text">';
                $str .= $dra_hours. ' '.($dra_hours > 1 ? $core->get_Lang('Hours'):$core->get_Lang('Hour'));
                $str .='</span> <span class="text">';
                $str .= $dra_min. ' '.($dra_min > 1 ? $core->get_Lang('Mins'):$core->get_Lang('Min'));
                $str .='</span>';
            }else{
                $str = '<span class="text">';
                $str .= $number_day. ' '.($number_day > 1 ? $core->get_Lang('Days'):$core->get_Lang('Day'));
                $str .='</span> <span class="text">';
                $str .= $number_night. ' '.($number_night > 1 ? $core->get_Lang('Nights'):$core->get_Lang('Night'));
                $str .='</span>';
            }
        }
        return $str;
    }
	function getNumberDayDuration($tour_id){
		global $core,$_LANG_ID;
		
		$one=$this->getOne($tour_id,'duration_type,duration_custom,number_day,number_night');
		$duration_type = $one['duration_type'];
		if($duration_type==1){ 
			return $one['duration_custom'];
		}
		$number_day = intval($one['number_day']);
		$number_night = intval($one['number_night']);
		if($number_day==1 && $number_night==0){
			{ return $core->get_Lang('Full Day'); }
		}
		#
		$str = '';
		$day2019 ='<span>'.$core->get_Lang('days').'</span>';
		$str .= $number_day. ' '.($number_day > 1 ? $day2019:$day2019);
		return $str;
	}
	function getTripDuration00($tour_id, $only_day=false){
		global $_LANG_ID,$core;
		$one = $this->getOne($tour_id, "number_day,number_night");
		$number_day = $one['number_day'];
		$number_night = $one['number_night'];
		if(intval($number_day)==1 && intval($number_night)==0){ return $core->get_Lang('Full day'); }
		if(intval($number_day)==0 && intval($number_night)==0){ return '';}
		
		$day = $number_day .(intval($number_day) > 1 ? $core->get_Lang('Days') : $core->get_Lang('Day'));
		if($only_day){ return $day;}
		$night = $number_night .(intval($number_night) > 1 ? $core->get_Lang('Nights') : $core->get_Lang('Night'));
		return $day.'/'.$night;
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
	function getUrlImage($pvalTable){
		global $clsISO;
		$oneTable = $this->getOne($pvalTable, "image");
		$url_image = $oneTable['image'];
		return $clsISO->tripslashUrl($url_image);
	}
	
	
	#- Start_Price_Cruise_Table
	function getTableCruiseTitle($pvalTable){
		global $_LANG_ID;
		$one = $this->getOne($pvalTable);
		if($one['table_cruise_title_'.$_LANG_ID] == '') {
			return 'Cabin type';
		}else {
			return $one['table_cruise_title_'.$_LANG_ID];
		}
	}
	function getTourPriceGroup($tour_id,$departure_date){
		global $core,$mod,$act,$clsISO,$clsConfiguration,$_LANG_ID,$adult_type_id;
		
		$clsTour = new Tour();
		$clsTourPriceGroup = new TourPriceGroup();
		$clsTourProperty = new TourProperty();
		$clsTourOption = new TourOption();
		$clsProperty = new Property();

		#
		$currency = $clsConfiguration->getValue('Currency');
		$lstTourVisitorType  = $clsTourProperty->getAll("is_trash=0 and type='VISITORTYPE' order by tour_property_id ASC");
		$VisitorTypeIdAdult = $lstTourVisitorType[0][$clsTourProperty->pkey];
		
		
		$lstTourOption = $clsTour->getOneField('tour_option',$tour_id);
		$lstOption = array();
		if($lstTourOption != '' && $lstTourOption != '0'){
			$TMP = explode(',',$lstTourOption);
			for($i=0; $i<count($TMP); $i++){
				if(!in_array($TMP[$i],$lstOption)){
					$lstOption[] = $TMP[$i];
				}
			}
		}
		$assign_list['lstOption']=$lstOption;
		
		$lstAdultSizeGroup = $clsTour->getOneField('adult_group_size',$tour_id);
		$lstAdultSize = array();
		if($lstAdultSizeGroup != '' && $lstAdultSizeGroup != '0'){
			$TMP = explode(',',$lstAdultSizeGroup);
			for($i=0; $i<count($TMP); $i++){
				if(!in_array($TMP[$i],$lstAdultSize)){
					$lstAdultSize[] = $TMP[$i];
				}
			}
		}
		$assign_list['lstAdultSize']=$lstAdultSize;

		
		#
		if(!empty($lstOption)){
			$html .= '
			<table class="table tbl-grid h-tbl-grid" style="border:1px solid #ccc; min-width:100%;">
				<thead style="background:#9b9fa0; color:#fff">
					<tr>
						<td class="gridheader" width="150" height="60" rowspan="2" style="padding:0; width:150px">
							<div class="h-boxdiagonal">
								<div class="h-diagonal"></div>
								<div class="boxdiagonal-class"><span class="table_price_title">'.$core->get_Lang('Tour Class').'</span></div>
								<div class="boxdiagonal-group"><span class="table_price_title">'.$core->get_Lang('Group Number').'</span></div>
							</div>
						</td>';
						foreach($lstTourVisitorType as $a=>$b){
							if($clsTourPriceGroup->CheckPriceByNumberGroupClass($tour_id,$b[$clsTourProperty->pkey]) && $b[$clsTourProperty->pkey]==$adult_type_id){
									$html .= '<td class="gridheader" height="40" align="center" colspan="'.count($lstAdultSize).'">';
									$html .= '<span>'.$clsTourProperty->getTitle($b[$clsTourProperty->pkey]).'</span>
								</td>';
							}
						}
						$html .= '<td class="gridheader" rowspan="2" align="center">
								<span class="table_price_title">'.$core->get_Lang('Single supplement').'</span>
									</td>';	
						$html .= '</tr><tr>';	
			foreach($lstTourVisitorType as $a=>$b){
				if($clsTourPriceGroup->CheckPriceByNumberGroupClass($tour_id,$b[$clsTourProperty->pkey])){
					foreach($lstAdultSize as $k=>$v){
						if($b[$clsTourProperty->pkey]==$adult_type_id){
							$html .= '<td class="gridheader" style="text-align:center;">'.$clsTourOption->getTitle($v).'</td>';
						}
					}
				}
			}
			$html .= '</tr>';		
			$html.= '
				</thead>';
			foreach($lstOption as $key=>$val){
			$html .= '
					<tr>
						<td style="text-align:left;">'.$clsTourOption->getTitle($val).'</td>';
				foreach($lstTourVisitorType as $a=>$b){
					if($clsTourPriceGroup->CheckPriceByNumberGroupClass($tour_id,$b[$clsTourProperty->pkey])){
						foreach($lstAdultSize as $k=>$v){
							if($b[$clsTourProperty->pkey]==$adult_type_id){
								$html .= '<td class="text-center h-price-val" '.$tour_id.'-'.$val.'-'.$v.'-'.$b[$clsTourProperty->pkey].'-'.$departure_date.'>';
								if($clsTourPriceGroup->getPromotionValue($tour_id,$val,$v,$b[$clsTourProperty->pkey],$departure_date) >0){
									$html .= '<span class="color_666 line_through">'.$clsISO->getShortRate().$clsTourPriceGroup->getPriceTableTourGroup($tour_id,$val,$v,$b[$clsTourProperty->pkey],$departure_date).'</span>';
								}
								$html .= '<span class="bold color_main size18">'.($clsTourPriceGroup->getPriceTableTourGroupPromotion($tour_id,$val,$v,$b[$clsTourProperty->pkey],$departure_date)>0?$clsISO->getShortRate().$clsTourPriceGroup->getPriceTableTourGroupPromotion($tour_id,$val,$v,$b[$clsTourProperty->pkey],$departure_date):'-').'</span>';
							$html .= '</td>';

							}
						}
					}
				}
			$html .= '
					<td class="text-center h-price-val" id="'.$departure_date.'">
						'.$clsTourPriceGroup->getPriceSingleSupply($tour_id,$val,$departure_date).'
					</td>';	
			$html .= '
					</tr>';
				}
			//}
			$html .= '
			</table>';
		}
	
		#
		return $html;
	}
	function getTripMinPriceTourGroup($pvalTable,$start_date=0,$type='Default',$is_offer=0){
		global $core,$extLang,$_lang,$clsConfiguration,$dbconn,$clsISO,$adult_type_id;
		$clsProperty=new Property();
		$clsTourPriceGroup = new TourPriceGroup();
		
		$lstAdultSizeGroup = $this->getOneField('adult_group_size',$pvalTable);
		#
		$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date='".$start_date."' and tour_visitor_type_id='$adult_type_id' and tour_number_group_id IN ($lstAdultSizeGroup)";
		$price = $dbconn->GetOne($SQL);
		
		$Sql_Promotion = "SELECT promot FROM ".DB_PREFIX."promotion WHERE clsTable='Tour' and target_id='$pvalTable' and ".time()." between  start_date and end_date order by start_date ASC limit 0,1";
		$promotion= $dbconn->GetOne($Sql_Promotion);
		
		if($_LANG_ID=='vn'){
			if($price > 0){
				if($type=='List'){
					if($promotion > 0){
						$pricePromotion=$price-($price*$promotion/100);
						return '<del class="block">'.$price.' '.$clsISO->getRate().'</del> 
					<span class="block color_ea4c42">'.$clsISO->formatPrice($pricePromotion,1).' '.$clsISO->getRate().'</span>';
					}else{
						return '
					<span class="block color_ea4c42">'.$clsISO->formatPrice($price).' '.$clsISO->getRate().'</span>';
					}
				}elseif($type=='Number'){
					return $price;
				}elseif($type=='Detail'){
					if($promotion > 0){
						$pricePromotion=$price-($price*$promotion/100);
						return '<p class="mb0">'.$core->get_Lang('Prices stating from').':</p> 
						<p class="price_trip mb0"><del>'.$price.' '.$clsISO->getRate().'</del> <span> '.$clsISO->formatPrice($pricePromotion,1).' '.$clsISO->getRate().'</span></p>
						<p>'.$core->get_Lang('Per person').':</p> 
						';
					}else{
						return '<p class="mb0">'.$core->get_Lang('Prices stating from').':</p> 
						<p class="price_trip mb0"><span>'.$clsISO->formatPrice($price).'  '.$clsISO->getRate().' </span></p>
						<p>'.$core->get_Lang('Per person').':</p>';
					}
				}else{
					if($promotion > 0){
						$pricePromotion=$price-($price*$promotion/100);
						return '<span>'.$core->get_Lang('From').' <span class="text-line-through">  '.$price.' '.$clsISO->getShortRate().'</span> <label> $'.$clsISO->formatPrice($pricePromotion,1).'</label></span>';
					}else{
						return '<span>'.$core->get_Lang('From').'<label> '.$clsISO->formatPrice($price).' '.$clsISO->getShortRate().'</label></span>';
					}
				}
			}else{
				return '<a class="linkContact" href="'.$clsISO->getLink('contact').'" title="'.$core->get_Lang('Contact').'">'.$core->get_Lang('Contact').' </a>';
			}	
		}else{
			if($price > 0){
				if($type=='List'){
					if($promotion > 0){
						$pricePromotion=$price-($price*$promotion/100);
						return '<del class="block">'.$clsISO->getRate().' '.$price.'</del> 
					<span class="block color_ea4c42">'.$clsISO->getRate().' '.$clsISO->formatPrice($pricePromotion,1).'</span>';
					}else{
						return '
					<span class="block color_ea4c42">'.$clsISO->getRate().' '.$clsISO->formatPrice($price).'</span>';
					}
				}elseif($type=='Number'){
					return $price;
				}elseif($type=='Detail'){
					if($promotion > 0){
						$pricePromotion=$price-($price*$promotion/100);
						return '<p class="mb0">'.$core->get_Lang('Prices stating from').':</p> 
						<p class="price_trip mb0"><del>'.$clsISO->getRate().' '.$price.'</del> <span> '.$clsISO->getRate().' '.$clsISO->formatPrice($pricePromotion,1).'</span></p>
						<p>'.$core->get_Lang('Per person').':</p> 
						';
					}else{
						return '<p class="mb0">'.$core->get_Lang('Prices stating from').':</p> 
						<p class="price_trip mb0"><span> '.$clsISO->getRate().' '.$clsISO->formatPrice($price).'</span></p>
						<p>'.$core->get_Lang('Per person').':</p>';
					}
				}else{
					if($promotion > 0){
						$pricePromotion=$price-($price*$promotion/100);
						return '<span>'.$core->get_Lang('From').' <span class="text-line-through">  $'.$price.'</span> <label> $'.$clsISO->formatPrice($pricePromotion,1).'</label></span>';
					}else{
						return '<span>'.$core->get_Lang('From').'<label> $'.$clsISO->formatPrice($price).'</label></span>';
					}
				}
			}else{
				return '<a class="linkContact" href="'.$clsISO->getLink('contact').'" title="'.$core->get_Lang('Contact').'">'.$core->get_Lang('Contact').' </a>';
			}	
		}
	}
	function getPriceCruiseDateFrom($pvalTable){
		global $_LANG_ID;
		$one=$this->getOne($pvalTable,'table_cruise_date_from');
		if($one['table_cruise_date_from'] == '') {
			return '1st May - 30th Sep';
		}else {
			return $one['table_cruise_date_from'];
		}
	}
	function getPriceCruiseDateTo($pvalTable){
		global $_LANG_ID;
		$one=$this->getOne($pvalTable,'table_cruise_date_to');
		if($one['table_cruise_date_to'] == '') {
			return 'From 1st Oct - 30th Apr';
		}else {
			return $one['table_cruise_date_to'];
		}
	}
	#- End_Price_Cruise_Table
	function getTourCategory($tour_id){
	}
	function getTripDayText($tour_id){
		global $_LANG_ID,$core;

		$one=$this->getOne($tour_id,'number_day');
		$number_day=intval($one['number_day']);
		if($number_day==0 || $number_day=='' || $number_day==1)
			return '1 <i>day</i>';
		return $number_day.' <i>days</i>';
	}
	function checkCityAround($pvalTable,$city_id){
		$oneItem = $this->getOne($pvalTable,'list_city_id');
		$str = $oneItem['list_city_id'];
		$str_array = explode('|',$str);
		for($i=0;$i<count($str_array);$i++){
			if($str_array[$i]==$city_id){
				return 1;
			}
		}
		return 0;
	}
	function convertDuration($duration){
		if($duration=='Full day'){return '1-0';}
		$temp=str_replace(' ','', $duration);
		$temp=explode('/', $temp);
		$day=intval($temp[0]);
		$night=intval($temp[1]);
		return $day.'-'.$night;
	}
	function convertDurationDay($duration){
		if($duration=='Full day'){return '1-0';}
		$temp=str_replace(' ','', $duration);
		$temp=explode('/', $temp);
		$day=intval($temp[0]);
		$night=intval($temp[1]);
		return $day;
	}
	function convertDurationDaySort($duration){
		if($duration=='Full day'){return '1';}
		$temp=str_replace(' ','', $duration);
		$temp=explode('/', $temp);
		$day=intval($temp[0]);
		$night=intval($temp[1]);
		return $day;
	}
	function getAllDuration($current=0, $tour_category_id, $city_id){
		global $_LANG_ID, $lang;
		$cond="is_trash=0";
		$cond.=($tour_category_id!='' && $tour_category_id!=0)?" and list_cat_id like '%|".$tour_category_id."|%'":"";
		$cond.=($city_id!='' && $city_id!=0) ? " and list_city_id like '%|".$city_id."|%'":"";
		
		$allTour = $this->getAll($cond);
		$temp='';
		for ($i=0; $i < count($allTour); $i++) {
			$temp.=$this->getTripDuration($allTour[$i]['tour_id']).'|';
		}
		$str = array_unique(explode('|', $temp));
		$html='<option value="">-- '.$lang->get_Lang('Select').' --</option>';
		foreach ($str as $key => $value) {
			$selected=($current==$this->convertDuration($value))?' selected="selected"':'';
			if($value!='' && $value!='n/a'){
				$html.='<option value="'.$this->convertDuration($value).'"'.$selected.'>'.$value.'</option>';
			}
		}
		return $html;
	}
	function getAllCat($curent='',$destination_id=''){
		$clsTourCategory=new TourCategory();
		$cond='';
		$cond.=($destination_id!=0 && $destination_id!="")?" and list_destination like '%|$destination_id|%'":"";
		$all = $this->getAll("is_trash=0".$cond);
		if(is_array($all)){
			foreach ($all as $key => $value) {
				$temp.=$value['tour_category_id'].'|';
			}
		}
		$str = array_unique(explode('|', $temp));
		$html='<option value="0">-- '.$core->get_Lang('Select').' --</option>';
		if(is_array($str)){
			foreach ($str as $k => $v) {
				if($v!=0){
					$selected=($curent==$v)?' selected="selected"':'';
					$html.='<option value="'.$v.'"'.$selected.'>'.$clsTourCategory->getTitle($v).'</option>';
				}
			}
		}
		return $html;
	}
	function getDay($tour_id){
		global $core;
		$one = $this->getOne($tour_id,'duration_type,duration_custom,number_day,number_night');
		if($one['duration_type'] == 0) {
			$number_day=$one['number_day'];
			$number_night=$one['number_night'];
			if($number_day==1){
				return $number_day.' '.$core->get_Lang('day');
			}
			if($one['number_day']==0 && $one['number_day']==0){
				return '';
			}
			return $one['number_day'].' '.$core->get_Lang('days');
		}
		elseif($one['duration_type'] == 1) {
			return $one['duration_custom'];
		}
	}
	function getNumberDay($tour_id){
		$one = $this->getOne($tour_id,'duration_type,duration_custom,number_day,number_night');
		$duration_type = $one['duration_type'];
		if($duration_type==1){
			return $one['duration_custom'];
		}else{
			return $one['number_day'];
		}
	}
	function getDurationCustom($tour_id){
		$one = $this->getOne($tour_id,'duration_type,duration_custom,number_day,number_night');
		$duration_type = $one['duration_type'];
		if($duration_type==1){
			return $one['duration_custom'];
		}else{
			return '';
		}
	}
	
	function getDateDepartureStart($tour_id){
		global $core, $clsISO;
		$one = $this->getOne($tour_id,'departure_date');
		if(!empty($one['departure_date'])) {
			return date('d/m/Y',time($one['departure_date']));
		}
	}
	
	function getDateDepartureEnd($tour_id){
		global $core, $clsISO;
		
		$one = $this->getOne($tour_id,'duration_type,departure_date,number_day,departure_date');
		$duration_type = $one['duration_type'];
		if($duration_type==1){
			return date('m/d/Y',$one['departure_date']);
		}else{
			$num_day = $one['number_day'];
			$start_date = $one['departure_date'];
			$end_date =  date('m/d/Y',strtotime('+'.$num_day.' day', $start_date));
			return $end_date;
		}
		
	}
	function getEndDate($start_date,$tour_id){
		global $core, $clsISO;
		
		$one = $this->getOne($tour_id,'duration_type,number_day,departure_date');
		$duration_type = $one['duration_type'];
		
		if($duration_type==1){
			$num_day = 0;
			$end_date =  strtotime('+'.$num_day.' day', $start_date);
			return $end_date;
		}else{
			$num_day = $one['number_day'];
			$end_date =  strtotime('+'.$num_day.' day', $start_date);
			return $end_date;
		}
		
	}
	function getTextEndDate($start_date,$tour_id){
		global $core, $clsISO;
		
		$one = $this->getOne($tour_id,'duration_type,number_day,departure_date');
		$duration_type = $one['duration_type'];
		$start_date=strtotime($start_date);
		if($duration_type==1){
			$num_day = 0;
			$end_date =  strtotime('+'.$num_day.' day', $start_date);
			return $end_date;
		}else{
			$num_day = $one['number_day'];
			$end_date =  strtotime('+'.$num_day.' day', $start_date);
			return $end_date;
		}
		
	}
	function checkDurationCustom($tour_id){
		$one = $this->getOne($tour_id,'duration_type');
		return $one['duration_type'];
	}
	function getCityAround($tour_id, $is_image=false){
		global $_LANG_ID;
		
		$clsCity = new City;
		$clsTourDestination = new TourDestination;
		$html='';
		$rsllist = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' order by order_no asc");
		if(is_array($rsllist) && count($rsllist)>0){
			if($is_image){
				for($i=0;$i<count($rsllist);$i++){
					$html.= ($i==0 ? '' : ' <img class="arrow" src="'.URL_IMAGES.'/arrow.png" /> ').'<a class="link" target="_blank" href="'.$clsCity->getLink($rsllist[$i]['city_id']).'" title="'.$clsCity->getTitle($rsllist[$i]['city_id']).'">'.$clsCity->getTitle($rsllist[$i]['city_id']).'</a>';
				}
				unset($rsllist);
			}else{
				for($i=0;$i<count($rsllist);$i++){
					$html.= ($i==0 ? '' : ' , ').'<a class="link" target="_blank" href="'.$clsCity->getLink($rsllist[$i]['city_id']).'" title="'.$clsCity->getTitle($rsllist[$i]['city_id']).'">'.$clsCity->getTitle($rsllist[$i]['city_id']).'</a>';
				}
				unset($rsllist);
			}
		}
		return $html;
	}
	function getLCityAround($tour_id,$type=''){
		global $_LANG_ID;
		$clsCity = new City;
		$clsGuide = new Guide();
		$clsTourDestination = new TourDestination;
		#
		$html='';
		$rsllist = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' and city_id IN (SELECT city_id from ".DB_PREFIX."city WHERE is_trash=0 and is_online=1) order by order_no asc");
		if(is_array($rsllist) && count($rsllist)>0){
			for($i=0;$i<count($rsllist);$i++){
				if($rsllist[$i]['placetogo_id'] > 0 ){
					
					$html.= ($i==0 ? '' : ', ').'<a class="linkcity" target="_parent" href="'.$clsGuide->getLink($rsllist[$i]['placetogo_id']).'" title="'.$clsGuide->getTitle($rsllist[$i]['placetogo_id']).'">'.$clsGuide->getTitle($rsllist[$i]['placetogo_id']).'</a>';
				}else{
					
					$html.= ($i==0 ? '' : ', ').'<a class="linkcity" target="_parent" href="'.$clsCity->getLink($rsllist[$i]['city_id']).'" title="'.$clsCity->getTitle($rsllist[$i]['city_id']).'">'.$clsCity->getTitle($rsllist[$i]['city_id']).'</a>';
				}
				
			}
				unset($rsllist);
		}
		return $html;
	}
    function getLCityAround3($tour_id,$type=''){
        global $_LANG_ID;
        $clsCity = new City;
        $clsGuide = new Guide();
        $clsTourDestination = new TourDestination;
        #
        $html='';
        $rsllist = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' and city_id IN (SELECT city_id from ".DB_PREFIX."city WHERE is_trash=0 and is_online=1) order by order_no asc");
        if(is_array($rsllist) && count($rsllist)>0){
            for($i=0;$i<count($rsllist);$i++){
                if($rsllist[$i]['placetogo_id'] > 0 ){

                    $html.= ($i==0 ? '' : ', ').'<a class="linkcity" target="_parent" href="'.$clsGuide->getLink($rsllist[$i]['placetogo_id']).'" title="'.$clsGuide->getTitle($rsllist[$i]['placetogo_id']).'">'.$clsGuide->getTitle($rsllist[$i]['placetogo_id']).'</a>';
                }else{

                    $html.= ($i==0 ? '' : ' - ').'<a class="linkcity" target="_parent" href="'.$clsCity->getLink($rsllist[$i]['city_id']).'" title="'.$clsCity->getTitle($rsllist[$i]['city_id']).'">'.$clsCity->getTitle($rsllist[$i]['city_id']).'</a>';
                }

            }
            unset($rsllist);
        }
        return $html;
    }
	function getLCityAround2($tour_id,$type=''){
		global $_LANG_ID;
		$clsCity = new City;
		$clsGuide = new Guide();
		$clsTourDestination = new TourDestination;
		#
		$html='';
		$rsllist = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' and city_id IN (SELECT city_id from ".DB_PREFIX."city WHERE is_trash=0 and is_online=1) order by order_no asc");

		if(is_array($rsllist) && count($rsllist)>0){
			for($i=0;$i<count($rsllist);$i++){
				if($rsllist[$i]['placetogo_id'] > 0 ){
					
					$html.= ($i==0 ? '' : ', ').'<a class="linkcity" target="_parent" href="'.$clsGuide->getLink($rsllist[$i]['placetogo_id']).'" title="'.$clsGuide->getTitle($rsllist[$i]['placetogo_id']).'">'.$clsGuide->getTitle($rsllist[$i]['placetogo_id']).'</a>';
				}else{
					
					$html.= ($i==0 ? '' : ', ').'<a class="linkcity" target="_parent" href="'.$clsCity->getLink($rsllist[$i]['city_id']).'" title="'.$clsCity->getTitle($rsllist[$i]['city_id']).'">'.$clsCity->getTitle($rsllist[$i]['city_id']).'</a>';
				}
				
			}
				unset($rsllist);
		}
		return $html;
	}
    function getLCityAround2019($tour_id,$type=''){
        global $_LANG_ID,$core;
        $clsCity = new City;
        $clsGuide = new Guide();
        $clsTourDestination = new TourDestination;
        #
        $html='';
        $rsllist = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' and city_id IN (SELECT city_id from ".DB_PREFIX."city WHERE is_trash=0 and is_online=1) order by order_no asc");
        if ($rsllist != ''){
            if(count($rsllist) <= 2) {
                return $this->getLCityAround2($tour_id);
            }else{
                for($i=0;$i<2;$i++){
                    if($rsllist[$i]['placetogo_id'] > 0 ){

                        $html.= ($i==0 ? '' : ', ').'<a class="linkcity" target="_parent" href="'.$clsGuide->getLink($rsllist[$i]['placetogo_id']).'" title="'.$clsGuide->getTitle($rsllist[$i]['placetogo_id']).'">'.$clsGuide->getTitle($rsllist[$i]['placetogo_id']).'</a>';
                    }else{

                        $html.= ($i==0 ? '' : ', ').'<a class="linkcity" target="_parent" href="'.$clsCity->getLink($rsllist[$i]['city_id']).'" title="'.$clsCity->getTitle($rsllist[$i]['city_id']).'">'.$clsCity->getTitle($rsllist[$i]['city_id']).'</a>';
                    }
                }
                $number_orther_place = count($rsllist) - 2;
                $more = $core->get_Lang('more');
                $html.='<span class="numb_more color_47c0cd"> +'.$number_orther_place.''.$more.'</span>';
            }
        }


        return $html;
    }
	function getLCountryAround($tour_id,$type=''){
		global $_LANG_ID,$dbconn;
		$clsCountry = new Country;
		$clsTourDestination = new TourDestination;
		#
		$html='';
		
		$SQL01 = "SELECT country_id FROM ".DB_PREFIX."tour_destination WHERE tour_id='$tour_id' group by country_id";
		
		$listCountry=$dbconn->GetAll($SQL01);
		if(is_array($listCountry) && count($listCountry)>0){
			for($i=0;$i<count($listCountry);$i++){
					$html.= ($i==0 ? '' : ', ').'<a class="linkcountry" target="_parent" href="'.$clsCountry->getLink($listCountry[$i]['country_id']).'" title="'.$clsCountry->getTitle($listCountry[$i]['country_id']).'">'.$clsCountry->getTitle($listCountry[$i]['country_id']).'</a>';
				}
				unset($listCountry);
		}
		return $html;
		
	}
	function getLOtherCityAround($tour_id,$type=''){
		global $_LANG_ID;
		$clsCity = new City;
		$clsTourDestination = new TourDestination;
		#
		$html='';
		$rsllist = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' order by order_no asc");
		if(is_array($rsllist) && count($rsllist)>4){
			for($i=1;$i<3;$i++){
					$html.= ($i==1 ? '' : ', ').'<a class="h-city-around" target="_parent" href="'.$clsCity->getLink($rsllist[$i]['city_id']).'" title="'.$clsCity->getTitle($rsllist[$i]['city_id']).'">'.$clsCity->getTitle($rsllist[$i]['city_id']).'</a>';
				}
				$html.='...';
				unset($rsllist);
		}else if(is_array($rsllist) && count($rsllist)>3){
			for($i=1;$i<3;$i++){
					$html.= ($i==1 ? '' : ', ').'<a class="h-city-around" target="_parent" href="'.$clsCity->getLink($rsllist[$i]['city_id']).'" title="'.$clsCity->getTitle($rsllist[$i]['city_id']).'">'.$clsCity->getTitle($rsllist[$i]['city_id']).'</a>';
				}
				unset($rsllist);
		}else{
			for($i=1;$i<2;$i++){
					$html.= ($i==1 ? '' : ', ').'<a class="h-city-around" target="_parent" href="'.$clsCity->getLink($rsllist[$i]['city_id']).'" title="'.$clsCity->getTitle($rsllist[$i]['city_id']).'">'.$clsCity->getTitle($rsllist[$i]['city_id']).'</a>';
				}
				unset($rsllist);
		}
		return $html;
	}
	function getStartCityAround($tour_id,$country=false){
		global $_LANG_ID;
		$clsCity = new City;
		$clsCountry = new Country;
		$clsTourDestination = new TourDestination;
		#
		$html='';
		$rsllist = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' order by order_no asc Limit 0,1");
		if(!empty($rsllist)){
			$html.=	'<a class="h-city-around" href="'.$clsCity->getLink($rsllist[0]['city_id']).'" title="'.$clsCity->getTitle($rsllist[0]['city_id']).'">'.$clsCity->getTitle($rsllist[0]['city_id']).'</a>';
			if($country==true){
				$html.=	', <a class="h-country-around" href="'.$clsCountry->getLink($rsllist[0]['country_id']).'" title="'.$clsCountry->getTitle($rsllist[0]['country_id']).'">'.$clsCountry->getTitle($rsllist[0]['country_id']).'</a>';
			}
			unset($rsllist);
		}
		return $html;
	}
	function getEndCityAround($tour_id,$country=false){
		global $_LANG_ID;
		$clsCity = new City;
		$clsCountry = new Country;
		$clsTourDestination = new TourDestination;
		#
		$html='';
		$rsllist = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' order by order_no desc Limit 0,1");
		if(!empty($rsllist)){

			$html.=	'<a class="h-city-around" href="'.$clsCity->getLink($rsllist[0]['city_id']).'" title="'.$clsCity->getTitle($rsllist[0]['city_id']).'">'.$clsCity->getTitle($rsllist[0]['city_id']).'</a>';
			if($country==true){
				$html.=	', <a class="h-country-around" href="'.$clsCountry->getLink($rsllist[0]['country_id']).'" title="'.$clsCountry->getTitle($rsllist[0]['country_id']).'">'.$clsCountry->getTitle($rsllist[0]['country_id']).'</a>';
			}
			unset($rsllist);
		}
		return $html;
	}
	function getNumberCityAround($tour_id){
		$clsISO = new ISO();
		$clsTourDestination = new TourDestination();
		$lst_city_id = array();
		$lstall_city_id	= $clsTourDestination->getAll("is_trash=0 and tour_id=".$tour_id);
		if(!empty($lstall_city_id))
			$lst_city_id = $clsISO->super_unique($lstall_city_id,'city_id');
		return count($lst_city_id);	
	}
	function getNumberOtherCityAround($tour_id){
		$clsISO = new ISO();
		$clsTourDestination = new TourDestination();
		$lst_city_id = array();
		$lstall_city_id	= $clsTourDestination->getAll("is_trash=0 and tour_id=".$tour_id);
		if(!empty($lstall_city_id))
			$lst_city_id = $clsISO->super_unique($lstall_city_id,'city_id');
		return count($lst_city_id)-2;	
	}
	function getListTag($tour_id) {
        global $_LANG_ID;
		#
		$clsTag = new Tag;
		#
		$list_tag_id = $this->getOneField('list_tag_id',$tour_id);
		$list_tag_id = ltrim($list_tag_id,'|');
		$list_tag_id = rtrim($list_tag_id,'|');
		$list_tag_id = explode('|',$list_tag_id);
		#
		$html='';
		if($list_tag_id != '') {
			for($i=0;$i<count($list_tag_id);$i++) {
				if(!empty($list_tag_id[$i])) {
					$html.= ($i==1 ? '' : '  ').'<a class="link-tag" target="_parent" title="'.$clsTag->getTitle($list_tag_id[$i]).'">'.$clsTag->getTitle($list_tag_id[$i]).'</a>';
				}
			}
			return $html;
		}
    }
	function getCatTours($tour_id){
		global $_LANG_ID;
		#
		$clsCategory = new Category;
		#
		$list_type_id = $this->getOneField('list_type_id',$tour_id);
		$list_type_id = ltrim($list_type_id,'|');
		$list_type_id = rtrim($list_type_id,'|');
		$list_type_id = explode('|',$list_type_id);
		#
		$html='';
		if($list_type_id != '') {
			for($i=0;$i<count($list_type_id);$i++) {
				if(!empty($list_type_id[$i])) {
					$html.= ($i==1 ? '' : ' , ').'<a class="link" target="_parent" href="'.$clsCategory->getLink($list_type_id[$i]).'" title="'.$clsCategory->getTitle($list_type_id[$i]).'">'.$clsCategory->getTitle($list_type_id[$i]).'</a>';
				}
			}
			return $html;
		}
	}
	function checkTourPromotion($tour_id){
		$res = $this->getAll("tour_id='$tour_id' and is_promotion=1 limit 0,1");
		return (!empty($res))?1:0;
	}
	function checkTourLastHour($tour_id,$now_day){
		$clsTourStartDate = new TourStartDate();
		$listTopTourLastHours = $clsTourStartDate->getAll("is_trash=0 and is_online=1 and tour_id ='$tour_id' and is_last_hour = 1 and close_sell_date >= '$now_day' and open_sell_date <= '$now_day' and start_date > '$now_day' order by start_date ASC", $clsTourStartDate->pkey.",tour_id,start_date");
		
		$tour_start_date_id = $listTopTourLastHours[0]['tour_start_date_id'];
		return $tour_start_date_id?$tour_start_date_id:'';
	}
	function checkTourStartDate($tour_id,$now_day){
		$clsTourStartDate = new TourStartDate();
		$listTopTourLastHours = $clsTourStartDate->getAll("is_trash=0 and is_online=1 and tour_id ='$tour_id' and close_sell_date >= '$now_day' and open_sell_date <= '$now_day' and start_date > '$now_day' order by start_date ASC", $clsTourStartDate->pkey.",tour_id,start_date");
		
		$tour_start_date_id = $listTopTourLastHours[0]['tour_start_date_id'];
		return $tour_start_date_id?$tour_start_date_id:'';
	}
	function checkTourDeparture($tour_id,$now_day){
		$clsTourStore = new TourStore();
		$clsTourStartDate = new TourStartDate();
		$checkTourDeparture = $clsTourStore->getAll("is_trash=0 and tour_id ='$tour_id' and _type='DEPARTURE'");
		return $checkTourDeparture?1:0;
	}
	function checkTourTop($tour_id){
		$res = $this->getAll("tour_id='$tour_id' and is_top=1 limit 0,1");
		return (!empty($res))?1:0;
	}
	function countTourTop($type="",$country_id=""){
		if($type=="all"){
			$res = $this->getAll("is_trash=0 and is_top=1");
			return !empty($res)?count($res):0;
		}
		$res = $this->getAll("is_trash=0 and is_top=1 and list_country_id like '%|".$country_id."|%'");
		return !empty($res)?count($res):0;
	}
	function countTourPromotion($type="",$country_id=""){
		if($type=="all"){
			$res = $this->getAll("is_trash=0 and is_promotion=1");
			return !empty($res)?count($res):0;
		}
		$res = $this->getAll("is_trash=0 and is_promotion=1 and list_country_id like '%|".$country_id."|%'");
		return !empty($res)?count($res):0;
	}
	function getTableCruiseHeader($tour_id){
		global $_LANG_ID;
		$oneTable = $this->getOne($tour_id,"table_cruise_header_".$_LANG_ID);
		if($oneTable['table_cruise_header_'.$_LANG_ID] != '')
			return $oneTable['table_cruise_header_'.$_LANG_ID];
		return '[N/A]';
	}
	function getTablePriceHeader($tour_id){
		$one=$this->getOne($tour_id,'table_price_header');
		if($one['table_price_header'] == '') {
			return 'Net tour cost per person in us dollar valid from 1 may – 30 sep '.date('Y',time());
		}else {
			return $one['table_price_header'];
		}
	}
	function getListOfferTours($limit='') {
		global $core, $dbconn;
		$limit = !empty($limit)?' limit '.$limit:'';
		$sql = "SELECT t1.tour_id FROM ".DB_PREFIX."tour t1 INNER JOIN ".DB_PREFIX."tour_store t2 WHERE t1.tour_id = t2.tour_id AND t2._type='PROMOTION' AND t1.is_online=1 AND t1.is_trash=0 ORDER BY t2.order_no DESC".$limit;
		$res = $dbconn->GetAll($sql);
		return !empty($res)?$res:'';
	}
	
	function getTripCodeByStartDate($tour_start_date_id){
		$clsTourStartDate = new TourStartDate();
		$start_date = $clsTourStartDate->getOneField('start_date',$tour_start_date_id);
		$date =  date('d',$start_date).date('m',$start_date).date('y',$start_date);
		$clsTour = new Tour();
		return $this->getOneField('trip_code',$this->getOneField('tour_id',$tour_start_date_id)).'-'.$date; 
	}
	function getDateDeparture($tour_id){
		global $core, $clsISO;
		$one = $this->getOne($tour_id,'departure_date');
		if(!empty($one['departure_date'])) {
			return date('d/m/Y',$one['departure_date']);
		}
	}
	
	function checkDepartureOther($pvalTable) {
		$clsTourStartDate = new TourStartDate();
		$res = $clsTourStartDate->getAll("is_trash=0 and start_date>= '".time()."' and tour_id = '".$pvalTable."' limit 0,1");
		return !empty($res)?1:0;
	}
	function getDateDepartureText($tour_id){
		$one = $this->getOne($tour_id);
		return date('d/m/Y',time());
	}
	function getLinkDeparture($tour_id){
		global $_LANG_ID, $extLang;
		return $extLang.'/tours/'.$this->getSlug($tour_id).'_a'.$tour_id.'.html';
	}
	function getTourDestination($tour_id){
		$clsTourDestination = new TourDestination;
		$clsCity = new City;
		$html='';
		$lstItem = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' order by order_no asc");
		if($lstItem != '') {
			for($i=0;$i<count($lstItem);$i++){
				$html.= ($i==0?'':',&nbsp;').'<a href="'.$clsCity->getLink($lstItem[$i]['city_id']).'" title="'.$clsCity->getTitle($lstItem[$i]['city_id']).'">'.$clsCity->getTitle($lstItem[$i]['city_id']).'</a>';
			}
			return $html;
		}
	}
	function getTourType($tour_id){
		$clsCategory = new Category;
		$html='';
		#
		$one = $this->getOne($tour_id,'tour_type_id');
		$tour_type_id = $one['tour_type_id'];
		if($tour_type_id=='' || $tour_type_id=='0' || $tour_type_id=='|'){ return '';}
		$tour_type_id = trim(str_replace('||',',',$tour_type_id));
		$tour_type_id = trim(str_replace('|','',$tour_type_id));
		#
		$tmp = explode(',',$tour_type_id);
		if(is_array($tmp) && count($tmp)==1){
			$html = '<a href="#" title="">'.$clsCategory->getTitle($tmp[0]).'</a>';
		}else{
			for($i=0;$i<count($tmp);$i++){
				if($tmp[$i]!='' && $tmp[$i]!=0)
				$html.= ($i==0?'':',&nbsp;').'<a href="'.$clsCategory->getLink($tmp[$i]).'" title="'.$clsCategory->getTitle($tmp[$i]).'">'.$clsCategory->getTitle($tmp[$i]).'</a>';
			}
		}
		return $html;
	}
	function getDepartureFrom($tour_id) {
		$clsCity = new City();
		$clsCountry = new Country();
		$clsTourDestination = new TourDestination();
		$all = $clsTourDestination->getAll("is_trash=0 and tour_id = '$tour_id' order by order_no asc limit 0,1");
		$country_id=$clsCity->getOneField('country_id',$all[0]['city_id']);
		if($country_id >0)
			return '<a href="'.$clsCity->getLink($all[0]['city_id']).'" title="'.$clsCity->getTitle($all[0]['city_id']).'">'.$clsCity->getTitle($all[0]['city_id']).',</a> <a href="'.$clsCountry->getLink($country_id).'" title="'.$clsCountry->getTitle($country_id).'">'.$clsCountry->getTitle($country_id).'</a>';
		return '<a href="'.$clsCity->getLink($all[0]['city_id']).'" title="'.$clsCity->getTitle($all[0]['city_id']).'">'.$clsCity->getTitle($all[0]['city_id']).'</a>';
	}
	function getDepartureEnd($tour_id) {
		$clsCity = new City();
		$clsCountry = new Country();
		$clsTourDestination = new TourDestination();
		$all = $clsTourDestination->getAll("is_trash=0 and tour_id = '$tour_id' order by order_no desc limit 0,1");
		$country_id=$clsCity->getOneField('country_id',$all[0]['city_id']);
		if($country_id >0)
			return '<a href="'.$clsCity->getLink($all[0]['city_id']).'" title="'.$clsCity->getTitle($all[0]['city_id']).'">'.$clsCity->getTitle($all[0]['city_id']).',</a> <a href="'.$clsCountry->getLink($country_id).'" title="'.$clsCountry->getTitle($country_id).'">'.$clsCountry->getTitle($country_id).'</a>';
		return '<a href="'.$clsCity->getLink($all[0]['city_id']).'" title="'.$clsCity->getTitle($all[0]['city_id']).'">'.$clsCity->getTitle($all[0]['city_id']).'</a>';
	}
	function getDepartureCityEnd($tour_id) {
		$clsCity = new City();
		$clsCountry = new Country();
		$clsTourDestination = new TourDestination();
		$all = $clsTourDestination->getAll("is_trash=0 and tour_id = '$tour_id' order by order_no desc limit 0,1");
		return '<a class="color_333" href="'.$clsCity->getLink($all[0]['city_id']).'" title="'.$clsCity->getTitle($all[0]['city_id']).'">'.$clsCity->getTitle($all[0]['city_id']).'</a>';
	}
	function getCatName($tour_id) {
		$clsTourCat = new TourCategory();
		$oneTable = $this->getOne($tour_id, "cat_id");
		return $clsTourCat->getTitle($oneTable['cat_id']);
	}
	function getTypeName($tour_id) {
		$clsCategory = new Category();
		$oneTable = $this->getOne($tour_id, "type_id");
		return $clsCategory->getTitle($oneTable['type_id']);
	}
	function getTourTypeCategory($tour_id) {
		return $this->getOneField("tour_type_id", $tour_id);
		return 0;
		$clsISO = new ISO();
		$one = $this->getOne($tour_id,'list_cat_id');
		$list_cat_id = $one['list_cat_id'];
		$list_cat_id = rtrim($list_cat_id,'|');
		$list_cat_id = ltrim($list_cat_id,'|');
		$list_cat_id = explode('|',$list_cat_id);
		if($clsISO->checkInArray($list_cat_id,'19') == '0') {
			return 0;
		}
		if($clsISO->checkInArray($list_cat_id,'21') == '0') {
			return 1;
		}
	}
	function updateTourTransport($tour_id){
		$clsTourItinerary = new TourItinerary();
		$list_transport_id = '|';
		#
		$lstTourItinerary = $clsTourItinerary->getAll("is_trash=0 and tour_id='$tour_id' order by order_no asc");
		if(is_array($lstTourItinerary) && count($lstTourItinerary)>0){
			for($i=0; $i<count($lstTourItinerary); $i++){
				if($lstTourItinerary[$i]['transport_id']!='' && $lstTourItinerary[$i]['transport_id']!='0'){
					$list_transport_id .= $lstTourItinerary[$i]['transport_id'].'|'; 
				}
			}
			unset($lstTourItinerary);
			$this->updateOne($tour_id,"list_transport_id='$list_transport_id'");
			return '';
		}
		return '';
	}
	function updateTransport($tour_id){
		$clsTourItinerary = new TourItinerary();
		$list_transport_id = '|';
		#
		$lstTourItinerary = $clsTourItinerary->getAll("is_trash=0 and tour_id='$tour_id' order by order_no asc");
		if(is_array($lstTourItinerary) && count($lstTourItinerary)>0){
			for($i=0; $i<count($lstTourItinerary); $i++){
				if($lstTourItinerary[$i]['transport_id']!='' && $lstTourItinerary[$i]['transport_id']!='0'){
					$list_transport_id .= $lstTourItinerary[$i]['transport_id'].'|'; 
				}
			}
			unset($lstTourItinerary);
			$this->updateOne($tour_id,"list_transport_id='$list_transport_id'");
			return '';
		}
		return '';
	}
	function getPriceCat($tour_id,$cat_id,$tour_start_date_id){
		$clsTourPriceCat = new TourPriceCat();
		$all = $clsTourPriceCat->getAll("tour_id='$tour_id' and cat_id='$cat_id' and tour_start_date_id='$tour_start_date_id' limit 0,1");
		if($all[0]['tour_id']!='' && $all[0]['price']!=0 && $all[0]['price']!='') return $all[0]['price'];
		if($cat_id==246){
			$clsCommon = new Common();
			$pricePT= $clsCommon->getOneField('config_tour_ptvtnvn',1);
			$lst = $clsTourPriceCat->getAll("tour_start_date_id='$tour_start_date_id' and cat_id='$cat_id' and tour_id='$tour_id' limit 0,1");
			if($lst[0][$clsTourPriceCat->pkey]==''){
				$f = "tour_id,tour_start_date_id,cat_id,price,user_id,user_id_update,reg_date,upd_date,price";
				$v = "'$tour_id','$tour_start_date_id','$cat_id','0','".$core->_USER['user_id']."','".$core->_USER['user_id']."','".time()."','".time()."','$pricePT'";
				$clsTourPriceCat->insertOne($f,$v);
			}
			else{
				$clsTourPriceCat->updateOne($lst[0][$clsTourPriceCat->pkey],"price='$pricePT'");
			}
			return $pricePT;
		}
		return 0;
	}
	function getErrorMsg($tour_id){
		global $core;
		#
		$oneTour = $this->getOne($tour_id,'image');
		$msg = '';
		if($oneTour['image']==''){
			$msg.= $core->get_Lang('missimages');
		}
		if($this->getTripCode($tour_id)==''){
			$msg.= $core->get_Lang('misscodetour');
		}

		$clsTourItinerary = new TourItinerary();
		if($clsTourItinerary->countItem("is_trash=0 and tour_id='$tour_id'")==0){
			$msg.= $core->get_Lang('missitinerary');			
		}
		return $msg;
	}
	function getNumberSeat($tour_id){
		$one = $this->getOne($tour_id,'number_seat');
		$tour_start_date_id = $this->getMinStartDateID($tour_id);
		if($tour_start_date_id!=''){
			$clsTourStartDate = new TourStartDate();
			return $clsTourStartDate->getOneField("allotment",$tour_start_date_id);
		}
		$number_seat = $one['number_seat'];
		if($number_seat!='' && intval($number_seat)>0){
			return $number_seat;
		}
		/* @ mt_rand() value */
		return mt_rand(5,15);
	}
	function initCruiseTable($tour_id) {
		global $core;
		#
		$clsTourCruisePriceRow = new TourCruisePriceRow();
		$clsTourCruisePriceCol = new TourCruisePriceCol();
		$clsTourCruisePriceVal = new TourCruisePriceVal();
		
		$_frontIsLoggedin_user_id = $core->_USER['user_id'];
		
		$res = $clsTourCruisePriceRow->getAll("tour_id = '$tour_id'");
		if(empty($res)) {
			for($i=0;$i<4;$i++) {
				$f = "tour_id,user_id,title,order_no";
				if($i%2){
					$title = 'Double cabin';
				}
				else
					$title = 'Single cabin';
				$v = "
				'".$tour_id."',
				'$_frontIsLoggedin_user_id',
				'".$title."',
				'".$clsTourCruisePriceCol->getMaxOrderNo()."'
				";
				$clsTourCruisePriceCol->insertOne($f,$v);
			}
			for($k=0;$k<2;$k++) {
				$f = "tour_cruise_price_row_id,tour_id,user_id,title,order_no";
				$tour_cruise_price_row_id = $clsTourCruisePriceRow->getMaxId();
				$title = 'Row '.($k+1);
				$v = "
				'$tour_cruise_price_row_id',
				'".$tour_id."',
				'$_frontIsLoggedin_user_id',
				'".$title."',
				'".$clsTourCruisePriceRow->getMaxOrderNo()."'
				";
				$clsTourCruisePriceRow->insertOne($f,$v);
				
			}
		} else return 1;
	}
	function updateNumberCountry() {
		#
		$clsTour = new Tour();
		$clsTourDestination = new TourDestination();
		$clsCountryEx = new Country();
		#
		$lstItem = $clsTour->getAll("");
		if(!empty($lstItem)) {
			for($i=0;$i<count($lstItem);$i++) {
				$res = $clsCountryEx->getAll("is_trash=0 and country_id IN (SELECT country_id FROM default_tour_destination WHERE tour_id = '".$lstItem[$i]['tour_id']."')");
				$countCountry = count($res);
				$clsTour->updateOne($lstItem[$i]['tour_id'],"number_country = '".$countCountry."'");
			}
		}
	}
	function checkToursPromotion($pvalTable) {
		$res = $this->getAll("is_trash=0 and tour_id = '".$pvalTable."' and is_selling = 1 and hot_deals > 0 limit 0,1");
		return !empty($res)?1:0;
	}
	function getTripHotDeals($pvalTable){
		$one=$this->getOne($pvalTable,'hot_deals');
		$hot_deals = $one['hot_deals'];
		if(!empty($hot_deals) && intval($hot_deals)>0) {
			return '-'.$hot_deals.'%';
		}
	}
	function getLTripHotDeals($pvalTable){
		$one=$this->getOne($pvalTable,'hot_deals');
		$hot_deals = $one['hot_deals'];
		if(!empty($hot_deals) && intval($hot_deals)>0) {
			return $hot_deals.'%';
		}
	}
	function getListTypeTour($tour_id){
		$list_type_id = $this->getOneField('list_type_id',$tour_id);
		$tmp = explode('|',$list_type_id);
		$lst = array();
		for($i=0;$i<count($tmp);$i++){
			if($tmp[$i]!='' && $tmp[$i]!='0')
				$lst[] = $tmp[$i];
		}
		if($lst[0]!='') return ($lst);
		return '';
	}
	function getSelectTripDuration($tour_id){
		global $_LANG_ID,$core;
		
		$number_day = intval($this->getOneField('number_day', $tour_id));
		$number_night = intval($this->getOneField('number_night', $tour_id));
		if($number_day==0 && $number_night==0)
			return '';
		if($number_day==1)
			return $core->get_Lang('Full day');
		
		$day = $number_day .' '.($number_day > 1 ? $core->get_Lang('days'):$core->get_Lang('day'));
		$night = $number_night .' '.($number_night > 1 ? $core->get_Lang('nights'):$core->get_Lang('night'));
		return $day.' / '.$night;
	}
	function getTripDurationx($tour_id){
		global $_LANG_ID,$core;
		
		$number_day = intval($this->getOneField('number_day', $tour_id));
		$number_night = intval($this->getOneField('number_night', $tour_id));
		if($number_day==0 && $number_night==0)
			return '';
		if($number_day==1)
			return $core->get_Lang('Full day');
		
		$day = $number_day .' '.($number_day > 1 ? $core->get_Lang('days'):$core->get_Lang('day'));
		$night = $number_night .' '.($number_night > 1 ? $core->get_Lang('nights'):$core->get_Lang('night'));
		return $day.' '.$night;
	}
	function getTripDayDuration($tour_id){
		global $_LANG_ID,$core;
		$one=$this->getOne($tour_id,'number_day');
		$number_day=$one['number_day'];
		$dayText=$number_day>1?$number_day.' '.$core->get_Lang('days'): $number_day.' '.$core->get_Lang('day');
		return $dayText;
	}
	function getLocationMapNew($tour_id) {
		global $dbconn;
		$clsCity= new City();
		$clsGuide= new Guide();
		$clsTourDestination = new TourDestination();
		#
		$listCity = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' and city_id IN (SELECT city_id from ".DB_PREFIX."city WHERE is_trash=0 and is_online=1) order by order_no asc");
		
		
		//print_r($listCity); die();
		$map_la = '';
		$map_lo = '';
		$jscode = '';
		$location = '';
		if(!empty($listCity)){
			foreach($listCity as $k=>$v){
				if($v['placetogo_id'] > 0 ){
					$location .= '["'.trim($clsGuide->getTitle($v['placetogo_id'])).'",'.trim($clsGuide->getMapLa($v['placetogo_id'])).','.trim($clsGuide->getMapLo($v['placetogo_id'])).','.$v['placetogo_id'].']';

					$location .= ($k==count($listCity)-1) ? '':',';
					if($map_la =='' || $map_lo ==''){
						$map_la = trim($clsGuide->getMapLa($v['placetogo_id']));
						$map_lo = trim($clsGuide->getMapLo($v['placetogo_id']));
					}
				}else{
					$location .= '["'.trim($clsCity->getTitle($v['city_id'])).'",'.trim($clsCity->getMapLa($v['city_id'])).','.trim($clsCity->getMapLo($v['city_id'])).','.$v['city_id'].']';
					$location .= ($k==count($listCity)-1) ? '':',';
					if($map_la =='' || $map_lo ==''){
						$map_la = trim($clsCity->getMapLa($v['city_id']));
						$map_lo = trim($clsCity->getMapLo($v['city_id']));
					}
				}
			}
			unset($listCity);
		}
		$jscode ='<script type="text/javascript">
				var locations=['.$location.'];
			</script>';
			//print_r($jscode); die();
		$ret['map_la'] = $map_la;
		$ret['map_lo'] = $map_lo;
		$ret['jscode'] = $jscode;
		
		//print_r($ret); die();
		return $ret;
	}
	
	function getLocationMap($tour_id) {
		global $dbconn;
		$clsCountry= new Country();
		$clsRegion= new Region();
		$clsCity= new City();
		$clsGuide= new Guide();
		$clsTourDestination = new TourDestination();
		#
		$listCountry = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' and country_id IN (SELECT country_id from ".DB_PREFIX."country WHERE is_trash=0 and is_online=1) order by order_no asc");
		
		
		//print_r($listCountry); die();
		$map_la = '';
		$map_lo = '';
		$jscode = '';
		$location = '';
		if(!empty($listCountry)){
			foreach($listCountry as $k=>$v){
				if($v['placetogo_id'] > 0 ){
					$location .= '["'.($k+1).' - '.trim($clsGuide->getTitle($v['placetogo_id'])).'",'.trim($clsGuide->getMapLa($v['placetogo_id'])).','.trim($clsGuide->getMapLo($v['placetogo_id'])).','.$v['placetogo_id'].']';
					$location .= ($k==count($listCountry)-1) ? '':',';
					if($map_la =='' || $map_lo ==''){
						$map_la = trim($clsGuide->getMapLa($v['placetogo_id']));
						$map_lo = trim($clsGuide->getMapLo($v['placetogo_id']));
					}
				}elseif($v['city_id'] > 0 ){
					$location .= '["'.($k+1).' - '.trim($clsCity->getTitle($v['city_id'])).'",'.trim($clsCity->getMapLa($v['city_id'])).','.trim($clsCity->getMapLo($v['city_id'])).','.$v['city_id'].']';
					$location .= ($k==count($listCountry)-1) ? '':',';
					if($map_la =='' || $map_lo ==''){
						$map_la = trim($clsCity->getMapLa($v['city_id']));
						$map_lo = trim($clsCity->getMapLo($v['city_id']));
					}
				}elseif($v['region_id'] > 0 ){
					$location .= '["'.($k+1).' - '.trim($clsRegion->getTitle($v['region_id'])).'",'.trim($clsRegion->getMapLa($v['region_id'])).','.trim($clsRegion->getMapLo($v['region_id'])).','.$v['region_id'].']';
					$location .= ($k==count($listCountry)-1) ? '':',';
					if($map_la =='' || $map_lo ==''){
						$map_la = trim($clsRegion->getMapLa($v['region_id']));
						$map_lo = trim($clsRegion->getMapLo($v['region_id']));
					}
				}else{
					$location .= '["'.($k+1).' - '.trim($clsCountry->getTitle($v['country_id'])).'",'.trim($clsCountry->getMapLa($v['country_id'])).','.trim($clsCountry->getMapLo($v['country_id'])).','.$v['country_id'].']';
					$location .= ($k==count($listCountry)-1) ? '':',';
					if($map_la =='' || $map_lo ==''){
						$map_la = trim($clsCountry->getMapLa($v['country_id']));
						$map_lo = trim($clsCountry->getMapLo($v['country_id']));
					}
				}
			}
			unset($listCountry);
		}
		$jscode ='<script type="text/javascript">
				var locations=['.$location.'];
			</script>';
			//print_r($jscode); die();
		$ret['map_la'] = $map_la;
		$ret['map_lo'] = $map_lo;
		$ret['jscode'] = $jscode;
		
		//print_r($ret); die();
		return $ret;
	}
	
	
	function getLocationMap22($tour_id) {
		$clsCity= new City();
		$clsTourDestination = new TourDestination();
		#
		$listTourDestination = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' order by order_no asc");
		$location = '';
		$script_js = '';
		if(!empty($listTourDestination)){
			for($i=0; $i<count($listTourDestination); $i++){
				$location .= '["'.$clsCity->getMapHTML($listTourDestination[$i]['destination_id']).'",'.$clsCity->getMapLa($listTourDestination[$i]['destination_id']).','.$clsCity->getMapLo($listTourDestination[$i]['destination_id']).','.$listTourDestination[$i]['destination_id'].']';
				$location .= ($i==count($listTourDestination)-1) ? '':',';
			}
			$script_js.='<script type="text/javascript">
				var locations=['.$location.'];
			</script>';
		}
		return $script_js;
	}
	
	
	function getTripPriceByStartDate($tour_start_date_id){
		global $clsISO;
		$clsTourStartDate = new TourStartDate();
		$all = $clsTourStartDate->getAll("tour_start_date_id='$tour_start_date_id'");
		$trip_price = $all[0]['price']; 
		return ($trip_price);
	}
	function getSelectTour($tour_id=''){
		global $core, $_lang;
		$lstItem=$this->getAll("is_trash=0 order by order_no asc");
		$html='<option value="">-- '.$core->get_Lang('select').' --</option>';
		#
		if(!empty($lstItem)){
			foreach($lstItem as $item){
				$selected=($tour_id==$item[$this->pkey])?'selected="selected"':'';
				$html.='<option value="'.$item[$this->pkey].'"'.$selected.'>'.$this->getTripCode($item[$this->pkey]).'-|-'.$this->getTitle($item[$this->pkey]).'</option>';
			}
		}
		return $html;
	}
	function getListMeal(){
		global $core;
		$clsTourProperty = new TourProperty();
		$lstMeal = $clsTourProperty->getAll("is_trash=0 and type='MEAL' order by order_no asc",$clsTourProperty->pkey);
		return $lstMeal?$lstMeal:'';
		$_array = array();
		$_array['B'] = $core->get_Lang('Breakfast');
		$_array['L'] = $core->get_Lang('Lunch');
		$_array['D'] = $core->get_Lang('Dinner');
		return $_array;
	}
	function getNameTypeMeal($type){
		$lstType = $this->getListMeal();
		return $lstType[$type];
	}
	function getListTransport(){
		global $core;
		$clsTransport = new Transport();
		$assign_list["clsTransport"] = $clsTransport;
		$lstTransport = $clsTransport->getAll("is_trash=0 and is_online=1 order by order_no asc");
		return $lstTransport;
	}
	function countTourItinerary($tour_id){
		$clsTourItinerary=new TourItinerary();
		$all = $clsTourItinerary->getAll("is_trash=0 and tour_id='$tour_id'");
		return !empty($all) ? (count($all)> 9 ? count($all) : '0'.count($all)) : '00';
	}
	function countTourByRegion($country_id,$region_id=0){
		$where = "is_trash=0 and is_online=1 and tour_id IN (SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE country_id='$country_id' and city_id IN (SELECT city_id FROM ".DB_PREFIX."citystore WHERE country_id='$country_id' and region_id='$region_id'))";
		return $this->countItem($where);
	}
    function countTourByCity($country_id,$city_id){
        $where = "is_trash=0 and is_online=1 and tour_id IN (SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE country_id='$country_id' and city_id='$city_id')";
        return $this->countItem($where);
    }
	function countTourGolobal($country_id=0,$city_id=0,$cat_id=0,$tour_type_id=0){
		$where = "is_trash=0 and is_online=1";
		if(intval($country_id) > 0){
			$where .= " and tour_id IN (SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE country_id='$country_id')";	
		}
		if(intval($city_id) > 0){
			$where .= " and tour_id IN (SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE city_id='$city_id')";	
		}
		if(intval($cat_id) > 0){
			$where .= " and (cat_id = '".$cat_id."' or list_cat_id like '%|".$cat_id."|%')";	
		}
		if(intval($tour_type_id) > 0){
			$where .= " and tour_type_id ='$tour_type_id'";
		}
		return $this->countItem($where);
	}
	function countTourDeparturePoint($departure_point_id=0,$city_id=0,$cat_id=0){
		$where = "is_trash=0 and is_online=1";
		if(intval($departure_point_id) > 0){
			$where .= " and (departure_point_id = '$departure_point_id' or list_departure_point_id like '%|$departure_point_id|%')";
		}
		if(intval($city_id) > 0){
			$where .= " and tour_id IN (SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE city_id='$city_id')";	
		}
		if(intval($cat_id) > 0){
			$where .= " and (cat_id = '".$cat_id."' or list_cat_id like '%|".$cat_id."|%')";	
		}
		return $this->getAll($where)?count($this->getAll($where)):0;
	}
	
	function countTourHotel($tour_id) {
		$clsTourHotel = new TourHotel();
		$res = $clsTourHotel->getAll("is_trash=0 and tour_id='$tour_id' order by order_no desc","hotel_id");
		if(!empty($res)) {
			$tmp = array();
			for($i=0;$i<count($res);$i++) {
				if($res[$i]['hotel_id']!=''&&$res[$i]['hotel_id']!='0'&&!in_array($res[$i]['hotel_id'],$tmp))
				$tmp[] = $res[$i]['hotel_id'];
			}
			return count($tmp);
		}
		return 0;
	}
	function countByCat($cat_id){
		return $this->countItem("is_trash=0 and is_online=1 and (cat_id='$cat_id' or list_cat_id like '%|$cat_id|%')");
	}
	function getSeasonPrice($tour_id,$season,$tour_class_id,$_type){
		$price = 0;
		$clsTourSeasonPrice = new TourSeasonPrice();
		$lst = $clsTourSeasonPrice->getAll("tour_id='$tour_id' and season='$season' and tour_class_id='$tour_class_id' and _type='$_type' limit 0,1");
		if($lst[0][$clsTourSeasonPrice->pkey]!=''){
			$price = $lst[0]['price'];
		}
		return $price;
	}
	function checkShowSeasonPrice($tour_id,$season,$tour_class_id,$_type){
		$is_show = 1;
		$clsTourSeasonPrice = new TourSeasonPrice();
		$lst = $clsTourSeasonPrice->getAll("tour_id='$tour_id' and season='$season' and tour_class_id='$tour_class_id' and _type='$_type' limit 0,1");
		if($lst[0][$clsTourSeasonPrice->pkey]!=''){
			$is_show = $lst[0]['is_hide']==1?0:1;
		}
		return $is_show;
	}
	function checkRoomTypeAvailable($tour_id, $room_type_id, $sesion){
		
	}
	/////////*tourpromotion*/////////
	
	/*function getMinStartDatePromotionID($tour_id,$start_date){
		$clsPromotion = new Promotion();
		$lst = $clsPromotion->getAll("target_id = '$tour_id' and ".time()." between  start_date and end_date and is_online=1 and type='TOUR' order by start_date asc limit 0,1");
		return $lst[0]['promotion_id'];
	}*/
	function getMinStartDatePromotionID($tour_id){
		$clsPromotion = new Promotion();
		$lst = $clsPromotion->getAll("target_id = '$tour_id' and ".time()." between  start_date and end_date and is_online=1 and type='TOUR' order by start_date asc limit 0,1");
		return $lst[0]['promotion_id'];
	}
    function getMinStartDatePromotionProID($tour_id,$booking_date){
        global $dbconn;
        $clsPromotion = new Promotion();
        $clsPromotionItem = new PromotionItem();
        //$Sql_Promotion  = "SELECT p.promotion_id FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE p.is_online = 1 and pi.is_online = 1 and p.type = 'Tour' and pi.taget_id =$tour_id and ".$booking_date." between  p.start_date and p.end_date  and ".$travel_date." between p.travel_date_from and p.travel_date_to order by start_date ASC limit 0,1";
		
		$Sql_Promotion  = "SELECT p.promotion_id FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE p.is_online = 1 and pi.is_online = 1 and p.type = 'Tour' and pi.taget_id =$tour_id and ".$booking_date." between  p.start_date and p.end_date order by start_date ASC limit 0,1";
		//var_dump($Sql_Promotion);die();
		//return $Sql_Promotion;
        $promotion= $dbconn->GetOne($Sql_Promotion);
//		$lst = $clsPromotion->getAll("target_id = '$tour_id' and ".time()." between  start_date and end_date and is_online=1 and type='TOUR' order by start_date asc limit 0,1");
        return $promotion;
    }

    function getMinStartDatePromotionPro($tour_id){
        global $dbconn;
        $clsPromotion = new Promotion();
        $clsPromotionItem = new PromotionItem();
        $Sql_Promotion = $sql ="SELECT p.promot FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE p.is_online = 1 and pi.is_online = 1 and p.type = 'Tour' and pi.taget_id =$tour_id and ".time()." between  p.start_date and p.end_date order by start_date ASC limit 0,1";
        $promotion= $dbconn->GetOne($Sql_Promotion);
//		$lst = $clsPromotion->getAll("target_id = '$tour_id' and ".time()." between  start_date and end_date and is_online=1 and type='TOUR' order by start_date asc limit 0,1");
        return $promotion;
    }
    function getMinStartDatePromotionProChoseTime($tour_id,$booking_date,$travel_date){
        global $dbconn;
        $clsPromotion = new Promotion();
        $clsPromotionItem = new PromotionItem();
        $start_date = strtotime($start_date);
        $Sql_Promotion = $sql ="SELECT p.promot FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE p.is_online = 1 and pi.is_online = 1 and p.type = 'Tour' and pi.taget_id =$tour_id and ".$booking_date." between  p.start_date and p.end_date and ".$travel_date." between  p.travel_date_from and p.travel_date_to order by start_date ASC limit 0,1";
        $promotion= $dbconn->GetOne($Sql_Promotion);
//		$lst = $clsPromotion->getAll("target_id = '$tour_id' and ".time()." between  start_date and end_date and is_online=1 and type='TOUR' order by start_date asc limit 0,1");
        return $promotion;
    }
    function getStartDatePro($tour_id) {
        $clsISO = new ISO();
        $one = $this->getOne($tour_id,'start_date');
        if(!empty($one['start_date'])){
            return date('d/m/Y', $one['start_date']);
        }
    }

    function getCheckMemSet($tour_id,$start_date='0'){
        global $dbconn;
        $clsPromotion = new Promotion();
        $clsPromotionItem = new PromotionItem();
        $Sql_Promotion = $sql ="SELECT p.promotion_id,p.check_mem_set FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE p.is_online = 1 and pi.is_online = 1 and p.type = 'Tour' and pi.taget_id =$tour_id and ".time()." between  p.start_date and p.end_date order by start_date ASC limit 0,1";
        $promotion= $dbconn->GetOne($Sql_Promotion);
        $check_mem = $clsPromotion->getCheckMem($promotion);
//		$lst = $clsPromotion->getAll("target_id = '$tour_id' and ".time()." between  start_date and end_date and is_online=1 and type='TOUR' order by start_date asc limit 0,1");
        return $check_mem;
    }
    function getCheckVoucher($tour_id){
        global $dbconn;
        $clsPromotion = new Promotion();
        $clsPromotionItem = new PromotionItem();
        $Sql_Promotion = $sql ="SELECT p.promotion_id,p.check_mem_set FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE p.is_online = 1 and pi.is_online = 1 and p.type = 'Tour' and pi.taget_id =$tour_id and ".time()." between  p.start_date and p.end_date order by start_date ASC limit 0,1";
        $promotion= $dbconn->GetOne($Sql_Promotion);
        $check_voucher = $clsPromotion->getCheckCodeProduct($promotion);
//		$lst = $clsPromotion->getAll("target_id = '$tour_id' and ".time()." between  start_date and end_date and is_online=1 and type='TOUR' order by start_date asc limit 0,1");
        return $check_voucher;
    }

	function getDeparturePromotion($tour_id){
		global $core, $clsISO;
		#
		$clsPromotion = new Promotion();
		#
		$tmp=$clsPromotion->getAll("target_id = '$tour_id' and ".time()." between  start_date and end_date and is_online=1 and type='TOUR' order by start_date asc limit 0,1");
		
		if(!empty($tmp)) {
			return date('m/d/Y',$tmp[0]['start_date']).' ? '.date('m/d/Y',$tmp[0]['end_date']);
		} else { 
			return '<a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a>';
		}
	}
	function getDeparturePromotionPro($tour_id){
		global $core, $clsISO,$dbconn;
		#
		$clsPromotion = new Promotion();
        $clsPromotionItem = new PromotionItem();
		#
        $Sql_Promotion = $sql ="SELECT p.promotion_id,p.start_date,p.end_date FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE p.is_online = 1 and pi.is_online = 1 and p.type = 'Tour' and pi.taget_id =$tour_id and ".time()." between  p.start_date and p.end_date order by start_date ASC limit 0,1";
        $promotion= $dbconn->GetOne($Sql_Promotion);
//		$tmp=$clsPromotion->getAll("target_id = '$tour_id' and ".time()." between  start_date and end_date and is_online=1 and type='TOUR' order by start_date asc limit 0,1");

		if(!empty($promotion)) {
			return $clsPromotion->getStartDatePro($promotion).' ? '.$clsPromotion->getEndDatePro($promotion);
		} else {
			return '<a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a>';
		}
	}
	function getDepartureDayPromotionPro($tour_id){
		global $core, $clsISO,$dbconn;
		#
		$clsPromotion = new Promotion();
        $clsPromotionItem = new PromotionItem();
		#
        $Sql_Promotion = $sql ="SELECT p.promotion_id,p.start_date,p.end_date FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE p.is_online = 1  and pi.is_online = 1 and p.type = 'Tour' and pi.taget_id =$tour_id and ".time()." between  p.start_date and p.end_date order by start_date ASC limit 0,1";
        $promotion= $dbconn->GetOne($Sql_Promotion);
//		$tmp=$clsPromotion->getAll("target_id = '$tour_id' and ".time()." between  start_date and end_date and is_online=1 and type='TOUR' order by start_date asc limit 0,1");

		if(!empty($promotion)) {
			return $clsPromotion->getTravelStartDatePro($promotion).' - '.$clsPromotion->getTravelEndDatePro($promotion);
		} else {
			return '<a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a>';
		}
	}
    function getDepartureDayPromotionPro2019($tour_id){
        global $core, $clsISO,$dbconn;
        #
        $clsPromotion = new Promotion();
        $clsPromotionItem = new PromotionItem();
        #
        $Sql_Promotion = $sql ="SELECT p.promotion_id,p.start_date,p.end_date FROM ".$clsPromotion->tbl." p LEFT JOIN ".$clsPromotionItem->tbl." pi ON(p.".$clsPromotion->pkey." = pi.".$clsPromotion->pkey.") WHERE p.is_online = 1  and pi.is_online = 1 and p.type = 'Tour' and pi.taget_id =$tour_id and ".time()." between  p.start_date and p.end_date order by start_date ASC limit 0,1";
        $promotion= $dbconn->GetOne($Sql_Promotion);
//		$tmp=$clsPromotion->getAll("target_id = '$tour_id' and ".time()." between  start_date and end_date and is_online=1 and type='TOUR' order by start_date asc limit 0,1");

        if(!empty($promotion)) {
            return $clsPromotion->getTravelStartDatePro($promotion);
        } else {
            return '<a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a>';
        }
    }
	function checkDeparturePromotionOther($tour_id) {
		$clsPromotion = new Promotion();
		$res = $clsPromotion->getAll("target_id = '".$tour_id."' and start_date>= '".time()."' and is_online=1 and type='TOUR' limit 0,1");
		return $res;
		return !empty($res)?1:0;
	}
    function getPromotionIdPro($pvalTable,$type='Tour') {
        global $dbconn;
//        $sql = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and tour_visitor_type_id =$adult_type_id and tour_class_id IN ($list_tour_class_id) and tour_number_group_id IN ($list_adult_group_size_id)";
        $sql = "SELECT p.promotion_id FROM ".DB_PREFIX."promotion_item pi LEFT JOIN ".DB_PREFIX."promotion p ON(pi.promotion_id = p.promotion_id) WHERE pi.taget_id='$pvalTable' and p.type='$type' and ".time()." between p.start_date and p.end_date and p.is_online=1 and pi.is_online = 1 order by p.start_date asc";
        $pro_id= $dbconn->GetOne($sql);
//        $this->updateOne($pvalTable,"min_price='".$min_price."'");
//
//        $sql1="tour_id='$pvalTable' and (tour_class_id NOT IN ($list_tour_class_id))";
//        $clsTourPriceGroup->deleteByCond($sql1);
//        $sql2="tour_id='$pvalTable' and tour_visitor_type_id='$adult_type_id' and tour_number_group_id NOT IN ($list_adult_group_size_id)";
//        $clsTourPriceGroup->deleteByCond($sql2);
        return $pro_id;
    }
    function getTripPriceNew($pvalTable,$departure,$is_agent=0,$type=''){
        global $core,$dbconn,$extLang,$_LANG_ID,$_lang,$clsConfiguration,$clsISO,$adult_type_id;

        $clsProperty=new Property();
        $clsTourPriceGroup = new TourPriceGroup();
        $clsTourStore = new TourStore();
        if(_IS_PROMOTION==1){
            $Sql_Promotion = "SELECT p.promot FROM ".DB_PREFIX."promotion_item pi LEFT JOIN ".DB_PREFIX."promotion p ON(pi.promotion_id = p.promotion_id) WHERE pi.taget_id='$pvalTable' and p.clsTable='Tour' and ".$departure." between p.start_date and p.end_date and p.is_online=1 and pi.is_online = 1 order by p.start_date asc LIMIT 0,1";
            $promotion= $dbconn->GetOne($Sql_Promotion);
            if(_IS_DEPARTURE==1){
                if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
                    $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
                }else{
                    $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
                }
            }else{
                $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
            }

            $priceAdultAds = $dbconn->GetOne($SQL);
            $pricePromotion=$priceAdultAds - ($promotion*$priceAdultAds/100);
            #
            if($type=='value'){
                return $clsISO->formatPrice($priceAdultAds);
            }else{
                if($priceAdultAds > 0){
                    if($type=='detail'){
                        if($_LANG_ID=='vn'){
                            if($promotion >0){
                                return '<span class="block color_main size18"><span class="size15 color_666 line_through">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span> '.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>';
                            }else{
                                return '<span class="block color_main size18">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                            }
                        }else{
                            if($promotion >0){
                                return '<span class="block color_main size18"><span class="size15 color_666 line_through">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>';

                            }else{
                                return '<span class="block color_main size18">'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
//                                return $Sql_Promotion;
                            }
                        }
                    }else{
                        if($_LANG_ID=='vn'){
                            if($promotion >0){
                                return '<div class="price">
									  <div class="discounted_price">
											<span class="color_main"><span class="size15 color_666 line_through">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>'.$clsISO->formatPrice($pricePromotion).$clsISO->getShortRate().'</span>
									  </div>
									</div>';

                            }else{
                                return '<div class="price">
									  <div class="discounted_price">
											<span class="color_main">'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>
									  </div>
									</div>';
                            }
                        }else{
                            if($promotion >0){
                                return '<div class="price">
									<div class="discounted_price">
										<span class="color_main"><span class="size15 color_666 line_through">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($pricePromotion).'</span>
									</div>
								</div>';

                            }else{
                                return '<div class="price">
									  <div class="discounted_price">
											<span class="color_main">'.$clsISO->getShortRate().$clsISO->formatPrice($priceAdultAds).'</span>
									  </div>
									</div>';
                            }
                        }
                    }
                }else {
                    if($type=='detail'){
                        return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
                    }else{

                    }
                }

            }
        }else{
            if(_IS_DEPARTURE==1){
                if($clsTourStore->checkExist($pvalTable,'DEPARTURE')==1){
                    $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date >= '".$departure."' and departure_date<>'0' and tour_visitor_type_id='$adult_type_id' and tour_start_date_id IN (SELECT tour_start_date_id FROM ".DB_PREFIX."tour_start_date WHERE tour_id='$pvalTable' and is_trash=0 and is_online=1)";
                }else{
                    $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
                }
            }else{
                $SQL = "SELECT MIN(price) FROM ".DB_PREFIX."tour_price_group WHERE tour_id='$pvalTable' and price > 0 and departure_date = '0' and tour_visitor_type_id='$adult_type_id'";
            }

            $priceAdultAds = $dbconn->GetOne($SQL);
            #
            if($type=='value'){
                return $clsISO->formatPrice($priceAdultAds);
            }else{
                if($priceAdultAds > 0){
                    if($type=='detail'){
                        if($_LANG_ID=='vn'){
                            return '<span class="block size18"><span class="size12 color_666">'.$clsISO->getRate().'</span> '.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>';
                        }else{
                            return '<span class="block size18"><span class="size12 color_666">'.$clsISO->getRate().'</span> '.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>';
                        }

                    }else{
                        if($_LANG_ID=='vn'){
                            return '<div class="price">
								  <div class="discounted_price">
										<span>'.$clsISO->formatPrice($priceAdultAds).$clsISO->getShortRate().'</span>
								  </div>
								</div>';
                        }else{
                            return '<div class="price">
								  <div class="discounted_price">
										<span>'.$clsISO->getShortRate().''.$clsISO->formatPrice($priceAdultAds).'</span>
								  </div>
								</div>';
                        }
                    }
                }else {
                    if($type=='detail'){
                        return '<div class="price"><a class="contactLink" href="'.$clsISO->getLink('contact').'">'.$core->get_Lang('contactus').'</a></div>';
                    }else{

                    }
                }

            }
        }
    }
	function doDelete($tour_id){
		$clsISO = new ISO();
		
		// Delete Tour Promotion
		$clsPromotionItem = new PromotionItem();
		$clsPromotionItem->deleteByCond("target_id='$tour_id' and promotion_id IN (SELECT promotion_id FROM ".DB_PREFIX."promotion WHERE type='Tour')");
		
		// Delete Tour Image
		$clsTourImage = new TourImage();
		$clsTourImage->deleteByCond("table_id='$tour_id'");
		
		// Tour Extention Field
		$clsTourExtension = new TourExtension();
		$clsTourExtension->deleteByCond("tour_1_id='$tour_id' or tour_2_id='$tour_id'");
		
		// Delete TourPriceGroup
		$clsTourPriceGroup = new TourPriceGroup();
		$clsTourPriceGroup->deleteByCond("tour_id='$tour_id'");
		// Delete TourItinerary
		$clsTourItinerary = new TourItinerary();
		$clsTourItinerary->deleteByCond("tour_id='$tour_id'");
		// Delete TourDestination
		$clsTourDestination = new TourDestination();
		$clsTourDestination->deleteByCond("tour_id='$tour_id'");
		// Delete TourHotel 
		$clsTourHotel = new TourHotel();
		$clsTourHotel->deleteByCond("tour_id='$tour_id'");
		// Delete TourStore
		$clsTourStore = new TourStore();
		$clsTourStore->deleteByCond("tour_id='$tour_id'");
		// Tour Start Date
		$clsTourStartDate = new TourStartDate();
		$clsTourStartDate->deleteByCond("tour_id='$tour_id'");
		// Tour Session Price
		$clsTourSeasonPrice = new TourSeasonPrice();
		$clsTourSeasonPrice->deleteByCond("tour_id='$tour_id'");
		// Tour Custom Field
		$clsTourCustomField = new TourCustomField();
		$clsTourCustomField->deleteByCond("tour_id='$tour_id'");
		
		// Tour Extention Field
		$clsTourExtension = new TourExtension();
		$clsTourExtension->deleteByCond("tour_1_id='$tour_id' or tour_2_id='$tour_id'");
		#
		$this->deleteOne($tour_id);
		return 1;
	}
	
}


?>