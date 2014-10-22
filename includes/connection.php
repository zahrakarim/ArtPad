<?php

$server="sulley.cah.ucf.edu";
$user="he180819";
$pass="9Sfg124asdf6!";
$db="he180819";

//connect

mysql_connect ($server, $user, $pass) or die("Sorry, can't connect to the mySQL.");

//select the db

mysql_select_db($db) or die ("Sorry can't find the database");

?>