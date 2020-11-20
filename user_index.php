<?php require_once('includes/session.php'); ?>
  
  
<?php require_once('includes/user_header.php'); ?>

<?php require_once('sign_out.php'); ?>
  
  

  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center">
    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Bettter Library use Experience With Lib-Cater</h1>
          <h2>Maintains the record of the library.</h2>
          <div><a href="#" class="btn-get-started scrollto">Get started <i class="bx bx-chevron-down"></i></a></div>
        </div>
        <div class="col-xl-4 col-lg-6 pb-5 pb-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/flying_books.png" class="img-fluid animated w-100" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

<main id="main">

  <section class="record" id="record">
    <div class="container">
        <div class="section-title">
          <h2>Books</h2>
          <p>Search and borrow available books</p>
        </div>

        <div class="row">
          <div class="col-lg-12 mb-4">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" id="searchBox" placeholder="Search for Title or Author" >
              <span class="glyphicon glyphicon-search form-control-feedback text-dark"></span>
      		  </div>
          </div>
          
            <?php 
            
            $query_book = "SELECT * FROM books WHERE deleted = 1 ORDER BY id LIMIT 15";
            $book_res = mysqli_query($conn, $query_book);

              while($row = mysqli_fetch_assoc($book_res)){?>
                    <div class="col-xl-2 col-lg-3 col-md-6 mt-5">
                      <div class="card border-0 p-0 m-0 single-book text-center">
                          <div class="card-img p-0 m-0">
                            <a href="book_details.php?book_id=<?=base64_encode($row['id'])?>" class="" target="_blank">
                              <img src="<?=$photo = (!empty($row['photo']))? 'dashboard/images/uploads/'.$row['photo'] : "assets/img/anato_book.jpg"?>" class="img-fluid w-100 h-100" style="border-radius: 0;border: 1px dashed #7b27d8;">
                            </a>
                          </div>
                          <div class="book-cap">
                          <h5>Title: </h5>
                          <p><?=$row['title']?></p>
                          <h5>Author: </h5>
                          <p><?=$row['author']?></p>
                          <h5 class="status"><?=$status = ($row['status'] == 0) ? '<span class="label label-success">available</span>' : '<span class="label label-danger">not available</span>';?></h5>
                          </div>
                      </div>
                    </div>
              <?php } ?>
        </div>
      </div>
  </section>


    <!-- Start past questions section -->
        
    <section class="past_question" id="past_questions">
      <div class="container-fluid">
          <div class="section-title">
            <h2>Past questions</h2>
            <p>Get past questions and answers of choice</p>
          </div>

        <div class="row">
          <div class="col-lg-12">
            <?php
            if(isset($_SESSION['serial_number'])){
              $usn = $_SESSION['serial_number'];

              $f_sql = "SELECT * FROM users WHERE serial_number = '$usn' AND deleted = 1";
              $f_result = mysqli_query($conn, $f_sql);

              $faculty = mysqli_fetch_assoc($f_result);
            }else{
              header('location: home_index.php?error = Login first!');
            }
            ?>
              <div class="faculty d-block justify-content-around text-center">
                <div class="faculty_text">
                  <span>Faculty:</span>
                      <h4><?=$faculty['faculty']?></h4>
                </div>
                <div class="dept_text">
                  <span>Dept.:</span>
                      <h4><?=$faculty['department']?></h4>
                </div>
              </div>
          </div>

          <!-- Year 1 -->
          <div class="col-lg-6 col-md-12">
            <div class="level-info">
              <div class="level text-center">
                <span>Level:</span>
                <h4>Year 1</h4>
              </div>
            </div>
            
            <!-- Year 1 - First semester -->
            <div class="col-md-6 col-sm-12">
              <div class="semester text-center">
                <h4>1st <span>semester </span></h4>
              </div>
              <table class="table border-collapse table-bordered table-striped">
                <thead>
                  <th style="vertical-align: middle !important;">Year</th>
                  <th style="vertical-align: middle !important;">Course</th>
                  <th style="vertical-align: middle !important;">Image</th>
                </thead>
                <tbody>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 101</td>
                    <td>
                     <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">MAT 101</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CHM 101</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">PHY 101</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                
                  <tr>
                    <td colspan="3" ><a href="#">See more</a></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Year 1 - second semester -->
            <div class="col-md-6 col-sm-12">
              <div class="semester text-center">
                <h4>2nd <span>semester </span></h4>
              </div>
              <table class="table border-collapse table-bordered table-striped">
                <thead>
                  <th style="vertical-align: middle !important;">Year</th>
                  <th style="vertical-align: middle !important;">Course</th>
                  <th style="vertical-align: middle !important;">Image</th>
                </thead>
                <tbody>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 102</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">MAT 102</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CHM 102</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">PHY 102</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                
                  <tr>
                    <td colspan="3" ><a href="#">See more</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Year 2 -->
          <div class="col-lg-6 col-md-12">
            <div class="level-info">
              <div class="level text-center">
                <span>Level:</span>
                <h4>Year 2</h4>
              </div>
            </div>

            <!-- Year 2 - first semester -->
            <div class="col-md-6 col-sm-12">
              <div class="semester text-center">
                <h4>1st <span>semester </span></h4>
              </div>
              <table class="table border-collapse table-bordered table-striped">
                <thead>
                  <th style="vertical-align: middle !important;">Year</th>
                  <th style="vertical-align: middle !important;">Course</th>
                  <th style="vertical-align: middle !important;">Image</th>
                </thead>
                <tbody>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 101</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">MAT 101</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CHM 101</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">PHY 101</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                
                  <tr>
                    <td colspan="3" ><a href="#">See more</a></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Year 2 - second semester -->
            <div class="col-md-6 col-sm-12">
              <div class="semester text-center">
                <h4>2nd <span>semester </span></h4>
              </div>
              <table class="table border-collapse table-bordered table-striped">
                <thead>
                  <th style="vertical-align: middle !important;">Year</th>
                  <th style="vertical-align: middle !important;">Course</th>
                  <th style="vertical-align: middle !important;">Image</th>
                </thead>
                <tbody>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 102</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">MAT 102</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CHM 102</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">PHY 102</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                
                  <tr>
                    <td colspan="3" ><a href="#">See more</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


          <!-- Year 3 -->
          <div class="col-lg-6 col-md-12">
            <div class="level-info">
              <div class="level text-center">
                <span>Level:</span>
                <h4>Year 3</h4>
              </div>
            </div>

            <!-- Year 3 - first semester -->
            <div class="col-md-6 col-sm-12">
              <div class="semester text-center">
                <h4>1st <span>semester </span></h4>
              </div>
              <table class="table border-collapse table-bordered table-striped">
                <thead>
                  <th style="vertical-align: middle !important;">Year</th>
                  <th style="vertical-align: middle !important;">Course</th>
                  <th style="vertical-align: middle !important;">Image</th>
                </thead>
                <tbody>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 321</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 345</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 362</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 351</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                
                  <tr>
                    <td colspan="3" ><a href="#">See more</a></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Year 3 - second semester -->
            <div class="col-md-6 col-sm-12">
              <div class="semester text-center">
                <h4>2nd <span>semester </span></h4>
              </div>
              <table class="table border-collapse table-bordered table-striped m-auto">
                <thead>
                  <th style="vertical-align: middle !important;">Industrial Training</th>
                </thead>
              </table>
            </div>
          </div>


          <!-- Year 4 -->
          <div class="col-lg-6 col-md-12">
            <div class="level-info">
              <div class="level text-center">
                <span>Level:</span>
                <h4>Year 4</h4>
              </div>
            </div>

            <!-- Year 2 - first semester -->
            <div class="col-md-6 col-sm-12">
              <div class="semester text-center">
                <h4>1st <span>semester </span></h4>
              </div>
              <table class="table border-collapse table-bordered table-striped">
                <thead>
                  <th style="vertical-align: middle !important;">Year</th>
                  <th style="vertical-align: middle !important;">Course</th>
                  <th style="vertical-align: middle !important;">Image</th>
                </thead>
                <tbody>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 401</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 453</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 431</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 461</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                
                  <tr>
                    <td colspan="3" ><a href="#">See more</a></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Year 4 - second semester -->
            <div class="col-md-6 col-sm-12">
              <div class="semester text-center">
                <h4>2nd <span>semester </span></h4>
              </div>
              <table class="table border-collapse table-bordered table-striped">
                <thead>
                  <th style="vertical-align: middle !important;">Year</th>
                  <th style="vertical-align: middle !important;">Course</th>
                  <th style="vertical-align: middle !important;">Image</th>
                </thead>
                <tbody>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 402</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 456</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 432</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: middle !important;">2019</td>
                    <td style="vertical-align: middle !important;">CSC 462</td>
                    <td>
                      <button type="submit" class="btn" download="download"><a
                        href="assets/booksImg/p_Q.jpeg" download><i class="bx bx-download" title="Download CSC 101" ></i> Download </a></button>
                    </td>
                  </tr>
                
                  <tr>
                    <td colspan="3" ><a href="#">See more</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- End past questions section -->


   <?php require_once('contact.php');?>
  </main><!-- End #main -->

   
  <?php require_once('footer.php');?>
  

  
</body>

</html>