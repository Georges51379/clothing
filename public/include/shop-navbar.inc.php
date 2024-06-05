
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            transition: background-color 0.3s ease;
        }
        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
            transition: 0.3s;
        }
        .sidenav.collapsed {
            width: 60px;
        }
        .sidenav .toggle-btn {
            font-size: 20px;
            color: white;
            padding: 10px 15px;
            text-align: left;
            border: none;
            background: none;
            cursor: pointer;
            outline: none;
            width: 100%;
        }
        .sidenav .toggle-btn i {
            font-size: 22px;
        }
        .sidenav a, .sidenav .dropdown-btn {
            padding: 8px 16px;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
        }
        .sidenav a i, .sidenav .dropdown-btn i {
            margin-right: 16px;
        }
        .sidenav a:hover, .dropdown-btn:hover {
            color: #f1f1f1;
        }
        .sidenav .active {
            background-color: #575757;
            color: white;
        }
        .sidenav .dropdown-container {
            display: none;
            background-color: #262626;
            padding-left: 8px;
        }
        .dark-theme {
            background-color: #333;
            color: #f4f4f4;
        }
        .dark-theme .sidenav {
            background-color: #444;
        }
        .dark-theme .sidenav a, .dark-theme .sidenav .dropdown-btn {
            color: #bbb;
        }
        .dark-theme .sidenav a:hover, .dark-theme .dropdown-btn:hover {
            color: #fff;
        }
        .dark-theme .switch input:checked + .slider {
            background-color: #2196F3;
        }
        .dark-theme .switch input:checked + .slider:before {
            transform: translateX(26px);
        }
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
        }
        hr {
            border: 0.5px solid #818181;
            margin: 10px 0;
        }
        .content {
            margin-left: 250px; /* Adjusted to match the sidebar width */
            padding: 20px;
            transition: margin-left 0.3s;
        }
        .sidenav.collapsed ~ .content {
            margin-left: 60px;
        }
    </style>
    
<div class="sidenav">
    <button class="toggle-btn" onclick="toggleSidenav()">
        <i class="fa fa-bars"></i>
    </button>
    <div>
        <button class="dropdown-btn"><i class="fa fa-list"></i> <span>Category</span>
            <span class="fa fa-caret-down"></span>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="fa fa-female"></i> <span>Dress</span></a>
            <a href="#"><i class="fa fa-tshirt"></i> <span>Tshirts</span></a>
            <a href="#"><i class="fa fa-top"></i> <span>Top</span></a>
            <a href="#"><i class="fa fa-skirt"></i> <span>Skirts</span></a>
            <a href="#"><i class="fa fa-bikini"></i> <span>Bikini</span></a>
        </div>
        <a href="#"><i class="fa fa-user"></i> <span>Account</span></a>
        <a href="#"><i class="fa fa-shopping-cart"></i> <span>Cart</span></a>
        <a href="#"><i class="fa fa-heart"></i> <span>Wishlist</span></a>
        <a href="#"><i class="fa fa-box"></i> <span>Orders</span></a>
        <a href="#"><i class="fa fa-request"></i> <span>Request Product</span></a>
        <a href="#"><i class="fa fa-sign-in-alt"></i> <span>Login</span></a>
    </div>
    <div>
        <hr>
        <label class="switch">
            <input type="checkbox" onchange="toggleDarkTheme()">
            <span class="slider"></span>
        </label>
    </div>
</div>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }

    function toggleSidenav() {
        var sidenav = document.querySelector(".sidenav");
        sidenav.classList.toggle("collapsed");
        var links = sidenav.querySelectorAll("a span, .dropdown-btn span");
        for (var j = 0; j < links.length; j++) {
            links[j].style.display = sidenav.classList.contains("collapsed") ? "none" : "inline";
        }
    }

    function toggleDarkTheme() {
        document.body.classList.toggle("dark-theme");
    }
</script>