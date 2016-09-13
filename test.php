<?php
if(isset($_GET['term'])){
    echo(ereg( '^[a-zA-Z0-9]+$', $_GET['term']) . '<br>' . $_GET['term']);
    
}
?>