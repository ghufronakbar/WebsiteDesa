<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pengaduan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo '<script>console.log("Connection failed: " . $conn->connect_error);</script>';
    die("Connection failed: " . $conn->connect_error);
}
