<?php

	// defining my db credentials for local testing
	// $conn = new mysqli('localhost', 'root', '', 'libsystem');

	// if ($conn->connect_error) {
	//     die("Connection failed: " . $conn->connect_error);
	// }

	// defining my db credentials for online testing 

    define("DB_SERVER", "db4free.net:3306");
    define("DB_USER", "emereninicynthia");
    define("DB_PASSWORD", "emereninicynthia0853");
	define("DB_NAME", "emereninicynthia");
	
	$live_conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

	if($live_conn){
		//echo "connected";
	}else{
		//echo "Not connected";
	}
	
?>