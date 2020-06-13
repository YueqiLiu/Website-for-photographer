<?php
$servername = "lamp.soton.ac.uk";
$username = "MANG6180_student";
$password = "tintin1830";
$dbname = "mgmt_webapp_msc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>