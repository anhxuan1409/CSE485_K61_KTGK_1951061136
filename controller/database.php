<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1951061136_university";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>