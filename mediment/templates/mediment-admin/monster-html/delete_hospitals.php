<?php
include('common/db_connection.php');
$id =$_GET['id'];
	$sql="UPDATE hospitals SET isdelete='1' WHERE hospitalid=$id";
	mysqli_query($connect,$sql);
	header('Location: view_hospitals.php?result=deleted');
?>