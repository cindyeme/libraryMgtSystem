<?php
    require_once('conn.php');

    $error = array();
        

    if(isset($_POST['submit'])){
        //listen to when a user clicks on the register button.
        $email = isset($_POST['email'])? trim($_POST['email']) : '';

        if(empty($email)){
            $error[]  =  urlencode('please email required.');
        }

        if(empty($error)){
            $sql = "SELECT * FROM users WHERE email = '$email'"; 
            $result = mysqli_query($conn, $sql); 

                // check if user exists
                 // check if the email already exists in the database.
                if(mysqli_num_rows($result) > 0) {
                    // getting a person's id in order to change password i.e using the id to update a user's pwd
                    $row = mysqli_fetch_assoc($result);
                    $id = base64_encode($row['id']);
                    header("location: ../newPassword.php?id=" . $id);

                // $email_exist = "$email already exists"; // throws this error when user exists
                
                } else {
                    $email_not_found = 'Email--not--found!';
                    header('location: ../retrieve_email.php?error=' . $email_not_found);
                }
        }
    }

?>