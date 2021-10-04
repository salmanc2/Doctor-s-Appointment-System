<?php
include('common/db_connection.php');
$id =$_GET['id'];
	$sql="UPDATE users SET verified='1' WHERE id=$id";
	mysqli_query($connect,$sql);
	header('Location: approve_registrations.php');
?>