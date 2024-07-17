<?php
 $id = $_GET['ID'];
 include 'db_addproduct.php';
 mysqli_query($conn,"DELETE FROM `addproduct` WHERE ID=$id");
 header("location:index.php");
?>