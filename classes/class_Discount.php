<?php
class Discount extends dbBasic{
	function __construct(){
		$this->pkey = "discount_id";
		$this->tbl = DB_PREFIX."discount";
	}
	function getCode($discount_id, $oDataTable=null){
		if(!isset($oDataTable['code'])){
			$oDataTable = $this->getOne($discount_id);
		}
		return $oDataTable['code'];
	}
	function getStatus($discount_id){
		global $dbconn, $core, $clsISO;
		$one = $this->getOne($discount_id);
		$start_date = $one['start_date'];
		$due_date = $one['due_date'];
		$is_due_date = $one['is_due_date'];
		
		if($is_due_date==1 && $due_date<time()){
			$label = 'warning';
			$text = 'Ngừng áp dụng';
		} else if($start_date > time()) {
			$label = 'info';
			$text = 'Chưa bắt đầu';
		} else if($start_date<time()){
			if($is_due_date==0){
				$label = 'success';
				$text = 'Đang áp dụng';
			} else if($is_due_date==1 && $due_date>time()){
				$label = 'success';
				$text = 'Đang áp dụng';
			} else {
				$label = 'warning';
				$text = 'Ngừng áp dụng';
			}
		} 
		$html = '<span class="label label-'.$label.'">'.$text.'</span>';
		return $html;
	}
	function doDelete($discount_id){
		
		// Delete Cruise Promotion
		$clsDiscountItem = new DiscountItem();
		$clsDiscountItem->deleteByCond("discount_id='$discount_id'");
		#
		$this->deleteOne($discount_id);
		return 1;
	}
}