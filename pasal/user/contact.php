<?php
if(isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'hamrokhacho');
    $_Name = ($_POST['name']);
    $_Email = ($_POST['email']);
    $_Subject = ($_POST['subject']);
    $_Message = ($_POST['message']);
    $result = mysqli_query($conn,"INSERT INTO `contactus`(`Name`, `Email`, `Subject`, `Message`)
     VALUES ('$_Name','$_Email','$_Subject','$_Message')");
    if($result){
        echo "<script>
        alert('Record added successfully.');
        window.location.href='contact.php';
        </script>";
        exit;
 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous"
     referrerpolicy="no-referrer" />
    <style>
        .social-links {
            margin-bottom: 20px; 
        }

        .social-links h3 {
            font-size: 28px; 
            margin-right: 10px; 
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        h1, h3 {
            color: #333;
            text-align: center;
        }

        .contact-container {
            margin-top:40px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .social-links a {
            color: #333;
            text-decoration: none;
            font-size: 24px;
            margin-right: 10px;
        }

        .social-links a:hover {
            color: red;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            border-radius: 10px;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        @media (max-width: 768px) {
            .contact-container {
                padding: 10px;
            }

            .social-links a {
                font-size: 20px;
                margin-right: 5px;
            }

            h1, h3 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <?php include  'navigation.php'; ?>
    <div class="container contact-container text-dark">
        <h1>Contact Us</h1>
        <p class="text-center text-dark">Feel free to reach out to us with any questions or concerns.</p>
        <div class="row text-dark">
            <div class="col-md-6">
                <div class="mb-3 social-links text-center">
                    <div class="d-flex justify-content-start">
                        <h3>follow Us:</h3>
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Enter subject">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6 text-dark">
                <h3>Our Location</h3>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.1282509754687!2d85.314353814983!3d27.715556982789435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1860c94fa2bf%3A0x49aee4ebf4b8b719!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1648122064465!5m2!1sen!2snp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <h3>Contact Information</h3>
                <p><strong>Address:</strong> Kathmandu 44600, Nepal</p>
                <p><strong>Email:</strong> hamrokhacho.woocom@gmail.com</p>
                <p><strong>Phone:</strong> +977-9876543210</p>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'footer.php'; ?>
</body>
</html>


