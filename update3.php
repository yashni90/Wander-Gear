<?php
include 'connect.php';
$id=$_GET['update3id'];
$sql="Select *from `cart` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$number=$row['number'];
$cardname=$row['cardname'];
$cardnumber=$row['cardnumber'];
$month=$row['month'];
$year=$row['year'];
$code=$row['code'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $cardname=$_POST['cardname'];
    $cardnumber=$_POST['cardnumber'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $code=$_POST['code'];
    $sql="update`cart` set id='$id',name='$name',email='$email',number='$number',cardname='$cardname',cardnumber='$cardnumber',month='$month',year='$year',code='$code'where id=$id";
    // only varchar type
    $result =mysqli_query($con,$sql);
    if($result){
        header("Location:display3.php");
        exit();

    }else{
        die(mysqli_error($con));
    }

}





?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="update3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<php>
    <div class="container">
    <h1 class="one">Update Page</h1>
    <hr>
    <form method="post">
     <div class="form-section">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name"  value="<?php echo $name;?>" placeholder="Your Name" required>
                
                <label for="email">Email*</label>
                <input type="email" id="email" name="email"  value="<?php echo $email;?>"placeholder="mail@example.com" required>
                
                <label for="contactNumber">Contact Number*</label>
                <input type="text" id="contactNumber" name="number" value="<?php echo $number;?>"placeholder="Number" required>
            </div>

            <div class="form-section">
                <label for="cardholderName">Cardholder Name*</label>
                <input type="text" id="cardholderName"  value="<?php echo $cardname;?>" name="cardname" required>

                <label for="cardNumber">Card Number*</label>
                <input type="text" id="cardNumber"  value="<?php echo $cardnumber;?>"name="cardnumber" required>

                <label for="expiryMonth">Expiry Month*</label>
                <input type="text" id="month"  value="<?php echo $month;?>" name="month" required>

                <label for="expiryYear">Expiry Year*</label>
                <input type="text" id="year"  value="<?php echo $year;?>" name="year" required>

                <label for="securityCode">Security Code*</label>
                <input type="password" id="securityCode"  value="<?php echo $code;?>" name="code" required>


                
                        <button type="submit" name="submit">Save and Pay</button>
            </div>
                
</form>
</div>
  

    

    </div>

</body>
</html>