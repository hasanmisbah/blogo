<?php
  $title = 'Edit Post';
  require './shared/header.php';
?>

          <!-- main Content Area -->
          <div class="col-md-9 main-content-area">
            <!-- overview panel -->
            <div class="edit">
              <form action="./action/editpages.php" method="post">
                  <div class="modal-header">
                    <h4>Edit Post</h4>
                  </div>
                  <?php

                  $pages_id = $_GET['id'];
                  include_once 'app/db.php';
                  $query = "SELECT * FROM pages WHERE pages_id = '$pages_id'";
                  $result = $db->query($query);
                  if($result-> num_rows > 0){
                    while($row = $result->fetch_assoc()){

                    ?>

                  <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="pages-id" value="<?= $pages_id ?>">
                      <label for="">Pages Title</label>
                      <input type="text" name="pages-title" class="form-control" value="<?= $row['pages_title'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="">Pages Body</label>
                      <textarea name="pageeditor" class="form-control"><?= $row['pages_body'] ?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="">Pages Meta Tag</label>
                      <input type="text" name="post-meta-tag" class="form-control" placeholder="Post Meta tag">
                    </div>
                    <div class="form-group">
                      <label for="">Pages Meta Description</label>
                      <input type="text" name="post-meta-desc" class="form-control" placeholder="Post Meta Description">
                    </div>
                    <div class="form-group"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update Pages</button>
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