<?php
$servername = "localhost";
$database = "tugas_web1";
$username = "root";
$password = "root411171";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
    // mysqli_close($conn);
}
