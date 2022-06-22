<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$pass = mysqli_real_escape_string($con, md5($_POST['password']));
$query = "SELECT id, email FROM users WHERE email = '$email' AND password = '$pass'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) == 0) 
{
    header('location: signup.php');
}
else 
{
    $row = mysqli_fetch_array($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    header('location: products.php');
}
?>