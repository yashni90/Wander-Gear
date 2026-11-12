<?php
include 'db_connect.php';

if (!$conn) {
    echo "Database connection failed. Please start MySQL or ensure the local SQLite database is available.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = trim($_POST['user_name'] ?? '');
    $user_email = trim($_POST['user_email'] ?? '');
    $user_password = $_POST['user_password'] ?? '';

    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare('INSERT INTO users (user_name, user_email, user_password) VALUES (:name, :email, :password)');
    try {
        $stmt->execute([
            ':name' => $user_name,
            ':email' => $user_email,
            ':password' => $hashed_password,
        ]);

        header('Location: login.php');
        exit();
    } catch (PDOException $e) {
        echo 'Registration failed: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="register.css">
    </head>

<body>

 <h2>SIGN UP </h2>
<!-- Sign up form -->
<form action="register.php" method="POST">
    Name: <input type="text" name="user_name" required><br><br>
    Email: <input type="email" name="user_email" required><br><br>
    Password: <input type="password" name="user_password" required><br><br>
    <input type="submit" value="Sign Up">

    <a href="login.php">Log in here !</a>

</form>

</body>
</html>