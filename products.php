<?php
include 'includes/common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
<title>SBK Parts | Products</title>

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
    include 'includes/check-if-added.php';
    ?>
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/1.jpg">
                    <div class="caption">
                        <h3>Intel i3 10th Gen</h3>
                        <p>Price: Rs.12,700</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(1)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; " disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c; border: 1px solid #4c4c4c;">Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/2.jpg">
                    <div class="caption">
                        <h3>Intel i5 10th Gen</h3>
                        <p>Price: Rs.22,800 </p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(2)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; " disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;" >Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/3.jpg">
                    <div class="caption">
                        <h3>Intel i7 10th Gen</h3>
                        <p>Price: Rs.30,750</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(3)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; " disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/4.jpg">
                    <div class="caption">
                        <h3>Intel i9 10th Gen</h3>
                        <p>Price: Rs.56,250</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(4)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; " disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/5.jpg">
                    <div class="caption">
                        <h3>Crucial DDR4 RAM 2GB 2400MHZ</h3>
                        <p>Price: Rs.3,656</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(5)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; " disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/6.jpg">
                    <div class="caption">
                        <h3>Sk hynix DDR4 RAM 4GB 2400mhz</h3>
                        <p>Price: Rs.2,950</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(6)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; " disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/7.jpg">
                    <div class="caption">
                        <h3>Kingston Hyperx Fury DDR4 8 GB 3200mhz</h3>
                        <p>Price: Rs.3,500</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(7)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; " disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/8.jpg">
                    <div class="caption">
                        <h3>Corsair Vengeance lpx 16GB 3000Mhz</h3>
                        <p>Price: Rs.6,575</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(8)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; " disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/9.jpg">
                    <div class="caption">
                        <h3>Seagate Baracuda 1TB HDD</h3>
                        <p>Price: Rs.3,799</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(9)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; " disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/10.jpg">
                    <div class="caption">
                        <h3>WD BLUE 1TB Hard Disk Drive</h3>
                        <p>Price: Rs.3599</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; "disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/11.jpg">
                    <div class="caption">
                        <h3>WD BLUE 250 GB SATA SSD</h3>
                        <p>Price: Rs.3868</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(11)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; " disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/12.jpg">
                    <div class="caption">
                        <h3>WD GREEN 1TB SATA SSD</h3>
                        <p>Price: Rs.2950</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Buy Now</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(12)) {
                                echo '<a href="#" class="btn btn-primary" style="color:#000; border: 1px solid #000; background: transparent; "disabled>Added to cart</a>';
                            } else {
                                ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Add to cart</a> 
                            <?php
                            }
                            }
                            ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
            <?php 
    include 'includes/footer.php';
    ?>
    </body>
</html>
