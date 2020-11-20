<?php

        session_start();
        session_unset();

        header('location: ../home_index.php');

    // if(isset($_POST['submit_yes'])){
    //     session_start();
    //     session_unset();

    //     header('location: ../home_index.php');

    // }elseif(isset($_POST['submit_no'])) {
    //     header('location: ../user_index.php');
        
    // }else{
    //     header('location: ../user_index.php');
    // }

?>