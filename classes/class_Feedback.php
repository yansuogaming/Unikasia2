<?php
class Feedback extends dbBasic{
	function __construct(){
		$this->pkey = "feedback_id";
		$this->tbl = DB_PREFIX."feedback";
	}
	function getFeedBackInfo($feedback_id){
		$one = $this->getOne($feedback_id);
		$feedback_store = unserialize($one['feedback_store']);
		return $feedback_store;
	}
	function getMaxOrder(){
		$res = $this->getAll("1=1 order by order_no desc");
		return intval($res[0]['order_no'])+1;
	}
	function generateFeedBack($feedback_id){
		global $clsConfiguration;
		return $clsConfiguration->getValue('SitePrefixFeedback').$feedback_id;
	}
	function countTotalAllFeedback($clsTable) {
		$cond = "1=1";
		return $this->countItem($cond);
	}
	function countTotalFeedback($is_process='') {
		$cond = "1=1 and is_process = '$is_process'";
		return $this->countItem($cond);
	}
	function getFullName($feedback_id){
		$one = $this->getOne($feedback_id);
		$fullname=$one['fullname']?$one['fullname']:$one['first_name'].' '.$one['last_name'];
		return $fullname;
	}
	
	function newBookingOld($feedback_id, $type='', $choose_date=''){
		global $core, $extLang, $clsISO, $clsPage, $clsConfiguration,$_LANG_ID,$email_template_contact_id;
		 
		header('Content-Type: text/html; charset=utf-8');
		#


        $clsCountryEx = new Country();
        $clsCountry = new _Country();
		//$clsCruise = new Cruise();
		//$clsCruiseItinerary = new CruiseItinerary();
		//$clsHotel = new Hotel();
        //$clsTailorProperty = new TailorProperty();

        $clsCity = new City();
        $clsTour = new Tour();
		$clsPage = new Page();
		$clsEmailTemplate = new EmailTemplate();

        $clsTourOption = new TourOption();
		$email_template_id=$email_template_contact_id;
        
        
        $header_email = $clsEmailTemplate->getHeader($email_template_id);
		$body_email = $clsEmailTemplate->getContent($email_template_id);
		$footer_email = $clsEmailTemplate->getFooter($email_template_id);

        $message = '<div style="background-color: rgba(245,245,245,1);padding: 30px 0;">';
        $message .= '<div style="max-width: 620px;margin: 0 auto;border-top: 6px solid #fdd835;border-bottom: 1px solid rgba(247,247,247,1);background-color: rgba(255,255,255,1);">';
        $message .= '<div style="border-bottom: 1px solid rgba(247,247,247,1);padding: 3px 20px 0;">'.$header_email.'</div>';
        $message .= '<div style="padding:20px 20px 8px">'.$body_email.'</div>';
        $message .= '<div style="padding:15px 20px">'.$footer_email.'</div>';
        $message .= '</div></div>';

        
        
		#
		header('Content-Type: text/html; charset=utf-8');
		//header('Content-Type: image/gif' );
		#
		$one = $this->getOne($feedback_id);
		$feedback_store = unserialize($one['feedback_store']);
		$birthday = date('d/m/Y',$one['birthday']);
		$tour_id = $one['target_id'];
		$title_tour=$clsTour->getTitle($tour_id);
        $getListDeparturePoint=$clsTour->getListDeparturePoint($tour_id);
        $getEndCityAround=$clsTour->getEndCityAround($tour_id);
		$departure_date = $clsISO->converTimeToText5($one['departure_date']);
		$end_date = $clsISO->converTimeToText5($one['end_date']);
		$number_adult = $feedback_store['number_adult'];
		$number_child = $feedback_store['number_child'];
		$number_infant = $feedback_store['number_infant'];
		$tour__class = $clsTourOption->getTitle($feedback_store['tour__class']);
        $tour_passenger = $number_adult.' '.$core->get_Lang('Adult(s)');
        if($number_child){
            $tour_passenger.= ', '.$number_child.' '.$core->get_Lang('Child');
        }
        if($number_infant){
            $tour_passenger.= ', '.$number_infant.' '.$core->get_Lang('Infant');
        }
		//$cruise_id = $feedback_store['cruise_id'];
		//$cruise_itinerary_id = $feedback_store['cruise_itinerary_id'];
		//$hotel_id = $feedback_store['hotel_id'];
		$feedback_code = $one['feedback_code'];
		$company_logo = $clsConfiguration->getValue('CompanyLogo');
		
		#---
		
		
		
		$HTML = '';
		if(intval($tour_id) > 0){
			$HTML.= '<p>_______________________</p>';
			$HTML.= '<p><strong>2. '.$core->get_Lang('Tour Information').':</strong></p>';
			$HTML.='<p>';
			$HTML.= $core->get_Lang('Tour Name').': [%TOUR_NAME%] <br />'.$core->get_Lang('Tour Code').': [%TOUR_CODE%] <br />'.$core->get_Lang('Tour Duration').': [%TOUR_LENGTH%] <br />'.$core->get_Lang('Tour Url').': [%TOUR_URL%] <br />
            '.$core->get_Lang('Travel Style').': [%TOUR_CLASS%] <br />'.$core->get_Lang('Traveler').': [%TOUR_PASSENGER%] <br />';
			$HTML = str_replace('[%TOUR_URL%]',DOMAIN_NAME.$clsTour->getLink($tour_id),$HTML);
			$HTML = str_replace('[%TOUR_NAME%]',$title_tour,$HTML);
			$HTML = str_replace('[%TOUR_CODE%]',$clsTour->getTripCode($tour_id),$HTML);
			$HTML = str_replace('[%TOUR_LENGTH%]',$clsTour->getTripDuration2019($tour_id),$HTML);
			$HTML = str_replace('[%TOUR_DESTINATION%]',$clsTour->getLCityAround2($tour_id),$HTML);
			$HTML = str_replace('[%TOUR_CLASS%]',$tour__class,$HTML);
			$HTML = str_replace('[%TOUR_PASSENGER%]',$tour_passenger,$HTML);
			$HTML.='</p>';
		}else{

        }

		if($choose_date==1){
			$HTML = str_replace('[%TRAVEL_DATE%]',$clsISO->converTimeToText(strtotime($feedback_store['date_begin'])),$HTML);
			$HTML = str_replace('[%RETURN_DATE%]',$clsISO->converTimeToText(strtotime($feedback_store['date_end'])),$HTML);
		}else{
			$HTML = str_replace('[%DATE_FLEXIABLE%]',$clsISO->getNameMonth($feedback_store['departuremonth']).', '.$feedback_store['departureyear'],$HTML);
			$HTML = str_replace('[%DATE_DURATION%]',$clsISO->getNameTravelDuration($feedback_store['travelduration']),$HTML);
		}

		$lst_country = '';
		$country_tmp = $feedback_store['country_id'];
		if(!empty($country_tmp)) {
			for($i=0;$i<count($country_tmp);$i++){
				$lst_country .= ($i==0 ? '' : ' , ').$clsCountryEx->getTitle($country_tmp[$i]);
			}
			if($feedback_store['other_des']!=''){
				$lst_country.=','.$feedback_store['other_des'];
			}
			$HTML = str_replace('[%COUNTRY_DESTINATION%]',$lst_country,$HTML);
		}else{
			$HTML = str_replace('[%COUNTRY_DESTINATION%]',$core->get_Lang('No destination'),$HTML);
		}
		$CompanyAddress ='CompanyAddress_'.$_LANG_ID;
		/* Replace Info */
		$check_open_mail = DOMAIN_NAME.'/check_open_email/'.$feedback_id;
		
		$message = str_replace('[%FEEDBACK_CODE%]',$feedback_code,$message);
		$message = str_replace('May 26, 2011',date('M d, Y',time()),$message);
		$message = str_replace('[%PAGE_NAME%]',PAGE_NAME,$message);
		$message = str_replace('{URL}','http://'.$_SERVER['HTTP_HOST'],$message);
		$message = str_replace('[%LOGO_EMAILTMP%]',(!empty($company_logo)?'<img src="'.$company_logo.'" />':''),$message);
		$message = str_replace('[%ABOUT_LINK%]',$clsPage->getLink(1),$message);
		$message = str_replace('[%CONTACT_LINK%]',$clsISO->getLink('contact'),$message);
		$message = str_replace('[%HTML_TAILOR_INFO%]',$HTML,$message);
		$message = str_replace('[%CUSTOMER_TITLE%]',$clsISO->getNameTitle($feedback_store['title']),$message);
		$message = str_replace('[%CUSTOMER_EMAIL%]',$feedback_store['email'],$message);
		$message = str_replace('[%CUSTOMER_NAME%]',$feedback_store['name'],$message);
		$message = str_replace('[%CUSTOMER_FIRST_NAME%]',$feedback_store['firstname'],$message);
		$message = str_replace('[%CUSTOMER_LAST_NAME%]',$feedback_store['lastname'],$message);
		$message = str_replace('[%CUSTOMER_FULLNAME%]',$feedback_store['fullname'],$message);
		$message = str_replace('[%CUSTOMER_COUNTRY%]',$clsCountry->getTitle($feedback_store['countryex_id']),$message);
		$message = str_replace('[%CUSTOMER_CITY%]',$clsCity->getTitle($feedback_store['city_id']),$message);
		$message = str_replace('[%CUSTOMER_PHONE%]',$feedback_store['phone'],$message);
		$message = str_replace('[%CUSTOMER_ADDRESS%]',$feedback_store['address'],$message);
		$message = str_replace('[%CUSTOMER_REQUEST%]',$feedback_store['Comments'],$message);
		$message = str_replace('[%COMPANY_EMAIL%]',$clsConfiguration->getValue('CompanyEmail'),$message);
		$message = str_replace('[%COMPANY_NAME%]',$clsConfiguration->getValue('CompanyName_'.$_LANG_ID),$message);
		$message = str_replace('[%COMPANY_ADDRESS%]',$clsConfiguration->getValue($CompanyAddress),$message); 
		$message = str_replace('[%COMPANY_PHONE%]',$clsConfiguration->getValue('CompanyPhone'),$message);
		$message = str_replace('[%COMPANY_FAX%]',$clsConfiguration->getValue('CompanyFax'),$message);
		$message = str_replace('[%COMPANY_WEBSITE%]',DOMAIN_NAME,$message);
		$message = str_replace('[%info_social%]',$clsConfiguration->getHTMLSocial(),$message);
		$message = str_replace('[%info_license%]',$clsConfiguration->getValue('GPKD'),$message);
		$message = str_replace('[%DOMAIN_NAME%]',DOMAIN_NAME,$message);
		$message = str_replace('[%DATETIME%]',date('Y',time()),$message);
		$message = str_replace('[%BIRTHDAY%]',$birthday,$message);
		#
		if($feedback_store['please']==1){
			$message = str_replace('[%PLEASE%]',$core->get_Lang('Send me more details via email'),$message);
		} elseif($feedback_store['please']==2) {
			$message = str_replace('[%PLEASE%]',$core->get_Lang('Call me if possible'),$message);
		}else{
			$message = str_replace('[%PLEASE%]',$core->get_Lang('Do not Mind'),$message);
		}
		$message_open_email_= '<img alt="" src="'.$check_open_mail.'" width="1" height="1" border="0" style="display:none"/>';
		$message_open_email=$message.$message_open_email;

		#- Update Booking HTML
		$this->updateOne($feedback_id,"feedback_html='".addslashes(trim($message))."'");
		
		$from = $clsEmailTemplate->getFromEmail($email_template_id);
		
		#Send email to customer
		$owner = $clsEmailTemplate->getFromName($email_template_id);
		$to = trim($feedback_store['email']);
		$subject = $clsEmailTemplate->getSubject($email_template_id). ' '.PAGE_NAME;
		$subject = str_replace('[%PAGE_NAME%]','',$subject);
		
		$is_send_email = $clsISO->sendEmail($from,$to,$subject,$message_open_email,$owner);
		
		#Send email to admin
		$owner = $clsEmailTemplate->getFromName($email_template_id);
		$to = $clsEmailTemplate->getCopyTo($email_template_id);
		$subject = $clsEmailTemplate->getSubject($email_template_id). ' '.PAGE_NAME;
		$subject = str_replace('[%PAGE_NAME%]','',$subject);
		//$is_send_email = $clsISO->sendEmail($from,$to,$subject,$message,$owner);
		$lstto = explode(',',$to);
        foreach ($lstto as $it){
            $multi_email = trim($it);
            if($multi_email){
               $is_send_email = $clsISO->sendEmail($from,$multi_email,$subject,$message,$owner);
                continue;
            }
        }
		return 1; 
	}
	
