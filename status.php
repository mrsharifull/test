<?php
require('db_con.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $status = "SELECT status FROM categories WHERE id=$id";
    
    $result = $con->query($status);
    if($result){
        $row = $result->fetch_assoc();
        $insert='';
        if($row['status']==1){
            $insert ="UPDATE categories SET status = 0 WHERE id = $id";
        }else{
            $insert ="UPDATE categories SET status = 1 WHERE id = $id";
        }
        $statusUpdate = $con->query($insert);
        if($statusUpdate){
            $success = "Status Updated Successfully";
            header("location:index.php?success=$success");
        }else{
            $error = "Status Update Failed";
            header("location:index.php?error=$error");
        }
    }
}






?>