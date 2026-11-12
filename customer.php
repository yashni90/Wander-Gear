<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `customer` (name, email, contact, message) VALUES ('$name', '$email', '$contact', '$message')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location:display4.php");
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="customer.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Customer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="cus.css">
</head>
<body>
<?php include 'header.php'; ?>
<hr>
<h2 class="theme">Rating and Reviews</h2>


<div class="form">
    <form action="" method="POST">
        <div class="details">
            <label for="name">Customer Name</label>
            <input type="text" id="name" name="name" placeholder="Customer name.." required>
    
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Email.." required>
    
            <label for="contact">Contact Number</label>
            <input type="text" id="contact" name="contact" placeholder="Contact Number.." required>
    
            <label for="message">Message</label>
            <input type="text" id="message" name="message" placeholder="Message.." required>
        </div>

        <div class="buttons">
            <input class="button button1" type="submit" name="submit" value="Submit">
            <button class="button button3"onclick="cancelAction();">Cancel</button>
        </div>
    </form>
</div>
</body>
</html>
