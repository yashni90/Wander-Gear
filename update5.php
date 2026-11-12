<?php
include 'connect.php';
$id=$_GET['update5id'];
$sql="Select *from contact where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$number=$row['number'];
$subject=$row['subject'];
$message=$row['message'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $number=$_POST['number'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $sql="update`contact` set id='$id',name='$name',email='$email',address='$address',number='$number',subject='$subject',message='$message'where id=$id";
    // only varchar type
    $result =mysqli_query($con,$sql);
    if($result){
        header("Location:display5.php");
        exit();

    }else{
        die(mysqli_error($con));
    }

}





?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<php>
    <div class="container">
    <h1 class="one">Update Page</h1>
    <hr>
    <form method="post">
    <div class="two">
            <label>Full Name</label><br>
            <input type="text"  id="tone" name="name" value="<?php echo $name;?>"required>

            <label>Email</label><br>
            <input type="email"  id="tone" name="email" value="<?php echo $email;?>"required>

            <label>Address</label><br>
            <input type="text"  id="tone" name="address" value="<?php echo $address;?>" required>

            <label>Contact Number</label><br>
            <input type="tel" pattern="[0-9]{10}" id="tone" name="number" value="<?php echo $number;?>" required>

            <label>Subject</label><br>
            <input type="text"  id="tone" name="subject" <?php echo $subject;?> required>

            <label>Meesage</label><br>
            <textarea id="subject" name="message" placeholder="Write something.." style="height:200px; width:100%;"></textarea>
           
            <button class="btn btn1"type="submit" name="submit">Submit</button>
            <button class="button button1"onclick="cancelAction();">Cancel</button>
        </div>
</form>
</div>
  

    

    </div>

</body>
</html>