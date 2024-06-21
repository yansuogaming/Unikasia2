<?php 
function curl_get_contents($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

$url_exchangerates = "https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx?b=1";
$xml_exchangerates = file_get_contents($url_exchangerates);

if($xml_exchangerates==''){
	$xml_exchangerates = curl_get_contents($url_exchangerates);
}
$data_exchangerates = simplexml_load_string($xml_exchangerates);
if($data_exchangerates!=''){
	$data_exchangerates->saveXML($_SERVER['DOCUMENT_ROOT'].'/xml_exchange_rate_vcb.xml');
}

return 1;
?>