<?php
session_start();
//session_destroy();
if(isset($_SESSION['user'])){

// Check if $_SESSION['cart'] is set and not null
if(!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


$product_name = isset($_POST['PName']) ? $_POST['PName'] : '';
$product_price = isset($_POST['PPrice']) ? $_POST['PPrice'] : '';
$product_quantity = isset($_POST['PQuantity']) ? $_POST['PQuantity'] : '';

if(isset($_POST['addCart'])){
    if($product_name != ''){
        $check_product = array_column($_SESSION['cart'], 'productName');
        if(in_array($product_name, $check_product)){
            echo "
            <script>
            alert('Product already added');
            window.location.href = 'allproduct.php';
            </script>
            ";
        } else {
            $_SESSION['cart'][] = array(
                'productName' => $product_name,
                'productPrice' => $product_price,
                'productQuantity' => $product_quantity
            );
            header("location:allproduct.php");
            exit; 
        }
    } else {
        echo "Product name is required"; 
    }
}

// Remove product
if(isset($_POST['remove'])){
    if(isset($_POST['item'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['productName'] === $_POST['item']){
                unset($_SESSION['cart'][$key]); 
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header('location:cartview.php');
                exit; 
            }
        }
    } else {
        echo "Product to remove is not specified"; 
    }
}

// Update product
if(isset($_POST['update'])){
    if(isset($_POST['item'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['productName'] === $_POST['item']){
                $_SESSION['cart'][$key] = array( 
                    'productName' => $product_name,
                    'productPrice' => $product_price,
                    'productQuantity' => $product_quantity
                );
                header("location:cartview.php");
                exit;
            }
        }
    } else {
        echo "Product to update is not specified"; 
    }
}
}
else{
    header("location:form/login.php");
}
?>
