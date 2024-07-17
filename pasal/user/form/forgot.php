<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
        }

        .forgot-password-container {
            position: relative;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 2px solid #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .forgot-password-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: black;
        }

        .forgot-password-container label {
            font-weight: bold;
        }

        .forgot-password-container input[type="text"],
        .forgot-password-container input[type="password"] {
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 8px;
            width: 100%;
            margin-bottom: 10px;
        }

        .forgot-password-container button {
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            background-color: blue;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .forgot-password-container .forgot-link {
            text-align: left;
            margin-top: 10px;
        }

        .forgot-password-container .forgot-link a {
            text-decoration: none;
            color: black;
        }

        .forgot-password-container .forgot-link a:hover {
            text-decoration: underline;
            color: blue;
        }
        .close-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    font-weight: bold;
    font-family: Arial, sans-serif;
    transition: color 0.3s, background-color 0.3s; 
    padding: 0 7px;
    border-radius: 5px;
    border: 1px solid #ccc;
    background-color: #fff;
    transition: transform 0.3s, box-shadow 0.3s;
}

.close-icon:hover {
    transform: translateZ(5px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); 
}
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="forgot-password-container text-dark bg-white">
                <span class="close-icon text-danger fs-4" onclick="goBack()"><a class=" text-dark text-decoration-none">X</a></span>
                    <h2>Forgot Password</h2>
                    <form action="forgot.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username/Email:</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username/email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your new password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirm New Password:</label>
                            <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm your new password" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">Reset Password</button>
                        </div>
                        <div class="mb-3 forgot-link">
                            <a class="fw-bold" href="login.php"><-Back to Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>
</html>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'hamrokhacho');

if (isset($_POST['submit'])) {
    $usernameOrEmail = $_POST['username'];
    $newPassword = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Check if the new password and confirm password match
    if ($newPassword !== $confirmPassword) {
        echo "<script>
                alert('Passwords not match rewrite same password');
                window.location.href='forgot.php';
                </script>";
        exit;
    }

    // Check if the username or email exists in your database
    $user_query = "SELECT * FROM `user` WHERE UserName='$usernameOrEmail' OR Email='$usernameOrEmail'";
    $user_result = mysqli_query($conn, $user_query);

    if (mysqli_num_rows($user_result) == 1) {
        // Update the password in the database
        $update_query = "UPDATE `user` SET Password='$newPassword' WHERE UserName='$usernameOrEmail' OR Email='$usernameOrEmail'";
        if (mysqli_query($conn, $update_query)) {
            echo "<script>
                    alert('Password reset successful');
                    window.location.href='login.php';
                    </script>";
        } else {
            echo "<script>
                    alert('Password reset failed');
                    window.location.href='forgot.php';
                    </script>";
        }
    } else {
        echo "<script>
                alert('User not found');
                window.location.href='forgot.php';
                </script>";
    }
}
?>
