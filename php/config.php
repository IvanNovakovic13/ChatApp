<?php
$servername = "localhost"; // Change this if your MySQL server is running on a different host
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "chatappdb"; // Change this to your MySQL database name
$port = "4307";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname,$port);

// Check connection
if (!$conn) {
    die("Konekcija sa bazom nije uspostavljena: " . mysqli_connect_error());
}
?>
