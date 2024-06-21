<?php
// example of how to modify HTML contents
include('../simple_html_dom.php');
	ini_set('display_errors',1);
error_reporting(E_ERROR & ~E_STRICT);//E_ALL
// get DOM from URL or file
$html = file_get_html('http://bacgiangtourism.vn/vi/business/?page=3&pagesize=8');
print_r($html);die();
// remove all image
foreach($html->find('#data-pagination .col-md-16') as $e)
    $e->outertext = '';

// dump contents
echo $html;
?>