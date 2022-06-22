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
        <title>SBK Parts | Settings</title>
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
            <div class="col-xs-offset-3 col-xs-6 col-xs-offset-3">
                <h4>Change Password</h4>
                <form action="settings-script.php" method="POST">
                    <div class="form-group">
                        <input type="password" name="old" class="form-control" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="new" class="form-control" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirm" class="form-control" placeholder="Re-type New Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;"type="submit">Change</button>
                    </div>
                </form>
            </div>
            <br>
        </div>
        <div style = "width: 100%; position: fixed; bottom: 0;">
        <?php 
    include 'includes/footer.php';
    ?>
    </div>
    </body>
</html>
