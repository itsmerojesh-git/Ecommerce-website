<?php
$conn = mysqli_connect('localhost', 'root', '', 'hamrokhacho');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `order` WHERE id = ?";
    
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ordersummary.php");
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    }
}
mysqli_close($conn);
?>
