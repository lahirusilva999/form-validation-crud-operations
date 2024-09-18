<?php
$servername = "localhost";
$username = "kasun";
$password = "TePd9Aw@Qmwu3KLc";
$db_name = "my_web3";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>