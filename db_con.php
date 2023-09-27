<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'crud';

$con = new mysqli($host, $username, $password, $database);

if($con->connect_error){
    die("Database Connection Failed $con->connect_error");
}



?>