      <!-- Sign In Modal -->
    <div class="modal fade" id="sign_in">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Sign In Here</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div enctype="multipart/form-data">
                    <div class="input-group">
                      <label for="txt_usn">Serial-Number</label>
                        <input type="number" name="usn" id="txt_usn" class="form-control" placeholder="USN" required>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="bx bx-id-card"></i></span>
                        </div>
                    </div>
                    <div class="input-group">
                      <label for="txt_email">Email</label>
                        <input type="email" name="email" id="txt_email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        </div>
                    </div>
                    <div class="input-group">
                      <label for="txt_pwd">Password</label>
                        <input type="password" name="password" id="txt_pwd" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="bx bx-lock"></i></span>
                        </div>
                    </div>

                    <div id="msg"></div>
                    
                    <div class="form-group">
                        <input type="button" name="submit" id="btn_login" class="modal-btn w-100" value="SIGN IN">
                    </div>

                    <div class="forgot_pwd">
                      <a href="retrieve_email.php" class="text-center">Forgot Password?</a>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
