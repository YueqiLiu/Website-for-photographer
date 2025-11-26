<?php
require_once('config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT firstname, lastname, email FROM photographers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . htmlspecialchars($row["firstname"]). "</td><td>" . htmlspecialchars($row["lastname"]). "</td><td>" . htmlspecialchars($row["email"]). "</td></tr>";
  }
} else {
  echo '<tr><td colspan="3">No photographers found.</td></tr>';
}
$conn->close();
?>

