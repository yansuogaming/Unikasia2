<?
global $core, $smarty, $clsISO, $assign_list, $mod, $act;
#
$smarty->assign('clsISO', $clsISO);
#
$clsFAQ = new FAQ();
$assign_list["clsFAQ"] = $clsFAQ;
$smarty->assign('clsFAQ', $clsFAQ);
$clsCountry = new Country();
$smarty->assign('clsCountry', $clsCountry);
#
if (!empty($_GET['slug_country'])) {
    $country_id     =   $clsCountry->getBySlug($_GET['slug_country']);
    $smarty->assign('country_id', $country_id);
    $country_info   =   $clsCountry->getOne($country_id);
    $smarty->assign('country_info', $country_info);
// List FAQ from country
    $list_faq_country   =   $clsFAQ->getAll("is_trash = 0 AND is_online = 1 AND country_id = $country_id ORDER BY order_no ASC LIMIT 12");
} elseif ($mod = "tour" && $act == "detaildeparture") {
    $list_faq_country   =   $clsFAQ->getAll("is_trash = 0 AND is_online = 1 AND country_id = 0 ORDER BY order_no ASC");
}
$smarty->assign('list_faq_country', $list_faq_country);