<?php
session_start();
include 'db_connect.php';

if (!$conn) {
    echo "Database connection failed. Please start MySQL or ensure the local SQLite database is available.";
    exit();
}

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = trim($_POST['user_name'] ?? '');
    $user_email = trim($_POST['user_email'] ?? '');
    $user_password = $_POST['user_password'] ?? '';

    if (!empty($user_password)) {
        $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare('UPDATE users SET user_name = :name, user_email = :email, user_password = :password WHERE user_id = :id');
        $stmt->execute([
            ':name' => $user_name,
            ':email' => $user_email,
            ':password' => $hashed_password,
            ':id' => $user_id,
        ]);
    } else {
        $stmt = $conn->prepare('UPDATE users SET user_name = :name, user_email = :email WHERE user_id = :id');
        $stmt->execute([
            ':name' => $user_name,
            ':email' => $user_email,
            ':id' => $user_id,
        ]);
    }

    echo 'Profile updated successfully!';
}

$stmt = $conn->prepare('SELECT * FROM users WHERE user_id = :id LIMIT 1');
$stmt->execute([':id' => $user_id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="profile.css">
    <title>Update Profile</title>
</head>
<body>
<h2>Update Profile</h2>

<form action="profile_up.php" method="POST">
    Name: <input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" required><br><br>
    Email: <input type="email" name="user_email" value="<?php echo $row['user_email']; ?>" required><br><br>
    Password: <input type="password" name="user_password" placeholder="Enter new password (optional)"><br><br>
    <input type="submit" value="Update Profile">
</form>

<a href="profile.php">Back to Profile</a>

</body>
</html>
