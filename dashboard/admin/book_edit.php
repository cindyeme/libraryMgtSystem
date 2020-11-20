<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$pub_date = $_POST['pub_date'];
		$photo = $_FILES['image']['name'];

		if(!empty($photo)){
				move_uploaded_file($_FILES['image']['tmp_name'], '../images/uploads/'.$photo);
				$filename = $photo;	
			}
	

		$sql = "UPDATE books SET isbn = '$isbn', title = '$title', category_id = '$category', author = '$author', publisher = '$publisher', publish_date = '$pub_date', photo = '$filename' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:book.php');

?>