<?php
    require_once('conn.php');

    $output = "";
    // check if the search input has a value

    if(isset($_POST['search'])){
        $searchKeyword = mysqli_real_escape_string($_POST['search']);

        // search query
        $query = "SELECT * FROM books WHERE title LIKE '%$searchKeyword%' OR author LIKE '%$searchKeyword%' ";

        $execQuery = mysqli_query($conn, $query);
        $queryResult = mysqli_num_rows($execQuery);

        echo "<h4> There are".$queryResult." results </h4>";

        if($execQuery > 0){
            while($row = mysqli_fetch_assoc($execQuery)){
            echo "<div class='col-xl-2 col-lg-3 col-md-6 col-sm-6 mt-5' data-aos='zoom-in'>
                <div class='card border-0 p-0 m-0 single-book text-center'>
                  <div class='card-img p-0 m-0'>
                    <a href='book_details.php?book_id=".base64_encode($row['id'])."' target='_blank'>
                      <img src='<?=$photo = (!empty($row['photo']))? '../dashboard/images/uploads/'.$row['photo'] : 'assets/img/anato_book.jpg''?> class='img-fluid w-100 h-100' style='border-radius: 0;border: 1px dashed #7b27d8;'>
                    </a>
                </div>
                  <div class='book-cap'>
                    <h5>Title: </h5>
                    <p>".$row['title']."</p>
                    <h5>Author: </h5>
                    <p>".$row['author']."</p>
                    <h5 class='status'><?=$status = ($row['status'] == 0) ? '<span class='label label-success'>available</span>' : '<span class='label label-danger'>not available</span>?></h5>
                  </div>
              </div>
            </div>";
            }
        }else{
            echo "<h4> No Matching Records Found! </h4>";
    }
?>