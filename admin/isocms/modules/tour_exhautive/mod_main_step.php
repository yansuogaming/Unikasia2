<?php
function getFrame($blog_id = null, $obj = '')
{
	global $core, $dbconn, $_LANG_ID, $clsISO, $package_id, $act;
	// $clsISO->dump($act);

	if ($obj === 'why') {
		// $clsISO->dump(1);
		$frames	=	array(
			'overview'	=>	array(
				'href_group'	=> 	'overview',
				'name'			=> 	$core->get_Lang('Overview'),
				'icon'			=> 	'home',
				'steps' 		=> 	array(
					'Why'	=>	array(
						'name'	=>	$core->get_Lang('Why')
					)
				)
			),
		);
	} else {
		// $clsISO->dump(2);
		$frames = array(
			'overview' => array(
				'href_group'	=> 'overview',
				'name'	=> $core->get_Lang('Overview'),
				'icon'	=> 'home',
				'steps' => array(
					'generalinformation' => array(
						'name' => $core->get_Lang('About')
					),
					'banner' => array(
						'name' => $core->get_Lang('Banner')
					),
					// 'image' => array(
					// 	'name' => $core->get_Lang('Image')
					// ),
					'intro' => array(
						'name' => $core->get_Lang('Intro')
					),
					'config' => array(
						'name' => $core->get_Lang('Config')
					),
					// 'longText' => array(
					// 	'name' => $core->get_Lang('Long text')
					// ),
				)
			),
		);
	}
	return $frames;
}
function default_insert_category_country()
{
	//	ini_set('display_errors', '1');
	//ini_set('display_startup_errors', '1');
	//error_reporting(E_ALL);
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $oneSetting, $core, $pvalTable,
		$clsModule, $clsButtonNav, $dbconn, $clsISO, $clsConfiguration, $adult_type_id, $child_type_id, $infant_type_id, $show, $nextstep;
	$assign_list["clsModule"] = $clsModule;
	$user_id = $core->_USER['user_id'];
	$show = isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list["show"] = $show;
	$assign_list["msg"] = isset($_GET['message']) ? $_GET['message'] : '';

	$pvalTable = Input::get('category_country_id', 0);
	$assign_list["pvalTable"] = $pvalTable;

	$panel = Input::get('panel', '');
	$assign_list["panel"] = $panel;

	$currentstep = Input::get('step', 'generalinformation');
	$assign_list["currentstep"] = $currentstep;



	$currentstepx = 0;
	$frames = getFrame($pvalTable);
	//$clsISO->pre($oneTour);die;
	$ii = 0;
	$arrStep = array();
	foreach ($frames as $okey => $frame) {
		$steps = $frame['steps'];
		foreach ($steps as $key => $step) {
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
	$nextstep = $arrStep[$currentstepx + 1];
	$assign_list["frames"] = $frames;
	$assign_list["nextstep"] = $nextstep;


	$classTable = "Category_Country";
	$clsClassTable = new $classTable;
	$oneItem = $clsClassTable->getOne($pvalTable);
	$assign_list["oneItem"] = $oneItem;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey;

	$assign_list["clsClassTable"] = $clsClassTable;
	$assign_list["pkeyTable"] = $pkeyTable;

	require_once DIR_COMMON . "/clsForm.php";
	$clsForm = new Form();
	$clsForm->setDbTable($tableName, $pkeyTable, $pvalTable);
	$assign_list["clsForm"] = $clsForm;

	$clsForm->addInputTextArea("full", 'intro', "", 'intro', 255, 25, 5, 1,  "style='width:100%'");
	$clsForm->addInputTextArea("full", 'easy_cancel', "", 'easy_cancel', 255, 25, 5, 1,  "style='width:100%'");

	if ($currentstep == 'seo') {
		$clsMeta = new Meta();
		$assign_list["clsMeta"] = $clsMeta;
		$linkMeta = $clsClassTable->getLink($pvalTable);
		$allMeta = $clsMeta->getAll("config_link='$linkMeta'");
		$meta_id = $allMeta[0]['meta_id'];

		if (empty($meta_id)) {
			$introMeta = strip_tags(html_entity_decode(addslashes($oneItem['overview'])));
			$introMeta = explode('$trun$', wordwrap($introMeta, 280, '$trun$', false), 2);
			$introMeta = $introMeta[0] . (isset($introMeta[1]) ? '...' : '');
			$clsMeta->insertOne("config_link,config_value_title,config_value_intro,image,reg_date,upd_date,meta_id", "'" . $linkMeta . "','" . $oneItem['title'] . "','" . $introMeta . "','" . $oneItem['image'] . "','" . time() . "','" . time() . "','" . $clsMeta->getMaxId() . "'");
		}
	}
	//	$clsClassTable->updateMinPrice($pvalTable);

}
function default_insert_why_travelstyle_country()
{
	// die('php_insert_travelstyle_country');
	//	ini_set('display_errors', '1');
	//ini_set('display_startup_errors', '1');
	//error_reporting(E_ALL);
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $oneSetting, $core, $pvalTable,
		$clsModule, $clsButtonNav, $dbconn, $clsISO, $clsConfiguration, $adult_type_id, $child_type_id, $infant_type_id;
	$assign_list["clsModule"]	= 	$clsModule;
	$show 	= 	isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list["show"]	= 	$show;
	$assign_list["msg"] 	= 	isset($_GET['message']) ? $_GET['message'] : '';
	#
	$pvalTable	= 	Input::get('travelstyle_country_id', 0);
	$assign_list["pvalTable"]	= 	$pvalTable;
	$panel 		= Input::get('panel', '');
	$assign_list["panel"] 	= 	$panel;
	$currentstep 	= 	Input::get('step', 'why');
	$assign_list["currentstep"] = 	$currentstep;
	#
	$currentstepx 	= 	0;
	$frames			= 	getFrame($pvalTable, 'why');
	$ii 		= 	0;
	$arrStep 	= 	array();
	foreach ($frames as $okey => $frame) {
		$steps 	= 	$frame['steps'];
		foreach ($steps as $key => $step) {
			$status	= 	0;
			$arrStep[$ii] = array(
				'key' 			=>	$key,
				'name' 			=>	$step['name'],
				'status' 		=>	$status,
				'description' 	=>	$step['description']
			);
			$frames[$okey]['steps'][$key]['status']	= 	$status;
			++$ii;
		}
	}
	$nextstep	= 	$arrStep[$currentstepx + 1];
	$assign_list["frames"] 		= 	$frames;
	$assign_list["nextstep"] 	= 	$nextstep;
	#
	$classTable 	= 	"WhyTravelstyle";
	$clsClassTable 	= 	new $classTable;
	$oneItem	= 	$clsClassTable->getOne($pvalTable);
	$assign_list["oneItem"]	= 	$oneItem;
	$tableName 	= 	$clsClassTable->tbl;
	$pkeyTable 	= 	$clsClassTable->pkey;
	$assign_list["clsClassTable"] 	= 	$clsClassTable;
	$assign_list["pkeyTable"] 		= 	$pkeyTable;
	#
	require_once DIR_COMMON . "/clsForm.php";
	$clsForm	= 	new Form();
	$clsForm->setDbTable($tableName, $pkeyTable, $pvalTable);
	$assign_list["clsForm"]	= 	$clsForm;
	#
	$clsForm->addInputTextArea("full", 'intro', "", 'intro', 255, 25, 5, 1,  "style='width:100%'");
	$clsForm->addInputTextArea("full", 'easy_cancel', "", 'easy_cancel', 255, 25, 5, 1,  "style='width:100%'");
}
function default_getMainFormStep()
{
	// ini_set('display_errors', '1');
	// ini_set('display_startup_errors', '1');
	// error_reporting(E_ALL);
	global $smarty, $assign_list, $_frontIsLoggedin_user_id, $core, $clsISO, $clsProperty, $clsUser, $_company_iom_id, $dbconn, $nextstep, $clsConfiguration, $mod, $package_id, $pvalTable, $package_id, $act;
	#
	$clsCategory_Country = 	new Category_Country();
	$assign_list["clsCategory_Country"]	= $clsCategory_Country;
	$clsContinent 		= 	new Continent();
	$assign_list["clsContinent"] 		= $clsContinent;
	$clsWhyTravelstyle	= 	new WhyTravelstyle();
	$assign_list["clsWhyTravelstyle"]	= $clsWhyTravelstyle;
	#
	$table_id = Input::post('table_id', 0);
	$smarty->assign('pvalTable', $table_id);
	// $clsISO->dd($table_id);
	#
	$currentstep = Input::post('currentstep', '');
	#
	$obj = Input::post('obj', ''); //why
	$smarty->assign('obj', $obj);
	#
	if ($obj === 'why') {
		$oneItem 	= 	$clsWhyTravelstyle->getOne($table_id);
	} else {
		$oneItem	= 	$clsCategory_Country->getOne($table_id);
	}
	$smarty->assign('oneItem', $oneItem);
	#
	$tableName 	= 	$clsCategory_Country->tbl;
	$pkeyTable	= 	$clsCategory_Country->pkey;
	$classTable	= 	"Category_Country";
	$assign_list["classTable"] 		= 	$classTable;
	$assign_list["clsTable"] 		= 	$classTable;
	$assign_list["clsClassTable"]	= 	$clsCategory_Country;
	$assign_list["pkeyTable"] 		= 	$pkeyTable;
	// $assign_list["pvalTable"] 		= 	$pvalTable;
	#
	$clsTourCategory		= 	new TourCategory();
	$assign_list['clsTourCategory']	= 	$clsTourCategory;
	$clsCountry 			= 	new Country();
	$assign_list['clsCountry'] 		= 	$clsCountry;
	$clsCategory_Country 	= 	new Category_Country();
	$assign_list['clsCategory_Country']	=	$clsCategory_Country;
	#
	$frames	= 	getFrame($table_id, $obj);
	#Step follow index
	$ii = 0;
	$arrStep = array();
	foreach ($frames as $okey => $frame) {
		$steps = $frame['steps'];
		foreach ($steps as $key => $step) {
			$arrStep[$ii] = array(
				'key' => $key,
				'panel' => $okey,
				'name' => $step['name'],
				'description' => $step['description']
			);
			++$ii;
		}
	}
	$smarty->assign('arrStep', $arrStep);
	if ($currentstep == 'seo') {
		$clsMeta = new Meta();
		$assign_list["clsMeta"] = $clsMeta;
		$linkMeta = $clsCategory_Country->getLink($table_id);
		$allMeta = $clsMeta->getAll("config_link='$linkMeta'");
		$meta_id = $allMeta[0]['meta_id'];

		if (empty($meta_id)) {

			$introMeta = strip_tags(html_entity_decode(addslashes($oneItem['overview'])));
			$introMeta = explode('$trun$', wordwrap($introMeta, 280, '$trun$', false), 2);
			$introMeta = $introMeta[0] . (isset($introMeta[1]) ? '...' : '');
			$meta_id = $clsMeta->getMaxId();
			$clsMeta->insertOne("config_link,config_value_title,config_value_intro,image,reg_date,upd_date,meta_id", "'" . $linkMeta . "','" . $oneItem['title'] . "','" . $introMeta . "','" . $oneItem['image'] . "','" . time() . "','" . time() . "','" . $meta_id . "'");
		}
		$smarty->assign('meta_id', $meta_id);
	} else if ($currentstep == 'lhdl') {
	}
	if ($currentstep == 'image-file-tour') {
		$hasImg = 1;
		if (stripos($oneItem['image'], 'no-image') !== false) {
			$hasImg = 0;
		}
		$smarty->assign('hasImg', $hasImg);
	}
	#Possition current step
	$step = 0;
	foreach ($arrStep as $k => $v) {
		if ($v['key'] == $currentstep) {
			$step = $k;
			break;
		}
	}
	$prevstep = isset($arrStep[$step - 1]['key']) ? $arrStep[$step - 1]['key'] : '_first';
	$nextstep = isset($arrStep[$step + 1]['key']) ? $arrStep[$step + 1]['key'] : '_last';
	$smarty->assign('step', $step);
	$smarty->assign('prevstep', $prevstep);
	$smarty->assign('nextstep', $nextstep);
	$smarty->assign('currentstep', $currentstep);

	require_once DIR_COMMON . "/clsForm.php";
	$clsForm = new Form();
	$clsForm->setDbTable($tableName, $pkeyTable, $pvalTable);
	$smarty->assign('clsForm', $clsForm);
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
	echo $html;
	die();
}
function default_ajSaveMainStep()
{
	//ini_set('display_errors', '1');
	//ini_set('display_startup_errors', '1');
	//error_reporting(E_ALL);
	global $_frontIsLoggedin_user_id, $core, $clsISO, $clsProperty, $clsUser, $_company_iom_id, $dbconn, $clsConfiguration;
	#Category_Country
	$clsTag			= 	new Tag();
	$msg 			= 	'_error';
	$clsClassTable 	= 	new Category_Country();
	$table_id 		= 	Input::post('table_id', 0);
	$currentstep 	= 	Input::post('currentstep');
	#
	if ($currentstep == 'generalinformation') {
		$cat_id		= 	Input::post('cat_id', 0);
		$country_id = 	Input::post('iso-country_id', 0);
		$arr_update = 	[
			'cat_id' 			=> 	$cat_id,
			'country_id' 		=> 	$country_id,
			'upd_date' 			=> 	time(),
			'user_id_update'	=>	addslashes($core->_SESS->user_id)
		];
		#
		// Editor description
		$content	= 	Input::post('iso-content');
		$content	= 	html_entity_decode($content);
		$content	= 	preg_replace_callback('#(<img\s(?>(?!src=)[^>])*?src=")nodata...image/([a-z]+);base64,([\w=+/]++)("[^>]*>)#', "data_upload_image_word_textarea", $content);
		$content	= 	preg_replace_callback('#(<img\s(?>(?!src=)[^>])*?src=")data:image/(gif|png|jpeg);base64,([\w=+/]++)("[^>]*>)#', "data_upload_image_word_textarea", $content);
		$arr_update['content']	= 	$content;
		#
		$val_post	= 	input::post();
		foreach ($val_post as $key => $val) {
			$tmp 	= 	explode('-', $key);
			if ($tmp[0] == 'iso') {
				$arr_update[$tmp[1]]	= 	addslashes($val);
			}
		}
		$clsClassTable->updateOne($table_id, $arr_update);
	} else if ($currentstep == 'image') {
		$image = Input::post('image', '');
		$clsClassTable->updateOne($table_id, array(
			'image' => $image
		));
	} else if ($currentstep == 'banner') {
		$banner_link	= 	Input::post('banner_link', 0);
		$arr_update	= 	[
			'banner_link' 		=> 	$banner_link,
			'upd_date' 			=> 	time(),
			'user_id_update'	=>	addslashes($core->_SESS->user_id)
		];
		#
		foreach ($_POST as $key => $val) {
			$tmp	= 	explode('-', $key);
			if ($tmp[0]	== 	'iso') {
				$arr_update[$tmp[1]]	= 	addslashes($val);
			}
		}
		$clsClassTable->updateOne($table_id, $arr_update);
	} else if ($currentstep == 'intro') {
		$intro_youtube	= 	Input::post('intro_youtube', 0);
		$arr_update		= 	[
			'intro_youtube'		=>	$intro_youtube,
			'upd_date' 			=> 	time(),
			'user_id_update'	=>	addslashes($core->_SESS->user_id)
		];
		#
		foreach ($_POST as $key => $val) {
			$tmp	= 	explode('-', $key);
			if ($tmp[0]	== 	'iso') {
				$arr_update[$tmp[1]]	= 	addslashes($val);
			}
		}
		$clsClassTable->updateOne($table_id, $arr_update);
	} else if ($currentstep == 'why') {
		$country_id		= 	Input::post('country_id', 0);
		$travelstyle_id	= 	Input::post('travelstyle_id', 0);
		$title			= 	Input::post('title', 0);
		#
		$arr_update		= 	[
			'country_id'		=>	$country_id,
			'travelstyle_id'	=>	$travelstyle_id,
			'title'				=>	$title,
			'upd_date' 			=> 	time(),
			'user_id_update'	=>	addslashes($core->_SESS->user_id),
			'is_trash'			=>	0,
			'is_online'			=>	1,
		];
		#
		foreach ($_POST as $key => $val) {
			$tmp	= 	explode('-', $key);
			if ($tmp[0]	== 	'iso') {
				$arr_update[$tmp[1]]	= 	addslashes($val);
			}
		}
		$clsWhyTravelstyle	= 	new WhyTravelstyle();
		$clsWhyTravelstyle->updateOne($table_id, $arr_update);
	} else if ($currentstep == 'config') {
		$arr_update		= 	[
			'upd_date' 			=> 	time(),
			'user_id_update'	=>	addslashes($core->_SESS->user_id)
		];
		#
		foreach ($_POST as $key => $val) {
			$tmp	= 	explode('-', $key);
			if ($tmp[0]	== 	'iso') {
				$arr_update[$tmp[1]]	= 	addslashes($val);
			}
		}
		$clsClassTable->updateOne($table_id, $arr_update);
	} else if ($currentstep == 'shortText') {
		$intro = Input::post('iso-intro', '');
		$arr_update['intro'] = addslashes($intro);
		$clsClassTable->updateOne($table_id, $arr_update);
	} else if ($currentstep == 'longText') {
		$content = Input::post('iso-content');
		$content = html_entity_decode($content);
		$content = preg_replace_callback('#(<img\s(?>(?!src=)[^>])*?src=")nodata...image/([a-z]+);base64,([\w=+/]++)("[^>]*>)#', "data_upload_image_word_textarea", $content);
		$content = preg_replace_callback('#(<img\s(?>(?!src=)[^>])*?src=")data:image/(gif|png|jpeg);base64,([\w=+/]++)("[^>]*>)#', "data_upload_image_word_textarea", $content);
		$arr_update['content'] = $content;
		$clsClassTable->updateOne($table_id, $arr_update);
	} else if ($currentstep == 'seo') {
		$clsClassTable = new Meta();

		$config_value_title = Input::post('config_value_title');
		$meta_id = Input::post('meta_id');
		$config_value_intro = Input::post('config_value_intro');
		$config_value_image = Input::post('isoman_url_image_seo');
		if (empty($meta_id)) {
			$clsClassTable->updateOne($table_id, array(
				'star_id' => $star_id,
				'upd_date' => time()
			));
		} else {
			$clsClassTable->updateOne($meta_id, array(
				'config_value_title' => $config_value_title,
				'config_value_intro' => $config_value_intro,
				'image' => $config_value_image,
				'upd_date' => time()
			));
		}
	} else {
		$val_post = input::post();
		$arr_update = [];
		foreach ($val_post as $key => $val) {
			$tmp = explode('-', $key);
			if ($tmp[0] == 'iso') {
				$arr_update[$tmp[1]] = addslashes($val);
			}
		}
		//		var_dump($arr_update);die;
		$clsClassTable->updateOne($table_id, $arr_update);
	}
	$msg = '_success';
	// Output
	echo $msg;
	die();
}
function default_ajActionNewCategoryCountry()
{
	//	ini_set('display_errors', '1');
	//	ini_set('display_startup_errors', '1');
	//	error_reporting(E_ALL);
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $oneSetting, $core,
		$clsModule, $clsButtonNav, $dbconn, $clsISO, $clsConfiguration, $adult_type_id, $child_type_id, $infant_type_id, $clsISO, $package_id;
	$user_id = $core->_USER['user_id'];
	#
	$clsCategory_Country = new Category_Country();
	$assign_list["clsCategory_Country"] = $clsCategory_Country;
	$tp = Input::post('tp');
	$is_day_trip = Input::post('is_day_trip', 0);

	$category_country_id = $clsCategory_Country->getMaxId();
	$results = array('result' => 'error');
	if ($tp = 'S') {
		$clsISO->UpdateOrderNo('Category_Country');
		$field .= $clsCategory_Country->pkey . ",user_id,user_id_update,reg_date,upd_date,order_no";
		$value .= $category_country_id . ",'" . addslashes($core->_SESS->user_id) . "','" . addslashes($core->_SESS->user_id) . "','" . time() . "','" . time() . "',1";

		$clsCategory_Country->insertOne($field, $value);
		$results = array('result' => 'success', 'link' => 'tour/categorycountry/insert/' . $category_country_id . '/overview');
	}
	// Return
	echo @json_encode($results);
	die();
}

function default_ajActionNewWhyTravelStyleCountry()
{
	//	ini_set('display_errors', '1');
	//	ini_set('display_startup_errors', '1');
	//	error_reporting(E_ALL);
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $oneSetting, $core,
		$clsModule, $clsButtonNav, $dbconn, $clsISO, $clsConfiguration, $adult_type_id, $child_type_id, $infant_type_id, $clsISO, $package_id;
	$user_id = $core->_USER['user_id'];
	// $clsISO->dd('124');

	#
	$clsWhyTravelstyle = new WhyTravelstyle();
	$assign_list["clsWhyTravelstyle"] = $clsWhyTravelstyle;
	#
	$tp = Input::post('tp');
	// $clsISO->dd($tp);

	$why_trvs_id = $clsWhyTravelstyle->getMaxId();
	$results = array('result' => 'error');
	if ($tp = 'S') {
		$clsISO->UpdateOrderNo('WhyTravelstyle');
		$field .= $clsWhyTravelstyle->pkey . ",user_id,user_id_update,reg_date,upd_date,order_no";
		$value .= $why_trvs_id . ",'" . addslashes($core->_SESS->user_id) . "','" . addslashes($core->_SESS->user_id) . "','" . time() . "','" . time() . "',1";

		$clsWhyTravelstyle->insertOne($field, $value);
		$results = array('result' => 'success', 'link' => 'tour/whytravelstylecountry/insert/' . $why_trvs_id . '/overview');
	}
	// Return
	echo @json_encode($results);
	die();
}
function default_ajActionGetTravelStyleByCountry()
{
	//	ini_set('display_errors', '1');
	//	ini_set('display_startup_errors', '1');
	//	error_reporting(E_ALL);
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $oneSetting, $core,
		$clsModule, $clsButtonNav, $dbconn, $clsISO;
	#
	$clsCategory_Country	= 	new Category_Country();
	$assign_list["clsCategory_Country"]	= 	$clsCategory_Country;
	#
	$country_id	=	isset($_POST['country_id']) ? $_POST['country_id'] : '';
	if (!empty($country_id)) {
		$html	=	$clsCategory_Country->makeSelectboxOption(0, $country_id);
		echo $html;
		die;
	}
}
