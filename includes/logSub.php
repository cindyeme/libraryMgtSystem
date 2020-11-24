<?php
        require_once('conn.php');

            function checkData($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        if(isset($_POST['submit'])){
            $serial_number = checkData($_POST['usn']);
            $email = checkData($_POST['email']);
            $password = checkData($_POST['password']);


                $newPassword = sha1($password);
        
                $sql = "SELECT * FROM `users` WHERE `serial_number` = '$serial_number' AND `email` = '$email' AND `password` = '$newPassword' ";


                $res = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($res);

                if(mysqli_num_rows($res) > 0){
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['serial_number'] = $row['serial_number'];
                    header('location: https://libcater.herokuapp.com/index.php/user_index.php');
                } else{
                    $errorMsg = " Please--enter--correct--login--details!";
                    header('location: ../index.php?error='.$errorMsg);
                }
            }

?>