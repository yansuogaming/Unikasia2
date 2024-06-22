<?php
function default_default()
{
	global $assign_list, $_CONFIG, $core, $_LANG_ID, $title_page, $description_page, $keyword_page, $clsISO, $lnk, $country_id;
	#

	$clsCountryEx = new Country();
	$assign_list['clsCountryEx'] = $clsCountryEx;
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsHotel = new Hotel();
	$assign_list['clsHotel'] = $clsHotel;
	$clsProperty = new Property();
	$assign_list["clsProperty"] = $clsProperty;
	$clsHotelPriceRange = new HotelPriceRange();
	$assign_list["clsHotelPriceRange"] = $clsHotelPriceRange;
	$clsTestimonial = new Testimonial();
	$assign_list['clsTestimonial'] = $clsTestimonial;
	$clsConfigSetting = new Configuration();


	$assign_list['country_id'] = $country_id;
	#
	$recordPerPage = 8;
	$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

	$cond = "is_trash=0 and is_online=1";


	$lstConfigSetting = $clsConfigSetting->getAll($cond);
	$assign_list['lstConfigSetting'] = $lstConfigSetting;

	$star_id = isset($_GET['star_id']) ? $_GET['star_id'] : '';
	$type_hotel = isset($_GET['type_hotel']) ? $_GET['type_hotel'] : '';
	$min_price = isset($_GET['min_price']) ? $_GET['min_price'] : "";

	$max_price = isset($_GET['max_price']) ? $_GET['max_price'] : "";
	$price_range = isset($_GET['price_range']) ? $_GET['price_range'] : '';
	$assign_list["price_range"] = $price_range;
	$priceRange = ($price_range != '') ? explode(",", $price_range) : array();
	if (count($priceRange) > 0) {
		$condPrice = " AND (";
		$check_price_contact = 0;
		for ($i = 0; $i < count($priceRange); $i++) {
			$oneTmp = $clsHotelPriceRange->getOne($priceRange[$i]);
			$min_rate = intval($oneTmp['min_rate']);
			$max_rate = ($oneTmp['max_rate']);

			if ($min_rate == 0 && $max_rate > 0) {
				$check_price_contact = 1;
				$condPrice .= (($i > 0) ? ' OR (' : '(') . " price < $max_rate";
			} elseif ($min_rate > 0 && $max_rate == 0) {
				$condPrice .= (($i > 0) ? ' OR (' : '(') . " price > " . $min_rate;
			} else {
				$condPrice .= (($i > 0) ? ' OR (' : '(') . " price BETWEEN $min_rate AND $max_rate";
			}
			unset($min_rate, $max_rate, $oneTmp);
			$condPrice .= " )";
		}
		$condPrice .= " )";
		$cond_price_contact = "";
		if ($check_price_contact == 1) {
			$cond_price_contact = " OR hotel_id NOT IN (SELECT hotel_id FROM default_hotel_room) ";
		}
		$cond .= " AND (hotel_id IN (SELECT hotel_id FROM default_hotel_room WHERE 1=1 " . $condPrice . ") " . $cond_price_contact . ") ";
	}

	if (!empty($star_id)) {
		$cond .= " and star_id IN ({$star_id})";
	}

	if (!empty($type_hotel)) {
		$cond .= " and list_TypeHotel IN (
			SELECT property_id FROM " . $clsProperty->tbl . " 
			WHERE is_trash=0 and property_id IN ({$type_hotel})
		)";
	}

	if (!empty($min_price)) {
		$cond .= " and price_avg >= $min_price";
		$assign_list["min_price"] = $min_price;
	} elseif (empty($min_price)) {
		$assign_list["min_price"] = 0;
	}

	$max_price_value = $clsHotel->maxItem("price_avg", "lang_id='' and is_trash=0 and is_online=1");
	$assign_list["price_range_max"] = $max_price_value - 1;
	if (!empty($max_price)) {
		$cond .= " and price_avg <= $max_price";
		$assign_list["max_price"] = $max_price;
	} else {
		$assign_list["max_price"] = $max_price_value - 1;
	}

	$keyword = (isset($_GET['key']) && !empty($_GET['key'])) ? $_GET['key'] : '';
	if ($keyword != '') {
		$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";
		$assign_list["keyword"] = $keyword;
	}

	$number_adults = (isset($_GET['number_adults']) && !empty($_GET['number_adults'])) ? $_GET['number_adults'] : 1;
	$assign_list["number_adults"] = $number_adults;
	$number_child = (isset($_GET['number_child']) && !empty($_GET['number_child'])) ? $_GET['number_child'] : 0;
	$assign_list["number_child"] = $number_child;
	$check_in_date = (isset($_GET['check_in_date']) && !empty($_GET['check_in_date'])) ? $_GET['check_in_date'] : '';
	$assign_list["check_in_date"] = $check_in_date;
	$check_out_date = (isset($_GET['check_out_date']) && !empty($_GET['check_out_date'])) ? $_GET['check_out_date'] : '';
	$assign_list["check_out_date"] = $check_out_date;

	$order_by = " order by order_no ASC";

	$totalItem = $clsHotel->getAll($cond, $clsHotel->pkey);
	$totalRecord = $totalItem ? count($totalItem) : 0;
	$assign_list['totalRecord'] = $totalRecord;

	$lnk = $_SERVER['REQUEST_URI'];
	// if(isset($_GET['page'])){
	// 	$tmp = explode('&',$lnk);
	// 	$n = count($tmp)-1;
	// 	$la_it = '&'.$tmp[$n];
	// 	$str_len = -strlen($la_it);
	// 	$link_page = substr($lnk, 0, $str_len);
	// }else{
	// 	$link_page = $lnk;
	// }


	// $order_by = " ORDER BY order_no ASC";


	#
	$link_page = $clsISO->getLink('hotel');
	$config = array(
		'total'	=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html', '/', $link_page),
		'link_page_1'	=> $link_page
	);

	$totalPage = ceil($totalRecord / $recordPerPage);
	$order_by = " ORDER BY order_no ASC";

	$queryString = parse_url($lnk, PHP_URL_QUERY);
	parse_str($queryString, $queryParams);


	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";

	$conditionArray = [];
	$lstPriceRange = $clsHotelPriceRange->getAll("1=1 order by order_no asc", $clsHotelPriceRange->pkey . ',title, max_rate');
	$priceRangeIds = [];


	foreach ($queryParams as $key => $value) {
		if (strpos($value, ',') !== false) {
			$values = explode(',', $value);
			$escapedValues = array_map('intval', $values);
			$conditionArray[] = "$key IN (" . implode(',', $escapedValues) . ")";
		} else {
			$conditionArray[] = "$key = " . intval($value);
		}
	}

	$additionalConditions = !empty($conditionArray) ? ' AND ' . implode(' AND ', $conditionArray) : '';

	$listHotel = $clsHotel->getAll($sql, $clsHotel->pkey . ',star_id,price_range');

	if ($queryString == null) {
		$listHotel = $clsHotel->getAll($cond . $order_by . $limit, $clsHotel->pkey . ',star_id');
	} else {
		$listHotel = $clsHotel->getAll($cond . $additionalConditions . $order_by . $limit, $clsHotel->pkey . ',star_id');
	}



	$paginationLinks = array();

	$baseURL = $link_page;

	for ($i = 1; $i <= $totalPage; $i++) {
		$url = $baseURL . '&page=' . $i;

		if ($queryString !== null && $queryString !== '') {
			$url .= '?' . $queryString;
		}

		$paginationLinks[] = array(
			'page' => $i,
			'url' => $url,
			'is_current' => ($i == $currentPage)
		);
	}

	$prevLink = $currentPage > 1 ? $baseURL . '&page=' . ($currentPage - 1) . (empty($queryString) ? '' : '?' . $queryString) : '';
	$nextLink = $currentPage < $totalPage ? $baseURL . '&page=' . ($currentPage + 1) . (empty($queryString) ? '' : '?' . $queryString) : '';

	if (isset($_GET['page'])) {
		$tmp = explode('&', $lnk);
		$n = count($tmp) - 1;
		$la_it = '&' . $tmp[$n];
		$str_len = -strlen($la_it);
		$link_page = substr($lnk, 0, $str_len);
	} else {
		$link_page = $lnk;
	}

	$lstHotel = $clsHotel->getAll($cond);

	$lstCountry = $clsCountryEx->getAll($cond);
	$country_title = array();
	foreach ($lstCountry as $country) {
		$country_title[$country['country_id']] = $country['title'];
	}

	$link_page = strtok($lnk, '?');
	$queryString = parse_url($lnk, PHP_URL_QUERY);
	parse_str($queryString, $queryParams);


	$allTestimonial = $clsTestimonial->getAll($cond, $clsTestimonial->pkey);
	$assign_list['allTestimonial'] = $allTestimonial;
	unset($allTestimonial);
	$assign_list['listHotel'] = $listHotel;
	unset($listHotel);
	$assign_list['country_title'] = $country_title;
	unset($country_title);
	$assign_list['lstHotel'] = $lstHotel;
	unset($lstHotel);
	$assign_list['totalPage'] = $totalPage;
	$assign_list['queryString'] = $queryString;
	$assign_list['currentPage'] = $currentPage;
	$assign_list['paginationLinks'] = $paginationLinks;
	$assign_list['prevLink'] = $prevLink;
	$assign_list['nextLink'] = $nextLink;


	/* =============Title & Description Page================== */
	$title_page = $core->get_Lang('Stay') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$assign_list["lnk"] = $lnk;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
}
function default_place()
{
	global $assign_list, $_CONFIG, $core, $_LANG_ID, $title_page, $description_page, $keyword_page, $country_id, $city_id;
	global $clsISO, $package_id, $lnk;

	#
	$clsCountryEx = new Country();
	$assign_list["clsCountryEx"] = $clsCountryEx;
	$clsRegion = new Region();
	$assign_list["clsRegion"] = $clsRegion;
	$clsCity = new City();
	$assign_list["clsCity"] = $clsCity;
	$clsTour = new Tour();
	$assign_list['clsTour'] = $clsTour;
	$clsHotel = new Hotel();
	$assign_list['clsHotel'] = $clsHotel;
	$clsBlog = new Blog();
	$assign_list['clsBlog'] = $clsBlog;
	$clsGuide = new Guide();
	$assign_list["clsGuide"] = $clsGuide;
	$clsGuideCat = new GuideCat();
	$assign_list["clsGuideCat"] = $clsGuideCat;
	$clsGuideCatStore = new GuideCatStore();
	$assign_list["clsGuideCatStore"] = $clsGuideCatStore;
	$clsPagination = new Pagination();
	$assign_list["clsPagination"] = $clsPagination;
	$clsProperty = new Property();
	$assign_list["clsProperty"] = $clsProperty;
	$clsHotelPriceRange = new HotelPriceRange();
	$assign_list["clsHotelPriceRange"] = $clsHotelPriceRange;

	#
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;
	if ($clsISO->getCheckActiveModulePackage($package_id, 'guide', 'cat', 'default')) {
		$listGuideCat = $clsGuideCat->getAll("is_trash=0 and is_online=1 order by order_no ASC", $clsGuideCat->pkey . ',title,slug');
		$assign_list['listGuideCat'] = $listGuideCat;
		unset($listGuideCat);
	}
	if ($show == 'Country') {
		$slug_country = isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
		$res = $clsCountryEx->getAll("is_trash=0 and is_online=1 and slug='$slug_country' LIMIT 0,1");
		$country_id = $res[0][$clsCountryEx->pkey];
		if (intval($country_id) == 0) {
			header('Location:' . PCMS_URL . $extLang);
			exit();
		}
		$assign_list["countryItem"] = $res[0];
		$assign_list['country_id'] = $country_id;
		$place_id = $country_id;
		$clsClassTable = 'Country';
		#		
		$oneItem = $res[0];
		$title_page = $oneItem["title_hotel"];
		$intro_page = $clsCountryEx->getStripIntro($country_id, $oneItem);
		$intro_hotel = $clsCountryEx->getIntro($country_id, 'Hotel', false, $oneItem);
		$content_page = $clsCountryEx->getContent($country_id, $oneItem);
		$link_page = $clsCountryEx->getLink($country_id, $oneItem);

		$clsCityStore = new CityStore();
		$assign_list['clsCityStore'] = $clsCityStore;
	}

	if ($show == 'City') {
		$slug_city = isset($_GET['slug_city']) ? $_GET['slug_city'] : '';
		$city_id = $clsCity->getBySlug($slug_city);
		if (intval($city_id) == 0) {
			header('Location:' . PCMS_URL . $extLang);
			exit();
		}
		$assign_list["city_id"] = $city_id;
		$place_id = $city_id;
		$clsClassTable = 'City';

		$oneItem = $clsCity->getOne($city_id, 'title,slug,intro,content,intro_hotel,image_hotel');
		$title_page = $clsCity->getTitle($city_id, $oneItem);
		$intro_page = $clsCity->getIntro($city_id, '', false, $oneItem);
		$intro_hotel = $clsCity->getIntro($city_id, 'Hotel', false, $oneItem);
		$content_page = $clsCity->getContent($city_id, $oneItem);
		$link_page = $clsCity->getLink($city_id, '', false, $oneItem);
		$country_id = $oneItem['country_id'];
		$assign_list['country_id'] = $country_id;
	}
	if ($show == 'Region') {
		$slug_country = isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
		$res = $clsCountryEx->getAll("is_trash=0 and is_online=1 and slug='$slug_country' LIMIT 0,1", $clsCountryEx->pkey . ",title,slug,intro,content,intro_hotel,image_hotel");
		$country_id = $res[0][$clsCountryEx->pkey];
		$region_id = isset($_GET['region_id']) ? $_GET['region_id'] : '';

		if (intval($region_id) == 0) {
			header('Location:' . PCMS_URL . $extLang);
			exit();
		}
		$assign_list["country_id"] = $country_id;
		$assign_list["region_id"] = $region_id;
		$place_id = $region_id;
		$clsClassTable = 'Region';
		$oneItem = $res[0];
		$title_page = $clsRegion->getTitle($region_id, $oneItem);
		$intro_page = $clsRegion->getIntro($region_id, '', false, $oneItem);
		$intro_hotel = $clsRegion->getIntro($region_id, 'Hotel', $oneItem);
		$content_page = $clsRegion->getContent($region_id, $oneItem);
		$link_page = $clsRegion->getLink($region_id, '', false, $oneItem);
	}

	$listHotel = $clsHotel->getAll($cond . $order_by . $limit, $clsHotel->pkey . ',star_id');
	$lstHotel = $clsHotel->getAll($cond);
	$lstCountry = $clsCountryEx->getAll($cond);
	$country_title = array();

	foreach ($lstCountry as $country) {
		$country_title[$country['country_id']] = $country['title'];
	}
	$assign_list['listHotel'] = $listHotel;
	unset($listHotel);
	$assign_list['lstHotel'] = $lstHotel;
	unset($lstHotel);
	$assign_list['country_title'] = $country_title;
	unset($country_title);


	$assign_list['oneItem'] = $oneItem;
	$assign_list['TD'] = $title_page;
	$assign_list['ID'] = $intro_page;
	$assign_list['HOTEL_INTRO'] = $intro_hotel;
	$assign_list['CD'] = $content_page;
	$assign_list['link_page'] = $link_page;

	if ($clsISO->getCheckActiveModulePackage($package_id, 'region', 'default', 'default')) {
		$lstRegionByCountry = $clsRegion->getAll("is_trash=0 and is_online=1 and country_id='$country_id' order by order_no ASC", $clsRegion->pkey . ',title');
		$assign_list['lstRegionByCountry'] = $lstRegionByCountry;
		unset($lstRegionByCountry);

		$lstCityRegionOther = $clsCity->getAll("is_trash=0 and is_online=1 and country_id='$country_id' and region_id=0 and  city_id IN (SELECT city_id FROM " . DB_PREFIX . "hotel WHERE is_trash=0 and is_online=1) order by order_no ASC", $clsCity->pkey . ',title');
		$assign_list['lstCityRegionOther'] = $lstCityRegionOther;
		unset($lstCityRegionOther);
	}

	$recordPerPage = 8;
	$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

	$cond = "is_trash=0 and is_online=1";

	if ($show == 'Country') {
		$cond .= " and country_id='$country_id'";
	} elseif ($show == 'City') {
		$cond .= " and city_id='$city_id'";
	} elseif ($show == 'Region') {
		$cond .= " and city_id IN (SELECT city_id FROM " . DB_PREFIX . "city WHERE country_id='$country_id' and region_id='$region_id')";
	} else {
		$cond .= "";
	}
	$star_id = isset($_GET['star_id']) ? $_GET['star_id'] : array();
	$type_hotel = isset($_GET['type_hotel']) ? $_GET['type_hotel'] : array();
	$city = isset($_GET['city']) ? $_GET['city'] : "";
	$min_price = isset($_GET['min_price']) ? $_GET['min_price'] : "";
	$max_price = isset($_GET['max_price']) ? $_GET['max_price'] : "";

	$price_range = isset($_GET['price_range']) ? $_GET['price_range'] : '';
	$assign_list["price_range"] = $price_range;

	$priceRange = ($price_range != '') ? explode(",", $price_range) : array();
	if (count($priceRange) > 0) {
		$condPrice = " AND (";
		$check_price_contact = 0;
		for ($i = 0; $i < count($priceRange); $i++) {
			$oneTmp = $clsHotelPriceRange->getOne($priceRange[$i]);
			$min_rate = intval($oneTmp['min_rate']);
			$max_rate = ($oneTmp['max_rate']);

			if ($min_rate == 0 && $max_rate > 0) {
				$check_price_contact = 1;
				$condPrice .= (($i > 0) ? ' OR (' : '(') . " price < $max_rate";
			} elseif ($min_rate > 0 && $max_rate == 0) {
				$condPrice .= (($i > 0) ? ' OR (' : '(') . " price > " . $min_rate;
			} else {
				$condPrice .= (($i > 0) ? ' OR (' : '(') . " price BETWEEN $min_rate AND $max_rate";
			}
			unset($min_rate, $max_rate, $oneTmp);
			$condPrice .= " )";
		}
		$condPrice .= " )";
		$cond_price_contact = "";
		if ($check_price_contact == 1) {
			$cond_price_contact = " OR hotel_id NOT IN (SELECT hotel_id FROM default_hotel_room) ";
		}
		$cond .= " AND (hotel_id IN (SELECT hotel_id FROM default_hotel_room WHERE 1=1 " . $condPrice . ") " . $cond_price_contact . ") ";
	}

	if (!empty($star_id)) {
		$cond .= " and star_id IN ({$star_id})";
	}
	if (!empty($type_hotel)) {
		$cond .= " and list_TypeHotel IN (
			SELECT property_id FROM " . $clsProperty->tbl . " 
			WHERE is_trash=0 and property_id IN ({$type_hotel})
		)";
	}

	if (!empty($min_price)) {
		$cond .= " and price_avg >= $min_price";
		$assign_list["min_price"] = $min_price;
	} elseif (empty($min_price)) {
		$assign_list["min_price"] = 0;
	}

	$max_price_value = $clsHotel->maxItem("price_avg", "lang_id='' and is_trash=0 and is_online=1");
	$assign_list["price_range_max"] = $max_price_value - 1;
	if (!empty($max_price)) {
		$cond .= " and price_avg <= $max_price";
		$assign_list["max_price"] = $max_price;
	} else {
		$assign_list["max_price"] = $max_price_value - 1;
	}

	if (!empty($city)) {
		$cond .= " and city_id IN (" . $city . ")";
	}
	$keyword = (isset($_GET['key']) && !empty($_GET['key'])) ? $_GET['key'] : '';
	if ($keyword != '') {
		$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";
		$assign_list["keyword"] = $keyword;
	}

	$number_adults = (isset($_GET['number_adults']) && !empty($_GET['number_adults'])) ? $_GET['number_adults'] : 1;
	$assign_list["number_adults"] = $number_adults;
	$number_child = (isset($_GET['number_child']) && !empty($_GET['number_child'])) ? $_GET['number_child'] : 0;
	$assign_list["number_child"] = $number_child;
	$check_in_date = (isset($_GET['check_in_date']) && !empty($_GET['check_in_date'])) ? $_GET['check_in_date'] : '';
	$assign_list["check_in_date"] = $check_in_date;
	$check_out_date = (isset($_GET['check_out_date']) && !empty($_GET['check_out_date'])) ? $_GET['check_out_date'] : '';
	$assign_list["check_out_date"] = $check_out_date;

	$order_by = " order by order_no ASC";

	$totalItem = $clsHotel->getAll($cond, $clsHotel->pkey);
	$totalRecord = $totalItem ? count($totalItem) : 0;
	$assign_list['totalRecord'] = $totalRecord;

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

	$config = array(
		'total'	=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html', '/', $link_page),
		'link_page'	=> $link_page
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);
	#
	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	#
	$listHotelPlace = $clsHotel->getAll($cond . $order_by . $limit, $clsHotel->pkey . ',star_id,slug,title,address,intro,image');

	$assign_list['listHotelPlace'] = $listHotelPlace;
	$assign_list['page_view'] = $page_view;
	unset($listHotelPlace);
	unset($page_view);
	#

	$totalPage = $clsPagination->getTotalPage();
	$assign_list['totalPage'] = $totalPage;
	#
	if ($clsISO->getCheckActiveModulePackage($package_id, 'blog', 'blog_destination', 'customize')) {
		$sql = "is_trash=0 and is_online=1";
		if ($show == 'Country') {
			$listBlogPlace = $clsBlog->getAll($sql . " and blog_id IN (SELECT blog_id FROM " . DB_PREFIX . "blog_destination WHERE country_id='$country_id')", $clsBlog->pkey);
		} elseif ($show == 'City') {
			$listBlogPlace = $clsBlog->getAll($sql . " and blog_id IN (SELECT blog_id FROM " . DB_PREFIX . "blog_destination WHERE country_id='$country_id' and city_id='$city_id')", $clsBlog->pkey);
		} else {
			$listBlogPlace = $clsBlog->getAll($sql . " and blog_id IN (SELECT blog_id FROM " . DB_PREFIX . "blog_destination WHERE country_id='$country_id' and city_id IN (SELECT city_id FROM " . DB_PREFIX . "citystore WHERE is_trash=0 and country_id='$country_id' and region_id='$region_id' and type='REGION'))", $clsBlog->pkey);
		}
		$assign_list['listBlogPlace'] = $listBlogPlace;
		unset($listBlogPlace);
	}
	if (empty($lstRegionByCountry)) {
		$letter = array();
		foreach (range('a', 'z') as $i) {
			$lstCityAZ = $clsISO->getItemByAlphabetCityHotel($country_id, $city_id, $i);
			if ($lstCityAZ) {
				$letter[] = $i;
			}
		}
		$assign_list['letter'] = $letter;
	}

	$clsCountryEx = new Country();
	$assign_list['clsCountryEx'] = $clsCountryEx;
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsHotel = new Hotel();
	$assign_list['clsHotel'] = $clsHotel;
	$clsProperty = new Property();
	$assign_list["clsProperty"] = $clsProperty;
	$clsHotelPriceRange = new HotelPriceRange();
	$assign_list["clsHotelPriceRange"] = $clsHotelPriceRange;
	$clsTestimonial = new Testimonial();
	$assign_list['clsTestimonial'] = $clsTestimonial;
	$clsConfigSetting = new Configuration();


	$assign_list['country_id'] = $country_id;
	#
	$recordPerPage = 8;
	$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

	$cond = "is_trash=0 and is_online=1";


	$lstConfigSetting = $clsConfigSetting->getAll($cond);
	$assign_list['lstConfigSetting'] = $lstConfigSetting;

	$star_id = isset($_GET['star_id']) ? $_GET['star_id'] : '';
	$type_hotel = isset($_GET['type_hotel']) ? $_GET['type_hotel'] : '';
	$price_range = isset($_GET['price_range']) ? $_GET['price_range'] : '';
	$assign_list["price_range"] = $price_range;
	$priceRange = ($price_range != '') ? explode(",", $price_range) : array();
	$assign_list["min_price_search"] = reset($priceRange);
	$assign_list["max_price_search"] = end($priceRange);
	if (count($priceRange) > 0) {
		$condPrice = " AND (";
		$check_price_contact = 0;
		for ($i = 0; $i < count($priceRange); $i++) {
			$oneTmp = $clsHotelPriceRange->getOne($priceRange[$i]);
			$min_rate = intval($oneTmp['min_rate']);
			$max_rate = ($oneTmp['max_rate']);

			if ($min_rate == 0 && $max_rate > 0) {
				$check_price_contact = 1;
				$condPrice .= (($i > 0) ? ' OR (' : '(') . " price < $max_rate";
			} elseif ($min_rate > 0 && $max_rate == 0) {
				$condPrice .= (($i > 0) ? ' OR (' : '(') . " price > " . $min_rate;
			} else {
				$condPrice .= (($i > 0) ? ' OR (' : '(') . " price BETWEEN $min_rate AND $max_rate";
			}
			unset($min_rate, $max_rate, $oneTmp);
			$condPrice .= " )";
		}
		$condPrice .= " )";
		$cond_price_contact = "";
		if ($check_price_contact == 1) {
			$cond_price_contact = " OR hotel_id NOT IN (SELECT hotel_id FROM default_hotel_room) ";
		}
		$cond .= " AND (hotel_id IN (SELECT hotel_id FROM default_hotel_room WHERE 1=1 " . $condPrice . ") " . $cond_price_contact . ") ";
	}

	if (!empty($star_id)) {
		$cond .= " and star_id IN ({$star_id})";
	}

	if (!empty($type_hotel)) {
		$cond .= " and list_TypeHotel IN (
			SELECT property_id FROM " . $clsProperty->tbl . " 
			WHERE is_trash=0 and property_id IN ({$type_hotel})
		)";
	}
	$keyword = (isset($_GET['key']) && !empty($_GET['key'])) ? $_GET['key'] : '';
	if ($keyword != '') {
		$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";
		$assign_list["keyword"] = $keyword;
	}

	$number_adults = (isset($_GET['number_adults']) && !empty($_GET['number_adults'])) ? $_GET['number_adults'] : 1;
	$assign_list["number_adults"] = $number_adults;
	$number_child = (isset($_GET['number_child']) && !empty($_GET['number_child'])) ? $_GET['number_child'] : 0;
	$assign_list["number_child"] = $number_child;
	$check_in_date = (isset($_GET['check_in_date']) && !empty($_GET['check_in_date'])) ? $_GET['check_in_date'] : '';
	$assign_list["check_in_date"] = $check_in_date;
	$check_out_date = (isset($_GET['check_out_date']) && !empty($_GET['check_out_date'])) ? $_GET['check_out_date'] : '';
	$assign_list["check_out_date"] = $check_out_date;

	$order_by = " order by order_no ASC";

	$totalItem = $clsHotel->getAll($cond, $clsHotel->pkey);
	$totalRecord = $totalItem ? count($totalItem) : 0;

	$lnk = $_SERVER['REQUEST_URI'];
	$link_page = strtok($lnk, '?');

	$config = array(
		'total' => $totalRecord,
		'number_per_page' => $recordPerPage,
		'current_page' => $currentPage,
		'link' => str_replace('.html', '/', $link_page),
		'link_page_1' => $link_page
	);

	$totalPage = ceil($totalRecord / $recordPerPage);
	$order_by = " ORDER BY order_no ASC";

	$queryString = parse_url($lnk, PHP_URL_QUERY);
	parse_str($queryString, $queryParams);


	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";

	$conditionArray = [];

	foreach ($queryParams as $key => $value) {
		if (strpos($value, ',') !== false) {
			$values = explode(',', $value);
			$escapedValues = array_map('intval', $values);
			$conditionArray[] = "$key IN (" . implode(',', $escapedValues) . ")";
		} else {
			$conditionArray[] = "$key = " . intval($value);
		}
	}

	$additionalConditions = !empty($conditionArray) ? ' AND ' . implode(' AND ', $conditionArray) : '';

	$listHotel = $clsHotel->getAll($sql, $clsHotel->pkey . ',star_id,price_range');

	if ($queryString == null) {
		$listHotel = $clsHotel->getAll($cond . $order_by . $limit, $clsHotel->pkey . ',star_id');
	} else {
		$listHotel = $clsHotel->getAll($cond . $additionalConditions . $order_by . $limit, $clsHotel->pkey . ',star_id');
	}


	$paginationLinks = array();
	$baseURL = strtok($link_page, '?');
	$hasPageParam = strpos($baseURL, 'page=') !== false;

	for ($i = 1; $i <= $totalPage; $i++) {
		$url = $baseURL;

		if (!$hasPageParam) {
			$url .= ($i == 1 ? '?' : '&') . 'page=' . $i;
		} else {
			$url = preg_replace('/(&|\?)page=\d+/', '$1page=' . $i, $url);
		}

		if ($queryString !== null && $queryString !== '') {
			$url .= '?' . $queryString;
		}

		$paginationLinks[] = array(
			'page' => $i,
			'url' => $url,
			'is_current' => ($i == $currentPage)
		);
	}

	$prevLink = ($currentPage > 1 ? ($hasPageParam ? preg_replace('/(&|\?)page=\d+/', '$1page=' . ($currentPage - 1), $baseURL) : ($currentPage - 1 == 1 ? $baseURL . '?' : $baseURL . '&') . 'page=' . ($currentPage - 1)) . ($queryString !== null && $queryString !== '' ? '?' . $queryString : '') : '');

	$nextLink = ($currentPage < $totalPage ? ($hasPageParam ? preg_replace('/(&|\?)page=\d+/', '$1page=' . ($currentPage + 1), $baseURL) : $baseURL . '&page=' . ($currentPage + 1)) . ($queryString !== null && $queryString !== '' ? '?' . $queryString : '') : '');

	if (isset($_GET['page'])) {
		$tmp = explode('&', $link_page);
		$n = count($tmp) - 1;
		$la_it = '&' . $tmp[$n];
		$str_len = -strlen($la_it);
		$link_page = substr($link_page, 0, $str_len);
	} else {
		$link_page = $link_page;
	}

	$lstHotel = $clsHotel->getAll($cond);

	$lstCountry = $clsCountryEx->getAll($cond);
	$country_title = array();
	foreach ($lstCountry as $country) {
		$country_title[$country['country_id']] = $country['title'];
	}





	vnSessionSetVar('linkBack', $_SERVER['REQUEST_URI']);
	/* =============Title & Description Page================== */
	$title_page = $core->get_Lang('Stay in') . ' ' . $title_page . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $clsISO->getMetaDescription($place_id, $clsClassTable, $oneItem);
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	$assign_list['lstHotel'] = $lstHotel;
	unset($lstHotel);
	$assign_list['totalPage'] = $totalPage;
	$assign_list['currentPage'] = $currentPage;
	$assign_list['paginationLinks'] = $paginationLinks;
	$assign_list['prevLink'] = $prevLink;
	$assign_list['nextLink'] = $nextLink;
}
function default_ajLoadMoreHotel()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $country_id, $city_id;
	global $clsISO;
	#

	$clsCountryEx = new Country();
	$assign_list["clsCountryEx"] = $clsCountryEx;
	$clsHotel = new Hotel();
	$assign_list['clsHotel'] = $clsHotel;
	$clsPagination = new Pagination();
	$assign_list["clsPagination"] = $clsPagination;

	#
	$show = isset($_POST['show']) ? $_POST['show'] : '';

	$recordPerPage = 12;
	$keyword = isset($_POST['keyword']) ? intval($_POST['keyword']) : '';
	$currentPage = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$country_id = isset($_POST['country_id']) ? intval($_POST['country_id']) : '0';


	if ($show == 'Search') {
		$city_id = isset($_POST['city_id']) ? intval($_POST['city_id']) : '';
		$star_id = isset($_POST['star_id']) ? intval($_POST['star_id']) : '';
		$price_range = isset($_POST['price_range']) ? intval($_POST['price_range']) : '';
	}

	$cond = "is_trash=0 and is_online=1";

	if ($show == 'Search') {
		if (intval($country_id) > 0) {
			$cond .= " and country_id='$country_id'";
			$assign_list["country_id"] = $country_id;
		}
		if (intval($city_id) > 0) {
			$cond .= " and city_id='$city_id'";
			$assign_list["city_id"] = $city_id;
		}
		if (intval($star_id) > 0) {
			$cond .= " and star_id='$star_id'";
			$assign_list["star_id"] = $star_id;
		}
		if (intval($price_range) > 0) {
			$clsPriceRange = new HotelPriceRange();
			$oneTmp = $clsPriceRange->getOne($price_range);
			$min_rate = intval($oneTmp['min_rate']);
			$max_rate = ($oneTmp['max_rate']);

			if ($min_rate == 0 && $max_rate > 0) {
				$cond .= " and price_avg < '$max_rate'";
			} elseif ($min_rate > 0 && $max_rate == 0) {
				$cond .= " and price_avg > " . $min_rate;
			} else {
				$cond .= " and price_avg > '$min_rate' and price_avg < '$max_rate'";
			}
			$assign_list["price_range"] = $price_range;
		}
		if ($keyword != '') {
			$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";
			$assign_list["keyword"] = $keyword;
		}
	} else {
		if ($show == 'Country') {
			$cond .= " and country_id='$country_id'";
		} elseif ($show == 'City') {
			$cond .= " and city_id='$city_id'";
		} elseif ($show == 'Region') {
			$cond .= " and city_id IN (SELECT city_id FROM " . DB_PREFIX . "citystore WHERE country_id='$country_id' and region_id='$region_id')";
		} else {
			$cond .= "";
		}
	}
	$order_by = " order by order_no ASC";
	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";

	$listHotelPlace = $clsHotel->getAll($cond . $order_by . $limit, $clsHotel->pkey . ',star_id');
	$assign_list['listHotelPlace'] = $listHotelPlace;
	$html = $core->build('load_more_hotel.tpl');
	echo $html;
	die;
}

