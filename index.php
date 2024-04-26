<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Four Horsemen</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h2 class="logo">T4HM</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>


    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-circle"></ion-icon></span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="#" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="username">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="password">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me?</label>
                    <a href='#'>Forgot Password?</a>
                </div>
                <button type="submit" class="btn" name="login_Btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href='#' class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="#" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required name="register_username">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="register_email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="register_password">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Agree to terms of service?</label>
                </div>
                <button type="submit" class="btn" name="register_Btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href='#' class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>

<?php
session_start(); // Start the session

if(isset($_POST['login_Btn'])){
    // Login button was clicked
    $conn = mysqli_connect("localhost", "root", "", "websitelogin");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM logindetails WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['password'];
        if($password == $resultPassword){
            // Store username in session
            $_SESSION['username'] = $username;
            header('Location: home.php');
            exit; // Important to prevent further execution
        } else {
            echo "<script>
                alert('Login FAILED!');
                </script>";
        }
    }
}

if(isset($_POST['register_Btn'])){
    // Register button was clicked
    // Your registration handling code here
}
?>
