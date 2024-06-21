<?php
/*ini_set('display_errors',1);
	error_reporting(E_ALL); */
#- Enable cache browser
header("Cache-Control: must-revalidate");

/* duration of cached content (1 hour) */
$offset = 60 * 60 * 24;
/* expiration header format */
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
/* send cache expiration header to broswer */
header($ExpStr);

global $smarty, $assign_list, $core, $dbconn, $mod, $act, $title_page, $description_page, $keyword_page,
	$global_title_page, $global_description_page, $global_keyword_page, $_LANG_ID, $_CONFIG, $clsConfiguration, $country_id, $agent_id, $profile_id, $lang_sql, $adult_type_id, $child_type_id, $infant_type_id, $age_type_id, $height_type_id, $deviceType, $lstCountryEx;

global $email_template_book_tour_id, $email_template_book_cruise_id, $email_template_book_hotel_id, $email_template_contact_id, $email_template_book_service_id, $email_template_tailor_id, $email_template_reg_advisory, $email_template_subscribe_id, $email_template_payment_onepay_id, $email_template_payment_paypal_id, $email_template_signup_id, $email_template_change_pass_id, $email_template_reset_pass_id, $about_us_id, $country_vn_id;

global $agent_id, $email_template_signup_agent_id, $email_template_signup_ctv_id, $email_template_active_agent_id, $email_template_update_profile_agent_id, $email_template_block_agent_id, $email_template_change_pass_agent_id, $email_template_reset_pass_agent_id, $is_agent, $email_template_review_tour_id, $email_template_review_cruise_id, $email_template_download_brochure, $hasAPI;

global $clsISO, $now_day, $short_rate, $package_id;
global $is_mod_member, $is_tour_departure_point, $now_month;

//$abc=$clsISO->sendEmailUpdate('loivietiso@gmail.com','loi@vietiso.com','a','b','c');
//die($abc);


$clsISO = new ISO();
$assign_list["clsISO"] = $clsISO;
$clsConfiguration = new Configuration();
$assign_list["clsConfiguration"] = $clsConfiguration;
$clsPage = new Page();
$assign_list["clsPage"] = $clsPage;
$clsReviews = new Reviews();
$assign_list["clsReviews"] = $clsReviews;
$clsCountryEx = new Country();
$assign_list['clsCountryEx'] = $clsCountryEx;
$clsCity = new City();
$assign_list['clsCity'] = $clsCity;
$clsCruiseCat = new CruiseCat();
$assign_list['clsCruiseCat'] = $clsCruiseCat;
$clsTour = new Tour();
$assign_list['clsTour'] = $clsTour;
$clsTourCategory = new TourCategory();
$assign_list['clsTourCategory'] = $clsTourCategory;
$clsCategory_Country = new Category_Country();
$assign_list["clsCategory_Country"] = $clsCategory_Country;
$clsHotelProperty = new HotelProperty();
$assign_list["clsHotelProperty"] = $clsHotelProperty;
$clsRegion = new Region();
$assign_list["clsRegion"] = $clsRegion;
$clsHotel = new Hotel();
$assign_list["clsHotel"] = $clsHotel;




//print_r($_GET);die();

//print_r($_SERVER);die();

// luu ý khi cài mới
$package_id = PACKAGE_ID;

//$abc=$clsISO->decrypt('nnHjnmT10wq4b77bCtA+28I6mFqVfORCtg\/B+5bLgYJBOQ==');//Et3]fNQ2+b72nM
//77ggF5Z:P-e1hD
//print_r($abc);

$assign_list["package_id"] = $package_id;


//	print_r($_GET);die();
if (1 == 2) {
	$ip_log = $_SERVER['REMOTE_ADDR'];
	$details_log = unserialize(file_get_contents("http://ip-api.com/php/" . $ip_log));
	$ip_location = strtolower($details_log['countryCode']);
	$link_homepage = DOMAIN_NAME . $_SERVER['REQUEST_URI'];
	//    var_dump($link_homepage);
	$assign_list['ip_location'] = $ip_location;
	//var_dump($ip_location);
	if ($ip_location == 'vn' && $link_homepage == PCMS_URL) {
		header('Location: ' . PCMS_URL . $ip_location);
		exit();
	}
}

$cartSessionService = vnSessionGetVar('BookingTour');
$CurrencyCode = vnSessionGetVar('CurrencyCode');
$assign_list["CurrencyCode"] = $CurrencyCode;

