<?php
define('DB_NAME', 'pw3');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

if ( !defined('ABSPATH') )
	define('ASBPATH', dirname(__FILE__) . '/');

if ( !defined('BASEURL') )
	define('BASEURL', '/tpi2-login-db/');
	
if ( !defined('DBAPI') )
	define('DBAPI', ASBPATH . 'inc/database.php');
	
define('HEADER_TEMPLATE', ASBPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ASBPATH . 'inc/footer.php');