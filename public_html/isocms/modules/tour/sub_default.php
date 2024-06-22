<?php

function default_default()
{
	global $assign_list, $clsISO, $core, $title_page,$description_page;

	$clsCountry = new Country();
	$assign_list["clsCountry"] = $clsCountry;
	$clsTourCat = new TourCategory();
	$assign_list["clsTourCat"] = $clsTourCat;
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsPagination = new Pagination();
	$assign_list["clsPagination"] = $clsPagination;
	$clsRegion = new Region();
	$assign_list["clsRegion"] = $clsRegion;
	$clsTourDestination = new TourDestination();
	$assign_list["clsTourDestination"] = $clsTourDestination;
	$clsMonth = new Month();
	$assign_list['clsMonth'] = $clsMonth;
	$clsReviews = new Reviews();
	$assign_list["clsReviews"] = $clsReviews;

	$where = "is_trash = 0 and is_online = 1";
	$order_by = " order by order_no";
	$limit = " LIMIT 8";
	$lnk = $_SERVER['REQUEST_URI'];
	$slug_country = !empty($_GET["slug_country"]) ? $_GET["slug_country"] : "";

	// Filter
	$countryId = isset($_POST['country_id']) ? $_POST['country_id'] : "";

	$cond_slug = "$where and slug = '$slug_country'";
	$country_id = $clsCountry->getAll($cond_slug)[0]["country_id"];

	$region = !empty($_POST['region']) ? $_POST['region'] : null;
	$travel_style = !empty($_POST['travel_style']) ? $_POST['travel_style'] : null;
	$departure_time = !empty($_POST['departure_time']) ? $_POST['departure_time'] : null;
	$duration = !empty($_POST['duration']) ? $_POST['duration'] : null;
	$destination = $_POST['destination'];
	$city_id = $_GET["city_id"];

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST["filter"])) {
		$clsISO->dump($destination);

		$link = isset($destination) ? $clsCountry->getLink($destination ?? 1, 'tour') : $clsCountry->getLink($countryId, 'tour');

		if ($destination) {
			$arr_des = explode('-', $destination);
			if (isset($arr_des[3])) {
				$link = $clsCountry->getLink($arr_des[1], 'tour') . "&city_id=$arr_des[3]";
			}
		}

		$params = [
			'region' => $region,
			'travel_style' => $travel_style,
			'departure_time' => $departure_time,
			'duration' => $duration,
		];
		foreach ($params as $key => $value) {
			if ($value) {
				$link .= '&' . $key . '=' . $clsISO->makeSlashListFromArrayComma($value);
			}
		}
		if ($city_id) $link .= '&city_id=' . $city_id;
		header('Location: ' . trim($link));
	}

	$where_list_tour = $where;
	$region = $_GET["region"];
	$get_travel_style = $_GET["travel_style"];
	$get_departure_time = $_GET["departure_time"];
	$duration = $_GET["duration"];


	if (!empty($get_travel_style)) {
		$travel_style_conditions = array();
		foreach (explode(",", $get_travel_style) as $v) {
			$travel_style_conditions[] = " list_cat_id LIKE '%|$v|%' ";
		}
		if (!empty($travel_style_conditions)) {
			$where_list_tour .= " and (" . implode(" OR ", $travel_style_conditions) . ")";
		}
		$assign_list["travel_style"] = $get_travel_style;
	}

	if (!empty($get_departure_time)) {
		$departure_time_conditions = array();
		foreach (explode(",", $get_departure_time) as $v) {
			$departure_time_conditions[] = " list_month_id LIKE '%|$v|%' ";
		}
		if (!empty($departure_time_conditions)) {
			$where_list_tour .= " and (" . implode(" OR ", $departure_time_conditions) . ")";
		}
		$assign_list["departure_time"] = $get_departure_time;
	}

	if (!empty($duration)) {
		$where_list_tour .= " and (";
		$conditions = array();

		foreach (explode(",", $duration) as $v) {
			if ($v == 1) {
				$conditions[] = "((number_day >= '0' AND number_day <= '7') OR duration_custom != '')";
			}
			if ($v == 2) {
				$conditions[] = "(number_day >= '8' AND number_day <= '14')";
			}
			if ($v == 3) {
				$conditions[] = "(number_day >= '15' AND number_day <= '21')";
			}
			if ($v == 4) {
				$conditions[] = "(number_day > '21')";
			}
		}
		$where_list_tour .= implode(" OR ", $conditions);
		$where_list_tour .= ")";
		$assign_list["duration"] = $duration;
	}

	if (isset($_GET['page'])) {
		$tmp = explode('&', $lnk);
		$n = count($tmp) - 1;
		$la_it = '&' . $tmp[$n];
		$str_len = -strlen($la_it);
		$link_page = substr($lnk, 0, $str_len);
	} else {
		$link_page = $lnk;
	}
	if ($where_list_tour) {
		$cond_lstCountry = "$where_list_tour";
	}

	if ($country_id) {
		$cond_region = "";
		$cond_city = "";
		if (!empty($region)) {
			$cond_region = "and region_id IN ($region)";
			$assign_list["region"] = $region;
		}
		if (!empty($city_id)) {
			$cond_city = "and city_id IN ($city_id)";
		}

		$cond_lstCountry =  " $where_list_tour and tour_id IN (select tour_id from default_tour_destination where country_id = $country_id $cond_region $cond_city)";
	}
	$recordPerPage = 8;
	$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
	$totalItem = $clsTour->getAll($cond_lstCountry, $clsTour->pkey);
	$totalRecord = $totalItem ? count($totalItem) : 0;
	$assign_list['totalRecord'] = $totalRecord;

	$config = array(
		'total'	=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html', '/', $link_page),
		'link_page'	=> $link_page
	);

	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);
	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";

	$lstCountry = $clsCountry->getAll($where . $order_by);

	if (isset($_COOKIE['recent_view_tour'])) {
		$recent_view_tour = json_decode($_COOKIE['recent_view_tour'], true);
		if (!empty($recent_view_tour)) {
			$ids = implode(',', array_map('intval', $recent_view_tour));
			$lstTourRecent = $clsTour->getAll("tour_id IN ($ids)");
			$assign_list["lstTourRecent"] = $lstTourRecent;
		}
	}

	$assign_list["lstRegion"] = $clsRegion->getAll("$where and country_id = $country_id", "region_id, title");
	$assign_list["lstTour"] = $clsTour->getAll($cond_lstCountry . $order_by . $limit);
	$assign_list["lstTourCat"] = $clsTourCat->getAll($where . $order_by);
	$assign_list["lstMonth"] = $clsMonth->getAll($where);
	$assign_list["country_id"] = $country_id;
	$assign_list["lstCountry"] = $lstCountry;
	$assign_list['page_view'] = $page_view;

    /*=============Title & Description Page==================*/
    $title_page = ucwords($slug_country) . " " . $core->get_Lang('Tour Packages');
    $assign_list["title_page"] = $title_page;
    $description_page =$title_page;
    $assign_list["description_page"] = $description_page;
    $keyword_page =$title_page;
    $assign_list["keyword_page"] = $keyword_page;
}

function default_detaildeparture()
{
	global $assign_list, $clsISO, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $global_image_seo_page, $tour_id,
		$child_type_id, $infant_type_id, $age_type_id, $height_type_id;

	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsTourDestination = new TourDestination();
	$assign_list["clsTourDestination"] = $clsTourDestination;
	$clsTourItinerary = new TourItinerary();
	$assign_list["clsTourItinerary"] = $clsTourItinerary;
	$clsTourImage = new TourImage();
	$assign_list["clsTourImage"] = $clsTourImage;
	$clsReviews = new Reviews();
	$assign_list["clsReviews"] = $clsReviews;
	$clsTourExtension = new TourExtension();
	$assign_list["clsTourExtension"] = $clsTourExtension;
	$clsTourCategory = new TourCategory();
	$assign_list["clsTourCategory"] = $clsTourCategory;
	$clsDiscount = new Discount();
	$assign_list["clsDiscount"] = $clsDiscount;
	$clsCountry = new Country();
	$assign_list["clsCountry"] = $clsCountry;
	$clsTourCat = new TourCategory();
	$assign_list["clsTourCat"] = $clsTourCat;
	$clsTourProperty = new TourProperty();
	$assign_list["clsTourProperty"] = $clsTourProperty;
	$clsTourOption = new TourOption();
	$assign_list["clsTourOption"] = $clsTourOption;

	$tour_id = !empty($_GET['tour_id']) ? $_GET['tour_id'] : '0';
	$cond = " is_trash = 0 and";
	$order = " order by order_no";

	$lstReviews = $clsReviews->getAll("$cond is_online = 1 and table_id = $tour_id $order");
	$countReview = $clsReviews->countItem("$cond is_online = 1 and table_id = $tour_id $order");
	$lstTourImage = $clsTourImage->getAll("$cond table_id = $tour_id $order", "tour_image_id, image");
	$lstTourItinerary = $clsTourItinerary->getAll("$cond tour_id = $tour_id order by day");
	$oneItem = $clsTour->getOne($tour_id);
	$travel_style_id = explode('|', $oneItem[8])[1];
	$lstRelateTour = $clsTour->getAll("$cond tour_id IN (select tour_2_id from default_tour_extension where tour_1_id = $tour_id)");
	$country_id = $clsTourDestination->getAll("$cond tour_id = $tour_id limit 1", "country_id")[0]["country_id"];

	//    Form Book Tour
	$lstVisitorType = $clsTourProperty->getAll("is_trash=0 and type='VISITORTYPE' order by order_no asc", $clsTourProperty->pkey);
	$assign_list["lstVisitorType"] = $lstVisitorType;
	$list_age_child = $clsTourOption->getAll(" tour_property_height='0' AND tour_property_id='" . $age_type_id . "' AND tour_property_age='" . $child_type_id . "'", $clsTourOption->pkey . ',title');
	$assign_list['list_age_child'] = $list_age_child;
	$getSelectChild = $getSelectInfant = "";
	$child_visitor_type = $infant_visitor_type = "";
	if ($oneItem['visitorage_child'] != '') {
		$getSelectChild = $clsTourOption->getSelectBySizeGroup($child_type_id, "VISITORAGETYPE");
		$textSizeGroupChild = $clsTourOption->getTextSelectBySizeGroup($child_type_id, "VISITORAGETYPE");
		$child_visitor_type = $age_type_id;
	} elseif ($oneItem['visitorheight_child'] != '') {
		$getSelectChild = $clsTourOption->getSelectBySizeGroup($child_type_id, "VISITORHEIGHTTYPE");
		$textSizeGroupChild = $clsTourOption->getTextSelectBySizeGroup($child_type_id, "VISITORHEIGHTTYPE");
		$child_visitor_type = $height_type_id;
	}
	if ($oneItem['visitorage_infant'] != '') {
		$getSelectInfant = $clsTourOption->getSelectBySizeGroup($infant_type_id, "VISITORAGETYPE");
		$infant_visitor_type = $age_type_id;
	} elseif ($oneItem['visitorheight_infant'] != '') {
		$getSelectInfant = $clsTourOption->getSelectBySizeGroup($infant_type_id, "VISITORHEIGHTTYPE");
		$infant_visitor_type = $height_type_id;
	}
	$assign_list['child_visitor_type'] = $child_visitor_type;
	$assign_list['infant_visitor_type'] = $infant_visitor_type;
	$assign_list['getSelectChild'] = $getSelectChild;
	$assign_list['getSelectInfant'] = $getSelectInfant;
	$lstAdultSizeGroup = $oneItem['adult_group_size'];
	$lstAdultSize = array();
	if ($lstAdultSizeGroup != '' && $lstAdultSizeGroup != '0') {
		$TMP = explode(',', $lstAdultSizeGroup);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstAdultSize)) {
				$lstAdultSize[] = $TMP[$i];
			}
		}
	}
	$lastAdultSize = end($lstAdultSize);
	$max_adult = $clsTourOption->getOneField('number_to', $lastAdultSize);
	$assign_list["max_adult"] = $max_adult ?? 1;
	$lstChildSizeGroup = $oneItem['child_group_size'];
	$lstChildSize = array();
	if ($lstChildSizeGroup != '' && $lstChildSizeGroup != '0') {
		$TMP = $clsISO->getArrayByTextSlash($lstChildSizeGroup);
		//        $TMP = explode(',',$lstChildSizeGroup);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstChildSize)) {
				$lstChildSize[] = $TMP[$i];
			}
		}
	}
	$max_child = $clsTourOption->getAll('tour_option_id IN (' . implode(',', $lstChildSize) . ')', "max(number_to) as max");
	$max_child = (isset($max_child[0])) ? $max_child[0]['max'] : 0;
	$max_child = !empty($max_child) ? $max_child : 0;
	$assign_list["max_child"] = $max_child;
	$tourcat_id = $oneItem['cat_id'];
	$assign_list["tourcat_id"] = $tourcat_id;
	$oneCat = $clsTourCategory->getOne($tourcat_id, 'parent_id');
	$oneParent = $clsTourCategory->getOne($oneCat['parent_id'], $clsTourCategory->pkey . ',title,slug');
	$assign_list["oneParent"] = $oneParent;

	#list room
	$list_tour_room_id = $oneItem['list_tour_room_id'];
	$list_tour_room_id = str_replace("|", ",", trim($list_tour_room_id, "|"));
	$lstRoom = $clsTourProperty->getAll("is_trash=0 and is_online=1 and type='TOURROOM' and tour_property_id IN (" . $list_tour_room_id . ")", $clsTourProperty->pkey . ',title');
	$assign_list['lstRoom'] = $lstRoom;

	$lstInfantSizeGroup = $oneItem['infant_group_size'];
	$lstInfantSize = array();
	if ($lstInfantSizeGroup != '' && $lstInfantSizeGroup != '0') {
		$TMP = $clsISO->getArrayByTextSlash($lstInfantSizeGroup);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstInfantSize)) {
				$lstInfantSize[] = $TMP[$i];
			}
		}
	}
	$max_infant = $clsTourOption->getAll('tour_option_id IN (' . implode(',', $lstInfantSize) . ')', "max(number_to) as max");
	$max_infant = (isset($max_infant[0])) ? $max_infant[0]['max'] : 0;
	$assign_list["max_infant"] = $max_infant;

	$date_range_js_update = '<script> var date_range = [\'' . implode('\',\'', $list_date_array) . '\'];</script>';
	$assign_list["date_range_js_update"] = $date_range_js_update;

	$currentDate = new DateTime();
	$currentDate->modify('+1 day');
	$assign_list["str_first_start_date"] = $currentDate->format('d/m/Y');

	if (isset($_POST['BookingTour']) &&  $_POST['BookingTour'] == 'BookingTour') {
		$cartSessionService = vnSessionGetVar('BookingTour_' . $_LANG_ID);
		if (empty($cartSessionService)) {
			$cartSessionService = array();
		}
		$assign_list["cartSessionService"] = $cartSessionService;

		$link = $clsISO->getLink('cart');
		//        $cartSessionService[$_LANG_ID][$tour_id] = array();
		$cartSessionService[$_LANG_ID] = array();
		//        $clsISO->pre($_POST); die();
		foreach ($_POST as $k => $v) {
			if (!empty($v)) {
				if ($k == 'number_addon') {
					foreach ($v as $k_addon => $v_addon) {
						if (!empty($v_addon)) {
							$cartSessionService[$_LANG_ID][$tour_id][$k][$k_addon] = $v_addon;
						}
					}
				} else {
					$cartSessionService[$_LANG_ID][$tour_id][$k] = $v;
				}
			}
		}
		//        $clsISO->print_pre($cartSessionService);die();
		vnSessionDelVar('BookingVoucher_' . $_LANG_ID);
		vnSessionSetVar('BookingTour_' . $_LANG_ID, $cartSessionService);
		header('location:' . $link);
		exit();
	}

    if(isset($_POST['ContactTour']) &&  $_POST['ContactTour']=='ContactTour'){
        vnSessionDelVar('ContactTour');
        $cartSessionService= vnSessionGetVar('ContactTour');
        if(empty($cartSessionService)){
            $cartSessionService = array();
        }
        $assign_list["cartSessionService"] = $cartSessionService;
        $link=$clsISO->getLink('contact');
        $cartSessionService['TOUR'][$tour_id] = array();
        foreach($_POST as $k=>$v){
            $cartSessionService['TOUR'][$tour_id][$k] = $v;
        }
        //$clsISO->print_pre($cartSessionService);die();
        vnSessionSetVar('ContactTour',$cartSessionService);
        header('location:'.$link);
        exit();
    }

	//    End Form Box Tour

	if (!empty($_GET['tour_id'])) {
		$post_id = intval($_GET['tour_id']);
		if (isset($_COOKIE['recent_view_tour'])) {
			$recent_view_tour = json_decode($_COOKIE['recent_view_tour'], true);
		} else {
			$recent_view_tour = array();
		}
		if (!in_array($post_id, $recent_view_tour)) {
			$recent_view_tour[] = $post_id;
		}

		setcookie('recent_view_tour', json_encode($recent_view_tour), time() + (86400), "/");
	}

	if (isset($_COOKIE['recent_view_tour'])) {
		$recent_view_tour = json_decode($_COOKIE['recent_view_tour'], true);
		if (!empty($recent_view_tour)) {
			$ids = implode(',', array_map('intval', $recent_view_tour));
			$lstTourRecent = $clsTour->getAll("tour_id IN ($ids)");
			$assign_list["lstTourRecent"] = $lstTourRecent;
		}
	}

	$sqlCountRate = "SELECT rates, ROUND(COUNT(rates) / $countReview * 100) AS count_percent, COUNT(rates) as count FROM default_reviews WHERE $cond is_online = 1 and table_id = $tour_id GROUP BY rates;";

	$countRate = $dbconn->GetAll($sqlCountRate);

	$txtReview = ['Bad', 'Average', 'Good', 'Excellent', 'Wonderful'];
	$validRates = [5, 4, 3, 2, 1];
	$result = [];
	$rateMap = array_column($countRate, null, 'rates');

	foreach ($validRates as $rates) {
		if (isset($rateMap[$rates])) {
			$entry = $rateMap[$rates];
			$count_percent = $entry['count_percent'];
			$count = $entry['count'];
		} else {
			$count_percent = $count = 0;
		}
		$reviewName = $txtReview[$rates - 1];
		$result[] = [
			'rates' => $rates,
			'count' => $count,
			'count_percent' => $count_percent,
			'reviews' => $reviewName
		];
	}

	if ($oneItem['is_online'] == 0) header('location:' . PCMS_URL);
	$assign_list["oneItem"] = $oneItem;
	$assign_list["tour_id"] = $tour_id;
	$assign_list["table_id"] = $tour_id;
	$assign_list["lstTourItinerary"] = $lstTourItinerary;
	$assign_list["lstTourImage"] = $lstTourImage;
	$assign_list["lstReviews"] = $lstReviews;
	$assign_list["lstRelateTour"] = $lstRelateTour;
	$assign_list["countReview"] = $countReview;
	$assign_list["reviewProgress"] = $result;
	$assign_list["travel_style_id"] = $travel_style_id;
	$assign_list["country_id"] = $country_id;
	$format_time_now = date('M d, Y', strtotime('+1 day'));
	$assign_list['format_time_now'] = $format_time_now;

	/*=============Title & Description Page==================*/
	$title_page = $clsTour->getTitle($tour_id);
	$assign_list["title_page"] = $title_page;
	$description_page = $clsISO->getMetaDescription($tour_id, 'Tour');
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsISO->getPageImageShare($tour_id, 'Tour');
	$assign_list["global_image_seo_page"] = $global_image_seo_page;
}

function default_sendMail()
{
	global  $clsISO, $clsConfiguration, $_LANG_ID, $email_template_download_brochure;

	$clsTour = new Tour();
	$clsEmailTemplate = new EmailTemplate();
	#

	$email = $_POST['email'];
	$tour_id = $_POST['tour_id'] ?? 0;
	#
	$oneItem = $clsTour->getOne($tour_id);
	$email_template_id = 133;
	$src_img = "https://" . $_SERVER["HTTP_HOST"] . $oneItem["image"];
	//    print_r($src_img); die();
	#
	header('Content-Type: text/html; charset=utf-8');

	$message = $clsEmailTemplate->getContent($email_template_id);
	$message = str_replace('[%PAGE_NAME%]', PAGE_NAME, $message);
	$message = str_replace('{URL}', 'http://' . $_SERVER['HTTP_HOST'], $message);
	$message = str_replace('[%CUSTOMER_EMAIL%]', $email, $message);

	$message = str_replace('[%COMPANY_HOTLINE%]', $clsConfiguration->getValue('CompanyHotline'), $message);
	$message = str_replace('[%COMPANY_EMAIL%]', $clsConfiguration->getValue('CompanyEmail'), $message);
	$message = str_replace('[%COMPANY_NAME%]', $clsConfiguration->getValue('CompanyName_' . $_LANG_ID), $message);
	$message = str_replace('[%COMPANY_ADDRESS%]', $clsConfiguration->getValue('CompanyAddress_' . $_LANG_ID), $message);
	$message = str_replace('[%COMPANY_PHONE%]', $clsConfiguration->getValue('CompanyPhone'), $message);
	$message = str_replace('[%DATETIME%]', date('Y', time()), $message);

	$message = str_replace('[%TOUR_IMAGE%]', '<img style="display: block; margin-left: auto; margin-right: auto;" src="' . $src_img . '" alt=""/>', $message);
	$message = str_replace('[%TOUR_TITLE%]', $oneItem["title"], $message);
	$message = str_replace('[%DOWNLOAD_BROCHURE%]', '<a style="text-decoration: none; color: #000; font-size: 16px; background-color: #ffa718; font-weight: 600;padding: 20px; border-radius: 8px;" href="' . $oneItem["file_programme"] . '">Download Brochure</a>', $message);

	#
	$from = $clsEmailTemplate->getFromEmail($email_template_id);

	$owner = $clsEmailTemplate->getFromName($email_template_id);
	$to = $email;
	$subject = $clsEmailTemplate->getSubject($email_template_id) . ' ' . PAGE_NAME;
	$subject = str_replace('[%PAGE_NAME%]', '', $subject);

	$clsISO->sendEmail($from, $to, $subject, $message, $owner);
	$clsEmailTemplate->getCopyTo($email_template_id);
	return 1;
}
function default_loadTextDay()
{
	global $core, $mod, $act, $clsISO, $_LANG_ID, $clsConfiguration, $adult_type_id, $child_type_id, $infant_type_id;
	$date = isset($_POST['date']) && !empty($_POST['date']) ? $_POST['date'] : '';
	$date = str_replace('/', '-', $date);
	$date = strtotime($date);
	$text_day = $clsISO->getDayOfWeek($date);
	echo $text_day . ', ' . date("d/m/Y", $date);
	die();
}
function default_loadTextDayItinerary()
{
	global $core, $mod, $act, $clsISO, $_LANG_ID;
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsTourItinerary = new TourItinerary();
	$assign_list['clsTourItinerary'] = $clsTourItinerary;
	$date = isset($_POST['date']) && !empty($_POST['date']) ? $_POST['date'] : '';
	$tour_id = $_POST['tour_id'];
	$date = str_replace('/', '-', $date);
	//$date=strtotime($date);
	$text_day = $clsISO->getDayOfWeek($date);
	#- Itinerary
	$lstItineraryTour = $clsTourItinerary->getAll("is_trash=0 and tour_id='$tour_id' and title_contingency='' order by order_no asc", $clsTourItinerary->pkey . ',image,content,tour_itinerary_id,transport,is_show_image,day,day2');
	$assign_list['lstItineraryTour'] = $lstItineraryTour;
	$list_itinerary = [];
	//var_dump($first_start_date1);die();
	foreach ($lstItineraryTour as $k => $v) {
		$list_itinerary[$v[$clsTourItinerary->pkey]] = $clsISO->converTimeToText5(strtotime($date . ' + ' . $k . ' day'));
	}
	echo json_encode(array(
		"list_itinerary"	=> $list_itinerary,
	));
	die();
}

