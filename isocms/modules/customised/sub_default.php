<?php


function default_default() {

    global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain,$clsISO;
   	#
	$clsCountryEx = new Country();$assign_list['clsCountryEx'] = $clsCountryEx;
	$clsCity = new City();$assign_list['clsCity'] = $clsCity;
	$clsHotel = new Hotel();$assign_list['clsHotel'] = $clsHotel;
	$clsProperty = new Property();$assign_list["clsProperty"] = $clsProperty;
	$clsHotelPriceRange=new HotelPriceRange(); $assign_list["clsHotelPriceRange"] = $clsHotelPriceRange;
	$clsPagination = new Pagination();
    $clsTestimonial = new Testimonial();$assign_list['clsTestimonial']=$clsTestimonial;
    $clsConfigSetting = new Configuration();


    $assign_list['country_id'] = $country_id;
	#
	$recordPerPage = 8;
	$currentPage = isset($_GET['page'])?intval($_GET['page']):1;

	$cond = "is_trash=0 and is_online=1";
	$lstConfigSetting = $clsConfigSetting->getAll($cond);
    $assign_list['lstConfigSetting']=$lstConfigSetting;

	$star_id = isset($_GET['star_id']) ? $_GET['star_id'] : '';
	$type_hotel = isset($_GET['type_hotel']) ? $_GET['type_hotel'] : '';
	$price_range = isset($_GET['price_range']) ? $_GET['price_range'] : ''; $assign_list["price_range"] = $price_range;
	$priceRange = ($price_range != '')?explode(",",$price_range):array();
	if(count($priceRange) > 0){
		$condPrice = " AND (";
		$check_price_contact = 0;
		for($i=0; $i < count($priceRange); $i++){
			$oneTmp=$clsHotelPriceRange->getOne($priceRange[$i]);
			$min_rate=intval($oneTmp['min_rate']);
			$max_rate=($oneTmp['max_rate']);

			if($min_rate==0 && $max_rate>0){
				$check_price_contact = 1;
				$condPrice.= (($i>0)?' OR (':'(')." price < $max_rate";
			}elseif($min_rate>0 && $max_rate==0){
				$condPrice.=(($i>0)?' OR (':'(')." price > ".$min_rate;
			}else{
				$condPrice.=(($i>0)?' OR (':'(')." price BETWEEN $min_rate AND $max_rate";
			}
			unset($min_rate,$max_rate,$oneTmp);
			$condPrice .= " )";
		}
		$condPrice .= " )";
		$cond_price_contact = "";
		if($check_price_contact == 1){
			$cond_price_contact = " OR hotel_id NOT IN (SELECT hotel_id FROM default_hotel_room) ";
		}
		$cond .= " AND (hotel_id IN (SELECT hotel_id FROM default_hotel_room WHERE 1=1 ".$condPrice.") ".$cond_price_contact.") ";
	}
	
	if(!empty($star_id)){
		$cond .= " and star_id IN ({$star_id})";
	}
	if(!empty($type_hotel)){
		$cond .= " and list_TypeHotel IN (
			SELECT property_id FROM ".$clsProperty->tbl." 
			WHERE is_trash=0 and property_id IN ({$type_hotel})
		)";
	}
	$keyword=(isset($_GET['key']) && !empty($_GET['key']))?$_GET['key']:'';
	if($keyword!=''){
		$cond.=" and (title like '$keyword' or slug like '%".$core->replaceSpace($keyword)."%')";
		$assign_list["keyword"] = $keyword;
	}

	$number_adults=(isset($_GET['number_adults']) && !empty($_GET['number_adults']))?$_GET['number_adults']:1;
	$assign_list["number_adults"] = $number_adults;
	$number_child=(isset($_GET['number_child']) && !empty($_GET['number_child']))?$_GET['number_child']:0;
	$assign_list["number_child"] = $number_child;
	$check_in_date=(isset($_GET['check_in_date']) && !empty($_GET['check_in_date']))?$_GET['check_in_date']:'';
	$assign_list["check_in_date"] = $check_in_date;
	$check_out_date=(isset($_GET['check_out_date']) && !empty($_GET['check_out_date']))?$_GET['check_out_date']:'';
	$assign_list["check_out_date"] = $check_out_date;
	
	$order_by = " order by order_no ASC";
	$totalItem = $clsHotel->getAll($cond,$clsHotel->pkey);
	$totalRecord = $totalItem?count($totalItem):0;
	$assign_list['totalRecord']=$totalRecord;

	$lnk=$_SERVER['REQUEST_URI'];
	if(isset($_GET['page'])){
		$tmp = explode('&',$lnk);
		$n = count($tmp)-1;
		$la_it = '&'.$tmp[$n];
		$str_len = -strlen($la_it);
		$link_page = substr($lnk, 0, $str_len);
	}else{
		$link_page = $lnk;
	}
	
	
	$order_by = " ORDER BY order_no ASC";
	

	#
	$link_page = $clsISO->getLink('hotel');
	$config = array(
		'total'	=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html','/',$link_page),
		'link_page_1'	=> $link_page
	);
	
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);
	
	$offset = ($currentPage-1)*$recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	$listHotel = $clsHotel->getAll($cond.$order_by.$limit,$clsHotel->pkey.',star_id');
	$lstHotel = $clsHotel->getAll($cond);
    $lstCountry = $clsCountryEx->getAll($cond);
    $country_title = array();
    foreach ($lstCountry as $country) {
		$country_title[$country['country_id']] = $country['title'];
	}

    $allTestimonial = $clsTestimonial->getAll($cond,$clsTestimonial->pkey);
	$assign_list['allTestimonial'] = $allTestimonial; unset($allTestimonial);
	$assign_list['listHotel'] = $listHotel; unset($listHotel);
	$assign_list['country_title'] = $country_title; unset($country_title);
	$assign_list['lstHotel'] = $lstHotel; unset($lstHotel);
	$assign_list['totalPage'] = $clsPagination->getTotalPage();
	
	$assign_list['page_view'] = $page_view; unset($page_view);


    /* =============Title & Description Page================== */
    $title_page = $core->get_Lang('Stay').' | '.PAGE_NAME;
     $assign_list["title_page"] = $title_page;
     $assign_list["lnk"] = $lnk;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;

    echo $html; die();
}

function default_ajMakeSelectHotelRoom() {
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
    #
	$clsHotelRoom = new HotelRoom();
	$clsISO = new ISO();

	#
	$hotel_room_id = isset($_POST['hotel_room_id'])?intval($_POST['hotel_room_id']):0;
	$number_room = isset($_POST['number_room'])?intval($_POST['number_room']):0;
	#
	$html = '';
	if(intval($hotel_room_id)>0) {
		$number_room_hotel = $clsHotelRoom->getOneField('number_room',$hotel_room_id);
		$html.= $clsISO->getSelect(1,$number_room_hotel,$number_room);
	} else {
		$html.= $clsISO->getSelect(1,10,$number_room);
	}
	echo $html; die();
}
?>
