<?php
include'connect.php';
if(isset($_GET ['delete3id'])){
    $id=$_GET['delete3id'];


    $sql="delete from`cart` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display3.php');
    }else{
        die(mysqli_error($con));
    }
}

?>