<?php
$servername = "srv1020.hstgr.io";
$username = "u212553073_appspages";
$password = "BZ6>qz1z*";
$dbname = "u212553073_appspages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform your database operations here

// Close connection
$conn->close();
?>
