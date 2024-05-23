<div class="top-wrapper">
    <div class="topnav" id="myTopnav">
        <div class="middle-links">
            <a href="shop.php">welcome user</a>
            <a href="account.php"><i class="fas fa-user"></i></a>
            <a href="wishlist.php"><i class="fas fa-heart"></i></a>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
            <a href="track-order.php"><i class="fas fa-truck"></i></a>
            <a href="order-history.php"><i class="fas fa-box-open"></i></a>
            <a href="requestproduct.php" title="Request Product"><i class="fas fa-box"></i></a>
            <a href="login-user.php"><i class="fas fa-sign-in-alt"></i></a>
            <a href="javascript:void(0);" class="icon" onclick="hamburgerResponsive()">
            <i class="fa fa-bars"></i>
        </a>
        </div>
        </div><!---END TOPBAR--> 
        <div class="shop-bar">
        <div class="btn-group dropend">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                women
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li class="dropdown-list"><a href="#" class="dropdown-links">all</a></li>
                <li class="dropdown-list"><a href="#" class="dropdown-links">shirts</a></li>
                <li class="dropdown-list"><a href="#" class="dropdown-links">pants</a></li>
            </ul>
        </div>
            <a href="index.php" class="shop-links">clothing brand</a>
            <div class="btn-group dropstart">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    men
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li class="dropdown-list"><a href="index.php" class="dropdown-links">all</a></li>
                    <li class="dropdown-list"><a href="#" class="dropdown-links">shirts</a></li>
                    <li class="dropdown-list"><a href="#" class="dropdown-links">pants</a></li>
                </ul>
            </div>
        </div>
        
</div><!--END TOP WRAPPER--><center>
<div class="search">
    <input type="text" class="search-input" placeholder="Search">
</div></center>

<script>
      // Hamburger responsive function
      function hamburgerResponsive() {
      const topnav = document.getElementById("myTopnav");
      if (topnav) {
          if (topnav.className === "topnav") {
              topnav.className += " responsive";
          } else {
              topnav.className = "topnav";
          }
      }
  }

</script>