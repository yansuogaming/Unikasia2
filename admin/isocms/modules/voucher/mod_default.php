<?php
function getFrame($voucher_id=null){
	global $core,$dbconn,$_LANG_ID,$clsISO;
	$frames = array(
		'overview' => array(
			'href_group'	=> 'overview',
			'name'	=> $core->get_Lang('Overview'),
			'icon'	=> 'home',
			'steps' => array(
				'generalinformation' => array(
					'name' => $core->get_Lang('generalinformation')
				),	
				'image' => array(
					'name' => $core->get_Lang('Image')
				),	
				'highLight' => array(
					'name' => $core->get_Lang('HighLight')
				),
				'detail_information' => array(
					'name' => $core->get_Lang('Detail Information')
				),
				'conditions_apply' => array(
					'name' => $core->get_Lang('Conditions apply')
				)
			)
		),
	);
	$frames['destinations'] = array(
		'name'	=> $core->get_Lang('destinations'),
		'href_group'	=> 'destination',
		'icon'	=> '',
		'steps'	=> array(
			'destination' => array(
					'name' => $core->get_Lang('destinations')
				),
		)
	);
	$frames['photoGallery'] = array(
		'name'	=> $core->get_Lang('Photo Gallery'),
		'href_group'	=> 'photoGallery',
		'icon'	=> '',
		'steps'	=> array(
			'photoGallery' => array(
					'name' => $core->get_Lang('Photo Gallery')
				),
		)
	);
	$frames['configPrice'] = array(
		'name'	=> $core->get_Lang('Config Price'),
		'href_group'	=> 'configPrice',
		'icon'	=> '',
		'steps'	=> array(
			'configPrice'	=> array(
					'name' => $core->get_Lang('Config Price')
				),
		)
	);
	$frames['seo'] = array(
		'name'	=> $core->get_Lang('seosdvanced'),
		'href_group'	=> 'seo',
		'icon'	=> '',
		'steps'	=> array(
			'seo' => array(
					'name' =>  $core->get_Lang('seosdvanced')
				)
		)
	);
	
	return $frames;
}
function default_insert() {
//	ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
    global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $oneSetting, $core,$pvalTable,
	$clsModule, $clsButtonNav, $dbconn, $clsISO, $clsConfiguration,$adult_type_id,$child_type_id,$infant_type_id,$show,$nextstep;
    $assign_list["clsModule"] = $clsModule;
    $user_id = $core->_USER['user_id'];
	$show=isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list["show"] = $show;
    $assign_list["msg"] = isset($_GET['message']) ? $_GET['message'] : '';

	
	$pvalTable =Input::get('voucher_id',0);$assign_list["pvalTable"] = $pvalTable; 
	$panel =Input::get('panel','');$assign_list["panel"] = $panel;

	$currentstep =Input::get('step','generalinformation');
	$assign_list["currentstep"] = $currentstep;
	
	
	
	$currentstepx = 0;
	$frames = getFrame($pvalTable);
	//$clsISO->pre($oneTour);die;
	$ii = 0; $arrStep = array();
	foreach($frames as $okey => $frame){
		$steps = $frame['steps'];
		foreach($steps as $key => $step){
			$status = 0;
			$arrStep[$ii] = array(
				'key' => $key,
				'name' => $step['name'],
				'status' => $status,
				'description' => $step['description']
			);
			$frames[$okey]['steps'][$key]['status'] = $status;
			++$ii;
		}
	}
	/*if($profile_id==18696){
			die('ss');
		}*/
	$nextstep = $arrStep[$currentstepx+1];
	$assign_list["frames"] = $frames;
	$assign_list["nextstep"] = $nextstep;
	

    $classTable = "Voucher";
    $clsClassTable = new $classTable;
    $oneItem = $clsClassTable->getOne($pvalTable);
    $assign_list["oneItem"] = $oneItem;
    $tableName = $clsClassTable->tbl;
    $pkeyTable = $clsClassTable->pkey;

    $assign_list["clsClassTable"] = $clsClassTable;
    $assign_list["pkeyTable"] = $pkeyTable;
	
	require_once DIR_COMMON."/clsForm.php";
	$clsForm = new Form();
	$clsForm->setDbTable($tableName, $pkeyTable, $pvalTable);
	$assign_list["clsForm"] = $clsForm;
	
	$clsForm->addInputTextArea("full",'intro', "", 'intro', 255, 25, 5, 1,  "style='width:100%'");
	$clsForm->addInputTextArea("full",'easy_cancel', "", 'easy_cancel', 255, 25, 5, 1,  "style='width:100%'"); 
	
	if($currentstep=='seo'){
		$clsMeta = new Meta();
		$assign_list["clsMeta"] = $clsMeta;
		$linkMeta = $clsClassTable->getLink($pvalTable);
		$allMeta = $clsMeta->getAll("config_link='$linkMeta'");
		$meta_id = $allMeta[0]['meta_id'];
		
		if(empty($meta_id)){
			$introMeta=strip_tags(html_entity_decode(addslashes($oneItem['overview'])));
			$introMeta=explode('$trun$', wordwrap($introMeta, 280, '$trun$', false), 2);
			$introMeta=$introMeta[0] . (isset($introMeta[1]) ? '...' : '');
			$clsMeta->insertOne("config_link,config_value_title,config_value_intro,image,reg_date,upd_date,meta_id","'".$linkMeta."','".$oneItem['title']."','".$introMeta."','".$oneItem['image']."','".time()."','".time()."','".$clsMeta->getMaxId()."'");
		}
	}
//	$clsClassTable->updateMinPrice($pvalTable);
	
}