function default_ajGetMaxChildInfant()
{
	global $assign_list, $_CONFIG, $core, $extLang, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $extLang, $adult, $child, $infant;
	global $clsISO, $clsConfiguration, $profile_id, $loggedIn, $agent_id, $adult_type_id, $child_type_id, $infant_type_id, $is_agent, $package_id, $now_day;
	if (Input::exists('lang_id', 'GET')) {
		$_LANG_ID = Input::get('lang_id');
		vnSessionSetVar("_LANG_ID", $_LANG_ID);
	} else if (vnSessionExist("_LANG_ID")) {
		$_LANG_ID = vnSessionGetVar("_LANG_ID");
	}
	$clsTourOption = new TourOption();
	$clsTour = new Tour();
	$clsSettingChildPolicy = new SettingChildPolicy();
	$tour_id = (int)Input::post('tour_id', 0);
	$number_adults = (int)Input::post('number_adults', 0);
	$tour_property_id = (int)Input::post('tour_property_id', 0);
	$oneItem = $clsTour->getOne($tour_id, 'adult_group_size');
	$assign_list["oneItem"] = $oneItem;
	$tour_option = $clsTourOption->getAll("is_trash=0 AND tour_property_id = '" . $tour_property_id . "' AND type='SIZEGROUP' AND tour_option_id IN (" . $oneItem['adult_group_size'] . ") AND " . $number_adults . " BETWEEN number_from AND number_to LIMIT 0,1", $clsTourOption->pkey);
	$max_child = $max_infant = 0;

	if ($tour_option) {
		$max_child = $clsSettingChildPolicy->getNumberChild($tour_option[0][$clsTourOption->pkey], $number_adults);
		$max_infant = $clsSettingChildPolicy->getNumberInfant($tour_option[0][$clsTourOption->pkey], $number_adults);
	}

	$data = [
		'max_child'		=>	$max_child,
		'max_infant'	=>	$max_infant,
	];
	echo json_encode($data);
	die;
}

function default_loadSelectAgeChild()
{
	$clsTourOption = new TourOption();
	$tour_option_id = Input::post("visitor_age_id", 0);
	$html = '';
	if ($tour_option_id > 0) {
		$html = $clsTourOption->getSelectAgeChild('', 0, $tour_option_id);
	}
	echo $html;
}

function default_loadTablePrice()
{
	global $assign_list, $core, $clsISO, $package_id, $now_day;

	$clsProperty = new Property();
	$assign_list["clsProperty"] = $clsProperty;
	$clsAddOnService = new AddOnService();
	$assign_list["clsAddOnService"] = $clsAddOnService;
	$clsTourProperty = new TourProperty();
	$assign_list["clsTourProperty"] = $clsTourProperty;
	$clsTourService = new TourService();
	$assign_list["clsTourService"] = $clsTourService;
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsTourStore = new TourStore();
	$assign_list["clsTourStore"] = $clsTourStore;
	$clsTourStartDate = new TourStartDate();
	$assign_list["clsTourStartDate"] = $clsTourStartDate;
	$clsBooking = new Booking();
	$assign_list["clsBooking"] = $clsBooking;
	$clsProfile = new Profile();
	$assign_list['clsProfile'] = $clsProfile;
	$clsVoucher = new Voucher();
	$assign_list['clsVoucher'] = $clsVoucher;
	$clsPromotion = new Promotion();
	$assign_list['clsPromotionr'] = $clsPromotion;
	$clsTourPriceGroup = new TourPriceGroup();
	$assign_list['clsTourPriceGroup'] = $clsTourPriceGroup;
	$clsTourOption = new TourOption();
	$assign_list['clsTourOption'] = $clsTourOption;

	$tour_id = $_POST['tour_id'];
	$is_last_hour = $_POST['is_last_hour'];
	$tour_start_date = $_POST['tour_start_date'];
	$number_adults = intval($_POST['number_adults']);
	$number_child = intval($_POST['number_child']);
	$number_infants = intval($_POST['number_infants']);

	$number_pick_travellers = $number_adults + $number_child + $number_infants;

	$check_in_book = $_POST['check_in_book'];
	$tour_visitor_adult_id = $_POST['tour_visitor_adult_id'];
	$tour_visitor_child_id = $_POST['tour_visitor_child_id'];
	$tour_visitor_infant_id = $_POST['tour_visitor_infant_id'];
	$number_room	= Input::post('number_room', []);
	$room_id		= Input::post('room_id', []);
	$check_in_book = str_replace('/', '-', $check_in_book);
	$str_check_in_book = 0;
	$promotion = 0;
	$discount_type = 0;

	$str_check_in_book = strtotime($check_in_book);
	if (_IS_PROMOTION == 1) {
		$discount = $clsISO->getPromotion($tour_id, 'Tour', $now_day, $str_check_in_book, $type_check = 'get_more_info');
		$promotion = $discount['discount_value'];
		$discount_type = $discount['discount_type'];
		$promotion = !empty($promotion) ? $promotion : 0;
		$promotion = str_replace('.', '', $promotion);
	}

	if (_IS_DEPARTURE == 1) {
		$str_check_in_book = strtotime($check_in_book);
		$checkExistTourStartDate = $clsTourStore->checkExist($tour_id, 'DEPARTURE');
		$str_check_in_book = !empty($checkExistTourStartDate) ? $str_check_in_book : 0;

		$listTourStartDateClose = $clsTourStartDate->getAll("is_trash=0 and tour_id='$tour_id' and start_date='$str_check_in_book' and open_sale_date <= '$now_day' and close_sale_date <'$now_day' and is_last_hour=1 order by start_date ASC");

		foreach ($listTourStartDateClose as $key => $value) {
			$list_tour_start_date_id[] = $value['tour_start_date_id'];
		}
		$list_tour_start_date_id = implode(',', $list_tour_start_date_id);

		$condd = "is_trash=0 ";
		if (!empty($list_tour_start_date_id)) {
			$condd .= " and tour_start_date_id NOT IN ($list_tour_start_date_id)";
		}
		$condd .= " and '" . $str_check_in_book . "' BETWEEN start_date AND end_date and tour_id ='$tour_id' order by start_date ASC limit 0,1";


		if (!empty($checkExistTourStartDate)) {
			if (!empty($checkExistTourStartDate) && !empty($tour_start_date)) {
				$lstTourStartDate = $clsTourStartDate->getAll($condd);
			}
			if ($lstTourStartDate) {
				$seat_available = $lstTourStartDate[0]['allotment'];
				$deposit = $lstTourStartDate[0]['deposit'];
				if ($seat_available != '' && $number_pick_travellers > $seat_available) {
					$exceeded_seat = 1;
				} else {
					$exceeded_seat = 0;
				}
				if ($seat_available == 1) {
					$seat = $core->get_Lang('seat');
				} else {
					$seat = $core->get_Lang('seats');
				}
				if ($seat_available == '' || !empty($seat_available)) {
					if ($seat_available == '') {
						$title_seat = $core->get_Lang('Still enough spaces left for you');
					} else {
						$title_seat = $core->get_Lang('Empty') . ' ' . $seat_available . ' ' . $seat;
					}
				} else {
					$title_seat = $seat = $core->get_Lang('Full');
				}
			} else {
				$title_seat = '';
			}
		} else {
			$deposit = $clsTour->getDeposit($tour_id);
		}
	} else {
		$deposit = $clsTour->getDeposit($tour_id);
	}


	$assign_list["title_seat"] = $title_seat;
	$assign_list["exceeded_seat"] = $exceeded_seat;

	#
	if ($clsISO->getCheckActiveModulePackage($package_id, 'property', 'service', 'default')) {
		$lstServiceID = $clsTour->getListService($tour_id);
		$lstService = $clsAddOnService->getAll("is_trash=0 and is_online=1 and addonservice_id IN($lstServiceID) order by order_no asc", $clsAddOnService->pkey);
		$assign_list["lstService"] = $lstService;
	}

	$lstTourOption = $clsTour->getOneField('tour_option', $tour_id);
	$lstOption = array();
	if ($lstTourOption != '' && $lstTourOption != '0') {
		$TMP = explode(',', $lstTourOption);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstOption)) {
				$lstOption[] = $TMP[$i];
			}
		}
	}
	$tour_class_id = $_POST['tour__class_check'];
	$tour_class_id = $tour_class_id ? $tour_class_id : $lstOption[0];
	$tour_number_adults_id = $clsTourPriceGroup->getTourNumberGroup($tour_visitor_adult_id, $number_adults, $tour_id);
	$tour_number_child_id = $clsTourPriceGroup->getTourNumberGroup($tour_visitor_child_id, $number_child, $tour_id);
	$tour_number_infants_id = $clsTourPriceGroup->getTourNumberGroup($tour_visitor_infant_id, $number_infants, $tour_id);
	$check_contact = $check_contact_child = $check_contact_infant = 0;
	if (!empty($checkExistTourStartDate)) { //TH có departure date
		if (!empty($lstTourStartDate)) {
			if ($lstTourStartDate[0]['price_type'] == 1) { //TH set giá trong departure date
				$price = $lstTourStartDate[0]['price'];
				$price = json_decode($price, 'true');
				$price_type_rate = $lstTourStartDate[0]['price_type_rate'];
				$price_type_rate = json_decode($price_type_rate, 'true');

				$price_adults = $price[$tour_visitor_adult_id][$tour_class_id][$tour_number_adults_id];

				$oneTour = $clsTour->getOne($tour_id, 'visitorage_child,visitorheight_child,visitorage_infant,visitorheight_infant');

				if ($oneTour['visitorage_child'] != '') {
					$array_visitor_child = Input::post("visitorAge_child", array());
					$type_child = "AGE";
				} elseif ($oneTour['visitorheight_child'] != '') {
					$array_visitor_child = Input::post("visitorHeight_child", array());
					$type_child = "HEIGHT";
				}

				if ($oneTour['visitorage_infant'] != '') {
					$array_visitor_infant = Input::post("visitorAge_infant", array());
					$type_infant = "AGE";
				} elseif ($oneTour['visitorheight_infant'] != '') {
					$array_visitor_infant = Input::post("visitorHeight_infant", array());
					$type_infant = "HEIGHT";
				}
				$arr_price_child = $arr_price_infant = [];
				$total_price_child = $total_price_infants = 0;

				//list nhóm giá trẻ em
				$array_visitor_child = array_count_values($array_visitor_child);
				foreach ($array_visitor_child as $key => $value) {
					$tour_number_child_id = $clsTourPriceGroup->getTourNumberGroup($tour_visitor_child_id, $value, $tour_id);
					if ($type_child == "AGE") {
						$visitor_age_type = $key;

						$price_value = $price_adults > 0 ? $price[$tour_visitor_child_id][$tour_class_id][$visitor_age_type][$tour_number_child_id] : 0;

						$price_type = $price_value > 0 ? $price_type_rate[$tour_class_id][$visitor_age_type][$tour_number_child_id] : 0;
					} else {
						$visitor_height_type = $key;

						$price_value = $price_adults > 0 ? $price[$tour_visitor_child_id][$tour_class_id][$visitor_height_type][$tour_number_child_id] : 0;

						$price_type = $price_value > 0 ? $price_type_rate[$tour_class_id][$visitor_height_type][$tour_number_child_id] : 0;
					}

					if ($price_type == 0) {
						$price_child = $price_value;
					} else {
						$price_child = round($price_value * $price_adults / 100);
					}

					$price_child = ($price_child > 0) ? $price_child : 0;
					$total_price_child += $price_child * $value;

					$arr_price_child[] = [
						'text'	=>	$clsTourOption->getTitle($key),
						'number'	=>	$value,
						'price'		=>	$price_child,
						'total_price'		=>	$price_child * $value,
					];
					if ($price_child == 0) {
						$check_contact = 1;
						$check_contact_child = 1;
					}
					unset($price_child);
				}

				//list nhóm giá em bé
				$array_visitor_infant = array_count_values($array_visitor_infant);
				foreach ($array_visitor_infant as $key => $value) {
					$tour_number_infant_id = $clsTourPriceGroup->getTourNumberGroup($tour_visitor_infant_id, $value, $tour_id);
					if ($type_infant == "AGE") {
						$visitor_age_type = $key;

						$price_value = $price_adults > 0 ? $price[$tour_visitor_infant_id][$tour_class_id][$visitor_age_type][$tour_number_infant_id] : 0;

						$price_type = $price_value > 0 ? $price_type_rate[$tour_class_id][$visitor_age_type][$tour_number_infant_id] : 0;
					} else {
						$visitor_height_type = $key;

						$price_value = $price_adults > 0 ? $price[$tour_visitor_infant_id][$tour_class_id][$visitor_height_type][$tour_number_infant_id] : 0;

						$price_type = $price_value > 0 ? $price_type_rate[$tour_class_id][$visitor_height_type][$tour_number_infant_id] : 0;
					}

					if ($price_type == 0) {
						$price_infant = $price_value;
					} else {
						$price_infant = round($price_value * $price_adults / 100);
					}

					$price_infant = ($price_infant > 0) ? $price_infant : 0;
					$total_price_infants += $price_infant * $value;

					$arr_price_infant[] = [
						'text'	=>	$clsTourOption->getTitle($key),
						'number'	=>	$value,
						'price'		=>	$price_infant,
						'total_price'		=>	$price_infant * $value,
					];
					if ($price_infant == 0) {
						$check_contact = 1;
						$check_contact_infant = 1;
					}
					unset($price_infant);
				}
			} elseif ($lstTourStartDate[0]['price_type'] == 0) { //TH không set giá trong departure date, lấy giá trong mục bảng giá
				$price_adults = $clsTourPriceGroup->getPriceBooking($tour_id, $tour_class_id, $tour_number_adults_id, $tour_visitor_adult_id, 0);
				$oneTour = $clsTour->getOne($tour_id, 'visitorage_child,visitorheight_child,visitorage_infant,visitorheight_infant');
				if ($oneTour['visitorage_child'] != '') {
					$array_visitor_child = Input::post("visitorAge_child", array());
					$type_child = "AGE";
				} elseif ($oneTour['visitorheight_child'] != '') {
					$array_visitor_child = Input::post("visitorHeight_child", array());
					$type_child = "HEIGHT";
				}

				if ($oneTour['visitorage_infant'] != '') {
					$array_visitor_infant = Input::post("visitorAge_infant", array());
					$type_infant = "AGE";
				} elseif ($oneTour['visitorheight_infant'] != '') {
					$array_visitor_infant = Input::post("visitorHeight_infant", array());
					$type_infant = "HEIGHT";
				}
				$arr_price_child = $arr_price_infant = [];
				$total_price_child = $total_price_infants = 0;
				$array_visitor_child = array_count_values($array_visitor_child);
				//list nhóm giá trẻ em
				foreach ($array_visitor_child as $key => $value) {
					$tour_number_child_id = $clsTourPriceGroup->getTourNumberGroup($tour_visitor_child_id, $value, $tour_id);

					if ($type_child == "AGE") {
						$visitor_age_type = $key;
						$visitor_height_type = 0;
					} else {
						$visitor_age_type = 0;
						$visitor_height_type = $key;
					}
					$list_price_child = $price_adults > 0 ? $clsTourPriceGroup->getPriceBookingChildInfant($tour_id, $tour_class_id, $tour_number_child_id, $tour_visitor_child_id, $visitor_age_type, $visitor_height_type, 0) : 0;

					$price_type = $list_price_child['price_type'];
					$price_value = $list_price_child['price'];
					if ($price_type == 0) {
						$price_child = $price_value;
					} else {
						$price_child = round($price_value * $price_adults / 100);
					}
					$price_child = ($price_child > 0) ? $price_child : 0;
					$total_price_child += $price_child * $value;
					$arr_price_child[] = [
						'text'	=>	$clsTourOption->getTitle($key),
						'number'	=>	$value,
						'price'		=>	$price_child,
						'total_price'		=>	$price_child * $value,
					];
					if ($price_child == 0) {
						$check_contact = 1;
						$check_contact_child = 1;
					}
					unset($price_child);
				}
				$array_visitor_infant = array_count_values($array_visitor_infant);
				//list nhóm giá em bé
				foreach ($array_visitor_infant as $key => $value) {
					$tour_number_infant_id = $clsTourPriceGroup->getTourNumberGroup($tour_visitor_infant_id, $value, $tour_id);
					if ($type_infant == "AGE") {
						$visitor_age_type = $key;
						$visitor_height_type = 0;
					} else {
						$visitor_age_type = 0;
						$visitor_height_type = $key;
					}

					$list_price_infant = $price_adults > 0 ? $clsTourPriceGroup->getPriceBookingChildInfant($tour_id, $tour_class_id, $tour_number_infant_id, $tour_visitor_infant_id, $visitor_age_type, $visitor_height_type, 0) : 0;
					$price_type = $list_price_infant['price_type'];
					$price_value = $list_price_infant['price'];
					if ($price_type == 0) {
						$price_infant = $price_value;
					} else {
						$price_infant = round($price_value * $price_adults / 100);
					}
					$price_infant = ($price_infant > 0) ? $price_infant : 0;
					$total_price_infants += $price_infant * $value;
					$arr_price_infant[] = [
						'text'	=>	$clsTourOption->getTitle($key),
						'number'	=>	$value,
						'price'		=>	$price_infant,
						'total_price'		=>	$price_infant * $value,
					];
					if ($price_infant == 0) {
						$check_contact = 1;
						$check_contact_infant = 1;
					}
					unset($price_infant);
				}
			}
		} else {
			$price_adults = 0;
			$price_child = 0;
			$price_infants = 0;
		}
	} else {
		$price_adults = $clsTourPriceGroup->getPriceBooking($tour_id, $tour_class_id, $tour_number_adults_id, $tour_visitor_adult_id, 0);
		$price_child = $price_adults > 0 ? $clsTourPriceGroup->getPriceBooking($tour_id, $tour_class_id, $tour_number_child_id, $tour_visitor_child_id, 0) : 0;
		$price_infants = $price_adults > 0 ? $clsTourPriceGroup->getPriceBooking($tour_id, $tour_class_id, $tour_number_infants_id, $tour_visitor_infant_id, 0) : 0;

		$oneTour = $clsTour->getOne($tour_id, 'visitorage_child,visitorheight_child,visitorage_infant,visitorheight_infant');

		if ($oneTour['visitorage_child'] != '') {

			$array_visitor_child = Input::post("visitorAge_child", array());
			$type_child = "AGE";
		} elseif ($oneTour['visitorheight_child'] != '') {
			$array_visitor_child = Input::post("visitorHeight_child", array());
			$type_child = "HEIGHT";
		}

		if ($oneTour['visitorage_infant'] != '') {
			$array_visitor_infant = Input::post("visitorAge_infant", array());
			$type_infant = "AGE";
		} elseif ($oneTour['visitorheight_infant'] != '') {
			$array_visitor_infant = Input::post("visitorHeight_infant", array());
			$type_infant = "HEIGHT";
		}
		$arr_price_child = $arr_price_infant = [];
		$total_price_child = $total_price_infants = 0;
		$array_visitor_child = array_count_values($array_visitor_child);
		//list nhóm giá trẻ em
		foreach ($array_visitor_child as $key => $value) {
			$tour_number_child_id = $clsTourPriceGroup->getTourNumberGroup($tour_visitor_child_id, $value, $tour_id);

			if ($type_child == "AGE") {
				$visitor_age_type = $key;
				$visitor_height_type = 0;
			} else {
				$visitor_age_type = 0;
				$visitor_height_type = $key;
			}
			$list_price_child = $price_adults > 0 ? $clsTourPriceGroup->getPriceBookingChildInfant($tour_id, $tour_class_id, $tour_number_child_id, $tour_visitor_child_id, $visitor_age_type, $visitor_height_type, 0) : 0;


			$price_type = $list_price_child['price_type'];
			$price_value = $list_price_child['price'];
			if ($price_type == 0) {
				$price_child = $price_value;
			} else {
				$price_child = round($price_value * $price_adults / 100);
			}
			$price_child = ($price_child > 0) ? $price_child : 0;
			$total_price_child += $price_child * $value;
			$arr_price_child[] = [
				'text'	=>	$clsTourOption->getTitle($key),
				'number'	=>	$value,
				'price'		=>	$price_child,
				'total_price'		=>	$price_child * $value,
			];
			if ($price_child == 0) {
				$check_contact = 1;
				$check_contact_child = 1;
			}
			unset($price_child);
		}
		$array_visitor_infant = array_count_values($array_visitor_infant);
		//list nhóm giá em bé
		foreach ($array_visitor_infant as $key => $value) {
			$tour_number_infant_id = $clsTourPriceGroup->getTourNumberGroup($tour_visitor_infant_id, $value, $tour_id);
			if ($type_infant == "AGE") {
				$visitor_age_type = $key;
				$visitor_height_type = 0;
			} else {
				$visitor_age_type = 0;
				$visitor_height_type = $key;
			}
			$list_price_infant = $price_adults > 0 ? $clsTourPriceGroup->getPriceBookingChildInfant($tour_id, $tour_class_id, $tour_number_infant_id, $tour_visitor_infant_id, $visitor_age_type, $visitor_height_type, 0) : 0;


			$price_type = $list_price_infant['price_type'];
			$price_value = $list_price_infant['price'];
			if ($price_type == 0) {
				$price_infant = $price_value;
			} else {
				$price_infant = round($price_value * $price_adults / 100);
			}
			$price_infant = ($price_infant > 0) ? $price_infant : 0;
			$total_price_infants += $price_infant * $value;
			$arr_price_infant[] = [
				'text'	=>	$clsTourOption->getTitle($key),
				'number'	=>	$value,
				'price'		=>	$price_infant,
				'total_price'		=>	$price_infant * $value,
			];
			if ($price_infant == 0) {
				$check_contact = 1;
				$check_contact_infant = 1;
			}
			unset($price_infant);
		}
	}
	#

	$price_room = 0;
	$lstPriceRoom = $lst_room = [];
	if (count($room_id) > 0) {
		$listPriceRoom = $clsTourPriceGroup->getAll("is_trash=0 and tour_id='" . $tour_id . "' and tour_room_id IN (" . implode(',', $room_id) . ")", "price,tour_room_id");
		foreach ($listPriceRoom as $key => $value) {
			$lstPriceRoom[$value['tour_room_id']] = $value['price'];
		}

		foreach ($room_id as $key => $id_room) {
			$price_room = ($lstPriceRoom[$id_room] && $lstPriceRoom[$id_room] != 0) ? $lstPriceRoom[$id_room] : 0;
			$lst_room[] = [
				'room_id' => $id_room,
				'number_room' => $number_room[$key],
				'price_room' => $price_room,
				'total_price_room' => (int)$lstPriceRoom[$id_room] * (int)$number_room[$key]
			];
			if ($number_room[$key]) {
				if ($price_room == 0) {
					$check_contact = 1;
				}
				unset($price_room);
			}
		}
	}

	$assign_list['lstPriceRoom'] = $lstPriceRoom;
	$assign_list['lst_room'] = $lst_room;

	$total_price_adults = $price_adults * $number_adults;
	#
	$total_price = $total_price_adults + $total_price_child + $total_price_infants + array_sum(array_column($lst_room, "total_price_room"));
	if ($discount_type == 2) {
		$price_promotion = $total_price / 100 * $promotion;
	} else {
		$price_promotion = $promotion;
	}

	$total_price_promotion = $total_price - $price_promotion;
	$price_deposit = $total_price_promotion / 100 * $deposit;

	$assign_list["lstOption"] = $lstOption;
	$assign_list["str_check_in_book"] = $str_check_in_book;
	$assign_list["check_contact"] = $check_contact;
	$assign_list["check_contact_child"] = $check_contact_child;
	$assign_list["check_contact_infant"] = $check_contact_infant;
	$assign_list["check_in_book"] = $check_in_book;
	$assign_list["is_last_hour"] = $is_last_hour;
	$assign_list["tour_id"] = $tour_id;
	$assign_list["tour_class_id"] = $tour_class_id;
	$assign_list["number_adults"] = $number_adults;
	$assign_list["number_child"] = $number_child;
	$assign_list["number_infants"] = $number_infants;
	$assign_list["price_adults"] = $price_adults;
	$assign_list["price_child"] = $price_child;
	$assign_list["arr_price_child"] = $arr_price_child;
	$assign_list["arr_price_infant"] = $arr_price_infant;
	$assign_list["str_price_child"] = serialize($arr_price_child);
	$assign_list["str_price_infant"] = serialize($arr_price_infant);
	$assign_list["str_list_room"] = serialize($lst_room);
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
	$assign_list["number_room"] = array_sum($number_room);
	$assign_list["list_number_room"] = implode(',', $number_room);
	//    $assign_list["room_id"] = implode(',',$room_id);
	$assign_list["list_room_id"] = implode(',', array_column($lst_room, 'room_id'));
	$assign_list["total_price_room"] =  array_sum(array_column($lst_room, "total_price_room"));

	if ($clsISO->getCheckActiveModulePackage($package_id, 'booking', 'booking_tour', 'default')) {
		$html = $core->build('loadTablePrice.tpl');
	} else {
		$html = $core->build('loadTableContactPrice.tpl');
	}
	echo $html;
	die();
}

