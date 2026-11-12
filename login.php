<?php
session_start();
include 'db_connect.php';

if (!$conn) {
    echo "Database connection failed. Please start MySQL or ensure the local SQLite database is available.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_email = trim($_POST['user_email'] ?? '');
    $user_password = $_POST['user_password'] ?? '';

    $stmt = $conn->prepare('SELECT * FROM users WHERE user_email = :email LIMIT 1');
    $stmt->execute([':email' => $user_email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row && password_verify($user_password, $row['user_password'])) {
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_email'] = $row['user_email'];

        header('Location: profile.php');
        exit();
    } elseif ($row) {
        echo 'Invalid password!';
    } else {
        echo 'No user found with this email!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="login.css">
    </head>
<body>



<!-- Login form -->
<h2>Login</h2>
<form action="login.php" method="POST">
    Email: <input type="email" name="user_email" required><br><br>
    Password: <input type="password" name="user_password" required><br><br>
    <a href="register.php">Don't have an account ?</a>
    <input type="submit" value="Login">
    
</form>


</body>
</html>
