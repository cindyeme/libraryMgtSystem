<?php
	include 'includes/session.php';


	if(isset($_POST['add'])){
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$pub_date = $_POST['pub_date'];
		$edition = $_POST['edition'];
		$pages = $_POST['pages'];
		$filename = $_FILES['photo']['name'];
		$fileTemp = $_FILES['photo']['tmp_name'];


		$fileExt = explode('.', $filename); 
		
        $fileActualExt = strtolower(end($fileExt)); 
        $allowExt = array('jpg','jpeg','png');

        if(in_array($fileActualExt, $allowExt)) {
            if($fileSize <= 500000){ 
                $pic = uniqid('', true) . '.' .$fileActualExt;
                $fileDestination = '../images/uploads/'.$pic;
                move_uploaded_file($fileTemp, $fileDestination);
            }else{
                header('location: book.php?error = File is too larger');
            }
        }else{
            header('location: book.php?error = File not supported');
        }
		
		// if(!empty($filename)){
		// 	move_uploaded_file($_FILES['photo']['tmp_name'], '../images/uploads/'.$filename);	
		// }
        

		$sql = "INSERT INTO books (isbn, category_id, title, author, publisher, publish_date, edition, pages, photo) VALUES ('$isbn', '$category', '$title', '$author', '$publisher', '$pub_date', '$edition', '$pages',  '$pic')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: book.php');

?>