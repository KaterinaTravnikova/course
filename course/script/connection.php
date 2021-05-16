<?php
$servername = 'localhost';
$database = 'course';
$username = 'root';
$password = 'root';
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
