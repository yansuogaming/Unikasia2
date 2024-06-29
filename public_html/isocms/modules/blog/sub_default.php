<?php
function default_default()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain, $country_id, $city_id, $cat_id, $extLang, $clsISO, $package_id, $blogcat_search_id;
	#Blog;
	$clsBlog = new Blog();
	$assign_list['clsBlog'] = $clsBlog;
	$clsCountryEx = new Country();
	$assign_list['clsCountryEx'] = $clsCountryEx;
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsRegion = new Region();
	$assign_list['clsRegion'] = $clsRegion;
	#tagBlog
	$clsTag = new Tag();
	$assign_list['clsTag'] = $clsTag;
	$clsTagBlog = new TagBlog();
	$lisTagBlog = $clsTagBlog->geAllTagBlog();
	$assign_list['lisTagBlog'] = $lisTagBlog;
	$clsBlogCategory = new BlogCategory();
	$assign_list['clsBlogCategory'] = $clsBlogCategory;
	$clsPagination = new Pagination();
	$clsHotel = new Hotel();
	$assign_list['clsHotel'] = $clsHotel;

	//	ini_set('display_errors',1);
	//    error_reporting(E_ERROR & ~E_STRICT);//E_ALL

	#
	$lstBlogCat = $clsBlogCategory->getAll("is_trash=0 and is_online=1 order by order_no ASC", $clsBlogCategory->pkey . ',slug,title');
	$assign_list['lstBlogCat'] = $lstBlogCat;

	#
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;
	$type = isset($_GET['type']) ? $_GET['type'] : '';
	$assign_list['type'] = $type;
	$listCountry = $clsCountryEx->getAll("is_trash=0 order by order_no", $clsCountryEx->pkey . ',slug,title');
	$assign_list['listCountry'] = $listCountry;

	if (isset($_POST["filter"]) && $_POST["filter"] == "filter") {
		$link = $clsISO->getLink("blog") . "";
		$link .= !empty($_POST["slug_country"]) ? "/" . $_POST["slug_country"] : "";
		$link .= !empty($_POST['blogcat_id']) ? '?blogcat_id=' . $clsISO->makeSlashListFromArrayComma($_POST['blogcat_id']) : '';
		header('Location:' . trim($link));
	}

	if ($show == 'Default') {
	} else {
		$slug_country = isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
		$assign_list["slug_country"] = $slug_country;
		$res = $clsCountryEx->getAll("is_trash=0 and is_online=1 and slug='$slug_country' LIMIT 0,1", $clsCountryEx->pkey . ',slug,title');
		$country_id = $res[0][$clsCountryEx->pkey];
		if (intval($country_id) == 0) {
			header('Location:' . $clsISO->getLink("blog"));
			exit();
		}
		$assign_list['country_id'] = $country_id;
		$oneItemCountry = $res[0];
		$assign_list['oneItemCountry'] = $oneItemCountry;
	}
	$cond_cat_id = "";
	$blogcat_id = isset($_GET['blogcat_id']) ? $_GET['blogcat_id'] : '';

	if (!empty($blogcat_id)) {
		$cond_cat_id = "and cat_id=$blogcat_id";
	}
	$slug_country = isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
	$res = $clsCountryEx->getAll("is_trash=0 and is_online=1 and slug='$slug_country' LIMIT 0,1", $clsCountryEx->pkey . ',slug,title');
	$country_id = $res[0][$clsCountryEx->pkey];
	$country_id_1 = !empty($country_id) ? " and country_id = $country_id" : '';
	$cond = "is_trash=0 and is_online=1 $country_id_1 $cond_cat_id";


	$blogcat_id = isset($_GET['blogcat_id']) ? $_GET['blogcat_id'] : '';
	//	var_dump($blogcat_id);die();
	$res_1 = $clsBlogCategory->getAll("is_trash=0 and is_online=1 and slug='$blogcat_id' LIMIT 0,1", $clsBlogCategory->pkey . ',slug,title');
	$cat_id = $res_1[0][$clsBlogCategory->pkey];
	$cat_id_1 = !empty($cat_id) ? "and cat_id = $cat_id" : '';
	$cond_1 = "is_trash=0 and is_online=1 $cat_id_1";



	$order_by = " order by order_no ASC";
	$limit_left = " limit 2";
	$limit_right = " limit 2 offset 4";

	$lstBlogLeft = $clsBlog->getAll($cond . $order_by . $limit_left);
	$lstBlogCenterTop = $clsBlog->getAll($cond . $order_by . " limit 1 offset 2");
	$lstBlogCenterBot = $clsBlog->getAll($cond . $order_by . " limit 1 offset 3");
	$lstBlogRight = $clsBlog->getAll($cond . $order_by . $limit_right);
	$blog_ids = array_merge(
		array_column($lstBlogLeft, 'blog_id'),
		array_column($lstBlogCenterTop, 'blog_id'),
		array_column($lstBlogCenterBot, 'blog_id'),
		array_column($lstBlogRight, 'blog_id')
	);

	$assign_list["lstBlogLeft"] = $lstBlogLeft;
	$assign_list["lstBlogCenterTop"] = $lstBlogCenterTop;
	$assign_list["lstBlogCenterBot"] = $lstBlogCenterBot;
	$assign_list["lstBlogRight"] = $lstBlogRight;

	$assign_list["lstFeatureBlog"] = $clsBlog->getAll($cond . " order by num_view DESC LIMIT 5");

	$recordPerPage = 10;
	$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
	$page_Seo = isset($_GET['page']) ? intval($_GET['page']) : '';
	$assign_list['page_Seo'] = $page_Seo;

	$cond = "is_trash=0 and is_approve=1 and is_online=1 and blog_id NOT IN (" . implode(',', $blog_ids) . ")";

	if ($slug_country) {
		$cond .= " and country_id = '$country_id' and blog_id NOT IN (" . implode(',', $blog_ids) . ")";
	}

	$blogcat_id =  $_GET["blogcat_id"];
	if (isset($blogcat_id) && !empty($blogcat_id)) {
		$assign_list["blogcat_id"] = $blogcat_id;
		$cond .= " and cat_id IN ( " . $blogcat_id . ")";
	}

	$allItem = $clsBlog->getAll($cond, $clsBlog->pkey);
	$totalRecord = $allItem ? count($allItem) : '0';

	if ($show == 'Default') {
		$link_page = $extLang . '/blog/';
	} else {
		if ($show == 'City') {
			$link_page = $extLang . '/blog/' . $clsCountryEx->getSlug($country_id, $oneItemCountry) . '/' . $clsCity->getSlug($city_id, $oneItemCity) . '/';
		} else if ($show == 'Country') {
			$link_page = $extLang . '/blog/' . $clsCountryEx->getSlug($country_id, $oneItemCountry);
		} else {
			$link_page = $extLang . '/blog/' . $clsCountryEx->getSlug($country_id, $oneItemCountry) . '/' . $clsRegion->getSlug($region_id, $oneItemRegion) . '-rg' . $region_id;
		}
	}
	
	$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
	$assign_list['keyword'] = $keyword;
	$blogcat_search_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : 0;
	if (empty($blogcat_search_id)) {
		$blogcat_search_id = $cat_id;
	}

	$assign_list['blogcat_search_id'] = $blogcat_search_id;
	$tag_search_id = isset($_GET['tag_id']) ? $_GET['tag_id'] : 0;
	$assign_list['tag_search_id'] = $tag_search_id;


	if (!empty($cat_id)) {
		$cond .= " and cat_id ='$cat_id'";
	}

	if (!empty($keyword)) {
		$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";
	}
	if (!empty($blogcat_search_id)) {
		$cond .= " and cat_id IN ($blogcat_search_id)";
	}

	if (!empty($tag_search_id)) {
		$tag_ID = explode(',', $tag_search_id);
		$cond .= " and (";
		for ($i = 0; $i < count($tag_ID); $i++) {
			if ($i == 0 && count($tag_ID) == 1) {
				$cond .= " list_tag_id like '%" . $tag_ID[$i] . "%'";
			} elseif (count($tag_ID) > 1 && $i < (count($tag_ID) - 1)) {
				$cond .= " list_tag_id like '%|" . $tag_ID[$i] . "|%' or ";
			} else {
				$cond .= " list_tag_id like '%|" . $tag_ID[$i] . "|%'";
			}
		}
		$cond .= ")";
	}

	//print_r($cond);die();
	$order_by = " order by order_no ASC";
	$allItem = $clsBlog->getAll($cond, $clsBlog->pkey);
	$totalRecord = $allItem ? count($allItem) : '0';
	//echo $totalRecord; die;


	$lnk = $_SERVER['REQUEST_URI'];
	if (isset($_GET['page'])) {
		$tmp = explode('&', $lnk);
		$n = count($tmp) - 1;
		$la_it = '&' . $tmp[$n];
		$str_len = -strlen($la_it);
		$link_page = substr($lnk, 0, $str_len);
	} else {
		$link_page = $lnk;
	}
	
			if(isset($_POST['search_blog']) &&  $_POST['search_blog']=='search_blog'){
	        if($show=='Default'){
	             $link= $clsISO->getLink('blog');
	        }
	        
	        $link.='?action=search';
	        $link.=(!empty($_POST['keyword']))?'&keyword='.addslashes($_POST['keyword']):'';
	        
	        if($_POST['country_id']>0){
	             header('location:'.$clsCountryEx->getLinkGuide($_POST['country_id']));
	             exit();
	        }
	        if($_POST['cat_id']>0){
	             header('location:'.$clsBlogCategory->getLinkGuide($_POST['cat_id']));
	             exit();
	        }
	        
	        
	        //print_r($link); die();
	        header('location:'.$link);
	        exit();
	    }


	$config = array(
		'total'	=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html', '/', $link_page),
		'link_page_1'	=> $link_page
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);
	#

	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";

	$lstBlogs = $clsBlog->getAll($cond . $order_by . $limit, $clsBlog->pkey . ',cat_id,reg_date,publish_date,upd_date,author,list_tag_id,intro,title,slug,image');
	if (!$lstBlogs && $currentPage > 1) {
		header("Location: " . $clsISO->getLink('blog'));
		exit();
	}
	$assign_list['lstBlogs'] = $lstBlogs;

	$assign_list['page_view'] = $page_view;
	unset($page_view);
	$assign_list['totalPage'] = $clsPagination->getTotalPage();

	if ($show == 'Default') {
	} else {
		if ($show == 'City') {
			$listHotelPlace = $clsHotel->getAll("is_trash=0 and is_online=1 and country_id='$country_id' and city_id='$city_id'", $clsHotel->pkey . ',star_id');
		} else if ($show == 'Country') {
			$listHotelPlace = $clsHotel->getAll("is_trash=0 and is_online=1 and country_id='$country_id'", $clsHotel->pkey . ',star_id');
		} else {
			$listHotelPlace = $clsHotel->getAll("is_trash=0 and is_online=1 and country_id='$country_id and region_id='$region_id'", $clsHotel->pkey . ',star_id');
		}
		$assign_list['listHotelPlace'] = $listHotelPlace;
		unset($listHotelPlace);
	}

	$letter = array();
	foreach (range('a', 'z') as $i) {
		$letter[] = $i;
	}
	$assign_list['letter'] = $letter;

	if (isset($_COOKIE['recent_posts'])) {
		$recent_posts = json_decode($_COOKIE['recent_posts'], true);

		if (!empty($recent_posts)) {
			$ids = implode(',', array_map('intval', $recent_posts));

			$cond = "blog_id IN ($ids)";
			$limit = " LIMIT 3";
			$lstBlogRecent = $clsBlog->getAll("$cond");
			$assign_list["lstBlogRecent"] = $lstBlogRecent;
		}
	}





	/*=============Title & Description Page==================*/
	if ($show == 'Default') {
		$title_page = $core->get_Lang('blogs') . ' | ' . PAGE_NAME;
	} else {
		if ($country_id > 0) {
			$title_page = $clsCountryEx->getTitle($country_id, $oneItemCountry) . ' | ' . $core->get_Lang('blogs') . ' | ' . PAGE_NAME;
		} elseif ($city_id > 0) {
			$title_page = $clsCity->getTitle($city_id, $oneItemCity) . ' | ' . $core->get_Lang('blogs') . ' | ' . PAGE_NAME;
		} else {
			$title_page = $clsRegion->getTitle($region_id, $oneItemRegion) . ' | ' . $core->get_Lang('blogs') . ' | ' . PAGE_NAME;
		}
	}
	$title_page = $title_page;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
}

