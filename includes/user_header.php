
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no" name="viewport">

  <title>Lib-Cater</title>
  <meta content="Lib-Cater" name="An automated system that manages all manual functions of a library.">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" type="image/png" rel="shortcut icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  
  <?php require_once('header.php'); ?>
  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <style>
      @media(max-width: 992px){
  #reMsign_out {
    margin-bottom: 0 !important;
      }#user_info h5, #user_info img{
        color: #2c4964 !important;
        margin-top: 3rem;
      }#user_info{
        display: block !important;
      }#user_info h5 span{
        text-align: left !important;
      }}
      @media(min-width: 1200px){
          .col-xl-2 {
          -ms-flex: 0 0 20% !important;
          flex: 0 0 20% !important;
          max-width: 20% !important;
        }
      }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-12 d-flex align-items-center px-5">
        <a href="user_index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="logo" class="img-fluid"></a>
          <nav class="nav-menu d-none d-lg-block">

            <ul>
              <li class="active"><a class="pt-4" href="user_index.php">Home</a></li>
              <li><a class="pt-4" href="#record">Record</a></li>
              <li><a class="pt-4" href="#past_questions">Past Questions</a></li>
              <li><a class="pt-4" href="#contact">Contact Librarian</a></li>
              <li id="user_info" class="user_info d-flex justify-content-between ml-4">
                <img src="dist/img/avatar.png" style="border-radius: 50%; width: 40px; height: 40px; object-fit: cover;" class="img-fluid mr-4" alt="user_img">
              <h5 class="fullname" style="color: rgba(255, 255, 255, 0.7);
                  font-size: 15px !important;
                  font-weight: 600 !important;
                  padding: 0 3px;
                  font-family: 'Open Sans',
                  sans-serif;"><span class="d-block text-center pb-4">Welcome!</span>
                  <?=$user['fullname']?>
              </h5>
              </li>

            </ul>
          </nav><!-- .nav-menu -->

          <a href="includes/logout.php" class="get-started-btn" id="reMsign_out" style="margin-bottom: 2rem; margin-left: 50px">Sign Out</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->
