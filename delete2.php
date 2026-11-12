<?php
include'connect.php';
if(isset($_GET ['delete2id'])){
    $id=$_GET['delete2id'];


    $sql="delete from`user` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display2.php');
    }else{
        die(mysqli_error($con));
    }
}

?>