<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
        }

        .register-container {
            position: relative;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 2px solid #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: black;
        }

        .register-container label {
            font-weight: bold;
        }

        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 8px;
            width: 100%;
            margin-bottom: 10px;
        }

        .register-container button {
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

        .register-container .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-container .login-link a {
            text-decoration: none;
            color: black;
        }

        .register-container .login-link a:hover {
            text-decoration: underline;
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
                <div class="register-container text-dark bg-white">
                <span class="close-icon text-danger fs-4" onclick="closeLogin()"><a class=" text-dark text-decoration-none" href="../../user/index.php">X</a></span>
                    <h2>Register</h2>
                    <form action="register.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address:</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Phone Number:</label>
                            <input type="text" name="number" id="number" class="form-control" placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">Register</button>
                        </div>
                        <div class="mb-3 login-link">
                            <p>Already have an account? <a class="fw-bold" href="login.php">Login here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

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
