<?php
function default_open_cropper()
{
    //ini_set('display_errors', 1);
    //error_reporting(E_ALL ^ E_NOTICE);
    global $smarty, $_frontIsLoggedin_user_id, $core, $clsISO;
    $table_id = Input::post('table_id', 0);
    $imgdata = Input::post('imgdata');
    $smarty->assign('objectUrl', $imgdata);
    #
    $openFrom = Input::post('openFrom', 'image');
    $smarty->assign('openFrom', $openFrom);
    // Return
    $html = $core->build('_ajax.cropper.tpl');
    echo $html;
    die();
}
function default_upload_image()
{
    //ini_set('display_errors',1);
    //error_reporting(E_ALL);
    global $smarty, $_frontIsLoggedin_user_id, $core, $clsISO;
    global $clsConfiguration, $clsISO, $oneProfile, $profile_id, $_frontIsLoggedin_user_id;
    #
    $clsTable = Input::post('clsTable');
    $openFrom = Input::post('openFrom');
    $table_id = (int) Input::post('table_id', 0);
    $toField = ($openFrom == 'image_hotel_sub') ? Input::post('toField', 'image_hotel_sub') : Input::post('toField', 'image');
    // print_r($toField);die();
    $imgdata = Input::post('imgdata');
    $filename = Input::post('filename', "");
    if (!$filename) $filename = $clsISO->getUniqid() . '.jpg';
    #
    $msg = '_error';
    if (!empty($clsTable) && $table_id > 0 && !empty($imgdata)) {
        $clsClassTable = new $clsTable();
        #- Upload Folder
        $upload_dir = '/content';
        #- End
        $image = '';
        if ($imgdata) {
            $clsUploadFile = new UploadFile();
            $image = $clsUploadFile->base642imagejpeg($imgdata, $filename, $upload_dir);
        }
        if (!empty($image) && file_exists(ABSPATH . $image)) {
            if ($clsClassTable->updateOne($table_id, array(
                $toField => $image
            ))) {
                $msg = '_success|||' . $image;
            }
        }
    } else if ($openFrom == 'seo') {
        $image = '';
        if ($imgdata) {
            $clsUploadFile = new UploadFile();
            $image = $clsUploadFile->base642imagejpeg($imgdata, $filename, $upload_dir);
        }
        if (!empty($image) && file_exists(ABSPATH . $image)) {
            $msg = '_success|||' . $image;
        }
    } else if ($clsTable == 'Configuration' && $toField != "") {
        $image = '';
        $upload_dir = '/content';
        if ($imgdata) {
            $clsUploadFile = new UploadFile();
            $image = $clsUploadFile->base642imagejpeg($imgdata, $filename, $upload_dir);
        }
        if (!empty($image) && file_exists(ABSPATH . $image)) {
            $clsConfiguration->updateValue($toField, $image);
            $msg = '_success|||' . $image;
        }
    }
    // Return
    echo ($msg);
    die();
}
/* function default_upload_image(){
	global $smarty,$_frontIsLoggedin_user_id,$core,$clsISO;
	global $clsConfiguration,$clsISO,$oneProfile,$profile_id,$_frontIsLoggedin_user_id;
	#
	$msg = '_error';
	$clsTable = Input::post('clsTable');
	$table_id = (int) Input::post('table_id',0, true);
	$imgdata = Input::post('imgdata');
	$img_title = Input::post('img_title');
	$filename = Input::post('filename');
	if(!$filename){
		$filename = $clsISO->getUniqid().'.jpg';
	}
	$clsClassTable = new $clsTable();
	#
	$image =''; 
	if($imgdata){
		$clsUploadFile = new UploadFile();
		$image = $clsUploadFile->base642imagejpeg($imgdata,$filename,"/content");
	}
	$old_image = $clsClassTable->getOneField('image',$table_id);
	if(empty($table_id)&&$clsTable=='Meta'){
		$image = ltrim($image,' ');
		echo $image; die();
	}
	if(!empty($image) && file_exists(ABSPATH.$image)){
		if($clsClassTable->updateOne($table_id, array(
			'image' => $image
		))){
			if(is_file(ABSPATH.$old_image&&$old_image != $image)){
				unlink(ABSPATH.$old_image);
			}
			$msg = 'success';
			$image = $image;
			echo $image; die();	
		}
	}
	// Return
	echo $msg; die();	
} */
function default_upload_gallery()
{
    // ini_set('display_errors', '1');
    // ini_set('display_startup_errors', '1');
    // error_reporting(E_ALL);
    global $dbconn, $assign_list, $_CONFIG, $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page, $core, $clsModule;
    global $clsConfiguration, $clsISO, $package_id;
    #
    $tp                 =   Input::post('tp', "_crop");
    $table_id           =   (int) Input::post('table_id', 0);
    $clsTableGal        =   Input::post('clsTableGal');
    $clsClassTableGal   =   new $clsTableGal();
    #
    if ($clsTableGal == "Voucher") {
        $clsClassTableGal = new Image();
    }
    #
    $msg    =   '_error';
    if ($tp == '_crop') {
        $imgdata    =   Input::post('imgdata');
        $img_title  =   Input::post('img_title');
        $filename   =   Input::post('filename');
        if (!$filename) {
            $filename   =   md5(uniqid(rand(), true)) . '.jpg';
        }
        $image  =   '';
        $msg    =   'error';
        if ($imgdata) {
            $clsUploadFile  =   new UploadFile();
            $image  =   $clsUploadFile->base642imagejpeg($imgdata, $filename, "/content");
        }
        if (!empty($image) && file_exists(ABSPATH . $image)) {
            if ($clsClassTableGal->insert(array(
                $clsClassTableGal->pkey => $clsClassTableGal->getMaxId(),
                'type'      =>  $clsTableGal,
                'table_id'  =>  $table_id,
                'image'     =>  $image,
                'title'     =>  $img_title,
                'slug'      =>  $core->replaceSpace($img_title),
                'order_no'  =>  $clsClassTableGal->getMaxOrderNo(),
                'reg_date'  =>  time()
            ))) {
                $msg = 'success';
            }
        }
    } else {
        $list_images    =   Input::post('list_images');
        $list_images    =   explode('|', $list_images);
        #
        foreach ($list_images as $key => $image) {
            if (!empty($image) && file_exists(ABSPATH . $image)) {
                $arr_data   =   array(
                    $clsClassTableGal->pkey =>  $clsClassTableGal->getMaxId(),
                    'type'      =>  $clsTableGal,
                    'table_id'  =>  $table_id,
                    'image'     =>  $image,
                    'title'     =>  '',
                    'slug'      =>  '',
                    'order_no'  =>  $clsClassTableGal->getMaxOrderNo(),
                    'reg_date'  =>  time(),
                    'is_trash'  =>  0,
                    'is_online' =>  1,
                    'lang_id'   =>  ''
                );
                if ($clsClassTableGal->insert($arr_data)) {
                    $msg    =   'success';
                }
            }
        }
    }
    // Return
    echo $msg;
    die();
}
/* function default_upload_gallery(){
	global $smarty,$_frontIsLoggedin_user_id,$core,$clsISO,$dbconn;
	global $clsConfiguration,$clsISO,$oneProfile,$profile_id,$_frontIsLoggedin_user_id;
	#
	$msg = 'error';
	$table_id = (int) Input::post('table_id',0, true);
	$clsTable = Input::post('clsTable');
	$filename = Input::post('filename');
	$imgdata = Input::post('imgdata');
	$img_gallery_title = Input::post('img_gallery_title');
	if(!$filename){
		$filename = md5(uniqid(rand(), true)).'.jpg';
	}
	#
	$up = ''; $msg = 'error';
	if(!class_exists('UploadFile')){ require_once(DIR_COMMON.'/class.upload.php'); }
	if($imgdata){
		$clsUploadFile = new UploadFile();
		$up = $clsUploadFile->base642imagejpeg($imgdata, $filename, "/content");
	}
	$clsClassTable = new $clsTableGallery();

	if(!empty($up) && file_exists(ABSPATH.$up)){
		if($clsClassTable->insert(array(
			$clsClassTable->pkey => $clsClassTable->getMaxId(),
			'type' => 'TourImage',
			'table_id' 	=> $table_id,
			'image' 	=> $up,
			'title' 	=> $img_gallery_title,
			'slug' 	=> $core->replaceSpace($img_gallery_title),
			'order_no' 	=> $clsClassTable->getMinOrderNo($table_id),
			'reg_date' 	=> time()
		))){
			$msg = 'success';
		}
	}
	echo($msg); die();
} */
function default_ajDeleteGalImg()
{
    global $core, $clsISO, $clsConfiguration, $assign_list, $clsModule;
    // header('Content-Type: application/json');
    $clsTable = Input::post('clsTable');
    $clsClassTable = new $clsTable();
    $table_id = (int) Input::post('table_id', 0);
    $image_id = (int) Input::post('image_id', 0);
    #
    $result = array('result' => 'error', 'mes' => $core->get_Lang('error_data_image'));
    if ($image_id == 0) {
        $result = array('result' => 'error', 'mes' => $core->get_Lang('error_data_image'));
    } else if ($image_id) {
        if ($clsClassTable->deleteOne($image_id)) {
            $result = array('result' => 'success', 'mes' => $core->get_Lang('success_del_image'));
        } else {
            $result = array('result' => 'error', 'mes' => $core->get_Lang('error_del_image'));
        }
    }
    // Return
    echo @json_encode($result);
    die();
}
function default_upload_image_isoman()
{
    global $assign_list, $_CONFIG,  $_SITE_ROOT, $mod, $_LANG_ID, $act, $menu_current, $current_page;
    global $core, $clsModule, $clsButtonNav;
    $user_id = $core->_USER['user_id'];
    #
    $table_id = isset($_POST['table_id']) ? intval($_POST['table_id']) : 0;
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    $clsTable = isset($_POST['type']) ? $_POST['type'] : '';
    $file_images = isset($_POST['file_images']) ? $_POST['file_images'] : '';
    #
    if ($file_images != '') {
        $file_images = rtrim($file_images, '|');
        $file_images = explode('|', $file_images);
        if ($file_images != '' && !empty($clsTable)) {
            $clsClassTable = new $clsTable();
            $clsClassTable->updateOne($table_id, array(
                'image' => $file_images[0]
            ));
        }
        echo $file_images[0];
    }
}
