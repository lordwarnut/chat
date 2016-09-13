<?php
$dbhost = 'localhost';
$dbuser = 'guest';
$dbpass = 'guest123';
$dbname = 'world';
// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>