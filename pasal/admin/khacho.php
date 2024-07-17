<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php session_start(); 
if(!$_SESSION['admin']){
    header("location:../admin/form/login.php");
    exit; 
}
?>
    <style>
        body {
            background-color: #f8f9fa;
        }

        nav.navbar {
            background-color: #343a40;
            color: white;
        }

        .navbar-brand img {
            height: 30px;
            width: auto;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .navbar-nav .nav-link {
            color: white;
            margin-left: 10px;
        }

        .navbar-nav .nav-link:hover {
            text-decoration: none;
        }

        .dashboard-heading {
            background-color: #17a2b8;
            color: white;
            padding: 10px 0;
            margin-top: 20px;
        }

        .dashboard-links {
            background-color: #007bff;
            color: white;
            padding: 10px 0;
            margin-top: 20px;
            border-radius: 5px;
        }

        .dashboard-links a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        .dashboard-links a:hover {
            text-decoration: underline;
        }

        .dashboard-link-box {
            background-color: white;
            color: black;
            padding: 10px;
            margin: auto;
            margin-top:50px;
            border-radius: 5px;
            transition: all 0.3s;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            transform: perspective(1px) translateZ(0);
            flex: 1 1 200px;
            max-width: 200px;
        }

        .dashboard-link-box:hover {
            transform: scale(1.05);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .dashboard-link-box {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">RoJe$h</a>
            <span class="navbar-text">
                <i class="fas fa-user-tie"></i>
                Namaste, <?php echo $_SESSION['admin'] ?? ''; ?>
                <a href="form/logout.php" class="text-decoration-none text-white me-5">Logout</a>
                <a href="../user/index.php" class="text-decoration-none text-white me-5"><b>Userpanel</b></a>
            </span>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-center mt-4 mb-4 fw-bold border border-3 border-primary ">Dashboard</h2>
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="dashboard-link-box" id="feedback">
                    <a href="helpline.php" class="text-decoration-none fs-5 fw-bold">Helpline</a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="dashboard-link-box" id="addPost">
                    <a href="product/index.php" class="text-decoration-none fs-5 fw-bold">Add Product</a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="dashboard-link-box" id="users">
                    <a href="user.php" class="text-decoration-none fs-5 fw-bold">UsersLogin</a>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="dashboard-link-box" id="order">
                    <a href="#" class="text-decoration-none fs-5 fw-bold">Userorder</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const feedback = document.getElementById('feedback');
        const addPost = document.getElementById('addPost');
        const users = document.getElementById('users');
        const order = document.getElementById('order');

        feedback.addEventListener('mouseenter', function () {
            feedback.style.backgroundColor = 'pink';
        });
        feedback.addEventListener('mouseleave', function () {
            feedback.style.backgroundColor = 'white';
        });

        addPost.addEventListener('mouseenter', function () {
            addPost.style.backgroundColor = 'pink';
        });
        addPost.addEventListener('mouseleave', function () {
            addPost.style.backgroundColor = 'white';
        });

        users.addEventListener('mouseenter', function () {
            users.style.backgroundColor = 'pink';
        });
        users.addEventListener('mouseleave', function () {
            users.style.backgroundColor = 'white';
        });
        order.addEventListener('mouseenter', function () {
            order.style.backgroundColor = 'pink';
        });
        order.addEventListener('mouseleave', function () {
            order.style.backgroundColor = 'white';
        });
    </script>
</body>

</html>
