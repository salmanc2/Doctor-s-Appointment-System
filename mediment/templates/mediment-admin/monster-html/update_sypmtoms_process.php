<?php
include('common/db_connection.php');

$id=$_GET['id'];
$nm=$_POST['name'];
$det=$_POST['details'];

$sql="UPDATE symptoms SET name='$nm', details='$det'";

if(mysqli_query($connect,$sql)){
    header("Location:view_doctors.php?result=updated");
}else{
    header("Location:view_doctors.php?result=failupdate");
}


?>