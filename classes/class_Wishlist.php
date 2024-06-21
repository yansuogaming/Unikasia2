<?php

class Wishlist extends dbBasic {
    function __construct() {
        $this->pkey = "wishlist_id";
        $this->tbl = DB_PREFIX . "wishlist";
    }
	function getMaxID() {
        $res = $this->getAll("1=1 order by wishlist_id desc");
        return intval($res[0]['wishlist_id']) + 1;
    }
    function doDelete($pvalTable) {
        // Delete
        $this->deleteOne($pvalTable);
        return 1;
    }
}
?>