#
$vietiso = isset($_GET['vietiso']) ? $_GET['vietiso'] : '';
$assign_list["vietiso"] = $vietiso;

$show = isset($_GET['show']) ? $_GET['show'] : '';
$assign_list["show"] = $show;

$cookie = isset($_GET['cookie']) ? $_GET['cookie'] : '';
$assign_list["cookie"] = $cookie;

$noindex = isset($_GET['noindex']) ? $_GET['noindex'] : '';
$assign_list["noindex"] = $noindex;

$_LANG_ID = isset($_GET['lang']) ? $_GET['lang'] : LANG_DEFAULT;
$assign_list["_LANG_ID"] = $_LANG_ID;


$listLang = $clsISO->getListLang();
$assign_list["listLang"] = $listLang;
if ($clsISO->checkInArray($listLang, $_LANG_ID) == 0) {
	header('Location:' . DOMAIN_NAME);
	exit();
}
#
if ($_LANG_ID != LANG_DEFAULT) {
	$extLang = '/' . $_LANG_ID;
	$HOMEPAGE_URL = '/' . $_LANG_ID . '/';
} else {
	$extLang = '';
	$HOMEPAGE_URL = '/';
}
if ($_LANG_ID != 'en') {
	$lang_sql = $_LANG_ID;
} else {
	$lang_sql = '';
}

$ip_log = $_SERVER['REMOTE_ADDR'];
$ipConfig = $clsConfiguration->getValue('IP_ONLINE');

// luu ý khi cài mới
/*if($mod=='api' || ($mod=='home' && ($act=='set_cookie' || $act=='set_cookie2'))){

	}elseif($cookie==1){

	}elseif($clsISO->checkInArray($ipConfig,$_SERVER['REMOTE_ADDR'])==1){
	
	}else{
		$customer_demo =$_COOKIE["customer_demo_isocms"];
		$user_demo =$_COOKIE["get_demo"];
		$user_demo_1 =$_COOKIE["get_demo_1"];
		$user_demo_2 =$_COOKIE["get_demo_2"];
		$user_demo_3 =$_COOKIE["get_demo_3"];
		if($user_demo=='demo' || $customer_demo=='demo_isocms' || $user_demo_1=='demo' || $user_demo_2=='demo' || $user_demo_3=='demo'){

		}else{
			header('Location:http://isocms.net');
			exit();
		}
	}*/


$twitter_site = explode('.', $_SERVER['HTTP_HOST']);
$twitter_site = $twitter_site[0];
$assign_list["twitter_site"] = $twitter_site;

$assign_list['extLang'] = $extLang;
$assign_list['HOMEPAGE_URL'] = $HOMEPAGE_URL;
$assign_list["lang_sql"] = $lang_sql;
#
$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'], 'iPad');
$assign_list["isiPad"] = $isiPad;
#
require_once(DIR_INCLUDES . '/Mobile_Detect.php');
$detect = new Mobile_Detect();
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$assign_list["deviceType"] = $deviceType;
#
if (preg_match("/msie 6.0/i", $_SERVER['HTTP_USER_AGENT']))
	$use_browser = "InternetExplorer6";
elseif (preg_match("/msie 7.0/i", $_SERVER['HTTP_USER_AGENT']))
	$use_browser = "InternetExplorer7";
elseif (preg_match("/Firefox/i", $_SERVER['HTTP_USER_AGENT']))
	$use_browser = "Firefox";
elseif (preg_match("/Chrome/i", $_SERVER['HTTP_USER_AGENT']))
	$use_browser = "Chrome";
else
	$use_browser = "Other";

