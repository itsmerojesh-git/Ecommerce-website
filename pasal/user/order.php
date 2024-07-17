<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include('navigation.php') ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 40px;
        }

        .order-summary {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 650px;
            margin: 100px auto;
           
        }

        @media (max-width: 576px) {
            .order-summary {
                position: static;
                width: 100%;
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Order Summary</h1>
        <div class="order-summary">
            <?php
            $ptotal = 0;
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

            echo "<h4>Product Summary</h4>";
            echo "------------------------------------------------------------------------------------------------------------------";
            echo "<ul>";
            foreach ($summary as $productName => $productInfo) {
                echo "<li>$productName ({$productInfo['quantity']}): {$productInfo['totalPrice']}</li>";
            }
            echo "</ul>";
            echo "------------------------------------------------------------------------------------------------------------------";
            echo "<h4>Grand Total: " . number_format($total, 2) . "</h4>";
            ?>
            <a href="confirmorder.php" class="btn btn-success mt-3">confirm order</a>
        </div>
      
</body>
</html>
