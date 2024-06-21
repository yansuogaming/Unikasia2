<?php
function default_default() {
 global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act,$clsISO, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain,$deviceType;
		
	$clsVoucher = new Voucher();$assign_list["clsVoucher"]=$clsVoucher;
	$clsVoucherCategory = new VoucherCat();$assign_list["clsVoucherCategory"]=$clsVoucherCategory;
	$clsVoucherDestination = new VoucherDestination();$assign_list["clsVoucherDestination"]=$clsVoucherDestination;
	$clsStock = new Stock();$assign_list["clsStock"]=$clsStock;
	$clsCity = new City();$assign_list["clsCity"]=$clsCity;
	$clsReviews = new Reviews();$assign_list["clsReviews"]=$clsReviews;
	$clsPagination = new Pagination();$assign_list["clsPagination"]=$clsPagination;
	
	$cond="is_trash=0 and is_online=1";
	$orderBy=" order by order_no asc";
	
	if($deviceType == 'tablet'){
		$recordPerPage = 14; 
	}
	else{
		$recordPerPage = 15; 
	}
	
	$currentPage = isset($_GET["page"])? $_GET["page"] : 1;
		
	$lstVoucherDestination = $clsVoucherDestination->getAll($cond.$orderBy,$clsVoucherDestination->pkey.",voucher_id,city_id");
	$lstVoucherCat = $clsVoucherCategory->getAll($cond.$orderBy,$clsVoucherCategory->pkey);
	$lstCity = $clsCity->getAll($cond.$orderBy,$clsCity->pkey);
	
	$lstAllVoucher=$clsVoucher->getAll($cond,$clsVoucher->pkey);
	$totalVoucher = $lstAllVoucher?count($lstAllVoucher):0;
	

	$link_page = $clsISO->getLink('voucher');
	$config = array(
		'total'	=> $totalVoucher,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html','/',$link_page),
		'link_page_1'	=> $link_page
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);
	$offset = ($currentPage-1)*$recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	$totalPage = $clsPagination->getTotalPage();
	
	$lstVoucher = $clsVoucher->getAll($cond.$orderBy.$limit,$clsVoucher->pkey);
	$assign_list["lstVoucher"]=$lstVoucher;
	
	$listpriceAsc = $clsVoucher->getAll($cond."  order by price_input asc",$clsVoucher->pkey.",price_input");
	$listpriceDesc = $clsVoucher->getAll($cond."  order by price_input desc",$clsVoucher->pkey.",price_input");
	
	$min_price =$listpriceAsc[0]['price_input'];
	$max_price =$listpriceDesc[0]['price_input'];
	$min_price_search=isset($_GET['price_input']) ? $_GET['price_input'] : $min_price;
	$max_price_search=isset($_GET['price_input']) ? $_GET['price_input'] : $max_price;
	
	$assign_list["totalVoucher"]=$totalVoucher;
	$assign_list["lstVoucherDestination"]=$lstVoucherDestination;
	$assign_list["lstVoucherCat"]=$lstVoucherCat;
	$assign_list['recordPerPage'] = $recordPerPage;
	$assign_list['totalPage'] = $totalPage;
	$assign_list['page_view'] = $page_view;
	$assign_list["lstCity"]=$lstCity;
	$assign_list["min_price"]=$min_price;
	$assign_list["max_price"]=$max_price;
	$assign_list["min_price_search"]=$min_price_search;
	$assign_list["max_price_search"]=$max_price_search;
	
	 /*=============Title & Description Page==================*/

	$title_page = $core->get_Lang('Voucher'). ' | '. PAGE_NAME;
    $assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
    /*=============Content Page==================*/
	
}
function default_searchvoucher(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$clsISO,$description_page,$keyword_page,$domain,$deviceType;
	
	
	$clsVoucher = new Voucher();$assign_list["clsVoucher"]=$clsVoucher;
	$clsVoucherCategory = new VoucherCat();$assign_list["clsVoucherCategory"]=$clsVoucherCategory;
	$clsVoucherDestination = new VoucherDestination();$assign_list["clsVoucherDestination"]=$clsVoucherDestination;
	$clsCity = new City();$assign_list["clsCity"]=$clsCity;
	$clsReviews = new Reviews();$assign_list["clsReviews"]=$clsReviews;
	$clsPagination = new Pagination();$assign_list["clsPagination"]=$clsPagination;
	
	$cond="is_trash=0 and is_online=1";
	$orderBy=" order by order_no asc";
	
	$lstVoucherDestination = $clsVoucherDestination->getAll($cond.$orderBy,$clsVoucherDestination->pkey.",city_id");
	$lstCity = $clsCity->getAll($cond.$orderBy,$clsCity->pkey);
	$lstVoucherCat = $clsVoucherCategory->getAll($cond.$orderBy,$clsVoucherCategory->pkey);
	$assign_list["lstVoucherCat"]=$lstVoucherCat;
	$assign_list["lstCity"]=$lstCity;
	$assign_list["lstVoucherDestination"]=$lstVoucherDestination;
	
	$listpriceAsc = $clsVoucher->getAll($cond."  order by price_input asc",$clsVoucher->pkey.",price_input");
	$listpriceDesc = $clsVoucher->getAll($cond."  order by price_input desc",$clsVoucher->pkey.",price_input");
	
	$min_price =$listpriceAsc[0]['price_input'];
	$max_price =$listpriceDesc[0]['price_input'];
	$city_id =isset($_GET['city_id']) ? $_GET['city_id'] : '';
	$voucher_cat_id =isset($_GET['voucher_cat_id']) ? $_GET['voucher_cat_id'] : '';
//	print_r($duration_id);die();
	if($deviceType == 'tablet'){
		$recordPerPage = 14; 
	}
	else{
		$recordPerPage = 15; 
	}
	$currentPage = isset($_GET["page"])? $_GET["page"] : 1;
	
	
	$assign_list['min_price']=$min_price;
	$assign_list['max_price']=$max_price;
	$min_price_search=isset($_GET['min_price']) ? $_GET['min_price'] : $min_price;
	$max_price_search=isset($_GET['max_price']) ? $_GET['max_price'] : $max_price;
	$assign_list["min_price_search"]=$min_price_search;
	$assign_list["max_price_search"]=$max_price_search;
	
	if($min_price_search > 0 && $max_price_search > 0){
		$cond.=" and price_input >='$min_price_search' and price_input <='$max_price_search'";
	}
	elseif($min_price_search==0 && $max_price_search >0){
		$cond.=" and price_input <='$max_price_search'";
	}
	elseif($min_price_search > 0 && $max_price_search==0){
		$cond.=" and price_input >='$min_price_search'";
	}
	
	if($city_id>0){
		$cond.=" and voucher_id IN (SELECT voucher_id FROM ".DB_PREFIX."voucher_destination WHERE is_trash=0 and city_id IN ($city_id))";
		$assign_list["city_id"]=$city_id;
	}
	
	
	if(!empty($voucher_cat_id)){
		$cat_ID = explode(',',$voucher_cat_id);
		$cond.=" and (";
		for($i=0;$i<count($cat_ID);$i++) {
			if($i==0 && count($cat_ID)==1){
				$cond.=" (cat_id='".$cat_ID[$i]."' or list_cat_id like '%|".$cat_ID[$i]."|%')";
			}elseif(count($cat_ID)>1 && $i< (count($cat_ID)-1)){
					$cond.="(cat_id='".$cat_ID[$i]."' or list_cat_id like '%|".$cat_ID[$i]."|%') or ";
			}else{
				$cond.="(cat_id='".$cat_ID[$i]."' or list_cat_id like '%|".$cat_ID[$i]."|%')";
			}
		}
		$cond.=")";
	}
	
	$assign_list["voucher_cat_id"] = $voucher_cat_id;
	
	$lstVoucherResult=$clsVoucher->getAll($cond.$orderBy,$clsVoucher->pkey);
//		print($cond.$orderBy);die();
	if($lstVoucherResult > 0){
		$totalVoucher = count($lstVoucherResult);
	}
	else{
		$totalVoucher=0;
	}
	
	$lnk=$_SERVER['REQUEST_URI'];
		if(isset($_GET['page'])){
			$tmp = explode('&',$lnk);
			$n = count($tmp)-1;
			$la_it = '&'.$tmp[$n];
			$str_len = -strlen($la_it);
			$link_page = substr($lnk, 0, $str_len);
		}else{
			$link_page = $lnk;
		}
		$assign_list["link_page"] = $link_page;
	$config = array(
		'total'	=> $totalVoucher,
		'number_per_page'	=> $recordPerPage,
		'current_page'	=> $currentPage,
		'link'	=> str_replace('.html','/',$link_page),
		'link_page_1'	=> $link_page
	);
	$clsPagination->initianize($config);
	$page_view = $clsPagination->create_links(false);
	#
	$offset = ($currentPage-1)*$recordPerPage;
	$limit = " LIMIT $offset,$recordPerPage";
	
	$lstVoucherResult=$clsVoucher->getAll($cond.$orderBy.$limit,$clsVoucher->pkey);
	$assign_list["lstVoucherResult"]=$lstVoucherResult;
	$assign_list['page_view']=$page_view; 	
	
	
	unset($page_view);
	
	$assign_list['totalVoucher']=$totalVoucher; 
	$totalPage= $clsPagination->getTotalPage();
//	print_r($totalPage);die();
	$assign_list['totalPage']=$totalPage; 
	
	 /*=============Title & Description Page==================*/
    $title_page = $core->get_Lang('Search voucher').' | '. PAGE_NAME;
    $assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
    /*=============Content Page==================*/
}
function default_detail() {
	 global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act,$clsISO, $_LANG_ID, $title_page, $description_page, $keyword_page, $domain,$deviceType,$voucher_id;
	
	$clsVoucher = new Voucher();$assign_list["clsVoucher"]=$clsVoucher;
	$clsImage = new Image();$assign_list["clsImage"]=$clsImage;
	$clsReviews=new Reviews(); $assign_list['clsReviews']=$clsReviews;
	$clsStock = new Stock();$assign_list["clsStock"]=$clsStock;
	$clsCity = new City();$assign_list["clsCity"]=$clsCity;
	$clsVoucherDestination = new VoucherDestination();$assign_list["clsVoucherDestination"]=$clsVoucherDestination;
	
	$slug = isset($_GET['slug'])?$_GET['slug']:'';
	$voucher_id = $clsVoucher->getBySlug($slug);
	if($voucher_id==''){
		header('location:'.PCMS_URL.$extLang);
		exit();
	}
	$assign_list["voucher_id"]=$voucher_id;

	$table_id= $voucher_id;
	$assign_list["table_id"] = $voucher_id;
	
	$cond="is_trash=0";
	$orderBy=" order by order_no asc";
	
	
	if($voucher_id){
		$cond .=" and table_id='$voucher_id' and type='Voucher'";
		
	}
	
	$lstImage = $clsImage->getAll($cond.$orderBy,$clsImage->pkey);
	$assign_list["lstImage"]=$lstImage;
	
	if(isset($_POST['BookingVoucher']) &&  $_POST['BookingVoucher']=='BookingVoucher'){
		$cartSessionVoucher= vnSessionGetVar('BookingVoucher');
		if(empty($cartSessionVoucher)){
			$cartSessionVoucher = array();
		}
		$assign_list["cartSessionVoucher"] = $cartSessionVoucher;
		$link=$clsISO->getLink('cart');
		 $cartSessionVoucher[$voucher_id] = array();
        foreach($_POST as $k=>$v){
            $cartSessionVoucher[$voucher_id][$k] = $v;
        }
        ///$clsISO->print_pre($cartSessionService);die();
        vnSessionSetVar('BookingVoucher',$cartSessionVoucher);
		header('location:'.$link);
		exit();
	}
	
	
	/*=============Title & Description Page==================*/

	$title_page = $clsVoucher->getTitle($voucher_id). ' | '. PAGE_NAME;
    $assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
    /*=============Content Page==================*/
}
function default_ajaxAddVoucherToCart(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$voucher_id;
	
	
	$cartSessionVoucher = vnSessionGetVar('BookingVoucher');
	
	if(empty($cartSessionVoucher)){
		$cartSessionVoucher = array();
	}
	$assign_list["BookingVoucher"] = $cartSessionVoucher;
	$voucher_id =$_POST['voucher_id'];
	if($tp=='DEL_PACKAGE'){
		unset($cartSessionVoucher[$voucher_id]);
		vnSessionSetVar('BookingVoucher', $cartSessionVoucher);
		$exist = '_REMOVE';
	}else{
		$cartSessionVoucher[$voucher_id] = array();
		foreach($_POST as $k=>$v){
			$cartSessionVoucher[$voucher_id][$k] = $v;
		}
		vnSessionSetVar('BookingVoucher',$cartSessionVoucher);
		$exist = '_SUCCESS';
	}
	

	echo $exist; die();
}
?>