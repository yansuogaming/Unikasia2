<?php
	ini_set('display_errors',1);
error_reporting(E_ERROR & ~E_STRICT);//E_ALL
define("PCMS_DIR", $_SERVER['DOCUMENT_ROOT']);
#Common Directory
define("DIR_INCLUDES", 	PCMS_DIR."/inc");
define("DIR_LANG", 		PCMS_DIR."/lang");
define("DIR_LOGS", 		PCMS_DIR."/logs");
define("DIR_THEMES", 	PCMS_DIR."/themes");
define("DIR_TMP", 		PCMS_DIR."/tmp");
define("DIR_UPLOADS",	PCMS_DIR."/uploads");
define("DIR_CLASSES", 	PCMS_DIR."/classes");
define("DIR_COMMON", 	DIR_INCLUDES."/iso");
define("DIR_SMARTY", 	DIR_INCLUDES."/smarty");
define("DIR_ADODB", 	DIR_INCLUDES."/adodb");
define("DIR_PEAR", 		DIR_INCLUDES."/PEAR");
define("DIR_LIB", 		DIR_INCLUDES."/lib");
define("DIR_CONF", 		DIR_INCLUDES."/conf");
	ini_set('display_errors',1);
error_reporting(E_ALL & ~E_STRICT);//E_ALL
// composer require google/apiclient
require_once DIR_INCLUDES.'/ga_report/vendor/autoload.php';

// Start a session to persist credentials.
session_start();

// Create the client object and set the authorization configuration
// from the client_secretes.json you downloaded from the developer console.
$client = new Google_Client();
$secrets = __DIR__ . '/client_secret_519255974073-cc0jsf6nvti8tck1jv0jvq93749in0k4.apps.googleusercontent.com.json';
$client->setAuthConfig($secrets);
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');
$client->addScope(Google_Service_Analytics::ANALYTICS_READONLY);
print_r($client);die();
// Handle authorization flow from the server.
if (! isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
?>
