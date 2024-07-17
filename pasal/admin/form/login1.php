<?php
$conn = mysqli_connect('localhost', 'root', '', 'hamrokhacho');

$name = $_POST['username'];
$password = $_POST['userpassword'];

$select = "SELECT * FROM admin WHERE username='$name' AND userpassword='$password'";
$result = mysqli_query($conn, $select);

if ($result) { // Check if query execution was successful
    
    if(mysqli_num_rows($result)){
        
        echo "
        <script>
        alert('Login Successfully');
        window.location.href='../khacho.php';
        </script>";
    } else {
        echo "
        <script>
        alert('Invalid username/password');
        window.location.href='login.php';
        </script>";
    }
} else {
    // Query execution failed
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
