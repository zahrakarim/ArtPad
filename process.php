<?php
session_start();

session_destroy();

header('Location: https://www.paypal.com/home');
?>