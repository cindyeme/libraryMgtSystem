<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Lib-Cater / Sign-Up</title>
    <meta content="" name="descriptison" />
    <meta content="" name="keywords" />

    <?php require_once('includes/css-links.php') ?>

  </head>

  <body id="body_up">
    <!-- Sign Up  -->
    <div class="sign_up my-3" id="sign_up">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main_content">
              <!--  header -->
              <div class="heading">
                <h4 class="title">Sign Up Here</h4>
              </div>

              <!--  body -->
              <div class="sign_up_body">
                <form method="POST" action="includes/regSub.php">
                  <div class="input-group">
                    <label for="txt_fullname">Fullname</label><br />
                    <input
                      type="text"
                      name="fullname"
                      id="txt_fullname"
                      class="form-control"
                      placeholder="Fullname"
                      required
                    />
                    <div class="input-group-append">
                      <span class="input-group-text"
                        ><i class="bx bx-user"></i
                      ></span>
                    </div>
                  </div>
                  <div class="input-group">
                    <label for="txt_usn">Serial-Number</label>
                    <input
                      type="number"
                      name="usn"
                      id="txt_usn"
                      class="form-control"
                      placeholder="USN"
                      required
                    />
                    <div class="input-group-append">
                      <span class="input-group-text"
                        ><i class="bx bx-id-card"></i
                      ></span>
                    </div>
                  </div>
                  <div class="input-group">
                    <label for="txt_mobile">Mobile number</label>
                    <input
                      type="number"
                      name="mobile"
                      id="txt_mobile"
                      class="form-control"
                      placeholder="Mobile number"
                      required
                    />
                    <div class="input-group-append">
                      <span class="input-group-text"
                        ><i class="bx bx-phone"></i
                      ></span>
                    </div>
                  </div>
                  <div class="input-group">
                    <label for="txt_email">Email</label>
                    <input
                      type="email"
                      name="email"
                      id="txt_email"
                      class="form-control"
                      placeholder="Email"
                      required
                    />
                    <div class="input-group-append">
                      <span class="input-group-text"
                        ><i class="bx bx-envelope"></i
                      ></span>
                    </div>
                  </div>
                  <div class="input-group">
                    <label for="txt_pwd">Password</label>
                    <input
                      type="password"
                      name="password"
                      id="txt_pwd"
                      class="form-control"
                      placeholder="Password"
                      required
                    />
                    <div class="input-group-append">
                      <span class="input-group-text"
                        ><i class="bx bx-lock"></i
                      ></span>
                    </div>
                  </div>

                  <div class="msg">
                    <span class="text-center terms"
                      >Sign up means you agree with our
                      <a href="#" class="pl-2">Terms and policy.</a></span
                    >
                  </div>

                  <div class="form-group">
                    <input
                      type="submit"
                      name="submit"
                      id="btn_submit"
                      class="modal-btn w-100"
                      value="SIGN UP"
                    />
                  </div>

                  <div class="msg">
                    <span class="text-center sign-in"
                      >Already have account?
                      <a href="home_index.php" class="pl-2">Sign In</a></span
                    >
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