	function newBooking($feedback_id, $type='', $choose_date=''){
		global $core, $extLang, $clsISO, $clsPage, $clsConfiguration,$_LANG_ID,$email_template_contact_id;
		
		header('Content-Type: text/html; charset=utf-8');
		#


        $clsCountryEx = new Country();
        $clsCountry = new _Country();
		$clsCruise = new Cruise();
		$clsCruiseItinerary = new CruiseItinerary();
		$clsCruiseCabin = new CruiseCabin();
		$clsHotel = new Hotel();
		$clsHotelRoom = new HotelRoom();
        //$clsTailorProperty = new TailorProperty();

        $clsCity = new City();
        $clsTour = new Tour();
		$clsPage = new Page();
		$clsEmailTemplate = new EmailTemplate();

        $clsTourOption = new TourOption();
		$email_template_id=$email_template_contact_id;
        
        
        $header_email = $clsEmailTemplate->getHeader($email_template_id);
		$body_email = $clsEmailTemplate->getContent($email_template_id);
		$footer_email = $clsEmailTemplate->getFooter($email_template_id);

        $message = '<div style="background-color: rgba(245,245,245,1);padding: 30px 0;">';
        $message .= '<div style="max-width: 620px;margin: 0 auto;border-top: 6px solid #fdd835;border-bottom: 1px solid rgba(247,247,247,1);background-color: rgba(255,255,255,1);">';
        $message .= '<div style="border-bottom: 1px solid rgba(247,247,247,1);padding: 3px 20px 0;">'.$header_email.'</div>';
        $message .= '<div style="padding:20px 20px 8px">'.$body_email.'</div>';
        $message .= '<div style="padding:15px 20px">'.$footer_email.'</div>';
        $message .= '</div></div>';

        
        
		#
		header('Content-Type: text/html; charset=utf-8');
		//header('Content-Type: image/gif' );
		#
		$one = $this->getOne($feedback_id);
		$feedback_store = unserialize($one['feedback_store']);
		$birthday = date('d/m/Y',$one['birthday']);
        
        
        $type_feedback=$one['type'];
        if($type_feedback=='Tour'){
            $clsTour=new Tour();

            $tour_id=$feedback_store['tour_id_z'];
            $check_in=$feedback_store['check_in_book_z'];
            $departure_date =$clsISO->getStrToTime($feedback_store['check_in_book_z']);
            $end_date =$clsTour->getEndDate($departure_date,$tour_id);
            
            $Departing=$clsTour->getListDeparturePoint($tour_id);
            $Departing.=', '.$clsISO->converTimeToText5($departure_date);
            
            $End=$clsTour->getEndCityAround($tour_id,1);
            $End.=', '.$clsISO->converTimeToText5($end_date);
    
            
            $number_guest=$feedback_store['number_adults_z'].' '.$core->get_Lang('Adult(s)');
            if($feedback_store['number_child_z']>0 ){
                $number_guest.=$feedback_store['number_child_z'].' '.$core->get_Lang('Child');
            }
            if($feedback_store['number_infants_z']>0 ){
                $number_guest.=$feedback_store['number_infants_z'].' '.$core->get_Lang('Infant(s)');
            }
            $number_room=$feedback_store['number_room'];
            $room=$feedback_store['room'];
            
            $HTML_SERVICE='';
            $HTML_SERVICE.='<p style="font-size: 30px;font-weight: bold;">'.$core->get_Lang('Tour').": ".$clsTour->getTitle($tour_id).'</p>';
            $HTML_SERVICE.='<p>'.$core->get_Lang('Departing').': <span style="font-weight: bold;">'.$Departing.'<span></p>';
            $HTML_SERVICE.='<p>'.$core->get_Lang('End').': <span style="font-weight: bold;">'.$End.'<span></p>';
            $HTML_SERVICE.='<p>'.$core->get_Lang('Traveler').': <span style="font-weight: bold;">'.$number_guest.'<span></p>';
        }elseif($type_feedback=='Hotel'){
            $clsHotel=new Hotel();
            $clsHotelRoom=new HotelRoom();
            
           
            
            $hotel_id=$feedback_store['hotel_id'];
            $check_in=$feedback_store['check_in'];
            $check_in=$_LANG_ID=='vn'?date('d/m/Y',$check_in):date('m/d/Y',$check_in);
            $check_out=$feedback_store['check_out'];
            $check_out=$_LANG_ID=='vn'?date('d/m/Y',$check_out):date('m/d/Y',$check_out);
            $number_guest=$feedback_store['number_adult'].' '.$core->get_Lang('Adult(s)').' ';
            if($feedback_store['number_child']>0 ){
                $number_guest.=$feedback_store['number_child'].' '.$core->get_Lang('Child');
            }
            $number_room=$feedback_store['number_room'];
            $room=$feedback_store['room'];
            
            $HTML_SERVICE='';
            $HTML_SERVICE.='<p style="font-size: 30px;font-weight: bold;">'.$core->get_Lang('Hotel').": ".$clsHotel->getTitle($hotel_id).'</p>';
            $HTML_SERVICE.='<p>'.$core->get_Lang('Check In').': <span style="font-weight: bold;">'.$check_in.'<span></p>';
            $HTML_SERVICE.='<p>'.$core->get_Lang('Check Out').': <span style="font-weight: bold;">'.$check_out.'<span></p>';
            $HTML_SERVICE.='<p>'.$core->get_Lang('Traveler').': <span style="font-weight: bold;">'.$number_guest.'<span></p>';
            foreach($room as $item){
                $HTML_SERVICE.='<p>'.$core->get_Lang('Room name').': <span style="font-weight: bold;">'.$clsHotelRoom->getTitle($item['hotel_room_id']).'<span> x <span style="font-weight: bold;">'.$item['number_room'].'<span></p>';
            }
        }elseif($type_feedback=='Cruise'){
            $clsCruise=new Cruise();
            $clsCruiseCabin=new CruiseCabin();
            $clsCruiseItinerary=new CruiseItinerary();
			$clsCruiseService = new CruiseService();
			
            $cruise_id=$feedback_store['cruise_id'];
            $cruise_itinerary_id=$feedback_store['cruise_itinerary_id'];
            $departure_date=$feedback_store['departure_date'];
            $departure_date=$clsISO->converTimeToText5($departure_date);
            $check_in=$feedback_store['check_in'];
            $check_in=$_LANG_ID=='vn'?date('d/m/Y',$check_in):date('m/d/Y',$check_in);
            $check_out=$feedback_store['check_out'];
            $check_out=$_LANG_ID=='vn'?date('d/m/Y',$check_out):date('m/d/Y',$check_out);
            $number_guest=$feedback_store['number_adult'].' '.$core->get_Lang('Adult(s)');
            if($feedback_store['number_child']>0 ){
                $number_guest.=$feedback_store['number_child'].' '.$core->get_Lang('Child');
            }
            
            $HTML_SERVICE='';
            $HTML_SERVICE.='<p style="font-size: 22px;font-weight: bold;margin: 0 0 10px">'.$core->get_Lang('Cruise').": <a href=".DOMAIN_NAME.$clsCruise->getLink($cruise_id)." title=".$clsCruise->getTitle($cruise_id).">".$clsCruise->getTitle($cruise_id).'<a/></p>';
            /*$HTML_SERVICE.='<p>'.$core->get_Lang('Itinerary').': <span style="font-weight: bold;">'.$clsCruiseItinerary->getNumberDay($feedback_store['cruise_itinerary_id']).'<span></p>';
            $HTML_SERVICE.='<p>'.$core->get_Lang('Departure date').': <span style="font-weight: bold;">'.$departure_date.'<span></p>';*/
            if($feedback_store['cruise_cabin_id']){
                $HTML_SERVICE.='<p style="padding-left:20px;margin:0 0 10px;font-size: 20px;font-weight: bold">'.$core->get_Lang('Cabin name').': <span style="font-weight: bold;">'.$clsCruiseCabin->getTitle($feedback_store['cruise_cabin_id']).'<span> x <span style="font-weight: bold;">'.$feedback_store['number_cabin'].'<span></p>';
            }
			
			if(!empty($feedback_store['compare_price'])){
                $compare_price=$feedback_store['compare_price'];
                foreach($compare_price as $key=>$item){
                    $HTML_SERVICE .= '<div style="padding-left:20px;margin-bottom:10px">
                        <p style="font-weight:bold;margin:0">'.$core->get_Lang('Cabin').' '.($key+1).': '.$item->bed_type.'</p>
                        <p style="padding-left:20px;margin:0">
                        '.$core->get_Lang('Adult').' '.$item->number_adult.' x '.$item->txt_price_adult.'</p>';
                    if($item->number_child){
                        foreach ($item->lst_child as $k => $v){
                            if($v->number_child){
                                $HTML_SERVICE .= '<p style="padding-left:20px;margin:0">'.$core->get_Lang('Children').' '.$v->number_child.' ('.$v->str_age.' '.$core->get_Lang('age').') x '.$v->txt_price_child.'</p>';
                            }
                        }
                    }
                    
                    if($item->is_extra_bed==1){
                        $HTML_SERVICE.='<p style="padding-left:20px;margin:0">
                        '.$core->get_Lang('Extra Bed').' '.$item->txt_price_extra_bed.'</p>';
                    }
                    
                    
                    $HTML_SERVICE .= '</div>';
                }
            }
			if(!empty($feedback_store['total_number_service'])){
				$HTML_SERVICE.='<p style="padding-left:20px;margin:0 0 10px;font-size: 20px;font-weight: bold">'.$core->get_Lang('Addon services').'</p><div style="padding-left:20px;margin-bottom:10px">';
				foreach($feedback_store['cruise_service'] as $key=> $value){
                    if($value['number']){
                        if($_LANG_ID=='vn'){
                            $HTML_SERVICE .= '<p style="padding-left:20px;margin:0">'.$value['number'].' x '.$clsCruiseService->getTitle($value['cruise_service_id']).' '.$clsISO->formatPriceText($value['price']).$clsISO->getRate().'</p>';
                        }else{
                            $HTML_SERVICE .= '<p style="padding-left:20px;margin:0">'.$value['number'].' x '.$clsCruiseService->getTitle($value['cruise_service_id']).' '.$clsISO->getRate().$clsISO->formatPriceText($value['price']).'</p>';
                        }
                        
                    }
				}
				$HTML_SERVICE .= '</div>';
				
			}
			if($feedback_store['check_contact_total'] == 0){
				if($_LANG_ID == 'vn'){
					$HTML_SERVICE.='<p style="padding-left:20px;font-weight:700">'.$core->get_Lang('Total price').': ';
					if($feedback_store['is_promotion'] == 1){
						$HTML_SERVICE.='<del style="font-size:15px;font-weight:400">'.$clsISO->formatPrice($feedback_store["total_price"] + $feedback_store["total_price_service"]).$clsISO->getRate().'</del>';
					}
					$HTML_SERVICE.='<span style="font-weight: bold; font-size:20px;    color:red;margin-left:5px">'.$clsISO->formatPrice($feedback_store["total_price_promotion"] + $feedback_store["total_price_service"]).$clsISO->getRate().'</p>';
				}else{
					$HTML_SERVICE.='<p style="padding-left:20px;font-weight:700">'.$core->get_Lang('Total price').': ';
					if($feedback_store['is_promotion'] == 1){
						$HTML_SERVICE.='<del style="font-size:15px;font-weight:400">'.$clsISO->getRate().$clsISO->formatPrice($feedback_store["total_price"] + $feedback_store["total_price_service"]).'</del>';
					}
					$HTML_SERVICE.='<span style="font-weight: bold; font-size:20px;    color:red;margin-left:5px">'.$clsISO->getRate().$clsISO->formatPrice($feedback_store["total_price_promotion"] + $feedback_store["total_price_service"]).'</p>';
				}
				
			}
			
			
            
        }elseif($type_feedback=='Voucher'){
            $voucher_id = $feedback_store['voucher_id'];
			$clsVoucher = new Voucher();
			$HTML_SERVICE.='<p style="font-size: 30px;font-weight: bold;">'.$core->get_Lang('Voucher').": ".$clsVoucher->getTitle($voucher_id).'</p>';
        }
        
		$feedback_code = $one['feedback_code'];
		$company_logo = $clsConfiguration->getValue('CompanyLogo');
		
		$CompanyAddress ='CompanyAddress_'.$_LANG_ID;
		/* Replace Info */
		$check_open_mail = DOMAIN_NAME.'/check_open_email/'.$feedback_id;
		
		$message = str_replace('[%FEEDBACK_CODE%]',$feedback_code,$message);
		$message = str_replace('May 26, 2011',date('M d, Y',time()),$message);
		$message = str_replace('[%PAGE_NAME%]',PAGE_NAME,$message);
		$message = str_replace('{URL}','http://'.$_SERVER['HTTP_HOST'],$message);
		$message = str_replace('[%LOGO_EMAILTMP%]',(!empty($company_logo)?'<img src="'.$company_logo.'" />':''),$message);
		$message = str_replace('[%ABOUT_LINK%]',$clsPage->getLink(1),$message);
		$message = str_replace('[%CONTACT_LINK%]',$clsISO->getLink('contact'),$message);
		$message = str_replace('[%HTML_TAILOR_INFO%]',$HTML_SERVICE,$message);
		$message = str_replace('[%CUSTOMER_TITLE%]',$clsISO->getNameTitle($feedback_store['title']),$message);
		$message = str_replace('[%CUSTOMER_EMAIL%]',$feedback_store['email'],$message);
		$message = str_replace('[%CUSTOMER_NAME%]',$feedback_store['name'],$message);
		$message = str_replace('[%CUSTOMER_FIRST_NAME%]',$feedback_store['firstname'],$message);
		$message = str_replace('[%CUSTOMER_LAST_NAME%]',$feedback_store['lastname'],$message);
		$message = str_replace('[%CUSTOMER_FULLNAME%]',$feedback_store['fullname'],$message);
		$message = str_replace('[%CUSTOMER_COUNTRY%]',$clsCountry->getTitle($feedback_store['country_id']),$message);
		$message = str_replace('[%CUSTOMER_CITY%]',$clsCity->getTitle($feedback_store['city_id']),$message);
		$message = str_replace('[%CUSTOMER_PHONE%]',$feedback_store['phone'],$message);
		$message = str_replace('[%CUSTOMER_ADDRESS%]',$feedback_store['address'],$message);
		$message = str_replace('[%CUSTOMER_REQUEST%]',$feedback_store['Comments'],$message);
		$message = str_replace('[%COMPANY_EMAIL%]',$clsConfiguration->getValue('CompanyEmail'),$message);
		$message = str_replace('[%COMPANY_NAME%]',$clsConfiguration->getValue('CompanyName_'.$_LANG_ID),$message);
		$message = str_replace('[%COMPANY_ADDRESS%]',$clsConfiguration->getValue($CompanyAddress),$message); 
		$message = str_replace('[%COMPANY_PHONE%]',$clsConfiguration->getValue('CompanyPhone'),$message);
		$message = str_replace('[%COMPANY_FAX%]',$clsConfiguration->getValue('CompanyFax'),$message);
		$message = str_replace('[%COMPANY_WEBSITE%]',DOMAIN_NAME,$message);
		$message = str_replace('[%info_social%]',$clsConfiguration->getHTMLSocial(),$message);
		$message = str_replace('[%info_license%]',$clsConfiguration->getValue('GPKD'),$message);
		$message = str_replace('[%DOMAIN_NAME%]',DOMAIN_NAME,$message);
		$message = str_replace('[%DATETIME%]',date('Y',time()),$message);
		$message = str_replace('[%BIRTHDAY%]',$birthday,$message);
		#
		if($feedback_store['please']==1){
			$message = str_replace('[%PLEASE%]',$core->get_Lang('Send me more details via email'),$message);
		} elseif($feedback_store['please']==2) {
			$message = str_replace('[%PLEASE%]',$core->get_Lang('Call me if possible'),$message);
		}else{
			$message = str_replace('[%PLEASE%]',$core->get_Lang('Do not Mind'),$message);
		}
		$message_open_email_= '<img alt="" src="'.$check_open_mail.'" width="1" height="1" border="0" style="display:none"/>';
		$message_open_email=$message.$message_open_email;
		
		#- Update Booking HTML
		$this->updateOne($feedback_id,"feedback_html='".addslashes(trim($message))."'");
		
		$from = $clsEmailTemplate->getFromEmail($email_template_id);
		
		#Send email to customer
		$owner = $clsEmailTemplate->getFromName($email_template_id);
		$to = trim($feedback_store['email']);
		$subject = $clsEmailTemplate->getSubject($email_template_id). ' '.PAGE_NAME;
		$subject = str_replace('[%PAGE_NAME%]','',$subject);
		
		$is_send_email = $clsISO->sendEmail($from,$to,$subject,$message_open_email,$owner);
		$to = $clsEmailTemplate->getCopyTo($email_template_id);
        if(!empty($to)){
            $owner = $clsEmailTemplate->getFromName($email_template_id);
            $subject = $clsEmailTemplate->getSubject($email_template_id). ' '.PAGE_NAME;
            $subject = str_replace('[%PAGE_NAME%]','',$subject);
            $lstto = explode(',',$to);
            foreach ($lstto as $it){
                $multi_email = trim($it);
                if($multi_email){
                    $is_send_email = $clsISO->sendEmail($from,$multi_email,$subject,$message,$owner);
                    continue;
                }
            }
        }
		return 1; 
	}
	
