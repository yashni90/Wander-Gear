<?php
include 'connect.php';
$id=$_GET['update4id'];
$sql="Select *from customer where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$contact=$row['contact'];
$message=$row['message'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $message=$_POST['message'];
    
    $sql="update`customer` set id='$id',name='$name',email='$email',contact='$contact',message='$message'where id=$id";
    // only varchar type
    $result =mysqli_query($con,$sql);
    if($result){
        header("Location:display4.php");
        exit();

    }else{
        die(mysqli_error($con));
    }

}





?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="update4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<php>
    <div class="container">
    <h1 class="one">Update Page</h1>
    <hr>
    <div class="form">
    <form action="" method="POST">
        <div class="details">
            <label for="name">Customer Name</label>
            <input type="text" id="name" name="name" value="<?php echo $name;?>"placeholder="Customer name.." required>
    
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?php echo $email;?>"placeholder="Email.." required>
    
            <label for="contact">Contact Number</label>
            <input type="text" id="contact" name="contact"value="<?php echo $contact;?>" placeholder="Contact Number.." required>
    
            <label for="message">Message</label>
            <input type="text" id="message" name="message"value="<?php echo $message;?>" placeholder="Message.." required>
        </div>

        <div class="buttons">
            <input class="button button1" type="submit" name="submit" value="Submit">
            <button class="button button3"onclick="cancelAction();">Cancel</button>
        </div>
    </form>
</div>
  

    

    </div>

</body>
</html>
 