<?php

include('common/db_connection.php');
 ?> 

<head>
    <meta charset="UTF-8">
    <title>Medico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/circle.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

</head>

<style>
  table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}


</style>
<body>

     
    <header>
       <?php include 'common/navbar.php';?>
        <?php
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM appointments WHERE userid='$id'";
        $search_result = mysqli_query($connect, $sql);
        $num_of_rows = mysqli_num_rows($search_result);
        ?>
</header>
   
   <main>
        <div class="container text-center">
       <h1 style="font-weight: 500">Your List of Appointments</h1><br>
<?php
                if($num_of_rows > 0){
                ?>
<table>
  <tr>
    <th>Doctor Name</th>
    <th>Appointment Date</th>
    <th>Appointment Time</th>
    <th>Approval</th>
  </tr>



<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['appointmentid'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo getApprove($row['verified']);?></td>
                </tr>
                <?php endwhile;?>

</table>
</div>
       <?php 
                }
                else if($num_of_rows == 0){
                        ?>
                        <div class='alert alert-danger'>
                                No data found.
                         </div>
                        <?php
                        }
            function getApprove($ver){
                if($ver=='0'){
                    return "Waiting Approval";
                }else if($ver=='1'){
                    return "Approved";
                }else{
                    return "Not Approved";
                }
            }
                        ?>
<footer class="page-footer font-small blue">

  
  <div class="footer-copyright text-center py-3">© Medico
    <a href="https://mdbootstrap.com/education/bootstrap/"></a>
  </div>
  

</footer>


    
   </main>
    
    
    <script src="https://kit.fontawesome.com/d2f5a4ed19.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>