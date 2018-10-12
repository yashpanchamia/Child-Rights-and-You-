<?php
$conn=mysqli_connect('localhost','root','','alpha');
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
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap-theme.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/style.css">
  <style type="text/css">
  </style>
	<title></title>
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
				<li><a href="#" style="color: black; font-weight: bold;">Locate</a></li>
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
</body>
</html>