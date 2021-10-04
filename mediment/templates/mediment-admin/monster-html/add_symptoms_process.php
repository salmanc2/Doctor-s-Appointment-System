<?php

include ('common/db_connection.php');
$name=$_POST['sympname'];
$detail=$_POST['detail'];


$sql="INSERT INTO symptoms(name,details) VALUES('$name','$detail')";

$check=mysqli_query($connect,$sql);

if($check){
    header("Location:add_symptoms.php?result=success");
}else{
    header("Location:add_symptoms.php?result=fail");
}
?>