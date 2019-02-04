 <!-- add user modal -->
          <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="./action/adduser.php" method="post">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add user</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="user-name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" class="form-control" placeholder="User Email">
                    </div>
                    <div class="form-group">
                      <label for="">password</label>
                      <input type="password" name="password" class="form-control" placeholder="User Password">
                    </div>
                    <div class="form-group">
                      <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="user"> User
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Admin"> Admin
                      </label>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add User</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End Add user Modal -->