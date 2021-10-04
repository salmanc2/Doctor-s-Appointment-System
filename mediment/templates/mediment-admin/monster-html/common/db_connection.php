<?php
include('connect_variables.php');
$connect=mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

$error = mysqli_connect_error();

if($error != null){
    header('Location:pages-error-404.php?error=Unable to connect to DATABASE');
}
?>