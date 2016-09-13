<?php 
require('func.php');
if(isset($_GET['latest']) && isset($_GET['chatRoom'])){
    $latest = $_GET['latest'];
    $chatRoom = $_GET['chatRoom'];
    
    $query = connect()->query("SELECT * FROM chat." . $chatRoom ." WHERE id > " . $latest);
    
    $rows = array();
    while($r = mysqli_fetch_assoc($query)) {
        $rows[] = $r;
    }
    echo json_encode($rows);
}else{
    echo "Invalide id or chat room";
}
?>