function default_cat()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $extLang;
	global $clsISO, $package_id;
	#
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;

	$clsBlog = new Blog();
	$assign_list['clsBlog'] = $clsBlog;
	$clsCountryEx = new Country();
	$assign_list['clsCountryEx'] = $clsCountryEx;
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsTag = new Tag();
	$assign_list['clsTag'] = $clsTag;
	$clsBlogCategory = new BlogCategory();
	$assign_list['clsBlogCategory'] = $clsBlogCategory;
	$clsPagination = new Pagination();

	if ($show != 'Cat') {
		$slug_country = isset($_GET['slug_country']) ? $_GET['slug_country'] : '';
		$res = $clsCountryEx->getAll("is_trash=0 and is_online=1 and slug='$slug_country' LIMIT 0,1", $clsCountryEx->pkey . ',title');
		$country_id = $res[0][$clsCountryEx->pkey];
		if (intval($country_id) == 0) {

			header('Location:' . PCMS_URL . $extLang);
			exit();
		}
		$assign_list['country_id'] = $country_id;

		if ($show == 'City') {
			$slug_city = isset($_GET['slug_city']) ? $_GET['slug_city'] : '';
			$city_id = $clsCity->getBySlug($slug_city);
			if (intval($city_id) == 0) {
				header('Location:' . PCMS_URL . $extLang);
				exit();
			}
		}

		$assign_list['city_id'] = $city_id;
	}
	#
	$slug_cat = $_GET['slug_cat'];
	$oneItem = $clsBlogCategory->getAll("is_trash=0 and is_online=1 and slug='$slug_cat' LIMIT 0,1", $clsBlogCategory->pkey . ',title,slug,intro');
	$blogcat_id = intval($oneItem[0][$clsBlogCategory->pkey]);
	if ($blogcat_id == 0) {
		header('location:' . PCMS_URL . $extLang);
		exit();
	}
	$assign_list['blogcat_id'] = $assign_list['cat_id'] = $blogcat_id;
	$assign_list['oneItem'] = $oneItem;


	#
	$title_page = $oneItem[0]['title'];
	$assign_list['title_blog_cat'] = $title_page;
	#
	$recordPerPage = 6;
	$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
	$page_Seo = isset($_GET['page']) ? intval($_GET['page']) : '';
	$assign_list['page_Seo'] = $page_Seo;

	$cond = "is_trash=0 and is_approve=1 and is_online=1";

	if ($show == 'Country') {
		$cond .= " and (cat_id='$blogcat_id' or list_cat_id like '%|$blogcat_id|%') and  blog_id IN (select blog_id FROM " . DB_PREFIX . "blog_destination WHERE country_id='$country_id')";
	} elseif ($show == 'City') {
		$cond .= " and (cat_id='$blogcat_id' or list_cat_id like '%|$blogcat_id|%') and blog_id IN (select blog_id FROM " . DB_PREFIX . "blog_destination WHERE country_id='$country_id' and city_id ='$city_id')";
	} elseif ($show == 'Region') {
		$cond .= " and (cat_id='$blogcat_id' or list_cat_id like '%|$blogcat_id|%') and blog_id IN (select blog_id FROM " . DB_PREFIX . "blog_destination WHERE country_id='$country_id' and region_id ='$region_id')";
	} else {
		$cond .= " and (cat_id='$blogcat_id' or list_cat_id like '%|$blogcat_id|%')";
	}

	$link_page = $clsBlogCategory->getLink($blogcat_id, $oneItem);

	$order_by = " order by order_no ASC";
	$allBlogCat = $clsBlog->getAll($cond, $clsBlog->pkey);
	$totalRecord = $allBlogCat ? count($allBlogCat) : '0';
	//print_r($totalRecord); die();

	$config = array(
		'total'	=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> $link_page,
		'link_page_1'	=> $link_page
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);

	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	#
	$lstBlogs = $clsBlog->getAll($cond . $order_by . $limit, $clsBlog->pkey . ',cat_id,reg_date,publish_date,title,slug,author,image,intro');
	if (!$lstBlogs && $currentPage > 1) {
		header("Location: " . $link_page);
		exit();
	}
	$assign_list['lstBlogs'] = $lstBlogs;
	unset($lstBlogs);
	$assign_list['page_view'] = $page_view;
	unset($page_view);
	$assign_list['totalPage'] = $clsPagination->getTotalPage();

	/*=============Title & Description Page==================*/

	if ($country_id > 0) {
		$title_country_blog = $clsCountryEx->getTitle($country_id, $res[0]);
		$assign_list['title_country_blog'] = $title_country_blog;
		$title_page = $title_page . ' | ' . $title_country_blog . ' | ' . $core->get_Lang('blogs') . ' | ' . PAGE_NAME;
	} elseif ($city_id > 0) {
		$title_city_blog = $clsCity->getTitle($city_id);
		$assign_list['title_city_blog'] = $title_city_blog;
		$title_page = $title_page . ' | ' . $title_city_blog . ' | ' . $core->get_Lang('blogs') . ' | ' . PAGE_NAME;
	} else {
		$title_page = $title_page . ' | ' . $core->get_Lang('blogs') . ' | ' . PAGE_NAME;
	}
	$title_page = $title_page;
	$assign_list["title_page"] = $title_page;
	$description_page = $clsISO->getMetaDescription($blogcat_id, 'BlogCategory', $oneItem);
	$assign_list["description_page"] = $description_page;

	unset($clsBlog);
	unset($clsBlogCategory);
}