function default_getMainFormStep(){
	global $smarty,$assign_list,$_frontIsLoggedin_user_id,$core,$clsISO,$clsProperty,$clsUser,$_company_iom_id,$dbconn,$nextstep,$clsConfiguration,$mod,$package_id,$pvalTable,$meta_id;
	$clsVoucher = new Voucher();
	$clsVoucherCat = new VoucherCat();$assign_list["clsVoucherCat"] = $clsVoucherCat;
	$clsProperty = new Property();$assign_list["clsProperty"] = $clsProperty;
	$clsTag = new Tag();$assign_list["clsTag"] = $clsTag;
	$clsMeta = new Meta();$assign_list["clsMeta"] = $clsMeta;
	$clsContinent                   = new Continent();	$assign_list["clsContinent"]    = $clsContinent;
	
	#
	$table_id = Input::post('table_id',0);
	$currentstep = Input::post('currentstep','');
	$oneItem =$clsVoucher->getOne($table_id);
	$tableName = $clsVoucher->tbl;
    $pkeyTable = $clsVoucher->pkey;
	$classTable                     = "Voucher";
	$assign_list["classTable"] = $classTable;
	$assign_list["clsTable"] = $classTable;
	$assign_list["clsClassTable"] = $clsVoucher;
    $assign_list["pkeyTable"] = $pkeyTable;
	$smarty->assign('pvalTable',$table_id);
	$smarty->assign('oneItem',$oneItem);
	
	$linkMeta               = $clsVoucher->getLink($table_id);
	$allMeta                = $clsMeta->getAll("config_link='$linkMeta'");
	$meta_id                = $allMeta[0]['meta_id']; $assign_list["meta_id"] = $meta_id;
	
	$frames = getFrame();
	#Step follow index
	$ii = 0; $arrStep = array();
	foreach($frames as $okey => $frame){
		$steps = $frame['steps'];
		foreach($steps as $key => $step){
			$status = 0;
			if($key == 'generalinformation' && $oneItem['title'] !='' && $oneItem['cat_id'] > 0){
				$status = 1;
			}
			if($key == 'image' && $oneItem['image'] !=''){
				$status = 1;
			}
			if($key == 'highLight' && $oneItem['intro'] !=''){
				$status = 1;
			}
			if($key == 'detail_information' && $oneItem['content'] !=''){
				$status = 1;
			}
			if($key == 'conditions_apply' && $oneItem['location'] !=''){
				$status = 1;
			}
			if($key == 'destination'){
				$clsVoucherDestination = new VoucherDestination();
				$number_destination = $clsVoucherDestination->countItem("voucher_id='".$table_id."'");
				if($number_destination > 0){
					$status = 1;
				}
			}
			if($key == 'photoGallery'){
				$clsImage = new Image();
				$number_image = $clsImage->countItem("table_id='".$table_id."' and type='Voucher'");
				if($number_image > 0){
					$status = 1;
				}
			}
			if($key == 'configPrice' && $oneItem['price'] !='' && $oneItem['unit'] > 0){
				$status = 1;
			}
			if($key == 'seo'){
				$clsMeta = new Meta();
				$link = $clsVoucher->getLink($table_id);
				$oneMeta = $clsMeta->getAll("config_link='$link' limit 0,1",$clsMeta->pkey.',config_value_title,config_value_intro,image');
				if(!empty($oneMeta) && $oneMeta[0]['config_value_title'] != '' && $oneMeta[0]['config_value_intro'] != '' && $oneMeta[0]['image'] != ''){
					$status = 1;	
				}				
			}
			$arrStep[$ii] = array(
				'key' => $key,
				'panel' => $okey,
				'name' => $step['name'],
				'status' => $status
			);
			++$ii;
		}
	}
	
	$smarty->assign('arrStep',$arrStep);
	if($currentstep=='seo'){
		$clsMeta = new Meta();
		$assign_list["clsMeta"] = $clsMeta;
		$linkMeta = $clsVoucher->getLink($table_id);
		$allMeta = $clsMeta->getAll("config_link='$linkMeta'");
		$meta_id = $allMeta[0]['meta_id'];

		if(empty($meta_id)){
			
			$introMeta=strip_tags(html_entity_decode(addslashes($oneItem['intro'])));
			$introMeta=explode('$trun$', wordwrap($introMeta, 280, '$trun$', false), 2);
			$introMeta=$introMeta[0] . (isset($introMeta[1]) ? '...' : '');
			$meta_id=$clsMeta->getMaxId();
			$clsMeta->insertOne("config_link,config_value_title,config_value_intro,image,reg_date,upd_date,meta_id","'".$linkMeta."','".$oneItem['title']."','".$introMeta."','".$oneItem['image']."','".time()."','".time()."','".$meta_id."'");

		}
		$smarty->assign('meta_id',$meta_id);
	} else if($currentstep == 'lhdl'){

	}
	if($currentstep=='image-file-tour'){
		$hasImg = 1;
		if(stripos($oneItem['image'],'no-image')!==false){
			$hasImg = 0;
		}
		$smarty->assign('hasImg',$hasImg);
	}
	//die('xx');
	#Possition current step
	$step = 0;
	foreach($arrStep as $k => $v){
		if($v['key']==$currentstep){
			$step = $k;
			break;
		}
	}
	$prevstep = isset($arrStep[$step-1]['key']) ? $arrStep[$step-1]['key'] : '_first';
	$nextstep = isset($arrStep[$step+1]['key']) ? $arrStep[$step+1]['key'] : '_last';
	$smarty->assign('step',$step);
	$smarty->assign('prevstep',$prevstep);
	$smarty->assign('nextstep',$nextstep);
	$smarty->assign('currentstep',$currentstep);
	$smarty->assign('list_check_target',json_encode($arrStep));
	
	require_once DIR_COMMON . "/clsForm.php";
    $clsForm = new Form();
    $clsForm->setDbTable($tableName, $pkeyTable, $pvalTable);
	$smarty->assign('clsForm',$clsForm);
	#
    $clsForm->addInputTextArea("full", "overview", "", "overview", 255, 25, 8, 1, "style='width:100%'");
	$clsForm->addInputTextArea("full", "check_in_out_rule", "", "check_in_out_rule", 255, 25, 8, 1, "style='width:100%'");
    $clsForm->addInputTextArea("full", "blog_booking_policy", "", "blog_booking_policy", 255, 25, 15, 1, "style='width:100%'");
    $clsForm->addInputTextArea("full", "child_policy", "", "child_policy", 255, 25, 2, 1, "style='width:100%'");
    $clsForm->addInputTextArea("full", "cancellation_policy", "", "cancellation_policy", 255, 25, 2, 1, "style='width:100%'");
	$clsForm->addInputTextArea("full", "other_policy", "", "other_policy", 255, 25, 8, 1, "style='width:100%'");
	
	#
	
	// Output
	$html = $core->build('main_step.tpl');
	echo $html; die();
}
function default_ajSaveMainStep(){
			/*ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);*/
	global $_frontIsLoggedin_user_id,$core,$clsISO,$clsProperty,$clsUser,$_company_iom_id,$dbconn,$clsConfiguration;
	#
	$clsVoucherCat = new VoucherCat();
	$clsTag = new Tag();
	$msg = '_error';
	$clsClassTable= new Voucher();
	$table_id = Input::post('table_id',0);
	$currentstep = Input::post('currentstep');
	if($currentstep=='generalinformation'){
		
		$title = Input::post('title');	
        $title=html_entity_decode($title);
        $title = ucfirst($title);
		$arr_update = [
			'title' 			=> addslashes($title),
			'slug'				=> $clsISO->replaceSpace2($title),
			'is_draft' 			=> '0',
			'upd_date' 			=> time(),
			'user_id_update'	=>	addslashes($core->_SESS->user_id)
		];
		if ($clsConfiguration->getValue('SiteHasCat_Voucher')) {
			$cat_id      = Input::post('iso-cat_id');
			$list_cat_id = $clsVoucherCat->getListParent($cat_id);
			$arr_update['list_cat_id'] = addslashes($list_cat_id);
		}	
		
		foreach($_POST as $key=>$val){
			$tmp = explode('-',$key);
			if($tmp[0]=='iso'){
				$arr_update[$tmp[1]] = addslashes($val);
			}
		}
		$clsClassTable->updateOne($table_id, $arr_update);	
		
	} else if($currentstep=='image'){
		$image = Input::post('image','');
		$clsClassTable->updateOne($table_id, array(
			'image' => $image
		));
	} else if($currentstep == 'highLight'){
//		var_dump($_POST);die;
		$intro = Input::post('iso-intro','');
		$arr_update['intro'] = $intro;
		$clsClassTable->updateOne($table_id, $arr_update);
	} else if($currentstep == 'detail_information'){
		$content = Input::post('iso-content');
		$content = html_entity_decode($content);
		$content= preg_replace_callback('#(<img\s(?>(?!src=)[^>])*?src=")nodata...image/([a-z]+);base64,([\w=+/]++)("[^>]*>)#', "data_upload_image_word_textarea", $content);
		$content= preg_replace_callback('#(<img\s(?>(?!src=)[^>])*?src=")data:image/(gif|png|jpeg);base64,([\w=+/]++)("[^>]*>)#', "data_upload_image_word_textarea", $content);
		$arr_update['content'] = $content;
		$clsClassTable->updateOne($table_id, $arr_update);
	} else if($currentstep == 'conditions_apply'){
//		var_dump($_POST);die;
		$location = Input::post('iso-location','');
		$arr_update['location'] = $location;
		$clsClassTable->updateOne($table_id, $arr_update);
	} else if($currentstep == 'configPrice'){
		$price = Input::post('price',0);
		$price_input = Input::post('price_input',0);
		$taxable = Input::post('taxable',0);
		$quantity = Input::post('quantity',0);
		$continue_order = Input::post('continue_order',0);
		$is_shipping = Input::post('is_shipping',0);
		$is_inventory = Input::post('is_inventory',0);
		$unit = (int) Input::post('unit',0);
		$arr_update = [
			'price'				=> $clsISO->processSmartNumber2($price),
			'price_input'		=> $clsISO->processSmartNumber2($price_input),
			'taxable'			=> $taxable,
			'continue_order'	=> $continue_order,
			'is_shipping'		=> $is_shipping,
			'is_inventory'		=> $is_inventory,
			'unit'				=> $unit,
		];
		foreach($_POST as $key=>$val){
			$tmp = explode('-',$key);
			if($tmp[0]=='iso'){
				$arr_update[$tmp[1]] = addslashes($val);
			}
		}
		$clsClassTable->updateOne($table_id, $arr_update);
		$clsStock = new Stock();
		$clsStock->init($table_id, $quantity);
	} else if($currentstep == 'seo'){
		$clsClassTable = new Meta();
		
		$config_value_title = Input::post('config_value_title');
		$meta_id = Input::post('meta_id');
		$config_value_intro = Input::post('config_value_intro');
		$config_value_image = Input::post('isoman_url_image_seo');
		if(empty($meta_id)){
			$clsClassTable->updateOne($table_id, array(
				'star_id' => $star_id,
				'upd_date' => time()
			));
		}else{
			$clsClassTable->updateOne($meta_id, array(
				'config_value_title' => $config_value_title,
				'config_value_intro' => $config_value_intro,
				'image' => $config_value_image,
				'upd_date' => time()
			));
		}

	}else{
		$val_post = input::post();
		$arr_update = [];
		foreach($val_post as $key=>$val){
			$tmp = explode('-',$key);
			if($tmp[0]=='iso'){
				$arr_update[$tmp[1]] = addslashes($val);
			}
		}
//		var_dump($arr_update);die;
		$clsClassTable->updateOne($table_id, $arr_update);
	}
	$msg = '_success';
	// Output
	echo $msg; die();
}
function default_loadCountry() {
    global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
    global $core, $clsModule, $clsButtonNav, $oneSetting;
    $user_id = $core->_USER['user_id'];
    #
	$clsContinent = new Continent();
	$clsCountry = new Country();
	$continent_id = Input::post('continent_id', 0);
	$country_id = Input::post('country_id', 0);
    #
	$Html = $clsContinent->getOptCountryByContinent($continent_id, $country_id);
    echo $Html; die();
}
function default_loadArea() {
    global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
    global $core, $clsModule, $clsButtonNav, $oneSetting;
    $user_id = $core->_USER['user_id'];
    #
    $clsArea = new Area();
    $country_id = isset($_POST['country_id']) ? $_POST['country_id'] : 0;
    $area_id = isset($_POST['area_id']) ? $_POST['area_id'] : 0;
	
	$Html = '<option value="0">|---' . $core->get_Lang('select') . '--</option>';
    $lstArea = $clsArea->getAll("is_trash=0 and country_id='$country_id' order by order_no asc");
	if(is_array($lstArea) && count($lstArea) > 0){
		for($i=0; $i<count($lstArea); $i++){
			$Html .= '<option title="' .$clsArea->getTitle($lstArea[$i][$clsArea->pkey]). '" value="'.$lstArea[$i][$clsArea->pkey].'"'.($area_id==$lstArea[$i][$clsArea->pkey]?'selected="selected"':'').'>|--- ' . $clsArea->getTitle($lstArea[$i][$clsArea->pkey]) . '</option>';
		}
	}
	echo $Html; die();
}
function default_loadRegion() {
    global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
    global $core, $clsModule, $clsButtonNav, $oneSetting;
    $user_id = $core->_USER['user_id'];
    #
    $clsRegion = new Region();
    $country_id = isset($_POST['country_id']) ? $_POST['country_id'] : 0;
    $region_id = isset($_POST['region_id']) ? $_POST['region_id'] : 0;
	#
	$Html = $clsRegion->makeSelectboxOption($country_id, $region_id);
	if($Html==''){
		echo 'EMPTY';
	}else{
		echo $Html;
	}
	die();
}
function default_loadCity() {
    global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
    global $core, $clsModule, $clsButtonNav, $oneSetting;
    $user_id = $core->_USER['user_id'];
    #
    $clsCity = new City();
    $country_id = isset($_POST['country_id']) ? $_POST['country_id'] : 0;
    $region_id = isset($_POST['region_id']) ? $_POST['region_id'] : 0;
    $city_id = isset($_POST['city_id']) ? $_POST['city_id'] : 0;
	
	$cond = "is_trash=0 and is_online=1";
	if(intval($country_id)){
		$cond .= " and country_id='$country_id'";
	}
	if(intval($region_id) > 0){
		$cond .= " and region_id='$region_id'";
	}
	$cond .= " order by title ASC";
	#
    $Html = '<option value="0"> --' . $core->get_Lang('select') . '-- </option>';
    $listCity = $clsCity->getAll($cond, $clsCity->pkey);
	if(is_array($listCity) && count($listCity) > 0){
		for($i=0; $i<count($listCity); $i++){
			$Html .= '<option title="'.$clsCity->getTitle($listCity[$i][$clsCity->pkey]) . '" value="'.$listCity[$i][$clsCity->pkey].'" '.($city_id==$listCity[$i][$clsCity->pkey]?'selected="selected"':'').'>|--- ' . $clsCity->getTitle($listCity[$i][$clsCity->pkey]) . '</option>';
		}
	}
	unset($listCity);
	echo $Html; die();
}