function default_tag()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $extLang, $cat_id, $tag_id;
}
function default_place_inbound()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $clsISO, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain, $deviceType, $country_id, $package_id, $country_vn_id, $city_id, $min_duration_value, $max_duration_value, $min_price_value, $max_price_value, $min_duration_search, $max_duration_search;

	$clsCountry = new Country();
	$assign_list["clsCountry"] = $clsCountry;
	$clsCity = new City();
	$assign_list["clsCity"] = $clsCity;
	$clsCityStore = new CityStore();
	$assign_list["clsCityStore"] = $clsCityStore;
	$clsGuide = new Guide();
	$assign_list["clsGuide"] = $clsGuide;
	$clsGuide2 = new Guide2();
	$assign_list["clsGuide2"] = $clsGuide2;
	$clsGuideCat = new GuideCat();
	$assign_list["clsGuideCat"] = $clsGuideCat;
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsTourCategory = new TourCategory();
	$assign_list["clsTourCategory"] = $clsTourCategory;
	$clsRegion = new Region();
	$assign_list["clsRegion"] = $clsRegion;
	$clsReview = new Reviews();
	$assign_list["clsReview"] = $clsReview;
	$clsPagination = new Pagination();
	$assign_list["clsPagination"] = $clsPagination;
	$clsPromotion = new Promotion();
	$assign_list["clsPromotion"] = $clsPromotion;

	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;
	$slug_city = isset($_GET['slug_city']) ? $_GET['slug_city'] : '';

	$action = isset($_GET['action']) ? $_GET['action'] : '';
	$assign_list["action"] = $action;
	$city_filter_id = isset($_GET['city_filter_id']) ? $_GET['city_filter_id'] : 0;
	$country_filter_id = isset($_GET['country_filter_id']) ? $_GET['country_filter_id'] : 0;
	$departure_point_id = isset($_GET['departure_point_id']) ? $_GET['departure_point_id'] : 0;

	$res = $clsCity->getAll("is_trash=0 and is_online=1 and slug='$slug_city' LIMIT 0,1", $clsCity->pkey . ',title,banner,intro,content');
	$city_id = $res[0][$clsCity->pkey];
	if (intval($city_id) == 0) {
		header('Location:' . PCMS_URL . $extLang);
		exit();
	}
	$assign_list['itemCity'] = $res[0];
	$assign_list['city_id'] = $city_id;
	$country_id = $country_vn_id;
	$cond = "is_trash=0 and is_online=1";
	$orderby = " order by order_no asc";

	$lstGuideCat = $clsGuideCat->getAll($cond . $orderby, $clsGuideCat->pkey . 'intro,title,image');
	$guidecat_id1 = $lstGuideCat[0]['guidecat_id'];
	$lstGuide = $clsGuide->getAll($cond . " and cat_id='$guidecat_id1' and country_id='$country_id' and city_id='$city_id'" . $orderby, $clsGuide->pkey . ',slug,title,publish_date');
	$totalguide = $lstGuide;
	$totalguide = $totalguide ? count($totalguide) : '0';

	$lstRegion = $clsRegion->getAll($cond . " and country_id='$country_id'" . $orderby, $clsRegion->pkey . ",title");


	$lstTourCat = $clsTourCategory->getAll($cond . $orderby, $clsTourCategory->pkey . ",title");

	$cond = "is_trash=0 and is_online=1";


	if ($country_id > 0 && empty($country_filter_id)) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and country_id='$country_id')";
	}

	if ($city_id && empty($city_filter_id)) {
		$cond .= " and tour_id in (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE country_id='$country_id' and city_id='$city_id')";
	}




	//    $listTourMaxMin = $clsTour->getAll($cond,"max(number_day) as max,min(number_day) as min");
	$listTourMaxMin = $clsTour->getAll("is_trash=0 and is_online=1", "max(number_day) as max,min(number_day) as min");
	$min_duration_value = $listTourMaxMin[0]['min'];
	$max_duration_value = $listTourMaxMin[0]['max'];



	//	$listpriceMaxMin = $clsTour->getAll($cond,"max(min_price) as max,min(min_price) as min");
	$listpriceMaxMin = $clsTour->getAll("is_trash=0 and is_online=1", "max(min_price) as max,min(min_price) as min");
	//	var_dump($listpriceMaxMin);die;
	$min_price_value = $listpriceMaxMin[0]['min'];
	$max_price_value = $listpriceMaxMin[0]['max'];



	$orderBy = " order by order_no asc";
	if ($deviceType == 'tablet') {
		$recordPerPage = 14;
	} else {
		$recordPerPage = 15;
	}
	$currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;


	$min_duration_search = isset($_GET['min_duration']) ? $_GET['min_duration'] : $min_duration_value;
	$max_duration_search = isset($_GET['max_duration']) ? $_GET['max_duration'] : $max_duration_value;

	$assign_list['min_duration_value'] = $min_duration_value ? $min_duration_value : 0;
	$assign_list['max_duration_value'] = $max_duration_value ? $max_duration_value : 0;

	$assign_list["min_duration_search"] = $min_duration_search ? $min_duration_search : 0;
	$assign_list["max_duration_search"] = $max_duration_search ? $max_duration_search : 0;

	if ($min_duration_search > 0 && $max_duration_search > 0) {
		$cond .= " and number_day >='$min_duration_search' and number_day <='$max_duration_search'";
	} elseif ($min_duration_search == 0 && $max_duration_search > 0) {
		$cond .= " and number_day <='$max_duration_search'";
	} elseif ($min_duration_search > 0 && $max_duration_search == 0) {
		$cond .= " and number_day >='$min_duration_search'";
	}


	$min_price_search = isset($_GET['min_price']) ? $_GET['min_price'] : $min_price_value;
	$max_price_search = isset($_GET['max_price']) ? $_GET['max_price'] : $max_price_value;

	$assign_list["min_price_value"] = $min_price_value ? $min_price_value : 0;
	$assign_list["max_price_value"] = $max_price_value ? $max_price_value : 0;

	$assign_list["min_price_search"] = $min_price_search ? $min_price_search : 0;
	$assign_list["max_price_search"] = $max_price_search ? $max_price_search : 0;

	if ($min_price_search > 0 && $max_price_search > 0) {
		$cond .= " and min_price >='$min_price_search' and min_price <='$max_price_search'";
	} elseif ($min_price_search == 0 && $max_price_search > 0) {
		$cond .= " and min_price <='$max_price_search'";
	} elseif ($min_price_search > 0 && $max_price_search == 0) {
		$cond .= " and min_price >='$min_price_search'";
	}

	if (!empty($country_filter_id)) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and country_id IN ($country_filter_id))";
		$assign_list["country_filter_id"] = $country_filter_id;
	}

	if (!empty($city_filter_id)) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and city_id IN ($city_filter_id))";
		$assign_list["city_filter_id"] = $city_filter_id;
	}

	if (!empty($departure_point_id)) {
		$departure_point_ID = explode(',', $departure_point_id);
		$cond .= " and (";
		for ($i = 0; $i < count($departure_point_ID); $i++) {
			if ($i == 0 && count($departure_point_ID) == 1) {
				$cond .= " (departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%')";
			} elseif (count($departure_point_ID) > 1 && $i < (count($departure_point_ID) - 1)) {
				$cond .= "(departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%') or ";
			} else {
				$cond .= "(departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%')";
			}
		}
		$cond .= ")";
		$assign_list["departure_point_id"] = $departure_point_id;
	}


	$order_by = " order by order_no ASC";
	$listAllTour = $clsTour->getAll($cond, $clsTour->pkey);
	$totalTour = $listAllTour ? count($listAllTour) : 0;

	$link_page = $clsISO->getLink('inbound') . $slug_city;
	$config = array(
		'total'	=> $totalTour,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html', '/', $link_page),
		'link_page_1'	=> $link_page
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);
	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	$totalPage = $clsPagination->getTotalPage();


	$lstTour = $clsTour->getAll($cond . $orderBy . $limit, $clsTour->pkey . ',departure_point_id,slug,title,image,duration_type,duration_custom,number_day,number_night');
	//print_r($cond.$orderBy.$limit); die();
	if (!$lstTour && $currentPage > 1) {
		header("Location: " . $link_page);
		exit();
	}

	$assign_list["totalTour"] = $totalTour;
	$assign_list["country_id"] = $country_id;
	$assign_list["lstGuideCat"] = $lstGuideCat;
	$assign_list["lstGuide"] = $lstGuide;
	$assign_list["lstTour"] = $lstTour;
	$assign_list["lstRegion"] = $lstRegion;
	$assign_list["lstTourCat"] = $lstTourCat;
	$assign_list['currentPage'] = $currentPage;
	$assign_list['totalguide'] = $totalguide;
	$assign_list['recordPerPage'] = $recordPerPage;
	$assign_list['totalPage'] = $totalPage;
	$assign_list['page_view'] = $page_view;


	/*=============Title & Description Page==================*/



	$title_page = $core->get_Lang('Domestic tours') . ' | ' . $res[0]['title'] . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
}
function default_tour_start_date()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $global_image_seo_page, $clsISO, $clsConfiguration;
	#
	$clsTour = new Tour();
	$assign_list['clsTour'] = $clsTour;
	$clsTourGroup = new TourGroup();
	$assign_list['clsTourGroup'] = $clsTourGroup;
	$clsTourStartDate = new TourStartDate();
	$assign_list['clsTourStartDate'] = $clsTourStartDate;
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsCityStore = new CityStore();
	$assign_list['clsCityStore'] = $clsCityStore;
	$clsTourDestination = new TourDestination;

	$tour_group_id = isset($_GET['tour_group_id']) ? intval($_GET['tour_group_id']) : 0;
	if (intval($tour_group_id) == 0) {
		header('location:' . PCMS_URL);
		exit();
	}
	$assign_list['tour_group_id'] = $tour_group_id;
	$lstTourGroup = $clsTourGroup->getAll('is_trash=0 and is_online=1 order by order_no ASC', $clsTourGroup->pkey);
	$assign_list['lstTourGroup'] = $lstTourGroup;
	unset($lstTourGroup);

	$lstTourStartDate = $clsTourStartDate->getAll("is_trash=0 and is_online=1 and start_date >= '" . time() . "' and tour_id IN(SELECT tour_id FROM " . DB_PREFIX . "tour_store) and tour_id IN(SELECT tour_id FROM " . DB_PREFIX . "tour where is_trash=0 and is_online=1 and tour_group_id='$tour_group_id') order by start_date asc", $clsTourStartDate->pkey . ',tour_id');
	$assign_list['lstTourStartDate'] = $lstTourStartDate;
	#departure
	$list_departure_points = array();
	foreach ($lstTourStartDate as $k => $v) {
		$list_departure_point_id = $clsTour->getOneField('list_departure_point_id', $v['tour_id']);
		$tmp = !empty($list_departure_point_id) ? $clsISO->getArrayByTextSlash($list_departure_point_id) : array();
		if (!empty($tmp)) {
			foreach ($tmp as $id) {
				if (!in_array($id, $list_departure_points)) {
					$list_departure_points[] = $id;
				}
			}
		}
	}

	$list_departure_points = implode(",", $list_departure_points);
	$lstDeparturePoint = $clsCityStore->getAll("is_trash=0 and type='DEPARTUREPOINT' and city_id IN (
		SELECT city_id FROM " . $clsCity->tbl . " 
		WHERE is_trash=0 and is_online=1 and `city_id` in ({$list_departure_points})
	)  order by order_no ASC");
	//	print_r($lstDeparturePoint);die();
	$assign_list['lstDeparturePoint'] = $lstDeparturePoint;
	unset($lstDeparturePoint);

	#$DURATION_HTML
	$cond = "is_trash=0 and is_online=1";
	$LISTALL = $lstTourStartDate;
	$TMP = '';
	$DURATION_HTML = '<option value="0">' . $core->get_Lang('Tour length') . '</option>';
	if (is_array($LISTALL) && count($LISTALL) > 0) {
		for ($i = 0; $i < count($LISTALL); $i++) {
			$tour_id = $clsTourStartDate->getOneField('tour_id', $LISTALL[$i][$clsTourStartDate->pkey]);
			$TMP .= $clsTour->getSelectTripDuration($tour_id) . '|';
		}
		$TMP = array_unique(explode('|', $TMP));
		if (is_array($TMP) && count($TMP) > 0) {
			sort($TMP, SORT_NUMERIC);
			foreach ($TMP as $key => $val) {
				if ($val != '' && $val != 'n/a') {
					$DURATION_HTML .= '<option value="' . $clsTour->convertDuration($val) . '">' . $val . '</option>';
				}
			}
		}
		unset($LISTALL);
	}
	$assign_list['DURATION_HTML'] = $DURATION_HTML;

	#CITY_HTML
	$LISTALL = $lstTourStartDate;
	$tmp = '';
	$TMP = '';
	$CITY_HTML = '<option value="0">' . $core->get_Lang('Điểm đến') . '</option>';
	if (is_array($LISTALL) && count($LISTALL) > 0) {
		$list_tour_id = array();
		foreach ($LISTALL as $k => $v) {
			$tour_id = $v['tour_id'];
			$tmp = !empty($tour_id) ? $clsISO->getArrayByTextSlash($tour_id) : array();
			if (!empty($tmp)) {
				foreach ($tmp as $id) {
					if (!in_array($id, $list_tour_id)) {
						$list_tour_id[] = $id;
					}
				}
			}
		}
		$list_tour_id = implode(",", $list_tour_id);
		$lstItems = $clsTourDestination->getAll("is_trash=0 and tour_id IN ($list_tour_id) and city_id IN (SELECT city_id from " . DB_PREFIX . "city WHERE is_trash=0 and is_online=1) order by order_no asc", $clsTourDestination->pkey . ',city_id');
		if (is_array($lstItems) && count($lstItems) > 0) {
			$list_city_id = array();
			foreach ($lstItems as $k => $v) {
				$city_id = $clsTourDestination->getOneField('city_id', $v[$clsTourDestination->pkey]);
				$tmp = !empty($city_id) ? $clsISO->getArrayByTextSlash($city_id) : array();

				if (!empty($tmp)) {
					foreach ($tmp as $id) {
						if (!in_array($id, $list_city_id)) {
							$list_city_id[] = $id;
						}
					}
				}
			}
			foreach ($list_city_id as $one_city) {
				$CITY_HTML .= '<option value="' . $one_city . '">' . $clsCity->getTitle($one_city) . '</option>';
			}
			unset($lstItems);
		}
		unset($LISTALL);
	}
	$assign_list['CITY_HTML'] = $CITY_HTML;

	#AVAILABLE_HTML
	$LISTALL = $lstTourStartDate;
	$TMP = '';
	$AVAILABLE_HTML = '<option value="0">' . $core->get_Lang('Ngày khởi hành') . '</option>';
	if (is_array($LISTALL) && count($LISTALL) > 0) {
		$list_start_date = array();
		foreach ($LISTALL as $k => $v) {
			$list_start_date_id = $clsTourStartDate->getOneField('start_date', $v['tour_start_date_id']);
			$tmp = !empty($list_start_date_id) ? $clsISO->getArrayByTextSlash($list_start_date_id) : array();
			if (!empty($tmp)) {
				foreach ($tmp as $id) {
					if (!in_array($id, $list_start_date)) {
						$list_start_date[] = $id;
					}
				}
			}
		}
		for ($i = 0; $i < count($list_start_date); $i++) {
			$AVAILABLE_HTML .= '<option value="' . $clsISO->formatDate($list_start_date[$i], '') . '">' . $clsISO->formatDate($list_start_date[$i], '') . '</option>';
		}
		unset($list_start_date);
	}
	$assign_list['AVAILABLE_HTML'] = $AVAILABLE_HTML;
	/*=============Title & Description Page==================*/
	$title_page = PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsConfiguration->getValue('ImageShareSocial');
	$assign_list["global_image_seo_page"] = $global_image_seo_page;
	/*=============Content Page==================*/
	unset($clsTour);
}
function default_ajload_list_tour_start_date()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $clsISO;
	#
	$clsTour = new Tour();
	$assign_list['clsTour'] = $clsTour;
	$clsTourGroup = new TourGroup();
	$assign_list['clsTourGroup'] = $clsTourGroup;
	$clsTourStartDate = new TourStartDate();
	$assign_list['clsTourStartDate'] = $clsTourStartDate;

	$tour_group_id = isset($_POST['tour_group_id']) ? intval($_POST['tour_group_id']) : 0;
	$departure_point_id = isset($_POST['departure_point_id']) ? intval($_POST['departure_point_id']) : 0;
	$duration_id = isset($_POST['duration_id']) ? intval($_POST['duration_id']) : 0;
	$city_id = isset($_POST['city_id']) ? intval($_POST['city_id']) : 0;
	$start_date = isset($_POST['start_date']) ? $_POST['start_date'] : '';
	$start_date = strtotime(str_replace('/', '-', $start_date));


	$cond = "is_trash=0 and is_online=1 and start_date >= '" . time() . "' and tour_id IN(SELECT tour_id FROM " . DB_PREFIX . "tour_store) and tour_id IN(SELECT tour_id FROM " . DB_PREFIX . "tour where is_trash=0 and is_online=1 and tour_group_id='$tour_group_id'";
	$order = " order by start_date asc";
	//	print_r($departure_point_id);die();
	$list_tour_id = array();
	foreach ($lstTourStartDate as $k => $v) {
		$tour_id = $v['tour_id'];
		//		print_r($tour_id);die();
		$tmp = !empty($tour_id) ? $clsISO->getArrayByTextSlash($tour_id) : array();
		//		print_r($tour_id);
		if (!empty($tmp)) {
			foreach ($tmp as $id) {
				if (!in_array($id, $list_tour_id)) {
					$list_tour_id[] = $id;
				}
			}
		}
	}
	$list_tour_id = implode(",", $list_tour_id);
	if (intval($departure_point_id) > 0 && $duration_id == 0) {
		$cond .= " and (departure_point_id = '$departure_point_id' or list_departure_point_id like '%|$departure_point_id|%'))";
	} elseif (intval($departure_point_id) > 0 && !empty($duration_id)) {
		$cond .= " and (departure_point_id = '$departure_point_id' or list_departure_point_id like '%|$departure_point_id|%')";
	} elseif (intval($departure_point_id) == 0 && $duration_id == 0 && $city_id == 0 && $start_date == 0) {
		$cond .= ")";
	}
	if (!empty($duration_id)) {
		$cond .= " and number_day IN($duration_id))";
	}
	if ($city_id > 0 && $departure_point_id > 0) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE city_id='$city_id')";
	} elseif ($city_id > 0 && $departure_point_id == 0 && $duration_id == 0) {
		$cond .= ") and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE city_id='$city_id')";
	} elseif ($city_id == 0 && $departure_point_id == 0 && $duration_id == 0 && $start_date > 0) {
		$cond .= ")";
	} elseif (intval($departure_point_id) == 0 && $duration_id == 0 && $city_id == 0 && $start_date == 0) {
		$cond .= "";
	}
	if ($start_date != '' || $start_date > 0) {
		$cond .= " and start_date='$start_date'";
	}
	//	print_r($cond.$order);die();
	$lstTourStartDate = $clsTourStartDate->getAll($cond . $order, $clsTourStartDate->pkey . ',tour_id');
	$assign_list['lstTourStartDate'] = $lstTourStartDate;
	//	print_r($lstTourStartDate);die();
	#
	$assign_list['tour_group_id'] = $tour_group_id;

	$html = $core->build('load_list_tour_strat_date.tpl');
	echo $html;
	die();
}
function default_listGuide()
{
	global $smarty, $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,
		$title_page, $description_page, $keyword_page, $clsISO;

	$clsGuide = new Guide();
	$smarty->assign('clsGuide', $clsGuide);

	$cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : 0;
	$country_id = isset($_POST['country_id']) ? $_POST['country_id'] : 0;
	$city_id = isset($_POST['city_id']) ? $_POST['city_id'] : 0;

	if ($city_id > 0) {
		$lstGuide = $clsGuide->getAll("is_trash=0 and is_online=1 and cat_id='$cat_id' and country_id='$country_id' and city_id='$city_id' order by order_no asc", $clsGuide->pkey);
	} else {
		$lstGuide = $clsGuide->getAll("is_trash=0 and is_online=1 and cat_id='$cat_id' and country_id='$country_id' order by order_no asc", $clsGuide->pkey);
	}

	$totalRecord = $lstGuide;
	$totalRecord = $totalRecord ? count($totalRecord) : '0';

	$smarty->assign('lstGuide', $lstGuide);
	$smarty->assign('totalRecord', $totalRecord);

	$html = $core->build('listGuide.tpl');
	echo $html;
	die();
}

