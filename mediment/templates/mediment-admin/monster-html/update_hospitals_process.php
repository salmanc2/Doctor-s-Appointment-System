<?php
include('common/db_connection.php');

$id=$_GET['id'];
$nm=$_POST['name'];
$cn=$_POST['contact'];
$adrs = $_POST['address'];

$sql="UPDATE hospitals SET name='$nm', contact='$cn', address='$adrs' WHERE doctorid='$id'";

if(mysqli_query($connect,$sql)){
    header("Location:view_hospitals.php?result=updated");
}else{
    header("Location:view_hospitals.php?result=failupdate");
}


?>