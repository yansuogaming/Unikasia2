<?php
class BillingHistory extends dbBasic{
	function __construct() {
        $this->pkey = "billing_history_id";
        $this->tbl = DB_PREFIX."billing_history";
		
    }
	function getPaymentTermComplete($booking_id,$bill_type="PAYMENT"){
		if($booking_id > 0){
			$cond = "booking_id = '".$booking_id."' and status = 1 and bill_type='".$bill_type."'";
			$deposit = $this->getAll($cond,'SUM(bill_money) as deposit');
			return ($deposit[0]['deposit'] > 0)?$deposit[0]['deposit']:0;
		}
		return false;		
	}
	
}