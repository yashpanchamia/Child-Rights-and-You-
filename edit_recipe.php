<?php
$conn=mysqli_connect('localhost','root','','alpha');
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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="main.css">

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

     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>ADMIN PANEL</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT CSS -->
     <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />




<style>

</style>
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
    <div class="content-wrapper">
      <div class="container">
          



</br>
      <form action="home_update.php" method="post">
      
           <?php $id=$_GET['id'];  
mysql_connect("localhost","root","");
$conn = mysql_select_db("sample");

            $query="SELECT * FROM recipe WHERE id='$id'";
            $result=mysql_query($query);
            $rows=mysql_fetch_array($result);
            $p_ing=$rows['pingredients'];
            $s_ing=$rows['singredients'];
           ?>

            <label for="title">Recipe Name</label><br/>
            <input type="textbox" name="recipe_name" style="width:100%" value="<?php echo $rows['rname'] ; ?>" >
           
            <input type="hidden" name="updateid" value="<?php echo $id; ?>">
            <br/>        

            <label for="title">Primary Ingredients</label><br/>
            <input type="textbox" name="recipe_name" style="width:100%" value="<?php echo $rows['pingredients'] ; ?>" >
           
        
            <label for="content">Ingredients</label>
            <br/>
            <textarea name="ingredients" style="width:100%" id="ingredients" class="text1" rows="10" placeholder="Ingredients of the recipe"><?php echo $rows['ingredients']; ?></textarea>
            
        
        

        <div class="buttons">
        <br>
          <input type="submit" name="saveChanges" class="btn btn-success btn-lg" value="Save Changes" />
         
        </div>

      </form>
      <br>
 <a href="adminhome.php"><input type="submit" formnovalidate class="btn btn-primary btn-lg" name="cancel" value="Cancel" /></a>
</div>
        </div>
    <!-- CONTENT-WRAPPER SECTION END-->
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>