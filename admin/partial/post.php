<?php

include_once 'app/db.php';

    $query = "SELECT * FROM post";

    $result = $db->query($query);

    if($result-> num_rows > 0){

        while($row = $result->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$row['post_title'].'</td>';
            echo '<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>';
            echo '<td>'.$row['created_at'].'</td>';
            echo '<td><a href="edit_post.php?id=' . $row['post_id'] . '" class="btn btn-warning">Edit</a>
            <a onclick="confirm(" are you sure Want to Delete? ")" href="action/deletepost.php?id=' . $row['post_id'] . '" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }
    }else{
        echo '<tr>';
        echo '<td><h3>There is no Post Found</h3</td>';
        echo '</tr>';
    }