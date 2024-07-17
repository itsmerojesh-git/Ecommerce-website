<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Footer</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
   body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-align: center;
}

.footer {
    background-color: #FAFAD2;
    color: black;
    padding: 20px 0;
    text-align: center;
}

.box-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    max-width: 1200px;
    margin: 0 auto;
}

.box {
    flex: 1 1 200px;
    padding: 20px;
}

.box h3 {
    margin-top: 0;
    color: black;
}

.box a {
    color: black;
    text-decoration: none;
    display: block;
    margin-bottom: 5px;
}

.box a:hover {
    color: #007bff;
    font-weight: bold;
}

.box p {
    margin: 5px 0;
    color: #777;
}

.credit {
    text-align: center;
    margin-top: 10px;
    color: black;
}

.credit span {
    font-weight: bold;
    color: black;
}

@media (max-width: 768px) {
    .box {
        flex: 1 1 100%;
    }
}

.box {
    flex: 1 1 200px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.box:nth-child(3) {
    margin-right:100px;
}
.box:nth-child(2) {
    margin-right:100px;
}

.box:nth-child(1) {
    margin-right:100px;
}

</style>
</head>
<body>

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>Quick Links</h3>
         <a href="index.php">Home</a>
         <a href="contact.php">Contact</a>
         <a href="form/login.php">Login</a>
         <a href="form/register.php">Register</a>
         <a href="allproduct.php">allproduct</a>
      </div>

      <div class="box">
         <h3>Categories</h3>
         <a href="fashion.php">Fashion</a>
         <a href="stationery.php">Stationery</a>
         <a href="grocery.php">Grocery</a>
         <a href="electronics.php">Electronics</a>
         <a href="sports.php">Sports</a>
         <a href="utensil.php">Utensil</a>
      </div>

      <div class="box text-dark">
         <h3>Contact Us</h3>
         <p>+977-9876543210</p>
         <p>hamrokhacho.woocom@gmaill.com</p>
         <p>Kathmandu,44600</p>
      </div>

      <div class="box">
         <h3>Follow Us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
         <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
      </div>
   </div>

   <p class="credit"> &copy; <?php echo date('Y'); ?> by <span>hamrokhacho.com.np</span> </p>
</section>

</body>
</html>
