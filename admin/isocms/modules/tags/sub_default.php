<?php
function default_default()
{
    global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $oneSetting, $clsConfiguration;
    global $core, $clsModule, $clsButtonNav, $oneSetting, $clsISO;
    #
    $assign_list["clsISO"]      =   $clsISO;
    $assign_list["clsModule"]   =   $clsModule;
    $user_id    =   $core->_USER['user_id'];
    $pUrl       =   '';
    $link       =   '';
    if (isset($_POST['filter']) && $_POST['filter'] == 'filter') {
        if ($_POST['keyword'] != '' && $_POST['keyword'] != 'testimonial title, intro') {
            $link .= '&keyword=' . $_POST['keyword'];
        }
        if ($_POST['type'] != '') {
            $link .= '&type=' . $_POST['type'];
        }
        header('location: ' . PCMS_URL . '/?mod=' . $mod . $link);
    }
    #
    /*Get type of list news*/
    $type_list = isset($_GET['type_list']) ? $_GET['type_list'] : '';
    $assign_list["type_list"] = $type_list;
    #
    $classTable = "Tag";
    $clsClassTable = new $classTable;
    $tableName = $clsClassTable->tbl;
    $pkeyTable = $clsClassTable->pkey;
    $assign_list["clsClassTable"] = $clsClassTable;
    $assign_list["pkeyTable"] = $pkeyTable;
    #
    /*List all item*/
    $cond = "1=1";
    #Filter By Keyword
    if (!empty($_GET['keyword'])) {
        $keyword = $core->replaceSpace($_GET['keyword']);
        $cond .= " AND slug LIKE '%" . $keyword . "%'";
        $assign_list["keyword"] = $_GET['keyword'];
    }
    if (!empty($_GET['type'])) {
        $type = $core->replaceSpace($_GET['type']);
        $cond .= " AND type = '" . $type . "'";
        $assign_list["type"] = $_GET['type'];
    }
    $assign_list["pUrl"] = $pUrl;
    $cond2 = $cond;
    if ($type_list == 'Active') {
        $cond .= " AND is_trash=0";
    }
    if ($type_list == 'Trash') {
        $cond .= " AND is_trash=1";
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
    $allTrash =  $clsClassTable->getAll("is_trash=1 AND " . $cond2);
    $assign_list["number_trash"] = $allTrash[0][$pkeyTable] != '' ? count($allTrash) : 0;
    #
    $allUnTrash =  $clsClassTable->getAll("is_trash=0 AND " . $cond2);
    $assign_list["number_item"] = $allUnTrash[0][$pkeyTable] != '' ? count($allUnTrash) : 0;
    #
    $allAll =  $clsClassTable->getAll($cond2);
    $assign_list["number_all"] = $allAll[0][$pkeyTable] != '' ? count($allAll) : 0;
    #
    $type_tag   =   [
        '_BLOG'     =>  'Blog',
        '_GUIDE'    =>  'Guide'
    ];
    $assign_list["type_tag"]    =   $type_tag;
}
function default_trash()
{
    global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
    global $core, $clsModule, $clsButtonNav, $oneSetting;
    $user_id = $core->_USER['user_id'];
    #
    $classTable = "Tag";
    $clsClassTable = new $classTable;
    $tableName = $clsClassTable->tbl;
    $pkeyTable = $clsClassTable->pkey;

    $string = isset($_GET[$pkeyTable]) ? ($_GET[$pkeyTable]) : '';
    $pvalTable = intval($core->decryptID($string));

    $pUrl = '';
    if ($pvalTable == 0) {
        header('location: ' . PCMS_URL . '/?mod=' . $mod . $param_url . '&message=notPermission');
    }
    if ($clsClassTable->updateOne($pvalTable, "is_trash='1'")) {
        header('location: ' . PCMS_URL . '/?mod=' . $mod . $pUrl . '&message=TrashSuccess');
    }
}
function default_restore()
{
    global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
    global $core, $clsModule, $clsButtonNav, $oneSetting;
    $user_id = $core->_USER['user_id'];
    #
    $classTable = "Tag";
    $clsClassTable = new $classTable;
    $tableName = $clsClassTable->tbl;
    $pkeyTable = $clsClassTable->pkey;

    $string = isset($_GET[$pkeyTable]) ? ($_GET[$pkeyTable]) : '';
    $pvalTable = intval($core->decryptID($string));

    $pUrl = '';
    if ($pvalTable == 0) {
        header('location: ' . PCMS_URL . '/?mod=' . $mod . $param_url . '&message=notPermission');
    }
    if ($clsClassTable->updateOne($pvalTable, "is_trash='0'")) {
        header('location: ' . PCMS_URL . '/?mod=' . $mod . $pUrl . '&message=RestoreSuccess');
    }
}
function default_delete()
{
    global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
    global $core, $clsModule, $clsButtonNav, $oneSetting;
    $user_id = $core->_USER['user_id'];
    #
    $classTable = "Tag";
    $clsClassTable = new $classTable;
    $tableName = $clsClassTable->tbl;
    $pkeyTable = $clsClassTable->pkey;

    $string = isset($_GET[$pkeyTable]) ? ($_GET[$pkeyTable]) : '';
    $pvalTable = intval($core->decryptID($string));
    $pUrl = '';
    if ($pvalTable == 0) {
        header('location: ' . PCMS_URL . '/?mod=' . $mod . $param_url . '&message=notPermission');
    }
    if ($clsClassTable->doDelete($pvalTable)) {
        header('location: ' . PCMS_URL . '/?mod=' . $mod . $pUrl . '&message=DeleteSuccess');
    }
}
function default_ajOpenTags()
{
    global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act, $core;
    global $core, $clsModule, $clsButtonNav, $oneSetting;
    $user_id = $core->_USER['user_id'];
    #
    $clsTag = new Tag();
    $tag_id = isset($_POST['tag_id']) ? intval($_POST['tag_id']) : 0;
    $type_tag   =   [
        '_BLOG'     =>  'Blog',
        '_GUIDE'    =>  'Guide'
    ];
    $html = '
	<div class="headPop">
		<a class="closeEv close_pop" href="javascript:void();" title="' . $core->get_Lang('close') . '"></a>
		<h3>' . ($tag_id == 0 ? $core->get_Lang('add') : $core->get_Lang('edit')) . ' ' . $core->get_Lang('tags') . '</h3>
	</div>';
    $html .= '
	<form method="post" id="frmForm" class="frmform formborder" enctype="multipart/form-data">
		<div class="wrap">
            <div class="row-span">
				<div class="fieldlabel" style="text-align:right">' . $core->get_Lang('Type') . ' <font color="red">*</font></div>
				<div class="fieldarea">
                    <select name="type" class="tag_type required" style="width:250px;">
                        <option value="">-- Tag type --</option>';
    foreach ($type_tag as $k => $v) {
        $html   .=          '<option value="' . $k . '">' . $v . '</option>';
    }
    $html   .=  '   </select>
				</div>
			</div>
			<div class="row-span">
				<div class="fieldlabel" style="text-align:right">' . $core->get_Lang('title') . ' <font color="red">*</font></div>
				<div class="fieldarea">
					<input class="text full required" value="' . $clsTag->getTitle($tag_id) . '" name="title" type="text" autocomplete="off" />
				</div>
			</div>
		</div>
	</form>
	<div class="modal-footer">
		<button type="button" tag_id="' . $tag_id . '" class="btn btn-primary ClickSubmitTags">
			<i class="icon-ok icon-white"></i> <span>' . $core->get_Lang('save') . '</span>
		</button>
		<button type="reset" class="btn btn-warning close_pop">
			<i class="icon-retweet icon-white"></i> <span>' . $core->get_Lang('close') . '</span>
		</button>		
	</div>';
    echo ($html);
    die();
}
function default_ajSubmitTags()
{
    global $assign_list, $_CONFIG, $_LANG_ID, $_SITE_ROOT, $mod, $act;
    global $core, $clsModule, $clsButtonNav, $oneSetting, $clsISO;
    $user_id    =   $core->_USER['user_id'];
    #
    $classTable =   "Tag";
    $clsClassTable  =   new $classTable;
    $tableName  =   $clsClassTable->tbl;
    $pkeyTable  =   $clsClassTable->pkey;
    $assign_list["clsClassTable"] = $clsClassTable;
    $assign_list["pkeyTable"] = $pkeyTable;
    #
    $tag_id     =   isset($_POST['tag_id']) ? $_POST['tag_id'] : 0;
    $titlePost  =   trim(strip_tags($_POST['title']));
    $slugPost   =   $core->replaceSpace($titlePost);
    $selectPost =   isset($_POST['select']) ? $_POST['select'] : '';
    #
    if (intval($tag_id) == 0) {
        $all    =   $clsClassTable->getAll("is_trash = 0 AND slug = '$slugPost' LIMIT 0,1");

        if (!empty($all)) {
            echo    '_EXIST';
            die();
        } else {
            $listTable  =   $clsClassTable->getAll("1=1", $clsClassTable->pkey . ",order_no");
            for ($i = 0; $i <= count($listTable); $i++) {
                $order_no   =   $listTable[$i]['order_no'] + 1;
                $clsClassTable->updateOne($listTable[$i][$clsClassTable->pkey], "order_no='" . $order_no . "'");
            }
            $fx =   "title, slug, type, $clsClassTable->pkey, order_no";
            $vx =   "'$titlePost', '$slugPost', '$selectPost', '" . $clsClassTable->getMaxID() . "', '1'";

            if ($clsClassTable->insertOne($fx, $vx)) {
                echo    '_SUCCESS';
                die();
            } else {
                echo    '_ERROR';
                die();
            }
        }
    } else {
        $vx = "title='$titlePost',slug='$slugPost',type='$selectPost'";
        if ($clsClassTable->updateOne($tag_id, $vx)) {
            echo '_SUCCESS';
            die();
        } else {
            echo '_ERROR';
            die();
        }
    }
}
function default_ajUpdPosSortTag()
{
    global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
    global $clsConfiguration;
    #
    $clsTag = new Tag();
    $order = $_POST['order'];
    $currentPage     = $_POST['currentPage'];
    $recordPerPage     = $_POST['recordPerPage'];
    $clsTag->setDeBug(1);
    foreach ($order as $key => $val) {
        $key = (($currentPage - 1) * $recordPerPage + $key + 1);
        $clsTag->updateOne($val, "order_no='" . $key . "'");
    }
    die;
}
