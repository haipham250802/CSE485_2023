<?php
$conn = new mysqli("localhost","root","","btth01_cse485");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>