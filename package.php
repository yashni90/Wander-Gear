<!DOCTYPE html>
<html>
<head>
    <title>packages</title>
    <link rel="stylesheet" href="packageStyle.css">
</head>
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
body{
    width: 100%;
}
    </style>
<body>
<?php include 'header.php'; ?>
    <div class="packages">
        <div class="package">
           <h1>Adventure Travel Package</h1>
           <img src="pack.png" alt="package 1" class="image-placeholder">
           <ul class="discription">
              <li>Backpack</li>
              <li>Tent</li>
              <li>Hiking Boots</li>
              <li>Frist Aid Kit</li>
              <li>Headlamp</li>
           </ul>
           <p>Rs.5000</p>
           <a href="payment.php" class="buy-button">
    <button class="buy-button">BUY</button>
</a>

        </div>

    <div class="package">
        <h1>Beach Vacation Package</h1>
        <img src="pack2.png" alt="package 1" class="image-placeholder">
        <ul class="discription">
            <li>Beach Tent</li>
            <li>Beach Chairs</li>
            <li>Sun Umbrella</li>
            <li>Portable Bluetooth speakers</li>
            <li>Beach Mat</li>
         </ul>
         <p>Rs.7000.00</p>
         <a href="payment.php" class="buy-button">
    <button class="buy-button">BUY</button>
</a>

    </div>

    <div class="package">
        <h1>Photographic Package</h1>
        <img src="pack3.png" alt="package 1" class="image-placeholder">
        <ul class="discription">
            <li>DSLR or Mirrorless Camera</li>
            <li>Camera Backpack</li>
            <li>Tripod</li>
            <li>Waterproof Camera Case</li>
            <li>Extra Camera Batteries</li>
         </ul>
         <p>Rs.10 000</p>
         <a href="payment.php" class="buy-button">
    <button class="buy-button">BUY</button>
</a>

    </div>

    
   
</body>
</html>