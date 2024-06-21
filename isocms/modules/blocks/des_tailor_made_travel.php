<?
global $core, $smarty, $clsISO, $assign_list;
#
$smarty->assign('clsISO', $clsISO);
#
$clsCountry =   new Country();
$smarty->assign('clsCountry', $clsCountry);
$clsWhy =   new Why();
$smarty->assign('clsWhy', $clsWhy);
$clsCategory_Country    =   new Category_Country();
$smarty->assign('clsCategory_Country', $clsCategory_Country);
$clsTourCategory    =   new TourCategory();
$smarty->assign('clsTourCategory', $clsTourCategory);
$clsGuideCat    =   new GuideCat();
$smarty->assign('clsGuideCat', $clsGuideCat);
$clsGuideCatStore    =   new GuideCatStore();
$smarty->assign('clsGuideCatStore', $clsGuideCatStore);
$clsTour    =   new Tour();
$smarty->assign('clsTour', $clsTour);
$clsGuide   =   new Guide();
$smarty->assign('clsGuide', $clsGuide);
#
// Slug của quốc gia
$country_slug   =   isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
$smarty->assign('country_slug', $country_slug);
// ID của quốc gia
if (!empty($country_slug)) {
    $country_id     =   $clsCountry->getBySlug($country_slug);
    $smarty->assign('country_id', $country_id);
    $info_country   =   $clsCountry->getOne($country_id);
    $smarty->assign('info_country', $info_country);
}
// ID của danh mục trvs từ quốc gia
$cat_id =   isset($_GET['cat_id']) ? $_GET['cat_id'] : '';
$smarty->assign('cat_id', $cat_id);
#
// List why choose Việt Nam 
$arr_why    =   $clsWhy->getAll("is_trash = 0 AND is_online = 1 AND type = 'DESTINATION' AND country_id = $country_id ORDER BY order_no ASC LIMIT 10");
$smarty->assign('arr_why', $arr_why);
#
// List danh mục travel style by country
$arr_trvs_country   =   $clsCategory_Country->getAll("is_trash = 0 AND is_online = 1 AND country_id = $country_id ORDER BY order_no ASC", 'category_country_id, cat_id');
$smarty->assign('arr_trvs_country', $arr_trvs_country);
#
// List danh mục travel guide by country
$arr_trvg_country   =   $clsGuideCat->getAll("is_trash = 0 AND is_online = 1 AND guidecat_id IN (SELECT guidecat_id FROM default_guidecat_store WHERE is_trash = 0 AND is_online = 1 AND country_id = $country_id) ORDER BY order_no ASC", 'guidecat_id, slug');
$smarty->assign('arr_trvg_country', $arr_trvg_country);
#
// Data danh mục travel style by country hiện tại
$info_current_trvs  =   $clsCategory_Country->getAll("is_trash = 0 AND is_online = 1 AND country_id = $country_id AND cat_id = $cat_id ORDER BY order_no ASC", "category_country_id, intro_youtube");
$smarty->assign('info_current_trvs', $info_current_trvs);
$id_current_trvs    =   $info_current_trvs[0]['category_country_id'];
$smarty->assign('id_current_trvs', $id_current_trvs);
$intro_youtube      =   $info_current_trvs[0]['intro_youtube'];
$smarty->assign('intro_youtube', $intro_youtube);
// $clsISO->dd($info_current_trvs);
