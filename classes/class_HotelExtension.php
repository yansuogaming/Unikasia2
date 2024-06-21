<?php
class HotelExtension extends dbBasic{
    function __construct(){
        $this->pkey = "hotel_extension_id";
        $this->tbl = DB_PREFIX."hotel_extension";
    }
    function checkExist($tour_1_id, $tour_2_id){
        $res = $this->getAll("hotel_id='$tour_1_id' and tour_id='$tour_2_id' limit 0,1");
        return !empty($res) ? 1 : 0;
    }
    function checkExistOne($tour_1_id){
        $res = $this->getAll("hotel_id='$tour_1_id' limit 0,1");
        return !empty($res) ? 1 : 0;
    }
}
?>