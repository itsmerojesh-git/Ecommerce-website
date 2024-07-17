<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #banner {
            position: relative;
            text-align: center;
            
           
        }

        #banner img {
            max-width: 100%;
            cursor: pointer;
            background-color: yellow;
            
        }

        .product-card {
            margin-top: 20rem;
            background-color: pink;
            width: 100%;
            max-width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .product-card h2 {
            margin-top: 10px;
            font-size: 1.5em;
        }

        .product-card p {
            font-size: 1em;
        }

        .product-card .discount {
            font-weight: bold;
        }

        .product-card button {
            padding: 5px 10px;
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .product-card button a {
            text-decoration: none;
            color: white;
        }

        .product-card button:hover {
            background-color: #0056b3;
        }

        .product-card button a:hover {
            background-color: #0056b3;
        }

        .product-card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        @media (min-width: 768px) {
            .product-card {
                width: 45%;
                margin: 20px 2.5%;
            }
        }

        @media (min-width: 992px) {
            .product-card {
                width: 30%;
                margin: 20px 1.5%;
            }
        }

        @media (min-width: 1200px) {
            .product-card {
                width: 23%;
                margin: 20px 1%;
            }
        }
    </style>
</head>

<body>
    <?php include 'navigation.php'; ?>

    <section id="banner">
        <img src="banner.jpg" alt="Offer Banner">
    </section>

    <div class="product-card-container">
        <div class="product-card">
            <img src="fashion.jpg" alt="Fashion Item">
            <h2>Fashion Item</h2>
            <p>मौका आउछ पर्खदैन बगेको खोला फर्कदैन !! Grab the opportunity</p>
            <p class="discount">70% OFF</p>
            <button><a href="fashion.php">Shop now</a></button>
        </div>

        <div class="product-card">
            <img src="elect.webp" alt="Electronics Item">
            <h2>Electronics Item</h2>
            <p>मौका आउछ पर्खदैन बगेको खोला फर्कदैन !! Grab the opportunity</p>
            <p class="discount">20% OFF</p>
            <button><a href="electronics.php">Shop now</a></button>
        </div>

        <div class="product-card">
            <img src="sport.jpeg" alt="Sport Item">
            <h2>Sport Item</h2>
            <p>मौका आउछ पर्खदैन बगेको खोला फर्कदैन !! Grab the opportunity</p>
            <p class="discount">20% OFF</p>
            <button><a href="sports.php">Shop now</a></button>
        </div>

        <div class="product-card">
            <img src="utensil.jpg" alt="Utensil Item">
            <h2>Utensil Item</h2>
            <p>मौका आउछ पर्खदैन बगेको खोला फर्कदैन !! Grab the opportunity</p>
            <p class="discount">40% OFF</p>
            <button><a href="utensil.php">Shop now</a></button>
        </div>
    </div>

    <section id="banner">
        <img src="banner1.jpg" alt="Offer Banner">
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>
