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
$stmt = $conn->prepare('SELECT * FROM users WHERE user_id = :id LIMIT 1');
$stmt->execute([':id' => $user_id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    echo 'User not found!';
    exit();
}

$user_name = $row['user_name'];
$user_email = $row['user_email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <title>Profile Page</title>
</head>
<body>
    <div class="profile-shell">
        <div class="profile-card">
            <div class="avatar-wrap">
                <div class="avatar">U</div>
            </div>

            <p class="eyebrow">Account Overview</p>
            <h2>Welcome, <?php echo htmlspecialchars($user_name); ?></h2>

            <div class="info-box">
                <div class="info-row">
                    <span class="label">Name</span>
                    <span class="value"><?php echo htmlspecialchars($user_name); ?></span>
                </div>
                <div class="info-row">
                    <span class="label">Email</span>
                    <span class="value"><?php echo htmlspecialchars($user_email); ?></span>
                </div>
            </div>

            <div class="action-group">
                <a href="profile_up.php" class="btn primary">Update Profile</a>
                <a href="profile_delete.php" class="btn danger">Delete Profile</a>
                <a href="logout.php" class="btn secondary">Log Out</a>
            </div>
        </div>
    </div>
</body>
</html>
