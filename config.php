<?php
// config.php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "function_test";

$connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}



?>