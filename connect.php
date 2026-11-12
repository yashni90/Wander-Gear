<?php


$con=new mysqli('localhost','root','','iwt');
if($con){

    echo"";
}else{
    die(mysqli_error($con));
}
?>