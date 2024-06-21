<?php
/*======================================================================*\
|| #################################################################### ||
|| # The Footer of the ISOCMS                                         # ||
|| # ISOCMS 6.0.0 By Luong Tien Dung (luongtiendung@gmail.com)        # ||
|| # ---------------------------------------------------------------- # ||
|| # All PHP code in this file is ©2007-2014 VietISO JSC.             # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- ISOCMS IS NOT FREE SOFTWARE ----------------    # ||
|| # http://www.vietiso.com | http://www.vietiso.com/license.html     # ||
|| #################################################################### ||
\*======================================================================*/

global $assign_list, $smarty, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $global_image_page, $global_title_page, $global_description_page, $global_image_seo_page, $clsISO, $clsConfiguration, $package_id;
#
$clsTour = new Tour();
$smarty->assign('clsTour', $clsTour);
#
#about
$clsPage = new Page();
$smarty->assign('clsPage', $clsPage);
if ($clsISO->getCheckActiveModulePackage($package_id, 'page', 'about', 'default')) {
	$listAllpage =  $clsPage->getAll("is_trash=0 and is_online=1 and page_id <>'$about_us_id' order by order_no asc", $clsPage->pkey . ",title,slug");
} else {
	$listAllpage =  $clsPage->getAll("is_trash=0 and is_online=1 order by order_no asc", $clsPage->pkey . ",title,slug");
}

$smarty->assign('listAllpage', $listAllpage);
unset($listAllpage);

#info
$current_year = date('Y', time());
$assign_list["current_year"] = $current_year;

//$abc=$clsISO->sendEmail('nguyenvanloi1993gtvt@gmail.com','loi@vietiso.com','subject','message','owner');
//print_r($abc);die();
#
$clsMeta = new Meta();

$REQUEST_URI = $_SERVER['REQUEST_URI'];
$allMeta = $clsMeta->getAll("(config_link='$REQUEST_URI' or config_link='" . urldecode($REQUEST_URI) . "') limit 1", $clsMeta->pkey . ',config_value_title,config_value_intro,image,meta_index,meta_follow,image');
if ($allMeta) {
	$one = $allMeta[0];
	$global_title_page = $one['config_value_title'] != '' ? $one['config_value_title'] : $title_page;
	$global_description_page = $one['config_value_intro'] != '' ? strip_tags(html_entity_decode($one['config_value_intro'])) : $description_page;
	if ($global_image_seo_page != '') {
		$global_image_seo_page = $global_image_seo_page;
	} else {
		$global_image_seo_page = $clsConfiguration->getValue('ImageShareSocial');
	}
	$global_image_page = $one['image'] != '' ? $clsMeta->getMetaImage($one['meta_id'], 500, 261, $one) : $global_image_seo_page;
	$no_index = $one['meta_index'];
	$no_follow = $one['meta_follow'];
	if ($no_index == 1) {
		$index = 'noindex';
	} else {
		$index = 'index';
	}
	if ($no_follow == 1) {
		$follow = 'nofollow';
	} else {
		$follow = 'follow';
	}
} else {
	$global_title_page = $title_page;
	$global_description_page = $description_page;
	if ($global_image_seo_page != '') {
		$global_image_page = $global_image_seo_page;
	} else {
		$global_image_page = $clsConfiguration->getValue('ImageShareSocial');
	}
	$index = 'index';
	$follow = 'follow';
}



function _parse($string)
{
	$string = str_replace('VietISO', PAGE_NAME, $string);
	$string = str_replace('vietiso', PAGE_NAME, $string);
	return $string;
}
$assign_list["global_title_page"] = _parse($global_title_page);
$assign_list["global_description_page"] = _parse($global_description_page);
$assign_list["global_image_page"] = $global_image_page;

$assign_list["index"] = $index;
$assign_list["follow"] = $follow;


if (1 == 2) {
	include_once(DIR_INCLUDES . '/counter.php');
	$online = online();
	$assign_list["online"] = $online;
	$today = today();
	$assign_list["today"] = $today;
	$yesterday = yesterday();
	$assign_list["yesterday"] = $yesterday;
	$total = total();
	$assign_list["total"] = $total;
	$avg = avg();
	$assign_list["avg"] = $avg;
}
