<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/circle.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">



</head>
<body>
        
     
    <header>
      <?php
        include('common/navbar.php');
        ?>
</header>
   
   <main>
       <div class="container-fluid p-0">
           <div class="site-content">
               <div class="d-flex justify-content-center">
                    <div class="d-flex flex-column">
                        <h1 class="site-title">Welcome to Medico</h1><br>
                        <p class="site-desc">Find the best doctors brand medical suggestions at the click of a button</p>
                        
                        <div class="d-flex flex-row">
                            <input type="button" value="Search Now" class="btn site-btn1 px-4 py-3 mr-4">
                        </div>
                    </div>
               </div>
           </div>
       </div>
       
      
    
    <div class="section-1">
    
        <div class="container">
            <h1 style="padding-top:20px; margin-top: 20px; margin-bottom: 70px; text-align: center">Doctor registration</h1>
            <div class="row">
                
                
                <div class="col-md-12">
                    
                     <div class="container" style="margin-bottom: 30px">
                          <form action="">

                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="First name" placeholder="Your first name..">

                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="Last name" placeholder="Your last name..">
                            
                            <label for="uname">Username Name</label>
                            <input type="text" id="uname" name="User name" placeholder="Your user name..">
                            
                            <label for="phone">Contact</label>
                            <input type="text" id="phone" name="Phone Number" placeholder="Your phone number..">
                            
                            <label for="specialization">Specialization</label>
                            <input type="text" id="specialiation" name="Specialization" placeholder="Your specialization is..">

                            <label for="education">Education</label>
                            <input type="text" id="education" name="Education" placeholder="Your education..">
                            
                            <label for="address">Address</label>
                            <input type="text" id="address" name="Address" placeholder="Your addres is..">
                            
                            <label for="hospital">Hospital name</label>
                            <input type="text" id="hospital" name="Hospital" placeholder="Your hospital name is..">
                            
                            <label for="password">Password</label>
                            <br>
                            <input type="password" id="password" name="Password" placeholder="Your password is..">
                            <br><br>
                            
                            <label for="repassword">Repeat password</label>
                            <br>
                            <input type="password" id="repassword" name="reassword" placeholder="Your repeat password is..">
                            <br><br>

                            <input type="submit" value="Register">
                            

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