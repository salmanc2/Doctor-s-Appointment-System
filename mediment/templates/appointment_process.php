<?php
include 'common/db_connection.php';
$doctor = $_GET['id1'];
$user = $_GET['id2'];
$time = $_POST['user-time'];
$date = $_POST['date'];
$newdate= date('Y-m-d', strtotime($date));
$sql="INSERT INTO appointments(date,time,doctorid,userid) VALUES('$newdate','$time','$doctor','$user')";

$result = mysqli_query($connect, $sql);
if($result){
    header("Location:afterlogin.php?result=success");
}else{
    header("Location:afterlogin.php?result=fail");
}
?>