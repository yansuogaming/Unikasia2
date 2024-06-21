<?php
function default_default()
{
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $oneSetting;
	global $core, $clsModule, $clsButtonNav, $oneSetting, $clsISO;
	$assign_list["clsModule"] = $clsModule;
	$user_id = $core->_USER['user_id'];
	#
	$clsCountry	= 	new Country;
	$assign_list["clsCountry"]	= 	$clsCountry;
	#
	// List quốc gia đã cấu hình trong admin
	$arr_country	=	$clsCountry->getAll('is_trash = 0 AND is_online = 1', 'country_id, title');
	$list_country	=	[];
	foreach ($arr_country as $row) {
		$list_country[$row['country_id']] = $row['title'];
	}
	$assign_list["list_country"]	= 	$list_country;
	// $clsISO->dd($list_country);
	#
	if (isset($_POST['filter']) && $_POST['filter'] == 'filter') {
		if ($_POST['keyword'] != '' && $_POST['keyword'] != 'Why title, intro') {
			$link .= '&keyword=' . $_POST['keyword'];
		}
		header('location: ' . PCMS_URL . '/?mod=' . $mod . $link);
	}
	/*Get type of list news*/
	$type_list = isset($_GET['type_list']) ? $_GET['type_list'] : '';
	$assign_list["type_list"] = $type_list;
	/**/
	$classTable = "Why";

	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey;
	$assign_list["clsClassTable"] = $clsClassTable;
	//print_r($clsClassTable); die();
	$assign_list["pkeyTable"] = $pkeyTable;
	/*List all item*/
	$cond = "1=1";
	#Filter By Keyword
	if ($_GET['keyword'] != '') {
		$cond .= " and title like '%" . $_GET['keyword'] . "%'";
		$assign_list["keyword"] = $_GET['keyword'];
	}

	$cond2 = $cond;
	if ($type_list == 'Active') {
		$cond .= " and is_trash=0";
	}
	if ($type_list == 'Trash') {
		$cond .= " and is_trash=1";
	}
	$orderBy = " order_no asc";
	#-------Page Divide---------------------------------------------------------------
	$recordPerPage = isset($_GET["recordperpage"]) ? $_GET["recordperpage"] : 20;
	$currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;
	$start_limit = ($currentPage - 1) * $recordPerPage;
	$limit = " limit $start_limit,$recordPerPage";
	$lstAllItem = $clsClassTable->getAll($cond);
	$totalRecord = (is_array($lstAllItem) && count($lstAllItem) > 0) ? count($lstAllItem) : 0;
	$totalPage = ceil($totalRecord / $recordPerPage);
	$assign_list['totalRecord'] = $totalRecord;
	$assign_list['recordPerPage'] = $recordPerPage;
	$assign_list['totalPage'] = $totalPage;
	$assign_list['currentPage'] = $currentPage;
	$listPageNumber =  array();
	for ($i = 1; $i <= $totalPage; $i++) {
		$listPageNumber[] = $i;
	}
	$assign_list['listPageNumber'] = $listPageNumber;
	$query_string = $_SERVER['QUERY_STRING'];
	$lst_query_string = explode('&', $query_string);
	$link_page_current = '';
	for ($i = 0; $i < count($lst_query_string); $i++) {
		$tmp = explode('=', $lst_query_string[$i]);
		if ($tmp[0] != 'page')
			$link_page_current .= ($i == 0) ? '?' . $lst_query_string[$i] : '&' . $lst_query_string[$i];
	}
	$assign_list['link_page_current'] = $link_page_current;
	#
	$link_page_current_2 = '';
	for ($i = 0; $i < count($lst_query_string); $i++) {
		$tmp = explode('=', $lst_query_string[$i]);
		if ($tmp[0] != 'page' && $tmp[0] != 'type_list')
			$link_page_current_2 .= ($i == 0) ? '?' . $lst_query_string[$i] : '&' . $lst_query_string[$i];
	}
	$assign_list['link_page_current_2'] = $link_page_current_2;
	#-------End Page Divide-----------------------------------------------------------
	$allItem = $clsClassTable->getAll($cond . " order by " . $orderBy . $limit); //print_r($cond." order by ".$orderBy.$limit);die();
	$assign_list["allItem"] = $allItem;
	#
	$allTrash =  $clsClassTable->getAll("is_trash=1 and " . $cond2);
	$assign_list["number_trash"] = $allTrash[0][$pkeyTable] != '' ? count($allTrash) : 0;
	#
	$allUnTrash =  $clsClassTable->getAll("is_trash=0 and " . $cond2);
	$assign_list["number_item"] = $allUnTrash[0][$pkeyTable] != '' ? count($allUnTrash) : 0;
	#
	$allAll =  $clsClassTable->getAll($cond2);
	$assign_list["number_all"] = $allAll[0][$pkeyTable] != '' ? count($allAll) : 0;
}
function default_ajUpdPosSortListWhy()
{
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
	global $clsConfiguration;
	#

	$classTable = "Why";
	$clsClassTable = new $classTable;

	$order = $_POST['order'];
	$currentPage 	= $_POST['currentPage'];
	$recordPerPage 	= $_POST['recordPerPage'];
	//var_dump($currentPage.'xxxxxx'.$recordPerPage);die();
	foreach ($order as $key => $val) {
		$key = (($currentPage - 1) * $recordPerPage + $key + 1);
		$clsClassTable->updateOne($val, "order_no='" . $key . "'");
	}
}

