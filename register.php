<?php
session_start();
if(isset($_SESSION["username"]))
{
	header("location: home.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap-theme.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/style.css">
	<title>CRY | Register</title>
</head>
<body>
  <nav class="navbar navbar-default" style="margin-bottom: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">       <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: black;"></span>
        <span class="icon-bar" style="background-color: black;"></span>
        <span class="icon-bar" style="background-color: black;"></span>
      </button>
      <a href="#" class="navbar-brand"></a>
    </div>
    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php" style="color: black; font-weight: bold;">Back to Home</a></li>
        </ul>
        </div>
        </div>
        </nav>     
   <div class="container-fluid">
            
<div class="row" style="margin-top:50px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post" action="register.php">
<!--             <input type="hidden" name="csrfmiddlewaretoken" value="SxViUf1RZ9KkB3xWHQmMQKRp3oYOW7y7">
 -->			<fieldset>
				<div class="row">
							<a href="register.php" class="logo-color"><div class="col-xs-12 col-sm-12 col-md-12 inline logo-text"><h1>Register for Donor</h1>
              </div></a>
				</div>

				<hr class="colorgraph">

                

				<div class="form-group">
                    <input type="username" name="username" id="username" class="form-control input-lg" required="required" placeholder="Username">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" required="required" placeholder="Password">
				</div>
				<div class="form-group">
                    <input type="password" name="repassword" id="repassword" class="form-control input-lg" required="required" placeholder="Confirm Password">
				</div>
				<div class="form-group">
                    <input type="address" name="address" id="searchTextField" class="form-control input-lg" required="required" placeholder="Address">
				</div>
				<div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" required="required" placeholder="Email">
				</div>
				<div class="form-group">
                    <input type="contact" name="contact" id="contact" class="form-control input-lg" required="required" placeholder="Contact Number">
				</div>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="submit" onclick="validate()" name="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
					</div>

				</div>
			</fieldset>
		</form>
        <div class="row" style="padding-top: 5px"><div class="col-xs-12 col-sm-12 col-md-12">
                        <a class="btn btn-lg btn-primary btn-block" href="login.php">Already Registered? Login</a>
					</div>

	</div>

    
        </div>

</div></div></body>
<script type="text/javascript">
function initialize() {
    var input = document.getElementById('searchTextField');
    // var options = {componentRestrictions: {country: 'us'}};
                 
    new google.maps.places.Autocomplete(input);
}

function validate()
{
	var password = document.getElementById("password");
	var confirm_password = document.getElementById("repassword");

	
  	if(password.value != confirm_password.value) {
    	confirm_password.setCustomValidity("Passwords Don't Match");
  	} 
  	else {
    	confirm_password.setCustomValidity('');
  }
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</html>

<?php

$conn = mysqli_connect("localhost","root","","sample");
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = md5($_POST['password']);
$address = $_POST['address'];
$email = $_POST['email'];
$contact_no = $_POST['contact'];
	//echo 'connection established';
$query = mysqli_query($conn,"INSERT INTO users
	(type,username,password,address,email,contact_no) 
	VALUES('donor','$username','$password','$address','$email','$contact_no')");
	if($query === false)
            {
?>
                <script type="text/javascript">
              
               alert("Username exists");

               </script>
               <?php            
                          }
          if($query === true)  
          {
            echo "<h1>Registered Successfully Now Login</h1>";
 			  }
 			}

?>