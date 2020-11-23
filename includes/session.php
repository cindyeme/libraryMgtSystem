<?php
	require_once('conn.php');
	session_start();

	// student session
	if(isset($_SESSION['student'])){
		$sql = "SELECT * FROM students WHERE id = '".$_SESSION['student']."'";
		$query = $conn->query($sql);
		$student = $query->fetch_assoc();
	}

	// user session
    if(isset($_SESSION['serial_number'])){
        
        // get the user information.
        $serial_number = $_SESSION['serial_number'];

        $user_sql = "SELECT * FROM users WHERE serial_number = '$serial_number' AND deleted = 1";
        $result = mysqli_query($conn, $user_sql);

        $user = mysqli_fetch_assoc($result);
    }else{
      $errorMsg = "Login--first!";
        header('location: index.php?error='.$errorMsg);
    }

?>