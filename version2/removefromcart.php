<?php

session_start();

$newcart = array();

foreach($_SESSION['cart'] as $item) {
	if ($_GET['id'] != $item) {
		$newcart[] = $item;
	}
}

$_SESSION['cart'] = $newcart;


header("Location: cart.php");

?>