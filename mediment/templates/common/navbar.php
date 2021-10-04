 <?php session_start(); ?>
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
                    <a class="nav-link" href="index.php">About</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="doctor.php">Doctors</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="specialization.php">Search by Specialization</a>
              </li>
              <?php if(isset($_SESSION['fullname'])){ ?>
              <li class="nav-item">
                   <a class="nav-link" href="listappointment.php">View your Appointments</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="user_profile.php">Your Profile</a>
              </li>
              <?php } ?>
              <li class="nav-item">
                   <a class="nav-link" href="contact.php">Contact Us</a>
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
            echo $_SESSION['fullname'];?>
               <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
          <?php } ?>
           
     </div>
    </nav>