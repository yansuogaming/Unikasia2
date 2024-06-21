<?php if (!defined('ABSPATH')) exit('No direct script access allowed');

use Curl\Curl;
function date_range($first, $last, $step = '+1 day', $output_format = 'd/m/Y' ) {

    $dates = array();
    $current = strtotime($first);
    $last = strtotime($last);

    while( $current <= $last ) {

        $dates[] = date($output_format, $current);
        $current = strtotime($step, $current);
    }

    return $dates;
}
function default_detaildeparture(){
	global $assign_list, $clsISO, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$global_image_seo_page,$tour_id,$adult_type_id,$child_type_id,$infant_type_id,$age_type_id,$height_type_id,$clsISO,$package_id;
	#
	$clsPromotion = new Promotion(); $assign_list["clsPromotion"] = $clsPromotion;
	$clsPromotionItem = new PromotionItem(); $assign_list["clsPromotionItem"] = $clsPromotionItem;
	$clsTag = new Tag(); $assign_list["clsTag"] = $clsTag;
	$clsHotel = new Hotel(); $assign_list["clsHotel"] = $clsHotel;
	$clsTour = new Tour(); $assign_list["clsTour"] = $clsTour;
	$clsTourStore = new TourStore(); $assign_list["clsTourStore"] = $clsTourStore;
	$clsCity = new City(); $assign_list["clsCity"] = $clsCity;
	//$clsCategory = new Category(); $assign_list["clsCategory"] = $clsCategory;
	$clsTourCategory = new TourCategory();$assign_list['clsTourCategory']=$clsTourCategory;
	$clsTourItinerary=new TourItinerary(); $assign_list['clsTourItinerary']=$clsTourItinerary;
	$clsTourImage = new TourImage(); $assign_list["clsTourImage"] = $clsTourImage;
	$clsTourDestination=new TourDestination();$assign_list["clsTourDestination"] = $clsTourDestination;
	$clsTourStartDate = new TourStartDate();$assign_list['clsTourStartDate']=$clsTourStartDate;
	
	$clsTourProperty = new TourProperty();$assign_list["clsTourProperty"] = $clsTourProperty;
	$clsProperty = new Property();$assign_list["clsProperty"] = $clsProperty;
	$clsTourExtension = new TourExtension();$assign_list["clsTourExtension"] = $clsTourExtension;
	$clsTransport = new Transport();$assign_list["clsTransport"] = $clsTransport;
	$clsWhy = new Why(); $assign_list["clsWhy"] = $clsWhy;
    $clsActivities = new Activities(); $assign_list["clsActivities"] = $clsActivities;
    $clsTourOption = new TourOption();$assign_list["clsTourOption"] = $clsTourOption;
	$clsTable = 'Tour'; $assign_list["clsTable"] = $clsTable;
    $clsTourStartDate = new TourStartDate();
    $clsCity = new City();
    $assign_list["clsCity"] = $clsCity;

	
	#
	$slug = isset($_GET['slug']) ? $_GET['slug']:'';
  	$tour_id =$_GET['tour_id']?$_GET['tour_id']:'0';
	
	$tour_id = isset($_GET['tour_id'])?$_GET['tour_id']:0;
	$tour_start_date_id =$_GET['tour_start_date_id']?$_GET['tour_start_date_id']:0;
	$slug = isset($_GET['slug'])?$_GET['slug']:'';
	
	if(empty($clsTour->checkOnlineBySlug($tour_id,$slug))){
		header('location:'.DOMAIN_NAME.$extLang);
		exit();
	}
	
	$assign_list["tour_id"] = $tour_id;
	
	$table_id= $tour_id;
	$assign_list["table_id"] = $table_id;

	$oneItem = $clsTour->getOne($tour_id,'cat_id,is_online,departure_point_id,key_information,list_activities_id,adult_group_size,child_group_size,title,infant_group_size,inclusion,exclusion,thing_to_carry,cancellation_policy,refund_policy,confirmation_policy,overview,slug,visitorage_child,visitorheight_child,visitorage_infant,visitorheight_infant'); $assign_list["oneItem"] = $oneItem;
//	var_dump($oneItem);die;
	$tourcat_id = $oneItem['cat_id'];
	
	if($oneItem['is_online'] == 0){
		header('location:'.PCMS_URL);
		exit();
	}	
	$getSelectChild = $getSelectInfant = "";
	if($oneItem['visitorage_child'] != ''){
		$getSelectChild = $clsTourOption->getSelectBySizeGroup($child_type_id,"VISITORAGETYPE");
		$textSizeGroupChild = $clsTourOption->getTextSelectBySizeGroup($child_type_id,"VISITORAGETYPE");
	}elseif($oneItem['visitorheight_child'] != ''){
		$getSelectChild = $clsTourOption->getSelectBySizeGroup($child_type_id,"VISITORHEIGHTTYPE");
		$textSizeGroupChild = $clsTourOption->getTextSelectBySizeGroup($child_type_id,"VISITORHEIGHTTYPE");
	}
	if($oneItem['visitorage_infant'] != ''){
		$getSelectInfant = $clsTourOption->getSelectBySizeGroup($infant_type_id,"VISITORAGETYPE");	
		$textSizeGroupInfant = $clsTourOption->getTextSelectBySizeGroup($infant_type_id,"VISITORAGETYPE");
	}elseif($oneItem['visitorheight_infant'] != ''){
		$getSelectInfant = $clsTourOption->getSelectBySizeGroup($infant_type_id,"VISITORHEIGHTTYPE");
		$textSizeGroupInfant = $clsTourOption->getTextSelectBySizeGroup($infant_type_id,"VISITORHEIGHTTYPE");
	}	
	$assign_list['getSelectChild'] = $getSelectChild;
	$assign_list['getSelectInfant'] = $getSelectInfant;
	$assign_list['textSizeGroupChild'] = $textSizeGroupChild;
	$assign_list['textSizeGroupInfant'] = $textSizeGroupInfant;
	
	$assign_list["tourcat_id"] = $tourcat_id;
	$getKeyInfo=$oneItem['key_information'];
    $assign_list["getKeyInfo"] = $getKeyInfo;
	$departure_point_id = $oneItem['departure_point_id'];
	$assign_list["departure_point_id"] = $departure_point_id;

    
    $list_Pro_Item= $clsPromotionItem->getListPromotion($tour_id);

    $sql="promotion_id IN($list_Pro_Item) order by promotion_id desc";
    $lstPromotion = $clsPromotion->getAll($sql,$clsPromotion->pkey);
    $assign_list["lstPromotion"] = $lstPromotion;
//$clsISO->print_pre($lstPromotion);die();

    $list_date_array = array();
    foreach ($lstPromotion as $key =>$value){
        $getStartDatePromotion= $clsPromotion->getStartDatePro($value['promotion_id']);
        $getStartDatePromotion = str_replace('/', '-', $getStartDatePromotion);
        $getEndDatePromotion = $clsPromotion->getEndDatePro($value['promotion_id']);
        $getEndDatePromotion = str_replace('/', '-', $getEndDatePromotion);
        $date_range = date_range($getStartDatePromotion, $getEndDatePromotion, "+1 day", "d/m/Y");
        /** Cách 1 */
       /* if(!empty($date_range)){
            foreach ($date_range as $date){
                if(!in_array($date, $list_date_array)){
                    //$list_date_array[] = $date;
                }
            }
        }*/
        /* Cách 2 */
        $list_date_array = array_merge($list_date_array, $date_range);
    }
    $list_date_array = array_unique($list_date_array);
    $check_tour_promotion= !empty($list_date_array)?1:0;
    $date_range_js_update = '<script> var date_range = [\'' . implode('\',\'', $list_date_array) . '\'];</script>';
    $assign_list["date_range_js_update"] = $date_range_js_update;
    $assign_list["check_tour_promotion"] = $check_tour_promotion;


    $promotion_id = $clsTour->getMinStartDatePromotionProID($tour_id,time());
	if($promotion_id){
		$promotion = $clsPromotion->getPromotion($promotion_id);
	}    
    $assign_list["promotion_id"] = $promotion_id;
    $assign_list["promotion"] = $promotion;
    $assign_list["date_range"] = $date_range;
    # Why with us
	/*$lstWhyWUs = $clsWhy->getAll("is_trash=0 order by order_no desc");
	$assign_list["lstWhyWUs"] = $lstWhyWUs; */
	
	#- Image Tours
	if($clsISO->getCheckActiveModulePackage($package_id,'tour','tour_gallery','customize')){
		$lstImage = $clsTourImage->getAll("is_trash=0 and table_id='$tour_id' and image<>'' order by order_no ASC",$clsTourImage->pkey.',image,title');
		$assign_list["lstImage"] = $lstImage; 
		unset($lstImage);
	}
	
	if($clsISO->getCheckActiveModulePackage($package_id,'property','activities','default')){
		$lstActivitiesID=$clsTour->getListActivities($tour_id,$oneItem);
		$lstActivities = $clsActivities->getAll("is_trash=0 and is_online=1 and activities_id IN($lstActivitiesID) order by order_no asc",$clsActivities->pkey);
		$assign_list["lstActivities"] = $lstActivities;
		unset($lstActivities);
	}
	#- Custom Field
	$clsTourCustomField = new TourCustomField();
	$assign_list["clsTourCustomField"] = $clsTourCustomField;
	$listCustomField = $clsTourCustomField->getAll("tour_id='$tour_id' and fieldtype='CUSTOM' order by order_no ASC",'fieldvalue,fieldname');
	$assign_list["listCustomField"] = $listCustomField; unset($listCustomField);
	#
	$clsHotel = new Hotel(); $assign_list["clsHotel"] = $clsHotel;
	$clsTourHotel = new TourHotel();$assign_list['clsTourHotel']=$clsTourHotel;

	#
	$lstNationality = $clsTourProperty->getAll("is_trash=0 and type='NATIONALITY' order by order_no asc",$clsTourProperty->pkey);
	$assign_list["lstNationality"] = $lstNationality;
	$lstVisitorType = $clsTourProperty->getAll("is_trash=0 and type='VISITORTYPE' order by order_no asc",$clsTourProperty->pkey);
	$assign_list["lstVisitorType"] = $lstVisitorType;
	
	#
    $lstAdultSizeGroup = $oneItem['adult_group_size'];
    $lstAdultSize = array();
    if($lstAdultSizeGroup != '' && $lstAdultSizeGroup != '0'){
        $TMP = explode(',',$lstAdultSizeGroup);
        for($i=0; $i<count($TMP); $i++){
            if(!in_array($TMP[$i],$lstAdultSize)){
                $lstAdultSize[] = $TMP[$i];
            }
        }
    }
    $lastAdultSize=end($lstAdultSize);

    $max_adult=$clsTourOption->getOneField('number_to',$lastAdultSize);
    $max_adult?$max_adult:1;
    $assign_list["max_adult"] = $max_adult;

    $lstChildSizeGroup = $oneItem['child_group_size'];
    $lstChildSize = array();
    if($lstChildSizeGroup != '' && $lstChildSizeGroup != '0'){
//        $TMP = explode(',',$lstChildSizeGroup);
		$TMP = $clsISO->getArrayByTextSlash($lstChildSizeGroup);
        for($i=0; $i<count($TMP); $i++){
            if(!in_array($TMP[$i],$lstChildSize)){
                $lstChildSize[] = $TMP[$i];
            }
        }
    }
    /*$lastChildSize=end($lstChildSize);
    $max_child=$clsTourOption->getOneField('number_to',$lastChildSize);	
    $max_child = !empty($max_child)?$max_child:0;*/
	$max_child=$clsTourOption->getAll('tour_option_id IN ('.implode(',',$lstChildSize).')',"max(number_to) as max");
	$max_child = (isset($max_child[0]))?$max_child[0]['max']:0;
	
    $assign_list["max_child"] = $max_child;

    $lstInfantSizeGroup = $oneItem['infant_group_size'];
    $lstInfantSize = array();
    if($lstInfantSizeGroup != '' && $lstInfantSizeGroup != '0'){
//        $TMP = explode(',',$lstInfantSizeGroup);
		$TMP = $clsISO->getArrayByTextSlash($lstChildSizeGroup);
        for($i=0; $i<count($TMP); $i++){
            if(!in_array($TMP[$i],$lstInfantSize)){
                $lstInfantSize[] = $TMP[$i];
            }
        }
    }
    /*$lastInfantSize=end($lstInfantSize);
    $max_infant=$clsTourOption->getOneField('number_to',$lastInfantSize);
    $max_infant = !empty($max_infant)?$max_infant:0;*/
	$max_infant=$clsTourOption->getAll('tour_option_id IN ('.implode(',',$lstInfantSize).')',"max(number_to) as max");
	$max_infant = (isset($max_infant[0]))?$max_infant[0]['max']:0;
	
    $assign_list["max_infant"] = $max_infant;
    #
	 if ($clsISO->getCheckActiveModulePackage($package_id,'tour','store','default','REVQQVJUVVJFLVZpZXRJU08=')){
		 $checkExistTourStartDate= $clsTourStore->checkExist($tour_id,'DEPARTURE');
   		if(!empty($checkExistTourStartDate)){
		   $lstTourStartDate = $clsTourStartDate->getAll("is_trash=0 and start_date >= '".time()."' and close_sell_date >= '".time()."' and tour_id ='$tour_id' and is_last_hour=1  order by start_date ASC",$clsTourStartDate->pkey);
			$is_last_hour= !empty($lstTourStartDate)?1:0;
			$date_coutdown = array();
			foreach ($lstTourStartDate as $k => $v){
				$getStrCloseSellDateCountDown = $clsTourStartDate->getStrCloseSellDateCountDown($v[$clsTourStartDate->pkey]);
				$getCloseSellDateCountDown = $clsTourStartDate->getCloseSellDateCountDown($v[$clsTourStartDate->pkey],'date_coutdown');
				if($getStrCloseSellDateCountDown > time()){
					$date_coutdown[]= $getCloseSellDateCountDown;
				}
			}
			$date_coutdown =array_shift($date_coutdown);
			
			$list_start_date = $clsTourStartDate->getListStartDateTour($tour_id);
			
			$tour_start_date= (count($list_start_date) > 0)?1:0;
	   }
        
    }

    $assign_list["is_last_hour"] = $is_last_hour;
    $assign_list["lstTourStartDate"] = $lstTourStartDate;

    $assign_list["date_coutdown"] = $date_coutdown;

    $assign_list["tour_start_date"] = $tour_start_date;



    $first_start_date =reset($list_start_date);
    $str_first_start_date= $first_start_date;
   // var_dump($first_start_date);die();
    $first_start_date1=$first_start_date?$first_start_date:date('m/d/Y', time()+(24*60*60));
    $first_start_date = str_replace('-','/',$first_start_date);

    $str_first_start_date =strtotime($str_first_start_date);
   // var_dump($first_start_date);die();
    $str_first_start_date = !empty($first_start_date)?$str_first_start_date:time()+(24*60*60);
    $list_start_date =implode("','", $list_start_date) ;
    $list_start_date = str_replace('-','/',$list_start_date);
	$check_tour_start_date=$list_start_date?1:0;
	
	if($tour_start_date_id > 0){
		$str_first_start_date = $clsTourStartDate->getStartDate($tour_start_date_id);
	}
	
    $assign_list["str_first_start_date"] = $str_first_start_date;
    $assign_list["first_start_date"] = $first_start_date;
    $assign_list["list_start_date"] = $list_start_date;
    $assign_list["check_tour_start_date"] = $check_tour_start_date;
   if (!empty($first_start_date)) {
       $now_next_departure = 0;
   }else{
       $now_next_departure= time()+(24*60*60);
       $now_next_departure=$clsISO->converTimeToText5($now_next_departure);
   }
    $assign_list["now_next_departure"] = $now_next_departure;

	if($clsISO->getCheckActiveModulePackage($package_id,'tour','itinerary','customize')){
    #- Itinerary
    $lstItineraryTour = $clsTourItinerary->getAll("is_trash=0 and tour_id='$tour_id' and title_contingency='' order by order_no asc", $clsTourItinerary->pkey.',image,content,tour_itinerary_id,transport,is_show_image,day,day2,tour_id,title,meals');
    $assign_list['lstItineraryTour'] = $lstItineraryTour;
    $list_itinerary=[];

    foreach ($lstItineraryTour as $k =>$v){
//		print_r($lstItineraryTour);die();
        $list_itinerary[$v[$clsTourItinerary->pkey]] = strtotime($first_start_date1 .' + '. $k .' day');
    }
    $assign_list["list_itinerary"] = $list_itinerary;
    unset($lstItineraryTour);
	}

	if(isset($_POST['BookingTour']) &&  $_POST['BookingTour']=='BookingTour'){
        $cartSessionService= vnSessionGetVar('BookingTour_'.$_LANG_ID);
		if(empty($cartSessionService)){
			$cartSessionService = array();
		}
		$assign_list["cartSessionService"] = $cartSessionService;
		
		$link=$clsISO->getLink('cart');
        $cartSessionService[$_LANG_ID][$tour_id] = array();
        foreach($_POST as $k=>$v){
			if(!empty($v)){
				if($k=='number_addon'){
					foreach($v as $k_addon=>$v_addon){
						if(!empty($v_addon)){
							$cartSessionService[$_LANG_ID][$tour_id][$k][$k_addon] = $v_addon;
						}
					}
				}else{
					$cartSessionService[$_LANG_ID][$tour_id][$k] = $v;
				}
			}
        }
        ///$clsISO->print_pre($cartSessionService);die();
        vnSessionSetVar('BookingTour_'.$_LANG_ID,$cartSessionService);
		header('location:'.$link);
		exit();
	}
    if(isset($_POST['ContactTour']) &&  $_POST['ContactTour']=='ContactTour'){
		vnSessionDelVar('ContactTour');
        vnSessionDelVar('ContactCruise');
		vnSessionDelVar('ContactHotel');
		vnSessionDelVar('ContactVoucher');
       
        foreach($_POST as $k=>$v){
            $cartSessionService = $v;
        }
        vnSessionSetVar('ContactTour',$_POST);
        
        $link=$clsISO->getLink('contact');
        header('location:'.$link);
        exit();
    }


    /*=============Title & Description Page==================*/
	$title_page = $oneItem['title'].' | '.$core->get_Lang('tours').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $clsISO->getMetaDescription($tour_id,'Tour',$oneItem);
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsISO->getPageImageShare($tour_id,'Tour',$oneItem);
	$assign_list["global_image_seo_page"] = $global_image_seo_page;
	$clsTour->updateMinPriceTour($tour_id);
	
}

