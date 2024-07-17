<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include('navigation.php') ?>
</head>
<body>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }

        .order-box {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 20px;
            position: relative;
            margin-top:40px;
        }

        .order-details {
            margin-bottom: 10px;
        }

        .order-details label {
            font-weight: bold;
        }

        .confirm-button {
            width: 30%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            text-decoration: none;
            display: block;
            text-align: center;
            margin: 20px auto;
        }

        .alert {
            margin-top: 20px;
        }

    </style>
    <div class="order-box">
            <form id="order-form" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="order-details">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text"  name="name" class="form-control" placeholder="Enter your full name..." required>
                        </div>
                        <div class="order-details">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                        </div>
                        <div class="order-details">
                            <label for="phone" class="form-label">Phone Number:</label>
                            <input type="number" name="phone" class="form-control" placeholder="+977-98489796678" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="order-details">
                            <label for="district" class="form-label">District:</label>
                            <input type="text"  name="district" class="form-control" placeholder="eg. Nuwakot" required>
                        </div>
                        <div class="order-details">
                            <label for="payment" class="form-label">Payment Option:</label>
                            <select  name="payment" class="form-select" required>
                                <option value="">Select Payment Option</option>
                                <option value="cash on delivery">Cash on Delivery</option>
                                <option value="esewa">Esewa</option>
                                <option value="khalti">Khalti</option>
                            </select>
                        </div>
                        <div class="order-details">
                            <label for="location" class="form-label">Location:</label>
                            <input type="text"  name="location" class="form-control" placeholder="Enter your exact location" required>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <label for="description" class="form-label">Description:</label>
                    <textarea  name="description" class="form-control" rows="3" placeholder="Description about location,street,flat,tole,houseno...." required></textarea>
                </div>
                <p>NOTE:यदी कसैलाई रकम भुक्तानी गर्दा तलको Esewa वा Khalti मार्फत गर्न सक्नुहुन्छ |भुक्तानी को डिटेल Screenshot सहित तलको इमेल मा पठाउनुहोला |
             <br>If someone wants to make a payment, they can do so through Esewa or Khalti. Please send the payment details, along with a screenshot, to the email below:
             <br><b>Esewa:9876543210</b>
             <br><b>Khalti:9876543210</b>
             <br><b>Email:rojeshhumagain@gmail.com</b></p>
            <button type="submit" name="submit" class="confirm-button">Confirm Order</button>
        </form>  
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('order-form').addEventListener('submit', function(event) {
        let form = event.target;
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            document.querySelector('.alert').style.display = 'block';
        }
        form.classList.add('was-validated');
    });
</script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'hamrokhacho');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $_name = $_POST['name'];
    $_email = $_POST['email'];
    $_phone = $_POST['phone'];
    $_district = $_POST['district'];
    $_payment = $_POST['payment'];
    $_location = $_POST['location'];
    $_description = $_POST['description'];

    // Calculate product summary and grand total
    $total = 0;
    $summary = array();
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $product_price = (float) $value['productPrice'];
            $product_quantity = (int) $value['productQuantity'];
            $ptotal = $product_price * $product_quantity;
            $total += $ptotal;
            $summary[$value['productName']] = array(
                'quantity' => $product_quantity,
                'totalPrice' => $ptotal
            );
        }
    }

    // Insert order details into the database
    $sql = "INSERT INTO `order` (`Name`, `Email`, `Phone`, `Paymentmethod`, `Location`, `Description`, `ProductSummary`, `GrandTotal`)
            VALUES ('$_name', '$_email', '$_phone', '$_payment', '$_location', '$_description', '".json_encode($summary)."', $total)";

    if(mysqli_query($conn, $sql)){
        echo "<script>
        alert('Thank you for shopping');
        window.location.href='allproduct.php';
        </script>";
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);                                                                                                                                                           
}
?>
