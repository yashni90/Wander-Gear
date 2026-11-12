<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about us.css">
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script> <!-- Link to external JavaScript file -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Document</title>
    <style>
         footer {
    background-color: #f8f8f8;
    padding: 20px 0;
    text-align: center;
    border-top: 1px solid #ddd;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    max-width: 1000px;
    margin: 0 auto;
}

.footer-section h3 {
    margin-bottom: 10px;
}

.footer-section ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}
      </style>
</head>
<body>

    <header>
		<div class="container">
			<div class="logo">
				<img src="Logo.png" alt="Logo"> <!-- Replace with actual logo path -->
			</div>
			<nav>
				<ul>
					<button class="zoom-button" onclick="goToPage1()">Home</button>
					<button class="zoom-button" onclick="goToPage2()">Booking Now</button>
					<button class="zoom-button" onclick="goToPage3()">Packages</button>
					<button class="zoom-button" onclick="goToPage4()">Gallery</button>
					<button class="zoom-button" onclick="goToPage5()">Contact</button>
				</ul>
			</nav>
			<div class="user-icon">
				<a href="login.php">
					<img src="log in.png" alt="User profile">
				</a>
			</div>
		</div>
	</header> 
    <main>
        <section class="about-section">
            <h2>About Us</h2>

                <p>Welcome to Wander gear,a travel agency that never gets tired of riding the world.
                   We ease the travel for every adventurer as you can find places to visit,various types of travel packages,and adventure gear.
                </p>
                <p>
                   With a mission to travel first, this portal gives you a broad range of sites to visit regardless of one's travelling inclination.
                   Some may be looking for a quiet retreat, while some will want a climbing escapade or an educational tour; whichever you want, we have it.
                </p>
                <p>
                  At Wander gear of Travel, we understand that travel should be affordable but fulfilling.
                  Here's why we have put together helpful guides on different travel packages with their costs, destinations, and curves.
                  You can find well-priced tents and hiking gear to fit any outdoor activity and still keep style and standards.
                </p>
                <p>
                  Responsible tourism is the key feature of our trips as we create authentic experiences for our guests.
                  Engage yourselves into this adventure, be a part of our world and treasure the joy of memories. Adventure is out there!
                </p>
        </section>

        <div class="button">
          <button onclick="window.location.href='customer.php'">Customer Review</button>
        </div>
    </main>    
    <footer>
		<div class="footer-container">
			<div class="footer-section about">
				<h3>About</h3>
				<ul>
					<li><a href="about us.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</div>
			<div class="footer-section faq">
				<h3>FAQ</h3>
				<ul>
					<li><a href="FAQ.php">FAQ</a></li>
				</ul>
			</div>
			<div class="footer-section policy">
				<h3>Policy</h3>
				<ul>
					<li><a href="condition.html">Terms & Conditions</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
		<p>&copy; 2024 Website. All rights reserved.</p>
	</footer>
  <script>
function goToPage1() {
    window.location.href = "index.html"; // Replace with your actual home page URL
}

function goToPage2() {
    window.location.href = "booknow.html"; // Replace with your actual booking page URL
}

function goToPage3() {
    window.location.href = "package.php"; // Replace with your actual packages page URL
}

function goToPage4() {
    window.location.href = "gallery.html"; // Replace with your actual gallery page URL
}

function goToPage5() {
    window.location.href = "contact.php"; // Replace with your actual contact page URL
}
</script>

    
</body>
</html>