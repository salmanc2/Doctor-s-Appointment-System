<?php

include ('common/db_connection.php');
$name=$_POST['specname'];

$sql="INSERT INTO specialization(name) VALUES('$name')";

$check=mysqli_query($connect,$sql);

if($check){
    header("Location:add_spec.php?result=success");
}else{
    header("Location:add_spec.php?result=fail");
}
?>