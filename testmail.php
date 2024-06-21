<?php 
	$from = 'nguyenvanloi1993gtvt@gmail.com';
	$to = 'loi@vietiso.com';
	$subject = 'VietISO Test Cronjob';
	$owner = 'VietISO Test Cronjob';
	$message = 'VietISO Test Message Cronjob';
	#


    $headers = 	"MIME-Version: 1.0\r\n".
				"Content-type: text/html; charset=utf-8\r\n".
				"From:  ".$owner."<".$from.">\r\n".
				"Subject: ".$subject."\r\n";
                $is_send_mail = mail($to, $subject, $message, $headers);
?>