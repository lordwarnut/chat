<?php 
require 'dbconnect.php';
require 'func.php'
?>
<html>

<head>
</head>

<body>
    <form action="test.php">
        Country to find
        <br>
        <select name='CC'>
            <?php
$sql = "SELECT DISTINCT CountryCode FROM world.City; ";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value='". $row["CountryCode"] . "'>" . $row["CountryCode"] . "</option>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>

</html>