function default_edit()
{
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $oneSetting;
	global $core, $clsModule, $clsButtonNav, $dbconn, $clsISO, $pvalTable, $clsClassTable;
	$assign_list["clsModule"] = $clsModule;
	$user_id = $core->_USER['user_id'];
	#
	$clsCountry	= 	new Country;
	$assign_list["clsCountry"]	= 	$clsCountry;
	#
	$classTable = "Why";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey;
	$assign_list["clsClassTable"] = $clsClassTable;
	#
	$pvalTable = isset($_GET[$pkeyTable]) ? $_GET[$pkeyTable] : "";
	$assign_list['pvalTable'] = $pvalTable;
	$assign_list['pkeyTable'] = $pkeyTable;
	$imagePost = isset($_POST['image']) ? $_POST['image'] : '';

	require_once DIR_COMMON . "/clsForm.php";
	$clsForm = new Form();
	$clsForm->setDbTable($tableName, $pkeyTable, $pvalTable);
	$assign_list["clsForm"] = $clsForm;
	#	
	$title = 'title';
	$assign_list["title"] = $title;
	$intro = 'intro';
	$assign_list["intro"] = $intro;
	#
	$clsForm->addInputTextArea("full", $intro, "", $core->get_Lang($intro), 255, 25, 5, 1,  "style='width:100%'");
	#
	// List quốc gia đã cấu hình trong admin
	$list_country	=	$clsCountry->getAll('is_trash = 0 AND is_online = 1', 'country_id, title');
	$assign_list["list_country"]	= 	$list_country;
	// $clsISO->dd($list_country);
	#
	if (isset($_POST['submit']) && $_POST['submit'] == 'Update') {
		if ($pvalTable > 0) {
			$value = "";
			$firstAdd = 0;
			foreach ($_POST as $key => $val) {
				$tmp = explode('-', $key);
				if ($tmp[0] == 'iso') {
					if ($firstAdd == 0) {
						$value .= $tmp[1] . "='" . addslashes($val) . "'";
						$firstAdd = 1;
					} else {
						$value .= "," . $tmp[1] . "='" . addslashes($val) . "'";
					}
				}
			}
			$value .= ",image = '" . addslashes($imagePost) . "'";
			$is_online = isset($_POST['is_online']) ? $_POST['is_online'] : 0;
			$value .= ",is_online='" . $is_online . "'";
			if ($clsClassTable->updateOne($pvalTable, $value)) {
				if ($_POST['button'] == '_EDIT') {
					header('location: ' . PCMS_URL . '/?mod=' . $mod . '&act=edit&' . $clsClassTable->pkey . '=' . $_GET[$clsClassTable->pkey] . '&message=UpdateSuccess');
				} else {
					header('location: ' . PCMS_URL . '/?mod=' . $mod . $pUrl . '&message=UpdateSuccess');
				}
			} else {
				header('location: ' . PCMS_URL . '/?mod=' . $mod . $pUrl . '&message=updateFailed');
			}
		} else {
			$value = "";
			$firstAdd = 0;
			$field = "";
			foreach ($_POST as $key => $val) {
				$tmp = explode('-', $key);
				if ($tmp[0] == 'iso') {
					if ($firstAdd == 0) {
						$field .= $tmp[1];
						$value .= "'" . addslashes($val) . "'";
						$firstAdd = 1;
					} else {
						$field .= ',' . $tmp[1];
						$value .= ",'" . addslashes($val) . "'";
					}
				}
			}
			#--Special Field: order_no
			$all_Item = $clsClassTable->getAll("is_trash=0 order by order_no desc");
			$max_id = $clsClassTable->getMaxID();
			$max_order_no = intval($all_Item[0]['order_no']) + 1;
			$field .= ',why_id';
			$value .= ",'" . $max_id . "'";
			$field .= ',order_no';
			$value .= ",'1'";
			$field .= ',image';
			$value .= ",'" . addslashes($imagePost) . "'";

			$listTable = $clsClassTable->getAll("1=1", $clsClassTable->pkey . ",order_no");
			for ($i = 0; $i <= count($listTable); $i++) {
				$order_no = $listTable[$i]['order_no'] + 1;
				$clsClassTable->updateOne($listTable[$i][$clsClassTable->pkey], "order_no='" . $order_no . "'");
			}
			$is_online = isset($_POST['is_online']) ? $_POST['is_online'] : 0;
			$field .= ',is_online';
			$value .= ",'" . $is_online . "'";
			if ($clsClassTable->insertOne($field, $value)) {
				if ($_POST['button'] == '_EDIT') {
					header('location: ' . PCMS_URL . '/?mod=' . $mod . '&act=edit&' . $clsClassTable->pkey . '=' . $max_id . '&message=insertSuccess');
				} else {
					header('location: ' . PCMS_URL . '/?mod=' . $mod . $pUrl . '&message=insertSuccess');
				}
			} else {
				header('location: ' . PCMS_URL . '/?mod=' . $mod . $pUrl . '&message=insertFailed');
			}
		}
	}
}
function default_trash()
{
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav, $oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$classTable = "Why";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey;

	$pvalTable = isset($_GET[$pkeyTable]) ? $_GET[$pkeyTable] : "";

	if ($pvalTable == "")
		header('location: ' . PCMS_URL . '/?mod=' . $mod . '&message=notPermission');

	if ($clsClassTable->updateOne($pvalTable, "is_trash='1'")) {
		header('location: ' . PCMS_URL . '/?mod=' . $mod . '&message=TrashSuccess');
	}
}
function default_restore()
{
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav, $oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$classTable = "Why";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey;

	$pvalTable = isset($_GET[$pkeyTable]) ? $_GET[$pkeyTable] : "";

	if ($pvalTable == "")
		header('location: ' . PCMS_URL . '/?mod=' . $mod . '&message=notPermission');

	if ($clsClassTable->updateOne($pvalTable, "is_trash='0'")) {
		header('location: ' . PCMS_URL . '/?mod=' . $mod . '&message=RestoreSuccess');
	}
}

