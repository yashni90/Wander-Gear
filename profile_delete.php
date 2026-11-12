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
    $stmt = $conn->prepare('DELETE FROM users WHERE user_id = :id');
    $stmt->execute([':id' => $user_id]);

    session_unset();
    session_destroy();
    header('Location: register.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <title>Delete Profile</title>
</head>
<body>
    <div class="profile-shell warning-shell">
        <div class="profile-card delete-card">
            <div class="warning-icon">!</div>
            <p class="eyebrow danger-text">Delete Account</p>
            <h2>Delete Profile</h2>

            <p class="warning-text">Are you sure you want to delete your profile? This action cannot be undone.</p>

            <form action="profile_delete.php" method="POST" class="delete-form">
                <button type="submit" class="btn danger large">Yes, Delete My Profile</button>
            </form>

            <a href="profile.php" class="cancel-link">Back to Profile</a>
        </div>
    </div>
</body>
</html>
