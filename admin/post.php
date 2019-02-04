<?php
  $title = 'Posts';
  require './shared/header.php';
?>

          <!-- main Content Area -->
          <div class="col-md-9 main-content-area">
            <!-- overview panel -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Posts</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Filter Posts.....">
                    <br />
                  </div>
                </div>
                <table class="table tablestriped table-hover">
                  <tr>
                    <th>Title</th>
                    <th>Published</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  <?php include PROJECT_ROOT.'/partial/post.php' ?>
                </table>
              </div>
            </div>
            <!-- end overview -->

          </div>
          <!-- end Main Content Area -->
<?php
  require './shared/footer.php'
?>