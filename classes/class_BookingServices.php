<?php
class BookingServices extends dbBasic{
	function __construct(){
		$this->pkey = "BookingServices_id";
		$this->tbl = DB_PREFIX."bookingServices";
	}
	function getBookingServicesInfo($BookingServices_id){
		$one = $this->getOne($BookingServices_id);
		$BookingServices_store = unserialize($one['BookingServices_store']);
		return $BookingServices_store;
	}
	function getMaxOrder(){
		$res = $this->getAll("1=1 order by order_no desc");
		return intval($res[0]['order_no'])+1;
	}
	function generateBookingServices($BookingServices_id){
		global $clsConfiguration;
		return $clsConfiguration->getValue('SitePrefixBookingServices').$BookingServices_id;
	}
	function countTotalAllBookingServices($clsTable) {
		$cond = "1=1";
		return $this->countItem($cond);
	}
	function countTotalBookingServices($is_process='') {
		$cond = "1=1 and is_process = '$is_process'";
		return $this->countItem($cond);
	}
	
	function newBooking($BookingServices_id){
		global $core, $extLang, $clsISO, $clsPage, $clsConfiguration;
		#
		$clsBookingServices = new BookingServices();
		$clsEmailTemplate = new EmailTemplate();
		$clsCountry=new _Country();
		$clsEvents=new Service();
		$message = $clsEmailTemplate->getContent(45);
		header('Content-Type: text/html; charset=utf-8');
		
		$oneItem = $this->getOne($BookingServices_id);
		$BookingServices_store = unserialize($oneItem['BookingServices_store']);
		$BookingServices_code = $oneItem['BookingServices_code'];
		$company_logo = $clsConfiguration->getValue('CompanyLogo'); 
		#---
		$message = str_replace('[%PAGE_NAME%]',PAGE_NAME,$message);
		$message = str_replace('[%BOOKINGSERVICE_CODE%]',$BookingServices_code,$message);
		$message = str_replace('[%CUSTOMER_EMAIL%]',$BookingServices_store['email'],$message);
		$message = str_replace('[%CUSTOMER_FULLNAME%]',$BookingServices_store['fullname'],$message);
		//$message = str_replace('[%CUSTOMER_COUNTRY%]',$clsCountry->getTitle($BookingServices_store['country_id']),$message);
		$message = str_replace('[%CUSTOMER_PHONE%]',$BookingServices_store['phone'],$message);
		$message = str_replace('[%CUSTOMER_ADDRESS%]',$BookingServices_store['address'],$message);
		$message = str_replace('[%CUSTOMER_MESSAGE%]',$BookingServices_store['message'],$message);
		$message = str_replace('[%SERVICES_NAME%]',$clsEvents->getTitle($oneItem['service_id']),$message);
		$message = str_replace('[%COMPANY_EMAIL%]',$clsConfiguration->getValue('CompanyEmail'),$message);
		$message = str_replace('[%COMPANY_ADDRESS%]',$clsConfiguration->getValue('CompanyAddress'),$message);
		$message = str_replace('[%COMPANY_PHONE%]',$clsConfiguration->getValue('CompanyPhone'),$message);
		$message = str_replace('[%COMPANY_FAX%]',$clsConfiguration->getValue('CompanyFax'),$message);
		$message = str_replace('[%DATETIME%]',date('Y',time()),$message);
		$this->updateOne($BookingServices_id, "BookingServices_html='".addslashes($message)."'");
		
		$from = $clsEmailTemplate->getFromEmail(45);
		
		#-- Send email to customer
		$owner = $clsEmailTemplate->getFromName(45);
		$to = trim($oneItem['email']);
		$subject = str_replace('[%PAGE_NAME%]',PAGE_NAME,$clsEmailTemplate->getSubject(45));
		$is_send_email = $clsISO->sendEmail($from,$to,$subject,$message,$owner);
		
		#-- Send email to administrator
		$owner = $clsEmailTemplate->getFromName(45);
		$to = $clsEmailTemplate->getCopyTo(45);
		$subject = str_replace('[%PAGE_NAME%]',PAGE_NAME,$clsEmailTemplate->getSubject(45));
		$is_send_email = $clsISO->sendEmail($from,$to,$subject,$message,$owner);
		return 1; 
	}
}
?>