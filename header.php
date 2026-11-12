<!-- header.php -->
<?php
session_start();
$profileLink = isset($_SESSION['user_id']) ? 'profile.php' : 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Your Website</title>
    <link rel="stylesheet" href="index.css">
    
    <script src="index.js"></script>



</head>
<body>
    <header>
		<div class="container">
			<div class="logo">
				<img src="Logo.png" alt="Logo"> <!-- Replace with actual logo path -->
			</div>
			<nav>
				<ul>
				<a href="index.html">
						<button class="zoom-button">Home</button>
					</a>
					<a href="Booknow.html">
						<button class="zoom-button">Booking Now</button>
					</a>
					<a href="package.php">
						<button class="zoom-button">Package</button>
					</a>
					<a href="gallery.html">
						<button class="zoom-button">Gallery</button>
					</a>
					<a href="contact.php">
						<button class="zoom-button">Contact</button>
					</a>
				</ul>
			</nav>
			<div class="user-icon">
				<a href="<?php echo $profileLink; ?>">
					<img src="log in.png" alt="User profile">
				</a>
			</div>
		</div>
	</header>