<?php
session_start();
include('./../app/db.php');




    $postId = $_GET['id'];
    $query = "SELECT * FROM post LEFT JOIN commment ON commment.post_id = post.post_id WHERE post.post_id = '$postId'";
    $result = $db->query($query);
    $deleteComment = "DELETE post FROM post LEFT JOIN commment ON commment.post_id = post.post_id WHERE post.post_id = '$postId'";
    $deleteCommentOnly = "DELETE post FROM post WHERE post_id = '$postId'";


    // Check to see if have comments
    if($result-> num_rows > 0){

        while ($row = $result->fetch_assoc()) {

            if(empty($row['comment'])){

                if ($db->query($deleteComment) === true) {
                    $_SESSION['FeedBackSuccess'] = 'Post Deleted Successfully';
                    header('Location: http://localhost/blogo/admin/post.php');

                } else {
                    $_SESSION['FeedBackError'] = 'Failed To Delete Post';
                    echo 'failed to Delete Data' . $db->error;
                    // header('Location: http://localhost/blogo/admin/post.php');
                }
            }
            else{

                if ($db->query($deleteCommentOnly) === true) {
                    $_SESSION['FeedBackSuccess'] = 'Post Deleted Successfully';
                    header('Location: http://localhost/blogo/admin/post.php');
                } else {
                    $_SESSION['FeedBackError'] = 'Failed To Delete Post';
                    echo 'failed to Delete Data' . $db->error;
                        // header('Location: http://localhost/blogo/admin/post.php');
                }

            }
        }
    }



   // echo $pageTitle;

    // if ($db->query($postQuery) === true) {

    //     $_SESSION['FeedBackSuccess'] = 'Post Deleted Successfully';

    //     header('Location: http://localhost/blogo/admin/post.php');

    // } else {
    //     $_SESSION['FeedBackError'] = 'Failed To Delete Post';

    //     echo 'failed to Delete Data'. $db->error;

    //    // header('Location: http://localhost/blogo/admin/post.php');
    // }
