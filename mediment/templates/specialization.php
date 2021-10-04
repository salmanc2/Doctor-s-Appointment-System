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
    
    $sql="SELECT * FROM specialization WHERE isdelete='0' ORDER BY specid";
    
    $result=mysqli_query($connect,$sql);
    $num_of_rows = mysqli_num_rows($result);
       
      ?>
    </header>

    <div class="container text-center">
            
             
            
                <div class="doctors">
                <h1 style="font-weight: 500"> View Doctors by Specialization</h1><br>


 <ul class="w3-ul w3-card-4">


<?php
   while($row=mysqli_fetch_assoc($result)): ?>
    <li class="w3-bar">
      <img src="img.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large"><a href="viewspecs.php?id=<?php echo $row['specid'];?>"><?php echo $row['specid']; ?>. <?php echo ucwords(strtolower($row['name'])); ?> </span><br>
      </div>

    </li>


    <?php endwhile; ?>
  </ul>

</div>

</body>
</html>
