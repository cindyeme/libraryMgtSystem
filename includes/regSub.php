<?php
        require_once('conn.php');

        
        function checkData($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
        if(isset($_POST['submit'])){
            $fullname = checkData($_POST['fullname']);
            $serial_number = checkData($_POST['usn']);
            $mobile = checkData($_POST['mobile']);
            $email = checkData($_POST['email']);
            $password = checkData($_POST['password']);

                // check if email already exist
            $query = "SELECT * FROM users WHERE serial_number = '$serial_number' AND deleted = 1";

            //execute query
            $res = mysqli_query($conn, $query);

            if(mysqli_num_rows($res) > 0){

                // error message
                $error_msg = "Serial_number--already--exists!";
                header('location: ../sign_up.php?error='.$error_msg);
            } else{

            // try inserting values
            $newPassword = sha1($password);

            $sql = "INSERT INTO users(fullname, serial_number, mobile, email, password) VALUES ('$fullname', '$serial_number', '$mobile', '$email', '$newPassword')";

            // execute query
            $result = mysqli_query($conn, $sql);
            // check if inserted
            if($result){
                session_start(); // automatically logs the user in after registration.
                $_SESSION['serial_number'] = $serial_number;
                header('location: ../user_index.php');
            }else{
                $failed = "error".mysqli_error($conn);
                header('location: ../index.php?error='.$failed);
                }
            }
        } 


?>