function default_ajGetMaxChildInfant(){
	global $assign_list, $_CONFIG, $core,$extLang, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$extLang,$adult,$child,$infant;
    global $clsISO,$clsConfiguration,$profile_id,$loggedIn,$agent_id,$adult_type_id,$child_type_id,$infant_type_id,$is_agent,$package_id,$now_day;
	$clsTourOption = new TourOption();
	$clsTour = new Tour();
	$clsSettingChildPolicy = new SettingChildPolicy();
	$tour_id = (int)Input::post('tour_id',0);
	$number_adults = (int)Input::post('number_adults',0);
	$tour_property_id = (int)Input::post('tour_property_id',0);
	$oneItem = $clsTour->getOne($tour_id,'adult_group_size'); $assign_list["oneItem"] = $oneItem;
    
    
    
    $lstChildSizeGroup = $clsTour->getOneField('child_group_size',$tour_id);
	$lstChildSize = array();
	if($lstChildSizeGroup != '' && $lstChildSizeGroup != '0'){
		$TMP = $clsISO->getArrayByTextSlash($lstChildSizeGroup);
//		$TMP = explode(',',$lstChildSizeGroup);
		for($i=0; $i<count($TMP); $i++){
			if(!in_array($TMP[$i],$lstChildSize)){
				$lstChildSize[] = $TMP[$i];
			}
		}
	}
	$lastChildSize=end($lstChildSize);
	$max_child_1=$clsTourOption->getOneField('number_to',$lastChildSize);



	$lstInfantSizeGroup = $clsTour->getOneField('infant_group_size',$tour_id);
	$lstInfantSize = array();
	if($lstInfantSizeGroup != '' && $lstInfantSizeGroup != '0'){
//		$TMP = explode(',',$lstInfantSizeGroup);
		$TMP = $clsISO->getArrayByTextSlash($lstInfantSizeGroup);
		for($i=0; $i<count($TMP); $i++){
			if(!in_array($TMP[$i],$lstInfantSize)){
				$lstInfantSize[] = $TMP[$i];
			}
		}
	}
	$lastInfantSize=end($lstInfantSize);
	$max_infant_1=$clsTourOption->getOneField('number_to',$lastInfantSize);
    
    
	
	$tour_option = $clsTourOption->getAll("is_trash=0 AND tour_property_id = '".$tour_property_id."' AND type='SIZEGROUP' AND tour_option_id IN (".$oneItem['adult_group_size'].") AND ".$number_adults." BETWEEN number_from AND number_to LIMIT 0,1",$clsTourOption->pkey);
	$max_child = $max_infant = 0;
	
	if($tour_option){
		$max_child = $clsSettingChildPolicy->getNumberChild($tour_option[0][$clsTourOption->pkey],$number_adults);
		$max_infant = $clsSettingChildPolicy->getNumberInfant($tour_option[0][$clsTourOption->pkey],$number_adults);
	}
    $max_child=$max_child>$max_child_1?$max_child_1:$max_child;
    $max_infant=$max_infant>$max_infant_1?$max_infant_1:$max_infant;
	
	$data = [
		'max_child'		=>	$max_child,
		'max_infant'	=>	$max_infant,
	];
	echo json_encode($data);die;
	
}
function default_loadTablePrice(){
    global $assign_list, $_CONFIG, $core,$extLang, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$extLang,$adult,$child,$infant;
    global $clsISO,$clsConfiguration,$profile_id,$loggedIn,$agent_id,$adult_type_id,$child_type_id,$infant_type_id,$is_agent,$package_id,$now_day;
	

    $clsProperty = new Property();$assign_list["clsProperty"] = $clsProperty;
    $clsAddOnService = new AddOnService();$assign_list["clsAddOnService"] = $clsAddOnService;
    $clsTourProperty = new TourProperty();$assign_list["clsTourProperty"] = $clsTourProperty;
    $clsTourService = new TourService();$assign_list["clsTourService"] = $clsTourService;
    $clsTour = new Tour(); $assign_list["clsTour"] = $clsTour;
    $clsTourStore = new TourStore(); $assign_list["clsTourStore"] = $clsTourStore;
    $clsTourStartDate = new TourStartDate(); $assign_list["clsTourStartDate"] = $clsTourStartDate;
    $clsBooking = new Booking(); $assign_list["clsBooking"] = $clsBooking;
    $clsProfile = new Profile(); $assign_list['clsProfile']=$clsProfile;
    $clsVoucher = new Voucher(); $assign_list['clsVoucher']=$clsVoucher;
    $clsPromotion = new Promotion(); $assign_list['clsPromotionr']=$clsPromotion;
    $clsTourPriceGroup = new TourPriceGroup(); $assign_list['clsTourPriceGroup']=$clsTourPriceGroup;
    $clsTourOption = new TourOption(); $assign_list['clsTourOption']=$clsTourOption;
    //$clsISO->print_pre($_POST);

    $tour_id= $_POST['tour_id'];
    $is_last_hour= $_POST['is_last_hour'];
    $tour_start_date= $_POST['tour_start_date'];
    $number_adults= intval($_POST['number_adults']);
    $number_child= intval($_POST['number_child']);
    $number_infants= intval($_POST['number_infants']);
    $number_pick_travellers = $number_adults + $number_child + $number_infants;

    $check_in_book= $_POST['check_in_book'];

    $tour_visitor_adult_id= $_POST['tour_visitor_adult_id'];
    $tour_visitor_child_id= $_POST['tour_visitor_child_id'];
    $tour_visitor_infant_id= $_POST['tour_visitor_infant_id'];
    $check_in_book= str_replace('/','-',$check_in_book);
    $str_check_in_book= 0 ;
    $promotion= 0 ;
    $discount_type= 0 ;

	$str_check_in_book=strtotime($check_in_book);
	if(_IS_PROMOTION==1){
		$discount=$clsISO->getPromotion($tour_id,'Tour',$now_day,$str_check_in_book,$type_check='get_more_info');
		$promotion=$discount['discount_value'];
		$discount_type = $discount['discount_type'];
		$promotion = !empty($promotion)?$promotion:0;
		$promotion = str_replace('.','',$promotion);
	}
	
    if(_IS_DEPARTURE==1){
        $str_check_in_book=strtotime($check_in_book);
        $checkExistTourStartDate= $clsTourStore->checkExist($tour_id,'DEPARTURE');
        $str_check_in_book = !empty($checkExistTourStartDate)?$str_check_in_book:0;
		
		$listTourStartDateClose=$clsTourStartDate->getAll("is_trash=0 and tour_id='$tour_id' and start_date='$str_check_in_book' and open_sale_date <= '$now_day' and close_sale_date <'$now_day' and is_last_hour=1 order by start_date ASC");
			
		foreach ($listTourStartDateClose as $key => $value) {
			$list_tour_start_date_id[]=$value['tour_start_date_id'];
		}
		$list_tour_start_date_id = implode(',', $list_tour_start_date_id);

		$condd="is_trash=0 ";
		if(!empty($list_tour_start_date_id)){
		$condd.=" and tour_start_date_id NOT IN ($list_tour_start_date_id)";
		}
		$condd.=" and start_date='$str_check_in_book' and tour_id ='$tour_id' order by start_date ASC limit 0,1";
		
		
        if (!empty($checkExistTourStartDate) && !empty($tour_start_date)){
            $lstTourStartDate = $clsTourStartDate->getAll($condd);
			
        }
		if(!empty($lstTourStartDate)){
			$deposit =$deposit_start_date=$lstTourStartDate[0]['deposit'];			
		}else{
			$deposit = $clsTour->getDeposit($tour_id);			
		}
		if($lstTourStartDate[0]['price_type']==1){
			$seat_available=$lstTourStartDate[0]['allotment'];
			if($number_pick_travellers > $seat_available) {
				$exceeded_seat = 1;
			}else{
				$exceeded_seat = 0;
			}
			if ($seat_available == 1) {
				$seat = $core->get_Lang('seat');
			}else{
				$seat = $core->get_Lang('seats');
			}
			if(!empty($seat_available)) {
				$title_seat = $core->get_Lang('Empty') . ' ' . $seat_available . ' ' . $seat;
			}else{
				$title_seat = $seat = $core->get_Lang('Full');
			}
		}else{
			$title_seat = '';
		}
    }

    $assign_list["title_seat"] = $title_seat;
    $assign_list["exceeded_seat"] = $exceeded_seat;

    #
	if($clsISO->getCheckActiveModulePackage($package_id,'property','service','default')){
    $lstServiceID=$clsTour->getListService($tour_id);
    $lstService = $clsAddOnService->getAll("is_trash=0 and is_online=1 and addonservice_id IN($lstServiceID) order by order_no asc",$clsAddOnService->pkey);
    $assign_list["lstService"] = $lstService;
	 }

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
    $tour_class_id= $_POST['tour__class_check'];
    $tour_class_id= $tour_class_id?$tour_class_id:$lstOption[0];
	
    $tour_number_adults_id=$clsTourPriceGroup->getTourNumberGroup($tour_visitor_adult_id,$number_adults,$tour_id);
    $tour_number_child_id=$clsTourPriceGroup->getTourNumberGroup($tour_visitor_child_id,$number_child,$tour_id);
    $tour_number_infants_id=$clsTourPriceGroup->getTourNumberGroup($tour_visitor_infant_id,$number_infants,$tour_id);
	
	
	if(!empty($checkExistTourStartDate)){
		if(!empty($lstTourStartDate)){
			if($lstTourStartDate[0]['price_type']==1){
				$price = $lstTourStartDate[0]['price'];
				$price= json_decode($price,'true');

				$price_adults = $price[$tour_visitor_adult_id][$tour_class_id][$tour_number_adults_id];
				$price_child = $price_adults>0?$price[$tour_visitor_child_id][$tour_class_id][$tour_number_child_id]:0;
				$price_infants = $price_adults>0?$price[$tour_visitor_infant_id][$tour_class_id][$tour_number_infants_id]:0;
			}elseif($lstTourStartDate[0]['price_type']==0){
				$price_adults = $clsTourPriceGroup->getPriceBooking($tour_id,$tour_class_id,$tour_number_adults_id,$tour_visitor_adult_id,0);
				$price_child = $price_adults>0?$clsTourPriceGroup->getPriceBooking($tour_id,$tour_class_id,$tour_number_child_id,$tour_visitor_child_id,0):0;
				$price_infants = $price_adults?$clsTourPriceGroup->getPriceBooking($tour_id,$tour_class_id,$tour_number_infants_id,$tour_visitor_infant_id,0):0;
			}
		}else{
			$price_adults = 0;
			$price_child = 0;
			$price_infants = 0;
		}
	}else{
		$price_adults = $clsTourPriceGroup->getPriceBooking($tour_id,$tour_class_id,$tour_number_adults_id,$tour_visitor_adult_id,0);
		$price_child = $price_adults>0?$clsTourPriceGroup->getPriceBooking($tour_id,$tour_class_id,$tour_number_child_id,$tour_visitor_child_id,0):0;
		$price_infants = $price_adults>0?$clsTourPriceGroup->getPriceBooking($tour_id,$tour_class_id,$tour_number_infants_id,$tour_visitor_infant_id,0):0;
	}

//var_dump($tour_id,$tour_class_id,$tour_number_adults_id,$tour_visitor_adult_id,$str_check_in_book);
    #
    $total_price_adults=$price_adults*$number_adults;
    $total_price_child=$price_child*$number_child;
    $total_price_infants=$price_infants*$number_infants;
    #
    $total_price=$total_price_adults + $total_price_child + $total_price_infants;
	if($discount_type ==2){
		$price_promotion = $total_price / 100 * $promotion;
	}else{
		$price_promotion = $promotion;
	}
    
    $total_price_promotion = $total_price - $price_promotion;
    $price_deposit = $total_price_promotion / 100 * $deposit;


    $assign_list["lstOption"] = $lstOption;
    $assign_list["str_check_in_book"] = $str_check_in_book;
    $assign_list["check_in_book"] = $check_in_book;
    $assign_list["is_last_hour"] = $is_last_hour;
    $assign_list["tour_id"] = $tour_id;
    $assign_list["tour_class_id"] = $tour_class_id;
    $assign_list["number_adults"] = $number_adults;
    $assign_list["number_child"] = $number_child;
    $assign_list["number_infants"] = $number_infants;
    $assign_list["price_adults"] = $price_adults;
    $assign_list["price_child"] = $price_child;
    $assign_list["price_infants"] = $price_infants;
    $assign_list["total_price_adults"] = $total_price_adults;
    $assign_list["total_price_child"] = $total_price_child;
    $assign_list["total_price_infants"] = $total_price_infants;
    $assign_list["total_price"] = $total_price;
    $assign_list["promotion"] = $promotion;
    $assign_list["discount_type"] = $discount_type;
    $assign_list["price_promotion"] = $price_promotion;
    $assign_list["deposit"] = $deposit;
    $assign_list["price_deposit"] = $price_deposit;
    $assign_list["total_price_promotion"] = $total_price_promotion;
	
	if($clsISO->getCheckActiveModulePackage($package_id,'booking','booking_tour','default')){
	$html = $core->build('loadTablePrice.tpl');
	}else{
	$html = $core->build('loadTableContactPrice.tpl');
	}
    echo $html; die();

}
function default_loadSelectAddon(){
	ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
    global $assign_list,$clsISO, $_CONFIG, $core,$extLang, $dbconn, $mod, $act, $_LANG_ID,$now_day;
    $clsTour = new Tour(); $assign_list["clsTour"] = $clsTour;
    $clsAddOnService = new AddOnService();$assign_list["clsAddOnService"] = $clsAddOnService;

    $addons = $_POST['addons'];
    $total_price_z = intval($_POST['total_price_z']);
    $deposit = intval($_POST['deposit']);
    $tour_id = intval($_POST['tour_id']);
    $check_in_book = $_POST['check_in_book'];
	$check_in_book= str_replace('/','-',$check_in_book);
	$str_check_in_book=strtotime($check_in_book);
	$promotion = 0;
	if(_IS_PROMOTION==1){
		$promotion_more_info=$clsISO->getPromotion($tour_id,'Tour',$now_day,$str_check_in_book,$type_check='get_more_info');
		if(!empty($promotion_more_info['use_addon_service'])){
			$promotion=$promotion_more_info['discount_value'];
		}	
		$promotion = !empty($promotion)?$promotion:0;	
	}

    $html="";
    $total_price_addons=0;
    $total_addons=0;
    foreach ($addons as $key => $value){
		$total_addons+=$value['number_addon'];
		$totalPriceOneService=$value['number_addon']*$clsAddOnService->getStrPrice($value['addonservice_id']);
		$totalPricePromotion = ($totalPriceOneService * $promotion)/100;
		
        $html.= '<li><span class="w_240 text_left number__addon--li">'.$value['number_addon'].' '.$clsAddOnService->getTitle($value['addonservice_id']).'</span><span class="w_120 text-right">'.$clsAddOnService->getPrice($value['addonservice_id']).' '.$clsISO->getShortRate().'</span><span class="price text-right">'.$clsISO->formatPrice($totalPriceOneService).' '.$clsISO->getShortRate().'</span></li>';
		if($totalPricePromotion > 0){
			$html .= '<li class="promotion color_1fb69a "> <span class="w_240 text_left">'.$core->get_Lang('Promotion').'</span> <span class="w_120 text_right">-30%</span> <span class="price text_right">-'.$clsISO->formatPrice($totalPricePromotion).' <span class="text-underline size18">'.$clsISO->getShortRate().'</span></span></li>';
		}
		
        $total_price_addons += $value['number_addon']*$clsAddOnService->getStrPrice($value['addonservice_id']) - $totalPricePromotion;
    }
    $grand_total_z= $total_price_addons + $total_price_z;
    $price_deposit = $grand_total_z / 100 * $deposit;
    $grand_total= $clsISO->formatPrice($grand_total_z);

    //var_dump($grand_total,$grand_total_z,$total_price_addons,$total_price_z);die();
    /*$html = $core->build('loadSelectAddon.tpl');
    echo  $html;die();*/
    echo json_encode(array(
        "html"	=> $html,
        "grand_total"	=> $grand_total,
        "price_deposit"	=> $price_deposit,
		"total_addons"	=> $total_addons,
        "grand_total_z"	=> $grand_total_z,
    ));die();
}
function default_loadTextDay(){
    global $core,$mod,$act,$clsISO,$_LANG_ID,$clsConfiguration,$adult_type_id,$child_type_id,$infant_type_id;
    $date = isset($_POST['date']) && !empty($_POST['date'])? $_POST['date']:'';
    $date = str_replace('/', '-', $date);
    $date=strtotime($date);
    $text_day=$clsISO->getDayOfWeek($date);
    echo $text_day.', '.date("d/m/Y",$date); die();
}
function default_loadTextDayItinerary(){
    global $core,$mod,$act,$clsISO,$_LANG_ID;
    $clsTour = new Tour(); $assign_list["clsTour"] = $clsTour;
    $clsTourItinerary=new TourItinerary(); $assign_list['clsTourItinerary']=$clsTourItinerary;

    $date = isset($_POST['date']) && !empty($_POST['date'])? $_POST['date']:'';
    $tour_id = $_POST['tour_id'];
    $date = str_replace('/', '-', $date);
    //$date=strtotime($date);
    $text_day=$clsISO->getDayOfWeek($date);

    #- Itinerary
    $lstItineraryTour = $clsTourItinerary->getAll("is_trash=0 and tour_id='$tour_id' and title_contingency='' order by order_no asc", $clsTourItinerary->pkey.',image,content,tour_itinerary_id,transport,is_show_image,day,day2');
    $assign_list['lstItineraryTour'] = $lstItineraryTour;
    $list_itinerary=[];
    //var_dump($first_start_date1);die();
    foreach ($lstItineraryTour as $k =>$v){
        $list_itinerary[$v[$clsTourItinerary->pkey]] = $clsISO->converTimeToText5(strtotime($date .' + '. $k .' day'));
    }
    echo json_encode(array(
        "list_itinerary"	=> $list_itinerary,
    ));die();

}
function default_contact(){

    global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $title_page,$description_page,$keyword_page;
    global $clsISO, $_LANG_ID, $_lang, $extLang, $_frontIsLoggedin_user_id,$lstCountryEx;
    #

    $clsTour = new Tour();$assign_list["clsTour"] = $clsTour;
    $clsHotel = new Hotel();$assign_list["clsHotel"] = $clsHotel;
    $clsHotelRoom = new HotelRoom();$assign_list["clsHotelRoom"] = $clsHotelRoom;
    $clsCruise = new Cruise();$assign_list["clsCruise"] = $clsCruise;
    $clsCruiseCabin = new CruiseCabin();$assign_list["clsCruiseCabin"] = $clsCruiseCabin;
    $clsCruiseItinerary = new CruiseItinerary();$assign_list["clsCruiseItinerary"] = $clsCruiseItinerary;
    $clsVoucher = new Voucher();$assign_list["clsVoucher"] = $clsVoucher;
    $clsCity = new City();$assign_list["clsCity"] = $clsCity;



    $clsFeedback=new Feedback(); $assign_list['clsFeedback'] = $clsFeedback;
    
    $oneFeedback=$clsFeedback->getOne(497);
    
	$feedback_store=unserialize($oneFeedback['feedback_store']);
  
    $room=$feedback_store['room'];
    foreach($room as $item){
        
         //print_r($item['hotel_room_id']);die();
    }
   
	
	
	$clsCountry = new _Country(); $assign_list["clsCountry"] = $clsCountry;
	#
	$assign_list["lstCountryRegion"] = $clsCountry->getAll("1=1 and is_trash=0 order by order_no ASC",$clsCountry->pkey.",title");
	
    $clsTourOption = new TourOption(); $assign_list['clsTourOption']=$clsTourOption;
    $clsFAQ = new FAQ(); $assign_list['clsFAQ']=$clsFAQ;
    #
    $lstFaqs=$clsFAQ->getAll("is_trash=0 and is_online=1 order by order_no asc limit 0,4",$clsFAQ->pkey.',title,content');
    $assign_list["lstFaqs"] = $lstFaqs;
    
    
    $cartSessionHotel= vnSessionGetVar('ContactHotel');
    $assign_list["cartSessionHotel"] = $cartSessionHotel;
   
    
    $cartSessionTour= vnSessionGetVar('ContactTour');
    $assign_list["cartSessionTour"] = $cartSessionTour;
    $cartSessionCruise= vnSessionGetVar('ContactCruise');
    $assign_list["cartSessionCruise"] = $cartSessionCruise;
   // print_r($cartSessionCruise);die();
	
	$cartSessionVoucher= vnSessionGetVar('ContactVoucher');
    $assign_list["cartSessionVoucher"] = $cartSessionVoucher;
//	print_r($cartSessionVoucher);die();


    #
    if(!empty($_frontIsLoggedin_user_id)) {
        $clsMember = new Member(); $assign_list['clsMember']=$clsMember;
        $name = $clsMember->getFullName($_frontIsLoggedin_user_id); $assign_list['name']=$name;
        $email = $clsMember->getEmail($_frontIsLoggedin_user_id); $assign_list['email']=$email;
        $phone = $clsMember->getPhone($_frontIsLoggedin_user_id); $assign_list['phone']=$phone;
        $country_id = $clsMember->getOneField('country_id',$_frontIsLoggedin_user_id); $assign_list['country_id']=$country_id;
        $title = $clsMember->getOneField('title',$_frontIsLoggedin_user_id); $assign_list['title']=$title;
    }
    #
    $errMsg='';

    if(isset($_POST['plantrip'])&&$_POST['plantrip']=='plantrip'){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city_id = $_POST['city_id'];
        $tour_id = $_POST['tour_id'];
        $cruise_id = $_POST['cruise_id'];
        $birthday = $_POST['birthday'];
        $birthday =strtotime($birthday);
        #- Verify Captcha
        if(_ISOCMS_CAPTCHA=='IMG'){
            $security_code = isset($_POST["security_code"])? trim($_POST["security_code"]) : '';
            $security_code = strtoupper($security_code);
            if($security_code==''){
                $errMsg.= '&bull; '.$core->get_Lang('Please enter security code').' <br />';
            }
            if(!empty($security_code) && $security_code != $_SESSION['skey']){
                $errMsg .= $core->get_Lang('Secure code not match').' <br />';
            }
        }else if(_ISOCMS_CAPTCHA=='reCAPTCHA'){
            if(!$clsISO->checkGoogleReCAPTCHA()){
                $errMsg .= $core->get_Lang('Secure code not match').' <br />';
            }
        }
		$hidden_field=isset($_POST['hidden_field'])?$_POST['hidden_field']:'';
		
		if($hidden_field!=''){
			$errMsg .= $core->get_Lang('hidden field');
		}
        #
        if($errMsg==''){
            $feedback_id = $clsFeedback->getMaxId();
            $feedback_code=$clsFeedback->generateFeedBack($feedback_id);
            $current_date = date('m/d/Y');
            $current_time = strtotime($current_date);
            $target_id = $tour_id?$tour_id:0;
            
            if(!empty($cartSessionTour)){
                $array_booking=array_merge($cartSessionTour,$_POST);
                $type='Tour';
            }elseif(!empty($cartSessionHotel)){
                $array_booking=array_merge($cartSessionHotel,$_POST);
                $type='Hotel';
            }elseif(!empty($cartSessionCruise)){
                $array_booking=array_merge($cartSessionCruise,$_POST);
                $type='Cruise';
            }elseif(!empty($cartSessionVoucher)){
                $array_booking=array_merge($cartSessionVoucher,$_POST);
                $type='Voucher';
            }else{
                $array_booking=$_POST;
            }
            
            
            #
            $fx = "feedback_id,target_id,feedback_code,title,fullname,birthday,email,phone,address,country_id,feedback_store,user_ip,reg_date,departure_date";
            $vx = "'$feedback_id'
			,'".$target_id."'
			,'$feedback_code'
			,'".$_POST['title']."'
			,'$fullname'
			,'$birthday'
			,'$email'
			,'$phone'
			,'$address'
			,'".$_POST['country_id']."'
			,'".serialize($array_booking)."'
			,'".$_SERVER['REMOTE_ADDR']."'
			,'".time()."'
			,'".$current_time."'
			";
			if(!empty($type)){
				$fx .= ",type";
				$vx .= ",'$type'";
			}
            #
            //print_r($fx.'<br>'.$vx);die();
            if($clsFeedback->insertOne($fx,$vx)){
                $clsFeedback->newBooking($feedback_id);
                //vnSessionDelVar('ContactTour');
                //vnSessionDelVar('ContactCruise');
                //vnSessionDelVar('ContactHotel');
				if($_LANG_ID=='vn'){
					header('location:'.$extLang.'/lien-he-thanh-cong/fb-'.$feedback_id.'.html');
				}else{
					header('location:'.$extLang.'/contact-us-success/fb-'.$feedback_id.'.html');
				}
				
                exit();
            }
        }else{
            foreach($_POST as $k=>$v){
                $assign_list[$k] = $v;
            }
            $assign_list["errMsg"] = $errMsg;
        }
    }
    /*=============Title & Description Page==================*/
    $title_page = $core->get_Lang('contactus').' | '.PAGE_NAME;
    $assign_list["title_page"] = $title_page;
    $description_page = $title_page;
    $assign_list["description_page"] = $description_page;
    $keyword_page = $title_page;
    $assign_list["keyword_page"] = $keyword_page;
    /*=============Content Page==================*/
}
function default_deleteService(){
    global $core,$mod,$act;
    
    $type=Input::post('type','');
    
    if($type=='Hotel'){
        vnSessionDelVar('ContactHotel');
    }elseif($type=='Cruise'){
        vnSessionDelVar('ContactCruise');
    }else{
         vnSessionDelVar('ContactTour');
    }

   
    echo json_encode(array(
        'msg' => 'ok'
    ));die();
}
function default_contact2(){

    global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $title_page,$description_page,$keyword_page;
    global $clsISO, $_LANG_ID, $_lang, $extLang, $_frontIsLoggedin_user_id,$lstCountryEx;
    #

    $clsTour = new Tour();$assign_list["clsTour"] = $clsTour;
    $clsCity = new City();$assign_list["clsCity"] = $clsCity;



    $clsFeedback=new Feedback(); $assign_list['clsFeedback'] = $clsFeedback;

    $clsTourOption = new TourOption(); $assign_list['clsTourOption']=$clsTourOption;
    $clsFAQ = new FAQ(); $assign_list['clsFAQ']=$clsFAQ;
    #
    $lstFaqs=$clsFAQ->getAll("is_trash=0 and is_online=1 order by order_no asc limit 0,4",$clsFAQ->pkey);
    $assign_list["lstFaqs"] = $lstFaqs;
    $cartSessionService= vnSessionGetVar('ContactTour');
    $assign_list["cartSessionService"] = $cartSessionService; 

    #
    $errMsg='';

    if(isset($_POST['plantrip'])&&$_POST['plantrip']=='plantrip'){
		
		$Comments=Input::post('Comments');

		print_r(nl2br($Comments)); die();
		
		
		
		
		
		$valid = false;
		$postfields = array();
		$list_fields = array('package_id','first_name', 'last_name', 'phone', 'email','company_name','messager');
		foreach($list_fields as $field){
			${$field} = $_POST[$field];
			$postfields[$field] = trim($_POST[$field]);
			if(isset($_POST[$field]) && !empty($_POST[$field])){
				$valid = true;
			}
		}
		$msg = '_error';
		$return_url = '_nolink';
		// Submit
		if($valid == true){
			$msg = '_error';
			$curl = new Curl();
			
			$curl->setOpt(CURLOPT_SSL_VERIFYHOST,false);
			$curl->setOpt(CURLOPT_SSL_VERIFYPEER,false);
			
			$curl->post('https://okrs.vietiso.com/api/potentials/try-isocms', $postfields);
			//print_r($curl); die();
			if (!$curl->error) {
				$response = toArray($curl->response);
				if(isset($response['result']) && $response['result']=='success'){
					$msg = '_success';
					$return_url = DOMAIN_URL.'/thankyou/'.$response['code'].'.html';
				} else {
					$msg = '_invalid';
				}
			}
		}
		// Return
		echo json_encode(array(
			'msg' => $msg,
			'return_url' => $return_url
		)); die();
    }
    /*=============Title & Description Page==================*/
    $title_page = $core->get_Lang('contactus').' | '.PAGE_NAME;
    $assign_list["title_page"] = $title_page;
    $description_page = $title_page;
    $assign_list["description_page"] = $description_page;
    $keyword_page = $title_page;
    $assign_list["keyword_page"] = $keyword_page;
    /*=============Content Page==================*/
}

