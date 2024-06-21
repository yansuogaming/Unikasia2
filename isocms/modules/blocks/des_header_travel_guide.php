<?
global $core, $smarty, $clsISO, $assign_list;
#
$smarty->assign('clsISO', $clsISO);
#
$clsGuideCat    =   new GuideCat();
$smarty->assign('clsGuideCat', $clsGuideCat);
$clsGuideCatStore   =   new GuideCatStore();
$smarty->assign('clsGuideCatStore', $clsGuideCatStore);
$clsTour    =   new Tour();
$smarty->assign('clsTour', $clsTour);
$clsCountry =   new Country();
$smarty->assign('clsCountry', $clsCountry);
#
$show   =    isset($_GET['show']) ? $_GET['show'] : '';
$smarty->assign('show', $show);

if ($show === 'GuideCatCountry') {
    $guidecat_slug  =   '';
    $guidecat_id    =   0;
    $country_slug   =   isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
    $country_id     =   $clsCountry->getBySlug($country_slug);
} elseif ($show === 'GuideCat') {
    $guidecat_slug  =   isset($_GET['slug_guidecat']) ? $_GET['slug_guidecat'] : '';
    $guidecat_id    =   isset($_GET['guidecat_id']) ? $_GET['guidecat_id'] : 0;
    $country_slug   =   isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
    $country_id     =   $clsCountry->getBySlug($country_slug);
} elseif ($show === 'SearchGuide') {
    $country_slug   =   isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
    $country_id     =   $clsCountry->getBySlug($country_slug);
}
$smarty->assign('country_id', $country_id);
$smarty->assign('guidecat_id', $guidecat_id);
#
$url_banner =   '';
$cond       =   'is_trash = 0 AND is_online = 1';
$limit      =   ' LIMIT 1';
if (!empty($guidecat_id)) {
    $cond   .=  ' AND guidecat_id = ' . $guidecat_id . ' AND country_id = ' . $country_id;
    #
    // Mảng dữ liệu của danh mục trvg từ quốc gia
    $trvg_info  =   $clsGuideCatStore->getAll($cond . $limit, 'guidecat_store_id, image');
    $smarty->assign('trvg_info', $trvg_info);
    #
    $guidecat_store_id  =   $trvg_info[0]['guidecat_store_id'];
    $smarty->assign('guidecat_store_id', $guidecat_store_id);
    #
    $url_banner .=   $trvg_info[0]['image'];
}
$smarty->assign('url_banner', $url_banner);
