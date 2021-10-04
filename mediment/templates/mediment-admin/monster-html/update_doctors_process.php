<?php
include('common/db_connection.php');

$id=$_GET['id'];
$fnm=$_POST['firstname'];
$lnm=$_POST['lastname'];
$specid = $_POST['specialization'];
$hosid = $_POST['hospital'];
$edu=$_POST['education'];

$sql="UPDATE doctors SET firstname='$fnm', lastname='$lnm', specializationid='$specid',hospitalid='$hosid', education='$edu' WHERE doctorid='$id'";

if(mysqli_query($connect,$sql)){
    header("Location:view_doctors.php?result=updated");
}else{
    header("Location:view_doctors.php?result=failupdate");
}


?>