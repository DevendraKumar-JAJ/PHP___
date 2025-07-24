<?php
$host = "localhost";
$user = "root";
$pass = "";
$conn = mysqli_connect($host, $user, $pass);
if ($conn->connect_error) {
  die("<br>Connection faild.");
} else {
  echo "<br>Connection Successful.";
}

$sql = "CREATE DATABASE IF NOT EXISTS user";
if ($conn->query($sql) === TRUE) {
  echo "<br>Database created successfully";
} else {
  echo "<br>Error creating database: ";
}
?>