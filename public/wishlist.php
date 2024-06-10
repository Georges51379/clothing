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
    <h1>My Wishlist</h1>
    <table id="wishlist-table">
      <thead>
        <tr>
          <th>Image</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Discounted Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <td>img</td>    
        <td>name</td>    
        <td>150$</td>    
        <td>100$</td>    
        <td><i class="fas fa-eye"></i></td>    
    </tbody>
    </table>
    <p id="empty-message">Your wishlist is currently empty.</p>
  </div>


<?php
    include 'include/progressbar.inc.php';
?>

<script src="js/script.js"></script>
</body>
</html>