//$assign_list["_isoman_use"] = _isoman_use;	
$assign_list["PCMS_DIR"] = PCMS_DIR;
$assign_list["PCMS_URL"] = PCMS_URL;
$assign_list["PAGE_NAME"] = PAGE_NAME;
$assign_list["DOMAIN_NAME"] = DOMAIN_NAME;
#
$assign_list["DIR_IMAGES"] = DIR_IMAGES;
$assign_list["URL_IMAGES"] = preg_replace('/(http|https|ftp):\/\/[\w]{0,}\.isocms.com\/\//', '/', URL_IMAGES);
$assign_list["URL_CSS"] = URL_CSS;
$assign_list["URL_JS"] = URL_JS;
$assign_list["URL_TINYMCE"] = URL_TINYMCE;
$assign_list["URL_TINYMCE5"] = URL_TINYMCE5;
#
$assign_list["ISOCMS_DIR"] = ISOCMS_DIR;
$assign_list["URL_THEMES"] = URL_THEMES;
$assign_list['tpl'] = ISOCMS_THEMES;
$assign_list['appID'] = appID;
$assign_list['LANG_DEFAULT'] = LANG_DEFAULT;
$assign_list["_LANG_ID"] = $_LANG_ID;
$assign_list["API_GOOGLE_MAPS"] = $clsConfiguration->getValue('API_GOOGLE_MAPS');

#
$assign_list["curl"] = $_SERVER['REQUEST_URI'];
$assign_list["REQUEST_URI"] = $_SERVER['REQUEST_URI'];


$assign_list["upd_version"] = time();
$assign_list["smarty"] = $smarty;
$assign_list['sid'] = session_id();
#

if (strlen(strstr($_SERVER['REQUEST_URI'], '//')) > 0) {
	$Rewrite_Url = str_replace('//', '/', $_SERVER['REQUEST_URI']);
	header('location:' . DOMAIN_NAME . $Rewrite_Url);
}
if (strlen(strstr($_SERVER['REQUEST_URI'], '?mod=')) > 0) {
	header('location:' . DOMAIN_NAME);
}
$lstCountryTourOutbound = $clsCountryEx->getCountryHaveTour([1, 4, 14, 18]);
$assign_list["lstCountryTourOutbound"] = $lstCountryTourOutbound;
unset($lstCountryTourOutbound);

$listCountryDestination = $clsCountryEx->getAll("is_trash=0 and is_online=1 order by order_no ASC", $clsCountryEx->pkey . ",title,slug,image,intro");
$assign_list["listCountryDestination"] = $listCountryDestination;
unset($listCountryDestination);



$lstCountryHotel = $clsCountryEx->getAll("is_trash=0 and is_online=1 AND country_id IN  (SELECT country_id FROM " . DB_PREFIX . "hotel WHERE is_trash=0 and is_online=1) order by order_no asc", $clsCountryEx->pkey . ",title,slug");
$assign_list["lstCountryHotel"] = $lstCountryHotel;
unset($lstCountryHotel);


$lstRegion = $clsRegion->getAll("is_trash=0 and is_online=1 and country_id IN (1,4,14,18) order by order_no asc", $clsRegion->pkey . ",title,slug,country_id");

$lstRegionTour = array();
$k_new = 0;
foreach ($lstRegion as $k => $v) {
	$listCityTourByRegion = $clsCity->getListCityTourByRegion($v['region_id'], '', $v['country_id']);
	if ($listCityTourByRegion) {
		$lstRegionTour[$k_new] = $v;
		$lstRegionTour[$k_new]['listCityTourByRegion'] = $listCityTourByRegion;
		$k_new++;
	}
}
$assign_list["lstRegionTour"] = $lstRegionTour;
unset($lstRegionTour);

$lstCityInbound = $clsCity->getAll("is_trash=0 and is_online=1 and country_id IN (1,4,14,18) order by order_no ASC", $clsCity->pkey . ",title,slug");
$assign_list["lstCityInbound"] = $lstCityInbound;
unset($lstCityInbound);
#
$lstCatTour = $clsTourCategory->getAll("is_trash=0 and is_online=1 and parent_id=0 order by order_no asc", $clsTourCategory->pkey . ",title,slug,image");
$assign_list["lstCatTour"] = $lstCatTour;
unset($lstCatTour);

$clsService = new Service();
$assign_list['clsService'] = $clsService;


//print_r(date('d/m/Y H:i')); die();
#
$assign_list['now'] = time();
$assign_list['now_next'] = time() + (24 * 60 * 60);
$assign_list['now_next_2_day'] = time() + (2 * 24 * 60 * 60);
$current_date = date('m/d/Y');
$current_time = strtotime($current_date);
$now_day = $current_time;
$assign_list['now_day'] = $now_day;
$now_month = date('m', time());
$assign_list['now_month'] = $now_month;

