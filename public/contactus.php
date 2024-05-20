<!DOCTYPE html>
<html>
<head>
    <?php include 'include/head.inc.php'; ?>
    <title>clothing brand | About Us</title>
</head>
<body>
    <?php
    include 'include/arrow_to_top.inc.php';
    include 'include/navbar.inc.php';
    ?>

    <div class="wrapper">
    
    <div class="intro">
            <h1>Contact Us</h1>
            <p>We have 3 branches and we are willing to get bigger. Feel free to reach out to us through any of our branches or by using the form.</p>
        </div>
        <div class="contact-content">
            <div class="branch-info">
                <div class="branch">
                    <img src="../private/admin/img/location/oman.png" alt="City 1">
                    <h2>Oman, Muscat, 800 x 533px</h2>
                    <p>Phone: (123) 456-7890</p>
                </div>
                <div class="branch">
                    <img src="../private/admin/img/location/uae.png" alt="City 2">
                    <h2>UAE, Burj Khalifa</h2>
                    <p>Phone: (234) 567-8901</p>
                </div>
                <div class="branch">
                    <img src="../private/admin/img/location/usa.png" alt="City 3">
                    <h2>USA, Washington</h2>
                    <p>Phone: (345) 678-9012</p>
                </div>
            </div>
            <div class="contact-form">
                <form>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>


    </div><!--END WRAPPER-->

    <?php include 'include/footer.inc.php'; ?>
    <?php include 'include/progressbar.inc.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>
