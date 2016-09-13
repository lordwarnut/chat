<html>
    <head>
        <title>Error</title>
    </head>
    <body>
        <p>error: 
           <?php
            if(isset($_GET['error'])){
                echo($_GET['error']);
            }else{
                echo('No error specified');
            }
            ?>
            </p>
    </body>
</html>