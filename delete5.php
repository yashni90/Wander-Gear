<?php
include'connect.php';
if(isset($_GET ['delete5id'])){
    $id=$_GET['delete5id'];


    $sql="delete from`contact` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
         header('location:display5.php');
    }else{
        die(mysqli_error($con));
    }
}

?>