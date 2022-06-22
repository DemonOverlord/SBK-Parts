<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
<title>SBK Parts | Login</title>
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
        <div class="row">
            <div class="col-xs-6">
        <div class="panel panel-primary" style="border-color: #4c4c4c;">
            <div class="panel-heading" style="background-color: #4c4c4c;">
                <h1>LOGIN</h1>
            </div>
            <div class="panel-body">
                <p class="text-warning">Login to make a purchase</p>
                <form method="POST" action="login_submit.php">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn" style="background-color: #4c4c4c; color: #fff;">Login</button>
                </form>
            </div>
            <div class="panel-footer">
                <p><b>Don't have an account?</b> <a href="signup.php" style="text-decoration: none;">Register</a></p>
            </div>
        </div>
        </div>
        </div>
        </div>
        <div style = "width: 100%; position: fixed; bottom: 0;">
        <?php 
    include 'includes/footer.php';
    ?>
    </div>
    </body>
</html>
