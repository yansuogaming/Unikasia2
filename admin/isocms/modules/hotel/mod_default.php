<?php
function getFrame(){
	global $core,$dbconn,$_LANG_ID,$clsISO;
    global $mod, $clsModule, $clsButtonNav,$dbconn, $clsConfiguration, $clsISO,$package_id;
	$frames = array(
		'overview' => array(
			'href_group'	=> 'overview',
			'name'	=> $core->get_Lang('Overview'),
			'icon'	=> 'home',
			'steps' => array(
				'name' => array(
					'name' => $core->get_Lang('Name and hotelcode')
				),
				'location' => array(
					'name' => $core->get_Lang('Location')
				),
				'image' => array(
					'name' => $core->get_Lang('Image cover')
				),
				'overview'	=> array(
					'name' => $core->get_Lang('Overview')
				),
				'checkin' => array(
					'name' => $core->get_Lang('Check-in/ Check-out')
				),
				'booking_policy' => array(
					'name' =>  $core->get_Lang('Accommodation')
				),
				'child_policy' => array(
					'name' =>  $core->get_Lang('Children and bed')
				),
				'cancellation_policy' => array(
					'name' =>  $core->get_Lang('Cancellation')
				),
				
				'exclude_policy' => array(
					'name' =>  $core->get_Lang('Excludes')
				),

				'other_policy' => array(
					'name' => $core->get_Lang('Inclusion')
				)
			)
		),
	);
	/*
    if($clsISO->getCheckActiveModulePackage($package_id,$mod,'hotel_room','customize')){
        $frames['room'] = array(
            'name'	=> $core->get_Lang('Room and Price'),
            'href_group'	=> 'room',
            'icon'	=> 'briefcase',
            'steps'	=> array(
                'room' => array(
                    'name' => $core->get_Lang('Room and Price')
                )
                //,
                //'extra_bed' => array(
                    //'name' => $core->get_Lang('Extra bed')
                //),
                //'room_facilities' => array(
                //	'name' => $core->get_Lang('Room facilities')
                //),
            )
        );
    }*/
	
    if($clsISO->getCheckActiveModulePackage($package_id,$mod,'hotel_gallery','customize') && $clsISO->getCheckActiveModulePackage($package_id,$mod,'property','default','HotelFacilities')){
    $frames['config'] = array(
		'name'	=> $core->get_Lang('Configs'),
		'href_group'	=> 'config',
		'icon'	=> 'setting',
		'steps'	=> array(
			'gallery' => array(
				'name' => $core->get_Lang('Gallery')
			),
			'hotel_facilities' => array(
				'name' => $core->get_Lang('Hotel facilities')
			),
		)
	);
    }elseif($clsISO->getCheckActiveModulePackage($package_id,$mod,'hotel_gallery','customize')){
        $frames['config'] = array(
            'name'	=> $core->get_Lang('Configs'),
            'href_group'	=> 'config',
            'icon'	=> 'setting',
            'steps'	=> array(
                'gallery' => array(
                    'name' => $core->get_Lang('Gallery')
                )
            )
        );
    }elseif( $clsISO->getCheckActiveModulePackage($package_id,$mod,'property','default','HotelFacilities')){
        $frames['config'] = array(
            'name'	=> $core->get_Lang('Configs'),
            'href_group'	=> 'config',
            'icon'	=> 'setting',
            'steps'	=> array(
                'hotel_facilities' => array(
                    'name' => $core->get_Lang('Hotel facilities')
                ),
            )
        );
    }

	$frames['seo'] = array(
		'name'	=> $core->get_Lang('Seo tools'),
		'href_group'	=> 'seo',
		'icon'	=> 'seo',
		'steps'	=> array(
			'seo' => array(
				'name' => $core->get_Lang('Seo tools')
			),
		)
	);
	return $frames;
}
function default_insert() {
    global $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $oneSetting, $core,$pvalTable,
	$clsModule, $clsButtonNav, $dbconn, $clsISO, $clsConfiguration,$adult_type_id,$child_type_id,$infant_type_id,$show,$nextstep;
    $assign_list["clsModule"] = $clsModule;
    $user_id = $core->_USER['user_id'];
	$show=isset($_GET['show']) ? $_GET['show'] : '';
	$assign_list["show"] = $show;
    $assign_list["msg"] = isset($_GET['message']) ? $_GET['message'] : '';

	
	$pvalTable =Input::get('hotel_id',0);$assign_list["pvalTable"] = $pvalTable;
	$panel =Input::get('panel','');$assign_list["panel"] = $panel;

	$currentstep =Input::get('step','name');
	$assign_list["currentstep"] = $currentstep;
	
	
	
	
	$currentstepx = 0;
	$frames = getFrame();
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
	

    $classTable = "Hotel";
    $clsClassTable = new $classTable;
    $oneItem = $clsClassTable->getOne($pvalTable);
    $assign_list["oneItem"] = $oneItem;
    $tableName = $clsClassTable->tbl;
    $pkeyTable = $clsClassTable->pkey;

    $assign_list["clsClassTable"] = $clsClassTable;
    $assign_list["pkeyTable"] = $pkeyTable;
	
	
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
	$clsClassTable->updateMinPrice($pvalTable);
	

}
function default_getMainFormStep(){
	global $smarty,$assign_list,$_frontIsLoggedin_user_id,$core,$clsISO,$clsProperty,$clsUser,$_company_iom_id,$dbconn,$nextstep,$clsConfiguration;
	$clsTag = new Tag();
	$clsCity = new City();
	$clsRegion = new Region();
	$clsCountry = new Country();
	$clsContinent = new Continent();
	$clsReviewsHotel = new ReviewsHotel();
	$clsHotel = new Hotel();
	$smarty->assign('clsTag', $clsTag);
	$smarty->assign('clsCity', $clsCity);
	$smarty->assign('clsRegion', $clsRegion);
	$smarty->assign('clsCountry', $clsCountry);
	$smarty->assign('clsContinent', $clsContinent);
	$smarty->assign('clsClassTable', $clsHotel);
	$smarty->assign('clsReviewsHotel', $clsReviewsHotel);
	
	#
	$table_id = Input::post('table_id',0);
	$currentstep = Input::post('currentstep','');
	
	$oneItem =$clsHotel->getOne($table_id);
	
	$smarty->assign('pvalTable',$table_id);
	$smarty->assign('oneItem',$oneItem);
	$smarty->assign('clsTable','Hotel');
	$smarty->assign('clsTableGal','HotelImage');
	
	$frames = getFrame();
	#Step follow index
	$ii = 0; $arrStep = array();
	foreach($frames as $okey => $frame){
		$steps = $frame['steps'];
		foreach($steps as $key => $step){
			$status = 0;
			if($key == 'name' && $oneItem['title'] !=''){
				$status = 1;
			}
			if($key == 'location' && $oneItem['continent_id'] > 0 && $oneItem['country_id'] > 0 && $oneItem['city_id'] > 0 && $oneItem['address'] != ''){
				$status = 1;
			}			
			if($key == 'image' && $oneItem['image'] !=''){
				$status = 1;
			}
			if($key == 'overview' && $oneItem['overview'] !=''){
				$status = 1;
			}
			if($key == 'checkin' && $oneItem['check_in_out_time'] !=''){
				$status = 1;
			}
			if($key == 'thingAbout' && $oneItem['listThingAbout'] !=''){
				$status = 1;
			}
			if($key == 'booking_policy' && $oneItem['booking_policy'] !=''){
				$status = 1;
			}
			if($key == 'child_policy' && $oneItem['child_policy'] !=''){
				$status = 1;
			}
			if($key == 'cancellation_policy' && $oneItem['cancellation_policy'] !=''){
				$status = 1;
			}
			if($key == 'exclude_policy' && $oneItem['exclude_policy'] !=''){
				$status = 1;
			}
			if($key == 'other_policy' && $oneItem['other_policy'] !=''){
				$status = 1;
			}
			if($key == 'room'){
				$clsHotelRoom = new HotelRoom();
				$number_room = $clsHotelRoom->countItem("hotel_id='".$table_id."'");
				if($number_room > 0){
					$status = 1;
				}				
			}
			if($key == 'gallery'){
				$clsHotelImage = new HotelImage();
				$number_image = $clsHotelImage->countItem("table_id='".$table_id."' and type='HotelImage'");
				if($number_image > 0){
					$status = 1;
				}
			}
			if($key == 'hotel_facilities' && $oneItem['list_HotelFacilities'] !=''){
				$status = 1;
			}
			if($key == 'seo'){
				$clsMeta = new Meta();
				$link = $clsHotel->getLink($table_id);
				$oneMeta = $clsMeta->getAll("config_link='$link' limit 0,1",$clsMeta->pkey.',config_value_title,config_value_intro,image');
				if(!empty($oneMeta) && $oneMeta[0]['config_value_title'] != '' && $oneMeta[0]['config_value_intro'] != '' && $oneMeta[0]['image'] != ''){
					$status = 1;	
				}				
			}
			$arrStep[$ii] = array(
				'key' => $key,
				'panel' => $okey,
				'name' => $step['name'],
				'status' => $status,
				'description' => $step['description']
			);
			++$ii;
		}
	}
	
	$smarty->assign('arrStep',$arrStep);
	if($currentstep=='seo'){
		$clsMeta = new Meta();
		$assign_list["clsMeta"] = $clsMeta;
		$linkMeta = $clsHotel->getLink($table_id);
		$allMeta = $clsMeta->getAll("config_link='$linkMeta'");
		$meta_id = $allMeta[0]['meta_id'];

		if(empty($meta_id)){
			
			$introMeta=strip_tags(html_entity_decode(addslashes($oneItem['overview'])));
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
    $clsForm->addInputTextArea("full", "hotel_booking_policy", "", "hotel_booking_policy", 255, 25, 15, 1, "style='width:100%'");
    $clsForm->addInputTextArea("full", "child_policy", "", "child_policy", 255, 25, 2, 1, "style='width:100%'");
    $clsForm->addInputTextArea("full", "cancellation_policy", "", "cancellation_policy", 255, 25, 2, 1, "style='width:100%'");
	$clsForm->addInputTextArea("full", "exclude_policy", "", "exclude_policy", 255, 25, 2, 1, "style='width:100%'");
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
	global $_frontIsLoggedin_user_id,$core,$clsISO,$clsProperty,$clsUser,$_company_iom_id,$dbconn;
	#
	$msg = '_error';
	$clsClassTable= new Hotel();
	$table_id = Input::post('table_id',0);
	$currentstep = Input::post('currentstep');

	if($currentstep=='name'){
		$title = Input::post('title');
        $title=html_entity_decode($title);
		$star_id = Input::post('star_id');
        $type_hotel_id = Input::post('type_hotel_id');
		$clsClassTable->updateOne($table_id, array(
			'title' => $title,
			'slug' => $clsISO->replaceSpace2($title),
			'star_id' => $star_id,
			'list_TypeHotel' => $type_hotel_id,
			'upd_date' => time()
		));
		
        $staff = Input::post('staff');
        $amenities = Input::post('amenities');
        $clean = Input::post('clean');
        $place = Input::post('place');
        $food_drink = Input::post('food_drink');
        $worthy = Input::post('worthy');
		$is_show_reviews = input::post('is_show_reviews');
		$is_show_reviews = $is_show_reviews?1:0;
		$clsReviewsHotel = new ReviewsHotel();
		if($clsReviewsHotel->checkExits($table_id)) {
			$reviews_hotel_id = $clsReviewsHotel->getIdByHotel($table_id);
			$arr_reviews = [
				'staff'				=>	$clsISO->processSmartNumber($staff),
				'amenities'			=>	$clsISO->processSmartNumber($amenities),
				'clean'				=>	$clsISO->processSmartNumber($clean),
				'place'				=>	$clsISO->processSmartNumber($place),
				'food_drink'		=>	$clsISO->processSmartNumber($food_drink),
				'worthy'			=>	$clsISO->processSmartNumber($worthy),
				'is_show_reviews'	=>	$is_show_reviews,
			];
			$clsReviewsHotel->updateOne($reviews_hotel_id, $arr_reviews);
		} else {
			$fx = "$clsReviewsHotel->pkey,hotel_id,staff,amenities,clean,place,food_drink,worthy,is_show_reviews";
			$vx = "'".$clsReviewsHotel->getMaxID()."','$table_id','".$clsISO->processSmartNumber($staff)."','".$clsISO->processSmartNumber($amenities)."','".$clsISO->processSmartNumber($clean)."','".$clsISO->processSmartNumber($place)."','".$clsISO->processSmartNumber($food_drink)."','".$clsISO->processSmartNumber($worthy)."','".$is_show_reviews."'";
			$clsReviewsHotel->insertOne($fx,$vx);
		} 
	} else if($currentstep=='location'){
		$continent_id = Input::post('iso-continent_id',0);
		$country_id = Input::post('iso-country_id',0);
		$region_id = Input::post('iso-region_id',0);
		$city_id = Input::post('iso-city_id',0);
		$address = Input::post('iso-address','');
		$clsClassTable->updateOne($table_id, array(
			'continent_id' => intval($continent_id),
			'country_id' =>  intval($country_id),
			'region_id' =>  intval($region_id),
			'city_id' =>  intval($city_id),
			'address' => $address
		));
	}else if($currentstep=='checkin'){
		$hour_in = Input::post('hour_in',0);
		$minute_in = Input::post('minute_in',0);
		$hour_out = Input::post('hour_out',0);
		$minute_out = Input::post('minute_out',0);
		
		$arr_time_check_in_out =array();
		$arr_time_check_in_out['hour_in'] = $hour_in>24?24:$hour_in;
		$arr_time_check_in_out['minute_in'] = $minute_in>60?60:$minute_in;
		$arr_time_check_in_out['hour_out'] = $hour_out>24?24:$hour_out;
		$arr_time_check_in_out['minute_out'] = $minute_out>60?60:$minute_out;
		$clsClassTable->updateOne($table_id, array(
			'check_in_out_time' => json_encode($arr_time_check_in_out),
			'upd_date' => time()
		));
	} else if($currentstep=='image'){
		$image = Input::post('image','');
		$clsClassTable->updateOne($table_id, array(
			'image' => $image
		));
	} else if($currentstep=='hotel_facilities'){
		$list_HotelFacilities = Input::post('list_HotelFacilities','');
		$list_HotelFacilities = $clsISO->makeSlashListFromArray($list_HotelFacilities);
		$clsClassTable->updateOne($table_id, array(
			'list_HotelFacilities' => $list_HotelFacilities
		));
	} else if(in_array($currentstep,array(
			'overview',
			'checkin',
			'booking_policy',
			'child_policy',
			'cancellation_policy',
			'other_policy',
			'exclude_policy'
		))){
		$valueField = Input::post($currentstep);
		$clsClassTable->updateOne($table_id, array(
			$currentstep => $valueField
		));
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

		var_dump($a); die();
	}
	$msg = '_success';
	// Output
	echo $msg; die();
}
function default_check_table_code(){
	global $smarty,$core,$_frontIsLoggedin_user_id,$profile_id,$dbconn,$clsISO;
	global $profile_id, $_frontIsLoggedin_user_id;
	$clsClassTable= new Hotel();
	
	$table_id = Input::post('table_id', 0);
	$table_code = Input::post('table_code');
	$cond = "is_trash=0 and hotel_id<>'{$table_id}' and hotel_code='{$table_code}'";
	$totalItem = $clsClassTable->countItem($cond);
	echo ($totalItem==1?'_invalid':'_success'); die();
}

function default_ajaxLoadHotelRoom() {
    global $core,$mod,$act,$P;
    $clsHotel = new Hotel();
    $clsHotelRoom = new HotelRoom();
    #
    $hotel_id = $_POST['hotel_id'];
    $html = '';
    $lstRoom = $clsHotelRoom->getAll("is_trash=0 and hotel_id='$hotel_id' order by order_no asc");
    if (!empty($lstRoom)) {
        $i = 0;
        foreach ($lstRoom as $item) {
			if($clsHotelRoom->getNumberChild($item[$clsHotelRoom->pkey])==0){
			$number_people=$clsHotelRoom->getNumberAdult($item[$clsHotelRoom->pkey]).' '.$core->get_Lang('NL');
			}else{
			$number_people=$clsHotelRoom->getNumberAdult($item[$clsHotelRoom->pkey]).' '.$core->get_Lang('NL').', '.$clsHotelRoom->getNumberChild($item[$clsHotelRoom->pkey]).' '.$core->get_Lang('TE');
			}
			
            $html.='<tr style="cursor:move" id="order_'.$item[$clsHotelRoom->pkey].'"  class="' . ($i % 2 == 0 ? 'row1' : 'row2') . '">';
            $html.='<td class="text_left">'.$clsHotelRoom->getTitleRoomType($item['room_stype_id']).'</td>';
            $html.='<td class="text_left">'.$clsHotelRoom->getTitle($item[$clsHotelRoom->pkey]).'</td>';
			$html.='<td class="text_center">'.$clsHotelRoom->getNumberRoom($item[$clsHotelRoom->pkey]).'</td>';
			$html.='<td class="text_center">'.$number_people.'</td>';
			$html.='<td class="text_right">'.$clsHotelRoom->getPrice($item[$clsHotelRoom->pkey]).'</td>';
			$html.='<td></td>';
            $html.='
			<td align="center" style="vertical-align: middle; text-align:center; width:50px; white-space: nowrap;">
				<div class="btn-group-ico d-flex">
					<a class="clickEditHotelRoom item_left" title="'.$core->get_Lang('edit').'" href="javascript:void(0);"  data="'.$item[$clsHotelRoom->pkey].'" hotel_id="'.$hotel_id.'"><i class="ico ico-edit"></i></a>
					<a class="clickDeleteHotelRoom item_right" title="'.$core->get_Lang('delete').'" href="javascript:void(0);" data="'.$item[$clsHotelRoom->pkey].'" hotel_id="'.$hotel_id.'"><i class="ico ico-remove"></i></a>
				</div>
            </td>';
            $html.='</tr>';
            ++$i;
        }
		$html.='
		<script type="text/javascript">
			$("#hotelRoomTable").sortable({
				opacity: 0.8,
				cursor: \'move\',
				start: function(){
					vietiso_loading(1);
				},
				stop: function(){
					vietiso_loading(0);
				},
				update: function(){
					var page = "'.$page.'";
					var order = $(this).sortable("serialize")+\'&update=update\';
					$.post(path_ajax_script+"/index.php?mod=hotel&act=ajUpdPosSortHotelRoom", order, function(html){
						loadHotelRoom();
						vietiso_loading(0);
					});
				}
			});
		</script>';
		
    }
    echo $html;
    die();
}
function default_ajaxAddHotelRoom(){
	global $assign_list,$_CONFIG,$_SITE_ROOT,$mod,$_LANG_ID,$act,$current_page,$core,$clsModule,$clsButtonNav,$dbconn,$clsISO,$clsConfiguration,$clsISO;
	#
	$clsPagination = new Pagination();
	$clsCountry = new Country();
	$clsHotel = new Hotel();$assign_list['clsHotel']=$clsHotel;
	$clsHotelRoom = new HotelRoom();$assign_list['clsHotelRoom']=$clsHotelRoom;
	
	$table_id =Input::post('table_id',0);$assign_list['table_id']=$table_id;
	$pvalTable =Input::post('hotel_room_id',0);$assign_list['pvalTable']=$pvalTable;
	
	if(!empty($pvalTable)){
		$oneItem=$clsHotelRoom->getOne($pvalTable);
		$assign_list['oneItem']=$oneItem;
		$number_adult=$oneItem['number_adult'];$assign_list['number_adult']=$number_adult;
		$number_child=$oneItem['number_children'];$assign_list['number_child']=$number_child;
		$bed_option=$oneItem['bed_option'];
		$bed_option=json_decode($bed_option,true);
		$assign_list['bed_option']=$bed_option;
	}
	
	$clsProperty= new Property();$assign_list['clsProperty']=$clsProperty;
	$listTypeBed=$clsProperty->getAll("is_trash=0 and type='TypeBed' order by order_no ASC",$clsProperty->pkey);
	$assign_list['listTypeBed']=$listTypeBed;
	
	$fill_bed_name_select_box='';
	foreach($listTypeBed as $item){
		$fill_bed_name_select_box.='<option value="'.$item['property_id'].'">'.$clsProperty->getTitle($item['property_id']).'</option>';
	}
	$assign_list['fill_bed_name_select_box']=$fill_bed_name_select_box;
	
	
	$fill_bed_number_select_box='';
	for($i=0;$i<5;$i++){
		$fill_bed_number_select_box.='<option value="'.$i.'">'.$i.'</option>';
	}
	$assign_list['fill_bed_number_select_box']=$fill_bed_number_select_box;
	
	
	$tp =Input::post('tp','');$assign_list['tp']=$tp;
	$html=$core->build('modal.addhotelroom.tpl');
	echo $html; die();
}

function default_ajSaveHotelRoom(){
	global $assign_list,$_CONFIG,$_SITE_ROOT,$mod,$act;
	global $core, $clsModule, $clsButtonNav,$oneSetting,$clsISO;
	$clsHotel= new Hotel ();
	$clsHotelRoom = new HotelRoom ();
	$user_id = $core->_USER['user_id'];
	$hotel_room_id = Input::post('hotel_room_id',0);
	$hotel_id = Input::post('hotel_id',0);
	$room_stype_id = Input::post('room_stype_id',0);
	$titlePost = Input::post('title','');
	$slugPost = $core->replaceSpace($titlePost);
	$number_val = Input::post('number_val',0);
	$footage = Input::post('footage',0);
	$number_adult = Input::post('number_adult',0);
	$number_child = Input::post('number_child',0);
	$price = Input::post('price',0);
	$price = $clsISO->processSmartNumber2($price);
	$price_weekend = Input::post('price_weekend',0);
	$price_weekend = $clsISO->processSmartNumber2($price_weekend);
	$price_peak_time = Input::post('price_peak_time',0);
	$price_peak_time = $clsISO->processSmartNumber2($price_peak_time);
	
	if(_isoman_use){
		$image = $_POST['isoman_url_image'];
	} else {
		$image = $_POST['image_src'];
	}
	
	
	$bed_option=array();
	
	foreach($_POST['item_bed'] as $key=>$val){
		$bed_option[$key]['id']=$val;
		$bed_option[$key]['number']=$_POST['item_bed_number'][$key];
	}
	$bed_option=json_encode($bed_option);

	$tp = Input::post('tp','SAVE');
	
	
	if(empty($hotel_room_id)){
		$fx = "$clsHotelRoom->pkey,hotel_id,user_id,room_stype_id,title,slug,number_val,footage,number_adult,number_children,price,price_weekend,price_peak_time,bed_option,order_no,reg_date,upd_date,image";
		$vx = "'".$clsHotelRoom->getMaxId()."','".$hotel_id."','".$user_id."','".$room_stype_id."','".$titlePost."','$slugPost','$number_val','$footage','$number_adult','$number_child','$price','$price_weekend','$price_peak_time','$bed_option','1','".time()."','".time()."','".$image."'";
		$listTable=$clsHotelRoom->getAll("1=1", $clsHotelRoom->pkey.",order_no");
		for ($i = 0; $i <= count($listTable); $i++) {
			$order_no=$listTable[$i]['order_no'] + 1;
			$clsHotelRoom->updateOne($listTable[$i][$clsHotelRoom->pkey],"order_no='".$order_no."'");
		}
		if($clsHotelRoom->insertOne($fx,$vx)){
			echo('INSERT_SUCCESS'); die();
		}else{
			echo('INSERT_ERROR'); die();
		}
	}else{
		$value = "hotel_id='".$hotel_id."'";
		$value .= ",user_id_update='".$user_id."'";
		$value .= ",room_stype_id='".$room_stype_id."'";
		$value .= ",title='".$titlePost."'";
		$value .= ",slug='".$slugPost."'";
		$value .= ",number_val='".$number_val."'";
		$value .= ",footage='".$footage."'";
		$value .= ",number_adult='".$number_adult."'";
		$value .= ",number_children='".$number_child."'";
		$value .= ",price='".$price."'";
		$value .= ",price_weekend='".$price_weekend."'";
		$value .= ",price_peak_time='".$price_peak_time."'";
		$value .= ",bed_option='".$bed_option."'";
		$value .= ",upd_date='".time()."'";
		$value .= ",image='".$image."'";
		if ($clsHotelRoom->updateOne($hotel_room_id, $value)) {
			$clsHotel->updateMinPrice($hotel_id);
            echo('UPDATE_SUCCESS'); die();
		}else{
			echo('UPDATE_ERROR'); die();
		}
	}
	
	
	echo(1); die();
}

function default_ajCheckTitleHotelRoom(){
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod , $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule,$clsISO;
	global $clsConfiguration;
	#
	$clsHotelRoom = new HotelRoom();
	$hotel_id = (int)Input::post('hotel_id',0);
	$room_stype_id = (int)Input::post('room_stype_id',0);
	$table_id = (int)Input::post('table_id',0);
	$title_room = Input::post('title_room','');
	$slug = $clsISO->replaceSpace2($title_room);
	$data = ['result'=>true];
	if($hotel_id > 0){		
		$cond = "hotel_id = '".$hotel_id."' and room_stype_id='".$room_stype_id."' and hotel_room_id !='$table_id' and slug='$slug'";
		$count_room = $clsHotelRoom->countItem($cond);
		if($count_room > 0){
			$data = ['result'=>false];
		}
	}
	echo json_encode($data);die;
}
function default_ajUpdPosSortHotelRoom(){
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod , $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
	global $clsConfiguration;
	#
	$clsHotelRoom = new HotelRoom();
	$order = $_POST['order'];
	$currentPage 	= $_POST['currentPage'];
	$recordPerPage 	= $_POST['recordPerPage'];
	//var_dump($currentPage.'xxxxxx'.$recordPerPage);die();
	foreach($order as $key=>$val){
		$key = (($currentPage-1)*$recordPerPage + $key + 1);
		$clsHotelRoom->updateOne($val,"order_no='".$key."'");	
	}
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
    $Html = '<option value="0"> --' . $core->get_Lang('City') . '-- </option>';
    $listCity = $clsCity->getAll($cond, $clsCity->pkey);
	if(is_array($listCity) && count($listCity) > 0){
		for($i=0; $i<count($listCity); $i++){
			$Html .= '<option title="'.$clsCity->getTitle($listCity[$i][$clsCity->pkey]) . '" value="'.$listCity[$i][$clsCity->pkey].'" '.($city_id==$listCity[$i][$clsCity->pkey]?'selected="selected"':'').'>|--- ' . $clsCity->getTitle($listCity[$i][$clsCity->pkey]) . '</option>';
		}
	}
	unset($listCity);
	echo $Html; die();
}

function default_ajCheckPublicHotel(){
    global $core,$clsISO,$clsConfiguration,$assign_list,$clsModule,$clsISO,$package_id;
//    header('Content-Type: application/json');
    $clsHotel = new Hotel();
    $pvalTable = isset($_POST['hotel_id'])?$_POST['hotel_id']:0;
    $online = isset($_POST['is_online'])?$_POST['is_online']:0;
    $oneItem = $clsHotel->getOne($pvalTable);
    $assign_list["oneItem"] = $oneItem;

    $result = array('result' => '_ERR');
    $value = '';

//    if($online){
        $value .= 'is_online='.$online;
//    }

    if($clsHotel->updateOne($pvalTable, $value)){
        $result = array('result' => '_SUCCESS');
    }else{
        $result = array('result' => '_ERR');
    }
    echo json_encode($result);die();
}

function default_checkExistTitle(){
	global $dbconn, $_LANG_ID, $core, $smarty,$assign_list,$clsISO;
	$clsHotel= new Hotel();
	$hotel_id = (int)Input::post('table_id',0);
	$title = Input::post('title','');
	$data = ['result'=>true];
	if($hotel_id > 0){
		if($title != ''){
			$slug = $clsISO->replaceSpace2($title);
			$listAllHotel=$clsHotel->getAll("1=1 and slug='$slug' and hotel_id <>'$hotel_id'");
			if($listAllHotel){
				$data = [
					'result'=>false,
					'message'=>$core->get_Lang('Title exist'),
					'type'	=>	'title'
				];
				echo json_encode($data);die;
			}
		}
	}	
	echo json_encode($data);
}
?>