function default_ajLoadMoreHotelSearch()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $country_id, $city_id;
	global $clsISO;
	#

	$clsCountryEx = new Country();
	$assign_list["clsCountryEx"] = $clsCountryEx;
	$clsHotel = new Hotel();
	$assign_list['clsHotel'] = $clsHotel;
	$clsPagination = new Pagination();
	$assign_list["clsPagination"] = $clsPagination;

	#
	$show = isset($_POST['show']) ? $_POST['show'] : '';

	$recordPerPage = 12;
	$keyword = isset($_POST['keyword']) ? intval($_POST['keyword']) : '';
	$currentPage = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$country_id = isset($_POST['country_id']) ? intval($_POST['country_id']) : '0';


	$city_id = isset($_POST['city_id']) ? intval($_POST['city_id']) : '';
	$star_id = isset($_POST['star_id']) ? intval($_POST['star_id']) : '';
	$price_range = isset($_POST['price_range']) ? intval($_POST['price_range']) : '';

	$cond = "is_trash=0 and is_online=1";

	if (intval($country_id) > 0) {
		$cond .= " and country_id='$country_id'";
		$assign_list["country_id"] = $country_id;
	}
	if (intval($city_id) > 0) {
		$cond .= " and city_id='$city_id'";
		$assign_list["city_id"] = $city_id;
	}
	if (intval($star_id) > 0) {
		$cond .= " and star_id='$star_id'";
		$assign_list["star_id"] = $star_id;
	}
	if (intval($price_range) > 0) {
		$clsPriceRange = new HotelPriceRange();
		$oneTmp = $clsPriceRange->getOne($price_range);
		$min_rate = intval($oneTmp['min_rate']);
		$max_rate = ($oneTmp['max_rate']);

		if ($min_rate == 0 && $max_rate > 0) {
			$cond .= " and price_avg < '$max_rate'";
		} elseif ($min_rate > 0 && $max_rate == 0) {
			$cond .= " and price_avg > " . $min_rate;
		} else {
			$cond .= " and price_avg > '$min_rate' and price_avg < '$max_rate'";
		}
		$assign_list["price_range"] = $price_range;
	}
	if ($keyword != '') {
		$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";
		$assign_list["keyword"] = $keyword;
	}
	$order_by = " order by order_no ASC";
	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";

	$listHotelPlace = $clsHotel->getAll($cond . $order_by . $limit, $clsHotel->pkey . ',star_id');
	$assign_list['listHotelPlace'] = $listHotelPlace;
	$html = $core->build('load_more_hotel_search.tpl');
	echo $html;
	die;
}

