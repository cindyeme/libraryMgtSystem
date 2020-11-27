<?php 

require_once('conn.php');

        // check and trim user value
        $new_password = isset($_POST['new_password'])? trim($_POST['new_password']) : "";
        $confirm_password = isset($_POST['confirm_password'])? trim($_POST['confirm_password']) : "";
        $user_id = base64_decode($_POST['user_id']);


        // update user password
        $newPwd = sha1($new_password);
        $pwd_update = "UPDATE `users` SET `password` = '$newPwd' WHERE `id` = '$user_id' AND deleted = 1";
        // execute sqli command
        $pwd_result = mysqli_query($conn, $pwd_update);

        //check if successful
        if($pwd_result){
            echo 1;
            $success = "Password--successfully--changed!";
            // header("location: ../index.php?success=" .$success);
        } else{
            echo 0;
            $failed = "Password--reset--failed!";
            // header("location: ../newPassword.php?failed=" .$failed);
        }

?>
