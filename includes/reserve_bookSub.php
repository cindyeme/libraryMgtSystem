<!-- <?php
    require_once('conn.php');

    if(isset($_POST['submit'])){
        $usn = isset($_POST['usn']) ? trim($_POST['usn']) : "";
        $author = isset($_POST['author']) ? trim($_POST['author']) : "";
        $isbn = isset($_POST['isbn']) ? trim($_POST['isbn']) : "";
        $book_id = isset($_POST['title']) ? trim($_POST['title']) : "";

        if($usn == "" || $isbn == "" || $book_id == "" || $author == ""){
            header('location: ../book_details.php?error = Please all fields are required!');
        }

        $insert_book = "INSERT INTO reserve(usn, author, book_id, isbn) VALUES ('$usn', '$author' '$book_id', '$isbn')";
        $book_res = mysqli_query($conn, $insert_book);

        if($book_res){
            header('location: ../book_details.php?success=Book reserved!');
        }else{
            header('location: ../book_details.php?error=Error reserving book!');
        }
    }
?> -->