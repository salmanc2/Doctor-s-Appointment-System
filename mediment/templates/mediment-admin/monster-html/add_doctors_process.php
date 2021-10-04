<?php

include ('common/db_connection.php');
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$spec=$_POST['specialization'];
$ed=$_POST['education'];
$hosp=$_POST['hospital'];

$sql="INSERT INTO doctors(firstname,lastname,specializationid,education,hospitalid) VALUES('$firstname','$lastname','$spec','$ed','$hosp')";

$check=mysqli_query($connect,$sql);

if($check){
    header("Location:add_doctors.php?result=success");
}else{
    header("Location:add_doctors.php?result=fail");
}
?>