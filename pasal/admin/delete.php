<?php 
$Id = $_GET['ID'];
$conn = mysqli_connect('localhost', 'root', '', 'hamrokhacho');
mysqli_query($conn,"DELETE FROM `user` WHERE ID= $Id");
header('location:user.php');
?>