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
<?php
include('conn.php');
// get value of id that sent from address bar 
$id=$_GET['delete_id'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM recipe WHERE id='$id'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
echo "Deleted Successfully";
echo "<BR>";
header("Location: adminhome.php");
}

else {
echo "ERROR";
}
?> 

<?php
// close connection 
mysql_close();
?>