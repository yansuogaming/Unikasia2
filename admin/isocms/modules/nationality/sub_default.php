<?php
function default_default(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod , $_LANG_ID, $act, $menu_current, $current_page,$oneSetting,$clsConfiguration;
	global $core, $clsModule, $clsButtonNav,$oneSetting, $dbconn, $clsISO;
	$assign_list["clsModule"] = $clsModule;
	$user_id = $core->_USER['user_id'];
	$pUrl = '';
	#
	if(isset($_POST['filter'])&&$_POST['filter']=='filter'){
		if($_POST['keyword']!=''&&$_POST['keyword']!='testimonial title, intro'){
			$link .= '&keyword='.$_POST['keyword'];
		}
		if(isset($_POST['continent_id']) && !empty($_POST['continent_id'])){
			$link .= '&continent_id='.$_POST['continent_id'];
		}
		header('location: '.PCMS_URL.'/?mod='.$mod.$link);
	}
	
	$type_list = isset($_GET['type_list']) ? $_GET['type_list'] : '';
	$assign_list["type_list"] = $type_list;
	
	$classTable = "_Country";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey ;
	$assign_list["clsClassTable"] = $clsClassTable;
	$assign_list["pkeyTable"] = $pkeyTable;
	
	/*List all item*/
	$cond = "1=1";
	
	$assign_list["pUrl"] = $pUrl;
	#Filter By Keyword
	if(isset($_GET['keyword']) && $_GET['keyword']!=''){
		$keyword = $core->replaceSpace($_GET['keyword']);
		$cond .= " and slug like '%".$keyword."%'";
		$assign_list["keyword"] = $_GET['keyword'];
	}
	$cond2 = $cond;
	if($type_list=='Active'){
		$cond .= " and is_trash=0";
	}
	/*if($type_list=='Trash'){
		$cond .= " and is_trash=1";
	}*/
	$orderBy = " order_no asc";
	#-------Page Divide---------------------------------------------------------------
	$recordPerPage 	= 20;
	$currentPage = isset($_GET["page"])? $_GET["page"] : 1;
	$start_limit = ($currentPage-1)*$recordPerPage;
	$limit = " limit $start_limit,$recordPerPage";
	$lstAllItem = $clsClassTable->getAll($cond);
	$totalRecord = (is_array($lstAllItem)&&count($lstAllItem)>0)?count($lstAllItem):0;
	$totalPage = ceil($totalRecord / $recordPerPage);
	$assign_list['totalRecord'] = $totalRecord;
	$assign_list['recordPerPage'] = $recordPerPage;
	$assign_list['totalPage'] = $totalPage;
	$assign_list['currentPage'] = $currentPage;
	$listPageNumber =  array();
	for ($i=1; $i<=$totalPage; $i++){
		$listPageNumber[] = $i;
	}
	$assign_list['listPageNumber'] = $listPageNumber;
	$query_string = $_SERVER['QUERY_STRING'];
	$lst_query_string = explode('&',$query_string);
	$link_page_current = '';
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
		if($tmp[0]!='page'&&$tmp[0]!='type_list')
			$link_page_current_2 .= ($i==0)?'?'.$lst_query_string[$i]:'&'.$lst_query_string[$i];
	}
	$assign_list['link_page_current_2'] = $link_page_current_2;
	#-------End Page Divide-----------------------------------------------------------
	$sql = "SELECT country_id,is_trash FROM _country ORDER BY ".$orderBy.$limit;
	
	//print_r($cond); die();
	$allItem = $clsClassTable->getAll($cond . " order by " . $orderBy . $limit);
	$assign_list['allItem'] = $allItem;
	$allTrash =  $clsClassTable->getAll("1=1 and is_trash=1",$clsClassTable->pkey);

	$assign_list["number_trash"] =$allTrash?count($allTrash):0;
	$allUnTrash =  $clsClassTable->getAll("1=1 and is_trash=0",$clsClassTable->pkey);
	$assign_list["number_item"] = $allUnTrash!=''?count($allUnTrash):0;
	$allAll =  $clsClassTable->getAll("1=1",$clsClassTable->pkey);
	$assign_list["number_all"] = $allAll!=''?count($allAll):0;
	#----
	if(isset($_POST['submit'])){
		if(isset($_POST['submit']) && $_POST['submit']=='SiteUpdateDestinationPage'){
			foreach($_POST as $key=>$val){
				$tmp = explode('-',$key);
				if($tmp[0]=='iso'){
					$clsConfiguration->updateValue($tmp[1],$val);
				}
			}
			header('location: '.PCMS_URL.'/?mod='.$mod.'&message=UpdateSuccess');
		}
	}
}
function default_ajUpdPosSortCountry(){
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod , $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
	global $clsConfiguration;
	#
	$clsCountry = new Country();
	$order = $_POST['order'];
	$currentPage 	= $_POST['currentPage'];
	$recordPerPage 	= $_POST['recordPerPage'];
	//var_dump($currentPage.'xxxxxx'.$recordPerPage);die();
	foreach($order as $key=>$val){
		$key = (($currentPage-1)*$recordPerPage + $key + 1);
		$clsCountry->updateOne($val,"order_no='".$key."'");	
	}
}
function default_edit(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod , $_LANG_ID, $act, $menu_current, $current_page;
	global $core, $clsModule, $clsButtonNav,$dbconn, $clsISO, $dbconn, $clsConfiguration;
	$assign_list["clsModule"] = $clsModule;
	$user_id = $core->_USER['user_id'];
	$assign_list["msg"] = isset($_GET['message'])?$_GET['message']:'';
	#
	$sql = "SELECT continent_id FROM ".DB_PREFIX."continent WHERE is_trash=0 order by order_no desc";
	$lstContinent = $dbconn->GetAll($sql);
	$assign_list["lstContinent"] = $lstContinent;
	
	$continent_id = isset($_GET['continent_id'])?$_GET['continent_id']:'';
	$assign_list["continent_id"] = $continent_id;
	#
	$classTable = "_Country";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey ;
	$assign_list["clsClassTable"] = $clsClassTable;
	#
	$string = isset($_GET[$pkeyTable])? ($_GET[$pkeyTable]) : '';
	$pvalTable = intval($core->decryptID($string));
	$assign_list['pvalTable'] = $pvalTable;
	$oneItem = $clsClassTable->getOne($pvalTable);
	$assign_list["oneItem"] = $oneItem;
	#-------------Update Config Meta

	/*if(($string!='' && $pvalTable==0) || $pvalTable==0){
		header('location:'.PCMS_URL.'/index.php?&mod='.$mod.'&message=notPermission');
	}*/
	#
	if(isset($_POST['submit']) && $_POST['submit'] =='Update'){
			
		if($pvalTable>0){
			$set = ""; $firstAdd = 0;
			foreach($_POST as $key=>$val){
				$tmp = explode('-',$key);
				if($tmp[0]=='iso'){
					if($firstAdd==0){
						$set .= $tmp[1]."='".addslashes($val)."'";
						$firstAdd = 1;
					}else{
						$set .= ",".$tmp[1]."='".addslashes($val)."'";
					}
				}
			}
			//$set .= ",user_id_update='".addslashes($core->_SESS->user_id)."'";
		//	$set .= ",upd_date='".time()."'";
			$set .= ",slug='".$core->replaceSpace($_POST['iso-title'])."'";
			
			if($clsClassTable->updateOne($pvalTable,$set)) {
				
				if($_POST['button']=='_EDIT'){
					header('location: '.PCMS_URL.'/?mod='.$mod.'&act=edit&country_id='.$_GET[$clsClassTable->pkey].'&message=updateSuccess');
				}else{
					header('location: '.PCMS_URL.'/?mod='.$mod.'&message=updateSuccess');
				}
			} else{
				header('location: '.PCMS_URL.'/?mod='.$mod.'&message=updateFailed');
			}
			
			
		}
		else{
			$listTable=$clsClassTable->getAll("1=1", $clsClassTable->pkey.",order_no");
			for ($i = 0; $i <= count($listTable); $i++) {
				$order_no=$listTable[$i]['order_no'] + 1;
				$clsClassTable->updateOne($listTable[$i][$clsClassTable->pkey],"order_no='".$order_no."'");
			}
			$value = ""; $firstAdd = 0; $field = "";
			foreach($_POST as $key=>$val){
				$tmp = explode('-',$key);
				if($tmp[0]=='iso'){
					if($firstAdd==0){
						$field .= $tmp[1];
						$value .= "'".addslashes($val)."'";
						$firstAdd = 1;
					}else{
						$field .= ','.$tmp[1];
						$value .= ",'".addslashes($val)."'";
					}
				}
			}
			#
			
			$max_id = $clsClassTable->getMaxId();
			$field .= ",first_update,last_update,slug,$clsClassTable->pkey,order_no";
			$value .= ",'".time()."','".time()."'";
			$value .= ",'".$core->replaceSpace($_POST['iso-title'])."','".$max_id."','1'";
			if($clsClassTable->insertOne($field,$value)){
				if ($_POST['button'] == '_EDIT') {
					header('location: '.PCMS_URL.'/?mod='.$mod.'&act='.$act.'&country_id='.$core->encryptID($max_id).'&continent_id='.$_POST['iso-continent_id'].'&message=updateSuccess');
				}else {
					header('location: '.PCMS_URL.'/?mod='.$mod.'&continent_id='.$_POST['iso-continent_id'].'&message=insertSuccess');
				}
			} else{
				header('location: '.PCMS_URL.'/?mod='.$mod.'&message=insertFailed');
			}
		}
	}
}
function default_trash(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$classTable = "_Country";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey ;

	$string = isset($_GET[$pkeyTable])? ($_GET[$pkeyTable]) : '';
	$pvalTable = intval($core->decryptID($string));
	$continent_id = isset($_GET['continent_id'])? $_GET['continent_id'] : "";
	#
	$pUrl = '';
	if(intval($continent_id)>0){
		$pUrl .= '&continent_id='.$continent_id;
	}
	if($pvalTable == ""){
		header('location: '.PCMS_URL.'/?mod='.$mod.$pUrl.'&message=notPermission');
	}
	if($clsClassTable->updateOne($pvalTable,"is_trash='1'")){
		header('location: '.PCMS_URL.'/?mod='.$mod.$pUrl.'&message=TrashSuccess');
	}
}
function default_restore(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$classTable = "_Country";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey ;

	$string = isset($_GET[$pkeyTable])? ($_GET[$pkeyTable]) : '';
	$pvalTable = intval($core->decryptID($string));
	$continent_id = isset($_GET['continent_id'])? $_GET['continent_id'] : "";
	
	$param_url = '';
	if(intval($continent_id)!=0){
		$param_url .= '&continent_id='.$continent_id;
	}
	
	if($pvalTable == "")
		header('location: '.PCMS_URL.'/?mod='.$mod.$param_url.'&message=notPermission');

	if($clsClassTable->updateOne($pvalTable,"is_trash='0'")){
		header('location: '.PCMS_URL.'/?mod='.$mod.$param_url.'&message=RestoreSuccess');
	}
}
function default_delete(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	$clsCruiseCat = new CruiseCat();
	#
	$classTable = "_Country";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey;
	
	$string = isset($_GET[$pkeyTable])? ($_GET[$pkeyTable]) : '';
	$pvalTable = intval($core->decryptID($string));
	$continent_id = isset($_GET['continent_id'])? $_GET['continent_id'] : "";
	
	$param_url = '';
	if(intval($continent_id)!=0){
		$param_url .= '&continent_id='.$continent_id;
	}
	if($string = '' && $pvalTable == 0)
		header('location: '.PCMS_URL.'/?mod='.$mod.'&message=notPermission');
		
	if(isset($_POST['agree']) && $_POST['agree']=='agree'){
		if($clsClassTable->doDelete($pvalTable)){
			header('location: '.PCMS_URL.'/?mod='.$mod.$param_url.'&message=DeleteSuccess');
		}
	}
}
function default_move(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$classTable = "Country";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey;
	#
	$pvalTable = isset($_GET[$pkeyTable])? ($_GET[$pkeyTable]) : '';
	$continent_id = isset($_GET['continent_id'])? $_GET['continent_id'] : "";
	$direct = isset($_GET['direct'])? $_GET['direct']:'';
	
	$one = $clsClassTable->getOne($pvalTable);
	$order_no = $one['order_no'];
	
	if(($string!='' && $pvalTable == 0) || $direct==''){
		header('location: '.PCMS_URL.'/?mod='.$mod);
	}
	
	$where = '1=1 and is_trash=0 ';
	$param_url = '';
	if(intval($continent_id)!=0){
		$where.=" and continent_id=".$continent_id;
		$param_url .= '&continent_id='.$continent_id;
	}
	if($direct=='movedown'){
		$lst = $clsClassTable->getAll($where." and order_no > $order_no order by order_no asc limit 0,1");
		$clsClassTable->updateOne($pvalTable,"order_no='".$lst[0]['order_no']."'");
		$clsClassTable->updateOne($lst[0][$clsClassTable->pkey],"order_no='".$order_no."'");
	}
	if($direct=='moveup'){
		$lst = $clsClassTable->getAll($where." and order_no < $order_no order by order_no desc limit 0,1");
		$clsClassTable->updateOne($pvalTable,"order_no='".$lst[0]['order_no']."'");
		$clsClassTable->updateOne($lst[0][$clsClassTable->pkey],"order_no='".$order_no."'");
	}
	if($direct=='movebottom'){
		$lst = $clsClassTable->getAll($where." and order_no > $order_no order by order_no desc limit 0,1");
		$clsClassTable->updateOne($pvalTable,"order_no='".$lst[0]['order_no']."'");
		$lstItem = $clsClassTable->getAll($where." and $pkeyTable <> '$pvalTable' and order_no > $order_no order by order_no asc");
		for($i=0;$i<count($lstItem);$i++) {
			$clsClassTable->updateOne($lstItem[$i][$clsClassTable->pkey],"order_no='".($lstItem[$i]['order_no']-1)."'");	
		}
	}
	if($direct=='movetop'){
		$lst = $clsClassTable->getAll($where." and order_no < $order_no order by order_no asc limit 0,1");
		$clsClassTable->updateOne($pvalTable,"order_no='".$lst[0]['order_no']."'");
		$lstItem = $clsClassTable->getAll($where." and $pkeyTable <> '$pvalTable' and order_no > $order_no order by order_no asc");
		for($i=0;$i<count($lstItem);$i++) {
			$clsClassTable->updateOne($lstItem[$i][$clsClassTable->pkey],"order_no='".($lstItem[$i]['order_no']+1)."'");	
		}
	}
	header('location: '.PCMS_URL.'/?mod='.$mod.$param_url.'&message=PositionSuccess');
}
/*------ Departure Point City -------*/
function default_store(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	$pUrl = '';
	#
	$clsCountry = new Country();
	$assign_list["clsCountry"] = $clsCountry;
	$clsCityStore = new CityStore();
	$assign_list["clsCityStore"] = $clsCityStore;
	#
	$classTable = "City";
	$clsClassTable = new $classTable;
	$tableName = $clsClassTable->tbl;
	$pkeyTable = $clsClassTable->pkey ;
	$assign_list["clsClassTable"] = $clsClassTable;
	#
	$country_id = isset($_GET['country_id'])?$_GET['country_id']:'1';$assign_list["country_id"] = $country_id;
	$type = isset($_GET['type'])?$core->decryptID($_GET['type']):'';$assign_list["type"] = $type;
	$keyword = isset($_GET['keyword'])?$_GET['keyword']:'';$assign_list["keyword"] = $keyword;
	
	if($type=='' && intval($country_id)==0){
		header('location: '.PCMS_URL.'/?mod=city&message=notPermission');
	}
	if(isset($_POST['filter'])&&$_POST['filter']=='filter'){
		$link = '&act='.$act;
		$link .= '&type='.$core->encryptID($type);
		if(isset($_POST['country_id'])!='' && $_POST['country_id']!=''){
			$link .= '&country_id='.$_POST['country_id'];
		}
		if($_POST['keyword']!=''&&$_POST['keyword']!='Tìm kiếm...'){
			$link .= '&keyword='.$_POST['keyword'];
		}
		header('location: '.PCMS_URL.'/?mod='.$mod.$link);
	}
	#
	$cond = "is_trash=0 and is_online=1";
	if(isset($country_id) && intval($country_id)!=0) {
		$cond.= " and country_id='$country_id'";
		$pUrl.='&country_id='.$country_id;
	}
	if($type != ''){
		$cond.= " and city_id NOT IN (SELECT city_id FROM ".DB_PREFIX."citystore WHERE is_trash=0 and type='$type')";
		$pUrl.='&type='.$core->encryptID($type);
	}
	if($keyword != ''){
		$slug = $core->replaceSpace($keyword);
		$cond .= " and slug like '%".$slug."%'";
	}
	$orderBy = " order_no asc";
	#-------Page Divide---------------------------------------------------------------
	$recordPerPage 	= 20;
	$currentPage = isset($_GET["page"])? $_GET["page"] : 1;
	$start_limit = ($currentPage-1)*$recordPerPage;
	$limit = " limit $start_limit,$recordPerPage";
	$lstAllItem = $clsClassTable->getAll($cond);
	$totalRecord = (is_array($lstAllItem)&&count($lstAllItem)>0)?count($lstAllItem):0;
	$totalPage = ceil($totalRecord / $recordPerPage);
	$assign_list['totalRecord'] = $totalRecord;
	$assign_list['recordPerPage'] = $recordPerPage;
	$assign_list['totalPage'] = $totalPage;
	$assign_list['currentPage'] = $currentPage;
	$listPageNumber =  array();
	for ($i=1; $i<=$totalPage; $i++){
		$listPageNumber[] = $i;
	}
	$assign_list['listPageNumber'] = $listPageNumber;
	$query_string = $_SERVER['QUERY_STRING'];
	$lst_query_string = explode('&',$query_string);
	$link_page_current = '';
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
		if($tmp[0]!='page'&&$tmp[0]!='type_list')
			$link_page_current_2 .= ($i==0)?'?'.$lst_query_string[$i]:'&'.$lst_query_string[$i];
	}
	$assign_list['link_page_current_2'] = $link_page_current_2;
	#-------End Page Divide-----------------------------------------------------------
	$listItem = $clsClassTable->getAll($cond." order by ".$orderBy.$limit);
	//print_r($cond); die();
	$assign_list["listItem"] = $listItem;
	#
	$listSelected =  $clsCityStore->getAll("is_trash=0 and type = '$type' and country_id='$country_id' order by order_no asc");
	$assign_list["listSelected"] = $listSelected;
	
	//Action
	$action = isset($_GET['action'])?$_GET['action']:'';
	if($action=='Add'){
		$pvalTable = isset($_GET[$pkeyTable])?$_GET[$pkeyTable]: '';
		if($pvalTable=='' && $pvalTable==0){
			header('location:'.PCMS_URL.'/index.php?admin&mod='.$mod.'&act='.$act.'&message=NotPermission');
			exit();
		}
		if(!$clsCityStore->checkExist($pvalTable,$type)) {
			$max_id = $clsCityStore->getMaxID();
			$max_order_no = $clsCityStore->getMaxOrderNo();
			$f = "$clsCityStore->pkey,city_id,country_id,type,order_no";
			$v = "'$max_id','$pvalTable','$country_id','$type','$max_order_no'";
			if($clsCityStore->insertOne($f,$v)) {
				header('location: '.PCMS_URL.'/?mod='.$mod.'&act='.$act.$pUrl.'&message=insertSuccess');
			}
		}
	}
}
function default_ajUpdPosSortCityStore(){
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod , $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
	global $clsConfiguration;
	#
	$clsCityStore = new CityStore();
	$type = $_POST['type'];
	$order = $_POST['order'];
	$currentPage 	= $_POST['currentPage'];
	$recordPerPage 	= $_POST['recordPerPage'];
	//var_dump($currentPage.'xxxxxx'.$recordPerPage);die();
	foreach($order as $key=>$val){
		$key = (($currentPage-1)*$recordPerPage + $key + 1);
		$clsCityStore->updateByCond("city_id='$val' and type='$type'","order_no='".$key."'");
	}
}
function default_setting(){
	global $assign_list, $_CONFIG, $_LANG_ID, $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsConfiguration, $oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	if(isset($_POST['submit'])){
		foreach($_POST as $key=>$val){
			$tmp = explode('-',$key);
			if($tmp[0]=='iso'){
				$clsConfiguration->updateValue($tmp[1],$val);
			}
			if($tmp[0]=='date'){
				$clsConfiguration->updateValue($tmp[1],strtotime($val));
			}
		}
		$extUrl = '';
		if($_POST['submit']=='UpdateConfiguration'){
			$extUrl = '#isotab0';
		}
		if($_POST['submit']=='UpdateConfiguration1'){
			$extUrl = '#isotab1';
		}
		if($_POST['submit']=='UpdateConfiguration2'){
			$extUrl = '#isotab2';
		}
		header('location:'.PCMS_URL.'?mod='.$mod.'&act='.$act.'&message=UpdateSuccess'.$extUrl);
	}	
}
function default_ajMoveCityStore(){
	global $dbconn, $assign_list, $_CONFIG,  $_SITE_ROOT, $mod , $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
	#
	$clsClassTable = new CityStore();
	$pvalTable = isset($_POST['citystore_id'])?$_POST['citystore_id']:0;
	
	$city_id = isset($_POST['city_id'])?$_POST['city_id']:0;
	$country_id = isset($_POST['country_id'])?$_POST['country_id']:0;
	$direct = isset($_POST['direct'])?$_POST['direct']:'';
	$type = isset($_POST['type'])?$_POST['type']:'';
	
	$one = $clsClassTable->getOne($pvalTable);
	$order_no = $one['order_no'];
	
	$cond = "is_trash=0 and country_id = '$country_id'";
	#
	if($direct=='movedown'){
		$lst = $clsClassTable->getAll($cond." and order_no < $order_no order by order_no desc limit 0,1");
		$clsClassTable->updateOne($pvalTable,"order_no='".$lst[0]['order_no']."'");
		$clsClassTable->updateOne($lst[0][$clsClassTable->pkey],"order_no='".$order_no."'");
	}
	if($direct=='moveup'){
		$lst = $clsClassTable->getAll($cond." and order_no > $order_no order by order_no asc limit 0,1");
		$clsClassTable->updateOne($pvalTable,"order_no='".$lst[0]['order_no']."'");
		$clsClassTable->updateOne($lst[0][$clsClassTable->pkey],"order_no='".$order_no."'");
	}
	if($direct=='movetop'){
		$lst = $clsClassTable->getAll($cond." and order_no > $order_no order by order_no asc");
		$clsClassTable->updateOne($pvalTable,"order_no='".$lst[count($lst)-1]['order_no']."'");
		$clsClassTable->updateOne($lst[count($lst)-1][$clsClassTable->pkey],"order_no='".$order_no."'");
	}
	if($direct=='movebottom'){
		$lst = $clsClassTable->getAll($cond." and order_no < $order_no order by order_no desc");
		$clsClassTable->updateOne($pvalTable,"order_no='".$lst[count($lst)-1]['order_no']."'");
		$clsClassTable->updateOne($lst[count($lst)-1][$clsClassTable->pkey],"order_no='".$order_no."'");
	}
	echo(1); die();
}
function default_ajSaveStoreForCity(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act, $_LANG_ID;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$clsCityStore = new CityStore();
	$country_id = isset($_POST['country_id'])?$_POST['country_id']:0;
	$type = isset($_POST['type'])?$_POST['type']:'';
	$list_city_id = isset($_POST['list_city_id'])?$_POST['list_city_id']:'';
	$list_city_id = rtrim($list_city_id,'|');
	
	if($list_city_id !='' ){
		$tmp = explode('|',$list_city_id);
		if(!empty($tmp)){
			foreach($tmp as $i){
				if(!$clsCityStore->checkExist($i,$type)){
					#
					$max_id = $clsCityStore->getMaxID();
					$max_order = $clsCityStore->getMaxOrderNo();
					$f = "$clsCityStore->pkey,city_id,country_id,type,order_no";
					$v = "'$max_id','$i','$country_id','$type','$max_order'";
					$clsCityStore->insertOne($f,$v);
				}
			}
			echo '_SUCCESS'; die();
		}else{
			echo '_ERROR'; die();
		}
	}else{
		echo '_ERROR'; die();
	}
}
function default_ajDeleteCityStore(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$clsClassTable = new CityStore();
	$pvalTable = isset($_POST['citystore_id'])?$_POST['citystore_id']:0;
	$clsClassTable->deleteOne($pvalTable);
	echo(1); die();
}
/*------ Ajax -------*/
function default_ajmakeSelectboxByCity(){
	global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $act, $_LANG_ID;
	global $core, $clsModule, $clsButtonNav,$oneSetting;
	$user_id = $core->_USER['user_id'];
	#
	$clsCity = new City();
	$country_id = $_POST['country_id'];
	#
	$lstItem = $clsCity->getAll("is_trash=0 and is_top=0 and country_id='$country_id' order by order_no asc");
	$html = '';
	if(!empty($lstItem)){
		foreach($lstItem as $item){
			$html.='<li>';
			$html.='<label><input class="chkitem" name="chkid_city[]" value="'.$item[$clsCity->pkey].'" type="checkbox">&nbsp;'.$clsCity->getTitle($item[$clsCity->pkey]).'</label>';
			$html.='</li>';
		}
	}
	echo $html; die();
}
?>