if ($clsISO->getCheckActiveModulePackage($package_id, 'cruise', 'cat', 'default')) {
	$lstCruiseCat = $clsCruiseCat->getAll("is_trash=0 and is_online=1 and parent_id=0 order by order_no asc", $clsCruiseCat->pkey . ",title,slug,image_banner");
	$assign_list["lstCruiseCat"] = $lstCruiseCat;
	unset($lstCruiseCat);
}

#- Payment Gateway config
$assign_list['PAYMENT_GLOBAL'] = PAYMENT_GLOBAL;
$assign_list['PAYMENT_ONLINE_GLOBAL'] = PAYMENT_ONLINE_GLOBAL;
if (PAYMENT_GLOBAL) {
	$table_name = DB_PREFIX . 'booking';
	#- Add column payment_method to table booking
	if (!$clsISO->checkColumnInTable($table_name, "payment_method")) {
		$clsISO->addColumnIntoTable($table_name, 'payment_method', 'booking_id', 'INT(10)');
	}
	if (PAYMENT_ONLINE_GLOBAL) {
		$assign_list['PAYMENT_CASH_ID'] = PAYMENT_CASH_ID;
		$assign_list['PAYMENT_TRANSFER_ID'] = PAYMENT_TRANSFER_ID;
		$assign_list['PAYMENT_ONEPAY_ATM'] = PAYMENT_ONEPAY_ATM;
		$assign_list['PAYMENT_ONEPAY_VISA'] = PAYMENT_ONEPAY_VISA;
		$assign_list['PAYMENT_PAYPAL_GATEWAY'] = PAYMENT_PAYPAL_GATEWAY;
		$assign_list['PAYMENT_VTCPAY_GATEWAY'] = PAYMENT_VTCPAY_GATEWAY;
		$assign_list['PAYMENT_VNPAY_GATEWAY'] = PAYMENT_VNPAY_GATEWAY;
		#- Add column relation to booking
		if (!$clsISO->checkColumnInTable($table_name, "list_billing_id")) {
			$clsISO->addColumnIntoTable($table_name, 'list_billing_id', 'booking_id', 'INT(10)');
		}
		#- Init Object
		global $clsBilling;
		$clsBilling = new Billing();
		$assign_list['clsBilling'] = $clsBilling;
	}
}
#- End Payment Gateway config
$clsWishlist = new Wishlist();
$assign_list["clsWishlist"] = $clsWishlist;

$assign_list["_ISOCMS_CLIENT_LOGIN"] = _ISOCMS_CLIENT_LOGIN;
if (_IS_TRAVEL_AGENT) {
	$clsAgent = new Agent();
	$assign_list["clsAgent"] = $clsAgent;
	$agentLoggedIn = $clsAgent->isLoggedIn();
	$assign_list["agentLoggedIn"] = $agentLoggedIn;
	if ($agentLoggedIn == 1) {
		$agent_id = $clsAgent->getUserID();
		$assign_list["agent_id"] = $agent_id;
		$oneAgent = $clsAgent->getOne($agent_id);
		$assign_list["oneAgent"] = $oneAgent;

		$is_agent = $oneAgent['type'];
	}
	$assign_list['is_agent'] = $is_agent ? $is_agent : 0;
}
if (_ISOCMS_CLIENT_LOGIN) {
	$clsProfile = new Profile();
	$assign_list["clsProfile"] = $clsProfile;

	$assign_list["appID"] = appID;
	$assign_list["AppSecret"] = AppSecret;

	$assign_list["GoogleID"] = GoogleID;
	$assign_list["GoogleSecret"] = GoogleSecret;

	$loggedIn = $clsProfile->isLoggedIn();
	$assign_list["loggedIn"] = $loggedIn;

	if ($loggedIn == 1) {
		$profile_id = $clsProfile->getUserID();

		$oneProfile = $clsProfile->getOne($profile_id);
		$assign_list["oneProfile"] = $oneProfile;
		$folder_name = $oneProfile['username'] . '_' . $profile_id;
		if (!file_exists('/home/isocms/domains/isocms.com/private_html/uploads/datastore/' . $folder_name)) {
			mkdir('/home/isocms/domains/isocms.com/private_html/uploads/datastore/' . $folder_name);
			chmod('/home/isocms/domains/isocms.com/private_html/uploads/datastore/' . $folder_name, 0777);
		}
		#- Wishlist
		$numWishlist = $clsWishlist->getAll("member_id='$profile_id'");
		$numWishlist = $numWishlist ? count($numWishlist) : 0;
		$assign_list["numWishlist"] = $numWishlist;
	}
	$assign_list["profile_id"] = $profile_id ? $profile_id : 0;
}

