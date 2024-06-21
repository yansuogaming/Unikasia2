
<?php 
global $mod,$act,$assign_list, $act,$dbconn,$show,$smarty, $core,$extLang,$_lang, $clsISO,$cat_id,$cat_ID,$city_id,$country_id,$clsConfiguration,$duration_ID,$price_range_ID;
	

	#
	if(isset($_POST['search_des']) &&  $_POST['search_des']=='search_des'){
		
			$link= '/tim-kiem-tours/';
		
		
		if(!empty($_POST['all'])) {
			
			$link.=(!empty($_POST['all']))?'&all='.$_POST['all']:'';
		} else {
				$link.=(!empty($_POST['country_id']))?'&country_id='.$clsISO->makeSlashListFromArrayComma($_POST['country_id']):'';
			
			
			$link.=(!empty($_POST['city_id']))?'&city_id='.$clsISO->makeSlashListFromArrayComma($_POST['city_id']):'';
			$link.=(!empty($_POST['tourcat_id']))?'&tourcat_id='.$clsISO->makeSlashListFromArrayComma($_POST['tourcat_id']):'';
			$link.=(!empty($_POST['min_duration']))?'&min_duration='.$_POST['min_duration']:'&min_duration=0';
			$link.=(!empty($_POST['max_duration']))?'&max_duration='.$_POST['max_duration']:'&max_duration=0';
			$link.=(!empty($_POST['min_price']))?'&min_price='.$_POST['min_price']:'&min_price=0';
			$link.=(!empty($_POST['max_price']))?'&max_price='.$_POST['max_price']:'&max_price=0';
			
		}
		header('location:'.trim($link));
		exit();
	}
?>