 <!-- add post modal -->
          <div class="modal fade" id="addpost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <form action="./action/addpost.php" method="post">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Post</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="">Post Title</label>
                      <input type="text" name="post-title" class="form-control" placeholder="post Title">
                    </div>
                    <div class="form-group">
                      <label for="">Post Body</label>
                      <textarea name="posteditor" class="form-control" placeholder="Your Post"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Post Category</label>
                      <select class="form-control" name="category">
                      <?php
                      
                        include_once'./app/db.php';
                        $query = "SELECT category_name, category_id FROM category";
                        $catQuery = $db->query($query);
                        if($catQuery-> num_rows > 0){
                          while ($category = $catQuery->fetch_assoc()) {
                            echo '<option value="'.$category['category_id'].'">'.$category['category_name'].'</option>';
                          }
                        }

                      ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Post Meta Tag</label>
                      <input type="text" name="post-meta-tag" class="form-control" placeholder="Post Meta tag">
                    </div>
                    <div class="form-group">
                      <label for="">post Meta Description</label>
                      <input type="text" name="post-meta-desc" class="form-control" placeholder="Post Meta Description">
                    </div>
                    <div class="form-group"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Post</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- End Add post Modal -->