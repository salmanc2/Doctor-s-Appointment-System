<?php

include ('common/db_connection.php');
$fname=$_POST['first-name'];
$lname=$_POST['last-name'];
$phone = $_POST['phone-number'];
$age=$_POST['age'];
$occu=$_POST['occupation'];
$gender=$_POST['gender'];
$mail = $_POST['user-email'];
$pass = md5($_POST['password']);
$weight = $_POST['weight'];

$sql="INSERT INTO users(firstname,lastname,email,password,contact,age,occupation,weight,gender) VALUES('$fname','$lname','$mail','$pass','$phone','$age','$occu','$weight','$gender')";

$check=mysqli_query($connect,$sql);

if($check){
    header("Location:user-registration.php?result=success");
}else{
    header("Location:user-registration.php?result=fail");
}
?>