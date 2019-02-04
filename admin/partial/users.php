<?php

include_once 'app/db.php';

    $query = "SELECT * FROM users";

    $result = $db->query($query);

    if($result-> num_rows > 0){

        while($row = $result->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td>'.$row['created_at'].'</td>';
            echo '<td><a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }
    }