$return_url = '';
if (vnSessionExist('Link_login_book')) {
	$return_url = vnSessionGetVar('Link_login_book');
} else {
	$return_url = isset($_GET['return_url']) ? $_GET['return_url'] : '';
}
$assign_list['return_url'] = $return_url;

$clsTourProperty = new TourProperty();
$field = "{$clsTourProperty->pkey}";
$tmp = $clsTourProperty->getAll("is_trash=0 and is_online=1 and type='VISITORTYPE' order by order_no ASC limit 0,3", $field);
if (!empty($tmp)) {
	$adult_type_id = $tmp[0][$clsTourProperty->pkey] ? $tmp[0][$clsTourProperty->pkey] : 0;
	$child_type_id = $tmp[1][$clsTourProperty->pkey] ? $tmp[1][$clsTourProperty->pkey] : 0;
	$infant_type_id = $tmp[2][$clsTourProperty->pkey] ? $tmp[2][$clsTourProperty->pkey] : 0;
}
$lstAgeType = $clsTourProperty->getAll("is_trash=0 and is_online=1 and type='VISITORAGETYPE' order by order_no ASC limit 0,1", $clsTourProperty->pkey);
$age_type_id = $lstAgeType[0][$clsTourProperty->pkey] ? $lstAgeType[0][$clsTourProperty->pkey] : 0;

$lstHeightType = $clsTourProperty->getAll("is_trash=0 and is_online=1 and type='VISITORHEIGHTTYPE' order by order_no ASC limit 0,1", $clsTourProperty->pkey);
$height_type_id = $lstHeightType[0][$clsTourProperty->pkey] ? $lstHeightType[0][$clsTourProperty->pkey] : 0;

$assign_list["adult_type_id"] = $adult_type_id;
$assign_list["child_type_id"] = $child_type_id;
$assign_list["infant_type_id"] = $infant_type_id;
$assign_list["age_type_id"] = $age_type_id;
$assign_list["height_type_id"] = $height_type_id;


$short_rate = $clsISO->getShortRate();
$assign_list["short_rate"] = $short_rate;

$is_mod_member = $clsISO->getCheckActiveModulePackage($package_id, 'member', 'default', 'default');
$assign_list["is_mod_member"] = $is_mod_member;

$is_tour_departure_point = $clsISO->getCheckActiveModulePackage($package_id, 'tour', 'tour_departure_point', 'customize');
$assign_list["is_tour_departure_point"] = $is_tour_departure_point;

/*/////Setting Email Template ID/////*/
$email_template_tailor_id = 1;
$email_template_subscribe_id = 3;
$email_template_book_tour_id = 4;
$email_template_book_hotel_id = 5;
$email_template_contact_id = 6;
$email_template_signup_id = 7;
$email_template_book_cruise_id = 14;
$email_template_reg_advisory = 97;
$email_template_book_service_id = 45;
$email_template_payment_onepay_id = 46;
$email_template_payment_paypal_id = 47;
$email_template_change_pass_id = 26;
$email_template_reset_pass_id = 15;
$email_template_review_tour_id = 128;
$email_template_review_cruise_id = 129;
$email_template_download_brochure = 133;
//Agent
$email_template_signup_agent_id = 98;
$email_template_signup_ctv_id = 33;
$email_template_active_agent_id = 110;
$email_template_update_profile_agent_id = 116;
$email_template_block_agent_id = 122;
$email_template_change_pass_agent_id = 39;
$email_template_reset_pass_agent_id = 30;

