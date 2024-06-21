<?

global $core, $smarty, $clsISO, $assign_list;
#
$smarty->assign('clsISO', $clsISO);
#
$clsCountry =   new Country();
$smarty->assign('clsCountry', $clsCountry);
$clsCruiseCat   =   new CruiseCat();
$smarty->assign('clsCruiseCat', $clsCruiseCat);
$clsCruiseCatCountry   =   new CruiseCatCountry();
$smarty->assign('clsCruiseCatCountry', $clsCruiseCatCountry);
#
$show   =   isset($_GET['show']) ? $_GET['show'] : '';
$smarty->assign('show', $show);
#
if ($show === 'CruiseCatCountry') {
    $country_slug       =   isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
    $country_id         =   $clsCountry->getBySlug($country_slug);
    $cruise_cat_slug    =   isset($_GET['slug_cat']) ? $_GET['slug_cat'] : '';
    $cruise_cat_id      =   $clsCruiseCat->getBySlug($cruise_cat_slug);
    #
    if (!empty($country_id) && !empty($cruise_cat_id)) {
        $arr_cruise_cat_country =  $clsCruiseCatCountry->getAll("is_trash = 0 AND is_online = 1 AND country_id = $country_id AND cat_id = $cruise_cat_id LIMIT 1", $clsCruiseCatCountry->pkey);
        #
        $cruise_cat_country_id  =   $arr_cruise_cat_country[0]['cruise_cat_country_id'];
        $smarty->assign('cruise_cat_country_id', $cruise_cat_country_id);
    }
}
