<?php
function default_loadCalendarSlot(){
	global $smarty,$_frontIsLoggedin_user_id,$core,$clsISO,$package_id,$oneProfile;
	$clsTour = new Tour();
	$clsTourStartDate = new TourStartDate();
	#
	$timer = time();
	$tour_id = (int) Input::post('tour_id', 0);
	$start = Input::post('start');
	$end = Input::post('end');
	$start_time = strtotime($start);
	$end_time = strtotime($end);
	//$clsISO->print_pre($start_time); die();
	$results = array();
	for($i=$start_time; $i<$end_time; $i=strtotime('+1 day', $i)){
		$year = date("Y", $i);
		$month = date('m', $i);
		$day = date('d', $i);
		$Day = date('D', $i);
		
		$flag = 0;
		$listItem = $clsTourStartDate->getAll("is_active='1' and is_single='1' and tour_id='{$tour_id}' and start_date='{$i}'");
		if(empty($listItem)){
			$listItem = $clsTourStartDate->getAll("is_active='1' and is_single='0' and weekdays like '%".$Day."%' and tour_id='{$tour_id}' and start_date<='{$i}' and end_date>='{$i}'");

			$weekdays = $listItem[0]['weekdays'];
			$weekdays_arr = !empty($weekdays) ? @json_decode($weekdays, true) : array();
			if(in_array(date('D', $i), $weekdays_arr)){
				$flag = 1;
			}
		}  else {
			$flag = 1;
		}
		$allotment = $listItem[0]['allotment'];
		if($allotment == null){
			$txt_allotment = 'Không giới hạn chỗ';
		}else{
			$txt_allotment = 'Còn 0/'.$allotment.' chỗ';
		}
		if($flag==1){
			$results[] = array(
				'number' => 1,
				'date_id' => $i,
				'title' => PAGE_NAME,
				'tour_id' => $tour_id,
				'start' => date('Y-m-d', $i). " 00:00:00",
				'end' => date('Y-m-d', $i)." 23:59:59",
				'tour_start_date_id' => $listItem[0][$clsTourStartDate->pkey],
				'html' => '<p class="mb-half">'.$core->get_Lang('Departure').'</p>
					<h3 class="fs-18 mb-half">'.$clsTour->getTitleDepartureType($listItem[0]['departure_type']).'</h3>
					<p class="text-muted">'.$txt_allotment.'</p>
					<p><a class="btn-edit" data-date_id="'.$i.'" data-tour_id="'.$tour_id.'" data-openFrom="calendar"  data-tour_start_date_id="'.$listItem[0][$clsTourStartDate->pkey].'" onClick="edit_departure_date(this)">Sửa khởi hành</a></p>
					<p><a class="btn-delete color_f00" data-tour_start_date_id="'.$listItem[0][$clsTourStartDate->pkey].'" onClick="delete_departure(this)">Xóa khởi hành</a></p>
				'
			);
		} else {
			$results[] = array(
				'number' => 0,
				'date_id' => $i,
				'title' => PAGE_NAME,
				'tour_id' => $tour_id,
				'start' => date('Y-m-d', $i). " 00:00:00",
				'end' => date('Y-m-d', $i)." 23:59:59",
				'html' => ($i > $timer?'<a class="btn btn-default btn-sm" onClick="open_departure_date(this)" openFrom="calendar" date_id="'.$i.'" tour_id="'.$tour_id.'">+ '.$core->get_Lang('Add Departure').'</a>':'')
			);
		}
	}
	// Output
	echo @json_encode($results); die();
}
function default_open_departure_date(){
	global $smarty, $core, $dbconn, $_LANG_ID, $clsConfiguration,$clsISO,$package_id;
	global $adult_type_id,$child_type_id,$infant_type_id;
	$clsTour = new Tour();
	$clsTourOption = new TourOption();
	$clsTourProperty = new TourProperty();
	$clsTourStartDate = new TourStartDate();
	#
	$tour_id = (int) Input::post('tour_id', 0);
	$date_id = (int) Input::post('date_id', 0);
	$openFrom  = Input::post('openFrom', "general");
	$tour_start_date_id = (int) Input::post('tour_start_date_id', 0);
	
	$hs = 0;
	if($tour_start_date_id > 0){
		$titlePage = $core->get_Lang('Edit Departure');
		$oneItem = $clsTourStartDate->getOne($tour_start_date_id);
		$weekdays_arr = !empty($oneItem['weekdays']) 
			? @json_decode($oneItem['weekdays'], true) : array();
		if((int) $oneItem['ruler_type'] == 1){
			$oneItem['date_id'] = $date_id;
		} else {
			$hs = 1;
			$openFrom = 'calendar';
			$oneItem['date_id'] = $oneItem['start_date'];
		}
		
		//print_r($oneItem);die();
		
	} else {
		$weekdays_arr = array();
		$titlePage = $core->get_Lang('Add Departure');
		$oneItem = array('ruler_type' => 1,'price_type' => 0,'date_id' => $date_id,'price' => "",'price_single_supply' => 0);
	}
	$smarty->assign('hs', $hs);
	$smarty->assign('tour_id', $tour_id);
	$smarty->assign('date_id', $date_id);
	$smarty->assign('oneItem', $oneItem);
	$smarty->assign('titlePage', $titlePage);

	$smarty->assign('tour_start_date_id', $tour_start_date_id);
	$smarty->assign('weekdays_arr', $weekdays_arr);
	$smarty->assign('openFrom', $openFrom);
	#
	$list_months = array();
	for($i=1; $i<=12; $i++){
		$list_months[] = $i; 
	}
	$smarty->assign('list_months', $list_months);
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
	#
	$listType = $clsTour->getListDepartureType();
	$smarty->assign('listType', $listType);
	#
	$listPaymentDue = array(
		1 => array(
			'title' => $core->get_Lang('Scheduled'),
			'subtitle' => $core->get_Lang('Before using the service')
		),
		2 => array(
			'title' => $core->get_Lang('On Request'),
			'subtitle' => $core->get_Lang('First day of travel')
		),
		3 => array(
			'title' => $core->get_Lang('Guaranteed'),
			'subtitle' => $core->get_Lang('Before the end of the tour')
		),
		4 => array(
			'title' => $core->get_Lang('Closed'),
			'subtitle' => $core->get_Lang('At the end of the tour')
		),
		5 => array(
			'title' => $core->get_Lang('Closed'),
			'subtitle' => $core->get_Lang('After going on the tour')
		)
	);
	$smarty->assign('listPaymentDue', $listPaymentDue);
	#
	$lstTourVisitorType  = $clsTourProperty->getAll("is_trash=0 and type='VISITORTYPE' order by tour_property_id ASC");
	
	$oneTour = $clsTour->getOne($tour_id, "tour_option,adult_group_size,child_group_size,infant_group_size");
	$lstOption = !empty($oneTour['tour_option']) 
		? $clsISO->getArrayByTextSlash($oneTour['tour_option']) : array();
	$lstAdultSize = !empty($oneTour['adult_group_size']) 
		? $clsISO->getArrayByTextSlash($oneTour['adult_group_size']) : array();
	$lstChildSize = !empty($oneTour['child_group_size']) 
		? $clsISO->getArrayByTextSlash($oneTour['child_group_size']) : array();
	$lstInfantSize = !empty($oneTour['infant_group_size']) 
		? $clsISO->getArrayByTextSlash($oneTour['infant_group_size']) : array();
	$total_adult_group_size = !empty($lstAdultSize) ? count($lstAdultSize) : 0;
	$total_child_group_size = !empty($lstChildSize) ? count($lstChildSize) : 0;
	$total_infant_group_size = !empty($lstInfantSize) ? count($lstInfantSize) : 0;
	
	$htmlPriceTable = '';
	if(!empty($lstOption)){
		$price = $oneItem['price'];
		$price_arr = !empty($price) ? @json_decode($price, true) : array();
		foreach($lstOption as $key => $val){
			$htmlPriceTable .= '<div class="table-wrapper mb-3 w-80 radius-3">
				<table class="table table-bordered mb-0 overflow-hidden radius-3">
				<tr class="bg-gray">
					<td colspan="3" width="25%">'.$clsTourOption->getTitle($val).'</td>
				</tr>';
			foreach($lstTourVisitorType as $a=>$b){
				if($b[$clsTourProperty->pkey] == $adult_type_id && $total_adult_group_size > 0){
					$htmlPriceTable .= '<tr>
						<td rowspan="'.($total_adult_group_size+1).'" width="25%">
							'.$clsTourProperty->getTitle($b[$clsTourProperty->pkey]).'
						</td>
					</tr>';
					foreach($lstAdultSize as $k1 => $v1){
						$price = isset($price_arr[$adult_type_id][$val][$v1]) ? $price_arr[$adult_type_id][$val][$v1] : "";
						$htmlPriceTable .= '<tr>
							<td width="25%">'.$clsTourOption->getTitle($v1).'</td>
							<td>
								<div class="input-group">
									<input type="text" class="form-control price-In numberonly" name="adult['.$val.']['.$v1.']" value="'.$price.'" placeholder="0.00" />
									<span class="input-group-addon">'.$clsISO->getRate().'</span>
								</div>
							</td>
						</tr>';
					}
				} else if($b[$clsTourProperty->pkey] == $child_type_id && $total_child_group_size > 0){
					$htmlPriceTable .= '<tr>
						<td rowspan="'.($total_child_group_size+1).'" width="25%">
							'.$clsTourProperty->getTitle($b[$clsTourProperty->pkey]).'
						</td>
					</tr>';
					foreach($lstChildSize as $k2 => $v2){
						$price = isset($price_arr[$adult_type_id][$val][$v1]) ? $price_arr[$child_type_id][$val][$v2] : "";
						$htmlPriceTable .= '<tr>
							<td width="25%">'.$clsTourOption->getTitle($v2).'</td>
							<td>
								<div class="input-group">
									<input type="text" class="form-control price-In numberonly" name="child['.$val.']['.$v2.']" placeholder="0.00" value="'.$price.'" />
									<span class="input-group-addon">'.$clsISO->getRate().'</span>
								</div>
							</td>
						</tr>';
					}
				} else if($b[$clsTourProperty->pkey] == $infant_type_id  && $total_infant_group_size > 0){
					$htmlPriceTable .= '<tr>
						<td rowspan="'.($total_infant_group_size+1).'" width="25%">
							'.$clsTourProperty->getTitle($b[$clsTourProperty->pkey]).'
						</td>
					</tr>';
					foreach($lstInfantSize as $k3 => $v3){
						$price = isset($price_arr[$adult_type_id][$val][$v1]) ? $price_arr[$infant_type_id][$val][$v3] : "";
						$htmlPriceTable .= '<tr>
							<td width="25%">'.$clsTourOption->getTitle($v3).'</td>
							<td>
								<div class="input-group">
									<input type="text" class="form-control price-In numberonly" name="infant['.$val.']['.$v3.']" placeholder="0.00" value="'.$price.'" />
									<span class="input-group-addon">'.$clsISO->getRate().'</span>
								</div>
							</td>
						</tr>';
					}
				}
			}	
			$htmlPriceTable .= '</table></div>';
		}
		$htmlPriceTable .= '<div class="price_single_supply w-80">
			<div class="row">
				<label class="col-form-label col-md-6 text-left">'.$core->get_Lang('Single-Room Addition').'</label>
				<div class="col-md-6">
					<div class="input-group">
						<input type="text" class="form-control price-In numberonly price_single_supply" name="price_single_supply" value="'.$clsISO->formatPrice($oneItem['price_single_supply']).'" placeholder="0.00">
						<span class="input-group-addon">'.$clsISO->getRate().'</span>
					</div>
				</div>
			</div>
		</div>';
	}
	$smarty->assign('htmlPriceTable', $htmlPriceTable);
	
	// Returtn
	$smarty->assign('core', $core);
	$html = $clsISO->build('_ajax.departure_date.tpl');
	
	$callback = "";
	echo @json_encode(array(
		'html' => $html,
		'callback' => $callback
	)); die();
}
function default_delete_departure(){
	global $smarty, $core, $dbconn, $_LANG_ID, $clsConfiguration,$clsISO,$package_id;
	global $adult_type_id,$child_type_id,$infant_type_id;
	
	$clsTourStartDate = new TourStartDate();
	$openFrom  = Input::post('openFrom', "general");
	$tour_start_date_id = (int) Input::post('tour_start_date_id', 0);
	
	if($clsTourStartDate->deleteOne($tour_start_date_id)){
		$msg = '_success';
	}else{
		$msg = '_error';
	}
	echo @json_encode(array(
		'msg' => $msg
	)); die();
}
function default_pop_save_departure_date(){
	global $smarty, $core, $dbconn, $_LANG_ID, $clsConfiguration,$clsISO,$package_id;
	global $adult_type_id,$child_type_id,$infant_type_id;
	$clsTour = new Tour();
	$clsTourOption = new TourOption();
	$clsTourProperty = new TourProperty();
	$clsTourStartDate = new TourStartDate();
	#
	$tour_id = (int) Input::post('tour_id', 0);
	$openFrom  = Input::post('openFrom', "general");
	$tour_start_date_id = Input::post('tour_start_date_id', 0);
	
	$ruler_type = (int) Input::post('ruler_type',0);
	$departure_type = (int) Input::post('departure_type',0);
	$time_for_payment = (int) Input::post('time_for_payment',0);
	$price_type = (int) Input::post('price_type',0);
	$allotment = Input::post('allotment','');
	$deposit = Input::post('deposit',0);
	$is_last_hour = Input::post('is_last_hour',0);
	if($ruler_type == 1){
		$weekdays = Input::post('weekdays');
		$start_date = Input::post('start_date');
		$due_date = Input::post('due_date');
		$start_time = $clsISO->convertTextToTime2($start_date);
		$due_time = $clsISO->convertTextToTime2($due_date, "23:59:59");
		
		
		
		if($start_time > $due_time){
			echo '_invalid';
			die();
		} else {
			$valid = true;
			$cond = "is_trash=0 and is_single='0' and tour_id='{$tour_id}'";
			if($tour_start_date_id > 0) $cond.= " and tour_start_date_id<>'{$tour_start_date_id}'";
			$list_check = $clsTourStartDate->getAll($cond, "start_date,end_date,weekdays");
			
			if(!empty($list_check)){
				foreach($list_check as $key => $val){
					$start_date_in = $val['start_date'];
					$end_date_in = $val['end_date'];
					$weekdays_in = $val['weekdays'];
					$weekdays_in_check = json_decode($val['weekdays'],true);
					
					if($start_time <= $end_date_in && $due_time <= $end_date_in){
						if(!empty($weekdays)){
							foreach($weekdays as $we){
								if(in_array($we,$weekdays_in_check)){
									$valid = false;
									break;
								}
							}
						}
					}elseif($start_time <= $end_date_in && $due_time > $end_date_in){
						$start_time=$end_date_in+1;
					}
				}
			}
			if($valid==false){
				echo '_invalid';
				die();
			}
		}
	} else {
		$weekdays = array();
		$date_id = Input::post('date_id', 0);
	}
	
	
	
	$price = array();
	if($price_type==1){
		$adult = Input::post('adult', array());
		
		$child = Input::post('child', array());
		$infant = Input::post('infant', array());
		$price[$adult_type_id] = $adult;
		$price[$child_type_id] = $child;
		$price[$infant_type_id] = $infant;
	}
	$price_single_supply = Input::post('price_single_supply',0);
	#
	$options = array('is_active' => 1);
	if($ruler_type == 1){
		$options['is_single'] = 0;
		$options['start_date'] = $start_time;
		$options['end_date'] = $due_time;
	} else if($ruler_type==2){
		$options['is_single'] = 1; 
		$options['start_date'] = $clsISO->convertTextToTime2($date_id, "00:00:00");
		$options['end_date'] = $clsISO->convertTextToTime2($date_id, "23:59:59");
	}
	if($is_last_hour==1){
		$open_sale_date = Input::post('open_sale_date',0);
		$close_sale_date = Input::post('close_sale_date',0);
		$options['is_last_hour'] = $is_last_hour;
		$options['open_sale_date'] = $clsISO->convertTextToTime2($open_sale_date, "00:00:00");
		$options['close_sale_date'] = $clsISO->convertTextToTime2($close_sale_date, "23:59:59");
	}else{
		$options['is_last_hour'] = $is_last_hour;
		$options['open_sale_date'] = 0;
		$options['close_sale_date'] = 0;
	}
	
	if($allotment != ''){
		$options['allotment'] = str_replace('.','',$allotment);
	}else{
		$options['allotment'] = null;
	}
	
	
	$msg = '_error';
	if($tour_start_date_id == 0){
		$tour_start_date_id = $clsTourStartDate->getMaxId();
		//$clsTourStartDate->SetDebug(true);
		if($clsTourStartDate->insert(array_merge(array(
			'tour_start_date_id' => $tour_start_date_id,
			'tour_id' => $tour_id,
			'user_id' => $core->_USER['user_id'],
			'user_id_update' => $core->_USER['user_id'],
			'ruler_type' => $ruler_type,
			'departure_type' => $departure_type,
			'price_type' => $price_type,
			'price' => $price?str_replace('.','',json_encode($price)):'' ,
			'weekdays' => $weekdays?json_encode($weekdays):'',
			'time_for_payment' => intval($time_for_payment),
			'price_single_supply' => str_replace('.','',$price_single_supply),
			'deposit' => str_replace('.','',$deposit),
			'reg_date' => time(),
			'upd_date' => time(),
		), $options))){
			$msg = '_success';
		}
	} else {
		if($ruler_type == 2){
			$start_date=$clsTourStartDate->getOneField('start_date',$tour_start_date_id);
			$start_date_check=$clsISO->convertTextToTime2($date_id, "00:00:00");
			if($start_date==$start_date_check){
				if($clsTourStartDate->update($tour_start_date_id, array_merge(array(
					'user_id_update' => $core->_USER['user_id'],
					'ruler_type' => $ruler_type,
					'departure_type' => $departure_type,
					'price_type' => $price_type,
					'price' => $price?str_replace('.','',json_encode($price)):'' ,
					'weekdays' => $weekdays?json_encode($weekdays):'',
					'time_for_payment' => intval($time_for_payment),
					'price_single_supply' => $clsISO->processSmartNumber($price_single_supply),
					'deposit' => $clsISO->processSmartNumber($deposit),
					'allotment' => $clsISO->processSmartNumber($allotment),
					'upd_date' => time(),
				), $options))){
					$msg = '_success';
				}
			}else{
				$tour_start_date_id = $clsTourStartDate->getMaxId();
				//$clsTourStartDate->SetDebug(true);
				if($clsTourStartDate->insert(array_merge(array(
					'tour_start_date_id' => $tour_start_date_id,
					'tour_id' => $tour_id,
					'user_id' => $core->_USER['user_id'],
					'user_id_update' => $core->_USER['user_id'],
					'ruler_type' => $ruler_type,
					'departure_type' => $departure_type,
					'price_type' => $price_type,
					'price' => $price?str_replace('.','',json_encode($price)):'' ,
					'weekdays' => $weekdays?json_encode($weekdays):'',
					'time_for_payment' => intval($time_for_payment),
					'price_single_supply' => $clsISO->processSmartNumber($price_single_supply),
					'deposit' => $clsISO->processSmartNumber($deposit),
					'allotment' => $clsISO->processSmartNumber($allotment),
					'reg_date' => time(),
					'upd_date' => time(),
				), $options))){
					$msg = '_success';
				}
			}
			
		} else {
			if($clsTourStartDate->update($tour_start_date_id, array_merge(array(
				'user_id_update' => $core->_USER['user_id'],
				'ruler_type' => $ruler_type,
				'departure_type' => $departure_type,
				'price_type' => $price_type,
				'price' => $price?str_replace('.','',json_encode($price)):'',
				'weekdays' => json_encode($weekdays),
				'time_for_payment' => intval($time_for_payment),
				'price_single_supply' => $clsISO->processSmartNumber($price_single_supply),
				'deposit' => $clsISO->processSmartNumber($deposit),
				'allotment' => $clsISO->processSmartNumber($allotment),
				'upd_date' => time(),
			), $options))){
				$msg = '_success';
			}
		}
	}
	// Return
	echo $msg; die();
}
?>