<!DOCTYPE html>
<html>
<head>
    <?php include 'include/head.inc.php'; ?>
    <title>clothing brand | Request Product</title>
</head>
<body>
    <!-- INCLUDES SECTION -->
    <?php
       include 'include/arrow_to_top.inc.php';
        include 'include/shop-navbar.inc.php';
    ?>

<div class="container">
        <div class="banner">
            <h1>Request a Product</h1>
            <p>You can request a product by filling the necessary fields below and get an answer.</p>
            <div class="message-box">
                <i class="fas fa-envelope"></i>
                <span id="message-count">12</span> <!-- Replace with the actual number of messages -->
            </div>
        </div>
        <div class="form-container">
            <form>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="product-name">Product Name:</label>
                <input type="text" id="product-name" name="product-name" required>
                
                <label for="product-size">Product Size:</label>
                <input type="text" id="product-size" name="product-size" required>
                
                <label for="availability-date">Product Availability Date:</label>
                <input type="date" id="availability-date" name="availability-date" required>
                
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>





<?php
    include 'include/progressbar.inc.php';
    include 'include/footer.inc.php';
?>

<script src="js/script.js"></script>
</body>
</html>