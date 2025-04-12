<?php
$feedback = "";
if (isset($_POST["confirm"])) {
    if (isset($_POST["credit_card"])) {
        $credit_card = htmlspecialchars($_POST["credit_card"]);
        $feedback = "<div class='success-msg'>✅ Your selected payment method: <strong>{$credit_card}</strong></div>";
    } else {
        $feedback = "<div class='error-msg'>❌ Please select a payment method.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .radio-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            color: #444;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .success-msg, .error-msg {
            margin-top: 20px;
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
        }

        .success-msg {
            background-color: #e0fce4;
            color: #2e7d32;
            border: 1px solid #4caf50;
        }

        .error-msg {
            background-color: #ffe5e5;
            color: #c62828;
            border: 1px solid #f44336;
        }
    </style>
</head>
<body>

    <form action="" method="post">
        <h2>Select Payment Method</h2>
        <div class="radio-group">
            <label><input type="radio" name="credit_card" value="Visa"> Visa</label>
            <label><input type="radio" name="credit_card" value="Mastercard"> Mastercard</label>
            <label><input type="radio" name="credit_card" value="Nagad"> Nagad</label>
            <label><input type="radio" name="credit_card" value="Bkash"> Bkash</label>
        </div>
        <button type="submit" name="confirm" value="confirm">Make Payment</button>

        <?php
        if (!empty($feedback)) {
            echo $feedback;
        }
        ?>
    </form>

</body>
</html>
