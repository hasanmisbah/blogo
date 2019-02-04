<?php

require 'config.php';
$db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if ($db->connect_error) {

    die("Database Connection Failed");
    exit;

} else{
    // Load Functions File
    include 'function.php';
}