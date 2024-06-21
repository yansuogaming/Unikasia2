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
		$listItem = $clsTourStartDate->getAll("is_single='1' and tour_id='{$tour_id}' and start_date='{$i}'");
		if(empty($listItem)){
			$listItem = $clsTourStartDate->getAll("is_single='0' and weekdays like '%".$Day."%' and tour_id='{$tour_id}' and start_date<='{$i}' and end_date>='{$i}'");

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
				'is_active' => $listItem[0]['is_active'],
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
	$lstTourVisitorType  = $clsTourProperty->getAll("is_trash=0 and type='VISITORTYPE' order by tour_property_id ASC",$clsTourProperty->pkey);
	
	$oneTour = $clsTour->getOne($tour_id, "tour_option,adult_group_size,child_group_size,infant_group_size,visitorage_child,visitorage_infant,visitorheight_child,visitorheight_infant");
	$lstOption = !empty($oneTour['tour_option']) 
		? $clsISO->getArrayByTextSlash($oneTour['tour_option']) : array();
	$lstAdultSize = !empty($oneTour['adult_group_size']) 
		? $clsISO->getArrayByTextSlash($oneTour['adult_group_size']) : array();
	/*$lstChildSize = !empty($oneTour['child_group_size']) 
		? $clsISO->getArrayByTextSlash($oneTour['child_group_size']) : array();
	$lstInfantSize = !empty($oneTour['infant_group_size']) 
		? $clsISO->getArrayByTextSlash($oneTour['infant_group_size']) : array();*/
	$lstChildSize = !empty($oneTour['child_group_size']) 
	? explode("|",trim($oneTour['child_group_size'],"|")) : array();
	$lstInfantSize = !empty($oneTour['infant_group_size']) 
	? explode("|",trim($oneTour['infant_group_size'],"|")) : array(); 
	
	$total_adult_group_size = !empty($lstAdultSize) ? count($lstAdultSize) : 0;
	$total_child_group_size = !empty($lstChildSize) ? count($lstChildSize) : 0;
	$total_infant_group_size = !empty($lstInfantSize) ? count($lstInfantSize) : 0;
	
	$visitorage_child = !empty($oneTour['visitorage_child'])? $clsISO->getArrayByTextSlash($oneTour['visitorage_child']) : array();
	$visitorage_infant = !empty($oneTour['visitorage_infant'])? $clsISO->getArrayByTextSlash($oneTour['visitorage_infant']) : array();
	$total_visitorage_child = !empty($visitorage_child) ? count($visitorage_child) : 0;
	$total_visitorage_infant = !empty($visitorage_infant) ? count($visitorage_child) : 0;
	
	$visitorheight_child = !empty($oneTour['visitorheight_child'])? $clsISO->getArrayByTextSlash($oneTour['visitorheight_child']) : array();
	$visitorheight_infant = !empty($oneTour['visitorheight_infant'])? $clsISO->getArrayByTextSlash($oneTour['visitorheight_infant']) : array();
	$total_visitorheight_child = !empty($visitorheight_child) ? count($visitorheight_child) : 0;
	$total_visitorheight_infant = !empty($visitorheight_infant) ? count($visitorheight_infant) : 0;
	
	$htmlPriceTable = '';
	if(!empty($lstOption)){
		$price = $oneItem['price'];
		$price_arr = !empty($price) ? @json_decode($price, true) : array();
		$price_type_rate = $oneItem['price_type_rate'];
		$price_type_rate_arr = !empty($price_type_rate) ? @json_decode($price_type_rate, true) : array();
		foreach($lstOption as $key => $val){
			$htmlPriceTable .= '<div class="table-wrapper mb-3 w-100 radius-3">
				<table class="table table-bordered mb-0 overflow-hidden radius-3">
				<tr class="bg-gray">
					<td colspan="4" width="30%">'.$clsTourOption->getTitle($val).'</td>
				</tr>';
			foreach($lstTourVisitorType as $a=>$b){
				if($b[$clsTourProperty->pkey] == $adult_type_id && $total_adult_group_size > 0){
					$htmlPriceTable .= '<tr>
						<td rowspan="'.($total_adult_group_size+1).'" width="25%">
							'.$clsTourProperty->getTitle($b[$clsTourProperty->pkey]).'
						</td>
					</tr>';
					foreach($lstAdultSize as $k1 => $v1){
						$price_adult = isset($price_arr[$adult_type_id][$val][$v1]) ? $price_arr[$adult_type_id][$val][$v1] : "";
						$htmlPriceTable .= '<tr>
							<td width="25%" colspan="2">'.$clsTourOption->getTitle($v1).'</td>
							<td>
								<div class="input-group">
									<input type="text" class="form-control price-In numberonly" name="adult['.$val.']['.$v1.']" value="'.$price_adult.'" placeholder="0" />
									<span class="input-group-addon">'.$clsISO->getRate().'</span>
								</div>
							</td>
						</tr>';
						unset($price_adult);
					}
				} else if($b[$clsTourProperty->pkey] == $child_type_id && $total_child_group_size > 0){
					$child_group_size = !empty($oneTour['child_group_size']) ? $clsISO->getArrayByTextSlash($oneTour['child_group_size']) : array();
					$total_child_group_size = !empty($child_group_size) ? count($child_group_size) : 0;
					$htmlPriceTable .= '<tr>
						<td rowspan="'.($total_child_group_size+1).'" width="25%">
							'.$clsTourProperty->getTitle($b[$clsTourProperty->pkey]).'
						</td>
					</tr>';
					
					foreach($lstChildSize as $k2 => $v2){
						if(count($visitorage_child) > 0){
							$oneAge = $clsTourOption->getOne($visitorage_child[$k2],'title');
							if($oneAge){
								$title_age = $oneAge['title'];
								$listChildSizeAge = explode(",",$v2);
								for($i=0; $i<count($listChildSizeAge);$i++){
									$htmlPriceTable .= '<tr>';
										if($i == 0){
											$htmlPriceTable .='<td class="text-left age" rowspan="'.count($listChildSizeAge).'">'.$title_age.'</td>';
										}
									$price_child = isset($price_arr[$child_type_id][$val][$visitorage_child[$k2]][$listChildSizeAge[$i]]) ? $price_arr[$child_type_id][$val][$visitorage_child[$k2]][$listChildSizeAge[$i]] : "";
									$htmlPriceTable .='
										<td class="text-left">'.$clsTourOption->getTitle($listChildSizeAge[$i]).'</td>
										<td class="text-left">
											<div class="input-group">
											<input type="text" class="form-control price_child price-In numberonly" name="child['.$val.']['.$listChildSizeAge[$i].']" placeholder="0" value="'.$price_child.'" tour_visitor_age_type_id="'.$visitorage_child[$k2].'" tour_visitor_height_type_id="0" tour_class_id="'.$val.'" tour_number_group_id="'.$listChildSizeAge[$i].'" />';	

									$price_type_rate = isset($price_type_rate_arr[$val][$visitorage_child[$k2]][$listChildSizeAge[$i]]) ? $price_type_rate_arr[$val][$visitorage_child[$k2]][$listChildSizeAge[$i]] : 0;
									$htmlPriceTable .='<span class="input-group-addon select_group_addon">
												<select class="price_type_departure price_type_departure_child" name="price_type_rate['.$val.']['.$listChildSizeAge[$i].']" tour_visitor_age_type_id="'.$visitorage_child[$k17].'" tour_visitor_height_type_id="0" '.$price_type_rate.' style="height:100%">
													<option value="0" '.(($price_type_rate == 0)?"selected":"").' >'.$clsISO->getRate().'</option>
													<option value="1" '.(($price_type_rate == 1)?"selected":"").' >%</option>
												</select>
											</span>';
									unset($price_type_rate,$price_child);

									$htmlPriceTable .='
										</div>	
									</td></tr>';
								}
							}												
							unset($oneAge);
						}elseif(count($visitorheight_child) > 0){
							$oneHeight = $clsTourOption->getOne($visitorheight_child[$k2],'title');
							if($oneHeight){
								$title_height = $oneHeight['title'];
								$listChildSizeHeight = explode(",",$v2);
								for($i=0; $i<count($listChildSizeHeight);$i++){
									$htmlPriceTable .= '<tr>';
										if($i == 0){
											$htmlPriceTable .='<td class="text-left height" rowspan="'.count($listChildSizeHeight).'">'.$title_height.'</td>';
										}
									$price_child = isset($price_arr[$child_type_id][$val][$visitorheight_child[$k2]][$listChildSizeHeight[$i]]) ? $price_arr[$child_type_id][$val][$visitorheight_child[$k2]][$listChildSizeHeight[$i]] : "";
									$htmlPriceTable .='
										<td class="text-left">'.$clsTourOption->getTitle($listChildSizeHeight[$i]).'</td>
										<td class="text-left">
											<div class="input-group">
											<input type="text" class="form-control price_child price-In numberonly" name="child['.$val.']['.$listChildSizeHeight[$i].']" placeholder="0" value="'.$price_child.'" tour_visitor_height_type_id="'.$visitorheight_child[$k2].'" tour_visitor_age_type_id="0" tour_class_id="'.$val.'" tour_number_group_id="'.$listChildSizeHeight[$i].'" />';	

									$price_type_rate = isset($price_type_rate_arr[$val][$visitorheight_child[$k2]][$listChildSizeHeight[$i]]) ? $price_type_rate_arr[$val][$visitorheight_child[$k2]][$listChildSizeHeight[$i]] : 0;
									$htmlPriceTable .='<span class="input-group-addon select_group_addon">
												<select class="price_type_departure price_type_departure_child" name="price_type_rate['.$val.']['.$listChildSizeHeight[$i].']" tour_visitor_height_type_id="'.$visitorheight_child[$k17].'" tour_visitor_age_type_id="0" '.$price_type_rate.' style="height:100%">
													<option value="0" '.(($price_type_rate == 0)?"selected":"").' >'.$clsISO->getRate().'</option>
													<option value="1" '.(($price_type_rate == 1)?"selected":"").' >%</option>
												</select>
											</span>';
									unset($price_type_rate,$price_child);

									$htmlPriceTable .='
										</div>	
									</td></tr>';
								}
							}												
							unset($oneHeight);
						}	
						
						/*$price = isset($price_arr[$adult_type_id][$val][$v1]) ? $price_arr[$child_type_id][$val][$v2] : "";
						$htmlPriceTable .= '<tr>
							<td width="25%">'.$clsTourOption->getTitle($v2).'</td>
							<td>
								<div class="input-group">
									<input type="text" class="form-control price-In numberonly" name="child['.$val.']['.$v2.']" placeholder="0.00" value="'.$price.'" />
									<span class="input-group-addon">'.$clsISO->getRate().'</span>
								</div>
							</td>
						</tr>';*/
					}
				} else if($b[$clsTourProperty->pkey] == $infant_type_id  && $total_infant_group_size > 0){
					$infant_group_size = !empty($oneTour['infant_group_size']) ? $clsISO->getArrayByTextSlash($oneTour['infant_group_size']) : array();	
					$total_infant_group_size = !empty($infant_group_size) ? count($infant_group_size) : 0;
					$htmlPriceTable .= '<tr>
						<td rowspan="'.($total_infant_group_size+1).'" width="25%">
							'.$clsTourProperty->getTitle($b[$clsTourProperty->pkey]).'
						</td>
					</tr>';
					foreach($lstInfantSize as $k3 => $v3){
						if(count($visitorage_infant) > 0){
							$oneAge = $clsTourOption->getOne($visitorage_infant[$k3],'title');
							if($oneAge){
								$title_age = $oneAge['title'];
								$listInfantSizeAge = explode(",",$v3);
	//							var_dump($listInfantSizeAge);
								for($i=0;$i<count($listInfantSizeAge);$i++){
									$price_infant = isset($price_arr[$infant_type_id][$val][$visitorage_infant[$k3]][$listInfantSizeAge[$i]]) ? $price_arr[$infant_type_id][$val][$visitorage_infant[$k3]][$listInfantSizeAge[$i]] : "";
									$htmlPriceTable .= '<tr>';
										if($i == 0){
											$htmlPriceTable .='<td class="text-left age" rowspan="'.count($listInfantSizeAge).'">'.$title_age.'</td>';
										}										

									$htmlPriceTable .= '
										<td class="text-left">'.$clsTourOption->getTitle($listInfantSizeAge[$i]).'</td>
										<td class="text-left">
											<div class="input-group">
												<input type="text" class="form-control price-In price_infant numberonly" name="infant['.$val.']['.$listInfantSizeAge[$i].']" placeholder="0" value="'.$price_infant.'" tour_visitor_age_type_id="'.$visitorage_infant[$k3].'" tour_visitor_height_type_id="0" tour_class_id="'.$val.'" tour_number_group_id="'.$listInfantSizeAge[$i].'" />';

									$price_type_rate = isset($price_type_rate_arr[$val][$visitorage_infant[$k3]][$listInfantSizeAge[$i]]) ? $price_type_rate_arr[$val][$visitorage_infant[$k3]][$listInfantSizeAge[$i]] : 0;
									$htmlPriceTable .='<span class="input-group-addon select_group_addon">
												<select class="price_type_departure price_type_departure_infant" name="price_type_rate['.$val.']['.$listInfantSizeAge[$i].']" tour_visitor_age_type_id="'.$visitorage_infant[$k3].'" tour_visitor_height_type_id="0" '.$price_type_rate.' style="height:100%">
													<option value="0" '.(($price_type_rate == 0)?"selected":"").' >'.$clsISO->getRate().'</option>
													<option value="1" '.(($price_type_rate == 1)?"selected":"").' >%</option>
												</select>
											</span>';
									unset($price_type_rate,$price_infant);
									$htmlPriceTable .='</div>
										</td>
									</tr>';	
								}
							}
							unset($oneAge,$age_infant);
						}elseif(count($visitorheight_infant) > 0){
							$oneHeight = $clsTourOption->getOne($visitorheight_infant[$k3],'title');
							if($oneHeight){
								$title_height = $oneHeight['title'];
								$listInfantSizeAge = explode(",",$v3);
	//							var_dump($listInfantSizeAge);
								for($i=0;$i<count($listInfantSizeAge);$i++){
									$price_infant = isset($price_arr[$infant_type_id][$val][$visitorheight_infant[$k3]][$listInfantSizeAge[$i]]) ? $price_arr[$infant_type_id][$val][$visitorheight_infant[$k3]][$listInfantSizeAge[$i]] : "";
									$htmlPriceTable .= '<tr>';
										if($i == 0){
											$htmlPriceTable .='<td class="text-left height" rowspan="'.count($listInfantSizeAge).'">'.$title_height.'</td>';
										}										

									$htmlPriceTable .= '
										<td class="text-left">'.$clsTourOption->getTitle($listInfantSizeAge[$i]).'</td>
										<td class="text-left">
											<div class="input-group">
												<input type="text" class="form-control price-In price_infant numberonly" name="infant['.$val.']['.$listInfantSizeAge[$i].']" placeholder="0" value="'.$price_infant.'" tour_visitor_height_type_id="'.$visitorheight_infant[$k3].'" tour_visitor_age_type_id="0" tour_class_id="'.$val.'" tour_number_group_id="'.$listInfantSizeAge[$i].'" />';

									$price_type_rate = isset($price_type_rate_arr[$val][$visitorheight_infant[$k3]][$listInfantSizeAge[$i]]) ? $price_type_rate_arr[$val][$visitorheight_infant[$k3]][$listInfantSizeAge[$i]] : 0;
									$htmlPriceTable .='<span class="input-group-addon select_group_addon">
												<select class="price_type_departure price_type_departure_infant" name="price_type_rate['.$val.']['.$listInfantSizeAge[$i].']" tour_visitor_height_type_id="'.$visitorheight_infant[$k3].'" tour_visitor_age_type_id="0" '.$price_type_rate.' style="height:100%">
													<option value="0" '.(($price_type_rate == 0)?"selected":"").' >'.$clsISO->getRate().'</option>
													<option value="1" '.(($price_type_rate == 1)?"selected":"").' >%</option>
												</select>
											</span>';
									unset($price_type_rate,$price_infant);
									$htmlPriceTable .='</div>
										</td>
									</tr>';	
								}
							}
							unset($oneHeight);
						}
						/*$price = isset($price_arr[$adult_type_id][$val][$v1]) ? $price_arr[$infant_type_id][$val][$v3] : "";
						$htmlPriceTable .= '<tr>
							<td width="25%">'.$clsTourOption->getTitle($v3).'</td>
							<td>
								<div class="input-group">
									<input type="text" class="form-control price-In numberonly" name="infant['.$val.']['.$v3.']" placeholder="0.00" value="'.$price.'" />
									<span class="input-group-addon">'.$clsISO->getRate().'</span>
								</div>
							</td>
						</tr>';*/
					}
				}
			}	
			$htmlPriceTable .= '</table></div>';
		}
		$htmlPriceTable .= '<div class="price_single_supply w-100">
			<div class="row">
				<label class="col-form-label col-md-6 text-left">'.$core->get_Lang('Single-Room Addition').'</label>
				<div class="col-md-6">
					<div class="input-group">
						<input type="text" class="form-control price-In numberonly price_single_supply" name="price_single_supply" value="'.$clsISO->formatPrice($oneItem['price_single_supply']).'" placeholder="0">
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
	$is_active = Input::post('is_active',1);
	if($ruler_type == 1){
		$weekdays = Input::post('weekdays');
		$start_date = Input::post('start_date');
		$due_date = Input::post('due_date');
		$start_time = $clsISO->convertTextToTime2($start_date);
		$due_time = $clsISO->convertTextToTime2($due_date, "23:59:59");
		if($start_time > $due_time){
			echo '_invalid|'.$core->get_Lang('Invalid period');
			die();
		} 
	} else {
		$weekdays = array();
		$date_id = Input::post('date_id', 0);
		$start_time = $clsISO->convertTextToTime2($date_id, "00:00:00");
		$due_time = $clsISO->convertTextToTime2($date_id, "23:59:59");
		if($date_id > 0){
			$weekdays[] = date("D",$start_time);
		}		
	}
	//check validate time
	$valid = true;
	$cond = "is_trash=0 and tour_id='{$tour_id}'";
	if($tour_start_date_id > 0){
		$cond.= " and tour_start_date_id<>'{$tour_start_date_id}'";
	}
	$list_check = $clsTourStartDate->getAll($cond, "start_date,end_date,weekdays");
	
	if(!empty($list_check)){
		foreach($list_check as $key => $val){
			$start_date_in = $val['start_date'];
			$end_date_in = $val['end_date'];
			$weekdays_in_check = json_decode($val['weekdays'],true);
			
			if($start_time <= $end_date_in && $due_time >= $start_date_in){//TH 2 khoảng thời gian có giao nhau
				if($start_time <= $end_date_in && $due_time <= $end_date_in){//TH khoảng thời gian cần check < thời gian kết thúc
					if(!empty($weekdays)){
						foreach($weekdays as $we){
							if(in_array($we,$weekdays_in_check)){//TH kiểm tra trùng ngày áp dụng
								$valid = false;
								//lấy thời gian bắt đầu và kết thúc bị trùng
								if($start_time <= $start_date_in){
									$start_msg = $start_date_in;
								}else{
									$start_msg = $start_time;
								}
								if($due_time <= $end_date_in){
									$end_msg = $due_time;
								}else{
									$end_msg = $end_date_in;
								}
								break;
							}
						}
					}
				}elseif($start_time <= $end_date_in && $due_time > $end_date_in){//TH khoảng thời gian cần check > thời gian kết thúc 
					if($ruler_type ==1){//TH thời gian cần check là khoảng thời gian
						$start_time=$end_date_in+1;	
					}				
				}
			}			
			unset($weekdays_in_check);
		}
	}
	if($valid==false){
		$start_msg = date("d/m/Y",$start_msg);
		$end_msg = date("d/m/Y",$end_msg);
		if($start_msg == $end_msg){
			$msg_valid = $core->get_Lang("Overlapping time")." (".$start_msg.")";
		}else{
			$msg_valid = $core->get_Lang("Overlapping time")." (".$start_msg." - ".$end_msg.")";
		}
		echo '_invalid|'.$msg_valid;
		die();
	}
	/* end check validate time*/
	
	$price = array();
	if($price_type==1){
		$data_price_child = Input::post('data_price_child', array());
		$data_price_child = json_decode(html_entity_decode($data_price_child));
		$data_price_infant = Input::post('data_price_infant', array());
		$data_price_infant = json_decode(html_entity_decode($data_price_infant));
		$adult = Input::post('adult', array());
		
		$child = Input::post('child', array());
		$infant = Input::post('infant', array());
		$price[$adult_type_id] = $adult;
		
		$child = $price_type_rate = $infant = [];
		foreach($data_price_child as $key => $value){
			if($value->tour_visitor_age_type_id > 0){
				$child[$value->tour_class_id][$value->tour_visitor_age_type_id][$value->tour_number_group_id] = $value->price;
				$price_type_rate[$value->tour_class_id][$value->tour_visitor_age_type_id][$value->tour_number_group_id] = $value->price_type;
			}
			if($value->tour_visitor_height_type_id > 0){
				$child[$value->tour_class_id][$value->tour_visitor_height_type_id][$value->tour_number_group_id] = $value->price;
				$price_type_rate[$value->tour_class_id][$value->tour_visitor_height_type_id][$value->tour_number_group_id] = $value->price_type;
			}			
		}
		foreach($data_price_infant as $key => $value){
			if($value->tour_visitor_age_type_id > 0){
				$infant[$value->tour_class_id][$value->tour_visitor_age_type_id][$value->tour_number_group_id] = $value->price;
				$price_type_rate[$value->tour_class_id][$value->tour_visitor_age_type_id][$value->tour_number_group_id] = $value->price_type;
			}
			if($value->tour_visitor_height_type_id > 0){
				$infant[$value->tour_class_id][$value->tour_visitor_height_type_id][$value->tour_number_group_id] = $value->price;
				$price_type_rate[$value->tour_class_id][$value->tour_visitor_height_type_id][$value->tour_number_group_id] = $value->price_type;
			}			
		}
		$price[$child_type_id] = $child;
		$price[$infant_type_id] = $infant;
	}
	$price_single_supply = Input::post('price_single_supply',0);
	#
	$options = array('is_active' => $is_active);
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
		if($clsTourStartDate->insert(array_merge(array(
			'tour_start_date_id' => $tour_start_date_id,
			'tour_id' => $tour_id,
			'user_id' => $core->_USER['user_id'],
			'user_id_update' => $core->_USER['user_id'],
			'ruler_type' => $ruler_type,
			'departure_type' => $departure_type,
			'price_type' => $price_type,
			'price' => $price?str_replace('.','',json_encode($price)):'' ,
			'price_type_rate' => $price_type_rate?json_encode($price_type_rate):'',
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
					'price_type_rate' => $price_type_rate?json_encode($price_type_rate):'',
					'weekdays' => $weekdays?json_encode($weekdays):'',
					'time_for_payment' => intval($time_for_payment),
					'price_single_supply' => $clsISO->processSmartNumber($price_single_supply),
					'deposit' => $clsISO->processSmartNumber($deposit),
					'upd_date' => time(),
				), $options))){
					$msg = '_success';
				}
			}else{
				$tour_start_date_id = $clsTourStartDate->getMaxId();
				if($clsTourStartDate->insert(array_merge(array(
					'tour_start_date_id' => $tour_start_date_id,
					'tour_id' => $tour_id,
					'user_id' => $core->_USER['user_id'],
					'user_id_update' => $core->_USER['user_id'],
					'ruler_type' => $ruler_type,
					'departure_type' => $departure_type,
					'price_type' => $price_type,
					'price' => $price?str_replace('.','',json_encode($price)):'' ,
					'price_type_rate' => $price_type_rate?json_encode($price_type_rate):'',
					'weekdays' => $weekdays?json_encode($weekdays):'',
					'time_for_payment' => intval($time_for_payment),
					'price_single_supply' => $clsISO->processSmartNumber($price_single_supply),
					'deposit' => $clsISO->processSmartNumber($deposit),
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
				'price_type_rate' => json_encode($price_type_rate),
				'weekdays' => json_encode($weekdays),
				'time_for_payment' => intval($time_for_payment),
				'price_single_supply' => $clsISO->processSmartNumber($price_single_supply),
				'deposit' => $clsISO->processSmartNumber($deposit),
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