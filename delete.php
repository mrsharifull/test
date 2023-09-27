<?php
require('db_con.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = "DELETE FROM categories WHERE id = $id";
    
    $result = $con->query($delete);
    if($result){
        if($result){
            $success = "Data Deleted Successfully";
            header("location:index.php?success=$success");
        }else{
            $error = "Data Delete Failed";
            header("location:index.php?error=$error");
        }
    }
}
?>