function default_search()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain;

	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list["show"] = $show;
	$sort = isset($_GET['sort']) ? $_GET['sort'] : '';
	$assign_list["sort"] = $sort;
	$mode = vnSessionGetVar('_VIEWMODE_' . $mod . '_' . $act) != '' ? vnSessionGetVar('_VIEWMODE_' . $mod . '_' . $act) : 'list';
	$assign_list["mode"] = $mode;
	$sortType = vnSessionGetVar('_SORT_TYPE') != '' ? vnSessionGetVar('_SORT_TYPE') : '';
	$assign_list["sortType"] = $sortType;
	$sortVal = vnSessionGetVar('_SORT_VAL') != '' ? vnSessionGetVar('_SORT_VAL') : '';
	$assign_list["sortVal"] = $sortVal;
	$clsHotel = new Hotel();
	$assign_list["clsHotel"] = $clsHotel;
	$clsCountry = new Country();
	$assign_list["clsCountry"] = $clsCountry;
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsPriceRange = new PriceRange();
	$assign_list['clsPriceRange'] = $clsPriceRange;
	$country_id = (isset($_GET['country_id']) && $_GET['country_id'] != '') ? $_GET['country_id'] : '';
	$city_id = (isset($_GET['city_id']) && $_GET['city_id'] != '') ? $_GET['city_id'] : '';
	$star_id = (isset($_GET['star_id']) && $_GET['star_id'] != '') ? $_GET['star_id'] : '';
	$price_range = (isset($_GET['price_range']) && $_GET['price_range'] != '') ? $_GET['price_range'] : '';
	$keyword = (isset($_GET['key']) && !empty($_GET['key'])) ? $_GET['key'] : '';

	$sql = "SELECT DISTINCT t1.city_id FROM " . DB_PREFIX . "city t1 INNER JOIN " . DB_PREFIX . "hotel t2 WHERE t1.city_id = t2.city_id AND t2.country_id = '$country_id' AND t2.is_trash=0 AND t2.is_online=1 ORDER BY t1.slug ASC";

	$rslCity = $dbconn->GetAll($sql);
	$assign_list['rslCity'] = $rslCity;
	unset($rslCity);
	$cond = "is_trash=0 and is_online=1";
	if (intval($country_id) > 0) {
		$cond .= " and country_id='$country_id'";
		$assign_list["country_id"] = $country_id;
	}
	if (intval($city_id) > 0) {
		$cond .= " and city_id='$city_id'";
		$assign_list["city_id"] = $city_id;
	}
	if (intval($star_id) > 0) {
		$cond .= " and star_id='$star_id'";
		$assign_list["star_id"] = $star_id;
	}
	if (intval($price_range) > 0) {
		$clsPriceRange = new HotelPriceRange();
		$oneTmp = $clsPriceRange->getOne($price_range);
		$min_rate = intval($oneTmp['min_rate']);
		$max_rate = ($oneTmp['max_rate']);


		if ($min_rate == 0 && $max_rate > 0) {
			$cond .= " and price_avg < '$max_rate'";
		} elseif ($min_rate > 0 && $max_rate == 0) {
			$cond .= " and price_avg > " . $min_rate;
		} else {
			$cond .= " and price_avg > '$min_rate' and price_avg < '$max_rate'";
		}
		$assign_list["price_range"] = $price_range;
	}
	if ($keyword != '') {
		$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";

		$assign_list["keyword"] = $keyword;
	}
	#
	$order_by = " order by order_no ASC";
	if (isset($sort) && !empty($sort)) {
		switch ($sort) {
			case 'a-z':
				$order_by = "order by slug asc";
				break;
			case 'name':
				$order_by = "order by slug asc";
				break;
			case 'price':
				$order_by = "order by price asc";
				break;
			case 'star':
				$order_by = "order by star_id asc";
				break;
			default:
				$order_by = "order by order_no desc";
		}
	}
	#
	if (isset($sortType) && !empty($sortType)) {
		if ($sortType == 'DEFAULT') {
			if (isset($sortVal) && !empty($sortVal)) {
				switch ($sortVal) {
					case 'NAME':
						$order_by = "order by slug asc";
						break;
					case 'PRICE':
						$order_by = "order by price_avg asc";
						break;
					case 'RANK':
						$order_by = "order by star_id asc";
						break;
					default:
						$order_by = "order by order_no desc";
				}
			}
		}
		if ($sortType == 'CITY') {
			if (isset($sortVal) && !empty($sortVal)) {
				$cond .= " and city_id = '$sortVal'";
			}
		}
	}
	#
	$recordPerPage = 12;
	$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";

	$totalRecord = $clsHotel->getAll($cond) ? count($clsHotel->getAll($cond)) : 0;

	$assign_list['totalRecord'] = $totalRecord;
	$totalPage = ceil($totalRecord / $recordPerPage);
	$assign_list['totalPage'] = $totalPage;

	$listHotel = $clsHotel->getAll($cond . $order_by . $limit, $clsHotel->pkey . ',star_id');
	$assign_list['listHotel'] = $listHotel;
	unset($listHotel);

	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('resultsearch') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
	unset($clsHotel);
}
function default_detail()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $global_image_seo_page, $curl;
	global $country_id, $clsISO, $package_id, $hotel_id;
	#
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;
	#
	$clsHotel = new Hotel();
	$assign_list['clsHotel'] = $clsHotel;
	$clsHotelProperty = new HotelProperty();
	$assign_list['clsHotelProperty'] = $clsHotelProperty;
	$clsProperty = new Property();
	$assign_list['clsProperty'] = $clsProperty;
	$clsHotelAttraction = new HotelAttraction();
	$assign_list['$clsHotelAttraction'] = $clsHotelAttraction;
	$clsAttraction = new Attraction();
	$assign_list['clsAttraction'] = $clsAttraction;
	$clsCountryEx = new Country();
	$assign_list['clsCountryEx'] = $clsCountryEx;
	$clsCountry = new _Country();
	$assign_list['clsCountry'] = $clsCountry;
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsHotelImage = new HotelImage();
	$assign_list['clsHotelImage'] = $clsHotelImage;
	$clsHotelRoom = new HotelRoom();
	$assign_list['clsHotelRoom'] = $clsHotelRoom;
	$clsTour = new Tour();
	$assign_list['clsTour'] = $clsTour;
	
	$clsHotelPriceCol = new HotelPriceCol();
	$assign_list['clsHotelPriceCol'] = $clsHotelPriceCol;
	$clsHotelPriceVal = new HotelPriceVal();
	$assign_list['clsHotelPriceVal'] = $clsHotelPriceVal;

	$linkBack = vnSessionGetVar('linkBack');
	$assign_list['linkBack'] = $linkBack;

	$hotel_id = isset($_GET['hotel_id']) ? $_GET['hotel_id'] : 0;

	$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

	if (empty($clsHotel->checkOnlineBySlug($hotel_id, $slug))) {
		header('location:' . DOMAIN_NAME . $extLang);
		exit();
	}

	$assign_list['hotel_id'] = $hotel_id;
	$assign_list["table_id"] = $hotel_id;
	$oneItem = $clsTour->getOne($tour_id);

	////$abc= $clsHotel->getImageMapStatic($hotel_id,400,400);print_r($abc);die();

	$order = " order by order_no";

	$lstTour = $dbconn->getAll("SELECT * FROM `default_tour` WHERE tour_id IN (SELECT tour_id from default_hotel_extension where hotel_id = '$hotel_id')");

	$assign_list['lstTour'] = $lstTour;


	$clsReviews = new Reviews();
	$assign_list['clsReviews'] = $clsReviews;
	$lstReviews = $clsReviews->getAll("$cond is_online = 1 and table_id = '$hotel_id' $order");
	$countReview = $clsReviews->countItem("$cond is_online = 1 and table_id = $hotel_id $order");
	
	$has_data = count($lstHotelProperty) > 0;
	$assign_list['has_data'] = $has_data;
	
	
	



	//	$lstHotelItinerary = $clsHotelItinerary->getAll("$cond hotel_id = $hotel_id order by day");



	//	$lstHotelLeft = "$clsHotelImage->getAll($clsHotelImage->getAll($order_by. "is_trash=0 and table_id='$hotel_id' and image <> '' ",$clsHotelImage->pkey.',image,title');)"

	if (isset($_COOKIE['recent_posts'])) {
		$recent_posts = json_decode($_COOKIE['recent_posts'], true);

		if (!empty($recent_posts)) {
			$ids = implode(',', array_map('intval', $recent_posts));

			$cond1 = "hotel_id IN ($ids)";
			$limit = " LIMIT 3";
			$lstHotelRecent = $clsHotel->getAll("$cond1 $limit");
			$assign_list["lstHotelRecent"] = $lstHotelRecent;
		}
	}


	$oneItem = $clsHotel->getOne($hotel_id);

	$assign_list['oneItem'] = $oneItem;
	if ($oneItem['is_online'] == 0) {
		header('location:' . PCMS_URL . $extLang);
	}
	if ($clsISO->getCheckActiveModulePackage($package_id, 'hotel', 'hotel_gallery', 'customize')) {
		#-- Hotel Images
		$listImage = $clsHotelImage->getAll("is_trash=0 and table_id='$hotel_id' and image <> '' order by order_no ASC", $clsHotelImage->pkey . ',image,title');
		$assign_list['listImage'] = $listImage;



		$countlistImage = count($listImage);
		if ($countlistImage > 5) {
			$remaining = $countlistImage - 5;
		}
		$assign_list['countlistImage'] = $countlistImage;
		$assign_list['remaining'] = $remaining;
	}

	if ($clsISO->getCheckActiveModulePackage($package_id, 'hotel', 'hotel_room', 'customize')) {
		#-- Hotel Rooms
		$lstHotelRoom = $clsHotelRoom->getAll("is_trash=0 and hotel_id='$hotel_id' order by order_no ASC", $clsHotelRoom->pkey . ',room_stype_id');
		$assign_list['lstHotelRoom'] = $lstHotelRoom;
		unset($lstHotelRoom);
	}

	if ($clsISO->getCheckActiveModulePackage($package_id, 'hotel', 'property', 'default', 'HotelFacilities')) {
		#list all Room and hotel Facilities
		$list_HotelFacilities = $oneItem['list_HotelFacilities'];


		$lstHotelFacility = array();
		if ($list_HotelFacilities != '' && $list_HotelFacilities != '0') {
			$list_HotelFacilities = str_replace('||', '|', $list_HotelFacilities);
			$list_HotelFacilities = ltrim($list_HotelFacilities, '|');
			$list_HotelFacilities = rtrim($list_HotelFacilities, '|');
			$TMP = explode('|', $list_HotelFacilities);
			for ($i = 0; $i < count($TMP); $i++) {
				if (!in_array($TMP[$i], $lstHotelFacility)) {
					$lstHotelFacility[] = $TMP[$i];
				}
			}
		}
		$assign_list['lstHotelFacility'] = $lstHotelFacility;
		unset($lstHotelFacility);
	}

	if ($clsISO->getCheckActiveModulePackage($package_id, 'hotel', 'hotel_related', 'customize')) {
		#-- Hotel Related
		$lstHotelRelated = $clsHotel->getAll("is_trash=0 and is_online=1 and hotel_id <> '$hotel_id' and city_id ='" . $oneItem['city_id'] . "' order by order_no  limit 0,10", $clsHotel->pkey . ',star_id,slug,title,image,intro,address');

		$assign_list['lstHotelRelated'] = $lstHotelRelated;
	}

	if ($clsISO->getCheckActiveModulePackage($package_id, 'hotel', 'hotel_custom_field', 'customize')) {
		#- Custom Field
		$clsHotelCustomField = new HotelCustomField();
		$assign_list["clsHotelCustomField"] = $clsHotelCustomField;

		$listCustomField = $clsHotelCustomField->getAll("hotel_id='$hotel_id' and fieldtype='CUSTOM' order by order_no ASC", $clsHotelCustomField->pkey . ',fieldvalue,fieldname');
		$assign_list["listCustomField"] = $listCustomField;
		unset($listCustomField);
	}

	$lstHotelRoom = $clsHotelRoom->getAll("is_trash=0 and hotel_id='$hotel_id' and price >0 order by price ASC", $clsHotelRoom->pkey . ",price,number_adult");
	$min_price = $lstHotelRoom[0]['price'];

	if ($min_price) {
		$number_adult = $lstHotelRoom[0]['number_adult'] ? $lstHotelRoom[0]['number_adult'] : 2;
	}
	$assign_list["min_price"] = $min_price;
	$assign_list["number_adult"] = $number_adult;

	/*
	#Review
	$clsReviews = new Reviews(); $assign_list["clsReviews"] = $clsReviews;
	$clsReviewsHotel = new ReviewsHotel(); $assign_list['clsReviewsHotel'] = $clsReviewsHotel;
	$lstReviewHotel = $clsReviewsHotel->getAll(" hotel_id = '".$hotel_id."' limit 0,1",$clsReviewsHotel->pkey.',staff,amenities,clean,place,food_drink,worthy');
	$assign_list['lstReviewHotel'] = $lstReviewHotel[0];
//	$clsReviews->setDeBug(1);
	$lstReview = $clsReviews->getAll("is_trash=0 and is_online=1 and type='hotel' and table_id = '".$hotel_id."' order by order_no asc",$clsReviews->pkey.',review_date,fullname,content,title,rates,reg_date,fullname,country_id');
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
//	var_dump($lstReview);die;
	$assign_list["jsonReview"] = json_encode($jsonReview);
	unset($jsonReview);
	$assign_list["lstReview"] = $lstReview; 
	unset($lstReview);
	$assign_list['btn_view_more'] = '<a data-bs-toggle="modal" data-bs-target="#mdReview" class="read_more read_more_review">'.$core->get_Lang('Read more').'</a>';
	*/

	if (isset($_POST['ContactHotel']) &&  $_POST['ContactHotel'] == 'ContactHotel') {
		vnSessionDelVar('ContactCruise');
		vnSessionDelVar('ContactTour');
		vnSessionDelVar('ContactHotel');
		vnSessionDelVar('ContactVoucher');
		$cartSessionHotel = vnSessionGetVar('ContactHotel');
		if (empty($cartSessionHotel)) {
			$cartSessionHotel = array();
		}
		$assign_list["cartSessionHotel"] = $cartSessionHotel;

		$link = $clsHotel->getLinkContact();
		$cartSessionHotel['HOTEL'][$hotel_id] = array();
		foreach ($_POST as $k => $v) {
			$cartSessionHotel['HOTEL'][$hotel_id][$k] = $v;
		}
		$hotels = vnSessionGetVar('stay');
		$check_in_date = str_replace('/', '-', $hotels['check_in_date']);
		$check_in_date = strtotime($check_in_date);
		$check_out_date = str_replace('/', '-', $hotels['check_out_date']);
		$check_out_date = strtotime($check_out_date);
		foreach ($hotels as $k => $v) {
			$cartSessionHotel['HOTEL'][$hotel_id]['check_in_date'] = $check_in_date;
			$cartSessionHotel['HOTEL'][$hotel_id]['check_out_date'] = $check_out_date;
			$cartSessionHotel['HOTEL'][$hotel_id]['number_adults'] = $hotels['number_adults'];
			$cartSessionHotel['HOTEL'][$hotel_id]['number_child'] = $hotels['number_child'];
		}

		vnSessionSetVar('ContactHotel', $cartSessionHotel);
		header('location:' . $link);
		exit();
	}


	$listProterty_id = $clsHotel->getOne($hotel_id, list_HotelFacilities)[0];
	$string = trim($listProterty_id, '|');
	$array = explode('|', $string);
	$result = implode(',', $array);
	$listHotelFacilitiesFavorite = $clsProperty->getAll("is_trash=0 and type='HotelFacilities' and is_favorite=1 and property_id IN ($result) order by order_no ASC");

	//	var_dump($listHotelFacilitiesFavorite); die();

	$assign_list["listHotelFacilitiesFavorite"] = $listHotelFacilitiesFavorite;
	$listHotelFacilitiesOther = $clsProperty->getAll("is_trash=0 and type='HotelFacilities' and is_favorite=0 and property_id order by order_no ASC");
	$assign_list["listHotelFacilitiesOther"] = $listHotelFacilitiesOther;

    $lstHotelProperty = $clsHotelProperty->getAll("is_trash=0 and is_online=1 and type='HotelCategory' order by order_no ASC");
    $assign_list["lstHotelProperty"] = $lstHotelProperty;
