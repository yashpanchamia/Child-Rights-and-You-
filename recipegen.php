<?php
session_start();
if(isset($_SESSION["username"]))
{
  $userid = $_SESSION["userid"];
  $username=$_SESSION["username"];
}
else {
  header("location: login.php");
}
?>
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
		<title>Recipe Generator</title>
    <style>
table { 
padding: 80px;
color: #333; /* Lighten up font color */
font-family: Helvetica, Arial, sans-serif; /* Nicer font */
width: 100%; 
border-collapse: 
collapse; border-spacing: 0; 
text-align: center;
}

td, th { border: 3px solid #CCC; height: 30px;text-align: center; } /* Make cells a bit taller */

th {
  text-align: center!important;
background: #F3F3F3; /* Light grey background */
font-weight: bold; /* Make sure they're bold */
}

td {
background: #FAFAFA; /* Lighter grey background */
text-align: center; /* Center our text */
}





ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

</style>
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
        <li><a href="adminhome.php" style="color: black; font-weight: bold;">Go Back</a></li>
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

	 <div class="container-fluid">
            
<div class="row" style="margin-top:50px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <form role="form" method="get" action="recipegen.php">
<!--             <input type="hidden" name="csrfmiddlewaretoken" value="SxViUf1RZ9KkB3xWHQmMQKRp3oYOW7y7">
 -->    
        <div class="row">
              <a href="register.php" class="logo-color"><div class="col-xs-12 col-sm-12 col-md-12 inline logo-text"><h1>Generate Recipe</h1>
              </div></a>
        </div>

        <hr class="colorgraph">
		        <div class="form-group">
			<input type="text" class="form-control input-lg" required="required" name="primary" id="skills">
			</div>
			 <div class="form-group">
			<input id="skil" type="text" class="form-control input-lg" name="secondary">
			</div>
			<hr class="colorgraph">
			<div class="row" style="padding-top: 5px"><div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="submit" name="submit" class="btn btn-lg btn-warning btn-block" value="Generate" style="color:black;">
                        </div>
		</form>
		</div>
		</div>
		</div>
    <table border="5px">
  
  <tr>
   
<th width="15%">Recipe</th>

<th width="15%">Ingredients</th>

<th width="10%">Primary-Ingredients</th>

<th width="10%">Secondary-Ingredients</th>

<th width="35%">Preparation Method</th>

  </tr>
<?php
$conn=mysqli_connect('localhost','root','','sample');

if(isset($_GET['submit'])){
$pingredients=$_GET['primary'];
$singredients=$_GET['secondary'];
$query=mysqli_query($conn,"SELECT * FROM recipe 
	WHERE pingredients LIKE '%$pingredients%' AND singredients LIKE '%$singredients%'");
	$row=mysqli_fetch_assoc($query);
  ?>

  <tr>
  <td><?php echo $row['rname'];?></td>
<td><?php echo $row['ingredients'];?></td>
<td><?php echo $row['pingredients'];?></td>
<td><?php echo $row['singredients'];?></td>
<td><?php echo $row['prepmethod'];?></td>

</tr>
<?php
	//echo $row['total'];
	while ($name=mysqli_fetch_assoc($query)) {?>

  <tr>
  <td><?php echo $name['rname'];?></td>
<td><?php echo $name['ingredients'];?></td>
<td><?php echo $name['pingredients'];?></td>
<td><?php echo $name['singredients'];?></td>
<td><?php echo $name['prepmethod'];?></td>

</tr>
<?php
	}
}
else
{

}
?>
</table>
</body>
</html>