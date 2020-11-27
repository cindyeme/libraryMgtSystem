<?php
    require_once('conn.php');
        

        //listen to when a user clicks on the register button.
        $email = isset($_POST['email'])? trim($_POST['email']) : '';

        $sql = "SELECT * FROM users WHERE email = '$email'"; 
        $result = mysqli_query($conn, $sql); 

        // check if user exists
            // check if the email already exists in the database.
        if(mysqli_num_rows($result) > 0) {

            // getting a person's id in order to change password i.e using the id to update a user's pwd
            $row = mysqli_fetch_assoc($result);
            $id = base64_encode($row['id']);
            //header("location: ../newPassword.php?id=" . $id);

            echo $id;

        } else {
            echo 0;
            $email_not_found = 'Email--not--found!';
            // header('location: ../retrieve_email.php?error=' . $email_not_found);
        }

?>
