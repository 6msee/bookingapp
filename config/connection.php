<?php
$dbhost = 'localhost:3000';
$dbuser = 'root';
$dbpass = '';
$db     = 'db_bookingapp';

try {
  $conn = new PDO("mysql:host=$servername;dbname=db_bookingapp;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
//Set ว/ด/ป 
    date_default_timezone_set('Asia/Bangkok');