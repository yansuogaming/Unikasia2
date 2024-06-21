<?php
function default_default(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$domain,$country_id,$city_id,$cat_id,$extLang;
	#Blog;
	
	
    /*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Travel Agent').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
}
function default_agent_profile(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$domain,$country_id,$city_id,$cat_id,$extLang;
	#Blog;
	
	$clsAgent = new Agent();
	$assign_list["clsAgent"] = $clsAgent;
	if(!$clsAgent->isLoggedIn()){
		header('Location:'.$extLang.'/travel-agent/signup.html');
		exit();
	}

	#

	$title_page = $core->get_Lang('Setting profile').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
}
function default_agent_register(){
	
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$extLang;
	global $clsISO;
	#
	
	
    /*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Travel Agent').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
	unset($clsBlog);unset($clsBlogCategory);
}

function default_register(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$extLang;
	global $clsISO,$dbconn;
	#
	$type = isset($_POST['type']) ? $_POST['type'] : '';
	
	$clsAgent = new Agent();
	$agent_max_id=$clsAgent->getMaxId();
	
	if($type=='AGENT'){
		if($clsAgent->checkExitsEmail($_POST['email']) == '1') {
			echo '_EXISTEMAIL'; die();
		}else{	
			$f = "agent_id,full_name,email,phone,company_name,position,tax_code,userpass,type,ip_register,reg_date";
			$v = "'".$agent_max_id."'";
			$v .= ",'".addslashes($_POST['full_name'])."'";
			$v .= ",'".addslashes($_POST['email'])."'";
			$v .= ",'".addslashes($_POST['phone'])."'";
			$v .= ",'".addslashes($_POST['company_name'])."'";
			$v .= ",'".addslashes($_POST['position'])."'";
			$v .= ",'".addslashes($_POST['tax_code'])."'";
			$userpass = $clsAgent->encrypt($_POST['password']);
			$v .= ",'".addslashes($userpass)."'";
			$v .= ",'".$type."'";
			$v .= ",'".$_SERVER['REMOTE_ADDR']."'";
			$v .= ",'".time()."'";
			if($clsAgent->insertOne($f,$v)){
				$clsAgent->sendEmailRegisterAgent($agent_max_id,$userpass);	
				echo '_SUCCESSAGENT'; die();			
			}else{
				echo '_ERRORAGENT'; die();			
			}
		}
	}
	
    /*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Travel Agent').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
	unset($clsBlog);unset($clsBlogCategory);
}

function default_ctv_register(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$extLang;
	global $clsISO,$dbconn;
	#
	$type = isset($_POST['type']) ? $_POST['type'] : '';
	
	$clsAgent = new Agent();
	$agent_max_id=$clsAgent->getMaxId();
	$errMsg='';
	if(isset($_POST['ctv_register'])&&$_POST['ctv_register']=='ctv_register'){ 
		if($clsAgent->checkExitsEmail($_POST['email']) == '1') {
			$errMsg.= '<p>'.$core->get_Lang('Email address already exists').' </p>';
		}
		$name=$_FILES['identity_card_file']['name'];
		$tmp_name=$_FILES['identity_card_file']['tmp_name'];
		$type_file=$_FILES['identity_card_file']['type'];
		$size=$_FILES['identity_card_file']['size'];
		
		//print_r($name.'x'.$tmp_name.'xx'.$type_file.'xxxyyyy'.$size); die();
		#- Validate
		if($name==''){
			$errMsg.= '<p>'.$core->get_Lang('Your identity card file should not be empty').' </p>';
		}
		if($size >= 2097152){
			$errMsg.= '<p>'.$core->get_Lang('Your identity card file size too large').' </p>';
		}
		if($name!='' && !in_array($type_file,array('image/jpeg','image/png'))){
			$errMsg.= '<p>'.$core->get_Lang('Your identity card file not wrong format').' </p>';
		}
		
		$f = "agent_id,full_name,email,phone,userpass,type,ip_register,reg_date";
		$v = "'".$agent_max_id."'";
		$v .= ",'".addslashes($_POST['full_name'])."'";
		$v .= ",'".addslashes($_POST['email'])."'";
		$v .= ",'".addslashes($_POST['phone'])."'";
		$userpass = $clsAgent->encrypt($_POST['password']);
		$v .= ",'".addslashes($userpass)."'";
		$v .= ",'".$type."'";
		$v .= ",'".$_SERVER['REMOTE_ADDR']."'";
		$v .= ",'".time()."'";
		if($errMsg==''){
			if($clsAgent->insertOne($f,$v)){
				$upload_path = '/ctv_'.$agent_max_id;
				if(!class_exists('UploadFile')){ require_once(DIR_COMMON.'/class.upload.php'); }
				$up = '';
				if(is_uploaded_file($_FILES['identity_card_file']['tmp_name'])){
					$clsUploadFile = new UploadFile();
					$up = $clsUploadFile->uploadItem($_FILES["identity_card_file"],$upload_path,"jpg,gif,png");
				}
				$clsAgent->updateOne($agent_max_id,"identity_card_file='$up'");
				$clsAgent->sendEmailRegisterCTV($agent_max_id,$userpass);	
				header('location: '.PCMS_URL.'collaborators/signup-success.html');
				exit();
			}
		}else{
			foreach($_POST as $k=>$v){
				$assign_list[$k] = $v;
			}
		}
		$assign_list["errMsg"] = $errMsg;
	}
	
	
    /*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Travel Agent').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
	unset($clsBlog);unset($clsBlogCategory);
}

function default_update_profile_agent(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$extLang;
	global $clsISO,$dbconn;
	#
	$type = isset($_POST['type']) ? $_POST['type'] : '';
	$agent_id = isset($_POST['agent_id']) ? $_POST['agent_id'] : '';
	
	//print_r($_POST); die();
	
	$clsAgent = new Agent();
	
	$name=$_FILES['avatar']['name'];
	$tmp_name=$_FILES['avatar']['tmp_name'];
	$type_file=$_FILES['avatar']['type'];
	$size=$_FILES['avatar']['size'];
	
	$msg_error='';
	
	//print_r($name.'x'.$tmp_name.'xx'.$type.'xxxyyyy'.$size); die();
	#- Validate
	
	$upload_path = '/avatar_'.$agent_id;
	if(!class_exists('UploadFile')){ require_once(DIR_COMMON.'/class.upload.php'); }
	$up = '';
	
	
	if($_POST['avatar_post']!=''){
		$up=$_POST['avatar_post'];
	}else{
		if(is_uploaded_file($_FILES['avatar']['tmp_name'])){
			$clsUploadFile = new UploadFile();
			$up = $clsUploadFile->uploadItem($_FILES["avatar"],$upload_path,"jpg,gif,png");
		}
	}	
	if($agent_id >0){
		if($type=='AGENT'){
			$value = "full_name='".$_POST['full_name']."'";
			$value .= ",phone='".$_POST['phone']."'";
			$value .= ",company_name='".$_POST['company_name']."'";
			$value .= ",position='".$_POST['position']."'";
			$value .= ",tax_code='".$_POST['tax_code']."'";
			$value .= ",upd_date='".time()."'";
			$value .= ",avatar='".$up."'";
			//print_r($agent_id.'xxxx'.$value); die();
			if($clsAgent->updateOne($agent_id,$value)){
				//$clsAgent->sendEmailUpdateProfileAgent($agent_id);	
				redirect(DOMAIN_NAME.$extLang.'/travel-agent/my-profile.html');
			}else{
				redirect(DOMAIN_NAME.$extLang.'/travel-agent/my-profile.html');
				$msg_error .= $core->get_Lang('Update failed!');
			}
		}else{
			$value = "full_name='".$_POST['full_name']."'";
			$value .= ",phone='".$_POST['phone']."'";
			$value .= ",upd_date='".time()."'";
			$value .= ",avatar='".$up."'";
			//print_r($agent_id.'xxxx'.$value); die();
			if($clsAgent->updateOne($agent_id,$value)){
				//$clsAgent->sendEmailUpdateProfileAgent($agent_id);	
				redirect(DOMAIN_NAME.$extLang.'/travel-agent/my-profile.html');
			}else{
				redirect(DOMAIN_NAME.$extLang.'/travel-agent/my-profile.html');
				$msg_error .= $core->get_Lang('Update failed!');
			}
		}
	}
	
	
	
    /*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Travel Agent').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
	unset($clsBlog);unset($clsBlogCategory);
}

function default_login(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$agent_id;
	//print_r('xxxx'); die();
	$clsAgent = new Agent();
	if($clsAgent->isLoggedIn()){
		redirect(DOMAIN_NAME.$extLang.'/travel-agent/my-profile.html');
	}
	
	$msgSubmitForm='';
	if(isset($_POST['LOGIN']) && $_POST['LOGIN']== 'LOGIN'){
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';
		if($clsAgent->agentLoggedIn($email,$password)){
			redirect(DOMAIN_NAME);
		}else{
			redirect(DOMAIN_NAME.$extLang.'/travel-agent/signin.html');
			$msgSubmitForm .= $core->get_Lang('Login failed!');
		}
	}
	$assign_list["msgSubmitForm"] = $msgSubmitForm;
	/*=============Content Page==================*/
	$title_page = 'Sign in '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
}
function default_logout(){
	global $assign_list, $_CONFIG, $core,$extLang, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$profile_id;
	global $facebook;
	$clsAgent = new Agent();	
	#
	$clsAgent->userDoLogout();
	header('Location:'.DOMAIN_NAME.$extLang);
	exit();
}
function default_forgot_pass(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page;
	#
	$title_page = $core->get_Lang('Forgot Password').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
}
function default_ajAjaxForgotPass(){
	global $core, $clsISO, $clsEvent, $_lang, $_LANG_ID;
	#
	$clsAgent = new Agent();
	#
	$email = isset($_POST['email'])?trim(strip_tags($_POST['email'])):'';

	#
	if($clsAgent->checkExitsEmail($email)== '0'){
		echo 'email_not_correct'; die();
	} else {
		$one = $clsAgent->getAll("email='$email' limit 0,1");
		$agent_id = $one[0]['agent_id'];
		$time=time();
		$confirm_code=md5(md5($email.'VIETISO'.$time));
		$set = "reset_code='".$confirm_code."',reset_time='".$time."'";
		#
		if($clsAgent->updateOne($agent_id,$set)) {
			$clsAgent->sendEmailForgetPassword($agent_id);
			echo 'reset_success'; die();
		}
	}
}
function default_change_pass(){
	global $assign_list, $_CONFIG, $core,$extLang, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$agent_id;
	#
	$cssShow='member';
	$assign_list["cssShow"] = $cssShow;
	$clsCountry=new Country(); $assign_list["clsCountry"] = $clsCountry;
	#
    $clsAgent = new Agent();$assign_list["clsAgent"] = $clsAgent;
	$agent_id = $clsAgent->getUserID();
	if( empty( $agent_id ) && isset($_SESSION["agent_id_db"]) ){
		$agent_id = $_SESSION["agent_id_db"];
	}
	//$assign_list["agent_id"] = $agent_id;
	$assign_list["agent_id"] = $agent_id;
	
	$oneAgent=$clsAgent->getOne($agent_id);
	$assign_list["oneAgent"] = $oneAgent;
	
	$lstCountry=$clsCountry->getAll("is_trash=0 order by order_no asc");
	$assign_list["lstCountry"] = $lstCountry;

	$message=$_GET['message'];
	$assign_list["message"] = $message;
	
	if($agent_id==0){
		header('location:'.$extLang.'/travel-agent/signup.html');
	}
    $oneAgent=$clsAgent->getOne($agent_id);
	$assign_list["oneAgent"] = $oneAgent;
	#
    if($_POST['CHANGE_PASS']=='CHANGE_PASS') {
        
		$msg='';
		$old_pass=$_POST['current_password'];
		$pass2=$_POST['password'];
		$pass3=$_POST['re_password'];
		
		if(!$clsAgent->checkPass($old_pass,$oneAgent['userpass'])){
			$msg.='<p>'.$core->get_Lang('Current password not match').'</p>';
		}
		if(strlen($pass2)<6){
			$msg.='<p>'.$core->get_Lang('The passwords Minimum must have 6 characters').'</p>';
		}
		if($msg===''){
			$value = "userpass='".$clsAgent->encrypt(addslashes($_POST['pass2']))."'";
			if($clsAgent->updateOne($agent_id,$value)){
				header('location:'.DOMAIN_NAME.$extLang.'/travel-agent/signin.html');
			}else{
				header('location:'.DOMAIN_NAME.$extLang.'/travel-agent/change-password/error.html');
			}
		}
    }
	$assign_list["msg"] = $msg;
	#
	$title_page = $core->get_Lang('Change Password').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
}
function default_reset_pass(){
	global $assign_list, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$clsISO,$extLang, $_lang;
	#
	$restorekey = $_GET['restorekey']; //print_r($restorekey);die();
	$clsAgent = new Agent();
	$assign_list["clsAgent"] = $clsAgent;
	$lstAgent = $clsAgent->getAll();
	for($i=0;$i<count($lstAgent);$i++){
		if($restorekey == md5($lstAgent[$i]['agent_id'].'VietISO')){
			$agent_id = $lstAgent[$i]['agent_id'];
			break;
		}
	}
	
	$oneAgent = $clsAgent->getOne($agent_id);
	if($agent_id=='' || $oneAgent['reset_code']=='' || $oneAgent['reset_time']<time()-48*60*60){
		header('location:'.$extLang.'/travel-agent/reset-password/error.html');
	}
	if($_POST['RESET_PASS']=='RESET_PASS'){
		$login_password = $_POST['password'];
		$c_login_password = $_POST['re_password'];
		#
		if($login_password==$c_login_password){
			#
			$set = "userpass='".$clsAgent->encrypt($login_password)."',reset_code='',reset_time='0',upd_date='".time()."'";
			#
			if($clsAgent->updateOne($agent_id,$set)) {
				$oneAgent = $clsAgent->getOne($agent_id);
				$_SESSION['FRONT_LOGGEDIN'] = 1;
				$_SESSION['FRONT_USEREMAIL'] = $oneAgent['email'];
				$_SESSION['FRONT_PASSWORD'] = $oneAgent['userpass'];
				$_frontIsLoggedin_user_id = $oneAgent;
				$clsAgent->updateOne($_frontIsLoggedin_user_id,"last_connect='".time()."',is_online='1'");
				$clsAgent->sendEmailChangePassword($agent_id,$login_password);
			}
			#
			header('location: '.$extLang.'/travel-agent/reset-password/success.html');
		}
		else{
			$assign_list["invalid"] = 'invalid';
		}
	}
	
	$title_page =$core->get_Lang('Reset Password').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;

}
function default_agent_booking(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$agent_id;
	#
	require_once(DIR_COMMON.'/class.upload.php');
	$cssShow='member';
	$assign_list["cssShow"] = $cssShow;
	#
	$clsCountry=new Country();
	$assign_list["clsCountry"] = $clsCountry;
	$clsHotel=new Hotel();
	$assign_list["clsHotel"] = $clsHotel;
	$clsCruise=new Cruise();
	$assign_list["clsCruise"] = $clsCruise;
	$clsCruiseCabin=new CruiseCabin();
	$assign_list["clsCruiseCabin"] = $clsCruiseCabin;
	$clsTour=new Tour();
	$assign_list["clsTour"] = $clsTour;
	
	$clsReviews = new Reviews();
	
	$lstCountry=$clsCountry->getAll("is_trash=0 order by order_no asc");
	$assign_list["lstCountry"] = $lstCountry;
    #
	$clsBooking = new Booking();
	$assign_list["clsBooking"] = $clsBooking;
	
	$lstBooking = $clsBooking->getAll("agent_id='$agent_id' order by booking_id desc");
	$assign_list["lstBooking"] = $lstBooking;
	if($lstBooking>0){
		$totlalBooking=count($lstBooking);
	}else{
		$totlalBooking=0;
	}
	$assign_list["totlalBooking"] = $totlalBooking;

	$lstBookingHotel=$clsBooking->getAll("clsTable='Hotel' and agent_id='$agent_id' and target_id IN (SELECT hotel_id FROM ".DB_PREFIX."hotel WHERE is_trash=0 and is_online=1) order by booking_id desc");
	$assign_list["lstBookingHotel"] = $lstBookingHotel;
	
	$lstBookingTour=$clsBooking->getAll("clsTable='Tour' and agent_id='$agent_id' and target_id IN (SELECT tour_id FROM ".DB_PREFIX."tour WHERE is_trash=0 and is_online=1) order by booking_id desc");
	$assign_list["lstBookingTour"] = $lstBookingTour;

	$lstBookingCruise=$clsBooking->getAll("clsTable='Cruise' and agent_id='$agent_id' and target_id IN (SELECT cruise_id FROM ".DB_PREFIX."cruise WHERE is_trash=0 and is_online=1) order by booking_id desc");
	$assign_list["lstBookingCruise"] = $lstBookingCruise;
	
	$title_page =$core->get_Lang('My Booking').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
	

}
function default_agent_review(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act, $_LANG_ID,$title_page,$description_page,$keyword_page,$agent_id;
	#
	require_once(DIR_COMMON.'/class.upload.php');
	$cssShow='member';
	$assign_list["cssShow"] = $cssShow;
	#
	$clsCountry=new Country();
	$assign_list["clsCountry"] = $clsCountry;
	$clsHotel=new Hotel();
	$assign_list["clsHotel"] = $clsHotel;
	$clsCruise=new Cruise();
	$assign_list["clsCruise"] = $clsCruise;
	$clsCruiseCabin=new CruiseCabin();
	$assign_list["clsCruiseCabin"] = $clsCruiseCabin;
	$clsTour=new Tour();
	$assign_list["clsTour"] = $clsTour;
	
	$clsReviews = new Reviews();
	
	$cond = "is_trash=0 and is_online=1 and agent_id ='$agent_id'";

	$lstReview = $clsReviews->getAll($cond." order by order_no asc");
	$assign_list["lstReview"] = $lstReview;
	//print_r($lstReview); die();

	$title_page =$core->get_Lang('My Reviews').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page =$title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page =$title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*=============Content Page==================*/
	

}
?>
