<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
 header('location: products.php');
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
<title>SBK Parts | Sign Up</title>
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
            <h1><b>SIGN UP</b></h1>
            <form method="POST" action="signup_script.php">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,10}"  required title="At least 6 characters (a-z,A-Z,0-9 and any symbol).">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="contact" placeholder="Contact" pattern="(?=.*\d).{10}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="city" placeholder="City">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div style = "width: 100%; position: fixed; bottom: 0;">
        <?php 
    include 'includes/footer.php';
    ?>
    </div>
    </body>
</html>
