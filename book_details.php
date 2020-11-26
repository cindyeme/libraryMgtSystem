<?php
  require_once('includes/conn.php');
  // require_once('includes/session.php');
          

  if(!isset($_GET['book_id'])){
    header("location: user_index.php");
    die();
  }
  
  $book_id = base64_decode($_GET['book_id']);

  // for book category
  $catid = "SELECT books.category_id, category.name FROM books LEFT JOIN category ON books.category_id = category.id WHERE books.id = '$book_id'";

  $cat_res = mysqli_query($conn, $catid);
  $catrow = mysqli_fetch_assoc($cat_res);

  // get id for each book when clicked
  $sql = "SELECT * FROM books WHERE id = '$book_id' AND deleted = 1";
  $res = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Lib-Cater / Book Details</title>
    <meta content="" name="descriptison" />
    <meta content="" name="keywords" />

  <?php require_once('includes/css-links.php') ?>

  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-9 d-flex align-items-center">
            <a href="book_details.php" class="logo mr-auto"
              ><img src="assets/img/logo.png" alt="logo" class="img-fluid"
            /></a>

            <nav class="nav-menu d-none d-lg-block">
              <ul>
                <li class="active"><a href="book_details.php">Home</a></li>
                <li><a href="#books">Book Details</a></li>
              </ul>
            </nav>
            <!-- .nav-menu -->

            <a href="includes/logout.php" class="get-started-btn scrollto"
              >Sign Out</a
            >
          </div>
        </div>
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section
      id="hero"
      class="d-flex align-items-center"
      style="
        background: linear-gradient(
            90deg,
            rgba(88, 70, 249, 0.7) 0%,
            rgba(123, 39, 216, 0.5) 100%
          ),
          url(assets/booksImg/library/library.jpg) center/cover no-repeat !important;
      "
    >
      <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
          <div
            class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
          >
            <h1>
              <a href="user_index.php" class="text-dark">Home / </a> Book Info
            </h1>
            <div>
              <a href="<?='dashboard/images/uploads/'.$row['photo']?>" class="btn-get-started scrollto" download
                ><i class="bx bx-download"></i> Download
              </a>
            </div>
          </div>
          <div
            class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img"
            data-aos="zoom-in"
            data-aos-delay="150"
          >
            <img
              src="assets/booksImg/library/book_step.png"
              class="img-fluid animated h-100 w-100 d-none"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <section class="books" id="books">
      <div class="container">
        <div class="section-title">
          <h2>Book Details</h2>
          <p>See more details and options of  <?=$row['title']?></p>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 mb-5">
            <div class="book_img">
                <img
                  src="<?='dashboard/images/uploads/'.$row['photo'] ?>"
                  alt="book_img"
                  class="img-fluid w-100 shadow"
                />
              </div>
          </div>

          <div class="col-lg-8">
            <div class="summary">
              <div class="book_info clearfix">
                <h4>Title: <span><?=$row['title'] ?></span></h4>
                <h4>Author: <span><?=$row['author'] ?></span></h4>
                <h4>ISBN: <span><?=$row['isbn'] ?></span></h4>
                <h4>Category: <span><?=$catrow['name'] ?></span></h4>
                <h4>Edition: <span><?=$row['edition'] ?></span></h4>
                <h4>Language: <span>English</span></h4>
                <h4>Pages: <span><?=$row['pages'] ?></span></h4>
                <h4 class="status">Availability: <span><?=$status = ($row['status'] == 0) ? '<span class="alert alert-success text-white px-1 py-0 m-0" style="background: #7b27d8; border: 1px solid #7b27d8; font-size: .8rem;">available</span>' : '<span class="alert alert-danger text-white px-1 py-0 m-0" style="background: #dd4b39; border: 1px solid #dd4b39; font-size: .8rem;">not available</span>';?></span></h4>
              </div>

              <div class="about_author pt-4">
                <h3>About the Author</h3>
                <p class="text-justify">
                  <span><?=$row['author'] ?></span> hails from Mbaise. He was born in ... in Imo
                  State. He started his education at ... and had his SSCE from
                  .... Later, he proceeded to the University of PortHarcourt
                  where he distinguished himself in the field of Computer
                  Science. Ipsum dolor sit amet consectetur adipisicing elit.
                  Accusantium error vero sint. Accusamus sequi ipsa quaerat?
                  Aspernatur reiciendis voluptate quo placeat iste eaque eos?
                  Veritatis amet fugit, ipsa a molestiae atque dolorum inventore
                  expedita labore laborum cum quae, quos, sit fugiat velit
                  aspernatur provident? Ad aliquam expedita saepe voluptates
                  repudiandae est distinctio quae beatae ex exercitationem
                  nihil, sunt natus!
                </p>
              </div>
              <div class="about_book">
                <h3>About the book</h3>
                <p class="text-justify">
                  The purpose of this book is to meet the needs of students
                  commencing the study of <span><?=$row['title'] ?></span>. The audience includes everyone interested in 
                  <span><?=$row['title'] ?></span>. This book prepares you for
                  programming examination in information and computer science.
                  The context of this text reperesent notes and other
                  information used in teaching students where each student is
                  expected to be introduced into the world of computers because
                  of its ever increasing imporance in technology.
                </p>
                <p>
                  There are two parts of this book. The first part surveys the
                  <span><?=$row['title'] ?></span> and second part is the <span><?=$row['title'] ?></span>.
                </p>
              </div>
              <div class="btns clearfix">
                <button>
                  <a href="<?='dashboard/images/uploads/'.$row['photo']?>" download
                    ><i class="bx bx-download"></i> Download pdf</a
                  >
                </button>
                <button id="reserveBtn" data-toggle="modal" data-target="#reserveBook">
                  <a href="#"><i class="bx bx-save"></i> Reserve</a>
                </button>
                <?php require_once('reserveBook.php'); ?>

                <button id="shareBtn">
                  <a href="#" data-toggle="modal" data-target="#share"><i class="bx bx-share"></i> Share</a>
                </button>
                <?php require_once('share.php'); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php require_once('footer.php')?>

      <script>
      $(function(){

        $('#btn_reserve').click(function(){
            const usn = $('#txt_usn').val();
            const author = $('#txt_author').val();
            const bookid = $('#book_title').val();
            const isbn = $('#isbn').val();

            if(usn == "" || author == "" || bookid == "" || isbn == ""){
              var errorMsg = "<p class='alert alert-danger text-center'> All fields are required!! </p>";
                $('#msg').html(errorMsg);
            }else{
                $.ajax({
                  method: "POST",
                  url: "includes/reserve_bookSub.php",
                  data: {usn: usn, author: author, title: bookid, isbn: isbn},
                  success: function(response){
                    var msg = ""; 
                      if (response == 1) {
                        msg =  "<p class='alert alert-success text-center'> Book Reserved!!! <br> <span class='text-bold'> Reservation expires on 00-00-2020 00:00:00 </span> </p>";
                          $('#msg').html(msg);
                      } else {
                          msg = "<p class='alert alert-danger text-center'> Enter valid details!!! </p>";
                           $('#msg').html(msg);
                      }
                  }
                });
              }
            });
        });
      </script>
  </body>
</html>
