<?php
session_start(); // Start the session

// Check if the user is logged in
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
} else {
    // Redirect to login page if user is not logged in
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaporwave Homepage</title>
    <style>
        /* Basic Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2c3e50; /* Dark blue */
        }
        header {
            background-color: #8e44ad; /* Purple */
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .logo {
            margin: 0;
            font-family: 'Arial Black', sans-serif;
            font-size: 36px;
            letter-spacing: 5px;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        /* CSS styles for the logo image */
        .logo-img {
            position: absolute;
            top: 10px;
            left: 10px;
            height: 120px; /* Adjust height as needed */
            width: auto;
            z-index: 1; /* Ensure the logo is above other elements */
        }

        .navigation {
            margin-top: 10px;
        }
        .navigation a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 18px;
        }
        .navigation a:hover {
            text-decoration: underline;
        }
        .user-name {
            display: inline-block;
            background-color: #e67e22; /* Orange */
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 12px;
            cursor: pointer;
        }
        /* Vaporwave Styling */
        .content {
            display: flex;
            flex-wrap: wrap; /* Allow boxes to wrap */
            justify-content: space-around;
            margin-top: 50px;
        }
        .box {
            position: relative;
            width: calc(33.33% - 20px); /* 33.33% width with some spacing */
            margin: 10px; /* Spacing between boxes */
            height: 200px;
            background: linear-gradient(145deg, #8e44ad, #3498db); /* Purple to Blue */
            color: #fff;
            text-align: center;
            line-height: 200px;
            font-size: 24px;
            border-radius: 20px;
            cursor: pointer;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
            overflow: hidden; /* Hide overflow content (the image) */
        }
        .box:hover {
            transform: scale(1.1);
        }

        /* CSS styles for box hover content (image) */
        .box-hover-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            display: none; /* Hide by default */
        }

        /* CSS styles for box hover effect */
        .box:hover .box-hover-content {
            display: block; /* Show on hover */
        }

        /* CSS styles for box hover content image */
        .box-hover-content img {
            width: 100%;
            height: 100%;
            object-fit: contain; /* Ensure image is contained within the area */        }

        

    </style>
</head>
<body>
    <header>
        <img src="images/t4hmLogo.png" alt="Logo" class="logo-img">
        <h2 class="logo">T4HM</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <div id="userName" class="user-name"><?php echo $username; ?></div>
        </nav>
    </header>
    
    <div class="content">
        <div class="box" onclick="location.href='#'">
            <div class="box-hover-content">
                <img src="images/t4hmRanking.png" alt="Image 1">
            </div>
            Ranking Engine
        </div>
        <div class="box" onclick="location.href='#'">
            <div class="box-hover-content">
                <img src="images/march.jpg" alt="Image 2">
            </div>
            Honkai Toolbox
        </div>
        <div class="box" onclick="location.href='#'">
            <div class="box-hover-content">
                <img src="images/CDL.png" alt="Image 3">
            </div>
            CDL Predictions
        </div>
    </div>
</body>
</html>
