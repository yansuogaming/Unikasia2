<?
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
global $core, $smarty, $clsISO, $assign_list, $deviceType;
#
$smarty->assign('clsISO', $clsISO);
$smarty->assign('deviceType', $deviceType);
#
$clsCountry =   new Country();
$smarty->assign('clsCountry', $clsCountry);
$clsGuideCat    =   new GuideCat();
$smarty->assign('clsGuideCat', $clsGuideCat);
$clsGuide   =   new Guide();
$smarty->assign('clsGuide', $clsGuide);
$clsTour    =   new Tour();
$smarty->assign('clsTour', $clsTour);
$clsTourDestination =   new TourDestination();
$smarty->assign('clsTourDestination', $clsTourDestination);
$clsTourCategory    =   new TourCategory();
$smarty->assign('clsTourCategory', $clsTourCategory);
$clsCategory_Country    =   new Category_Country();
$smarty->assign('clsCategory_Country', $clsCategory_Country);
$clsReviews =   new Reviews();
$smarty->assign('clsReviews', $clsReviews);
#	
$show   =   isset($_GET['show']) ? $_GET['show'] : '';
#
$cond   =   ' is_trash = 0 AND is_online = 1';
$order1 =   ' ORDER BY order_no ASC';
$order2 =   ' ORDER BY rand()';
$limit  =   ' LIMIT 3';
#
if ($show === 'GuideCat') {
    $guidecat_slug  =   $_GET['slug_guidecat'] ?? '';
    // $smarty->assign('guidecat_slug', $guidecat_slug);
    $guidecat_id    =   $_GET['guidecat_id'] ?? 0;
    $smarty->assign('guidecat_id', $guidecat_id);
    #
    $country_slug   =   $_GET['slug_country'] ?? '';
    // $smarty->assign('country_slug', $country_slug);
    $country_id     =   $clsCountry->getBySlug($country_slug);
    $smarty->assign('country_id', $country_id);
    $country_title  =   $clsCountry->getTitle($country_id);
    $smarty->assign('country_title', $country_title);
    #
    // List guide category liên quan trong quốc gia
    $arr_guide_cat  =   $clsGuideCat->getAll($cond . " AND guidecat_id IN (SELECT guidecat_id FROM default_guidecat_store WHERE " . $cond . " AND country_id = " . $country_id . ")" . $order1, "guidecat_id, slug");
    $smarty->assign('arr_guide_cat', $arr_guide_cat);
    #
    // List tour liên quan trong quốc gia
    $arr_tour_country   =   $clsTour->getAll($cond . " AND tour_id IN (SELECT tour_id FROM default_tour_destination WHERE country_id = " . $country_id . ")" . $order2 . $limit, "tour_id, min_price");
    $smarty->assign('arr_tour_country', $arr_tour_country);
} elseif (($show === 'GuideCatCountry') || ($show === 'SearchGuide')) {
    $country_slug  =   $_GET['slug_country'] ?? '';
    if (!empty($country_slug)) {
        $country_id =   $clsCountry->getBySlug($country_slug);
        $smarty->assign('country_id', $country_id);
        #
        // List guide category liên quan trong quốc gia
        $arr_guide_cat  =   $clsGuideCat->getAll($cond . " AND guidecat_id IN (SELECT guidecat_id FROM default_guidecat_store WHERE " . $cond . " AND country_id = " . $country_id . ")" . $order1, "guidecat_id, slug");
        $smarty->assign('arr_guide_cat', $arr_guide_cat);
        #
        // List tour liên quan trong quốc gia
        $arr_tour_country   =   $clsTour->getAll($cond . " AND tour_id IN (SELECT tour_id FROM default_tour_destination WHERE country_id = " . $country_id . ")" . $order2 . $limit, "tour_id, min_price");
        $smarty->assign('arr_tour_country', $arr_tour_country);
    }
} elseif ($show === 'DetailGuide') {
    $guide_id   =   $_GET['guide_id'] ?? 0;
    $guide_info =   $clsGuide->getOne($guide_id);
    #
    if (!empty($guide_info)) {
        $country_id     =   $guide_info['country_id'];
        $smarty->assign('country_id', $country_id);
        $country_slug   =   $clsCountry->getSlug($country_id);
        $smarty->assign('country_slug', $country_slug);
        $country_title  =   $clsCountry->getTitle($country_id);
        $smarty->assign('country_title', $country_title);
        #
        // List guide category liên quan trong quốc gia
        $arr_guide_cat  =   $clsGuideCat->getAll($cond . " AND guidecat_id IN (SELECT guidecat_id FROM default_guidecat_store WHERE " . $cond . " AND country_id = " . $country_id . ")" . $order1, "guidecat_id, slug");
        $smarty->assign('arr_guide_cat', $arr_guide_cat);
        // List tour liên quan trong quốc gia
        $arr_tour_country   =   $clsTour->getAll($cond . " AND tour_id IN (SELECT tour_id FROM default_tour_destination WHERE country_id = " . $country_id . ")" . $order2 . $limit, "tour_id, min_price");
        $smarty->assign('arr_tour_country', $arr_tour_country);
        // List danh mục travel style by country
        $arr_trvs_country   =   $clsCategory_Country->getAll("is_trash = 0 AND is_online = 1 AND country_id = $country_id ORDER BY order_no ASC", 'category_country_id, cat_id');
        $smarty->assign('arr_trvs_country', $arr_trvs_country);
    }
}