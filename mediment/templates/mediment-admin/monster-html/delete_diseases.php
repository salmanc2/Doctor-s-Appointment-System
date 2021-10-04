<?php
include('common/db_connection.php');
$id =$_GET['id'];
	$sql="UPDATE diseases SET isdelete='1' WHERE diseaseid=$id";
	mysqli_query($connect,$sql);
	header('Location: view_diseases.php?result=deleted');
?>