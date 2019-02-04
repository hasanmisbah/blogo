<!-- Latest Blog Post -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Post</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>Post Title</th>
                      <th>Posted By</th>
                      <th>Posted on</th>
                      <th>Action</th>
                    </tr>

                    <?php
                     include_once 'app/db.php';

                      $query = "SELECT * FROM post LEFT JOIN users ON users.user_id = post.user_id LIMIT 5";
                      $result = $db->query($query);

                      if($result-> num_rows > 0){

                        while($row = $result->fetch_assoc()){

                          //getting Post Title using post id
                          $postTitle = $row['post_title'];
                          $usrname = $row['name'];


                          // Printing Data
                          echo '<tr>';
                          echo '<td>'.$postTitle.'</td>';
                          echo '<td>'.$usrname.'</td>';
                          echo '<td>'.$row['created_at'].'</td>';
                          echo '<td><a href="edit_post.php?id='.$row['post_id'].'" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>';
                          echo '</tr>';

                        }

                      }else{
                        echo '<tr>';
                        echo '<td colspan="4"><h3>Nothing Found</h3></td>';
                        echo '</tr>';
                      }
                    
                    ?>
                    
                  </table>
                </div>
              </div>
              <!-- end Latest Blog post -->