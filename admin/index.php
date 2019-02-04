<?php
  $title = 'Dashboard';
  require './shared/header.php';
?>

           <?php
            require './partial/dash-modules/overview.php';
            require './partial/dash-modules/latest-post.php';
            require './partial/dash-modules/latest-comment.php';
            require './partial/dash-modules/latest-user.php';

           ?>
            </div>
            <!-- end Main Content Area -->
<?php
  require './shared/footer.php'
?>