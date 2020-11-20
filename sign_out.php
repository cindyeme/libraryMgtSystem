    <!-- Sign Out Modal -->
    <div class="modal fade" id="sign_out">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

            <!-- Modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Sign Out</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="modal-text">
                    <p class="text-center" style="font-size: 1.2rem;
                    font-family: 'Poppins', sans-serif !important;">Are you sure you want to sign out?</p>
                </div>
                <form method="POST" action="includes/logout.php" class="">

                    <div class="form-group d-flex justify-content-between">
                        <input type="submit" name="submit_yes" id="btn_submit" class="modal-btn btn_yes" value="Yes" style="padding: .8rem 1.5rem">

                        <input type="submit" name="submit_no" id="btn_submit" class="modal-btn btn_no" value="No" style="padding: .8rem 1.5rem">
                    </div>

                </form>
            </div>
            </div>
        </div>
    </div> 