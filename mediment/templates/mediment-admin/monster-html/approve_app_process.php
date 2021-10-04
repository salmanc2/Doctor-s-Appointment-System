<?php
include('common/db_connection.php');
    $id =$_GET['id'];
	$sql="UPDATE appointments SET verified='1' WHERE appointmentid=".$id;
	mysqli_query($connect,$sql);
	header('Location: approve_appointments_list.php');
?>