//		var_dump($lstHotelProperty); die();

	$sqlCountRate = "SELECT rates, ROUND(COUNT(rates) / $countReview * 100) AS count_percent, COUNT(rates) as count FROM default_reviews WHERE $cond is_online = 1 and table_id = $hotel_id GROUP BY rates;";

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
	$assign_list["hotel_id"] = $hotel_id;
	$assign_list["table_id"] = $hotel_id;
	$assign_list["lstHotelItinerary"] = $lstHotelItinerary;
	$assign_list["clsHotelImage"] = $clsHotelImage;
	$assign_list["lstReviews"] = $lstReviews;
	$assign_list["countReview"] = $countReview;
	$assign_list["reviewProgress"] = $result;
	$assign_list["travel_style_id"] = $travel_style_id;
	$assign_list["country_id"] = $country_id;
	$format_time_now = date('M d, Y', strtotime('+1 day'));
	$assign_list['format_time_now'] = $format_time_now;

	$filteredListImage = [];
	foreach ($listImage as $image) {
		if ($image['hotel_image_id'] != $big_image['hotel_image_id']) {
			$filteredListImage[] = $image;
		}
	}

	$assign_list["filteredListImage"] = $filteredListImage;



	/*=============Title & Description Page==================*/
	$title_page = $clsHotel->getTitle($hotel_id, $oneItem);
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$description_page = $clsISO->getMetaDescription($hotel_id, 'Hotel', $oneItem);
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsISO->getPageImageShare($hotel_id, 'Hotel', $oneItem);
	$assign_list["global_image_seo_page"] = $global_image_seo_page;

	vnSessionDelVar('linkBack');
	vnSessionSetVar('linkBack', $_SERVER['REQUEST_URI']);
}
function default_detail2()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $global_image_seo_page, $curl;
	global $country_id, $clsISO, $package_id;
	#
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;
	#
	$clsHotel = new Hotel();
	$assign_list['clsHotel'] = $clsHotel;
	$clsHotelProperty = new HotelProperty();
	$assign_list['clsHotelProperty'] = $clsHotelProperty;
	$clsProperty = new Property();
	$assign_list['clsProperty'] = $clsProperty;
	$clsHotelAttraction = new HotelAttraction();
	$assign_list['$clsHotelAttraction'] = $clsHotelAttraction;
	$clsAttraction = new Attraction();
	$assign_list['clsAttraction'] = $clsAttraction;
	$clsCountryEx = new Country();
	$assign_list['clsCountryEx'] = $clsCountryEx;
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsHotelImage = new HotelImage();
	$assign_list['clsHotelImage'] = $clsHotelImage;
	$clsHotelRoom = new HotelRoom();
	$assign_list['clsHotelRoom'] = $clsHotelRoom;
	$clsHotelPriceCol = new HotelPriceCol();
	$assign_list['clsHotelPriceCol'] = $clsHotelPriceCol;
	$clsHotelPriceVal = new HotelPriceVal();
	$assign_list['clsHotelPriceVal'] = $clsHotelPriceVal;

	$linkBack = vnSessionGetVar('linkBack');
	$assign_list['linkBack'] = $linkBack;

	$hotel_id = isset($_GET['hotel_id']) ? $_GET['hotel_id'] : 0;
	$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

	if (empty($clsHotel->checkOnlineBySlug($hotel_id, $slug))) {
		header('location:' . DOMAIN_NAME . $extLang);
		exit();
	}

	$assign_list['hotel_id'] = $hotel_id;
	$oneItem = $clsHotel->getOne($hotel_id);
	$assign_list['oneItem'] = $oneItem;
	if ($oneItem['is_online'] == 0) {
		header('location:' . PCMS_URL . $extLang);
	}
	if ($clsISO->getCheckActiveModulePackage($package_id, 'hotel', 'hotel_gallery', 'customize')) {
		#-- Hotel Images
		$listImage = $clsHotelImage->getAll("is_trash=0 and table_id='$hotel_id' and image <> '' order by order_no ASC", $clsHotelImage->pkey . ',image');
		$assign_list['listImage'] = $listImage;
		unset($listImage);
	}

	if ($clsISO->getCheckActiveModulePackage($package_id, 'hotel', 'hotel_room', 'customize')) {
		#-- Hotel Rooms
		$lstHotelRoom = $clsHotelRoom->getAll("is_trash=0 and hotel_id='$hotel_id' order by order_no ASC", $clsHotelRoom->pkey . ',room_stype_id');
		$assign_list['lstHotelRoom'] = $lstHotelRoom;
		unset($lstHotelRoom);
	}

	if ($clsISO->getCheckActiveModulePackage($package_id, 'property', 'default', 'default', 'HotelFacilities')) {
		#list all Room and hotel Facilities
		$list_HotelFacilities = $oneItem['list_HotelFacilities'];
		$lstHotelFacility = array();
		if ($list_HotelFacilities != '' && $list_HotelFacilities != '0') {
			$list_HotelFacilities = str_replace('||', '|', $list_HotelFacilities);
			$list_HotelFacilities = ltrim($list_HotelFacilities, '|');
			$list_HotelFacilities = rtrim($list_HotelFacilities, '|');
			$TMP = explode('|', $list_HotelFacilities);
			for ($i = 0; $i < count($TMP); $i++) {
				if (!in_array($TMP[$i], $lstHotelFacility)) {
					$lstHotelFacility[] = $TMP[$i];
				}
			}
		}
		$assign_list['lstHotelFacility'] = $lstHotelFacility;
		unset($lstHotelFacility);
	}

	if ($clsISO->getCheckActiveModulePackage($package_id, 'hotel', 'hotel_related', 'customize')) {
		#-- Hotel Related
		$lstHotelRelated = $clsHotel->getAll("is_trash=0 and is_online=1 and hotel_id <> '$hotel_id' order by order_no desc limit 0,10", $clsHotel->pkey . ',star_id');

		$assign_list['lstHotelRelated'] = $lstHotelRelated;
		unset($lstHotelRelated);
	}

	if ($clsISO->getCheckActiveModulePackage($package_id, 'hotel', 'hotel_custom_field', 'customize')) {
		#- Custom Field
		$clsHotelCustomField = new HotelCustomField();
		$assign_list["clsHotelCustomField"] = $clsHotelCustomField;

		$listCustomField = $clsHotelCustomField->getAll("hotel_id='$hotel_id' and fieldtype='CUSTOM' order by order_no ASC");
		$assign_list["listCustomField"] = $listCustomField;
		unset($listCustomField);
	}

	/*=============Title & Description Page==================*/
	$title_page = $clsHotel->getTitle($hotel_id) . ' | ' . $core->get_Lang('stay') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$description_page = $clsISO->getMetaDescription($hotel_id, 'Hotel');
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsISO->getPageImageShare($hotel_id, 'Hotel');
	$assign_list["global_image_seo_page"] = $global_image_seo_page;

	vnSessionDelVar('linkBack');
	vnSessionSetVar('linkBack', $_SERVER['REQUEST_URI']);
}

