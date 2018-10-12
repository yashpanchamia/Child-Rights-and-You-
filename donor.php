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
  <script>
  $(function() {
    $( "#skills" ).autocomplete({
      source: 'search.php'
    });
  });
  $(function() {
    $( "#skil" ).autocomplete({
      source: 'secondary.php'
    });
  });
  </script>
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
    <form role="form" method="post" action="donor.php">
<div class="form-group">
<div class="row">
        <a href="" class="logo-color"><div class="col-xs-12 col-sm-12 col-md-12 inline logo-text"><h1>Select Ingredients to donate.</h1>
         </div></a>
        </div>
          <hr class="colorgraph">
    <input id="skills" name="skills" class="form-control input-lg" required="required" placeholder="Primary Ingredient">
        </div>
      <div class="form-group">
  <input name="skil" id="skil" class="form-control input-lg"  placeholder="Secondary Ingredient(OPTIONAL)">
</div>
    <div class="form-group">
      <input name="quantity" class="form-control input-lg"  placeholder="quantity(OPTIONAL)">
</div>

      <div class="form-group">
                    <input type="address" name="address" id="searchTextField" class="form-control input-lg" required="required" placeholder="Your Current Location">
        </div>
          <hr class="colorgraph">
  <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" name="submit" class="btn btn-danger btn-lg btn-block">SUBMIT</button>
          </div>
          </div>
        </div>
        </form> 
        </div>
        </div>
        </div>

</body>
<script type="text/javascript">
function initialize() {
    var input = document.getElementById('searchTextField');
    // var options = {componentRestrictions: {country: 'us'}};
                 
    new google.maps.places.Autocomplete(input);
}
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
</html>

<?php

$conn = mysqli_connect("localhost","root","","sample");
if(isset($_POST['submit']) && isset($_SESSION['userid']))
{
  $pingredients = $_POST['skills'];
  $singredients = $_POST['skil'];
  $quantity = $_POST['quantity'];
  $address = $_POST['address'];
  $ing ="ing";
if(!$conn)
  die('ERROR');
  else
  //echo 'connection established';
$query = mysqli_query($conn,"INSERT INTO donated
  (userid,type,pingredients,singredients,quantity,address) 
  VALUES('$userid', '$ing','$pingredients','$singredients','$quantity','$address')");
  if($query === false)
            {
              echo "error";
           }
            else 
            {
              echo "<h1 align='center'>Ingredients added successfully </h1><br>
              <h2 align='center'>Wait till the volunteer contacts you.</h2><br/><a href='donor_status.php'><h1 align='center'>CHECK THE STATUS HERE</h1></a>";
              

              //header('location:donor_status.php');
              //exit();
        };
      }


?>