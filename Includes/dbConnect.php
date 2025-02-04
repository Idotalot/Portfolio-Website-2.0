<?php
include_once("loadEnv.php");

$servername = getenv("DB_NAME");
$username = getenv("DB_USER");
$password = getenv("DB_PASS");
$table = getenv("DB_TABLE");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $table);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
