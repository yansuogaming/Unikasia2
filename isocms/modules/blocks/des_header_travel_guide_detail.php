<?
global $core, $smarty, $clsISO;
#
$smarty->assign('clsISO', $clsISO);
#
$clsGuide   =   new Guide();
$smarty->assign('clsGuide', $clsGuide);
$clsGuideCat    =   new GuideCat();
$smarty->assign('clsGuideCat', $clsGuideCat);
$clsGuideCatStore   =   new GuideCatStore();
$smarty->assign('clsGuideCatStore', $clsGuideCatStore);
$clsCountry =   new Country();
$smarty->assign('clsCountry', $clsCountry);
$clsUser =  new User();
$smarty->assign('clsUser', $clsUser);
#
$show   =   isset($_GET['show']) ? $_GET['show'] : '';
$smarty->assign('show', $show);
#
$cond   =   "is_trash = 0 AND is_online = 1";
if ($show === 'DetailGuide') {
    $guide_id   =   isset($_GET['guide_id']) ? $_GET['guide_id'] : '';
    $smarty->assign('guide_id', $guide_id);
    $guide_info =   $clsGuide->getOne($guide_id);
    $smarty->assign('guide_info', $guide_info);
    #
    if (!empty($guide_info)) {
        // Country title
        $country_title  =   $clsCountry->getTitle($guide_info['country_id']);
        $smarty->assign('country_title', $country_title);
        // Guide category title
        $guidecat_title  =   $clsGuideCat->getTitle($guide_info['cat_id']);
        $smarty->assign('guidecat_title', $guidecat_title);
        #
        // Guide category link
        $country_slug   =   $clsCountry->getSlug($guide_info['country_id']);
        $guidecat_id    =   $guide_info['cat_id'];
        $guidecat_slug  =   $clsGuideCat->getSlug($guide_info['cat_id']);
        $guidecat_link  =   $clsGuide->getLinkGuideCat($country_slug, $guidecat_slug, $guidecat_id);
        $smarty->assign('guidecat_link', $guidecat_link);
    }
}
