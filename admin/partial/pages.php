<?php

include_once 'app/db.php';

    $query = "SELECT * FROM pages";
    $result = $db->query($query);
    if($result-> num_rows > 0){

        while($row = $result->fetch_assoc()){

            echo '<tr>';
            echo '<td>'.$row['pages_title'].'</td>';
            echo '<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>';
            echo '<td>'.$row['created_at'].'</td>';
            echo '<td><a href="editpages.php?id='.$row['pages_id'].'" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>';
            echo '</tr>';
        }

    }else{
        echo '<tr>';
        echo '<td colspan="4"><h3>There is no Pages Found</h3</td>';
        echo '</tr>';
    }