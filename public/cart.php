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
    <h1>My Cart</h1>
    <table id="cart-table">
      <thead>
        <tr>
          <th>Image</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Discounted Price</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    <p id="empty-message">Your cart is currently empty.</p>
    <div class="coupon-code">
      <h2>Coupon Code</h2>
      <input type="text" id="coupon-input" placeholder="Enter Coupon Code">
      <button id="apply-coupon">Apply</button>
    </div>
    <div class="checkout">
      <h2>Checkout</h2>
      <p id="cart-total">Total: $<span id="total-amount">0.00</span></p>
      <button id="checkout-button">Checkout</button>
    </div>
  </div>


  <?php
    include 'include/progressbar.inc.php';
    include 'include/footer.inc.php';
?>

<script src="js/script.js"></script>
</body>
</html>