function default_tag()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $extLang;
	global $clsISO, $package_id, $blogItem;
	#
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list['show'] = $show;

	$clsBlog = new Blog();
	$assign_list['clsBlog'] = $clsBlog;
	$clsCountryEx = new Country();
	$assign_list['clsCountryEx'] = $clsCountryEx;
	$clsCity = new City();
	$assign_list['clsCity'] = $clsCity;
	$clsTag = new Tag();
	$assign_list['clsTag'] = $clsTag;
	$clsBlogCategory = new BlogCategory();
	$assign_list['clsBlogCategory'] = $clsBlogCategory;
	$clsPagination = new Pagination();

	if ($show == 'tag') {
		$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
		$tag_id = $clsTag->getBySlug($slug);
		if (intval($tag_id) == 0) {
			header('Location:' . PCMS_URL . $extLang);
			exit();
		}
	}

	$assign_list['tag_id'] = $tag_id;
	$oneItem = $clsTag->getOne($tag_id);
	$title_page = $clsTag->getTitle($tag_id);

	#
	$recordPerPage = 6;
	$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

	$page_Seo = isset($_GET['page_Seo']) ? intval($_GET['page_Seo']) : '';
	$assign_list['page_Seo'] = $page_Seo;

	$cond = "is_trash=0 and is_approve=1 and is_online=1";

	$cond .= " and (list_tag_id like '%|$tag_id|%')";

	$link_page = $clsTag->getLinkTagBlog($tag_id);

	$order_by = " order by order_no ASC";
	$totalRecord = $clsBlog->getAll($cond) ? count($clsBlog->getAll($cond)) : '0';

	$config = array(
		'total'	=> $totalRecord,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> $link_page,
		'link_page_1'	=> $link_page
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);

	$offset = ($currentPage - 1) * $recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	#
	$lstBlogs = $clsBlog->getAll($cond . $order_by . $limit, $clsBlog->pkey . ',cat_id,reg_date,publish_date');
	$assign_list['lstBlogs'] = $lstBlogs;
	unset($lstBlogs);
	$assign_list['page_view'] = $page_view;
	unset($page_view);
	$assign_list['totalPage'] = $clsPagination->getTotalPage();

	$blogItem = $clsBlog->getOne($blog_id, 'cat_id,title,publish_date,upd_date,author,image,list_tag_id,author,intro,content,slug,intro, country_id');
	$assign_list['blogItem'] = $blogItem;
	$cat_id = $blogItem['cat_id'];
	$assign_list['cat_id'] = $cat_id;
	$country_id = $blogItem['country_id'];
	$assign_list['country_id'] = $country_id;

	$lstBlogCat = $clsBlogCategory->getAll("is_trash=0 and is_online=1 order by order_no ASC", $clsBlogCategory->pkey . ',slug,title');
	$assign_list['lstBlogCat'] = $lstBlogCat;

	$listCountry = $clsCountryEx->getAll("is_trash=0 order by order_no", $clsCountryEx->pkey . ',slug,title');
	$assign_list['listCountry'] = $listCountry;

	/*=============Title & Description Page==================*/
	$title_page = $title_page . ' | ' . $core->get_Lang('blogs') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	/*=============Content Page==================*/
	unset($clsBlog);
	unset($clsBlogCategory);
}

