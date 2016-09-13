<?php
    require('func.php');
    session_start();
?>

<html>

<head>
    <title>Chat</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Slabo+27px" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="update.js"></script>
    <link rel="stylesheet" type="text/css" href="custom.css">
</head>

<body>
    <div id="chatBox">
        <table id="chatTable">
            <!--- <tr>
                <th class="tableDate"> [2016-08-27 15:00:58] </th>
                <th class="tableUser"> &lt;SSSSSSSSSSSSSSSSSSSS&gt;</th>
                <th class="tableMessage"> Hello World </th>
            </tr>--->
        </table>
    </div>
</body>

</html>