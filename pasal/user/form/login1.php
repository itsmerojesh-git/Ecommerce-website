<?php
$Name = $_POST['name'];
$Password = $_POST['password'];
$conn = mysqli_connect('localhost', 'root', '', 'hamrokhacho');
$result = mysqli_query($conn,"SELECT * FROM `user` WHERE (Email='$Name ' OR  UserName='$Name') AND Password='$Password'");

session_start();
if(mysqli_num_rows($result)){
    $_SESSION['user'] = $Name;
echo "<script>alert('Login Successfully');
 window.location.href='../allproduct.php';
 </script>";
}
else{
    echo "<script>alert('Incorrect/Username(email)/password');
 window.location.href='login.php';
 </script>";
}

?>