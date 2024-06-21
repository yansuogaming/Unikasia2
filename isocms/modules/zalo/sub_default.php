<?php
function default_zalo_zns(){
	global $assign_list, $_CONFIG, $core, $dbconn, $mod, $act,$title_page,$description_page,$keyword_page,$oneCommon;
	global $clsConfiguration, $extLang, $_LANG_ID,$about_us_id, $clsISO,$package_id;
	
    
    $clsZaloZNSAPI=new ZaloZNSAPI(); 
    
    	ini_set('display_errors',1);
error_reporting(E_ERROR & ~E_STRICT);//E_ALL
    
    if($temp=='otp'){
        $template_data= array(
            'otp' => '3712352'
        );
    }elseif($temp=='order_ticket'){
        $template_data= array(
            'order_code' => 'HP0001',
            'phone_number' => '0908998688',
            'price' => '1.500.000đ',
            'status' => 'Đã Thanh Toán',
            'date' =>'23/08/2023',
        );
    }elseif($temp=='get_car_1'){
        $template_data= array(
            'Ten_khach_hang' => 'Nguyễn A',
            'order_code' => 'HP0001',
            'status' => 'Đã xác nhận',
            'date' =>'23/08/2023',
        );
    }elseif($temp=='get_car_2'){
        $template_data= array(
            'Ten_khach_hang' => 'Nguyễn A',
            'order_code' => 'HP0001',
            'status' => 'Đã xác nhận',
            'date' =>'23/08/2023',
        );
    }elseif($temp=='checkin'){
        $template_data= array(
            'Ten_khach_hang' => 'Nguyễn A',
            'order_code' => 'HP0001',
            'phone_number' => '0908998688',
            'status' => 'Đã checkin',
            'date' =>'23/08/2023',
        );
    }elseif($temp=='buffalo_meat'){
        $template_data= array(
            'order_code' => 'HP0001',
            'phone_number' => '0908998688',
            'price' => '1.500.000đ',
            'date' =>'23/08/2023',
            'status' =>'Đã giao',
            'date' =>'23/08/2023',
        );
    }elseif($temp=='check_in_lunch'){
        $template_data= array(
            'Ten_khach_hang' => 'Nguyễn A',
            'order_code' => 'HP0001',
            'date' =>'23/08/2023',
        );
    }else{
        $template_data= array(
            'customer_name' => 'Nguyen Van A',
            'order_code' => 'HP0001',
            'payment_status' => 'Đã Thanh Toán',
            'cost' =>'1.490.000đ',
        );
    }
    $param = array(
        /*'mode' => 'development',*/
        'phone' => '84988905769',
        'template_id' => '2778521',
        'template_data' => $template_data,
        'tracking_id' =>'84988905769',
    );
    //print_r($param);die();
    $response = $clsZaloZNSAPI->SendZNS($param);
    print_r($response);die('xxxx');
    if(!empty($response)){
       if($response['error']==0){
       } 
    }

	
	
	/*=============Title & Description Page==================*/
	$title_page = $core->get_Lang('Zalo ZNS').' | '.PAGE_NAME;
	$assign_list["title_page"] = $title_page;
	$description_page = $title_page;
	$assign_list["description_page"] = $description_page;
	$keyword_page = $title_page;
	$assign_list["keyword_page"] = $keyword_page;
	/*========================================================*/
	unset($clsFeedback); unset($clsISO);
}
?>