function default_book()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $title_page, $description_page, $keyword_page, $clsISO;
	global $_lang, $extLang, $_LANG_ID, $profile_id, $loggedIn;


	#
	$clsHotel = new Hotel();
	$assign_list['clsHotel'] = $clsHotel;
	$clsHotelRoom = new HotelRoom();
	$assign_list['clsHotelRoom'] = $clsHotelRoom;
	$clsCountryLt = new _Country();
	$assign_list['clsCountryLt'] = $clsCountryLt;
	$assign_list['lstCountry'] = $clsCountryLt->getAll("1=1 order by order_no asc");
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsCountryEx = new Country();
	$assign_list['clsCountryEx'] = $clsCountryEx;

	#Get By Slug
	$slug = $_GET['slug'];
	$hotel_id = $clsHotel->getBySlug($slug);
	if ($hotel_id == '') {
		header('location:' . PCMS_URL);
	}
	$assign_list['hotel_id'] = $hotel_id;
	#
	$hotel_room_id = isset($_COOKIE['Session_HotelRoomID']) ? intval($_COOKIE['Session_HotelRoomID']) : 0;
	$assign_list['hotel_room'] = $hotel_room_id;

	$allHotelRoom = $clsHotelRoom->getAll("is_trash=0 and hotel_id = '$hotel_id' order by order_no ASC", $clsHotelRoom->pkey);
	$assign_list['allHotelRoom'] = $allHotelRoom;
	$departure_date = isset($_POST['checkin']) ? $_POST['checkin'] : '';
	$departure_date = strtotime($departure_date);
	#
	if (!empty($profile_id)) {
		$clsProfile = new Profile();
		$assign_list['clsProfile'] = $clsProfile;
		$name = $clsProfile->getFullname($profile_id);
		$assign_list['name'] = $name;
		$email = $clsProfile->getEmail($profile_id);
		$assign_list['email'] = $email;
		$phone = $clsProfile->getPhone($profile_id);
		$assign_list['phone'] = $phone;
		$country_id = $clsProfile->getOneField('country_id', $profile_id);
		$assign_list['country_id'] = $country_id;
	}
	$err_msg = '';
	if (isset($_POST['book']) && $_POST['book'] == 'book') {
		$name = $_POST['name'];
		if ($name == '') {
			$err_msg .= '&bull; ' . $core->get_Lang('Please enter your fullname') . ' <br />';
		}
		$email = $_POST['email'];
		if ($email == '') {
			$err_msg .= '&bull; ' . $core->get_Lang('Please enter your email') . ' <br />';
		}
		$phone = $_POST['phone'];
		if ($phone == '') {
			$err_msg .= '&bull; ' . $core->get_Lang('Please enter your phone') . ' <br />';
		}
		$country_id = $_POST['country_id'];
		if ($country_id == '') {
			$err_msg .= '&bull; ' . $core->get_Lang('Please select your country') . ' <br />';
		}
		$request = $_POST['request'];
		if ($request == '') {
			$err_msg .= '&bull; ' . $core->get_Lang('Please enter request') . ' <br />';
		}
		$checkin = $_POST['checkin'];
		if ($checkin == '') {
			$err_msg .= '&bull; ' . $core->get_Lang('Please select check in date') . ' <br />';
		}
		$checkout = $_POST['checkout'];
		if ($checkout == '') {
			$err_msg .= '&bull; ' . $core->get_Lang('Please select check out date') . ' <br />';
		}
		#- Verify Captcha
		if (_ISOCMS_CAPTCHA == 'IMG') {
			$security_code = isset($_POST["security_code"]) ? trim($_POST["security_code"]) : '';
			$security_code = strtoupper($security_code);
			if (!empty($security_code) && $security_code != $_SESSION['skey']) {
				$err_msg .= '&bull; ' . $core->get_Lang('Secure code not match') . ' <br />';
			}
		} else if (_ISOCMS_CAPTCHA == 'reCAPTCHA') {
			if (!$clsISO->checkGoogleReCAPTCHA()) {
				$err_msg .= '&bull; ' . $core->get_Lang('Secure code not match') . ' <br />';
			}
		}
		#
		if ($err_msg == '') {
			$clsBooking = new Booking();
			$booking_id = $clsBooking->getMaxId();
			$booking_code = $clsBooking->generateBookingCode($booking_id);
			#
			$f = "booking_id,target_id,full_name,email,phone,country_id,clsTable,booking_code,booking_store,booking_type,reg_date,departure_date,ip_booking";
			$v = "'$booking_id'
				,'$hotel_id'
				,'$name'
				,'$email'
				,'$phone'
				,'$country_id'
				,'Hotel'
				,'$booking_code'
				,'" . serialize($_POST) . "'
				,'Hotel'
				,'" . $departure_date . "'
				,'" . time() . "'
				,'" . $_SERVER['REMOTE_ADDR'] . "'";
			#
			if (_ISOCMS_CLIENT_LOGIN) {
				$f .= ",member_id";
				$v .= ",'$profile_id'";
			}
			//print_r($f.'<br />'.$v); die();
			if ($clsBooking->insertOne($f, $v)) {
				$clsBooking->sendEmailBookingHotel($booking_id, 0);
				header('location: ' . $extLang . '/booking/hotel/successful');
			} else {
				header('location: ' . $extLang . '/booking/hotel/error');
			}
			unset($clsBooking);
		} else {
			$assign_list["err_msg"] = $err_msg;
			foreach ($_POST as $key => $val) {
				$assign_list[$key] = $val;
			}
		}
	}
	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Booking Hotels') . ' | ' . $clsHotel->getTitle($hotel_id) . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
	unset($clsHotel);
	unset($clsHotelRoom);
	unset($clsBookingHotel);
	unset($clsCountry);
	unset($clsImage);
	unset($clsISO);
}
function default_loadCity()
{
	global $core, $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
	#
	$clsCity = new City();
	$country_id = $_POST['country_id'];
	$city_id = isset($_POST['city_id']) ? $_POST['city_id'] : '';
	$Html = '<option value="0"> -- ' . $core->get_Lang('selectdestination') . ' -- </option>';
	$lstCity = $clsCity->getAll("is_trash=0 and is_online=1 and country_id='$country_id' order by order_no asc", $clsCity->pkey);
	if (is_array($lstCity) && count($lstCity) > 0) {
		foreach ($lstCity as $k => $v) {
			$selected = $city_id == $v[$clsCity->pkey] ? 'selected="selected"' : '';
			if ($clsCity->countHotel($country_id, $v[$clsCity->pkey])) {
				$Html .= '<option value="' . $v[$clsCity->pkey] . '" ' . $selected . '>-- ' . $clsCity->getTitle($v[$clsCity->pkey]) . ' --</option>';
			}
		}
	}
	echo $Html;
	die();
}

