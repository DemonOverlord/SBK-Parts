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
        <title>Lifestyle Store | Settings</title>
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
            <?php
$old = $_POST['old'];
$new = $_POST['new'];
$confirm = $_POST['confirm'];
if ($confirm == $new) {
    if ((strlen($new) > 6) && (strlen($old) > 6)) {
$email = mysqli_real_escape_string($con, $_SESSION['email']);
$pass = mysqli_real_escape_string($con, md5($old));
$query = "SELECT id, email FROM users WHERE email = '$email' AND password = '$pass'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) == 0) 
{
    ?>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h1>Wrong Old Password!</h1>
                </div>
                <div class="panel-footer">
                    <p><a href="settings.php" style="text-decoration: none;">Click here</a> to try again.</p>
                </div>
            </div>
        <?php
}
else 
{
    $new = md5($new);
    $query = "UPDATE users SET password = '$new' WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    ?>
             <div class="panel panel-success">
                <div class="panel-heading">
                    <h1>SUCCESS!</h1>
                </div>
                <div class="panel-body">
                    <p>Password changed successfully!</p>
                </div>
                <div class="panel-footer">
                    <p><a href="products.php" style="text-decoration: none;">Click here</a> to go back to products.</p>
                </div>
            </div>
<?php
}
        }
 else {
     ?>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h1>Inappropriate password pattern!</h1>
                </div>
                <div class="panel-body">
                    <p>Password must be longer than 6 characters and include at least one uppercase and one lowercase alphabet as well as numbers.</p>
                </div>
                <div class="panel-footer">
                    <p><a href="settings.php" style="text-decoration: none;">Click here</a> to try again.</p>
                </div>
            </div>
         <?php
    }
} 
else {
    ?>
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h1>Password Mismatch!</h1>
                </div>
                <div class="panel-footer">
                    <p><a href="settings.php" style="text-decoration: none;">Click here</a> to try again.</p>
                </div>
            </div>
         <?php
}
?>
            </div>
            <br>
        </div>
        <?php 
    include 'includes/footer.php';
    ?>
    </body>
</html>