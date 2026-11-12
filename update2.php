<?php
include 'connect.php';
$id=$_GET['update2id'];
$sql="Select *from user where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$number=$row['number'];
$email=$row['email'];
$password=$row['password'];
$cpassword=$row['cpassword'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
  
    $sql="update`user` set id='$id',name='$name',number='$number',email='$email',password='$password',cpassword='$cpassword'where id=$id";
    // only varchar type
    $result =mysqli_query($con,$sql);
    if($result){
        header("Location:display2.php");
        exit();

    }else{
        die(mysqli_error($con));
    }

}





?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="create new.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<php>
    <div class="container">
    <h1 class="one">Update Page</h1>
    <hr>
    <form onsubmit="return checkPassword()" method="post">
       <label for="fullname" style="text-align: left;">Full Name<a style="color: red;">*</a></label> <br>
        <input type="text" name="name" required>
        <br><br>

       <label for="phone number" style="text-align: left;"> Telephone Number<a style="color: red;">*</a></label><br>
        <input type="tel" name="number" pattern="[0-9]{10}" required>
        <br><br>

        <label for="email" style="text-align: left;">Email<a style="color: red;">*</a></label><br>
       <input type="email" name="email" required>
        <br><br>

        <label for="password" style="text-align: left;">Password<a style="color: red;">*</a></label><br>
        <input type="password" id="psw" name="password" required>
        <br><br>

        <label for="repassword" style="text-align: left;">Confirm Password<a style="color: red;">*</a></label><br>
        <input type="password" id="repsw" name="cpassword" required>
        <br><br>

        <button type="submit" name="submit" class="register-button" >Register</button>
        
</form>
</div>
  

    

    </div>

</body>
</html>