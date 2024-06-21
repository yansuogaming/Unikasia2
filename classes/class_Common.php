<?php
/*======================================================================*\
|| #################################################################### ||
|| # The Classes configurations of the ISOCMS                         # ||
|| # ISOCMS 6.0.0 By Luong Tien Dung (luongtiendung@gmail.com)        # ||
|| # ---------------------------------------------------------------- # ||
|| # All PHP code in this file is ©2007-2014 VietISO JSC.             # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- ISOCMS IS NOT FREE SOFTWARE ----------------    # ||
|| # http://www.vietiso.com | http://www.vietiso.com/license.html     # ||
|| #################################################################### ||
\*======================================================================*/
class Common extends dbBasic{
	function __construct(){
		$this->pkey = "common_id";
		$this->tbl = DB_PREFIX."common";
	}
	function getAddress($common_id){
		$one=$this->getOne($common_id);
		return $one['company_address'];
	}
	function getPhone($common_id){
		$one=$this->getOne($common_id);
		return $one['company_phone'];
	}
	function getFax($common_id){
		$one=$this->getOne($common_id);
		return $one['company_fax'];
	}
	function getEmail($common_id){
		$one=$this->getOne($common_id);
		return $one['company_email'];
	}
	
	function getTerms(){
		global $_LANG_ID;
		$one=$this->getOne(1);
		return $one['terms_'.$_LANG_ID];
	}
	function getPrivacy(){
		global $_LANG_ID;
		$one=$this->getOne(1);
		return $one['privacy_'.$_LANG_ID];
	}
	function getFAQ(){
		global $_LANG_ID;
		$one=$this->getOne(1);
		return $one['faq_'.$_LANG_ID];
	}
	function makeSelectListTour($selected=''){
		$_month = array(
			'3'	=>	'3 tour',
			'6'	=>	'6 tour',
			'9'	=>	'9 tour'
		);
		$html = '';
		foreach($_month as $k=>$v){
			$html .= '<option value="'.$k.'" '.($selected==$k ? 'selected="selected"':'').'>'.$v.'</option>';	
		}
		return $html;
	}
}
?>