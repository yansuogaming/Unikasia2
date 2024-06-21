<?php 
	ini_set('display_errors',1);
error_reporting(E_ALL & ~E_STRICT);//E_ALL
include('simple_html_dom.php');
$url = 'http://bacgiangtourism.vn/vi/business';
$html = file_get_html($url);
print_r($html);die();
?>
