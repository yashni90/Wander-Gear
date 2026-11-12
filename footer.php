<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Example</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
</head>
<body>

  <!-- Main content of the page -->
  <div class="content">
    <h1>Welcome to Our Website</h1>
    <p>Some content goes here...</p>
  </div>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-left">
      <h3>About Us</h3>
      <p><a href="#aboutus">Learn more about our company</a></p>
      <p><a href="#privacy-policy">Privacy Policy</a></p>
      <p><a href="#terms">Terms and Conditions</a></p>
      <p><a href="#faq">FAQ</a></p>
    </div>
    <div class="footer-right">
      <div id="qrcode"></div> <!-- QR code will appear here -->
    </div>
  </footer>

  <script>
    // Function to generate the QR code
function generateQRCode() {
  var qrCodeContainer = document.getElementById("qrcode");
  
  // You can customize the QR code data (e.g., website URL)
  new QRCode(qrCodeContainer, {
    text: "hii",
    width: 128,
    height: 128
  });
}

// Call the function to generate the QR code
generateQRCode();

  </script>
</body>
</html>