function default_loadReview(){
	global $assign_list,$_CONFIG,$core,$mod,$act,$title_page,$description_page,$keyword_page,$clsISO, $_lang,$extLang,$_LANG_ID,$clsISO;
	#
	$page = isset($_POST['page_Review'])?$_POST['page_Review']:0;
	$tour_id = isset($_POST['tour_id'])?$_POST['tour_id']:0;
	
	if($page >0 and $tour_id >0){
	$pageview =  $page +1;
	$limit_start = $page *5;
	$limit_end = $pageview *5 +1;
	$cond = "is_trash=0 and is_online=1 and table_id = '$tour_id' order by order_no DESC limit $limit_start , $limit_end ";
	$clsTour_Review = new TourReview();
	$arraylstReview = $clsTour_Review->getAll($cond,$clsTour_Review->pkey.' , review_date'); 
	
	if($clsTour_Review->countItem($cond)<5){
		$pageview  = 'NoNo';
		}
	$Html = '';
	if(!empty($arraylstReview)){
		$stt = 0;
		foreach ($arraylstReview as $lstReview){
		if($stt++ <6){
		$Html .= '<li class="item">
		  <div class="block-rate-num text-center">
			  <label class="rate-number text-normal">
			  '.$clsTour_Review->getRates($lstReview[$clsTour_Review->pkey]).'</label>
			  <p class="cus-rate">
				  <strong class="block z_12">
				  '.$clsTour_Review->getFullName($lstReview[$clsTour_Review->pkey]).'
				  ,</strong>
				  <span class="z_10 block c6">
				  '.$clsTour_Review->getCountry($lstReview[$clsTour_Review->pkey]).'
				 ,</span>
				  <span class="z_10 block c6">
				  '.$clsISO->converTimeToText($lstReview['review_date']).'
				  </span>
			  </p>
		  </div>
		  <div class="cus-desc">
			  <h5 class="z_14 text-bold text-uppercase c2a">
			  '.$clsTour_Review->getTitle($lstReview[$clsTour_Review->pkey]).'</h5>
			  <div class="review-content">				
				  '.html_entity_decode( $clsTour_Review->getContent($lstReview[$clsTour_Review->pkey])).'
			  </div>			                     
		  </div>
		  </li>';
		}
		}
	}
	echo $Html.'$$$'.$pageview; die();
	}
}
function default_bookgroup_2020(){
	vnSessionDelVar('rq_link'); 
	global $assign_list, $_CONFIG, $core,$extLang, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$extLang,$adult,$child,$infant;
	global $clsISO,$clsConfiguration,$profile_id,$loggedIn,$agent_id,$adult_type_id,$child_type_id,$infant_type_id;
	#
	if(_ISOCMS_CLIENT_LOGIN=='2'){
		if(!$loggedIn){
			$link=$extLang.'/account/signin/r='.$_SERVER['REQUEST_URI'];
			header('Location:'.$link);
			exit();
		}
	}
	#
	$clsProperty = new Property();$assign_list["clsProperty"] = $clsProperty;
	$clsAddOnService = new AddOnService();$assign_list["clsAddOnService"] = $clsAddOnService;
	$clsTourProperty = new TourProperty();$assign_list["clsTourProperty"] = $clsTourProperty;
	$clsTourService = new TourService();$assign_list["clsTourService"] = $clsTourService;
	$clsTourOption = new TourOption();$assign_list["clsTourOption"] = $clsTourOption;
	$clsCountryBK = new _Country(); $assign_list["clsCountryBK"] = $clsCountryBK;
	$lstCountry=$clsCountryBK->getAll("is_trash=0 order by order_no asc",$clsCountryBK->pkey);
	$assign_list["lstCountry"] = $lstCountry; unset($lstCountry);
	#
	$clsTour = new Tour(); $assign_list["clsTour"] = $clsTour;
	$clsTourStore = new TourStore(); $assign_list["clsTourStore"] = $clsTourStore;
	$clsTourStartDate = new TourStartDate(); $assign_list["clsTourStartDate"] = $clsTourStartDate;
	$clsBooking = new Booking(); $assign_list["clsBooking"] = $clsBooking;
	$clsProfile = new Profile(); $assign_list['clsProfile']=$clsProfile;
	$clsVoucher = new Voucher(); $assign_list['clsVoucher']=$clsVoucher;
	$clsPromotion = new Promotion(); $assign_list['clsPromotionr']=$clsPromotion;
	#
	$lstNationality = $clsTourProperty->getAll("is_trash=0 and type='NATIONALITY' order by order_no asc");
	$assign_list["lstNationality"] = $lstNationality;
	$lstVisitorType = $clsTourProperty->getAll("is_trash=0 and type='VISITORTYPE' order by order_no asc");
	$assign_list["lstVisitorType"] = $lstVisitorType;

	$listService = $clsTourService->getAll('is_trash=0 and is_online=1 order by order_no ASC');
	$assign_list["listService"] = $listService;
	//print_r(count($listService)); die();
	unset($listService);
	if($_LANG_ID=='vn'){
		$_EXCHANGE_RATE=1;
	}else{
		$_EXCHANGE_RATE=$clsISO->getRateVCB('USD');
	}
	
	$assign_list["_EXCHANGE_RATE"] = $_EXCHANGE_RATE;
	
	#
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;


	$slug = isset($_GET['slug'])?$_GET['slug']:'';
	$tour_id = $clsTour->getBySlug($slug);
	if(intval($tour_id)==0){
		redirect(PCMS_URL.$extLang);
	}
	$assign_list["tour_id"] = $tour_id;

	$oneItem = $clsTour->getOne($tour_id);
	$assign_list['oneItem']=$oneItem;
	//print_r($oneItem); die();



	#list all Room and hotel Facilities
	$list_Service = $oneItem['list_service_id'];
	$lstTourService = array();
	if($list_Service != '' && $list_Service != '0'){
		$list_Service = str_replace('||','|',$list_Service);
		$list_Service = ltrim($list_Service,'|');
		$list_Service = rtrim($list_Service,'|');
		$TMP = explode('|',$list_Service);
		for($i=0; $i<count($TMP); $i++){
			if(!in_array($TMP[$i],$lstTourService)){
				$lstTourService[] = $TMP[$i];
			}
		}
	}
	$assign_list['lstTourService']=$lstTourService;
	unset($lstTourService);

	if($show=='Departure'){
		$departure_date = isset($_GET['departure_date']) ? $_GET['departure_date'] : '';
		$assign_list['departure_date'] = $departure_date;
	}
	$promotion= $clsTour->getMinStartDatePromotionPro($tour_id);

	$assign_list['promotion'] = $promotion;
//	var_dump($promotion);die();

	if($clsTourStore->checkExist($tour_id,'DEPARTURE')){
		$lstTourStartDate=$clsTourStartDate->getAll("is_trash=0 and is_online=1 and start_date='$departure_date' and tour_id='$tour_id' limit 0,1");
		$depositItem=$lstTourStartDate[0]['deposit'];
	}else{
		$lstTourDeposit=$clsTour->getAll("is_trash=0 and is_online=1 and tour_id='$tour_id'");
		$depositItem=$lstTourDeposit[0]['deposit'];
	}

	if($depositItem>0){
		$deposit=$depositItem;
	}else{
		$deposit=100;
	}
	$assign_list["deposit"] = $deposit;
	$assign_list["depositItem"] = $depositItem;

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
	$assign_list["lstOption"] = $lstOption;
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
	$lastAdultSize=end($lstAdultSize);

	$max_adult=$clsTourOption->getOneField('number_to',$lastAdultSize);
	$max_adult?$max_adult:1;
	$assign_list["max_adult"] = $max_adult;

	$lstChildSizeGroup = $clsTour->getOneField('child_group_size',$tour_id);
	$lstChildSize = array();
	if($lstChildSizeGroup != '' && $lstChildSizeGroup != '0'){
		$TMP = explode(',',$lstChildSizeGroup);
		for($i=0; $i<count($TMP); $i++){
			if(!in_array($TMP[$i],$lstChildSize)){
				$lstChildSize[] = $TMP[$i];
			}
		}
	}
	$lastChildSize=end($lstChildSize);
	$max_child=$clsTourOption->getOneField('number_to',$lastChildSize);
	$assign_list["max_child"] = $max_child;


	$lstInfantSizeGroup = $clsTour->getOneField('infant_group_size',$tour_id);
	$lstInfantSize = array();
	if($lstInfantSizeGroup != '' && $lstInfantSizeGroup != '0'){
		$TMP = explode(',',$lstInfantSizeGroup);
		for($i=0; $i<count($TMP); $i++){
			if(!in_array($TMP[$i],$lstInfantSize)){
				$lstInfantSize[] = $TMP[$i];
			}
		}
	}
	$lastInfantSize=end($lstInfantSize);
	$max_infant=$clsTourOption->getOneField('number_to',$lastInfantSize);
	$assign_list["max_infant"] = $max_infant;

	#

	if(!empty($profile_id)) {
		$clsProfile = new Profile(); $assign_list['clsProfile']=$clsProfile;
		$name = $clsProfile->getFullname($profile_id); $assign_list['name']=$name;
		$firstname = $clsProfile->getFirstName($profile_id); $assign_list['firstname']=$firstname;
		$lastname = $clsProfile->getLastName($profile_id); $assign_list['lastname']=$lastname;
		$email = $clsProfile->getEmail($profile_id); $assign_list['email']=$email;
		$phone = $clsProfile->getPhone($profile_id); $assign_list['phone']=$phone;
		$address = $clsProfile->getAddress($profile_id); $assign_list['address']=$address;
		$country_id = $clsProfile->getOneField('country_id',$profile_id); $assign_list['country_id']=$country_id;
	}
	$err_msg ='';
	#- Verify Captcha


	if(isset($_POST['booking']) && $_POST['booking']=='booking'){
		if(_ISOCMS_CAPTCHA=='IMG'){
			$security_code = isset($_POST["security_code"])? trim($_POST["security_code"]) : '';
			$security_code = strtoupper($security_code);
			if($security_code==''){
				$err_msg.= '&bull; '.$core->get_Lang('Please enter security code').' <br />';
			}
			if(!empty($security_code) && $security_code != $_SESSION['skey']){
				$err_msg .= $core->get_Lang('Secure code not match').' <br />';
			}
		}else{
			if(!$clsISO->checkGoogleReCAPTCHA()){
				$err_msg .= $core->get_Lang('Secure code not match').' <br />';
			}
		}
		$departure_date = isset($_POST['departure_date'])?$_POST['departure_date']:'';
		$num_day = $clsTour->getOneField('number_day',$tour_id);
		$end_date =  date('m/d/Y',strtotime('+'.$num_day.' day', strtotime($departure_date)));

		$first_name = $_POST['first_name'];
		if($first_name==''){
			$err_msg.= '&bull; '.$core->get_Lang('Please enter your first name').' <br />';
		}
		$last_name = $_POST['last_name'];
		if($last_name==''){
			$err_msg.= '&bull; '.$core->get_Lang('Please enter your last name').' <br />';
		}
		$email = $_POST['email'];
		if($email==''){
			$err_msg.= '&bull; '.$core->get_Lang('Please enter your email').' <br />';
		}
		if($email != '' && !$clsISO->is_valid_email($email)){
			$err_msg.= '&bull; '.$core->get_Lang('Please enter your email valid').' <br />';
		}
		$telephone = $_POST['telephone'];
		if($telephone==''){
			$err_msg.= '&bull; '.$core->get_Lang('Please enter your telephone').' <br />';
		}
		#
		if($err_msg == ''){
			if(_ISOCMS_CLIENT_LOGIN=='2'){
				if(empty($profile_id)) {
					$res = $clsProfile->getAll("email = '$email' limit 0,1",$clsProfile->pkey);
					if(!empty($res)) {
						$profile_id = $res[0]['profile_id'];
						header('location: '.DOMAIN_NAME.$extLang.'/account/signin.html');
						exit();
					} else {
						$profile_id = $clsProfile->getMaxID();
						$password = substr(strtoupper($clsProfile->encrypt('VietISO-'.time())),0,8);
						$userpass = $clsProfile->encrypt($password);
						#
						$full_name=$first_name.' '.$last_name;
						$fx = "$clsProfile->pkey,email,username,userpass,full_name,full_name_slug,ip_register,reg_date";
						$vx = "'".$profile_id."','".$email."','".$email."','".$userpass."','".$full_name."','".$core->replaceSpace($full_name)."','".$_SERVER['REMOTE_ADDR']."','".time()."'";
						if($clsProfile->insertOne($fx,$vx)) {
							$clsProfile->sendEmailRegisterMember($profile_id,$password);
						}
					}
				}
			}
			$booking_id = $clsBooking->getMaxId();
			$booking_code = $clsBooking->generateBookingCode($booking_id,'Tour');
			#
			$full_name=$first_name.' '.$last_name;
			$f="booking_id,target_id,title,contact_name,full_name,country_id,phone,email,take_care";
			$f.= ",clsTable,booking_code,booking_store,booking_type,reg_date,ip_booking,check_in,check_out,departure_date,totalgrand,deposit,balance";
			$POST = array();
			foreach($_POST as $k=>$v){
				$POST[$k] = $v;
			}
			$POST['BOOK_VALUE'] = serialize($BOOK_VALUE);
			$POST['BOOK_ADDON'] = serialize($BOOK_ADDON);
			#
			$v="'$booking_id'
			,'".$tour_id."'
			,'".$_POST['title']."'
			,'".$full_name."'
			,'".$full_name."'
			,'".$_POST['country_id']."'
			,'".$_POST['telephone']."'
			,'".$email."'
			,'".$_POST['please']."'
			,'Tour'
			,'$booking_code'
			,'".serialize($POST)."'
			,'Tour','".time()."'
			,'".$_SERVER['REMOTE_ADDR']."'
			,'".$departure_date."'
			,'".$end_date."'
			,'".strtotime($departure_date)."'
			,'".$clsISO->processFloatNumber(str_replace('.00','',$_POST['price_total_amount']))."'
			,'".$_POST['price_deposit']."' 
			,'".$clsISO->processFloatNumber(str_replace('.00','',$_POST['price_remaining']))."'";
			#
			if(PAYMENT_GLOBAL){
				$f .= ",payment_method";
				$v .= ",'".intval($_POST['payment_method'])."'";
			}
			if(_ISOCMS_CLIENT_LOGIN){
				$f.= ",member_id";
				$v.= ",'$profile_id'";
			}
			if(_IS_TRAVEL_AGENT){
				$f.= ",agent_id";
				$v.= ",'$agent_id'";
			}

//			$clsISO->print_pre($_POST['voucher_code'],true);die();
			if($clsBooking->insertOne($f,$v)){
				$link_request = $_SERVER['REQUEST_URI'];
				vnSessionSetVar('rq_link', $link_request);
                if($_POST['voucher_code']){
                    $f1 ="first_name,last_name,promotion_code,`email`,`ip`,reg_date,is_trash";
                    $v1 ="'".$first_name."','".$last_name."','".$_POST['voucher_code']."','".$email."','".$_SERVER['REMOTE_ADDR']."',".time().",0";
                    $clsVoucher->insertOne($f1,$v1);
                    $promotion_id =$clsPromotion->getByPromotionCode($_POST['voucher_code']);
                    $ticket =$clsPromotion->getDiscountValue($promotion_id,2)-1;
                    $discount_val_new = $clsPromotion->getUpdateDiscountValueTicket($promotion_id,$ticket);
                    $clsPromotion->updateOne($promotion_id,"discount_value='".$discount_val_new."'");
                }
				$clsBooking->sendEmailBookingTour2018($booking_id);
				if(PAYMENT_GLOBAL){
					$clsBilling = new Billing();
					$clsBilling->initPay($booking_id);
				}
				header('location:'.$extLang.'/booking/tours/successful');
			}else{
				header('location:'.$extLang.'/booking/tours/error');
			}
		}else{
			$assign_list["err_msg"] = $err_msg;
			foreach($_POST as $key=>$val){
				$assign_list[$key] = $val;
			}
		}
	}
    /*=============Title & Description Page==================*/
    $title_page = $core->get_Lang('Booking Tour').' | '.$oneItem['title'].' | '. PAGE_NAME;
    $assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
    /*=============Content Page==================*/
}

