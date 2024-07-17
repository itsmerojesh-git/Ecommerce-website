<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
    
        }

        .card {
            margin-top: 50px;
            margin-bottom: 20px;

        }
    </style>
    <?php include 'khacho.php'?>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'hamrokhacho');
            $Record = mysqli_query($conn, "SELECT * FROM `contactus`");
            if ($Record) {
                while ($row = mysqli_fetch_array($Record)) {
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h5 class="card-title"><?php echo $row['Name']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['Email']; ?></h6>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Subject: <?php echo $row['Subject']; ?></h6>
                                <p class="card-text"><?php echo $row['Message']; ?></p>
                                </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
