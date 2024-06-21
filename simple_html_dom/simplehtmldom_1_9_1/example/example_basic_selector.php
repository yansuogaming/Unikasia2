<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');
 
// get DOM from URL or file
$html = file_get_html('http://bacgiangtourism.vn/vi/business');

// find all div tags with id=gbar
foreach($html->find('div#data-pagination ul.result-list') as $e)
    echo $e->innertext . '<br>';
// find all image with full tag
foreach($html->find('img') as $e)
    echo $e->outertext . '<br>';
foreach($html->find('a') as $e) 
    echo $e->href . '<br>';


// extract text from table
echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';

// extract text from HTML
echo $html->plaintext;
?>