function default_customize() {
    global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $extLang;
    #
    $clsTour = new Tour();
    $assign_list["clsTour"] = $clsTour;
    $slug = $_GET['slug'];
    $tour_id = $clsTour->getBySlug($slug);
    if ($tour_id == '') {
        header('location:'.PCMS_URL.$extLang);
    }
    vnSessionSetVar('CUSTOMIZE_TOUR_ID', $tour_id);
    header('location:' . PCMS_URL . $extLang . '/tours/customize-tour/form.html');
}
function default_search(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$domain,$country_id,$city_id,$price_range_ID,$duration_ID,$cat_id;
	
	#
	$clsTourCategory = new TourCategory(); $assign_list['clsTourCategory'] = $clsTourCategory;
	$clsTour=new Tour(); $assign_list['clsTour']=$clsTour;
	$clsTourStore=new TourStore(); $assign_list['clsTourStore']=$clsTourStore;
	$clsCity=new City(); $assign_list['clsCity']=$clsCity;
	$clsTransport = new Transport(); 
	$assign_list['clsTransport'] = $clsTransport;
	$clsReviews=new Reviews(); $assign_list['clsReviews']=$clsReviews;
	$clsPromotion=new Promotion(); $assign_list['clsPromotion']=$clsPromotion;
	$clsPriceRange = new PriceRange();$assign_list['clsPriceRange']=$clsPriceRange;
	$clsPagination = new Pagination();
	#
	$destination_ID = isset($_GET['destination_ID']) ? $_GET['destination_ID'] : '';
	if(!empty($destination_ID)){
		if(substr($destination_ID,0,1)=='0'){
			$country_id = (int) str_replace('0','',$destination_ID); 
		}else{
			$city_id = (int)$destination_ID; 
		}
	}
	if($destination_ID==''){
		$country_id = isset($_GET['country_id']) ? $_GET['country_id'] : '';
		$city_id = isset($_GET['city__id']) ? $_GET['city__id'] : '';
	}
	//print_r($city_id); die();
	$cat_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : '';
	
	$min_duration = isset($_GET['min_duration']) ? $_GET['min_duration'] : '';
	$max_duration =isset($_GET['max_duration']) ? $_GET['max_duration'] : '';
	$activities_id = isset($_GET['activities_id']) ? $_GET['activities_id'] : '';	
	$price_range_id =isset($_GET['price_range_id']) ? $_GET['price_range_id'] : '';	
	$destination_id =isset($_GET['destination_id']) ? $_GET['destination_id'] : '';	
	$duration_id =isset($_GET['duration_id']) ? $_GET['duration_id'] : '';	
	$departure_point_id =isset($_GET['departure_point_id']) ? $_GET['departure_point_id'] : '';		

	$keyword=(isset($_GET['key']) && !empty($_GET['key']))?$_GET['key']:'';
	
	$recordPerPage = 6;
	$currentPage = isset($_GET['page'])?intval($_GET['page']):1;
	#
	$cond ="is_trash=0 and is_online=1";
	$order_by=" order by order_no asc";
	#pagevieew
	
	if (intval($departure_point_id) > 0) {
		$cond .= " and (departure_point_id = '$departure_point_id' or list_departure_point_id like '%|$departure_point_id|%')";
		$assign_list["departure_point_id"] = $departure_point_id;
    }
	
	if($country_id>0){
		$cond.= " and tour_id IN (SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE is_trash=0 and country_id IN ($country_id))";
		$assign_list["country_id"] = $country_id;
	}
	if($destination_id>0){
		$cond.= " and tour_id IN (SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE is_trash=0 and city_id = '$destination_id')";
		$assign_list["destination_id"] = $destination_id;
	}
	
	if($city_id>0){
		$cond.= " and tour_id IN (SELECT tour_id FROM ".DB_PREFIX."tour_destination WHERE is_trash=0 and city_id IN ($city_id))";
		$assign_list["city_id"] = $city_id;
	}
	if(!empty($cat_id)){
		$cat_ID = explode(',',$cat_id);
		$cond.=" and (";
		for($i=0;$i<count($cat_ID);$i++) {
			if($i==0 && count($cat_ID)==1){
				$cond.=" (cat_id='".$cat_ID[$i]."' or list_cat_id like '%|".$cat_ID[$i]."|%')";
			}elseif(count($cat_ID)>1 && $i< (count($cat_ID)-1)){
					$cond.="(cat_id='".$cat_ID[$i]."' or list_cat_id like '%|".$cat_ID[$i]."|%') or ";
			}else{
				$cond.="(cat_id='".$cat_ID[$i]."' or list_cat_id like '%|".$cat_ID[$i]."|%')";
			}
		}
		$cond.=")";
	}
	
	$assign_list["cat_id"] = $cat_id;
	if(!empty($activities_id)){
		$activities_ID = explode(',',$activities_id);
		$cond.=" and (";
		for($i=0;$i<count($activities_ID);$i++) {
			if($i==0 && count($activities_ID)==1){
				$cond.=" list_activities_id like '%".$activities_ID[$i]."%'";
			}elseif(count($activities_ID)>1 && $i< (count($activities_ID)-1)){
					$cond.=" list_activities_id like '%|".$activities_ID[$i]."|%' or ";
			}else{
				$cond.=" list_activities_id like '%|".$activities_ID[$i]."|%'";
			}
		}
		$cond.=")";
	}
	
	//print_r($cond);die();
	$assign_list["activities_id"] = $activities_id;

	if($min_duration>0 && $max_duration>0){
		$cond.=" and number_day >= '$min_duration' and number_day <= '$max_duration'";
	}elseif($min_duration==0 && $max_duration>0){
		$cond.=" and number_day <= '$max_duration'";
	}elseif($min_duration>0 && $max_duration==0){
		$cond.=" and number_day >= '$min_duration'";
	}else{
	}
	$assign_list['min_duration']=$min_duration;
	$assign_list['max_duration']=$max_duration;
	
	if(!empty($duration_id)){
		$cond.= " and number_day='$duration_id'";
		$assign_list["duration_id"] = $duration_id;
	}
	//print_r($cond); die();
	
	if($keyword!=''){
		$cond.=" and (title like '$keyword' or slug like '%".$core->replaceSpace($keyword)."%')";
		$assign_list["keyword"] = $keyword;
	}


	$totalRecord = $clsTour->getAll($cond);
	$totalRecord = $totalRecord?count($totalRecord):'0';
	//print_r($totalRecord);die();

	$assign_list['totalRecord']=$totalRecord; 	
	
	$config = array(
		'total'	=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);
	
	$offset = ($currentPage-1)*$recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	
	$listTour = $clsTour->getAll($cond.$order_by.$limit,$clsTour->pkey);
	$assign_list['listTour'] = $listTour; 
	unset($listTour);
	$assign_list['page_view']=$page_view; 	
	unset($page_view);
	$totalPage= $clsPagination->getTotalPage();
	$assign_list['totalPage']=$totalPage; 
	
	unset($clsPriceRange);unset($clsCity);unset($clsTour);
	
	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Results search').' | '. PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
	
}
function default_ajLoadBookingSummary(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain;
	global $clsISO;
	#
	$clsTour = new Tour();
	$clsTourService = new TourService();
	$tour_id = intval($_POST['tour_id']);
	
	$BOOK_VALUE = vnSessionGetVar('BOOK_VALUE');
	
	$tourRate = $clsTour->getTripPriceOrgin($tour_id);
	$totalRate = 0;
	$totalRate += $tourRate*intval($BOOK_VALUE['adult']);
	$totalRate += $tourRate*intval($BOOK_VALUE['child']);
	$totalRate += $tourRate*intval($BOOK_VALUE['baby']);
	#
	$Html = '
	<div class="box">
		<div class="top"> <h2>Booking Details</h2> </div>
		<div class="mid">
			<ul>
				<li><strong>'.$clsTour->getTitle($tour_id).' | '.$clsTour->getTripDuration($tour_id).'</strong></li>
				<li><label class="col1">Depart time :</label>
					<span class="subli col2">'.$BOOK_VALUE['departure_date'].'</span></li>
				<li><label class="col1">Adult(s) :</label>
					<span class="subli col2">x '.$BOOK_VALUE['adult'].'</span> <span class="col3">'.$clsISO->getRate().' '.$clsISO->formatPrice($tourRate).'</span> </li>
				<li><label class="col1">Children(s) :</label>
					<span class="subli col2">x '.$BOOK_VALUE['child'].'</span> <span class="col3">'.$clsISO->getRate().' '.$clsISO->formatPrice($tourRate).'</span></li>
				<li><label class="col1">Bady(s) :</label>
					<span class="subli col2">x '.$BOOK_VALUE['baby'].'</span> <span class="col3">'.$clsISO->getRate().' '.$clsISO->formatPrice($tourRate).'</span></li>
			</ul>
		</div>
	</div>';
	$BOOK_ADDON = vnSessionGetVar('BOOK_ADDON');
	if(is_array($BOOK_ADDON) && count($BOOK_ADDON) > 0){
		$Html .= '
		<div class="box">
			<div class="top"> <h2>Booking AddOns Services</h2> </div>
			<div class="mid">
				<ul>';
				foreach($BOOK_ADDON as $k=>$v){
					$Html .= '
					<li>
						<span class="col1">'.$clsTourService->getTitle($k).'</span> 
						<span class="subli col2">x '.$v.'</span>
						<span class="col3">'.$clsISO->getRate().' '.$clsISO->formatPrice($clsTourService->getPriceOrgin($k)*$v).'</span>
					</li>';
					#
					$totalRate += $clsTourService->getPriceOrgin($k)*$v;
				}
		$Html .= '</ul>
			</div>
		</div>';
	}
	$Html .= '
	<div class="box">
		<div class="top"> <h2>Price total</h2> </div>
		<div class="mid">
			<ul class="costing">
				<li class="full">Full Payment<span class="detail">'.$clsISO->getRate().' '.$clsISO->formatPrice($totalRate).'</span></li>
				<li class="discount">Discount<span class="detail">'.$clsISO->getRate().'0</span></li>
				<li class="total">Total Price<span class="detail">'.$clsISO->getRate().' '.$clsISO->formatPrice($totalRate).'</span></li>
			</ul>
	   </div>
	</div>
	<input type="hidden" name="totalRate" value="'.$clsISO->processSmartNumber($totalRate).'" />';
	#
	echo($Html); die();
}
function default_loadPriceTableDepartureGroup(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain,$adult,$child,$infant,$adult_type_id,$child_type_id,$infant_type_id;
	global $clsISO;
	
	
	#
	$clsTour = new Tour(); $assign_list["clsTour"] = $clsTour;
	$clsTourStore = new TourStore(); $assign_list["clsTourStore"] = $clsTourStore;
	$clsTourStartDate = new TourStartDate(); $assign_list["clsTourStartDate"] = $clsTourStartDate;
	$clsTourPriceGroup = new TourPriceGroup(); $assign_list["clsTourPriceGroup"] = $clsTourPriceGroup;
	$clsTourProperty = new TourProperty(); $assign_list["clsTourProperty"] = $clsTourProperty;
	$clsTourOption = new TourOption(); $assign_list["clsTourOption"] = $clsTourOption;
	$tour_id = intval($_POST['tour_id']); $assign_list["tour_id"] = $tour_id;
	

	$oneItem = $clsTour->getOne($tour_id);
	$assign_list['oneItem']=$oneItem;
	
	$departure_in = isset($_POST['departure_date']) && !empty($_POST['departure_date'])? $_POST['departure_date']:'';
	$assign_list["departure_in"] = $departure_in;
	
	$departure_date = strtotime($departure_in);
	$assign_list['departure_date']=$departure_date;
	
	$adult = isset($_POST['adult']) ? intval($_POST['adult']) : 1;
	$assign_list['adult']=$adult;
	$child = isset($_POST['child']) ? intval($_POST['child']) : 0;
	$assign_list['child']=$child;
	$infant = isset($_POST['infant']) ? intval($_POST['infant']) : 0;
	$assign_list['infant']=$infant;
	
	
	$Available=$clsTourStartDate->getAllotmentTourGroup2($tour_id,$departure_date,$is_agent);
	
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
	$lastAdultSize=end($lstAdultSize);
	
	$max_adult=$clsTourOption->getOneField('number_to',$lastAdultSize);
	$max_adult?$max_adult:1;
	$assign_list["max_adult"] = $max_adult;
	
	$lstChildSizeGroup = $clsTour->getOneField('child_group_size',$tour_id);
	$lstChildSize = array();
	if($lstChildSizeGroup != '' && $lstChildSizeGroup != '0'){
		$TMP = explode(',',$lstChildSizeGroup);
		for($i=0; $i<count($TMP); $i++){
			if(!in_array($TMP[$i],$lstChildSize)){
				$lstChildSize[] = $TMP[$i];
			}
		}
	}
	$lastChildSize=end($lstChildSize);
	$max_child=$clsTourOption->getOneField('number_to',$lastChildSize);
	$assign_list["max_child"] = $max_child;
	
	$lstInfantSizeGroup = $clsTour->getOneField('infant_group_size',$tour_id);
	$lstInfantSize = array();
	if($lstInfantSizeGroup != '' && $lstInfantSizeGroup != '0'){
		$TMP = explode(',',$lstInfantSizeGroup);
		for($i=0; $i<count($TMP); $i++){
			if(!in_array($TMP[$i],$lstInfantSize)){
				$lstInfantSize[] = $TMP[$i];
			}
		}
	}
	$lastInfantSize=end($lstInfantSize);
	$max_infant=$clsTourOption->getOneField('number_to',$lastInfantSize);
	$assign_list["max_infant"] = $max_infant;
	
	$total_amount=($price_adult*$adult)+($price_child*$child)+($price_infant*$infant);
	
	$Sql_Promotion = "SELECT promot FROM ".DB_PREFIX."promotion WHERE clsTable='Tour' and target_id='$tour_id' and ".$departure_date." between  start_date and end_date and is_online='1' order by start_date ASC limit 0,1";
	
	$promotion= $dbconn->GetOne($Sql_Promotion);
	$pricePromotion=($total_amount*$promotion/100);
	
	if($clsTourStore->checkExist($tour_id,'DEPARTURE')){
		$lstTourStartDate=$clsTourStartDate->getAll("is_trash=0 and is_online=1 and start_date='$departure_date' and tour_id='$tour_id' limit 0,1");
		$depositItem=$lstTourStartDate[0]['deposit'];
	}else{
		$lstTourDeposit=$clsTour->getAll("is_trash=0 and is_online=1 and tour_id='$tour_id'");
		$depositItem=$lstTourDeposit[0]['deposit'];
	}

	if($depositItem>0){
		$deposit=$depositItem;
	}else{
		$deposit=100;
	}
	$assign_list["promotion"] = $promotion;
	$assign_list["pricePromotion"] = $pricePromotion;
	$assign_list["deposit"] = $deposit;
	$assign_list["depositItem"] = $depositItem;
	$price_deposit=($deposit/100)*$total_amount;
	$price_deposit=number_format($price_deposit, 2, '.', '');
	
	$remaining_amount=$total_amount-$price_deposit-$pricePromotion;
	$remaining_amount= number_format($remaining_amount, 2, '.', '');
	
	
	$lstNationality = $clsTourProperty->getAll("is_trash=0 and is_online=1 and type='NATIONALITY' order by order_no asc");
	$assign_list["lstNationality"] = $lstNationality;
	
	$lstVisitorType = $clsTourProperty->getAll("is_trash=0 and is_online=1 and type='VISITORTYPE' order by order_no asc");
	$assign_list["lstVisitorType"] = $lstVisitorType;
			

	$html = $core->build('load_Price_Table_Departure_Group.tpl'); 
	echo($html); die();
}
function default_getTourPriceByNumberGroup(){
	global $core,$mod,$act,$clsISO,$_LANG_ID,$clsConfiguration,$adult_type_id,$child_type_id,$infant_type_id;
	
	$clsTour = new Tour();
	$clsTourPriceGroup = new TourPriceGroup();
	$clsTourStartDate = new TourStartDate();
	$clsTourProperty = new TourProperty();
	$clsTourOption = new TourOption();
	$clsProperty = new Property();
	$tour_id = $_POST['tour_id'];
	$type = $_POST['type'];
	$number_person = $_POST['number_person'];
	$tour_class_id = $_POST['tour_class_id'];
	
	$tour_visitor_type_id = $_POST['tour_visitor_type_id'];
	if($type=='NoDeparture'){
		$departure_in = 0;
		$departure_date = $departure_in;
	}else{
		$departure_in = $_POST['departure_date'];
		//$departure_date = str_replace('/', '-', $departure_in);
		$departure_date = strtotime($departure_in);
	}
	$assign_list['departure_date']=$departure_date;

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
	$tour_number_group_id=$clsTourPriceGroup->getTourNumberGroup($tour_visitor_type_id,$number_person,$tour_id);
	
	$price = $clsTourPriceGroup->getPriceBooking($tour_id,$tour_class_id,$tour_number_group_id,$tour_visitor_type_id,$departure_date);
	
	$Available=$clsTourStartDate->getAllotmentTourGroup2($tour_id,$departure_date,$is_agent_id);

	$getTripPrice=$clsTour->getTripMinPriceTourGroup($tour_id);
	if($getTripPrice > 0){
		$getTripPrice='$'.''.$getTripPrice;
	}else{
		$getTripPrice='<a class="linkContact">'.$core->get_Lang('Contact us').'</a>';
	}
	$sql="tour_id='$tour_id' and price > 0 and tour_visitor_type_id='$adult_type_id' order by price asc limit 0,1";
	$listTourPriceGroup=$clsTourPriceGroup->getAll("tour_id='$tour_id' and price > 0 and tour_visitor_type_id='$adult_type_id' order by price asc limit 0,1");
	
	$tour_class_id_selected=$listTourPriceGroup[0]['tour_class_id'];
	
	echo '0|||'.$price.'|||'.$tour_number_group_id.'|||'.$Available.'|||'.$getTripPrice.'|||'.$tour_class_id; die();
}


