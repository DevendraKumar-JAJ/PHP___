<?php
  include('./config.php');
  $name=$_POST['name'];
  $gen=$_POST['gen'];
  $dob=$_POST['dob'];
  $sql="USE user";
  if($conn->query($sql) === TRUE){
    echo "<br>using user DB ";
  }
  
  $sql="CREATE TABLE IF NOT EXISTS  users(name varchar(25), gender varchar(10), dob varchar(10))";
  if ($conn->query($sql) === TRUE) {
  echo "<br>Table created.";
}

$sql = "INSERT INTO users values('$name','$gen','$dob')";
if ($conn->query($sql) === TRUE) {
  echo "<br>Data Inserted..";
}

?>