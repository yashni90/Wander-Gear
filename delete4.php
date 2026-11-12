<?php
include'connect.php';
if(isset($_GET ['delete4id'])){
    $id=$_GET['delete4id'];


    $sql="delete from`customer` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display4.php');
    }else{
        die(mysqli_error($con));
    }
}

?>