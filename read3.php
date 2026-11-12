<?php
// Include the database connection file
include 'connect.php';

if (isset($_GET['read3id'])) {
    $id = intval($_GET['read3id']);

    // Prepare the SQL query to fetch a single user based on the ID
    $sql = "SELECT * FROM cart WHERE id = ?";
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
        $number = $row['number'];
        $cardname = $row['cardname'];
        $cardnumber = $row['cardnumber'];
       
        $month = $row['month'];
        $year = $row['year'];
        $code = $row['code'];
        
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
    <style>
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
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
                <th>Number</th>
                <td><?php echo $number; ?></td>
            </tr>
            <tr>
                <th>Card Name</th>
                <td><?php echo $cardname; ?></td>
            </tr>
            <tr>
                <th>Card Number</th>
                <td><?php echo $cardnumber; ?></td>
            </tr>
            <tr>
                <th>Month</th>
                <td><?php echo $month; ?></td>
            </tr>
            <tr>
                <th>Year</th>
                <td><?php echo $year; ?></td>
            </tr>
            <tr>
                <th>Code</th>
                <td><?php echo $code; ?></td>
            </tr>
        </table>
    </div>
</body>