<?php
function default_default(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod , $_LANG_ID, $act, $menu_current, $current_page,$oneSetting;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$assign_list["clsModule"] = $clsModule;
	$user_id = $core->_USER['user_id'];
	#
	$type_list = Input::get('type_list');
	$assign_list["type_list"] = $type_list;
	$keyword = Input::get('keyword');
	$assign_list["keyword"] = $keyword;
	/**/
	$classTable = "Discount";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey ;
	$assign_list["clsClassTable"] = $clsClassTable;
	$assign_list["pkeyTable"] = $pkeyTable;
	/*List all item*/
	if(isset($_POST['filter'])&&$_POST['filter']=='filter'){
		$link = '';
		$keyword = Input::post('keyword');
		if(!empty($keyword)){
			$link .= '&keyword='.$keyword;
		}
		header('location: '.PCMS_URL.'/?mod='.$mod.$link);
		exit();
	}
	#
	$cond = "`is_draft`='0'";
	#Filter By Keyword
	if(!empty($keyword)){
		$slug = $core->replaceSpace($keyword);
		$cond .= " and IF(discount_rule='code',code like '%".$slug."%',title like '%".$slug."%')";		
	}
	$cond2 = $cond;
	if(!empty($type_list)){
		if($type_list=='Active'){
			$cond .= " and is_trash=0";
		}
		if($type_list=='Trash'){
			$cond .= " and is_trash=1";
		}
	}
	$orderBy = " reg_date DESC";
	#-------Page Divide---------------------------------------------------------------
	$record_per_page = 20;
	$current_page = (int) Input::get('page',1);
	$total_record = $clsClassTable->countItem($cond);
	
	$link_page_current = '';
	$query_string = $_SERVER['QUERY_STRING'];
	$lst_query_string = explode('&',$query_string);
	for($i=0;$i<count($lst_query_string);$i++){
		$tmp = explode('=',$lst_query_string[$i]);
		if($tmp[0]!='page')
			$link_page_current .= ($i==0)?'?'.$lst_query_string[$i]:'&'.$lst_query_string[$i];
	}
	$assign_list['link_page_current'] = $link_page_current;
	#
	$link_page_current_2 = '';
	for($i=0;$i<count($lst_query_string);$i++){
		$tmp = explode('=',$lst_query_string[$i]);
		if($tmp[0]!='page'&&$tmp[0]!='vpc_status')
			$link_page_current_2 .= ($i==0)?'?'.$lst_query_string[$i]:'&'.$lst_query_string[$i];
	}
	$assign_list['link_page_current_2'] = $link_page_current_2;
	$config = array(
		'total'	=> $total_record,
		'current_page'	=> $current_page,
		'number_per_page'	=> $record_per_page,
		'link'	=> PCMS_URL.'/index.php'.$link_page_current_2
	);
	$clsPagination = new Pagination();
	$clsPagination->initianize($config);
	$html_pager = $clsPagination->create_links();
	$assign_list["html_pager"] = $html_pager;
	#
	$offset = ($current_page-1)*$record_per_page;
	$limit = " limit {$offset},{$record_per_page}";
	#-------End Page Divide-----------------------------------------------------------
	$allItem = $clsClassTable->getAll($cond." order by ".$orderBy.$limit);
	$assign_list["allItem"] = $allItem;
	#
	$assign_list["number_trash"] = $clsClassTable->countItem("is_trash=1 and ".$cond2);
	$assign_list["number_item"] = $clsClassTable->countItem("is_trash=0 and ".$cond2);
	$assign_list["number_all"] = $clsClassTable->countItem($cond2);
}
function default_new(){
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act,$oneSetting,$clsISO;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$assign_list["clsModule"] = $clsModule;
	$user_id = $core->_USER['user_id'];
	$discount_rule = Input::get('discount_rule','code');
	
	$clsProperty = new Property();
	$assign_list['clsProperty'] = $clsProperty;
	$lstGroup = $clsProperty->getAll("property_type='_PROFILE_GROUP' order by order_no ASC");
	$assign_list['lstGroup'] = $lstGroup; unset($lstGroup);
	
	$classTable = "Discount";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey ;
	$assign_list["clsClassTable"] = $clsClassTable;
	$assign_list['pkeyTable'] = $pkeyTable;
	
	/** Delete Temp */
	$clsClassTable->deleteByCond("is_trash=1 and user_id='{$user_id}'");
	$pvalTable = $clsClassTable->getMaxId();
	$more_information = array(
		'type'					=> 'all',
		'discount_type' 		=> 'percentage',
		'discount_value' 		=> 0,
		'minimum_purchase'		=> 0,
		'customer_group_type' 	=> 'all',
		'promotion_voucher_cond_type' => 'quantity',
		'is_due_date'	=> 0,
		'due_date' 		=> strtotime('+1 day')
	);
	if($clsClassTable->insert(array(
		$pkeyTable 			=> $pvalTable,
		'status'			=> 1,
		'discount_rule'		=> $discount_rule,
		'is_trash'			=> 1,
		'user_id' 			=> $user_id,
		'reg_date'			=> time(),
		'start_date'		=> time(),
		'due_date'			=> strtotime('+1 day'),
		'more_information' 	=> @json_encode($more_information)
	))){
		header('Location:'.PCMS_URL.'/index.php?mod='.$mod.'&act=edit&action=new&'.$pkeyTable.'='.$pvalTable);
		exit();
	}
}
function default_edit(){
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act,$oneSetting,$clsISO;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$assign_list["clsModule"] = $clsModule;
	$user_id = $core->_USER['user_id'];
	#
	$clsProperty = new Property();
	$assign_list['clsProperty'] = $clsProperty;
	$lstGroup = $clsProperty->getAll("property_type='_PROFILE_GROUP' order by order_no ASC");
	$assign_list['lstGroup'] = $lstGroup; unset($lstGroup);
	
	$discount_rule = Input::get('discount_rule', 'code');
	if(!in_array($discount_rule, array('code','promotion'))){
		header('Location:'.PCMS_URL.'/index.php?mod='.$mod);
		exit();
	}
	
	$classTable = "Discount";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey ;
	$assign_list["clsClassTable"] = $clsClassTable;
	$assign_list['pkeyTable'] = $pkeyTable;
	#
	$action = Input::get('action', '_edit');
	$pvalTable = (int) Input::get($pkeyTable,0);
	$oneItem = $clsClassTable->getOne($pvalTable);
	$more_information = $oneItem['more_information'];
	$more_information = !empty($more_information) ? @json_decode($more_information, true) : array();
	if(!empty($more_information)){
		$oneItem = array_merge($more_information, $oneItem);
	}
	$assign_list['action'] = $action;
	$assign_list['oneItem'] = $oneItem;
	$assign_list['pvalTable'] = $pvalTable;
	$list_customer_group = $oneItem['list_customer_group'];
	$list_customer_group = !empty($list_customer_group) ? @json_decode($list_customer_group, true) : array();
	$assign_list['list_customer_group'] = $list_customer_group;
	
	$errorNo = 0;
	$errorMsg = array();
	if(Input::exists('submit') && Input::post('submit')=='Update'){
		$value = ""; $firstAdd = 0;
		foreach($_POST as $key=>$val){
			$tmp = explode('-',$key);
			if($tmp[0]=='iso'){
				if($firstAdd==0){
					$value .= $tmp[1]."='".addslashes($val)."'";
					$firstAdd = 1;
				}else{
					$value .= ",".$tmp[1]."='".addslashes($val)."'";
				}
			}
		}
		/** Discount */
		if(Input::post('action')=='new'){ $value.= ",is_trash='0'";}
		$discount_rule = Input::post('iso-discount_rule');
		$discount_type = Input::post('discount_type','percentage');
		$discount_value = Input::post('discount_value',0);
		$requires_minimum_purchase = $clsISO->toInt(Input::post('requires_minimum_purchase',0));
		if($discount_type=='free_shipping'){
			$discount_value = 0;
		} else if($discount_type=='amount'){
			$discount_value = $clsISO->processSmartNumber2($discount_value);
		}
		$minimum_purchase = 0;
		if($requires_minimum_purchase==1){
			$minimum_purchase = $clsISO->processSmartNumber2(Input::post('minimum_purchase',0));
		}
		$more_information['discount_type'] = $discount_type;
		$more_information['discount_value'] = $discount_value;
		$more_information['requires_minimum_purchase'] = $requires_minimum_purchase;
		$more_information['minimum_purchase'] = $minimum_purchase;
		$more_information['once_per_order'] = $clsISO->toInt(Input::post('once_per_order',0));
		/** Voucher */
		$more_information['type'] = Input::post('type', 'all');
		/** Customer Group */
		if($discount_rule=='code'){
			$customer_group_type = Input::post('customer_group_type','all');
			$more_information['customer_group_type'] = $customer_group_type;
			if($customer_group_type=='group'){
				$list_customer_group = Input::post('list_customer_group');
				if(!empty($list_customer_group)){
					$more_information['list_customer_group'] = $list_customer_group;
				}else{
					$errorNo++;
					$err[] = 'Chưa lựa chọn Nhóm khách hàng';
				}
			}
		}
		/** Limit Usage */  
		$allow_usage_limit = $clsISO->toInt(Input::post('allow_usage_limit',0));
		$usage_limit = (int) Input::post('usage_limit',0);
		if($allow_usage_limit==1 && $usage_limit==0) $allow_usage_limit = 0;
		$more_information['allow_usage_limit'] = $allow_usage_limit;
		$more_information['usage_limit'] = $usage_limit;
		$more_information['once_per_customer'] = $clsISO->toInt(Input::post('once_per_customer',0));
		/** Condition apply */
		if($discount_rule=='promotion'){
			$has_promotion_voucher_cond = $clsISO->toInt(Input::post('has_promotion_voucher_cond',0));
			$more_information['has_promotion_voucher_cond'] = $has_promotion_voucher_cond;
			if($has_promotion_voucher_cond==1){
				$promotion_voucher_cond_type = Input::post('promotion_voucher_cond_type','quantity');
				$minimum_promotion_voucher_total_price = Input::post('minimum_promotion_voucher_total_price');
				$minimum_promotion_voucher_total_price = $clsISO->processSmartNumber2($minimum_promotion_voucher_total_price);
				$minimum_promotion_voucher_quntity = Input::post('minimum_promotion_voucher_quntity', 0);
				$more_information['promotion_voucher_cond_type'] = $promotion_voucher_cond_type;
				$more_information['minimum_promotion_voucher_quntity'] = $minimum_promotion_voucher_quntity;
				$more_information['minimum_promotion_voucher_total_price'] = $minimum_promotion_voucher_total_price;
			}
		}
		// Time
		$start_date = Input::post('start_date');
		$start_time = Input::post('start_time');
		$is_due_date = $clsISO->toInt(Input::post('is_due_date',0));
		$due_date = Input::post('due_date');
		$due_time = Input::post('due_time');
		$value.= ",start_date='".$clsISO->convertTextToTime($start_date, $start_time)."',is_due_date='{$is_due_date}'";
		
		
		if($is_due_date) {
			$start_date_check=$clsISO->convertTextToTime($start_date, $start_time);
			$due_date_check=$clsISO->convertTextToTime($due_date, $due_time);
			if($due_date_check >$start_date_check){
				$due_date_check=$due_date_check;
			}else{
				$due_date_check=$due_date_check+86400;
			}
			$value .= ",due_date='".$due_date_check."'";
			$more_information['is_due_date'] = $is_due_date;
			$more_information['due_date'] = $clsISO->convertTextToTime($due_date, $due_time);
		} 
		$value.= ",more_information='".json_encode($more_information)."'";
		$value .= ",user_id_update='".$user_id."',upd_date='".time()."'";
		//print_r($pvalTable); die();
		//print_r($clsClassTable->updateOne($pvalTable,$value, true)); die();
		if($clsClassTable->updateOne($pvalTable,$value)){
			if($_POST['button']=='_EDIT'){
				header('Location: '.PCMS_URL.'/?mod='.$mod.'&act=edit&'.$pkeyTable.'='.$pvalTable.'&message=UpdateSuccess');
				exit();
			} else if($_POST['button']=='_LIST'){
				header('Location: '.PCMS_URL.'/?mod='.$mod.'&message=updateSuccess');
				exit();
			}	
		} else {
			header('Location: '.PCMS_URL.'/?mod='.$mod.'&message=UpdateError');
			exit();
		}
	}
}
function default_trash(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$classTable = "Discount";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey ;
	
	$pvalTable = isset($_GET[$pkeyTable])? (int) $_GET[$pkeyTable] : 0;
	if($pvalTable == 0) 
		header('location: '.PCMS_URL.'/?mod='.$mod.'&message=notPermission');
	
	if($clsClassTable->updateOne($pvalTable,"is_trash='1'")){
		header('location: '.PCMS_URL.'/?mod='.$mod.'&message=TrashSuccess');
	}
}
function default_restore(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$classTable = "Discount";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey ;
	
	$pvalTable = isset($_GET[$pkeyTable])? (int) $_GET[$pkeyTable] : 0;
	if($pvalTable == 0)
		header('location: '.PCMS_URL.'/?mod='.$mod.'&message=notPermission');
	
	if($clsClassTable->updateOne($pvalTable,"is_trash='0'")){
		header('location: '.PCMS_URL.'/?mod='.$mod.'&message=RestoreSuccess');
	}
}
function default_delete(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$classTable = "Discount";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey ;
	
	$pvalTable = isset($_GET[$pkeyTable])? (int) $_GET[$pkeyTable] : 0;
	if($pvalTable == 0) 
		header('location: '.PCMS_URL.'/?mod='.$mod.'&message=notPermission');
		
	if($clsClassTable->deleteOne($pvalTable)){
		header('location: '.PCMS_URL.'/?mod='.$mod.'&message=DeleteSuccess');
	}
}
function default_open_discount(){
	global $smarty, $_CONFIG, $_SITE_ROOT, $mod, $act, $clsISO;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$clsDiscount = new Discount();
	$clsDiscountItem = new DiscountItem();
	#
	$action = '_edit';
	$discount_id = (int) Input::post('discount_id', 0);
	if($discount_id == 0){
		$action = '_add';
		$clsDiscount->deleteByCond("is_draft=1 and is_trash=1 and user_id='".$core->_USER['user_id']."'");
		$discount_id = $clsDiscount->getMaxId();
		$more_information = array(
			'discount_type' => 2,
			'discount_value' => 0,
			'product_type' => 'product',
			'allow_usage_limit' => 0,
			'use_addon_service' => 0,
			'use_extra_bed' => 0
		);
		$clsDiscount->insert(array(
			'discount_id' => $discount_id,
			'more_information' => json_encode($more_information),
			'user_id' => $core->_USER['user_id'],
			'reg_date' => time(),
			'is_trash' => 1,
			'is_draft' => 1
		));
	} 
	$smarty->assign('action',$action);
	$smarty->assign('discount_id',$discount_id);
	$oneItem = $clsDiscount->getOne($discount_id);
	$more_information = !empty($oneItem['more_information']) 
		? @json_decode($oneItem['more_information'], true) : array();
	$weekdays_arr = !empty($oneItem['weekdays']) 
		? json_decode($oneItem['weekdays'], true) : array();
	$smarty->assign('oneItem',$oneItem);
	$smarty->assign('weekdays_arr',$weekdays_arr);
	$smarty->assign('more_information',$more_information);
	#
	$lstDay = $weekdays_arr = array(
		'Mon' => 'Mo',
		'Tue' => 'Tu',
		'Wed' => 'We',
		'Thu' => 'Th',
		'Fri' => 'Fr',
		'Sat' => 'Sa',
		'Sun' => 'Su'
	);
	$smarty->assign('lstDay',$lstDay);
	// Return
	$smarty->assign('mod', $mod);
	$smarty->assign('core', $core);
	$smarty->assign('template', '_add');
	$html = $clsISO->build('_ajax.form.tpl');
	echo json_encode(array(
		'html' => $html,
		'action' => $action,
		'discount_id' => $discount_id
	)); die();
}
function default_pop_save_discount(){
	global $assign_list,$_CONFIG,$_SITE_ROOT,$mod,$act;
	global $core,$clsModule,$clsButtonNav,$oneSetting, $clsISO;
	$clsDiscount = new Discount();
	$clsDiscountItem = new DiscountItem();
	$discount_id = Input::post('discount_id', 0);
	$title = Input::post('title', "");
	$weekdays = Input::post('weekdays', array());
	#
	$msg = '_error';
	if($discount_id > 0){
		//$clsDiscount->setDebug(true);
		$_POST['is_alldays'] = Input::post('is_alldays', 0);
		$_POST['allow_usage_limit'] = Input::post('allow_usage_limit', 0);
		$product_type = Input::post('product_type', "");
		if($clsDiscount->update($discount_id, array(
			'is_trash' => 0,
			'is_draft' => 0,
			'title' => $title,
			'slug' => $core->replaceSpace($title),
			'code' => Input::post('code'),
			'product_type' => $product_type,
			'booking_date_from' => $clsISO->convertTextToTime2(Input::post('booking_date_from')),
			'booking_date_to' => $clsISO->convertTextToTime2(Input::post('booking_date_to')),
			'travel_date_from' => $clsISO->convertTextToTime2(Input::post('travel_date_from')),
			'travel_date_to' => $clsISO->convertTextToTime2(Input::post('travel_date_to')),
			'weekdays' => @json_encode($weekdays),
			'more_information' => @json_encode($_POST)
		))){
			if($product_type == 'all'){
				$clsDiscountItem->deleteByCond("discount_id='".$discount_id."'");	
			}			
			$msg = '_success';
		}
	}
	// Return
	echo $msg; die();
}
function default_load_search_tours(){
	global $smarty, $_CONFIG, $_SITE_ROOT, $mod, $act, $_LANG_ID;
	global $core, $clsModule, $clsButtonNav,$oneSetting, $clsISO;
	$clsTour = new Tour(); 
	$clsTourCat = new TourCategory();
	#
	$results = array();
	$keyword = Input::post('q');
	$cat_id = (int) Input::post('cat_id', 0);
	$discount_id = (int) Input::request('discount_id', 0);
	$page = (int) Input::post('page',1);
	$rows = (int) Input::post('rows',20);
	$offset = ($page-1) * $rows;
	$limitCond = " limit {$offset},{$rows}";
	#
	$cond = "is_trash=0 and is_online=1";
	if($cat_id > 0) {
		$cond .= " and (cat_id='{$cat_id}' or list_cat_id like '%|{$cat_id}|%')";
	}
	if(!empty($keyword)){
		$slug = $core->replaceSpace($keyword);
		$cond .= " and (slug like '%{$slug}%' or trip_code like '%{$keyword}%')";
	}
	$field = "{$clsTour->pkey},trip_code,title";
	$results['total'] = $clsTour->countItem($cond);
	$list_items = $clsTour->getAll($cond." order by reg_date DESC".$limitCond, $field);
	if(!empty($list_items)){
		foreach($list_items as $key=>$val){
			$tour_id = $val[$clsTour->pkey];
			$results['rows'][] = array(
				'itemid' => '<button type="button" class="btn btn-xxs btn-success" onClick="add_product(this)" clsTable="Tour" discount_id="'.$discount_id.'" item_id="'.$tour_id.'" >+</button>',
				'title' => $clsTour->getTitle($tour_id, $val),
				'trip_code' => $clsTour->getTripCode($tour_id, $val),
				'duration' => $clsTour->getTripDuration2020($val[$clsTour->pkey],'/ ')
			);
		}
	}
	// Return
	echo json_encode($results); die();
}
function default_load_search_hotels(){
	global $smarty, $_CONFIG, $_SITE_ROOT, $mod, $act, $_LANG_ID;
	global $core, $clsModule, $clsButtonNav,$oneSetting, $clsISO;
	$clsHotel= new Hotel(); 
	#
	$results = array();
	$keyword = Input::post('q');
	$discount_id = (int) Input::request('discount_id', 0);
	$country_id = (int) Input::post('country_id', 0);
	$city_id = (int) Input::post('city_id', 0);
	$star_id = (int) Input::post('star_id', 0);
	$page = (int) Input::post('page',1);
	$rows = (int) Input::post('rows',20);
	$offset = ($page-1) * $rows;
	$limitCond = " limit {$offset},{$rows}";
	#
	$cond = "is_trash=0 and is_online=1";
	if($country_id > 0) $cond.= " and country_id='{$country_id}'";
	if($city_id) $cond.= " and city_id='{$city_id}'";
	if($star_id) $cond.= " and star_id='{$star_id}'";
	if(!empty($keyword)){
		$slug = $core->replaceSpace($keyword);
		$cond .= " and (slug like '%{$slug}%')";
	}
	$field = "{$clsHotel->pkey},title,address,star_id";
	$results['total'] = $clsHotel->countItem($cond);
	$list_items = $clsHotel->getAll($cond." order by reg_date DESC".$limitCond, $field);
	if(!empty($list_items)){
		foreach($list_items as $key=>$val){
			$results['rows'][] = array(
				'itemid' => '<button type="button" class="btn btn-xxs btn-success" onClick="add_product(this)" clsTable="Hotel" discount_id="'.$discount_id.'" item_id="'.$val[$clsHotel->pkey].'">+</button>',
				'title' => $val['title'],
				'address' => $val['address'],
				'star' => '<img src="'.$clsHotel->getImageStar($val['star_id']).'" />',
				'price' => $clsHotel->getPrice($val[$clsHotel->pkey])
			);
		}
	}
	// Return
	echo json_encode($results); die();
}
function default_load_search_cruises(){
	global $smarty, $_CONFIG, $_SITE_ROOT, $mod, $act, $_LANG_ID;
	global $core, $clsModule, $clsButtonNav,$oneSetting, $clsISO;
	$clsCruise = new Cruise(); 
	
	$results = array();
	$keyword = Input::post('q');
	$discount_id = (int) Input::request('discount_id', 0);
	$cruise_cat_id = (int) Input::post('cruise_cat_id', 0);
	$page = (int) Input::post('page',1);
	$rows = (int) Input::post('rows',20);
	$offset = ($page-1) * $rows;
	$limitCond = " limit {$offset},{$rows}";
	#
	$cond = "`is_trash`=0 and `is_online`=1";
	if($cruise_cat_id > 0){
		$cond .= " and `cruise_cat_id`='{$cruise_cat_id}'";
	}
	if(!empty($keyword)){
		$slug = $core->replaceSpace($keyword);
		$cond .= " and (
			slug like '%{$slug}%' 
			or cruise_code like '%{$keyword}%'
		)";
	}
	$field = "{$clsCruise->pkey},title";
	$results['total'] = $clsCruise->countItem($cond);
	$list_items = $clsCruise->getAll($cond." order by reg_date DESC".$limitCond, $field);
	if(!empty($list_items)){
		foreach($list_items as $key=>$val){
			$results['rows'][] = array(
				'itemid' => '<button type="button" class="btn btn-xxs btn-success" onClick="add_product(this)" clsTable="Cruise" discount_id="'.$discount_id.'" item_id="'.$val[$clsCruise->pkey].'">+</button>',
				'title' => $val['title']
			);
		}
	}
	// Return
	echo json_encode($results); die();
}
function default_load_search_combo(){
	global $smarty, $_CONFIG, $_SITE_ROOT, $mod, $act, $_LANG_ID;
	global $core, $clsModule, $clsButtonNav,$oneSetting, $clsISO;
	$clsCombo = new Combo(); 
	#
	$results = array();
	$keyword = Input::post('q');
	$discount_id = (int) Input::post('discount_id', 0);
	$page = (int) Input::post('page',1);
	$rows = (int) Input::post('rows',20);
	$offset = ($page-1) * $rows;
	$limitCond = " limit {$offset},{$rows}";
	#
	$cond = "`is_trash`=0 and `is_online`=1";
	if(!empty($keyword)){
		$slug = $core->replaceSpace($keyword);
		$cond .= " and (
			slug like '%{$slug}%' 
		)";
	}
	$field = "{$clsCombo->pkey},title,booking_date_from,booking_date_to,travel_date_from,travel_date_to";
	$results['total'] = $clsCombo->countItem($cond);
	$list_items = $clsCombo->getAll($cond." order by reg_date DESC".$limitCond, $field);
	if(!empty($list_items)){
		foreach($list_items as $key=>$val){
			$results['rows'][] = array(
				'itemid' => '<button type="button" class="btn btn-xxs btn-success" onClick="add_product(this)" clsTable="Combo" discount_id="'.$discount_id.'" item_id="'.$val[$clsCombo->pkey].'">+</button>',
				'title' => $val['title'],
				'booking_date' => $clsISO->convertTimeToText($val['booking_date_from']) . ' - ' . $clsISO->convertTimeToText('booking_date_to'),
				'travel_date' => $clsISO->convertTimeToText($val['travel_date_from']) . ' - ' . $clsISO->convertTimeToText('travel_date_to'),
			);
		}
	}
	// Return
	echo json_encode($results); die();
}
function default_load_search_voucher(){
	global $smarty, $_CONFIG, $_SITE_ROOT, $mod, $act, $_LANG_ID;
	global $core, $clsModule, $clsButtonNav,$oneSetting, $clsISO;
	$clsVoucher = new Voucher(); 
	$clsVoucherCat = new VoucherCat();
	
	$results = array();
	$keyword = Input::post('q');
	$cat_id = (int) Input::post('cat_id', 0);
	$discount_id = (int) Input::request('discount_id', 0);
	$page = (int) Input::post('page',1);
	$rows = (int) Input::post('rows',20);
	$offset = ($page-1) * $rows;
	$limitCond = " limit {$offset},{$rows}";
	#
	$cond = "`is_trash`=0 and `is_online`=1";
	if($cat_id > 0){
	$cond .= " and (cat_id='{$cat_id}' 
			or list_cat_id like '%|{$cat_id}|%'
		)";
	}
	if(!empty($keyword)){
		$slug = $core->replaceSpace($keyword);
		$cond .= " and (
			slug like '%{$slug}%' 
			or cruise_code like '%{$keyword}%'
		)";
	}
	$field = "{$clsVoucher->pkey},title,cat_id";
	$results['total'] = $clsVoucher->countItem($cond);
	$list_items = $clsVoucher->getAll($cond." order by reg_date DESC".$limitCond, $field);
	if(!empty($list_items)){
		foreach($list_items as $key=>$val){
			$results['rows'][] = array(
				'itemid' => '<button type="button" class="btn btn-xxs btn-success" onClick="add_product(this)" discount_id="'.$discount_id.'" clsTable="Voucher" item_id="'.$val[$clsVoucher->pkey].'">+</button>',
				'title' => $val['title'],
				'category' => $clsVoucherCat->getTitle($val['cat_id']),
				'price' => '0.00'
			);
		}
	}
	// Return
	echo json_encode($results); die();
}
function default_get_select_city(){
	global $dbconn,$assign_list,$_CONFIG,$_SITE_ROOT,$mod,$_LANG_ID,$act,$core,$clsModule,$clsConfiguration,$clsISO;
	$clsCity = new City();
	$clsHotel = new Hotel();
	#
	$country_id = (int) Input::post('country_id', 0);
	$region_id = (int) Input::post('region_id', 0);
	$city_id = (int) Input::post('city_id', 0);
	#
	$cond = "{$clsCity->tbl}.is_trash=0 and {$clsCity->tbl}.is_online=1 and {$clsHotel->tbl}.is_trash=0 and {$clsHotel->tbl}.is_online=1";
	if($country_id > 0){$cond .= " and {$clsCity->tbl}.country_id='{$country_id}'";}
	if($region_id > 0){$cond .= " and {$clsCity->tbl}.region_id='{$region_id}'";}
	$html = '<option value="0">'.$core->get_Lang('selectcity').'</option>';
	$lstCity = $clsCity->getAllOptimize("{$cond} order by {$clsCity->tbl}.order_no asc", "{$clsHotel->tbl} on {$clsCity->tbl}.city_id={$clsHotel->tbl}.city_id", "DISTINCT({$clsCity->tbl}.city_id),{$clsCity->tbl}.title");
	if(!empty($lstCity)){
		foreach($lstCity as $k => $v){
			$html .= '<option value="'.$v[$clsCity->pkey].'"'.($city_id==$v[$clsCity->pkey]?' selected':'').'>
				'.$clsCity->getTitle($v[$clsCity->pkey]).'
			</option>';
		}
		unset($lstCity);
	} else {
		$html = 'EMPTY';
	}
	// Return
	echo $html; die();
}
function default_handler_filter_objects(){
	global $smarty, $_CONFIG, $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting, $clsISO;
	$clsTour = new Tour(); 
	$clsTourCat = new TourCategory();
	#
	$discount_id = Input::post('discount_id');
	$product_type = Input::post('product_type');
	#
	$html = '';
	if($product_type=='tour'){
		$html = '<div class="form-group ">
			<label class="col-form-label">2.'.$core->get_Lang('Travel style').' <span class="text-red">*</span></label>
			<select class="form-control iso-selectbox filter_item_search" column="cat_id" data-width="100%" data-placeholder="'.$core->get_Lang('Travel style').'">
				'.$clsTourCat->makeSelectboxOption(0,0,0,true).'
			</select>
		</div>
		<div class="form-group">
			<label class="col-form-label">3.'.$core->get_Lang('Tour').' <span class="text-red">*</span></label>
			<select id="cboProduct" height="34" class="easyui-combogrid" prompt="'.$core->get_Lang('Search').'..." style="width:100%" data-options="
				panelWidth: 800,
				url: \''.PCMS_URL.'/index.php?mod='.$mod.'&act=load_search_tours&discount_id='.$discount_id.'\',
				mode: \'remote\',
				method:\'post\',
				multiple:true, 
				columns: [[
					{field:\'itemid\',title:\'\',width:30,align:\'center\'},
					{field:\'title\',title:\''.$core->get_Lang('Name').'\',width:220},
					{field:\'trip_code\',title:\''.$core->get_Lang('Trip Code').'\',width:80,align:\'left\'},
					{field:\'duration\',title:\''.$core->get_Lang('Duration Tour').'\',width:80,align:\'left\'}
				]],
				fitColumns: true,
				showFooter: true,
				pagination: true,
				pageSize: 20"></select>
		</div>';
	} else if($product_type=='hotel'){
		$clsCountry = new Country();
		$html .= '<div class="form-group">
			<iv class="form-row">
				<div class="col-xs-12 col-md-6">
					<label class="col-form-label">2.'.$core->get_Lang('Country').'</label>
					<select class="form-control slb_Country_Id iso-selectbox filter_item_search" column="country_id" onChange="get_select_city(this)" data-width="100%" data-placeholder="'.$core->get_Lang('Country').'">
						'.$clsCountry->makeSelectHotelOption(0).'
					</select>
				</div>
				<div class="col-xs-12 col-md-6">
					<label class="col-form-label">2.'.$core->get_Lang('City').'</label>
					<select class="form-control iso-selectbox slb_City_Id filter_item_search" column="city_id" data-width="100%" data-placeholder="'.$core->get_Lang('City').'"></select>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-form-label">3.'.$core->get_Lang('Hotel').' <span class="text-red">*</span></label>
			 <select id="cboProduct" height="34" class="easyui-combogrid" prompt="'.$core->get_Lang('Search').'..." style="width:100%" data-options="
                    panelWidth: 800,
                    url: \''.PCMS_URL.'/index.php?mod='.$mod.'&act=load_search_hotels&discount_id='.$discount_id.'\',
                    mode: \'remote\',
					multiple:true, 
                    columns: [[
                        {field:\'itemid\',title:\'\',width:30,align:\'center\'},
                        {field:\'title\',title:\''.$core->get_Lang('Name').'\',width:120},
                        {field:\'address\',title:\''.$core->get_Lang('Address').'\',width:80,align:\'left\'},
                        {field:\'star\',title:\''.$core->get_Lang('Star').'\',width:40,align:\'left\'},
						{field:\'price\',title:\''.$core->get_Lang('Price').'\',width:40,align:\'right\'}
                    ]],
                    fitColumns: true,
					showFooter: true,
					pagination: true,
					pageSize: 20">
		</div>';
	} else if($product_type=='cruise'){
		$clsCruiseCat = new CruiseCat();
		$html .= '<div class="form-group ">
			<label class="col-form-label">2.'.$core->get_Lang('Category').'</label>
			<select class="form-control filter_item_search iso-selectbox" column="cruise_cat_id" data-width="100%" data-placeholder="'.$core->get_Lang('Travel style').'">
				'.$clsCruiseCat->makeSelectboxOption(0,0).'
			</select>
		</div>
		<div class="form-group">
			<label class="col-form-label">3.'.$core->get_Lang('Cruise').'</label>
			 <select id="cboProduct" class="easyui-combogrid" prompt="'.$core->get_Lang('Search Cruise').'..." style="width:100%" height="34" data-options="
                    panelWidth: 800,
                    idField: \'\',
                    textField: \'\',
                    url: \''.PCMS_URL.'/index.php?mod='.$mod.'&act=load_search_cruises&discount_id='.$discount_id.'\',
                    mode: \'remote\',
					multiple:true, 
                    columns: [[
						{field:\'itemid\',title:\'\',width:30,align:\'center\'},
                        {field:\'title\',title:\''.$core->get_Lang('Name').'\',width:120},
                        {field:\'listprice\',title:\'List Price\',width:80,align:\'right\'},
                        {field:\'unitcost\',title:\'Unit Cost\',width:80,align:\'right\'}
                    ]],
                    fitColumns: true,
					showFooter: true,
					pagination: true,
					pageSize: 20">
		</div>';
	} else if($product_type=='combo'){
		$html .= '<div class="form-group">
			<label class="col-form-label">3.'.$core->get_Lang('Product').' <span class="text-red">*</span></label>
			 <select id="cboProduct" class="easyui-combogrid" prompt="'.$core->get_Lang('Search').'..." height="34" style="width:100%" data-options="
                    panelWidth: 800,
                    idField: \'\',
                    textField: \'\',
                    url: \''.PCMS_URL.'/index.php?mod='.$mod.'&act=load_search_combo&discount_id='.$discount_id.'\',
                    method: \'post\',
					mode: \'remote\',
					multiple:true, 
                    columns: [[
                        {field:\'itemid\',title:\'\',width:30,align:\'center\'},
                        {field:\'title\',title:\''.$core->get_Lang('Name').'\',width:250},
                        {field:\'booking_date\',title:\''.$core->get_Lang('Booking Date').'\',width:120,align:\'right\'},
                        {field:\'travel_date\',title:\''.$core->get_Lang('Travel Date').'\',width:120,align:\'right\'}
                    ]],
                    fitColumns: true,
					showFooter: true,
					pagination: true,
					pageSize: 20">
		</div>';
	} else if($product_type=='voucher'){
		$clsVoucherCat = new VoucherCat();
		$html .= '<div class="form-group ">
			<label class="col-form-label">2.'.$core->get_Lang('Category').'</label>
			<select class="form-control filter_item_search iso-selectbox" column="cat_id" data-width="100%" data-placeholder="'.$core->get_Lang('Travel style').'">
				'.$clsVoucherCat->makeSelectboxOption(0,0).'
			</select>
		</div>
		<div class="form-group">
			<label class="col-form-label">3.'.$core->get_Lang('Product').' <span class="text-red">*</span></label>
			 <select id="cboProduct" class="easyui-combogrid" prompt="'.$core->get_Lang('Search').'..." height="34" style="width:100%" data-options="
                    panelWidth: 800,
                    idField: \'\',
                    textField: \'\',
                    url: \''.PCMS_URL.'/index.php?mod='.$mod.'&act=load_search_voucher&discount_id='.$discount_id.'\',
                    method: \'post\',
					mode: \'remote\',
					multiple:true, 
                    columns: [[
                        {field:\'itemid\',title:\'\',width:30,align:\'center\'},
                        {field:\'title\',title:\''.$core->get_Lang('Name').'\',width:200},
                        {field:\'category\',title:\''.$core->get_Lang('Category').'\',width:80,align:\'left\'},
                        {field:\'price\',title:\''.$core->get_Lang('Price').'\',width:80,align:\'right\'}
                    ]],
                    fitColumns: true,
					showFooter: true,
					pagination: true,
					pageSize: 20">
		</div>';
	}
	// Return
	echo @json_encode(array(
		'html' => $html
	)); die();
}
function default_stop_discount(){
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$clsDiscount = new Discount();
	$discount_id = Input::post('discount_id',0);
	
	$msg = '_error';
	if($clsDiscount->updateOne($discount_id, array(
		'status' => 0,
		'is_due_date' => 1,
		'due_date' => time()
	))){
		$msg = '_success';
	}
	echo $msg; die();
}
function default_continue_discount(){
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$clsDiscount = new Discount();
	$discount_id = Input::post('discount_id',0);
	
	$msg = '_error';
	$more_information = $clsDiscount->getOneField('more_information', $discount_id);
	$more_information = !empty($more_information) 
		? @json_decode($more_information, true) : array();
	if($clsDiscount->updateOne($discount_id, array(
		'status' => 1,
		'is_due_date' => $more_information['is_due_date'],
		'due_date' => $more_information['due_date']
	))){
		$msg = '_success';
	}
	echo $msg; die();
}
function default_add_product(){
	global $assign_list,$_CONFIG,$_SITE_ROOT,$mod,$act;
	global $core, $clsModule, $clsButtonNav,$oneSetting,$clsISO;
	$clsDiscount = new Discount();
	$clsDiscountItem = new DiscountItem();
	
	$user_id = (int) $core->_USER['user_id'];
	$item_id = (int) Input::post('item_id', 0);
	$clsTable = Input::post('clsTable');
	$discount_id = (int) Input::post('discount_id', 0);
	
	$msg = '_error';
	if($clsDiscountItem->countItem("discount_id='{$discount_id}' and clsTable='{$clsTable}' and item_id='{$item_id}'") == 0){
		$discount_item_id = $clsDiscountItem->getMaxId();
		if($clsDiscountItem->insert(array(
			$clsDiscountItem->pkey => $discount_item_id,
			'clsTable' => $clsTable,
			'item_id' => $item_id,
			'discount_id' => $discount_id,
			'user_id' => $core->_USER['user_id'],
			'user_id_update' => $core->_USER['user_id'],
			'reg_date' => time(),
			'upd_date' => time()
		))){
			$msg = '_success';
		}
	} else {
		
	}
	// Return
	echo($msg); die();
}
function default_delete_product(){
	global $assign_list,$_CONFIG,$_SITE_ROOT,$mod,$act;
	global $core,$clsModule,$clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	$clsDiscount = new Discount();
	$clsDiscountItem = new DiscountItem();
	$discount_id = (int) Input::post('discount_id',0);
	$discount_item_id = (int) Input::post('discount_item_id',0);
	
	$msg = '_error';
	if($discount_item_id > 0){
		if($clsDiscountItem->deleteOne($discount_item_id)){
			$msg = '_success';
		}
	}
	// Return
	echo $msg; die();
}
function default_load_products_discount(){
	global $assign_list,$_CONFIG,$_SITE_ROOT,$mod,$act;
	global $core,$clsModule,$clsButtonNav,$oneSetting, $clsISO;
	$user_id = $core->_USER['user_id'];
	$clsTour = new Tour();
	$clsHotel = new Hotel();
	$clsCruise = new Cruise();
	$clsCombo = new Combo();
	$clsVoucher = new Voucher();
	$clsDiscount = new Discount();
	$clsDiscountItem = new DiscountItem();
	/* Variable */
	$discount_id = (int) Input::post('discount_id',0);
	$list_items = $clsDiscountItem->getAll("discount_id='{$discount_id}' order by reg_date DESC");
	//$clsISO->print_pre($list_items); die();
	$html = '';
	$total_items = 0;
	if(!empty($list_items)){
		$total_items = count($list_items);
		$html = '<ul class="list-igroup">';
		foreach($list_items as $key => $val){
			if($val['clsTable'] == 'Tour') {
                $clsClassTable = $clsTour;
                $link_item=DOMAIN_NAME.'/admin/tour/edit/'.$val['item_id'].'/overview';
            }
            if($val['clsTable'] == 'Hotel') {
                $clsClassTable = $clsHotel;
                $link_item=DOMAIN_NAME.'/admin/hotel/insert/'.$val['item_id'].'/overview';
            }
            if($val['clsTable'] == 'Cruise') {
                $clsClassTable = $clsCruise;
                $link_item=DOMAIN_NAME.'/admin/cruise/insert/'.$val['item_id'].'/overview';
            }
            if($val['clsTable'] == 'Combo') {
                $clsClassTable = $clsCombo;
                $link_item=DOMAIN_NAME.'/admin/combo/edit/'.$val['item_id'].'/overview';
            }
            if($val['clsTable'] == 'Voucher') {
                $clsClassTable = $clsVoucher;
                $link_item=DOMAIN_NAME.'/admin/voucher/insert/'.$val['item_id'].'/overview';
            }
			$html .= '<li>'.$clsClassTable->getTitle($val['item_id']).'
				<a target="_blank" href="'.$link_item.'" title="'.$core->get_Lang('View').'"><i class="icon-eye-open"></i></a><a href="javascript:void(0);" onClick="delete_product(this)" discount_id="'.$discount_id.'" discount_item_id="'.$val[$clsDiscountItem->pkey].'" class="remove"></a>
			</li>';
		}
		$html .= '</ul>';
	} else {
		$html = '<div class="loading text-center">
			'.$core->get_Lang('Not any data').'
		</div>';
	}
	// Return
	echo @json_encode(array(
		'html' => $html,
		'total_items' => $total_items
	)); die();
}
?>