<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewcart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .total-container {
           border: 1px solid #ddd;
           padding: 10px;
           margin-top: 10px;
           box-shadow: 0 4px 8px rgba(0,0,0,0.1);
           border-radius: 5px;
           overflow: hidden;
        }
        body {
            background-color: #f8f9fa;
        }

        .btn-info{
            border: 1px solid #ddd;
            background-color: blue;
            transition: all 0.3s;   
        }
        .btn-danger {
            border: 1px solid #ddd;
            background-color: red;
            transition: all 0.3s;
        }

        .btn-info:hover{
            background-color: white;
            border-color: #ccc;
        }  
        table {
            border: 1px solid #ddd;
            border-collapse: collapse;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f9f9f9;
        }

        .total-container {
            border: 1px solid #ddd;
            padding: 10px;
            margin-top: 10px;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            table {
                overflow-x: auto;
            }
        }
    </style>
    <?php
    include 'navigation.php'; 
    ?> 
</head>
<body>
    <div class="container">
        <div class="row bg-white">
            <div class="col-lg-12 text-center  mb-5 rounded">
                <h1 class="text-dark text-center font-monospace  mt-4 mb-3 ">
                    <b><u>My Cart</u></b>
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-5 col-lg-9 ">
                <table class="table table-bordered text-center">
                    <thead class="bg-primary text-dark fs-5">
                        <tr>
                            <th>SN</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Update</th>
                            <th >Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ptotal=0;
                        $total=0;
                        $i=1;
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                                $product_price = (float) $value['productPrice'];
                                $product_quantity = (int) $value['productQuantity'];
                                $ptotal = $product_price * $product_quantity;
                                $total += $ptotal;
                                $key=$i++;
                                echo "
                                <form action='insertcart.php' method='POST'>
                                    <tr class='text-dark bg-white'>
                                        <td>$key</td>
                                        <td><input type='hidden' name='PName' value='$value[productName]'>$value[productName]</td>
                                        <td><input type='hidden' name='PPrice' value='$value[productPrice]'>$value[productPrice]</td>
                                        <td><input type='' name='PQuantity' value='$value[productQuantity]'></td>
                                        <td>$ptotal</td>
                                        <td><button name='update' class='btn btn-primary fw-bold btn-sm'>Update</button></td>
                                        <td><button name='remove' class='btn btn-danger fw-bold btn-sm'>Delete</button></td>
                                        <td><input type='hidden' name='item' value='$value[productName]'></td>
                                    </tr>
                                </form>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 text-center m-auto"> 
                <?php if ($total > 0): ?>
                    <h1 class="bg-primary  font-monospace fw-bold"><u>TOTAL</u></h1>
                    <h1 class=" bg-white  text-dark fw-bold"><?php echo number_format($total,2); ?></h1>
                    <a href="order.php" class="btn btn-success mt-3">Proceed to Checkout</a>
                <?php else: ?>
                    <p>Your cart is empty.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>