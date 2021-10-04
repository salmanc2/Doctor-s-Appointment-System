<?php



//fetch.php

$connect = mysqli_connect("localhost", "root", "", 'appointment_system');
$output = '';



if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT s.specid,s.name,d.doctorid,d.firstname,d.lastname,d.education
  FROM specializatoin AS s
  LEFT JOIN doctor AS d
  ON s.specid=d.specializationid
  WHERE  LIKE '%".$search."%' ";
}
else
{
 $query = "
  SELECT * FROM doctor ORDER BY doctorid
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ID</th>
     <th>Specializes</th>
     <th>DoctorID</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Education</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["specid"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["doctorid"].'</td>
    <td>'.$row["firstname"].'</td>
    <td>'.$row["lastname"].'</td>
    <td>'.$row["education"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}



?>

