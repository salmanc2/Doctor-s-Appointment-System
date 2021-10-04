<?php
include('common/db_connection.php');
    $id =$_GET['id'];
	$sql="UPDATE users SET isdelete='1' WHERE id=$id";
	if(mysqli_query($connect,$sql)){
      header('Location: view_users.php?result=deleted');  
    }else{
        header('Location: view_users.php?result=notdeleted');
    }
	
?>