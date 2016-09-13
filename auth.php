<?php
require('func.php');
$conn = connect();
if(isset($_GET['username']) and isset($_GET['chatroom'])){ //ensure that the chat room and username are set
    if(!isset($_SESSION['id']))
        $_SESSION['id'] = genUID(); //check if id exists if not generate one
    
    $username = $_GET['username'];
    $chatroom = $_GET['chatroom'];
    
    $queryForChatList = "SELECT * FROM chat.chatList WHERE tableName='" . $chatroom . "'";
    $queryForUsers = "SELECT * FROM chat." . $chatroom . "_users WHERE username='" . $username . "'";
    $queryForSesId = "SELECT * FROM chat." . $chatroom . "_users WHERE seshId='" . $_SESSION['id'] . "'";
    
    if($conn->query($queryForChatList)->num_rows != 1){ // check if chat room is valid
        error('not a valid chat room');
        exit;
    }
    
    if($conn->query($queryForUsers)->num_rows > 0){ // check if username
        error('Username Already exists');
        exit;
    }
    
    if($conn->query($queryForSesId)->num_rows > 0){ // check if username
        error('This session already had a user on this chatroom');
        exit;
    }
    
    var_dump($conn->query($queryForChatList)->fetch_assoc());
    echo('<br>');
    var_dump($conn->query($queryForChatList)->fetch_assoc());
    //echo($queryForChatList . '<br>');
    //echo($conn->query($queryForChatList)->num_rows . '<br>');
    //var_dump($conn->query($queryForChatList)->fetch_assoc());
    echo("hello");
    
}else{
    redirect('error.php?error="username or chatroom not set"');
}
?>