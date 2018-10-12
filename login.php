<?php
session_start();
if(isset($_SESSION["username"]) )
{
	header("location: home.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap-theme.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap-theme.min.css">
  <script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
  <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.6-dist/js/npm.js"></script>
  <style type="text/css">
  </style>

	<title></title>
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
		<form role="form" method="post" action="login.php">
<!--             <input type="hidden" name="csrfmiddlewaretoken" value="SxViUf1RZ9KkB3xWHQmMQKRp3oYOW7y7">
 -->			<fieldset>
				<div class="row">
							<a href="login.php" class="logo-color"><div class="col-xs-12 col-sm-12 col-md-12 inline logo-text"><h1>Login</h1></div></a>
				</div>

				<hr class="colorgraph">

                

				<div class="form-group">
                    <input type="username" name="username" id="username" class="form-control input-lg" required="required" placeholder="Username">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" required="required" placeholder="Password">
				</div>
			
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="submit" name="login" class="btn btn-lg btn-success btn-block" value="Login">
					</div>

				</div>
			</fieldset>
		</form>
        <div class="row" style="padding-top: 5px"><div class="col-xs-12 col-sm-12 col-md-12">
                        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register as Donor</a>
					</div>

	</div>

<div class="row" style="padding-top: 5px"><div class="col-xs-12 col-sm-12 col-md-12">
                        <a class="btn btn-lg btn-primary btn-block" href="registerv.php">Register as Volunteer</a>
          </div>

  </div>
    
        </div>

</div></div></body>
		</html>

		<?php
$conn=mysqli_connect('localhost','root','','sample');
if(isset($_POST['username']) && isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);

//	$query=mysqli_query($conn,"SELECT COUNT(username) as total FROM users 
	//WHERE username='$username' AND password='$password'");
	//$row=mysqli_fetch_assoc($query);
	//if($row['total'] > 0)
    //        {
              $query=mysqli_query($conn,"SELECT userid FROM users 
  WHERE username='$username' AND password='$password'");
  $row=mysqli_fetch_assoc($query);
    $userid = $row["userid"];
    if($userid > 0)
    {
 				session_start();
               $_SESSION["username"]=$username;
               $_SESSION["password"]=$password;
               $_SESSION["userid"]=$userid;
            header("location: home.php");
                 exit();
            }
           
            else 
            {
            	echo "ERROR";
 				exit();
  			 }
           
 }    
     
            
?>