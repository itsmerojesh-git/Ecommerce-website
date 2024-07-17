<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>user homepage</title>
    <?php include 'navigation.php'; ?>
    <style>
        .quantity {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            overflow: hidden;
            width: 130px;
            margin: 0 auto;
        }

        .quantity input {
            border: none;
            width: 100%;
            text-align: center;
            justify-content: center;
        }

        .quantity button {
            border: none;
            background: none;
            cursor: pointer;
            outline: none;
            padding: 5 10px;
        }

        .details {
            display: none;
        }

        .details.show {
            display: block;
        }

        .view-more {
            background-color: #007bff;
            color: white;
        }

        .view-more:hover {
            background-color: #0056b3;
            color: white;
        }

        @media (max-width: 768px) {
            .card {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row bg-white">
            <?php
            include 'db_addproduct.php';
            $Record = mysqli_query($conn, "select * from addproduct");
            while ($row = mysqli_fetch_array($Record)) {
                $check_page = $row['PCategory'];
                echo "
                <div class='col-lg-3 col-md-4 col-sm-6 mt-4 mb-3'>
                    <form action ='insertcart.php' method='POST'>
                        <div class='card m-auto'>
                            <img src='../admin/product/$row[PImage]' class='card-img-top' height='300px' width='300px'>
                            <div class='card-body text-center'>
                                <h5 class='card-title fs-4 fw-bold'>$row[PName]</h5>
                                <div class='details'>
                                    <p class='card-text'>$row[PDetails]</p>
                                </div>
                                <p class='card-text fw-bold fs-4'>RS:$row[PPrice]</p>
                                <input type='hidden' name='PName' value='$row[PName]'>
                                <input type='hidden' name='PPrice' value='$row[PPrice]'>
                                <div class='quantity'>
                                    <button type='button' class='btn quantity-minus border border-dark bg-white fs-0 fw-bold' onclick='this.parentNode.querySelector(\"input[type=number]\").stepDown()'>-</button>
                                    <input class='fs-0' type='number' name='PQuantity' value='1' min='1' max='20' placeholder='Quantity'>
                                    <button type='button' class='btn quantity-plus border border-dark bg-white fs-0 fw-bold' onclick='this.parentNode.querySelector(\"input[type=number]\").stepUp()'>+</button>
                                </div>
                                <div class='d-flex justify-content-between align-items-center mt-3'>
                                    <button type='button' class='btn btn-primary view-more text-dark' data-bs-toggle='modal' data-bs-target='#productModal'>View More</button>
                                    <input type='submit' name='addCart' class='btn btn-primary text-dark' value='Add To Cart'>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                ";
            }
        
            ?>
        </div>
    </div>

    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 id="modalProductName"></h5>
                    <p id="modalProductDetails"></p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const viewMoreButtons = document.querySelectorAll('.view-more');
            viewMoreButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const card = this.closest('.card');
                    const productName = card.querySelector('.card-title').innerText;
                    const productDetails = card.querySelector('.details').innerHTML;
                    document.getElementById('modalProductName').innerText = productName;
                    document.getElementById('modalProductDetails').innerHTML = productDetails;
                });
            });
        });
    </script>

</body>

</html>
