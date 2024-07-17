<?php
$data = [];
if(isset($_GET['ID'])) {
    $id = $_GET['ID'];
    include 'db_addproduct.php';
    $Record = mysqli_query($conn, "SELECT * FROM `addproduct` WHERE Id = $id");
    $data = mysqli_fetch_assoc($Record); 
} else {
    echo "ID is not set.";
}

if (isset($_POST['update'])) {
    include 'db_addproduct.php';
    $id = $_POST['Id'];

    // Update only if the name field is not empty
    if (!empty($_POST['Pname'])) {
        $product_name = $_POST['Pname'];
        mysqli_query($conn, "UPDATE `addproduct` SET `PName`='$product_name' WHERE ID= $id");
    }

    // Update the other fields if they are not empty
    if (!empty($_POST['Pprice'])) {
        $product_price = $_POST['Pprice'];
        mysqli_query($conn, "UPDATE `addproduct` SET `PPrice`='$product_price' WHERE ID= $id");
    }

    if (!empty($_FILES['Pimage']['name'])) {
        $product_image = $_FILES['Pimage'];
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
        $img_des = "Uploadimage/" . $image_name;
        move_uploaded_file($image_loc, "Uploadimage/" . $image_name);
        mysqli_query($conn, "UPDATE `addproduct` SET `PImage`='$img_des' WHERE ID= $id");
    }

    if (!empty($_POST['Pdetail'])) {
        $product_details = $_POST['Pdetail'];
        mysqli_query($conn, "UPDATE `addproduct` SET `PDetails`='$product_details' WHERE ID= $id");
    }

    if (!empty($_POST['Pages'])) {
        $product_category = $_POST['Pages'];
        mysqli_query($conn, "UPDATE `addproduct` SET `PCategory`='$product_category' WHERE ID= $id");
    }

    header("location:index.php");
    exit(); 
}

?>


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

        @media (max-width: 768px) {
            .product-form {
                padding: 10px;
            }

        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="product-form fw-bold">
                    <form action="update.php" method="POST" enctype="multipart/form-data">
                        <div>
                            <p class="text-center text-dark mb-4 fs-3"><u>Update Product</u></p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Name:</label>
                            <input type="text" value="<?php echo isset($data['PName']) ? $data['PName'] : ''; ?>" name="Pname" class="form-control" placeholder="Enter Product name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Price:</label>
                            <input type="text" value="<?php echo isset($data['PPrice']) ? $data['PPrice'] : ''; ?>" name="Pprice" class="form-control" placeholder="Enter Product Price">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label">Product Image:</label>
                            <input type="file" name="Pimage" class="form-control ">
                            <img src="<?php echo isset($data['PImage']) ? $data['PImage'] : ''; ?>" alt="" style="height:100px">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Details:</label>
                            <input type="text" value="<?php echo isset($data['PDetails']) ? $data['PDetails'] : ''; ?>" name="Pdetail" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Page Category:</label>
                            <select class="form-select" name="Pages">
                                <option value="Grocery" <?php echo isset($data['PCategory']) && $data['PCategory'] == 'Grocery' ? 'selected' : ''; ?>>Grocery</option>
                                <option value="Electronics" <?php echo isset($data['PCategory']) && $data['PCategory'] == 'Electronics' ? 'selected' : ''; ?>>Electronics</option>
                                <option value="Fashion" <?php echo isset($data['PCategory']) && $data['PCategory'] == 'Fashion' ? 'selected' : ''; ?>>Fashion</option>
                                <option value="Utensil" <?php echo isset($data['PCategory']) && $data['PCategory'] == 'Utensil' ? 'selected' : ''; ?>>Utensil</option>
                                <option value="Sports" <?php echo isset($data['PCategory']) && $data['PCategory'] == 'Sports' ? 'selected' : ''; ?>>Sports</option>
                                <option value="Stationery" <?php echo isset($data['PCategory']) && $data['PCategory'] == 'Stationery' ? 'selected' : ''; ?>>Stationery</option>
                            </select>
                        </div>
                        <input type="hidden" name="Id" value="<?php echo isset($data['Id']) ? $data['Id'] : ''; ?>">
                        <div class="d-flex justify-content-center">
                            <button name="update" class="btn btn-primary fw-bold form-control w-50 mt-4 mb-3">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
