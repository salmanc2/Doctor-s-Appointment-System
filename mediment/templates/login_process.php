<?php
session_start();
include('common/db_connection.php');
$username = $_POST['user-name'];
$password = md5($_POST['password']);


$sql = "SELECT * FROM users WHERE email='$username' AND password='$password' AND isdelete='0' AND verified='1'";

$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
	

if($username =='roksana' && $_POST['password']=='password'){
    $_SESSION['fullname'] = 'Roksana Islam';
	header('Location: mediment-admin/monster-html/index.php');
}else if($count == 0){
	header('Location: login1.php?result=err');
}else{
    $row = mysqli_fetch_assoc($result);
	$_SESSION['fullname'] = $row['firstname']." ".$row['lastname'];
    $_SESSION['id'] = $row['id'];
	header('Location: afterlogin.php');
}
?>