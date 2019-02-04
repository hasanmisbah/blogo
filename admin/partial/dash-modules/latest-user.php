<!-- latest Users Panel -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Users</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Joined</th>
                    </tr>

                    <?php

                      include_once 'app/db.php';

                      $userQuery = ("SELECT * FROM users");

                      $result = $db->query($userQuery);

                      if($result-> num_rows > 0){

                        while($row = $result-> fetch_assoc()){

                          $userName = $row['name'];
                          $userEmail = $row['email'];
                          $userJoined = $row['created_at'];

                          echo '<tr>';
                          echo '<td>'.$userName.'</td>';
                          echo '<td>'.$userEmail.'</td>';
                          echo '<td class="timestamp">'.$userJoined.'</td>';
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
              <!-- End User panel -->