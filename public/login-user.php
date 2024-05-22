<html>
    <head>
            
            <title>clothing brand</title>
            <?php include 'include/head.inc.php'; ?>
    </head>
    <body>

<div class="wrapper-index">
    <div class="book">
        <div class="page">
            <h2 class="title">Login</h2>
            <form method="POST" action="../private/dataProccessing.php">
                <label for="email">Email:</label>
                <input type="email" class="input-field" id="email" placeholder="enter your email..." name="email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <input type="submit" class="submitBtn" name="login" value="Login">
            </form>
        </div>
        <div class="page">
            <h2 class="title">Register</h2>
            <form class="form" method="POST" action="../private/dataProccessing.php" > 
                        
                        <label for="username">username:</label>
                            <input type="text" class="input-field" id="username" onchange="checkUserName()" placeholder="enter your username..." name="username" required>
                            <br><span class="error-section" id="usernameAvailability"></span>
                        
                        <label for="email">Email:</label>
                            <input type="email" class="input-field" id="sign_email" onchange="checkEmail()" placeholder="enter your email..." name="sign_email" required>
                            <br><span class="error-section" id="emailAvailability"></span>
                        
                            <input type="submit" id="register" class="submitBtn" name="signup" value="Register">
                       
                    </form>
        </div>
    </div>
    <script src="js/script.js"></script>
    </body>
</html>