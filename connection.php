<?php
$connection=mysqli_connect('127.0.0.1', 'root','','blog');
if ($connection==false){
    echo "Could not connect to DB! <br>";
    echo mysqli_connect_error();
    exit();
};