function default_ajLoadBedType()
{
	global $core, $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
	#
	$clsHotelPriceCol = new HotelPriceCol();
	$clsHotelPriceVal = new HotelPriceVal();
	$hotel_id = $_POST['hotel_id'];
	$hotel_room_id = $_POST['hotel_room_id'];

	$html = '<option value="">-- ' . $core->get_Lang('select') . ' --</option>';
	$lst = $clsHotelPriceCol->getAll("is_trash=0 and hotel_id='$hotel_id' order by order_no asc");
	if (!empty($lst)) {
		$i = 0;
		foreach ($lst as $item) {
			$selected = $city_id == $item[$clsHotelPriceCol->pkey] ? 'selected="selected"' : '';
			$html .= '<option value="' . $item[$clsHotelPriceCol->pkey] . '" ' . $selected . '>
				-- ' . $clsHotelPriceCol->getTitle($item[$clsHotelPriceCol->pkey]) . ' (' . $clsHotelPriceVal->getPrice($hotel_room_id, $item[$clsHotelPriceCol->pkey]) . ')
			</option>';
			++$i;
		}
	}
	echo $html;
	die();
}
function default_ajSetBookHotelRoom()
{
	global $core, $dbconn, $clsISO;
	#
	$hotel_id = isset($_POST['hotel_id']) ? intval($_POST['hotel_id']) : 0;
	$hotel_room_id = isset($_POST['hotel_room_id']) ? intval($_POST['hotel_room_id']) : 0;
	#
	if (!empty($hotel_room_id) && !empty($hotel_id)) {
		setcookie('Session_HotelRoomID', $hotel_room_id, time() + (86400 * 30), "/");
		setcookie('Session_HotelID', $hotel_id, time() + (86400 * 30), "/");
	} else {
		$hotel_room_id = isset($_COOKIE['Session_HotelRoomID']) ? intval($_COOKIE['Session_HotelRoomID']) : '0';
		$hotel_id = isset($_COOKIE['Session_HotelID']) ? intval($_COOKIE['Session_HotelID']) : '0';
		setcookie('Session_HotelRoomID', $hotel_room_id, time() + (86400 * 30), "/");
		setcookie('Session_HotelID', $hotel_id, time() + (86400 * 30), "/");
	}
	echo ($hotel_id);
	die();
}
function default_ajMakeSelectHotelRoom()
{
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
	#
	$clsHotelRoom = new HotelRoom();
	$clsISO = new ISO();

	#
	$hotel_room_id = isset($_POST['hotel_room_id']) ? intval($_POST['hotel_room_id']) : 0;
	$number_room = isset($_POST['number_room']) ? intval($_POST['number_room']) : 0;
	#
	$html = '';
	if (intval($hotel_room_id) > 0) {
		$number_room_hotel = $clsHotelRoom->getOneField('number_room', $hotel_room_id);
		$html .= $clsISO->getSelect(1, $number_room_hotel, $number_room);
	} else {
		$html .= $clsISO->getSelect(1, 10, $number_room);
	}
	echo $html;
	die();
}
