<!DOCTYPE html>
<html>
<head>
    <?php include 'include/head.inc.php'; ?>
    <title>clothing brand | Shop</title>
</head>
<body>
    <!-- INCLUDES SECTION -->
    <?php
        include 'include/arrow_to_top.inc.php';
        include 'include/shop-navbar.inc.php';
    ?>

<div class="wrapper">
<!-- WOMEN SECTION-->
<h2 class="container-title">product name</h2>


<div class="product-detail-container">

<div class="row">
  <div class="column">
    <img src="../private/admin/productimage/main.png" alt="random" style="width:100%" onclick="galleryTrial(this);">
  </div>
  <div class="column">
    <img src="../private/admin/productimage/second.png" alt="random" style="width:100%" onclick="galleryTrial(this);">
  </div>
  <div class="column">
    <img src="../private/admin/productimage/third.png" alt="random" style="width:100%" onclick="galleryTrial(this);">
  </div>
  <div class="column">
    <img src="../private/admin/productimage/fourth.png" alt="random" style="width:100%" onclick="galleryTrial(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>
    
<div class="product-detail-page">
    <div class="product-info">
        <h1 class="product-name">Product Name</h1>
        <p class="product-description">Description: This is a detailed description of the product, including its size, color, and material.</p>
        <p class="product-price">Price: $100 <span class="discounted-price">$80</span></p>
        <p class="product-reviews">Number of Reviews: 45</p>
        
        <div class="product-actions">
            <input type="number" class="product-quantity" value="1" min="1">
            <button class="add-to-cart">Add to Cart</button>
            <button class="add-to-wishlist">Add to Wishlist</button>
        </div>
        
        <div class="size-guide">
            <h2>Size Guide</h2>
            <table>
                <tr>
                    <th>Country</th>
                    <th>S</th>
                    <th>M</th>
                    <th>L</th>
                    <th>XL</th>
                </tr>
                <tr>
                    <td>USA</td>
                    <td>4</td>
                    <td>6</td>
                    <td>8</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>UK</td>
                    <td>8</td>
                    <td>10</td>
                    <td>12</td>
                    <td>14</td>
                </tr>
                <tr>
                    <td>EU</td>
                    <td>36</td>
                    <td>38</td>
                    <td>40</td>
                    <td>42</td>
                </tr>
            </table>
        </div>
        
        <div class="reviews">
            <h2>Reviews</h2>
            <div class="review">
                <p><strong>Reviewer Name</strong></p>
                <p>This is a review of the product. It is very good and meets all expectations.</p>
            </div>
            <div class="review">
                <p><strong>Reviewer Name</strong></p>
                <p>This is another review of the product. It is very good and meets all expectations.</p>
            </div>
        </div>
    </div>

    <div class="related-products">
        <h2>Related Products</h2>
        <div class="related-product">
            <img src="https://via.placeholder.com/150" alt="Related Product 1">
            <p>Related Product 1</p>
        </div>
        <div class="related-product">
            <img src="https://via.placeholder.com/150" alt="Related Product 2">
            <p>Related Product 2</p>
        </div>
        <div class="related-product">
            <img src="https://via.placeholder.com/150" alt="Related Product 3">
            <p>Related Product 3</p>
        </div>
    </div>
</div>
</div>
</div><!-- END WRAPPER -->

<?php
    include 'include/progressbar.inc.php';
    include 'include/footer.inc.php';
?>
<script>
function galleryTrial(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>
<script src="js/script.js"></script>
</body>
</html>