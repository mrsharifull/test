<?php

require('db_con.php');
$name='';
$description='';

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $created_at = date('Y-m-d H:i:s');
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
        $insert ="INSERT INTO categories(name,description,created_at)VALUES('$name','$description','$created_at')";
        $result = $con->query($insert);
    
    
        if($result){
            $success = "Data Insert Successfully";
            $name="";
            $description="";
            header("location:index.php?success=$success");
        }else{
            $error = "Data Insert Failed";
        }
    }

    
}







include('view/insert.view.php');
?>