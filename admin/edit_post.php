<?php
  $title = 'Edit Post';
  require './shared/header.php';
?>

          <!-- main Content Area -->
          <div class="col-md-9 main-content-area">
            <!-- overview panel -->
            <div class="edit">
              <form action="./action/editpost.php" method="post">
                  <div class="modal-header">
                    <h4>Edit Post</h4>
                  </div>
                  <?php

                  $post_id = $_GET['id'];
                  include_once 'app/db.php';
                  $query = "SELECT * FROM post LEFT JOIN category ON category.category_id = post.category_id WHERE post.post_id = '$post_id'";
                  $result = $db->query($query);
                  if($result-> num_rows > 0){
                    while($row = $result->fetch_assoc()){

                    ?>

                  <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="postid" value="<?= $post_id ?>">
                      <label for="">Post Title</label>
                      <input type="text" name="post-title" class="form-control" value="<?= $row['post_title'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="">Post Body</label>
                      <textarea name="posteditor" class="form-control"><?= $row['post_body'] ?></textarea>
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
                    <button type="submit" class="btn btn-primary">Update Post</button>
                  </div>
                </form>
                <?php
                      }
                    }
                    
                    ?>
            </div>
            <!-- end overview -->
          </div>
          <!-- end Main Content Area -->
<?php
  require './shared/footer.php';
?>