<?php 

session_start();

$productID = $_GET['id'];

if(!is_array($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}

array_push($_SESSION['cart'],$productID);

header('Location: cart.php');

?>