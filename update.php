<?php

require('db_con.php');
$name='';
$description='';

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $updated_at = date('Y-m-d H:i:s');
    global $success;
    global $error;

    $err = 0;
    if(empty($name)){
        $err++;
        $error = "Please Enter Category Name";
    }elseif(strlen($description)<30 && !empty($description)){
        $err++;
        $error = "Description Must Be Greater Then 30 Character";
    }elseif($err == 0){
        if(isset($_GET['id'])){
            $update ="UPDATE categories SET name='$name',description='$description',updated_at='$updated_at' WHERE id=$id";
            $result = $con->query($update);
        
        
            if($result){
                $success = "Data Updated Successfully";
                $name="";
                $description="";
                header("location:index.php?success=$success");
            }else{
                $error = "Data Updated Failed";
            }
        }
        
    }

    
}







include('view/update.view.php');
?>