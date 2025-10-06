<?php
$host = "sql304.infinityfree.com";
$user = "if0_40100418";
$pass = "MarkedUplangu3"; // your DB password
$dbname = "if0_40100418_autocare_system"; // change to your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
