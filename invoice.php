

<?php
session_start();
include_once("./includes/template/header.php");
require_once("connect_db.php");
require("./includes/function/function.php");

$buy =  get_data_with_name('form');
    

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="icon" href="imgs/images.jpeg" type="image/gif">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<section class="invoice vh-100 py-5">
        <div class="layer d-flex  align-items-center justify-content-center w-100 h-100">
            <div class="container py-5 px-2  border border-5  rounded shadow-lg bg-white bill">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="invoice-img">
                            <img src="./imgs/bill1.jpg" class="w-100 rounded" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="invoice-con">
                            <div class="text-center  mb-3 text-secondary-emphasis">
                                <h3 class="in">ORDER COMPLETE</h3>
                            </div>
                            <div class="mt-4">
                                <div class=" pb-2 mb-4  border-bottom border-opacity-50 border-dark">
                                    <h5>Your Name:
                                        <span class="ms-2 ">
                                            <?php echo $buy['name'];?>
                                            </p>
                                    </h5>
                                </div>
                                <div class="h4 pb-2 mb-4  border-bottom border-opacity-50 border-dark">
                                    <h5>Phone:
                                        <span class="ms-2 ">
                                            <?php echo $buy['phone'];?>
                                        </span>
                                    </h5>
                                </div>
                                <div class="h4 pb-2 mb-4  border-bottom border-opacity-50 border-dark">
                                    <h5>Book Name:
                                        <span class="ms-2 ">
                                            <?php echo $buy['book_name'];?>
                                        </span>
                                    </h5>
                                </div>
                                <div class="h4 pb-2 mb-4  border-bottom border-opacity-50 border-dark">
                                    <h5>quantity:
                                        <span class="ms-2 ">
                                            <?php echo $buy['quantity'];?>
                                        </span>
                                    </h5>
                                </div>
                            </div>
                            <div class="text-center"> <a href="index.php#about" class="btn btn-outline-primary ms-auto">Home</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./Js/jquery-3.6.3.min.js"></script>
    <script src="./Js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="./Js/main.js"></script>
</body>

</html>