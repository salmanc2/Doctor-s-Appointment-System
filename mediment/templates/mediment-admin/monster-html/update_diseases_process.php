<?php
	include('common/db_connection.php');

$id=$_GET['id'];
$nm=$_POST['diseasename'];
$det = $_POST['detail'];
$spec = $_POST['specialization'];

$sql="UPDATE diseases SET name='$nm', detail='$det', specid='$spec' WHERE diseaseid='$id'";

if(mysqli_query($connect,$sql)){
    header("Location:view_diseases.php?result=updated");
}else{
    header("Location:view_diseases.php?result=failupdate");
}


?>