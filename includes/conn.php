<?php

	// defining my db credentials for local testing
	$conn = new mysqli('localhost', 'root', '', 'libsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// defining my db credentials for online testing 
    // define("DB_SERVER", "db4free.net:3306");
    // define("DB_USER", "libcater");
    // define("DB_PASSWORD", "libcater0853");
    // define("DB_NAME", "libcater");
	
?>