function default_searchlocal()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $clsISO, $description_page, $keyword_page, $domain, $country_id, $country_vn_id, $cat_id, $deviceType;

	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsReview = new Reviews();
	$assign_list["clsReview"] = $clsReview;
	$clsCity = new City();
	$assign_list["clsCity"] = $clsCity;
	$clsCityStore = new CityStore();
	$assign_list["clsCityStore"] = $clsCityStore;
	$clsTourCategory = new TourCategory();
	$assign_list["clsTourCategory"] = $clsTourCategory;
	$clsPagination = new Pagination();
	$assign_list["clsPagination"] = $clsPagination;

	$listTourAsc = $clsTour->getAll("is_trash=0 and is_online=1 order by number_day asc", $clsTour->pkey . ",number_day");
	$listTourDesc = $clsTour->getAll("is_trash=0 and is_online=1 order by number_day desc", $clsTour->pkey . ",number_day");
	$listpriceAsc = $clsTour->getAll("is_trash=0 and is_online=1  order by min_price asc", $clsTour->pkey . ",min_price");
	$listpriceDesc = $clsTour->getAll("is_trash=0 and is_online=1  order by min_price desc", $clsTour->pkey . ",min_price");

	$min_duration = $listTourAsc[0]['number_day'];
	$max_duration = $listTourDesc[0]['number_day'];
	$min_price = $listpriceAsc[0]['min_price'];
	$max_price = $listpriceDesc[0]['min_price'];
	$city_id = isset($_GET['city_id']) ? $_GET['city_id'] : '';
	$tourcat_id = isset($_GET['tourcat_id']) ? $_GET['tourcat_id'] : '';

	$cond = "is_trash=0 and is_online=1";
	$orderBy = " order by order_no asc";

	if ($deviceType == 'tablet') {
		$recordPerPage = 14;
	} else {
		$recordPerPage = 15;
	}
	$pageNum = 15;
	$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

	$min_duration_search = isset($_GET['min_duration']) ? $_GET['min_duration'] : $min_duration;
	$max_duration_search = isset($_GET['max_duration']) ? $_GET['max_duration'] : $max_duration;
	$assign_list['min_duration'] = $min_duration;
	$assign_list['max_duration'] = $max_duration;

	$assign_list["min_duration_search"] = $min_duration_search;
	$assign_list["max_duration_search"] = $max_duration_search;

	if ($min_duration_search > 0 && $max_duration_search > 0) {
		$cond .= " and number_day >='$min_duration_search' and number_day <='$max_duration_search'";
	} elseif ($min_duration_search == 0 && $max_duration_search > 0) {
		$cond .= " and number_day <='$max_duration_search'";
	} elseif ($min_duration_search > 0 && $max_duration_search == 0) {
		$cond .= " and number_day >='$min_duration_search'";
	}

	//	print_r($cond);die();
	$assign_list['min_price'] = $min_price;
	$assign_list['max_price'] = $max_price;
	$min_price_search = isset($_GET['min_price']) ? $_GET['min_price'] : $min_price;
	$max_price_search = isset($_GET['max_price']) ? $_GET['max_price'] : $max_price;
	$assign_list["min_price_search"] = $min_price_search;
	$assign_list["max_price_search"] = $max_price_search;

	if ($min_price_search > 0 && $max_price_search > 0) {
		$cond .= " and min_price >='$min_price_search' and min_price <='$max_price_search'";
	} elseif ($min_price_search == 0 && $max_price_search > 0) {
		$cond .= " and min_price <='$max_price_search'";
	} elseif ($min_price_search > 0 && $max_price_search == 0) {
		$cond .= " and min_price >='$min_price_search'";
	}

	if ($city_id > 0) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and country_id='$country_vn_id' and city_id IN ($city_id))";
		$assign_list["city_id"] = $city_id;
	} else {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and country_id='$country_vn_id')";
	}

	if (!empty($tourcat_id)) {
		$cat_ID = explode(',', $tourcat_id);
		$cond .= " and (";
		for ($i = 0; $i < count($cat_ID); $i++) {
			if ($i == 0 && count($cat_ID) == 1) {
				$cond .= " (cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%')";
			} elseif (count($cat_ID) > 1 && $i < (count($cat_ID) - 1)) {
				$cond .= "(cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%') or ";
			} else {
				$cond .= "(cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%')";
			}
		}
		$cond .= ")";
	}

	$assign_list["cat_id"] = $tourcat_id;
	$lstTourCat = $clsTourCategory->getAll("is_trash=0 and is_online=1" . $orderBy);

	$assign_list["lstTourCat"] = $lstTourCat;

	$lstTourResult = $clsTour->getAll($cond . $orderBy, $clsTour->pkey);

	$totalTour = count($lstTourResult);
	$link_page = $extLang . '/du-lich-trong-nuoc/';
	$config = array(
		'total'	=> $totalTour,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html', '/', $link_page),
		'link_page_1'	=> $link_page
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);
	#
	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";

	$lstTourResult = $clsTour->getAll($cond . $orderBy . $limit, $clsTour->pkey);
	//	print_r($totalTour);die();
	$assign_list["lstTourResult"] = $lstTourResult;
	$assign_list['page_view'] = $page_view;
	unset($lstTourResult);
	unset($page_view);

	$assign_list['totalTour'] = $totalTour;
	$totalPage = $clsPagination->getTotalPage();
	//	print_r($totalPage);die();
	$assign_list['totalPage'] = $totalPage;

	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Tour trong nước') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
}
function default_place_outbound()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $clsISO, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain, $deviceType, $country_id, $package_id;
	global $min_duration_value, $max_duration_value, $min_price_value, $max_price_value, $min_duration_search, $max_duration_search;


	$clsCountry = new Country();
	$assign_list["clsCountry"] = $clsCountry;
	$clsCity = new City();
	$assign_list["clsCity"] = $clsCity;
	$clsCityStore = new CityStore();
	$assign_list["clsCityStore"] = $clsCityStore;
	$clsGuide = new Guide();
	$assign_list["clsGuide"] = $clsGuide;
	$clsGuideCat = new GuideCat();
	$assign_list["clsGuideCat"] = $clsGuideCat;
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsTourCategory = new TourCategory();
	$assign_list["clsTourCategory"] = $clsTourCategory;
	$clsRegion = new Region();
	$assign_list["clsRegion"] = $clsRegion;
	$clsReview = new Reviews();
	$assign_list["clsReview"] = $clsReview;
	$clsPagination = new Pagination();
	$assign_list["clsPagination"] = $clsPagination;
	$clsPromotion = new Promotion();
	$assign_list["clsPromotion"] = $clsPromotion;

	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;
	$slug_country = isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
	$slug_city = isset($_GET['slug_city']) ? $_GET['slug_city'] : '';

	$action = isset($_GET['action']) ? $_GET['action'] : '';
	$assign_list["action"] = $action;
	$city_filter_id = isset($_GET['city_filter_id']) ? $_GET['city_filter_id'] : 0;
	$country_filter_id = isset($_GET['country_filter_id']) ? $_GET['country_filter_id'] : 0;
	$departure_point_id = isset($_GET['departure_point_id']) ? $_GET['departure_point_id'] : 0;

	$res = $clsCountry->getAll("is_trash=0 and is_online=1 and slug='$slug_country' LIMIT 0,1", $clsCountry->pkey . ',title,banner,intro,content');
	$country_id = $res[0][$clsCountry->pkey];
	$assign_list['countryItem'] = $res[0];
	$res1 = $clsCity->getAll("is_trash=0 and is_online=1 and slug='$slug_city' LIMIT 0,1", $clsCity->pkey . ',title,banner,intro,content');
	$city_id = $res1[0][$clsCity->pkey];
	$assign_list['cityItem'] = $res1[0];
	if (intval($country_id) == 0) {
		header('Location:' . PCMS_URL . $extLang);
		exit();
	}

	$assign_list['country_id'] = $country_id;
	$assign_list['city_id'] = $city_id;
	$cond = "is_trash=0 and is_online=1";

	$orderby = " order by order_no asc";

	$currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;

	$lstGuideCat = $clsGuideCat->getAll($cond . $orderby, $clsGuideCat->pkey . ',title,intro');
	$guidecat2 = $lstGuideCat[0]['guidecat_id'];
	if ($city_id) {
		$lstGuide = $clsGuide->getAll($cond . " and cat_id='$guidecat2' and country_id='$country_id' and city_id='$city_id'" . $orderby, $clsGuide->pkey . ',title,slug,publish_date,intro');
	} else {
		$lstGuide = $clsGuide->getAll($cond . " and cat_id='$guidecat2' and country_id='$country_id'" . $orderby, $clsGuide->pkey . ',title,slug,publish_date,intro');
	}

	$totalguide = $lstGuide;
	$totalguide = $totalguide ? count($totalguide) : '0';
	$lstRegion = $clsRegion->getAll($cond . " and country_id='$country_id'" . $orderby, $clsRegion->pkey);

	$lstTourCat = $clsTourCategory->getAll($cond . $orderby, $clsTourCategory->pkey . ",title");



	$cond = "is_trash=0 and is_online=1";


	if ($country_id > 0 && empty($country_filter_id)) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and country_id='$country_id')";
	}

	if ($city_id && empty($city_filter_id)) {
		$cond .= " and tour_id in (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE country_id='$country_id' and city_id='$city_id')";
	}

	//    $listTourMaxMin = $clsTour->getAll($cond,"max(number_day) as max,min(number_day) as min");
	$listTourMaxMin = $clsTour->getAll("is_trash=0 and is_online=1", "max(number_day) as max,min(number_day) as min");
	$min_duration_value = $listTourMaxMin[0]['min'];
	$max_duration_value = $listTourMaxMin[0]['max'];



	//	$listpriceMaxMin = $clsTour->getAll($cond,"max(min_price) as max,min(min_price) as min");
	$listpriceMaxMin = $clsTour->getAll("is_trash=0 and is_online=1", "max(min_price) as max,min(min_price) as min");
	$min_price_value = $listpriceMaxMin[0]['min'];
	$max_price_value = $listpriceMaxMin[0]['max'];



	$orderBy = " order by order_no asc";
	if ($deviceType == 'tablet') {
		$recordPerPage = 14;
	} else {
		$recordPerPage = 15;
	}
	$currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;


	$min_duration_search = isset($_GET['min_duration']) ? $_GET['min_duration'] : $min_duration_value;
	$max_duration_search = isset($_GET['max_duration']) ? $_GET['max_duration'] : $max_duration_value;

	$assign_list['min_duration_value'] = $min_duration_value ? $min_duration_value : 0;
	$assign_list['max_duration_value'] = $max_duration_value ? $max_duration_value : 0;

	$assign_list["min_duration_search"] = $min_duration_search ? $min_duration_search : 0;
	$assign_list["max_duration_search"] = $max_duration_search ? $max_duration_search : 0;

	if ($min_duration_search > 0 && $max_duration_search > 0) {
		$cond .= " and number_day >='$min_duration_search' and number_day <='$max_duration_search'";
	} elseif ($min_duration_search == 0 && $max_duration_search > 0) {
		$cond .= " and number_day <='$max_duration_search'";
	} elseif ($min_duration_search > 0 && $max_duration_search == 0) {
		$cond .= " and number_day >='$min_duration_search'";
	}


	$min_price_search = isset($_GET['min_price']) ? $_GET['min_price'] : $min_price_value;
	$max_price_search = isset($_GET['max_price']) ? $_GET['max_price'] : $max_price_value;

	$assign_list["min_price_value"] = $min_price_value ? $min_price_value : 0;
	$assign_list["max_price_value"] = $max_price_value ? $max_price_value : 0;

	$assign_list["min_price_search"] = $min_price_search ? $min_price_search : 0;
	$assign_list["max_price_search"] = $max_price_search ? $max_price_search : 0;


	if ($min_price_search > 0 && $max_price_search > 0) {
		$cond .= " and min_price >='$min_price_search' and min_price <='$max_price_search'";
	} elseif ($min_price_search == 0 && $max_price_search > 0) {
		$cond .= " and min_price <='$max_price_search'";
	} elseif ($min_price_search > 0 && $max_price_search == 0) {
		$cond .= " and min_price >='$min_price_search'";
	}

	if (!empty($country_filter_id)) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and country_id IN ($country_filter_id))";
		$assign_list["country_filter_id"] = $country_filter_id;
	}

	if (!empty($city_filter_id)) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and city_id IN ($city_filter_id))";
		$assign_list["city_filter_id"] = $city_filter_id;
	}

	if (!empty($departure_point_id)) {
		$departure_point_ID = explode(',', $departure_point_id);
		$cond .= " and (";
		for ($i = 0; $i < count($departure_point_ID); $i++) {
			if ($i == 0 && count($departure_point_ID) == 1) {
				$cond .= " (departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%')";
			} elseif (count($departure_point_ID) > 1 && $i < (count($departure_point_ID) - 1)) {
				$cond .= "(departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%') or ";
			} else {
				$cond .= "(departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%')";
			}
		}
		$cond .= ")";
		$assign_list["departure_point_id"] = $departure_point_id;
	}


	$order_by = " order by order_no ASC";
	$listAllTour = $clsTour->getAll($cond, $clsTour->pkey);
	$totalTour = $listAllTour ? count($listAllTour) : 0;

	if ($slug_city) {
		$link_page = $clsISO->getLink('outbound') . $slug_country . "/" . $slug_city;
	} else {
		$link_page = $clsISO->getLink('outbound') . $slug_country;
	}
	$config = array(
		'total'	=> $totalTour,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html', '/', $link_page),
		'link_page_1'	=> $link_page
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);
	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	$totalPage = $clsPagination->getTotalPage();

	//print_r($cond);die();

	$lstTour = $clsTour->getAll($cond . $orderBy . $limit, $clsTour->pkey . ',departure_point_id,slug,title,image,duration_type,duration_custom,number_day,number_night');
	if (!$lstTour && $currentPage > 1) {
		header("Location: " . $link_page);
		exit();
	}

	$assign_list["totalTour"] = $totalTour;
	$assign_list["country_id"] = $country_id;
	$assign_list["lstGuideCat"] = $lstGuideCat;
	$assign_list["lstGuide"] = $lstGuide;
	$assign_list["lstTour"] = $lstTour;
	$assign_list["lstRegion2"] = $lstRegion;
	$assign_list["lstTourCat"] = $lstTourCat;
	$assign_list['currentPage'] = $currentPage;
	$assign_list['totalTour'] = $totalTour;
	$assign_list['totalguide'] = $totalguide;
	$assign_list['recordPerPage'] = $recordPerPage;
	$assign_list['totalPage'] = $totalPage;
	$assign_list['page_view'] = $page_view;




	/*=============Title & Description Page==================*/
	$titleCity = '';
	if ($city_id) {
		$titleCity = ' | ' . $clsCity->getTitle($city_id, $cityItem);
	}
	if ($_LANG_ID == 'vn') {
		$title_page = $core->get_Lang('Du lịch nước ngoài') . ' | ' . $clsCountry->getTitle($country_id) . $titleCity . ' | ' . PAGE_NAME;
	} else {
		$title_page = $core->get_Lang('Destinations') . ' | ' . $clsCountry->getTitle($country_id) . $titleCity . ' | ' . PAGE_NAME;
	}

	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
}
function default_searchtour()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $clsISO, $description_page, $keyword_page, $domain, $deviceType;
	global $min_duration_value, $max_duration_value, $min_price_value, $max_price_value, $min_duration_search, $max_duration_search;


	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsReview = new Reviews();
	$assign_list["clsReview"] = $clsReview;
	$clsCity = new City();
	$assign_list["clsCity"] = $clsCity;
	$clsCityStore = new CityStore();
	$assign_list["clsCityStore"] = $clsCityStore;
	$clsCountry = new Country();
	$assign_list["clsCountry"] = $clsCountry;
	$clsTourCategory = new TourCategory();
	$assign_list["clsTourCategory"] = $clsTourCategory;
	$clsPagination = new Pagination();
	$assign_list["clsPagination"] = $clsPagination;
	$clsPromotion = new Promotion();
	$assign_list["clsPromotion"] = $clsPromotion;

	$city_id = isset($_GET['city_id']) ? $_GET['city_id'] : 0;
	$country_id = isset($_GET['country_id']) ? $_GET['country_id'] : 0;
	$tourcat_id = isset($_GET['tourcat_id']) ? $_GET['tourcat_id'] : 0;
	$keyword = (isset($_GET['key']) && !empty($_GET['key'])) ? $_GET['key'] : '';
	$departure_point_id = isset($_GET['departure_point_id']) ? $_GET['departure_point_id'] : 0;
	$city_id = isset($_GET['city_id']) ? $_GET['city_id'] : 0;
	$duration_id = isset($_GET['duration_id']) ? $_GET['duration_id'] : 0;


	$action = isset($_GET['action']) ? $_GET['action'] : '';
	$city_filter_id = isset($_GET['city_filter_id']) ? $_GET['city_filter_id'] : 0;
	$country_filter_id = isset($_GET['country_filter_id']) ? $_GET['country_filter_id'] : 0;




	if ($deviceType == 'tablet') {
		$recordPerPage = 14;
	} else {
		$recordPerPage = 15;
	}

	$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
	$cond = "is_trash=0 and is_online=1";

	if (!empty($duration_id)) {
		$ex_duration = explode('-', $duration_id);
		$cond .= ' and number_day=' . $ex_duration[0] . ' and number_night=' . $ex_duration[1];
		$assign_list['duration_id'] = $duration_id;
	}
	if ($keyword != '') {
		$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";
		$assign_list["keyword"] = $keyword;
	}


	if (!empty($departure_point_id) && $action != 'search') {
		$cond .= " and (departure_point_id='" . $departure_point_id . "' or list_departure_point_id like '%|" . $departure_point_id . "|%')";
		$assign_list['departure_point_id'] = $departure_point_id;
	}


	$listTourMaxMin = $clsTour->getAll($cond, "max(number_day) as max,min(number_day) as min");
	$min_duration_value = $listTourMaxMin ? $listTourMaxMin[0]['min'] : 0;
	$max_duration_value = $listTourMaxMin ? $listTourMaxMin[0]['max'] : 0;


	$listpriceMaxMin = $clsTour->getAll($cond, "max(min_price) as max,min(min_price) as min");
	$min_price_value = $listpriceMaxMin ? $listpriceMaxMin[0]['min'] : 0;
	$max_price_value = $listpriceMaxMin ? $listpriceMaxMin[0]['max'] : 0;


	$orderBy = " order by order_no asc";
	if ($deviceType == 'tablet') {
		$recordPerPage = 14;
	} else {
		$recordPerPage = 15;
	}
	$currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;

	if (!empty($departure_point_id) && $action == 'search') {
		$departure_point_ID = explode(',', $departure_point_id);
		$cond .= " and (";
		for ($i = 0; $i < count($departure_point_ID); $i++) {
			if ($i == 0 && count($departure_point_ID) == 1) {
				$cond .= " (departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%')";
			} elseif (count($departure_point_ID) > 1 && $i < (count($departure_point_ID) - 1)) {
				$cond .= "(departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%') or ";
			} else {
				$cond .= "(departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%')";
			}
		}
		$cond .= ")";
		$assign_list["departure_point_id"] = $departure_point_id;
	}


	if (!empty($tourcat_id)) {
		$cat_ID = explode(',', $tourcat_id);
		$cond .= " and (";
		for ($i = 0; $i < count($cat_ID); $i++) {
			if ($i == 0 && count($cat_ID) == 1) {
				$cond .= " (cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%')";
			} elseif (count($cat_ID) > 1 && $i < (count($cat_ID) - 1)) {
				$cond .= "(cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%') or ";
			} else {
				$cond .= "(cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%')";
			}
		}
		$cond .= ")";
		$assign_list["cat_id"] = $tourcat_id;
	}


	$min_duration_search = isset($_GET['min_duration']) ? $_GET['min_duration'] : $min_duration_value;
	$max_duration_search = isset($_GET['max_duration']) ? $_GET['max_duration'] : $max_duration_value;

	$min_duration_query = isset($_GET['min_duration']) ? $_GET['min_duration'] : '';
	$max_duration_query = isset($_GET['max_duration']) ? $_GET['max_duration'] : '';

	$assign_list['min_duration_value'] = $min_duration_value ? $min_duration_value : 0;
	$assign_list['max_duration_value'] = $max_duration_value ? $max_duration_value : 0;

	$assign_list["min_duration_search"] = $min_duration_search ? $min_duration_search : 0;
	$assign_list["max_duration_search"] = $max_duration_search ? $max_duration_search : 0;

	if ($min_duration_query > 0 && $max_duration_query > 0) {
		$cond .= " and number_day >='$min_duration_query' and number_day <='$max_duration_query'";
	} elseif ($min_duration_query == 0 && $max_duration_query > 0) {
		$cond .= " and number_day <='$max_duration_query'";
	} elseif ($min_duration_query > 0 && $max_duration_query == 0) {
		$cond .= " and number_day >='$min_duration_query'";
	}


	$min_price_search = isset($_GET['min_price']) ? $_GET['min_price'] : $min_price_value;
	$max_price_search = isset($_GET['max_price']) ? $_GET['max_price'] : $max_price_value;

	$min_price_query = isset($_GET['min_price']) ? $_GET['min_price'] : '';
	$max_price_query = isset($_GET['max_price']) ? $_GET['max_price'] : '';

	$assign_list["min_price_value"] = $min_price_value ? $min_price_value : 0;
	$assign_list["max_price_value"] = $max_price_value ? $max_price_value : 0;

	$assign_list["min_price_search"] = $min_price_search ? $min_price_search : 0;
	$assign_list["max_price_search"] = $max_price_search ? $max_price_search : 0;


	if ($min_price_query > 0 && $max_price_query > 0) {
		$cond .= " and min_price >='$min_price_query' and min_price <='max_price_query'";
	} elseif ($min_price_query == 0 && $max_price_query > 0) {
		$cond .= " and min_price <='$max_price_query'";
	} elseif ($min_price_query > 0 && $max_price_query == 0) {
		$cond .= " and min_price >='$min_price_query'";
	}

	if (!empty($country_filter_id)) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and country_id IN ($country_filter_id))";
		$assign_list["country_filter_id"] = $country_filter_id;
	}

	if (!empty($city_filter_id)) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and city_id IN ($city_filter_id))";
		$assign_list["city_filter_id"] = $city_filter_id;
	}


	$order_by = " order by order_no ASC";

	$totalRecord = $clsTour->getAll($cond, $clsTour->pkey);

	if ($totalRecord) {
		$totalRecord = count($totalRecord);
		$totalTour = $totalRecord;
	} else {
		$totalRecord = 0;
		$totalTour = 0;
	}

	$lnk = $_SERVER['REQUEST_URI'];
	if (isset($_GET['page'])) {
		$tmp = explode('&', $lnk);
		$n = count($tmp) - 1;
		$la_it = '&' . $tmp[$n];
		$str_len = -strlen($la_it);
		$link_page = substr($lnk, 0, $str_len);
	} else {
		$link_page = $lnk;
	}
	$assign_list["link_page"] = $link_page;

	$config = array(
		'total'	=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html', '/', $link_page),
		'link_page_1'	=> $link_page
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);

	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";

	$lstTourResult = $clsTour->getAll($cond . $order_by . $limit, $clsTour->pkey . ",departure_point_id,slug,title,image,duration_type,duration_custom,number_day,number_night");
	if (!$lstTourResult && $currentPage > 1) {
		header("Location: " . $link_page);
		exit();
	}



	$assign_list['totalTour'] = $totalTour;
	$assign_list['lstTourResult'] = $lstTourResult;
	unset($lstTourResult);
	$assign_list['page_view'] = $page_view;
	unset($page_view);
	$assign_list['totalPage'] = $clsPagination->getTotalPage();
	$assign_list['totalRecord'] = $totalRecord;


	if (1 == 2) {

		//	print_r($duration_id);die();
		$cond = "is_trash=0 and is_online=1";
		$orderBy = " order by order_no asc";
		if ($deviceType == 'tablet') {
			$recordPerPage = 14;
		} else {
			$recordPerPage = 15;
		}
		$currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;

		if (!empty($departure_point_id)) {
			$departure_point_ID = explode(',', $departure_point_id);
			$cond .= " and (";
			for ($i = 0; $i < count($departure_point_ID); $i++) {
				if ($i == 0 && count($departure_point_ID) == 1) {
					$cond .= " (departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%')";
				} elseif (count($departure_point_ID) > 1 && $i < (count($departure_point_ID) - 1)) {
					$cond .= "(departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%') or ";
				} else {
					$cond .= "(departure_point_id='" . $departure_point_ID[$i] . "' or list_departure_point_id like '%|" . $departure_point_ID[$i] . "|%')";
				}
			}
			$cond .= ")";
			$assign_list["departure_point_id"] = $departure_point_id;
		}

		if (!empty($duration_id)) {
			$ex_duration = explode('-', $duration_id);
			$max_duration_search = $ex_duration[0];
		} else {
			$min_duration_search = isset($_GET['min_duration']) ? $_GET['min_duration'] : $min_duration;
			$max_duration_search = isset($_GET['max_duration']) ? $_GET['max_duration'] : $max_duration;
		}

		$assign_list['min_duration'] = $min_duration;
		$assign_list['max_duration'] = $max_duration;

		$assign_list["min_duration_search"] = $min_duration_search;
		$assign_list["max_duration_search"] = $max_duration_search;

		if ($min_duration_search > 0 && $max_duration_search > 0) {
			$cond .= " and number_day >='$min_duration_search' and number_day <='$max_duration_search'";
		} elseif ($min_duration_search == 0 && $max_duration_search > 0) {
			$cond .= " and number_day <='$max_duration_search'";
		} elseif ($min_duration_search > 0 && $max_duration_search == 0) {
			$cond .= " and number_day >='$min_duration_search'";
		}

		$assign_list['min_price'] = $min_price;
		$assign_list['max_price'] = $max_price;
		$min_price_search = isset($_GET['min_price']) ? $_GET['min_price'] : $min_price;
		$max_price_search = isset($_GET['max_price']) ? $_GET['max_price'] : $max_price;
		$assign_list["min_price_search"] = $min_price_search;
		$assign_list["max_price_search"] = $max_price_search;

		if ($min_price_search > 0 && $max_price_search > 0) {
			$cond .= " and min_price >='$min_price_search' and min_price <='$max_price_search'";
		} elseif ($min_price_search == 0 && $max_price_search > 0) {
			$cond .= " and min_price <='$max_price_search'";
		} elseif ($min_price_search > 0 && $max_price_search == 0) {
			$cond .= " and min_price >='$min_price_search'";
		}

		if ($city_id > 0) {
			$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and city_id IN ($city_id))";
			$assign_list["city_id"] = $city_id;
		}
		if ($destination_id > 0) {
			$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and city_id IN ($destination_id) or country_id IN($destination_id))";
			$assign_list["destination_id"] = $destination_id;
			$assign_list["country_id"] = $destination_id;
		} elseif ($country_id > 0) {
			$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and country_id IN ($country_id))";
			$assign_list["country_id"] = $country_id;
		}

		if (!empty($duration_id)) {
			$ex_duration = explode('-', $duration_id);
			$cond .= ' and number_day=' . $ex_duration[0] . ' and number_night=' . $ex_duration[1];
			$assign_list['duration_id'] = $duration_id;
		}
		if ($keyword != '') {
			$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";
			$assign_list["keyword"] = $keyword;
		}
		$lstCity = $clsCityStore->getAll("is_trash=0  and type='DEPARTUREPOINT'" . $orderBy);
		//	print_r($lstCity);die();
		$lstCountry = $clsCountry->getAll("is_trash=0 and is_online=1 order by order_no asc");

		$assign_list["lstCountry"] = $lstCountry;
		$assign_list["lstCity"] = $lstCity;

		if (!empty($tourcat_id)) {
			$cat_ID = explode(',', $tourcat_id);
			$cond .= " and (";
			for ($i = 0; $i < count($cat_ID); $i++) {
				if ($i == 0 && count($cat_ID) == 1) {
					$cond .= " (cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%')";
				} elseif (count($cat_ID) > 1 && $i < (count($cat_ID) - 1)) {
					$cond .= "(cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%') or ";
				} else {
					$cond .= "(cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%')";
				}
			}
			$cond .= ")";
		}

		$assign_list["cat_id"] = $tourcat_id;
		$lstTourCat = $clsTourCategory->getAll("is_trash=0 and is_online=1" . $orderBy);
		$assign_list["lstTourCat"] = $lstTourCat;

		$lstTourResult = $clsTour->getAll($cond . $orderBy, $clsTour->pkey);

		if ($lstTourResult > 0) {
			$totalTour = count($lstTourResult);
		} else {
			$totalTour = 0;
		}

		$lnk = $_SERVER['REQUEST_URI'];
		if (isset($_GET['page'])) {
			$tmp = explode('&', $lnk);
			$n = count($tmp) - 1;
			$la_it = '&' . $tmp[$n];
			$str_len = -strlen($la_it);
			$link_page = substr($lnk, 0, $str_len);
		} else {

			$link_page = $lnk;
		}
		$assign_list["link_page"] = $link_page;
		$config = array(
			'total'	=> $totalTour,
			'number_per_page'	=> $recordPerPage,
			'current_page'	=> $currentPage,
			'link'	=> str_replace('.html', '/', $link_page),
			'link_page_1'	=> $link_page
		);

		$clsPagination->initianize($config);
		$page_view = $clsPagination->create_links(false);
		#
		$offset = ($currentPage - 1) * $recordPerPage;
		$limit = " LIMIT $offset,$recordPerPage";

		$lstTourResult = $clsTour->getAll($cond . $orderBy . $limit, $clsTour->pkey . ",departure_point_id,slug,title,image,duration_type,duration_custom,number_day,number_night");
		$assign_list["lstTourResult"] = $lstTourResult;
		$assign_list['page_view'] = $page_view;


		unset($page_view);

		$assign_list['totalTour'] = $totalTour;
		$totalPage = $clsPagination->getTotalPage();
		//	print_r($totalPage);die();
		$assign_list['totalPage'] = $totalPage;
	}


	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Search tours') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
}
function default_cat()
{
	global $assign_list, $smarty, $_CONFIG, $core, $dbconn, $mod, $act, $show, $_LANG_ID, $title_page, $description_page, $global_image_seo_page, $extLang, $cat_id, $country_id, $clsConfiguration, $clsISO, $deviceType;
	global $min_duration_value, $max_duration_value, $min_price_value, $max_price_value, $min_duration_search, $max_duration_search;
	#
	$clsTour = new Tour();
	$assign_list['clsTour'] = $clsTour;
	$clsTourCategory = new TourCategory();
	$assign_list['clsTourCategory'] = $clsTourCategory;
	$clsCountry = new Country();
	$assign_list['clsCountry'] = $clsCountry;
	$clsCategory_Country = new Category_Country();
	$assign_list['clsCategory_Country'] = $clsCategory_Country;
	$clsWhyTravelstyle = new WhyTravelstyle();
	$assign_list['clsWhyTravelstyle'] = $clsWhyTravelstyle;
	$clsBlog = new Blog();
	$assign_list['clsBlog'] = $clsBlog;
	$clsBlogCategory = new BlogCategory();
	$assign_list['clsBlogCategory'] = $clsBlogCategory;
	$clsFAQ = new FAQ();
	$assign_list['clsFAQ'] = $clsFAQ;
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsMonthCountry = new MonthCountry();
	$assign_list['clsMonthCountry'] = $clsMonthCountry;
	#
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;
	// $action = isset($_GET['action']) ? $_GET['action'] : '';
	// $assign_list['action'] = $action;
	#
	// Slug của danh mục trvs từ quốc gia
	$slug	= 	isset($_GET['slug']) ? $_GET['slug'] : '';
	// ID của danh mục trvs từ quốc gia
	$cat_id = 	isset($_GET['cat_id']) ? $_GET['cat_id'] : '';
	if ($cat_id == '') {
		header('location:' . PCMS_URL);
	}
	$smarty->assign('cat_id', $cat_id);
	#
	// Mảng dữ liệu của danh mục trvs từ quốc gia
	$oneItem	= 	$clsTourCategory->getOne($cat_id, $clsTourCategory->pkey . ',slug,title,intro');
	$smarty->assign('oneItem', $oneItem);
	#
	if ($show == 'CatCountry') {
		$slug_country 	= 	$_GET['slug_country'];
		$country_id 	=	$clsCountry->getBySlug($slug_country);
		$smarty->assign('country_id', $country_id);
	}
	#
	$cond	=	'is_trash = 0 AND is_online = 1';
	if (!empty($cat_id) && !empty($country_id)) {
		$cond	.=	' AND country_id = ' . $country_id . ' AND travelstyle_id = ' . $cat_id;
	}
	$order_by 	= 	' ORDER BY order_no ASC';
	$limit		=	' LIMIT 6';
	$arr_why_trvs_country	= 	$clsWhyTravelstyle->getAll($cond . $order_by . $limit, 'why_trvs_id');
	$smarty->assign('arr_why_trvs_country', $arr_why_trvs_country);
	$count_arr_why_trvs_country	=	count($arr_why_trvs_country);
	$smarty->assign('count_arr_why_trvs_country', $count_arr_why_trvs_country);
	#
	$list_blog	= 	$clsBlog->getAll(" is_trash = 0 AND is_online = 1 AND country_id = $country_id ORDER BY order_no ASC LIMIT 3", 'blog_id, cat_id');
	$smarty->assign('list_blog', $list_blog);
	#
	// List FAQ from country
	$list_faq_country   =   $clsFAQ->getAll("is_trash = 0 AND is_online = 1 AND country_id = $country_id ORDER BY order_no ASC LIMIT 5");
	$smarty->assign('list_faq_country', $list_faq_country);
	#
	// Lấy data theo tháng và quốc gia
	$sql_month_country	=   "SELECT " . DB_PREFIX . "month_country.*, default_month.title, default_month.alias
							FROM " . DB_PREFIX . "month_country
							INNER JOIN default_month ON default_month_country.month_id = default_month.month_id
							WHERE default_month_country.lang_id = '' 
								AND default_month_country.is_trash = 0 
								AND default_month_country.is_online = 1 
								AND default_month_country.country_id = $country_id";
	$arr_month_country  =   $dbconn->getAll($sql_month_country);
	$smarty->assign('arr_month_country', $arr_month_country);
	// Lấy data theo tháng và thành phố
	$current_month	=	date("n", time());
	$sql_month_city	=   "SELECT city_id
						FROM " . DB_PREFIX . "city
						WHERE lang_id = '' 
							AND is_trash = 0 
							AND is_online = 1 
							AND country_id = $country_id
							AND (list_month_id LIKE '%|" . $current_month . "|%')";
	$arr_month_city =   $dbconn->getAll($sql_month_city);
	$smarty->assign('arr_month_city', $arr_month_city);
	#
	// $clsISO->dump($arr_month_city);
	#
	// Lấy title_cat làm thẻ meta title
	$title_cat	= 	$oneItem['title'];
	$assign_list['title_cat'] = $title_cat;
	#
	$cond2  =   'is_trash = 0 AND is_online = 1';
	// Lấy title và description why theo trvs by country
	if (!empty($country_id) && !empty($cat_id)) {
		$cond2  .=  " AND country_id = '$country_id' AND cat_id = '$cat_id'";
		$trvs_info    =   $clsCategory_Country->getAll($cond2 . $order_by, "trvs_why_description");
		$smarty->assign('trvs_why_description', $trvs_info[0]['trvs_why_description']);
	}
	/* =============Title & Description Page================== */
	$title_page = $title_cat . ' | ' . $core->get_Lang('Travelstyles') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $clsISO->getMetaDescription($cat_id, 'TourCategory', $oneItem);
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsISO->getPageImageShare($cat_id, 'TourCategory', $oneItem);
	$assign_list["global_image_seo_page"] = $global_image_seo_page;
	/* =============Content Page================== */
	unset($clsTourCategory);
	unset($clsTour);
}
function default_ajWhenToGo()
{
	global $assign_list, $smarty, $_CONFIG, $core, $dbconn, $mod, $act, $show, $_LANG_ID, $title_page, $description_page, $global_image_seo_page, $extLang, $cat_id, $country_id, $clsConfiguration, $clsISO, $deviceType;
	#
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	#
	$country_id	=	isset($_POST['country_id']) ? $_POST['country_id'] : '';
	$month_id	=	isset($_POST['month_id']) ? $_POST['month_id'] : '';
	#
	$html	=	'';
	if (!empty($country_id) && !empty($month_id)) {
		$sql_month_city	=   "SELECT city_id
							FROM " . DB_PREFIX . "city
							WHERE lang_id = '' 
								AND is_trash = 0 
								AND is_online = 1 
								AND country_id = $country_id
								AND (list_month_id LIKE '%|" . $month_id . "|%')";
		// $clsISO->dump($sql_month_city);
		// die;
		$arr_month_city =   $dbconn->getAll($sql_month_city);
		// $clsISO->dump($arr_month_city);
		// die;
		#
		$html	.=	'<div class="owl-carousel owl-theme aj_owl_when_vn">';
		foreach ($arr_month_city as $item) {
			$city_id	=	$item['city_id'];
			$html	.=	'
			<div class="item">
				<div class="des_item">
					<div class="des_item_image">
						<a href="' . $clsCity->getLink($city_id) . '" title="' . $clsCity->getTitle($city_id) . '">
							<img src="' . $clsCity->getImage($city_id, 424, 315) . '" alt="' . $clsCity->getTitle($city_id) . '" width="424" height="315" loading="lazy" />
						</a>
					</div>
					<div class="info">
						<h3><a href="' . $clsCity->getLink($city_id) . '" title="' . $clsCity->getTitle($city_id) . '">' . $clsCity->getTitle($city_id) . '</a></h3>
						<p class="map">
							<i class="fas fa-map-marker-alt"></i>' . $clsCity->getTitle($city_id) . ', Vietnam
						</p>
						<div class="description">' . $clsCity->getIntro($city_id) . '</div>
					</div>
					<div class="btn_link_act">
						<a href="' . $clsCity->getLink($city_id) . '" title="' . $clsCity->getTitle($city_id) . '">
							<span class="btn_mobile">SEE DETAILS</span>
							<i class="fa-solid fa-arrow-right-long"></i>
						</a>
					</div>
				</div>
			</div>
			';
		}
		$html	.=	'</div>';

		echo	$html;
		die;
	} else {
		echo	$html;
		die;
	}
}
function default_detaildeparture2()
{
	global $assign_list, $clsISO, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $global_image_seo_page, $tour_id;
	#
	$clsPromotion = new Promotion();
	$assign_list["clsPromotion"] = $clsPromotion;
	$clsTag = new Tag();
	$assign_list["clsTag"] = $clsTag;
	$clsHotel = new Hotel();
	$assign_list["clsHotel"] = $clsHotel;
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;

	$clsTourStore = new TourStore();
	$assign_list["clsTourStore"] = $clsTourStore;
	$clsCity = new City();
	$assign_list["clsCity"] = $clsCity;
	$clsTourCategory = new TourCategory();
	$assign_list['clsTourCategory'] = $clsTourCategory;
	$clsTourItinerary = new TourItinerary();
	$assign_list['clsTourItinerary'] = $clsTourItinerary;
	$clsTourImage = new TourImage();
	$assign_list["clsTourImage"] = $clsTourImage;

	$clsTourDestination = new TourDestination();
	$assign_list["clsTourDestination"] = $clsTourDestination;
	$clsTourStartDate = new TourStartDate();
	$assign_list['clsTourStartDate'] = $clsTourStartDate;

	$clsTourProperty = new TourProperty();
	$assign_list["clsTourProperty"] = $clsTourProperty;
	$clsProperty = new Property();
	$assign_list["clsProperty"] = $clsProperty;
	$clsTourExtension = new TourExtension();
	$assign_list["clsTourExtension"] = $clsTourExtension;
	$clsTransport = new Transport();
	$assign_list["clsTransport"] = $clsTransport;
	$clsWhy = new Why();
	$assign_list["clsWhy"] = $clsWhy;

	$clsTable = 'Tour';
	$assign_list["clsTable"] = $clsTable;
	#
	$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
	$tour_slug_id = $clsTour->getBySlug($slug);
	$tour_id = $_GET['tour_id'] ? $_GET['tour_id'] : '0';
	//print_r($tour_slug_id.'xxx'.$tour_id); die();
	if ($tour_slug_id != $tour_id || $clsTour->checkExitsId($tour_id) == '0') {
		header('location:' . PCMS_URL);
		exit();
	}
	$assign_list["tour_id"] = $tour_id;

	$table_id = $tour_id;
	$assign_list["table_id"] = $table_id;

	$oneItem = $clsTour->getOne($tour_id);
	$assign_list["oneItem"] = $oneItem;
	$tourcat_id = $oneItem['cat_id'];

	if ($oneItem['is_online'] == 0) {
		header('location:' . PCMS_URL);
		exit();
	}

	$assign_list["tourcat_id"] = $tourcat_id;
	$departure_point_id = $oneItem['departure_point_id'];
	$assign_list["departure_point_id"] = $departure_point_id;

	# Why with us
	$lstWhyWUs = $clsWhy->getAll("is_trash=0 order by order_no desc");
	$assign_list["lstWhyWUs"] = $lstWhyWUs;

	#- Image Tours
	$lstImage = $clsTourImage->getAll("is_trash=0 and table_id='$tour_id' and image<>'' order by order_no ASC", $clsTourImage->pkey);
	$assign_list["lstImage"] = $lstImage;
	unset($lstImage);

	#- Itinerary
	$lstItineraryTour = $clsTourItinerary->getAll("is_trash=0 and tour_id='$tour_id' and title_contingency='' order by order_no asc", $clsTourItinerary->pkey . ',image,content,tour_itinerary_id,transport,is_show_image,day,day2');
	$assign_list['lstItineraryTour'] = $lstItineraryTour;
	unset($lstItineraryTour);


	#- Custom Field
	$clsTourCustomField = new TourCustomField();
	$assign_list["clsTourCustomField"] = $clsTourCustomField;
	$listCustomField = $clsTourCustomField->getAll("tour_id='$tour_id' and fieldtype='CUSTOM' order by order_no ASC");
	$assign_list["listCustomField"] = $listCustomField;
	unset($listCustomField);

	#
	$clsHotel = new Hotel();
	$assign_list["clsHotel"] = $clsHotel;
	$clsTourHotel = new TourHotel();
	$assign_list['clsTourHotel'] = $clsTourHotel;

	#
	$lstNationality = $clsTourProperty->getAll("is_trash=0 and type='NATIONALITY' order by order_no asc");
	$assign_list["lstNationality"] = $lstNationality;
	$lstVisitorType = $clsTourProperty->getAll("is_trash=0 and type='VISITORTYPE' order by order_no asc");
	$assign_list["lstVisitorType"] = $lstVisitorType;

	#-- Tour Related
	$lstTourRelated = array();
	$lstTourExtension = $clsTourExtension->getAll("is_trash=0 and tour_1_id='$tour_id' and tour_2_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour WHERE is_trash=0 and is_online=1) order by order_no asc", "tour_2_id");
	$lstTourRelated = array();
	if (!empty($lstTourExtension)) {
		foreach ($lstTourExtension as $item) {
			$oneTmp = $clsTour->getOne($item['tour_2_id']);
			if ($tour_id != $item['tour_2_id'])
				$lstTourRelated[] = $oneTmp;
		}
	}
	$assign_list['lstTourRelated'] = $lstTourRelated;

	//print_r($lstTourRelated); die();

	$clsTourStartDate = new TourStartDate();
	$clsCity = new City();
	$assign_list["clsCity"] = $clsCity;
	$lstCityTours = $clsCity->getAll("is_trash=0 and is_online=1 and city_id IN (SELECT city_id FROM " . DB_PREFIX . "tour_destination) order by order_no desc");
	$assign_list['lstCityTours'] = $lstCityTours;
	#print_r($lstCityTours);die();
	unset($lstCityTours);

	$lstDestination = $clsTourDestination->getAll("is_trash=0 and tour_id='$tour_id' order by order_no asc");
	#
	if (!empty($lstDestination)) {
		$cond = "is_trash=0";
		$tmp = array();
		foreach ($lstDestination as $k => $v) {
			if (!in_array($v['city_id'], $tmp)) {
				$tmp[] = $v['city_id'];
			}
		}
		if (!empty($tmp)) {
			$query_in = implode(',', $tmp);
			$cond .= " and hotel_id IN (SELECT hotel_id FROM " . DB_PREFIX . "hotel WHERE city_id IN (" . $query_in . "))";
		}
		#
		$cond .= " order by order_no desc limit 0,6";

		$lstHotelRelated = $clsHotel->getAll($cond);
		$assign_list['lstHotelRelated'] = $lstHotelRelated;
		unset($lstGuideRelated);
	}

	if (isset($_POST['Hid']) && $_POST['Hid']) {
		$BOOK_VALUE = array();
		foreach ($_POST as $k => $v) {
			$BOOK_VALUE[$k] = $v;
		}
		vnSessionSetVar('BOOK_VALUE', $BOOK_VALUE);
		header('Location:' . $clsTour->getLinkBookExtra($tour_id));
		exit();
	}
	$listMonth = array();
	$now = time();
	$month = date('m', $now);
	$year = date('Y', $now);
	$year_next = ($year + 1);
	$month_next = 12;

	for ($i = intval($month); $i <= 12; $i++) {
		$listMonth[] = array(
			'month'	=> ($i < 10) ? '0' . $i : $i,
			'year'	=> $year
		);
	}
	for ($i = 1; $i < intval($month); $i++) {
		$listMonth[] = array(
			'month'	=> $i ? '0' . $i : $i,
			'year'	=> ($year + 1)
		);
	}
	for ($m = 1; $m < 3; $m++) {
		for ($i = intval($month); $i <= 12; $i++) {
			$listMonth[] = array(
				'month'	=> ($i < 10) ? '0' . $i : $i,
				'year'	=> $year + $m
			);
		}
		for ($i = 1; $i < intval($month); $i++) {
			$listMonth[] = array(
				'month'	=> $i ? '0' . $i : $i,
				'year'	=> ($year + $m + 1)
			);
		}
	}

	$check_tour_departure = $clsTourStore->checkExist($tour_id, "DEPARTURE");
	$assign_list["check_tour_departure"] = $check_tour_departure;
	$assign_list["listMonth"] = $listMonth;

	$start_date = '01/01/' . $year;
	$end_date = '12/31/' . $year;
	$start_date2 = '01/01/' . $year_next;
	$end_date2 = '12/31/' . $year_next;

	$lstTourStartDate = $clsTourStartDate->getAll("is_trash=0 and is_online=1 and start_date >= '" . time() . "' and tour_id ='$tour_id' and start_date >= '" . strtotime($start_date) . "' and start_date <= '" . strtotime($end_date) . "'" . " order by start_date ASC");
	$assign_list["lstTourStartDate"] = $lstTourStartDate;
	//print_r($lstTourStartDate); die();
	$lstTourStartDate2 = $clsTourStartDate->getAll("is_trash=0 and is_online=1 and start_date >= '" . time() . "' and tour_id ='$tour_id' and start_date >= '" . strtotime($start_date2) . "' and start_date <= '" . strtotime($end_date2) . "'" . " order by start_date ASC");


	$assign_list["lstTourStartDate2"] = $lstTourStartDate2;
	if (isset($_POST['BookingTour']) &&  $_POST['BookingTour'] == 'BookingTour') {
		$link = $clsTour->getLinkBookEn($tour_id);
		foreach ($_POST as $key => $val) {
			$link .= ($key == 'BookingTour') ? '' : '&' . $key . '=' . ($val != '' ? addslashes($val) : '0');
			$link = str_replace('&amp;', '&', $link);
		}
		vnSessionSetVar('Link_login_book', $link);
		header('location:' . $link);
		exit();
	}
	//	$aaaa = $clsTour->getPromotionIdPro($tour_id,'Tour');
	//	var_dump($aaaa);die();
	/*=============Title & Description Page==================*/
	$title_page = $clsTour->getTitle($tour_id) . ' | ' . $core->get_Lang('tours') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $clsISO->getMetaDescription($tour_id, 'Tour');
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsISO->getPageImageShare($tour_id, 'Tour');
	$assign_list["global_image_seo_page"] = $global_image_seo_page;
	$clsTour->updateMinPriceTour($tour_id);
}

