<?php

include_once 'app/db.php';

    $query = "SELECT * FROM commment";

    $result = $db->query($query);

    if($result-> num_rows > 0){

        while($row = $result->fetch_assoc()){

            //Getting user Name
            $userId = $row['user_id'];
            $userQuery = ("SELECT name FROM users WHERE user_id = '$userId'");
            $getUser = $db-> query($userQuery);

            if( $getUser-> num_rows > 0 ){
                while($user = $getUser-> fetch_assoc()){
                    $userRealName = $user['name'];
                }
            }

            //getting Post Title using post id
            $postId = $row['post_id'];
            $postQuery = ("SELECT post_title FROM post WHERE post_id = '$postId'");
            $getTitle = $db->query($postQuery);

            
            if($getTitle-> num_rows > 0){
                while($title = $getTitle->fetch_assoc()){
                    $postTitle = $title['post_title'];
                }
            }
            
            // Printing Data
            echo '<tr>';
            echo '<td>'.$postTitle.'</td>';
            echo '<td>'.$userRealName.'</td>';
            echo '<td>'.$row['created_at'].'</td>';
            echo '<td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }
        
    }else{
        echo '<tr>';
        echo '<td colspan="4"><h3>Nothing Found</h3></td>';
        echo '</tr>';
    }