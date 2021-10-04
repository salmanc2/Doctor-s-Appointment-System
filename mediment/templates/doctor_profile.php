<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/circle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

</head>
	
<style>
	body {
	    background-image:  url(" ");
	    background-repeat: no-repeat;
	    background-position: center;
	    background-size: cover;
	    background-attachment: fixed;
	}
	li {
	    list-style: none;
	}
	li {
	    margin-bottom:10px;
	    }  

</style>

<body>

  <header>
      <?php
        include('common/navbar.php');
        ?>
</header>

  <div class="container">
      
  </div>

<div class="container">    
    <div class="jumbotron">
      	<div class="row">
         	 <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
              	<img src="image/avatar.png" alt="stack photo" class="img-responsive" width="100%">
              	<div class="middle">
                    <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                    <input type="file" style="display: none;" id="profilePicture" name="file" />
                </div>
                
          	</div>
         		<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
              <h2> User Profile</h2>
              		<div class="container" style="border-bottom:1px solid black">
              			<p>  <h2> </h2></p>
              		</div>
                <hr>
              		<ul class="container details">
                		<li><p><span class="glyphicon glyphicon-user" style="width:50px;"></span>Name: 
                		</p></li>                          		
               			<li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>E-mail:  
               			</p></li>
                		<li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>Phone number:
                		</p></li>
                		<li><p><span class="glyphicon glyphicon-map-marker" style="width:50px;"></span>Address:  
                		</p></li>
                	</ul>
           		</div>
      	</div>
    </div>
</div>

</body>
</html>