function default_loadReview()
{
	global $assign_list, $_CONFIG, $core, $mod, $act, $title_page, $description_page, $keyword_page, $clsISO, $_lang, $extLang, $_LANG_ID, $clsISO;
	#
	$page = isset($_POST['page_Review']) ? $_POST['page_Review'] : 0;
	$tour_id = isset($_POST['tour_id']) ? $_POST['tour_id'] : 0;

	if ($page > 0 and $tour_id > 0) {
		$pageview =  $page + 1;
		$limit_start = $page * 5;
		$limit_end = $pageview * 5 + 1;
		$cond = "is_trash=0 and is_online=1 and table_id = '$tour_id' order by order_no DESC limit $limit_start , $limit_end ";
		$clsTour_Review = new TourReview();
		$arraylstReview = $clsTour_Review->getAll($cond, $clsTour_Review->pkey . ' , review_date');

		if ($clsTour_Review->countItem($cond) < 5) {
			$pageview  = 'NoNo';
		}
		$Html = '';
		if (!empty($arraylstReview)) {
			$stt = 0;
			foreach ($arraylstReview as $lstReview) {
				if ($stt++ < 6) {
					$Html .= '<li class="item">
		  <div class="block-rate-num text-center">
			  <label class="rate-number text-normal">
			  ' . $clsTour_Review->getRates($lstReview[$clsTour_Review->pkey]) . '</label>
			  <p class="cus-rate">
				  <strong class="block z_12">
				  ' . $clsTour_Review->getFullName($lstReview[$clsTour_Review->pkey]) . '
				  ,</strong>
				  <span class="z_10 block c6">
				  ' . $clsTour_Review->getCountry($lstReview[$clsTour_Review->pkey]) . '
				 ,</span>
				  <span class="z_10 block c6">
				  ' . $clsISO->converTimeToText($lstReview['review_date']) . '
				  </span>
			  </p>
		  </div>
		  <div class="cus-desc">
			  <h5 class="z_14 text-bold text-uppercase c2a">
			  ' . $clsTour_Review->getTitle($lstReview[$clsTour_Review->pkey]) . '</h5>
			  <div class="review-content">				
				  ' . html_entity_decode($clsTour_Review->getContent($lstReview[$clsTour_Review->pkey])) . '
			  </div>			                     
		  </div>
		  </li>';
				}
			}
		}
		echo $Html . '$$$' . $pageview;
		die();
	}
}
function default_bookgroup_2020()
{
	vnSessionDelVar('rq_link');
	global $assign_list, $_CONFIG, $core, $extLang, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $extLang, $adult, $child, $infant;
	global $clsISO, $clsConfiguration, $profile_id, $loggedIn, $agent_id, $adult_type_id, $child_type_id, $infant_type_id;
	#
	if (_ISOCMS_CLIENT_LOGIN == '2') {
		if (!$loggedIn) {
			$link = $extLang . '/account/signin/r=' . $_SERVER['REQUEST_URI'];
			header('Location:' . $link);
			exit();
		}
	}
	$cartSessionService = vnSessionGetVar('BookingTour');
	$cartSessionService = array_merge($cartSessionService);
	$assign_list['cartSessionService'] = $cartSessionService;

	$totalGrand = 0;
	$price_deposit = 0;
	$price_remaining = 0;
	$total_price = 0;

	if (!empty($cartSessionService)) {
		for ($i = 0; $i < count($cartSessionService); $i++) {
			$totalGrand += $cartSessionService[$i]['total_price_z'];
			$tour_id = $cartSessionService[$i]['tour_id_z'];
		}
	}
	$cartSessionPackage = array();
	$totalRemaining = $totalGrand - $price_deposit;

	$assign_list["cartSessionService"] = $cartSessionService;
	$assign_list["number_tour_id"] = $number_tour_id;

	$assign_list["totalRemaining"] = $totalRemaining;
	$assign_list["totalGrand"] = $totalGrand;
	$assign_list["departure_date"] = $departure_date;
	$assign_list["totalRoom"] = $totalRoom;
	$assign_list["price_remaining"] = $price_remaining;
	$assign_list["price_deposit"] = $price_deposit;

	//	print_r($cartSessionService);die();

	#
	$clsProperty = new Property();
	$assign_list["clsProperty"] = $clsProperty;
	$clsAddOnService = new AddOnService();
	$assign_list["clsAddOnService"] = $clsAddOnService;
	$clsTourProperty = new TourProperty();
	$assign_list["clsTourProperty"] = $clsTourProperty;
	$clsTourService = new TourService();
	$assign_list["clsTourService"] = $clsTourService;
	$clsTourOption = new TourOption();
	$assign_list["clsTourOption"] = $clsTourOption;
	$clsCountryBK = new _Country();
	$assign_list["clsCountryBK"] = $clsCountryBK;
	$lstCountry = $clsCountryBK->getAll("is_trash=0 order by order_no asc", $clsCountryBK->pkey);
	$assign_list["lstCountry"] = $lstCountry;
	unset($lstCountry);
	#
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsTourStore = new TourStore();
	$assign_list["clsTourStore"] = $clsTourStore;
	$clsTourStartDate = new TourStartDate();
	$assign_list["clsTourStartDate"] = $clsTourStartDate;
	$clsBooking = new Booking();
	$assign_list["clsBooking"] = $clsBooking;
	$clsProfile = new Profile();
	$assign_list['clsProfile'] = $clsProfile;
	$clsVoucher = new Voucher();
	$assign_list['clsVoucher'] = $clsVoucher;
	$clsPromotion = new Promotion();
	$assign_list['clsPromotionr'] = $clsPromotion;
	#
	$lstNationality = $clsTourProperty->getAll("is_trash=0 and type='NATIONALITY' order by order_no asc");
	$assign_list["lstNationality"] = $lstNationality;
	$lstVisitorType = $clsTourProperty->getAll("is_trash=0 and type='VISITORTYPE' order by order_no asc");
	$assign_list["lstVisitorType"] = $lstVisitorType;

	$listService = $clsTourService->getAll('is_trash=0 and is_online=1 order by order_no ASC');
	$assign_list["listService"] = $listService;

	#- Verify Captcha


	if (isset($_POST['booking']) && $_POST['booking'] == 'booking') {
		if (_ISOCMS_CAPTCHA == 'IMG') {
			$security_code = isset($_POST["security_code"]) ? trim($_POST["security_code"]) : '';
			$security_code = strtoupper($security_code);
			if ($security_code == '') {
				$err_msg .= '&bull; ' . $core->get_Lang('Please enter security code') . ' <br />';
			}
			if (!empty($security_code) && $security_code != $_SESSION['skey']) {
				$err_msg .= $core->get_Lang('Secure code not match') . ' <br />';
			}
		} else {
			if (!$clsISO->checkGoogleReCAPTCHA()) {
				$err_msg .= $core->get_Lang('Secure code not match') . ' <br />';
			}
		}
		$departure_date = isset($_POST['departure_date']) ? $_POST['departure_date'] : '';
		$num_day = $clsTour->getOneField('number_day', $tour_id);
		$end_date =  date('m/d/Y', strtotime('+' . $num_day . ' day', strtotime($departure_date)));

		$first_name = $_POST['first_name'];
		if ($first_name == '') {
			$err_msg .= '&bull; ' . $core->get_Lang('Please enter your first name') . ' <br />';
		}
		$last_name = $_POST['last_name'];
		if ($last_name == '') {
			$err_msg .= '&bull; ' . $core->get_Lang('Please enter your last name') . ' <br />';
		}
		$email = $_POST['email'];
		if ($email == '') {
			$err_msg .= '&bull; ' . $core->get_Lang('Please enter your email') . ' <br />';
		}
		if ($email != '' && !$clsISO->is_valid_email($email)) {
			$err_msg .= '&bull; ' . $core->get_Lang('Please enter your email valid') . ' <br />';
		}
		$telephone = $_POST['telephone'];
		if ($telephone == '') {
			$err_msg .= '&bull; ' . $core->get_Lang('Please enter your telephone') . ' <br />';
		}
		#
		if ($err_msg == '') {
			if (_ISOCMS_CLIENT_LOGIN == '2') {
				if (empty($profile_id)) {
					$res = $clsProfile->getAll("email = '$email' limit 0,1", $clsProfile->pkey);
					if (!empty($res)) {
						$profile_id = $res[0]['profile_id'];
						header('location: ' . DOMAIN_NAME . $extLang . '/account/signin.html');
						exit();
					} else {
						$profile_id = $clsProfile->getMaxID();
						$password = substr(strtoupper($clsProfile->encrypt('VietISO-' . time())), 0, 8);
						$userpass = $clsProfile->encrypt($password);
						#
						$full_name = $first_name . ' ' . $last_name;
						$fx = "$clsProfile->pkey,email,username,userpass,full_name,full_name_slug,ip_register,reg_date";
						$vx = "'" . $profile_id . "','" . $email . "','" . $email . "','" . $userpass . "','" . $full_name . "','" . $core->replaceSpace($full_name) . "','" . $_SERVER['REMOTE_ADDR'] . "','" . time() . "'";
						if ($clsProfile->insertOne($fx, $vx)) {
							$clsProfile->sendEmailRegisterMember($profile_id, $password);
						}
					}
				}
			}
			$booking_id = $clsBooking->getMaxId();
			$booking_code = $clsBooking->generateBookingCode($booking_id, 'Tour');
			#
			$full_name = $first_name . ' ' . $last_name;
			$f = "booking_id,target_id,title,contact_name,full_name,country_id,phone,email,take_care";
			$f .= ",clsTable,booking_code,booking_store,booking_type,reg_date,ip_booking,check_in,check_out,departure_date,totalgrand,deposit,balance";
			$POST = array();
			foreach ($_POST as $k => $v) {
				$POST[$k] = $v;
			}
			$POST['BOOK_VALUE'] = serialize($BOOK_VALUE);
			$POST['BOOK_ADDON'] = serialize($BOOK_ADDON);
			#
			$v = "'$booking_id'
			,'" . $tour_id . "'
			,'" . $_POST['title'] . "'
			,'" . $full_name . "'
			,'" . $full_name . "'
			,'" . $_POST['country_id'] . "'
			,'" . $_POST['telephone'] . "'
			,'" . $email . "'
			,'" . $_POST['please'] . "'
			,'Tour'
			,'$booking_code'
			,'" . serialize($POST) . "'
			,'Tour','" . time() . "'
			,'" . $_SERVER['REMOTE_ADDR'] . "'
			,'" . $departure_date . "'
			,'" . $end_date . "'
			,'" . strtotime($departure_date) . "'
			,'" . $clsISO->processFloatNumber(str_replace('.00', '', $_POST['price_total_amount'])) . "'
			,'" . $_POST['price_deposit'] . "' 
			,'" . $clsISO->processFloatNumber(str_replace('.00', '', $_POST['price_remaining'])) . "'";
			#
			if (PAYMENT_GLOBAL) {
				$f .= ",payment_method";
				$v .= ",'" . intval($_POST['payment_method']) . "'";
			}
			if (_ISOCMS_CLIENT_LOGIN) {
				$f .= ",member_id";
				$v .= ",'$profile_id'";
			}
			if (_IS_TRAVEL_AGENT) {
				$f .= ",agent_id";
				$v .= ",'$agent_id'";
			}

			//			$clsISO->print_pre($_POST['voucher_code'],true);die();
			if ($clsBooking->insertOne($f, $v)) {
				$link_request = $_SERVER['REQUEST_URI'];
				vnSessionSetVar('rq_link', $link_request);
				if ($_POST['voucher_code']) {
					$f1 = "first_name,last_name,promotion_code,`email`,`ip`,reg_date,is_trash";
					$v1 = "'" . $first_name . "','" . $last_name . "','" . $_POST['voucher_code'] . "','" . $email . "','" . $_SERVER['REMOTE_ADDR'] . "'," . time() . ",0";
					$clsVoucher->insertOne($f1, $v1);
					$promotion_id = $clsPromotion->getByPromotionCode($_POST['voucher_code']);
					$ticket = $clsPromotion->getDiscountValue($promotion_id, 2) - 1;
					$discount_val_new = $clsPromotion->getUpdateDiscountValueTicket($promotion_id, $ticket);
					$clsPromotion->updateOne($promotion_id, "discount_value='" . $discount_val_new . "'");
				}
				$clsBooking->sendEmailBookingTour2018($booking_id);
				if (PAYMENT_GLOBAL) {
					$clsBilling = new Billing();
					$clsBilling->initPay($booking_id);
				}
				header('location:' . $extLang . '/booking/tours/successful');
			} else {
				header('location:' . $extLang . '/booking/tours/error');
			}
		} else {
			$assign_list["err_msg"] = $err_msg;
			foreach ($_POST as $key => $val) {
				$assign_list[$key] = $val;
			}
		}
	}
	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Booking Tour') . ' | ' . $oneItem['title'] . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
}
function default_ajaxAddTourToCart()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $tour_id;


	$cartSessionService = vnSessionGetVar('BookingTour_' . $_LANG_ID);

	if (empty($cartSessionService)) {
		$cartSessionService = array();
	}
	$assign_list["BookingTour"] = $cartSessionService;

	$tp = $_POST['tp'];
	$tour_id_z = $_POST['tour_id'];
	if ($tp == 'DEL_PACKAGE') {
		unset($cartSessionService[$_LANG_ID][$tour_id_z]);

		vnSessionSetVar('BookingTour_' . $_LANG_ID, $cartSessionService);
		$exist = '_REMOVE';
	} else {
		$cartSessionService[$_LANG_ID][$tour_id] = array();
		foreach ($_POST as $k => $v) {
			$cartSessionService[$_LANG_ID][$tour_id][$k] = $v;
		}
		vnSessionSetVar('BookingTour_' . $_LANG_ID, $cartSessionService);
		$exist = '_SUCCESS';
	}


	echo $exist;
	die();
}
function default_customize()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $extLang;
	#
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$slug = $_GET['slug'];
	$tour_id = $clsTour->getBySlug($slug);
	if ($tour_id == '') {
		header('location:' . PCMS_URL . $extLang);
	}
	vnSessionSetVar('CUSTOMIZE_TOUR_ID', $tour_id);
	header('location:' . PCMS_URL . $extLang . '/tours/customize-tour/form.html');
}
function default_search()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain, $country_id, $city_id, $price_range_ID, $duration_ID, $cat_id;

	#
	$clsTourCategory = new TourCategory();
	$assign_list['clsTourCategory'] = $clsTourCategory;
	$clsTour = new Tour();
	$assign_list['clsTour'] = $clsTour;
	$clsTourStore = new TourStore();
	$assign_list['clsTourStore'] = $clsTourStore;
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsTransport = new Transport();
	$assign_list['clsTransport'] = $clsTransport;
	$clsReviews = new Reviews();
	$assign_list['clsReviews'] = $clsReviews;
	$clsPromotion = new Promotion();
	$assign_list['clsPromotion'] = $clsPromotion;
	$clsPriceRange = new PriceRange();
	$assign_list['clsPriceRange'] = $clsPriceRange;
	$clsPagination = new Pagination();
	#
	$destination_ID = isset($_GET['destination_ID']) ? $_GET['destination_ID'] : '';
	if (!empty($destination_ID)) {
		if (substr($destination_ID, 0, 1) == '0') {
			$country_id = (int) str_replace('0', '', $destination_ID);
		} else {
			$city_id = (int)$destination_ID;
		}
	}
	if ($destination_ID == '') {
		$country_id = isset($_GET['country_id']) ? $_GET['country_id'] : '';
		$city_id = isset($_GET['city__id']) ? $_GET['city__id'] : '';
	}
	//print_r($city_id); die();
	$cat_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : '';

	$min_duration = isset($_GET['min_duration']) ? $_GET['min_duration'] : '';
	$max_duration = isset($_GET['max_duration']) ? $_GET['max_duration'] : '';
	$activities_id = isset($_GET['activities_id']) ? $_GET['activities_id'] : '';
	$price_range_id = isset($_GET['price_range_id']) ? $_GET['price_range_id'] : '';
	$destination_id = isset($_GET['destination_id']) ? $_GET['destination_id'] : '';
	$duration_id = isset($_GET['duration_id']) ? $_GET['duration_id'] : '';
	$departure_point_id = isset($_GET['departure_point_id']) ? $_GET['departure_point_id'] : '';

	$keyword = (isset($_GET['key']) && !empty($_GET['key'])) ? $_GET['key'] : '';

	$recordPerPage = 6;
	$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
	#
	$cond = "is_trash=0 and is_online=1";
	$order_by = " order by order_no asc";
	#pagevieew

	if (intval($departure_point_id) > 0) {
		$cond .= " and (departure_point_id = '$departure_point_id' or list_departure_point_id like '%|$departure_point_id|%')";
		$assign_list["departure_point_id"] = $departure_point_id;
	}

	if ($country_id > 0) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and country_id IN ($country_id))";
		$assign_list["country_id"] = $country_id;
	}
	if ($destination_id > 0) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and city_id = '$destination_id')";
		$assign_list["destination_id"] = $destination_id;
	}

	if ($city_id > 0) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and city_id IN ($city_id))";
		$assign_list["city_id"] = $city_id;
	}
	if (!empty($cat_id)) {
		$cat_ID = explode(',', $cat_id);
		$cond .= " and (";
		for ($i = 0; $i < count($cat_ID); $i++) {
			if ($i == 0 && count($cat_ID) == 1) {
				$cond .= " (cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%')";
			} elseif (count($cat_ID) > 1 && $i < (count($cat_ID) - 1)) {
				$cond .= "(cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%') or ";
			} else {
				$cond .= "(cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%')";
			}
		}
		$cond .= ")";
	}

	$assign_list["cat_id"] = $cat_id;
	if (!empty($activities_id)) {
		$activities_ID = explode(',', $activities_id);
		$cond .= " and (";
		for ($i = 0; $i < count($activities_ID); $i++) {
			if ($i == 0 && count($activities_ID) == 1) {
				$cond .= " list_activities_id like '%" . $activities_ID[$i] . "%'";
			} elseif (count($activities_ID) > 1 && $i < (count($activities_ID) - 1)) {
				$cond .= " list_activities_id like '%|" . $activities_ID[$i] . "|%' or ";
			} else {
				$cond .= " list_activities_id like '%|" . $activities_ID[$i] . "|%'";
			}
		}
		$cond .= ")";
	}

	//print_r($cond);die();
	$assign_list["activities_id"] = $activities_id;

	if ($min_duration > 0 && $max_duration > 0) {
		$cond .= " and number_day >= '$min_duration' and number_day <= '$max_duration'";
	} elseif ($min_duration == 0 && $max_duration > 0) {
		$cond .= " and number_day <= '$max_duration'";
	} elseif ($min_duration > 0 && $max_duration == 0) {
		$cond .= " and number_day >= '$min_duration'";
	} else {
	}
	$assign_list['min_duration'] = $min_duration;
	$assign_list['max_duration'] = $max_duration;

	if (!empty($duration_id)) {
		$cond .= " and number_day='$duration_id'";
		$assign_list["duration_id"] = $duration_id;
	}
	//print_r($cond); die();

	if ($keyword != '') {
		$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";
		$assign_list["keyword"] = $keyword;
	}


	$totalRecord = $clsTour->getAll($cond);
	$totalRecord = $totalRecord ? count($totalRecord) : '0';
	//print_r($totalRecord);die();

	$assign_list['totalRecord'] = $totalRecord;

	$config = array(
		'total'	=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);

	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";

	$listTour = $clsTour->getAll($cond . $order_by . $limit, $clsTour->pkey);
	$assign_list['listTour'] = $listTour;
	unset($listTour);
	$assign_list['page_view'] = $page_view;
	unset($page_view);
	$totalPage = $clsPagination->getTotalPage();
	$assign_list['totalPage'] = $totalPage;

	unset($clsPriceRange);
	unset($clsCity);
	unset($clsTour);

	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Results search') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
}
function default_ajLoadBookingSummary()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain;
	global $clsISO;
	#
	$clsTour = new Tour();
	$clsTourService = new TourService();
	$tour_id = intval($_POST['tour_id']);

	$BOOK_VALUE = vnSessionGetVar('BOOK_VALUE');

	$tourRate = $clsTour->getTripPriceOrgin($tour_id);
	$totalRate = 0;
	$totalRate += $tourRate * intval($BOOK_VALUE['adult']);
	$totalRate += $tourRate * intval($BOOK_VALUE['child']);
	$totalRate += $tourRate * intval($BOOK_VALUE['baby']);
	#
	$Html = '
	<div class="box">
		<div class="top"> <h2>Booking Details</h2> </div>
		<div class="mid">
			<ul>
				<li><strong>' . $clsTour->getTitle($tour_id) . ' | ' . $clsTour->getTripDuration($tour_id) . '</strong></li>
				<li><label class="col1">Depart time :</label>
					<span class="subli col2">' . $BOOK_VALUE['departure_date'] . '</span></li>
				<li><label class="col1">Adult(s) :</label>
					<span class="subli col2">x ' . $BOOK_VALUE['adult'] . '</span> <span class="col3">' . $clsISO->getRate() . ' ' . $clsISO->formatPrice($tourRate) . '</span> </li>
				<li><label class="col1">Children(s) :</label>
					<span class="subli col2">x ' . $BOOK_VALUE['child'] . '</span> <span class="col3">' . $clsISO->getRate() . ' ' . $clsISO->formatPrice($tourRate) . '</span></li>
				<li><label class="col1">Bady(s) :</label>
					<span class="subli col2">x ' . $BOOK_VALUE['baby'] . '</span> <span class="col3">' . $clsISO->getRate() . ' ' . $clsISO->formatPrice($tourRate) . '</span></li>
			</ul>
		</div>
	</div>';
	$BOOK_ADDON = vnSessionGetVar('BOOK_ADDON');
	if (is_array($BOOK_ADDON) && count($BOOK_ADDON) > 0) {
		$Html .= '
		<div class="box">
			<div class="top"> <h2>Booking AddOns Services</h2> </div>
			<div class="mid">
				<ul>';
		foreach ($BOOK_ADDON as $k => $v) {
			$Html .= '
					<li>
						<span class="col1">' . $clsTourService->getTitle($k) . '</span> 
						<span class="subli col2">x ' . $v . '</span>
						<span class="col3">' . $clsISO->getRate() . ' ' . $clsISO->formatPrice($clsTourService->getPriceOrgin($k) * $v) . '</span>
					</li>';
			#
			$totalRate += $clsTourService->getPriceOrgin($k) * $v;
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
				<li class="full">Full Payment<span class="detail">' . $clsISO->getRate() . ' ' . $clsISO->formatPrice($totalRate) . '</span></li>
				<li class="discount">Discount<span class="detail">' . $clsISO->getRate() . '0</span></li>
				<li class="total">Total Price<span class="detail">' . $clsISO->getRate() . ' ' . $clsISO->formatPrice($totalRate) . '</span></li>
			</ul>
	   </div>
	</div>
	<input type="hidden" name="totalRate" value="' . $clsISO->processSmartNumber($totalRate) . '" />';
	#
	echo ($Html);
	die();
}
function default_loadPriceTableDepartureGroup()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain, $adult, $child, $infant, $adult_type_id, $child_type_id, $infant_type_id;
	global $clsISO;


	#
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsTourStore = new TourStore();
	$assign_list["clsTourStore"] = $clsTourStore;
	$clsTourStartDate = new TourStartDate();
	$assign_list["clsTourStartDate"] = $clsTourStartDate;
	$clsTourPriceGroup = new TourPriceGroup();
	$assign_list["clsTourPriceGroup"] = $clsTourPriceGroup;
	$clsTourProperty = new TourProperty();
	$assign_list["clsTourProperty"] = $clsTourProperty;
	$clsTourOption = new TourOption();
	$assign_list["clsTourOption"] = $clsTourOption;
	$tour_id = intval($_POST['tour_id']);
	$assign_list["tour_id"] = $tour_id;


	$oneItem = $clsTour->getOne($tour_id);
	$assign_list['oneItem'] = $oneItem;

	$departure_in = isset($_POST['departure_date']) && !empty($_POST['departure_date']) ? $_POST['departure_date'] : '';
	$assign_list["departure_in"] = $departure_in;

	$departure_date = strtotime($departure_in);
	$assign_list['departure_date'] = $departure_date;

	$adult = isset($_POST['adult']) ? intval($_POST['adult']) : 1;
	$assign_list['adult'] = $adult;
	$child = isset($_POST['child']) ? intval($_POST['child']) : 0;
	$assign_list['child'] = $child;
	$infant = isset($_POST['infant']) ? intval($_POST['infant']) : 0;
	$assign_list['infant'] = $infant;


	$Available = $clsTourStartDate->getAllotmentTourGroup2($tour_id, $departure_date, $is_agent);

	$lstAdultSizeGroup = $clsTour->getOneField('adult_group_size', $tour_id);
	$lstAdultSize = array();
	if ($lstAdultSizeGroup != '' && $lstAdultSizeGroup != '0') {
		$TMP = explode(',', $lstAdultSizeGroup);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstAdultSize)) {
				$lstAdultSize[] = $TMP[$i];
			}
		}
	}
	$lastAdultSize = end($lstAdultSize);

	$max_adult = $clsTourOption->getOneField('number_to', $lastAdultSize);
	$max_adult ? $max_adult : 1;
	$assign_list["max_adult"] = $max_adult;

	$lstChildSizeGroup = $clsTour->getOneField('child_group_size', $tour_id);
	$lstChildSize = array();
	if ($lstChildSizeGroup != '' && $lstChildSizeGroup != '0') {
		$TMP = explode(',', $lstChildSizeGroup);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstChildSize)) {
				$lstChildSize[] = $TMP[$i];
			}
		}
	}
	$lastChildSize = end($lstChildSize);
	$max_child = $clsTourOption->getOneField('number_to', $lastChildSize);
	$assign_list["max_child"] = $max_child;

	$lstInfantSizeGroup = $clsTour->getOneField('infant_group_size', $tour_id);
	$lstInfantSize = array();
	if ($lstInfantSizeGroup != '' && $lstInfantSizeGroup != '0') {
		$TMP = explode(',', $lstInfantSizeGroup);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstInfantSize)) {
				$lstInfantSize[] = $TMP[$i];
			}
		}
	}
	$lastInfantSize = end($lstInfantSize);
	$max_infant = $clsTourOption->getOneField('number_to', $lastInfantSize);
	$assign_list["max_infant"] = $max_infant;

	$total_amount = ($price_adult * $adult) + ($price_child * $child) + ($price_infant * $infant);

	$Sql_Promotion = "SELECT promot FROM " . DB_PREFIX . "promotion WHERE clsTable='Tour' and target_id='$tour_id' and " . $departure_date . " between  start_date and end_date and is_online='1' order by start_date ASC limit 0,1";

	$promotion = $dbconn->GetOne($Sql_Promotion);
	$pricePromotion = ($total_amount * $promotion / 100);

	if ($clsTourStore->checkExist($tour_id, 'DEPARTURE')) {
		$lstTourStartDate = $clsTourStartDate->getAll("is_trash=0 and is_online=1 and start_date='$departure_date' and tour_id='$tour_id' limit 0,1");
		$depositItem = $lstTourStartDate[0]['deposit'];
	} else {
		$lstTourDeposit = $clsTour->getAll("is_trash=0 and is_online=1 and tour_id='$tour_id'");
		$depositItem = $lstTourDeposit[0]['deposit'];
	}

	if ($depositItem > 0) {
		$deposit = $depositItem;
	} else {
		$deposit = 100;
	}
	$assign_list["promotion"] = $promotion;
	$assign_list["pricePromotion"] = $pricePromotion;
	$assign_list["deposit"] = $deposit;
	$assign_list["depositItem"] = $depositItem;
	$price_deposit = ($deposit / 100) * $total_amount;
	$price_deposit = number_format($price_deposit, 2, '.', '');

	$remaining_amount = $total_amount - $price_deposit - $pricePromotion;
	$remaining_amount = number_format($remaining_amount, 2, '.', '');


	$lstNationality = $clsTourProperty->getAll("is_trash=0 and is_online=1 and type='NATIONALITY' order by order_no asc");
	$assign_list["lstNationality"] = $lstNationality;

	$lstVisitorType = $clsTourProperty->getAll("is_trash=0 and is_online=1 and type='VISITORTYPE' order by order_no asc");
	$assign_list["lstVisitorType"] = $lstVisitorType;


	$html = $core->build('load_Price_Table_Departure_Group.tpl');
	echo ($html);
	die();
}
function default_getTourPriceByNumberGroup()
{
	global $core, $mod, $act, $clsISO, $_LANG_ID, $clsConfiguration, $adult_type_id, $child_type_id, $infant_type_id;

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
	if ($type == 'NoDeparture') {
		$departure_in = 0;
		$departure_date = $departure_in;
	} else {
		$departure_in = $_POST['departure_date'];
		//$departure_date = str_replace('/', '-', $departure_in);
		$departure_date = strtotime($departure_in);
	}
	$assign_list['departure_date'] = $departure_date;

	$lstTourOption = $clsTour->getOneField('tour_option', $tour_id);
	$lstOption = array();
	if ($lstTourOption != '' && $lstTourOption != '0') {
		$TMP = explode(',', $lstTourOption);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstOption)) {
				$lstOption[] = $TMP[$i];
			}
		}
	}
	$tour_number_group_id = $clsTourPriceGroup->getTourNumberGroup($tour_visitor_type_id, $number_person, $tour_id);

	$price = $clsTourPriceGroup->getPriceBooking($tour_id, $tour_class_id, $tour_number_group_id, $tour_visitor_type_id, $departure_date);

	$Available = $clsTourStartDate->getAllotmentTourGroup2($tour_id, $departure_date, $is_agent_id);

	$getTripPrice = $clsTour->getTripMinPriceTourGroup($tour_id);
	if ($getTripPrice > 0) {
		$getTripPrice = '$' . '' . $getTripPrice;
	} else {
		$getTripPrice = '<a class="linkContact">' . $core->get_Lang('Contact us') . '</a>';
	}
	$sql = "tour_id='$tour_id' and price > 0 and tour_visitor_type_id='$adult_type_id' order by price asc limit 0,1";
	$listTourPriceGroup = $clsTourPriceGroup->getAll("tour_id='$tour_id' and price > 0 and tour_visitor_type_id='$adult_type_id' order by price asc limit 0,1");

	$tour_class_id_selected = $listTourPriceGroup[0]['tour_class_id'];

	echo '0|||' . $price . '|||' . $tour_number_group_id . '|||' . $Available . '|||' . $getTripPrice . '|||' . $tour_class_id;
	die();
}


