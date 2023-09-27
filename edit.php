<?php
require('db_con.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $select = "SELECT * FROM categories WHERE id=$id";
    $result = $con->query($select);
    if($result){
        $row = $result->fetch_assoc();
        include("update.php");
    }
}


?>