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
                      <input type="button" onclick="location.href='search.php';" value="Search Now" class="btn site-btn1 px-4 py-3 mr-4">
                        </div>
                    </div>
               </div>
           </div>
       </div>
       
      
    
    <div class="section-1">
    
        <div class="container">
            <h1 style="padding-top:20px; margin-top: 20px; margin-bottom: 70px; text-align: center">User registration</h1>
            <div class="row">
                
                
                <div class="col-md-12">
                    
                     <div class="container" style="margin-bottom: 30px">
                          <form name="myform" action="registration_process.php" onsubmit="validation()" method="post">

                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="first-name" required placeholder="Your first name..">

                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="last-name" required placeholder="Your last name..">
                            
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone-number" placeholder="Your phone number..">
                            
                            <label for="age">Age</label>
                            <input type="number" id="age" name="age" placeholder="Your age..">

                    

                            <label for="occupation">Occupation</label>
                            <input type="text" id="occupation" name="occupation" placeholder="Your job..">
                            
                            <label for="gender">Gender</label>
                            <br>
                            <input type="radio" name="gender" value="Male" checked> Male<br>
                            <input type="radio" name="gender" value="Female"> Female<br>
                            <input type="radio" name="gender" value="Other"> Other
                            
                         <br><br>
                            
                             <label for="email">Email</label>
                            
                            <input type="email" id="uemail" name="user-email" placeholder="Your email is..">
                           
                            <label for="password">Password</label>
                            
                            <input type="password" id="password" name="password" placeholder="Your password is..">
                           
                            
                            <label for="repassword">Repeat password</label>
                            
                            <input type="password" id="repassword" name="repassword" placeholder="Your repeat password is..">
                            
                            <label for="phone">Weight</label>
                            <input type="number" id="phone" name="weight" placeholder="Your weight..">

                            <input type="submit" value="Register" onclick="validation()">
                            

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
    
    <script type="text/javascript">
		function validateForm() {

    var fn = document.forms["myform"]["first-name"];
    var ln = document.forms["myform"]["last-name"];        
    var mail = document.forms["myform"]["email"];    
    var ph = document.forms["myform"]["phone"];  
    var g =  document.forms["myform"]["age"];  
    var job = document.forms["myform"]["occupation"];  
    var pass = document.forms["myform"]["password"];
            var p = pass.length;
    var repass = document.forms["myform"]["repassword"];
            var rp = repass.length;
             if (fn.value == "")                                  
    { 
        window.alert("Please enter your first name."); 
        fn.focus(); 
        return false; 
    }      
            
             if (ln.value == "")                                  
    { 
        window.alert("Please enter your last name."); 
        ln.focus(); 
        return false; 
    }  
             if (un.value == "")                                  
    { 
        window.alert("Please enter your user name and cannot contain whitespace."); 
        un.focus(); 
        return false; 
    }      
            function userid_validation(un,mx,my)
   {
         var uid_len = un.value.length;
        if (uid_len == 0 || uid_len >= 8 || uid_len < 5)
   {  
        alert("User Id should not be empty / length be between "+5+" to "+8);
         un.focus();
         return false;
   }
         return true;
   }
            
             if (mail.value == "")                                  
    { 
        window.alert("Please enter a valid email."); 
        mail.focus(); 
        return false; 
    } 
            function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
document.myform.mail.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.myform.mail.focus();
return false;
}
}
            
            if (ph.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        ph.focus(); 
        return false; 
    } 
            function phonenumber(phone)
{
  var phoneno = /^\d{10}$/;
  if(phone.value.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("message");
        return false;
        }
}
            
             if (pass.value == "")                        
    { 
        window.alert("Please enter your password"); 
        pass.focus(); 
        return false; 
    } 
            if(pass<8 || pass>32)
    {
    		alert("password length is between 8 and 32");
    		return false;
    }
             if (repass.value == "")                        
    { 
        window.alert("Please enter your password"); 
        repass.focus(); 
        return false; 
    } 
            
             if (pass != repass) 
    {
                alert("You first Passwords is not similar with 2nd password. Please enter same password in both");
                return false;
     }
            
            
    
    <script src="https://kit.fontawesome.com/d2f5a4ed19.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>