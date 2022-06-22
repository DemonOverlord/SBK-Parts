<?php
include 'includes/common.php';
$regex_email = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$city = $POST['city'];
$address = $POST['address'];
$contact = $POST['contact'];
if (!preg_match($regex_email, $email)) {
    echo "Incorrect Email!";
}
if (strlen($pass) < 6) {
    echo "Incorrect Password!";
}
$email = mysqli_real_escape_string($con, $email);
$pass = mysqli_real_escape_string($con, md5($pass));
$query = "SELECT id, email FROM users WHERE email = '$email'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) 
{
    echo "Email already regestired, Please login instead.";
}
else 
{
    $query = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$pass', '$contact', '$city', '$address')";
    $result = mysqli_query($con, $query);
    $id = mysqli_insert_id($con);
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
    header('location: products.php');
}
?>