function default_loadStartEndDate()
{
	global $core, $mod, $act, $clsISO, $_LANG_ID, $clsConfiguration, $adult_type_id, $child_type_id, $infant_type_id;

	$clsTour = new Tour();

	$departure_date = isset($_POST['departure_date']) && !empty($_POST['departure_date']) ? $_POST['departure_date'] : '';
	$departure_date = strtotime($departure_date);

	//print_r($departure_date);die();

	$tour_id = isset($_POST['tour_id']) && !empty($_POST['tour_id']) ? $_POST['tour_id'] : '';

	$start_date_html = $clsISO->getDayOfWeek($departure_date) . ', ' . $clsISO->formatTimeDate($departure_date);

	$end_date = $clsTour->getEndDate($departure_date, $tour_id);
	$start_date_html = $clsISO->getDayOfWeek($departure_date) . ', ' . $clsISO->formatTimeDate($departure_date);
	$end_date_html = $clsISO->getDayOfWeek($end_date) . ', ' . $clsISO->formatTimeDate($end_date);


	$departure_check_promotion = $_POST['departure_date'];
	//$departure_check_promotion = str_replace('/', '-', $departure_check_promotion);
	$departure_check_promotion = strtotime($departure_check_promotion);


	$travel_date = $departure_check_promotion;

	$booking_date = date('m/d/Y');
	$booking_date = strtotime($booking_date);

	$promotion = $clsTour->getMinStartDatePromotionProChoseTime($tour_id, $booking_date, $travel_date);


	echo '0|||' . $start_date_html . '|||' . $end_date_html . '|||' . $promotion;
	die();
}
function default_loadPriceTableDeparture()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain, $adult, $child, $infant;
}
function default_ajLoadSelectMaxPeople()
{
	global $core, $mod, $act;
	#
	$clsTour = new Tour();
	$clsTourOption = new TourOption();
	$clsSettingChildPolicy = new SettingChildPolicy();

	#
	$group_size_id = isset($_POST['group_size_id']) ? $_POST['group_size_id'] : 0;
	$number_adult = isset($_POST['number_adult']) ? $_POST['number_adult'] : 0;
	$type = isset($_POST['type']) ? $_POST['type'] : '';
	$tour_id = isset($_POST['tour_id']) ? $_POST['tour_id'] : 0;


	$lstChildSizeGroup = $clsTour->getOneField('child_group_size', $tour_id);
	$lstChildSize = array();
	if ($lstChildSizeGroup != '' && $lstChildSizeGroup != '0') {
		$TMP = explode(',', $lstChildSizeGroup);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstChildSize)) {
				$lstChildSize[] = $TMP[$i];
			}
		}
	}
	$lastChildSize = end($lstChildSize);
	$max_child = $clsTourOption->getOneField('number_to', $lastChildSize);

	$lstInfantSizeGroup = $clsTour->getOneField('infant_group_size', $tour_id);
	$lstInfantSize = array();
	if ($lstInfantSizeGroup != '' && $lstInfantSizeGroup != '0') {
		$TMP = explode(',', $lstInfantSizeGroup);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstInfantSize)) {
				$lstInfantSize[] = $TMP[$i];
			}
		}
	}
	$lastInfantSize = end($lstInfantSize);
	$max_infant = $clsTourOption->getOneField('number_to', $lastInfantSize);

	$maxChild = $clsSettingChildPolicy->getNumberChild($group_size_id, $number_adult) ? $clsSettingChildPolicy->getNumberChild($group_size_id, $number_adult) : 0;
	$maxInfant = $clsSettingChildPolicy->getNumberInfant($group_size_id, $number_adult) ? $clsSettingChildPolicy->getNumberInfant($group_size_id, $number_adult) : 0;

	#
	$html = '<option value="">' . $core->get_Lang('Select') . '</option>';
	if ($type == 'Child') {
		for ($i = 0; $i <= intval($maxChild); $i++) {
			$html .= '<option value="' . $i . '">' . $i . '</option>';
		}
	} else {
		for ($i = 0; $i <= intval($maxInfant); $i++) {
			$html .= '<option value="' . $i . '">' . $i . '</option>';
		}
	}
	#
	echo $html;
	die();
}
function default_ajLoadMaxPeople()
{
	global $core, $mod, $act;
	#
	$clsTour = new Tour();
	$clsTourOption = new TourOption();
	$clsSettingChildPolicy = new SettingChildPolicy();

	#
	$group_size_id = isset($_POST['group_size_id']) ? $_POST['group_size_id'] : 0;
	$number_adult = isset($_POST['number_adult']) ? $_POST['number_adult'] : 0;
	$type = isset($_POST['type']) ? $_POST['type'] : '';
	$tour_id = isset($_POST['tour_id']) ? $_POST['tour_id'] : 0;


	$lstChildSizeGroup = $clsTour->getOneField('child_group_size', $tour_id);
	$lstChildSize = array();
	if ($lstChildSizeGroup != '' && $lstChildSizeGroup != '0') {
		$TMP = explode(',', $lstChildSizeGroup);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstChildSize)) {
				$lstChildSize[] = $TMP[$i];
			}
		}
	}
	$lastChildSize = end($lstChildSize);
	$max_child = $clsTourOption->getOneField('number_to', $lastChildSize);

	$lstInfantSizeGroup = $clsTour->getOneField('infant_group_size', $tour_id);
	$lstInfantSize = array();
	if ($lstInfantSizeGroup != '' && $lstInfantSizeGroup != '0') {
		$TMP = explode(',', $lstInfantSizeGroup);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstInfantSize)) {
				$lstInfantSize[] = $TMP[$i];
			}
		}
	}
	$lastInfantSize = end($lstInfantSize);
	$max_infant = $clsTourOption->getOneField('number_to', $lastInfantSize);

	$maxChild = $clsSettingChildPolicy->getNumberChild($group_size_id, $number_adult) ? $clsSettingChildPolicy->getNumberChild($group_size_id, $number_adult) : 0;
	$maxInfant = $clsSettingChildPolicy->getNumberInfant($group_size_id, $number_adult) ? $clsSettingChildPolicy->getNumberInfant($group_size_id, $number_adult) : 0;


	echo '0|||' . $maxChild . '|||' . $maxInfant;
	die();
}

