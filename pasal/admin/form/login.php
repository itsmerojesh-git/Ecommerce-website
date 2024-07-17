<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            padding-top: 50px;
        }

        .login-container {
            position: relative;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
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
            background-color: orange;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
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
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container bg-white p-4">
                    <span class="close-icon text-danger fs-4" onclick="closeLogin()"><a class=" text-dark text-decoration-none">X</a></span>
                    <h2>Login</h2>
                    <form action="login1.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Admin:</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter admin Username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Adminpassword:</label>
                            <input type="password" name="userpassword" id="password" class="form-control" placeholder="Enter admin password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn fw-bold">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function closeLogin() {
            history.back();
        }
    </script>
</body>

</html>
