<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <style>
        body {
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
<div class="register-form-container">
    <i class="fas fa-times" id="form-close"></i>
    <form action="register.php" method="post">
        <h3>Register</h3>
        <input type="email" name="email" class="box" placeholder="Enter your email" required>
        <input type="password" name="password" class="box" placeholder="Enter your password" required>
        <input type="submit" value="Register now" class="btn">
    </form>
</div>
<script src="script.js"></script>
</body>
</html>
