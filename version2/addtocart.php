<?php 

session_start();

$productID = $_GET['id'];
$_SESSION['cart'][] = $productID;

header('Location: cart.php');

?>