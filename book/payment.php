<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>

<div class="payment-container">
    <h2>Payment Details</h2>
    <form action="process_payment.php" method="POST">
        <label for="name">Name on Card</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="card_number">Card Number</label>
        <input type="text" id="card_number" name="card_number" required>

        <label for="expiry_date">Expiry Date</label>
        <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY" required>

        <label for="cvv">CVV</label>
        <input type="number" id="cvv" name="cvv" required>

        <input type="submit" value="Pay Now" class="btn">
    </form>
</div>

</body>
</html>
