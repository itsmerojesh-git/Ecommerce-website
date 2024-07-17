<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include'navigation.php' ?>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .card {
            margin-top: 50px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid #ccc;
            border-radius: 10px 10px 0 0;
        }

        .card-header h5 {
            margin-bottom: 0;
        }

        .card-body {
            padding: 20px;
        }

        .card-subtitle {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'hamrokhacho');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM `order`";
            $result = mysqli_query($conn, $sql);

            $count = 0; // Variable to keep track of the number of cards in a row
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $productName = '';
                    $totalPrice = '';
                    $productSummary = json_decode($row['ProductSummary'], true);
                    foreach ($productSummary as $name => $info) {
                        $productName .= $name . ' : ' . $info['totalPrice'] . '<br>';
                    }
                    $productName = rtrim($productName, ', ');
                    if ($count % 3 == 0) {
                        echo '</div><div class="row">';
                    }

                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<div class="card-header">';
                    echo '<h1 class="card-title">Order Item</h1>';
                    echo '<h2 class="card-subtitle mb-2 text-muted">Name: ' . $row['Name'] . '</h2>';
                    echo '</div>';
                    echo '<div class="card-body">';
                    echo '<p class="card-text"><strong>Email:</strong> ' . $row['Email'] . '</p>';
                    echo '<p class="card-text"><strong>Phone:</strong> ' . $row['Phone'] . '</p>';
                    echo '<p class="card-text"><strong>Payment Method:</strong> ' . $row['Paymentmethod'] . '</p>';
                    echo '<p class="card-text"><strong>Location:</strong> ' . $row['Location'] . '</p>';
                    echo '<p class="card-text"><strong>Description:</strong> ' . $row['Description'] . '</p>';
                    echo '<p class="card-text"><strong>Product Summary:</strong><br>' . $productName . '</p>';
                    echo '<p class="card-text fw-bold"><strong>Grand Total:</strong> ' .'RS '. $row['GrandTotal'] .'.00/-'.'</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                    $count++;
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>
