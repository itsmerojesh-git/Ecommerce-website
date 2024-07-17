<?php
$conn = mysqli_connect('localhost', 'root', '', 'hamrokhacho');
if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['password'];

    $insertQuery = "INSERT INTO `user`(`UserName`, `Email`, `Number`, `Password`) VALUES ('$Name','$Email','$Number','$Password')";
    $dup_Email_query = "SELECT * FROM `user` WHERE Email='$Email'";
    $dup_username_query = "SELECT * FROM `user` WHERE UserName='$Name'";



    $dup_Email_result = mysqli_query($conn, $dup_Email_query);
    $dup_username_result = mysqli_query($conn, $dup_username_query);

    if (!$dup_Email_result || !$dup_username_result) {
        echo "<script>
        alert('Database error');
        </script>";
    } else {
        $dup_Email = mysqli_num_rows($dup_Email_result);
        $dup_username = mysqli_num_rows($dup_username_result);

        if ($dup_Email > 0) {
            echo "<script>
            alert('Email already taken');
             window.location.href='register.php';
             </script>";
        } elseif ($dup_username > 0) {
            echo "<script>alert('Username already taken'); 
            window.location.href='register.php';
            </script>";
        } else {
            if (mysqli_query($conn, $insertQuery)) {
                echo "<script>
                alert('Registration successful');
                 window.location.href='login.php';</script>";
            } else {
                echo "<script>
                alert('Registration failed');
                </script>";
            }
        }
    }
}
?>
