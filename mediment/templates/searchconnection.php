<?php
$servername = "localhost";
$username = "root";

$conn = mysqli_connect($servername, $username, '', 'appointment_system');

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
echo "Connected successfully<br>";
?>
