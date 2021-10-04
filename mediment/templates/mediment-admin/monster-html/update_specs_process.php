<?php
include('common/db_connection.php');

$id=$_GET['id'];
$nm=$_POST['specname'];

$sql="UPDATE specialization SET name='$nm' WHERE specid='$id'"; 
if(mysqli_query($connect,$sql)){
    header("Location:view_specs.php?result=updated");
}else{
    header("Location:view_specs.php?result=failupdate");
}


?>