function default_ajOpenSrv()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain;

	$tourservice_id = intval($_POST['tourservice_id']);
	$quantity = intval($_POST['quantity']);
	$tour_id = intval($_POST['tour_id']);

	$BOOK_ADDON = vnSessionGetVar('BOOK_ADDON');
	if (empty($BOOK_ADDON)) {
		$BOOK_ADDON = array();
	}
	if (is_array($BOOK_ADDON) && count($BOOK_ADDON) > 0) {
		$ok = false;
		foreach ($BOOK_ADDON as $k => $v) {
			if ($tourservice_id > 0 && $tourservice_id == $k) {
				if ($quantity > 0) {
					$BOOK_ADDON[$tourservice_id] = $quantity;
					$ok = true;
					break;
				} else {
					unset($BOOK_ADDON[$k]);
				}
			}
		}
		if (!$ok && $quantity > 0) {
			$BOOK_ADDON[$tourservice_id] = $quantity;
		}
		vnSessionSetVar('BOOK_ADDON', $BOOK_ADDON);
	} else {
		if ($quantity > 0) {
			$BOOK_ADDON[$tourservice_id] = $quantity;
		}
		vnSessionSetVar('BOOK_ADDON', $BOOK_ADDON);
	}
	echo (1);
	die();
}
function default_loadMonth()
{
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule, $clsISO;
	global $clsConfiguration;
	#

	$clsTourStartDate = new TourStartDate();
	$now = time();
	$day = date('d', $now);

	$year = isset($_POST['year']) ? intval($_POST['year']) : 0;
	if ($year == 0) {
		$year = date('Y', $now);
	}
	$month = isset($_POST['month']) ? intval($_POST['month']) : 0;
	$tour_id = isset($_POST['tour_id']) ? intval($_POST['tour_id']) : '0';

	$cond = "is_trash=0 and start_date >= '" . time() . "'";
	$cond .= " and tour_id ='$tour_id'";

	//$lstTourStartDate = $clsTourStartDate->getAll($cond." order by start_date ASC".$limit);

	#
	$html = '<option value="0"> -- ' . $core->get_Lang('select month') . ' --</option>';

	$year_loadMonth = date('Y', $now);
	$month_loadMonth = date('m', $now);
	if ($year == $year_loadMonth) {
		for ($i = intval($month_loadMonth); $i <= 12; $i++) {
			$html .= '<option value="' . $i . '" ' . ($i == $month ? 'selected="selected"' : '') . ' data="' . $year . '">' . $clsISO->getNameMonth($i) . '-' . $year . '</option>';
		}
	} else {
		for ($i = 1; $i < 13; $i++) {
			$cond .= " and start_date >= '" . strtotime($i . '/01' . $year) . "' and start_date <= '" . strtotime($i . '/31/' . $year) . "'";
			$lstTourStartDate = $clsTourStartDate->getAll($cond . " order by start_date ASC");
			//print_r(count($lstTourStartDate)); die();
			if ($lstTourStartDate > 0) {
				$html .= '<option value="' . $i . '" ' . ($i == $month ? 'selected="selected"' : '') . ' data="' . $year . '">' . $$clsISO->getNameMonth($i) . '-' . $year . '</option>';
			}
		}
	}
	echo $html;
	die();
}
function default_other()
{
	global $assign_list, $clsISO, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page;
	#
	$listMonth = array();
	$now = time();
	$month = date('m', $now);
	$year = date('Y', $now);
	#
	for ($i = intval($month); $i <= 12; $i++) {
		$listMonth[] = array(
			'month'	=> ($i < 10) ? '0' . $i : $i,
			'year'	=> $year
		);
	}
	for ($i = 1; $i < intval($month); $i++) {
		$listMonth[] = array(
			'month'	=> $i ? '0' . $i : $i,
			'year'	=> ($year + 1)
		);
	}
	$assign_list["listMonth"] = $listMonth;

	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsCity = new City();
	$assign_list["clsCity"] = $clsCity;
	$clsGuide = new Guide();
	$assign_list["clsGuide"] = $clsGuide;
	#
	$tour_id = isset($_GET['tour_id']) ? $_GET['tour_id'] : '0';
	$assign_list["tour_id"] = $tour_id;
	$oneItem = $clsTour->getOne($tour_id);
	$assign_list["oneItem"] = $oneItem;
	$tour_type_id = !empty($oneItem['tour_type_id']) ? $oneItem['tour_type_id'] : '1';

	$lstCityPoint = $clsCity->getAll("is_trash=0 and is_online=1 and country_id =1 and is_start_point=1 order by order_start_point desc", $clsCity->pkey);
	$assign_list["lstCityPoint"] = $lstCityPoint;
	unset($lstCityPoint);

	$clsTourStartDate = new TourStartDate();
	$assign_list["clsTourStartDate"] = $clsTourStartDate;
	$lstTourStartDateIN = $clsTourStartDate->countItem("is_trash=0 and start_date >= '" . time() . "' and tour_id in (SELECT tour_id FROM " . DB_PREFIX . "tour where tour_type_id = '1' )");
	$assign_list["lstTourStartDateIN"] = $lstTourStartDateIN;
	//print_r($lstTourStartDateIN); die();
	unset($lstTourStartDateIN);

	$lstTourStartDateOUT = $clsTourStartDate->countItem("is_trash=0 and start_date >= '" . time() . "' and tour_id in (SELECT tour_id FROM " . DB_PREFIX . "tour where tour_type_id = '2' ) ");
	$assign_list["lstTourStartDateOUT"] = $lstTourStartDateOUT;
	//print_r($lstTourStartDateOUT); die();
	unset($lstTourStartDateOUT);



	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('schedules') . ' ' . $clsTour->getTitle($tour_id) . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $core->get_Lang('schedules') . ' ' . $clsTour->getTitle($tour_id) . ' | ' . PAGE_NAME;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $core->get_Lang('schedules') . ' ' . $clsTour->getTitle($tour_id) . ' | ' . PAGE_NAME;
	$assign_list["keyword_page"] = $keyword_page;
}

