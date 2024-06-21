<?php
global $smarty, $clsISO, $core, $clsTable, $mod;
#
$clsTourStore       =   new TourStore();
$smarty->assign('clsTourStore', $clsTourStore);
$clsTour            =   new Tour();
$smarty->assign('clsTour', $clsTour);
$clsTourCategory    =   new TourCategory();
$smarty->assign('clsTourCategory', $clsTourCategory);
$clsTourDestination =   new TourDestination();
$smarty->assign('clsTourDestination', $clsTourDestination);
$clsConfiguration   =   new Configuration();
$smarty->assign('clsConfiguration', $clsConfiguration);
$clsCountry         =   new Country();
$smarty->assign('clsCountry', $clsCountry);
$clsCategory_Country    =   new Category_Country();
$smarty->assign('clsCategory_Country', $clsCategory_Country);
$clsReviews    =   new Reviews();
$smarty->assign('clsReviews', $clsReviews);
#
$show   =   isset($_GET['show']) ? $_GET['show'] : '';
$assign_list['show'] = $show;
#
// Slug của danh mục trvs từ quốc gia
$slug   =   isset($_GET['slug']) ? $_GET['slug'] : '';
$smarty->assign('slug', $slug);

// ID của danh mục trvs từ quốc gia
$cat_id =   isset($_GET['cat_id']) ? $_GET['cat_id'] : '';
$smarty->assign('cat_id', $cat_id);
#
$slug_country   =    $_GET['slug_country'];
$smarty->assign('slug_country', $slug_country);
$country_id     =    $clsCountry->getBySlug($slug_country);
$smarty->assign('country_id', $country_id);

#
if ($mod === 'destination' || $mod === 'tour') {
    $limit  =   ' LIMIT 9';
} else {
    $limit  =   ' LIMIT 6';
}
#
// ID của danh mục trvs từ quốc gia
$cat_id =   isset($_GET['cat_id']) ? $_GET['cat_id'] : '';
$cond   =   "is_trash = 0 AND is_online = 1";
$cond2  =   "is_trash = 0 AND is_online = 1";
#
// Lấy title và description tour theo trvs by country
if (!empty($country_id) && !empty($cat_id)) {
    $cond2  .=  " AND country_id = '$country_id' AND cat_id = '$cat_id'";
    $trvs_info    =   $clsCategory_Country->getAll($cond2 . $order_by, "trvs_tour_title, trvs_tour_description");
    $smarty->assign('trvs_tour_title', $trvs_info[0]['trvs_tour_title']);
    $smarty->assign('trvs_tour_description', $trvs_info[0]['trvs_tour_description']);
}
#
if ($mod === 'tour') {
    /** --- Code show danh sách tour theo trvs by country --- **/
    #
    // if ($cat_id > 0) {
    //     $listTourCategory    =     $clsTourCategory->getAll("is_trash = 0 AND is_online = 1 AND parent_id = '$cat_id'", $clsTourCategory->pkey);
    //     #
    //     if ($listTourCategory != '') {
    //         $parent_id  =   $cat_id;
    //         $cond       .=  " AND (cat_id = '$cat_id' OR list_cat_id LIKE '%|" . $cat_id . "|%' OR cat_id IN (SELECT tourcat_id FROM " . DB_PREFIX . "tour_category WHERE parent_id = '$parent_id'))";
    //     } else {
    //         $cond       .=  " AND (cat_id='$cat_id' OR list_cat_id LIKE '%|$cat_id|%')";
    //     }
    // }
    #
    if (!empty($country_id)) {
        $cond   .=  " AND tour_id IN (SELECT tour_id FROM default_tour_destination WHERE country_id = '$country_id')";
    }
    if (!empty($cat_id)) {
        $cond   .=  " AND (cat_id = '$cat_id' OR list_cat_id LIKE '%|$cat_id|%') ";
    }
    #
    $order_by   =   " ORDER BY order_no ASC";
    #
    $listTourExplore    =   $clsTour->getAll($cond . $order_by . $limit, $clsTour->pkey . ", tour_id");
    $smarty->assign('listTourExplore', $listTourExplore);
    /** --- End of Code show danh sách tour theo trvs by country --- **/
} elseif ($mod === 'destination') {
    $listTourExplore    =   $clsTour->getAll("is_trash=0 and is_online=1 and tour_id IN (select tour_id from default_tour_destination where country_id = $country_id)" . $limit);
    $smarty->assign('listTourExplore', $listTourExplore);
} else {
    $listTourExplore    =   $clsTourStore->getAll("is_trash=0 and _type = 'TOPTOUR'  order by order_no asc $limit");
    $smarty->assign('listTourExplore', $listTourExplore);
}
