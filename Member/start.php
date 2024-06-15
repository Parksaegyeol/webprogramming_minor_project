<?php


$db=mysqli_connect("localhost", "root", "1234");
$query="CREATE DATABASE IF NOT EXISTS memsite";

mysqli_query($db, $query);
mysqli_select_db($db, 'memsite');
$query="CREATE TABLE IF NOT EXISTS member(
    
    idx INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    id VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    password VARCHAR(100) NOT NULL,
    zipcod VARCHAR(100),
    
    PRIMARY KEY (idx)
    
    )";
    
mysqli_query($db, $query);




header("location:index.php");

?>


