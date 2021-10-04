<?php
session_start();
include('common/db_connection.php');
if($_POST['username']=='Arshi' && $_POST['pass']=='password'){
    $_SESSION['fullname'] = 'Roksana Islam';
	header('Location: index.php');
}else{
	
    header('Location: copies/Login/index.php?result=err');
}
?>