if ($_LANG_ID == 'en') {
	$country_vn_id = 1;
	$about_us_id = 1;
	$facebook_plugin_lang = 'en_US';
	///recaptcha_google_lang
	$recaptcha_google_lang = 'en';
} elseif ($_LANG_ID == 'es') {
	$country_vn_id = 1;
	$about_us_id = 11;
	///facebook_plugin_lang
	$facebook_plugin_lang = 'es_ES';
	///recaptcha_google_lang
	$recaptcha_google_lang = 'es';
} elseif ($_LANG_ID == 'fr') {
	$country_vn_id = 1;
	$about_us_id = 3;
	///facebook_plugin_lang
	$facebook_plugin_lang = 'fr_FR';
	///recaptcha_google_lang
	$recaptcha_google_lang = 'fr';
} elseif ($_LANG_ID == 'kr') {
	$country_vn_id = 1;
	$about_us_id = 21;
	///facebook_plugin_lang
	$facebook_plugin_lang = 'ko_KR';
	///recaptcha_google_lang
	$recaptcha_google_lang = 'ko';
} elseif ($_LANG_ID == 'tw') {
	$country_vn_id = 1;
	$about_us_id = 22;
	///facebook_plugin_lang
	$facebook_plugin_lang = 'en_US';
	///recaptcha_google_lang
	$recaptcha_google_lang = 'zh-CN';
} elseif ($_LANG_ID == 'cn') {
	$country_vn_id = 1;
	$about_us_id = 22;
	///facebook_plugin_lang
	$facebook_plugin_lang = 'zh_CN';
	///recaptcha_google_lang
	$recaptcha_google_lang = 'zh-CN';
} else {
	$country_vn_id = 4;
	$about_us_id = 2;
	///facebook_plugin_lang
	$facebook_plugin_lang = 'vi_VN';
	///recaptcha_google_lang
	$recaptcha_google_lang = 'vi';
}
$assign_list["facebook_plugin_lang"] = $facebook_plugin_lang;
$assign_list["recaptcha_google_lang"] = $recaptcha_google_lang;
$assign_list["country_vn_id"] = $country_vn_id;
$assign_list["about_us_id"] = $about_us_id;

$DISCOUNT_AGENT = $clsISO->processFloatNumber($clsConfiguration->getValue('DiscountAgent'));
$DISCOUNT_CTV = $clsISO->processFloatNumber($clsConfiguration->getValue('DiscountCTV'));
define("DISCOUNT_AGENT", $DISCOUNT_AGENT);
define("DISCOUNT_CTV", $DISCOUNT_CTV);
$assign_list["DISCOUNT_AGENT"] = DISCOUNT_AGENT;
$assign_list["DISCOUNT_CTV"] = DISCOUNT_CTV;
$hasAPI = $clsConfiguration->getValue('SiteTourAPI');
$assign_list["hasAPI"] = $hasAPI;
if ($hasAPI) {
	$clsISO->updateInfoRateVCB();
	$clsISO->updateInfoRateECB();
}

// New Unikasia
$clsCountryEx	= 	new Country();
$assign_list["clsCountryEx"]	= 	$clsCountryEx;
$clsCruiseCat	= 	new CruiseCat();
$assign_list["clsCruiseCat"]	= 	$clsCruiseCat;
$clsCruiseCatCountry	= 	new CruiseCatCountry();
$assign_list["clsCruiseCatCountry"]	= 	$clsCruiseCatCountry;
#
$lstCountry	= 	$clsCountryEx->getAll("is_trash = 0 AND is_online = 1 ORDER BY order_no ASC");
$assign_list['lstCountry']	= 	$lstCountry;
#
/** --- Code danh mục Cruise --- **/
$list_country	= 	$clsCountryEx->getAll("is_trash = 0 AND is_online = 1 ORDER BY order_no ASC", $clsCountryEx->pkey);
$cfg_cate	=	[];
foreach ($list_country as $row) {
	$list_cruise_cat_country	=	$clsCruiseCatCountry->getAll("is_trash = 0 AND is_online = 1 AND country_id = " . $row['country_id'] . " ORDER BY order_no ASC", "cruise_cat_country_id, country_id, cat_id");
	#
	$arr_child  =   [];
	foreach ($list_cruise_cat_country as $c) {
		$arr_child[]    =   $c;
	}
	$cfg_cate[] =   [
		'info'  =>  $row,
		'child' =>  $arr_child
	];
}
$assign_list["cfg_cate"]	= 	$cfg_cate;
#
// Lấy $cfg_cate_first để show ảnh mặc định của menu cruise
$cfg_cate_first	= 	'';
foreach ($cfg_cate as $item) {
	if (isset($item['child'][0]['cruise_cat_country_id'])) {
		$cfg_cate_first	= 	$item['child'][0]['cruise_cat_country_id'];
		break;
	}
}
$assign_list["cfg_cate_first"]	= 	$cfg_cate_first;
/** --- End of Code danh mục Cruise --- **/
