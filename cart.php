<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SBK Parts | Shopping Cart</title>
<!---- External css file index.css placed in the folder css is linked-->
<link href="index.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!--jQuery library--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="font-family: 'Nunito';">
        <?php
    include 'includes/header.php';
    ?>
        <br><br><br><br>
        <div class="container">
            <div class="col-xs-offset-3 col-xs-6 col-xs-offset-3">
                <?php
                $user_id = $_SESSION['id'];
                $query = "SELECT i.id, i.name, i.price FROM users_items ui INNER JOIN items i ON ui.item_id = i.id WHERE ui.user_id = '$user_id' AND ui.status='Added to cart'";
                $result = mysqli_query($con, $query);
                $counter = mysqli_num_rows($result);
                $init_counter = $counter;
                $total = 0;
                $items = "";
                if ($counter == 0) {
                    ?>
                <div class="col-xs-offset-2 col-xs-8 col-xs-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h1>Add items to the cart first!</h1>
                </div>
                <div class="panel-footer">
                    <p><a href="products.php" style="text-decoration: none;">Click here</a> to view products.</p>
                </div>
            </div>
                    <br>
                </div>
                <?php
                }
                else 
                {
                ?>
            <table class="table table-striped">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <tr>
                    <?php
                    while ($counter > 0) {
                    $row = mysqli_fetch_array($result);
                    $total = $total + $row['price'];
                    if ($counter == 1) {
                    $items = $items . $row['id'];
                    } 
                    else {
                    $items = $items . $row['id'] . ",";
                    }
                    ?>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td>Rs. <?php echo $row['price']; ?>/-</td>
                    <td><a href='cart-remove.php?id=<?php echo $row['id'];?>'
class='remove_item_link'> Remove</a></td>                    
                </tr>
                <?php $counter--; }
                    }?>
                <?php if ($init_counter != 0) {?>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td>Rs. <?php echo $total; ?>/-</td>
                    <td><form action="payments.php" method="POST">
                        <input type="hidden" name="charge" value="<?php echo $total; ?>"/>
                        <input type="hidden" name="items" value="<?php echo $items; ?>"/>
                        <button type="submit" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;">Proceed</button>
                    </form></td>
                </tr>
            </table>
                <?php }; ?>
        </div>
        </div>
        <div style = "width: 100%; position: fixed; bottom: 0;">
        <?php 
    include 'includes/footer.php';
    ?>
    </div>
    </body>
</html>
