<?php 
require 'dbconnect.php';
require 'func.php'
?>
<html>
    <head>
    </head>
    <body>
        <?php
$sql = "SELECT * FROM City WHERE CountryCode='". $_GET ['CC']."' ORDER BY Population DESC";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    // output data of each row
    echo "<table border='1'>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Country Code</th>
    <th>District</th>
    <th>Population</th>
  </tr>";
    while($row = $result->fetch_assoc()) {
        echo"<tr>
                <th>". $row["ID"] ."</th>
                <th>". $row["Name"] ."</th>
                <th>". $row["CountryCode"] ."</th>
                <th>". $row["District"] ."</th>
                <th>". $row["Population"] ."</th>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
        ?>
    </body>
</html>
