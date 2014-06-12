<?php

	$server = "localhost";
	$username = "root";
	$password = "abcd";
	$database = "mahasiswa";

	mysql_connect($server, $username, $password);
	mysql_select_db($database);

?>