<?php
require_once 'connection.php';

$sql = "SELECT doctorid, firstname, lastname FROM doctor";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo "id: ".$row["doctorid"]." - Name: " . $row["firstname"]." ".$row["lastname"]."<br>";
  }
} else {
  echo "0 results";
}
?>