function default_loadStartEndDate(){
	global $core,$mod,$act,$clsISO,$_LANG_ID,$clsConfiguration,$adult_type_id,$child_type_id,$infant_type_id;
	
	$clsTour = new Tour();
	
	$departure_date = isset($_POST['departure_date']) && !empty($_POST['departure_date'])? $_POST['departure_date']:'';
	$departure_date=strtotime($departure_date);
	
	//print_r($departure_date);die();
	
	$tour_id = isset($_POST['tour_id']) && !empty($_POST['tour_id'])? $_POST['tour_id']:'';
	
	$start_date_html=$clsISO->getDayOfWeek($departure_date).', '.$clsISO->converTimeToTextNoComma($departure_date);
	
	$end_date=$clsTour->getEndDate($departure_date,$tour_id);
	$start_date_html=$clsISO->getDayOfWeek($departure_date).', '.$clsISO->converTimeToTextNoComma($departure_date);
	$end_date_html=$clsISO->getDayOfWeek($end_date).', '.$clsISO->converTimeToTextNoComma($end_date);
	
	
	$departure_check_promotion = $_POST['departure_date'];
	//$departure_check_promotion = str_replace('/', '-', $departure_check_promotion);
	$departure_check_promotion = strtotime($departure_check_promotion);
		
	
	$travel_date = $departure_check_promotion;
	
	$booking_date = date('m/d/Y');
	$booking_date = strtotime($booking_date);
	
	$promotion= $clsTour->getMinStartDatePromotionProChoseTime($tour_id,$booking_date,$travel_date);
	
	
	echo '0|||'.$start_date_html.'|||'.$end_date_html.'|||'.$promotion; die();
}
function default_loadPriceTableDeparture(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain,$adult,$child,$infant;
}
function default_ajLoadSelectMaxPeople(){
	global $core,$mod,$act;
	#
	$clsTour= new Tour();
	$clsTourOption= new TourOption();
	$clsSettingChildPolicy = new SettingChildPolicy();

	#
	$group_size_id = isset($_POST['group_size_id']) ? $_POST['group_size_id'] : 0;
	$number_adult = isset($_POST['number_adult']) ? $_POST['number_adult'] : 0;
	$type = isset($_POST['type']) ? $_POST['type'] :'';
	$tour_id = isset($_POST['tour_id']) ? $_POST['tour_id'] : 0;
	
	
	$lstChildSizeGroup = $clsTour->getOneField('child_group_size',$tour_id);
	$lstChildSize = array();
	if($lstChildSizeGroup != '' && $lstChildSizeGroup != '0'){
		$TMP = explode(',',$lstChildSizeGroup);
		for($i=0; $i<count($TMP); $i++){
			if(!in_array($TMP[$i],$lstChildSize)){
				$lstChildSize[] = $TMP[$i];
			}
		}
	}
	$lastChildSize=end($lstChildSize);
	$max_child=$clsTourOption->getOneField('number_to',$lastChildSize);
	
	$lstInfantSizeGroup = $clsTour->getOneField('infant_group_size',$tour_id);
	$lstInfantSize = array();
	if($lstInfantSizeGroup != '' && $lstInfantSizeGroup != '0'){
		$TMP = explode(',',$lstInfantSizeGroup);
		for($i=0; $i<count($TMP); $i++){
			if(!in_array($TMP[$i],$lstInfantSize)){
				$lstInfantSize[] = $TMP[$i];
			}
		}
	}
	$lastInfantSize=end($lstInfantSize);
	$max_infant=$clsTourOption->getOneField('number_to',$lastInfantSize);

	$maxChild=$clsSettingChildPolicy->getNumberChild($group_size_id,$number_adult)?$clsSettingChildPolicy->getNumberChild($group_size_id,$number_adult):0;
	$maxInfant=$clsSettingChildPolicy->getNumberInfant($group_size_id,$number_adult)?$clsSettingChildPolicy->getNumberInfant($group_size_id,$number_adult):0;
	
	#
	$html = '<option value="">'.$core->get_Lang('Select').'</option>';
	if($type=='Child'){
		for($i=0;$i<=intval($maxChild);$i++){
			$html.='<option value="'.$i.'">'.$i.'</option>';	
		}
	}else{
		for($i=0;$i<=intval($maxInfant);$i++){
			$html.='<option value="'.$i.'">'.$i.'</option>';	
		}
	}
 	#
	echo $html; die();
}
function default_ajLoadMaxPeople(){
	global $core,$mod,$act;
	#
	$clsTour= new Tour();
	$clsTourOption= new TourOption();
	$clsSettingChildPolicy = new SettingChildPolicy();

	#
	$group_size_id = isset($_POST['group_size_id']) ? $_POST['group_size_id'] : 0;
	$number_adult = isset($_POST['number_adult']) ? $_POST['number_adult'] : 0;
	$type = isset($_POST['type']) ? $_POST['type'] :'';
	$tour_id = isset($_POST['tour_id']) ? $_POST['tour_id'] : 0;
	
	
	$lstChildSizeGroup = $clsTour->getOneField('child_group_size',$tour_id);
	$lstChildSize = array();
	if($lstChildSizeGroup != '' && $lstChildSizeGroup != '0'){
		$TMP = explode(',',$lstChildSizeGroup);
		for($i=0; $i<count($TMP); $i++){
			if(!in_array($TMP[$i],$lstChildSize)){
				$lstChildSize[] = $TMP[$i];
			}
		}
	}
	$lastChildSize=end($lstChildSize);
	$max_child=$clsTourOption->getOneField('number_to',$lastChildSize);
	
	$lstInfantSizeGroup = $clsTour->getOneField('infant_group_size',$tour_id);
	$lstInfantSize = array();
	if($lstInfantSizeGroup != '' && $lstInfantSizeGroup != '0'){
		$TMP = explode(',',$lstInfantSizeGroup);
		for($i=0; $i<count($TMP); $i++){
			if(!in_array($TMP[$i],$lstInfantSize)){
				$lstInfantSize[] = $TMP[$i];
			}
		}
	}
	$lastInfantSize=end($lstInfantSize);
	$max_infant=$clsTourOption->getOneField('number_to',$lastInfantSize);

	$maxChild=$clsSettingChildPolicy->getNumberChild($group_size_id,$number_adult)?$clsSettingChildPolicy->getNumberChild($group_size_id,$number_adult):0;
	$maxInfant=$clsSettingChildPolicy->getNumberInfant($group_size_id,$number_adult)?$clsSettingChildPolicy->getNumberInfant($group_size_id,$number_adult):0;
	
	
	echo '0|||'.$maxChild.'|||'.$maxInfant; die();
}





?>