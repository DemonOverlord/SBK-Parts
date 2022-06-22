<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
 header('location: index.php');
}
$items = explode(",", $_GET['items']);
$txn_id = $_GET['txn'];
$user_id = $_SESSION['id'];
// Setting Transaction ID 

$count = sizeof($items) -1;

while($count >= 0){
$query2 = "UPDATE users_items SET txn_id = '$txn_id' WHERE user_id = '$user_id' AND item_id = '$items[$count]' AND status = 'Added to cart'";
$result2 = mysqli_query($con, $query2);

$count--;
}
//Works in every case and shouldn't cause any problem but does not utilize items id 
$query1 = "UPDATE users_items SET status = 'Confirmed' WHERE user_id = '$user_id'";
$result1 = mysqli_query($con, $query1);

//Works but gives some error
/*$counter = sizeof($items); 
        while($counter >= 0) {
$query = "UPDATE users_items SET status = 'Confirmed' WHERE user_id = '$user_id' AND items_id = '$items[$counter]'";
$result = mysqli_query($con, $query);
$counter--;
        }*/
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SBK Parts | Success</title>
<!---- External css file index.css placed in the folder css is linked-->
<link href="index.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!--jQuery library--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
    include 'includes/header.php';
    ?>
        <br><br><br><br>
        <div class="container">
            <div class="col-xs-offset-2 col-xs-8 col-xs-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1>SUCCESS!</h1>
                    <p>Your order is confirmed. Thank you for shopping with us!</p>
                </div>
                <div class="panel-footer">
                    <p><a href="products.php" style="text-decoration: none;">Click here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        </div>
        <?php 
    include 'includes/footer.php';
    ?>
    </body>
</html>
