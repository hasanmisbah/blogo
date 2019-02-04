<!-- sidebar area -->
            <div class="col-md-3 sidebar">
              <div class="list-group">
                <a href="index.php" class="list-group-item active">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>  Dashboard
                </a>
                <a href="pages.php" class="list-group-item"> <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>  Pages <span class="badge"><?= pageCount() ?></span></a>
                <a href="post.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Posts <span class="badge"><?= postCount() ?></span></a>
                <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Users <span class="badge"><?= userCount() ?></span></a>
                <a href="category.php" class="list-group-item"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>  Categorys <span class="badge"><?= categoryCount() ?></span></a>
                <a href="comments.php" class="list-group-item"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>  Comments <span class="badge"><?= commentCount() ?></span></a>
              </div>
              
              <div class="panel panel-default">
                <div class="panel-heading active">
                  <h3 class="panel-title"><?= $users['name'] ?></h3>
                </div>
                <div class="panel-body">
                  <p>Your Email : <?= $users['email'] ?></p>
                  <p>You Joined At : <?= $users['joining'] ?></p>
                </div>
              </div>

            </div>
            <!-- end Sidebar area -->