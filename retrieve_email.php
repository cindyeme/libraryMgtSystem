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
                        
                        <div class="form_body">
                            <div class="input-group">
                                <label for="email">Email</label><br>

                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email address" required>

                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                </div>
                            </div>

                            <div id="msg"></div>

                            <div class="form-group">
                                <input type="button" name="submit" id="btn_retrieve" class="modal-btn w-100" value="SUBMIT">
                            </div>

                            <div class="msg">
                                <span>
                                    <a href="index.php">Sign In &nbsp;/ </a>
                                    <a href="sign_up.php">&nbsp; Sign Up</a>
                                </span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('includes/js-links.php') ?>
    <script>
      $(function(){

        $('#btn_retrieve').click(function(){
            const email = $('#email').val();

            if(email == "" ){
              var errorMsg = "<p class='alert alert-danger text-center'> Please fill out all fields!! </p>";
                $('#msg').html(errorMsg);
            }else{
                $.ajax({
                  method: "POST",
                  url: "includes/retrieveSub.php",
                  data: {email: email},
                  success: function(response){
                    var msg = ""; 
                      if (response == 0) {
                          msg = "<p class='alert alert-danger text-center'> Email address not found! </p>";
                           $('#msg').html(msg);
                      } else {
                        window.location.href = 'newPassword.php?id='+response;
                      }
                  }
                });
              }
            });
        });
    </script>
    </body>
</html>