	function newRegAdvisory($post, $type, $choose_date){
		global $core, $extLang, $clsISO, $clsPage, $clsConfiguration,$_LANG_ID,$email_template_reg_advisory;

		header('Content-Type: text/html; charset=utf-8');
		#
		$clsCountryEx = new Country();
		$clsCountry = new _Country();
		$clsCity = new City();
		$clsTour = new Tour();
		$clsCruise = new Cruise();
		$clsCruiseItinerary = new CruiseItinerary();
		$clsHotel = new Hotel();
		$clsPage = new Page();
		$clsEmailTemplate = new EmailTemplate();
		$clsTailorProperty = new TailorProperty();

		$email_template_id=$email_template_reg_advisory;
		#
		header('Content-Type: text/html; charset=utf-8');
		header('Content-Type: image/gif' );
		#

		$company_logo = $clsConfiguration->getValue('CompanyLogo');

		#---

		$message = $clsEmailTemplate->getContent($email_template_id);

		$HTML = '';


//		$message = str_replace('[%FEEDBACK_CODE%]',$feedback_code,$message);
//		$message = str_replace('May 26, 2011',date('M d, Y',time()),$message);
		$message = str_replace('[%PAGE_NAME%]',PAGE_NAME,$message);
		$message = str_replace('{URL}','http://'.$_SERVER['HTTP_HOST'],$message);
		$message = str_replace('[%FULL_NAME%]',$post['fullname'],$message);
		$message = str_replace('[%PHONE%]',$post['phone'],$message);
		$message = str_replace('[%EMAIL%]',$post['email'],$message);
		$message = str_replace('[%MESSAGE%]',$post['message'],$message);
        $message = str_replace('[%COMPANY_EMAIL%]',$clsConfiguration->getValue('CompanyEmail'),$message);
		$message = str_replace('[%COMPANY_NAME%]',$clsConfiguration->getValue('CompanyName_'.$_LANG_ID),$message);
		$message = str_replace('[%COMPANY_ADDRESS%]',$clsConfiguration->getValue($CompanyAddress),$message); 
		$message = str_replace('[%COMPANY_PHONE%]',$clsConfiguration->getValue('CompanyPhone'),$message);
		$message = str_replace('[%COMPANY_FAX%]',$clsConfiguration->getValue('CompanyFax'),$message);
		$message = str_replace('[%COMPANY_WEBSITE%]',DOMAIN_NAME,$message);
		$message = str_replace('[%info_social%]',$clsConfiguration->getHTMLSocial(),$message);
		$message = str_replace('[%info_license%]',$clsConfiguration->getValue('GPKD'),$message);
		$message = str_replace('[%DOMAIN_NAME%]',DOMAIN_NAME,$message);
		$message = str_replace('[%DATETIME%]',date('Y',time()),$message);
		$message = str_replace('[%BIRTHDAY%]',$birthday,$message);


		$from = $clsEmailTemplate->getFromEmail($email_template_id);

		#Send email to customer
		$owner = $clsEmailTemplate->getFromName($email_template_id);
		$to = trim($post['email']);
		$subject = $clsEmailTemplate->getSubject($email_template_id). ' '.PAGE_NAME;
		$subject = str_replace('[%PAGE_NAME%]','',$subject);

		$is_send_email = $clsISO->sendEmail($from,$to,$subject,$message,$owner);

		#Send email to admin
		$to = $clsEmailTemplate->getCopyTo($email_template_id);
        if(!empty($to)){
            $owner = $clsEmailTemplate->getFromName($email_template_id);
            $subject = $clsEmailTemplate->getSubject($email_template_id). ' '.PAGE_NAME;
            $subject = str_replace('[%PAGE_NAME%]','',$subject);
    //		$is_send_email = $clsISO->sendEmail($from,$to,$subject,$message,$owner);
            $lstto = explode(',',$to);
            foreach ($lstto as $it){
                $multi_email = trim($it);
                if($multi_email){
                    $is_send_email = $clsISO->sendEmail($from,$multi_email,$subject,$message,$owner);
                    continue;
                }
            }
        }
		return 1;
	}
	function getFeedBackHTML($feedback_id){
		$feedbackHTML = $this->getOneField('feedback_html',$feedback_id);
		return $feedbackHTML;
	}
    function doDelete($list_id){
        $this->deleteByCond("$this->pkey in ($list_id)");
    }
	function newBookingTest($feedback_id){
		global $core, $extLang, $clsISO, $clsPage, $clsConfiguration,$_LANG_ID,$email_template_contact_id;
		 
		header('Content-Type: text/html; charset=utf-8');
		#


        $clsCountryEx = new Country();
        $clsCountry = new _Country();
		//$clsCruise = new Cruise();
		//$clsCruiseItinerary = new CruiseItinerary();
		//$clsHotel = new Hotel();
        //$clsTailorProperty = new TailorProperty();

        $clsCity = new City();
        $clsTour = new Tour();
		$clsPage = new Page();
		$clsEmailTemplate = new EmailTemplate();

        $clsTourOption = new TourOption();
		$email_template_id=130;
		#
		header('Content-Type: text/html; charset=utf-8');
		
		
		#---
        
        if(1==2){
            
            $EmailsInfo =  $clsEmailTemplate->getOne($email_template_id);
            $message = '<div style="background-color: rgba(245,245,245,1);padding: 30px 0;">';
            $message .= '<div style="max-width: 620px;margin: 0 auto;border-top: 6px solid rgba(10, 49, 124, 0.9);border-bottom: 1px solid rgba(247,247,247,1);background-color: rgba(255,255,255,1);">';
            $message .= '<div style="border-bottom: 1px solid rgba(247,247,247,1);padding: 3px 20px 0;">'.$EmailsInfo['msg_header'].'</div>';
            $message .= '<div style="padding:20px 20px 8px">'.$EmailsInfo['msg'].'</div>';
            $message .= '<div style="padding:15px 20px">'.$EmailsInfo['msg_footer'].'</div>';
            $message .= '</div></div>';
            $message = str_replace('[%PAGE_NAME%]',PAGE_NAME,$message);
            $message = str_replace('{URL}','http://'.$_SERVER['HTTP_HOST'],$message);
            $message = str_replace('[%DATETIME%]',date('Y'),$message);
            $message = str_replace('[%CUSTOMER_DOMAINNAME%]',DOMAIN_NAME,$message);
            $message = str_replace('[%COMPANYNAME%]',$onePotential['companyname'],$message);
            $message = str_replace('[%ADDRESS%]',$onePotential['address'],$message);
            $message = str_replace('[%EMAIL%]',$onePotential['email'],$message);
            $message = str_replace('[%PHONE%]',$onePotential['phone'],$message);
            $message = str_replace('[%BUSINESS_CODE%]',$onePotential['business_code'],$message);
            $message = str_replace('[%CONTACT_NAME%]',$oneContact['name'],$message);
            $message = str_replace('[%POSITION%]',$oneContact['position'],$message);
            $message = str_replace('[%CONTACT_EMAIL%]',$oneContact['email'],$message);
            $message = str_replace('[%CONTACT_PHONE%]',$oneContact['phonenumber'],$message);

        }
        
        
		$message = "";
		$message = $clsEmailTemplate->getContent($email_template_id);
		$from = $clsEmailTemplate->getFromEmail($email_template_id);
		
		#Send email to customer
		$owner = $clsEmailTemplate->getFromName($email_template_id);
		$to = 'loi@vietiso.com';
		$subject = $clsEmailTemplate->getSubject($email_template_id). ' '.PAGE_NAME;
		$subject = str_replace('[%PAGE_NAME%]','',$subject);
		
		//print_r($message); die();
		
		$is_send_email = $clsISO->sendEmail($from,$to,$subject,$message,$owner);
		
		return 1; 
	}
}
?>