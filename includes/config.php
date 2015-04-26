<?php
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'].'/__htmlStartKit');
define('URL_ROOT', '/__htmlStartKit');
define('DB_SERVER', 'localhost');
define('DB_NAME', 'database_name');
define('DB_USER', 'root');
define('DB_PASS', '');

define('LANG_CODE', 'hr');

/* ERROR REPORTING */
define('DEBUG_MODE', TRUE);
if ( DEBUG_MODE ) error_reporting( E_ALL ^ E_NOTICE );
else error_reporting(0);

/* LOAD FILES */
//require_once(ROOT_DIR."/includes/connection.php");
require_once( ROOT_DIR."/includes/functions.php" );
require_once( ROOT_DIR."/includes/seo.php" );

/* FILENAME */
$filename = str_replace( ".php", "", basename($_SERVER['REQUEST_URI']) );
$filename = strtok( $filename, '?' );

?>