function default_upload_gallery(){
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
	global $dbconn,$assign_list,$_CONFIG,$_SITE_ROOT,$mod,$_LANG_ID,$act,$menu_current,$current_page,$core,$clsModule;
	global $clsConfiguration,$clsISO,$package_id;
	
	$tp = Input::post('tp', "_crop");
	$table_id = (int) Input::post('table_id' , 0);
	$clsTableGal = Input::post('clsTableGal');
	$clsClassTableGal = new Image();
//	var_dump($_POST);die;
	#
	$msg = '_error';
	
	$list_images = Input::post('list_images');
		$list_images = explode('|', $list_images);
		foreach($list_images as $key => $image){
			if(!empty($image) && file_exists(ABSPATH.$image)){
				$arr_img = explode('/',$image);
				$img_title = explode('.',end($arr_img));
				if($clsClassTableGal->insert(array(
					$clsClassTableGal->pkey => $clsClassTableGal->getMaxId(),
					'user_id' 	=> $core->_USER['user_id'],
					'table_id' 	=> $table_id,
					'type' 		=> $clsTableGal,
					'title' 	=> $img_title[0],
					'slug' 		=> $core->replaceSpace($img_title[0]),
					'image' 	=> $image,
					'order_no' 	=> $clsClassTableGal->getMaxOrderNo(),
					'reg_date' 	=> time()
				))){
					$msg = 'success';
				}
			}
		}
	// Return
	echo $msg; die();
}

