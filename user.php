<?php
include'connect.php';
if(isset($_POST['submit'])){
 
    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    
    
    $sql="Insert into`user` (name,number,email,password,cpassword)values('$name','$number','$email','$password','$cpassword')";
    $result = mysqli_query($con,$sql);
    if($result){
        header("Location:display2.php");
        exit();

    }else{
        die(mysqli_error($con));
        echo"error";
    }

}
?>







<!DOCTYPE html>

</html>
<head>
    <title>Become a Member</title>
    <link rel="stylesheet" href="creat new.css">
</head>

<body>
<?php include 'header.php'; ?>
    <main>
   <center>
    <h1>Become a Member</h1>
    <div class="register">
    <div class="formframe">

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
</center>
</main>
<script src="creat new.js"></script>
<footer>
		<div class="footer-container">
			<div class="footer-section about">
				<h3>About</h3>
				<ul>
					<li><a href="about us.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
			<div class="footer-section faq">
				<h3>FAQ</h3>
				<ul>
					<li><a href="FAQ.php">FAQ</a></li>
				</ul>
			</div>
			<div class="footer-section policy">
				<h3>Policy</h3>
				<ul>
					<li><a href="condition.html">Terms & Conditions</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
		<p>&copy; 2024 Website. All rights reserved.</p>
	</footer>
</body>
</html>