function default_ajaxGetTourOpenning()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page;
	global $clsISO, $adult_type_id;


	$clsTourStartDate = new TourStartDate();
	$assign_list["clsTourStartDate"] = $clsTourStartDate;
	$clsPagination = new Pagination();
	$assign_list["clsPagination"] = $clsPagination;
	$clsTourCategory = new TourCategory();
	$assign_list["clsTourCategory"] = $clsTourCategory;
	$clsTourPriceGroup = new TourPriceGroup();
	$assign_list["clsTourPriceGroup"] = $clsTourPriceGroup;
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsTourOption = new TourOption();
	$assign_list["clsTourOption"] = $clsTourOption;

	$clsTourProperty = new TourProperty();
	$assign_list["clsTourProperty"] = $clsTourProperty;



	$now = time();
	$day = date('d', $now);
	$departure = isset($_POST['month']) ? $_POST['month'] : '';

	$array_departure = explode('/', $departure);
	$month = $array_departure['0'];

	if ($array_departure['1'] != '') {
		$year = $array_departure['1'];
	}


	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$departure_id = isset($_POST['departure_id']) ? intval($_POST['departure_id']) : '';
	$destination_id = isset($_POST['destination_id']) ? intval($_POST['destination_id']) : '';
	$cat_id = isset($_POST['cat_id']) ? intval($_POST['cat_id']) : '';
	$duration = isset($_POST['duration']) ? $_POST['duration'] : '';
	$tour_type_id = isset($_POST['tour_type_id']) ? intval($_POST['tour_type_id']) : '0';
	$tour_id = isset($_POST['tour_id']) ? intval($_POST['tour_id']) : '0';
	$assign_list["tour_id"] = $tour_id;


	$recordPerPage = 20;
	#
	$cond = "is_trash=0 and is_online=1 and start_date >= '" . time() . "'";
	$cond .= " and tour_id ='$tour_id'";
	if (!empty($month) && !empty($year)) {
		$start_date = $month . '/01/' . $year;
		$end_date = $month . '/31/' . $year;
		$cond .= " and start_date >= '" . strtotime($start_date) . "' and start_date <= '" . strtotime($end_date) . "'";
	}

	if (empty($month) && !empty($year)) {
		$start_date = '01/01/' . $year;
		$end_date = '12/31/' . $year;
		$cond .= " and start_date >= '" . strtotime($start_date) . "' and start_date <= '" . strtotime($end_date) . "'";
	}


	if (!empty($tour_id)) {
		$clsTourDestination = new TourDestination();
		$res = $clsTourDestination->getAll("is_trash=0 and tour_id = '$tour_id' order by order_no desc");
		if (!empty($res)) {
			$cond .= " and tour_id IN (SELECT tour_id FROM default_tour_destination WHERE ";
			if ($res[0]['city_id'] == '' || $res[0]['city_id'] == '0') {
				for ($i = 0; $i < count($res); $i++) {
					if (!empty($res[$i]['country_id'])) {
						$cond .= ($i == 0 ? '' : ' or ') . " country_id = '" . $res[$i]['country_id'] . "'";
					}
				}
			} elseif (!empty($res[0]['city_id'])) {
				for ($i = 0; $i < count($res); $i++) {
					if (!empty($res[$i]['city_id'])) {
						$cond .= ($i == 0 ? '' : ' or ') . " city_id = '" . $res[$i]['city_id'] . "'";
					}
				}
			}
			$cond .= ")";
		}
	}


	if (!empty($departure_id)) {
		$cond .= " and tour_id in (SELECT tour_id FROM " . DB_PREFIX . "tour where depart_point_id = '" . $departure_id . "')";
	}
	if (!empty($destination_id)) {
		if ($tour_type_id == 1) {
			$cond .= " and tour_id in (SELECT tour_id FROM " . DB_PREFIX . "tour_destination where city_id = '" . $destination_id . "')";
		} else {
			$cond .= " and tour_id in (SELECT tour_id FROM " . DB_PREFIX . "tour_destination where country_id = '" . $destination_id . "')";
		}
	}
	if (!empty($cat_id)) {
		$cond .= " and tour_id in (SELECT tour_id FROM " . DB_PREFIX . "tour where list_cat_id like '%|" . $cat_id . "|%')";
	}
	if ($duration != '' && $duration != '0') {
		$duration = explode("-", $duration);
		$number_day = $duration[0];
		$number_night = $duration[1];
		$cond .= " and tour_id in (SELECT tour_id FROM " . DB_PREFIX . "tour where number_day=" . $number_day . " and number_night=" . $number_night . ")";
	}


	$totalRecord = $clsTourStartDate->getAll($cond) ? count($clsTourStartDate->getAll($cond)) : 0;
	$page_view = $clsPagination->pagination_ajax($totalRecord, $recordPerPage, $page, '', '', false);

	$offset = ($page - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	#
	$lstNationality = $clsTourProperty->getAll("is_trash=0 and type='NATIONALITY' order by order_no asc");
	$assign_list["lstNationality"] = $lstNationality;

	$lstVisitorType = $clsTourProperty->getAll("is_trash=0 and type='VISITORTYPE' order by order_no asc");
	$assign_list["lstVisitorType"] = $lstVisitorType;

	$lstTourStartDate = $clsTourStartDate->getAll($cond . " order by start_date ASC" . $limit);
	$assign_list["lstTourStartDate"] = $lstTourStartDate;

	$lstTourOption = $clsTour->getOneField('tour_option', $tour_id);
	$lstOption = array();
	if ($lstTourOption != '' && $lstTourOption != '0') {
		$TMP = explode(',', $lstTourOption);
		for ($i = 0; $i < count($TMP); $i++) {
			if (!in_array($TMP[$i], $lstOption)) {
				$lstOption[] = $TMP[$i];
			}
		}
	}
	$assign_list["lstOption"] = $lstOption;

	$Html = $core->build('table_departure_date.tpl');
	echo $Html;
	die();
}
function default_OpenAvailbility()
{
	global $clsISO, $core, $dbconn, $_LANG_ID;
	$clsTour = new Tour();
	$type = $_POST['type'];
	$tp = isset($_POST['tp']) ? $_POST['tp'] : '';
	$tour_id = $_POST['tour_id'];
	// List action
}
function _getdataTourPrice($tour_id)
{
	global $dbconn, $_LANG_ID;
	$sql = "SELECT `tour_price_val_id`,`tour_id`,`price`,`departure_date` FROM " . DB_PREFIX . "tour_price_val 
	WHERE tour_id = '$tour_id' and tour_price_row_id='16'";
	$results = $dbconn->getAll($sql);
	return $results;
}
function default_map()
{
	global $dbconn, $_LANG_ID, $core, $smarty;
	$clsTour = new Tour();
	$smarty->assign('clsTour', $clsTour);

	$tour_id = intval($_POST['tour_id']);
	$smarty->assign('tour_id', $tour_id);

	$ret = $clsTour->getLocationMap($tour_id);
	$map_la = $ret['map_la'];
	$map_lo = $ret['map_lo'];
	$script_location = $ret['jscode'];
	$smarty->assign('map_la', $map_la);
	$smarty->assign('map_lo', $map_lo);
	$smarty->assign('script_location', $script_location);

	$html = $core->build('map.tpl');
	echo $html;
	die();
}
function default_ajLoadMoreTour()
{
	global $smarty, $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,
		$title_page, $description_page, $keyword_page, $clsISO;

	#
	$clsTour = new Tour();
	$assign_list['clsTour'] = $clsTour;
	$clsTourCategory = new TourCategory();
	$assign_list['clsTourCategory'] = $clsTourCategory;
	$clsTourStore = new TourStore();
	$assign_list['clsTourStore'] = $clsTourStore;
	$clsPromotion = new Promotion();
	$assign_list['clsPromotion'] = $clsPromotion;
	#
	$numberPage = isset($_POST['page']) ? $_POST['page'] : 1;
	$cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : 0;
	$country_id = isset($_POST['country_id']) ? $_POST['country_id'] : 0;
	$type = isset($_POST['type']) ? $_POST['type'] : '';
	$itemOnPage = 6;
	$limit = " limit " . (($numberPage - 1) * $itemOnPage) . "," . ($itemOnPage);
	$sql = "is_trash=0 and is_online=1";
	if ($cat_id > 0) {
		$listTourCategory = $clsTourCategory->getAll("is_trash=0 and is_online=1 and parent_id='$cat_id'");
		if ($listTourCategory != '') {
			$parent_id = $cat_id;

			$sql .= " and cat_id IN (SELECT tourcat_id FROM " . DB_PREFIX . "tour_category WHERE is_trash=0 and is_online=1 and parent_id='$parent_id')";
		} else {
			$sql .= " and (cat_id='$cat_id' or list_cat_id like '%|$cat_id|%')";
		}
	}
	if ($country_id > 0) {
		$sql .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and country_id='$country_id')";
	}
	//print_r($sql." order by order_no ASC ".$limit); die();
	$listTour = $clsTour->getAll($sql . " order by order_no ASC " . $limit, $clsTour->pkey);

	$assign_list["listTour"] = $listTour;
	$assign_list["numberPage"] = $numberPage;
	#
	$html = $core->build('load_more_tour.tpl');
	echo $html;
	die;
}
function default_ajLoadMoreTourSearch()
{
	global $smarty, $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page,
		$clsISO, $cat_id, $profile_id, $country_id, $cat_ID, $duration_ID, $price_range_ID;

	//$_LANG_ID=isset($_POST['_LANG_ID'])? $_POST['_LANG_ID']:'';

	$now_day = isset($_POST['now_day']) ? $_POST['now_day'] : '';
	$country_id = isset($_POST['country_id']) ? $_POST['country_id'] : '';
	$city_id = isset($_POST['city_id']) ? $_POST['city_id'] : '';
	$cat_ID = isset($_POST['cat_ID']) ? $_POST['cat_ID'] : '';
	$duration_ID = isset($_POST['duration_id']) ? $_POST['duration_id'] : '';
	$price_range_ID = isset($_POST['price_range_id']) ? $_POST['price_range_id'] : '';
	$sortby = isset($_POST['sortby']) ? $_POST['sortby'] : '';
	$keyword = (isset($_POST['key']) && !empty($_POST['key'])) ? $_POST['key'] : '';
	$clsTourCategory  = new TourCategory();
	$assign_list['clsTourCategory'] = $clsTourCategory;
	$clsTour = new Tour();
	$assign_list['clsTour'] = $clsTour;
	$clsPromotion = new Promotion();
	$assign_list['clsPromotion'] = $clsPromotion;
	$clsReviews = new Reviews();
	$assign_list['clsReviews'] = $clsReviews;
	$clsTourStore = new TourStore();
	$assign_list['clsTourStore'] = $clsTourStore;
	$cond = "is_trash=0 and is_online=1";
	if ($country_id > 0) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and country_id IN ($country_id))";
	}
	if ($city_id > 0) {
		$cond .= " and tour_id IN (SELECT tour_id FROM " . DB_PREFIX . "tour_destination WHERE is_trash=0 and city_id IN ($city_id))";
		$assign_list["city_id"] = $city_id;
	}
	if (!empty($cat_ID)) {
		$cat_ID = explode(',', $cat_ID);
		$cond .= " and (";
		for ($i = 0; $i < count($cat_ID); $i++) {
			if ($i == 0 && count($cat_ID) == 1) {
				$cond .= " (cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%')";
			} elseif (count($cat_ID) > 1 && $i < (count($cat_ID) - 1)) {
				$cond .= "(cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%') or ";
			} else {
				$cond .= "(cat_id='" . $cat_ID[$i] . "' or list_cat_id like '%|" . $cat_ID[$i] . "|%')";
			}
		}
		$cond .= ")";
	}
	/*print_r($cond);die();*/
	if (!empty($price_range_ID)) {
		$clsPriceRange = new PriceRange();
		$SQLMINRATE = "SELECT MIN(min_rate) FROM " . DB_PREFIX . "price_range WHERE price_range_id IN ($price_range_ID) and type='TOUR'";
		$SQLMAXRATE = "SELECT MAX(max_rate) FROM " . DB_PREFIX . "price_range WHERE price_range_id IN ($price_range_ID) and max_rate<>'0' and type='TOUR'";
		$SQLMINMAXRATE = "SELECT MIN(max_rate) FROM " . DB_PREFIX . "price_range WHERE price_range_id IN ($price_range_ID) and type='TOUR'";
		#
		$min_rate = $dbconn->GetOne($SQLMINRATE);
		$minmax_rate = $dbconn->GetOne($SQLMINMAXRATE);
		$assign_list['minmax_rate'] = $minmax_rate;
		if ($minmax_rate == '0') {
			$max_rate = 0;
		} else {
			$max_rate = $dbconn->GetOne($SQLMAXRATE);
		}
		$assign_list['min_rate'] = $min_rate;
		$assign_list['max_rate'] = $max_rate;
		#
		if ($min_rate > 0 && $max_rate > 0) {
			$cond .= " and trip_price > '$min_rate' and trip_price < '$max_rate'";
		} elseif ($min_rate == 0 && $max_rate > 0) {
			$cond .= " and trip_price < '$max_rate'";
		} elseif ($min_rate > 0 && $max_rate == 0) {
			$cond .= " and trip_price >= '$min_rate'";
		} elseif ($min_rate == 0 && $max_rate == 0) {
			$cond .= " and trip_price >= '$min_rate'";
		} else {
			$cond .= " and trip_price > '$min_rate'";
		}
	}

	if (!empty($duration_ID)) {
		$cond .= " and number_day IN($duration_ID)";
		$assign_list["duration_ID"] = $duration_ID;
	}
	$order_by = " order by order_no asc";
	$numberPage = isset($_POST['page']) ? $_POST['page'] : 1;
	$assign_list["numberPage"] = $numberPage;
	$itemOnPage = 6;
	$limit = " limit " . (($numberPage - 1) * $itemOnPage) . "," . ($itemOnPage);
	#
	if ($keyword != '') {
		$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";
		$assign_list["keyword"] = $keyword;
	}
	$listTour = $clsTour->getAll($cond . $order_by . $limit, $clsTour->pkey);
	$assign_list["listTour"] = $listTour;
	$html = $core->build('load_more_tour.tpl');
	print_r($html);
	die();
}
