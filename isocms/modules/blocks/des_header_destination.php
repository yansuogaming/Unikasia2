<?
global $core, $smarty, $clsISO, $assign_list;
#
$assign_list["clsISO"]  =   $clsISO;
#
$clsCountry =   new Country();
$assign_list["clsCountry"]  =   $clsCountry;
#
if (!empty($_GET['slug_country'])) {
    $country_id     =   $clsCountry->getBySlug($_GET['slug_country']);
    $smarty->assign('country_id', $country_id);
    $info_country   =   $clsCountry->getOne($country_id);
    $smarty->assign('info_country', $info_country);
    #
    $url_banner     =   $info_country['header_background'];
    $smarty->assign('url_banner', $url_banner);
}

// $clsISO->dd($url_banner);
