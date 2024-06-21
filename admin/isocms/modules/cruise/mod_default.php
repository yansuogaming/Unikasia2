<?php
function getFrame($cruise_id = null)
{
	global $core, $dbconn, $_LANG_ID, $clsISO;
	global $mod, $clsModule, $clsButtonNav, $dbconn, $clsConfiguration, $clsISO, $package_id;
	if ($cruise_id) {
		$clsCruiseCustomField = new CruiseCustomField();
		$listCustomField = $clsCruiseCustomField->getAll("cruise_id='$pvalTable' and fieldtype='CUSTOM' order by order_no ASC", $clsCruiseCustomField->pkey . ',fieldname,fieldname_slug');
	}
	$frames = array(
		'overview' => array(
			'href_group'	=> 'overview',
			'name'	=> $core->get_Lang('Overview'),
			'icon'	=> 'home',
			'steps' => array(
				'basic' => array(
					'name' => $core->get_Lang('Basic')
				),
				'image' => array(
					'name' => $core->get_Lang('Image cover') . ", " . $core->get_Lang('File cruise')
				),
				'about' => array(
					'name' => $core->get_Lang('About')
				),
				/*'thingAbout' => array(
					'name' => $core->get_Lang('Things about')
				),*/
				/*'importantNotes' => array(
					'name' => $core->get_Lang('Important Notes')
				),*/
				'inclusions' => array(
					'name' => $core->get_Lang('Inclusions')
				),
				'exclusions' => array(
					'name' => $core->get_Lang('Exclusions')
				),
				'cruisePolicy' => array(
					'name' => $core->get_Lang('Cruise Policy')
				),
				'bookingPolicy' => array(
					'name' => $core->get_Lang('Booking Policy')
				),
				'childPolicy' => array(
					'name' => $core->get_Lang('Child Policy')
				),
				'destination' => array(
					'name' => $core->get_Lang('Destination')
				),
			)
		),
	);
	// if ($clsISO->getCheckActiveModulePackage($package_id, 'cruise', 'edit_cabin', 'default')) {
	// 	$frames['cabin'] = array(
	// 		'name'	=> $core->get_Lang('Cabin'),
	// 		'href_group'	=> 'cabin',
	// 		'icon'	=> 'itinerary',
	// 		'steps'	=> array(
	// 			'cabin' => array(
	// 				'name' => $core->get_Lang('Cabin')
	// 			),
	// 		)
	// 	);
	// }
	if ($clsISO->getCheckActiveModulePackage($package_id, 'cruise', 'itinerary', 'default')) {
		$frames['itinerary'] = array(
			'name'	=> $core->get_Lang('itinerary'),
			'href_group'	=> 'itinerary',
			'icon'	=> 'itinerary',
			'steps'	=> array(
				'itinerary' => array(
					'name' => $core->get_Lang('itinerary')
				),
			)
		);
	}
	$frames['configuration'] = array(
		'name'	=> $core->get_Lang('configuration'),
		'href_group'	=> 'configuration',
		'icon'	=> 'config',
		'steps'	=> array(
			'faservice'	=> array(
				'name' => $core->get_Lang('faservice')
			),
			'libraryimage' => array(
				'name' => $core->get_Lang('libraryimage')
			),
			'pre_post_cruise' => array(
				'name' => $core->get_Lang('Pre/Post Cruise')
			),
			// 'video' => array(
			// 	'name' =>  $core->get_Lang('Video')
			// ),
			// 'pricechild' => array(
			// 	'name' =>  $core->get_Lang('Price children')
			// ),
		)
	);

	// $frames['configprice'] = array(
	// 	'name'	=> $core->get_Lang('Config Price'),
	// 	'href_group'	=> 'configprice',
	// 	'icon'	=> 'itinerary',
	// );

	/*$frames['faservice'] = array(
		'name'	=> $core->get_Lang('faservice'),
		'href_group'	=> 'faservice',
		'icon'	=> '',
		'steps'	=> array(
			'faservice'	=> array(
					'name' => $core->get_Lang('faservice')
				),
		)
	);
    if ($clsISO->getCheckActiveModulePackage($package_id,'cruise','cruise_photo_gallery','customize')){
        $frames['libraryimage'] = array(
            'name'	=> $core->get_Lang('libraryimage'),
            'href_group'	=> 'libraryimage',
            'icon'	=> '',
            'steps'	=> array(
                'libraryimage' => array(
                    'name' => $core->get_Lang('libraryimage')
                ),
            )
        );
    }
    if ($clsISO->getCheckActiveModulePackage($package_id,'cruise','cruise_video','default')){
        $frames['video'] = array(
            'name'	=> $core->get_Lang('Video'),
            'href_group'	=> 'video',
            'icon'	=> '',
            'steps'	=> array(
                'video' => array(
                    'name' =>  $core->get_Lang('Video')
                ),
            )
        );
    }*/
	$frames['seo'] = array(
		'name'	=> $core->get_Lang('Seo tools'),
		'href_group'	=> 'seo',
		'icon'	=> 'seo',
		'steps'	=> array(
			'seo' => array(
				'name' =>  $core->get_Lang('Seo tools')
			)
		)
	);
	// if (isset($listCustomField[0]['cruise_customfield_id']) && $listCustomField[0]['cruise_customfield_id'] != '') {
	// 	foreach ($listCustomField as $key => $value) {
	// 		$frames[$value['fieldname_slug']] = array(
	// 			'name'	=> $value['fieldname'],
	// 			'href_group'	=> $value['fieldname_slug'],
	// 			'icon'	=> '',
	// 			'steps'	=> array(
	// 				"'" . $value['fieldname_slug'] . "'" => array(
	// 					'name' => $value['fieldname']
	// 				),
	// 			)
	// 		);
	// 	}
	// }
	return $frames;
}
function default_insert()
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

	$pvalTable = Input::get('cruise_id', 0);
	$assign_list["pvalTable"] = $pvalTable;
	$panel = Input::get('panel', '');
	$assign_list["panel"] = $panel;

	$currentstep = Input::get('step', '');
	$assign_list["currentstep"] = $currentstep;
	$arr_step = explode("-", $currentstep);
	if (count($arr_step) == 2) {
		$step_id = $arr_step[1];
		$assign_list["step_id"] = $step_id;
	}

	//	var_dump($panel,$currentstep,$step_id);die;


	$currentstepx = 0;


	$classTable = "Cruise";
	$clsClassTable = new $classTable;
	$oneItem = $clsClassTable->getOne($pvalTable);
	$assign_list["oneItem"] = $oneItem;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey;
	$clsCruiseItinerary = new CruiseItinerary();
	$clsCruiseCabin = new CruiseCabin();

	$assign_list["clsClassTable"] = $clsClassTable;
	$assign_list["pkeyTable"] = $pkeyTable;

	$frames = getFrame($pvalTable);

	$lstCruiseItinerary = $clsCruiseItinerary->getAll("1=1 and cruise_id='$pvalTable' order by order_no asc", $clsCruiseItinerary->pkey);
	$assign_list['listCruiseItinerary'] = $lstCruiseItinerary;
	$numberCabin = $clsCruiseCabin->countItem("1=1 and cruise_id='$pvalTable'", $clsCruiseCabin->pkey);
	$arr_CruiseItinerary = [];
	if (!empty($lstCruiseItinerary) && $numberCabin > 0) {
		foreach ($lstCruiseItinerary as $key => $value) {
			$arr_CruiseItinerary['itineraryday-' . $value['cruise_itinerary_id']] = ['name' => $clsCruiseItinerary->getDuration($value['cruise_itinerary_id']), 'id' => $value['cruise_itinerary_id']];
		}
		// $frames['configprice']['steps'] = $arr_CruiseItinerary;
	} else {
		// unset($frames['configprice']);
	}
	unset($lstCruiseItinerary);

	$ii = 0;
	$arrStep = array();
	foreach ($frames as $okey => $frame) {
		$steps = $frame['steps'];
		//		echo $okey."-----";
		foreach ($steps as $key => $step) {
			$status = 0;
			if ($okey == 'configprice' && !empty($arr_CruiseItinerary)) {
				// //				var_dump($frames['configprice']['steps']);die;
				// foreach ($arr_CruiseItinerary as $key => $step) {
				// 	$arrStep[$ii] = array(
				// 		'key' => $key,
				// 		'panel' => $okey,
				// 		'name' => $step['name'],
				// 		'status' => 0,
				// 		//				'description' => $step['description']
				// 	);
				// 	++$ii;
				// }
			} else {
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
	}
	//	echo "<pre>";
	//	var_dump($frames);die;
	/*if($profile_id==18696){
			die('ss');
		}*/
	$nextstep = $arrStep[$currentstepx + 1];
	$assign_list["frames"] = $frames;
	$assign_list["nextstep"] = $nextstep;


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
function default_getMainFormStep()
{
	//	ini_set('display_errors', '1');
	//	ini_set('display_startup_errors', '1');
	//	error_reporting(E_ALL);
	global $smarty, $assign_list, $_frontIsLoggedin_user_id, $core, $clsISO, $clsProperty, $clsUser, $_company_iom_id, $dbconn, $nextstep, $clsConfiguration, $mod, $package_id, $pvalTable;
	$clsCruise = new Cruise();
	$smarty->assign('clsClassTable', $clsCruise);
	$clsCruiseCat = new CruiseCat();
	$smarty->assign('clsCruiseCat', $clsCruiseCat);
	$clsReviewsCruise = new ReviewsCruise();
	$smarty->assign('clsReviewsCruise', $clsReviewsCruise);
	$clsCruiseProperty = new CruiseProperty();
	$smarty->assign('clsCruiseProperty', $clsCruiseProperty);
	$clsCruiseVideo = new CruiseVideo();
	$smarty->assign('clsCruiseVideo', $clsCruiseVideo);
	$clsCruiseCabin = new CruiseCabin();
	$smarty->assign('clsCruiseCabin', $clsCruiseCabin);
	$clsCruiseItinerary = new CruiseItinerary();
	$smarty->assign('clsCruiseItinerary', $clsCruiseItinerary);
	$clsCruiseCabin = new CruiseCabin();
	$smarty->assign('clsCruiseCabin', $clsCruiseCabin);
	$clsCruiseDestination = new CruiseDestination();
	$smarty->assign('clsCruiseDestination', $clsCruiseDestination);
	$clsCountry = new Country();
	$smarty->assign('clsCountry', $clsCountry);
	#
	$table_id = Input::post('table_id', 0);
	$currentstep = Input::post('currentstep', '');
	$step_id = Input::post('step_id', '');
	#
	$oneItem = $clsCruise->getOne($table_id);
	$smarty->assign('pvalTable', $table_id);
	$smarty->assign('oneItem', $oneItem);
	$smarty->assign('clsTable', 'Cruise');
	$smarty->assign('clsTableGal', 'CruiseImage');
	$smarty->assign('step_id', $step_id);
	#
	$file_name = end(explode("/", $oneItem['file_programme']));
	$assign_list['file_name'] = $file_name;
	#
	$frames = getFrame();
	#
	$lstCruiseItinerary = $clsCruiseItinerary->getAll("1=1 and cruise_id='$table_id' order by order_no asc", $clsCruiseItinerary->pkey);
	$assign_list['listCruiseItinerary'] = $lstCruiseItinerary;
	$numberCabin = $clsCruiseCabin->countItem("1=1 and cruise_id='$table_id'", $clsCruiseCabin->pkey);
	$arr_CruiseItinerary = [];
	if (!empty($lstCruiseItinerary) && $numberCabin > 0) {
		foreach ($lstCruiseItinerary as $key => $value) {
			$arr_CruiseItinerary['itineraryday-' . $value['cruise_itinerary_id']] = ['name' => $clsCruiseItinerary->getDuration($value['cruise_itinerary_id']), 'id' => $value['cruise_itinerary_id']];
		}
		// $frames['configprice']['steps'] = $arr_CruiseItinerary;
	} else {
		// unset($frames['configprice']);
	}
	unset($lstCruiseItinerary);
	#Step follow index
	$ii = 0;
	$arrStep = array();
	$getGroupSizeCabin = $clsCruiseCabin->getAll("is_trash=0 and is_online=1 AND cruise_id='" . $table_id . "'", $clsCruiseCabin->pkey . ',list_group_size');
	$total_input_price_extra_bed = 0;
	foreach ($getGroupSizeCabin as $key => $value) {
		$arrGroupSize = $clsISO->makeArrayBySlash($value['list_group_size']);
		$total_input_price = 0;
		#
		foreach ($arrGroupSize as $k => $v) {
			$check_bed_extra = $clsCruiseProperty->getOneField('is_extra_bed', $v);
			$number_adult = $clsCruiseProperty->getNumberAdult($v);
			$number_child = $clsCruiseProperty->getNumberChild($v);
			$total_person = $number_adult + $number_child;
			$total_input_price += $total_person;
			$total_input_price += count($arrGroupSize);
			$total_input_price_extra_bed += $check_bed_extra;
		}
		//print_r($total_input_price);die();
	}
	// print_r($total_input_price_extra_bed);die();
	foreach ($frames as $okey => $frame) {
		if ($okey == 'configprice' && !empty($arr_CruiseItinerary)) {
			// foreach ($arr_CruiseItinerary as $key => $step) {
			// 	$status = 0;
			// 	$clsCruiseSeasonPrice = new CruiseSeasonPrice();
			// 	//				$clsCruiseSeasonPrice->setDeBug(1);
			// 	$number_CruiseSeasonPrice_Extra_Bed = $clsCruiseSeasonPrice->countItem("cruise_id='" . $table_id . "' AND cruise_itinerary_id='" . $step['id'] . "'and price_extra_bed >0");
			// 	$number_CruiseSeasonPrice = $clsCruiseSeasonPrice->countItem("cruise_id='" . $table_id . "' AND cruise_itinerary_id='" . $step['id'] . "'");



			// 	//print_r($total_input_price_extra_bed.'xxxx'.$number_CruiseSeasonPrice_Extra_Bed);die();
			// 	//				die;
			// 	if ($total_input_price_extra_bed > 0 && $number_CruiseSeasonPrice_Extra_Bed != $total_input_price_extra_bed * 2) {
			// 		$status = 0;
			// 	} else if ($number_CruiseSeasonPrice == $total_input_price * 2) {
			// 		$status = 1;
			// 	}
			// 	$arrStep[$ii] = array(
			// 		'key' => $key,
			// 		'panel' => $okey,
			// 		'name' => $step['name'],
			// 		'status' => $status,
			// 		//				'description' => $step['description']
			// 	);
			// 	++$ii;
			// }
		} else {
			$steps = $frame['steps'];
			#
			foreach ($steps as $key => $step) {
				$status = 0;
				if ($key == 'basic' && $oneItem['title'] != '' && $oneItem['cruise_cat_id'] > 0) {
					$status = 1;
				}
				if ($key == 'image' && $oneItem['image'] != '' && $oneItem['file_programme'] != '') {
					$status = 1;
				}
				if ($key == 'about' && $oneItem['about'] != '') {
					$status = 1;
				}
				if ($key == 'thingAbout' && $oneItem['listThingAbout'] != '') {
					$status = 1;
				}
				if ($key == 'importantNotes' && $oneItem['important_notes'] != '') {
					$status = 1;
				}
				if ($key == 'inclusions' && $oneItem['inclusion'] != '') {
					$status = 1;
				}
				if ($key == 'cruisePolicy' && $oneItem['cruise_policy'] != '') {
					$status = 1;
				}
				if ($key == 'exclusions' && $oneItem['exclusion'] != '') {
					$status = 1;
				}
				if ($key == 'bookingPolicy' && $oneItem['booking_policy'] != '') {
					$status = 1;
				}
				if ($key == 'childPolicy' && $oneItem['child_policy'] != '') {
					$status = 1;
				}
				if ($key == 'cabin') {
					$clsCruiseCabin = new CruiseCabin();
					$number_cabin = $clsCruiseCabin->countItem("cruise_id='" . $table_id . "'");
					if ($number_cabin > 0) {
						$status = 1;
					}
				}
				if ($key == 'itinerary') {
					$clsCruiseItinerary = new CruiseItinerary();
					$number_itinerary = $clsCruiseItinerary->countItem("cruise_id='" . $table_id . "'");
					if ($number_itinerary > 0) {
						$status = 1;
					}
				}
				if ($key == 'faservice' && ($oneItem['listCruiseFacilities'] != '' || $oneItem['listCruiseServices'] != '' || $oneItem['listCruiseFaActivities'] != '')) {
					$status = 1;
				}
				if ($key == 'libraryimage') {
					$clsCruiseImage = new CruiseImage();
					$number_image = $clsCruiseImage->countItem("table_id='" . $table_id . "' and type='CruiseImage'");
					if ($number_image > 0) {
						$status = 1;
					}
				}
				if ($key == 'video') {
					$clsCruiseVideo = new CruiseVideo();
					$number_video = $clsCruiseVideo->countItem("table_id='" . $table_id . "'");
					if ($number_video > 0) {
						$status = 1;
					}
				}
				if ($key == 'pricechild') {
					$clsCruisePriceChild = new CruisePriceChild();
					$number_price_child = $clsCruisePriceChild->countItem("is_trash=0 and cruise_id='" . $table_id . "'");
					if ($number_price_child > 0) {
						$status = 1;
					}
				}
				if ($key == 'seo') {
					$clsMeta = new Meta();
					$link = $clsCruise->getLink($table_id);
					$oneMeta = $clsMeta->getAll("config_link='$link' limit 0,1", $clsMeta->pkey . ',config_value_title,config_value_intro,image');
					if (!empty($oneMeta) && $oneMeta[0]['config_value_title'] != '' && $oneMeta[0]['config_value_intro'] != '' && $oneMeta[0]['image'] != '') {
						$status = 1;
					}
				}
				$arrStep[$ii] = array(
					'key' => $key,
					'panel' => $okey,
					'name' => $step['name'],
					'status' => $status,
					//				'description' => $step['description']
				);
				++$ii;
			}
		}
	}
	$arr_type_tour	=	[
		'_PRE'	=>	'Pre cruise',
		'_POST'	=>	'Post cruise'
	];
	$assign_list["arr_type_tour"]	= 	$arr_type_tour;
	#
	if ($clsISO->getCheckActiveModulePackage($package_id, $mod, 'property', 'default', 'CruiseServices')) {
		$lstCruiseService = $clsCruiseProperty->getAll("is_trash=0 and type = 'CruiseServices' order by order_no asc");
		$assign_list["lstCruiseService"] = $lstCruiseService;
		unset($lstCruiseService);
	}
	#
	if ($clsISO->getCheckActiveModulePackage($package_id, $mod, 'property', 'default', 'CruiseBudget')) {
		$lstCruiseBudget = $clsCruiseProperty->getAll("is_trash=0 and type = 'CruiseBudget' order by order_no asc");
		$assign_list["lstCruiseBudget"] = $lstCruiseBudget;
		unset($lstCruiseBudget);
	}
	#
	if ($clsISO->getCheckActiveModulePackage($package_id, $mod, 'property', 'default', 'TravelAs')) {
		$lstCruiseTravel = $clsCruiseProperty->getAll("is_trash=0 and type = 'TravelAs' order by order_no asc");
		$assign_list["lstCruiseTravel"] = $lstCruiseTravel;
		unset($lstCruiseTravel);
	}
	#
	if ($clsISO->getCheckActiveModulePackage($package_id, $mod, 'property', 'default', 'RestFacilities')) {
		$lstRestFa = $clsCruiseProperty->getAll("is_trash=0 and type = 'RestFacilities' order by order_no asc");
		$assign_list["lstRestFa"] = $lstRestFa;
		unset($lstRestFa);
	}
	#
	if ($clsISO->getCheckActiveModulePackage($package_id, $mod, 'property', 'default', 'CruiseFacilities')) {
		$lstCruiseFa = $clsCruiseProperty->getAll("is_trash=0 and type = 'CruiseFacilities' order by order_no asc");
		$assign_list["lstCruiseFa"] = $lstCruiseFa;
		unset($lstCruiseFa);
	}
	#
	if ($clsISO->getCheckActiveModulePackage($package_id, $mod, 'property', 'default', 'ThingAbout')) {
		$lstThingAbout = $clsCruiseProperty->getAll("is_trash=0 and type = 'ThingAbout' order by order_no asc");
		$assign_list["lstThingAbout"] = $lstThingAbout;
		unset($lstCruiseFa);
	}
	#
	if ($clsISO->getCheckActiveModulePackage($package_id, $mod, 'property', 'default', 'CruiseFaActivities')) {
		$lstCruiseFaActivities = $clsCruiseProperty->getAll("is_trash=0 and type = 'CruiseFaActivities' order by order_no asc");
		$assign_list["lstCruiseFaActivities"] = $lstCruiseFaActivities;
		unset($lstCruiseFaActivities);
	}
	#
	$listCruiseVideo = $clsCruiseVideo->getAll("1=1 and table_id='$table_id' order by order_no asc");
	$assign_list['listCruiseVideo'] = $listCruiseVideo;
	unset($listCruiseVideo);
	#
	if ($clsISO->getCheckActiveModulePackage($package_id, $mod, 'edit_cabin', 'default')) {
		$listCabin = $clsCruiseCabin->getAll("1=1 and cruise_id='$table_id' order by order_no asc", $clsCruiseCabin->pkey . ",is_trash,cabin_size,bed_size,extra_bed,is_online");
		$assign_list['listCabin'] = $listCabin;
		unset($listCabin);
	}
	#
	$reviewCruise = $clsReviewsCruise->getAll("cruise_id = '$table_id' limit 0,1");
	$assign_list['reviewCruise'] = $reviewCruise[0];
	$smarty->assign('arrStep', $arrStep);
	$smarty->assign('list_check_target', json_encode($arrStep));
	if ($currentstep == 'seo') {
		$clsMeta = new Meta();
		$assign_list["clsMeta"] = $clsMeta;
		$linkMeta = $clsCruise->getLink($table_id);
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
	#
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

	$arr_prevstep = explode("-", $prevstep);
	$arr_nextstep = explode("-", $nextstep);
	if (count($arr_prevstep) == 2) {
		$smarty->assign('prevstep_id', $arr_prevstep[1]);
	}
	if (count($arr_nextstep) == 2) {
		$smarty->assign('nextstep_id', $arr_nextstep[1]);
	}

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
	$clsForm->addInputTextArea("full", "cruise_booking_policy", "", "cruise_booking_policy", 255, 25, 15, 1, "style='width:100%'");
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
	//			ini_set('display_errors', '1');
	//ini_set('display_startup_errors', '1');
	//error_reporting(E_ALL);
	global $_frontIsLoggedin_user_id, $core, $clsISO, $clsProperty, $clsUser, $_company_iom_id, $dbconn;
	#
	$clsCruiseCat = new CruiseCat();
	$msg = '_error';
	$clsClassTable = new Cruise();
	$clsReviewsCruise = new ReviewsCruise();
	$clsCruiseDestination = new CruiseDestination();
	#
	$table_id = Input::post('table_id', 0);
	$currentstep = Input::post('currentstep');
	#
	if ($currentstep == 'basic') {
		$title = Input::post('title');
		$title = html_entity_decode($title);
		$slug = $clsISO->replaceSpace2($title);
		$cond = "slug='$slug' AND cruise_id <> '" . $table_id . "'";

		$listItem = $clsClassTable->getAll($cond, $clsClassTable->pkey);
		if (!empty($listItem)) {
			$msg = '_EXIST';
			// Output
			echo $msg;
			die();
		}

		$cruise_code = Input::post('cruise_code');
		$arr_update = [
			'title' => $title,
			'slug' => $clsISO->replaceSpace2($title),
			'cruise_code' => $cruise_code,
			'upd_date' => time()
		];
		$cruise_cat_id = Input::post('cruise_cat_id');
		if (isset($cruise_cat_id) && count($cruise_cat_id) > 0) {
			$list_cat_id = $clsCruiseCat->getListParent($cruise_cat_id);
			$arr_update['cruise_cat_id'] = $cruise_cat_id;
			$arr_update['list_cat_id'] = $list_cat_id;
		}
		$star_number = input::post('star_number');
		$arr_update['star_number'] = $star_number;
		$total_cabin = input::post('total_cabin');
		$arr_update['total_cabin'] = $total_cabin;
		$total_cabin = input::post('listTravelAs');
		$arr_update['listTravelAs'] = $clsISO->makeSlashListFromArrayComma($total_cabin);
		$cruise_type = Input::post('cruise_type', 1);
		$arr_update['cruise_type'] = $cruise_type;

		$cruise_quality = input::post('cruise_quality');
		$food_drink = input::post('food_drink');
		$cabin_quality = input::post('cabin_quality');
		$staff_quality = input::post('staff_quality');
		$entertainment = input::post('entertainment');
		$worth_the_money = input::post('worth_the_money');
		$excellent = input::post('excellent');
		$very_good = input::post('very_good');
		$good = input::post('good');
		$average = input::post('average');
		$poor = input::post('poor');
		$terrible = input::post('terrible');
		$is_show_reviews = input::post('is_show_reviews');
		$is_show_reviews = $is_show_reviews ? 1 : 0;
		if ($clsReviewsCruise->checkExits($table_id)) {
			$reviews_cruise_id = $clsReviewsCruise->getIdByCruise($table_id);
			$arr_reviews = [
				'cruise_quality'	=>	$clsISO->processSmartNumber($cruise_quality),
				'food_drink'		=>	$clsISO->processSmartNumber($food_drink),
				'cabin_quality'		=>	$clsISO->processSmartNumber($cabin_quality),
				'staff_quality'		=>	$clsISO->processSmartNumber($staff_quality),
				'entertainment'		=>	$clsISO->processSmartNumber($entertainment),
				'worth_the_money'	=>	$clsISO->processSmartNumber($worth_the_money),
				'excellent'			=>	$clsISO->processSmartNumber($excellent),
				'very_good'			=>	$clsISO->processSmartNumber($very_good),
				'good'				=>	$clsISO->processSmartNumber($good),
				'average'			=>	$clsISO->processSmartNumber($average),
				'poor'				=>	$clsISO->processSmartNumber($poor),
				'terrible'			=>	$clsISO->processSmartNumber($terrible),
				'is_show_reviews'	=>	$is_show_reviews,
			];
			$clsReviewsCruise->updateOne($reviews_cruise_id, $arr_reviews);
		} else {
			$fx = "$clsReviewsCruise->pkey,cruise_id,cruise_quality,food_drink,cabin_quality,staff_quality,entertainment,excellent,very_good,good,average,poor,terrible,is_show_reviews,worth_the_money";
			$vx = "'" . $clsReviewsCruise->getMaxID() . "','$table_id','" . $clsISO->processSmartNumber($cruise_quality) . "','" . $clsISO->processSmartNumber($food_drink) . "','" . $clsISO->processSmartNumber($cabin_quality) . "','" . $clsISO->processSmartNumber($staff_quality) . "','" . $clsISO->processSmartNumber($entertainment) . "','" . $clsISO->processSmartNumber($excellent) . "','" . $clsISO->processSmartNumber($very_good) . "','" . $clsISO->processSmartNumber($good) . "','" . $clsISO->processSmartNumber($average) . "','" . $clsISO->processSmartNumber($poor) . "','" . $clsISO->processSmartNumber($terrible) . "','" . $is_show_reviews . "','" . $worth_the_money . "'";
			$clsReviewsCruise->insertOne($fx, $vx);
		}
		#
		foreach ($_POST as $key => $val) {
			$tmp = explode('-', $key);
			if ($tmp[0] == 'iso') {
				$arr_update[$tmp[1]] = addslashes($val);
			}
		}
		$clsClassTable->updateOne($table_id, $arr_update);
	} else if ($currentstep == 'faservice') {
		$listCruiseFacilities = Input::post('listCruiseFacilities');
		$listCruiseServices = Input::post('listCruiseServices');
		$listCruiseFaActivities = Input::post('listCruiseFaActivities');
		$arrUpdate = [
			'listCruiseFacilities' 		=> $clsISO->makeSlashListFromArrayComma($listCruiseFacilities),
			'listCruiseServices' 		=> $clsISO->makeSlashListFromArrayComma($listCruiseServices),
			'listCruiseFaActivities' 	=> $clsISO->makeSlashListFromArrayComma($listCruiseFaActivities),
			'upd_date'					=> time()
		];

		$clsClassTable->updateOne($table_id, $arrUpdate);
	} else if ($currentstep == 'checkin') {
		$hour_in = Input::post('hour_in', 0);
		$minute_in = Input::post('minute_in', 0);
		$hour_out = Input::post('hour_out', 0);
		$minute_out = Input::post('minute_out', 0);

		$arr_time_check_in_out = array();
		$arr_time_check_in_out['hour_in'] = $hour_in > 24 ? 24 : $hour_in;
		$arr_time_check_in_out['minute_in'] = $minute_in > 60 ? 60 : $minute_in;
		$arr_time_check_in_out['hour_out'] = $hour_out > 24 ? 24 : $hour_out;
		$arr_time_check_in_out['minute_out'] = $minute_out > 60 ? 60 : $minute_in;
		$clsClassTable->updateOne($table_id, array(
			'check_in_out_time' => json_encode($arr_time_check_in_out),
			'upd_date' => time()
		));
	} else if ($currentstep == 'image') {
		$image = Input::post('image', '');
		$file_programme = Input::post('file_programme', '');
		$clsClassTable->updateOne($table_id, array(
			'image' => $image,
			'file_programme' => $file_programme,
		));
	} else if ($currentstep == 'cruise_facilities') {
		$list_CruiseFacilities = Input::post('list_CruiseFacilities', '');
		$list_CruiseFacilities = $clsISO->makeSlashListFromArray($list_CruiseFacilities);
		$clsClassTable->updateOne($table_id, array(
			'list_CruiseFacilities' => $list_CruiseFacilities
		));
	} else if (in_array($currentstep, array(
		'overview',
		'checkin',
		'booking_policy',
		'child_policy',
		'cancellation_policy',
		'other_policy',
	))) {
		$valueField = Input::post($currentstep);

		$clsClassTable->updateOne($table_id, array(
			$currentstep => $valueField
		));
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
	} else if ($currentstep == 'thingAbout') {
		$listThingAbout = Input::post('listThingAbout', '');
		$listThingAbout = $clsISO->makeSlashListFromArray($listThingAbout);
		$clsClassTable->updateOne($table_id, array(
			'listThingAbout' => $listThingAbout
		));
	} else {
		$val_post = input::post();
		$arr_update = [];
		foreach ($val_post as $key => $val) {
			$tmp = explode('-', $key);
			if ($tmp[0] == 'iso') {
				if ($tmp[1] == 'about' || $tmp[1] == 'inclusion' || $tmp[1] == 'exclusion' || $tmp[1] == 'cruise_policy' || $tmp[1] == 'booking_policy' || $tmp[1] == 'child_policy') {
					$arr_update[$tmp[1]] = $val;
				} else {
					$arr_update[$tmp[1]] = addslashes($val);
				}
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
function default_check_table_code()
{
	global $smarty, $core, $_frontIsLoggedin_user_id, $profile_id, $dbconn, $clsISO;
	global $profile_id, $_frontIsLoggedin_user_id;
	$clsClassTable = new Cruise();

	$table_id = Input::post('table_id', 0);
	$table_code = Input::post('table_code');
	$cond = "is_trash=0 and cruise_id<>'{$table_id}' and cruise_code='{$table_code}'";
	$totalItem = $clsClassTable->countItem($cond);
	echo ($totalItem == 1 ? '_invalid' : '_success');
	die();
}

function default_ajaxLoadCruiseRoom()
{
	global $core, $mod, $act, $P;
	$clsCruise = new Cruise();
	$clsCruiseRoom = new CruiseRoom();
	#
	$cruise_id = $_POST['cruise_id'];
	$html = '';
	$lstRoom = $clsCruiseRoom->getAll("is_trash=0 and cruise_id='$cruise_id' order by order_no asc");
	if (!empty($lstRoom)) {
		$i = 0;
		foreach ($lstRoom as $item) {
			if ($clsCruiseRoom->getNumberChild($item[$clsCruiseRoom->pkey]) == 0) {
				$number_people = $clsCruiseRoom->getNumberAdult($item[$clsCruiseRoom->pkey]) . ' ' . $core->get_Lang('NL');
			} else {
				$number_people = $clsCruiseRoom->getNumberAdult($item[$clsCruiseRoom->pkey]) . ' ' . $core->get_Lang('NL') . ', ' . $clsCruiseRoom->getNumberChild($item[$clsCruiseRoom->pkey]) . ' ' . $core->get_Lang('TE');
			}

			$html .= '<tr style="cursor:move" id="order_' . $item[$clsCruiseRoom->pkey] . '"  class="' . ($i % 2 == 0 ? 'row1' : 'row2') . '">';
			$html .= '<td class="text_left">' . $clsCruiseRoom->getTitleRoomType($item['room_stype_id']) . '</td>';
			$html .= '<td class="text_left">' . $clsCruiseRoom->getTitle($item[$clsCruiseRoom->pkey]) . '</td>';
			$html .= '<td class="text_center">' . $clsCruiseRoom->getNumberRoom($item[$clsCruiseRoom->pkey]) . '</td>';
			$html .= '<td class="text_center">' . $number_people . '</td>';
			$html .= '<td class="text_right">' . $clsCruiseRoom->getPrice($item[$clsCruiseRoom->pkey]) . '</td>';
			$html .= '<td></td>';
			$html .= '
			<td align="center" style="vertical-align: middle; text-align:center; width:50px; white-space: nowrap;">
				<div class="btn-group-ico d-flex">
					<a class="clickEditCruiseRoom item_left" title="' . $core->get_Lang('edit') . '" href="javascript:void(0);"  data="' . $item[$clsCruiseRoom->pkey] . '" cruise_id="' . $cruise_id . '"><i class="ico ico-edit"></i></a>
					<a class="clickDeleteCruiseRoom item_right" title="' . $core->get_Lang('delete') . '" href="javascript:void(0);" data="' . $item[$clsCruiseRoom->pkey] . '" cruise_id="' . $cruise_id . '"><i class="ico ico-remove"></i></a>
				</div>
            </td>';
			$html .= '</tr>';
			++$i;
		}
		$html .= '
		<script type="text/javascript">
			$("#cruiseRoomTable").sortable({
				opacity: 0.8,
				cursor: \'move\',
				start: function(){
					vietiso_loading(1);
				},
				stop: function(){
					vietiso_loading(0);
				},
				update: function(){
					var page = "' . $page . '";
					var order = $(this).sortable("serialize")+\'&update=update\';
					$.post(path_ajax_script+"/index.php?mod=cruise&act=ajUpdPosSortCruiseRoom", order, function(html){
						loadCruiseRoom();
						vietiso_loading(0);
					});
				}
			});
		</script>';
	}
	echo $html;
	die();
}
function default_ajaxAddCruiseRoom()
{
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $current_page, $core, $clsModule, $clsButtonNav, $dbconn, $clsISO, $clsConfiguration;
	#
	$clsPagination = new Pagination();
	$clsCountry = new Country();
	$clsCruise = new Cruise();
	$assign_list['clsCruise'] = $clsCruise;
	$clsCruiseRoom = new CruiseRoom();
	$assign_list['clsCruiseRoom'] = $clsCruiseRoom;

	$table_id = Input::post('table_id', 0);
	$assign_list['table_id'] = $table_id;
	$pvalTable = Input::post('cruise_room_id', 0);
	$assign_list['pvalTable'] = $pvalTable;

	if (!empty($pvalTable)) {
		$oneItem = $clsCruiseRoom->getOne($pvalTable);
		$assign_list['oneItem'] = $oneItem;
		$number_adult = $oneItem['number_adult'];
		$assign_list['number_adult'] = $number_adult;
		$number_child = $oneItem['number_children'];
		$assign_list['number_child'] = $number_child;
		$bed_option = $oneItem['bed_option'];
		$bed_option = json_decode($bed_option, true);
		$assign_list['bed_option'] = $bed_option;
	}

	$clsProperty = new Property();
	$assign_list['clsProperty'] = $clsProperty;
	$listTypeBed = $clsProperty->getAll("is_trash=0 and type='TypeBed' order by order_no ASC", $clsProperty->pkey);
	$assign_list['listTypeBed'] = $listTypeBed;

	$fill_bed_name_select_box = '';
	foreach ($listTypeBed as $item) {
		$fill_bed_name_select_box .= '<option value="' . $item['property_id'] . '">' . $clsProperty->getTitle($item['property_id']) . '</option>';
	}
	$assign_list['fill_bed_name_select_box'] = $fill_bed_name_select_box;


	$fill_bed_number_select_box = '';
	for ($i = 0; $i < 5; $i++) {
		$fill_bed_number_select_box .= '<option value="' . $i . '">' . $i . '</option>';
	}
	$assign_list['fill_bed_number_select_box'] = $fill_bed_number_select_box;


	$tp = Input::post('tp', '');
	$assign_list['tp'] = $tp;
	$html = $core->build('modal.addcruiseroom.tpl');
	echo $html;
	die();
}

function default_ajSaveCruiseRoom()
{
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav, $oneSetting, $clsISO;
	$clsCruise = new Cruise();
	$clsCruiseRoom = new CruiseRoom();
	$user_id = $core->_USER['user_id'];
	$cruise_room_id = Input::post('cruise_room_id', 0);
	$cruise_id = Input::post('cruise_id', 0);
	$room_stype_id = Input::post('room_stype_id', 0);
	$titlePost = Input::post('title', '');
	$slugPost = $core->replaceSpace($titlePost);
	$number_val = Input::post('number_val', 0);
	$footage = Input::post('footage', 0);
	$number_adult = Input::post('number_adult', 0);
	$number_child = Input::post('number_child', 0);
	$price = Input::post('price', 0);
	$price = $clsISO->processSmartNumber2($price);
	$price_weekend = Input::post('price_weekend', 0);
	$price_weekend = $clsISO->processSmartNumber2($price_weekend);
	$price_peak_time = Input::post('price_peak_time', 0);
	$price_peak_time = $clsISO->processSmartNumber2($price_peak_time);

	if (_isoman_use) {
		$image = $_POST['isoman_url_image'];
	} else {
		$image = $_POST['image_src'];
	}


	$bed_option = array();

	foreach ($_POST['item_bed'] as $key => $val) {
		$bed_option[$key]['id'] = $val;
		$bed_option[$key]['number'] = $_POST['item_bed_number'][$key];
	}
	$bed_option = json_encode($bed_option);

	$tp = Input::post('tp', 'SAVE');


	if (empty($cruise_room_id)) {
		$fx = "$clsCruiseRoom->pkey,cruise_id,user_id,room_stype_id,title,slug,number_val,footage,number_adult,number_children,price,price_weekend,price_peak_time,bed_option,order_no,reg_date,upd_date,image";
		$vx = "'" . $clsCruiseRoom->getMaxId() . "','" . $cruise_id . "','" . $user_id . "','" . $room_stype_id . "','" . $titlePost . "','$slugPost','$number_val','$footage','$number_adult','$number_child','$price','$price_weekend','$price_peak_time','$bed_option','1','" . time() . "','" . time() . "','" . $image . "'";
		$listTable = $clsCruiseRoom->getAll("1=1", $clsCruiseRoom->pkey . ",order_no");
		for ($i = 0; $i <= count($listTable); $i++) {
			$order_no = $listTable[$i]['order_no'] + 1;
			$clsCruiseRoom->updateOne($listTable[$i][$clsCruiseRoom->pkey], "order_no='" . $order_no . "'");
		}
		if ($clsCruiseRoom->insertOne($fx, $vx)) {
			echo ('INSERT_SUCCESS');
			die();
		} else {
			echo ('INSERT_ERROR');
			die();
		}
	} else {
		$value = "cruise_id='" . $cruise_id . "'";
		$value .= ",user_id_update='" . $user_id . "'";
		$value .= ",room_stype_id='" . $room_stype_id . "'";
		$value .= ",title='" . $titlePost . "'";
		$value .= ",slug='" . $slugPost . "'";
		$value .= ",number_val='" . $number_val . "'";
		$value .= ",footage='" . $footage . "'";
		$value .= ",number_adult='" . $number_adult . "'";
		$value .= ",number_children='" . $number_child . "'";
		$value .= ",price='" . $price . "'";
		$value .= ",price_weekend='" . $price_weekend . "'";
		$value .= ",price_peak_time='" . $price_peak_time . "'";
		$value .= ",bed_option='" . $bed_option . "'";
		$value .= ",upd_date='" . time() . "'";
		$value .= ",image='" . $image . "'";
		if ($clsCruiseRoom->updateOne($cruise_room_id, $value)) {
			$clsCruise->updateMinPrice($cruise_id);
			echo ('UPDATE_SUCCESS');
			die();
		} else {
			echo ('UPDATE_ERROR');
			die();
		}
	}


	echo (1);
	die();
}

function default_ajUpdPosSortCruiseItineraryDay()
{
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
	global $clsConfiguration;
	#
	$clsCruiseItineraryDay = new CruiseItineraryDay();
	$order = $_POST['order'];
	$currentPage 	= $_POST['currentPage'];
	$recordPerPage 	= $_POST['recordPerPage'];
	//var_dump($currentPage.'xxxxxx'.$recordPerPage);die();
	foreach ($order as $key => $val) {
		$key = (($currentPage - 1) * $recordPerPage + $key + 1);
		$clsCruiseItineraryDay->updateOne($val, "day='" . $key . "'");
	}
}
function default_ajUpdPosSortCruiseRoom()
{
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
	global $clsConfiguration;
	#
	$clsCruiseRoom = new CruiseRoom();
	$order = $_POST['order'];
	$currentPage 	= $_POST['currentPage'];
	$recordPerPage 	= $_POST['recordPerPage'];
	//var_dump($currentPage.'xxxxxx'.$recordPerPage);die();
	foreach ($order as $key => $val) {
		$key = (($currentPage - 1) * $recordPerPage + $key + 1);
		$clsCruiseRoom->updateOne($val, "order_no='" . $key . "'");
	}
}
function default_loadCountry()
{
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
	echo $Html;
	die();
}
function default_loadArea()
{
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav, $oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$clsArea = new Area();
	$country_id = isset($_POST['country_id']) ? $_POST['country_id'] : 0;
	$area_id = isset($_POST['area_id']) ? $_POST['area_id'] : 0;

	$Html = '<option value="0">|---' . $core->get_Lang('select') . '--</option>';
	$lstArea = $clsArea->getAll("is_trash=0 and country_id='$country_id' order by order_no asc");
	if (is_array($lstArea) && count($lstArea) > 0) {
		for ($i = 0; $i < count($lstArea); $i++) {
			$Html .= '<option title="' . $clsArea->getTitle($lstArea[$i][$clsArea->pkey]) . '" value="' . $lstArea[$i][$clsArea->pkey] . '"' . ($area_id == $lstArea[$i][$clsArea->pkey] ? 'selected="selected"' : '') . '>|--- ' . $clsArea->getTitle($lstArea[$i][$clsArea->pkey]) . '</option>';
		}
	}
	echo $Html;
	die();
}
function default_loadRegion()
{
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav, $oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$clsRegion = new Region();
	$country_id = isset($_POST['country_id']) ? $_POST['country_id'] : 0;
	$region_id = isset($_POST['region_id']) ? $_POST['region_id'] : 0;
	#
	$Html = $clsRegion->makeSelectboxOption($country_id, $region_id);
	if ($Html == '') {
		echo 'EMPTY';
	} else {
		echo $Html;
	}
	die();
}
function default_loadCity()
{
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav, $oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$clsCity = new City();
	$country_id = isset($_POST['country_id']) ? $_POST['country_id'] : 0;
	$region_id = isset($_POST['region_id']) ? $_POST['region_id'] : 0;
	$city_id = isset($_POST['city_id']) ? $_POST['city_id'] : 0;

	$cond = "is_trash=0 and is_online=1";
	if (intval($country_id)) {
		$cond .= " and country_id='$country_id'";
	}
	if (intval($region_id) > 0) {
		$cond .= " and region_id='$region_id'";
	}
	$cond .= " order by title ASC";
	#
	$Html = '<option value="0"> --' . $core->get_Lang('select') . '-- </option>';
	$listCity = $clsCity->getAll($cond, $clsCity->pkey);
	if (is_array($listCity) && count($listCity) > 0) {
		for ($i = 0; $i < count($listCity); $i++) {
			$Html .= '<option title="' . $clsCity->getTitle($listCity[$i][$clsCity->pkey]) . '" value="' . $listCity[$i][$clsCity->pkey] . '" ' . ($city_id == $listCity[$i][$clsCity->pkey] ? 'selected="selected"' : '') . '>|--- ' . $clsCity->getTitle($listCity[$i][$clsCity->pkey]) . '</option>';
		}
	}
	unset($listCity);
	echo $Html;
	die();
}

function default_ajLoadFormCabin()
{
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $clsISO;
	global $core, $clsModule, $clsButtonNav;
	$user_id = $core->_USER['user_id'];
	#

	$clsCruise = new Cruise();
	$assign_list['clsCruise'] = $clsCruise;
	$clsCruiseCabin = new CruiseCabin();
	$assign_list['clsCruiseCabin'] = $clsCruiseCabin;
	$clsCruiseProperty = new CruiseProperty();
	$assign_list['clsCruiseProperty'] = $clsCruiseProperty;
	$clsCruiseSeasonPrice = new CruiseSeasonPrice();
	$assign_list['clsCruiseSeasonPrice'] = $clsCruiseSeasonPrice;
	$tp = Input::post("tp", "");
	$cruise_id = Input::post("cruise_id", 0);
	$cabin_id = Input::post("cabin_id", 0);
	$assign_list['cabin_id'] = $cabin_id;

	if ($tp == "F") {
		if ($cruise_id > 0) {
			$oneCruise = $clsCruise->getOne($cruise_id);
			$assign_list['oneCruise'] = $oneCruise;
			if ($cabin_id > 0) {
				$oneCabin = $clsCruiseCabin->getOne($cabin_id);
				$assign_list['oneCabin'] = $oneCabin;
			}

			$listCabinFacilities = $clsCruiseProperty->getAll("is_trash=0 and type='CabinFacilities' order by order_no ASC", $clsCruiseProperty->pkey);
			$assign_list["listCabinFacilities"] = $listCabinFacilities;
		}
		$html = $core->build('ajLoadFormCabin.tpl');
		echo $html;
		die;
	} else if ($tp == "S") {
		$cruise_id = Input::post('cruise_id', 0);
		$cabin_id = Input::post('cabin_id', 0);
		$is_show_image = Input::post('is_show_image', 0);
		$title = Input::post('title', '');
		$slug = $core->replaceSpace($title);
		$list_group_size = Input::post('list_group_size', array());
		$str_group_size = (!empty($list_group_size)) ? implode(",", $list_group_size) : "";

		$lastAdultSize = end($list_group_size);
		$max_adult = $clsCruiseProperty->getOneField('number_adult', $lastAdultSize) ? $clsCruiseProperty->getOneField('number_adult', $lastAdultSize) : 0;

		$list_group_size = $clsISO->makeSlashListFromArray($list_group_size);
		$cabin_size = (int)Input::post('cabin_size', 0);
		$number_cabin = (int)Input::post('number_cabin', 0);
		$floor = (int)Input::post('floor', 0);
		$bed_size = Input::post('bed_size', '');
		$extra_bed = (int)Input::post('extra_bed', 0);
		$listCabinFacilities = Input::post('listCabinFacilities', array());
		$listCabinFacilities = $clsISO->makeSlashListFromArray($listCabinFacilities);
		$intro = Input::post('intro', '');
		$easy_cancel = Input::post('easy_cancel', '');
		$image_src = Input::post('image_src', '');
		$isoman_url_image = Input::post('isoman_url_image', '');
		//		echo "<pre>";
		//		var_dump($_POST);die;
		if ($cruise_id > 0) {
			$oneCruise = $clsCruise->getOne($cruise_id, $clsCruise->pkey);
			if (!empty($oneCruise)) {
				if ($cabin_id == 0) {
					$listTable = $clsCruiseCabin->getAll("1=1 and cruise_id='$cruise_id'", $clsCruiseCabin->pkey . ",order_no");
					for ($i = 0; $i <= count($listTable); $i++) {
						$order_no = $listTable[$i]['order_no'] + 1;
						$clsCruiseCabin->updateOne($listTable[$i][$clsCruiseCabin->pkey], "order_no='" . $order_no . "'");
					}
					$max_id = $clsCruiseCabin->getMaxId();
					$field    = $clsCruiseCabin->pkey . ",title,slug,cruise_id,list_group_size,cabin_size,number_cabin,floor,bed_size,extra_bed,list_cabin_facilities,intro,easy_cancel,user_id,user_id_update,reg_date,upd_date,order_no,max_adult,is_show_image";
					$value    = "'" . $max_id . "','" . addslashes($title) . "','" . $slug . "','" . addslashes($cruise_id) . "','" . addslashes($list_group_size) . "','" . addslashes($cabin_size) . "','" . addslashes($number_cabin) . "','" . addslashes($floor) . "','" . addslashes($bed_size) . "','" . addslashes($extra_bed) . "','" . addslashes($listCabinFacilities) . "','" . addslashes($intro) . "','" . addslashes($easy_cancel) . "','" . addslashes($core->_SESS->user_id) . "','" . addslashes($core->_SESS->user_id) . "','" . time() . "','" . time() . "','1','" . $max_adult . "','" . addslashes($is_show_image) . "'";

					$image     = $image_src;
					if (_isoman_use) {
						$image     = $isoman_url_image;
					}
					if ($image != '' && $image != '0') {
						$field .= ',image';
						$value .= ",'" . addslashes($image) . "'";
					}
					if ($clsCruiseCabin->insertOne($field, $value)) {
						$data = ['result' => true, 'message' => $core->get_Lang('insertSuccess')];
					} else {
						$data = ['result' => false, 'message' => $core->get_Lang('insertFailed')];
					}
				} else {
					$oneCabin = $clsCruiseCabin->getOne($cabin_id, $clsCruiseCabin->pkey);
					if (!empty($oneCabin)) {
						/*xóa bản ghi giá khi thay đổi nhóm người*/
						$condDel_price = "";
						if ($str_group_size != '') {
							$condDel_price = " AND group_size_id NOT IN (" . $str_group_size . ")";
						}
						$clsCruiseSeasonPrice->deleteByCond("cruise_id='" . $cruise_id . "' AND cruise_cabin_id='" . $cabin_id . "' " . $condDel_price);
						/*==========*/

						$value = "title='" . addslashes($title) . "',slug='" . $slug . "',list_group_size='" . addslashes($list_group_size) . "',cabin_size='" . addslashes($cabin_size) . "',number_cabin='" . addslashes($number_cabin) . "',floor='" . addslashes($floor) . "',bed_size='" . addslashes($bed_size) . "',extra_bed='" . addslashes($extra_bed) . "',list_cabin_facilities='" . addslashes($listCabinFacilities) . "',intro='" . addslashes($intro) . "',easy_cancel='" . addslashes($easy_cancel) . "',user_id_update='" . addslashes($core->_SESS->user_id) . "',upd_date='" . time() . "',max_adult='" . $max_adult . "',is_show_image='" . addslashes($is_show_image) . "'";

						if (_isoman_use) {
							$value .= ",image='" . addslashes($isoman_url_image) . "'";
						} else {
							$image = Input("image", '');
							if ($image != '' && $image != '0') {
								$value .= ",image='" . addslashes($image) . "'";
							}
						}
						if ($clsCruiseCabin->updateOne($cabin_id, $value)) {
							$data = ['result' => true, 'message' => $core->get_Lang('updateSuccess')];
						} else {
							$data = ['result' => false, 'message' => $core->get_Lang('UpdateFailed')];
						}
					} else {
						$data = ['result' => false, 'message' => $core->get_Lang('CabinNotExist')];
					}
				}
			} else {
				$data = ['result' => false, 'message' => $core->get_Lang('CruiseNotExist')];
			}
		} else {
			$data = ['result' => false, 'message' => $core->get_Lang('CruiseNotExist')];
		}
		echo json_encode($data);
		die;
	}
}
function default_ajLoadFormItinerary()
{
	// ini_set('display_errors', '1');
	// ini_set('display_startup_errors', '1');
	// error_reporting(E_ALL);
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $clsISO;
	global $core, $clsModule, $clsButtonNav;
	#
	$user_id	= 	$core->_USER['user_id'];
	#
	$clsCruise 	= 	new Cruise();
	$assign_list['clsCruise']	= 	$clsCruise;
	$clsCruiseItinerary	= 	new CruiseItinerary();
	$assign_list['clsCruiseItinerary']	= 	$clsCruiseItinerary;
	$clsCruiseProperty 	= 	new CruiseProperty();
	$assign_list['clsCruiseProperty'] 	= 	$clsCruiseProperty;
	$clsCruiseService 	= 	new CruiseService();
	$assign_list['clsCruiseService'] 	= 	$clsCruiseService;
	$clsContinent	= 	new Continent();
	$assign_list['clsContinent']	= 	$clsContinent;
	$clsRegion	= 	new Region();
	$assign_list['clsRegion']	= 	$clsRegion;
	$clsCountryEx 	= 	new Country();
	$assign_list['clsCountryEx'] 	= 	$clsCountryEx;
	#
	$tp			= 	Input::post("tp", "");
	$cruise_id 	= 	Input::post("cruise_id", 0);
	$assign_list['cruise_id']	= 	$cruise_id;
	#
	if ($tp == "F") {
		if ($cruise_id > 0) {
			$oneCruise	= 	$clsCruise->getOne($cruise_id);
			$assign_list['oneCruise']	= 	$oneCruise;
			#
			$cruise_itinerary_id	= 	Input::post("cruise_itinerary_id", 0);
			$assign_list['cruise_itinerary_id']	= 	$cruise_itinerary_id;
			#
			$lstService	= 	$clsCruiseService->getAll("is_trash=0 and is_online=1 order by order_no desc");
			$assign_list["lstService"]	= 	$lstService;
			#
			if ($cruise_itinerary_id > 0) {
				$oneCruiseItinerary	= 	$clsCruiseItinerary->getOne($cruise_itinerary_id);
				$assign_list['oneCruiseItinerary']	= 	$oneCruiseItinerary;
				$assign_list['number_day']			= 	$oneCruiseItinerary['number_day'];
				$html	= 	$clsISO->build('ajLoadFormItinerary.tpl');
				$data 	= 	['result' => true, 'message' => '', 'html' => $html];
			} else {
				$cruise_itinerary_id	= 	$clsCruiseItinerary->getMaxId();
				$assign_list['cruise_itinerary_id']	= 	$cruise_itinerary_id;
				#
				$field 	= 	$clsCruiseItinerary->pkey . ", title_search, star_number, listCruiseFaActivities, number_day, is_online, slug, user_id, user_id_update, reg_date, upd_date, cruise_id, order_no, trip_price, is_show_price, high_season_month";
				$value 	= 	"'" . $cruise_itinerary_id . "', '', '" . $oneCruise['star_number'] . "', '', '1', '0', '', '" . $user_id . "', '" . $user_id . "', '" . time() . "', '" . time() . "', '" . $cruise_id . "', '1', '0', '0', ''";
				#
				$listTable	= 	$clsCruiseItinerary->getAll("1 = 1 AND cruise_id = '$cruise_id'", $clsCruiseItinerary->pkey . ", order_no");
				#
				for ($i = 0; $i <= count($listTable); $i++) {
					$order_no	= 	$listTable[$i]['order_no'] + 1;
					$clsCruiseItinerary->updateOne($listTable[$i][$clsCruiseItinerary->pkey], "order_no = '" . $order_no . "'");
				}
				if ($clsCruiseItinerary->insertOne($field, $value)) {
					$assign_list['number_day']	= 	1;
					$oneCruiseItinerary	= 	$clsCruiseItinerary->getOne($cruise_itinerary_id);
					$assign_list['oneCruiseItinerary']	= 	$oneCruiseItinerary;
					#
					$html	= 	$clsISO->build('ajLoadFormItinerary.tpl');
					$data 	= 	['result' => true, 'message' => $core->get_Lang('insertSuccess'), 'html' => $html];
				} else {
					$data 	= 	['result' => false, 'message' => $core->get_Lang('insertFailed')];
				}
			}
		} else {
			$data	= 	['result' => false, 'message' => $core->get_Lang('CruiseNotExist')];
		}
		echo json_encode($data);
		die;
	} else if ($tp == "S") {
		$number_day 			=	Input::post('number_day', 0);
		$number_night 			=	Input::post('number_night', 0);
		$listService 			=	Input::post('listService', array());
		$listService 			=	$clsISO->makeSlashListFromArray($listService);
		$intro 					=	Input::post('intro', '');
		$cruise_itinerary_id	=	Input::post('cruise_itinerary_id', 0);
		$price_itinerary 		=	Input::post('price_itinerary', 0);
		#
		if ($cruise_id > 0) {
			$oneCruise	= 	$clsCruise->getOne($cruise_id, $clsCruise->pkey);
			if (!empty($oneCruise)) {
				if ($cruise_itinerary_id > 0) {
					$oneCruiseItinerary	= 	$clsCruiseItinerary->getOne($cruise_itinerary_id, $clsCruiseItinerary->pkey);
					if (!empty($oneCruiseItinerary)) {
						$value	= 	"user_id_update='" . addslashes($core->_SESS->user_id) . "', upd_date='" . time() . "', listService='" . $listService . "', number_day='" . addslashes($number_day) . "', number_night='" . addslashes($number_night) . "', intro='" . addslashes($intro) . "', price_itinerary='" . $price_itinerary . "'";
						#
						if ($clsCruiseItinerary->updateOne($cruise_itinerary_id, $value)) {
							$data	= 	['result' => true, 'message' => $core->get_Lang('updateSuccess')];
						} else {
							$data 	= 	['result' => false, 'message' => $core->get_Lang('UpdateFailed')];
						}
					} else {
						$data	= 	['result' => false, 'message' => $core->get_Lang('CruiseItineraryNotExist')];
					}
				}
			} else {
				$data	= 	['result' => false, 'message' => $core->get_Lang('CruiseNotExist')];
			}
		} else {
			$data	= 	['result' => false, 'message' => $core->get_Lang('CruiseNotExist')];
		}
		echo json_encode($data);
		die;
	}
}

function default_ajSiteFrmPriceChildren()
{
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule, $infant_type_id, $child_type_id, $adult_type_id, $clsConfiguration;
	global $clsISO;
	#
	$clsCruisePriceChild = new CruisePriceChild();
	$clsCruise = new Cruise();
	#
	$user_id = $core->_USER['user_id'];
	$tp = Input::post("tp", "");
	$cruise_id = Input::post("cruise_id", 0);
	$cruise_price_child_id = Input::post("cruise_price_child_id", 0);
	if ($cruise_id > 0) {
		$oneCruise = $clsCruise->getOne($cruise_id);
		if (!empty($oneCruise)) {
			if ($tp == 'L') {
				$html = '';
				$lstItem = $clsCruisePriceChild->getAll("is_trash=0 and cruise_id='" . $cruise_id . "'");
				if (!empty($lstItem)) {
					$i = 0;
					foreach ($lstItem as $item) {
						$html .= '<tr class="' . ($i % 2 == 0 ? 'row1' : 'row2') . '">';
						$html .= '<td class="text-left name_service">
									<div class="box_name_services"> 
										<p class="txt_name_services">
										<a href="javascript:void()" class="edit_cruise_price_child" data-cruise_price_child_id="' . $item['cruise_price_child_id'] . '" data-cruise_id="' . $cruise_id . '" title="' . $item['title'] . '">' . $item['title'] . '</a></p> 
										<p class="txt_info">
											<span>' . $core->get_Lang('Age range') . ': ' . $item['min'] . ' - ' . $item['max'] . ' ' . $core->get_Lang('age') . '</span>
										</p> 
									</div>	
									<button type="button" class="toggle-row inline_block767 top12" style="display:none"><i class="fa fa-caret fa-caret-down"></i></button>
								</td>';
						$price_type = ($item['price_type'] == 0) ? $clsISO->getRate() : "%";
						$txt_price_by = ($item['price_type'] == 0) ? "" : $core->get_Lang('adult fares');
						$html .= '<td class="block_responsive"  data-title="' . $core->get_Lang('Price children') . '" style="text-align:left">
									<strong>' . number_format($item['price'], 0, ",", ".") . $price_type . '</strong> ' . $txt_price_by . '
								</td>';
						$html .= '<td class="block_responsive" data-title="' . $core->get_Lang('func') . '" align="center" style="vertical-align: middle; text-align:center; width: 40px; white-space: nowrap;">
										<div class="btn-group-ico">
											<a href="javascript:void()" class="edit_cruise_price_child" data-cruise_price_child_id="' . $item['cruise_price_child_id'] . '" data-cruise_id="' . $cruise_id . '" title="' . $item['title'] . '"><i class="ico ico-edit"></i></a>
											<a title="' . $core->get_Lang('delete') . '" class="ajDeleteCruisePriceChildren" data-cruise_price_child_id="' . $item['cruise_price_child_id'] . '" data-cruise_id="' . $cruise_id . '" href="javascript:void()"><i class="ico ico-remove"></i></a>
										</div>
									</td>';
						$html .= '</tr>';
						++$i;
					}
				} else {
					$html .= '<tr><td style="text-align:center" colspan="15">' . $core->get_Lang('nodata') . '</td></tr>';
				}
				$data = ['result' => true, "html" => $html];
				echo json_encode($data);
				die();
			} elseif ($tp == 'F') {
				if ($cruise_price_child_id > 0) {
					$oneCruisePriceChild = $clsCruisePriceChild->getOne($cruise_price_child_id, $clsCruisePriceChild->pkey . ',title,min,max,price,price_type');
				}
				$html = '
					<div class="headPop">
						<a class="closeEv close_pop" href="javascript:void();" title="' . $core->get_Lang('close') . '"></a>
						<h3>' . ($cruise_price_child_id > 0 ? $core->get_Lang('edit') : $core->get_Lang('add')) . ' ' . $core->get_Lang('price children') . '</h3>
					</div>
					<form method="post" id="frmSizeGroup" class="frmform" enctype="multipart/form-data">
						<table class="form" cellpadding="3" cellspacing="3">
							<tr>
								<td class="fieldlabel span15">' . $core->get_Lang('title') . '</label>
								<td class="fieldarea">
									<input class="text fontLarge full" name="title" value="' . $clsCruisePriceChild->getTitle($cruise_price_child_id) . '" type="text" />
								</td>
							</tr>
							<tr>
								<td class="fieldlabel span15">' . $core->get_Lang('min age ') . '</label>
								<td class="fieldarea">
									<input class="text fontLarge full price" value="' . $clsCruisePriceChild->getMin($cruise_price_child_id) . '" name="min" type="text" />
								</td>
							</tr>
							<tr>
								<td class="fieldlabel span15">' . $core->get_Lang('max age ') . '</label>
								<td class="fieldarea">
									<input class="text fontLarge full price" value="' . $clsCruisePriceChild->getMax($cruise_price_child_id) . '" name="max" type="text" />
								</td>
							</tr>
							<tr>
								<td class="fieldlabel span15">' . $core->get_Lang('Price') . '</label>
								<td class="fieldarea">
									<div class="d-flex flex-wrap">
										<input class="text_32 border_aaa bold mr10 price" type="text" name="price" value="' . $oneCruisePriceChild['price'] . '" min="0" style="width:100px">
										<select class="form-control" name="price_type" style="width:80px">
											<option value="0" ' . (($oneCruisePriceChild['price_type'] == 0) ? "selected" : "") . '>' . $clsISO->getRate() . '</option>
											<option value="1" ' . (($oneCruisePriceChild['price_type'] == 1) ? "selected" : "") . '>%</option>
										</select>
									</div>
								</td>
							</tr>
						</table>
						<div class="modal-footer">
							<button type="button" cruise_price_child_id="' . $cruise_price_child_id . '" cruise_id=' . $cruise_id . ' class="btn btn-primary ajSubmitCruisePriceChildren"><i class="icon-ok icon-white"></i> <span>' . $core->get_Lang('save') . '</span> </button>
							<button type="reset" class="btn btn-warning close_pop"><i class="icon-retweet icon-white"></i> <span>' . $core->get_Lang('close') . '</span> </button>
						</div>
					</form>';
				$data = ['result' => true, "html" => $html];
				echo json_encode($data);
				die();
			} elseif ($tp == 'S') {
				$titlePost = Input::post("title", "");
				$slugPost = $core->replaceSpace($titlePost);
				$min = Input::post("number_from", 0);
				$max = Input::post("number_to", 0);
				$price = Input::post("price", 0);
				$price_type = Input::post("price_type", 0);
				$cruise_price_child_id = Input::post("cruise_price_child_id", 0);
				#
				$cond_check_range = "is_trash=0 AND cruise_id='" . $cruise_id . "'";
				if ($cruise_price_child_id > 0) {
					$cond_check_range .= " AND cruise_price_child_id <> '$cruise_price_child_id'";
				}
				//				$clsCruisePriceChild->setDeBug(1);				
				$check_exist_title = $clsCruisePriceChild->countItem($cond_check_range . " AND slug ='" . $slugPost . "'");
				if ($check_exist_title > 0) {
					$data = ['result'	=>	false, "message"	=>	"_TITLEINVALID"];
					echo json_encode($data);
					die;
				}
				$check_range_age = $clsCruisePriceChild->countItem($cond_check_range . " AND ((" . $min . " BETWEEN min AND max) OR (" . $max . " BETWEEN min AND max) OR (min BETWEEN " . $min . " AND " . $max . ") OR (max BETWEEN " . $min . " AND " . $max . "))");
				if ($check_range_age > 0) {
					$data = ['result'	=>	false, "message"	=>	"_INVALID"];
					echo json_encode($data);
					die;
				}

				//				var_dump($check_range_age,$check_exist_title);die;

				if ($cruise_price_child_id == 0) {
					$f = $clsCruisePriceChild->pkey . ",title,slug,min,max,price,price_type,cruise_id";
					$v = "'" . $clsCruisePriceChild->getMaxID() . "','$titlePost','$slugPost','" . $clsISO->processSmartNumber($min) . "','" . $clsISO->processSmartNumber($max) . "','" . $clsISO->processSmartNumber($price) . "','" . $price_type . "','" . $cruise_id . "'";
					if ($clsCruisePriceChild->insertOne($f, $v)) {
						$data = ['result'	=>	true, "message"	=>	"_SUCCESS"];
					} else {
						$data = ['result'	=>	false, "message"	=>	"_INSERT_ERROR"];
					}
				} else {
					$v = "title='$titlePost',slug='$slugPost',min='" . $clsISO->processSmartNumber($min) . "',max='" . $clsISO->processSmartNumber($max) . "',price='" . $clsISO->processSmartNumber($price) . "',price_type='" . $price_type . "'";
					if ($clsCruisePriceChild->updateOne($cruise_price_child_id, $v)) {
						$data = ['result'	=>	true, "message"	=>	"_UPDATE_SUCCESS"];
					} else {
						$data = ['result'	=>	false, "message"	=>	"_UPDATE_ERROR"];
					}
				}
				echo json_encode($data);
				die;
			} elseif ($tp == 'D') {
				$cruise_price_child_id = Input::post("cruise_price_child_id", 0);
				$checkExist = $clsCruisePriceChild->countItem("cruise_id='" . $cruise_id . "' AND cruise_price_child_id ='" . $cruise_price_child_id . "'");
				if ($checkExist > 0) {
					$clsCruisePriceChild->deleteOne($cruise_price_child_id);
					$data = ['result'	=>	true, "message"	=>	"_SUCCESS"];
				} else {
					$data = ['result'	=>	false, "message"	=>	"_ERROR"];
				}
				echo json_encode($data);
				die;
			}
		} else {
			$data = ["result"	=>	false, "message"	=>	$core->get_Lang("CruiseNotExist")];
			echo json_encode($data);
			die;
		}
	} else {
		$data = ["result"	=>	false, "message"	=>	$core->get_Lang("CruiseNotExist")];
		echo json_encode($data);
		die;
	}
}
// Tìm kiếm tour cruise extension
function default_ajGetSearch()
{
	global $dbconn, $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule, $clsISO;
	#
	$clsTour			= 	new Tour();
	$clsCruiseExtension = 	new CruiseExtension();
	#
	$keyword	= 	Input::post('keyword', "");
	$cruise_id 	= 	(int) Input::post('cruise_id', 0);
	$cond 		= 	"is_trash = 0 AND is_online = 1";
	$limit 		= 	" LIMIT 0,100";
	$orderBy	=	" ORDER BY order_no ASC";
	#
	if (!empty($keyword)) {
		$slug 	= 	$core->replaceSpace($keyword);
		$cond 	.= 	" AND (title LIKE '%$keyword%' OR slug LIKE '%{$slug}%')";
	}
	#
	$lstItem 	= 	$clsTour->getAll($cond . $orderBy . $limit);
	#
	$html		= 	'';
	if (!empty($lstItem)) {
		foreach ($lstItem as $k => $v) {
			$html	.=	'
				<li class="clickChooiseTour" data="' . $v[$clsTour->pkey] . '" type="add">
					<a href="javascript:void(0);" title="Click để chọn tin này">' . $clsTour->getTitle($v[$clsTour->pkey]) . '</a>	
				</li>';
		}
	} else {
		$html	.= 	'_EMPTY';
	}
	#
	echo $html;
	die();
}
// Danh sách tour cruise extension
function default_ajLoadCruiseExtension()
{
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
	global $clsConfiguration, $clsISO, $package_id;
	#
	$clsTour 			= 	new Tour();
	$clsCruiseExtension = 	new CruiseExtension();
	#
	$arr_type_tour	=	[
		'_PRE'	=>	'Pre cruise',
		'_POST'	=>	'Post cruise'
	];
	#
	$cruise_id	= 	(int) Input::post('cruise_id', 0);
	$html 		= 	'';
	$lstItem 	= 	$clsCruiseExtension->getAll("is_trash=0 and cruise_id='{$cruise_id}' order by order_no asc");
	#
	if (!empty($lstItem)) {
		$i	= 	0;
		foreach ($lstItem as $item) {
			$html	.= 	'<tr style="cursor:move" id="order_' . $item[$clsCruiseExtension->pkey] . '" class="' . ($i % 2 == 0 ? 'row1' : 'row2') . '">';
			$html	.= 	'<td class="index">' . ($i + 1) . '</td>';
			$html	.= 	'<td>' . $arr_type_tour[$item['type']] . '</td>';
			$html	.= 	'<td>' . $clsTour->getTitle($item['cruise_id']) . '</td>';
			$html	.= 	'<td>' . $clsTour->getNumberDayDuration($item['cruise_id']) . '</td>';
			// if ($clsISO->getCheckActiveModulePackage($package_id, $mod, 'category', 'default') == 1) {
			$html	.= 	'<td>' . $clsTour->getCatName($item['cruise_id']) . '</td>';
			// }
			$html 	.= 	'
				<td class="block_responsive text-center" style="white-space:nowrap;" data-title="' . $core->get_Lang('func') . '"">
					<div class="btn-group">
						<button class="btn btn_dropdown dropdown-toggle" type="button" data-toggle="dropdown">
							<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a class="clickDeleteCruiseExtension" title="' . $core->get_Lang('delete') . '" href="javascript:void();" data="' . $item[$clsCruiseExtension->pkey] . '"><i class="icon-remove"></i> <span>' . $core->get_Lang('delete') . '</span></a></li>
						</ul>
					</div>
				</td>';
			$html 	.= 	'</tr>';
			++$i;
		}
		$html 	.= 	'
			<script type="text/javascript">
				$("#tblCruiseExtension").sortable({
					opacity: 0.8,
					cursor: \'move\',
					start: function(){
						vietiso_loading(1);
					},
					stop: function(){
						vietiso_loading(0);
					},
					update: function(){
						var order = $(this).sortable("serialize")+\'&update=update\';
						$.post(path_ajax_script+"/index.php?mod=cruise&act=ajUpdPosCruiseExtension", order, function(html){
							vietiso_loading(0);
							loadCruiseExtension(' . $cruise_id . ');
						});
					}
				});
			</script>';
	}
	// Return
	echo $html;
	die();
}
// Thêm mới tour cruise extension
function default_ajAddCruiseExtension()
{
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule, $clsISO;
	#
	$clsCruiseExtension	=	new CruiseExtension();
	$cruise_id 			= 	$_POST['cruise_id'];
	$cruise_id 			= 	$_POST['cruise_id'];
	$cruise_tour_type 	= 	$_POST['cruise_tour_type'];

	if (!$clsCruiseExtension->checkExist($cruise_id, $cruise_id)) {
		$f 			= 	"cruise_extension_id, cruise_id, cruise_id, order_no, type, is_trash";
		$res 		= 	$clsCruiseExtension->getAll("is_trash = 0 AND cruise_id = '$cruise_id' ORDER BY order_no DESC limit 0,1");
		$order_no 	= 	intval($res[0]['order_no']) + 1;
		$v 			= 	"'" . $clsCruiseExtension->getMaxId() . "', '$cruise_id', '$cruise_id', '" . $order_no . "', '" . $cruise_tour_type . "', '0'";
		#
		if ($clsCruiseExtension->insertOne($f, $v)) {
			echo ('_SUCCESS');
			die();
		}
	} else {
		echo ('_EXIST');
		die();
	}
}
// Xoá tour cruise extension
function default_ajDeleteCruiseExtension()
{
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
	#
	$clsClassTable			= 	new CruiseExtension();
	$cruise_extension_id 	= 	$_POST['cruise_extension_id'];
	$clsClassTable->deleteOne($cruise_extension_id);
	echo (1);
	die();
}
// Sắp xếp tour cruise extension
function default_ajUpdPosCruiseExtension()
{
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
	global $clsConfiguration, $clsISO;
	#
	$clsTour			= 	new Tour();
	$clsCruiseExtension	= 	new CruiseExtension();
	$order	= 	$_POST['order'];
	#
	foreach ($order as $key => $val) {
		$key	= 	$key + 1;
		$clsCruiseExtension->updateOne($val, "order_no = '" . $key . "'");
	}
}


// Danh sách cruise destination
function default_ajaxLoadCruiseCountry()
{
	global $dbconn, $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $core, $clsModule, $clsISO, $clsConfiguration, $package_id;
	$clsCruiseDestination = new CruiseDestination();
	$clsContinent = new Continent();
	$clsCountry = new Country();
	$clsRegion = new Region();
	$clsCity = new City();
	$clsGuide = new Guide();
	$clsTour = new Tour();
	#
	$cruise_id = (int) Input::post('cruise_id', 0);
	$openFrom = Input::post('openFrom', 'block');

	$SiteModActive_continent = $clsISO->getCheckActiveModulePackage($package_id, 'continent', 'default', 'default');


	#
	$html = '';
	$lstDestination = $clsCruiseDestination->getAll("is_trash=0 and cruise_id='{$cruise_id}' order by order_no asc");

	if (!empty($lstDestination)) {
		foreach ($lstDestination as $k => $v) {
			$title = '';
			if (intval($v['country_id']) > 0) {
				$title .= ($SiteModActive_continent ? ' &raquo; ' : '') . $clsCountry->getTitle($v['country_id']);
			}
			$html .= '<li id="order_' . $v[$clsCruiseDestination->pkey] . '" style="cursor:move">
				<a title="' . $core->get_Lang('Drag & drop change position') . '">' . $title . '</a>
				<span class="remove removeDestination removeCruiseCountry" data="' . $v[$clsCruiseDestination->pkey] . '">x</span>
			</li>';
		}
		if ($openFrom == 'block') {
			$html .= '<li class="btn_remove removeAllCruiseCountry  ui-sortable-unhandle">
				<i class="ico ico-remove"></i> ' . $core->get_Lang('removeall') . '
			</li>';
		}
		$html .= '<script type="text/javascript">
			$("#lstDestination").sortable({
				opacity: 1,
				cursor: \'move\',
				start: function(){vietiso_loading(1);},
				stop: function(){vietiso_loading(0);},
				update: function(){
					var order = $(this).sortable("serialize")+\'&update=update\';
					$.post(path_ajax_script+"/index.php?mod=cruise&act=ajUpdPosCruiseDestination",order,function(html){
						vietiso_loading(0);
					});
				}
			}).disableSelection();
			$("#lstDestination").sortable({ cancel: \'.ui-sortable-unhandle\' });
		</script>';
		unset($lstDestination);
	}
	echo $html;
	die();
}
function default_ajUpdPosCruiseDestination()
{
	global $dbconn, $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $core, $clsModule, $clsISO, $clsConfiguration;
	$clsCruiseDestination = new CruiseDestination();
	$orders = Input::post('order');
	if (!empty($orders)) {
		foreach ($orders as $key => $val) {
			$key = $key + 1;
			$clsCruiseDestination->updateOne($val, "order_no='{$key}'");
		}
	}
	// Return
	echo (1);
	die();
}
function default_ajaxDeleteCruiseCountry()
{
	global $dbconn, $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $core, $clsModule, $clsISO, $clsConfiguration;
	$user_id = $core->_USER['user_id'];
	#
	$clsCruiseDestination = new CruiseDestination();
	$cruise_destination_id = (int) Input::post('cruise_destination_id', 0);
	#
	$clsCruiseDestination->deleteOne($cruise_destination_id);
	// Return
	echo (1);
	die();
}
function default_ajaxDeleteAllCruiseCountry()
{
	global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $act, $_LANG_ID;
	global $core, $clsModule, $clsButtonNav, $oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$clsCruiseDestination = new CruiseDestination();
	$cruise_id = (int) Input::post('cruise_id', 0);
	#
	$clsCruiseDestination->deleteByCond("cruise_id='$cruise_id'");
	// Return
	echo (1);
	die();
}
function default_ajaxAddMoreCruiseCountry()
{
	global $dbconn, $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $core, $clsModule, $clsISO, $clsConfiguration;
	#
	$clsCruise = new Cruise();
	$clsCruiseDestination = new CruiseDestination();
	#
	$cruise_id = (int) Input::post('cruise_id', 0);
	$country_id = (int) Input::post('country_id', 0);
	#
	if ($clsCruiseDestination->checkExist($cruise_id, $country_id)) {
		echo '_EXIST';
		die();
	}
	$cond = "is_trash=0 and cruise_id='{$cruise_id}'";
	$f = "{$clsCruiseDestination->pkey},cruise_id,country_id,order_no";
	$v = "'" . $clsCruiseDestination->getMaxId() . "','{$cruise_id}','{$country_id}','" . $clsCruiseDestination->getMaxOrderNo($cruise_id) . "'";
	#
	if ($clsCruiseDestination->insertOne($f, $v)) {
		echo '_SUCCESS';
		die();
	} else {
		echo '_ERROR';
		die();
	}
}
