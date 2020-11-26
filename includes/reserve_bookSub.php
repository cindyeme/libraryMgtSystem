<?php
    require_once('conn.php');
    

    //if(isset($_POST['submit'])){
        $usn = isset($_POST['usn']) ? trim($_POST['usn']) : "";
        $author = isset($_POST['author']) ? trim($_POST['author']) : "";
        $book_id = isset($_POST['title']) ? trim($_POST['title']) : "";
        $isbn = isset($_POST['isbn']) ? trim($_POST['isbn']) : "";


        $user_query = "SELECT * FROM `users` WHERE `serial_number` = '$usn' AND `deleted` = 1";

        $user_res = mysqli_query($conn, $user_query);

        if(mysqli_num_rows($user_res) < 1){
            $error = "Enter a valid serial_number!";
            header('location: ../book_details.php?error='.$error);

        }else{

            $insert_book = "INSERT INTO reserve(usn, author, book_id, isbn) VALUES ('$usn', '$author', '$book_id', '$isbn')";
            $book_res = mysqli_query($conn, $insert_book);

            if($book_res){
                $success = "Book--reserved!";
                //header('location: ../user_index.php?success='.$success);
                echo 1;
            }else{
                $errorMsg = "Failed--to--reserve--book!";
                //header('location: ../user_index.php?error='.$errorMsg);
                echo 0;
            }
        }
    //}
?>