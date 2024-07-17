<?php
session_start();
$count = 0;
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
}
?>
<style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
    }

    .navbar {
        background-color: pink;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-nav .nav-item {
        margin-right: 20px;
    }

    .text-dark {
        color: black !important;
    }

    .navbar-nav .nav-link {
        color: black !important;
        text-decoration: none;
        transition: color 0.3s, text-decoration 0.3s;
    }

    .navbar-nav .nav-link:hover {
        color: blue !important;
    }

    .fas {
        color: black !important;
        text: black !important;
        text-decoration: none;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bgdark sticky-top text-light">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand pb-1"><img src="logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="index.php"><b>Home</b></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <b>Categories</b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="grocery.php">Grocery</a></li>
                        <li><a class="dropdown-item" href="Fashion.php">Fashion</a></li>
                        <li><a class="dropdown-item" href="Sports.php">Sports</a></li>
                        <li><a class="dropdown-item" href="electronics.php">Electronics</a></li>
                        <li><a class="dropdown-item" href="utensil.php">Utensil</a></li>
                        <li><a class="dropdown-item" href="stationery.php">Stationery</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="allproduct.php"><b>Products</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="cartview.php">
                    <i class="fas fa-shopping-cart"></i>(<?php echo $count; ?>)
                   </a>
                </li>
                <li class="nav-item">
                    <span class="nav-link">
                        <b>Hello,
                            <?php
                            if(isset($_SESSION['user'])){
                                echo $_SESSION['user'];
                                echo " |  <a href='form/logout.php'><b class='text-dark text-decoration-none'>Logout</b></a>";
                            }
                            else{
                                echo " | <a href='form/login.php'><b class='text-dark text-decoration-none'>Login</b></a>";
                            }
                            ?>
                        </b>
                    </span>
                </li>
                <li class="nav-item">
                    <a href="vieworder.php" class="nav-link text-dark"><b>Myoder</b></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
