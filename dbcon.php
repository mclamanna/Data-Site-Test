<?php
$servername = "mlamannadev.com";
$database = "u938780550_DirectoryTable";
$username = "u938780550_tr303808";
$password = "Halon13!!";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>