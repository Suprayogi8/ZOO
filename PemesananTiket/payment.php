<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- You can link your custom stylesheet here -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        .payment-menu {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            max-width: 400px;
        }

        .payment-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }
        h2 {
            text-align: center;
            color: #fff;
            background: url('kebun.jpg') center/cover;
            padding: 50px;
            margin: 0;
            border-bottom: 5px solid #8FBC8F;
    }
    </style>
    <title>Menu Pembayaran Tiket Kebun Binatang</title>
</head>
<body>
    <h2>Menu Pembayaran Tiket Kebun Binatang</h2>

    <div class="payment-menu">
        <p>Silakan pilih metode pembayaran:</p>

        <!-- Payment options -->
        <div class="payment-options">
            <button onclick="redirectToPayment('dana')">Pembayaran via Dana</button>
            <button onclick="redirectToPayment('transfer_bank')">Pembayaran via Transfer Bank</button>
            <button onclick="redirectToPayment('kredit')">Pembayaran dengan Kartu Kredit</button>
            <!-- Add more payment options as needed -->
        </div>

        <button onclick="redirectToHome()">Kembali</button>
    </div>

    <script>
        function redirectToPayment(paymentMethod) {
            // Redirect to the payment page based on the selected method
            window.location.href = "payment.php?method=" + paymentMethod;
        }

        function redirectToHome() {
            // Redirect to the home page or any other desired page
            window.location.href = "index.php";
        }
    </script>
</body>
</html>
