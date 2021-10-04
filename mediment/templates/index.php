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
<body>
     <header>
      <?php include('common/navbar.php');
        $sql = "SELECT * FROM doctors WHERE specializationid=2";

        $result=mysqli_query($connect,$sql);
       $num_of_rows = mysqli_num_rows($result);
      
       
      ?>
   
   <main>
       <div class="container-fluid p-0">
           <div class="site-content">
               <div class="d-flex justify-content-center">
                    <div class="d-flex flex-column">
                        <h1 class="site-title">Welcome to Medico</h1><br>
                        <p class="site-desc">Find the best doctors brand medical suggestions at the click of a button</p>
                        
                        <div class="d-flex flex-row">
                          <input type="button" onclick="location.href='search.php';" value="Search Now" class="btn site-btn1 px-4 py-3 mr-4">
                        </div>
                    </div>
               </div>
           </div>
       </div>
       
       <div class="section-1">
           <div class="container text-center">
               <h1 class="heading-1">About</h1>
               <p class="para-1">We are a web application who will help you to find a doctor appropriate for your specific condition. Gone are the days of being burdened with the problem of having to physically go and set an appointment with your doctor. You can set your appointment with your preferred doctor with just a click. Let us know your symptoms and we'll match it up with a probable disease and show you list of doctors appropriate for treating your disease.</p>
               
              <div class="stat">
               <div class="row justify-content-center text-center">
                  
                   <div class="col-md-3">
                       <h2>140+</h2>
                       <p>Hospitalss</p>
                     </div> 
                     
                      
                   <div class="col-md-3">
                       <h2>55+</h2>
                       <p>Patients</p>
                     </div> 
                     
                      
                   <div class="col-md-3">
                       <h2>69+</h2>
                       <p>Patients</p>
                     </div> 
                     
                      
                   <div class="col-md-3">
                       <h2>120+</h2>
                       <p>Doctors</p>
                     </div> 
                   
               </div>
            </div>
            
                <div class="doctors">
                <h1 style="font-weight: 500">Some of our doctors</h1><br>
             <div class="row justify-content-center text-center">

              <?php while($row=mysqli_fetch_assoc($result)):?>
                  
                   <div class="col-md-4">
                       <div class="card" style="width: 20rem">
                           <img src="img2.jpg" alt="" class="card-img-top">
                           <div class="card-body">
                               <h4><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></h4>
                               <p><?php echo $row['education'];?></p>

                           </div>
                       </div>
                     </div> 
                     <?php endwhile;?>

                    
                     
                

                   
               </div>
            </div>
        </div> 
    </div>
    
    <div class="section-2">
    
        <div class="container">
            <h1 style="padding-top:20px; margin-top: 20px; margin-bottom: 70px; text-align: center">Contact Us</h1>
            <div class="row">
                <div class="col-md-5">
                    <p style="text-align: left; margin-top: 20px; font-size: 20px">We'd love your feedback</p>
                    <p style="text-align: left; margin-top: 80px; font-size: 20px"> Dhaka, Bangadesh <br>
                        Phone:12345223 <br>
                        Address: 122 East Road.
                    </p>
                </div>
                
                <div class="col-md-7">
                    
                     <div class="container" style="margin-bottom: 30px">
                          <form action="">

                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">

                            <label for="Email">Email</label>
                            <input type="text" id="lname" name="email" placeholder="Your email..">

                    

                            <label for="message">Message</label>
                            <textarea name="message" placeholder="Write something.." style="height:200px"></textarea>

                            <input type="submit" value="Submit">

                          </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    
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