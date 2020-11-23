<?php session_start(); 
    require_once('includes/conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lib-Cater/Check Email</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

    <?php require_once('includes/css-links.php') ?>

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
                <h4 class="title">Confirm Email</h4>
            </div>

            <!--  body -->
            <div class="sign_up_body">
                <form method="POST" action="includes/retrieveSub.php">
                    <div class="input-group">
                      <label for="email">Email</label><br>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email address" required>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        </div>
                    </div>

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
    <?php require_once('includes/js-links.php') ?>

</html>