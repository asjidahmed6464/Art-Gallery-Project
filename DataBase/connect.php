<?php
	//php code here
	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "project";

	$con = new MySQLi($server, $user, $pass, $dbname);

	if ($con->connect_error) 
		echo "Error: ".$con->connect_error;
	else
		echo "Connect successfully";

?>
