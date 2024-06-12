<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    if (empty($name) || empty($email) || empty($card_number) || empty($expiry_date) || empty($cvv)) {
        echo "All fields are required.";
        exit;
    }

    $payment_status = processPayment($name, $email, $card_number, $expiry_date, $cvv);

    if ($payment_status === true) {
        echo "Payment successful!";
    } else {
        echo "Payment failed. Please try again.";
    }
}

function processPayment($name, $email, $card_number, $expiry_date, $cvv) {
    return true;
}
header('Location: book.php');
exit();
?>
