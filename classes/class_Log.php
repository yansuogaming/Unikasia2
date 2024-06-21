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
class Log extends dbBasic{
	function __construct(){
		$this->pkey = "log_id";
		$this->tbl = DB_PREFIX."log";
	}
	function insertAction($type,$pkeyTable,$pvalTable,$title,$intro){
		global $core;
		$f = "type,pkeyTable,pvalTable,title,intro,reg_date,user_id";
		$v = "'$type','$pkeyTable','$pvalTable','".addslashes($title)."','".addslashes($intro)."','".time()."','".$core->_SESS->user_id."'";
		$this->insertOne($f,$v);
		return 1;
	}
	function getActionByType($type,$pkeyTable,$pvalTable){
		$all = $this->getAll("type='$type' and pkeyTable='$pkeyTable' and pvalTable='$pvalTable'");
		return $all;
	}
	function getFieldTable($field,$log_id){
		$one = $this->getOne($log_id);
		$intro = $one['intro'];
		$un_intro = unserialize($intro);
		return $un_intro[$field];
	}
	
}
?>