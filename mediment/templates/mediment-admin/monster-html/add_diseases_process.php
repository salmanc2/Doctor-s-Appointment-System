<?php

include ('common/db_connection.php');
$name=$_POST['diseasename'];
$det=$_POST['detail'];
$spec=$_POST['specialization'];

$sql="INSERT INTO diseases(name,detail,specid) VALUES('$name','$det','$spec')";

$check=mysqli_query($connect,$sql);

if($check){
    header("Location:add_diseases.php?result=success");
}else{
    header("Location:add_diseases.php?result=fail");
}
?>