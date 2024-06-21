<?php
/*======================================================================*\
|| #################################################################### ||
|| # The Class of the ISOCMS                                          # ||
|| # ISOCMS 6.0.0 By Luong Tien Dung (luongtiendung@gmail.com)        # ||
|| # ---------------------------------------------------------------- # ||
|| # All PHP code in this file is ©2007-2014 VietISO JSC.             # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- ISOCMS IS NOT FREE SOFTWARE ----------------    # ||
|| # http://www.vietiso.com | http://www.vietiso.com/license.html     # ||
|| #################################################################### ||
\*======================================================================*/
class AdminButton extends dbBasic{
	function AdminButton(){
		$this->pkey = "adminbutton_id";
		$this->tbl = DB_PREFIX."adminbutton";
	}
	function getTitle($adminbutton_id){
		global $_LANG_ID;
		$one = $this->getOne($adminbutton_id);
		return $one['title'];
	}
	function getMenu($_type){
		return $this->getAll("_type='".$_type."' order by order_no asc");
	}
	function getURL($adminbutton_id){
		global $_LANG_ID;
		$one = $this->getOne($adminbutton_id);
		if($one['url_page']!='')
			return ($one['url_page']=='javascript:void(0);')?'javascript:void(0);':PCMS_URL.'/?'.$one['url_page'];
		return PCMS_URL.'/?mod='.$one['mod_page'];
	}
	function getChild($adminbutton_id){
		return $this->getAll("is_trash=0 and is_active=1 and parent_id>0 and parent_id='$adminbutton_id' order by order_no asc");
	}
	function checkDEV($adminbutton_id){
		global $core;
		if($core->_SESS->user_id==1){ return 1;}
		if($core->_SESS->user_id==2){ return 1;}
		if($this->getOneField('dev_access',$adminbutton_id)){
			return (_DEV) ? 1 : 0;
		}
		return 1;
	}
	
	function checkPackage($adminbutton_id,$package_id){
		global $core;

		$package_check_id=$this->getOneField('package_id',$adminbutton_id);
		$package_check_id=unserialize($package_check_id);
		if($package_id==4){
			return 1;
		}else{
			if($package_check_id==''){
				return 1;
			}else{
				if(in_array($package_id,$package_check_id)){
					return 1;
				}else{
					return 0;
				}
			}
		}
	}
	
	function checkConfiguration($adminbutton_id){
		$clsConfiguration = new Configuration();
		$CONFIGURATION_KEY = $this->getOneField('CONFIGURATION_KEY',$adminbutton_id);
		if(trim($CONFIGURATION_KEY) != '' && $CONFIGURATION_KEY != '0')
			return $clsConfiguration->getValue($CONFIGURATION_KEY);
			//return 1;
		else
			return 1;
	}
	function doDelete($adminbutton_id){
		$lstItem = $this->getAll("parent_id='$adminbutton_id'");
		if(is_array($lstItem) && count($lstItem) > 0){
			for($i=0; $i<count($lstItem); $i++){
				$this->doDelete($lstItem[$i][$this->pkey]);
			}
			unset($lstItem);
		}
		$this->deleteOne($adminbutton_id);
		#
		return 1;
	}
}
?>