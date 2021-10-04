<?php
include('common/db_connection.php');
$id =$_GET['id'];
	$sql="UPDATE symptoms SET isdelete='1' WHERE symptomid=$id";
	mysqli_query($connect,$sql);
	header('Location: view_symptoms.php?result=deleted');
?>