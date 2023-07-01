<?php
    $DB_SERVER = "localhost";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "root";
    $DB_NAME = "my_db";
    $link = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME, 3306);
    if($link->connect_error){
         die("Connection Failed".$link->connect_error);
    }
    else{
    echo " ";
 }
?>