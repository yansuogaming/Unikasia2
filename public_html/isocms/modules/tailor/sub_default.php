<?php

function default_default()
{

	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $title_page, $description_page, $keyword_page;
	global $clsISO, $_LANG_ID, $_lang, $extLang, $_frontIsLoggedin_user_id, $adult_type_id, $child_type_id, $age_type_id, $height_type_id, $infant_type_id;


	$clsTailorProperty = new TailorProperty();
	$assign_list["clsTailorProperty"] = $clsTailorProperty;

	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;

	$clsTourItinerary = new TourItinerary();
	$assign_list['clsTourItinerary'] = $clsTourItinerary;

	$clsTourCategory = new TourCategory();
	$assign_list["clsTourCategory"] = $clsTourCategory;

	$clsCruise = new Cruise();
	$assign_list["clsCruise"] = $clsCruise;

	$clsTourGroup = new TourGroup();
	$assign_list['clsTourGroup'] = $clsTourGroup;
	$clsTourStartDate = new TourStartDate();
	$assign_list['clsTourStartDate'] = $clsTourStartDate;

	$clsCity = new City();
	$assign_list["clsCity"] = $clsCity;
	$clsCityStore = new CityStore();
	$assign_list['clsCityStore'] = $clsCityStore;

	$clsBooking = new Booking();
	$assign_list['clsBooking'] = $clsBooking;

	$clsFeedback = new Feedback();
	$assign_list['clsFeedback'] = $clsFeedback;

	$clsCruiseProperty = new CruiseProperty();
	$assign_list["clsCruiseProperty"] = $clsCruiseProperty;
	$clsTourProperty = new TourProperty();
	$assign_list["clsTourProperty"] = $clsTourProperty;

	#
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;
	#

	$clsCountry = new _Country();
	$assign_list["clsCountry"] = $clsCountry;
	#
	$assign_list["lstCountryRegion"] = $clsCountry->getAll("1=1 and is_trash=0 order by order_no ASC", $clsCountry->pkey . ",title");

	$clsCountryEx = new Country();
	$assign_list["clsCountryEx"] = $clsCountryEx;

	$clsTourDestination = new TourDestination();
	$assign_list["clsTourDestination"] = $clsTourDestination;

	$tour_id = !empty($_GET['tour_id']) ? $_GET['tour_id'] : '0';
	$cond = " is_trash = 0 and";

	$country_id = $clsTourDestination->getAll("$cond tour_id = $tour_id limit 1", "country_id")[0]["country_id"];
	$assign_list["tour_id"] = $tour_id;
	$assign_list["country_id"] = $country_id;

	$clsTourItinerary = new TourItinerary();
	$assign_list["clsTourItinerary"] = $clsTourItinerary;
	$lstTourItinerary = $clsTourItinerary->getAll("$cond tour_id = $tour_id order by day");
	$assign_list["lstTourItinerary"] = $lstTourItinerary;

	#
	$oneItem = $clsTour->getOne($tour_id);
	$lstTourItinerary = $clsTourItinerary->getAll("$cond tour_id = $tour_id order by");
	$assign_list["lstTourItinerary"] = $lstTourItinerary;

	$clsTourOption = new TourOption();
	$assign_list["clsTourOption"] = $clsTourOption;
	//List travel style
	$cond_travel_style = 'is_online = 1';
	$order_by_travel_style = ' order by order_no asc';
	$listTravelStyle = $clsTourCategory->getAll($cond_travel_style . $order_by_travel_style, $clsTourCategory->pkey);
	$assign_list['listTravelStyle'] = $listTravelStyle;
	unset($listTravelStyle);


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
}
function default_isocustomize()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $title_page, $description_page, $keyword_page;
	global $clsISO, $_LANG_ID, $_lang, $extLang, $_frontIsLoggedin_user_id, $lstCountryEx;
	#

	$clsTailorProperty = new TailorProperty();
	$assign_list["clsTailorProperty"] = $clsTailorProperty;
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsCity = new City();
	$assign_list["clsCity"] = $clsCity;
	$clsCountry = new _Country();
	$assign_list["clsCountry"] = $clsCountry;
	$clsCountryEx = new Country();
	$assign_list["clsCountryEx"] = $clsCountryEx;
	$clsBooking = new Booking();
	#
	$assign_list["lstCountryRegion"] = $clsCountry->getAll("1=1 and is_trash=0 order by order_no ASC");
	$assign_list['lst_country_id'] = $lstCountryEx[0][$clsCountryEx->pkey];

	if (isset($_GET['slug']) && !empty($_GET['slug'])) {
		$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
		$tour_id = $clsTour->getBySlug($slug);

		if (intval($tour_id) == 0) {
			header('location:' . PCMS_URL . $extLang);
			exit();
		}
		$assign_list["tour_id"] = $tour_id;
	}

	#
	if (!empty($_frontIsLoggedin_user_id)) {
		$clsMember = new Member();
		$assign_list['clsMember'] = $clsMember;
		$name = $clsMember->getFullName($_frontIsLoggedin_user_id);
		$assign_list['name'] = $name;
		$email = $clsMember->getEmail($_frontIsLoggedin_user_id);
		$assign_list['email'] = $email;
		$phone = $clsMember->getPhone($_frontIsLoggedin_user_id);
		$assign_list['phone'] = $phone;
		$country_id = $clsMember->getOneField('country_id', $_frontIsLoggedin_user_id);
		$assign_list['country_id'] = $country_id;
		$title = $clsMember->getOneField('title', $_frontIsLoggedin_user_id);
		$assign_list['title'] = $title;
	}
	#
	$errMsg = '';
	if (isset($_POST['plantrip']) && $_POST['plantrip'] == 'plantrip') {
		#
		if (trim($errMsg) == '') {
			$booking_id = $clsBooking->getMaxId();
			$booking_code = $clsBooking->generateBookingCode($booking_id, 'Tailor');
			$choose_date = $_POST['choose_date'];
			$type = $_POST['type'];
			#
			$f = "booking_id,target_id,clsTable,booking_code,booking_store,booking_type,reg_date,ip_booking";
			$v = "'$tailor_id'
				,'" . $_POST['tour_id'] . "'
				,'Tailor'
				,'$booking_code'
				,'" . serialize($_POST) . "'
				,'Tailor'
				,'" . time() . "'
				,'" . $_SERVER['REMOTE_ADDR'] . "'";
			#
			if (!empty($_frontIsLoggedin_user_id)) {
				$fx .= ",member_id";
				$vx .= ",'$_frontIsLoggedin_user_id'";
			}
			#
			//print_r($f.'<br/>'.$v); die();
			if ($clsBooking->insertOne($f, $v)) {
				$clsBooking->sendEmailBookingTailor($booking_id, $type, $choose_date);
				unset($clsBooking);
				header('Location:' . $extLang . '/tailor-made-tour/successful');
			}
		} else {
			$assign_list["errMsg"] = $errMsg;
			foreach ($_POST as $k => $v) {
				$assign_list[$k] = $v;
			}
		}
	}
	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Tailor Made Tours') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
}
function default_customize()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $title_page, $description_page, $keyword_page;
	global $clsISO, $_LANG_ID, $_lang, $extLang, $_frontIsLoggedin_user_id;
	#

	ini_set('display_errors', 0);
	error_reporting(E_ALL & ~E_STRICT); //E_ALL

	$clsTailorProperty = new TailorProperty();
	$assign_list["clsTailorProperty"] = $clsTailorProperty;
	$clsTour = new Tour();
	$assign_list["clsTour"] = $clsTour;
	$clsCity = new City();
	$assign_list["clsCity"] = $clsCity;
	$clsCountry = new _Country();
	$assign_list["clsCountry"] = $clsCountry;
	$clsCountryEx = new Country();
	$assign_list["clsCountryEx"] = $clsCountryEx;
	$clsTourProperty = new TourProperty();
	$assign_list["clsTourProperty"] = $clsTourProperty;
	$clsBooking = new Booking();
	if (1 == 2) {
		$booking_store = $clsBooking->getOneField('booking_store', 61);
		$booking_store = unserialize($booking_store);

		//print_r($booking_store);die();
		$html_destination = '';

		$list_country = $booking_store['country_id'];
		for ($i = 0; $i < count($list_country); $i++) {
			$list_city = $booking_store['city_id'][$list_country[$i]];
			if (!empty($list_city)) {
				$html_city = '';
				for ($j = 0; $j < count($list_city); $j++) {
					$html_city .= ($j == 0 ? '' : ', ') . $clsCity->getTitle($list_city[$j]);
				}
				$html_destination .= '<p>' . $clsCountryEx->getTitle($list_country[$i]) . ': ' . $html_city . '</p>';
			} else {
				$html_destination .= '<p>' . $clsCountryEx->getTitle($list_country[$i]) . '</p>';
			}
		}
		$other_destination = $booking_store['other_des'];
		if (!empty($booking_store['other_des'])) {
			$html_destination .= '<p>' . $core->get_Lang('Other Destinations') . ': ' . $other_destination . '</p>';
		}
	}



	#
	$assign_list["lstCountryRegion"] = $clsCountry->getAll("1=1 and is_trash=0 order by order_no ASC", $clsCountry->pkey . ',title');

	#
	$lstVisitorType = $clsTourProperty->getAll("is_trash=0 and type='VISITORTYPE' order by order_no asc");
	$assign_list["lstVisitorType"] = $lstVisitorType;

	$assign_list['number_adult'] = 1;
	$assign_list['number_child'] = 0;

	$lstCountryExDB = $clsCountryEx->getAll("is_trash=0 and is_online=1 order by order_no asc", $clsCountryEx->pkey . ',title,slug,intro');
	$lstCountryEx = array();
	if (!empty($lstCountryExDB)) {
		for ($i = 0, $total = count($lstCountryExDB); $i < $total; $i++) {
			$lstCountryEx[] = array(
				'country_id'	=> $lstCountryExDB[$i][$clsCountryEx->pkey],
				'title'			=> $clsCountryEx->getTitle($lstCountryExDB[$i][$clsCountryEx->pkey], $lstCountryExDB[$i]),
				'link'			=> $clsCountryEx->getLink($lstCountryExDB[$i][$clsCountryEx->pkey], '', $lstCountryExDB[$i]),
				'intro'			=> $clsCountryEx->getIntro($lstCountryExDB[$i][$clsCountryEx->pkey], '', false, $lstCountryExDB[$i]),

				$clsCountryEx->pkey => $lstCountryExDB[$i][$clsCountryEx->pkey]
			);
		}
		unset($lstCountryExDB);
	}
	$assign_list['lst_country_id'] = $lstCountryEx[0][$clsCountryEx->pkey];
	$assign_list['lstCountryEx'] = $lstCountryEx;
	unset($lstCountryEx);

	if (isset($_GET['slug']) && !empty($_GET['slug'])) {
		$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
		$tour_id = $clsTour->getBySlug($slug);
		if (intval($tour_id) == 0) {
			header('location:' . PCMS_URL . $extLang);
			exit();
		}
		$assign_list["tour_id"] = $tour_id;
	}
	#
	if (!empty($_frontIsLoggedin_user_id)) {
		$clsMember = new Member();
		$assign_list['clsMember'] = $clsMember;
		$name = $clsMember->getFullName($_frontIsLoggedin_user_id);
		$assign_list['name'] = $name;
		$email = $clsMember->getEmail($_frontIsLoggedin_user_id);
		$assign_list['email'] = $email;
		$phone = $clsMember->getPhone($_frontIsLoggedin_user_id);
		$assign_list['phone'] = $phone;
		$country__id = $clsMember->getOneField('country_id', $_frontIsLoggedin_user_id);
		$assign_list['country__id'] = $country__id;
		$title = $clsMember->getOneField('title', $_frontIsLoggedin_user_id);
		$assign_list['title'] = $title;
	}
	#
	$errMsg = '';
	if (isset($_POST['plantrip']) && $_POST['plantrip'] == 'plantrip') {
		$name 				= Input::post('name', '');
		$assign_list['name'] = $name;
		$email 				= Input::post('email', '');
		$assign_list['email'] = $email;
		$phone 				= Input::post('phone', '');
		$assign_list['phone'] = $phone;
		$country__id 		= Input::post('country__id', '');
		$assign_list['country__id'] = $country__id;
		$please 			= Input::post('please', '');
		$assign_list['please'] = $please;
		$adult_simple 		= Input::post('adult_simple', '');
		$assign_list['number_adult'] = $adult_simple;
		$children_simple 	= Input::post('children_simple', '');
		$assign_list['number_child'] = $children_simple;
		$number_room 		= Input::post('number_room', '');
		$assign_list['number_room'] = $number_room;
		/*if($title==''){
			$assign_list['errMsgTitle'] = $core->get_Lang('Title is required');
		}*/
		$check = true;
		if ($name == '') {
			$assign_list['errMsgFullname'] = $core->get_Lang('Fullname is required');
			$check = false;
		}
		#
		if ($email == '') {
			$assign_list['errMsgEmail'] = $core->get_Lang('Email is required');
			$check = false;
		}
		#
		if ($phone == '') {
			$assign_list['errMsgPhone'] = $core->get_Lang('Phone number is required');
			$check = false;
		}
		#
		if ($country__id == '') {
			$assign_list['errMsgCountry'] = $core->get_Lang('Country is required');
			$check = false;
		}
		#
		if ($please == '') {
			$assign_list['errMsgContact'] = $core->get_Lang('Contact is required');
			$check = false;
		}
		#
		#- Verify Captcha
		if (_ISOCMS_CAPTCHA == 'IMG') {
			$security_code = isset($_POST["security_code"]) ? trim($_POST["security_code"]) : '';
			$security_code = strtoupper($security_code);
			if (!empty($security_code) && $security_code != $_SESSION['skey']) {
				$assign_list['errMsgCaptcha'] = $core->get_Lang('Secure code not match');
				$check = false;
			}
		} else if (_ISOCMS_CAPTCHA == 'reCAPTCHA') {
			if (!$clsISO->checkGoogleReCAPTCHA()) {
				$assign_list['errMsgCaptcha'] = $core->get_Lang('Secure code not match');
				$check = false;
			}
		}

		if ($check) {
			$booking_id = $clsBooking->getMaxId();
			$booking_code = $clsBooking->generateBookingCode($booking_id, 'Tailor');
			$choose_date = $_POST['choose_date'];
			$type = $_POST['type'];
			#
			$f = "booking_id,clsTable,booking_code,booking_store,booking_type,reg_date,ip_booking,full_name,email,phone";
			$v = "'$booking_id'
				,'Tailor'
				,'$booking_code'
				,'" . serialize($_POST) . "'
				,'Tailor'
				,'" . time() . "'
				,'" . $_SERVER['REMOTE_ADDR'] . "'
				,'" . $name . "'
				,'" . $email . "'
				,'" . $phone . "'";
			#
			if (!empty($_frontIsLoggedin_user_id)) {
				$fx .= ",member_id";
				$vx .= ",'$_frontIsLoggedin_user_id'";
			}
			#
			//			print_r($f."xxxxx".$v);die();
			if ($clsBooking->insertOne($f, $v)) {
				$clsBooking->sendEmailBookingTailor($booking_id, $type, $choose_date);
				unset($clsBooking);
				header('Location:' . $extLang . '/tailor-made-tour/successful');
			}
		} else {
			$assign_list["errMsg"] = $errMsg;
			foreach ($_POST as $k => $v) {
				$assign_list[$k] = $v;
			}
		}
	}
	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Tailor Made Tours') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
}
function default_ajaxGetCityDestination()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $clsISO;
	global $_lang;
	#
	$clsCity = new City();
	$clsCountry = new Country();
	$list_country_id = isset($_POST['list_country_id']) ? $_POST['list_country_id'] : '';
	$_LANG_ID = isset($_GET['lang']) ? $_GET['lang'] : '';
	$list_city_id = isset($_POST['list_city_id']) ? $_POST['list_city_id'] : '';
	#
	$html = '';
	if (!empty($list_country_id)) {
		$tmp = explode(',', $list_country_id);
		for ($i = 0; $i < count($tmp); $i++) {
			$html .= '<h2 class="title size18 tit mt15 ">' . $core->get_Lang('Destination') . ' ' . $clsCountry->getTitle($tmp[$i]) . '</h2>';
			$html .= '<div class="labelcheck">';
			$html .= '<div class="row">';
			$lstCity = $clsCity->getAll("is_trash=0 and is_online=1 and country_id='" . $tmp[$i] . "' order by order_no asc", $clsCity->pkey);
			if (!empty($lstCity)) {
				for ($j = 0; $j < count($lstCity); $j++) {
					$html .= '<span class="checkbox col-lg-3 col-md-4 col-sm-6 col-xs-6 full_500"><label><input class="chkid_city" ' . ($clsISO->checkInArray($list_city_id, $lstCity[$j][$clsCity->pkey]) ? 'checked="checked"' : '') . ' type="checkbox" name="city_id[]" value="' . $lstCity[$j]['city_id'] . '" /> ' . $clsCity->getTitle($lstCity[$j]['city_id']) . '</label></span>';
				}
			}
			$html .= '</div>';
			$html .= '</div>';
		}
	}
	#
	$resCitySelect = $clsCity->getAllOptimize("is_trash=0 and is_online=1 and country_id IN (" . $list_country_id . ") and city_id IN (" . $list_city_id . ")", $clsCity->pkey);
	if (is_array($resCitySelect) && count($resCitySelect) > 0) {
		$htmlCity = '';
		for ($i = 0; $i < count($resCitySelect); $i++) {
			$htmlCity .= ($i == 0 ? '' : ',') . $resCitySelect[$i][$clsCity->pkey];
		}
	}
	echo ($html . '$$$$' . $htmlCity);
	die();
}
function default_getCityDestination()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $clsISO;
	global $_lang;
	#
	$clsCity = new City();
	$clsCountry = new Country();
	$country_id = isset($_POST['country_id']) ? $_POST['country_id'] : '';
	$_LANG_ID = isset($_GET['lang']) ? $_GET['lang'] : '';
	$list_city_id = isset($_POST['list_city_id']) ? $_POST['list_city_id'] : '';
	#
	$html = '';
	if (!empty($country_id)) {
		$html .= '<div class="labelcheck">';
		$html .= '<div class="row">';
		$lstCity = $clsCity->getAll("is_trash=0 and is_online=1 and country_id='" . $country_id . "' order by order_no asc", $clsCity->pkey);
		if (!empty($lstCity)) {
			for ($j = 0; $j < count($lstCity); $j++) {
				$html .= '<span class="checkbox col-lg-3 col-md-4 col-sm-6 col-6 full_500">
								<label>
									<input class="chkid_city" type="checkbox" name="city_id[' . $country_id . '][]" value="' . $lstCity[$j]['city_id'] . '" ' . ($clsISO->checkInArray($list_city_id, $lstCity[$j][$clsCity->pkey]) ? 'checked="checked"' : '') . '/> ' . $clsCity->getTitle($lstCity[$j]['city_id']) . '
								</label>
						</span>';
			}
		}
		$html .= '</div>';
		$html .= '</div>';
	}
	echo $html;
	die();
}

function default_ajaxTailorMadeTour()
{
	var_dump($_POST);
}
