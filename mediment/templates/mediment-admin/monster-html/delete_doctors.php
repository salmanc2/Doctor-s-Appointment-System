<?php
include('common/db_connection.php');
$id =$_GET['id'];
	$sql="UPDATE doctors SET isdelete='1' WHERE doctorid=$id";
	mysqli_query($connect,$sql);
	header('Location: view_doctors.php?result=deleted');
?>