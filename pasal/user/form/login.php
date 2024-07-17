<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
        }

        .login-container {
            position: relative;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 2px solid #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: black;
        }

        .login-container label {
            font-weight: bold;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 8px;
            width: 100%;
            margin-bottom: 10px;
        }

        .login-container button {
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

        .login-container .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .login-container .register-link a {
            text-decoration: none;
            color: black;
        }

        .login-container .register-link a:hover {
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

        .forgot-link {
            text-align: left;
            margin-top: 10px;
        }

        .forgot-link a {
            text-decoration: none;
            color: black;
        }

        .forgot-link a:hover {
            text-decoration: underline;
            color: blue;
        }
        
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="login-container text-dark bg-white">
                    <span class="close-icon" onclick="history.back()"><a class=" text-dark text-decoration-none fs-4">X</a></span>
                    <h2>Login</h2>
                    <form action="login1.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" name="name" id="username" class="form-control" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary fw-bold">Login</button>
                        </div>
                        <div class="mb-3 text-center">
                            <p class="forgot-link"><a class="fw-bold text-dark" href="forgot.php">Forgot Password</a></p>
                            <p class="register-link">Don't have an account?<a class="fw-bold" href="register.php">Register here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
