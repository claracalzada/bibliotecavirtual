<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'Clara1999');
	define('DB_DATABASE', 'basetfg');
	
	$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE,'3306');
	mysqli_set_charset($connection,'utf8');

?>