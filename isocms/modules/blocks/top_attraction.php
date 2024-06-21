<?php

global $core, $smarty, $mod, $act, $clsISO, $package_id, $deviceType, $country_id;


$clsCountry = new Country();
$smarty->assign("clsCountry", $clsCountry);
$clsCityStore = new CityStore();
$smarty->assign("clsCityStore", $clsCityStore);
$clsCity = new City();
$smarty->assign("clsCity", $clsCity);
$clsTourDestination = new TourDestination();
$smarty->assign("clsTourDestination", $clsTourDestination);
$where_country_id = "";
if (!empty($_GET['slug_country'])) {
    $country_id =  $clsCountry->getBySlug($_GET['slug_country']);
    $where_country_id = " and country_id = $country_id";
}
$sql_select = "is_trash = 0 and type = 'TOP' $where_country_id"; // fix cứng tạm
$orderBy_selected = " order by order_no ASC  limit 5";
$listSelected =  $clsCityStore->getAll( $sql_select.$orderBy_selected);
//print_r($sql_select.$orderBy_selected);

$smarty->assign('listSelected', $listSelected);