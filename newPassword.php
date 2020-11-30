<?php session_start(); 
    require_once('includes/conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lib-Cater / New Password</title>
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
                      <h4 class="title">New Password</h4>
                  </div>

            <!--  body -->
                <div class="sign_up_body">
                    <div class="form_body">

                        <div class="input-group">
                          <label for="new_pwd"> New Password</label><br>
                            <input type="password" name="new_password" id="new_pwd" class="form-control" placeholder="Enter new password" minlength="8" required autofocus>
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="bx bx-lock"></i></span>
                            </div>
                        </div>

                        <input type="hidden" id="userid" name="user_id" value="<?php echo $_GET['id'] ?>" />

                        <div class="input-group">
                          <label for="confirm_pwd">Confirm Password</label><br>
                            <input type="password" name="confirm_password" id="confirm_pwd" class="form-control" placeholder="Confirm password" minlength="8" required>
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="bx bx-lock"></i></span>
                            </div>
                        </div>

                        <div id="msg"></div>

                        <div class="form-group">
                            <input type="button" name="submit" id="btn_submit" class="modal-btn w-100" value="SUBMIT">
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

        $('#btn_submit').click(function(){
            const newPassword = $('#new_pwd').val();
            const confirmPassword = $('#confirm_pwd').val();
            const userid = $('#userid').val();

            if(newPassword == "" || confirmPassword == "" ){
              const errorMsg = "<p class='alert alert-danger text-center'> Please fill out all fields!! </p>";
                $('#msg').html(errorMsg);

            }else if(newPassword !== confirmPassword){
              const errorMsg = "<p class='alert alert-danger text-center'> Password does not match!! </p>";
                $('#msg').html(errorMsg);

            } else if((newPassword.length || confirmPassword.length) < 8){
              const errorMsg = "<p class='alert alert-danger text-center'> Password must be greater than 7. </p>";
                $('#msg').html(errorMsg);

            }else{
                $.ajax({
                  method: "POST",
                  url: "includes/password_update.php",
                  data: {new_password: newPassword, confirm_password: confirmPassword, user_id: userid},
                  success: function(response){
                    const msg = ""; 
                      if (response == 1) {
                          window.location = 'index.php?success=Password changed successfully!';
                      } else {
                        msg = "<p class='alert alert-danger text-center'> Please enter valid details! </p>";
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
