<?php
session_start();
if(isset($_SESSION["username"]))
{
  $userid = $_SESSION["userid"];
}
else{
  header("location: login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CRY | Donate</title>
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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
        
        </ul>
        </div>
        </div>
        </nav>
        <div class="ui-widget">
<div class="row" style="margin-top:50px">
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
<div class="form-group">
<div class="row">
        <a href="" class="logo-color"><div class="col-xs-12 col-sm-12 col-md-12 inline logo-text"><h1>What You Wish To Donate.</h1>
         </div></a>
        </div>
          <hr class="colorgraph">
          <div class="row" style="padding-top: 5px"><div class="col-xs-12 col-sm-12 col-md-12">
                        <a class="btn btn-lg btn-primary btn-block" href="donor.php">Donate Ingredients</a>
          </div>
          </div>
          <div class="row" style="padding-top: 5px"><div class="col-xs-12 col-sm-12 col-md-12">
                        <a class="btn btn-lg btn-warning btn-block" href="cooked.php">Donate Cooked Food</a>
          </div>
                    <hr class="colorgraph">
</div>
</div>
</div>
</div>



</body>