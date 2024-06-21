<?php

global $core, $smarty, $clsISO;


//$clsISO->pre($_GET);
//die();

$clsHotel = new Hotel();

$show = isset($_GET['show']) ? $_GET['show'] : '';




$clsCountry =   new Country();

$smarty->assign("clsCountry", $clsCountry);

if (!empty($_GET['slug_country'])) {

    $country_id     =   $clsCountry->getBySlug($_GET['slug_country']);

    $info_country   =   $clsCountry->getOne($country_id);

    $cond           =   "is_trash = 0 AND is_online = 1 AND country_id <> $country_id";

} else {

    $cond   =   "is_trash = 0 AND is_online = 1";

}

$orderBy    =   " order by order_no asc";

$limit      =   " LIMIT 20";

$lstCountry =   $clsCountry->getAll("$cond $orderBy $limit");

$smarty->assign("lstCountry", $lstCountry);

if($show == 'HotelDetail') {
	$hotel_id = isset($_GET['hotel_id']) ? $_GET['hotel_id'] : '';
	$country_id = $clsHotel->getOne($hotel_id, 'country_id');


	$lstCountry =   $clsCountry->getAll($cond ." AND country_id <> " .$country_id[0] . ' ' .$orderBy .$limit);
	
	$smarty->assign("lstCountry", $lstCountry);


	
//	$clsISO->pre($lstCountry);
//	die();
}

