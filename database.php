<?php
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "mulutmerah");
	define("DB_DATABASE", "evisa_application");
	
	$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

	if ($mysqli -> connect_error) {
		die ("Connection error" . $mysqli -> connect_error);
	}

	return $mysqli;

?>