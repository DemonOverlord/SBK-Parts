<?php
include 'includes/common.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['id'];
$query = "DELETE FROM users_items WHERE user_id = '$user_id' AND item_id = '$item_id' AND status = 'Added to cart'";
$result = mysqli_query($con, $query);
header('location: cart.php');
?>