<?php 

ini_set('display_errors', 'On');

# Select (one) level of reporting
#error_reporting(0); // Turn off all error reporting
#error_reporting(E_ERROR | E_WARNING | E_PARSE);	// Report simple running errors
#error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);	// Reporting E_NOTICE can be good too
error_reporting(E_ALL & ~E_NOTICE);	// Report all errors except E_NOTICE
#error_reporting(E_ALL);	// Report all PHP errors (see changelog)
#error_reporting(-1); // Report all PHP errors


$live_server = false;

$website_path = "http://".$_SERVER['SERVER_NAME'].":81";
$file_root_path = "/projects/website/inside";

$installed_path = "phails/NeuerOrdner";


?>