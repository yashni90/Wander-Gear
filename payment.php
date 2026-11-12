<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $code = $_POST['code'];

    $sql = "INSERT INTO `cart` (name, email, number, cardname, cardnumber, month, year, code)
            VALUES ('$name', '$email', '$number', '$cardname', '$cardnumber', '$month', '$year', '$code')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: display3.php");
        exit();
    } else {
        die(mysqli_error($con));
        echo "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Payment</title>
    <link rel="stylesheet" href="payment12.css">
</head>
<body>
<?php include 'header.php'; ?>
    <main>
        <h2>Add Payment</h2>
        <form method="post">
            <div class="form-section">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" placeholder="mail@example.com" required>
                
                <label for="contactNumber">Contact Number*</label>
                <input type="text" id="contactNumber" name="number" placeholder="Number" required>
            </div>

            <div class="form-section">
                <label for="cardholderName">Cardholder Name*</label>
                <input type="text" id="cardholderName" name="cardname" required>

                <label for="cardNumber">Card Number*</label>
                <input type="text" id="cardNumber" name="cardnumber" required>

                <label for="expiryMonth">Expiry Month*</label>
                <input type="text" id="month" name="month" required>

                <label for="expiryYear">Expiry Year*</label>
                <input type="text" id="year" name="year" required>

                <label for="securityCode">Security Code*</label>
                <input type="password" id="securityCode" name="code" required>

                <br><br>

                <label>
                    <input type="checkbox" id="agreeCheckbox"> I agree to the <a href="terms.html">terms and conditions</a>
                </label><br><br>

                <p id="one">You Amount: RS. 5000.00/-</p>

                <!-- The button is disabled by default -->
                <button id="submitButton" type="submit" name="submit" disabled>Save and Pay</button>
            </div>
        </form>
    </main>

    <script src="payment.js"></script>
</body>
</html>

