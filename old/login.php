<?php 
require 'dbconnect.php';
require 'func.php';

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "empty post";
        $error = "Username or Password is invalid";
    }
    else
    {
        // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = $conn;
            
        // To protect MySQL injection for Security purpose
        //echo $password . ' ' . $username . '<br>';
        $username = stripslashes($username);
        $password = stripslashes($password);
        //echo $password . ' ' . $username . '<br>';
        /*$username = mysqli_real_escape_string($username);
        $password = mysqli_real_escape_string($password);
        echo $password . ' ' . $username . '<br>';*/
        
        // Selecting Database
        $conn->select_db("users");
        
        $sql_query = "select * from users.login where password='$password' AND username='$username'";
        //echo $sql_query . " <br> " . $mysqli->error . "<br>";
        
        // SQL query to fetch information of registerd users and finds user match.
        $query = $conn->query($sql_query);
        
        
        //var_dump($query);
        //echo "<br>" . $conn->error() . "<br>";
        
        $rows = mysqli_num_rows($query);
        
        var_dump($rows);
        //echo "<br>";
        
        if ($rows == 1) {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: profile.php"); // Redirecting To Other Page
        } elseif($rows == 0){
            echo "no matching username and password";
        } else {
            echo "multiple users";
            $error = "Username or Password is invalid";
        }
    }
}

if(isset($_SESSION['login_user'])){
    header("location: profile.php");
}
?>