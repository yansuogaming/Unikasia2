<?php

global $smarty, $assign_list , $dbconn;

$clsReview = new Testimonial();
$listReview = $clsReview->GetAll("is_trash = 0 and is_online=1 order by order_no ASC limit 9");

$smarty->assign('listReview', $listReview);
