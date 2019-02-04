<!-- add page modal -->
          <div class="modal fade" id="addpages" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="./action/addpages.php" method="post">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Pages</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Pages Title</label>
                      <input type="text" name="page-title" class="form-control" placeholder="Page Title">
                    </div>
                    <div class="form-group">
                      <label for="">Pages Body</label>
                      <textarea name="pageeditor" class="form-control" placeholder="Your Post"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Pages Meta Tag</label>
                      <input type="text" name="page-meta-tag" class="form-control" placeholder="Page Meta tag">
                    </div>
                    <div class="form-group">
                      <label for="">Pages Meta Description</label>
                      <input type="text" name="page-meta-desc" class="form-control" placeholder="Page Meta Description">
                    </div>
                    <div class="form-group"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Pages</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End Add Pages Modal -->