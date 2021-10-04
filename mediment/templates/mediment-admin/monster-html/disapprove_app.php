<?php
include('common/db_connection.php');
$id =$_GET['id'];
	$sql="UPDATE appointments SET verified='n' WHERE appointmentid=$id";
	mysqli_query($connect,$sql);
	header('Location: view_appointments.php');
?>