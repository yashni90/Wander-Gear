<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="Contact.js"></script>
    <link rel="stylesheet" href="Contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <style>
        #topBtn {
          display: none; /* Hidden by default */
          position: fixed;
          bottom: 20px;
          right: 30px;
          z-index: 99;
          font-size: 18px;
          border: none;
          outline: none;
          background-color: #555;
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 10px;
        }

        #topBtn:hover {
          background-color: #333; /* Darker color on hover */
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<hr>
    <div>
    <p id="contact" style="text-align: center; font-size: 24px;">Contact Us</p>

        
        <form method="post">
        <div class="two">
            <label>Full Name</label><br>
            <input type="text" value="" id="tone" name="name" autocomplete="off" required>

            <label>Email</label><br>
            <input type="email" value="" id="tone" name="email" autocomplete="off" required>

            <label>Address</label><br>
            <input type="text" value="" id="tone" name="address" autocomplete="off" required>

            <label>Contact Number</label><br>
            <input type="tel" pattern="[0-9]{10}" value="" id="tone" name="number" autocomplete="off" required>

            <label>Subject</label><br>
            <input type="text" value="" id="tone" name="subject" autocomplete="off" required>

            <label>Meesage</label><br>
            <textarea id="subject" name="message" placeholder="Write something.." style="height:200px; width:100%;"></textarea>
            
            <button class="btn btn1"type="submit" name="submit" onclick="onAction()">Submit</button>
            <button class="button button1" onclick="cancelAction();">Cancel</button>
        </div>
    </form>
    
    <div style="display: flex; justify-content: right; padding: 20px; margin-right: 40px; margin-top: -5px;">
    <a href="clock.html" class="button button3" onclick="clockAction();" style="text-decoration: none; color: inherit;">Time</a>
</div>

<!-- Scroll to Top Button -->
<button onclick="scrollToTop()" id="topBtn" title="Go to top">↑</button>

</div>

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
    function cancelAction() {
        alert("Are you sure");
        window.location.href = 'index.html';
    }

    function onAction() {
        alert("Data are submitted");
        window.location.href = 'display5.php';
    }

    // Show the scroll webpage to top button when user scrolls down 20px
    window.onscroll = function() { scrollFunction(); };

    function scrollFunction() {
        const topBtn = document.getElementById("topBtn");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            topBtn.style.display = "block";
        } else {
            topBtn.style.display = "none";
        }
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function clockAction() {
        alert("Do you want to see the time?");
        window.location.href = 'clock.html';
    }
</script>
</body>
</html>
