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
    <h1>Order History</h1>
    <table id="order-history-table">
      <thead>
        <tr>
          <th>Image</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Order Date</th>
          <th>Delivered Date</th>
        </tr>
      </thead>
      <tbody>
        </tbody>
    </table>
    <p id="empty-message">You don't have any past orders yet.</p>
  </div>




<?php
    include 'include/progressbar.inc.php';
?>

<script src="js/script.js"></script>
</body>
</html>