function default_ajOpenGallery() {
    global $assign_list,$_CONFIG,$_SITE_ROOT,$mod,$_LANG_ID,$act,$menu_current,$current_page,$oneSetting;
    global $core,$clsModule,$clsButtonNav,$dbconn,$clsISO;
    #
    $clsPagination = new Pagination();

    $tour_image_id = isset($_POST['tour_image_id']) ? intval($_POST['tour_image_id']) : 0;
    $table_id = isset($_POST['table_id']) ? intval($_POST['table_id']) : 0;
    $clsTable = isset($_POST['clsTable']) ? $_POST['clsTable'] : '';
    $tp = isset($_POST['tp']) ? $_POST['tp'] : '';
//	var_dump($_POST);die;
	$clsClassTable=new Image();
    // Load List
    if ($tp == 'L') {
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $number_per_page = isset($_POST['number_per_page']) ? intval($_POST['number_per_page']) : 10;
        //echo $number_per_page; die();
        #
        $cond = "is_trash=0 and table_id='$table_id' and type='$clsTable'";
        #
		 $html ='';
        $totalRecord = $clsClassTable->countItem($cond);
        $pageview = $clsPagination->pagination_ajax($totalRecord,$number_per_page,$page,'','',false);
        #
        $offset = ($page - 1) * $number_per_page;
        $order_by = " ORDER BY order_no asc";
        $limit = " LIMIT $offset,$number_per_page";
        $lstItem = $clsClassTable->getAll($cond . $order_by);
//        $clsISO->print_pre($cond . $order_by,true);die();
        if (!empty($lstItem)) {
            for ($i = 0; $i < count($lstItem); $i++) {
                $table_image_id = $lstItem[$i][$clsClassTable->pkey];
                $html .= '<div><div class="gallery-item bootstrap">';
					$html .= '<a><img class="img-responsive mr-3 preview-img" src="' . $ftp_abs_path_image . $clsClassTable->getImage($table_image_id,140,100,$lstItem[$i]) . '" alt="'.$lstItem[$i]['title'].'" ></a>';
					$html .= '  <div class="gallery-toolbar">
						<a class="text-white" onClick="delete_gallery(this)" table_id="'.$table_id.'" table_image_id="'.$lstItem[$i][$clsClassTable->pkey].'">'.$clsISO->makeIcon('times').'</a>
					</div>
					</div>
					<input type="text" data="'.$lstItem[$i]['image_id'].'" table_id="'.$lstItem[$i]['table_id'].'" value="'.$lstItem[$i]['title'].'" onChange="changeTitleGallery(this)"/>
				</div>';
            }
        }
		$html.= '';
        echo $html;die();
    }else{
        echo 'error';die();
    }
}

