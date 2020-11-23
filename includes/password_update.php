<?php 

require_once('conn.php');
    $error = array();

    if(isset($_POST['submit'])){
        // check and trim user value
        $new_password = isset($_POST['new_password'])? trim($_POST['new_password']) : "";
        $confirm_password = isset($_POST['confirm_password'])? trim($_POST['confirm_password']) : "";
        $user_id = base64_decode($_POST['user_id']);

        //check if input is empty
          if($new_password == "" || $confirm_password == ""){
            $error[] = urlencode('Please all fields are required.');
        }

        // check if new_pwd matches with the confirm_pwd
        if($new_password !== $confirm_password){
            $error[] = urlencode('Password does not match!');
        }

        if(empty($error)){
        // update user password
        $newPwd = sha1($new_password);
        $pwd_update = "UPDATE `users` SET `password` = '$newPwd' WHERE `id` = '$user_id' AND deleted = 1";
        // execute sqli command
        $pwd_result = mysqli_query($conn, $pwd_update);

         //check if successful
            if($pwd_result){
                $success = "Password--successfully--changed!";
                header("location: ../index.php?success=" .$success);
            } else{
                $failed = "Password--reset--failed!";
                header("location: ../newPassword.php?failed=" .$failed);
            }
        }else{
            // $error = 'Enter valid details';
             header('location: ../newPassword.php?error='.join($error, urlencode('<br>')));
        }
    }
?>