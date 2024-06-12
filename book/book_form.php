<?php
session_start();

$connection = new mysqli('localhost', 'root', '', 'book');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['send'])) {
    $name = $connection->real_escape_string($_POST['name']);
    $email = $connection->real_escape_string($_POST['email']);
    $phone = $connection->real_escape_string($_POST['phone']);
    $address = $connection->real_escape_string($_POST['address']);
    $location = $connection->real_escape_string($_POST['location']);
    $guests = $connection->real_escape_string($_POST['guests']);
    $arrivals = $connection->real_escape_string($_POST['arrivals']);
    $leaving = $connection->real_escape_string($_POST['leaving']);

    $stmt = $connection->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Booking successfully!!!";
    } else {
        $_SESSION['message'] = "Something went wrong. Please try again.";
    }

    $stmt->close();
    $connection->close();

    header('Location: payment.php');
    exit();
}
?>
