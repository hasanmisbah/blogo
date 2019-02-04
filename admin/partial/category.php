<?php

include_once 'app/db.php';

    $query = "SELECT * FROM category";

    $result = $db->query($query);

    if($result-> num_rows > 0){

        while($row = $result->fetch_assoc()){

            $userId = $row['user_id'];
            $userQuery = ("SELECT name FROM users WHERE user_id = '$userId'");
            $getUser = $db-> query($userQuery);

            if( $getUser-> num_rows > 0 ){
                while($user = $getUser-> fetch_assoc()){
                    $userRealName = $user['name'];
                }
            }
            
            echo '<tr>';
            echo '<td>'.$row['category_name'].'</td>';
            echo '<td>'.$userRealName.'</td>';
            echo '<td>'.$row['created_at'].'</td>';
            echo '<td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }
    }