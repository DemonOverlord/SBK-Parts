<?php
include 'includes/common.php';
$user_id = $_SESSION['id'];
$item_id = $_GET['id'];
$query = "INSERT INTO users_items (user_id, item_id, txn_id, status) VALUES('$user_id', '$item_id', 'Not Paid Yet', 'Added to cart')";
$result = mysqli_query($con, $query);
header('location: products.php')
?>

