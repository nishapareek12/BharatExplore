<?php
// echo "this is test";
$servername = "localhost";
$username = "root";
$password = "#Nisha123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=logintestdb", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>