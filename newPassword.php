<?php session_start(); 
    require_once('includes/conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lib-Cater</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body id="body_up">
      <!-- Sign Up  -->
    <div class="forgot_password" id="sign_up">
        <div class="container forgot_container">
            <div class="row">
            <div class="col-lg-12">
            <div class="main_content">
            <!--  header -->
            <div class="heading">
                <h4 class="title">New Password</h4>
            </div>

            <!--  body -->
            <div class="sign_up_body">
                <form method="POST" action="includes/password_update.php">
                    <div class="input-group">
                      <label for="new_pwd"> New Password</label><br>
                        <input type="password" name="new_password" id="new_pwd" class="form-control" placeholder="Enter new password" required>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="bx bx-lock"></i></span>
                        </div>
                    </div>

                    <input type="hidden" name="user_id" value="<?php echo $_GET['id'] ?>" />

                    <div class="input-group">
                      <label for="confirm_pwd">Confirm Password</label><br>
                        <input type="password" name="confirm_password" id="confirm_pwd" class="form-control" placeholder="Confirm password" required>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="bx bx-lock"></i></span>
                        </div>
                    </div>
                    <div id="msg"></div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="btn_submit" class="modal-btn w-100" value="SUBMIT">
                    </div>

                    <div class="msg">
                        <span>
                            <a href="home_index.php">Sign In &nbsp;/ </a>
                            <a href="sign_up.php">&nbsp; Sign Up</a>
                        </span>
                    </div>
                </form>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</body>
    <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // confirm password
//   const new_password = $('#new_pwd').val();
//   const confirm_password = $('#confirm_pwd').val();
  

//   $('#btn_submit').on('click', function () {
//       var msg = '';
//     if (new_password !== confirm_password) {
//       msg = "<p class='alert alert-danger> Please confirm same password! </p>";
//     } else {
//       msg = "<p class='alert alert-success> Password changed successfully! </p>";
//     //   window.location.href = "home_index.php";
//     }
//     $('#msg').html(msg);
//   });
  </script>