<?php
  $title = 'Category';
  require './shared/header.php';
?>
          <!-- main Content Area -->
          <div class="col-md-9 main-content-area">
            <!-- overview panel -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Users</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Filter Users.....">
                    <br />
                  </div>
                </div>
                <table class="table tablestriped table-hover">
                  <tr>
                    <th>Category</th>
                    <th>Created By</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  <?php
                    include 'partial/category.php';
                  ?>
                </table>
              </div>
            </div>
            <!-- end overview -->

          </div>
          <!-- end Main Content Area -->
<?php
  require './shared/footer.php'
?>