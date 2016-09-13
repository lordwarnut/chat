<?php 
require 'dbconnect.php';
require 'func.php'
?>
<html>
    <head>
    </head>
    <body>
      <form method="post">
      <input type=text name="name">
       - name</br>   
      <input type=text name="age">
        - age </br>
       <input type="submit" value="Submit">
        </form>
        <?php

$conn->select_db("LIST");

if(isset($_POST['name']) and isset($_POST['age'])){ 
    $sql = "INSERT INTO name_list (name, age) Values ('". $_POST['name'] . "', ". $_POST['age'] .")";
    $result = $conn->query($sql);
}

$sql = "SELECT * FROM name_list";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    // output data of each row
    echo "<table border='1'>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Age</th>
  </tr>";
    while($row = $result->fetch_assoc()) {
        echo"<tr>
                <th>". $row["id"] ."</th>
                <th>". $row["name"] ."</th>
                <th>". $row["age"] ."</th>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

        ?>
    </body>
</html>