function default_delete()
{
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav, $oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$classTable = "Why";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey;

	$pvalTable = isset($_GET[$pkeyTable]) ? $_GET[$pkeyTable] : "";

	if ($pvalTable == "")
		header('location: ' . PCMS_URL . '/?mod=' . $mod . '&message=notPermission');

	if ($clsClassTable->deleteOne($pvalTable)) {
		header('location: ' . PCMS_URL . '/?mod=' . $mod . '&message=DeleteSuccess');
	}
}
function default_ajUpdateWhyType()
{
	global $core, $dbconn;
	#
	$clsClassTable = new Why();
	$_type = isset($_POST['_type']) ? $_POST['_type'] : '';
	$why_id = isset($_POST['why_id']) ? $_POST['why_id'] : 0;
	$val = isset($_POST['val']) ? $_POST['val'] : 0;
	$user_id = $core->_USER['user_id'];
	#

	$lst = $clsClassTable->getAll("why_id='$why_id' and type = '" . $_type . "' limit 0,1");
	if (isset($lst[0][$clsClassTable->pkey]) && $val == 0) {
		$clsClassTable->updateOne($why_id, "type=''");
	} else {
		$clsClassTable->updateOne($why_id, "type='HOME'");
	}
	echo 1;
	die();
}
require_once(DIR_MODULES . '/why/mod_default.php');
