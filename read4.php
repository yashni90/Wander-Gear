<?php
// Include the database connection file
include 'connect.php';

if (isset($_GET['read4id'])) {
    $id = intval($_GET['read4id']);

    // Prepare the SQL query to fetch a single user based on the ID
    $sql = "SELECT * FROM customer WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);  // Bind the integer ID parameter
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        // Fetch user data
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $contact = $row['contact'];
        $message = $row['message'];
        
    } else {
        echo "No record found with ID: " . $id;
        exit;
    }
} else {
    echo "ID not provided";
    exit;
}

// Close the connection after fetching the data
$stmt->close();
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read User</title>
    <link rel="stylesheet" href="read4.css">
</head>
<body>
    <div class="container">
        <h2>User Details</h2>
        <table>
        <tr>
                <th>ID</th>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><?php echo $contact; ?></td>
            </tr>
            <tr>
                <th>Message</th>
                <td><?php echo $message; ?></td>
            </tr>
            
        </table>
    </div>
</body>