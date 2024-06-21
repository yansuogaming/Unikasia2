<?
global $core, $smarty, $clsISO, $assign_list;
#
$smarty->assign('clsISO', $clsISO);
#
$clsTourCategory        =   new TourCategory();
$smarty->assign('clsTourCategory', $clsTourCategory);
$clsCountry             =   new Country();
$smarty->assign('clsCountry', $clsCountry);
$clsCategory_Country    =   new Category_Country();
$smarty->assign('clsCategory_Country', $clsCategory_Country);
#
// ID của quốc gia
if (!empty($_GET['slug_country'])) {
    $country_id =   $clsCountry->getBySlug($_GET['slug_country']);
    $smarty->assign('country_id', $country_id);
}
// ID của danh mục trvs từ quốc gia
$cat_id =   isset($_GET['cat_id']) ? $_GET['cat_id'] : '';
$smarty->assign('cat_id', $cat_id);
#
$cond   =   '';
if (!empty($cat_id)) {
    $cond   .=  ' AND cat_id <> ' . $cat_id;
}
// List danh mục travel style by country 
$list_travel_style  =   $clsCategory_Country->getAll("is_trash = 0 AND is_online = 1 AND country_id = " . $country_id . $cond . " ORDER BY order_no ASC", 'category_country_id, cat_id');
$smarty->assign('list_travel_style', $list_travel_style);
// $clsISO->dd($list_travel_style);
