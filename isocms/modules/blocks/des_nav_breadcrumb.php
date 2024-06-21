<?
global $core, $smarty, $clsISO, $assign_list;
#
$smarty->assign('clsISO', $clsISO);
#
$clsCountry         =   new Country();
$smarty->assign('clsCountry', $clsCountry);
$clsTourCategory    =   new TourCategory();
$smarty->assign('clsTourCategory', $clsTourCategory);
$clsGuideCat        =   new GuideCat();
$smarty->assign('clsGuideCat', $clsGuideCat);
$clsGuide           =   new Guide();
$smarty->assign('clsGuide', $clsGuide);
#
$show   =   isset($_GET['show']) ? $_GET['show'] : '';
$smarty->assign('show', $show);
#
$country_slug   =   isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
if (!empty($country_slug)) {
    $country_id     =   $clsCountry->getBySlug($country_slug);
    $smarty->assign('country_id', $country_id);
    $country_info   =   $clsCountry->getOne($country_id);
    $smarty->assign('country_info', $country_info);
}
#
$guidecat_id    =   isset($_GET['guidecat_id']) ? $_GET['guidecat_id'] : '';
if (!empty($guidecat_id)) {
    $guidecat_info  =   $clsGuideCat->getOne($guidecat_id);
    $guidecat_title =   $guidecat_info['title'];
    $smarty->assign('guidecat_title', $guidecat_title);
}
#
$guide_id   =   isset($_GET['guide_id']) ? $_GET['guide_id'] : '';
if (!empty($guide_id)) {
    $guide_info  =   $clsGuide->getOne($guide_id);
    // Tên guide detail
    $guide_title =   $guide_info['title'];
    $smarty->assign('guide_title', $guide_title);
    // Tên country guide detail
    $guide_country_title =   $clsCountry->getTitle($guide_info['country_id']);
    $smarty->assign('guidecat_country_title', $guide_country_title);
    // Tên category guide detail
    $guide_guidecat_title    =   $clsGuideCat->getTitle($guide_info['cat_id']);
    $smarty->assign('guidecat_guidecat_title', $guide_guidecat_title);
}
#
$keyword    =   isset($_GET['keyword']) ? $_GET['keyword'] : '';
$smarty->assign('keyword', $keyword);
#
$guidetag   =   isset($_GET['slug']) ? $_GET['slug'] : '';
$smarty->assign('guidetag', $guidetag);
