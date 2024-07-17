<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .product-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-table {
            margin-top: 50px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-table th,
        .product-table td {
            vertical-align: middle !important;
        }

        @media (max-width: 768px) {
            .product-form {
                padding: 10px;
            }

            .product-table {
                margin-top: 30px;
            }
        }

    </style>
</head>
<body>
    <?php include('navbar.php');?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <h1 class="text-center text-dark mb-4"><u>Add Product</u></h1>
                <div class="product-form fw-bold">
                    <form action="insert.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Product Name:</label>
                            <input type="text" name="Pname" class="form-control" placeholder="Enter Product name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Price:</label>
                            <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Image:</label>
                            <input type="file" name="Pimage" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Details:</label>
                            <input type="text" name="Pdetail" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Page Category:</label>
                            <select class="form-select" name="Pages">
                                <option value="Grocery" >Grocery</option>
                                <option value="Electronics" >Electronics</option>
                                <option value="Fashion" >Fashion</option>
                                <option value="Utensil" >Utensil</option>
                                <option value="Sports">Sports</option>
                                <option value="Stationery">Stationery</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                       <button name="submit" class="btn btn-primary fw-bold form-control w-50 mt-4 mb-3">UPLOAD</button>
                     </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Fetch -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <table class="table table-hover product-table">
                    <thead class="bg-primary text-dark text-center">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Details</th>
                            <th>Category</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                        <?php
                        include 'db_addproduct.php';
                        $Record = mysqli_query($conn, "SELECT * FROM `addproduct`");
                        while ($row = mysqli_fetch_array($Record))
                            echo "
                        <tr class='fw-bold'>
                        <td>$row[Id]</td>
                        <td>$row[PName]</td> 
                        <td>$row[PPrice]</td>
                        <td><img src='$row[PImage]' height='100px' width='100px'></td>
                        <td>$row[PDetails]</td>
                        <td>$row[PCategory]</td>
                        <td><a href='update.php?ID=$row[Id]'class='btn btn-primary text-dark fw-bold'>Update</a></td>
                        <td><a href='delete.php?ID=$row[Id]'class='btn btn-danger text-dark  fw-bold'>Delete</a></td>
                        </tr>
                        ";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
