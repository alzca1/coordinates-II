<?php 

define("PRIVATE_PATH",dirname(__FILE__)); 
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

$leaflet_end = strpos($_SERVER['SCRIPT_NAME'], '/leaflet3') + 9; 
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$folder_root = substr($_SERVER['SCRIPT_NAME'], 0, $leaflet_end);
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);



define('WWW_ROOT', $doc_root);
define('ROOT', $folder_root);


require_once('query_functions.php');
require_once('db_credentials.php');
require_once('_db.php');
require_once('functions.php');

$db = db_connect();
$errors = [];
