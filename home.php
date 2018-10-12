<?php
$conn=mysqli_connect('localhost','root','','sample');
session_start();
if(isset($_SESSION["username"]))
{
  $userid = $_SESSION["userid"];
  $username=$_SESSION["username"];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

	<title>CRY | Home</title>
</head>
<body>
<nav class="navbar navbar-default" style="margin-bottom: 0px;">
  <div class="container-fluid">
		<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar" style="background-color: black;"></span>
				<span class="icon-bar" style="background-color: black;"></span>
				<span class="icon-bar" style="background-color: black;"></span>
			</button>
			<a href="#" class="navbar-brand"></a>
		</div>
		<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="#" style="color: black; font-weight: bold;">Home</a></li>
				<li><a href="options.php" style="color: black; font-weight: bold;">Donate</a></li>
				<li><a href="demofinal.php" style="color: black; font-weight: bold;">Locate</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="" style="color: black; font-weight: bold;">
					<?php 
					if(!isset($_SESSION["username"]))
					{
					} 
					else {
						echo "Welcome ".$username;
					}
					?>

				</a></li>
				<li><a href="login.php" style="color: black; font-weight: bold;">
					<?php 
					if(!isset($_SESSION["username"]))
					{
						echo "Login <span class='glyphicon glyphicon-log-in'></span>";
					} 
					else {
					}
					?>

				</a></li>
				<li><a href="logout.php" style="color: black; font-weight: bold;">
					<?php 
					if(!isset($_SESSION["username"]))
					{
					} 
					else {
						echo "Logout <span class='glyphicon glyphicon-log-out'></span>";
					}
					?>

				</a></li>
			<!--	<li><a href="">Logout</a></li>-->
			</ul>
		</div>
	</div>
</nav>
<div  class="container img-responsive"align="right" style="background: url(images/a.jpg); background-repeat: no-repeat; background-size:cover;">
<h1 style="padding-top: 25%; color: black; font-weight: bold;">We can't <strong style="color: green;">help</strong> Everyone but,</h1>
<h1 style="color: black; font-weight: bold;">Everyone can help <strong style="color: #0000ff;">Someone.</strong></h1>
</div>
<p class="rainbow  img-responsive">Who Am I?
	<div class="ui-group-buttons center-block" style="position: absolute; left: 40%;">
		<?php 
			 if(isset($_SESSION['username']))
			 {   $userid=$_SESSION['userid'];
				  $conn = mysqli_connect("localhost","root","","sample");
			 	$query = mysqli_query( $conn,"SELECT type,userid FROM users WHERE userid='$userid'");
			 	$result = mysqli_fetch_assoc($query);
			 	if($result['userid'] >0 )
			 	{
			 		if($result['type'] == 'donor')
			 		{
			 			echo " <a href='options.php' type='button' class='btn btn-success btn-lg btn-block' >Donor</a>"	;
			 		}
			 		if($result['type'] == 'volunteer')
			 		{
			 			echo " <a href='donoreqview.php' type='button' class='btn btn-danger btn-lg' >Volunteer</a><br/>"	;
			 			echo " <a href='demofinal.php' type='button' class='btn btn-primary btn-lg' >Locate Street Nearst Children</a>"	;
			 		}
			 		if($result['type'] == 'admin')
			 		{
			 			echo " <a href='adminhome.php' type='button' class='btn btn-warning btn-lg' >Admin</a>"	;
			 		}

			 	}

			 		}
			 	else 
			 		echo " <a href='register.php' type='button' class='btn btn-success btn-lg' >Donor</a>
                <div class='or or-lg'></div>
                <a href='registerv.php' type='button' class='btn btn-danger btn-lg'>Volunteer</a>";
		?>
               
            </div>
 </p>
</body>
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
  <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.6-dist/js/npm.js"></script>
</html>