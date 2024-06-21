<?
function default_default()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $city_id;
	global $clsISO;
	#
	$currentPage = false;
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list["show"] = $show;
	$clsCountryEx = new Country();
	$assign_list['clsCountryEx'] = $clsCountryEx;
	$clsGuide = new Guide();
	$assign_list["clsGuide"] = $clsGuide;
	$clsGuideCat = new GuideCat();
	$assign_list["clsGuideCat"] = $clsGuideCat;
	$clsGuideCatStore = new GuideCatStore();
	$assign_list["clsGuideCatStore"] = $clsGuideCatStore;
	$clsPagination = new Pagination();
	#
	$slug_country = $_GET['slug_country'];
	$country_id = $clsCountryEx->getBySlug($slug_country);
	if (intval($country_id) == 0 && $clsCountryEx->checkExitsId($country_id) == '0') {
		header('location:' . PCMS_URL);
		exit();
	}
	$assign_list['country_id'] = $country_id;
	#
	if ($show == 'cat') {
		$slug = $_GET['slug'];
		$all = $clsGuideCat->getAll("is_trash=0 and is_online=1 and parent_id=0 and slug='$slug' LIMIT 0,1", $clsGuideCat->pkey);
		$guidecat_id = $all[0][$clsGuideCat->pkey];
		if (intval($guidecat_id) == 0) {
			header('location:' . PCMS_URL);
			exit();
		}
		$assign_list["guidecat_id"] = $guidecat_id;
		$nav = $clsGuideCat->getNAV($guidecat_id);
		$assign_list["nav"] = $nav;
		unset($nav);
	}
	#
	$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
	$assign_list['currentPage'] = $currentPage;
	$recordPerPage = 12;
	$assign_list['recordPerPage'] = $recordPerPage;
	$cond = "is_trash=0 and is_online=1 and country_id = '$country_id'";
	if ($guidecat_id > 0) {
		$cond .= " and (cat_id='$guidecat_id' or list_cat_id like '%|" . $guidecat_id . "|%')";
	}
	$order_by = " order by order_no ASC";
	$totalRecord = $clsGuide->getAll($cond) ? count($clsGuide->getAll($cond)) : 0;
	$link_page = $clsGuideCat->getLink($guidecat_id, $country_id, 0);
	$config = array(
		'total'	=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html', '/', $link_page),
		'link_page_1'	=> $link_page
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);
	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	$listGuide = $clsGuide->getAll($cond . $order_by . $limit, $clsGuide->pkey);
	$assign_list['listGuide'] = $listGuide;
	unset($listGuide);
	$assign_list['page_view'] = $page_view;
	unset($page_view);
	$assign_list['totalPage'] = $clsPagination->getTotalPage();
	/* =============Title & Description Page================== */
	$title_page = $core->get_Lang('travelguide') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/* =============Content Page================== */
	unset($clsCountryEx);
}
function default_cat()
{
	global $assign_list, $smarty, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $global_image_seo_page, $city_id;
	global $clsISO, $deviceType;
	#
	$clsCountry	=   new Country();
	$smarty->assign('clsCountry', $clsCountry);
	$clsGuideCat	=   new GuideCat();
	$smarty->assign('clsGuideCat', $clsGuideCat);
	$clsGuideCatStore	=   new GuideCatStore();
	$smarty->assign('clsGuideCatStore', $clsGuideCatStore);
	$clsGuide	= 	new Guide();
	$smarty->assign('clsGuide', $clsGuide);
	$clsPagination	= 	new Pagination();
	$smarty->assign('_LANG_ID', $_LANG_ID);
	#
	$trvg_intro	=	'';
	$show		=	isset($_GET['show']) ? $_GET['show'] : '';
	if ($show === 'GuideCatCountry') {
		$guidecat_slug	=   '';
		$guidecat_id    =   0;
		$country_slug  	=   isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
		$country_id 	= 	$clsCountry->getBySlug($country_slug);
		if (intval($country_id) == 0 && $clsCountry->checkExitsId($country_id) == '0') {
			header('location:' . PCMS_URL);
			exit();
		}
	} elseif ($show === 'GuideCat') {
		$guidecat_slug	=   isset($_GET['slug_guidecat']) ? $_GET['slug_guidecat'] : '';
		$guidecat_id    =   isset($_GET['guidecat_id']) ? $_GET['guidecat_id'] : 0;
		$country_slug  	=   isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
		$country_id 	= 	$clsCountry->getBySlug($country_slug);
		if (intval($guidecat_id) == 0) {
			header('location:' . PCMS_URL);
			exit();
		}
		$trvg_intro	.=	$clsGuideCatStore->getContent($guidecat_id, $country_id);
	}
	$smarty->assign('country_id', $country_id);
	$smarty->assign('guidecat_id', $guidecat_id);
	$smarty->assign('trvg_intro', $trvg_intro);
	#
	/** --- Phân trang --- **/
	$currentPage	= 	isset($_GET['page']) ? $_GET['page'] : 1;
	$assign_list['currentPage']	= 	$currentPage;
	#
	if ($deviceType == 'phone') {
		$recordPerPage 	= 	6;
	} else {
		$recordPerPage 	= 	12;
	}
	$assign_list['recordPerPage']	= 	$recordPerPage;
	#
	$cond	= 	"is_trash=0 AND is_online=1 AND country_id = '$country_id'";
	if ($guidecat_id > 0) {
		$cond	.= 	" AND (cat_id='$guidecat_id' OR list_cat_id LIKE '%|" . $guidecat_id . "|%')";
	}
	$order_by		= 	" ORDER BY order_no ASC";
	$totalRecord 	= 	$clsGuide->getAll($cond) ? count($clsGuide->getAll($cond)) : 0;
	#
	$link_page	= 	$clsGuide->getLinkGuideCat($country_slug, $guidecat_slug, $guidecat_id);
	#
	$config	= 	[
		'total'				=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'		=> $currentPage,
		'link'				=> str_replace('.html', '/', $link_page),
		'link_page'			=> $link_page
	];
	$clsPagination->initianize($config);
	$page_view	= 	$clsPagination->create_links(false);
	$offset 	= 	($currentPage - 1) * $recordPerPage;
	$limit 		= 	" LIMIT $offset,$recordPerPage";
	$listGuide 	= 	$clsGuide->getAll($cond . $order_by . $limit, $clsGuide->pkey);
	$assign_list['listGuide']	= 	$listGuide;
	// unset($listGuide);
	$assign_list['page_view']	= 	$page_view;
	// unset($page_view);
	$assign_list['totalPage']	= 	$clsPagination->getTotalPage();
	/** --- End of Phân trang --- **/
	#
	// Get recent view
	$arr_recent_view	=	$clsISO->getRecentView('guide', 10);
	$smarty->assign('arr_recent_view', $arr_recent_view);
	#
	/* =============Title & Description Page================== */
	if ($show === 'GuideCat') {
		$title_page = $clsGuideCat->getTitle($guidecat_id) . ' | ' . $clsCountry->getTitle($country_id) . ' | ' . PAGE_NAME;
	} else {
		$title_page = $clsCountry->getTitle($country_id) . ' | ' . PAGE_NAME;
	}
	$assign_list["title_page"] = $title_page;
	$description_page = $clsISO->getMetaDescription($guidecat_id, 'GuideCat');
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsISO->getPageImageShare($guidecat_id, 'GuideCat');
	$assign_list["global_image_seo_page"] = $global_image_seo_page;
}
function default_detail()
{
	global $assign_list, $smarty, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $global_image_seo_page, $city_id, $country_id, $extLang, $clsISO;
	#
	$clsGuide = new Guide();
	$assign_list["clsGuide"] = $clsGuide;
	$clsGuideCat = new GuideCat();
	$assign_list["clsGuideCat"] = $clsGuideCat;
	$clsCountryEx = new Country();
	$assign_list["clsCountryEx"] = $clsCountryEx;
	#
	// $show = isset($_GET['show']) ? $_GET['show'] : '';
	// $assign_list["show"] = $show;
	#
	$guide_id	= 	isset($_GET['guide_id']) ? $_GET['guide_id'] : 0;
	$slug 		= 	isset($_GET['slug']) ? $_GET['slug'] : '';
	if (empty($clsGuide->checkOnlineBySlug($guide_id, $slug))) {
		header('location:' . DOMAIN_NAME . $extLang);
		exit();
	}
	$assign_list['guide_id']	= 	$guide_id;
	#
	$one	=	$clsGuide->getOne($guide_id);
	#
	$assign_list['one']	= 	$one;
	$country_id		= 	$one['country_id'];
	$assign_list['country_id']	= 	$country_id;
	$guidecat_id 	= 	$one['cat_id'];
	$assign_list["guidecat_id"] = 	$guidecat_id;
	$guide_title 	= 	$one['title'];
	$assign_list['guide_title'] = 	$guide_title;
	#
	$totalRate		= 	$one['rate'];
	$rateAVG 		= 	$one['rate_avg'];
	$percentRateAVG = 	($rateAVG / 5) * 100;
	$assign_list['percentRateAVG']	= 	$percentRateAVG;
	$assign_list['totalRate'] 		= 	$totalRate;
	$rateavg		= 	round($one['rate_avg'], 1);
	$assign_list["rateavg"]	= 	$rateavg;
	#
	$listGuideCat	= 	$clsGuideCat->getAll("is_trash=0 and is_online=1", $clsGuideCat->pkey);
	$assign_list['listGuideCat']	= 	$listGuideCat;
	unset($listGuideCat);
	#
	// Similar
	$cond	= 	"is_trash = 0 AND is_online = 1 AND (cat_id = '$guidecat_id' OR list_cat_id LIKE '%|$guidecat_id|%')";
	if ($country_id > 0) {
		$cond	.= 	" AND country_id = '$country_id'";
	}
	$lstRelated	= 	$clsGuide->getAll($cond . " AND guide_id <> '$guide_id' ORDER BY rand() LIMIT 0,10", $clsGuide->pkey);
	$assign_list["lstRelated"]	= 	$lstRelated;
	unset($lstRelated);
	#
	// Set recent view
	$clsISO->setRecentView($guide_id);
	#
	// Get recent view
	$arr_recent_view	=	$clsISO->getRecentView('guide', 4);
	$smarty->assign('arr_recent_view', $arr_recent_view);
	#
	/*=============Title & Description Page==================*/
	$title_page = $clsGuide->getTitle($guide_id) . ' | ' . $core->get_Lang('travelguide') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $clsISO->getMetaDescription($guide_id, 'Guide');
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsISO->getPageImageShare($guide_id, 'Guide');
	$assign_list["global_image_seo_page"] = $global_image_seo_page;
	unset($clsGuide);
}
function default_saveRating()
{
	global $assign_list, $smarty, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $clsISO;
	#
	$table_id 	= 	isset($_POST['table_id']) ? $_POST['table_id'] : '';
	$star 		= 	isset($_POST['star']) ? $_POST['star'] : 0;
	#
	$type	= 	isset($_GET['type']) ? $_GET['type'] : '';
	$ip_log = 	$_SERVER['REMOTE_ADDR'];
	$data 	= 	[
		'result'  	=>	false,
		'text'		=>	""
	];
	#
	if (isset($_SESSION['checkVoteNews_' . $table_id . '_' . $type]) && $_SESSION['checkVoteNews_' . $table_id . '_' . $type] == $ip_log) {
		$data = [
			'result'  	=>	false,
			'text'		=>	'| ' . $core->get_Lang('Voted')
		];
	} else if ($table_id != '') {
		if ($type === 'guide') {
			$clsGuide	= 	new Guide();
			$oneItem 	= 	$clsGuide->getOne($table_id, 'rate,rate_avg');
			$rate 		= 	$oneItem['rate'];
			$rate_avg 	= 	$oneItem['rate_avg'];
			#
			$rate_avg_new	= 	(($oneItem['rate_avg'] * $rate) + $star) / ($rate + 1);
			$rate_avg_new 	= 	number_format($rate_avg_new, 2, '.', '');
			$percentRateAVG = 	($rate_avg_new / 5) * 100;
			#
			if ($clsGuide->updateOne($table_id, "rate=" . ($rate + 1) . ",rate_avg='" . $rate_avg_new . "'", true)) {
				$_SESSION['checkVoteNews_' . $table_id . '_' . $type] = $ip_log;
				$data	=	[
					'result'  		=>	true,
					'text'			=>	'| ' . ($rate + 1) . ' ' . $core->get_Lang('Voted'),
					'percentAVG'	=>	$percentRateAVG
				];
			}
		}
	}
	echo json_encode($data);
	die();
}
function default_search()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain, $clsISO;
	#
	$clsCountry	= 	new Country();
	$assign_list["clsCountry"]	= 	$clsCountry;
	$clsGuide	= 	new Guide();
	$assign_list["clsGuide"] 	= 	$clsGuide;
	$clsPagination	= 	new Pagination();
	#
	$country_slug 	= 	isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
	if (!empty($country_slug)) {
		$country_id	= 	$clsCountry->getBySlug($country_slug);
	}
	$keyword 		= 	isset($_GET['keyword']) ? $_GET['keyword'] : '';
	#
	/** --- Code phân trang  --- **/
	$cond	= 	"is_trash = 0 AND is_online = 1";
	if (intval($country_id) > 0) {
		$cond	.= 	" AND country_id = '$country_id'";
		$assign_list["country_id"]	= 	$country_id;
	}
	if ($keyword != '') {
		$cond	.= 	" AND (title LIKE '$keyword' OR slug LIKE '%" . $core->replaceSpace($keyword) . "%')";
		$assign_list["keyword"]	= 	$keyword;
		#
		$pretty_keyword	=	str_replace(' ', '+', $keyword);
	}
	#
	$order_by		= 	" ORDER BY order_no ASC";
	$recordPerPage 	= 	12;
	$currentPage 	= 	isset($_GET['page']) ? intval($_GET['page']) : 1;
	$offset 		= 	($currentPage - 1) * $recordPerPage;
	$limit 			= 	" LIMIT $offset,$recordPerPage";
	#
	$totalRecord 	= 	$clsGuide->getAll($cond) ? count($clsGuide->getAll($cond)) : 0;
	$assign_list['totalRecord']	= 	$totalRecord;
	#
	$totalPage 		= 	ceil($totalRecord / $recordPerPage);
	$assign_list['totalPage']	= 	$totalPage;
	#
	$list_guide 	= 	$clsGuide->getAll($cond . $order_by . $limit, $clsGuide->pkey);
	$assign_list['list_guide'] 	= 	$list_guide;
	unset($listHotel);
	$link_page	= 	DOMAIN_URL . '/' . $_LANG_ID . '/search-guide/' . $country_slug . '/' . $pretty_keyword;
	#
	$config	= 	[
		'total'				=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'		=> $currentPage,
		'link'				=> str_replace('.html', '/', $link_page),
		'link_page'			=> $link_page
	];
	$clsPagination->initianize($config);
	$page_view	= 	$clsPagination->create_links(false);
	$assign_list['page_view']	= 	$page_view;
	/** --- End of Code phân trang  --- **/
	#
	/*=============Title & Description Page==================*/
	$title_page 	= 	$core->get_Lang('resultsearch') . ' | ' . PAGE_NAME;
	$assign_list["title_page"]	= 	$title_page;
	$description_page	= 	$title_page;
	$assign_list["description_page"]	= 	$description_page;
	$keyword_page 	= 	$title_page;
	$assign_list["keyword_page"]	= 	$keyword_page;
	/*=============Content Page==================*/
}
function default_tag()
{
	global $assign_list, $smarty, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $global_image_seo_page, $city_id;
	global $clsISO, $deviceType;
	#
	$clsTag	=   new Tag();
	$smarty->assign('clsTag', $clsTag);
	$clsGuide	=   new Guide();
	$smarty->assign('clsGuide', $clsGuide);
	$clsGuideCat	=   new GuideCat();
	$smarty->assign('clsGuideCat', $clsGuideCat);
	$clsPagination	= 	new Pagination();
	#
	$show	=	isset($_GET['show']) ? $_GET['show'] : '';
	if ($show === 'GuideTag') {
		$guidetag_slug	=   isset($_GET['slug']) ? $_GET['slug'] : '';
		if (empty($guidetag_slug)) {
			header('location:' . PCMS_URL);
			exit();
		}
	}
	$smarty->assign('guidetag_slug', $guidetag_slug);
	$guidetag_id	=	$clsTag->getBySlug($guidetag_slug);
	$smarty->assign('guidetag_id', $guidetag_id);
	#
	/** --- Phân trang --- **/
	$currentPage	= 	isset($_GET['page']) ? $_GET['page'] : 1;
	$assign_list['currentPage']	= 	$currentPage;
	#
	if ($deviceType == 'phone') {
		$recordPerPage 	= 	6;
	} else {
		$recordPerPage 	= 	10;
	}
	$assign_list['recordPerPage']	= 	$recordPerPage;
	#
	$cond	= 	"is_trash = 0 AND is_online = 1";
	if (!empty($guidetag_id)) {
		$cond	.= 	" AND list_tag_id LIKE '%" . $guidetag_id . "%'";
	}
	$order_by		= 	" ORDER BY order_no ASC";
	$totalRecord 	= 	$clsGuide->getAll($cond) ? count($clsGuide->getAll($cond)) : 0;
	#
	$link_page	= 	$clsTag->getLinkTagGuide($guidetag_id);
	#
	$config	= 	[
		'total'				=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'		=> $currentPage,
		'link'				=> str_replace('.html', '/', $link_page),
		'link_page'			=> $link_page
	];
	$clsPagination->initianize($config);
	$page_view	= 	$clsPagination->create_links(false);
	$offset 	= 	($currentPage - 1) * $recordPerPage;
	$limit 		= 	" LIMIT $offset,$recordPerPage";
	$listGuide 	= 	$clsGuide->getAll($cond . $order_by . $limit, $clsGuide->pkey . ', cat_id');
	#
	$assign_list['listGuide']	= 	$listGuide;
	$assign_list['page_view']	= 	$page_view;
	$assign_list['totalPage']	= 	$clsPagination->getTotalPage();
	/** --- End of Phân trang --- **/
	#
	/* =============Title & Description Page================== */
	$title_page = $clsTag->getTitle($guidetag_id) . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	// $description_page = $clsISO->getMetaDescription($guidetag_id, 'GuideCat');
	// $assign_list["description_page"] = $description_page;
	// $global_image_seo_page = $clsISO->getPageImageShare($guidetag_id, 'GuideCat');
	// $assign_list["global_image_seo_page"] = $global_image_seo_page;
}
function default_loadGuideItems()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain;
	global $clsISO;
	#
	$clsGuide = new Guide();
	$assign_list["clsGuide"] = $clsGuide;
	$clsGuideCat = new GuideCat();
	$assign_list["clsGuideCat"] = $clsGuideCat;
	$clsGuideCatStore = new GuideCatStore();
	$assign_list["clsGuideCatStore"] = $clsGuideCatStore;
	$guidecat_id = isset($_POST['guidecat_id']) ? $_POST['guidecat_id'] : 0;
	$country_id = isset($_POST['country_id']) ? $_POST['country_id'] : 0;
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$recordPerPage = 9;
	$cond = "is_trash=0 and is_online=1 and country_id = '$country_id'";
	if ($guidecat_id > 0) {
		$cond .= " and (cat_id='$guidecat_id' or list_cat_id like '%|" . $guidecat_id . "|%')";
	}
	$order_by = " order by order_no DESC";
	$offset = ($page - 1) * $recordPerPage;
	$limit = " limit $offset,$recordPerPage";
	$Html = '';
	$listGuide = $clsGuide->getAll($cond . $order_by . $limit, $clsGuide->pkey);
	if (is_array($listGuide) && count($listGuide) > 0) {
		for ($i = 0; $i < count($listGuide); $i++) {
			$Html .= '
			<li class="list_Elems">
				<div class="row">
					<div class="col-md-4">
						<a class="photo" href="' . $clsGuide->getLink($listGuide[$i][$clsGuide->pkey]) . '" title="' . $clsGuide->getTitle($listGuide[$i][$clsGuide->pkey]) . '"><img class="img-responsive" src="' . $clsGuide->getImage($listGuide[$i][$clsGuide->pkey], 600, 400) . '" alt="' . $clsGuide->getTitle($listGuide[$i][$clsGuide->pkey]) . '" width="100%" /></a>
					</div>
					<div class="col-md-8">
						<h3 class="title"><a href="' . $clsGuide->getLink($listGuide[$i][$clsGuide->pkey]) . '" title="' . $clsGuide->getTitle($listGuide[$i][$clsGuide->pkey]) . '">' . $clsGuide->getTitle($listGuide[$i][$clsGuide->pkey]) . '</a></h3>
						<div class="text">' . $clsISO->myTruncate($clsGuide->getStripIntro($listGuide[$i][$clsGuide->pkey]), 250) . '</div>
					</div>
				</div>
			</li>';
		}
	} else {
		$Html .= 'NOT_RESULT';
	}
	echo  $Html;
	die();
}
