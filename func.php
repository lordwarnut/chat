<?php
function redirect($url, $permanent = false) {
	if($permanent) {
		header('HTTP/1.1 301 Moved Permanently');
	}
	header('Location: '.$url);
	exit();
}


function connect(){
    $dbhost = 'localhost';
    $dbuser = 'chatUser';
    $dbpass = 'guest123';
    $dbname = 'chat';
    // Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function error($error){
    redirect('error.php?error=' . $error );
}

function genUID(){
    return uniqid();
}
?>