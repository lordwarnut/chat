<?php
require 'dbconnect.php';

// Selecting Database
$db = $conn->select_db("users");

session_start();// Starting Session
// Storing Session

$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql = $conn->query("select username from login where username='$user_check'");
$row = $ses_sql->fetch_assoc();

$login_session =$row['username'];
if(!isset($login_session)){
    mysql_close($connection); // Closing Connection
    header('Location: index.php'); // Redirecting To Home Page
}
?>