function default_ajDeleteGallery(){
    global $core,$clsISO,$clsConfiguration,$assign_list,$clsModule;
	// header('Content-Type: application/json');
    $clsTable = Input::post('clsTable');
	$clsClassTable = new Image();
	$table_id = (int) Input::post('table_id',0);
    $image_id = (int) Input::post('image_id',0);
	#
    $result = array('result' => 'error','mes'=>$core->get_Lang('error_data_image'));
    if($image_id == 0){
        $result = array('result' => 'error','mes'=>$core->get_Lang('error_data_image'));
    } else if($image_id){
        if($clsClassTable->deleteOne($image_id)){
            $result = array('result' => 'success','mes'=>$core->get_Lang('success_del_image'));
        }else{
            $result = array('result' => 'error','mes'=>$core->get_Lang('error_del_image'));
        }
    }
	// Return
    echo @json_encode($result);die();
}

function default_ajaxChangeTitleGallery(){
	global $core,$clsISO,$clsConfiguration,$assign_list,$clsModule;
	$clsTable = Input::post('clsTable');
	$title = Input::post('value','');
	$slug = $core->replaceSpace($title);
	$image_id = Input::post('data',0);
	$table_id = (int) Input::post('table_id',0);
	$clsClassTable = new Image();
	if($image_id > 0 && $slug != ''){
		$arr_update = [
			'title' =>	$title,
			'slug'	=>	$slug
		];
		if($clsClassTable->updateOne($image_id, $arr_update)){
			echo 'success';die;
		}else{
			echo 'error';die;
		}
	}	
}

function default_checkTitleVoucher(){
	global $core,$clsISO,$clsConfiguration,$assign_list,$clsModule;
	$clsVoucher = new Voucher();
	$table_id = (int)Input::post('table_id',0);
	$title = Input::post('title','');
	$slug = $clsISO->replaceSpace2($title);
	 $cond = "voucher_id !='$table_id' and slug='$slug'";
	$count_voucher = $clsVoucher->countItem($cond);
	$data = ['result'=>true];
	if($count_voucher > 0){
		$data = ['result'=>false];
	}
	echo json_encode($data);die;	
}
?>