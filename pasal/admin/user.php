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
        /* Custom styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
     
    </style>
    <?php include('khacho.php')?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <table class="table table-striped table-bordered table-hover mt-5">
                    <thead class="bg-primary text-white">
                        <th>SN</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'hamrokhacho');
                        $Record = mysqli_query($conn, "SELECT * FROM `user`");
                        $row_count = mysqli_num_rows($Record); 
                        if ($Record) {
                            $count = 1;
                            $i=0;
                            while ($row = mysqli_fetch_array($Record)) {
                                echo "
                                <tr>
                                    <td>";?><?php echo ++$i;?><?php echo"</td>
                                    <td>{$row['UserName']}</td>
                                    <td>{$row['Email']}</td>
                                    <td>{$row['Number']}</td>
                                    <td><a href='delete.php ? ID={$row['Id']}' class='btn btn-outline-danger'><i class='fas fa-trash-alt'></i> Delete</a></td>
                                </tr>
                                ";
                                $count++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <div>
                    <div class="col-md-2 pr-5 text-center">
                    <h3 class="text-dark">Total Users</h3>
                    <h1 class="bg-primary text-white"><?php echo $row_count;?></h1>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
