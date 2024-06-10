<!DOCTYPE html>
<html>
<head>
    <?php include 'include/head.inc.php'; ?>
    <title>clothing brand | Account</title>
</head>
<body>
    <!-- INCLUDES SECTION -->
    <?php
       include 'include/arrow_to_top.inc.php';
        include 'include/shop-navbar.inc.php';
    ?>


<div class="container">
    <header class="track-order-header">
      <h1>Track Order</h1>
      <div class="notifications">
        <i class="fas fa-truck trucking"></i>
        <span class="notification-count">3</span>
      </div>
    </header>
    <div class="active-orders">
      <a href="#">View Active Orders</a>
    </div>
    <div class="track-order-form">
      <h2>Track Your Order</h2>
      <form id="track-order-form">
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="order-id">Order ID:</label>
          <input type="text" id="order-id" name="order-id" required>
        </div>
        <button type="submit">Track Order</button>
      </form>
    </div>
  </div>



<?php
    include 'include/progressbar.inc.php';
?>

<script src="js/script.js"></script>
</body>
</html>