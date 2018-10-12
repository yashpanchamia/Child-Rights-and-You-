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
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  
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

td, th { border: 1px solid #CCC; height: 30px;text-align: center; } /* Make cells a bit taller */

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
<div style="padding:50px" class="contain" id="home" name="home">
<a href="add_recipe.php" class="btn btn-primary "> Add a new recipe</a>
<a href="recipegen.php" class="btn btn-success "> Generate recipe</a>

<h3><p>Content of Recipes</p></h3>
<table >
  
  <tr>
   




<th width="15%">Recipe</th>

<th width="15%">Ingredients</th>

<th width="15%">Primary-Ingredients</th>

<th width="15%">Secondary-Ingredients</th>

<th width="15%">Edit</th>

<th width="10%">Delete</th>





  </tr>
<?php 
mysql_connect("localhost","root","");
$conn = mysql_select_db("sample");
if(!$conn)
{
  die("error");
}
$sql="SELECT * from recipe";
$result = mysql_query($sql);


while($row = mysql_fetch_array($result)){?>

  <tr>
  <td><?php echo $row['rname'];?></td>
<td><?php echo $row['ingredients'];?></td>
<td><?php echo $row['pingredients'];?></td>
<td><?php echo $row['singredients'];?></td>
<td> <a href="edit_recipe.php?id=<?php echo $row['id'];?>"><input type="button" value="Edit" class="btn btn-danger" width="100%"></a> </td>

<td> <a href="javascript:delete_id_na(<?php echo $row['id'];?>)"><input type="button" value="Delete" class="btn btn-danger" width="100%"></a> </td>

<script>
function delete_id_na(id)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='delete_recipe.php?delete_id='+id;
     }
}
</script>

  </tr>

<?php }  ?>

</table>
</div>
</body>
</html>