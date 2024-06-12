<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if the email is already registered
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['message'] = "Email is already registered.";
    } else {
        // Insert the new user into the database
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $password);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Registration successful!";
            header("Location: home.php");
            exit();
        } else {
            $_SESSION['message'] = "Something went wrong. Please try again.";
        }
    }

    $stmt->close();
    $conn->close();

    header("Location: register.php");
    exit();
}
?>
