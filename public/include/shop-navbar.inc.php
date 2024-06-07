<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Sidebar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s ease;
        }

        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #f1f1f1;
            overflow-x: hidden;
            padding-top: 20px;
            transition: width 0.3s ease;
        }

        .sidenav.collapsed {
            width: 60px;
        }

        .sidenav a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 16px;
            color: #818181;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
            transition: color 0.3s ease;
        }

        .sidenav a:hover, .dropdown-btn:hover {
            color: #333;
        }

        .sidenav a.active {
            color: #4CAF50;
        }

        .dropdown-container {
            display: none;
            padding-left: 8px;
        }

        .dropdown-btn.active {
            color: #4CAF50;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        .sidenav.collapsed + .content {
            margin-left: 60px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
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
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #4CAF50;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #4CAF50;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }



        
        .search-container {
  display: flex;
  align-items: center;
  position: relative;
}

.search-input {
  padding: 8px 40px 8px 16px;
  border: none;
  border-radius: 20px;
  outline: none;
  font-size: 14px;
  width: 200px;
  transition: width 0.3s;
}

.search-input:focus {
  width: 300px;
}

.search-btn {
  position: absolute;
  right: 12px;
  background-color: transparent;
  color: #ccc;
  border: none;
  cursor: pointer;
  transition: color 0.3s;
}

.search-btn:hover {
  color: #fff;
}









        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .dark-theme {
            background-color: #333;
            color: #f1f1f1;
        }

        .dark-theme .sidenav {
            background-color: #444;
        }

        .dark-theme .sidenav a, .dark-theme .dropdown-btn {
            color: #f1f1f1;
        }

        .dark-theme .sidenav a:hover, .dark-theme .dropdown-btn:hover {
            color: #fff;
        }

        .dark-theme .sidenav a.active {
            color: #4CAF50;
        }

        .dark-theme .dropdown-btn.active {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="sidenav">
        <a href="#" onclick="toggleSidenav()">
            <i class="fas fa-bars"></i>
            <span></span>
        </a>
        <hr>
        <div class="search-container">
            <input type="text" class="search-input">
            <button class="search-btn"><i class="fas fa-search"></i></button>
        </div>
        <hr>
        <a href="#"><i class="fas fa-tshirt"></i> <span>T-shirts</span></a>
        <a href="#"><i class="fas fa-tshirt"></i> <span>Tops</span></a>
        <a href="#"><i class="fas fa-tshirt"></i> <span>Skirts</span></a>
        <a href="#"><i class="fas fa-tshirt"></i> <span>Bikini</span></a>
        <button class="dropdown-btn">
            <i class="fas fa-user"></i>
            <span>Account</span>
            <i class="fas fa-chevron-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#"><i class="fas fa-user"></i> <span>Profile</span></a>
            <a href="#"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
        </div>
        <a href="#"><i class="fas fa-shopping-cart"></i> <span>Cart</span></a>
        <a href="#"><i class="fas fa-heart"></i> <span>Wishlist</span></a>
        <a href="#"><i class="fas fa-box"></i> <span>Orders</span></a>
        <a href="#"><i class="fas fa-plus"></i> <span>Request Product</span></a>
        <a href="#"><i class="fas fa-sign-in-alt"></i> <span>Login</span></a>
        <hr>
        <div class="toggle-container">
            <label class="switch">
                <input type="checkbox" onchange="toggleDarkTheme()">
                <span class="slider round"></span>
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
    var toggleSwitch = document.querySelector('.switch input[type="checkbox"]');
    toggleSwitch.checked = document.body.classList.contains("dark-theme");
}


const searchIcon = document.querySelector('.search-icon');
const searchContainer = document.querySelector('.search-container');

searchIcon.addEventListener('click', () => {
  searchContainer.classList.toggle('show-search');
});


    </script>
</body>
</html>