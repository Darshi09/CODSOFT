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
    $password = $_POST['password'];

    // Hash the password before storing it (optional for login, but useful for registration)
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Check if the user exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, now check the password
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Password is correct
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['message'] = "Login successful!";
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['message'] = "Invalid password.";
        }
    } else {
        $_SESSION['message'] = "No user found with that email address.";
    }

    $stmt->close();
    $conn->close();

    header("Location: login.php");
    exit();
}
?>
