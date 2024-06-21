<?php
class VoucherDestination extends dbBasic{
	function __construct(){
		$this->pkey = "voucher_destination_id";
		$this->tbl = DB_PREFIX."voucher_destination";
	}
	function getMaxOrderNoByTable($blog_id){
		$res = $this->getAll("voucher_id='$voucher_id' order by order_no DESC limit 0,1",'order_no');
		return intval($res[0]['order_no'])+1;
	}
	function checkExist($voucher_id, $destination_id){
		$res = $this->getAll("voucher_id='$voucher_id' and destination_id='$destination_id' limit 0,1",$this->pkey);
		return (!empty($res))?1:0;
	}
	function getByDestination($voucher_id,$destination_id){
		$all=$this->getAll("is_trash=0 and voucher_id='$voucher_id' and destination_id='$destination_id' order by ".$this->pkey." limit 0,1",$this->pkey);
		return $all[0][$this->pkey];
	}
	function getByVoucher($voucher_id){
		$all=$this->getAll("is_trash=0 and is_online=1 and voucher_id='$voucher_id' ",$this->pkey.",city_id");
		return $all;
		
	}
}
?>