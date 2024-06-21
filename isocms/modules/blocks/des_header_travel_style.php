<?
global $core, $smarty, $clsISO, $assign_list;
#
$assign_list["clsISO"]  =   $clsISO;
#
$clsCountry         =   new Country();
$smarty->assign('clsCountry', $clsCountry);
$clsCategory_Country    =   new Category_Country();
$smarty->assign('clsCategory_Country', $clsCategory_Country);
$clsTour    =   new Tour();
$smarty->assign('clsTour', $clsTour);
#
$show   =   isset($_GET['show']) ? $_GET['show'] : '';
$assign_list['show']    =   $show;
#
// ID của danh mục trvs từ quốc gia
$cat_id =   isset($_GET['cat_id']) ? $_GET['cat_id'] : '';
if ($cat_id == '') {
    header('location:' . PCMS_URL);
}
$smarty->assign('cat_id', $cat_id);
#
if ($show == 'CatCountry') {
    $slug_country   =   $_GET['slug_country'];
    $country_id     =   $clsCountry->getBySlug($slug_country);
    #
    // Mảng dữ liệu của danh mục trvs từ quốc gia
    $trvs_info  =   $clsCategory_Country->getAll(" is_trash = 0 AND is_online = 1 AND cat_id = $cat_id AND country_id = $country_id LIMIT 1", "category_country_id, banner_title, banner_image");
    $smarty->assign('trvs_info', $trvs_info);
    #
    $trvs_id    =   $trvs_info[0]['category_country_id'];
    $smarty->assign('trvs_id', $trvs_id);
    #
    $url_banner =   $trvs_info[0]['banner_image'];
    $smarty->assign('url_banner', $url_banner);
}
// $clsISO->dd($trvs_title);
