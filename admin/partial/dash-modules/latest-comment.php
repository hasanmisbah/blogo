<!-- latest Comment Area -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Comment</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">

                    <tr>
                      <th>Commented on</th>
                      <th>Commented By</th>
                      <th>Commented</th>
                      <th>Action</th>
                    </tr>

                    <?php
                     include_once 'app/db.php';

                     $jQuery = "SELECT * FROM commment LEFT JOIN users ON users.user_id = commment.user_id LEFT JOIN post ON post.post_id = commment.post_id";
                     
                     $getresults = $db->query($jQuery);
                     if($getresults-> num_rows > 0){

                        while($getData = $getresults->fetch_assoc()){
                          // Printing Data
                            echo '<tr>';
                            echo '<td>'.$getData['post_title'].'</td>';
                            echo '<td>'.$getData['name'].'</td>';
                            echo '<td>'.$getData['created_at'].'</td>';
                            echo '<td><a href="#" class="btn btn-warning">View</a> <a href="#" class="btn btn-danger">Delete</a></td>';
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
              <!-- Latest Comment area -->