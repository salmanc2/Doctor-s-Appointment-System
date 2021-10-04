<?php

include ('common/db_connection.php');
$name=$_POST['name'];
$contact=$_POST['contact'];
$add=$_POST['address'];

$sql="INSERT INTO hospitals(name,contact,address) VALUES('$name','$contact','$add')";

$check=mysqli_query($connect,$sql);
if($check){
    header("Location:add_hospitals.php?result=success");
}else{
    header("Location:add_hospitals.php?result=fail");
}

?>