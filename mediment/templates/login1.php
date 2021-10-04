<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/circle.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="927073325752-q9df0aqft13nomp94qijjru6a7htkpg1.apps.googleusercontent.com">



</head>
<body>
        
     
    <header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.php">Medico</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse"></div>
       <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="doctor.php">Doctors</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="appointment1.php">Create Appointment</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="contact.php">Contact</a>
              </li>
              
              
          </ul>
           <?php 
           if(!isset($_SESSION['fullname'])){ ?>
           <form action="" class="form-inline my-2 my-lg-0">
            <button class="btn menu-right-btn border" >
                <a href="user-registration.php">Register</a>                
            </button>
             <button class="btn menu-left-btn border" >
                <a href="login1.php">Login</a>               
            </button>
        </form>
           <?php
           }else{
           ?>        
           <?php echo $_SESSION['fullname'];?>
           <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
          <?php } ?>
           
     </div>
    </nav>
</header>
   
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
       <?php
    if(isset($_GET['result']) && $_GET['result']=='err'){
    ?>
    <div class="alert alert-danger">
      Invalid username and/or password.
    </div>
    <?php
      }else if(isset($_GET['result']) && $_GET['result']=='unauthorized'){
        ?>
        <div class="alert alert-danger">
          Access unauthorised.
        </div>
        <?php
      }
    ?>
       
      
    
    <div class="section-1">
    
        <div class="container">
            <h1 style="padding-top:20px; margin-top: 20px; margin-bottom: 70px; text-align: center">Login</h1>
            <div class="row">
                
                
                <div class="col-md-12">
                    
                     <div class="container" style="margin-bottom: 30px">
                          <form action="login_process.php" method="post">
                            <fieldset>
                            <label for="uname">E-mail:</label>
                            <input type="text" id="uname" name="user-name" placeholder="Your e-mail address..">

                            <label for="password">
                                Password:
                            </label>
                          
                            <input type="password" id="password" name="password" placeholder="Your password is..">
                            
                             


                            <input type="submit" value="Login">
                      
                           <div class="g-signin2" data-onsuccess="onSignIn"></div>
                            </fieldset>
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
    
    <script>
        function onSignIn(googleUser) {
            var idToken = googleUser.getAuthResponse().id_token;
                  window.location = "afterlogin.php";
        
        }
</script>
    <script src="https://kit.fontawesome.com/d2f5a4ed19.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>