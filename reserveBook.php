      <!-- Sign In Modal -->
    <div class="modal fade" id="reserveBook">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

            <!-- Modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Reserve Book</h4>
                <button type="" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div enctype="multipart/form-data">
                    <div class="input-group">
                      <label for="txt_usn">User Serial-number</label>
                        <input type="number" name="usn" id="txt_usn" class="form-control"  required>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="bx bx-id-card"></i></span>
                        </div>
                    </div>
                    <div class="input-group">
                      <label for="txt_usn">Author</label>
                        <input type="text" name="author" id="txt_author" class="form-control" value="<?=$row['author'] ?>" required>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="bx bx-id-card"></i></span>
                        </div>
                    </div>
                    <div class="input-group">
                      <label for="isbn">Book ISBN</label>
                        <input type="text" name="isbn" id="isbn" class="form-control" value="<?=$row['isbn'] ?>" required>
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="bx bx-book"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="book_title">Book Title</label>
                      <select name="title" id="book_title" class="form-control" required>
                        <option value="<?=$row['id']?>"><?=$row['title'] ?></option>
                        </select>
                    </div>

                    <div id="msg"></div>

                    <div class="form-group">
                        <input type="button" name="submit" id="btn_reserve" class="modal-btn w-100" value="RESERVE">
                    </div>

                </div>
              </div>
            </div>
        </div>
    </div>