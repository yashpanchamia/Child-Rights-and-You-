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
<html>
<head>


 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

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

<link rel="stylesheet" type="text/css" href="main.css">
<script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
 



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
        <li><a href="adminhome.php" style="color: black; font-weight: bold;">Go Back </a></li>
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
        <div class="container">
      <form action="" method="post">
        <input type="hidden" name="articleId" value="<?php echo $results['id']; ?>"/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        
            <label for="title">Recipe name</label><br/>
            <input type="text" name="rname" id="title" placeholder="Name of the Recipe" style="align:center;width:100%" required autofocus maxlength="255" >
            <br/>
            <br/>



            <label for="title">Primary Ingredients</label><br/>
            <input type="text" name="pingredients" id="pingredients" placeholder="Name of the Primary Ingredients" style="align:center;width:100%" required autofocus maxlength="255" >
            <br/>
            <br/>



            <label for="content">Ingredients</label>
            <br/>
            <textarea style="width:100%"name="ingredients" id="ingredients" class="text1" rows="10" placeholder="Ingredients of the recipe"></textarea>    
        
        <br>
        <div class="buttons">
          <input type="submit" name="Add Page" class="btn btn-success btn-lg" value="Add Page" />
         
        </div>

      </form>
      <br>
      
      <a href="adminhome.php"><input type="submit" class="btn btn-primary btn-lg" formnovalidate name="cancel" value="Cancel" /></a>
</div>
 </div>

<script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>




<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

$rname=mysql_real_escape_string($_POST['rname']);
$ingredients=mysql_real_escape_string($_POST['ingredients']);
$pingredients=mysql_real_escape_string($_POST['pingredients']);


mysql_connect("localhost","root","");
$conn = mysql_select_db("sample");
if(!empty($_POST['rname']) && ($_POST['ingredients'])){
if (mysql_query("INSERT INTO recipe (rname,ingredients,pingredients) VALUES ('$rname','$ingredients','$pingredients')") === true){
              echo "<h1 align='center'>Recipe added successfully </h1>";
}

}


}


?>

