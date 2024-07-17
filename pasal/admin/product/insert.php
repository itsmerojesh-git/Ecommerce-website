<!-- product database मा add गर्न -->
<?php
if(isset($_POST['submit'])){
    include 'db_addproduct.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage']; 
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name= $_FILES['Pimage']['name'];
    $img_des="Uploadimage/".$image_name;
    move_uploaded_file($image_loc,"Uploadimage/".$image_name);
    $product_details =$_POST['Pdetail'];
    $product_category = $_POST['Pages'];
    // add/insert product
    mysqli_query($conn,"INSERT INTO `addproduct`( `PName`, `PPrice`, `PImage`,`PDetails`, `PCategory`)
     VALUES ('$product_name','$product_price','$img_des','$product_details',' $product_category')");
     header("location:index.php");
}
?>
