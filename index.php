<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<!---- The page has a title-->
<title>SBK Parts | Home</title>
<!---- External css file index.css placed in the folder css is linked-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!--jQuery library--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body style="font-family: 'Nunito';">
    <?php
    include 'includes/header.php';
    ?>
    <div class="content">
        <div class="banner-image" style="top:0; position: absolute; width: 100%;">
            <center>
            <div class="inner-banner-image">
                <div class="banner-content">
                    <h1>We Sell PC Parts</h1>
                    <p>Get the best from premium brands</p>
                    <br><br>
                    <a href="products.php" class="btn btn-lg-active" style="background-color:#f2f2f2; color: #000;">Shop Now</a>
                </div>
            </div>
            </center>
        </div>
    </div>
    <div class="container" style="padding-bottom: 50px;">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="items">
                    <a href="products.php">
                        <img src="img/camera.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Processors</h2>
                            <p>Choose among the best available in the world.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="items">
                    <a href="products.php">
                        <img src="img/watch.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>RAM</h2>
                            <p>Choose among the best available in the world.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="items">
                    <a href="products.php">
                        <img src="img/shirt.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Memory</h2>
                            <p>Most Reliable Speed.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include 'includes/footer.php';
    ?>
</body>
</html>
