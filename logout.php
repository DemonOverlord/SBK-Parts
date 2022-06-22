<?php
session_start();
if (!isset($_SESSION['email'])) {
 header('location: index.php');
}
session_destroy();
header('location: index.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SBK Parts | Logged Out</title>
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
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h1>Logged Out!</h1>
                    <p>Successfully logged out.</p>
                </div>
                <div class="panel-footer">
                    <p><a href="index.php" style="text-decoration: none;">Click here</a> to go back to homepage.</p>
                </div>
            </div>
        </div>
        </div>
        <?php 
    include 'includes/footer.php';
    ?>
    </body>
</html>
