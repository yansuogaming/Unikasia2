<?php
function default_default(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$domain,$_lang;
	#
	$clsCruise=new Cruise();$assign_list["clsCruise"] = $clsCruise;
	$clsCruiseStore=new CruiseStore();$assign_list["clsCruiseStore"] = $clsCruiseStore;
	$clsPromotion=new Promotion();$assign_list["clsPromotion"] = $clsPromotion;
	$clsProperty=new Property();$assign_list["clsProperty"] = $clsProperty;
	$clsCruiseCat=new CruiseCat();$assign_list["clsCruiseCat"] = $clsCruiseCat;
	$clsReviews=new Reviews();$assign_list["clsReviews"] = $clsReviews;
	$clsCruiseStartDate=new CruiseStartDate();$assign_list["clsCruiseStartDate"] = $clsCruiseStartDate;
	$clsCruiseProperty=new CruiseProperty();$assign_list["clsCruiseProperty"] = $clsCruiseProperty;
	$clsCruiseVideo = new CruiseVideo();$assign_list["clsCruiseVideo"] = $clsCruiseVideo;
	$clsCityStore = new CityStore();$assign_list["clsCityStore"] = $clsCityStore;
	$clsCity = new City();$assign_list["clsCity"] = $clsCity;
	$clsBlog = new Blog();$assign_list["clsBlog"] = $clsBlog;
	$clsBlogCategory = new BlogCategory();$assign_list["clsBlogCategory"] = $clsBlogCategory;
	$clsCruiseItinerary = new CruiseItinerary();$assign_list["clsCruiseItinerary"] = $clsCruiseItinerary;
	
	#
	$lnk=$_SERVER['REQUEST_URI'];
	if(isset($_GET['page'])){
		$tmp = explode('&',$lnk);
		$n = count($tmp)-1;
		$la_it = '&'.$tmp[$n];
		$str_len = -strlen($la_it);
		$linkpage = substr($lnk, 0, $str_len);
	}else{
		$linkpage = $lnk;
	}
	$assign_list["linkpage"] = $linkpage;
	#
	$lstCruiseTopBest = $clsPromotion->getAll("is_online=1 and clsTable='Cruise' and target_id in (SELECT default_cruise.cruise_id FROM default_cruise WHERE is_trash = 0 and is_online = 1) and ".time()." between  start_date and end_date ORDER BY promotion_id DESC",$clsPromotion->pkey.",target_id,cruise_itinerary_id,price_text");
	$assign_list["lstCruiseTopBest"] = $lstCruiseTopBest;

	#
	$lstCruiseTopPromotion = $clsCruiseStore->getAll("cruise_id in (SELECT default_cruise.cruise_id FROM default_cruise WHERE is_trash = 0 and is_online = 1) and _type='RECOMMED' ORDER BY order_no  asc limit 0,6",'cruise_id');
	$assign_list["lstCruiseTopPromotion"] = $lstCruiseTopPromotion;
	$RecordPageCruisePromotion = count($clsCruiseStore->getAll("cruise_id in (SELECT default_cruise.cruise_id FROM default_cruise WHERE is_trash = 0 and is_online = 1) and _type='RECOMMED' ORDER BY order_no  asc",'cruise_id'));
	$TotalPageCruisePromotion = ceil($RecordPageCruisePromotion/6);
	$assign_list['TotalPageCruisePromotion']=$TotalPageCruisePromotion;
	$assign_list['currentPage']=1; 
    /*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Cruises').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
}
function default_detail(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$global_image_seo_page,$extLang,$oneCommon,$cruise_id,$show;
	global $extLang,$clsConfiguration,$clsISO,$package_id,$now_month;
	$clsTransport = new Transport(); $assign_list["clsTransport"] = $clsTransport;
	$clsCruise = new Cruise(); $assign_list["clsCruise"] = $clsCruise;
	$clsCruiseCat = new CruiseCat(); $assign_list["clsCruiseCat"] = $clsCruiseCat;
	$clsImage = new Image(); $assign_list["clsImage"] = $clsImage;
	$clsCruiseImage = new CruiseImage(); $assign_list["clsCruiseImage"] = $clsCruiseImage;
	$clsCruiseItinerary = new CruiseItinerary();$assign_list["clsCruiseItinerary"] = $clsCruiseItinerary;
	$clsCruiseCabin = new CruiseCabin();$assign_list["clsCruiseCabin"] = $clsCruiseCabin;
	$clsCruiseProperty = new CruiseProperty();$assign_list["clsCruiseProperty"] = $clsCruiseProperty;
	$clsCruiseVideo = new CruiseVideo();$assign_list["clsCruiseVideo"] = $clsCruiseVideo;
	$clsCruiseDestination = new CruiseDestination();$assign_list["clsCruiseDestination"] = $clsCruiseDestination;
	$clsCity = new City(); $assign_list["clsCity"] = $clsCity;
	$clsProperty = new Property();$assign_list["clsProperty"] = $clsProperty;
	$clsCruisePriceTable = new CruisePriceTable();$assign_list["clsCruisePriceTable"] = $clsCruisePriceTable;
	$clsCruiseSeasonPrice = new CruiseSeasonPrice();$assign_list["clsCruiseSeasonPrice"] = $clsCruiseSeasonPrice;
	$clsCruiseMapImage = new CruiseMapImage(); $assign_list["clsCruiseMapImage"] = $clsCruiseMapImage;
	$clsCruiseItineraryDay = new CruiseItineraryDay(); $assign_list["clsCruiseItineraryDay"] = $clsCruiseItineraryDay;
	$clsCountryEx = new Country();
	$clsPromotion = new Promotion();$assign_list["clsPromotion"] = $clsPromotion;
	$clsReviewsCruise = new ReviewsCruise(); $assign_list["clsReviewsCruise"] = $clsReviewsCruise;
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;
	#
	$cruise_id = isset($_GET['cruise_id'])?$_GET['cruise_id']:0;
	$slug = isset($_GET['slug'])?$_GET['slug']:'';
	
	if(empty($clsCruise->checkOnlineBySlug($cruise_id,$slug))){
		header('location:'.DOMAIN_NAME.$extLang);
		exit();
	}
	/*viewed_cruise*/
	$sessionName = md5('VIEWDEDCRUISE'); 
	$VIEWDED_CRUISE = vnsessionGetVar($sessionName);
	if(empty($VIEWDED_CRUISE)){
		$VIEWDED_CRUISE = $cruise_id;
	}else{
		$tmp = explode('|',$VIEWDED_CRUISE);
		if(!in_array($cruise_id, $tmp)){
			$VIEWDED_CRUISE .= '|'.$cruise_id;
		}
		unset($tmp);
	}
	vnSessionSetVar($sessionName,$VIEWDED_CRUISE);

	$assign_list["cruise_id"] = $cruise_id;
	
	$table_id= $cruise_id;
	$assign_list["table_id"] = $table_id;
	
	$oneTable = $clsCruise->getOne($cruise_id,'title,slug,about,inclusion,exclusion,cruise_policy,booking_policy,child_policy,departure_port,star_number,image,important_notes,listThingAbout,listCruiseBudget,listTravelAs,listRestFa,listCruiseFacilities,listCruiseFaActivities,listCruiseServices,cruise_cat_id,price_3day,price');$assign_list["oneTable"] = $oneTable;
	
	$lstSeason=$clsConfiguration->getAll("setting='high_season_month' and value like '%".$now_month."%' limit 0,1",$clsConfiguration->pkey);
	if(!empty($lstSeason)){
		$season='high';
	}else{
		$season='low';
	}
	$SQL = "SELECT MIN(price) FROM ".DB_PREFIX."cruise_season_price WHERE price > 0 and cruise_id='$cruise_id' and season ='$season'";


	#
	$price_check= $dbconn->GetOne($SQL);

	$sql_cabin="SELECT cruise_itinerary_id,cruise_cabin_id,group_size_id FROM ".DB_PREFIX."cruise_season_price WHERE price = '$price_check' and cruise_id='$cruise_id' and season ='$season'";

	$cabin=$dbconn->GetAll($sql_cabin);
	$cruise_itinerary_check_id=$cabin[0]['cruise_itinerary_id'];
	$cruise_cabin_check_id=$cabin[0]['cruise_cabin_id'];
	$group_size_check_id=$cabin[0]['group_size_id'];
	$number_adult_check=$clsCruiseProperty->getNumberAdult($group_size_check_id);

	$assign_list['cruise_itinerary_check_id'] = $cruise_itinerary_check_id;
	$assign_list['cruise_cabin_check_id'] = $cruise_cabin_check_id;
	$assign_list['number_adult_check'] = $number_adult_check?$number_adult_check:2;
	
	if($clsISO->getCheckActiveModulePackage($package_id,$mod,'property','default','ThingAbout')){
	$listThingAbout_id= $oneTable['listThingAbout'];
	
	$listThingAbout=$clsCruiseProperty->getAll("is_trash=0 and cruise_property_id IN ($listThingAbout_id)",$clsCruiseProperty->pkey);
	$assign_list['listThingAbout'] = $listThingAbout;
	}
	
	$number_day = isset($_GET['day']) ? $_GET['day'] : '0';
	$assign_list['number_day'] = $number_day;
	if($show=='Itinerary'){
		$lstCruiseItinerary=$clsCruiseItinerary->getAll("is_trash=0 and is_online=1 and cruise_id='$cruise_id' and number_day='$number_day' order by order_no asc limit 0,1",$clsCruiseItinerary->pkey);
		$cruise_itinerary_id=$lstCruiseItinerary[0]['cruise_itinerary_id'];
		$assign_list['cruise_itinerary_id'] = $cruise_itinerary_id;

		$lstPromotion=$clsPromotion->getAll("is_online=1 and clsTable='Cruise' and cruise_itinerary_id='$cruise_itinerary_id' and ".time()." BETWEEN start_date and end_date order by order_no asc limit 0,1",$clsPromotion->pkey.",target_id"); 
		$promotion_id=($lstPromotion)?$lstPromotion[0]['promotion_id']:0;
		$assign_list['promotion_id'] = $promotion_id; 
	}else{
		$lstItinerary_cruise = $clsCruiseItinerary->getAll("is_trash=0 and is_online=1 and cruise_id='$cruise_id' order by order_no asc",$clsCruiseItinerary->pkey);
	
		$cruise_itinerary_id=$lstItinerary_cruise[0][$clsCruiseItinerary->pkey];
		$assign_list['cruise_itinerary_id'] = $cruise_itinerary_id;
		
		$lstPromotion=$clsPromotion->getAll("is_online=1 and clsTable='Cruise' and cruise_itinerary_id='$cruise_itinerary_id' order by order_no asc limit 0,1",$clsPromotion->pkey.",target_id");
		$promotion_id=($lstPromotion)?$lstPromotion[0]['promotion_id']:0;
		$assign_list['promotion_id'] = $promotion_id;
		
	}
	
	#
	$listCruiseBudget = explode('|',rtrim(ltrim($oneTable['listCruiseBudget'],'|'),'|'));
	$assign_list["listCruiseBudget"] = $listCruiseBudget;
	#
	if($clsISO->getCheckActiveModulePackage($package_id,$mod,'property','default','TravelAs')){
	$listTravelAs = $clsCruiseProperty->getAll("is_trash=0 and type='TravelAs' and cruise_property_id IN (".$oneTable['listTravelAs'].") order by order_no ASC",$clsCruiseProperty->pkey);
	$assign_list["listTravelAs"] = $listTravelAs;
	}

	#
	$assign_list["cruise_cat_id"] = $oneTable['cruise_cat_id'];
	
	
	#-- Cruise Images Maps
	$resMapImage = $clsCruiseMapImage->getAll("is_trash=0 and table_id='$cruise_id' and image <> '' order by order_no desc",$clsCruiseMapImage->pkey);
	$assign_list['resMapImage'] = $resMapImage; unset($resMapImage);
	
	if($clsISO->getCheckActiveModulePackage($package_id,$mod,'cruise_photo_gallery','customize')){
	#-- Cruise Images
	$lstImage = $clsCruiseImage->getAll("is_trash=0 and table_id='$cruise_id' and image <> '' order by order_no desc",$clsCruiseImage->pkey);
	$assign_list['lstImage'] = $lstImage; unset($lstImage);
	 unset($lstImage);
	}
	 
	if($clsISO->getCheckActiveModulePackage($package_id,$mod,'itinerary','default')){
	// List Cruise Itinerary
	$clsCruiseItinerary = new CruiseItinerary();$assign_list["clsCruiseItinerary"] = $clsCruiseItinerary;
	$lstItineraryCruise = $clsCruiseItinerary->getAll("is_trash=0 and is_online=1 and cruise_id='$cruise_id' order by order_no ASC",$clsCruiseItinerary->pkey.',title,number_day');  
	$assign_list["lstItineraryCruise"] = $lstItineraryCruise; unset($lstItineraryCruise); 
	}
	
	if($clsISO->getCheckActiveModulePackage($package_id,$mod,'edit_cabin','default')){
	#-- Cruise Rooms
	$lstCruiseCabin = $clsCruiseCabin->getAll("is_trash=0 and is_online=1 and cruise_id = '$cruise_id' order by order_no asc",$clsCruiseCabin->pkey);
	$assign_list['lstCruiseCabin']=$lstCruiseCabin;unset($lstCruiseCabin);
	}
	
	
	$clsCruiseProperty = new CruiseProperty();
	$assign_list['clsCruiseProperty'] = $clsCruiseProperty;
	$listTypeRoom = $clsCruiseProperty->getAll("is_trash=0 and type='TypeRoom' order by order_no desc",$clsCruiseProperty->pkey);
	
	$assign_list['listTypeRoom']=$listTypeRoom;unset($listTypeRoom);
	
	// List Cruise Other
	$lstCruiseOther = $clsCruise->getAll("is_trash=0 and is_online=1 and cruise_cat_id ='$cruise_cat_id' and cruise_id<>'$cruise_id' order by order_no ASC limit 0,6",$clsCruise->pkey.',title,image,star_number,about');
	$assign_list["lstCruiseOther"] = $lstCruiseOther; unset($lstCruiseOther);
	
	
	if($clsISO->getCheckActiveModulePackage($package_id,$mod,'cruise_video','customize')){
	// List Video Cruise
	$lstVideoCruise = $clsCruiseVideo->getAll("is_trash=0 and table_id = '$cruise_id' order by order_no desc",$clsCruiseVideo->pkey.',url');
	$assign_list["lstVideoCruise"] = $lstVideoCruise; 
	unset($lstVideo);
	}
	if(vnSessionExist('duration_0')){
		$num_day_price = vnSessionGetVar('duration_0');
	}else{
		//$num_day_price = 2;
		$num_day_price = '';
	}
	$assign_list["num_day_price"] = $num_day_price; 
	
	#- Custom Field
	$clsCruiseCustomField = new CruiseCustomField();
	$assign_list["clsCruiseCustomField"] = $clsCruiseCustomField;
	$listCustomField = $clsCruiseCustomField->getAll("cruise_id='$cruise_id' and fieldtype='CUSTOM' order by order_no ASC",$clsCruiseCustomField->pkey.',fieldname,fieldvalue');
	$assign_list["listCustomField"] = $listCustomField; unset($listCustomField);
	
	
	$ret = $clsCruiseItinerary->getLocationMap($cruise_itinerary_id);
	$map_la = $ret['map_la'];
	$map_lo = $ret['map_lo'];
	$assign_list["map_la"] = $map_la; 
	$assign_list["map_lo"] = $map_lo; 
	$script_location = $ret['jscode'];
	$assign_list["script_location"] = $script_location; 
	
	

	
	#-- Review
	//ini_set("display_errors",1);
	$clsPagination = new Pagination();
	$clsReviews = new Reviews(); $assign_list["clsReviews"] = $clsReviews;
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$number_per_page = 3;
	#
	$cond = "is_trash=0 and is_online=1 and type='cruise' and table_id = '$cruise_id'";
	
	$allItem = $clsReviews->getAll($cond,$clsReviews->pkey);
	$totalRecord = $allItem?count($allItem):0;
	$pageview = $clsPagination->pagination_ajax($totalRecord, $number_per_page, $page,'','',false);
	#
	
	$offset = ($page-1)*$number_per_page; 
	$LIMIT = " LIMIT $offset,$number_per_page";
	$lstReview = $clsReviews->getAll($cond." order by order_no asc".$LIMIT,$clsReviews->pkey.',review_date,fullname,content,title,rates,reg_date,fullname,country_id');
	//echo $totalRecord;die('xxxx');
	$jsonReview = array();
	if(!empty($lstReview)){
		foreach($lstReview as $k=>$v){
			$jsonReview[] = array(
				"@type"				=> "Review",
				"author"			=> $v["fullname"],
				"datePublished"		=> $clsISO->converTimeToText($v['review_date']),
				"description"		=> addslashes($v["content"]),
				"name"				=> $v["title"],
				"reviewRating"		=> array(
					"@type"				=> "Rating",
					"bestRating"		=> "5",
					"ratingValue"		=> $v["rates"],
					"worstRating"		=> "1",
				),
			);
		}	
	}
	$assign_list["jsonReview"] = json_encode($jsonReview);
	//print_r(json_encode($jsonReview));die;
	unset($jsonReview);
	$assign_list["lstReview"] = $lstReview; 
	unset($lstReview);
	$assign_list["pageview"] = $pageview;
	$assign_list["currentPage"] = 1;
	$assign_list["totalRecord"] = $totalRecord;
	$assign_list["totalPage"] = ceil($totalRecord/$number_per_page);
	
	if(isset($_POST['BookingCabin']) &&  $_POST['BookingCabin']=='BookingCabin'){
		$link=$clsCruise->getLinkBook($cruise_id,$oneTable);
		
		$arraybookCabin = $_POST;
		vnSessionSetVar('arraybookCabin',$arraybookCabin);
		
		header('location:'.$link);
		exit();
	}
	
	
    if(isset($_POST['ContactCruise']) &&  $_POST['ContactCruise']=='ContactCruise'){
        vnSessionDelVar('ContactCruise');
		vnSessionDelVar('ContactTour');
		vnSessionDelVar('ContactHotel');
        $cartSessionCruise= vnSessionGetVar('ContactCruise');
        if(empty($cartSessionCruise)){
            $cartSessionCruise = array();
        }
        $assign_list["cartSessionCruise"] = $cartSessionCruise;

        $link=$clsCruise->getLinkContact();
        $cartSessionCruise['CRUISE'][$cruise_id] = array();
        foreach($_POST as $k=>$v){
            $cartSessionCruise['CRUISE'][$cruise_id][$k] = $v;
        }
        vnSessionSetVar('ContactCruise',$cartSessionCruise);
        header('location:'.$link);
        exit();
    }

	/*=============Title & Description Page==================*/
	if($show=='Itinerary'){
		$title_page = $clsCruiseItinerary->getTitleDay($cruise_itinerary_id).' | '.$core->get_Lang('Cruise').' | '. PAGE_NAME;
	}else{
		$title_page = $clsCruise->getTitle($cruise_id,$oneTable).' | '.$core->get_Lang('Cruise').' | '. PAGE_NAME;
	}
	
	$assign_list["title_page"] = $title_page;
	$description_page = $clsISO->getMetaDescription($cruise_id,'Cruise',$oneTable);
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsISO->getPageImageShare($cruise_id,'Cruise',$oneTable);
	$assign_list["global_image_seo_page"] = $global_image_seo_page;
	/*=============Content Page==================*/ 
	

}
function default_loadReview(){
	global $assign_list,$_CONFIG,$core,$mod,$act,$title_page,$description_page,$keyword_page,$clsISO, $_lang,$extLang,$_LANG_ID,$clsISO;
	#
	$page = isset($_POST['page_Review'])?$_POST['page_Review']:0;
	$tour_id = isset($_POST['cruise_id'])?$_POST['cruise_id']:0;
	
	if($page >0 and $tour_id >0){
	$pageview =  $page +1;
	$limit_start = $page *5;
	$limit_end = $pageview *5 +1;
	$cond = "is_trash=0 and is_online=1 and table_id = '$cruise_id' order by order_no DESC limit $limit_start , $limit_end ";
	$clsCruise_Review = new TourReview();
	$arraylstReview = $clsCruise_Review->getAll($cond,$clsCruise_Review->pkey.' , review_date'); 
	
	if($clsCruise_Review->countItem($cond)<5){
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
			  '.$clsTour_Review->getRates($lstReview[$clsCruise_Review->pkey]).'</label>
			  <p class="cus-rate">
				  <strong class="block z_12">
				  '.$clsTour_Review->getFullName($lstReview[$clsCruise_Review->pkey]).'
				  ,</strong>
				  <span class="z_10 block c6">
				  '.$clsTour_Review->getCountry($lstReview[$clsCruise_Review->pkey]).'
				 ,</span>
				  <span class="z_10 block c6">
				  '.$clsISO->converTimeToText($lstReview['review_date']).'
				  </span>
			  </p>
		  </div>
		  <div class="cus-desc">
			  <h5 class="z_14 text-bold text-uppercase c2a">
			  '.$clsTour_Review->getTitle($lstReview[$clsCruise_Review->pkey]).'</h5>
			  <div class="review-content">				
				  '.html_entity_decode( $clsCruise_Review->getContent($lstReview[$clsCruise_Review->pkey])).'
			  </div>			                     
		  </div>
		  </li>';
		}
		}
	}
	echo $Html.'$$$'.$pageview; die();
	}

}
function default_search(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$domain,$clsConfiguration;
	#
	$clsCruise=new Cruise();$assign_list["clsCruise"] = $clsCruise;
	$clsCruiseCat=new CruiseCat();$assign_list["clsCruiseCat"] = $clsCruiseCat;
	$clsCruiseItinerary=new CruiseItinerary();$assign_list["clsCruiseItinerary"] = $clsCruiseItinerary;
	$clsCruiseStartDate=new CruiseStartDate();$assign_list["clsCruiseStartDate"] = $clsCruiseStartDate;
	$clsCruiseProperty=new CruiseProperty();$assign_list["clsCruiseProperty"] = $clsCruiseProperty;
	$clsCruiseVideo = new CruiseVideo();$assign_list["clsCruiseVideo"] = $clsCruiseVideo;
	$clsReviews=new Reviews();$assign_list["clsReviews"] = $clsReviews;
	#
	
	$duration=(isset($_GET['duration']) && $_GET['duration']!='')?$_GET['duration']:'';
	$cruise_cat_id=(isset($_GET['cruise_cat_id']) && $_GET['cruise_cat_id']!='')?$_GET['cruise_cat_id']:'0';
	$price_range_ID=(isset($_GET['price_range_ID']) && $_GET['price_range_ID']!='')?$_GET['price_range_ID']:'';
	#
	$assign_list['linksort']=$linksort;
	$sort=$_GET['sort'];
	$assign_list["sort"] = $sort;
	#
	$lnk=$_SERVER['REQUEST_URI'];
	if(isset($_GET['page'])){
		$tmp = explode('&',$lnk);
		$n = count($tmp)-1;
		$la_it = '&'.$tmp[$n];
		$str_len = -strlen($la_it);
		$linkpage = substr($lnk, 0, $str_len);
	}else{
		$linkpage = $lnk;
	}
	$assign_list["linkpage"] = $linkpage;
	
	$recordPerPage = 8;
	$pageNum = 5;
	$currentPage = isset($_GET["page"])? $_GET["page"] : 1;
	#
	$start_limit = ($currentPage-1)*$recordPerPage; 
	$limit = " limit $start_limit,$recordPerPage"; 
	#
	$cond="is_trash=0 and is_online=1";
	if(isset($cruise_cat_id) && intval($cruise_cat_id)!=0){
	$cond.=" and cruise_id IN (SELECT default_cruise.cruise_id FROM default_cruise WHERE is_trash = 0 and is_online = 1 and (cruise_cat_id='$cruise_cat_id' or list_cat_id like '%|".$cruise_cat_id."|%'))";
	}
	if(isset($duration) && intval($duration)!=0){
		$cond.=" and number_day = '$duration'";
		$assign_list["duration"] = $duration;
	}
	if(!empty($price_range_ID)) {
		$lstSeason=$clsConfiguration->getAll("setting='high_season_month' and value like '%".$now_month."%' limit 0,1");
		if(!empty($lstSeason)){
			$season='high';
		}else{
			$season='low';
		}
		
		$clsCruisePriceRange=new CruisePriceRange();
		
		$SQLMINRATE = "SELECT MIN(min_rate) FROM ".DB_PREFIX."cruise_price_range WHERE cruise_price_range_id IN ($price_range_ID)";
		
		$SQLMAXRATE = "SELECT MAX(max_rate) FROM ".DB_PREFIX."cruise_price_range WHERE cruise_price_range_id IN ($price_range_ID) and max_rate<>'0'";
		
		$SQLMINMAXRATE = "SELECT MIN(max_rate) FROM ".DB_PREFIX."cruise_price_range WHERE cruise_price_range_id IN ($price_range_ID)";
		
		#
		$min_rate= $dbconn->GetOne($SQLMINRATE);
		$minmax_rate= $dbconn->GetOne($SQLMINMAXRATE);
		
		$assign_list['minmax_rate']=$minmax_rate;
		if($minmax_rate=='0'){
			$max_rate=0;
		}
		else{
		$max_rate= $dbconn->GetOne($SQLMAXRATE);
		}


		$assign_list['min_rate']=$min_rate;
		$assign_list['max_rate']=$max_rate;

		if($min_rate>0 && $max_rate>0){
			$cond.=" and min_".$season."_price > '$min_rate' and min_".$season."_price < '$max_rate'";
		}elseif($min_rate==0 && $max_rate>0){
			$cond.=" and min_".$season."_price < '$max_rate'";
		}elseif($min_rate>0 && $max_rate==0){
			$cond.=" and min_".$season."_price >= '$min_rate'";
		}elseif($min_rate==0 && $max_rate==0){
			$cond.=" and min_".$season."_price >= '$min_rate'";
		}
		else{
		$cond.=" and min_".$season."_price > '$min_rate'";
		}
		$assign_list["price_range_ID"] = $price_range_ID;
	}
	#
	$cond.=" order by min_".$season."_price asc";
	#
	$lstCruiseSearch = $clsCruiseItinerary->getAll($cond,$clsCruiseItinerary->pkey.",cruise_id,cruise_itinerary_id");
	//print_r($lstCruiseSearch);die();
	$assign_list["lstCruiseSearch"] = $lstCruiseSearch;

	$totalRecord 	= !empty($lstCruiseSearch)?count($lstCruiseSearch):0;	
	$totalPage	 	= ceil($totalRecord / $recordPerPage);
	#
	$first = intval($currentPage/$pageNum)*$pageNum;
	$pageView = "";
	for ($i=0; $i<$pageNum; $i++)
		if ($first+$i<$totalPage){
			$link = $linkpage."&page=".($first+$i+1);
			$page = ($first+$i+1 == $currentPage)? '<a class="current" href="'.$link.'" title="Trang .'.($first+$i+1).'">'.($first+$i+1).'</a>' : '<a href="'.$link.'" title="Trang .'.($first+$i+1).'">'.($first+$i+1).'</a>';
			$pageView .=$page;
		}
	#
	$assign_list['currentPage'] = $currentPage;
	$assign_list['totalRecord'] = $totalRecord;
	$assign_list['recordPerPage'] = $recordPerPage;
	$assign_list['totalPage'] = $totalPage;
	$assign_list['pageNum'] = $pageNum;
	$assign_list['pageView'] = $pageView;
	
	
	vnSessionSetVar('duration_0',$duration);
	
	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Find your cruise').' - '.PAGE_NAME ;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/			
}
function default_cat(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$global_image_seo_page,$domain,$clsConfiguration,$cat_id,$clsISO;
	#
	$clsCruise=new Cruise();$assign_list["clsCruise"] = $clsCruise;
	$clsCruiseStore=new CruiseStore();$assign_list["clsCruiseStore"] = $clsCruiseStore;
	$clsPromotion=new Promotion();$assign_list["clsPromotion"] = $clsPromotion;
	$clsProperty=new Property();$assign_list["clsProperty"] = $clsProperty;
	$clsCruiseCat=new CruiseCat();$assign_list["clsCruiseCat"] = $clsCruiseCat;
	$clsReviews=new Reviews();$assign_list["clsReviews"] = $clsReviews;
	$clsCruiseStartDate=new CruiseStartDate();$assign_list["clsCruiseStartDate"] = $clsCruiseStartDate;
	$clsCruiseProperty=new CruiseProperty();$assign_list["clsCruiseProperty"] = $clsCruiseProperty;
	$clsCruiseVideo = new CruiseVideo();$assign_list["clsCruiseVideo"] = $clsCruiseVideo;
	$clsCruiseItinerary = new CruiseItinerary();$assign_list["clsCruiseItinerary"] = $clsCruiseItinerary;
	$clsBlog = new Blog();$assign_list["clsBlog"] = $clsBlog;
	$clsBlogCategory = new BlogCategory();$assign_list["clsBlogCategory"] = $clsBlogCategory;
	#
	$sortby = isset($_GET['sortby']) ? $_GET['sortby'] : '0';
	$assign_list["sortby"] = $sortby;
	
	$lnk=$_SERVER['REQUEST_URI'];
	if(isset($_GET['page'])){
		$tmp = explode('&',$lnk);
		$n = count($tmp)-1;
		$la_it = '&'.$tmp[$n];
		$str_len = -strlen($la_it);
		$linkpage = substr($lnk, 0, $str_len);
	}else{
		$linkpage = $lnk;
	}
	$assign_list["linkpage"] = $linkpage;
	#
	$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
	$cat_id = $clsCruiseCat->getBySlug($slug);
	if(intval($cat_id)==0) {
		header('Location:'.PCMS_URL.$extLang);
		exit();
	}
	
	$assign_list['cat_id'] = $cat_id;
	
	#
	$pageNum = 5;
	$recordPerPage = 6;
	$currentPage = isset($_GET["page"])? $_GET["page"] : 1;
	#
	$start_limit = ($currentPage-1)*$recordPerPage; 
	$limit = " limit $start_limit,$recordPerPage"; 
	#
	$cond="is_trash=0 and is_online=1";
	if($cat_id > 0){
		$cond.=" and (cruise_cat_id='$cat_id' or list_cat_id like '%|".$cat_id."|%')";
		$assign_list["cruise_cat_id"] = $cat_id;
	}
	
	if($sortby=='0'){
		$order_by=" order by order_no asc";
	}elseif($sortby=='popular'){
		$order_by=" order by view_num desc";
	}else{
		$order_by=" order by cruise_id desc";
	}
	#
	
	$listCruise=$clsCruise->getAll($cond.$order_by,$clsCruise->pkey);

	if($sortby == 'toprate'){
		foreach($listCruise as $k=>$v){
			$listCruise[$k]['hrate'] = $clsReviews->getRateAvg($v[$clsCruise->pkey]);
		}
		uasort($listCruise, "compare_rate");
	}
	$assign_list['listCruise']=$listCruise; unset($listCruise);
	$cond2=" and cruise_id NOT IN (SELECT cruise_id From default_cruise_store where ( _type='BEST' or _type='RECOMMED'))";
	
	$lstCruiseTopBest = $clsPromotion->getAll("is_online=1 and clsTable='Cruise'  and ".time()." between  start_date and end_date and target_id IN (SELECT default_cruise.cruise_id FROM default_cruise WHERE is_trash = 0 and is_online = 1 and (cruise_cat_id='$cat_id' or list_cat_id like '%|".$cat_id."|%')) ORDER BY promotion_id  DESC",$clsPromotion->pkey.",target_id,cruise_itinerary_id,price_text");
	$assign_list["lstCruiseTopBest"] = $lstCruiseTopBest;
	unset($lstCruiseTopBest);
	#
	$lstCruiseTopPromotion = $clsCruiseStore->getAll("cruise_id in (SELECT default_cruise.cruise_id FROM default_cruise WHERE is_trash = 0 and is_online = 1 and (cruise_cat_id='$cat_id' or list_cat_id like '%|".$cat_id."|%')) and _type='RECOMMED' ORDER BY order_no asc limit 0,6",$clsCruiseStore->pkey.',cruise_id');
	$assign_list["lstCruiseTopPromotion"] = $lstCruiseTopPromotion;
	$RecordPageCruisePromotion = $lstCruiseTopPromotion?count($clsCruiseStore->getAll("cruise_id in (SELECT default_cruise.cruise_id FROM default_cruise WHERE is_trash = 0 and is_online = 1 and (cruise_cat_id='$cat_id' or list_cat_id like '%|".$cat_id."|%')) and _type='RECOMMED' ORDER BY order_no  asc",'cruise_id')):0;
	unset($lstCruiseTopPromotion);
	$TotalPageCruisePromotion = ceil($RecordPageCruisePromotion/6);
	$assign_list['TotalPageCruisePromotion']=$TotalPageCruisePromotion;
	$assign_list['currentPagePromo']=1; 
	#
	$listCruiseOtherFull=$clsCruise->getAll("cruise_id NOT IN (SELECT default_cruise_store.cruise_id FROM default_cruise_store WHERE is_trash = 0 and _type='RECOMMED') and is_trash=0 and is_online = 1 and (cruise_cat_id='$cat_id' or list_cat_id like '%|".$cat_id."|%') ORDER BY order_no asc",$clsCruise->pkey);
	//echo $cond.$cond2.$order_by;die('xxxx');
	$RecordPageCruiseOrther = $listCruiseOtherFull?count($listCruiseOtherFull):0;
	$TotalPageCruiseOrther = ceil($RecordPageCruiseOrther/6);
	$assign_list['TotalPageCruiseOrther']=$TotalPageCruiseOrther;
	$assign_list['currentPageOther']=1; 
	$listCruiseOther=$clsCruise->getAll("cruise_id NOT IN (SELECT default_cruise_store.cruise_id FROM default_cruise_store WHERE is_trash = 0 and _type='RECOMMED') and is_trash=0 and is_online = 1 and (cruise_cat_id='$cat_id' or list_cat_id like '%|".$cat_id."|%') ORDER BY order_no asc limit 0,6",$clsCruise->pkey.',title,slug'); 
	$assign_list["listCruiseOther"] = $listCruiseOther;	
	unset($listCruiseOther);
	
	
	$lstBlogHaLong = $clsBlog->getAll("is_trash=0 and is_online=1 and blog_id IN (select blog_id FROM ".DB_PREFIX."blog_destination WHERE city_id ='417') order by reg_date desc",$clsBlog->pkey);
	$assign_list["lstBlogHaLong"] = $lstBlogHaLong;
	
	#
	$allCruise = $clsCruise->getAll($cond,$clsCruise->pkey);
	$totalRecord 	= $allCruise?count($allCruise):0;
	$totalPage	 	= ceil($totalRecord / $recordPerPage);
	#
	$first = intval($currentPage/$pageNum)*$pageNum;
	$pageView = "";
	for ($i=0; $i<$pageNum; $i++)
		if ($first+$i<$totalPage){
			$link = $linkpage."&page=".($first+$i+1);
			$page = ($first+$i+1 == $currentPage)? '<a class="current" href="'.$link.'" title="Trang .'.($first+$i+1).'">'.($first+$i+1).'</a>' : '<a href="'.$link.'" title="Trang .'.($first+$i+1).'">'.($first+$i+1).'</a>';
			$pageView .=$page;
		}
	#
	$assign_list['currentPage'] = $currentPage;
	$assign_list['totalRecord'] = $totalRecord;
	$assign_list['recordPerPage'] = $recordPerPage;
	$assign_list['totalPage'] = $totalPage;
	$assign_list['pageNum'] = $pageNum;
	$assign_list['pageView'] = $pageView;
	
	# 
	$oneCat = $clsCruiseCat->getOne($cat_id,$clsCruiseCat->pkey.',title,image,image_banner,slug,intro');
	$assign_list['oneCat'] = $oneCat;
	$title_cat = $clsCruiseCat->getTitle($cat_id,$oneCat);$assign_list['title_cat'] = $title_cat;
	$link_cat = $clsCruiseCat->getLink($cat_id,$oneCat);$assign_list['link_cat'] = $link_cat;
	$intro_More = $clsCruiseCat->getIntro($cat_id,$oneCat);$assign_list['intro_More'] = $intro_More;
	
	/*=============Title & Description Page==================*/
	$title_page = $title_cat.' | '.$core->get_Lang('Cruise').' | '.PAGE_NAME ;
	$assign_list["title_page"] = $title_page;
	$description_page = $clsCruiseCat->getMetaDescription($cat_id,$oneCat);
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsISO->getPageImageShare($cat_id,'CruiseCat',$oneCat);
	$assign_list["global_image_seo_page"] = $global_image_seo_page;
	/*=============Content Page==================*/			
}
function compare_rate($hrate1, $hrate2){ 
	if ($hrate1["hrate"] > $hrate2["hrate"]) 
	{ 
		return -1; 
	} 
	else if ($hrate1["hrate"] == $hrate2["hrate"]) 
	{ 
		return 0; 
	} 
	else 
	{ 
		return 1; 
	} 
} 
function default_tag(){
	
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$extLang;
	global $clsISO;
	#
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show']=$show;

	//print_r($show); die();
	
	$clsCruise=new Cruise();$assign_list["clsCruise"] = $clsCruise;
	$clsProperty=new Property();$assign_list["clsProperty"] = $clsProperty;
	$clsCruiseCat=new CruiseCat();$assign_list["clsCruiseCat"] = $clsCruiseCat;
	$clsReviews=new Reviews();$assign_list["clsReviews"] = $clsReviews;
	$clsCruiseStartDate=new CruiseStartDate();$assign_list["clsCruiseStartDate"] = $clsCruiseStartDate;
	$clsCruiseProperty=new CruiseProperty();$assign_list["clsCruiseProperty"] = $clsCruiseProperty;
	$clsCruiseVideo = new CruiseVideo();$assign_list["clsCruiseVideo"] = $clsCruiseVideo;
	$clsTag = new Tag();$assign_list["clsTag"] = $clsTag;
	#
	$sortby = isset($_GET['sortby']) ? $_GET['sortby'] : 0;
	$assign_list["sortby"] = $sortby;
	
	$lnk=$_SERVER['REQUEST_URI'];
	if(isset($_GET['page'])){
		$tmp = explode('&',$lnk);
		$n = count($tmp)-1;
		$la_it = '&'.$tmp[$n];
		$str_len = -strlen($la_it);
		$linkpage = substr($lnk, 0, $str_len);
	}else{
		$linkpage = $lnk;
	}
	$assign_list["linkpage"] = $linkpage;
	
	$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

	$tag_id = $clsTag->getBySlug($slug);

	if(intval($tag_id)==0) {
		header('Location:'.PCMS_URL.$extLang);
		exit();
	}
	
	$assign_list['tag_id'] = $tag_id;

	#
	$oneItem = $clsTag->getOne($tag_id);
	#
	$title_page = $clsTag->getTitle($tag_id);

	$cond = "is_trash=0 and is_online=1";
	
	$cond.= " and (list_tag_id like '%|$tag_id|%')";

	if($sortby=='0'){
		$order_by=" order by order_no desc";
	}elseif($sortby=='popular'){
		$order_by=" order by view_num desc";
	}elseif($sortby=='toprate'){
		$order_by=" order by total_rate desc";
	}else{
		$order_by=" order by cruise_id desc";
	}
	//print_r($order_by); die();
	#
	$listCruise=$clsCruise->getAll($cond.$order_by);
	$assign_list['listCruise']=$listCruise; unset($listCruise);
	#
	$totalRecord 	= $clsCruise->getAll($cond)?count($clsCruise->getAll($cond)):0;
	$totalPage	 	= ceil($totalRecord / $recordPerPage);
	#
	$first = intval($currentPage/$pageNum)*$pageNum;
	$pageView = "";
	for ($i=0; $i<$pageNum; $i++)
		if ($first+$i<$totalPage){
			$link = $linkpage."&page=".($first+$i+1);
			$page = ($first+$i+1 == $currentPage)? '<a class="current" href="'.$link.'" title="'.$core->get_Lang('page').' .'.($first+$i+1).'">'.($first+$i+1).'</a>' : '<a href="'.$link.'" title="'.$core->get_Lang('page').' .'.($first+$i+1).'">'.($first+$i+1).'</a>';
			$pageView .=$page;
		}
	#
	$assign_list['currentPage'] = $currentPage;
	$assign_list['totalRecord'] = $totalRecord;
	$assign_list['recordPerPage'] = $recordPerPage;
	$assign_list['totalPage'] = $totalPage;
	$assign_list['pageNum'] = $pageNum;
	$assign_list['pageView'] = $pageView;
	
	/*=============Title & Description Page==================*/
	$title_page = $clsCruiseCat->getTitle($cat_id).' | Cruise | '.PAGE_NAME ;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/			
}
function default_book(){
	global $assign_list,$_CONFIG,$core,$dbconn,$mod,$act,$title_page,$description_page,$keyword_page,$clsISO,$clsConfiguration;
	global $_lang,$extLang,$_LANG_ID;
	
	print_r(xxx); die();
	
	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Booking').' '.$clsCruise->getTitle($cruise_id).' | '.PAGE_NAME ;
	$assign_list["title_page"] = $title_page;
	$description_page = $core->get_Lang('Booking').' '.$clsCruise->getTitle($cruise_id).' | '.PAGE_NAME ;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $core->get_Lang('Booking').' '.$clsCruise->getTitle($cruise_id).' | '.PAGE_NAME ;
	$assign_list["keyword_page"] = $keyword_page;	
}
function default_bookcabin(){
	global $assign_list,$extLang,$_CONFIG,$core,$dbconn,$mod,$act,$title_page,$description_page,$keyword_page,$clsISO,$profile_id,$loggedIn;
	global $extLang,$_LANG_ID;
	# - Check Login
	$clsProfile = new Profile(); $assign_list['clsProfile']=$clsProfile;
	if(_ISOCMS_CLIENT_LOGIN==222){
		if(!$loggedIn){
			$link=$extLang.'/account/signin/r='.$_SERVER['REQUEST_URI'];
			header('Location:'.$link);
			exit();
		}
	}
	$arraycheckrateCabin=vnSessionGetVar('arraycheckrateCabin');
	$arraybookCabin = vnSessionGetVar('arraybookCabin');
	$clsProperty=new Property();$assign_list['clsProperty']=$clsProperty;
	$clsReviews=new Reviews();$assign_list['clsReviews']=$clsReviews;
	$clsCruise = new Cruise(); $assign_list["clsCruise"] = $clsCruise;
	$clsCruiseCat = new CruiseCat(); $assign_list["clsCruiseCat"] = $clsCruiseCat;
	$clsCruiseCabin = new CruiseCabin(); $assign_list["clsCruiseCabin"] = $clsCruiseCabin;
	$clsCruiseImage = new CruiseImage(); $assign_list["clsCruiseImage"] = $clsCruiseImage;
	$clsCruiseItinerary = new CruiseItinerary(); $assign_list["clsCruiseItinerary"] = $clsCruiseItinerary;
	$clsCruiseProperty = new CruiseProperty(); $assign_list["clsCruiseProperty"] = $clsCruiseProperty;
	$clsCruiseService = new CruiseService();$assign_list["clsCruiseService"] = $clsCruiseService;
	$clsCountry = new _Country(); $assign_list['clsCountry']=$clsCountry;
	$clsBooking = new Booking();
	#
	$slug = isset($_GET['slug'])?$_GET['slug']:'';
	$cruise_id = $clsCruise->getBySlug($slug);
	if($cruise_id==''){
		header('location:'.PCMS_URL);
		exit();
	}
	$assign_list['cruise_id']=$cruise_id;
	$oneItem = $clsCruise->getOne($cruise_id);
	$assign_list['one']=$oneItem;
	$assign_list['oneItem']=$oneItem;
	$cruise_cat_id = $oneItem['cruise_cat_id'];
	$assign_list['cruise_cat_id']=$cruise_cat_id;
	#
	$cruise_cabin_id = isset($arraybookCabin['cruise_cabin_id'])?$arraybookCabin['cruise_cabin_id']:0;
	$assign_list["cruise_cabin_id"] = $cruise_cabin_id;
	#
	$cruise_itinerary_id = isset($arraybookCabin['cruise_itinerary_id'])?$arraybookCabin['cruise_itinerary_id']:0;
	$assign_list["cruise_itinerary_id"] = $cruise_itinerary_id;
	
	$number_adult = isset($arraybookCabin['number_adult'])?$arraybookCabin['number_adult']:0;
	$assign_list["number_adult"] = $number_adult;
	
	$number_child = isset($arraybookCabin['number_child'])?$arraybookCabin['number_child']:0;
	$assign_list["number_child"] = $number_child;
	
	$number_cabin = isset($arraybookCabin['number_cabin'])?$arraybookCabin['number_cabin']:0;
	$assign_list["number_cabin"] = $number_cabin;
	
	$max_adult = isset($arraybookCabin['max_adult'])?$arraybookCabin['max_adult']:0;
	$assign_list["max_adult"] = $max_adult;
	$assign_list["arraycheckrateCabin"] = $arraycheckrateCabin;
	
	$departure_date = isset($arraybookCabin['departure_date'])?$arraybookCabin['departure_date']:0;
	$assign_list["departure_date"] = $departure_date;
	
	
	$oneItinerary = $clsCruiseItinerary->getOne($cruise_itinerary_id);
	$assign_list["oneItinerary"] = $oneItinerary;
	#
	$totalPrice = isset($arraybookCabin['totalPrice'])?$arraybookCabin['totalPrice']:0;
	$totalPrice_format = number_format($totalPrice,0,",",".");
	$assign_list["totalPrice"] = $totalPrice;
	$assign_list["totalPrice_format"] = $totalPrice_format;
	#
	$listService = $clsCruiseService->getAll('is_trash=0 and is_online=1 order by order_no ASC',$clsCruiseService->pkey.",extra");
	$assign_list["listService"] = $listService; unset($listService);
	#- Get Member Information
	if(_ISOCMS_CLIENT_LOGIN){
		$name = $clsProfile->getFullname($profile_id); $assign_list['name']=$name;
		$email = $clsProfile->getEmail($profile_id); $assign_list['email']=$email;
		$phone = $clsProfile->getPhone($profile_id); $assign_list['phone']=$phone;
		$address = $clsProfile->getAddress($profile_id); $assign_list['address']=$address;
		$country_id = $clsProfile->getOneField('country_id',$profile_id); $assign_list['country_id']=$country_id;
	}
	#
	$errMsg = '';
	if(isset($_POST['HidBookNow']) && $_POST['HidBookNow']=='HidBookNow'){
		$departure_date = isset($_POST['departure_date'])?$_POST['departure_date']:'';
		$departure_date_post = strtotime($departure_date);
		$num_day = isset($_POST['num_day'])? intval($_POST['num_day']):0;
		$end_date =  date('m/d/Y',strtotime('+'.$num_day.' day', strtotime($departure_date)));
		#
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$name=$first_name.' '.$last_name;
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$country = $_POST['country'];
		#- Verify Captcha
		if(_ISOCMS_CAPTCHA=='IMG'){
			$security_code = isset($_POST["security_code"])? trim($_POST["security_code"]) : '';
			$security_code = strtoupper($security_code);
			if(!empty($security_code) && $security_code != $_SESSION['skey']){
				$errMsg .= $core->get_Lang('Secure code not match').' <br />';
			}
		}else if(_ISOCMS_CAPTCHA=='reCAPTCHA'){
			if(!$clsISO->checkGoogleReCAPTCHA()){
				$errMsg .= $core->get_Lang('Secure code not match').' <br />';
			}
		}
		$assign_list["errMsg"] = $errMsg;  
		if(trim($errMsg)==''){
			$booking_id = $clsBooking->getMaxId();
			$booking_code = $clsBooking->generateBookingCode($booking_id,'Cruise');
			#
			$fx = "booking_id,
			target_id,
			full_name,
			email,
			phone,
			address,
			country_id,
			clsTable,
			booking_type,
			booking_code,
			booking_store,
			reg_date,
			ip_booking,
			status,
			totalgrand,
			deposit,
			balance,
			departure_date,
			check_in,
			check_out";
			#
			$vx = "'$booking_id'
			,'$cruise_id'
			,'$name'
			,'$email'
			,'$phone'
			,'$address'
			,'$country'
			,'Cruise'
			,'Cruise'
			,'$booking_code'
			,'".serialize($_POST)."'
			,'".time()."'
			,'".$_SERVER['REMOTE_ADDR']."'
			,'0'
			,'".$clsISO->processSmartNumber(str_replace('.00','',$_POST['totalGrand']))."'
			,'".$clsISO->processSmartNumber(str_replace('.00','',$_POST['totalGrand']))."'
			,'0'
			,'".$departure_date_post."'
			,'".$departure_date."'
			,'".$end_date."'";
			if(_ISOCMS_CLIENT_LOGIN){
				$fx.= ",member_id";
				$vx.= ",'$profile_id'";
			}
			if(PAYMENT_GLOBAL){
				$fx .= ",payment_method";
				$vx .= ",'".intval($_POST['payment_method'])."'";
			}
			if($clsBooking->insertOne($fx, $vx)){
				$clsBooking->sendEmailBookingCruise($booking_id);
				if(PAYMENT_GLOBAL){
					$clsBilling = new Billing();
					$clsBilling->initPay($booking_id);	
				}
				vnSessionDelVar('arraycheckrateCabin');
				header('Location:'.$extLang.'/booking/cruise/successful');
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
	$title_page = $core->get_Lang('Booking Cruise').' | '.$clsCruise->getTitle($cruise_id).' | '.PAGE_NAME ;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
}
function default_ajchangeToRateServices() {
	global $core, $clsISO,$_LANG_ID;
	$clsCruiseService = new CruiseService();
	#
	$_LANG_ID = isset($_GET['lang'])?$_GET['lang']:'';
	$cruise_service_id = isset($_POST['cruise_service_id'])?intval($_POST['cruise_service_id']):'';
	$number = isset($_POST['number'])?intval($_POST['number']):0;
	$extra = isset($_POST['extra'])?intval($_POST['extra']):0;
	#
	if($extra == 1) {
		$totalRate = $clsCruiseService->getPriceValue($cruise_service_id);
	}
	else if($extra == 2) {
		$totalRate = $clsCruiseService->getPriceNumber($cruise_service_id)*$number;
	}
	echo $clsISO->formatPrice($totalRate).'$$$'.$totalRate;
	die();
}
function default_getTotalRateAddOnService(){
	global $assign_list,$_CONFIG,$core,$dbconn,$mod,$act,$title_page,$description_page,$keyword_page,$clsISO;
	global $extLang,$_LANG_ID;
	#
	$_LANG_ID = isset($_GET['lang'])?$_GET['lang']:'';
	$clsCruiseService = new CruiseService();
	$BOOK_VAL = vnSessionGetVar('BOOK_VAL');
	$totalRate = $BOOK_VAL['totalGrand'];
	
	$listAddOnServiceID = $_POST['listAddOnServiceID'];
	if($listAddOnServiceID != '' && $listAddOnServiceID != '0' && $listAddOnServiceID != '|'){
		$tmp = explode('|',$listAddOnServiceID);
		if(is_array($tmp)){
			for($i=0; $i<count($tmp); $i++){
				$totalRate += $clsCruiseService->getPrice($tmp[$i]);
			}
		}
	}
	echo $clsISO->formatPrice($totalRate).'$$$'.$clsISO->formatPrice($totalRate);
	die();
}
function default_ajLoadSelectCabin() {
	global $core, $clsISO, $_lang;
	#
	$clsCruise = new Cruise();
	$clsCruiseCabin = new CruiseCabin();
	$clsCruisePriceTable = new CruisePriceTable();
	
	$cruise_id = $_POST['cruise_id'];
	$cruise_itinerary_id = $_POST['cruise_itinerary_id'];
	$cruise_cabin_id = $_POST['cruise_cabin_id'];
	
	$lstCruiseCabin = $clsCruisePriceTable->getAll("cruise_id='$cruise_id' and cruise_itinerary_id='$cruise_itinerary_id' order by price ASC");
	$Html = '<option value=""> -- '.$core->get_Lang('Select cabin').' --</option>';
	if($lstCruiseCabin[0][$clsCruiseCabin->pkey] != ''){
		$cabin = array();
		for($i=0; $i<count($lstCruiseCabin); $i++){
			if(!in_array($lstCruiseCabin[$i][$clsCruiseCabin->pkey], $cabin)){
				$cabin[] = $lstCruiseCabin[$i][$clsCruiseCabin->pkey];
			}
		}
		#
		for($i=0; $i<count($cabin); $i++){
			$selected_index=($cruise_cabin_id==$cabin[$i])?'selected="selected"':'';
			$Html .= '<option value="'.$cabin[$i].'" '.$selected_index.'> -- '.$clsCruiseCabin->getTitle($cabin[$i]).' -- </option>';
		}
		unset($lstCruiseCabin);
	}
	echo $Html; die();
}
function default_ajLoadSelectTypeOfRoom(){
	global $core, $clsISO, $_lang, $oneCommon, $clsConfiguration;
	$clsCruise = new Cruise();
	$clsCruiseCabin = new CruiseCabin();
	$clsCruiseItinerary = new CruiseItinerary();
	$clsCruisePriceTable = new CruisePriceTable();
	$clsCruiseSeasonPrice = new CruiseSeasonPrice();
	$clsCruiseProperty = new CruiseProperty();
	$clsProperty = new Property();
	#
	$Html = '';
	$cruise_id = intval($_POST['cruise_id']);
	$cruise_itinerary_id = intval($_POST['cruise_itinerary_id']);
	$cruise_cabin_id = intval($_POST['cruise_cabin_id']);
	if($cruise_itinerary_id==0){
		echo '_invalid';
		die();
	}
	$departure_date = $_POST['departure_date'];
	$tmp = explode("/", $departure_date);
	$month = $tmp[0];
	
	$oneItinerary = $clsCruiseItinerary->getOne($cruise_itinerary_id);
	$_hight_season_month = $oneItinerary['high_season_month'];
	$sesson = 'low';
	if(strpos($_hight_season_month,"|$month|")){
		$sesson = 'high';
	}
	$cond = "cruise_id='$cruise_id' and cruise_itinerary_id='$cruise_itinerary_id' 
	and cruise_cabin_id='$cruise_cabin_id' and season='$sesson' order by price asc";
	$lstCruiseSeason = $clsCruiseSeasonPrice->getAll($cond);
	
	if(1==2){
		$cruise_itinerary_id = $_POST['cruise_itinerary_id'];
		$cruise_cabin_id = $_POST['cruise_cabin_id'];
		$arr_month_hight_season = explode(',',$clsConfiguration->getValue('hightseason'));
		$season = 1;
		#
		if(in_array($month_departure_date,$arr_month_hight_season)) {
			$season = 2;
		}
		$lstBed = $clsCruisePriceTable->getAll("cruise_id='$cruise_id' and cruise_itinerary_id='$cruise_itinerary_id' and cruise_cabin_id='$cruise_cabin_id' and season='$season'",'price,'.$clsProperty->pkey);
		$Html = '';
		if(is_array($lstBed) && count($lstBed) > 0){
			for($i=0; $i<count($lstBed); $i++){
				$Html .= '<label class="radio-lg"><input value="'.$lstBed[$i][$clsProperty->pkey].'" class="rdo_typeofroom" name="typeofroom" data-price="'.$lstBed[$i]['price'].'" type="radio"> '.$clsProperty->getTitle($lstBed[$i][$clsProperty->pkey]).'</label>';
			}
			unset($lstBed);
		}
	}
	else{
		if(!empty($lstCruiseSeason)){
			foreach($lstCruiseSeason as $k => $v){
				$Html .= '
				<label class="radio-lg" style="margin-bottom:5px;">
					<input value="'.$v[$clsCruiseSeasonPrice->pkey].'" class="rdo_typeofroom" name="typeofroom" data-price="'.$v['price'].'" type="radio"> '.$clsCruiseProperty->getTitle($v['cabin_type_id']).' (US$ '.$clsISO->formatPrice($v['price']).')
				</label>';
			}
		}else{
			$Html = '_empty';
		}
	}
	echo $Html; die();
}
function default_ajLoadListServicePrivate(){
	global $core, $clsISO, $_lang;
	$clsCruise = new Cruise();
	$clsCruiseItinerary = new CruiseItinerary();
	$clsCruiseService = new CruiseService();
	
	$cruise_id = intval($_POST['cruise_id']);
	$cruise_itinerary_id = intval($_POST['cruise_itinerary_id']);
	
	$oneItinerary = $clsCruiseItinerary->getOne($cruise_itinerary_id);
	$_list_service_private = $oneItinerary['listService'];
	$_list_service_private = ltrim($_list_service_private,'|');
	$_list_service_private = rtrim($_list_service_private,'|');
	$_list_service_private = str_replace('||','|',$_list_service_private);
	$_temp_array = array();
	if(!empty($_list_service_private)){
		$_temp_array = explode('|',$_list_service_private);
	}
	#
	if(empty($_temp_array)){
		$oneCruise = $clsCruise->getOne($cruise_id);
		$list_cruise_service = $oneCruise['list_cruise_service'];
		if($list_cruise_service != '' && $list_cruise_service != '0'){
			$list_cruise_service = ltrim($list_cruise_service,'|');
			$list_cruise_service = rtrim($list_cruise_service,'|'); 
			$list_cruise_service = str_replace('||','|',$list_cruise_service);
			$_temp_root = explode('|',$list_cruise_service);
			for($i=0; $i<count($_temp_root); $i++){
				if(!in_array($_temp_root[$i],$_temp_array)){
					$_temp_array[] = $_temp_root[$i];
				}
			}
		}
	}
	if(!empty($_temp_array)){
		$html = '
		<table cellpadding="0" cellspacing="0" class="book_service_table">';
			foreach($_temp_array as $k => $v){
				$html .= '
				<tr>
					<td width="88%" class="padding_left_20">    
						<label style="width:auto; cursor:pointer; text-align:left"><input data-price="'.$clsCruiseService->getPrice($v,0).'" class="rdo_serviceID" type="checkbox" name="optional_services[]" value="'.$v.'" /> '.$clsCruiseService->getTitle($v).'</label>
					</td>
					<td align="right">
						<div class="price-inc">'.$clsCruiseService->getPrice($v).'</div>
					</td>
				</tr>
				';
			}
			$html .= '
		</table>';
	}
	echo $html; die();
}
function default_ajGetRateChooice() {
	global $core, $clsISO, $_lang;
	#
	$clsCruise = new Cruise();
	$clsCruiseCabin = new CruiseCabin();
	$clsCruiseService = new CruiseService();
	$clsCruiseStartDate = new CruiseStartDate();
	#
	$cruise_id = isset($_POST['cruise_id'])?intval($_POST['cruise_id']):0;
	$depature_date_select = isset($_POST['depature_date_select'])?$_POST['depature_date_select']:'';
	$departure_date = isset($_POST['departure_date'])?$_POST['departure_date']:'';
	$cruise_cabin_id = isset($_POST['cruise_cabin_id'])?intval($_POST['cruise_cabin_id']):0;
	#
	$list_service_id = trim($_POST['list_service_id']);
	$list_service_id = str_replace(',,',',',$list_service_id);
	$tmp = explode(',',$list_service_id);
	#
	$totalPrice = 0;
	#
	if(!empty($depature_date_select) || !empty($departure_date)) {
		$start_date = '';
		if(!empty($depature_date_select)) {$start_date = $depature_date_select;}
		if(!empty($departure_date)) {$start_date = strtotime($departure_date);}
		$res = $clsCruiseStartDate->getAll("is_trash=0 and cruise_id = '$cruise_id' and start_date = '$start_date' limit 0,1");
		$priceStartDate = !empty($res[0]['price'])?intval($res[0]['price']):0;
		$totalPrice += $priceStartDate;
	} elseif(intval($cruise_id)) {
		$priceCruise = $clsCruise->getOneField('cruise_price',$cruise_id);
		$totalPrice += $priceCruise;
	}
	if(is_array($tmp) && !empty($tmp)) {
		foreach($tmp as $i){
			$totalPrice += $clsCruiseService->getOneField('price',$i);
		}
	}
	if(intval($cruise_cabin_id)!=0) {
		$priceCabin = $clsCruiseCabin->getOneField('price',$cruise_cabin_id);
		$totalPrice += $priceCabin;
	}
	echo $totalPrice; die();
}
function default_ajLoadCruiseItinerary(){
	global $assign_list,$_CONFIG,$core,$dbconn,$mod,$act,$title_page,$description_page,$keyword_page,$clsISO;
	global $_lang,$extLang,$_LANG_ID;
	#
	$clsCruise = new Cruise();
	$clsCruiseItinerary = new CruiseItinerary();
	
	$cruise_id = $_POST['cruise_id'];
	$cruise_itinerary_id = $_POST['cruise_itinerary_id'];
	
	$html = '';
	if($clsCruiseItinerary->getOneField('highlight',$cruise_itinerary_id) != ''){
		$html .= '<h3 class="h3bold">'.$core->get_Lang('Trip highlight').'</h3>';
		$html .= '<div class="formatTextStandard mbmm">
			'.html_entity_decode($clsCruiseItinerary->getOneField('highlight',$cruise_itinerary_id)).'
		</div>';
	}
	#
	$clsCruiseItineraryDay = new CruiseItineraryDay();
	$lstDay = $clsCruiseItineraryDay->getAll("is_trash=0 and cruise_itinerary_id='$cruise_itinerary_id' order by order_no ASC");
	if(is_array($lstDay) && count($lstDay) > 0){
		$html .= '
		<div class="itinerary_Container">';
		for($i=0; $i<count($lstDay); $i++){
			$html .= '
			<div class="elem-accordion-box">
            	<dt class="elem-accordion_Items">
					<span>'.$clsCruiseItineraryDay->getDay($lstDay[$i][$clsCruiseItineraryDay->pkey]).':</span> '.$clsCruiseItineraryDay->getTitle($lstDay[$i][$clsCruiseItineraryDay->pkey]).'
                     <a class="arrow_icr" href="javascript:void(0);" rel="nofollow"></a>
				</dt>
				<dd style="display:none">
					<div class="formatTextStandard">
						'.$clsCruiseItineraryDay->getContent($lstDay[$i][$clsCruiseItineraryDay->pkey]).'
					</div>
				</dd>
			</div>';
		}
		$html .= '</div>';
	}
	echo $html; die();
}
function default_ajChooseCabinCruise(){
	global $assign_list,$_CONFIG,$core,$dbconn,$mod,$act,$title_page,$description_page,$keyword_page,$clsISO;
	global $_lang,$extLang,$_LANG_ID,$now_day;
	
	$clsCruise = new Cruise();$assign_list['clsCruise']=$clsCruise;
	$clsCruiseCabin = new CruiseCabin();$assign_list['clsCruiseCabin']=$clsCruiseCabin;
	$clsCruiseItinerary = new CruiseItinerary();$assign_list['clsCruiseItinerary']=$clsCruiseItinerary;
	

	$cruise_id = Input::post('cruise_id',0);
	$cruise_itinerary_id = Input::post('cruise_itinerary_id',0);
	$cruise_cabin_id = Input::post('cruise_cabin_id',0);
	$type = Input::post('type','');
	$number_adult = Input::post('number_adult',0);
	$number_child = Input::post('number_child',0);
	$number_cabin = Input::post('number_cabin',0);
	$totalprice = Input::post('totalprice',0);
	$max_adult = Input::post('max_adult',0);
	$departure_date = Input::post('departure_date',0);
	$str_departure_date=$departure_date?strtotime($departure_date):'';
	
	
	$discount=$clsISO->getPromotion($cruise_id,'Cruise',$now_day,$str_departure_date,'info_promotion');
	$promotion=$discount['discount_value'];
	

	$SessionChooseCabin= vnSessionGetVar('SessionChooseCabin');
	
	if(empty($SessionChooseCabin)){
		$SessionChooseCabin = array();
	}
	if($type=='D'){
		unset($SessionChooseCabin[$cruise_itinerary_id]['cabin'][$cruise_cabin_id]);
	}else{
		if(!empty($cruise_cabin_id)){
			$SessionChooseCabin[$cruise_itinerary_id]['BookingCruise'] = 'BookingCruise';
			$SessionChooseCabin[$cruise_itinerary_id]['cruise_id'] = $cruise_id;
			$SessionChooseCabin[$cruise_itinerary_id]['promotion'] = $promotion;
			$SessionChooseCabin[$cruise_itinerary_id]['cruise_itinerary_id'] = $cruise_itinerary_id;
			$SessionChooseCabin[$cruise_itinerary_id]['departure_date'] = $str_departure_date;
			$SessionChooseCabin[$cruise_itinerary_id]['cabin'][$cruise_cabin_id]['cruise_id'] = $cruise_id;
			$SessionChooseCabin[$cruise_itinerary_id]['cabin'][$cruise_cabin_id]['cruise_itinerary_id'] = $cruise_itinerary_id;
			$SessionChooseCabin[$cruise_itinerary_id]['cabin'][$cruise_cabin_id]['cruise_cabin_id'] = $cruise_cabin_id;
			$SessionChooseCabin[$cruise_itinerary_id]['cabin'][$cruise_cabin_id]['number_adult'] = $number_adult;
			$SessionChooseCabin[$cruise_itinerary_id]['cabin'][$cruise_cabin_id]['number_child'] = $number_child;
			$SessionChooseCabin[$cruise_itinerary_id]['cabin'][$cruise_cabin_id]['number_cabin'] = $number_cabin;
			$SessionChooseCabin[$cruise_itinerary_id]['cabin'][$cruise_cabin_id]['max_adult'] = $max_adult;
			$SessionChooseCabin[$cruise_itinerary_id]['cabin'][$cruise_cabin_id]['totalprice'] = $totalprice;

		}
	}
	
	vnSessionSetVar('SessionChooseCabin',$SessionChooseCabin);
	
	$arrayCabin=vnSessionGetVar('SessionChooseCabin');
	
	$listCabin=$arrayCabin[$cruise_itinerary_id]['cabin'];
	$assign_list['listCabin']=$listCabin;
	$assign_list['cruise_id']=$cruise_id;
	$assign_list['cruise_itinerary_id']=$cruise_itinerary_id;
	$assign_list['str_departure_date']=$str_departure_date;
	$promotion=$arrayCabin[$cruise_itinerary_id]['promotion'];

	$assign_list['promotion']=$promotion;
	
	$totalpricecabin=0;
	foreach($listCabin as $item){
		$totalpricecabin+=$item['totalprice'];
	}
	
	
	if($promotion>0){
		$totalprice_promotion=$promotion*$totalpricecabin/100;
		$totalprice_new=$totalpricecabin-$totalprice_promotion;
	}else{
		$totalprice_new=$totalpricecabin;
	}
	$assign_list['totalprice_promotion']=$totalprice_promotion;
	$assign_list['totalprice_new']=$totalprice_new;
	
	
	if($type=='BOOKNOW'){
		$cartSessionCruise= vnSessionGetVar('BookingCruise_'.$_LANG_ID);
		if(empty($cartSessionCruise)){
			$cartSessionCruise = array();
		}
		$SessionChooseCabin=vnSessionGetVar('SessionChooseCabin');

		$cartSessionCruise[$_LANG_ID][$cruise_itinerary_id]=$SessionChooseCabin[$cruise_itinerary_id];
		
        vnSessionSetVar('BookingCruise_'.$_LANG_ID,$cartSessionCruise);
		$link=$clsISO->getLink('cart');
		$html = $link;
	}else{
		$html = $core->build('loadCabinChooseBook.tpl');
	}
	
	echo $html; die();
	
}

function default_ajViewDetailCruiseCabin(){
	global $assign_list,$_CONFIG,$core,$dbconn,$mod,$act,$title_page,$description_page,$keyword_page,$clsISO;
	global $_lang,$extLang,$_LANG_ID;
	#
	$clsCruise = new Cruise();
	$clsCruiseItinerary = new CruiseItinerary();
	
	$cruise_id = $_POST['cruise_id'];
	$cruise_itinerary_id = $_POST['cruise_itinerary_id'];
	
	$html = '';
	
	$html = '<div class="modal-dialog modal-lg" role="document">    	
        <div class="modal-content" id="container-room-detail"><div class="modal-header">
	<button type="button" class="close c6" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
	<h4 class="modal-title text-uppercase c2a z_18" id="roomModalLabel">Paradise Luxury Cruise</h4>
</div>
<div class="modal-body">
	<div class="row">
		<div class="col-md-6">
			<div class="modal-owl">
				<div id="sync-modal-lg" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
																									<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2454px; left: 0px; display: block;"><div class="owl-item" style="width: 409px;"><div class="item"><img src="https://d1qzw4aof2monx.cloudfront.net/upload/room/admin/2016/06/Paradise luxury deluxe double.jpg" alt=""></div></div><div class="owl-item" style="width: 409px;"><div class="item"><img src="https://d1qzw4aof2monx.cloudfront.net/upload/room/admin/2016/06/Paradise luxury deluxe twin.jpg" alt=""></div></div><div class="owl-item" style="width: 409px;"><div class="item"><img src="https://d1qzw4aof2monx.cloudfront.net/upload/room/admin/2016/06/Luxury_Bathroom.jpg" alt=""></div></div></div></div>
										
										
																	
				<div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-chevron-left"></i></div><div class="owl-next"><i class="fa fa-chevron-right"></i></div></div></div></div>
				<div class="sync-modal-xs-wrap">
					<div id="sync-modal-xs" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
																								<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 420px; left: 0px; display: block;"><div class="owl-item synced" style="width: 70px;"><div class="item"><img src="https://d1qzw4aof2monx.cloudfront.net/upload/room/admin/2016/06/Paradise luxury deluxe double.jpg" alt=""></div></div><div class="owl-item" style="width: 70px;"><div class="item"><img src="https://d1qzw4aof2monx.cloudfront.net/upload/room/admin/2016/06/Paradise luxury deluxe twin.jpg" alt=""></div></div><div class="owl-item" style="width: 70px;"><div class="item"><img src="https://d1qzw4aof2monx.cloudfront.net/upload/room/admin/2016/06/Luxury_Bathroom.jpg" alt=""></div></div></div></div>
												
												
																							</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="m-item">
				<h5><span>DESCRIPTION</span></h5>
								<div class="m-content">
                	<p>
	Deluxe cabins are located on the first deck with Big window and Sea view.</p>
                    <p>
                		<strong>Cabin size:</strong> 16.0 m2 <br>
                        <strong>Bed size:</strong> Double Bed or 2 Twin Beds <br>
                        <strong>Max People:</strong>  2 Adults,1 Children,1 Infant                    </p>
                </div>
			</div>
			<div class="m-item">
								<h5><span>AMENITIES</span></h5>
				<div class="m-content">
					<ul class="list-col-2">
																		<li>
		Queen size bed/ 2 twin beds</li>
												<li>
		Hot water</li>
												<li>
		Hair-dryer</li>
												<li>
		Individual controller air-conditioning</li>
												<li>
		Shower</li>
												<li>
		Toilet</li>
												<li>
		In-house Telephone</li>
												<li>
		Complimentary Drinking Water</li>
												<li>
		Slippers</li>
												<li>
		Wardrobe</li>
												<li>
		Safety Equipment and Life Vests</li>
												<li>
		Safety box</li>
												<li>
		Bathrobe</li>
												<li>
		En-suite Bathroom</li>
												<li>
		Beauty mirror</li>
																	</ul>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
    </div>';
	echo $html; die();
}

function default_ajUpdateNumViewCruise(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$city_id,$extLang,$clsISO;
	#
	$clsCruise=new Cruise(); $assign_list["clsCruise"] = $clsCruise;
	$clsCity = new City();$assign_list["clsCity"] = $clsCity;
	#
	$cruise_id = $_POST['cruise_id'];
	$assign_list['cruise_id']=$cruise_id;
	$oneItem = $clsCruise->getOne($cruise_id);
	
	$view_num=$oneItem['view_num']; 
    $view_num=$view_num+1;
    $assign_list["view_num"] = $view_num;
     
    $clsCruise->updateOne($cruise_id,"view_num=$view_num");
	echo(1); die();
}
function default_load_more_cruise_halong(){
	global $assign_list, $smarty, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$clsISO;
	$clsCruise=new Cruise();$assign_list["clsCruise"] = $clsCruise;
	$clsCruiseStore=new CruiseStore();$assign_list["clsCruiseStore"] = $clsCruiseStore;
	$clsReviews=new Reviews();$assign_list["clsReviews"] = $clsReviews;
	#
	$currentPage = intval($_POST['page']);
	$assign_list["currentPage"] = $currentPage;
	#
	$_type = $_POST['_type'];
	$cruise_cat_id = $_POST['cruise_cat_id'];
	$recordPerPage = 6;
	if($cruise_cat_id >0){
		if($_type == 'RECOMMED' ){
			$cond = "cruise_id in (SELECT default_cruise.cruise_id FROM default_cruise WHERE is_trash = 0 and is_online = 1 and (cruise_cat_id='$cat_id' or list_cat_id like '%|".$cruise_cat_id."|%')) and _type='RECOMMED'";
		}else{
			$cond="is_trash=0 and is_online=1 and (cruise_cat_id='".$cruise_cat_id."' or list_cat_id like '%|".$cruise_cat_id."|%') and cruise_id NOT IN (SELECT cruise_id From default_cruise_store where ( _type='BEST' or _type='RECOMMED'))";
		}	
	}else{
		$cond = "cruise_id in (SELECT default_cruise.cruise_id FROM default_cruise WHERE is_trash = 0 and is_online = 1 ) and _type='RECOMMED'";
	}
	
	$order_by ="order by order_no asc";
	$offset = ($currentPage-1)*$recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	if($_type == 'RECOMMED'){
		$lstCruiseTopPromotion=$clsCruiseStore->getAll($cond.$order_by.$limit,'cruise_id'); 
	}else{
		$lstCruiseTopPromotion=$clsCruise->getAll($cond.$order_by.$limit,$clsCruise->pkey); 
	}
	$assign_list['lstCruiseTopPromotion'] = $lstCruiseTopPromotion; unset($lstCruiseTopPromotion);
	$assign_list['recordPerPage'] = $recordPerPage;
	#
	$html = $core->build('load_more_cruise_promo.tpl');
	echo $html; die();
}
function default_load_more_cruise_reviews(){
	global $assign_list, $smarty, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$clsISO;
	$clsReviews=new Reviews();$assign_list["clsReviews"] = $clsReviews;
	#
	$currentPage = intval($_POST['page']);
	$assign_list["currentPage"] = $currentPage;
	$_type = $_POST['_type'];
	$table_id = $_POST['table_id'];
	#
	$recordPerPage = 3;
	$order_by ="order by order_no asc";
	$offset = ($currentPage-1)*$recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	$cond = "is_trash=0 and is_online=1 and type='$_type' and table_id = '$table_id'";
	#
	$lstReview = $clsReviews->getAll($cond.$order_by.$limit);
	//echo $cond.$order_by.$limit; print_r($lstReview);die('xxx');
	$assign_list['lstReview'] = $lstReview; unset($lstReview);
	$assign_list['recordPerPage'] = $recordPerPage;
	#
	$html = $core->build('load_more_cruise_reviews.tpl');
	echo $html; die();
}

function default_loadPriceCabin(){
	global $smarty, $assign_list, $_CONFIG,$core, $dbconn, $mod, $act, $_LANG_ID,
	$title_page, $description_page, $keyword_page,$clsISO,$clsConfiguration,$departure_date,$now_day;
	#
	$clsCountry = new Country();
	$clsCity = new City();
	$clsTour = new Tour();
	$clsCruiseItinerary = new CruiseItinerary();
	$assign_list["clsCruiseItinerary"] = $clsCruiseItinerary;
	$clsCruise = new Cruise();
	vnSessionDelVar('SessionChooseCabin');
	
	
	$arraycheckrateCabin = $_POST;
//	var_dump($_POST);die;
	$assign_list['arraycheckrateCabin']=$arraycheckrateCabin; 
	
	
	$cruise_id=$arraycheckrateCabin['cruise_id'];

	$cruise_id = $_POST['cruise_id'];
    $assign_list['cruise_id'] = $_POST['cruise_id'];
	
	$number_adult = $_POST['number_adult'];
    $assign_list['number_adult'] = $number_adult;
	
	$number_child = $_POST['number_child'];
    $assign_list['number_child'] = $number_child;

	$cruise_itinerary_id =$arraycheckrateCabin['cruise_itinerary_id'];
	$assign_list['cruise_itinerary_id']=$cruise_itinerary_id; 
	
	$oneItem = $clsCruiseItinerary->getOne($cruise_itinerary_id);
	
	$departure_date =$arraycheckrateCabin['departure_date'];
	$assign_list['departure_date']=$departure_date; 
	$departure_date=str_replace('/','-',$departure_date); 
	
	$departure_date_month = date('m',strtotime($departure_date));
	$assign_list['departure_date_month']=$departure_date_month; 
	
	$promotion_date=strtotime($departure_date);
	$assign_list['promotion_date']=$promotion_date; 
	$assign_list['departure_date']=$departure_date; 
	
	
	$discount=$clsISO->getPromotion($cruise_id,'Cruise',$now_day,$promotion_date,'info_promotion');
	$promotion=$discount['discount_value'];
	$assign_list['promotion']=$promotion; 
	
	$lstSeason=$clsConfiguration->getAll("setting='high_season_month' and value like '%".$departure_date_month."%' limit 0,1");
	if(!empty($lstSeason)){
		$season='high';
	}else{
		$season='low';
	}
	
	$assign_list['season']=$season; 
	$number_adult = isset($arraycheckrateCabin['number_adult'])?intval($arraycheckrateCabin['number_adult']):'0';
	$number_cabin = isset($arraycheckrateCabin['number_cabin'])?intval($arraycheckrateCabin['number_cabin']):'0';

	$assign_list['number_adult']=$number_adult; 
	$assign_list['number_cabin']=$number_cabin; 
	
	#-- Cruise Rooms
	
	
	$clsCruiseCabin = new CruiseCabin();$assign_list["clsCruiseCabin"] = $clsCruiseCabin;
	
	$clsCruiseSeasonPrice = new CruiseSeasonPrice();$assign_list["clsCruiseSeasonPrice"] = $clsCruiseSeasonPrice;
	
	$sql="SELECT cruise_cabin_id,cruise_itinerary_id,Min(price) FROM default_cruise_season_price WHERE cruise_id='$cruise_id' AND cruise_itinerary_id='$cruise_itinerary_id' and season='$season' and price<>0 GROUP BY cruise_cabin_id"; 
	  
	$lstCruiseCabinID=$dbconn->getAll($sql);
	$lstCruiseCabinID=$clsCruiseCabin->getAll("is_trash=0 and is_online=1 and cruise_id='$cruise_id' and cruise_cabin_id IN (SELECT cruise_cabin_id FROM ".DB_PREFIX."cruise_season_price WHERE cruise_itinerary_id='$cruise_itinerary_id' and season='$season')",$clsCruiseCabin->pkey);

	if($lstCruiseCabinID!=''){
		foreach($lstCruiseCabinID as $k=>$v){
			$lstCruiseCabinID[$k]['compare_price'] = $clsCruiseCabin->getLCheckRatePriceCabin($v[$clsCruiseCabin->pkey],$arraycheckrateCabin,'value',$departure_date,$cruise_id);
			
//		var_dump($v['cruise_cabin_id'],$arraycheckrateCabin,$promotion_date,$cruise_id);die;
		}
		uasort($lstCruiseCabinID, "compare_price_asc");
	}

	$numberlstCruiseCabinID=$lstCruiseCabinID?count($lstCruiseCabinID):0;
	$assign_list['lstCruiseCabinID']=$lstCruiseCabinID;
	$assign_list['numberlstCruiseCabinID']=$numberlstCruiseCabinID;
	
	$lstCruiseCabin=$clsCruiseCabin->getAll("is_trash=0 and is_online=1 and cruise_id='$cruise_id' and cruise_cabin_id NOT IN (select cruise_cabin_id FROM default_cruise_season_price WHERE cruise_id='$cruise_id' GROUP BY cruise_cabin_id) order by order_no ASC");
	$assign_list['lstCruiseCabin']=$lstCruiseCabin;
	$html = $core->build('loadCabinPriceCheckrate.tpl');
	echo $html; die();
}

function compare_price_asc($compare_price1, $compare_price2){ 
	if ($compare_price1["compare_price"] < $compare_price2["compare_price"]) 
	{ 
		return -1; 
	} 
	else if ($compare_price1["compare_price"] == $compare_price2["compare_price"]) 
	{ 
		return 0; 
	} 
	else 
	{ 
		return 1; 
	} 
} 

function default_map(){
	global $dbconn, $_LANG_ID, $core, $smarty,$assign_list;
	$clsCruise = new Cruise();
	$clsCruiseItinerary = new CruiseItinerary();
	
	$table_map_id = intval($_POST['table_map_id']);
	$smarty->assign('table_map_id',$table_map_id);
	
	
	$type_show_map = intval($_POST['type_show_map']);
	$ret = $clsCruiseItinerary->getLocationMap($table_map_id);
	$map_la = $ret['map_la'];
	$map_lo = $ret['map_lo'];
	$script_location = $ret['jscode'];
	$smarty->assign('map_la',$map_la);
	$smarty->assign('map_lo',$map_lo);
	$smarty->assign('script_location',$script_location);
	
	$html = $core->build('map.tpl');
	echo $html; die();
}

?>
