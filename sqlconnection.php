<<?php   $servername = "162.241.216.107";
$username = "regnumco_zladson";
$password = "C@rs0n618";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; ?>
