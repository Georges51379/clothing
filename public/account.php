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
    <h1>My Account</h1>
    <div class="account-information">
      <h2>Account Info</h2>
      <form id="account-form">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" disabled>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone">
        </div>
      </form>
    </div>
    <div class="shipping-information">
      <h2>Shipping Info</h2>
      <form id="shipping-form">
        <div class="form-group">
          <label for="street">Street Address:</label>
          <input type="text" id="street" name="street">
        </div>
        <div class="form-group">
          <label for="country">Country:</label>
          <select name="country" id="country">
            <option value="">Select Country</option>
            <option value="US">United States</option>
            <option value="CA">Canada</option>
            <option value="UK">United Kingdom</option>
            </select>
        </div>
        <div class="form-group">
          <label for="city">City:</label>
          <input type="text" id="city" name="city">
        </div>
        <div class="form-group">
          <label for="postal-code">Postal Code:</label>
          <input type="text" id="postal-code" name="postal-code">
        </div>
      </form>
    </div>
    <button id="disable-account">Disable Account</button>
  </div>

<?php
    include 'include/progressbar.inc.php';
?>

<script src="js/script.js"></script>
</body>
</html>