function default_detail()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $global_image_seo_page, $extLang, $blog_id, $clsISO, $package_id, $blogItem, $country_id;
	#
	$assign_list['clsISO'] = $clsISO;

	$clsBlog = new Blog();
	$assign_list['clsBlog'] = $clsBlog;
	$clsTag = new Tag();
	$assign_list['clsTag'] = $clsTag;
	$clsBlogCategory = new BlogCategory();
	$assign_list['clsBlogCategory'] = $clsBlogCategory;
	
	$clsReviews = new Reviews();
    $assign_list["clsReviews"] = $clsReviews;

	$clsCountryEx = new Country();
	$assign_list['clsCountryEx'] = $clsCountryEx;

	$listCountry = $clsCountryEx->getAll("is_trash=0 order by order_no", $clsCountryEx->pkey . ',slug,title');
	$assign_list['listCountry'] = $listCountry;
	
	

	#
	$blog_id = isset($_GET['blog_id']) ? $_GET['blog_id'] : 0;
	$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

	$lstBlogCat = $clsBlogCategory->getAll("is_trash=0 and is_online=1 order by order_no ASC", $clsBlogCategory->pkey . ',slug,title');
	$assign_list['lstBlogCat'] = $lstBlogCat;

	if (empty($clsBlog->checkOnlineBySlug($blog_id, $slug))) {
		header('location:' . $clsISO->getLink('blog'));
		exit();
	}


	if (isset($_GET['blog_id']) && !empty($_GET['blog_id'])) {
		$post_id = intval($_GET['blog_id']);
		if (isset($_COOKIE['recent_posts'])) {
			$recent_posts = json_decode($_COOKIE['recent_posts'], true);
		} else {
			$recent_posts = array();
		}
		if (!in_array($post_id, $recent_posts)) {
			$recent_posts[] = $post_id;
		}

		setcookie('recent_posts', json_encode($recent_posts), time() + (86400), "/");
	}

	$assign_list['blog_id'] = $blog_id;

	$blogItem = $clsBlog->getOne($blog_id, 'cat_id,rate, rate_avg,country_id,title,publish_date,upd_date,author,image,list_tag_id,author,intro,content,slug,intro');
	$assign_list['blogItem'] = $blogItem;
	$cat_id = $blogItem['cat_id'];
	$assign_list['cat_id'] = $cat_id;
	$country_id = $blogItem['country_id'];
	$assign_list['country_id'] = $country_id;
	$cond = "is_trash=0 and is_approve=1 and is_online=1 and blog_id <> '$blog_id' ";
	if ($clsISO->getCheckActiveModulePackage($package_id, 'blog', 'category', 'default')) {
		$cond .= " and cat_id='$cat_id'";
	}
	#
	$lstRelated = $clsBlog->getAll($cond . " and country_id='$country_id' order by order_no ASC limit 0,4", $clsBlog->pkey . ',title,slug,intro,country_id,cat_id');
	$assign_list['lstRelated'] = $lstRelated;
	unset($lstRelated);
	$assign_list["lstFeatureBlog"] = $clsBlog->getAll($cond . " order by num_view DESC LIMIT 5");

	if (isset($_COOKIE['recent_posts'])) {
		$recent_posts = json_decode($_COOKIE['recent_posts'], true);

		if (!empty($recent_posts)) {
			$ids = implode(',', array_map('intval', $recent_posts));

			$cond = "blog_id IN ($ids)";
			$limit = " LIMIT 3";
			$lstBlogRecent = $clsBlog->getAll("$cond");
			$assign_list["lstBlogRecent"] = $lstBlogRecent;
		}
	}

	$clsTour = new Tour();
	$assign_list['clsTour'] = $clsTour;
	
	$assign_list['lstRelatedTour'] = $clsTour->getAll(" is_trash=0 and is_online=1 order by order_no DESC LIMIT 3");
	
	$assign_list["lstTour"] = $clsTour->getAll($cond_lstCountry . $order_by . $limit);

	

	$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
	$assign_list['keyword'] = $keyword;
	$blogcat_search_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : 0;
	if (empty($blogcat_search_id)) {
		$blogcat_search_id = $cat_id;
	}

	$assign_list['blogcat_search_id'] = $blogcat_search_id;
	$tag_search_id = isset($_GET['tag_id']) ? $_GET['tag_id'] : 0;
	$assign_list['tag_search_id'] = $tag_search_id;


	if (!empty($cat_id)) {
		$cond .= " and cat_id ='$cat_id'";
	}

	if (!empty($keyword)) {
		$cond .= " and (title like '$keyword' or slug like '%" . $core->replaceSpace($keyword) . "%')";
	}
	if (!empty($blogcat_search_id)) {
		$cond .= " and cat_id IN ($blogcat_search_id)";
	}

	if (!empty($tag_search_id)) {
		$tag_ID = explode(',', $tag_search_id);
		$cond .= " and (";
		for ($i = 0; $i < count($tag_ID); $i++) {
			if ($i == 0 && count($tag_ID) == 1) {
				$cond .= " list_tag_id like '%" . $tag_ID[$i] . "%'";
			} elseif (count($tag_ID) > 1 && $i < (count($tag_ID) - 1)) {
				$cond .= " list_tag_id like '%|" . $tag_ID[$i] . "|%' or ";
			} else {
				$cond .= " list_tag_id like '%|" . $tag_ID[$i] . "|%'";
			}
		}
		$cond .= ")";
	}

	//print_r($cond);die();
	$order_by = " order by order_no ASC";
	$allItem = $clsBlog->getAll($cond, $clsBlog->pkey);
	$totalRecord = $allItem ? count($allItem) : '0';
	//echo $totalRecord; die;


	$lnk = $_SERVER['REQUEST_URI'];
	if (isset($_GET['page'])) {
		$tmp = explode('&', $lnk);
		$n = count($tmp) - 1;
		$la_it = '&' . $tmp[$n];
		$str_len = -strlen($la_it);
		$link_page = substr($lnk, 0, $str_len);
	} else {
		$link_page = $lnk;
	}

	if (isset($_POST['search_blog']) &&  $_POST['search_blog'] == 'search_blog') {
		$link = $clsISO->getLink('blog');
		$link .= '?action=search';
		$link .= (!empty($_POST['keyword'])) ? '&keyword=' . addslashes($_POST['keyword']) : '';

		if ($_POST['country_id'] > 0) {
			header('location:' . $clsCountryEx->getLinkGuide($_POST['country_id']));
			exit();
		}
		if ($_POST['cat_id'] > 0) {
			header('location:' . $clsBlogCategory->getLinkGuide($_POST['cat_id']));
			exit();
		}


		//print_r($link); die();
		header('location:' . $link);
		exit();
	}
	
	#

	$totalRate = $blogItem['rate'];
	$rateAVG = $blogItem['rate_avg'];
	$percentRateAVG = ($rateAVG / 5) * 100;
	$assign_list['percentRateAVG'] = $percentRateAVG;
	$assign_list['totalRate'] = $totalRate;
	$rateavg = round($blogItem['rate_avg'], 1);
	$assign_list["rateavg"] = $rateavg;
	
	$clsReviews = new Reviews();
    $assign_list["clsReviews"] = $clsReviews;
	
	$clsTourDestination = new TourDestination();
	$assign_list["clsTourDestination"] = $clsTourDestination;
	
	$clsBlogExtension = new BlogExtension(); 
	$assign_list["clsBlogExtension"]=$clsBlogExtension;

	
	$lstTourExtension = $clsBlogExtension->getAll("blog_id = '$blog_id' and table_name='tour' and tour_id IN (SELECT tour_id FROM ".DB_PREFIX."tour WHERE is_trash=0 and is_online=1) order by order_no DESC",$clsBlogExtension->pkey.',tour_id');
	$assign_list["lstTourExtension"]=$lstTourExtension;




	/*=============Title & Description Page==================*/
	$title_page = $clsBlog->getTitle($blog_id, $blogItem);
	$assign_list["title_page"] = $title_page;
	$description_page = $clsISO->getMetaDescription($blog_id, 'Blog', $blogItem);
	$assign_list["description_page"] = $description_page;
	$global_image_seo_page = $clsISO->getPageImageShare($blog_id, 'Blog', $blogItem);
	$assign_list["global_image_seo_page"] = $global_image_seo_page;
	unset($clsBlog);
}
function default_search()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $extLang, $clsISO, $package_id;
	#Promotion
	$clsBlog = new Blog();
	$assign_list['clsBlog'] = $clsBlog;
	$clsTag = new Tag();
	$assign_list['clsTag'] = $clsTag;
	$q = isset($_GET['q']) ? $_GET['q'] : '';
	$assign_list['q'] = $q;
	$slug = $core->replaceSpace($q);
	#
	$lnk = $_SERVER['REQUEST_URI'];
	if (isset($_GET['page'])) {
		$tmp = explode('&', $lnk);
		$n = count($tmp) - 1;
		$la_it = '&' . $tmp[$n];
		$str_len = -strlen($la_it);
		$linkpage = substr($lnk, 0, $str_len);
	} else {
		$linkpage = $lnk;
	}
	$assign_list["linkpage"] = $linkpage;
	#
	$recordPerPage = 6;
	$pageNum = 5;
	$currentPage = isset($_GET["page"]) ? $_GET["page"] : 1;
	$start_limit = ($currentPage - 1) * $recordPerPage;
	$limit = " limit $start_limit,$recordPerPage";
	$cond = "is_trash=0";
	if ($q != '') {
		$cond .= " and (slug_en like '%" . $slug . "%' or slug_vn like '%" . $slug . "%')";
	}
	$cond .= " order by order_no ASC";
	#
	$lstBlog = $clsBlog->getAll($cond . $limit);
	$assign_list['lstBlog'] = $lstBlog;
	#
	$totalRecord = $clsBlog->getAll($cond) ? count($clsBlog->getAll($cond)) : '0';
	$totalPage	 	= ceil($totalRecord / $recordPerPage);
	#
	$first = intval($currentPage / $pageNum) * $pageNum;
	$pageView = "";
	for ($i = 0; $i < $pageNum; $i++) {
		if ($first + $i < $totalPage) {
			$link = $linkpage . "&page=" . ($first + $i + 1);
			$page = ($first + $i + 1 == $currentPage) ? '<a class="current" href="' . $link . '" title="Trang .' . ($first + $i + 1) . '">' . ($first + $i + 1) . '</a>' : '<a href="' . $link . '" title="Trang .' . ($first + $i + 1) . '">' . ($first + $i + 1) . '</a>';
			$pageView .= $page;
		}
	}
	$assign_list['currentPage'] = $currentPage;
	$assign_list['totalRecord'] = $totalRecord;
	$assign_list['recordPerPage'] = $recordPerPage;
	$assign_list['totalPage'] = $totalPage;
	$assign_list['pageNum'] = $pageNum;
	$assign_list['pageView'] = $pageView;
	/*=============Title & Description Page==================*/
	$title_page = $q . ' | ' . $core->get_Lang('searchblog') . ' | ' . PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	/*=============Content Page==================*/
	unset($clsBlog);
}
function default_ajSaveBlogComment()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page;
	#
	$clsBlog = new Blog();
	$clsBlogComment = new BlogComment();
	$clsISO = new ISO();
	#
	$fullname = addslashes($_POST['fullname']);
	$email = addslashes($_POST['email']);
	$message = addslashes($_POST['message']);
	$blog_id = $_POST['blog_id'];
	$security_code = isset($_POST["security_code"]) ? $_POST["security_code"] : '';
	$security_code = strtoupper($security_code);
	#
	if ($security_code != $_SESSION['skey']) {
		echo 'invalid_security_code';
		die();
	} else {
		$max_id = $clsBlogComment->getMaxId();
		$f = "blog_comment_id,domain_id,blog_id,link,fullname,email,message,order_no,reg_date,ip_address";
		$v = "'" . $max_id . "',
			'" . _DOMAIN_ID . "',
			'" . $blog_id . "',
			'" . $clsBlog->getLink($blog_id) . "',
			'" . $fullname . "',
			'" . $email . "',
			'" . $message . "',
			'" . $clsBlogComment->getMaxOrderNo() . "',
			'" . time() . "',
			'" . $_SERVER['REMOTE_ADDR'] . "'";
		if ($clsBlogComment->insertOne($f, $v)) {
			$oneTable = $clsBlogComment->getOne($max_id);
			$Html = '';
			$Html .= '
			<li>
				<div class="wrap">
					<span class="author">' . $oneTable['fullname'] . '</span>
					<span class="time"> ' . $clsISO->formatDate3($oneTable['reg_date']) . '</span>
				</p>
				<div class="formatTextStandard"><p>' . html_entity_decode($oneTable['message']) . '</p></div>
			</li>
			';
			echo $Html . '$$$_SUCCESS';
			die();
		} else {
			echo '_ERROR';
		}
	}
}
function default_ajUpdateNumViewBlog()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $city_id, $extLang, $clsISO;
	$clsBlog = new Blog();
	$assign_list["clsBlog"] = $clsBlog;
	$clsBlogCategory = new BlogCategory();
	$assign_list["clsBlogCategory"] = $clsBlogCategory;
	#
	$blog_id = $_POST['blog_id'];
	$assign_list['blog_id'] = $blog_id;
	$oneItem = $clsBlog->getOne($blog_id);

	$num_view = $oneItem['num_view'];
	$num_view = $num_view + 1;
	$assign_list["num_view"] = $num_view;

	$clsBlog->updateOne($blog_id, "num_view=$num_view");
	echo (1);
	die();
}
function default_test_form()
{
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID, $title_page, $description_page, $keyword_page, $city_id, $extLang, $clsISO;
	$clsBlog = new Blog();
	$assign_list["clsBlog"] = $clsBlog;
	$clsBlogCategory = new BlogCategory();
	$assign_list["clsBlogCategory"] = $clsBlogCategory;

	die('xxx');
	#
	$blog_id = $_POST['blog_id'];
	$assign_list['blog_id'] = $blog_id;
	$oneItem = $clsBlog->getOne($blog_id);

	$num_view = $oneItem['num_view'];
	$num_view = $num_view + 1;
	$assign_list["num_view"] = $num_view;

	$clsBlog->updateOne($blog_id, "num_view=$num_view");
	echo (1);
	die();
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

		if ($type === 'blog') {

			$clsBlog	= 	new Blog();

			$oneItem 	= 	$clsBlog->getOne($table_id, 'rate,rate_avg');

			$rate 		= 	$oneItem['rate'];

			$rate_avg 	= 	$oneItem['rate_avg'];

			#

			$rate_avg_new	= 	(($oneItem['rate_avg'] * $rate) + $star) / ($rate + 1);

			$rate_avg_new 	= 	number_format($rate_avg_new, 2, '.', '');

			$percentRateAVG = 	($rate_avg_new / 5) * 100;

			#

			if ($clsBlog->updateOne($table_id, "rate=" . ($rate + 1) . ",rate_avg='" . $rate_avg_new . "'", true)) {

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
