<?php

include('common/db_connection.php');

?> 
<head>
    <meta charset="UTF-8">
    <title>Medico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/doctor.css">
    <link rel="stylesheet" href="css/circle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>
<body>
      
    <header>
      <?php include('common/navbar.php');
        $sql = "SELECT * FROM doctors ORDER BY specializationid";

        $result=mysqli_query($connect,$sql);
       $num_of_rows = mysqli_num_rows($result);
       
      ?>
    </header>
   
   <main>
     
       <div class="section-1">
           <div class="container text-center">
            
             
            
                <div class="doctors">
                <h1 style="font-weight: 500">View All doctors</h1><br>
             <div class="row justify-content-center text-center">

                   <div class="w3-container">

    <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-light-grey">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Education</th>
        <th>Hospital Name</th>
        <th>Specialization</th>
        <th>Create Appointment</th>
      </tr>
    </thead>

    <?php while($row=mysqli_fetch_assoc($result)):?>
                <tr>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['education'];?></td>
                    <td><?php echo getHospital($row['hospitalid']);?></td>
                    <td><?php echo getSpec($row['specializationid']);?></td>
                    <td><a href="appointment1.php?id=<?php echo $row['doctorid'];?>"> Make an Appointment </a></td>

                 
                </tr>
                <?php endwhile;?>
  </table>
</div>
              </div>
    
    
    
    
   
    </div>
    </div>

    <?php
            function getHospital($id){
                global $connect;
                $sql = "SELECT * FROM hospitals WHERE hospitalid=".$id;
                $result=mysqli_query($connect,$sql);
                $row=mysqli_fetch_assoc($result);
                return $row['name'];
            }
            function getSpec($id){
                global $connect;
                $sql = "SELECT * FROM specialization WHERE specid=".$id;
                $result=mysqli_query($connect,$sql);
                $row=mysqli_fetch_assoc($result);
                return $row['name'];
            }
            
            include('common/footer.php');
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