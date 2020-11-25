<?php require_once('header.php');?>
<?php
    require_once('conn.php');

    $output = "";
    // check if the search input has a value

    if(isset($_POST['search'])){
        $searchKeyword = mysqli_real_escape_string($conn, $_POST['search']);

        // search query
        $query = "SELECT * FROM books WHERE title LIKE '%$searchKeyword%' OR author LIKE '%$searchKeyword%' ";

        $execQuery = mysqli_query($conn, $query);
        $queryResult = mysqli_num_rows($execQuery);

        echo "<div class='col-lg-12'>
                    <div class='d-flex justify-content-center'>
                        <h4 class='text-bold mb-3'> Showing ".$queryResult." results. </h4>
                    </div>
                </div>";
        

        if($queryResult < 1){
            echo "<div class='col-lg-12'>
                    <div class='d-flex justify-content-center'>
                        <h4 class='text-bold'> No match found. </h4>
                    </div>
                </div>";
        }else{
            while($row = mysqli_fetch_assoc($execQuery)){
                  echo 
                "<div class='col-xl-2 col-lg-3 col-md-6' data-aos='zoom-in'>
                    <div class='card border-0 p-0 m-0 single-book text-center'>
                        <div class='card-img p-0 m-0'>
                        <a href='book_details.php?book_id=".base64_encode($row['id'])."' target='_blank'>
                        <img src='".'dashboard/images/uploads/'.$row['photo']."' class='img-fluid w-100 h-100' style='border-radius: 0;border: 1px dashed #7b27d8;'>
                        </a>
                        <div class='book-cap text-center'>
                            <h5>Title: </h5>
                            <p>".$row['title']."</p>
                            <h5>Author: </h5>
                            <p>".$row['author']."</p>
                        </div>
                    </div>
                </div>
            </div>";
            }
        }

    }
?>